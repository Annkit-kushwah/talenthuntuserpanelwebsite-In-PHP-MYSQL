<?php
require 'admin/class/at-class.php';
session_start();
         if($_POST){
        $email_id = $_POST['email_id'];
        $user_password = $_POST['user_password'];
        
        $q = mysqli_query($connection, "select * from tbl_user where
        email_id='{$email_id}' and user_password='{$user_password}'");
        $count = mysqli_num_rows($q);
        $row = mysqli_fetch_array($q);

        if($count==1){
          $_SESSION['uid'] = $row['user_id'];
          $_SESSION['s_user_name'] = $row['user_name'];
          $_SESSION['s_email_id'] = $row['email_id'];

          header("Location:index.php");
        }
        else{
          echo "<script>alert('login failed');</script>";
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
            <h1>User Login </h1>
        <div id="Upcoming" class="tab-pane active m-t60">
                            <div class="sf-tabs-content">
                                <form class="aon-login-form" method="post"  id="myform" >
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                    <input class="form-control sf-form-control" name="email_id" type="text" placeholder="Enter Email" Required>
                                                    <i class="aon-input-icon fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                    <input class="form-control sf-form-control" name="user_password" type="password" placeholder="Enter Password" Required>
                                                    <i class="aon-input-icon fa fa-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group d-flex aon-login-option justify-content-between">
                                                <div class="aon-login-opleft">
                                                     <div class="checkbox sf-radio-checkbox m-t20">
                                                        <input id="td2_2" name="abc" value="five" type="checkbox" Required>
                                                        <label for="td2_2">Keep me logged</label>
                                                    </div>  
                                                </div>
                                                <div class="aon-login-opright">
                                                <a href="user-signup.php">Create New Account</a> |
                                                    <a href="forgot-user-password.php">Forget Password</a>
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="col-md-12">
                                            <button type="submit" class="site-button w-100">Submit <i class="feather-arrow-right"></i> </button>
                                        </div>                                          
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>

  <!-- HEADER START -->
        <?php
             include './themepart/footer.php';
        ?>
        <!-- HEADER END -->
    
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