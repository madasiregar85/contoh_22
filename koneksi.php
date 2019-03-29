<?php // koneksi.php
function open_connection(){
$host="localhost";
$username="root";
$password="";
$databasename="alamat";
$koneksi=@mysql_connect
($host,$username, $password);
if ($koneksi) 
$db=@mysql_select_db
($databasename,$koneksi) 
or die ("Database
<b>$databasename</b> Tidak Ditemukan");
return $koneksi;
}
?>