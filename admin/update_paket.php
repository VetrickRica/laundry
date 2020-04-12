<?php 

require 'layouts/header.php';
require '../functions.php';

$outlet = query("SELECT * FROM tb_outlet");
$jenis = ["kiloan","selimut","kaos","cuci_kering","boneka"];
$id = $_GET["id"];
$paket = query("SELECT * FROM tb_paket WHERE id = '$id'")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    
    // cek apakah tombol submit berhasil diupdatekan atau tidak
    if (update_paket($_POST) > 0) {
        echo "<script>
        alert('Data berhasil diupdate');
        document.location.href = 'paket_laundry.php';
        </script>";
    } else {

        echo "<script>
        alert('Data gagal diupdate');
        document.location.href = 'paket_laundry.php';
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
          <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title">Paket Laundry</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Beranda</a></li>
                    <li class="active">Paket Laundry</li>
                </ol>
            </div>
        </div>
        <form method="post" action="" enctype='multipart/form-data'><div class="panel panel-border panel-primary">
            <input type="hidden" name="id" value="<?php echo $paket["id"]; ?>">
            <div class="panel-heading"> 
               <h3 class="panel-title"><i class="fa fa-list"></i> update Paket Laundy</h3> 
           </div>  
           <div class="panel-body">
               <div class="control-group">
                <div class="form-group">
                    <label for="cname" class="control-label col-lg-2"> Outlet</label>
                    
                    <select  class="form-control" name="id_outlet" onchange="changeValue(this.value)">
                        <option value="0">-- Pilih  Outlet --</option>
                        <?php foreach($outlet as $o) : ?>
                            <?php if($o["id"] === $paket["id_outlet"]): ?>
                              <option value="<?php echo $o["id"]  ?>" selected><?php echo $o["nama"] ?></option>
                              <?php else: ?>
                                <option value="<?php echo $o["id"]  ?>"><?php echo $o["nama"] ?></option>
                            <?php endif; ?>
                            
                        <?php endforeach; ?>
                    </select>
                    
                </div>
                <div class="form-group">
                   <label>Jenis</label>
                   
                   <select  class="form-control" name="jenis" onchange="changeValue(this.value)">
                    <option value="0">-- Pilih  Jenis --</option>
                    <?php foreach($jenis as $j) : ?>
                        <?php if($j === $paket["jenis"]) : ?>
                            <option value="<?php echo $j  ?>" selected><?php echo $j ?></option>
                            <?php else: ?>
                                <option value="<?php echo $j  ?>"><?php echo $j ?></option>
                            <?php endif; ?>
                            
                        <?php endforeach; ?>
                    </select>
                    
                </div>	
                <div class="form-group">
                   <label>Nama Paket</label>
                   <div class="span9"><input class="form-control" placeholder="Masukan Nama Paket"  type="text" name="nama_paket" value="<?php echo $paket["nama_paket"] ?>" /></div>
               </div> 					
               <div class="form-group">
                   <label>Harga/Kg</label>
                   <div class="span9"><input class="form-control" size="16" type="number" placeholder="Masukan Harga Laundry" name="harga" value="<?php echo $paket["harga"]; ?>" /></div>
               </div>				 
               <Br>

               <input type="submit" name="submit" class="btn btn-primary" value="Update"> <a class="btn btn-danger" href="?p=paket">Batal</a>
           </form>
           <br>

       </div> 

   </div>
</div>     
</body>

</html>

<?php require 'layouts/footer.php'; ?>