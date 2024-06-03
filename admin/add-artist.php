<?php
    session_start();

    require 'class/at-class.php';

    if($_POST){

      $photo_name = $_FILES['profile_photo']['name'];
      $photo_path = $_FILES['profile_photo']['tmp_name'];
      $folder = "upload/".$photo_name;
      move_uploaded_file($photo_path,$folder);

      $artist_name = $_POST['artist_name'];
      $email_id = $_POST['email_id'];
      $artist_gender = $_POST['artist_gender'];
      $artist_dob = $_POST['artist_dob'];
      $artist_password = $_POST['artist_password'];
      $artist_mobile = $_POST['artist_mobile'];
      $type_id = $_POST['type_id'];
      // $profile_photo = $_POST['profile_photo'];
      $about_me = $_POST['about_me'];
      $area_id = $_POST['area_id'];

      $q = mysqli_query($connection,"insert into tbl_artist(artist_name,
      email_id,artist_gender,artist_dob,artist_password,artist_mobile,type_id,
      profile_photo	,about_me,area_id) 
      values('{$artist_name}','{$email_id}','{$artist_gender}','{$artist_dob}',
      '{$artist_password}','{$artist_mobile}','{$type_id}','{$folder}',
      '{$about_me}','{$area_id}')");
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
          <div class="col-md-12">
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
                    <input type="text" name="artist_name" class="form-control" id="exampleInputEmail1" placeholder="Enter artist name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email_id" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gender</label>
                    <input type="text" name="artist_gender" class="form-control" id="exampleInputEmail1" placeholder="Enter Gender" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Date of birth</label>
                    <input type="date" name="artist_dob" class="form-control" id="exampleInputEmail1" placeholder="Enter date of birth" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="artist_password" class="form-control" id="exampleInputEmail1" placeholder="Enter password" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile Number</label>
                    <input type="number" name="artist_mobile" class="form-control" id="exampleInputEmail1" placeholder="Enter mobile number" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Type Id</label>
                    <input type="number" name="type_id" class="form-control" id="exampleInputEmail1" placeholder="Enter artist type" required>
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Profile Photo</label>
                    <input type="text" name="profile_photo" class="form-control" id="exampleInputEmail1" placeholder="Enter profile photo">
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="profile_photo" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">About Me</label>
                    <input type="text" name="about_me" class="form-control" id="exampleInputEmail1" placeholder="Enter details of artist">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Area Id</label>
                    <input type="number" name="area_id" class="form-control" id="exampleInputEmail1" placeholder="Enter area">
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
