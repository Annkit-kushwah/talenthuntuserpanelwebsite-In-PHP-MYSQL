<?php
    session_start();
    require "./class/at-class.php";

    $eid = $_GET['eid'];

    $selectq = mysqli_query($connection, "SELECT * FROM tbl_contact WHERE contact_id = '{$eid}'");
    $row = mysqli_fetch_array($selectq);

    if($_POST){
        $contact_id = $_POST['contact_id'];
        $contact_name = $_POST['contact_name'];
        $email_id = $_POST['email_id'];
        $phone_no = $_POST['phone_no'];
        $contact_subject = $_POST['contact_subject'];
        $contact_message = $_POST['contact_message'];

        $uq = mysqli_query($connection,"update tbl_contact set contact_id = '{$contact_id}',contact_name = '{$contact_name}',
        email_id = '{$email_id}',phone_no = '{$phone_no}',contact_subject = '{$contact_subject}',contact_message = '{$contact_message}'
         where contact_id = '{$eid}'");
         if($uq){
            echo "<script>alert('record updated');window.location='dis-contact.php'</script>;";
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
      <!-- <div class="container-fluid"> -->
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">contact Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">contact ID</label>
                    <input type="text" name="contact_id" class="form-control" id="exampleInputEmail1" placeholder="Enter contact name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">contact_name</label>
                    <input type="text" name="contact_name" class="form-control" id="exampleInputEmail1" placeholder="Enter contact name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">User email Id</label>
                    <input type="text" name="email_id" class="form-control" id="exampleInputEmail1" placeholder="Enter user id">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">phone no</label>
                    <input type="text" name="phone_no" class="form-control" id="exampleInputEmail1" placeholder="Enter message">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">contact_subject</label>
                    <input type="text" name="contact_subject" class="form-control" id="exampleInputEmail1" placeholder="Enter message">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">contact message</label>
                    <input type="text" name="contact_message" class="form-control" id="exampleInputEmail1" placeholder="Enter message">
                  </div>
                  
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