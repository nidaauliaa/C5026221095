<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('judulhalaman')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">5026221095 Nida Aulia Amartika</a>

        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Link 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link 2</a>
          </li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              DATABASE
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/pegawai">Pegawai</a>
              <a class="dropdown-item" href="#">Link 2</a>
              <a class="dropdown-item" href="/keranjangbelanja">Keranjang Belanja</a>
              <a class="dropdown-item" href="/sandal">Sandal</a>
              <a class="dropdown-item" href="/nilai">Nilai</a>
              <a class="dropdown-item" href="/karyawan">Karyawan</a>
              <a class="dropdown-item" href="/counter">Counter</a>
              <a class="dropdown-item" href="/kapas">Kapas</a>
              <a class="dropdown-item" href="/chat">CHAT - UAS</a>
            </div>
          </li>
        </ul>
    </nav>
<div class="container">

    @yield('judul')
    <br/>
    @yield('konten')
    @include('footer')
</div>

</body>
</html>
