<?php
$koneksi = mysqli_connect("localhost","root","","perkuliahan");

// Check connection
if (mysqli_connect_error()){
	echo "koneksi database gagal : " . mysqli_connect_error();
}

?>