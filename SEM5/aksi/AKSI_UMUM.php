<?php 
$conn=mysqli_connect("localhost","root","","SEM5");

$nama        = $_POST['nama'];
$email          = $_POST['email'];
$no_hp        = $_POST['nohp'];
$alamat         = $_POST['alamat'];
$pendidikan_terakhir     = $_POST['pendidikan_terakhir'];
$pengalaman          = $_POST['pengalaman'];
$keahlian          = $_POST['keahlian'];
$mulaii =$_POST["mulai"];
$sampaii =$_POST["sampai"];
if (isset($_POST['DAFTAR']))
{
	$conn->query("INSERT INTO pendaftarumum (nama_umum, email_umum, no_hp_umum,alamat_umum,pendidikan_terakhir_umum,pengalaman_umum,keahlian_umum,mulai_magang_umum,akhir_magang_umum) VALUES
	('$nama','$email','$no_hp','$alamat','$pendidikan_terakhir','$pengalaman','$keahlian','$mulaii','$sampaii')");
	
	echo "<meta http-equiv='refresh' content='1;url=../admin/login.html'>";
  echo "<script> alert('Anda BERHASIL mendaftarkan diri untuk Magang di DIVA DIGITAL')</script>";
}
?>
