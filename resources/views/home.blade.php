<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1">

<title>JarPrabotan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<style>

body{
background:#f5f7fb;
font-family:'Segoe UI',sans-serif;
}

/* Navbar */

.navbar{
background:#2A3042;
}

.navbar-brand{
font-size:24px;
font-weight:700;
}

/* Hero */

.hero{

padding:90px 0;

background:
linear-gradient(
135deg,
#556EE6,
#7986FF
);

color:white;

}

.hero h1{

font-size:52px;

font-weight:700;

}

.hero p{

font-size:18px;

opacity:.9;

}

/* Search */

.search-box{

max-width:700px;

margin:auto;

}

.search-box input{

padding:14px;

border-radius:30px 0 0 30px;

}

.search-box button{

border-radius:0 30px 30px 0;

}

/* Card */

.card{

border:none;

border-radius:18px;

overflow:hidden;

box-shadow:
0 4px 15px rgba(0,0,0,.08);

transition:.3s;

}

.card:hover{

transform:translateY(-5px);

}

.card img{

height:230px;

object-fit:cover;

}

.price{

font-size:22px;

font-weight:bold;

color:#556EE6;

}

/* Footer */

.footer{

background:#2A3042;

padding:20px;

margin-top:60px;

color:white;

}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark">

<div class="container">

<a class="navbar-brand">

JarPrabotan

</a>

<a
href="{{ route('login') }}"
class="btn btn-light">

Login

</a>

</div>

</nav>


<section class="hero">

<div class="container">

<div class="row align-items-center">

<div class="col-md-7">

<h1>

Perabot Rumah Tangga Modern

</h1>

<p>

Temukan berbagai koleksi perabot terbaik dengan kualitas premium.

</p>

<a
href="#produk"
class="btn btn-light btn-lg">

Lihat Produk

</a>

</div>

<div class="col-md-5 text-center">

<i
class="fa-solid fa-couch"
style="font-size:180px">

</i>

</div>

</div>

</div>

</section>


<section
class="container py-5"
id="produk">

<h2
class="text-center mb-4">

Daftar Perabot

</h2>


<div class="search-box mb-5">

<form
method="GET"
action="{{ route('home') }}">

<div class="input-group">

<input

type="text"

name="search"

class="form-control"

placeholder="Cari produk..."

value="{{ request('search') }}">


<button
class="btn btn-primary">

Cari

</button>

</div>

</form>

</div>



<div class="row">

@forelse($perabots as $p)

<div class="col-md-4 mb-4">

<div class="card h-100">

<img

src="{{ asset('storage/'.$p->gambar) }}"

class="card-img-top">


<div class="card-body">

<h5>

{{ $p->nama_perabot }}

</h5>

<p>

Bahan :

<strong>

{{ $p->bahan }}

</strong>

</p>

<p>

Ukuran :

{{ $p->ukuran }}

</p>

<div class="price mb-3">

Rp

{{ number_format($p->harga,0,',','.') }}

</div>

<div class="d-flex gap-2">

<a

href="{{ route('perabot.show',$p->id_perabot) }}"

class="btn btn-outline-primary w-50">

Detail

</a>

<a

href="{{ route('order.create',$p->id_perabot) }}"

class="btn btn-primary w-50">

<i class="fa-solid fa-cart-shopping me-1"></i>

Buy

</a>

</div>

</div>

</div>

</div>

@empty

<div class="col-12">

<div class="alert alert-warning text-center">

Produk tidak ditemukan

</div>

</div>

@endforelse

</div>

</section>


<footer class="footer">

<div class="container text-center">

© {{ date('Y') }}

JarPrabotan - Sistem Penjualan Perabot

</div>

</footer>

</body>

</html>