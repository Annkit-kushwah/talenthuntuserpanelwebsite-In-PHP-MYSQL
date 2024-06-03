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
<div id="aon-provider-review" class="sf-provi-articles-box margin-b-50 sf-provi-fullBox  " >
                    <h3 class="sf-provi-title "> Customer Inquiry</h3>
                    <div class="sf-divider-line"></div>
    
                  
                    <div class="row d-flex flex-wrap a-b-none">
                    <?php
                     if(isset($_GET['did']))
                     {
                         $q = mysqli_query($connection,"delete from tbl_message where message_id ='{$_GET['did']}'");
                     }
$fq = mysqli_query($connection, "SELECT * FROM tbl_message where user_id ='{$_SESSION['uid']}' ");
echo "<table class='table'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Artist</th>";
echo "<th>Date</th>";
echo "<th>Details</th>";
echo "<th>Action</th>";

echo "</tr>";
while ($fdata = mysqli_fetch_array($fq)){
    $uq = mysqli_query($connection, "SELECT * FROM tbl_artist  WHERE artist_id = '{$fdata['artist_id']}'   ");
    $udata = mysqli_fetch_array($uq);

    echo "<tr>";
    echo "<td>{$fdata['message_id']}</td>";
    echo "<td>{$udata['artist_name']}</td>";
    echo "<td>{$fdata['message_question']}</td>";
    echo "<td>{$fdata['message_datetime']}</td>";
    echo "<td><a href='?did={$fdata['message_id']}'>Delete</a></td>";

    echo "</tr>";



}
    echo "</table>";

?>


 



                       
                       
                    </div>
    

                </div>
                </div>
                <?php
             include './themepart/footer.php';
        ?>
</body>
</html>