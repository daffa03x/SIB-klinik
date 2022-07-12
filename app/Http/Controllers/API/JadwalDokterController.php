<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\JadwalDokter;
use Illuminate\Http\Request;

class JadwalDokterController extends Controller
{
    public function index()
    {
        $data = JadwalDokter::latest()->get();
        if($data){
        return response()->json([
            'success' => true,
            'message' => 'List Jadwal Dokter',
            'data' => $data
        ],200);
        }else{
            return response()->json([
            'success' => false,
            'message' => 'Gagal Akses',
        ],400);
        }
    }
}
