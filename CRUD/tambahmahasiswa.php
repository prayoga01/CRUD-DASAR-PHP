<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD PHP dan MySqli</title>
</head>
<body>
    <h2>CRUD DATA MAHASISWA</h2>
    <br>
    <br>
    <h3>TAMBAH DATA MAHASISWA</h3>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
    
    
</body>
</html>