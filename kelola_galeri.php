<?php
include 'config/koneksi.php';
session_start();
if (empty($_SESSION['username']) AND empty ($_SESSION['password']) ){
echo "<script>alert('Anda harus login terlebih dahulu'); 
window.location = 'login.php'</script>";
};
$data_galeri = mysql_query("SELECT a.*, g.* FROM galeri g LEFT JOIN video a ON g.`id_video` = a.`id_video` order by g.id_galeri ASC");
 mysql_set_charset('utf8');
?>

<!DOCTYPE html>
<html>
 <script type="text/javascript" src="ckeditor/style.js"></script>
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

 <?php include 'head1.php'; ?>  
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

      <?php include 'header1.php'; ?>   
   
  <!-- Left side column. contains the logo and sidebar -->
  <?php include 'sidebar.php';?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <section class="content">
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
      <h4><b>Input Galeri</b></h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                
                                    <form enctype='multipart/form-data' action="aksi_tambah_galeri.php" method="POST"  id="form_tambah_galeri">
                    
                    <div class="form-group">
                    <label>Nama video</label>
                  <select name="id_video" class="form-control">
                  <option value="">-- Pilih video --</option required>
                        <?php
                  $tampil=mysql_query("SELECT * FROM video ORDER BY nama_video");
                  while($data=mysql_fetch_array($tampil)){
                  echo "<option value=$data[id_video]>$data[nama_video]</option>";}
                ?>
                      </select>
                    </div>
                    <div class="form-group">
                    <label>Nama galeri</label>
                    <input class="form-control"placeholder="Masukkan Nama Galeri "name="nama_galeri" required>
                    </div>
                    <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" id="foto" required >
                    </div>
                    <br>
                    <div class="form-actions">
                    <input type="Submit" value="Simpan" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" value="Reset" class="btn btn-default">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        
                    </div>
                    
                    
                    
                    
                  
                                       </form> 
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
</section>
         
          <!-- Main Content -->
          <section class="content">
              
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><b>DATA GALERI</b></h4>
                        </div>
                        
                        <div class="panel-body">
      <div class="table-responsive dataTable_wrapper">
           
            <table align="center" class="table table-striped table-bordered table-hover" id="dataTables-example">
            
          <thead class="text-center">
          <th><center>No</th>   
          <th><center>Nama video</th>         
          <th><center>Nama Galeri</th>
          <th><center>Foto</th>
          <th><center>Aksi</th>  
                
          </thead>
                                        <tbody>
          <?php
          $no = 1;
                     while ($data = mysql_fetch_array($data_galeri)) {
              ?>
              
        <tr align="center">
                  <td><center><?php echo $no++; ?></center></td>
                  <td><?php echo $data['nama_video']?></td>
                  <td><?php echo $data['nama_galeri']; ?></td>
                  <td><center><image src="image/galeri/<?php echo $data['foto']; ?>" style="width: 100px; 
                  height: 100px;"></td>
                                  <td align="center">
                                    <a class="btn btn-success" href="edit_galeri.php?id=<?php echo $data['id_galeri'];?>">EDIT</a> ||
                                    <a class="btn btn-danger btn-sm" href="aksi_hapus_galeri.php?&id=<?php echo $data['id_galeri'];?>" onclick="return confirm('Yakin akan dihapus ?');">DELETE</a>
                                    </td>
                                   
        </tr>
                
              <?php } ?>
                                </tbody>
      </table>
            
                        <!-- /.table-responsive --> 
              
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
          </div>
              
              
              
              
              
            
          </section>

  </div>
  <!-- /.content-wrapper -->
  <?php include 'footer1.php'; ?>
  
 
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
<!-- DataTables JavaScript -->
<script src="template/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="template/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script> 

</body>
</html>