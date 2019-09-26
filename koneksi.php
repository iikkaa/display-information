<?php

$conn = mysqli_connect('localhost','root','','dbadmin');

if(!$conn) {
	echo "koneksi gagal";
	die();
}
?>