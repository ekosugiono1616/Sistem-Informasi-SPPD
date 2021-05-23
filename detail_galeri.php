<?php
include 'config/koneksi.php';
mysql_set_charset('utf8');
?>

<!doctype html>
<html lang="en">
 <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/rona.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css3/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css3/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css3/responsive.css" rel="stylesheet">
<head>
<?php
include 'head.php';

?>
</head>

<?php
include 'header.php';

?>

<br></br>
  <!-- Start portfolio Area -->
  <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <br><br><br><br>
            <h2 class="get-started-btn ml-auto">DAFTAR GALERI</h2>
          </div>
        </div>
      </div><br>
      <div class="row">
        <!-- Start Portfolio -page -->
       <div class="awesome-project-content">
	   <?php 
		$sql= mysql_query("SELECT * FROM galeri where id_video='$_GET[id]'");
							while ($data = mysql_fetch_array($sql)) {?>
	   
	   
	  
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <div><?php echo $data['isi'] ?></div>
                <a href="image/galeri/<?php echo $data['foto']; ?>"><img src="image/galeri/<?php echo $data['foto']; ?>" alt="" style="width:100%; height:200px;" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="image/galeri/<?php echo $data['foto']; ?>">
                      <br>
                      <h4 class="get-started-btn ml-auto"><?php echo $data['nama_galeri'] ?></h4>
                     
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- single-awesome-project end -->
           <?php } ?>
        
       
    
       
        </div>
		 
      </div>
	   
    </div>
  </div>
  <!-- awesome-portfolio end -->



  <!-- Start Footer bottom Area -->
 <?php
 include 'footer.php';
 ?>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>

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
