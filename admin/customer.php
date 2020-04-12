                
<?php 

require 'layouts/header.php';
require '../functions.php';

$member = query("SELECT * FROM tb_member");

?>     						<div class="content-page">

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
						<h4 class="pull-left page-title">Data Customer</h4>
						<ol class="breadcrumb pull-right">
							<li><a href="#">Beranda</a></li>
							<li class="active">Data Customer</li>
						</ol>
					</div>
				</div>

				<div class='panel panel-border panel-primary'>
					<div class='panel-heading'> 
						<h3 class='panel-title'><i class='fa fa-user'></i> Data Customer</h3> 
					</div>  <div class='panel-body'> 
						<p align='left'><a class='btn btn-primary' href='tambah_customer.php'><i class='icon-plus'></i>Tambah Customer</a></p>
						<br/>
						<table id='datatable' class='table table-hover'>
							<thead>
								<tr>
									<th><i class='icon-terminal'></i> No.</th>
									<th><i class='icon-terminal'></i> Nama</th>
									<th><i class='icon-signal'></i> Alamat</th>
									<th><i class='icon-signal'></i> Telp</th>
									<th><i class='icon-chevron-right'></i> Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $nomor=1; ?>
								<?php foreach($member as $m) : ?>
									<tr>
										<td><?php echo $nomor++; ?></td>
										<td><?php echo $m["nama"]; ?></td>
										<td><?php echo $m["alamat"]; ?></td>
										<td><?php echo $m["tlp"]; ?></td>
										<td>
											<a class='btn btn-danger' href='hapus_customer.php?id=<?php echo $m["id"]; ?>'><i class='icon-edit'></i>Hapus</a> 
											<a class='btn btn-primary' href='update_customer.php?id=<?php echo $m["id"]; ?>'><i class='icon-edit'></i>Edit</a>
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
	<?php 

	require 'layouts/footer.php';

	?>     