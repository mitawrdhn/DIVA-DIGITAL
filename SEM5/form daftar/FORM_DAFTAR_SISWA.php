<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
 <?php
 $conn=mysqli_connect("localhost","root","","SEM5");
 ?>
 <body>
<form method="POST" action="../aksi/AKSI_SISWA.php" enctype="multipart/form-data">

	<label>Nama Pendaftar : </label>
          <input name="nama" placeholder="Nama Pendaftar" type="text" required /><p></p>
      
       <label>Email : </label>
          <input name="email" placeholder="Alamat E-Mail" type="email"  required /><p></p>
       
       <label>No HP : </label>

          <input name="nohp"  type="number" placeholder="Nomor HP"  required /><p></p>

        <label>Alamat : </label>

          <input name="alamat"  type="text" placeholder="Alamat"  required /><p></p>

      
      <label>Nama Sekolah : </label>
          <input name="sekolah" placeholder="Sekolah" type="text" required /><p></p>

      <label>Lama Magang : </label><p></p>

                <label>Mulai :</label>
                <input type="date" class="form-control" name="mulai" required />
            <p></p>

                <label>Sampai :</label>
                <input type="date" class="form-control" name="sampai"required />
            <p></p>

       <label>Program Magang : </label>
          <select name="programmagang" required />
          <option value="">-Pilih Salah Satu-</option>
          <option value="admin">Admin</option>
        </select><p></p>

<br><br><br>

          <input type="reset" name="reset" value="RESET">
          <input type="submit" name="DAFTAR" value="DAFTAR">
        </form>
          </body>
      </head>