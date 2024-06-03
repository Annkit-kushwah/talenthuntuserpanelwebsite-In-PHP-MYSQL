<?php
session_start();
$connection = mysqli_connect("localhost","root","","talenthunt");



if(!isset($_GET['pid'])){
    header ("location:profile.php");
}
$id = $_GET['pid'];
$aq = mysqli_query($connection, "SELECT * FROM tbl_artist WHERE artist_id = $id");
$adata = mysqli_fetch_array($aq);

$iq = mysqli_query($connection,"SELECT * FROM tbl_photo where artist_id ='{$_GET['pid']}' ");
$photocount = mysqli_num_rows($iq);
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
	<div class="page-wraper">        <!-- HEADER START -->
    <?php
       require "./themepart/top-menu2.php";
       ?>

        <!-- HEADER END -->
    
        <!-- Content -->
        <div class="page-content m-t40">
            <!--Top Banner Section Start-->
            
            <!--Top Banner Section End-->

            <!--Nav Section Start-->
            
            <!--Nav Section End-->

            <div class="container">
                <!--About Provider-->           
                <div class="sf-provi-bio-box cleafix margin-b-50 sf-provi-fullBox">
                    <!--Left-->
                    <div class="sf-provi-bio-left">
                        <div class="sf-provi-bio-info">   

                            <div class="sf-provi-pic"><img src=upload/<?php echo $adata['profile_photo'];?> alt=""></div>
                            <div class="sf-provi-gallery">
                                <a class=""><?php echo $photocount; ?> Photos</a>
                                <!-- <a class="elem pic-long" href="images/profile/pic2.jpg"></a>
                                <a class="elem pic-long" href="images/profile/pic3.jpg"></a>
                                <a class="elem pic-long" href="images/profile/pic4.jpg"></a>
                                <a class="elem pic-long" href="images/profile/pic5.jpg"></a>
                                <a class="elem pic-long" href="images/profile/pic6.jpg"></a> -->
                            </div>
                            <!-- <div class="sf-ow-pro-rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star text-gray"></span>
                            </div> -->
                            
                        </div>

                    </div>
                    <!--Right-->
                    <div class="sf-provi-bio-right">    

                        <h3 class="sf-provi-title"><?php echo $adata['artist_name'];?></h3>
                        <!-- <div class="sf-provi-cat"><strong>Categories:</strong> Packers and Movers</div> -->
                        <div class="sf-provi-bio-text">

                            <p><?php echo $adata['about_me'];?></p>

                            
                            
                            <div class="sf-provi-btn">
                                <a href="booking-form.php?aid=<?php echo $_GET['pid']; ?>" class="site-button" >
						            <i class="fa fa-briefcase"></i>Book the Artist
                                </a>
                               
                            </div>

                        </div>
                        
                        <div class="sf-provi-social-row d-flex flex-wrap justify-content-between">
                        
                            <!-- <div class="sf-provi-social">
                                <ul class="share-social-bx">
                                  <li class="fb"><a href="javascript:;"> <i class="fa fa-facebook"></i> Share </a></li>
                                  <li class="tw"><a href="javascript:;"> <i class="fa fa-twitter"></i> Share </a></li>
                                  <li class="lin"><a href="javascript:;"> <i class="fa fa-linkedin"></i> Share </a></li>
                                 
                                  
                                </ul>
                            </div> -->

                            <!-- <div class="social-share-icon social-share-icon2">
                              <div class="social-share-cell">
                                  <strong>Explore Us On Social Media</strong>
                              </div>
                              <div class="social-share-cell">
                                <ul class="share-buttons">
                                  <li><a class="fb-share" href="https://www.facebook.com/" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a></li>
                                  <li><a class="twitter-share" href="https://twitter.com/" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a></li>
                                  <li><a class="linkedin-share" href="https://linkedin.com/" target="_blank" rel="nofollow"><i class="fa fa-linkedin"></i></a></li>
                                  <li><a class="pinterest-share" href="https://in.pinterest.com/" target="_blank" rel="nofollow"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                              </div>
                            </div> -->
                            
                        </div>

                    </div>
                </div>
                <br/><br/><br/>
                <!--About Provider End-->
                   <!--Video-->
                   <div id="aon-provider-video" class="sf-provi-vido-box margin-b-50 sf-provi-fullBox">
                    <h3 class="sf-provi-title">Photos</h3>
                    <div class="sf-divider-line"></div>
                    <div class="owl-carousel aon-video-carousel aon-owl-arrow">
                        <!-- COLUMNS 1 -->

                        <?php 
                    while($irow = mysqli_fetch_array($iq))
                                    {
                    ?>
                        <div class="item">
                            <div class="sf-video-box sf-videoBox-full">
                                <div class="sf-video-pic" style="background-image:url('upload/<?php echo $irow['photo_path'] ?>');"> </div>
                                <a class="sf-video-play-btn mfp-video" href="upload/<?php echo $irow['photo_path'] ?>"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <?php 
                                    }
                        ?>
                        <!-- COLUMNS 2 -->
                        
                        <!-- COLUMNS 3 -->
                        
                        <!-- COLUMNS 4 -->
                        
                    </div>
                </div>
              
                <?php 

if(isset($_POST['msg']))
{
    $message = $_POST['message'];
    $message_datetime = date('Y-m-d H:i:s');
    $uid = $_SESSION['uid'];
    $aid = $_GET['pid'];
    $q = mysqli_query($connection,"insert into tbl_message (artist_id,user_id,message_question,message_datetime) values('{$aid}','{$uid}','{$message}','{$message_datetime}')");
    if($q)
    {
        echo "<script>alert('Message Sent');</script>";
    }
}

?>
                <?php 

if(isset($_SESSION['uid'])){
                ?>
                <!--Request a Quote-->
                <div id="aon-provider-Req-quote" class="sf-provi-qoute-box cleafix m-b50 sf-provi-fullBox">
                    <h3 class="sf-provi-title">Quick Request</h3>
                    <div class="sf-divider-line"></div>                
                	<div class="sf-provi-qform">
                        <form  method="post" id="myform">
                            <div class="row">
                            
                            <div class="col-md-12">
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="message" rows="8" class="form-control" required></textarea>
                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group text-center qout-submit-btn">
                                <input type="submit" name='msg' value="Send information" class="site-button" >
                            </div>
                            </div>
                            </div>
                        </form>
                    </div>
                    
                    
                </div>
                <?php 
}
                ?>

             
                

             

                <!--Amenities & Features-->
                <!-- <div class="sf-provi-amqudo-box margin-b-50 sf-provi-fullBox">
                <div class="sf-custom-tabs sf-custom-new">
                  <ul class="nav nav-tabs nav-table-cell font-20">
                    <li><a data-toggle="tab" href="#tab-1111" class="active">Amenities & Features  </a></li>
                    <li><a data-toggle="tab" href="#tab-2222">Qualification</a></li>
                    <li><a data-toggle="tab" href="#tab-3333">Documents</a></li>  
                  </ul>
                  <div class="tab-content">
                    <div id="tab-1111" class="tab-pane active">
                      <div class="sf-languages-tab">
                        <ul class="sf-features-list sf-features-list-new clearfix">
                          <li><span class="features-icon"><img src="images/amenities/credit_card-20x20.png" alt=""></span> Accepts Credit Cards</li>
                          <li><span class="features-icon"><img src="images/amenities/coffee-1-20x20.png" alt=""></span> Coffee</li>
                          <li><span class="features-icon"><img src="images/amenities/coupons-20x20.png" alt=""></span> Coupons</li>
                          <li><span class="features-icon"><img src="images/amenities/car-20x20.png" alt=""></span> Parking street</li>
                          <li><span class="features-icon"><img src="images/amenities/wheelchair-20x20.png" alt=""></span> Wheelchair Accesible</li>
                          <li><span class="features-icon"><img src="images/amenities/wifi-20x20.png" alt=""></span> Wireless Internet</li>
                        </ul>

                      </div>
                    </div>
                    <div id="tab-2222" class="tab-pane ">
                      <div class="sf-documents-tab">
                        <div class="sf-qualification-acord" id="qualification-acord">
                          <div class="panel sf-panel">
                            <div class="acod-head acc-actives">
                              <h6 class="acod-title text-uppercase"> <a data-toggle="collapse" href="#qualification34" data-parent="#qualification-acord"> <span class="exper-author"> B.Tech</span> <span class="exper-slogan">Charles Andrew University</span> <span class="exper-date"><i class="fa fa-clock-o"></i> 2012 -  2016</span> </a></h6>
                            </div>
                            <div id="qualification34" class="acod-body collapse in">
                              <div class="acod-content p-tb15">I am an engineer and have B.Tech degree.</div>
                            </div>
                          </div>
                        </div>                                        
                      </div>
                    </div>
                    <div id="tab-3333" class="tab-pane ">
                      <div class="sf-documents-tab">
                        <div class="table-responsive">
                          <table class="table borderless margin-0">
                            <tbody>
                              <tr>
                                <td><div class="panel panel-default">
                                    <div class="panel-heading"> <a download="Microsoft-Office-Excel-Worksheet-46.xlsx" href="contact-us.html"> <strong class="price-bx"><i class="fa fa-download"></i></strong> <span class="service-title">Microsoft-Office-Excel-Worksheet-46.xlsx</span> </a></div>
                                  </div></td>
                                <td><div class="panel panel-default">
                                    <div class="panel-heading"> <a download="Microsoft-Office-PowerPoint-Presentation-28.pptx" href="contact-us.html"> <strong class="price-bx"><i class="fa fa-download"></i></strong> <span class="service-title">Microsoft-Office-PowerPoint-Presentation-28.pptx</span> </a></div>
                                  </div></td>
                              </tr>
                              <tr>
                                <td><div class="panel panel-default">
                                    <div class="panel-heading"> <a download="Microsoft-Office-Word-Document-26.docx" href="contact-us.html"> <strong class="price-bx"><i class="fa fa-download"></i></strong> <span class="service-title">Microsoft-Office-Word-Document-26.docx</span> </a></div>
                                  </div></td>
                                <td><div class="panel panel-default">
                                    <div class="panel-heading"> <a download="PDF-Document-28.pdf" href="contact-us.html"> <strong class="price-bx"><i class="fa fa-download"></i></strong> <span class="service-title">PDF-Document-28.pdf</span> </a></div>
                                  </div></td>
                              </tr>
                              <tr>
                                <td><div class="panel panel-default">
                                    <div class="panel-heading"> <a download="Text-Document-26.txt" href="contact-us.html"> <strong class="price-bx"><i class="fa fa-download"></i></strong> <span class="service-title">Text-Document-26.txt</span> </a></div>
                                  </div></td>
                                <td><div class="panel panel-default">
                                    <div class="panel-heading"> <a download="Microsoft-Office-PowerPoint-Presentation-29.pptx" href="contact-us.html"> <strong class="price-bx"><i class="fa fa-download"></i></strong> <span class="service-title">Microsoft-Office-PowerPoint-Presentation-29.pptx</span> </a></div>
                                  </div></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>                                        
                      </div>
                    </div>
                  </div>
                </div>
                </div> -->

            

          
                <!--Local Customer Reviews-->
                <div id="aon-provider-review" class="sf-provi-articles-box margin-b-50 sf-provi-fullBox">
                    <h3 class="sf-provi-title">Local Customer Reviews</h3>
                    <div class="sf-divider-line"></div>
    
                    
                    <div class="row d-flex flex-wrap a-b-none">


                    <?php 
                    $iq = mysqli_query($connection,"SELECT * FROM tbl_feedback where artist_id ='{$_GET['pid']}'");
                    while($irow = mysqli_fetch_array($iq))
                                    {

                                        $uq = mysqli_query($connection,"select * from tbl_user where user_id = '{$irow['user_id']}'");
                                        $udata = mysqli_fetch_array($uq);
                    ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="sf-review-box sf-shadow-box">
                              <div class="sf-review-head clearfix">
                                    <div class="sf-review-pic"><img src="images/pro-pic/pic1.jpg" alt=""/></div>
                                    <div class="sf-review-info">
                                      <h5 class="sf-review-name"><?php echo $udata['user_name']; ?></h5>
                                      <div class="sf-review-feedback"><?php echo $irow['feedback_date']; ?></div>
                                    </div>
                                  <div class="sf-review-date"></div>
                              </div>
                               
    
                              <div class="sf-review-footer sf-shadow-box">
                                <span class="sf-review-write">
                                    <?php echo $irow['feedback_details']; ?>.</span>
                                <!-- <span class="sf-review-red-less">Read More</span> -->
                              </div>
    
    
                            </div>
                        </div>
                        <?php 
                                    }
                        ?>
                       




                    </div>

                </div>

                <?php 

if(isset($_POST['feedback']))
{
    $message = $_POST['message'];
    $message_datetime = date('Y-m-d H:i:s');
    $uid = $_SESSION['uid'];
    $aid = $_GET['pid'];
    $q = mysqli_query($connection,"insert into tbl_feedback (artist_id,user_id,feedback_details,feedback_date) values('{$aid}','{$uid}','{$message}','{$message_datetime}')");
    if($q)
    {
        echo "<script>alert('Feedback Sent');</script>";
    }
}

?>
               
                <?php 

if(isset($_SESSION['uid'])){
                ?>
                <!--Request a Quote-->
                <div id="aon-provider-Req-quote" class="sf-provi-qoute-box cleafix m-b50 sf-provi-fullBox">
                    <h3 class="sf-provi-title">Share Feedback</h3>
                    <div class="sf-divider-line"></div>                
                	<div class="sf-provi-qform">
                        <form  method="post" id="myform" >
                            <div class="row">
                            
                            <div class="col-md-12">
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="message" rows="8" class="form-control" required></textarea>
                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group text-center qout-submit-btn">
                                <input type="submit" name="feedback" value="Send information" class="site-button" >
                            </div>
                            </div>
                            </div>
                        </form>
                    </div>
                    
                    
                </div>
                <?php 
}
                ?>

            </div>

            
        </div>
        <!-- Content END-->        <!-- FOOTER START -->
        <footer class="site-footer footer-light" >
            
            <!-- FOOTER NEWSLETTER START -->
            <!-- <div class="footer-top-newsletter">
                <div class="container">
                    <div class="sf-news-letter">
                        <span>Subscribe Our Newsletter</span>
                        <form>
                            <div class="form-group sf-news-l-form">
                                <input type="text" class="form-control" placeholder="Enter Your Email">
                                <button type="submit" class="sf-sb-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
            <!-- FOOTER BLOCKES START -->  
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- Footer col 1--> 
                        <div class="col-lg-3 col-md-6 col-sm-6  m-b30">
                            <div class="sf-site-link sf-widget-link">
                                <h4 class="sf-f-title">Site Links</h4>
                                <ul>
                                    <li><a href="blog-grid.html">Blog</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="job-grid.html">Jobs</a></li>
                                    <li><a href="all-categories.html">Categories</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer col 2-->
                        <div class="col-lg-3 col-md-6 col-sm-6  m-b30">
                            <div class="sf-site-link sf-widget-cities">
                                <h4 class="sf-f-title">Popular Cities</h4>
                                <ul>
                                    <li><a href="all-categories.html">Ballston Lake</a></li>
                                    <li><a href="all-categories.html">Batumi</a></li>
                                    <li><a href="all-categories.html">Brooklyn</a></li>
                                    <li><a href="all-categories.html">Cambridge</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer col 1-->
                        <div class="col-lg-3 col-md-6 col-sm-6  m-b30">
                            <div class="sf-site-link sf-widget-categories">
                                <h4 class="sf-f-title">Categories</h4>
                                <ul>
                                    <li><a href="categories-detail.html">Car Service</a></li>
                                    <li><a href="categories-detail.html">House Cleaning</a></li>
                                    <li><a href="categories-detail.html">Transport</a></li>
                                    <li><a href="categories-detail.html">Yoga Classes</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer col 1-->
                        <div class="col-lg-3 col-md-6 col-sm-6  m-b30">
                            <div class="sf-site-link sf-widget-contact">
                                <h4 class="sf-f-title">Contact Info</h4>
                                <ul>
                                    <li>India</li>
                                    <li>+41 232 525 5257</li>
                                    <li>+41 856 525 5369</li>
                                    <li>hello@Servicefinder.com</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="sf-footer-bottom-section">
                        <div class="sf-f-logo"><a href="javascript:void(0);"><img src="images/logo-dark.png" alt=""></a></div>
                    	<div class="sf-f-copyright">
                        	<span>Copyright 2022 | Aone Theme. All Rights Reserved</span>
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
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
        
        <!-- Booking Summery box -->
        <div class="sf-summery-box">
            
            <button class="sf-suumery-close">
                <i class="fa fa-close"></i>
            </button>
            
            <div class="sf-summery-total">
                <span class="sf-sum-cel-one">Total Amount</span>
                <span class="sf-sum-cel-four">$185.25</span>
            </div>
            
            <div class="sf-summery-inr">
                <ul>
                    <li>
                        <div class="sf-sum-cel-one">
                            <strong>Home Cleaning </strong>
                            <span>01:30 to 02:30</span>
                            <span>12 MAR  2022</span>
                        </div>

                        <div class="sf-sum-cel-four">$18.25</div>
                    </li>
                                            <li>
                        <div class="sf-sum-cel-one">
                            <strong>Home Cleaning </strong>
                            <span>01:30 to 02:30</span>
                            <span>12 MAR  2022</span>
                        </div>

                        <div class="sf-sum-cel-four">$18.25</div>
                    </li>
                                            <li>
                        <div class="sf-sum-cel-one">
                            <strong>Home Cleaning </strong>
                            <span>01:30 to 02:30</span>
                            <span>12 MAR  2022</span>
                        </div>

                        <div class="sf-sum-cel-four">$18.25</div>
                    </li>
                                            <li>
                        <div class="sf-sum-cel-one">
                            <strong>Home Cleaning </strong>
                            <span>01:30 to 02:30</span>
                            <span>12 MAR  2022</span>
                        </div>

                        <div class="sf-sum-cel-four">$18.25</div>
                    </li>
                                            <li>
                        <div class="sf-sum-cel-one">
                            <strong>Home Cleaning </strong>
                            <span>01:30 to 02:30</span>
                            <span>12 MAR  2022</span>
                        </div>

                        <div class="sf-sum-cel-four">$18.25</div>
                    </li>
                                            <li>
                        <div class="sf-sum-cel-one">
                            <strong>Home Cleaning </strong>
                            <span>01:30 to 02:30</span>
                            <span>12 MAR  2022</span>
                        </div>

                        <div class="sf-sum-cel-four">$18.25</div>
                    </li>
                                            <li>
                        <div class="sf-sum-cel-one">
                            <strong>Home Cleaning </strong>
                            <span>01:30 to 02:30</span>
                            <span>12 MAR  2022</span>
                        </div>

                        <div class="sf-sum-cel-four">$18.25</div>
                    </li>
                                            <li>
                        <div class="sf-sum-cel-one">
                            <strong>Home Cleaning </strong>
                            <span>01:30 to 02:30</span>
                            <span>12 MAR  2022</span>
                        </div>

                        <div class="sf-sum-cel-four">$18.25</div>
                    </li>                   

                </ul>
            </div>
        </div>

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


<!-- Mirrored from aonetheme.com/sf-html-demo/profile-full.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Dec 2023 16:35:21 GMT -->
</html>
