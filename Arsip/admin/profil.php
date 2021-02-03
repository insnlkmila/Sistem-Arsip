<?php 
	session_start();
	include 'cek.php';
	include 'config.php';
	?>

<?php 
$per_hal=500;
$jumlah_record=mysql_query("SELECT COUNT(*) from arsip_akte");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 0;
$start = ($page - 0) * $per_hal;
?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin- Profil Instansi</title>
<link rel="shortcut icon" href="../tampilan/img/favicon.png" >
    <link href="../tampilan/css/bootstrap.min.css" rel="stylesheet">
    <link href="../tampilan/font-awesome/css/font-awesome.css" rel="stylesheet">

        <!-- Tampilkan data tabel -->
    <link href="../tampilan/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../tampilan/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="../tampilan/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    <link href="../tampilan/css/animate.css" rel="stylesheet">
    <link href="../tampilan/css/style.css" rel="stylesheet">

</head>

<body>
      <div id="wrapper">
         <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                    <center>
                        <div class="dropdown profile-element"> <span>
                       
                            <img alt="image" class="img-circle" width="50" height="50" src="../tampilan/img/img.png" />

                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Selamat Datang</strong>
                             </span> <span class="text-muted text-xs block"> <?php echo $_SESSION['nama']  ?><b class="caret"></b></span> </span> </a>

                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                               
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                        </center>
                        <div class="logo-element">
                           SPS
                        </div>
                    </li>
                    <li >
                        <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                 
                    </li>
                    <li>
                    <a href="profil.php"><i class="fa fa-home"></i> <span class="nav-label">Profil Instansi</span> </a>
                </li>
                    <li>
                    <a href="arsip.php"><i class="fa fa-briefcase"></i> <span class="nav-label">Arsip Akte Kelahiran</span> </a>
                </li>
                 <li>
                    <a href="#"><i class="fa fa-print"></i> <span class="nav-label">Cetak Laporan</span><span class="fa arrow"></span></a>
                    <?php $arsip_akte = mysql_num_rows(mysql_query("SELECT * FROM arsip_akte")); ?>
                    <ul class="nav nav-second-level">
                        <li><a href="laporan.php">Arsip Akte Kelahiran<span class="label label-danger pull-right"><?php echo $arsip_akte; ?></span></a></li> 
                    </ul>
                </li>
                
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            
        </div>
            <ul class="nav navbar-top-links navbar-right">
                

                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
                      <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Profil Instansi</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
           
                        <li class="active">
                            <strong>Profil Instansi</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-12">
            <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Profil Instansi</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                  
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">
                  
			<center><i align="center" class="btn btn-success" class="fa fa-plus"><h3>Visi Instansi</h3></i></center>
            
            <table class="table table-striped table-bordered table-hover " id="editable" >
<!--             <thead>
                    <tr>
                        <td></td>
                    </tr>
                    </thead> -->
                    <tbody>

            		<tr>
                        <td align="center"><h4>"Terwujudnya Tertib Administrasi Kependudukan dengan Peningkatan Database yang Akurat,<br><br>Pegendalian Penduduk dan Keluarga Berencana<br><br>Menuju Riau Sejahtera"</h4></td>
            		</tr>
                    </tbody>		
                    </table>
            <center><i align="center" class="btn btn-success" class="fa fa-plus"><h3>Misi Instansi</h3></i> </center>
            
            <table class="table table-striped table-bordered table-hover " id="editable" >
<!--             <thead>
                    <tr>
                        <td></td>
                    </tr>
                    </thead> -->
                    <tbody>

                    <tr align="center">
                        <td >

                        <h4><li>Meningkatkan pelayanan prima administrasi kependudukan</li><br>
                            <li>Meningkatkan kualitas data dan informasi yang akurat administrasi kependudukan</li><br>
                            <li>Meningkatkan Keluarga yang mempunyai Ketahanan fungsi Keluarga</li><br>
                            <li>Mewujudkan Pusat Informasi Konseling Keluarga guna menuju keluarga sejahtera</li><br>
                            <li>Meningkatkan peserta Akseptor KB aktif</li><br>
                            <li>Meningkatkan dukungan Peran Serta Masyarakat dalam Keluarga Berencana dan Keluarga Sejahtera</li><br>
                            <li>Meningkatkan pengendalian peduduk berbasis keluarga yang seimbang</li>
                        </h4></td>
                    </tr>
                    </tbody>
                    </div>
					
				</div>
				</div>
				</div>
				 </div>
					   
            </div>
        </div>

        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="../tampilan/js/jquery-2.1.1.js"></script>
    <script src="../tampilan/js/bootstrap.min.js"></script>
    <script src="../tampilan/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="tampilan/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Data Tables -->
    <script src="../tampilan/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../tampilan/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="../tampilan/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="../tampilan/js/plugins/dataTables/dataTables.tableTools.min.js"></script>
    

       <!-- Flot -->
    <script src="../tampilan/js/plugins/flot/jquery.flot.js"></script>
    <script src="../tampilan/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../tampilan/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="../tampilan/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="../tampilan/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="../tampilan/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="../tampilan/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../tampilan/js/inspinia.js"></script>
    <script src="../tampilan/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="../tampilan/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="../tampilan/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="../tampilan/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="../tampilan/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="../tampilan/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="../tampilan/js/plugins/toastr/toastr.min.js"></script>
   <!-- Page-Level Scripts -->
<!--     <script>
        $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script> -->
<style>
    body.DTTT_Print {
        background: #fff;

    }
    .DTTT_Print #page-wrapper {
        margin: 0;
        background:#fff;
    }

    button.DTTT_button, div.DTTT_button, a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    .dataTables_filter label {
        margin-right: 5px;

    }
</style>

</body>
</html>

