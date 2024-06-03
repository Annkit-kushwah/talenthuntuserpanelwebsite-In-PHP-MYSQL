
<?php
require 'admin/class/at-class.php';
session_start();
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
             include './themepart/top-menu2.php';
        ?>
        <!-- HEADER END -->
    
        <!-- CONTENT START -->
        <div class="page-content">
           
            <!-- BANNER SECTION START -->
            <section class="aon-banner-wrap">

                <!--Left Section-->
                <div class="aon-banner-outer sf-overlay-wrapper">
                    <div class="aon-banner-pic">
                        <div class=""></div>
                        <div class="aon-overlay-main" style="opacity:0.85; background-color:#022278;"></div>
                        <img src="images/th-dancers/d-3.jpg" width="1919" height="976" alt="">
                    </div>
                    <div class="aon-banner-text">
                        <div class="container"> 
                            <div class="aon-bnr-write">
                                <h2 class="text-white">Hire <span class="text-warning">Artist</span> & Welcome to</h2>
                                <h1 class="text-bot-line text-white"><span class="text-warning">Talent Hunt</span><br/>Your Gateway to Artistic Excellence!</h1>
                            </div>
                        </div>
                    </div>                    
                </div>
                
                <!--Right Section-->
                <div class="aon-find-bar aon-findBar-vertical">
                  <div class="container">
                    <!-- Search Form start--> 
                    <div class="search-form ">
                      <form class="clearfix search-providers" action="profile.php" method="get">
 
                           <div class="aon-searchbar-table">

                          <div class="aon-searchbar-left">
                            <ul class="clearfix sf-searchfileds-count-5">
                             

                              <li>
                                <label>Artist Category</label> 
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
                                <span class="sf-search-icon"><img src="images/search-bar/maintenance.png" alt=""/></span>
                              </li>
                              <li>
                                <label>Location</label>  
                                <select class="sf-select-box form-control sf-form-control bs-select-hidden" data-live-search="true" name="aid" id="country" title="Area of Ahmedabad" data-header="Select a location" required>
                                  <option class="bs-title-option" value="">Select location</option>
                                  <?php 

$tq = mysqli_query($connection,"select * from tbl_area");
while($tdata = mysqli_fetch_array($tq))
{
    echo "<option value='{$tdata['area_id']}'>{$tdata['area_name']}</option>";
}
?>

                                </select>
                                <span class="sf-search-icon"><img src="images/search-bar/globe.png" alt=""/></span>
                              </li>
                              
                            </ul>
                          </div>
                          <div class="aon-searchbar-right">
                         
                            <button type="submit" class="site-button"> <i class="fa fa-search"></i> Find Artist</button>
                          </div>

                        </div>

                      </form>
                    </div>
                    <!-- Search Form End--> 
                  </div>
                </div>

            </section>
            <!-- BANNER SECTION END -->  

            <!-- Services Finder categories -->
            <section class="bg-white aon-categories-area sf-curve-pos">
                <div class="container">

                    <!--Title Section Start-->
                    <div class="section-head">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <span class="aon-sub-title">Artist categories</span>
                                <h2 class="aon-title">Popular Artist Categories</h2>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <p>Are you ready to elevate your events with exceptional talent
                                     and creativity? Look no further! At 
                                     <span class="text-warning">Talent Hunt</span>,
                                      we connect you with a diverse array of talented artists 
                                      who are ready to make your events truly unforgettable.</p>
                            </div>
                        </div>
                    </div>
                    <!--Title Section End-->

                    <div class="section-content">
                        <div class="owl-carousel categories-carousel-owl aon-owl-arrow">
                            <!-- COLUMNS 1 -->
                            <div class="item">
                                <div class="aon-cat-item">
                                    <div class="aon-cat-pic media-bg-animate shine-hover">
                                        <a class="shine-box" href="profile.php?typeid=3"><img src="images/th-singers/s-5.jpg" alt=""></a>
                                    </div>
                                    <h4 class="aon-cat-title">Singers / Musicians</h4>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="item">
                                <div class="aon-cat-item">
                                    <div class="aon-cat-pic media-bg-animate shine-hover">
                                        <a class="shine-box" href="profile.php?typeid=4"><img src="images/th-comadian/c-3.jpg" alt=""></a>
                                    </div>
                                    <h4 class="aon-cat-title">Stand-up Comedians</h4>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="item">
                                <div class="aon-cat-item">
                                    <div class="aon-cat-pic media-bg-animate shine-hover">
                                        <a class="shine-box" href="profile.php?typeid=2"><img src="images/th-magicians/m-2.jpg" alt=""></a>
                                    </div>
                                    <h4 class="aon-cat-title">Magicians</h4>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="item">
                                <div class="aon-cat-item">
                                    <div class="aon-cat-pic media-bg-animate shine-hover">
                                        <a class="figure" href="profile.php?typeid=1"><img src="images/th-dancers/d-1.png" alt=""></a>
                                    </div>
                                    <h4 class="aon-cat-title">Dancers</h4>
                                </div>
                            </div>
                            <!-- COLUMNS 5 -->
                            <div class="item">
                                <div class="aon-cat-item">
                                    <div class="aon-cat-pic media-bg-animate shine-hover">
                                        <a class="shine-box" href="profile.php?typeid=5"><img src="images/th-anchor/an-3.jpg" alt=""></a>
                                    </div>
                                    <h4 class="aon-cat-title">Anchors</h4>
                                </div>
                            </div>
                            <!-- COLUMNS 6 -->
                            <!-- <div class="item">
                                <div class="aon-cat-item">
                                    <div class="aon-cat-pic media-bg-animate shine-hover">
                                        <a class="shine-box" href="categories-detail.html"><img src="images/popular-categories/6.jpg" alt=""></a>
                                    </div>
                                    <h4 class="aon-cat-title">Gym</h4>
                                </div>
                            </div> -->
                            <!-- COLUMNS 7 -->
                            <!-- <div class="item">
                                <div class="aon-cat-item">
                                    <div class="aon-cat-pic media-bg-animate shine-hover">
                                        <a class="shine-box" href="categories-detail.html"><img src="images/popular-categories/7.jpg" alt=""></a>
                                    </div>
                                    <h4 class="aon-cat-title">Transport</h4>
                                </div>
                            </div> -->
                        </div>
                    </div>

                </div>
            </section>
            <!-- Services Finder categories END -->

            <!-- How it Work -->
            <section class="bg-white aon-how-service-area sf-curve-pos">
                <div class="container">

                    <div class="section-content">
                       <div class="row">
                            <!--Title Section Start-->
                            <div class="col-lg-4 col-md-12">
                                <span class="aon-sub-title">Steps</span>
                                <h2 class="sf-title">How <span class="text-warning">Talent Hunt</span> Works</h2>
                            </div>
                            <!--Title Section End-->

                            <div class="col-lg-8 col-md-12">
                                <!-- Steps Block Start-->
                                <div class="aon-step-blocks">
                                    <div class="row">
                                        <!-- COLUMNS 1 -->
                                        <div class="col-md-4 col-sm-4 m-b30">
                                            <div class="aon-step-section step-position-1 aon-icon-effect">
                                                <div class="aon-step-icon aon-icon-box">
                                                    <span>
                                                        <i class="aon-icon"><img src="images/step-icon/1.png" alt=""></i>
                                                    </span>
                                                </div>
                                                <div class="aon-step-info">
                                                    <h4 class="aon-title"> Explore Categories</h4>
                                                    <p>Discover a diverse range of talented artists by exploring categories 
                                                        such as music, visual arts, and performance. Our curated selection 
                                                        ensures a variety of options to suit your event.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- COLUMNS 2 -->
                                        <div class="col-md-4 col-sm-4 m-b30">
                                            <div class="aon-step-section step-position-2 aon-icon-effect">
                                                <div class="aon-step-icon">
                                                    <span>
                                                        <i class="aon-icon"><img src="images/step-icon/2.png" alt=""></i>
                                                    </span>
                                                </div>
                                                <div class="aon-step-info">
                                                    <h4 class="aon-title">Filter and Choose</h4>
                                                    <p>Use intuitive filters to refine your search based on location,
                                                         availability, and genre. Dive into artist profiles, explore 
                                                         portfolios, and find the perfect match for your event.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- COLUMNS 3 -->
                                        <div class="col-md-4 col-sm-4 m-b30">
                                            <div class="aon-step-section  step-position-3  aon-icon-effect">
                                                <div class="aon-step-icon">
                                                    <span>
                                                        <i class="aon-icon"><img src="images/step-icon/3.png" alt=""></i>
                                                    </span>
                                                </div>
                                                <div class="aon-step-info">
                                                    <h4 class="aon-title"> Book and Enjoy</h4>
                                                    <p>Effortlessly book your chosen artist through our streamlined
                                                         process. Once confirmed, sit back and enjoy as your event 
                                                         is elevated by the creativity and talent of the selected artist.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Steps Block End-->
                            </div>

                        </div>
                    </div>

                </div>
            </section>
            <!-- How it Work END -->            

           

         

            <!-- Latest Blog -->
           
            <!-- Latest Blog END --> 

         
            <!-- Why Choose us END -->

            <!-- Jobs Section -->
           
            <!-- Jobs Section END -->         

            <!-- Pricing Plan Section -->
            
            <!-- Pricing Plan Section END -->             

            <!-- Testimonial Section -->
           
            <!-- Testimonial Section END -->             
            
        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <?php
            include './themepart/footer.php';

        ?>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

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


<!-- Mirrored from aonetheme.com/sf-html-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Dec 2023 16:34:44 GMT -->
</html>




