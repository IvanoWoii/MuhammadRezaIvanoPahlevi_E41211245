@extends('layouts.app')

@section('title', 'Edit Daftar Prestasi')

@section('contents')
    <h1 class="mb-0">Edit Prestasi</h1>
    <hr />
    <form action="{{ route('daftarPrestasi.update', $daftarPrestasi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $daftarPrestasi->nama }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama Prestasi</label>
                <input type="text" name="nama_prestasi" class="form-control" placeholder="nama_prestasi" value="{{ $daftarPrestasi->nama_prestasi }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Bidang Prestasi</label>
                <input type="text" name="bidang_prestasi" class="form-control" placeholder="bidang_prestasi" value="{{ $daftarPrestasi->bidang_prestasi }}" >
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">Tahun Dapat Prestasi</label>
                    <input type="text" name="tahun_dapat_prestasi" class="form-control" placeholder="tahun_dapat_prestasi" value="{{ $daftarPrestasi->tahun_dapat_prestasi }}" >
                </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $daftarPrestasi->description }}</textarea>
            </div>
        </div>
        </div>
        <div class="col mb-3">
            <div class="class-center">
                <button class="btn btn-warning">Update</button>
            </div>
    </form>
@endsection
