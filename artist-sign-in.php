<?php
require 'admin/class/at-class.php';
session_start();
  if(isset($_POST['btn'])){



    $photo_name = $_FILES['artist_photo']['name'];
    $photo_path = $_FILES['artist_photo']['tmp_name'];
    $folder = "upload/".$photo_name;
    move_uploaded_file($photo_path,$folder);

    $artist_name = $_POST['artist_name'];
    $email_id = $_POST['email_id'];
    $gender = $_POST['artist_gender'];
    $tid = $_POST['tid'];
    $aid = $_POST['aid'];
    $about_me = $_POST['about_me'];
    $phone_no = $_POST['artist_mobile'];
    $date = $_POST['artist_dob'];
    $artist_password = $_POST['artist_password'];
    $artist_c_password = $_POST['c_password'];
    if($artist_c_password == $artist_password){
      $q = mysqli_query($connection,"insert into tbl_artist 
    (artist_name,type_id,area_id,about_me,artist_gender,artist_mobile,artist_dob,email_id,artist_password,profile_photo)
    values ('{$artist_name}','{$tid}','{$aid}','{$about_me}','{$gender}','{$phone_no}','{$date}','{$email_id}','{$artist_password}','{$photo_name}')");
      if($q){
        move_uploaded_file($photo_path,"upload/".$photo_name);
        //echo "<script>alert('register successful');window.location='index.php';</script>";
      }
    }else{
      echo "<script>alert('Password and Confirmed Password NOt Match');</script>";
  }
}
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from aonetheme.com/sf-html-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Dec 2023 16:34:21 GMT -->
<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>Talent Hunt | Home Page Style 1</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Bootstrap toggle -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap4-toggle.min.css">
    <!-- Bootstrap seclect -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css" /> 
    <!-- Price Range Slider -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css" />
    <!-- Bootstrap data table -->
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
    <!-- Dropzone -->
    <link rel="stylesheet" type="text/css" href="css/dropzone.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="css/font.css" />    
    <!-- Feather icon -->
    <link rel="stylesheet" type="text/css" href="css/feather.css" />  
    <!-- Fontawesome -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <!-- Lc light box popup -->
    <link rel="stylesheet" type="text/css" href="css/lc_lightbox.css" />     
    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">
    <!-- Custom Scrollbar -->
    <link rel="stylesheet" type="text/css" href="css/m-custom-scrollbar.min.css" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="css/slick.min.css">
    <!-- Slick Theme -->
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">  
    <!-- Main STyle Sheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

    <body>
    <?php
       require "./themepart/top-menu2.php";
       ?>
        <div class="container m-t50 m-b90">
            <h1>Artist Sign-in form</h1>
            <div id="Upcoming" class="tab-pane active m-t60">
                            <div class="sf-tabs-content">
                            <div id="Past" class="tab-pane">
                            <div class="sf-tabs-content">
                                <form class="aon-login-form" method="post" id="myform" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                    <input class="form-control sf-form-control" name="artist_name" type="text" placeholder="Artist Name" required>
                                                    <i class="aon-input-icon fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                    <input class="form-control sf-form-control" name="artist_gender" type="text" placeholder="Gender"required>
                                                    <i class="aon-input-icon fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 

                                                <select id="categorysrh" name="tid" class="form-control sf-form-control aon-categories-select sf-select-box" title="Select Category" required>
                                    <option class="bs-title-option" value="">Select a Category</option>
                                    <?php 

    $tq = mysqli_query($connection,"select * from tbl_type");
    while($tdata = mysqli_fetch_array($tq))
    {
        echo "<option value='{$tdata['type_id']}'>{$tdata['type_name']}</option>";
    }
?>
                                                                              
                                  </select>
                                                    <i class="aon-input-icon fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                                  <select id="categorysrh" name="aid" class="form-control sf-form-control aon-categories-select sf-select-box" title="Select Category" required>
                                    <option class="bs-title-option" value="">Select a area</option>
                                    <?php 

    $tq = mysqli_query($connection,"select * from tbl_area");
    while($tdata = mysqli_fetch_array($tq))
    {
        echo "<option value='{$tdata['area_id']}'>{$tdata['area_name']}</option>";
    }
?>
                                                                              
                                  </select>     <i class="aon-input-icon fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                    <input class="form-control sf-form-control" name="artist_mobile" type="number" placeholder="Phone"required>
                                                    <i class="aon-input-icon fa fa-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                    <input class="form-control sf-form-control" name="artist_dob" type="date" placeholder="Enter your Date of birth"required>
                                                    <i class="aon-input-icon fa fa-date"></i>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                    <input class="form-control sf-form-control" name="about_me" type="text" placeholder="About me"required>
                                                    <!-- <i class="fa-solid fa-eject"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                <input type="file" name="artist_photo" class="custom-file-input" id="exampleInputFile">
                                                 <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    <!-- <i class="aon-input-icon fa fa-photo"></i> -->
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                    <input class="form-control sf-form-control" name="email_id" type="email" placeholder="Email"required>
                                                    <i class="aon-input-icon fa fa-envelope-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                    <input class="form-control sf-form-control" name="artist_password" type="password" placeholder="Password"required>
                                                    <i class="aon-input-icon fa fa-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                        
                                         <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                    <input class="form-control sf-form-control" name="c_password" type="password" placeholder="Confirm Password" required>
                                                    <i class="aon-input-icon fa fa-lock"></i>
                                                </div>
                                            </div>
                                        </div>                                        
                                        
                                        <div class="col-md-12">
                                            <div class="form-group sign-term-con">
                                                <div class="checkbox sf-radio-checkbox">
                                                    <input id="td33" name="abc" value="five" type="checkbox" required>
                                                    <label for="td33">I've read and agree with your <a href="#">Privacy Policy</a> and <a href="#">Terms & Conditions</a> </label>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="col-md-12">
                                            <button type="submit" name='btn' class="site-button w-100">Submit <i class="feather-arrow-right"></i> </button>
                                        </div>                                          
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                            </div>
                        </div>
                        </div>
                        <?php
             include './themepart/footer.php';
        ?>
    
</body>
<script src="tools/jquery-3.7.1.min.js"> </script>
<script src="tools/jquery.validate.js"> </script>
<script>
$(document).ready(function(){
    $("#myform").validate();
})
    </script>
    <style>
.error{
    color:red;
}</style>
</html>