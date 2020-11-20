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

$sql = "CREATE TABLE PENDIDIKANTERAKHIR (

id_pendidikan int auto_increment primary key not null,
pendidikan_terakhir VARCHAR(225) NOT NULL

)";


if(mysqli_query($conn,$sql)){

	echo "Table PENDIDIKANTERAKHIR created succesfully";

} else {

	echo "Error creating table: ".$sql."<br>".mysqli_error($conn);

}

mysqli_close($conn);

?>