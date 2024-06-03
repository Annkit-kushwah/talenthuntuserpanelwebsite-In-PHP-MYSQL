<?php
    session_start();

    require 'class/at-class.php';

    if($_POST){
      $feedback_date = $_POST['feedback_date'];
      $artist_id = $_POST['artist_id'];
      $feedback_details = $_POST['feedback_details'];
      $user_id = $_POST['user_id'];


      $q = mysqli_query($connection,"insert into tbl_feedback(feedback_date,artist_id,feedback_details,user_id) 
      values('{$feedback_date}','{$artist_id}','{$feedback_details}','{$user_id}')");

      if($q){
        echo "<script>alert('record added');</script>";
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
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
            <h1>Feedback Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- <div class="container-fluid"> -->
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Feedback Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Feedback date</label>
                    <input type="date" name="feedback_date" class="form-control" id="exampleInputEmail1" placeholder="Enter feedback date">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Artist id</label>
                    <input type="number" name="artist_id" class="form-control" id="exampleInputEmail1" placeholder="Enter artist id">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Feedback details</label>
                    <input type="text" name="feedback_details" class="form-control" id="exampleInputEmail1" placeholder="Enter feedback details">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">User id</label>
                    <input type="number" name="user_id" class="form-control" id="exampleInputEmail1" placeholder="Enter user id">
                  </div>
                </div>                
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" >Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      <!-- </div> -->
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
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
