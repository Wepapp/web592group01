<!DOCTYPE html>

<?php
	include 'login_gmail.php';
	
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Garage_Auto</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="main.php"><div style= "font-family: verdana;font-size: 30px;" >Garage_Auto</div></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
             
                                              
                                   
                
				<li class="dropdown">
                    
				</li>
				 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Login <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                        <li>
						
                           <?php 
						   panel_include("User","logingmail.php");
						   ?>
                        </li>
                        <li class="divider"></li>
                    </ul>
                </li>
				
				
				
				
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="main.php"><i class="fa fa-fw fa-home"></i> HOME</a>
                    </li>
                    <li>
                        <a href="jazzcar.php"><i class="fa fa-fw fa-dashboard"></i> JAZZ</a>
                    </li>
                    <li>
                        <a href="classiccar.php"><i class="fa fa-fw fa-car"></i> Classic</a>
                    </li>
					</li>
                    <li class="active">
                        <a href="accessories.php"><i class="fa fa-fw fa-wrench"></i><h2> Accessories</h2></a>
                    </li>
                  
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Accessories <small>Car</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="main.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Charts
                            </li>
                        </ol>
						<div class="accessories1"> <!-- ใส่รูปอุปรณ์แต่งรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Volk Racing Se37K ล้อแม็กสุดซิ่งที่กำลังมาแรง <br>
											<img src="Photo/ac2.jpg" width="300" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>AZC ฝากระโปรงหน้า Carbon Fiber Civic FC <br>
											<img src="Photo/ac3.jpg" width="300" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Defi Advance A1 เกจวัดตัวล่าสุดจากทางค่าย Defi<br>
											<img src="Photo/ac4.jpg" width="300" height="150">
										</li><br>
									</div>
								</div>
							</div>
						</div>
						<div class="accessories2"> <!-- ใส่รูปอุปรณ์แต่งรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Armytrix Exhaust ท่ออัจฉริยะ จะเงียบจะลั่น<br>
											<img src="Photo/ac5.jpg" width="300" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>TAKATA DRIFT III BOLT เข็มขัดนิรภัย<br>
											<img src="Photo/ac6.jpg" width="300" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>โช๊คอัพ Tunerconcept<br>
											<img src="Photo/ac7.jpg" width="300" height="150">
										</li><br>
									</div>
								</div>
							</div>
						</div>
						<div class="accessories3"> <!-- ใส่รูปอุปรณ์แต่งรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>เบาะ<br>
											<img src="Photo/ac8.jpg" width="300" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>เบาะ<br>
											<img src="Photo/ac9.jpg" width="300" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>แม็กล้อรถ<br>
											<img src="Photo/ac10.jpg" width="300" height="150">
										</li><br>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
                <!-- /.row -->
<?php echo "$url".aaaaaa?>
                <!-- Flot Charts -->
				<!-- ห้ามลบนะอีผี -->
				<script src="js/jquery.js"></script>
				<script src="js/bootstrap.min.js"></script>
              
</body>

</html>
