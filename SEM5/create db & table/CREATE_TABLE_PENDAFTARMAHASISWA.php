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

$sql = "CREATE TABLE PENDAFTARMAHASISWA (

id_mahasiswa int auto_increment primary key not null,

nama_mahasiswa VARCHAR(225) NOT NULL,

universitas_mahasiswa VARCHAR(225) NOT NULL,

jurusan_mahasiswa VARCHAR(225) NOT NULL,

semester_mahasiswa int NOT NULL,

email_mahasiswa VARCHAR(225) NOT NULL,

no_hp_mahasiswa int NOT NULL,

alamat_mahasiswa VARCHAR(225) NOT NULL,

bidang_keahlian_mahasiswa VARCHAR(225) NOT NULL,

mulai_magang_mahasiswa DATE NOT NULL,

akhir_magang_mahasiswa DATE NOT NULL



)";


if(mysqli_query($conn,$sql)){

	echo "Table PENDAFTARMAHASISWA created succesfully";

} else {

	echo "Error creating table: ".$sql."<br>".mysqli_error($conn);

}

mysqli_close($conn);

?>