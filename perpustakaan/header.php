<?php
    include "koneksi.php";
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Perpustakaan</title>
</head>

<body>
    <!--- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Perpustakaan</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Data Master
            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="data_buku.php">Buku</a>
                                <a class="dropdown-item" href="data_penulis.php">Penulis</a>
                                <a class="dropdown-item" href="data_penerbit.php">Penerbit</a>
                                <a class="dropdown-item" href="data_kategori.php">Kategori</a>
                                <a class="dropdown-item" href="data_mahasiswa.php">Mahasiswa</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Transaksi
          </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="peminjaman.php">Peminjaman</a>
                                <a class="dropdown-item" href="pengadaan.php">Pengadaan</a>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="data_admin.php">Admin</a>
                        </li>
                        <li class=" nav-item ">
                            <a class="nav-link " href="logout.php">Logout</a>
                        </li>
                </ul>
            </div>
        </div>

    </nav>