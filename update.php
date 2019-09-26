<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$no  = $_POST['no'];
$materi = $_POST['materi'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$kd_pelatihan  = $_POST['kode'];
// query SQL untuk insert data
$query="UPDATE rundown SET materi='$materi',jam_mulai='$jam_mulai',jam_selesai='$jam_selesai',
kd_pelatihan='$kd_pelatihan' where no='$no'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:adminrundown.php");
?>