<?php
session_start();
  require 'admin/class/at-class.php';
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  if($_POST){
    $email_id = $_POST['email_id'];
    $q = mysqli_query($connection,"select * from tbl_user where email_id  = '{$email_id}'");
    $count = mysqli_num_rows($q); 
    if($count == 1)
    {
      $data = mysqli_fetch_array($q);
      echo $data['user_password'];
      $msg = "hello <br/>your password is " . $data['user_password'];
      // Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = ' talenthunt200442@gmail.com';                     //SMTP username
    $mail->Password   = 'tsjofwwgkscbkakj';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom(' talenthunt200442@gmail.com', 'Mailer');
    $mail->addAddress($email_id, 'Joe User');     //Add a recipient
   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'forgot password';
    $mail->Body    = $msg;
    $mail->AltBody = $msg;

    $mail->send();
    echo "<script>alert('password sent');</script>";
    // header("Location:login.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    }
    else{
      echo"<script>alert('email not found');</script>";
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

        <div class="container m-t50">
            <h1>User Forgot password</h1>
        <div id="Upcoming" class="tab-pane active m-t60">
                            <div class="sf-tabs-content">
                                <form class="aon-login-form" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box"> 
                                                    <input class="form-control sf-form-control" name="email_id" type="text" placeholder="Enter Email">
                                                    <i class="aon-input-icon fa fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <button type="submit" class="site-button w-100">Request For  Password <i class="feather-arrow-right"></i> </button>
                                        </div>                                          
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>

    
</body>
</html>