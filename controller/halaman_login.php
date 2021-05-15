<?php
session_start();
$DB_connect = mysqli_connect("localhost","root","","user_account");
if(!isset($_COOKIE['nama_pengguna']) && !isset($_COOKIE['cookie_password_pengguna']) ){
  if(isset($_SESSION['login'])){
    if($_SESSION['login'] != 'true'){
      $_SESSION['login'] = 'false';
    }
  }else{
    $_SESSION['login'] = 'false';
  }
}
else{
  $_SESSION['login'] = 'true';
  $_SESSION['nama_pengguna'] = $_COOKIE['nama_pengguna'];
}



if(isset($_POST['btn_login'])){
  $nama_pengguna = $_POST['nama_pengguna'];
  $password_pengguna = $_POST['password_pengguna'];
  $cookie_values = [$nama_pengguna,$password_pengguna];

  // echo $nama_pengguna." ".$password_pengguna;
  $input_validation = mysqli_query($DB_connect,"SELECT * FROM user_account WHERE nama_pengguna = '$nama_pengguna' and password_pengguna = '$password_pengguna'");
  if(mysqli_num_rows($input_validation)){
    if(isset($_POST['input_cookie'])){
      setcookie("nama_pengguna",$nama_pengguna,time()+200);
      setcookie("cookie_password_pengguna",$password_pengguna,time()+200);
      setcookie("cookie_masa_tenggang"  ,gmdate("i:s",time()+200)  ,time()+200);
    }
    $_SESSION['login'] = 'true';
    $_SESSION['nama_pengguna'] = $nama_pengguna;
    
  }else{
    echo "<script>alert('nama_pengguna atau password_pengguna salah')</script>";
  }  
}

if($_SESSION['login'] == 'true' ){
  header("Location: beranda.php");
}


?>