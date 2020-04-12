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
                                 <i class='md-add-shopping-cart'></i> <span class='badge badge-xs badge-danger'>98</span>                                    
                             </a>

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
                        <a href="kasir.php" class="waves-effect"><i class="md md-home"></i><span> Dashboard</a>
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
                                    <h4 class="pull-left page-title">Order Laundry </h4>
                                    <ol class="breadcrumb pull-right">
                                        <li><a href="Kasir.php">Beranda</a></li>
                                        <li class="active">Order Laundry</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Order Laundry</h3></div>
                                    <div class="panel-body">
                                        <div class="form">
                                            <form method='post' action='transaksi/proses.php?act=input' enctype='multipart/form-data' class="cmxform form-horizontal tasi-form" id="commentForm" >

                                                <div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">No. Order</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="no_order" class="form-control" value="ORD-000214" disabled="disabled" />
                                                        <input type="hidden" name="no_order" value="ORD-000214" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">Nama Customer</label>
                                                    <div class="col-lg-10">
                                                        <select class="select2 form-control" name="customer" onchange="changeValue(this.value)">
                                                            <option value="0">-- Pilih Nama Customer --</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">Telepon</label>
                                                    <div class="col-lg-10">
                                                        <input type="number" class="form-control" name="telp" id="telp" placeholder="Masukan No. Telepon" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">Alamat Lengkap</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat Lengkap" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">Paket Laundry</label>
                                                    <div class="col-lg-10">
                                                        <select  class="form-control" name="paket" onchange="changeValue(this.value)">
                                                            <option value="0">-- Pilih Paket Laundry --</option>

                                                            <option value="kilat">kilat</option><option value="cuci kering ">cuci kering </option><option value="Baju">Baju</option><option value="cuci sepatu">cuci sepatu</option><option value="kiloan">kiloan</option><option value="Bad Cover">Bad Cover</option> 
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">Berat (kg)</label>
                                                    <div class="col-lg-10">
                                                        <input type="number" class="form-control" name="berat" placeholder="Masukan Berat Pakaian" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cname" class="control-label col-lg-2">Tanggal Ambil</label>
                                                    <div class="col-lg-10">
                                                      <input type="text" class="form-control" name="tgl_ambil" placeholder="dd/mm/yyyy" id="datepicker-multiple">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                <label for="cname" class="control-label col-lg-2">Tipe Pembayaran</label>
                                                <div class="col-lg-10">
                                                    <select  class="form-control" name="pembayaran">
                                                        <option value="0">-- Pilih Tipe Pembayaran--</option>
                                                        <option value="COD">COD</option>
                                                        <option value="Ditempat">Ditempat</option>
                                                    </select>
                                                </div>   
                                            </div>  

                                            <div class="form-group">
                                                <label for="cname" class="control-label col-lg-2">Status Pembayaran</label>
                                                <div class="col-lg-10">
                                                    <select  class="form-control" name="status">
                                                        <option value="0">-- Pilih Status Pembayaran--</option>
                                                        <option value="Belum Lunas">Belum Lunas</option>
                                                        <option value="Lunas">Lunas</option>
                                                    </select>
                                                </div>      
                                            </div>    
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Proses Order</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>

                                </div>					 
                            </div>					 
                        </div>

                    </script> 

                </body>
                </html>
            </div> 

        </div> 

    </div>
</div>

<script>
    var resizefunc = [];
</script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/waves.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="assets/jquery-detectmobile/detect.js"></script>
<script src="assets/fastclick/fastclick.js"></script>
<script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="assets/jquery-blockui/jquery.blockUI.js"></script>
<script src="js/jquery.app.js"></script>
<script src="assets/tagsinput/jquery.tagsinput.min.js"></script>
<script src="assets/toggles/toggles.min.js"></script>
<script src="assets/timepicker/bootstrap-timepicker.min.js"></script>
<script src="assets/timepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/colorpicker/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="assets/jquery-multi-select/jquery.multi-select.js"></script>
<script type="text/javascript" src="assets/jquery-multi-select/jquery.quicksearch.js"></script>
<script src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/spinner/spinner.min.js"></script>
<script src="assets/select2/select2.min.js" type="text/javascript"></script>

<script src="assets/datatables/jquery.dataTables.min.js"></script>
<script src="assets/datatables/dataTables.bootstrap.js"></script>


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