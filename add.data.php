<?php
include('config.php');

if(isset($_POST['add'])) {
  $id_belanja = $_POST['id_belanja'];
  $nama_barang = $_POST['nama_barang'];
  $jumlah = $_POST['jumlah'];
  $harga = $_POST['harga'];

  $sql = 'INSERT into keranjang_belanja (id_belanja,nama_barang,jumlah,harga) values ("'.$id_belanja.'","'.$nama_barang.'","'.$jumlah.'","'.$harga.'")';
  $query  = mysqli_query($db_link,$sql);

  if($query){
    header('location: index.php');
  }
  else{
    echo 'Gagal';
  }

}
?>