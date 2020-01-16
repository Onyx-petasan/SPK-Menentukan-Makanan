<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include '../koneksi.php'; // memanggil koneksi
 $sql = mysql_query("SELECT * FROM tb_pengguna where id = '$userlogin'") or die(mysql_error());

   //menjadikan data sebagai arrray
 $data = mysql_fetch_array($sql);
?>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Sistem Pakar Pemilihan Makanan</title>
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/base/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">


  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="assets/images/logo/<?=$log['logo']?>"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
</head>
<body>
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a href="home.php?page=home">SPK Pemilihan Makanan</a>
          <a class="navbar-brand brand-logo-mini" href="home.php?page=pengguna-data"><img src="assets/images/logo/<?=$log['logo']?>" alt="logo"/></a>
          <!-- <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button> -->
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item">
            <a class="nav-link" href="home.php?page=home">
              <h4>Home</h4>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item">
            <a class="nav-link" href="home.php?page=konsultasi">
              <h4>Konsultasi</h4>
            </a>
          </li>
        </ul><ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item">
            <a class="nav-link" href="home.php?page=profile">
              <h4>Profile</h4>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item">
            <a class="nav-link" href="home.php?page=petunjuk">
              <h4>Petunjuk</h4>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-rigth">
          <li class="nav-item">
            <a class="nav-link" href="../login.php">
              <input type="submit" value="Login" class="btn btn-primary">
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>