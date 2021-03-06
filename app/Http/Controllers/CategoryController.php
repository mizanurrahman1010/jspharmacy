<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Response;

class CategoryController extends Controller {

    public function __construct() {
        $this->middleware( 'auth' );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request ) {
        $categories = Category::with( ['creator'] )->orderBy( 'created_at', 'desc' )->get();
        return view( 'dashboard.category.index', compact( ['categories'] ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //return view("dashboard.category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        $data = request()->validate( [
            'category_name' => 'required|unique:categories|min:2',
            'remarks'       => '',
        ] );

        $check = Category::create(
            [
                'category_name' => $request->category_name,
                'remarks'       => $request->remarks,
                'added_by'      => Auth::user()->id,
            ]
        );
        return response()->json( ['success' => 'Product saved successfully.'] );
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show( Category $category ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        $category = Category::find( $id );
        return response()->json( $category );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {
        $validatedData = $request->validate( [
            'category_name' => 'required', //|unique:categories
            'remarks'       => 'max:255',
        ] );

        Category::whereId( $id )->update( $validatedData );
        return response()->json( ['success' => 'Category saved successfully.'] );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        Category::find( $id )->delete();
        return response()->json( ['success' => 'Category deleted successfully.'] );
    }
}
