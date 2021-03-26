<!DOCTYPE html>
<html lang="en">
   <?php
include "db/db.php";
?>
  <?php 
                  $id = $_GET['id'];
                  $query = mysqli_query($koneksi, "SELECT * FROM tbarang WHERE id_barang = '$id'");
                  $r = mysqli_fetch_array($query);
                ?>

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
          <h6 class="mb-0">Produk</h6>
        </div>
        <!-- Navbar Toggler-->
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
      <!-- Product Slides-->
      <div class="product-slides owl-carousel">
        <!-- Single Hero Slide-->
        <div class="single-product-slide" style="background-image: url('ktp/<?php echo $r['ktp'] ?>')"></div>
        <!-- Single Hero Slide-->
      </div>
      <div class="product-description pb-3">
        <!-- Product Title & Meta Data-->
        <div class="product-title-meta-data bg-white mb-3 py-3">
          <div class="container d-flex justify-content-between">
            <div class="p-title-price">
              <h6 class="mb-1"><?php echo $r['nama_barang'] ?></h6>
              <p class="sale-price mb-0">Rp. <?php echo $r['nama_barang'] ?></p>
            </div>
            <div class="p-wishlist-share"><a href="#"><i class="lni-heart-filled"></i></a></div>
          </div>
          <!-- Ratings-->
          <div class="product-ratings">
            <div class="container d-flex align-items-center justify-content-between">
              <div class="ratings"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div>
              <div class="total-result-of-ratings"><span>5</span><span> </span></div>
            </div>
          </div>
        </div>
        <!-- Selection Panel-->
        
       
        <!-- Product Specification-->
        <div class="p-specification bg-white mb-3 py-3">
          <div class="container">
            <h6>Deskripsi Barang</h6>
            <p><?php echo $r['deskripsi_barang'] ?></p>
            <ul>
              <li>Pemilik : <?php echo $r['pemilik_barang'] ?></li>
              <li>Kategori : <?php echo $r['kategori_barang'] ?></li>
            </ul>
            
          </div>
        </div>
        <!-- Rating & Review Wrapper-->
        <div class="selection-panel bg-white mb-3 py-3">
          <div class="container d-flex align-items-center justify-content-between">
            <!-- Choose Color-->
            <center>
           
              <a class="btn btn-success btn-sm read-more-btn" href="https://api.whatsapp.com/send?phone=<?php echo $r['wa_barang'] ?>&text=Halo Gan <?php echo $r['pemilik_barang'] ?> Saya ingin Menanyakan tentang barang anda di Bursa Barang Bekas Tuban Berupa : <?php echo $r['nama_barang'] ?>" target="_blank"><i class="lni-whatsapp"></i> Nego Via Whatsapp</a>
              <a class="btn btn-danger btn-sm read-more-btn" href="tel:<?php echo $r['wa_barang'] ?>" target="_blank"><i class="lni-phone"></i> Nego Via Telfon</a>
            <!-- Choose Size-->
            </center>
          </div>
        </div>
        
      </div>
    </div>
    <!-- Footer Nav-->
    <div class="footer-nav-area" id="footerNav">
      <div class="container h-100 px-0">
        <div class="suha-footer-nav h-100">
          <ul class="h-100 d-flex align-items-center justify-content-between">
            <li><a href="index.php"><i class="lni-home"></i>Beranda</a></li>
            <li><a href="kontak.php"><i class="lni-support"></i>Kontak</a></li>
            <li><a href="fs.php"><i class="lni-heart"></i>Flash Sale</a></li>
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