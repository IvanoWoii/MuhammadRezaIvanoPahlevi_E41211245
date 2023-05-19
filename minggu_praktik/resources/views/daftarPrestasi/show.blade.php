@extends('layouts.app')

@section('title', 'Data Prestasi')

@section('contents')
    <h1 class="mb-0">Detail Data Prestasi</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="nama" value="{{ $daftarPrestasi->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Prestasi</label>
            <input type="text" name="nama_prestasi" class="form-control" placeholder="nama_prestasi" value="{{ $daftarPrestasi->nama_prestasi }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Bidang Prestasi</label>
            <input type="text" name="bidang_prestasi" class="form-control" placeholder="bidang_prestasi" value="{{ $daftarPrestasi->bidang_prestasi }}" readonly>
        </div>
            <div class="col mb-3">
                <label class="form-label">Tahun Dapat Prestasi</label>
                <input type="text" name="tahun_dapat_prestasi" class="form-control" placeholder="tahun_dapat_prestasi" value="{{ $daftarPrestasi->tahun_dapat_prestasi }}" readonly>
            </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $daftarPrestasi->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $daftarPrestasi->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $daftarPrestasi->updated_at }}" readonly>
        </div>
    </div>
@endsection
