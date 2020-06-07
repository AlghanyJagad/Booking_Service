 <?php
    include 'config/koneksi.php';
    include 'library/controllers.php';
    $perintah = new oop();

$table = "boking";
$redirect = "?menu=home";
if (isset($_POST['simpan'])) {
  
    $sql = mysqli_query($con,"INSERT INTO dealer VALUES('','$_POST[tipe_dealer]','$_POST[daerah]','$_POST[alamat]')");
        if($sql){
            echo "<script>alert('Berhasil');document.location.href='?menu=dealer'</script>";
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
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="?menu=booking">
              <i class="nc-icon nc-bookmark-2"></i>
              <p>Data Booking</p>
            </a>
          </li>
          <li class="active">
            <a href="?menu=dealer">
              <i class="nc-icon nc-pin-3"></i>
              <p>Daftar Dealer</p>
            </a>
          </li>
          <li class="">
            <a href="?menu=kontak">
              <i class="nc-icon nc-email-85"></i>
              <p>Saran</p>
            </a>
          </li>
        </ul>
      </div>
    </div>


        <div class="content">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="title"><font color="red">DATA DEALER</font></h5>
              </div>
              <div class="card-body">
                <form method="POST">
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Tipe Dealer</label>
                        <input type="text" class="form-control" name="tipe_dealer" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Daerah</label>
                        <input type="text" class="form-control" name="daerah" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="simpan" class="btn btn-danger btn-round">simpan</button>
                      <a href="?menu=dealer" type="submit" class="btn btn-default btn-round">cancel</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
          </div>