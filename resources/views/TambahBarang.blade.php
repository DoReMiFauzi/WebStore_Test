<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg " style="background-color: #a3d9ff;" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BlStore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('barang.create') }}">Tambah Barang</a>
        </li>
        <li class="nav-item">
        </li> 
      </ul>
    </div>
  </div>
</nav>

@if ($errors->any())
    <div class="alert alert-danger container mt-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('barang.store') }}" method="post" class="container mt-5 w-100">
    @csrf
<h1>Tambah Barang</h1>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" name="nama_barang" value="{{ old('nama_barang') }}">
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Deskripsi Barang</label>
    <input type="text" class="form-control" name="deskripsi" value="{{ old('deskripsi') }}">
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Harga Barang</label>
    <input type="number" class="form-control" name="harga" value="{{ old('harga') }}">
  </div>

<button type="submit" class="btn btn-primary">Tambah Barang</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>