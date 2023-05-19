<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarPrestasi;

class DaftarPrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     //fungsi untuk menampilkan semua data
    public function index()
    {
        $DaftarPrestasi = DaftarPrestasi::orderBy('created_at', 'DESC')->get();

        return view('daftarPrestasi.index', compact('DaftarPrestasi'));
    }

    /**
     * Show the form for creating a new resource.
     */

     //fungsi untuk merertun view ke form tambah data
    public function create()
    {
        return view('daftarPrestasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */

     //fungsi untuk menambah data ke dalam data base
    public function store(Request $request)
    {
        DaftarPrestasi::create($request->all());

        return redirect()->route('daftarPrestasi')->with('success', 'Prestasi berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */

     //fungsi untuk mereturn view ke tampilan detail
    public function show(string $id)
    {
        $daftarPrestasi = DaftarPrestasi::findOrFail($id);

        return view('daftarPrestasi.show', compact('daftarPrestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */

     //fungsi untuk mereturn view ke tampilan edit
    public function edit(string $id)
    {
        $daftarPrestasi = DaftarPrestasi::findOrFail($id);

        return view('daftarPrestasi.edit', compact('daftarPrestasi'));
    }

    /**
     * Update the specified resource in storage.
     */

     //fungsi untuk mengupdate data
    public function update(Request $request, string $id)
    {
        $daftarPrestasi = DaftarPrestasi::findOrFail($id);

        $daftarPrestasi->update($request->all());

        return redirect()->route('daftarPrestasi')->with('success', 'Prestasi Berhasil Diperbaruhi');
    }

    /**
     * Remove the specified resource from storage.
     */

     //fungsi untuk menghapus data
    public function destroy(string $id)
    {
        $daftarPrestasi = DaftarPrestasi::findOrFail($id);

        $daftarPrestasi->delete();

        return redirect()->route('daftarPrestasi')->with('success', 'Prestasi Berhasil Di Hapus');
    }
}
