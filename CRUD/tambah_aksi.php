<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

//menginput data ke database
mysqli_query($koneksi, "insert into mahasiswa values('','$nama','$nim','$alamat')");

//megalihkan halaman kembali ke listmahasiswa.php
header("location:listmahasiswa.php");
?>

