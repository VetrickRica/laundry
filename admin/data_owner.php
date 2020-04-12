<?php 

require 'layouts/header.php';
require '../functions.php';

$outlet = query("SELECT * FROM tb_outlet");
$user = query("SELECT * FROM tb_user WHERE role = 'owner'");

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

				<div class='panel panel-border panel-primary'>
					<div class='panel-heading'> 
						<h3 class='panel-title'><i class='fa fa-user'></i> Data Owner</h3> 
					</div>  <div class='panel-body'> 
						<p align='left'><a class='btn btn-primary' href='tambah_owner.php'><i class='icon-plus'></i>Tambah Owner</a></p>
						<br/>
						<table id='datatable' class='table table-hover'>
							<thead>
								<tr>
									<th><i class='icon-terminal'></i> No.</th>
									<th><i class='icon-terminal'></i> Nama</th>
									<th><i class='icon-terminal'></i> Username</th>
									<th><i class='icon-chevron-right'></i> Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $nomor=1; ?>
								<?php foreach($user as $s) : ?>
									<tr>
										<td><?php echo $nomor++; ?></td>
										<td><?php echo $s["nama"] ?></td>
										<td><?php echo $s["username"]; ?></td>
										<td><a class='btn btn-primary' href="update_owner.php?id=<?php echo $s["id"]; ?>"><i class='icon-edit'></i>Edit</a>
											<a href="hapus_kasir.php?id=<?php echo $s["id"]; ?>" class='btn btn-danger' onclick="return confirm('Anda yakin ingin menghapus ini?');"><i class='icon-trash'></i>Hapus</td>

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