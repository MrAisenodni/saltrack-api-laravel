<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class CityController extends Controller
{
    public function __construct() {
        $this->city         = new City();
        $this->now          = Carbon::now()->toDateTimeString();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = [
            'message'       => 'Daftar Kota',
            'data'          => $this->city->getAllData(),
        ];

        return response()->json($response, Response::HTTP_OK);
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
            'code'          => 'required',
            'name'          => 'required',
            'province_id'    => 'required',
        ], [
            'code.required'         => 'Kode Kota harus diisi.',
            // 'code.unique'       => 'Kode Kota sudah terdaftar.',
            'name.required'         => 'Kota harus diisi.',
            'province_id.required'   => 'Provinsi harus diisi',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $data = [
                'code'          => $request->code,
                'name'          => $request->name,
                'province_id'    => $request->province_id,
                'version'       => 1,
                'created_at'    => $this->now,
                'updated_at'    => NULL,
            ];

            $insertData = $this->city->insertData($data);

            $response = [
                'message'       => 'Data berhasil ditambahkan.',
                'data'          => $data,
            ];

            return response()->json($response, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response()->json([
                'message'       => "Failed " . $e->errorInfo,
            ]);
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
        $response = [
            'message'       => 'Detail Kota',
            'data'          => $this->city->getData($id),
        ];

        return response()->json($response, Response::HTTP_OK);
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
    public function update(Request $request, $id)
    {
        $find = $this->city->getData($id);

        $validator = Validator::make($request->all(), [
            'code'          => 'required',
            'name'          => 'required',
            'province_id'    => 'required',
        ], [
            'code.required'         => 'Kode Kota harus diisi.',
            'name.required'         => 'Kota harus diisi.',
            'province_id.required'   => 'Provinsi harus diisi.'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $data = [
                'code'          => $request->code,
                'name'          => $request->name,
                'province_id'    => $request->province_id,
                'version'       => $find->version+1,
                // 'created_at'    => $this->now,
                'updated_at'    => $this->now,
            ];

            $updateData = $this->city->updateData($data, $id);

            $response = [
                'message'       => 'Data berhasil diubah.',
                'data'          => $data,
            ];

            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message'       => "Failed " . $e->errorInfo,
            ]);
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
        $find = $this->city->getData($id);

        try {
            $data = [
                'disabled'      => 1,
                // 'created_at'    => $this->now,
                'deleted_at'    => $this->now,
            ];

            $softDeleteData = $this->city->softDeleteData($data, $id);

            $response = [
                'message'       => 'Data berhasil dihapus.',
                'data'          => $data,
            ];

            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message'       => "Failed " . $e->errorInfo,
            ]);
        }
    }
}
