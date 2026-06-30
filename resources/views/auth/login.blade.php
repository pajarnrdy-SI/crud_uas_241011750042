<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1">

<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<style>

body{

height:100vh;

display:flex;

justify-content:center;

align-items:center;

background:url('/images/bg.jpg');

background-size:cover;

background-position:center;

}

.login-card{

background:white;

padding:40px;

width:400px;

border-radius:15px;

box-shadow:0 10px 30px rgba(0,0,0,.2);

}

.login-title{

text-align:center;

font-size:32px;

color:#2563eb;

margin-bottom:30px;

font-weight:bold;

}

</style>

</head>

<body>

<div class="login-card">

<div class="login-title">

Login

</div>


@if($errors->has('login'))

<div class="alert alert-danger">

{{ $errors->first('login') }}

</div>

@endif


<form method="POST"

action="{{ route('login') }}">

@csrf


<div class="mb-3">

<label class="form-label">

Username

</label>

<input

type="text"

name="username"

class="form-control @error('username') is-invalid @enderror"

value="{{ old('username') }}">

@error('username')

<div class="invalid-feedback">

{{ $message }}

</div>

@enderror

</div>



<div class="mb-3">

<label class="form-label">

Password

</label>

<input

type="password"

name="password"

class="form-control @error('password') is-invalid @enderror">


@error('password')

<div class="invalid-feedback">

{{ $message }}

</div>

@enderror

</div>



<button

class="btn btn-primary w-100">

Login

</button>

</form>

</div>

</body>

</html>