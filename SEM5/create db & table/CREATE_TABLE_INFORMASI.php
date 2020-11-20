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

$sql = "CREATE TABLE INFROMASI (

id_informasi int auto_increment primary key not null,

deskripsi VARCHAR(225) NOT NULL,

foto_informasi VARCHAR(200) NOT NULL,

call_center int NOT NULL,

alamat_informasi VARCHAR(225) NOT NULL,

daftar_layanan VARCHAR(225) NOT NULL,

jadwal_operasional VARCHAR(225) NOT NULL

)";


if(mysqli_query($conn,$sql)){

	echo "Table INFORMASI created succesfully";

} else {

	echo "Error creating table: ".$sql."<br>".mysqli_error($conn);

}

mysqli_close($conn);

?>