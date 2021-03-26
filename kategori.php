<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

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
          <h6 class="mb-0">Kategori</h6>
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
      <!-- Catagory Single Image-->
     
      <!-- Product Catagories-->
      <br/>
      <!-- Top Products-->
      <div class="top-products-area mt-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="ml-1"><?php
$id = $_GET['id'];
echo "$id";

            ?></h6>
          </div>
          <div class="row">  
            <?php
include "db/db.php";
?> 
  <?php
                       $bil = 0;
                         $query = mysqli_query($koneksi, "SELECT * FROM tbarang WHERE kategori_barang = '$id'") or die (mysqli_error());
                              if(mysqli_num_rows($query) == 0){
                           echo "";
                           }else{
      
       
                             while($rs = mysqli_fetch_array($query)):     
                       $bil++;
                               ?>

            <!-- Single Top Product Card-->
            <div class="col-6 col-sm-4 col-lg-3">
              <div class="card top-product-card mb-3">
                <div class="card-body"><span class="badge badge-success">Baru</span><a class="wishlist-btn" href="#"><i class="lni-heart-filled"></i></a><a class="product-thumbnail d-block" href="detail.php?id=<?php echo  $rs['id_barang']; ?>"><img class="mb-2" src="ktp/<?php echo $rs['ktp'] ?>" alt=""></a><a class="product-title d-block" href="detail.php?id=<?php echo  $rs['id_barang']; ?>"><?php echo $rs['nama_barang'] ?></a>
                  <p class="sale-price"><?php echo  $rs['harga_barang']; ?><span></span></p>
                  <div class="product-rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div><a class="btn btn-success btn-sm" href="detail.php?id=<?php echo  $rs['id_barang']; ?>"><i class="lni-plus"></i></a>
                </div>
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