@extends('layouts.app')

@section('content')

<style>

.profile-cover{
height:220px;
background:linear-gradient(135deg,#556ee6,#6f86ff,#8fa4ff);
border-radius:20px;
}

.profile-card{

background:white;

margin-top:-100px;

padding:40px;

border-radius:20px;

position:relative;

z-index:10;

box-shadow:0 10px 30px rgba(0,0,0,.08);

}

.profile-photo{

width:170px;

height:170px;

border-radius:50%;

object-fit:cover;

border:6px solid white;

margin-top:-110px;

background:white;

box-shadow:0 6px 20px rgba(0,0,0,.15);

}

.profile-name{

font-size:32px;

font-weight:700;

color:#2A3042;

margin-top:20px;

}

.profile-role{

font-size:16px;

color:#556ee6;

margin-bottom:20px;

}

.info-card{

background:#f8f9fc;

padding:25px;

border-radius:15px;

text-align:center;

transition:.3s;

}

.info-card:hover{

transform:translateY(-5px);

box-shadow:0 4px 15px rgba(0,0,0,.08);

}

.info-card h2{

color:#556ee6;

font-weight:700;

}

.social a{

display:inline-flex;

align-items:center;

justify-content:center;

width:45px;

height:45px;

border-radius:50%;

background:#556ee6;

color:white;

margin:5px;

text-decoration:none;

transition:.3s;

}

.social a:hover{

background:#2A3042;

}

</style>



<div class="profile-cover"></div>


<div class="profile-card">

<div class="text-center">

<img

src="{{ asset('images/pajar.jpg') }}"

class="profile-photo">


<h2 class="profile-name">

Pajar Nrdy

</h2>


<div class="profile-role">

Administrator • JarPrabotan

</div>


<p class="text-muted">

Mengelola data perabot, pesanan pelanggan,

laporan PDF, serta monitoring sistem

JarPrabotan.

</p>



<div class="social mt-3">

<a href="#">

<i class="fab fa-facebook-f"></i>

</a>

<a href="#">

<i class="fab fa-instagram"></i>

</a>

<a href="#">

<i class="fab fa-github"></i>

</a>

<a href="#">

<i class="fab fa-linkedin-in"></i>

</a>

</div>

</div>



<hr class="my-5">



<div class="row">

<div class="col-md-4">

<div class="info-card">

<h2>

{{ \App\Models\Perabot::count() }}

</h2>

<p>Total Perabot</p>

</div>

</div>



<div class="col-md-4">

<div class="info-card">

<h2>

@if(class_exists('\App\Models\Order'))

{{ \App\Models\Order::count() }}

@else

0

@endif

</h2>

<p>Total Pesanan</p>

</div>

</div>



<div class="col-md-4">

<div class="info-card">

<h2>

{{ \App\Models\User::count() }}

</h2>

<p>Total User</p>

</div>

</div>

</div>



</div>

@endsection