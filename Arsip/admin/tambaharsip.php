<?php 
	session_start();
	include 'cek.php';
	include 'config.php';
	?>



<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin - Tambah Arsip</title>
<link rel="shortcut icon" href="../tampilan/img/favicon.png" >
    <link href="../tampilan/css/bootstrap.min.css" rel="stylesheet">
    <link href="../tampilan/font-awesome/css/font-awesome.css" rel="stylesheet">
     <link href="css/plugins/chosen/chosen.css" rel="stylesheet">

        <!-- Tampilkan data tabel -->

    <link href="../tampilan/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../tampilan/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="../tampilan/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
     <link href="../tampilan/css/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <link href="../tampilan/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
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
                             </span> <span class="text-muted text-xs block"> <?php echo $_SESSION['uname']  ?><b class="caret"></b></span> </span> </a>

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
                    <h2>Input Arsip</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="surat_masuk.php">Data Arsip Akte Kelahiran</a>
                        </li>
                        <li class="active">
                            <strong>Input Arsip Akte Kelahiran</strong>
                        </li>
                    </ol>
                </div>
            
            </div>
       
				</br>	   
            <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Form Input Arsip Akte Kelahiran</h5>
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
                            <form action="tambah_act.php" method="post" class="form-horizontal">
                                
                                <div class="form-group"><label  control-label">Nama</label>

                                    <div ><input type="text" name="nama" id="nama" placeholder="Nama" class="form-control"> 
                                    </div>
                                </div>
                               <div class="form-group"><label  control-label">Kota Lahir</label>

                                    <div ><input type="text" name="kota" id="kota" placeholder="Kota lahir" class="form-control"></div>
                                </div>
                                <div class="form-group"><label  control-label">Tanggal Lahir</label>

                                    <div ><input type="date" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir" class="form-control"></div>
                                </div>
                                <div class="form-group"><label  control-label">Alamat</label>
                                    <div ><input type="text" name="alamat" id="alamat" placeholder="Alamat" class="form-control"></div>
                                </div>
                                    <div class="form-group"> <label  control-label">Tanggal Input</label>
                                    <div ><input type="date" name="tgl_input" id="tgl_input" readonly value="<?php echo date("Y-m-d");?>" placeholder="Tanggal input" class="form-control"></div>
                                </div>
                                 
                                 <div class="form-group"><label control-label">Keterangan</label>

                                    <div ><input type="text"  name="keterangan" id="keterangan" placeholder="Keterangan" class="form-control"> 
                                    </div>
                                </div>
                                
                              
                               
                                <div class="form-group">
                                    
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                     <button class="btn btn-warning" type="reset">Reset</button>
                                        <button class="btn btn-sm btn-white" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
           
        <div class="row">
           

            </div>
        </div>

        </div>
    </div>
<!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Chosen -->
    <script src="js/plugins/chosen/chosen.jquery.js"></script>

   <!-- JSKnob -->
   <script src="js/plugins/jsKnob/jquery.knob.js"></script>

   <!-- Input Mask-->
    <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

   <!-- Data picker -->
   <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

   <!-- NouSlider -->
   <script src="js/plugins/nouslider/jquery.nouislider.min.js"></script>

   <!-- Switchery -->
   <script src="js/plugins/switchery/switchery.js"></script>

    <!-- IonRangeSlider -->
    <script src="js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>

    <!-- MENU -->
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Color picker -->
    <script src="js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

    <!-- Image cropper -->
    <script src="js/plugins/cropper/cropper.min.js"></script>

    <script>
        $(document).ready(function(){

            var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1.618,
                preview: ".img-preview",
                done: function(data) {
                    // Output the result data for cropping image.
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function() {
                    var fileReader = new FileReader(),
                            files = this.files,
                            file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);
                        fileReader.onload = function () {
                            $inputImage.val("");
                            $image.cropper("reset", true).cropper("replace", this.result);
                        };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }

            $("#download").click(function() {
                window.open($image.cropper("getDataURL"));
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#data_2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_4 .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                todayHighlight: true
            });

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

            var elem_3 = document.querySelector('.js-switch_3');
            var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });

            $('.demo1').colorpicker();

            var divStyle = $('.back-change')[0].style;
            $('#demo_apidemo').colorpicker({
                color: divStyle.backgroundColor
            }).on('changeColor', function(ev) {
                        divStyle.backgroundColor = ev.color.toHex();
                    });


        });
        var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
            }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }

        $("#ionrange_1").ionRangeSlider({
            min: 0,
            max: 5000,
            type: 'double',
            prefix: "$",
            maxPostfix: "+",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_2").ionRangeSlider({
            min: 0,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " carats",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_3").ionRangeSlider({
            min: -50,
            max: 50,
            from: 0,
            postfix: "°",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_4").ionRangeSlider({
            values: [
                "January", "February", "March",
                "April", "May", "June",
                "July", "August", "September",
                "October", "November", "December"
            ],
            type: 'single',
            hasGrid: true
        });

        $("#ionrange_5").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " km",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });

        $(".dial").knob();

        $("#basic_slider").noUiSlider({
            start: 40,
            behaviour: 'tap',
            connect: 'upper',
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#range_slider").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#drag-fixed").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag-fixed',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });


    </script>
</body>
</html>

