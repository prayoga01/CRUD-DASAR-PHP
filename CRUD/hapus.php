<?php 
//koneksi database
include 'koneksi.php';

//membuat data id yang di kirim dari url
$id = $_GET['id'];

//menghaous data dari database
mysqli_query($koneksi, "delete from mahasiswa where id='$id'");

//mengalihkan halaman kembali ke index.php
header("location:listmahasiswa.php");
?>