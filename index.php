<?php require "controller/halaman_login.php" ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Dashbor</title>
  <link rel="stylesheet" href="bootstrap_folder/bootstrap.min.css">
  <style>
  .login_form{
    background-color: lightgreen;
    width: 600px;
    padding: 30px;
    height: 100vh;
  }
  </style>
</head>
<body>

<form action="" method="POST">
  <div class="login_form">
  <h1 class="text-center">Masuk</h1>
    <table>
      <tr>
        <td>Nama Pengguna</td>
        <td><input class="form-control" type="text" name="nama_pengguna"></td>
      </tr>
      <tr>
        <td>Password Pengguna</td>
        <td><input class="form-control" type="password" name="password_pengguna"></td>
      </tr>
      <tr>
          <td>cookie togle <input class="form-check-input" type="checkbox" value="" name="input_cookie" id="flexCheckDefault"></td>
          <td><button type="submit" name="btn_login" class="btn btn-primary">login</button></td>
        </tr>
    </table>
  </div>
</form>

  <link rel="stylesheet" href="bootstrap_folder/bootstrap.min.js">
</body>
</html>