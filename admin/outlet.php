<?php 

require 'layouts/header.php';
require '../functions.php';

$outlet = query("SELECT * FROM tb_outlet");

?>                  
<div class="content-page">

    <div class="content">
        <div class="container">

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
                        <h3 class='panel-title'><i class='fa fa-user'></i> Data Administrator</h3> 
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

        
        <?php require 'layouts/footer.php'; ?>


        