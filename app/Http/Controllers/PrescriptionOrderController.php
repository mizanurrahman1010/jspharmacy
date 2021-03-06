<?php

namespace App\Http\Controllers;

use App\Category;
use App\MedicineOrder;
use App\MedicineOrderItem;
use App\Pos;
use App\PrescriptionOrder;
use App\Products;
use App\Unit;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PrescriptionOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = Category::latest()->get();
        $units = Unit::latest()->get();

        $customer = null;
        if (Auth::user()->user_type === 'customer') {
            $customer = User::find(Auth::user()->id);
        }
        return view("dashboard.pos.index", compact(['categories', 'customer', 'units']));
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
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {

            $orderId = $request['id'];

            $existingOrder = MedicineOrderItem::select(['order_id', 'product_id'])->where('order_id', $orderId)->get();

            MedicineOrderItem::where('order_id', $orderId)->delete();

            $result = json_decode($request->userData, true);

            $order = MedicineOrder::find($orderId);
            $order->delivery_note = $result[3]["value"] ?? "";
            $order->save();

            $order_items = json_decode($request->orderItems, false);

            if (sizeof($order_items) > 0) {
                $finalItems = [];
                foreach ($order_items as $item) {
                    $prescriptionItem = 1;
                    foreach ($existingOrder as $ordItm) {
                        if ($item->id == $ordItm->product_id) {
                            $prescriptionItem = 0;
                        }
                    }
                    $tmp_item = [
                        "order_id" => $orderId,
                        "product_id" => $item->id,
                        "quantity" => $item->qty,
                        "rate" => $item->rate,
                        "unit" => $item->unit,
                        "mrp" => $item->mrp,
                        "prescriptionItem" => $prescriptionItem
                    ];
                    array_push($finalItems, $tmp_item);
                }

                MedicineOrderItem::insert($finalItems);
            }

            return response()->json(['code' => '1', 'success' => 'Order Updated successfully.']);
        });
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @return void
     */
    public function show(Request $request)
    {
        DB::transaction(function () use ($request) {

            $customer_id = Auth::user()->id;

            $order = new MedicineOrder();

            $order->order_code = $request->orderCode;

            $result = json_decode($request->userData, true);

            $order->delivery_note = $result[3]["value"];

            $now = date("Y-m-d H:i:s", strtotime("+30 minutes"));
            $order->delivery_at = $now;

            $order->status = (((Auth::user()->checkUserType() == 'admin')) ? "accepted" : "new");
            $order->save();

            $order_items = json_decode($request->orderItems, false);

            if (sizeof($order_items) > 0) {
                $order_id = $order->id;
                $finalItems = [];
                foreach ($order_items as $item) {
                    $tmp_item = [
                        "order_id" => $order_id,
                        "product_id" => $item->id,
                        "quantity" => $item->qty,
                        "rate" => $item->rate,
                        "unit" => $item->unit,
                        "mrp" => $item->mrp,
                    ];
                    array_push($finalItems, $tmp_item);
                }
                MedicineOrderItem::insert($finalItems);
            }

            return response()->json(['code' => '1', 'success' => 'Order Presented successfully.']);
        });
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Pos $pos
     * @return Response
     */
    public function edit(Pos $pos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param \App\Pos $pos
     * @return Response
     */
    public function update(Request $request, Pos $pos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Pos $pos
     * @return Response
     */
    public function destroy(Pos $pos)
    {
        //
    }


    public function prescriptionOrder($orderId)
    {
        $categories = Category::orderBy('category_name', 'asc')->get();
        $units = Unit::latest()->get();

        //$orderInfo = MedicineOrder::with(['customer', 'orderItems'])->findOrFail($orderId);
        //$orderDetails = $orderInfo->toJson();
        $orderDetails = MedicineOrder::with(['customer', 'orderItems'])->findOrFail($orderId);

        $customer = null;
        if (Auth::user()->user_type === 'customer') {
            $customer = User::find(Auth::user()->id);
        }
        return view("dashboard.prescription-order.index", compact(['categories', 'customer', 'units', 'orderDetails']));

    }


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
