<?php
$conn=mysqli_connect("localhost","root","","SEM5");

$sql = "INSERT INTO PENDIDIKANTERAKHIR (pendidikan_terakhir) VALUES ('TK','SEKOLAH DASAR','SEKOLAH MENENGAH PERTAMA','SEKOLAH MENENGAH ATAS','SARJANA','MAGISTER')";

if(mysqli_query($conn,$sql)){

	echo "Data Inserted To Table PENDIDIKANTERAKHIR";

} else {

	echo "Error inserting data: ".$sql."<br>".mysqli_error($conn);

}
?>