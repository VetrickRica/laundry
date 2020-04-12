<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="jasa laundrymurah">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="images/favicon_1.ico">

    <title>[ZX]Laundry</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
    <link href="../css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet" />
    <link href="../css/waves-effect.css" rel="stylesheet">
    <link href="../assets/tagsinput/jquery.tagsinput.css" rel="stylesheet" />
    <link href="../assets/toggles/toggles.css" rel="stylesheet" />
    <link href="../assets/timepicker/bootstrap-timepicker.min.css" rel="stylesheet" />
    <link href="..assets/timepicker/bootstrap-datepicker.min.css" rel="stylesheet" />
    <link href="../assets/colorpicker/colorpicker.css" rel="stylesheet" type="text/css" />
    <link href="../assets/jquery-multi-select/multi-select.css"  rel="stylesheet" type="text/css" />
    <link href="../assets/select2/select2.css" rel="stylesheet" type="text/css" />
    <link href="../css/helper.css" rel="stylesheet" type="text/css" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <script src="../js/modernizr.min.js"></script>
    <link href="../assets/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />


</head>

<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="index.php" class="logo"><span>[ZX]Laundry</span></a>
                </div>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="">
                        <div class="pull-left">
                            <button class="button-menu-mobile open-left">
                                <i class="fa fa-bars"></i>
                            </button>
                            <span class="clearfix"></span>
                        </div>

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="dropdown">
                                <a href="index.php" data-target="#" class="dropdown-toggle waves-effect waves-light">
                                    <i class='md-add-shopping-cart'></i> <span class='badge badge-xs badge-danger'>106</span>                            
                                </a>

                            </li>
                            <li class="hidden-xs">
                                <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><i class="ion-android-add-contact"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="edit_admin.php"><i class="md md-face-unlock"></i> Edit Profil</a></li>
                                    <li><a href="../auth/logout.php"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <div class="user-details">
                    <div class="pull-left">
                        <i class="ion-android-contact"></i>
                    </div>
                    <div class="user-info">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <?php echo $_SESSION["user"]["username"] ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="edit_admin.php"><i class="md md-face-unlock"></i> Edit Profil<div class="ripple-wrapper"></div></a></li>
                                <li><a href="logout.php"><i class="md md-settings-power"></i> Logout</a></li>
                            </ul>
                        </div>
                        <p class="text-muted m-0"><?php echo $_SESSION["user"]["role"] ?></p>
                    </div>
                </div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                        <li>
                            <a href="index.php" class="waves-effect"><i class="md md-home"></i><span> Dashboard</a>
                            </li>
                            
                            <?php if($_SESSION["user"]["role"] === "admin") : ?>
                                <li class="has_sub">
                                    <a href="#" class="waves-effect"><i class="fa fa-user"></i> <span>Manajemen User</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="data_owner.php">Owner</a></li>
                                        <li><a href="data_kasir.php">Karyawan Kasir</a></li>
                                    </ul>
                                </li>
                            <?php endif; ?>

                            <li>
                                <?php if($_SESSION["user"]["role"] === "admin") :  ?>
                                    <a href="transaksi.php" class="waves-effect"><i class="fa fa-money"></i><span> Transaksi</a></li>
                                        <?php elseif ($_SESSION["user"]["role"] === "kasir") : ?>
                                            <a href="transaksi.php" class="waves-effect"><i class="fa fa-money"></i><span> Transaksi</a></li>
                                            <?php endif; ?>
                                            <?php if($_SESSION["user"]["role"] === "admin") : ?>
                                                <li><a href="paket_laundry.php" class="waves-effect"><i class="md md-home"></i><span> Paket Laundry</a></li>
                                                <?php endif; ?>
                                                <?php if($_SESSION["user"]["role"] === "admin") :  ?>
                                                    <li><a href="customer.php" class="waves-effect"><i class="fa fa-user"></i><span> Customer</a></li>
                                                        <?php elseif ($_SESSION["user"]["role"] === "kasir") : ?>
                                                            <li><a href="customer.php" class="waves-effect"><i class="fa fa-user"></i><span> Customer</a></li>
                                                            <?php endif; ?>
                                                            <li><a href="laporan.php"><i class="fa fa-book"></i><span>Laporan</span></a></li>
                                                            <?php if($_SESSION["user"]["role"] === "admin") : ?>
                                                                <li><a href="outlet.php"><i class="fa fa-book"></i><span>Outlet</span></a></li>
                                                            <?php endif; ?>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>  