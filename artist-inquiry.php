
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
            include './themepart/top-menu2.php';

        ?>
<div class="container m-t40 m-b90">
<div id="aon-provider-articles" class="sf-provi-articles-box margin-b-50 sf-provi-fullBox">
                    <h3 class="sf-provi-title">Messages</h3>
                    
                    <div class="sf-divider-line"></div>
                    <ul class="sf-provi-articles-list sf-provi-articles-full d-flex flex-wrap">
                    <?php
$mq = mysqli_query($connection, "SELECT * FROM tbl_message where artist_id ='{$_SESSION['aid']}'");
while ($mdata = mysqli_fetch_array($mq)){
    $uq = mysqli_query($connection, "SELECT * FROM tbl_user  WHERE user_id = '{$mdata['user_id']}'   ");
    $udata = mysqli_fetch_array($uq);
    ?>
    
                        <li>
                            <div class="sf-provi-art-list d-flex flex-wrap">
                                <div class="sf-provi-art-left d-flex flex-wrap">
                                    <div class="sf-provi-art-pic"><img src="user-icon.jpg" alt=""></div>
                                    <div class="sf-provi-art-date"><i class="fa fa-calendar-o"></i><?php echo $mdata['message_datetime'] ?></div>
                                    <!-- <div class="sf-provi-art-comment"><i class="fa fa-comment-o"></i> Comments (25)</div> -->
                                </div>
                                <div class="sf-provi-art-right d-flex flex-wrap">
                                    <h4  class="sf-provi-art-title"><?php echo $udata['user_name'] ."-". $udata['phone_no'] ?> </h4>
                                  <pre>

 <div class="sf-provi-art-text"><?php echo "<h3>".$mdata['message_question'] ."</h3>" ?></div>
                                    <!-- <a href="blog-detail.html" class="sf-provi-art-btn">Read More</a> -->
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