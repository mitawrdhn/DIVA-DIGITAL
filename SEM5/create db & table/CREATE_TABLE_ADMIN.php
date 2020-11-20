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

$sql = "CREATE TABLE ADMIN (

username_admin VARCHAR(100) PRIMARY KEY NOT NULL,

password_admin VARCHAR(100) NOT NULL

)";


if(mysqli_query($conn,$sql)){

	echo "Table ADMIN created succesfully";

} else {

	echo "Error creating table: ".$sql."<br>".mysqli_error($conn);

}

mysqli_close($conn);

?>