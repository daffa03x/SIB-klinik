<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Poliklinik;
use Illuminate\Http\Request;

class PoliklinikController extends Controller
{
    public function index()
    {
        $data = Poliklinik::latest()->get();
        if($data){
        return response()->json([
            'success' => true,
            'message' => 'List Poli',
            'data' => $data
        ],200);
        }else{
            return response()->json([
            'success' => false,
            'message' => 'Gagal Akses',
        ],400);
        }

    }

    public function addPoli(Request $request)
    {
        $nama = $request->nama;
        $deskripsi = $request->deskripsi;
        $image = $request->file('image');
        $nama_photo = date('YmdHis').$image->getClientOriginalName();
        $image->move('images/poliklinik', $nama_photo);
        $photo = 'images/poliklinik/' . $nama_photo;
        
        $saved = Poliklinik::create([
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            // 'image' => ''
            'image' => $photo
        ]);

        if($saved){
            return response([
                'success' => true,
                'message' => 'Data Berhasil Disimpan'
            ], 200);
        }else{
            return response([
               'success' => false,
               'message' => 'Data Gagal Disimpan'
            ],401);
        }
    }
}
