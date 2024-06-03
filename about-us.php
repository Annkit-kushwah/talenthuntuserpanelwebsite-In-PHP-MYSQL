<?php
session_start();
require 'admin/class/at-class.php';



?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from aonetheme.com/sf-html-demo/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Dec 2023 16:35:03 GMT -->
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
    <title>Service Finder Template | About Us</title>
    
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
    
        <!-- Content -->
        <div class="page-content">
            
            <!-- Banner Area -->
            <div class="aon-page-benner-area">
              <div class="aon-page-banner-row" style="background-image: url(images/banner/job-banner.jpg)">
                <div class="sf-overlay-main" style="opacity:0.8; background-color:#022279;"></div>
                <div class="sf-banner-heading-wrap">
                  <div class="sf-banner-heading-area">
                    <div class="sf-banner-heading-large">About Us</div>
                    <div class="sf-banner-breadcrumbs-nav">
                      <ul class="list-inline">
                        <li><a href="index.html"> Home </a></li>
                        <li>About Us</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Banner Area End -->
            
            <!-- Why Choose us -->
            <section class="aon-why-choose2-area">
                <div class="container">

                    <div class="aon-why-choose2-box">
                        <div class="row">
                            <!-- COLUMNS LEFT -->
                            <div class="col-lg-6 col-md-12">
                                <div class="aon-why-choose-info">
                                    <!--Title Section Start-->
                                    <div class="section-head">
                                        <span class="aon-sub-title">Choose</span>
                                        <h2 class="aon-title">Why Choose us</h2>
                                        <p>Discover top-tier artists effortlessly with our comprehensive database and user-friendly interface. Trust us for seamless bookings and exceptional support, ensuring your creative vision comes to life effortlessly.</p>
                                    </div>
                                    <!--Title Section Start End-->

                                    <ul class="aon-why-choose-steps list-unstyled">
                                        <!-- COLUMNS 1 -->
                                        <li class="d-flex">
                                            <div class="aon-w-choose-left aon-icon-effect">
                                                <div class="aon-w-choose-icon"><i class="aon-icon"><img src="images/whychoose/1.png" alt=""></i></div>
                                            </div>
                                            <div class="aon-w-choose-right">
                                                <h4 class="aon-title">Extensive Selection</h4>
                                                <p>our platform provides a comprehensive database of artists ready to elevate your experience.</p>
                                            </div>
                                        </li>
                                        <!-- COLUMNS 2 -->
                                        <li class="d-flex">
                                            <div class="aon-w-choose-left aon-icon-effect">
                                                <div class="aon-w-choose-icon"><i class="aon-icon"><img src="images/whychoose/2.png" alt=""></i></div>
                                            </div>
                                            <div class="aon-w-choose-right">
                                                <h4 class="aon-title">User-Friendly Interface and Seamless Booking Process</h4>
                                                <p>We prioritize simplicity and convenience to ensure a stress-free experience for both users and artists.</p>
                                            </div>
                                        </li>
                                        <!-- COLUMNS 3 -->
                                        <li class="d-flex">
                                            <div class="aon-w-choose-left aon-icon-effect">
                                                <div class="aon-w-choose-icon"><i class="aon-icon"><img src="images/whychoose/3.png" alt=""></i></div>
                                            </div>
                                            <div class="aon-w-choose-right">
                                                <h4 class="aon-title">Quality Assurance and Customer Support</h4>
                                                <p> you can trust that you'll have access to top-tier talent and exceptional service, making your creative endeavors a success.</p>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <!-- COLUMNS RIGHT -->
                            <div class="col-lg-6 col-md-12">
                                <div class="aon-why-choose2-line">
                                    <div class="aon-why-choose2-pic"></div>
                                </div>     
                        </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- Why Choose us END -->              
            
            <!-- About Area -->
            <div class="aon-about-area">
                <div class="container">

                    <div class="section-content">
                        <div class="row d-flex flex-wrap align-items-center a-b-none">
                            <div class="col-lg-6 col-md-12">
                                <div class="aon-about-pic">
                                    <img src="images/about-pic.jpg" alt=""/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <!--Title Section Start-->
                                <div class="section-head">
                                    <span class="aon-sub-title">About</span>
                                    <h2 class="sf-title">Talent Hunt : Connecting Creativity with Convenience</h2>
                                    <p>Welcome to Talent Hunt, where creativity meets convenience. Our platform is dedicated to connecting artists with clients, making it easier than ever to bring your artistic vision to life.</p>
                                    <p>At Talent Hunt, we understand the importance of finding the perfect artist for your event or project. That's why we've curated a diverse selection of talented individuals, spanning various genres, styles, and disciplines. From musicians to , dancers to magicians, our extensive database ensures that you'll find the ideal artist to suit your needs.</p>
                                </div>
                                <!--Title Section End-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- About Area END -->            
            
            <!-- How it Work -->
            <section class="bg-white aon-how-service-area">
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

            <!-- Statics -->
            <div class="site-bg-primary aon-statics-area">
                <div class="container">

                    <div class="section-content">
                        <div class="row d-flex flex-wrap align-items-center a-b-none">
                            <div class="col-lg-6 col-md-12">
                                <!--Title Section Start-->
                                <div class="section-head">
                                    <span class="aon-sub-title">Statics</span>
                                    <h2 class="sf-title">Your Premier Destination for Artist Discovery and Booking</h2>
                                    <p>Welcome to statics, the ultimate platform for discovering and booking talented artists for any occasion. Whether you're planning a corporate event, a wedding, or a gallery exhibition, statics provides a seamless experience for connecting with top-tier creatives across various disciplines.</p>
                                    <p>With statics, you gain access to an extensive database of artists, carefully curated to represent a diverse range of styles, genres, and talents. From musicians and painters to dancers and performers, our platform showcases the best of the artistic world, ensuring that you'll find the perfect match for your needs.</p>
                                </div>
                                <!--Title Section End-->
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <!--Statics-blocks Section Start-->
                                <div class="aon-statics-blocks">
                                    <div class="row">
                                        <!--Block 1-->
                                        <div class="col-lg-6 m-b30 aon-static-position-1">
                                            <div class="media-bg-animate media-statics aon-icon-effect">
                                                <div class="aon-static-section aon-t-blue">
                                                    <div class="aon-company-static-num counter aon-icon">52</div>
                                                    <div class="aon-company-static-name">Artist</div>
                                                </div>
                                            </div>
                                            <div class="media-bg-animate media-statics aon-icon-effect">
                                                <div class="aon-static-section aon-t-yellow">
                                                    <div class="aon-company-static-num counter aon-icon">8</div>
                                                    <div class="aon-company-static-name">Events</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Block 2-->
                                        <div class="col-lg-6 m-b30 aon-static-position-2">
                                            <div class="media-bg-animate media-statics aon-icon-effect">
                                                <div class="aon-static-section aon-t-green">
                                                    <div class="aon-company-static-num counter aon-icon">15</div>
                                                    <div class="aon-company-static-name">Customer</div>
                                                </div>
                                            </div>
                                            <div class="media-bg-animate media-statics aon-icon-effect">
                                                <div class="aon-static-section aon-t-skyblue">
                                                    <div class="aon-company-static-num counter aon-icon">5</div>
                                                    <div class="aon-company-static-name">Categories</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Statics-blocks Section End-->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Provider END -->


            <!-- Testimonial Section -->
          
            <!-- Testimonial Section END -->        
            
            </div>
        <!-- Content END-->

        <!-- FOOTER START -->
        
        <!-- FOOTER END -->
        <?php
            include './themepart/footer.php';

        ?>
        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

 	</div>


    <!-- Login Sign Up Modal -->
    <div class="modal fade" id="login-signup-model">
      <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close aon-login-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <div class="modal-body">

                <div class="sf-custom-tabs sf-custom-new aon-logon-sign-area p-3">

                    <!--Tabs-->
                    <ul class="nav nav-tabs nav-table-cell">
                        <li><a data-toggle="tab" href="#Upcoming" class="active">Login</a></li>
                        <li><a data-toggle="tab" href="#Past">Sign up</a></li>
                    </ul>
                    <!--Tabs Content--> 
                    <div class="tab-content">

                        <!--Login Form-->
                        <div id="Upcoming" class="tab-pane active">
                            <div class="sf-tabs-content">
                                <form class="aon-login-form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                    <input class="form-control sf-form-control" name="company_name" type="text" placeholder="User Name">
                                                    <i class="aon-input-icon fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                    <input class="form-control sf-form-control" name="company_name" type="password" placeholder="Password">
                                                    <i class="aon-input-icon fa fa-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group d-flex aon-login-option justify-content-between">
                                                <div class="aon-login-opleft">
                                                     <div class="checkbox sf-radio-checkbox">
                                                        <input id="td2_2" name="abc" value="five" type="checkbox">
                                                        <label for="td2_2">Keep me logged</label>
                                                    </div>  
                                                </div>
                                                <div class="aon-login-opright">
                                                    <a href="#">Forget Password</a>
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

                        <!--Sign up Form-->
                        <div id="Past" class="tab-pane">
                            <div class="sf-tabs-content">
                                <form class="aon-login-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                    <input class="form-control sf-form-control" name="First_Name" type="text" placeholder="First Name">
                                                    <i class="aon-input-icon fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                    <input class="form-control sf-form-control" name="company_name" type="password" placeholder="Last Name">
                                                    <i class="aon-input-icon fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                    <input class="form-control sf-form-control" name="Phone" type="password" placeholder="Phone">
                                                    <i class="aon-input-icon fa fa-phone"></i>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                    <input class="form-control sf-form-control" name="email" type="password" placeholder="Email">
                                                    <i class="aon-input-icon fa fa-envelope-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                    <input class="form-control sf-form-control" name="password" type="password" placeholder="Password">
                                                    <i class="aon-input-icon fa fa-lock"></i>
                                                </div>
                                            </div>
                                        </div>
                                        
                                         <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                    <input class="form-control sf-form-control" name="password" type="password" placeholder="Confirm Password">
                                                    <i class="aon-input-icon fa fa-lock"></i>
                                                </div>
                                            </div>
                                        </div>                                        
                                        
                                        <div class="col-md-12">
                                            <div class="form-group sign-term-con">
                                                <div class="checkbox sf-radio-checkbox">
                                                    <input id="td33" name="abc" value="five" type="checkbox">
                                                    <label for="td33">I've read and agree with your <a href="#">Privacy Policy</a> and <a href="#">Terms & Conditions</a> </label>
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

                </div>

            </div>
        </div>
      </div>
    </div>
    <!-- Login Sign Up Modal --> 
    
    
    
    
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


<!-- Mirrored from aonetheme.com/sf-html-demo/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Dec 2023 16:35:04 GMT -->
</html>
