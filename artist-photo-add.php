
<?php
    session_start();
require 'admin/class/at-class.php';
    if(isset($_POST['btn'])){
         $aid = $_SESSION['aid'];
        $filename = $_FILES['file123']['name'];
        $filepath = $_FILES['file123']['tmp_name'];
      $q = mysqli_query($connection,"insert into tbl_photo(artist_id,photo_path)values('{$aid}','{$filename}')");
        
       move_uploaded_file($filepath,"upload/".$filename);
      if($q){

         echo "<script>alert('record added');</script>";
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
            <h1>Photo Upload</h1>
        
            <div id="aon-provider-Req-quote" class="sf-provi-qoute-box cleafix m-b50 sf-provi-fullBox">
                    
                    <div class="sf-divider-line"></div>                
                	<div class="sf-provi-qform">
                        <form action="" method="post" id="myform" enctype="multipart/form-data">
                            <div class="row">
                            <div class="col-md-4">
                            <div class="col-md-6 breck-w1400">
                                        
                                    </div>
                            </div>
                           
                       
                            <div class="col-md-12">
                            <div class="form-group">
                            <label>Photo</label>
                               <input type="file" name="file123" id="" class="form-control" required>
                            </div>
                            </div>




                            <div class="col-md-12">
                            <div class="form-group text-center qout-submit-btn">
                                <input type="submit" name="btn" value="Upload" class="site-button" required>
                            </div>
                            </div>
                            </div>
                        </form>
                    </div>
                    
                    
                </div>

                <footer class="site-footer t" >
            
            <!-- FOOTER NEWSLETTER START -->
           
            <!-- FOOTER BLOCKES START -->  
            <div class="footer-top m-t50">
                <div class="">
                    <div class="row">
                        <!-- Footer col 1--> 
                        <div class="col-lg-3 col-md-6 col-sm-6  m-b30">
                            <div class="sf-site-link sf-widget-link">
                                <h4 class="sf-f-title">Site Links</h4>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about-us.php">About us</a></li>
                                    <!-- <li><a href="job-grid.html">Profile</a></li> -->
                                    <!-- <li><a href="">Categories</a></li> -->
                                    <li><a href="contact-us.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer col 2-->
                        <div class="col-lg-3 col-md-6 col-sm-6  m-b30">
                            <div class="sf-site-link sf-widget-cities">
                                <h4 class="sf-f-title">Popular Cities</h4>
                                <ul>
                                    <li><a href="profile.php">Satelite</a></li>
                                    <li><a href="profile.php">Navrangpura</a></li>
                                    <li><a href="profile.php">Vadaj</a></li>
                                    <li><a href="profile.php">Ranip</a></li>
                                    <li><a href="profile.php">Kankaria</a></li>
                                    <li><a href="profile.php">Memnagar</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer col 1-->
                        <div class="col-lg-3 col-md-6 col-sm-6  m-b30">
                            <div class="sf-site-link sf-widget-categories">
                                <h4 class="sf-f-title">Categories</h4>
                                <ul>
                                    <li><a href="profile.php">Singers/Musicians</a></li>
                                    <li><a href="profile.php">Stand-up Comedians</a></li>
                                    <li><a href="profile.php">Magician</a></li>
                                    <li><a href="profile.php">Dancers</a></li>
                                    <li><a href="profile.php">Anchors</a></li>

                                </ul>
                            </div>
                        </div>
                        <!-- Footer col 1-->
                        <div class="col-lg-3 col-md-6 col-sm-6  m-b30">
                            <div class="sf-site-link sf-widget-contact">
                                <h4 class="sf-f-title">Contact Info</h4>
                                <ul>
                                    <li>Ahmedabad</li>
                                    <li>+91 87994 09845</li>
                                    <li>+91 96649 23532</li>
                                    <li>+91 63525 97283</li>
                                    <li>talenthunt200442@gmail.com</li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom">
                <div class="">
                    <div class="sf-footer-bottom-section">
                        <div class="sf-f-logo"><a href="javascript:void(0);"><img src="images/thdn1.png" alt=""></a></div>
                    	
                        <div class="sf-f-copyright">
                        	<span>Copyright 2022 | All Rights Reserved</span>
                        </div>
                       
                        <div class="sf-f-social">
                            <ul class="socila-box">
                                <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>   
            </div>   
    
        </footer>
    
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