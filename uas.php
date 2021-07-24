<?php
require 'Function.php';
require 'cek.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
​<meta charset="UTF-8">
​<meta name="viewport" content="width=device-width, initial-scale=1.0">
​<title>Widiyanto.Uas</title>
​<link rel="stylesheet" href="Postest 4.css">
</head>​

<div class="container">
    <div class="header"></div>
<nav class="menu">
    <label>Widiyanto UAS</label>
    <ul>
        <li><a href="#">HOME</a>
        <li><a href="#">PROFIL</a>
            <ul class="dropdown">
                <li><a href="https://teamrrq.com/academy">Deskripsi</a></li>
                <li><a href="https://www.instagram.com/firmansyahwidi08/">Instagram</a></li>
                <li><a href="https://web.facebook.com/widiyanto.firmansyah.3">Facebook</a></li>
            </ul>
        </li>
        <li><a href="Logout.php">LOGOUT</a>
    <ul>
</nav>

​​<div class="left">
​​​<center><img src="logo-academy.png" width="500px" height="500px" alt=""></center>
​​​<h1>Formulir Data Diri</h1> <p style="font-size: 20px;">
​​​<p><i>Isikan data diri anda dengan lengkap pada form tersebut,<br>data yang
​​​sudah di isi akan di simpan kedalam sistem kami</i></p>
​​</div>
​​<div class="right">
​​​<div class="formBox">
​​​​<form action="proses.php" method="POST">
​​​​​<table>
    <tr>
        <td>
            <center><h2 style="font-style :italic;">Isikan Data Diri Kamu</h2></center>
        </td>
    </tr>
​​​​​​<tr>
​​​​​​​<td class="nama">
​​​​​​​​<img src="1.jpg" width="20" height="20">
​​​​​​​​<input type="text" name="inputNama" placeholder="Siapa Nama Anda?">
​​​​​​​</td>
​​​​​​</tr>
​​​​​​<tr>
​​​​​​​<td class="alamat">
​​​​​​​​<img src="2.png"width="30" height="20">
​​​​​​​​<input type="text" name="inputAlamat" placeholder="Alamat Anda Dimana?">
​​​​​​​</td>
​​​​​​</tr>
​​​​​​​<tr>
​​​​​​​<td class="nomor">
​​​​​​​​<img src="3.png" width="20" height="20" >
​​​​​​​​<input type="text" name="inputNomor" placeholder="Masukkan Nomor Anda">
​​​​​​​</td>
​​​​​​</tr>
​​​​​​<tr>
​​​​​​​<td class="jk">
​​​​​​​​<img src="4.jfif" width="30" height="20">
​​​​​​​​<p>Jenis Kelamin</p>
​​​​​​​​<input type="radio" name="jk" value="Laki-laki">Laki-laki
​​​​​​​​<input type="radio" name="jk" value="Perempuan">Perempuan
​​​​​​​</td>
​​​​​​</tr>
​​​​​​<tr>
​​​​​​​<td class="agama">
​​​​​​​​<select name="selectAgama">
​​​​​​​​​<option selected disabled>- Pilih Agama Anda -</option>
​​        ​​​​​<option>Islam</option>
​​        ​​​​​<option>Kristen</option>
​​​​​        ​​<option>Katholik</option>
​​​​​        ​​<option>Hindu</option>
​​​​​        ​​<option>Budha</option>
​​​​​        ​</select>
​​​​​​​</td>
​​​​​​</tr>
​​​​​​<tr>
​​​​​​​<td class="prestasi">
​​​​​​​​<img src="5.png" width="40" height="20">
​​​​​​​​<p>Prestasi Yang Pernah Diraih</p>
​​​​​​​​<textarea name="inputPrestasi" placeholder="Tulis prestasi anda disini..."></textarea>
​​​​​​​</td>
​​​​​​</tr>
​​​​​​<tr>
​​​​​​​<td class="button">
​​​​​​​​<input id="pertama" type="submit" name="submit" value="Simpan">
​​​​​​​​<input id="kedua" type="reset" name="reset" value="Batal">
​​​​​​​</td>
​​​​​​</tr>
​​​​​</table>
​​​​</form>
​​​</div>
​​</div>
​</div>
</body>
</html>