<?php

namespace App\Http\Controllers\API;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendaftaranController extends Controller
{
    public function index()
    {
        $data = Pendaftaran::latest()->get();

        if($data){
        return response()->json([
            'success' => true,
            'message' => 'List Pendaftaran',
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
