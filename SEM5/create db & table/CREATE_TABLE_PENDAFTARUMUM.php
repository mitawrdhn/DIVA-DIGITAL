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

$sql = "CREATE TABLE PENDAFTARUMUM (

id_umum int auto_increment primary key not null,

nama_umum VARCHAR(225) NOT NULL,

email_umum VARCHAR(225) NOT NULL,

no_hp_umum int NOT NULL,

alamat_umum VARCHAR(225) NOT NULL,

pendidikan_terakhir_umum VARCHAR(225) NOT NULL,

pengalaman_umum VARCHAR(225) NOT NULL,

keahlian_umum VARCHAR(225) NOT NULL,

mulai_magang_umum date NOT NULL,

akhir_magang_umum date NOT NULL



)";


if(mysqli_query($conn,$sql)){

	echo "Table PENDAFTARUMUM created succesfully";

} else {

	echo "Error creating table: ".$sql."<br>".mysqli_error($conn);

}

mysqli_close($conn);

?>