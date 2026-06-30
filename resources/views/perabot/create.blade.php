@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Tambah Perabot</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('perabot.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Perabot</label>
                <input type="text" name="nama_perabot" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Bahan</label>
                <input type="text" name="bahan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Ukuran</label>
                <input type="text" name="ukuran" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success me-2">Simpan</button>
                <a href="{{ route('perabot.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
