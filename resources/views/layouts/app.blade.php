<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1">

<title>JarPrabotan Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<style>

body{

background:#f8f9fc;

font-family:'Segoe UI',sans-serif;

}

.sidebar{

position:fixed;

top:0;

left:0;

width:260px;

height:100vh;

background:#2A3042;

padding:25px;

}

.sidebar h3{

color:white;

font-weight:700;

margin-bottom:40px;

}

.sidebar a{

display:flex;

align-items:center;

gap:12px;

padding:14px 16px;

margin-bottom:8px;

color:white;

text-decoration:none;

border-radius:10px;

transition:.3s;

font-size:15px;

}

.sidebar a i{

width:18px;

}

.sidebar a:hover{

background:#556ee6;

}

.main{

margin-left:260px;

}

.topbar{

height:70px;

background:white;

padding:0 30px;

display:flex;

justify-content:space-between;

align-items:center;

box-shadow:0 2px 10px rgba(0,0,0,.05);

}

.content{

padding:30px;

}

.card{

border:none;

border-radius:15px;

box-shadow:0 2px 12px rgba(0,0,0,.08);

}

.profile-img{

width:42px;

height:42px;

border-radius:50%;

object-fit:cover;

border:2px solid #556ee6;

}

.dropdown-menu{

border:none;

border-radius:12px;

box-shadow:0 4px 15px rgba(0,0,0,.08);

padding:10px;

min-width:190px;

}

.dropdown-item{

padding:10px 15px;

border-radius:8px;

transition:.3s;

}

.dropdown-item:hover{

background:#f3f4f6;

}

.logo{

font-size:24px;

font-weight:700;

color:white;

margin-bottom:40px;

}

</style>

</head>

<body>


<div class="sidebar">

<div class="logo">

JarPrabotan

</div>


<a href="{{ route('home') }}">

<i class="fa-solid fa-house"></i>

<span>Home</span>

</a>


<a href="{{ route('dashboard') }}">

<i class="fa-solid fa-chart-line"></i>

<span>Dashboard</span>

</a>


<a href="{{ route('perabot.index') }}">

<i class="fa-solid fa-couch"></i>

<span>Data Perabot</span>

</a>

<a href="{{ route('orders.index') }}">

<i class="fa-solid fa-cart-shopping"></i>

<span>Data Pesanan</span>

</a>


<form
action="{{ route('logout') }}"
method="POST">

@csrf

<button
class="btn btn-danger w-100 mt-5">

<i class="fa-solid fa-right-from-bracket me-2"></i>

Logout

</button>

</form>


</div>



<div class="main">



<div class="topbar">

<h5 class="mb-0">

Dashboard Admin

</h5>



<div class="dropdown">

<a

href="#"

class="d-flex align-items-center text-decoration-none"

data-bs-toggle="dropdown">


<img

src="{{ asset('images/pajar.jpg') }}"

class="profile-img">


<div class="ms-3">

<div

style="font-size:14px;
font-weight:600;
color:#2A3042;">

Pajar Nrdy

</div>

<div

style="font-size:12px;
color:#8a8a8a;">

Administrator

</div>

</div>


<i

class="fa-solid fa-chevron-down ms-3"

style="color:#8a8a8a;">

</i>

</a>



<ul class="dropdown-menu dropdown-menu-end">

<li>
    <a class="dropdown-item"
       href="{{ route('profile') }}">

        <i class="fa-solid fa-user me-2"></i>

        Profile

    </a>
</li>

<li>
    <a class="dropdown-item"
       href="{{ route('login') }}">

        <i class="fa-solid fa-user-pen me-2"></i>

        Ganti Akun

    </a>
</li>

<li>
    <hr class="dropdown-divider">
</li>

<li>

<form action="{{ route('logout') }}"
      method="POST">

@csrf

<button class="dropdown-item text-danger">

<i class="fa-solid fa-right-from-bracket me-2"></i>

Logout

</button>

</form>

</li>

</ul>
</div>


</div>



<div class="content">

@yield('content')

</div>


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>