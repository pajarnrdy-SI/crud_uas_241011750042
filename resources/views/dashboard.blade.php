@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-md-3">

        <div class="card p-4">

            <h6>Total Perabot</h6>

            <h2>

                {{ \App\Models\Perabot::count() }}

            </h2>

        </div>

    </div>


    <div class="col-md-3">

        <div class="card p-4">

            <h6>Total User</h6>

            <h2>

                {{ \App\Models\User::count() }}

            </h2>

        </div>

    </div>


    <div class="col-md-3">

        <div class="card p-4">

            <h6>Total Nilai Perabot</h6>

<h2>

Rp {{ number_format(\App\Models\Perabot::sum('harga')) }}

</h2>
        </div>

    </div>


    <div class="col-md-3">

        <div class="card p-4">

            <h6>Total Order</h6>

            <h2>

                @if(class_exists('\App\Models\Order'))

                    {{ \App\Models\Order::count() }}

                @else

                    0

                @endif

            </h2>

        </div>

    </div>

</div>



<div class="row mt-4">

    <div class="col-md-6">

        <div class="card">

            <div class="card-header">

                Data Perabot Terbaru

            </div>

            <div class="card-body">

                <table class="table">

                    <thead>

                    <tr>

                        <th>Nama</th>

                        <th>Bahan</th>

                        <th>Ukuran</th>

                        <th>Harga</th>

                    </tr>

                    </thead>

                    <tbody>

                    @foreach(\App\Models\Perabot::latest()->take(5)->get() as $p)

                    <tr>

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

                            Rp {{ number_format($p->harga) }}

                        </td>

                    </tr>

                    @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>



    <div class="col-md-6">

        <div class="card">

            <div class="card-header">

                Pesanan Terbaru

            </div>

            <div class="card-body">

                @if(class_exists('\App\Models\Order'))

                <table class="table">

                    <thead>

                    <tr>

                        <th>Nama</th>

                        <th>Produk</th>

                        <th>Jumlah</th>

                        <th>Status</th>

                    </tr>

                    </thead>

                    <tbody>

                    @foreach(\App\Models\Order::latest()->take(5)->get() as $o)

                    <tr>

                        <td>

                            {{ $o->nama }}

                        </td>

                        <td>

{{ $o->perabot->nama_perabot ?? '-' }}

</td>
                        <td>

                            {{ $o->jumlah }}

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

                @else

                <div class="text-center text-muted">

                    Belum ada data pesanan

                </div>

                @endif

            </div>

        </div>

    </div>

</div>



<div class="row mt-4">

    <div class="col-md-6">

        <div class="card p-4">

            <h6>Total Pendapatan</h6>

            <h2>

                @if(class_exists('\App\Models\Order'))

                    Rp {{ number_format(\App\Models\Order::sum('total')) }}

                @else

                    Rp 0

                @endif

            </h2>

        </div>

    </div>



    <div class="col-md-6">

        <div class="card p-4">

            <h6>Status Sistem</h6>

            <h5 class="text-success">

                Sistem Aktif

            </h5>

        </div>

    </div>

</div>

@endsection