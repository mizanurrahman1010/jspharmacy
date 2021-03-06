<?php

namespace App\Http\Controllers;

use App\Products;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\Str;

class EmployeeController extends Controller
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
        $employees = null;
        $employees = User::where('user_type', '!=', 'customer')->get();
        return view('dashboard.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'numeric', 'regex:/^(01[3-9]\d{8})$/', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'address' => ['required', 'string', 'max:255', 'nullable'],
        ]);

        if ($validator->passes()) {

            User::create([
                'name' => $request['name'],
                'mobile' => $request['mobile'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'user_type' => $request['user_type'],
                'status' => $request['status'],
                'geo_address' => $request['address'],


//                'perm_add_house'         => $request['perm_add_house'],
//                'perm_add_road'          => $request['perm_add_road'],
//                'perm_add_ward'          => $request['perm_add_ward'],
//                'perm_add_para'          => $request['perm_add_para'],
//                'perm_add_district_city' => $request['perm_add_district_city'],

            ]);

            return response()->json(['success' => 'Added new records.'],201);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $employee = User::find($id);
        //  return $employee->toJson();
        return view('dashboard.employee.edit', compact(['employee', 'id']));
        //return response()->json($employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {

        $updateData = User::find($id);

        $inputData = [
            'name' => ['required', 'string', 'max:255'],
            'geo_address' => ['required', 'string', 'max:255', 'nullable'],
            'user_type' => ['required'],
            'status' => ['required'],
        ];

        if ($updateData['mobile'] != $request['mobile'] || $updateData['mobile'] == null) {
            $inputData = ['mobile' => ['required', 'numeric', 'unique:users', 'regex:/^(01[3-9]\d{8})$/']];
        }
        if ($updateData['email'] != $request['email']) {
            $inputData = ['email' => ['required', 'email', 'unique:users']];
        }

        $validator = Validator::make($request->all(), $inputData);

        if ($validator->passes()) {

            $updateData['name'] = $request['name'];
            $updateData['geo_address'] = $request['geo_address'];
            $updateData['user_type'] = $request['user_type'];
            $updateData['status'] = $request['status'];
            $updateData['mobile'] = $request['mobile'];
            $updateData['email'] = $request['email'];
            $updateData->save();

            return response()->json(['success' => 'User Data Updated.']);
        }

        return response()->json(['error' => $validator->errors()->all()], 406);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return response()->json(['success' => 'User deleted successfully.']);
    }
}
