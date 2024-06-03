<?php
    session_start();

    require "./class/at-class.php";

    if(isset($_GET['did'])){
        $did = $_GET['did'];
        $dq = mysqli_query($connection,"delete from tbl_artist where artist_id = '{$did}'");
        if($dq){
          echo "<script>alert('records deleted');</script>";
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php
    include './themepart/top-menu.php';
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php
    include './themepart/sidebar.php';
    ?>
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Artist Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Artist name</th>
                    <th>email</th>
                    <th>Gender</th>
                    <th>Date of birth</th>
                    <th>password</th>
                    <th>Mobile</th>
                    <th>Type Id</th>
                    <th>Profile Photo</th>
                    <th>About</th>
                    <th>Area Id</th>
                    <th>update</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <?php
                      $q = mysqli_query($connection, "SELECT * FROM tbl_artist ");
                      while ($row = mysqli_fetch_array($q)){

                        $tq = mysqli_query($connection,"select * from tbl_type where type_id ='{$row['type_id']}'");
                        $tdata = mysqli_fetch_array($tq);
                        
                        $aq = mysqli_query($connection,"select * from tbl_area where area_id ='{$row['area_id']}'");
                        $adata = mysqli_fetch_array($aq);
                        echo "<tr>";
                          echo "<td>{$row['artist_id']}</td>";
                          echo "<td>{$row['artist_name']}</td>";
                          echo "<td>{$row['email_id']}</td>";
                          echo "<td>{$row['artist_gender']}</td>";
                          echo "<td>{$row['artist_dob']}</td>";
                          echo "<td>{$row['artist_password']}</td>";
                          echo "<td>{$row['artist_mobile']}</td>";
                          echo "<td>{$tdata['type_name']}</td>";

                          echo "<td>  <img width='100' src='../upload/{$row['profile_photo']}'/</td>";

                          echo "<td>{$row['about_me']}</td>";
                          echo "<td>{$adata['area_name']}</td>";
                          echo "<td class='btn-primary'><a class='text-white' href='edit-artist.php?eid={$row['artist_id']}'> Edit </a></td>";
                          echo "<td class='btn-danger'><a class='text-white' href='dis-artist.php?did={$row['artist_id']}'> Delete</a></td>";

                          echo "</tr>";
                      }
                  ?>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    include './themepart/footer.php';
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
