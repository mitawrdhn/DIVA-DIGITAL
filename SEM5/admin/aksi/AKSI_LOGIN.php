<?php 
 $conn=mysqli_connect("localhost","root","","SEM5");

$username         = $_POST['username'];
$password          = $_POST['password'];

$get = $conn->query("SELECT * FROM admin WHERE username_admin='$username' AND password_admin='$password'");

if (mysqli_num_rows($get)===1){
$row=mysqli_fetch_assoc($get);
  echo "<meta http-equiv='refresh' content='1;url=../../form daftar/FORM_DAFTAR_UMUM.php'>";
  echo "<script> alert('Berhasil Log In')</script>";
}
else{
  echo "<meta http-equiv='refresh' content='1;url=../admin/login.php'>";
  echo "<script> alert('Username / Password Salah')</script>";

}
 	 ?>  

   