<?php

    $insert = false;
    
    if(isset($_POST['name'])){

    $sever = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($sever, $username, $password);

    if(!$con){
        die("Connection to this database failed due to".mysqli_connect_error());
    }
    // echo "Success connected to DataBase";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO `contact`.`contact` (`name`, `email`, `phone`, `msg`, `dt`) VALUES ('$name', '$email', '$phone', '$msg', current_timestamp());";
    // echo $sql;

    if($con->query($sql)==true){
        // echo "Succesfully Inserted";
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}    
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>ContactUS-MPGC</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="header_to d_none">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6 col-sm-6">
                        <ul class="lan">
                           <li><i class="fa fa-globe" aria-hidden="true"></i> Language :</li>
                        </ul>
                        <form action="#" >
                           <div class="select-box">
                              <label for="select-box1" class="label select-box1"><span class="label-desc">English</span> </label>
                              <select id="select-box1" class="select">
                                 <option value="Choice 1">English</option>
                              </select>
                           </div>
                        </form>
                     </div>
                     <div class="col-md-6 col-sm-6 ">
                        <ul class="social_icon1">
                           <li> F0llow Us
                           </li>
                           <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header_midil">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-4 col-sm-4 d_none">
                        <ul class="conta_icon">
                           <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Call Us : +91 9198112472</a> </li>
                        </ul>
                     </div>
                     <div class="col-md-4 col-sm-4 " >
                        <a class="logo" href="#"><img src="images/logo.png" alt="#"/></a>
                     </div>
                     <div class="col-md-4 col-sm-4 d_none">
                        <ul class="conta_icon ">
                           <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> mahadevpgcollege@gmail.com</a> </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header_bo">
               <div class="container">
                  <div class="row">
                     <div class="col-md-9 col-sm-7">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item ">
                                    <a class="nav-link" href="index.php"> Home  </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="about.php">about</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="courses.php">Cources</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="faculty.php">Faculty </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="reviews.php">Reviews</a>
                                 </li>
                                 <li class="nav-item active">
                                    <a class="nav-link" href="contact.php"> contact us </a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class="col-md-3 col-sm-5 d_none">
                        <ul class="sign">
                           <a href="index.html"><img class="mpgclogo" src="images/mpgc_logo.png" alt="mpgclogo"></a> 
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
 
      <!-- contact  section -->
      <div id="contact" class="contact ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2><strong class="yellow">Contact us</strong><br>Request a call back</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <form id="post_form" class="contact_form" action="index.php" method="post">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contact_control" name="name" id="name" placeholder=" Name" type="text" name="Name">
                        </div>
                        <div class="col-md-12">
                           <input class="contact_control" name="email" id="email" placeholder="Email" type="email" name="Email">
                        </div>
                        <div class="col-md-12">
                           <input class="contact_control" name="phone" id="phone" placeholder="Phone Number " type="phone" name="Phone Number ">
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" name="msg" id="msg" placeholder="Message" >Message </textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Send</button>
                        </div>
                  </form>
                  </div>
               </div>
            </div>
         </div>
         <?php
            if($insert==true){
                echo "<br><p style='color:green; text-align:center;'>Thanks For Your Visit Our Executives Will Contact You Soon..</p>";
            }
        ?> 
      </div>
      <!-- end contact  section -->
      <!--  footer -->
   <footer >
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <a class="logo2" href="#"><img src="images/logo.png" alt="#"/></a>
               </div>
               <div class="col-lg-5 col-md-6 col-sm-6">
                  <h3>Contact Us</h3>
                  <ul class="location_icon">
                     <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> Bariyasanpur, Chiraigaon
                        <br> Varanasi 
                     </li>
                     <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>mahadevpgcollege@gmail.com</li>
                     <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a>+91 9198112472</li>
                  </ul>
                  <ul class="social_icon">
                     <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                     <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li> <a href="#">   <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                     <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-6">
                  <h3>Menus</h3>
                  <ul class="link_icon">
                     <li > <a href="index.php"> Home</a></li>
                     <li class="active">
                        <a href="about.php">
                           </i>About Us  
                     </li>
                     <li> <a href="courses.php"> </i>Courses</a></li>
                      <li> <a href="faculty.php"></i>Faculty</a></li>
                     <li> <a href="reviews.php"></i>Reviews</a></li>
                     <li> <a href="contact.php"></i>Contact us</a></li>
                  </ul>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <h3>Newsletter</h3>
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="news" placeholder="Your Email" type="type" name="Your Email"> 
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p>© 2022 All Rights Reserved. Mahadev PG College</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
