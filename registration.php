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
    <title>Newlife</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="css/contact.css">

</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <nav class="destop_header navbar navbar-expand-lg navbar-light bg-light">
            <!-- <div class="logo"></div> -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doctor.html">Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="logo_main" href="index.html"><img src="images/logo.png"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="depatments.html">Depatments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="mobile_header navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doctor.html">Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="depatments.html">Depatments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- header section end -->
    <?php
    include 'registrations.php';
    ?>

    <!-- footer section start -->
    <!-- info section -->
    <div class="info_section layout_padding">
        <div class="container ">
            <div class="contactMethod">
                <div class="method">
                    <i class="fa-solid fa-location-dot contactIcon"></i>
                    <article class="text">
                        <h1 class="sub-heading2">Location</h1>
                        <p class="para2">242, Browns Road, Jaffna</p>
                    </article>
                </div>

                <div class="method">
                    <i class="fa-solid fa-envelope contactIcon"></i>
                    <article class="text">
                        <h1 class="sub-heading2">Email</h1>
                        <p class="para2"> surabeclinic@gmail.com</p>
                    </article>
                </div>

                <div class="method">
                    <i class="fa-solid fa-phone contactIcon"></i>
                    <article class="text">
                        <h1 class="sub-heading2">Phone</h1>
                        <p class="para2">0766428906, 0707092891, 0212222507</p>
                    </article>
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center align-items-lg-baseline">
                <div class="social-box">
                    <a href="">
                        <img src="images/fb-icon.png" alt="" />
                    </a>

                    <a href="">
                        <img src="images/twitter-icon.png" alt="" />
                    </a>
                    <a href="">
                        <img src="images/linkedin-icon.png" alt="" />
                    </a>
                    <a href="">
                        <img src="images/instagram-icon.png" alt="" />
                    </a>
                </div>
                <div class="form_container mt-5">
                    <form action="">
                        <label for="subscribeMail">
                            Surabe Clinic
                        </label>
                        <input type="email" placeholder="Enter Your email" id="subscribeMail" />
                        <button type="submit">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end info section -->
    <!-- footer section end -->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>