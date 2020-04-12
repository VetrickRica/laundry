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
    <link href="../assets/timepicker/bootstrap-datepicker.min.css" rel="stylesheet" />
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
                    <a href="kasir.php" class="logo"><span>[ZX]Laundry</span></a>
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
                                <a href="index.php?p=ordermasuk" data-target="#" class="dropdown-toggle waves-effect waves-light">
                                 <i class='md-add-shopping-cart'></i> <span class='badge badge-xs badge-danger'>98</span>                                    </a>

                             </li>
                             <li class="hidden-xs">
                                <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><i class="ion-android-add-contact"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="edit_kasir.php"><i class="md md-face-unlock"></i> Edit Profil</a></li>
                                    <li><a href="logout.php"><i class="md md-settings-power"></i> Logout</a></li>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Vetrick <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="edit_kasir.php"><i class="md md-face-unlock"></i> Edit Profil<div class="ripple-wrapper"></div></a></li>
                                <li><a href="logout.php"><i class="md md-settings-power"></i> Logout</a></li>
                            </ul>
                        </div>
                        <p class="text-muted m-0">Kasir</p>
                    </div>
                </div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                        <li>
                            <a href="index.php" class="waves-effect"><i class="md md-home"></i><span> Dashboard</a>
                            </li>

                            <li><a href="transaksi.php" class="waves-effect"><i class="fa fa-money"></i><span> Transaksi</a></li>
                                <li><a href="customer.php" class="waves-effect"><i class="fa fa-user"></i><span> Customer </a></li>



                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>                    
                    <div class="content-page">

                        <div class="content">
                            <div class="container">

                             <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                             <html xmlns="http://www.w3.org/1999/xhtml">
                             <head>
                                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                                <title>[ZX]Laundry</title>
                            </head>

                            <body>
                              <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="pull-left page-title">Transaksi</h4>
                                    <ol class="breadcrumb pull-right">
                                        <li><a href="kasir.php">Beranda</a></li>
                                        <li class="active">Transaksi</li>
                                    </ol>
                                </div>
                            </div>
                            <div class='panel panel-border panel-primary'>
                                <div class='panel-heading'> 
                                    <h3 class='panel-title'><i class='fa fa-clock-o'></i> Transaksi</h3> 
                                </div>  <div class='panel-body'> 
                                    <p align='left'><a class='btn btn-primary' href='tambah_transaksi.php'><i class='icon-plus'></i>Tambah Transaksi</a></p>
                                    <br/>
                                    <table id='datatable' class='table table-hover'>
                                        <thead>
                                            <tr>
                                                <th><i class='icon-terminal'></i> No</th>
                                                <th><i class='icon-signal'></i> Tgl. Transaksi</th>
                                                <th><i class='icon-signal'></i> Pembayaran</th>
                                                <th><i class='icon-signal'></i> Customer</th>
                                                <th><i class='icon-terminal'></i> Paket</th>
                                                <th><i class='icon-signal'></i> Status Order</th>
                                                <th><i class='icon-signal'></i> Total</th>
                                                <th><i class='icon-signal'></i> Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                             <td><b>1</b></td>

                                             <td><b>02/18/2020-13:37:36</b></td>
                                             <td><div class="btn btn-success"><b>Belum Lunas</b></div></td>
                                             <td><b>Ridwan</b></td>
                                             <td><b>Baju</b></td>
                                             <td><div class="btn btn-info"><b>Baru</b></div></td>
                                             <td><b>Rp. 60.090,-</b></td>
                                             <td><a class='btn btn-primary' href='?p=transaksi&aksi=detailtransaksi&id=ORD-000213'><i class='icon-edit'></i>Detail</a></td>

                                         </tr>
                                         <tr>
                                             <td><b>2</b></td>

                                             <td><b>02/18/2020-09:21:29</b></td>
                                             <td><div class="btn btn-success"><b>Lunas</b></div></td>
                                             <td><b>Andi</b></td>
                                             <td><b>kilat</b></td>
                                             <td><div class="btn btn-info"><b>Baru</b></div></td>
                                             <td><b>Rp. 240.000,-</b></td>
                                             <td><a class='btn btn-primary' href='?p=transaksi&aksi=detailtransaksi&id=ORD-000212'><i class='icon-edit'></i>Detail</a></td>

                                         </tr>
                                     </tbody>
                                 </table>
                             </div><!-- /.box-body -->
                         </div><!-- /.box --> 
                     </body>
                     </html>
                 </div> 

             </div> 

         </div></div>

         <script>
            var resizefunc = [];
        </script>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/waves.js"></script>
        <script src="../js/wow.min.js"></script>
        <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="../js/jquery.scrollTo.min.js"></script>
        <script src="../assets/jquery-detectmobile/detect.js"></script>
        <script src="../assets/fastclick/fastclick.js"></script>
        <script src="../assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="../assets/jquery-blockui/jquery.blockUI.js"></script>
        <script src="../js/jquery.app.js"></script>
        <script src="../assets/tagsinput/jquery.tagsinput.min.js"></script>
        <script src="../assets/toggles/toggles.min.js"></script>
        <script src="../assets/timepicker/bootstrap-timepicker.min.js"></script>
        <script src="../assets/timepicker/bootstrap-datepicker.js"></script>
        <script type="../text/javascript" src="assets/colorpicker/bootstrap-colorpicker.js"></script>
        <script type="../text/javascript" src="assets/jquery-multi-select/jquery.multi-select.js"></script>
        <script type="../text/javascript" src="assets/jquery-multi-select/jquery.quicksearch.js"></script>
        <script src="../assets/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
        <script type="../text/javascript" src="assets/spinner/spinner.min.js"></script>
        <script src="../assets/select2/select2.min.js" type="text/javascript"></script>

        <script src="../assets/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/datatables/dataTables.bootstrap.js"></script>




        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );

			// Date Picker
            jQuery('#datepicker').datepicker();
            jQuery('#datepicker-inline').datepicker();
            jQuery('#datepicker-multiple1').datepicker();
            jQuery('#datepicker-multiple2').datepicker();
            jQuery('#datepicker-multiple').datepicker({
                numberOfMonths: 5,
                showButtonPanel: true
            });
				 // Select2
                jQuery(".select2").select2({
                    width: '100%'
                });


            </script>

        </body>
        </html>