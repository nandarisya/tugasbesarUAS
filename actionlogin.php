<?php
include 'koneksi.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$result = mysqli_query($conn,"SELECT *from users where username='$username' AND password='$password'");
$data = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result)>0)
{
  $_SESSION['username']=$username;
  $_SESSION['id']=$id;
  echo "Selamat Anda berhasil login";
  header('location:home.php');
}
else
{
  echo "Maaf password Anda salah";
  header('location:login.php');
}
?>