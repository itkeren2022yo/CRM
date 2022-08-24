<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departments;
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
                    'message' => 'Insert Data Berhasil.'
                ]], 201);

        }else{
            return response()->json([
                'data' => [
                  'success' => false,
                    'message' => 'Insert Data Gagal.'
                ]], 504);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $department = DB::table('tb_department')->get();
        if($department){
            return response()->json([
                'success' => true,
                'message' => 'Get Data Berhasil.',
                'data' => $department],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Get Data Gagal.',
                'data' => ''
            ],504);    
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            "id_department" => ['required'],
            "department_name" => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(),
                HttpFoundationResponse::HTTP_UNPROCESSABLE_ENTITY
            );
        }

        $id_department = $request->input('id_department');
        $request_name = $request->input('department_name');

        $update_department = DB::table('tb_department')
        ->where('id_department',  $id_department)
        ->update([
            'department_name' => $request_name,
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if($update_department){
            return response()->json([
                'success' => true,
                'message' => 'Update Data Berhasil.'],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Update Data Gagal.'],501);
        }
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
        $delete_var = Departments::find($id);
        $delete_department = $delete_var->delete();
        if($delete_department){
            return response()->json([
                'success' => true,
                'message' => 'Delete Data Berhasil.'],201);
        }else{
            return response()->json([
                'success' => true,
                'message' => 'Delete Data Gagal.'],501);
        }
    }
}
