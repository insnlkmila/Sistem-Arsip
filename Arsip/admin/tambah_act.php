

 <?php 
include 'config.php';
$id_arsip=$_POST['id_arsip'];
$nama=$_POST['nama'];
$kota=$_POST['kota'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$tgl_input=$_POST['tgl_input'];
$ket=$_POST['keterangan'];

mysql_query("insert into arsip_akte values('id_arsip','$nama','$kota','$tgl_lahir','$alamat','$tgl_input','$ket')");
header("location:arsip.php");

 ?>

