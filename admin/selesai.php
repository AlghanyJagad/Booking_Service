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
              <p>Dashboard</p>
            </a>
          </li>
          <li class="active">
            <a href="?menu=booking">
              <i class="nc-icon nc-bookmark-2"></i>
              <p>Data Booking</p>
            </a>
          </li>
          <li>
            <a href="?menu=dealer">
              <i class="nc-icon nc-pin-3"></i>
              <p>Daftar Dealer</p>
            </a>
          </li>
          <li>
            <a href="?menu=kontak">
              <i class="nc-icon nc-email-85"></i>
              <p>Saran</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    
 <div class="content">
  <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">

            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-7 col-md-8">
                    <div class="author">
                      <a href="?menu=booking">
                    <h6 class="title"><font color="gray">Belum Selesai</font></h6>
                  </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-7 col-md-8">
                    <div class="author">
                      <a href="#">
                    <h6 class="title"><font color="black">Selesai</font></h6>
                  </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              
            </div>
          </div>
        </div>






       <div class="row">
          
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Sudah Selesai</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th><font color="red">Nama</font></th>
                      <th><font color="red">Model</font></th>
                      <th><font color="red">No.Polisi</font></th>
                      <th><font color="red">Dealer</font></th>
                      <th><font color="red">Jenis Servis</font></th>
                      <th><font color="red">Waktu</font></th>
                    </thead>
                    <tbody>
                      <?php
                        $sql=mysqli_query($con,"SELECT * FROM selesai_booking");
                        while($r=mysqli_fetch_array($sql)){
                      ?>
                     <tr>
                      <td><?php echo $r['nama'];?></td>
                      <td><?php echo $r['tipe'];?>,<?php echo $r['model'];?></td>
                      <td><?php echo $r['nopol'];?></td>
                      <td><?php echo $r['bengkel'];?></td>
                      <td><?php echo $r['jenis_servis'];?></td>
                      <td><?php echo $r['tgl_booking'];?>,<?php echo $r['jam'];?></td>
                     </tr>
                     <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
       </div>

       <div class="row">
          
          </div>
  </div>