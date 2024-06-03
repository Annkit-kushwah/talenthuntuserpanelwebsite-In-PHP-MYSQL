<?php
require 'admin/class/at-class.php';
session_start();
    if($_POST){
        $contact_name = $_POST['contact_name'];
        $email_id = $_POST['email_id'];
        $phone_no = $_POST['phone_no'];
        $contact_subject = $_POST['contact_subject'];
        $contact_message = $_POST['contact_message'];

        $q = mysqli_query($connection,"insert into tbl_contact(contact_name,email_id,phone_no,contact_subject,contact_message)
         values('{$contact_name}','{$email_id}','{$phone_no}','{$contact_subject}','{$contact_message}')");
        if($q){
            echo "<script>alert('record added');</script>";
        }
    }

?>
<!DOCTYPE html>

<html class="no-js" lang="zxx">


<!-- Mirrored from aonetheme.com/sf-html-demo/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Dec 2023 16:35:30 GMT -->
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

    <title>Service Finder Template | Contact Us</title>

    

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

    

    <script src="../../www.google.com/recaptcha/api.js" async defer></script>



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

            <!--Banner-->

            <div class="aon-page-benner-area">

              <div class="aon-page-banner-row" style="background-image: url(images/banner/job-banner.jpg)">

                <div class="sf-overlay-main" style="opacity:0.8; background-color:#022279;"></div>

                <div class="sf-banner-heading-wrap">

                  <div class="sf-banner-heading-area">

                    <div class="sf-banner-heading-large">Contact Us</div>

                    <div class="sf-banner-breadcrumbs-nav">

                      <ul class="list-inline">

                        <li><a href="index.php"> Home </a></li>

                        <li>Contact us</li>

                      </ul>

                    </div>

                  </div>

                </div>

              </div>

            </div>            

            <!--Banner-->



            <!-- Contact Us-->

            <div class="aon-contact-area">

              <div class="container">

                <!--Title Section Start-->

                <div class="section-head text-center">

                    <h2 class="sf-title">Contact Information</h2>
                    <p>Please provide your contact information.</p>
                </div>

                <!--Title Section End-->



                <div class="section-content">

               

                  <div class="sf-contact-info-wrap">  

                    <div class="row">

            

                        <!-- COLUMNS 1 -->

                        <div class="col-lg-4 col-md-6">

                            <div class="sf-contact-info-box">

                                <div class="sf-contact-icon">

                                    <span><img src="images/contact-us/1.png" alt=""></span>

                                </div>

                                <div class="sf-contact-info">

                                    <h4 class="sf-title">Mailing Address</h4>

                                    <p>5, Terapanth Rd, Gokul Nagar Society, Usmanpura, Ahmedabad, 
                                        Gujarat 380013</p>

                                </div>

                            </div>

                        </div>

                        <!-- COLUMNS 2 -->

                        <div class="col-lg-4 col-md-6">

                            <div class="sf-contact-info-box">

                                <div class="sf-contact-icon">

                                    <span><img src="images/contact-us/2.png" alt=""></span>

                                </div>

                                <div class="sf-contact-info">

                                    <h4 class="sf-title">Email Info</h4>

                                    <p>jogihitesh54@gmail.com ankitkushwah@gmail.com rajputvivekshingh849@gmail.com</p>
                               </div>

                            </div>

                        </div>

                        <!-- COLUMNS 3 -->

                        <div class="col-lg-4 col-md-6">

                            <div class="sf-contact-info-box">

                                <div class="sf-contact-icon">

                                    <span><img src="images/contact-us/3.png" alt=""></span>

                                </div>

                                <div class="sf-contact-info">

                                    <h4 class="sf-title">Phone Number</h4>

                                    <p>(24/7 Support Line)</p>
                                    <p>+91 87994 09845</p>
                                    <p>+91 63525 97283</p>
                                    <p>+91 96649 23532</p>

                                </div>

                            </div>

                        </div>

            

                    </div>

                  </div>



                  <div class="sf-contact-form-wrap">

                    <!--Contact Information-->  

                    <div class="sf-contact-form">

<div class="sf-con-form-title text-center">

    <h2 class="m-b30">Contact Information</h2>

</div>

<form class="" method="post" id="myform">

    <div class="row">

        

        <!-- COLUMNS 1 -->

        <div class="col-md-6">

            <div class="form-group">

                <input type="text" name="contact_name" placeholder="Name" class="form-control" required>

            </div>

        </div>

        

        <!-- COLUMNS 2 -->

        <div class="col-md-6">

            <div class="form-group">

                <input type="text" name="email_id" placeholder="Email" class="form-control" required>

            </div>

        </div>

        <!-- COLUMNS 3 -->

        <div class="col-md-6">

            <div class="form-group">

                <input type="text" name="phone_no" placeholder="Phone" class="form-control"required >

            </div>

        </div>

        <!-- COLUMNS 4 -->

        <div class="col-md-6">

            <div class="form-group">

                <input type="text" name="contact_subject" placeholder="Subject" class="form-control" required>

            </div>

        </div>



        <!-- COLUMNS 5 -->

        <div class="col-md-12">

            <div class="form-group">

                <textarea name="contact_message" placeholder="Message" class="form-control" required></textarea>

            </div>

        </div>

        

        <div class="col-md-12">

            <div class="g-recaptcha" data-sitekey="6LfcCr0eAAAAAN2P-3cJJC1StgxbUWvwELbMVjnp"></div>

        </div>

        

        

    </div>

    <div class="sf-contact-submit-btn">

        <button class="site-button" type="submit">Submit</button>

    </div>

</form>

</div>

                    <!--Contact Information End-->

                  </div>              

                </div>

        

              </div>

            </div>

              

            <!-- Contact Us-->

            <div class="section-full sf-contact-map-area">

                <div class="container">



                    <div class="sf-map-social-block text-center">

                        <h2>Trusted by thousands of people all over in Ahmedabad</h2>

                        <ul class="sf-con-social">

                            <li><a href="#" class="sf-fb"><img src="images/contact-us/facebook.png" alt="">Facebook</a></li>

                            <li><a href="#" class="sf-twitter"><img src="images/contact-us/twitter.png" alt="">Twitter</a></li>

                            <li><a href="#" class="sf-pinterest"><img src="images/contact-us/pinterest.png" alt="">Pinterest</a></li>

                        </ul>



                        <div class="sf-con-social-pic">

                            <span class="img-pos-1"><img src="images/contact-us/img1.png" alt=""></span>

                            <span class="img-pos-2"><img src="images/contact-us/img2.png" alt=""></span>

                            <span class="img-pos-3"><img src="images/contact-us/img3.png" alt=""></span>

                            <span class="img-pos-4"><img src="images/contact-us/r-img1.png" alt=""></span>

                            <span class="img-pos-5"><img src="images/contact-us/r-img2.png" alt=""></span>

                            <span class="img-pos-6"><img src="images/contact-us/r-img3.png" alt=""></span>

                        </div>

                    </div>



                </div>

                <div class="sf-map-wrap">

                    <div class="gmap-area">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14687.734738194878!2d72.5559631!3d23.026207!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1706942193080!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>

            </div>

                

        </div>

        <!-- Content END-->

        <!-- FOOTER START -->

        <?php
            include './themepart/footer.php';

        ?>

        <!-- FOOTER END -->



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


<!-- Mirrored from aonetheme.com/sf-html-demo/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Dec 2023 16:35:32 GMT -->
</html>

