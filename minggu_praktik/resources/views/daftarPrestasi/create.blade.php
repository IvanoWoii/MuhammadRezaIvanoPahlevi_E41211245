@extends('layouts.app')

@section('title', 'Tambah Data Prestasi')

@section('contents')
    <h1 class="mb-0">Tambah Prestasi</h1>
    <hr />
    <form action="{{ route('daftarPrestasi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <input type="text" name="nama_prestasi" class="form-control" placeholder="Nama_Prestasi">
            </div>
            <div class="col">
                <input type="text" name="bidang_prestasi" class="form-control" placeholder="Bidang_prestasi">
            </div>
            <div class="col">
                <input type="text" name="tahun_dapat_prestasi" class="form-control" placeholder="tahun_dapat_prestasi">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
