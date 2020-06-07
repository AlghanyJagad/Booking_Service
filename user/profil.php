<?php
    include '../config/koneksi.php';
    include '../library/controllers.php';

if (isset($_POST['proses'])) {
                $sql = mysqli_query($con,"UPDATE user SET username = '$_POST[username]' WHERE no_meja = '$_GET[id]'");
                if($sql){
                    echo "<script>alert('Pesanan Diproses');document.location.href='kasir.php'</script>";
                }
            }

if (empty($_SESSION['username'])) {
    echo "<script>alert('Silahkan login terlebih dahulu');document.location.href='../index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Booking Servis
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

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
          <li class="">
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
    
    <?php
      $no=0;
      $sql=mysqli_query($con,"SELECT * FROM user WHERE '$_SESSION[username]' = username");
      while($r=mysqli_fetch_array($sql)){
    ?>
      <div class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <h5 class="title"><font color="red"> <?php echo $r['username'];?></font></h5>
                  </a>
                  <p class="description">
                    <font color="black">
                   <?php echo $r['email'];?>
                    </font>
                  </p>
                </div>
                <p class="description text-center">
                  <font color="black">
                  <?php echo $r['no_hp'];?>
                  </font>
                </p>
              </div>
            </div>
            <div class="card">
              
              <div class="">
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form method="POST">
                  <div class="row">
                    <div class="col-md-8 pr-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Company" value="<?php echo $r['username'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8 pr-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="<?php echo $r['email'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8 pr-1">
                      <div class="form-group">
                        <label>No. HP</label>
                        <input type="text" class="form-control" placeholder="City" value="<?php echo $r['no_hp'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-danger btn-round" name="update">Update Profile</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
      <footer class="footer footer-black  footer-white ">
        
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>