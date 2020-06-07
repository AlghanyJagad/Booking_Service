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
if (isset($_GET['hapus'])) {
  $sql = mysqli_query($con, "DELETE FROM saran WHERE id_saran = '$_GET[id]'");
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
          <li>
            <a href="?menu=dealer">
              <i class="nc-icon nc-pin-3"></i>
              <p>Daftar Dealer</p>
            </a>
          </li>
          <li class="active">
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Kritik & Saran</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th><font color="red">No</font></th>
                      <th><font color="red">Nama</font></th>
                      <th><font color="red">No.Telp</font></th>
                      <th><font color="red">Pesan</font></th>
                    </thead>
                    <tbody>
                      <?php
                        $no =0;
                        $sql=mysqli_query($con,"SELECT * FROM saran");
                        while($r=mysqli_fetch_array($sql)){
                          $no++
                      ?>
                     <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $r['nama'];?></td>
                      <td><?php echo $r['no_tlp'];?></td>
                      <td><?php echo $r['pesan'];?></td>
                      <td><a href="?menu=kontak&hapus&id=<?php echo $r['id_saran'] ?>" type="submit" class="btn btn-deafult btn-block" onClick="return confirm('Anda Yakin?')">hapus</a></td>
                     </tr>
                  <?php } ?>
                    </tbody>
                </div>
              </div>
            </div>
          </div>
      </div>
            
  </div>