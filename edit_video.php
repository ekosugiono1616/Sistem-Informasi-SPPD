<?php
include 'config/koneksi.php';

mysql_set_charset('utf8');
?>


<!DOCTYPE html>
<html>
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
       Edit video
      </h1>
     
    </section>
	<?php
	$id=$_GET['id'];
	$edit=mysql_query("SELECT * FROM video where id_video = $id");
	$hasil = mysql_fetch_array($edit);
	$id_video = $hasil['id_video'];
	$nama_video = $hasil['nama_video'];
	$cover = $hasil['cover'];

	
	?>
	
	
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit video</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype='multipart/form-data' role="form" action="aksi_edit_video.php" method="POST">
             <input type="hidden" name="id_video" value="<?php echo $id_video; ?>"/>
			 
										<div class="form-group">
										<label>Nama video</label>
										<input value="<?php echo $nama_video; ?>" class="form-control"
										placeholder="Masukkan Nama video "name="nama_video">
										</div>
										<div class="form-group">
										<label>Cover</label>
										<input type="file" name="cover" id="cover"  value="<?php echo $cover; ?>">
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

<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
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
