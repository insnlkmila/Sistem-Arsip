<?php 
include 'config.php';
$id_arsip=$_GET['id_arsip'];
mysql_query("delete from arsip_akte where id_arsip='$id_arsip'");
header("location:arsip.php");

?>