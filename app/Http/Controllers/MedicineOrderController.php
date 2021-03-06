<?php

namespace App\Http\Controllers;

use App\Category;
use App\MedicineOrder;
use App\MedicineOrderItem;
use App\Unit;
use App\User;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MedicineOrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $status = (isset($request->status)) ? $request->status : 'new';
        $orders = MedicineOrder::where('status', $status)->with(['customer'])->orderBy('created_at', 'desc')->get();

        return view('dashboard.order.index', compact(['orders']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\MedicineOrder $medicineOrder
     * @return Response
     */
    public function show(MedicineOrder $medicineOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return Response
     */
    public function edit($id)
    {
        $orders = MedicineOrder::findOrFail($id);
        //return view('dashboard.order.ajax.orderdata', compact(['orders']));
        return response()->json($orders);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\MedicineOrder $medicineOrder
     * @return Response
     */
    public function update(Request $request, MedicineOrder $medicineOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\MedicineOrder $medicineOrder
     * @return Response
     */
    public function destroy(MedicineOrder $medicineOrder)
    {
        //
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function orderdetails($id)
    {
        $orderInfo = MedicineOrder::with(['orderItems', 'customer'])
            ->where('id', '=', $id)
            ->get();

        $productsInfo = MedicineOrderItem::with(['products', 'products.productUnit'])
            ->where('order_id', '=', $id)->get();

        $units = Unit::all();

        $finalData = [$orderInfo, $productsInfo, $units];
        return response()->json($finalData);
    }

    /**
     * @param Request $request
     */
    public function orderaccept(Request $request)
    {
        DB::transaction(function () use ($request) {

            $order = MedicineOrder::find($request->orderId);
            $order->accepted_by = Auth::user()->id;
            $order->status = "accepted";
            $order->accepted_at = date("Y-m-d H:i:s"); //$standard_date;
            $order->save();

            foreach ($request->items as $item) {
                $orderItem = MedicineOrderItem::find($item["id"]);
                $orderItem->batch = $item["batch"];
                $orderItem->expired = $this->convert_date($item["expired"], true, false);
                $order->updated_at = date("Y-m-d H:i:s");
                $orderItem->save();
            }
            return response()->json(['code' => '1', 'success' => 'Order Item Update successfully.']);
        });
    }

    /**
     * @param Request $request
     */
    public function ordercancel(Request $request)
    {
        DB::transaction(function () use ($request) {
            $order = MedicineOrder::find($request->orderId);
            $order->status = "cancelled";
            $order->canceled_by = Auth::user()->id;
            $order->canceled_at = date("Y-m-d H:i:s");
            $order->save();

            return response()->json(['code' => '1', 'success' => 'Order Item Update successfully.']);
        });
    }

    /**
     * @param Request $request
     */
    public function orderdelivery(Request $request)
    {
        $order = MedicineOrder::find($request->orderId);
        $order->shipped_by = Auth::user()->id;
        $order->delivery_by = $request->delivery_by;
        $order->status = "accepted";
        $order->shipped_at = date("Y-m-d H:i:s");
        //$order->delivery_at = date( 'Y-m-d H:i:s' );
        $order->save();

        return response()->json(['code' => '1', 'success' => 'Order Item Delivered successfully.']);
        //} );
    }

    /**
     * @param $id
     */
    public function orderPdf($id)
    {
        $orderInfo = MedicineOrder::with(['orderItems', 'customer'])
            ->where('id', '=', $id)
            ->get();

        $productsInfo = MedicineOrderItem::with(['products', 'products.products_category'])
            ->where('order_id', '=', $id)->get();

        $options = new Options();
        $options->setIsRemoteEnabled(true);
        $dompdf = new Dompdf($options);

        $html = view('layouts.pdf', compact(['orderInfo', 'productsInfo']));

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', "portrait");
        $dompdf->render();
        $dompdf->stream("dompdf_out.pdf", ["Attachment" => false]);
        exit(0);
    }

    public function prescription($id)
    {
        $orderInfo = MedicineOrder::where('id', '=', $id)->get();
        return view('dashboard.order.prescription', compact(['orderInfo']));
    }


    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function listOfOrders(Request $request)
    {
        $status = (isset($request->status)) ? $request->status : 'new';
        $delivery_man_list = User::where('user_type', 'delivery_man')->get();

        if (Auth::user()->checkUserType() == 'admin') {
            $orders = MedicineOrder::where('status', $status)->orderBy('created_at', 'desc')->get();
        } else if (Auth::user()->checkUserType() == 'delivery_man') {
            if ($status == "new") {
                $orders = MedicineOrder::where('status', 'accepted')
                    ->where('delivery_by', '=', Auth::user()->id)
                    ->orderBy('shipped_at', 'desc')->get();
            } else if ($status == "accepted") {
                $orders = MedicineOrder::where('status', 'processing')
                    ->where('delivery_by', '=', Auth::user()->id)
                    ->orderBy('shipped_at', 'desc')->get();
            } else if ($status == "processing") {
                $orders = MedicineOrder::where('status', 'ready')
                    ->where('delivery_by', '=', Auth::user()->id)
                    ->orderBy('shipped_at', 'desc')->get();
            } else if ($status == "ready") {
                $orders = MedicineOrder::where('status', 'ready')
                    ->where('delivery_by', '=', Auth::user()->id)
                    ->orderBy('shipped_at', 'desc')->get();
            } else if ($status == "delivered") {
                $orders = MedicineOrder::where('status', 'delivered')
                    ->where('delivery_by', '=', Auth::user()->id)
                    ->orderBy('shipped_at', 'desc')->get();
            }
        } else {
            if ($status == "new") {
                $orders = MedicineOrder::where('status', 'new')
                    ->where('customer_id', '=', Auth::user()->id)
                    ->orderBy('shipped_at', 'desc')->get();
            } elseif ($status == "cancelled") {
                $orders = MedicineOrder::where('status', 'cancelled')
                    ->where('customer_id', '=', Auth::user()->id)
                    ->orderBy('shipped_at', 'desc')->get();
            } elseif ($status == "delivered") {
                $orders = MedicineOrder::where('status', 'delivered')
                    ->where('customer_id', '=', Auth::user()->id)
                    ->orderBy('shipped_at', 'desc')->get();
            } else {
                $orders = MedicineOrder::whereNotIn('status', ['new', 'delivered', 'cancelled'])
                    ->where('customer_id', '=', Auth::user()->id)
                    ->orderBy('created_at', 'desc')->get();
            }
        }

        $units = Unit::all();
        $categories = Category::all();

        return view('dashboard.order.index', compact(['orders', 'delivery_man_list', 'units', 'categories']));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function orderprocess(Request $request)
    {
        $order = MedicineOrder::find($request->orderId);

        $order->status = $request->orderStatus;

        if ($request->orderStatus == "delivered") {
            $order->delivery_at = date("Y-m-d H:i:s");
        }

        $order->save();
        return response()->json(['code' => '1', 'success' => 'Order Status Changed to ' . $request->orderStatus]);
    }

    /**
     * @param $date
     * @param bool $zone
     * @param bool $full
     * @return false|string
     */
    private function convert_date($date, $zone = true, $full = true)
    {
        if ($zone) {
            date_default_timezone_set("Asia/Dhaka");
        }
        $d = strtotime($date . date("h:i:s"));
        if ($full) {
            return date("Y-m-d h:i:s", $d);
        } else {
            return date("Y-m-d", $d);
        }
    }
}
