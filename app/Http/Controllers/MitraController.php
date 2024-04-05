<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;

class MitraController extends Controller
{
    public function index() {
        $mitra = Mitra::all();
        return response()->json($mitra);
    }

    public function store(Request $request) {
        $mitra = new Mitra;
        $mitra->nama_mitra = $request->nama_mitra;
        $mitra->bep_mitra = $request->bep_mitra;
        $mitra->hrg_mulai_mitra = $request->hrg_mulai_mitra;
        $mitra->desc_mitra = $request->desc_mitra;
        $mitra->cabang_mitra = $request->cabang_mitra;
        $mitra->save();
        return response()->json([
            'message' => 'Data Mitra Tersimpan',
            $mitra
        ], 201);
    }

    public function find($id) {
        $mitra = Mitra::find($id);
        if (!empty($mitra)) {
            return response()->json($mitra);
        } else {
            return response()->json([
                'message' => 'Mitra tidak ditemukan'
            ], 404);
        }
    }
    
}
