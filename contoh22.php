<html>
<head>
<title>.:: tes koneksi dengan server database ::.</title>
</head>
<body>
<font face=verdana size=2>
<h3>Tes koneksi dg mysql database server...</h3><p>
<form action="contoh22.php" method="post">
<input type=radio name=tombol Value=1>Sambung
<input type=radio name=tombol Value=0>Putus
<br><br>
<input type=submit name="submit" Value=" OK ">
</form>
<?php
require("koneksi.php");
$hub=open_connection();
$databasename="alamat";

if(!empty($_POST['submit'])){

$tombol = $_POST['tombol'];

if (isset($tombol))
{ 
if ($tombol==1)
{
if ($hub) 
{
echo ("Koneksi dg Server Database <b><u>SUKSES</b></u><br>");
$db=@mysql_select_db($databasename,$hub);
if ($db) echo "Database <b><u>$databasename</b></u> ditemukan";
else echo "Database <b><u>$databasename</b></u> TIDAK ditemukan";
} else
echo ("Koneksi dg Server Database <b><u>GAGAL</b></u><br>");
}
elseif ($tombol==0) 
{
$mati=@mysql_close($koneksi);
echo ("Koneksi Server Database <b><u>Dimatikan</b></u><br>");
}
}

}
?>
</body>
</html>