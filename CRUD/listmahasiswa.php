<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD PHP dan MySQLi</title>
</head>
<body>
    <h2>CRUD DATA MAHASISWA</h2>
    <br>
    <a href="tambahmahasiswa.php">+ TAMBAH MAHASISWA</a>
    <br>
    <br>
    <table border="1">
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>NIM</th>
        <th>ALAMAT</th>
        <th>OPSI</th>
    </tr>
    <?php
    include 'koneksi.php';
    $no = 1;

    // langkah 1 : Tentukan batas, cek halaman & posisi data 
    $batas = 5; 
    $halaman = @$_GET['halaman'];
    if (empty($halaman)){
        $posisi = 0;
        $halaman = 1;
    } else {
        $posisi = ($halaman-1) * $batas;
    }

    // Langkah 2 : Hitung total data dan halaman serta link 1,2,3

    $query2 = mysqli_query($koneksi,"select * from mahasiswa");
    $jmldata = mysqli_num_rows($query2);
    $jmlhalaman = ceil($jmldata/$batas);

    echo "<br> Halaman : ";
    
    for ($i=1;$i<=$jmlhalaman;$i++)
    if ($i !=$halaman) {
        echo "<a href=\"listmahasiswa_page.php?halaman=$i\">$i</a> |";
    }else {
        echo "<b>$i</b> | ";
    }
    echo "<p>Total anggota : <b>$jmldata</b> Orang<p>";
    // Langkah 3 : Sesuaikan query dengan posisi dan batas
    $query = "select * from mahasiswa LIMIT $posisi,$batas";

    $data = mysqli_query($koneksi,"select * from mahasiswa");
    while($d = mysqli_fetch_array($data)) {
        ?>  
        <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['nim']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
            <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
        </td>
        </tr>
        <?php
    }
    ?>
    </table>
</body>
</html>
