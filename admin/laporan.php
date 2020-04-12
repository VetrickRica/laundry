<?php 

require 'layouts/header.php';
require '../functions.php';

$transaksi = query("SELECT * FROM tb_transaksi");

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
      <div class="row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title">Laporan Transaksi</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="#">Beranda</a></li>
            <li class="active">Transaksi</li>
          </ol>
        </div>
      </div>

      <div class='panel panel-border panel-primary'>
        <div class='panel-heading'> 
          <h3 class='panel-title'><i class='fa fa-clock-o'></i> Laporan Transaksi</h3> 
        </div>  <div class='panel-body'> 
          <br/>
          <table id='datatable' class='table table-hover'>
            <thead>
              <tr>
                <th><i class='icon-terminal'></i> No</th>
                <th><i class='icon-signal'></i> Tgl. Transaksi</th>
                <th><i class='icon-signal'></i> Status</th>
                <th><i class='icon-signal'></i> Batas Waktu</th>
                <th><i class='icon-signal'></i> Status Order</th>
                <th><i class='icon-signal'></i> Total</th>
                <th><i class='icon-signal'></i> Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $nomor=1; ?>
              <?php foreach($transaksi as $t) : ?>
               <tr>
                 <td><?php echo $nomor++; ?></b></td>

                 <td><?php echo $t["tgl"]; ?></td>
                 <td><div class="btn btn-success"><?php echo $t["dibayar"]; ?></div></td>
                 <td><?php echo $t["batas_waktu"] ?></td>
                 <td><div class="btn btn-info"><?php echo $t["status"]; ?></div></td>
                 <td>Rp.<?php echo number_format($t["total"],0,',','.'); ?></td>
                 <td>
                  <a class='btn btn-primary' target="_blank"  href="cetak.php?id=<?php echo $t["id"]; ?>"><i class='icon-edit'></i>Cetak</a>
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