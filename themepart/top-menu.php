<?php

$connection = mysqli_connect("localhost","root","","talenthunt");


?>
<header class="site-header header-style-1 mobile-sider-drawer-menu header-full-width">
            <div class="sticky-header main-bar-wraper  navbar-expand-lg bg-primary">
                <div class="main-bar">  
                                    
                    <div class="container clearfix "> 
                        <!--Logo section start-->
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="index.php">
                                    <img src="images/thln1.png" alt="" class="site-logo-has">
                                    <img src="images/thdn1.png" alt="" class="site-logo-sticky">                
                                </a>
                            </div>
                        </div>  
                        <!--Logo section End-->

                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button> 

                        <!-- MAIN Vav -->
                        <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-start">
                            
                            <ul class=" nav navbar-nav">
                                <li class="has-child "><a href="index.php">Home</a>
                                    <ul class="sub-menu">
                                        <!-- <li><a href="index.html">Home</a></li> -->
                                        <!-- <li><a href="index-2.html">Home 2</a></li> -->
                                    </ul>
                                </li>

                                <li class="has-child">
                                    <a href="about-us.php">About us</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="about-us.php">About us</a></li>
                                        <li><a href="javascript:;">Reviews</a>
                                        </li>
          
                                        <li><a href="javascript:;">Search</a>
                                            <ul class="sub-menu">
                                                <li><a href="search-list.html">Search List</a></li>
                                                <li><a href="new-search-list-2.html">Search List 2</a></li>
                                                <li><a href="search-list-map.html">Search List Map</a></li>
                                                <li><a href="search-list-map2.html">Search List Map 2</a></li>
                                                <li><a href="search-grid.html">Search-grid</a></li>
                                                <li><a href="search-grids-map.html">Search-grid-map</a></li>
                                                <li><a href="search-grid-map2.html">Search-grid-map2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="error-404.html">Error 404</a></li>
                                    </ul>                                 -->
                                </li>

                                <!-- <li class="has-child"><a href="profile.php">Profile</a>
                                </li> -->
        
                                <li><a href="javascript:;">Categories</a>
                                            <ul class="sub-menu">
                                            <?php

$cq = mysqli_query($connection , "SELECT * FROM tbl_type");
while ($cdata = mysqli_fetch_array($cq)){

     echo  "<li><a href='profile.php?typeid={$cdata['type_id']}'>{$cdata['type_name']}</a></li>";
}

?>
                                            </ul>
                                        </li>
                                        
                                <li><a href="profile.php">Profile</a></li>
                                <li><a href="contact-us.php">Contact</a></li>
                                <!-- <li><a href="login.php">Log in</a></li>  
                                <li><a href="sign-in.php">Sign in</a></li>   -->
  
                                <li><a href="javascript:;">My Account</a>
                                            <ul class="sub-menu">
                                            <li><a href="change-password.php">Change Password</a></li>
                                                
                                                <li><a href="view-booking.php">View Booking</a></li>
                                                <li><a href="view-feedback.php">View Feedback</a></li>
                                                <li><a href="view-inquery.php">View Inquery</a></li>
                                                <li><a href="logout.php">Logout</a></li>
                                            </ul>
                                        </li>  
                        
                            </ul>

                        </div>
                        
                        <!-- Header Right Section-->
                        <div class="extra-nav header-2-nav">
                            <div class="extra-cell">
                                <!--Login-->
                                <a href="login.php" class="site-button aon-btn-signup m-l20">
                                    <i class="fa fa-user"></i> Login
                                </a>
                                <!--Sign up-->
                                <a href="sign-in.php" class="site-button aon-btn-signup m-l20">
                                    <i class="fa fa-user"></i> Sign In
                                </a>
                            </div>
                                
                            </div>     
                
                </div>
            </div>
        </header>
