 <?php
    include 'config/koneksi.php';
    include 'library/controllers.php';
    $perintah = new oop();

$table = "boking";
$where = "id_booking = $_GET[id]";
$redirect = "?menu=riwayat";

if (isset($_GET['edit'])) {
    $edit = $perintah->edit($con, $table, $where);
}
if (isset($_POST['simpan'])) {
    $sql = mysqli_query($con,"INSERT INTO selesai_booking VALUES('$_GET[id]','$_POST[nama]','$_POST[email]','$_POST[no_tlpn]','$_POST[bengkel]','$_POST[tipe]','$_POST[model]','$_POST[nopol]','$_POST[jenis_servis]','$_POST[tgl_booking]','$_POST[jam]','$_POST[pesan]')");
        if($sql){
            
            $perintah->hapus($con, $table, $where, $redirect);
        }
}
if (empty($_SESSION['username'])) {
    echo "<script>alert('Silahkan login terlebih dahulu');document.location.href='../index.php'</script>";
}
?>
 <!DOCTYPE html>
<html lang="en">

  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />


<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="" class="simple-text logo-mini">
          
        </a>
        <a href="" class="simple-text logo-normal">
          Booking Servis
          
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="">
            <a href="?menu=home">
              <i class="nc-icon nc-bank"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="active">
            <a href="?menu=booking">
              <i class="nc-icon nc-bookmark-2"></i>
              <p>Booking</p>
            </a>
          </li>
          <li>
            <a href="?menu=dealer">
              <i class="nc-icon nc-pin-3"></i>
              <p>Daftar Dealer</p>
            </a>
          </li>
          <li>
            <a href="?menu=riwayat">
              <i class="nc-icon nc-time-alarm"></i>
              <p>Riwayat Servis</p>
            </a>
          </li>
          <li>
            <a href="?menu=kontak">
              <i class="nc-icon nc-email-85"></i>
              <p>Contact</p>
            </a>
          </li>
        </ul>
      </div>
    </div>


        <div class="content">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="title">Berikut adalah data bookingan anda</font></h5>
                <p>*Jika sudah benar, klik selesai jika anda telah mendapat layanan servis</p>
              </div>
              <div class="card-header">
                <h5 class="title"><font color="red">DATA DIRI</font></h5>
              </div>
              <div class="card-body">
                <form method="POST">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Nama</label>
                                      <input type="text" class="form-control" name="nama" value="<?php echo @$edit['nama'];?>" required>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Email</label>
                                      <input type="text" class="form-control" name="email" value="<?php echo @$edit['email'];?>" required>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>No. Telepon</label>
                                      <input type="text" class="form-control" name="no_tlpn" value="<?php echo @$edit['no_tlpn'];?>" required>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                                  <div class="card-header">
                                    <h5 class="title"><font color="red">DATA KENDARAAN</font></h5>
                                  </div>
                                <div class="row">
                                  <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                      <label>Pilih Bengkel</label>
                                     <input type="text" class="form-control" name="bengkel" value="<?php echo @$edit['bengkel'];?>" required>
                                    </div>
                                  </div>
                                  <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                     <label>Tipe Kendaraan</label>
                                     <input type="text" class="form-control" name="tipe" value="<?php echo @$edit['tipe'];?>" required>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Model Kendaraan (Contoh : Daihatsu Xenia)</label>
                                      <input type="text" class="form-control" name="model" value="<?php echo @$edit['model'];?>" required>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                      <label>No. Polisi</label>
                                      <input type="text" class="form-control" name="nopol" value="<?php echo @$edit['nopol'];?>" required>
                                    </div>
                                  </div>
                                  <div class="col-md-6 px-1">
                                    <div class="form-group">
                                      <label>Jenis Servis</label>
                                      <input type="text" class="form-control" name="jenis_servis" value="<?php echo @$edit['jenis_servis'];?>" required>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                      <label>Tanggal</label>
                                      <input type="date" name="tgl_booking" class="form-control" value="<?php echo @$edit['tgl_booking'];?>">
                                    </div>
                                  </div>
                                  <div class="col-md-6 px-1">
                                    <div class="form-group">
                                      <label>Jam</label>
                                      <input type="text" class="form-control" name="jam" value="<?php echo @$edit['jam'];?>" required>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Catatan</label>
                                      <input type="text" class="form-control" name="pesan" value="<?php echo @$edit['pesan'];?>" required>
                                    </div>
                                  </div>
                                </div>
                               <div class="row">
                                  <div class="update ml-auto mr-auto">
                                    <button type="submit" name="simpan" class="btn btn-default btn-round">Selesai</button>
                                    <a href="?menu=riwayat" type="submit" class="btn btn-danger btn-round">cancel</a>
                                  </div>
                                </div>
                              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
          </div>