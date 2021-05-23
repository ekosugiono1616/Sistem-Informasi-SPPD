<?php
error_reporting(0);
include 'config/koneksi.php';
mysql_set_charset('utf8');
?>

<!doctype html>
<html lang="en">
<head>
<?php
include 'head.php';

?>
</head>
  
<?php
include 'header.php';

?>

<br></br>
  <!-- Start Blog Area -->
  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center"><br><br>
              <h2 class="get-started-btn ml-auto">VIDEO</h2>
            </div>
          </div>
        </div>
        <br>
    <?php
include "paging.php";
$batas=3;
if($_GET["hal"]=="")$hal=1; else $hal = $_GET["hal"];
$lim = ($hal-1) * $batas;

?>
        <div class="row">
    
    <?php 
              
              $sql= mysql_query("SELECT * from video");
              while ($data = mysql_fetch_array($sql)) { 
              ?>
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            
            <div class="single-blog">
              <div class="single-blog-img">
                <video width="350" height="350" controls autoplay="" muted=""  poster="">
                
                    <source src="image/video/<?php echo $data['cover']; ?>" type="video/mp4" alt="" style="width:100%; height:200px;">
                  </a>
                  </video>
              </div>
             <p></p>
              <div class="blog-text">
               <center> <h5 >
                                        <a href="detail_galeri.php?id=<?php echo $data['id_video'] ?>"><?php echo $data['nama_video'] ?></a>
                  </h5></center>
               
              </div>
            
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
         <?php } ?>
     
        </div>


    
      </div>
    </div>
  </div>
  


  <!-- Start Footer bottom Area -->
 <?php
 include 'footer.php';
 ?>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>
