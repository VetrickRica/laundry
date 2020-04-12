<?php require 'layouts/header.php'; 
require '../functions.php';
$outlet = query("SELECT * FROM tb_outlet");
$customer = mysqli_query($conn,"SELECT * FROM tb_member");
$hitungCustomer = mysqli_num_rows($customer);
$karyawan = mysqli_query($conn,"SELECT * FROM tb_user WHERE role = 'kasir'");
$hitungkaryawan = mysqli_num_rows($karyawan);
$transaksi = mysqli_query($conn,"SELECT * FROM tb_transaksi");
$hitungtransaksi = mysqli_num_rows($transaksi);
$jumlahoutlet = mysqli_query($conn,"SELECT * FROM tb_outlet");
$hitungoutlet = mysqli_num_rows($jumlahoutlet);
?>              
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
            <div class='row'>
                <div class='col-sm-12'>
                    <h4 class='pull-left page-title'>Selamat Datang Di [ZX]Laundry </h4>
                    <ol class='breadcrumb pull-right'>
                        <li><a href='index.php'>Beranda</a></li>
                        <li class='active'>Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- Start Widget -->
            <!--Widget-4 -->
            <div class='row'>
                <div class='col-sm-6 col-lg-3'>
                    <div class='mini-stat clearfix bx-shadow bg-white'>
                        <span class='mini-stat-icon bg-info'><i class='ion-android-contacts'></i></span>
                        <div class='mini-stat-info text-right text-dark'><span class='counter text-dark'><?php echo $hitungCustomer ?></span>
                            Total Customer
                        </div>
                    </div>
                </div>
                <div class='col-sm-6 col-lg-3'>
                    <div class='mini-stat clearfix bx-shadow bg-white'>
                        <span class='mini-stat-icon bg-success'><i class='ion-android-contacts'></i></span>
                        <div class='mini-stat-info text-right text-dark'><span class='counter text-dark'><?php echo $hitungkaryawan ?></span>
                            Total Karyawan
                        </div>
                    </div>
                </div>
                <div class='col-sm-6 col-lg-3'>
                    <div class='mini-stat clearfix bx-shadow bg-white'>
                        <span class='mini-stat-icon bg-primary'><i class='ion-ios7-cart'></i></span>
                        <div class='mini-stat-info text-right text-dark'><span class='counter text-dark'><?php echo $hitungtransaksi ?></span>
                            Transaksi
                        </div>
                    </div>
                </div>
                <div class='col-sm-6 col-lg-3'>
                    <div class='mini-stat clearfix bx-shadow bg-white'>
                        <span class='mini-stat-icon bg-purple'><i class='ion-ios7-cart'></i></span>
                        <div class='mini-stat-info text-right text-dark'> <span class='counter text-dark'><?php echo $hitungoutlet ?></span>
                            Total Outlet
                        </div>
                    </div>
                </div>
            </div> <!-- End row-->             
          <div class='panel panel-border panel-primary'>
                    <div class='panel-heading'> 
                        <h3 class='panel-title'><i class='fa fa-user'></i> Data Outlet</h3> 
                    </div>  <div class='panel-body'> 
                        <p align='left'><a class='btn btn-primary' href='tambah_outlet.php'><i class='icon-plus'></i>Tambah Outlet</a></p>
                        <br/>
                        <table id='datatable' class='table table-hover'>
                            <thead>
                                <tr>
                                    <th><i class='icon-terminal'></i> No</th>
                                    <th><i class='icon-terminal'></i> Nama</th>
                                    <th><i class='icon-terminal'></i> Alamat</th>
                                    <th><i class='icon-terminal'></i> Telp</th>
                                    <th><i class='icon-terminal'></i> Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                <?php foreach($outlet as $o) : ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $o["nama"]; ?></td>
                                        <td><?php echo $o["alamat"]; ?></td>
                                        <td><?php echo $o["tlp"]; ?></td>
                                        <td>
                                            <a class='btn btn-danger' href='hapus_outlet.php?id=<?php echo $o["id"]; ?>'><i class='icon-edit'></i>Hapus</a> 
                                            <a class='btn btn-primary' href='update_outlet.php?id=<?php echo $o["id"]; ?>'><i class='icon-edit'></i>Edit</a>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->   

       </body>
       </html>
   </div> 

</div> 

</div>
</div>

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