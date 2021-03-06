<?php

namespace App\Http\Controllers;

use App\Category;
use App\MedicineOrder;
use App\MedicineOrderItem;
use App\Pos;
use App\Unit;
use App\User;
use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('storeWithoutAuth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = Category::orderBy('category_name','asc')->get();
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
            $prescriptionName = null;
            if ($request->file('prescription')) {
                request()->validate([
                    'prescription' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
                ]);
                $extension = $request->file('prescription')->extension();
                $prescriptionName = $request->orderCode . '.' . $extension;
                $request->prescription->move(public_path('prescriptions'), $prescriptionName);
            }

            $customer_id = Auth::user()->id; //((Auth::user()->checkUserType() == 'admin')?'':'1');

            $order = new MedicineOrder();
            $order->order_code = $request->orderCode;
            $order->customer_id = $customer_id;

            $result = json_decode($request->userData, true);

            $order->delivery_mobile = $result[1]["value"];
            $order->delivery_address = $result[2]["value"];
            $order->delivery_note = $result[3]["value"];

            $now = date("Y-m-d H:i:s", strtotime("+30 minutes"));
            //$order->delivery_at = $now; //$this->convert_date($now, true, true);

            $order->prescription_image = $prescriptionName;

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
     * Display the specified resource.
     *
     * @param Pos $pos
     * @return Response
     */
    public function show(Pos $pos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Pos $pos
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
     * @param Pos $pos
     * @return void
     */
    public function update(Request $request, Pos $pos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Pos $pos
     * @return void
     */
    public function destroy(Pos $pos)
    {
        //
    }

    public function storeWithoutAuth(Request $request)
    {
        $store_status = $this->store($request);
        //       if ($store_status['code'] == 1){
        //
        //       }
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
