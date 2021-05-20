<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>Login User dengan Session</h2>
    <br>
    <!-- cek pesan notifikasi -->
    <?php 
    if (isset($_GET["pesan"])) {
        if ($_GET["pesan"]=="gagal") {
            echo "Login gagal, username dan password salah!!";
        } else if ($_GET["pesan"]=="login") {
            echo "anda telah berhasil Login";
            header("location:menu_akademik.php");
            exit();
        } else if ($_GET["pesan"]=="belum_login") {
            echo "anda harus Login untuk mengakses halaman admin";
        }
        
    }
    ?>
    <br>
    <br>
    <form method="post" action="cek_login.php">
        <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="Masukan username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" placeholder="Masukan passsword"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="LOGIN"></td>
        </tr>
        </table>
    </form>
</body>
</html>