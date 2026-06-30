@extends('layouts.app')

@section('content')

<div class="container">

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card">

<div class="card-header">

<h4>

Form Pemesanan

</h4>

</div>

<div class="card-body">

<form action="{{ route('order.store') }}"
method="POST">

@csrf

<input type="hidden"

name="id_perabot"

value="{{ $perabot->id_perabot }}">


<div class="mb-3">

<label>

Nama Pemesan

</label>

<input

type="text"

name="nama"

class="form-control"

required>

</div>



<div class="mb-3">

<label>

Nomor Telepon

</label>

<input

type="text"

name="telepon"

class="form-control"

required>

</div>



<div class="mb-3">

<label>

Alamat

</label>

<textarea

name="alamat"

class="form-control"

rows="3"

required>

</textarea>

</div>



<div class="mb-3">

<label>

Produk

</label>

<input

class="form-control"

readonly

value="{{ $perabot->nama_perabot }}">

</div>



<div class="mb-3">

<label>

Harga Satuan

</label>

<input

class="form-control"

readonly

value="Rp {{ number_format($perabot->harga,0,',','.') }}">

</div>



<div class="mb-3">

<label>

Jumlah

</label>

<input

type="number"

name="jumlah"

class="form-control"

min="1"

required>

</div>



<button

class="btn btn-primary">

<i class="fa-solid fa-cart-shopping me-2"></i>

Pesan Sekarang

</button>


<a href="{{ route('home') }}"

class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

</div>

</div>

</div>

@endsection