<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <!-- Title-->
 <title>Bursa Barang Bekas Tuban</title>
    <!-- Favicon-->
    <link rel="icon" href="img/core-img/favicon.png">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only">Loading...</div>
      </div>
    </div>
    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="index.php"><i class="lni-arrow-left"></i></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">Flash Sale</h6>
        </div>
        <!-- Filter Option-->
        <div class="suha-navbar-toggler d-flex justify-content-between flex-wrap" id="suhaNavbarToggler"><span></span><span></span><span></span></div>
      </div>
    </div>
    <!-- Sidenav Black Overlay-->
    <div class="sidenav-black-overlay"></div>
    <!-- Side Nav Wrapper-->
    <div class="suha-sidenav-wrapper" id="sidenavWrapper">
      <!-- Sidenav Profile-->
      <div class="sidenav-profile">
        <div class="user-profile"><img src="img/bg-img/9.jpg" alt=""></div>
        <div class="user-info">
         <h6 class="user-name mb-0">Bursa Barang Bekas</h6>
          <p class="available-balance">Tuban</p>
        </div>
      </div>
      <!-- Sidenav Nav-->
     <ul class="sidenav-nav">
        <li><a href="index.php"><i class="lni-heart-filled"></i>Beranda</a></li>
        <li><a href="kategori-produk.php"><i class="lni-user"></i>Kategori</a></li>
        <li><a href="fs.php"><i class="lni-alarm lni-tada-effect"></i>Flash Sale<span class="ml-3 badge badge-warning">3</span></a></li>
        <li><a href="kontak.php"><i class="lni-empty-file"></i>Kontak</a></li>
        
        <li><a href="pengaturan.php"><i class="lni-cog"></i>Pengaturan</a></li>
      </ul>
      <!-- Go Back Button-->
      <div class="go-home-btn" id="goHomeBtn"><i class="lni-arrow-left"></i></div>
    </div>
    <div class="page-content-wrapper">
      <!-- Top Products-->
      <div class="top-products-area pt-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1">Flash Sale Produk</h6>
          </div>
          <div class="row">
                 <?php
include "db/db.php";
?>
            <?php
                       $bil = 0;
                         $query = mysqli_query($koneksi, "SELECT tbarang.nama_barang, tbarang.ktp, tbarang.kategori_barang, tbarang.harga_barang, tbarang.id_barang, tbarang.pemilik_barang, tbarang.wa_barang, tflashsale.id_fl FROM tbarang JOIN tflashsale ON tbarang.id_barang = tflashsale.id_barang") or die (mysqli_error());
                              if(mysqli_num_rows($query) == 0){
                           echo "";
                           }else{
      
       
                             while($raa = mysqli_fetch_array($query)):     
                       $bil++;
                               ?>
            <!-- Single Flash Sale Card-->
            <div class="col-6 col-sm-4 col-md-3">
              <div class="card flash-sale-card mb-3">
                <div class="card-body"><a href="detail.php?id=<?php echo  $raa['id_barang']; ?>"><img src="ktp/<?php echo  $raa['ktp']; ?>" alt=""><span class="product-title"><?php echo  $raa['nama_barang']; ?></span>
                    <p class="sale-price">Rp. <?php echo  $raa['harga_barang']; ?><span class="real-price"></span></p><p></p>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                    </div></a></div>
              </div>
            </div>
            <?php
                                 endwhile;
                                      }
                                 ?>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Nav-->
   <!-- Footer Nav-->
    <div class="footer-nav-area" id="footerNav">
      <div class="container h-100 px-0">
        <div class="suha-footer-nav h-100">
          <ul class="h-100 d-flex align-items-center justify-content-between">
            <li><a href="index.php"><i class="lni-home"></i>Beranda</a></li>
            <li><a href="kontak.php"><i class="lni-support"></i>Kontak</a></li>
            <li class="active"><a href="fs.php"><i class="lni-heart"></i>Flash Sale</a></li>
            <li><a href="pengaturan.php"><i class="lni-cog"></i>Pengaturan</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- All JavaScript Files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.animatedheadline.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jarallax.min.js"></script>
    <script src="js/jarallax-video.min.js"></script>
    <script src="js/default/jquery.passwordstrength.js"></script>
    <script src="js/default/dark-mode-switch.js"></script>
    <script src="js/default/active.js"></script>
  </body>

</html>