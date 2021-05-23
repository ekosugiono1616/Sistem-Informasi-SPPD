<?php
include 'config/koneksi.php';
$data_profil=mysql_query("select * from profil");
$data=mysql_fetch_array($data_profil);
?>

<?php
include 'head.php'?>

<?php include 'header.php'?>
<section id="about" class="section">
   <body data-spy="scroll" data-target="#navbar-example">
<div>
  <div class="container text-center">
   <?php 
    include 'header.php' ?><br><br><br>
    <h2><b><font color=black>
    Sejarah
    </color>
  </b></h2>        
  </div>
</div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="span">
          <div class="section-intro">
            <p>
              <?php echo $data['sejarah'];  ?>
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span6">
          <div class="flexslider">
           
          </div>
        </div>

        </div>
      </div>
    </div>
  </section>
  <?php include 'footer.php'?>
<!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>

  <script src="js/modernizr.custom.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/camera/camera.js"></script>
  <script src="js/camera/setting.js"></script>

  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>

  <script src="js/jquery.flexslider.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/inview.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>