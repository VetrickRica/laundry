<?php 
require 'layouts/header.php';
require '../functions.php'; 
$outlet = query("SELECT * FROM tb_outlet");
$paket = query("SELECT * FROM tb_paket");
$rand = rand(10,50000000000);
$member = query("SELECT * FROM tb_member");


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    
    // cek apakah tombol submit berhasil ditambahkan atau tidak
    if (tambah_tranksaksi($_POST) > 0) {
        echo "<script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'transaksi.php';
        </script>";
    } else {

        echo "<script>
        alert('Data gagal ditambahkan');
        document.location.href = 'transaksi.php';
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
                            <form method="post" action="" enctype="multipart/form-data" class="cmxform form-horizontal tasi-form" id="commentForm" >
                                <input type="hidden" name="id_user" value="<?php echo $_SESSION["user"]["id"]; ?>">
                                <div class="form-group">
                                    <label for="cname" class="control-label col-lg-2">Paket Laundry</label>
                                    <div class="col-lg-10">
                                      <select  class="form-control" name="id_outlet" onchange="changeValue(this.value)">
                                        <option value="0">-- Pilih  Outlet --</option>
                                        <?php foreach($outlet as $o) : ?>
                                            <option value="<?php echo $o["id"]  ?>"><?php echo $o["nama"] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <label for="cname" class="control-label col-lg-2">Kode Invoice</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="kode_invoice" required value="LA-<?php echo $rand; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cname" class="control-label col-lg-2">Pilih Member</label>
                                <div class="col-lg-10">
                                    <select  class="form-control" name="id_member" onchange="changeValue(this.value)">
                                        <option value="0">-- Pilih Member --</option>
                                        <?php foreach($member as $p) : ?>
                                            <option value="<?php echo $p["id"] ?>"><?php echo $p["nama"] ?></option>   
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cname" class="control-label col-lg-2">Batas Waktu</label>
                                <div class="col-lg-10">
                                    <input type="datetime" class="form-control" name="batas_waktu" value="<?php date_default_timezone_set('Asia/Jakarta'); $waktu = date("Y-m-d H:i:s"); echo $waktu; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cname" class="control-label col-lg-2">Paket</label>
                                <div class="col-lg-10">
                                    <select  class="form-control" name="harga" onchange="changeValue(this.value)">
                                        <option value="0">-- Pilih  Paket --</option>
                                        <?php foreach($paket as $o) : ?>
                                            <option value="<?php echo $o["harga"]  ?>"><?php echo $o["nama_paket"] ?> - <?php echo $o["jenis"] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">Proses Order</button>
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
<?php require 'layouts/footer.php'; ?>