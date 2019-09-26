<?php 
include 'koneksi.php';
$no = $_GET['no'];
mysqli_query($conn,"DELETE FROM rundown WHERE no=$no");
mysqli_query($conn,"DELETE FROM foto WHERE id_gambar=$id_gambar");


header("location:adminrundown.php?pesan=hapus");
?>