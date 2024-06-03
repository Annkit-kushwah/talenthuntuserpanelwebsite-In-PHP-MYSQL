<?php
    require "./class/at-class.php";

    $eid = $_GET['eid'];

    $selectq = mysqli_query($connection, "SELECT * FROM tbl_artist WHERE artist_id = '{$eid}'");
    $row = mysqli_fetch_array($selectq);

    if($_POST){
        $artist_name = $_POST['artist_name'];
        $email_id = $_POST['email_id'];
        $artist_gender = $_POST['artist_gender'];
        $artist_dob = $_POST['artist_dob'];
        $artist_password = $_POST['artist_password'];
        $artist_mobile = $_POST['artist_mobile'];
        $type_id = $_POST['type_id'];
        $profile_photo = $_POST['profile_photo'];
        $about_me = $_POST['about_me'];
        $area_id = $_POST['area_id'];


        $uq = mysqli_query($connection,"update tbl_artist set artist_name = '{$artist_name}',
        email_id = '{$email_id}',artist_gender = '{$artist_gender}',artist_dob = '{$artist_dob}',
        artist_password = '{$artist_password}',artist_mobile = '{$artist_mobile}'
        ,type_id = '{$type_id}',profile_photo = '{$profile_photo}'
        ,about_me = '{$about_me}',area_id = '{$area_id}'
         where area_id = '{$eid}'");
         if($uq){
            echo "<script>alert('record updated');window.location='dis-area.php'</script>;";
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
            <h1>Artist Form</h1>
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
                <h3 class="card-title">Artist details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Artist Name</label>
                    <input type="text" name="artist_name" value="<?php echo $row['artist_name']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter artist name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email_id" value="<?php echo $row['email_id']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gender</label>
                    <input type="text" name="artist_gender" value="<?php echo $row['artist_gender']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Gender">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Date of birth</label>
                    <input type="text" name="artist_dob" value="<?php echo $row['artist_dob']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter date of birth">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" name="artist_password" value="<?php echo $row['artist_password']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile Number</label>
                    <input type="text" name="artist_mobile" value="<?php echo $row['artist_mobile']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter mobile number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Type Id</label>
                    <input type="text" name="type_id" value="<?php echo $row['type_id']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter artist type">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Profile Photo</label>
                    <input type="text" name="profile_photo" value="<?php echo $row['profile_photo']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter profile photo">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">About Me</label>
                    <input type="text" name="about_me" value="<?php echo $row['about_me']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter details of artist">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Area Id</label>
                    <input type="text" name="area_id"value="<?php echo $row['area_id']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter area">
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
