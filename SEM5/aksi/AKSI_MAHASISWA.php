<?php 
$conn=mysqli_connect("localhost","root","","SEM5");

$nama        = $_POST['nama'];
$jurusan	=$_POST['jurusan'];
$semester = $_POST['semester'];
$email          = $_POST['email'];
$no_hp        = $_POST['nohp'];
$alamat         = $_POST['alamat'];
$universitas          = $_POST['universitas'];
$keahlian	=$_POST["bidangkeahlian"];
$mulaii =$_POST["mulai"];
$sampaii =$_POST["sampai"];

if (isset($_POST['DAFTAR']))
{
	$conn->query("INSERT INTO pendaftarmahasiswa (nama_mahasiswa,universitas_mahasiswa,jurusan_mahasiswa,semester_mahasiswa,email_mahasiswa, no_hp_mahasiswa,alamat_mahasiswa,bidang_keahlian_mahasiswa,mulai_magang_mahasiswa,akhir_magang_mahasiswa) VALUES
	('$nama','$universitas','$jurusan','$semester','$email','$no_hp','$alamat','$keahlian','$mulaii','$sampaii')");
	
	echo "<meta http-equiv='refresh' content='1;url=../admin/login.html'>";
  echo "<script> alert('Anda BERHASIL mendaftarkan diri untuk Magang di DIVA DIGITAL')</script>";
}
?>
