<?php
require 'admin/class/at-class.php';
session_start();
         if($_POST){
        $email_id = $_POST['email_id'];
        $user_password = $_POST['user_password'];
        $q = mysqli_query($connection, "select * from tbl_artist where
        email_id='{$email_id}' and artist_password='{$user_password}'");
        $count = mysqli_num_rows($q);
        $row = mysqli_fetch_array($q);

        if($count==1){
          $_SESSION['aid'] = $row['user_id'];
          $_SESSION['artist_name'] = $row['user_name'];
          $_SESSION['artist_email'] = $row['email_id'];

          header("Location:artist-home.php");
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
             include './themepart/top-menu2.php';
        ?>

      <style>
        * {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  line-height: 1.42857143;
  color: #333;
  background-color: #fff;
}

a {
  background-color: transparent;
}

a:active,
a:hover {
  outline: 0;
}

.row {
    padding-top: 11px;
    margin-right: -15px;
    margin-left: 13px;
}

.col-lg-3, .col-md-6, .col-xs-3 {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}

.col-xs-3 {
  float: left;
  width: 20%;
}

.col-xs-9 {
  width: 75%;
  float: left;
}

.clearfix:after {
  clear: both;
}

.clearfix:before,
.clearfix:after {
  display: table;
  content: " ";
}

.panel {
  margin-bottom: 10px;
  background-color: #fff;
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}

.panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}

.panel-heading {
  height: 100px;
  background-color: turquoise;
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}

.panel-green {
  border: 2px groove #398439;
  box-shadow: 5px 4px 7px 4px gray;
}

.panel-green .panel-heading {
  background-color: #398439;
  
}

.green {
  color: #398439;
}

.blue {
  color: #337ab7;
}

.red {
  color: #ce7f7f;
}

.panel-primary {
  border: 2px groove #337ab7;
  box-shadow: 5px 4px 7px 4px gray;
}

.panel-primary .panel-heading {
  background-color: #337ab7;
}

.yellow {
  color: #ffcc00;
}

.panel-yellow {
  border: 2px groove #ffcc00;
  box-shadow: 5px 4px 7px 4px gray;
}

.panel-yellow .panel-heading {
  background-color: #ffcc00;
}

.panel-red {
  border: 2px groove #ce7f7f;
  box-shadow: 5px 4px 7px 4px gray;
}

.panel-red .panel-heading {
  background-color: #ce7f7f;
  
}

.huge {
  font-size: 30px;
}

.panel-heading {
  color: #fff;
}

.pull-left {
  float: left !important;
}

.pull-right {
  float: right !important;
}

.text-right {
  text-align: right;
}

.under-number {
  font-size: 20px;
}

@media (min-width: 992px) {
  .col-md-6 {
    float: left;
    width: 50%;
  }
}

@media (min-width: 1200px) {
  .col-lg-3 {
    float: left;
    width: 20%;
  }
}

      </style>
        <div class="container m-t50 m-b90">
            <h1>Artist Home</h1>
        <div id="Upcoming" class="tab-pane active m-t60">
                            <div class="sf-tabs-content">
                                <form class="aon-login-form" method="post">
                                    <div class="row">
                                    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="panel panel-red">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-list fa-4x"></i>
              </div>
              <div class="col-xs-9 text-right">
               </div>
            </div>
          </div>
          <a href="artist-booking.php">
            <div class="panel-footer">
              <span class="pull-left red" >View Booking</span>
              <span class="pull-right red"
                ><i class="fa fa-arrow-circle-right"></i
              ></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>

     

      <div class="col-lg-4 col-md-6">
        <div class="panel panel-green">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-reorder fa-4x"></i>
              </div>
              <div class="col-xs-9 text-right">
               </div>
            </div>
          </div>
          <a href="artist-feedback.php">
            <div class="panel-footer">
              <span class="pull-left green">View feedback</span>
              <span class="pull-right green"
                ><i class="fa fa-arrow-circle-right"></i
              ></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="panel panel-yellow">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-user fa-4x"></i>
              </div>
              <div class="col-xs-9 text-right">
               </div>
            </div>
          </div>
          <a href="artist-inquiry.php">
            <div class="panel-footer">
              <span class="pull-left yellow">View inquiry</span>
              <span class="pull-right yellow"
                ><i class="fa fa-arrow-circle-right"></i
              ></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
    </div>                                
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>

  <!-- HEADER START -->
        <!-- HEADER END -->
    
</body>
        <?php
             include './themepart/footer.php';
        ?>
</html>