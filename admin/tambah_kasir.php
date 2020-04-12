<?php 
require_once 'layouts/header.php'; 
require '../functions.php'; 
$outlet = query("SELECT * FROM tb_outlet");

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	
    // cek apakah tombol submit berhasil ditambahkan atau tidak
	if (tambah_kasir($_POST) > 0) {
		echo "<script>
		alert('Data berhasil ditambahkan');
		document.location.href = 'data_kasir.php';
		</script>";
	} else {

		echo "<script>
		alert('Data gagal ditambahkan');
		document.location.href = 'data_kasir.php';
		</script>";
	}
}
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
						<h4 class='pull-left page-title'>Tambah Data Karyawan</h4>
						<ol class='breadcrumb pull-right'>
							<li><a href='#'>Beranda</a></li>
							<li class='active'>Tambah Data Karyawan</li>
						</ol>
					</div>
				</div>

				<div class='col-sm-12'>
					<div class='panel panel-default'>
						<div class='panel-heading'><h3 class='panel-title'>Tambah Data Karyawan</h3></div>
						<div class='panel-body'>
							<div class='form'>
								<form method='post' action="" class='cmxform form-horizontal tasi-form' id='commentForm'>
									<div class='form-group'>
										<label for='cname' class='control-label col-lg-2'>Nama Lengkap</label>
										<div class='col-lg-10'>
											<input type='text' class='form-control' name='nama' placeholder='Masukan Nama Karyawan' required>
										</div>
									</div>

									<div class='form-group'>
										<label for='cname' class='control-label col-lg-2'>Username</label>
										<div class='col-lg-10'>
											<input type='text' class='form-control' name='username' placeholder='Masukan Username' required>
										</div>
									</div>


									<div class='form-group'>
										<label for='cname' class='control-label col-lg-2'>Password</label>
										<div class='col-lg-10'>
											<input type='password' class='form-control' name='password' placeholder='Masukan Password' required>
										</div>
									</div>

									<div class="form-group">
										<label for="cname" class="control-label col-lg-2"> Outlet</label>
										<div class="col-lg-10">
											<select  class="form-control" name="id_outlet" onchange="changeValue(this.value)">
												<option value="0">-- Pilih  Outlet --</option>
												<?php foreach($outlet as $o) : ?>
													<option value="<?php echo $o["id"]  ?>"><?php echo $o["nama"] ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>

									<div class='form-group'>
										<div class='col-lg-offset-2 col-lg-10'>
											<button class='btn btn-primary waves-effect waves-light' type='submit' name="submit">Tambah</button>
											<a class='btn btn-danger' href='?p=karyawan'>Batal</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
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