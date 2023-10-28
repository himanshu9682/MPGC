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
   <title>Mahadev PG College</title>
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
                        <li><i class="fa fa-globe" aria-hidden="true"></i> Language : </li>
                     </ul>
                     <form action="#">
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
                  <div class="col-md-4 col-sm-4 ">
                     <a class="logo" href="#"><img src="images/logo.png" alt="#" /></a>
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
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.php"> Home </a>
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
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.php"> contact us </a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-md-3 col-sm-5 d_none">
                     <ul class="sign">
                        <a href="index.php"><img class="mpgclogo" src="images/mpgc_logo.png" alt="mpgclogo"></a> 
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end header inner -->
   <!-- end header -->
   <!-- banner -->
   <section class="banner_main">
      <div class="container">
         <div class="row">
            <div class="col-md-7 col-lg-7">
               <div class="text-bg">
                  <h1>Education For <br>Better Tomorrow..</h1>
                  <span>Estd: 2002</span>
                  <p>Bariyasanpur, chiraigaon, Varanasi, Uttar Pradesh, India</p>
                  <a href="#">About us</a>
               </div>
            </div>
            <div class="col-md-5 col-lg-5">
               <div class="ban_img">
                  <figure><img src="images/ba_ing.png" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end banner -->
   <!-- about section -->
   <div id="about" class="about">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12 col-lg-7">
               <div class="about_box">
                  <div class="titlepage">
                     <h2><strong class="yellow">About US</strong><br> WE CAN HELP To Grow YOUR FUTURE.</h2>
                  </div>
                  <h3>Mahadev PG College had a Humble beginning in 2002</h3>
                  <span>Today Has Got more than 6000 students<br> and More than 150 staff Member.</span>
                  <p>The College at present is running courses both at tha graduate[B.A, B.Sc, B.Com, B.Ed, B.C.A, B.F.A.] and Post Graduate levels[M.A, M.Sc and M.Com.] in relevent subjects.</p>
                  <span class="try">Founder- स्वर्गीय राम अवतार सिंह</span>
               </div>
            </div>
            <div class="col-md-12 col-lg-5">
               <div class="about_img">
                  <figure><img src="images/about_img2.png" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section -->
   <!-- courses section -->
   <div id="service" class="service">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <div class="titlepage">
                  <h2><strong class="yellow">Courses</strong><br> WE PROVIDE..</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/courses_icon1.png" alt="#" />
                  <h3>Bachlor of Art's [BA]</h3>
                  <p>Hindi, Sanskrit, English, Anc.history, political Science, Sociology, and so on..</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/courses_icon2.png" alt="#" />
                  <h3>Bachlor Of Science [B.Sc]</h3>
                  <p>Maths, Physics, Chemistry, Botany, Computer Science, Bio-technology, and so on..</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/courses_icon3.png" alt="#" />
                  <h3>B.Com</h3>
                  <p>Bachelor Of Commerce</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/courses_icon4.png" alt="#" />
                  <h3>B.C.A</h3>
                  <p>Bachlor Of Computer Application</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/courses_icon5.png" alt="#" />
                  <h3>Master Of Art's [M.A]</h3>
                  <p>Hindi, English, political Science, Sociology, Sanskrit and so on..  </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/courses_icon6.png" alt="#" />
                  <h3>Master Of Science</h3>
                  <p>Physics, Chemistry, Maths, Botany and so on..</p>
               </div>
            </div>
            <div class="col-md-12">
               <a class="read_more" href="courses.php">Read More</a>
            </div>
         </div>
      </div>
   </div>
   </div>
   <!-- courses section -->
   <!-- portfolio -->
   <div class="portfolio">
      <div class="container">
         <div class="row">
            <div class="col-md-12 ">
               <div class="titlepage">
                  <h2><strong class="yellow">PORTFOLIO</strong><br> ---Our Campus---</h2>
                  <span>Images</span>
                  <p>Educating the mind without educating the heart is no aducation at all. "We belive our college that is named after Lord MAHADEV embraces, protects and prepares its Students to aspire for bigger goals.</p>
               </div>
            </div>
         </div>
      </div>
      <div id="myCarousel" class="carousel slide portfolio_Carousel " data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <div class="carousel-caption ">
                     <div class="row">
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf1.png" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf2.png" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf3.png" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf4.png" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-12">
                           <a class="read_more" href="#"></a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf1.png" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf2.png" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf3.png" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf4.png" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <a class="read_more" href="#"></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf1.png" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf2.png" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf3.png" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf4.png" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <a class="read_more" href="#"></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
         </a>
         <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
         </a>
      </div>
   </div>
   <!-- end portfolio section -->
   <!-- business  section -->
   <div class="business">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <div class="titlepage">
                  <h2><strong class="yellow">Facilities</strong><br>We Provide</h2>
                  <p>To Our Students. </p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/staff_icon1.png" alt="#" /></i>
                  <h3>150+</h3>
                  <p>Staffs </p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/student_icon1.png" alt="#" /></i>
                  <h3>6000+</h3>
                  <p>Students</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/wifi_icon1.png" alt="#" /></i>
                  <h3>Wi-Fi</h3>
                  <p>Campus</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/bus_icon1.png" alt="#" /></i>
                  <h3>Bus</h3>
                  <p>Service </p>
               </div>
            </div>
            <div class="col-md-12">
               <a class="read_more" href="#">Read More</a>
            </div>
         </div>
      </div>
   </div>
   <!-- end business  section -->
   <!-- team  section -->
   <div id="team" class="team">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2><strong class="yellow">Our Faculty</strong><br>We Have a Professional Team of Professors & Lecturers.</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div id="team" class="carousel slide team_Carousel " data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#team" data-slide-to="0" class="active"></li>
                     <li data-target="#team" data-slide-to="1"></li>
                     <li data-target="#team" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption ">
                              <div class="row">
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <a href="team.html"><img src="images/team1.jpg" alt="#" /></a></a>
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <a href="team.html"></a><img src="images/team2.jpg" alt="#" /></a>
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6 d_none1">
                                    <div id="ho_bg" class="team_img ">
                                       <a href="team.html"></a><img src="images/team3.jpg" alt="#" /></a>
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-4 col-sm-6 d_none1">
                                    <div id="ho_bg" class="team_img ">
                                       <a href="team.html"><img src="images/team4.jpg" alt="#" /></a>
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <a href="team.html"></a><img src="images/team5.jpg" alt="#" /></a>
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <a href="team.html"></a><img src="images/team6.jpg" alt="#" /></a>
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <a href="team.html"></a><img src="images/team7.jpg" alt="#" /></a>
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6 d_none1">
                                    <div id="ho_bg" class="team_img ">
                                       <a href="team.html"></a><img src="images/team8.jpg" alt="#" /></a>
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <a href="team.html"></a><img src="images/team9.jpg" alt="#" /></a>
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#team" role="button" data-slide="prev">
                     <i class="fa fa-chevron-left" aria-hidden="true"></i>
                  </a>
                  <a class="carousel-control-next" href="#team" role="button" data-slide="next">
                     <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end team  section -->
   <!-- testimonial -->
   <div id="client" class="testimonial">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2><strong class="yellow">testimonial</strong><br>What Peoples say's about us. </h2>
               </div>
            </div>
         </div>
      </div>
      <div id="testimo" class="carousel slide testimonial_Carousel " data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#testimo" data-slide-to="0" class="active"></li>
            <li data-target="#testimo" data-slide-to="1"></li>
            <li data-target="#testimo" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <div class="carousel-caption ">
                     <div class="row">
                        <div class="col-md-6 offset-md-3">
                           <div class="test_box">
                              <p>Good environment for reading & learning. Parking is available for 2 Wheeler's. 
                                 Infrastructure is good. Teaching quality is good.</p>
                              <i><img src="images/cos.png" alt="#" /></i> <span>Pradumn Kumar Maurya</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-6 offset-md-3">
                           <div class="test_box">
                              <p>A pleasant college. Cool Environment. 
                                 Teachers are good. Nice Environment. 
                                 Good Facilities.</p>
                              <i><img src="images/cos.png" alt="#" /></i> <span>Joseph Bhardwaj</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-6 offset-md-3">
                           <div class="test_box">
                              <p>This College is situated near Bariyasanpur, Chiraigawn Block, Varanasi. 
                                 College is fully hygiene & best infrastructure with good environment.
                                 Campus is so good. Teaching is also good with best experienced faculties. 
                                 You complete here your P. G.</p>
                              <i><img src="images/cos.png" alt="#" /></i> <span>Umesh Kumar Patel</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <br>
         <br>
         <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
         </a>
         <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
         </a>
      </div>
   </div>
   <!-- end testimonial -->
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



