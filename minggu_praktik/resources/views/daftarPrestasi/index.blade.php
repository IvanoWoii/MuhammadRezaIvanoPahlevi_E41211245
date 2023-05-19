@extends('layouts.app')

@section('title', 'List Daftar Prestasi')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar Prestasi</h1>
        <a href="{{ route('daftarPrestasi.create') }}" class="btn btn-primary">Tambah Prestasi</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Nama Prestasi</th>
                <th>Bidang Prestasi</th>
                <th>Tahun Dapat Prestasi</th>
                <th>Deskripsi </th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($DaftarPrestasi->count() > 0)
                @foreach($DaftarPrestasi as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama }}</td>
                        <td class="align-middle">{{ $rs->nama_prestasi }}</td>
                        <td class="align-middle">{{ $rs->bidang_prestasi }}</td>
                        <td class="align-middle">{{ $rs->tahun_dapat_prestasi }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('daftarPrestasi.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('daftarPrestasi.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('daftarPrestasi.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Prestasi Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
