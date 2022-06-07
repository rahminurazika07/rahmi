<?php
include './config/conn.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="./assets/images/">

  <title>Perpustakaan</title>

  <!-- Bootstrap core CSS -->
  <link href="./assets/vendors/bootsrap-4.6/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="./assets/css/dashboard.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Perpustakaan</a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="./login.html">Sign out</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="index.php?p=beranda">
                <span data-feather="home"></span>
                Beranda <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Data Master</span>
            <a class="d-flex align-items-center text-muted" href="">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=anggota">
                <span data-feather="file-text"></span>
                Data Anggota
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=buku">
                <span data-feather="file-text"></span>
                Data Buku
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=user">
                <span data-feather="file-text"></span>
                Data Pengguna
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Data Transaksi</span>
            <a class="d-flex align-items-center text-muted" href="#">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=transaksi">
                <span data-feather="file-text"></span>
                Transaksi Peminjaman
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Laporan</span>
            <a class="d-flex align-items-center text-muted" href="#">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=laporan">
                <span data-feather="file-text"></span>
                Laporan Peminjaman
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Perhitungan</span>
            <a class="d-flex align-items-center text-muted" href="#">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=laporan">
                <span data-feather="file-text"></span>
                Segitiga
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=laporan">
                <span data-feather="file-text"></span>
                Persegi
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=laporan">
                <span data-feather="file-text"></span>
                Lingkaran
              </a>
            </li>
          </ul>

        </div>

      </nav>

    </div>

  </div>
  <?php
  $pages_dir = 'pages';
  if (!empty($_GET['p'])) {
    $pages = scandir($pages_dir, 0);
    unset($pages[0], $pages[1]);
    // print_r($pages);
    $p = $_GET['p'];
    if (in_array($p . '.php', $pages)) {
      include($pages_dir . '/' . $p . '.php');
    } else {
      include($pages_dir . '/404.php');
    }
  } else {
    include($pages_dir . '/beranda.php');
  }
  ?>



  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <!-- <script src="../../../../assets/js/vendor/popper.min.js"></script> -->
  <script src="./assets/vendors/bootsrap-4.6/js/bootstrap.min.js"></script>

  <!-- Icons -->
  <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
  <script>
    feather.replace()
  </script>

  <!-- Graphs -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>


</body>

</html>