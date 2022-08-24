<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class WorkSubsectionController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "work_name" => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(),
                HttpFoundationResponse::HTTP_UNPROCESSABLE_ENTITY
            );
        }

        $work_name = $request->input('work_name');

        $work_subsection = DB::table('tb_work_subsection')->insert([
            'work_name' => $work_name,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if($work_subsection){
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
        $work_subsection = DB::table('tb_work_subsection')->get();
        if($work_subsection){
            return response()->json([
                'success' => true,
                'message' => 'Get Data Berhasil.',
                'data' => $work_subsection],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Get Data Gagal.',
                'data' => ''
            ],504);    
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "id_work_subsection" => ['required'],
            "work_name" => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(),
                HttpFoundationResponse::HTTP_UNPROCESSABLE_ENTITY
            );
        }

        $id_work_subsection = $request->input('id_work_subsection');
        $work_name = $request->input('work_name');

        $update_work_subsection = DB::table('tb_work_subsection')
        ->where('id_work_subsection',  $id_work_subsection)
        ->update([
            'work_name' => $work_name,
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if($update_work_subsection){
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
        $delete_work_subsection = DB::table('tb_work_subsection')->where('id_work_subsection','=',$id)->delete();
        if($delete_work_subsection){
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
