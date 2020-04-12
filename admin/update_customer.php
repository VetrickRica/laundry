<?php 
require 'layouts/header.php';
require '../functions.php'; 
$id = $_GET["id"];
$member = query("SELECT * FROM tb_member WHERE id = '$id'")[0];
$gender = ['L','P'];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  
    // cek apakah tombol submit berhasil diupdate atau tidak
  if (update_member($_POST) > 0) {
    echo "<script>
    alert('Data berhasil diupdate');
    document.location.href = 'customer.php';
    </script>";
  } else {

    echo "<script>
    alert('Data gagal diupdate');
    document.location.href = 'customer.php';
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
          <h4 class='pull-left page-title'>Update Data Member</h4>
          <ol class='breadcrumb pull-right'>
            <li><a href='#'>Beranda</a></li>
            <li class='active'>Update Data Member</li>
          </ol>
        </div>
      </div>

      <div class='col-sm-12'>
        <div class='panel panel-default'>
          <div class='panel-heading'><h3 class='panel-title'>Update Data Member</h3></div>
          <div class='panel-body'>
            <div class='form'>
              <form method="post" action="" class='cmxform form-horizontal tasi-form' id='commentForm' autocomplete="off">
                <input type="hidden" name="id" value="<?php echo $member["id"]; ?>">

                <div class='form-group'>
                  <label for='cname' class='control-label col-lg-2'>Nama Lengkap</label>
                  <div class='col-lg-10'>
                    <input type='text' class='form-control' name="nama" placeholder='Masukan Nama Outlet' value="<?php echo $member["nama"] ?>" required>
                  </div>
                </div>


                <div class='form-group'>
                  <label for='cname' class='control-label col-lg-2'>Alamat Lengkap</label>
                  <div class='col-lg-10'>
                    <textarea class='form-control' id='ccomment' name="alamat" required aria-required='true' placeholder='Alamat Outlet'><?php echo $member["alamat"]; ?></textarea>
                  </div>
                </div>

                <div class='form-group'>
                 <label for='cname' class='control-label col-lg-2'>Gender</label>
                 <div class='col-lg-10'>
                  <select class='form-control' name='gender'>
                    <option>Pilih Kelamin</option>
                    <?php foreach($gender as $g) : ?>
                      <?php if($g === $member["jenis_kelamin"]) : ?>
                        <option value='<?php echo $g ?>' selected><?php echo $g ?></option>
                        <?php else: ?>
                          <option value='<?php echo $g ?>'><?php echo $g ?></option>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>


                <div class='form-group'>
                  <label for='cname' class='control-label col-lg-2'>Telepon</label>
                  <div class='col-lg-10'>
                    <input type='number' class='form-control' name="tlp" placeholder='Masukan No. Telepon' value="<?php echo $member["tlp"] ?>" required>
                  </div>
                </div>




                <div class='form-group'>
                  <div class='col-lg-offset-2 col-lg-10'>
                    <button class='btn btn-primary waves-effect waves-light' type="submit" name="submit">Update</button>
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