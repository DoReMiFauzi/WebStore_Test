<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Detail Barang</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Detail Barang</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $item->nama_barang }}</h5>
                <p class="card-text">{{ $item->deskripsi }}</p>
                <p class="card-text">Rp{{ number_format($item->harga, 0, ',', '.') }}</p>
                <button class="btn btn-success">Beli Barang</button>
                <a href="{{ route('barang.index') }}" class="btn btn-danger">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>