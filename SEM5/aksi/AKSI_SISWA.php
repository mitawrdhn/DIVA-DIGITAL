<?php 
$conn=mysqli_connect("localhost","root","","SEM5");

$nama        = $_POST['nama'];
$email          = $_POST['email'];
$no_hp        = $_POST['nohp'];
$alamat         = $_POST['alamat'];
$sekolah          = $_POST['sekolah'];
$mulaii =$_POST["mulai"];
$sampaii =$_POST["sampai"];
$program = $_POST['programmagang'];

if (isset($_POST['DAFTAR']))
{
	$conn->query("INSERT INTO pendaftarsiswa (nama_siswa, sekolah_siswa, email_siswa, no_hp_siswa,alamat_siswa,mulai_magang_siswa,akhir_magang_siswa,program_magang) VALUES
	('$nama','$sekolah','$email','$no_hp','$alamat','$mulaii','$sampaii','$program')");
	
	echo "<meta http-equiv='refresh' content='1;url=../admin/login.html'>";
  echo "<script> alert('Anda BERHASIL mendaftarkan diri untuk Magang di DIVA DIGITAL')</script>";
}
?>
