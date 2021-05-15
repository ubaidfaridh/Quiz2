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
  $_SESSION['username'] = $_COOKIE['nama_pengguna'];
}





if($_SESSION['login'] == 'false' ){
  header("Location: index.php");
}
?>