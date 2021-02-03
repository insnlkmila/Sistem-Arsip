<?php include 'config.php'; ?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Administrator - Login</title>
    <link rel="shortcut icon" href="tampilan/img/logo1.png" >
    <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">
    <link href="tampilan/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="tampilan/css/animate.css" rel="stylesheet">
    <link href="tampilan/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
            <center>
			 <img alt="image" src="tampilan/img/logo1.png" width="280" height="180" />
                <h2 class="font-bold">(Sistem Informasi Pengarsipan Akte Kelahiran)</h2>
                </center>

           

            </div>	
		                     
            <div class="col-md-6">
                <div class="ibox-content">
		        <?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<div style='margin-bottom:-3px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>  Login Gagal !! Username dan Password Salah !!</div></br>";
			}
		}
		?>
		
                    <form action="login_act.php" method="post" class="m-t">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="uname" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="pass" required="">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                    </form>
                    <p class="m-t">
                        <small>Dinas DUKCAPIL &copy; 2018</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
               
            </div>
            <div class="col-md-6 text-right">
               <small> 2018</small>
            </div>
        </div>
    </div>
	<!-- Mainly scripts -->
    <script src="tampilan/js/jquery-2.1.1.js"></script>
    <script src="tampilan/js/bootstrap.min.js"></script>
    <script src="tampilan/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="tampilan/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="tampilan/js/inspinia.js"></script>
    <script src="tampilan/js/plugins/pace/pace.min.js"></script>

</body>

</html>

