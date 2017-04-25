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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
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
				
            </ul>
			
			
			
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="main.php"><i class="fa fa-fw fa-home"></i> HOME</a>
                    </li>
                    <li>
                        <a href="jazzcar.php"><i class="fa fa-fw fa-dashboard"></i> JAZZ</a>
                    </li>
                    <li class="active">
                        <a href="classiccar.php"><i class="fa fa-fw fa-car"></i><h2> Classic</h2></a>
                    </li>
					</li>
                    <li>
                        <a href="accessories.php"><i class="fa fa-fw fa-wrench"></i> Accessories</a>
                    </li>
                  
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading  กรอบด้านในของหน้านั้น -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Classic <small>Car</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="main.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Charts
                            </li>
                        </ol>
						<div class="car1"> <!-- ใส่รูปรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>AMERICAN CAR CLASSIC <br>
											<img src="Photo/car1.jpg" width="300" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Europe CAR CLASSIC <br>
											<img src="Photo/car2.jpg" width="300" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Asian CAR CLASSIC <br>
											<img src="Photo/car3.jpg" width="300" height="150">
										</li><br>
									</div>
								</div>
							</div>
						</div>
						<div class="car2"> <!-- ใส่รูปรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Chevrolet Corvette Roadster (1955) <br>
											<img src="Photo/car4.jpg" width="300" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Mercury Cougar <br>
											<img src="Photo/car5.jpg" width="300" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Ford Thunderbird Classic Car <br>
											<img src="Photo/car6.jpg" width="300" height="150">
										</li><br>
									</div>
								</div>
							</div>
						</div>
						<div class="car3"> <!-- ใส่รูปรถ ใส่ได้divละ 3 อัน-->
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>AMERICAN CAR CLASSIC <br>
											<img src="Photo/car8.jpg" width="300" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>Buick and Convertible on Pinterest <br>
											<img src="Photo/car7.jpg" width="300" height="150">
										</li><br>
									</div>
								</div>
							</div>
							<div class="col-lg-4 text-center">
								<div class="panel panel-default">
									<div class="panel-body">
										<li class="active">
											<i class="fa"></i>CAR CLASSIC HOLDEN EFIJY <br>
											<img src="Photo/car9.jpg" width="300" height="150">
										</li><br>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
				
			</div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
