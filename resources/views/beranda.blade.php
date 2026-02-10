<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

    {{-- Navbar --}}
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

    {{-- Jumbotron --}}
        <div class="p-5 text-center bg-light">
          <h1 class="mb-3">Selamat Datang & Selamat Berbelanja</h1>
          <h4 class="mb-3">Kami Harap Anda Menikmati Pengalaman Berbelanja Kami
          </h4>
        </div>
    {{-- End Jumbotron --}}

    {{-- Search Bar --}}
    <div class="container mt-5">
      <form method="GET" action="{{ route('barang.index') }}" class="mb-3">
          <select name="kategori" class="form-select">
              <option value="">-- Semua Kategori --</option>
              @foreach ($kategori as $k)
                  <option value="{{ $k->id }}"
                      {{ request('kategori') == $k->id ? 'selected' : '' }}>
                      {{ $k->nama_kategori }}
                  </option>
              @endforeach
          </select>
      
          <input type="text" name="search" class="form-control mt-2"
                 placeholder="Cari barang..."
                 value="{{ request('search') }}">
      
          <button class="btn btn-primary mt-2">Gas Filter 🔍</button>
      </form>
    </div>
    {{-- End Navbar --}}

{{-- Card --}}

    <div class="container d-flex justify-content-center gap-3 mt-5 flex-wrap w-60 p-4">
      @foreach ($barang as $item)   
      <div class="card" style="width: 15rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $item->nama_barang }}</h5> <p>{{ $item->kategori->nama_kategori }}</p>
          <h6 class="card-subtitle mb-2 text-muted"> Rp{{ number_format($item->harga, 0, ',', '.') }}</h6>
          <p class="card-text">{{ $item->deskripsi }}</p>
          <a href="{{ route('barang.show', $item->id) }}" class="btn btn-primary">Beli Barang</a>
        </div>
      </div>
      @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>