<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use App\Products;
use App\Unit;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DataTables;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('productsByCategory');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Response
     * @throws Exception
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $products = Products::with(['products_category', 'creator', 'products_unit']);

            return datatables()->of($products)
                ->addIndexColumn()
                ->editColumn('category', function ($row) {
                    return $row->products_category->category_name ?? 'N/F';
                })
                ->editColumn('rate', function ($row) {
                    $rate = number_format($row->rate ?? 0, 2, '.', '');
                    $txt = ($row->products_unit != null) ? $row->products_unit->unit_name ?? '' : '';
                    return $rate . ' / ' . $txt;
                })
                ->editColumn('short_code', function ($row) {
                    return $row->short_code ?? '';
                })
                ->editColumn('added_by', function ($row) {
                    return $row->creator->name ?? 'N/F';
                })
                ->addColumn('action', function ($row) {
                    return view('dashboard.products.parts.action', compact('row'));
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        $units = Unit::all();
        $categories = Category::orderBy('category_name', 'asc')->get();
        return view('dashboard.products.index', compact(['categories', 'units']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
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
        $data = request()->validate([
            'product_name' => 'required|unique:products|min:2',
            'category' => 'required',
            'rate' => 'required|gt:0',
            'unit' => 'required',
        ]);

        $product = Products::updateOrCreate(
            ['id' => $request->product_id],
            [
                'product_name' => $request->product_name,
                'category' => $request->category,
                'rate' => $request->rate,
                'unit' => $request->unit,
                'detail' => ((isset($request->detail)) ? $request->detail : ""),
                'short_code' => ((isset($request->short_code)) ? $request->short_code : ""),
                'product_status' => ((isset($request->product_status)) ? $request->product_status : 1),
                'added_by' => ((isset($request->added_by)) ? $request->added_by : Auth::user()->id),
            ]
        );

        return response()->json(['success' => 'Product saved successfully.', 'id' => $product->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Products $products
     * @return Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Products $products
     * @return Response
     */
    public function edit($id)
    {
        $product = Products::find($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'product_name' => 'required',
            'unit' => 'required',
            'rate' => 'required|numeric',
            'category' => 'required|numeric',
            'detail' => 'max:255',
        ]);

        $updateData = $request->all();
        unset($updateData['product_id']);
        // product_id
        Products::whereId($id)->update($updateData);
        return response()->json(['success' => 'Product saved successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        Products::find($id)->delete();
        return response()->json(['success' => 'Product deleted successfully.']);
    }

    public function productsByCategory($category)
    {

        //$products = DB::table( 'products' )->where( 'category', '=', $category )->get();

        $products = Products::where('category', '=', $category)
            ->where('product_status', '=', '1')
            ->with(['productUnit'])
            ->get();

        //dd( $products );
        $units = Unit::get();
        $data = [$products, $units];

        return response()->json($data);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function getProducts(Request $request)
    {


        $search = $request['search'];
        //echo $request['category'];
        $products = [];

        if ($search != '') {
            $productsList = Products::orderby('product_name', 'asc')
                ->where('category', '=', $request['category'])
                ->where('product_status', '=', '1')
                ->where('product_name', 'like', $search . '%')
                ->with(['productUnit','products_category'])->get();
        } else {
            $productsList = Products::orderby('product_name', 'asc')
                ->where('category', '=', $request['category'])
                ->where('product_status', '=', '1')
                ->where('product_name', 'like', 'A%')
                ->with(['productUnit','products_category'])->get();
        }

        if (sizeof($productsList) > 0) {
            foreach ($productsList as $pro) {
                $products[] = array(
                    'cat_id'=>$pro->category,                                   // Product Category ID
                    'category'=>$pro->products_category->category_name??'',     // Product Category
                    "id" => $pro->id,                                           // Product ID
                    "text" => $pro->product_name,                               // Product Name
                    "rate"=>$pro->rate,                                         // Product Rate
                    "unit"=>$pro->unit,                                         // Product Unit
                    "qty"=>'1',                                                 // Product Quantity
                    "mrp"=>'1',                                                 // Product MRP
                );
            }
        }

         //dd($products);

        $data = ["products"=>$products,"units"=> Unit::get()];

        return response()->json($data);
    }

}
