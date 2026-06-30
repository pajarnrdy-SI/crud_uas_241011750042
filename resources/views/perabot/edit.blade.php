@extends('layouts.app')

@section('content')

<div class="card">

<div class="card-header text-white"

style="background:#f1b44c">

<h5>

Edit Perabot

</h5>

</div>

<div class="card-body">

<form

action="{{ route('perabot.update',$perabot->id_perabot) }}"

method="POST">

@csrf

@method('PUT')

<div class="mb-3">

<label>

Nama Perabot

</label>

<input

type="text"

name="nama_perabot"

value="{{ $perabot->nama_perabot }}"

class="form-control">

</div>

<div class="mb-3">

<label>

Bahan

</label>

<input

type="text"

name="bahan"

value="{{ $perabot->bahan }}"

class="form-control">

</div>

<div class="mb-3">

<label>

Ukuran

</label>

<input

type="text"

name="ukuran"

value="{{ $perabot->ukuran }}"

class="form-control">

</div>

<div class="mb-3">

<label>

Harga

</label>

<input

type="number"

name="harga"

value="{{ $perabot->harga }}"

class="form-control">

</div>

<div class="mb-3">

<label>

Gambar

</label>

<input

type="text"

name="gambar"

value="{{ $perabot->gambar }}"

class="form-control">

</div>

<button

class="btn btn-primary">

Update

</button>

<a

href="{{ route('perabot.index') }}"

class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

@endsection