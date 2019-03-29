<html>
<head>
	<title>.:: Simpan Data ::.</title>
</head>
<body>
<font face=arial size=2>
<center><h5>DATA BERHASIL DITAMBAHKAN KE TABEL ANGGOTA</h5></center>
<hr>
<?php

if (!empty($_POST['submit'])) {
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$kota = $_POST['kota'];

	// ----- ambil isi dari file koneksi.php
	require("koneksi.php");
	// ----- hubungkan ke database
	$koneksi=open_connection();
	// ----- menentukan nama tabel
	$tablename="anggota";
	// ----- menghitung jumlah record
	$sql1="select * from $tablename";
	$hasil =@mysql_query ($sql1) or die ("Terdapat kesalahan pada perintah SQL!");
	$jml=@mysql_num_rows($hasil);
	$nomor=$jml+1;
	// ----- perintah SQL untuk memasukkan data ke tabel anggota
	$sql2="insert into $tablename(nomor,nama,email,alamat,kota) values ('$nomor',";
	$sql2.="'$nama','$email','$alamat','$kota')";
	// ------ jalankan perintah SQL untuk memasukkan data ke tabel anggota
	$hasil =@mysql_query ($sql2) or die ("Terdapat kesalahan pada perintah SQL!");
	// ------ putus hubungan dengan database
	mysql_close($koneksi);
}

?>
<center>
| <a href=contoh23.php target=_blank>Lihat Data</a>
| <a href=contoh2_26.html>Kembali</a> |
</body>
</html>
