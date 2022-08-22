<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\Validator;
use DB;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validator = Validator::make($request->all(), [
            "department_name" => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(),
                HttpFoundationResponse::HTTP_UNPROCESSABLE_ENTITY
            );
        }

        $department_name = $request->input('department_name');

        $department = DB::table('tb_department')->insert([
            'department_name' => $department_name,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if($department){
            return response()->json([
                'data' => [
                  'success' => true,
                    'message' => 'Insert Berhasil !'
                ]], 201);

        }else{
            return response()->json([
                'data' => [
                  'success' => false,
                    'message' => 'Insert Gagal !'
                ]], 504);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
