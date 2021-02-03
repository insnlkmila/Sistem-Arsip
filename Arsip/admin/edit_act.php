<?php 
include 'config.php';
$id_arsip=$_POST['id_arsip'];
$nama=$_POST['nama'];
$kota=$_POST['kota'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$tgl_input=$_POST['tgl_input'];
$ket=$_POST['keterangan'];


mysql_query("update arsip_akte set nama='$nama',kota='$kota',tgl_input='$tgl_lahir',alamat='$alamat',tgl_input='$tgl_input',keterangan='$ket' where id_arsip='$id_arsip'");
header("location:arsip.php");

?>