<?php
include('config.php');
if(isset($_POST['edit'])){
	$id_belanja 	= $_POST['id_belanja'];
	$nama_barang 	= $_POST['nama_barang'];
	$jumlah 		= $_POST['jumlah'];
	$harga		 	= $_POST['harga'];
$sql 	= 'UPDATE keranjang_belanja set nama_barang="'.$nama_barang.'", jumlah="'.$jumlah.'", harga = "'.$harga.'" where id_belanja="'.$id_belanja.'"';
$query 	= mysqli_query($db_link,$sql);
if($query){
	header('location: index.php');
}
else {
	echo 'Gagal';
	}
}
?>