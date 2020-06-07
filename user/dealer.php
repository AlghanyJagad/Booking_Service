 <?php
include 'config/koneksi.php';

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
          <li class="">
            <a href="?menu=booking">
              <i class="nc-icon nc-bookmark-2"></i>
              <p>Booking</p>
            </a>
          </li>
          <li class="active">
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
            <a href="?menu">
              <i class="nc-icon nc-email-85"></i>
              <p>Contact</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    
 <div class="content">
                
       <div class="row">
        <?php
                    $no=0;
                    $sql=mysqli_query($con,"SELECT * FROM dealer");
                    while($r=mysqli_fetch_array($sql)){
                      ?>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-7 col-md-12">
                    <div class="numbers">
                      <p class="card-category"><?php echo $r['tipe_dealer'];?></p>
                      <p class="card-title"><?php echo $r['daerah'];?><p>
                      <img src="img/bengkel.jpg">
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="nc-icon nc-pin-3"></i>
                  <?php echo $r['alamat'];?>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>

  </div>