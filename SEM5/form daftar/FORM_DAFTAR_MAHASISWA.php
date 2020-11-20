<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
 <?php
 $conn=mysqli_connect("localhost","root","","SEM5");
 ?>
 <body>
<form method="POST" action="../aksi/AKSI_MAHASISWA.php" enctype="multipart/form-data">

	<label>Nama Pendaftar : </label>
          <input name="nama" placeholder="Nama Pendaftar" type="text" required /><p></p>
      
       <label>Email : </label>
          <input name="email" placeholder="Alamat E-Mail" type="email"  required /><p></p>
       
       <label>No HP : </label>

          <input name="nohp"  type="number" placeholder="Nomor HP"  required /><p></p>

        <label>Alamat : </label>

          <input name="alamat"  type="text" placeholder="Alamat"  required /><p></p>

      
      <label>Nama Universitas : </label>
          <input name="universitas" placeholder="Universitas" type="text" required /><p></p>

      <label>Program Studi : </label>
          <input name="jurusan" placeholder="Program Studi" type="text" required /><p></p>

      <label>Semester : </label>
          <input name="semester" placeholder="Semester" type="number" required /><p></p>

       <label>Bidang keahlian : </label>
          <input name="bidangkeahlian" placeholder="Bidang Keahlian" type="text" required /><p></p> 

      <label>Lama Magang : </label><p></p>

                <label>Mulai :</label>
                <input type="date" class="form-control" name="mulai" required />
            <p></p>

                <label>Sampai :</label>
                <input type="date" class="form-control" name="sampai"required />
            <p></p>

<br><br><br>

          <input type="reset" name="reset" value="RESET">
          <input type="submit" name="DAFTAR" value="DAFTAR">
        </form>
          </body>
      </head>