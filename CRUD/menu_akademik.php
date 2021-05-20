<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu</title>
</head>
<body>
<a href=""></a>
    <?php 
    session_start();
    $username=$_SESSION['username'];
    $status=$_SESSION['status'];
    echo "<h2>Selamat Datang $username, anda berhasil login</h2>
    Menu Utama <br><br>
    <a href='listmahasiswa.php'>Data Mahasiswa</a> <br><br>
    <a href='listdosen.php'>Data Dosen</a><br>
    ";
    
    ?>
    <form method="post" action="logout.php">
    <input type="submit" name ="tsubmit" value="LOGOUT">
    </form>
</body>
</html>