<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Result Management System | Dashboard</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="screen" >
    <link rel="stylesheet" href="assets/css/animate-css/animate.min.css" media="screen" >
    <link rel="stylesheet" href="assets/css/lobipanel/lobipanel.min.css" media="screen" >
    <link rel="stylesheet" href="assets/css/toastr/toastr.min.css" media="screen" >
    <link rel="stylesheet" href="assets/css/icheck/skins/line/blue.css" >
    <link rel="stylesheet" href="assets/css/icheck/skins/line/red.css" >
    <link rel="stylesheet" href="assets/css/icheck/skins/line/green.css" >
    <link rel="stylesheet" href="assets/css/main.css" media="screen" >
    <script src="js/modernizr/modernizr.min.js"></script>
    <style type="text/css">
        .bg-black-300 {
            background-color: #3c3c3c;
            border-color: #3c3c3c;
            color: #fff !important;
            height: 603px;
        }
    </style>
</head>
<body class="top-navbar-fixed">
    <div class="main-wrapper">
        <nav class="navbar top-navbar bg-white box-shadow">
            <div class="container-fluid">
                <div class="row">
                    <div class="navbar-header no-padding">
                        <a class="navbar-brand" href="dashboard.php">
                            SRMS | Admin
                        </a>
                        <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                        <button type="button" class="navbar-toggle mobile-nav-toggle" >
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <!-- /.navbar-header -->

                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li class="hidden-sm hidden-xs"><a href="#" class="user-info-handle"><i class="fa fa-user"></i></a></li>
                            <li class="hidden-sm hidden-xs"><a href="#" class="full-screen-handle"><i class="fa fa-arrows-alt"></i></a></li>
                            
                            <li class="hidden-xs hidden-xs"><!-- <a href="#">My Tasks</a> --></li>
                            
                        </ul>
                        <!-- /.nav navbar-nav -->

                        <ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">


                            <li><a href="logout.php" class="color-danger text-center"><i class="fa fa-sign-out"></i> Logout</a></li>
                            
                            
                            
                        </ul>
                        <!-- /.nav navbar-nav navbar-right -->
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <div class="content-wrapper">
            <div class="content-container">

                <div class="left-sidebar bg-black-300 box-shadow ">
                    <div class="sidebar-content">
                        <div class="user-info closed">
                            <img src="http://placehold.it/90/c2c2c2?text=User" alt="John Doe" class="img-circle profile-img">
                            <h6 class="title">Admin</h6>
                            <small class="info">PHP Developer</small>
                        </div>
                        <!-- /.user-info -->

                        <div class="sidebar-nav">
                            <ul class="side-nav color-gray">
                                <li class="nav-header">
                                    <span class="">Main Category</span>
                                </li>
                                <li>
                                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
                                    
                                </li>

                                <li class="nav-header">
                                    <span class="">Appearance</span>
                                </li>
                                <li class="has-children">
                                    <a href="#"><i class="fa fa-file-text"></i> <span>Student Classes</span> <i class="fa fa-angle-right arrow"></i></a>
                                    <ul class="child-nav">
                                        <li><a href=""><i class="fa fa-bars"></i> <span>Create Class</span></a></li>
                                        <li><a href=""><i class="fa fa fa-server"></i> <span>Manage Classes</span></a></li>
                                        
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#"><i class="fa fa-file-text"></i> <span>Subjects</span> <i class="fa fa-angle-right arrow"></i></a>
                                    <ul class="child-nav">
                                        <li><a href=""><i class="fa fa-bars"></i> <span>Create Subject</span></a></li>
                                        <li><a href=""><i class="fa fa fa-server"></i> <span>Manage Subjects</span></a></li>
                                        <li><a href=""><i class="fa fa-newspaper-o"></i> <span>Add Subject Combination </span></a></li>
                                        <a href=""><i class="fa fa-newspaper-o"></i> <span>Manage Subject Combination </span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#"><i class="fa fa-users"></i> <span>Students</span> <i class="fa fa-angle-right arrow"></i></a>
                                    <ul class="child-nav">
                                        <li><a href=""><i class="fa fa-bars"></i> <span>Add Students</span></a></li>
                                        <li><a href=""><i class="fa fa fa-server"></i> <span>Manage Students</span></a></li>
                                        
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#"><i class="fa fa-info-circle"></i> <span>Result</span> <i class="fa fa-angle-right arrow"></i></a>
                                    <ul class="child-nav">
                                        <li><a href=""><i class="fa fa-bars"></i> <span>Add Result</span></a></li>
                                        <li><a href=""><i class="fa fa fa-server"></i> <span>Manage Result</span></a></li>
                                        
                                    </ul>
                                    <li><a href=""><i class="fa fa fa-user"></i> <span> Admin</span></a></li>
                                    <li><a href=""><i class="fa fa fa-server"></i> <span> Admin Change Password</span></a></li>
                                    
                                </li>
                            </div>
                            <!-- /.sidebar-nav -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>