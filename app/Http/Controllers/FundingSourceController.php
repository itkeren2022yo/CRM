<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class FundingSourceController extends Controller
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
    public function create()
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
        $validator = Validator::make($request->all(), [
            "funding_name" => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(),
                HttpFoundationResponse::HTTP_UNPROCESSABLE_ENTITY
            );
        }

        $funding_name = $request->input('funding_name');

        $funding_source = DB::table('tb_funding_source')->insert([
            'funding_name' => $funding_name,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if($funding_source){
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
        $funding_source = DB::table('tb_funding_source')->get();
        if($funding_source){
            return response()->json([
                'success' => true,
                'message' => 'Get Data Berhasil.',
                'data' => $funding_source],201);
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
            "id_funding_source" => ['required'],
            "funding_name" => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(),
                HttpFoundationResponse::HTTP_UNPROCESSABLE_ENTITY
            );
        }

        $id_funding_source = $request->input('id_funding_source');
        $funding_name = $request->input('funding_name');

        $update_funding_source = DB::table('tb_funding_source')
        ->where('id_funding_source',  $id_funding_source)
        ->update([
            'funding_name' => $funding_name,
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        if($update_funding_source){
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
        $delete_funding_source = DB::table('tb_funding_source')->where('id_funding_source','=',$id)->delete();
        if($delete_funding_source){
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
