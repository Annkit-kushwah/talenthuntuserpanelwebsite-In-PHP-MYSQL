<?php
session_start();
require 'admin/class/at-class.php';


?>



<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from aonetheme.com/sf-html-demo/search-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Dec 2023 16:35:10 GMT -->
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
    <title>Service Finder Template | Search List</title>
    
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
    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="windows8">
                <div class="wBall" id="wBall_1">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_2">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_3">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_4">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_5">
                    <div class="wInnerBall"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->
    
<div class="page-wraper">
        <!-- HEADER START -->
        <?php
       require "./themepart/top-menu2.php";
       ?>
       
        <!-- HEADER END -->

    <!-- Content -->
    <div class="page-content">
        
        <!-- Search Panel Area -->
        <div class="sf-seach-vertical sf-search-bar-panel">
            <div class="search-form ">
              <form class="clearfix search-providers" method="get">

                  <div class="sf-searchbar-box">
                    <ul class="sf-searchbar-area">
                     
                    <li>
                        <div class="sf-search-title">
                            <label><h3>Search Artist</h3></label>
                            <span class="sf-search-icon"><img src="images/search-bar/maintenance.png" alt=""/></span>
                        </div>
                        <div class="sf-search-feild">
                            <form method="get" >
                        <input type="text" class="form-control" name="search"/>
                        <br/>
                        &nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;
                        
                        <button type="button" class="site-button aon-btn-signup m-l20  " value="Go">Search</button>
                        </form>
                        </div>
</li>
                      <li>
                        <div class="sf-search-title">
                            <label><h3>Category</h3></label>
                            <span class="sf-search-icon"><img src="images/search-bar/maintenance.png" alt=""/></span>
                        </div>
                        <div class="sf-search-feild">
                       <?php

                       $cq = mysqli_query($connection , "SELECT * FROM tbl_type");
                       while ($cdata = mysqli_fetch_array($cq)){

                            echo  "<li><a href='profile.php?typeid={$cdata['type_id']}'><h4>{$cdata['type_name']}</h4></a></li>";
                       }

?>
                        </div>

                      </li>
                     
                     


                    </ul>
                    <!-- <button type="button" class="site-button sf-search-btn"><i class="fa fa-search"></i> Search Now</button> -->
                  </div>
              </form>
            </div>
        </div>
        <!-- Search Panel Area End -->
        
        <!-- Search Result Area -->
        <div class="aon-search-result-area">
            
            <!-- Search Filter -->
            <div class="sf-search-result-top flex-wrap d-flex justify-content-between align-items-center">
                <div class="sf-search-result-title"> <h5> Profile List</h5></div>
                <div class="sf-search-result-option">
                     
                </div>
            </div>
            <!-- Search Filter End -->
            <div class="sf-map-filter">
                <button class="search-filter-btn btn site-button" type="button"><i class="fa fa-sliders"></i> Search Filter</button>
            </div>
            
            <!-- Search Result Show -->
            <div class="aon-vender-list-wrap-outer">
                <div class="row">


                    <!--Block 1-->
                    <?php
                     if(isset($_GET['search'])){
                        $search = $_GET['search'];
                        $q = mysqli_query($connection,"SELECT * FROM tbl_artist where artist_name like '%{$search}%'");
                    }
                       else if(isset($_GET['typeid'])){
                            $cid = $_GET['typeid'];
                            $q = mysqli_query($connection,"SELECT * FROM tbl_artist where type_id = '{$cid}'");
                        }
                        else if(isset($_GET['tid'])){
                            $cid = $_GET['tid'];
                            $aid = $_GET['aid'];
                            $q = mysqli_query($connection,"SELECT * FROM tbl_artist where type_id = '{$cid}' and area_id='{$aid}'");
                        }
                        else{

                           
                            $q = mysqli_query($connection,"SELECT * FROM tbl_artist");
                        }
                        while($data = mysqli_fetch_array($q)){
                            $aq = mysqli_query($connection, "SELECT * FROM tbl_area  WHERE area_id = '{$data['area_id']}'   ");
    $udata = mysqli_fetch_array($aq);
    $tq = mysqli_query($connection, "SELECT * FROM tbl_type  WHERE type_id = '{$data['type_id']}'   ");
    $tdata = mysqli_fetch_array($tq);
                    ?>
                    <div class="col-md-6">
                        <div class="sf-vender-list-wrap">
                            <div class="sf-vender-list-box d-flex">
                                <div class="sf-vender-list-pic" style="background-image:url(upload/<?php echo $data['profile_photo']; ?>)">
                                    <a class="sf-vender-pic-link" href="profile-full.php?pid=<?php echo $data['artist_id']?>"></a>
                                </div>
                                <div class="sf-vender-list-info">
                                    <h4 class="sf-venders-title"><a href="profile-full.php?pid=<?php echo $data['artist_id']?>"><?php echo $data['artist_name']; echo "({$tdata['type_name']})"; ?></a></h4>
                                    <span class="sf-venders-address"><i class="fa fa-map-marker"></i><?php echo$udata['area_name'];?></span>
                                    <!--<div class="sf-ow-pro-rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star text-gray"></span>
                                    </div>-->
                                    <p><?php echo $data['about_me']; ?></p>
                                    <!--<div class="sf-pro-check"><span><i class="fa fa-check"></i></span></div>
                                    <div class="sf-pro-favorite"><a href="#"><i class="fa fa-heart-o"></i></a></div>

                                    <div class="dropdown action-dropdown dropdown-left">
                                        <button class="action-button gray dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-ellipsis-v"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:;"><i class="feather-sliders"></i> Display Services</a></li>
                                            <li><a href="javascript:;"><i class="feather-save"></i> 0 Review Comments</a></li>
                                            <li><a href="javascript:;"><i class="feather-trash"></i> Request A Quote</a></li>
                                        </ul>
                                    </div>-->

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    
                    <!-- Block 1 end -->
                    
                    <!--Pagination Start-->
                   

                </div>
            </div>
            <!-- Search Result Show End -->

        </div>
        <!-- Search Result Area End-->


    </div>
    <!-- Content END-->


</div>

 
    
    
    
    
<!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="js/jquery-3.6.0.min.js"></script><!-- JQUERY.MIN JS -->
<script  src="js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script  src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT -->    
<script  src="js/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script  src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script  src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script  src="js/waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
<script  src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
    
<script  src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script  src="js/slick.min.js"></script><!-- OWL  SLIDER  -->
    
<script  src="js/theia-sticky-sidebar.js"></script><!-- STICKY SIDEBAR  -->
<script src="js/m-custom-scrollbar.min.js"></script><!-- my account left panel scroller -->
<script src="js/dropzone.js"></script><!-- Images upload -->  

<script src="js/bootstrap4-toggle.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>

<script  src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/lc_lightbox.lite.js" ></script><!-- IMAGE POPUP -->
<script  src="js/bootstrap-slider.min.js"></script><!-- Form js -->

</body>


<!-- Mirrored from aonetheme.com/sf-html-demo/search-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Dec 2023 16:35:10 GMT -->
</html>
