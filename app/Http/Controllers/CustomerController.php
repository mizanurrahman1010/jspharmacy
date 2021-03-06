<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use Illuminate\Http\Request;

class CustomerController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show( Customer $customer ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit( Customer $customer ) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Customer $customer ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy( Customer $customer ) {
        //
    }

    public function updateLocation( Request $request, $id ) {
        //DB::transaction( function () use ( $request, $id ) {
        $user = User::find( $id );
        $geo_location = $request->lat . ',' . $request->lng;
        $user->geo_location = $geo_location;
        $user->geo_address = $request->geo_address;
        $user->updated_at = date( "Y-m-d H:i:s" );
        $user->save();

        return response()->json( ['code' => '1', 'success' => 'Location Changed Successfully.'] );
        //} );
    }
}
