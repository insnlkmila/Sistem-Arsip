<?php
include('config.php');
$ni	= $_GET['ni'];

$sql 	= 'DELETE from keranjang_belanja where id_belanja="'.$ni.'"';
$query	= mysqli_query($db_link,$sql);
header('location: index.php');
?>
