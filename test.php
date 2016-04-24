<?php
//buat koneksi MySQL untuk user: root, tanpa password, alamat: localhost
$link=mysql_connect('localhost','root','');
 
//cek apakah koneksi dengan MySQL berhasil
if ($link)
   {
     //koneksi berhasil
     echo "Koneksi dengan MySQL berhasil";
   }
else
   {
     //koneksi gagal
     echo "Koneksi dengan MySQL gagal";
   }
 
//memeriksa nilai dari $link
echo "<br />";
echo 'hasil var_dump variabel $link : ';
var_dump($link);
?>