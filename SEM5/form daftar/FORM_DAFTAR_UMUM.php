<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
 <?php
 $conn=mysqli_connect("localhost","root","","SEM5");
 ?>
 <body>
<form method="POST" action="../aksi/AKSI_UMUM.php" enctype="multipart/form-data">

	<label>Nama Pendaftar : </label>
          <input name="nama" placeholder="Nama Pendaftar" type="text" required /><p></p>
      
       <label>Email : </label>
          <input name="email" placeholder="Alamat E-Mail" type="email"  required /><p></p>
       
       <label>No HP : </label>

          <input name="nohp"  type="number" placeholder="Nomor HP"  required /><p></p>

        <label>Alamat : </label>

          <input name="alamat"  type="text" placeholder="Alamat"  required /><p></p>


      <label>Pendidikan Terakhir :</label>
         <select name="pendidikan_terakhir" required />
         <option value="">-Pilih Salah Satu-</option>
      <?php
      $get = $conn->query("SELECT * FROM PENDIDIKANTERAKHIR");
      $no=0;
      $each=mysqli_fetch_assoc($get);?>
      <?php foreach ($get as $each):
      $no++;?>
         <option value="<?php echo $each["pendidikan_terakhir"] ?>"><?php echo $each["pendidikan_terakhir"] ?></option>
           <?php endforeach ?>
           </select><p></p>
      
      <label>Pengalaman : </label>
          <input name="pengalaman" placeholder="Pengalaman" type="text" required /><p></p>

       <label>Keahlian : </label>
          <input name="keahlian" placeholder="Keahlian" type="text" required /><p></p>

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