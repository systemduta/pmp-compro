<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Maps;
use Validator;
use DB;

class MapsController extends Controller
{
    public function index()
    {
        $data = Maps::all();
        return response()->json(['data' => $data]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kota' => 'required',
            'y' => 'required',
            'x' => 'required',
            'link' => '',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        DB::beginTransaction();
        $newsGetId=DB::table('maps')->insertGetId([
            'kota' => $request->kota,
            'y' => $request->y,
            'x' => $request->x,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link, 
        ]);
        DB::commit();
        return response()->json(['data' => $newsGetId, 'message' => 'Data berhasil disimpan!']);
    }
}
