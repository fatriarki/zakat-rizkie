<?php
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'admin';
$DATABASE_PASS = 'secret';
$DATABASE_NAME = 'zakatfitrah';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mustahik</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body class="loggedin">
<nav class="navtop">
    <div>
    <img src="asset/logo2.png" alt="">
        <h1>Si Zarah</h1>
        <a href="cetakzakat.php"><i class="fas fa-user-circle"></i>Laporan</a>
        <a href="list_distribusi.php"><i class="fas fa-user-circle"></i>distribusi</a>
        <a href="bayarzakat.php"><i class="fas fa-user-circle"></i>Bayar</a>
        <a href="warga.php"><i class="fas fa-user-circle"></i>warga</a>
        <a href="muzakki.php"><i class="fas fa-user-circle"></i>Muzakki</a>
        <a href="mustahik.php"><i class="fas fa-user-circle"></i>Mustahik</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>
</nav>
<div class="content">
    <h2>Master Data Warga</h2>
    <div>
        <p>Silahkan Masukkan Informasi Warga</p>
        <form method="post" action="input_data_warga.php">
        <table>
                <td>ID:</td>
                <td><input type="text" name="id_warga"></td>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Masukkan Kategori:</td>
                <td><input type="text" name="kategori"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>