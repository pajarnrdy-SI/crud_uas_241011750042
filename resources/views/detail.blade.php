<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<title>Detail Perabot</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<div class="container py-5">

<a href="{{ route('home') }}"
class="btn btn-secondary mb-4">

Kembali

</a>


<div class="card shadow">

<div class="row g-0">

<div class="col-md-5">

<img

src="{{ asset('storage/'.$perabot->gambar) }}"

class="img-fluid rounded-start"

>

</div>


<div class="col-md-7">

<div class="card-body">

<h2>

{{ $perabot->nama_perabot }}

</h2>

<hr>

<p>

<b>Bahan :</b>

{{ $perabot->bahan }}

</p>


<p>

<b>Ukuran :</b>

{{ $perabot->ukuran }}

</p>


<h3 class="text-primary">

Rp{{ number_format($perabot->harga,0,',','.') }}

</h3>


<a

href="https://wa.me/6281234567890?text=Saya ingin membeli {{ $perabot->nama_perabot }}"

class="btn btn-success mt-3">

Buy Sekarang

</a>

</div>

</div>

</div>

</div>

</div>

</body>

</html>