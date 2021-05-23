<?php
include 'config/koneksi.php';

mysql_set_charset('utf8');
?>


<!DOCTYPE html>
<html>
<script type="text/javascript" src="ckeditor/style.js"></script>
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<?php
include 'head1.php';


?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php
include 'header1.php';


?>


 <!-- Left side column. contains the logo and sidebar -->
<?php
include 'sidebar.php';


?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit Galeri
      </h1>
     
    </section>
  <?php
  $id=$_GET['id'];
  $edit=mysql_query("SELECT a.*, g.* FROM galeri g LEFT JOIN video 
  a ON g.`id_video` = a.`id_video` where g.id_galeri = $id");
  $hasil = mysql_fetch_array($edit);
  $id_galeri = $hasil['id_galeri'];
  $id_video = $hasil['id_video'];
  $nama_galeri = $hasil['nama_galeri'];
  $foto = $hasil['foto'];
  $isi = $hasil['isi'];

  
  ?>
  
  
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype='multipart/form-data' role="form" action="aksi_edit_galeri.php" method="POST">
             <input type="hidden" name="id_galeri" value="<?php echo $id_galeri; ?>"/>
        <div class="form-group">
        <?php
                  $tampil_video=mysql_query("SELECT * FROM video where id_video='$id_video'");
                  $data_video=mysql_fetch_array($tampil_video);
                  $nama_video=$data_video['nama_video'];
                ?>
                    <label>Nama video</label>
                  <select name="id_video" class="form-control">
                  <option value="<?php echo $id_video; ?>"><?php echo $nama_video; ?></option>
                  <option value="">-- Pilih video --</option>
                        <?php
                  $tampil=mysql_query("SELECT * FROM video ORDER BY nama_video");
                  while($data=mysql_fetch_array($tampil)){
                  echo "<option value=$data[id_video]>$data[nama_video]</option>";}
                ?>
                      </select>
                    </div>
                    <div class="form-group">
                    <label>Nama galeri</label>
                    <input value="<?php echo $nama_galeri; ?>" class="form-control"
                    placeholder="Masukkan Nama Galeri "name="nama_galeri">
                    </div>
                    <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" id="foto"  value="<?php echo $foto; ?>">
                    </div>
                    <br>
               

              <div class="box-footer">
                <button type="submit" name="update" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

         
        </div>
        <!--/.col (right) -->
    
    
    
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->
 <?php
 include 'footer1.php';
 
 
 
 ?>
   <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
</body>
</html>
