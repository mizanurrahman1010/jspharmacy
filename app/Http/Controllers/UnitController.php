<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnitController extends Controller {

    public function __construct() {
        $this->middleware( 'auth' );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $units = Unit::with( ['creator'] )->get();
        return view( 'dashboard.unit.index', compact( ['units'] ) );
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

        request()->validate( [
            'unit_name' => 'required|unique:units|min:2',
        ] );

        $data = $request->all();
        $data['created_by'] = Auth::user()->id;

        $check = Unit::insert( $data );

        $arr = array( 'msg' => 'Something goes to wrong. Please try again later', 'status' => false );

        if ( $check ) {
            $arr = array( 'msg' => 'Successfully Added', 'status' => true );
        }
        return Response()->json( $arr );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show( Unit $unit ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        $unit = Unit::find( $id );
        return response()->json( $unit );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {
        $validatedData = $request->validate( [
            'unit_name' => 'required|unique:units|min:2',
        ] );

        Unit::whereId( $id )->update( $validatedData );
        return response()->json( ['success' => 'Unit saved successfully.'] );
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        Unit::find( $id )->delete();
        return response()->json( ['success' => 'Unit deleted successfully.'] );
    }
}
