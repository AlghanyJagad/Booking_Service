 <?php
    include 'config/koneksi.php';
    include 'library/controllers.php';
    $perintah = new oop();

$table = "saran";
$redirect = "?menu=kontak";
if (isset($_POST['simpan'])) {
    $field = array('nama' => $_POST['nama'], 'no_tlp' => $_POST['no_tlp'], 'pesan' => $_POST['pesan']);    
    $perintah->simpan($con, $table, $field, $redirect);
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
          <!-- <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div> -->
          <!-- <p>CT</p> -->
        </a>
        <a href="" class="simple-text logo-normal">
          Booking Servis
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
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
          <li>
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
          <li class="active">
            <a href="?menu=kontak">
              <i class="nc-icon nc-email-85"></i>
              <p>Contact</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    
 <div class="content">
       <div class="row">
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#" >
                    <h5 class="title"><font color="red">PT.Jago Servis</font></h5>
                  </a>
                </div>
                <a href="#" >
                    <h5 class="title"><font color="black">Alamat</font></h5>
                </a>
                <p class="title">Jl.raya No.22</p>
                <hr>
                <a href="#" >
                    <h5 class="title"><font color="black">Call Center</font></h5>
                </a>
                <p class="title">021-1323-1213</p>
              </div>
            </div>
            <div class="card">
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Kritik & Saran</h5>
              </div>
              <div class="card-body">
                <form method="POST">
                  <div class="row">
                    <?php
                        $no=0;
                        $sql=mysqli_query($con,"SELECT * FROM user WHERE '$_SESSION[username]' = username");
                        while($r=mysqli_fetch_array($sql)){
                      ?>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $r['username'];?>"  required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>No Telepon</label>
                        <input type="text" class="form-control" name="no_tlp" value="<?php echo $r['no_hp'];?>"  required>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                   <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Pesan</label>
                        <input type="text" class="form-control" name="pesan" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="simpan" class="btn btn-danger btn-round">Kirim Pesan</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
  </div>