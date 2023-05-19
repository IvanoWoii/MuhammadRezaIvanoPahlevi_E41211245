<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarPrestasi;

class ApiPendidikanController extends Controller
{

    //fungsi untuk menampilkan semua data
    public function index()
    {
        $pendidikan = DaftarPrestasi::all();
        return response()->json($pendidikan);
    }

    //fungsi untuk menampilkan data menurut id
    public function show($id)
    {
        $pendidikan = DaftarPrestasi::find($id);
        if (!$pendidikan) {
            return response()->json([
                'message' => 'Pendidikan not found'
            ], 404);
        }
        return response()->json($pendidikan);
    }

    //fungsi untuk menambahkan data ke database
    public function store(Request $request)
    {
        DaftarPrestasi::create($request->all());
        return response()->json([
            'status' => "ok",
            'message' => 'Pendidikan berhasil ditambah',
        ]);
    }

    //fungsi untuk update data
    public function update(Request $request, $id)
    {

        $pendidikan = DaftarPrestasi::find($id);
        $pendidikan->update($request->all());
        if (!$pendidikan) {
            return response()->json([
                'message' => 'Pendidikan not found'
            ], 404);
        }
        return response()->json([
            'status' => "ok",
            'message' => 'Pendidikan berhasil dirubah',
        ]);
    }

    //fungsi untuk menghapus data
    public function destroy($id)
    {
        $pendidikan = DaftarPrestasi::find($id);
        if (!$pendidikan) {
            return response()->json([
                'message' => 'Pendidikan not found'
            ], 404);
        }
        $pendidikan->delete();
        return response()->json([
            'status' => "ok",
            'message' => 'Pendidikan berhasil dihapus',
        ]);
    }
}
