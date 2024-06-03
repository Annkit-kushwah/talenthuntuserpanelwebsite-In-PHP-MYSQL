<?php
    require "./class/at-class.php";

    $eid = $_GET['eid'];

    $selectq = mysqli_query($connection, "SELECT * FROM tbl_user WHERE user_id = '{$eid}'");
    $row = mysqli_fetch_array($selectq);

    if($_POST){
        $user_name = $_POST['user_name'];
        $gender = $_POST['gender'];
        $phone_no = $_POST['phone_no'];
        $email_id = $_POST['email_id'];
        $user_password = $_POST['user_password'];

        $uq = mysqli_query($connection,"update tbl_user set user_name = '{$user_name}',
        gender = '{$gender}' , phone_no = '{$phone_no}', email_id = '{$email_id}', user_password = '{$user_password}'
         where user_id = '{$eid}'");
         if($uq){
            echo "<script>alert('record updated');window.location='dis-user.php'</script>;";
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
            <h1>User Form</h1>
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
                <h3 class="card-title">User details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" name="user_name" value="<?php echo $row['user_name']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter area in Ahmedabad">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gender</label>
                    <input type="text" name="gender" value="<?php echo $row['gender']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter area in Ahmedabad">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="text" name="phone_no" value="<?php echo $row['phone_no']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter area in Ahmedabad">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email_id" value="<?php echo $row['email_id']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter area in Ahmedabad">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" name="user_password" value="<?php echo $row['user_password']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter area in Ahmedabad">
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
