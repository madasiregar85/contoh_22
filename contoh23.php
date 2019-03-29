<html>
<head>
		<title>.:: Menampilkan Data ::.</title>
</head>
<body>
<font face=arial size=2>
<center><h3>DAFTAR ANGGOTA</h3></center>
<?php
// ----- ambil isi dari file koneksi.php
require("koneksi.php");
// ----- hubungkan ke database
$koneksi=open_connection();
// ----- menentukan nama tabel
$tablename="anggota";
// ----- perintah SQL dimasukkan ke dalam variable string
$sql="select * from $tablename";
// ------ jalankan perintah SQL
$result = mysql_query ($sql) or die ("Terdapat kesalahan pada perintah SQL!");
// ------ putus hubungan dengan database
mysql_close($koneksi);
// ------ buat tampilan tabel
echo("<table width=100% cellspacing=1 cellpadding=2 bgcolor=#000000>");
echo("<tr><td bgcolor=#CCCCCC><b>No</b></td>
				<td bgcolor=#CCCCCC><b>Nama</b></td>
					<td bgcolor=#CCCCCC><b>E-Mail</b></td>
					<td bgcolor=#CCCCCC><b>Alamat</b></td>
					<td bgcolor=#CCCCCC><b>Kota</b></td></tr>");
// ------ ambil isi masing-masing record
while ($row = mysql_fetch_object ($result))
{
		// ----- mengambil isi setiap kolom
		$nomor=$row->nomor;
		$nama=$row->nama;
		$email=$row->email;
		$alamat=$row->alamat;
		$kota=$row->kota;
		// ------ menampilkan di layar browser
		echo("<tr><td bgcolor=#FFFFFF>$nomor</td>
			<td bgcolor=#FFFFFF>$nama</td>
			<td bgcolor=#FFFFFF>$email</td>
			<td bgcolor=#FFFFFF>$alamat</td>
			<td bgcolor=#FFFFFF>$kota</td></tr>");
}
echo("</table>");
?>
</body>
</html>
