<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEMBUAT LOGIN</title>
</head>
<center>
<body>
    <h2>Latihan Login XII RPL SMKN 1 SAYUNG</h2>
</br>
<?php
if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo "login gagal! username dan password salah!";
    }else if($_GET['pesan'] == "logout"){
        echo "Anda telah berhasil logout";
    }else if($_GET['pesan'] == "belum_login"){
        echo "Anda harus login untuk mengakses halaman admin";
    }
}
 ?>
 <br/>
 <br/>
 <form method="POST" action="cek_login.php">
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="Masukkan username"></td>
</tr>
<tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" placeholder="Masukkan Password"></td>
</tr>
<tr>
    <td></td> 
    <td></td>
   <h3> <td><input type="submit" value="LOGIN"> 
    <a href="tambah.php"><input type="button" name="daftar" value="daftar"/></a></td></h3>
</tr>
</table>
</form>
</center>
</body>
</html>