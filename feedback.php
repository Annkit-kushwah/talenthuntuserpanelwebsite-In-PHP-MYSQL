
<?php
session_start();
require 'admin/class/at-class.php';



?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from aonetheme.com/sf-html-demo/profile-full.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Dec 2023 16:35:13 GMT -->
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
    <title>Service Finder Template | Profile Full</title>
    
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
<div class="container m-t40 m-b90">   
<div id="aon-provider-services" class="sf-provi-service-box m-b50 sf-provi-fullBox">
                    <h3 class="sf-provi-title">Booking Feedback</h3>
                    <div class="sf-divider-line"></div>
                    <ul class="sf-provi-service-list">
                    <?php
$fq = mysqli_query($connection, "SELECT * FROM tbl_feedback");
while ($fdata = mysqli_fetch_array($fq)){
  $uq = mysqli_query($connection, "SELECT * FROM tbl_user  WHERE user_id = '{$fdata['user_id']}'   ");
    $udata = mysqli_fetch_array($uq);
  ?>
                        <li class="sf-provi-service-box">

                            <div class="sf-provi-service-top">
                                <div class="sf-provi-service-left">
                                    <h4 class="sf-provi-service-ttle"> <?php echo $udata['user_name']  ?> </h4>
                                    <!-- <div class="sf-provi-service-price">$124.00</div> -->
                                   
                                <div class="sf-provi-service-right">
                                    <button class="site-button btn-schedules"><?php echo $fdata['feedback_details']  ?></button>
                                </div>

                            </div>
                            
                        </li>

<?php

}

?>
                    </ul>
                    
                    </div>
                </div>
                <?php
             include './themepart/footer.php';
        ?>
</body>
</html>