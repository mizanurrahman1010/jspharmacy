<?php

namespace App\Http\Controllers;

use App\MedicineOrder;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware( 'auth' );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $newOrders = MedicineOrder::all()
            ->where( 'status', '=', 'new' )
            ->where( 'created_at', '=', date( 'Y-m-d' ) )
            ->count();
        return view( 'home', compact( ['newOrders'] ) );
    }
}
