<?php
  include('config.php');
  if(isset($_GET['ni'])){
    $ni   = $_GET['ni'];
    $query  = mysqli_query($db_link,'SELECT * from keranjang_belanja where id_belanja = "'.$ni.'"');
    $data   = mysqli_fetch_array($query);
    $id_belanja = $data['id_belanja'];
    $nama_barang = $data['nama_barang'];
    $jumlah = $data['jumlah'];
    $harga  = $data['harga'];
  }
  else{
  $id_belanja = '';
  $nama_barang = '';
  $jumlah = '';
  $harga = '';
  }

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
<div id="wrapper">
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="adjust-nav">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span></button>
<img src="assets/img/mini.jpg" width="1350" height="100"/>
</div></div></div>
        <!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
<div class="sidebar-collapse">
<ul class="nav" id="main-menu">
                 
<li class="active-link">
<a href="index.php" ><i class="fa fa-desktop "></i>Tambah Data</a></li>
<li><a href="index.php"><i class="fa fa-table "></i>Edit Data</a></li>
<li><a href="index.php"><i class="fa fa-edit "></i>Hapus Data</a></li>
<li><a href="lihat.php"><i class="fa fa-qrcode "></i>Lihat Data</a></li>
<li></ul></div></nav>
        <!-- /. NAV SIDE  -->
        
<div id="page-wrapper">
<div id="page-inner">
<div class="row">
<div class="col-lg-12"><h2 style="color:blue" align="center">&nbsp;</h2>
  <h2 style="color:blue" align="center">SELAMAT DATANG DI SEMOGA SUKSES MINIMARKET AAMIIN YAALLAH</h2>
</div>
</div>            
                 <!-- /. ROW  -->
<hr />
              <div class="row"></div>
                  <!-- /. ROW  -->
                  <!-- /. ROW  -->
                  <!-- /. ROW  -->
                  <!-- /. ROW  -->

<div class="row text-center pad-top">
<div class="container-fluid">
<div class="jumbotron">

			<!-- Button trigger modal -->
<div class="container-fluid">
      <div class="jumbotron">

      <div class="modal-body">
        
          <form action="edit.act.data.php" method="post">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
              <input name="id_belanja" type="text" class="form-control" placeholder="Contoh: BLJ001" value="<?php echo $id_belanja; ?>">
            </div>
          </div>
            
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
              <input name="nama_barang" type="text" class="form-control" placeholder="Contoh: BRG001" value="<?php echo $nama_barang; ?>">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
              <input name="jumlah" type="text" class="form-control" placeholder="" value="<?php echo $jumlah; ?>">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
              <input name="harga" type="text" class="form-control" placeholder="Rp 5000" value="<?php echo $harga; ?>">
            </div>
          </div>

    <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
          <input class="btn btn-primary" type="submit" name="edit" value="Simpan">
        </div>

        </form>

      </div>
    </div>
  </div>
</div>
<br><br>

            <!-- /. ROW  -->   
          <div class="row"></div>
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a>
                </div>
            </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
