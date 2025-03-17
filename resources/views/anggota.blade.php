@extends('layout')

@section('title', 'Anggota - Koperasi')

@section('content')
    <h2>Daftar Anggota</h2>
    <a href="#" class="btn btn-success mb-3">+ Tambah Anggota</a>
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 bg-danger text-white">
                <h5>Siti Rahmawati</h5>
                <p>Status: Aktif</p>
                <p>Email: siti@example.com</p>
            </div>
        </div>
    </div>
@endsection
