@extends('layouts.app')

@section('content')

<div class="card">

<div class="card-header">

Data Pesanan

</div>

<div class="card-body">

<table class="table">

<thead>

<tr>

<th>ID</th>

<th>Pemesan</th>

<th>Produk</th>

<th>Jumlah</th>

<th>Total</th>

<th>Status</th>

</tr>

</thead>

<tbody>

@foreach($orders as $o)

<tr>

<td>{{ $o->id }}</td>

<td>{{ $o->nama }}</td>

<td>{{ $o->perabot->nama_perabot ?? '-' }}</td>

<td>{{ $o->jumlah }}</td>

<td>

Rp {{ number_format($o->total) }}

</td>

<td>

<span class="badge bg-warning">

{{ $o->status }}

</span>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>

@endsection