<?php 

require 'layouts/header.php';
require '../functions.php';

$paket = query("SELECT * FROM tb_paket");

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
          <h4 class="pull-left page-title">Paket Laundry</h4>
          <ol class="breadcrumb pull-right">
            <li><a href="#">Beranda</a></li>
            <li class="active">Paket Laundry</li>
          </ol>
        </div>
      </div>
      <div class='panel panel-border panel-primary'>
        <div class='panel-heading'> 
         <h3 class='panel-title'><i class='fa fa-list'></i> Data Paket Laundry</h3> 
       </div>  <div class='panel-body'> 
        <p align='left'><a class='btn btn-primary' href='tambah_paket_laundry.php'><i class='icon-plus'></i>Tambah Paket Laundry</a></p>
        <hr><table id='datatable' class='table table-hover'>
          <thead>
           <tr>
            <th><i class='icon-time'></i> No</th>
            <th><i class='icon-time'></i> Jenis</th>
            <th><i class='icon-signal'></i> Harga/Kg</th>
            <th><i class='icon-chevron-right'></i> Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; ?>
          <?php foreach($paket as $p) : ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $p["jenis"]; ?></td>
              <td>Rp.<?php echo number_format($p["harga"],0,',','.'); ?></td>
              <td><a class='btn btn-primary' href="update_paket.php?id=<?php echo $p["id"]; ?>"><i class='icon-edit'></i>Edit</a>
               <a class='btn btn-danger' href="hapus_paket.php?id=<?php echo $p["id"]; ?>" onClick="return confirm('Anda yakin ingin menghapus ini?');"><i class='icon-trash'></i>Hapus</td>
               <?php endforeach; ?>

             </tr>
           </tbody>
         </table>
       </div><!-- /.box-body -->
     </div><!-- /.box -->       
     

     </html>
   </body>
   </html>
 </div> 
 <?php require 'layouts/footer.php'; ?>
 