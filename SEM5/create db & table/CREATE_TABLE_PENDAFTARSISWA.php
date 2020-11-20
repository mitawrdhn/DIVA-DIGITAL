<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "SEM5";

//create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection

if (!$conn) {

	die("Connection failed : ".mysqli_connect_error());

}



//create tabel

$sql = "CREATE TABLE PENDAFTARSISWA (

id_siswa int auto_increment primary key not null,

nama_siswa VARCHAR(225) NOT NULL,

sekolah_siswa VARCHAR(225) NOT NULL,

email_siswa VARCHAR(225) NOT NULL,

no_hp_siswa int NOT NULL,

alamat_siswa VARCHAR(225) NOT NULL,

mulai_magang_siswa DATE NOT NULL,

akhir_magang_siswa DATE NOT NULL,

program_magang VARCHAR(225) NOT NULL


)";


if(mysqli_query($conn,$sql)){

	echo "Table PENDAFTARUMUM created succesfully";

} else {

	echo "Error creating table: ".$sql."<br>".mysqli_error($conn);

}

mysqli_close($conn);

?>