<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ward;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class WardController extends Controller
{
    public function __construct() {
        $this->ward         = new Ward();
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
            'message'       => 'Daftar Kelurahan',
            'data'          => $this->ward->getAllData(),
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
            'district_id'       => 'required',
        ], [
            'code.required'         => 'Kode Kelurahan harus diisi.',
            // 'code.unique'       => 'Kode Kelurahan sudah terdaftar.',
            'name.required'         => 'Kelurahan harus diisi.',
            'district_id.required'      => 'Kota harus diisi',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $data = [
                'code'          => $request->code,
                'name'          => $request->name,
                'district_id'    => $request->district_id,
                'version'       => 1,
                'created_at'    => $this->now,
                'updated_at'    => NULL,
            ];

            $insertData = $this->ward->insertData($data);

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
            'message'       => 'Detail Kelurahan',
            'data'          => $this->ward->getData($id),
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
        $find = $this->ward->getData($id);

        $validator = Validator::make($request->all(), [
            'code'          => 'required',
            'name'          => 'required',
            'district_id'    => 'required',
        ], [
            'code.required'         => 'Kode Kelurahan harus diisi.',
            'name.required'         => 'Kelurahan harus diisi.',
            'district_id.required'   => 'Kota harus diisi.'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $data = [
                'code'          => $request->code,
                'name'          => $request->name,
                'district_id'    => $request->district_id,
                'version'       => $find->version+1,
                // 'created_at'    => $this->now,
                'updated_at'    => $this->now,
            ];

            $updateData = $this->ward->updateData($data, $id);

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
        $find = $this->ward->getData($id);

        try {
            $data = [
                'disabled'      => 1,
                // 'created_at'    => $this->now,
                'deleted_at'    => $this->now,
            ];

            $softDeleteData = $this->ward->softDeleteData($data, $id);

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
