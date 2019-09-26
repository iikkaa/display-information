<?php 
include 'koneksi.php';
$id_gambar = $_GET['id_gambar'];
mysqli_query($conn, "DELETE FROM foto WHERE id_gambar='$id_gambar'")or die(mysql_error());

header("location:adminfoto.php?pesan=hapus");
?>