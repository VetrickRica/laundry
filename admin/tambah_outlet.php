<?php 
require 'layouts/header.php';
require '../functions.php'; 

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	
    // cek apakah tombol submit berhasil ditambahkan atau tidak
	if (tambah_outlet($_POST) > 0) {
		echo "<script>
		alert('Data berhasil ditambahkan');
		document.location.href = 'outlet.php';
		</script>";
	} else {

		echo "<script>
		alert('Data gagal ditambahkan');
		document.location.href = 'outlet.php';
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
						<h4 class='pull-left page-title'>Tambah Data Outlet</h4>
						<ol class='breadcrumb pull-right'>
							<li><a href='#'>Beranda</a></li>
							<li class='active'>Tambah Data Outlet</li>
						</ol>
					</div>
				</div>

				<div class='col-sm-12'>
					<div class='panel panel-default'>
						<div class='panel-heading'><h3 class='panel-title'>Tambah Data Outlet</h3></div>
						<div class='panel-body'>
							<div class='form'><form method="post" action="" class='cmxform form-horizontal tasi-form' id='commentForm' autocomplete="off">


								<div class='form-group'>
									<label for='cname' class='control-label col-lg-2'>Nama Lengkap</label>
									<div class='col-lg-10'>
										<input type='text' class='form-control' name="nama" placeholder='Masukan Nama Outlet' required>
									</div>
								</div>

								<div class='form-group'>
									<label for='cname' class='control-label col-lg-2'>Alamat Lengkap</label>
									<div class='col-lg-10'>
										<textarea class='form-control' id='ccomment' name="alamat" required='' aria-required='true' placeholder='Alamat Outlet'></textarea>
									</div>
								</div>


								<div class='form-group'>
									<label for='cname' class='control-label col-lg-2'>Telepon</label>
									<div class='col-lg-10'>
										<input type='number' class='form-control' name="tlp" placeholder='Masukan No. Telepon' required>
									</div>
								</div>


								<div class='form-group'>
									<div class='col-lg-offset-2 col-lg-10'>
										<button class='btn btn-primary waves-effect waves-light' type="submit" name="submit">Tambah</button>
										<a class='btn btn-danger' href='?p=Outlet'>Batal</a>
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

	<?php require 'layouts/footer.php'; ?>