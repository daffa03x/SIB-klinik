<?php

namespace App\Http\Controllers\API;

use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PasienController extends Controller
{
    public function index()
    {
        $data = Pasien::latest()->get();
        if($data){
        return response()->json([
            'success' => true,
            'message' => 'List Pasien',
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
