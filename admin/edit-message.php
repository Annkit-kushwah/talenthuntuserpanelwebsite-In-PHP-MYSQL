<?php
    require "./class/at-class.php";

    $eid = $_GET['eid'];

    $selectq = mysqli_query($connection, "SELECT * FROM tbl_message WHERE message_id = '{$eid}'");
    $row = mysqli_fetch_array($selectq);

    if($_POST){
        $artist_id = $_POST['artist_id'];
        $user_id = $_POST['user_id'];
        $message_question = $_POST['message_question'];
        $message_datetime = $_POST['message_datetime'];

        $uq = mysqli_query($connection,"update tbl_message set artist_id = '{$artist_id}',
        user_id = '{$user_id}' , message_question = '{$message_question}' , message_datetime = '{$message_datetime}' 
        where message_id = '{$eid}'");
         if($uq){
            echo "<script>alert('record updated');window.location='dis-message.php'</script>;";
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
            <h1>Message Form</h1>
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
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Message details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Artist Id</label>
                    <input type="text" name="artist_id" value="<?php echo $row['artist_id']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter artist id">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">User Id</label>
                    <input type="text" name="user_id" value="<?php echo $row['user_id']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter user id">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Message</label>
                    <input type="text" name="message_question" value="<?php echo $row['message_question']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter message">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Date & Time</label>
                    <input type="text" name="message_datetime" value="<?php echo $row['message_datetime']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter date & time">
                  </div>
                </div>                
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
