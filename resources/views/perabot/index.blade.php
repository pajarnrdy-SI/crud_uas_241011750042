@extends('layouts.app')

@section('content')

<div class="card">

<div class="card-header bg-white">

<div class="d-flex justify-content-between align-items-center">

<h4>

Data Perabot

</h4>

<div>

<a href="{{ route('perabot.create') }}"

class="btn btn-primary">

Tambah Data

</a>

<a href="{{ route('perabot.exportPdf') }}"

class="btn btn-dark">

PDF

</a>

</div>

</div>

</div>

<div class="card-body">

<table class="table table-hover">

<thead>

<tr>

<th>ID</th>

<th>Gambar</th>

<th>Nama</th>

<th>Bahan</th>

<th>Ukuran</th>

<th>Harga</th>

<th>Aksi</th>

</tr>

</thead>

<tbody>

@foreach($perabots as $p)

<tr>

<td>

{{ $p->id_perabot }}

</td>

<td>

@if($p->gambar)

<img

src="{{ asset('storage/'.$p->gambar) }}"

width="60"

height="60"

style="border-radius:10px;object-fit:cover;">

@endif

</td>

<td>

{{ $p->nama_perabot }}

</td>

<td>

{{ $p->bahan }}

</td>

<td>

{{ $p->ukuran }}

</td>

<td>

Rp{{ number_format($p->harga,0,',','.') }}

</td>

<td>

<a

href="{{ route('perabot.edit',$p->id_perabot) }}"

class="btn btn-warning btn-sm">

Edit

</a>

<form

action="{{ route('perabot.destroy',$p->id_perabot) }}"

method="POST"

class="d-inline">

@csrf

@method('DELETE')

<button

class="btn btn-danger btn-sm">

Hapus

</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>

@endsection