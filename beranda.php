<?php require "controller/beranda.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda</title>
  <link rel="stylesheet" href="bootstrap_folder/bootstrap.min.css">
  <style>
  .container{
    background-color: lightgreen;
    width: 600px;
    padding: 30px;
    height: 100vh;
  }
  .container h1{
    font-size: 30px;
  }
  </style>
</head>
<body>
  <div class="container ">
    <h1 class="text-center"> Nama user = <?= $_SESSION['nama_pengguna'] ?> </h1>
    <?php
    if(isset($_COOKIE['nama_pengguna'])){ ?>
      <h1 class="text-center">Cookie aktif</h1>
      <h1 class="text-center">Masa aktif Cookie akan habis pada menit <?= $_COOKIE['cookie_masa_tenggang'] ?> kedepan </h1>
    <?php
    }
    else{ ?>
      <h1 class="text-center">Cookie tidak aktif</h1>
    <?php
    }
    ?>
  </div>
<script src="bootstrap_folder/bootstrap.min.js"></script>
</body>
</html>