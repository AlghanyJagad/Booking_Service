 <?php
    include 'config/koneksi.php';
    include 'library/controllers.php';
    $perintah = new oop();

$table = "boking";
$redirect = "?menu=home";
if (isset($_POST['simpan'])) {
  /* $field = array('nama' => $_POST['nama'], 'email' => $_POST['email'], 'no_tlp' => $_POST['no_tlpn'], 'bengkel' => $_POST['bengkel'], 'tipe' => $_POST['tipe'], 'model' => $_POST['model'], 'nopol' => $_POST['nopol'], 'jenis_servis' => $_POST['jenis_servis'], 'tgl_booking' => $_POST['tgl_booking'], 'jam' => $_POST['jam'], 'pesan' => $_POST['pesan']);    
    $perintah->simpan($con, $table, $field, $redirect);*/
    $sql = mysqli_query($con,"INSERT INTO boking VALUES('','$_POST[nama]','$_POST[email]','$_POST[no_tlpn]','$_POST[bengkel]','$_POST[tipe]','$_POST[model]','$_POST[nopol]','$_POST[jenis_servis]','$_POST[tgl_booking]','$_POST[jam]','$_POST[pesan]')");
        if($sql){
            echo "<script>alert('Berhasil');document.location.href='?menu=pesan'</script>";
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
                <h5 class="title"><font color="red">DATA DIRI</font></h5>
              </div>
              <div class="card-body">
                <form method="POST">
                  <?php
                        $no=0;
                        $sql=mysqli_query($con,"SELECT * FROM user WHERE '$_SESSION[username]' = username");
                        while($r=mysqli_fetch_array($sql)){
                      ?>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $r['username'];?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $r['email'];?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>No. Telepon</label>
                        <input type="text" class="form-control" name="no_tlpn" value="<?php echo $r['no_hp'];?>" required>
                      </div>
                    </div>
                  </div>
                <?php } ?>
                  <hr>
                    <div class="card-header">
                      <h5 class="title"><font color="red">DATA KENDARAAN</font></h5>
                    </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Pilih Bengkel</label>
                       <select name="bengkel" id="dealer" class="form-control" >
                        <option value=""></option>
                        <?php
                            $no=0;
                            $sql=mysqli_query($con,"SELECT * FROM dealer");
                            while($r=mysqli_fetch_array($sql)){
                              ?>
                        <option value="<?php echo $r['tipe_dealer'];?>,<?php echo $r['daerah'];?>"><?php echo $r['tipe_dealer'];?> <?php echo $r['daerah'];?></option>
                      <?php }?>
                      </select>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                       <label>Tipe Kendaraan</label>
                       <select name="tipe" id="tipe" class="form-control" >
                        <option value=""></option>
                        <option value="Mobil">Mobil</option>
                        <option value="Motor">Motor</option>
                      </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Model Kendaraan (Contoh : Daihatsu Xenia)</label>
                        <input type="text" class="form-control" name="model">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>No. Polisi</label>
                        <input type="text" class="form-control" name="nopol">
                      </div>
                    </div>
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Jenis Servis</label>
                        <select name="jenis_servis" id="servis" class="form-control" >
                        <option value=""></option>
                        <option value="Servis Biasa">Servis Biasa</option>
                        <option value="Terjadi Kerusakan">Kerusakan Mesin</option>
                        <option value="Kerusakan Body">Kerusakan Body</option>
                      </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="tgl_booking" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Jam</label>
                        <select name="jam" id="jam" class="form-control" >
                        <option value=""></option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                      </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Catatan</label>
                        <input type="text" class="form-control" name="pesan">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="simpan" class="btn btn-danger btn-round">BOOKING</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
          </div>