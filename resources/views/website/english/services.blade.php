<!DOCTYPE html>
<html lang="zxx">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="assets/fonts/flaticon.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Popup CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">

        <title>Services</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>
    <body>
        <!-- Preloader -->
        <div class="loader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="loading-wrapper">
                        <div class="loading"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Start Navbar -->
        <div class="navbar-area sticky-top">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo-two.png" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav two">
                <div class="container-fluid ">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo.png" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="/" class="nav-link ">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('about')}}" class="nav-link ">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('services')}}" class="nav-link active">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('contact')}}" class="nav-link  ">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('pricing')}}" class="nav-link ">Pricing </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/" class="nav-link dropdown-toggle">English <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Kurdish</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">English</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="side-nav">
                                <ul>
                                    <li>
                                        <div class="nav-srh">
                                            <form action="{{route('services')}}">
                                            <div class="search-toggle">
                                                <button type="submit" class="search-icon icon-search"><i class='bx bx-user'></i></button>
                                                <button class="search-icon icon-close"><i class='bx bx-user'></i></button>
                                            </div>
                                        </form>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="call">
                                            <i class='bx bxs-phone-call'></i>
                                            <span>Call Now</span>
                                            <a href="tel:+15143125678">+1 (514) 312-5678</a>
                                        </div>
                                    </li>
                                    <li>
                                        <button type="button" class="btn modal-btn" data-bs-toggle="modal" data-bs-target="#myModalRight">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar -->

        <!-- Sidebar Modal -->
        <div id="myModalRight" class="modal fade modal-right" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <img src="assets/img/logo.png" alt="Logo">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                        <div class="contact-area">
                            <h2>Contact Us</h2>
                            <ul>
                                <li>
                                    <i class='flaticon-placeholder'></i>
                                    <span>6890 Blvd, The Bronx, NY 1058 New York, USA</span>
                                </li>
                                <li>
                                    <i class='flaticon-email'></i>
                                    <span>Mail: <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#b3dbd6dfdfdcf3c7c1d2ddcb9dd0dcde"><span class="__cf_email__" data-cfemail="573f323b3b3817232536392f7934383a">[email&#160;protected]</span></a></span>
                                    <span>Gmail: <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#89fdfbe8e7f1c9eee4e8e0e5a7eae6e4"><span class="__cf_email__" data-cfemail="0a7e786b64724a6d676b636624696567">[email&#160;protected]</span></a></span>
                                </li>
                                <li>
                                    <i class='flaticon-call'></i>
                                    <span>Phone: <a href="tel:+15143125678">+1 (514) 312-5678</a></span>
                                    <span>Phone: <a href="tel:+15143126688">+1 (514) 312-6688</a></span>
                                </li>
                            </ul>
                        </div>
                        <div class="image-area">
                            <h2>Gallery</h2>
                            <div class="row popup-gallery">
                                <div class="col-6 col-lg-4">
                                    <a href="assets/img/gallery1.jpg">
                                        <img src="assets/img/gallery1.jpg" alt="Gallery">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <a href="assets/img/gallery2.jpg">
                                        <img src="assets/img/gallery2.jpg" alt="Gallery">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <a href="assets/img/gallery3.jpg">
                                        <img src="assets/img/gallery3.jpg" alt="Gallery">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <a href="assets/img/gallery4.jpg">
                                        <img src="assets/img/gallery4.jpg" alt="Gallery">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <a href="assets/img/gallery5.jpg">
                                        <img src="assets/img/gallery5.jpg" alt="Gallery">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <a href="assets/img/gallery6.jpg">
                                        <img src="assets/img/gallery6.jpg" alt="Gallery">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="social-area">
                            <h2>Follow Us</h2>
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook' ></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter' ></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-linkedin' ></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-instagram' ></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sidebar Modal -->

        <!-- Page Title -->
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="title-content">
                            <h2>Services</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <span>/</span>
                                </li>
                                <li>Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Feature -->
        <div class="feature-area two three pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-item">
                            <i class="flaticon-truck-1"></i>
                            <h3>Modern equipment</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-item">
                            <i class="flaticon-insight"></i>
                            <h3>Strong customer focus</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="feature-item">
                            <i class="flaticon-delivery-truck"></i>
                            <h3>On time delivery</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Feature -->

        <!-- Work -->
        <section class="work-area three pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="work-skill">
                            <div class="section-title">
                                <span class="sub-title">Our Skills</span>
                                <h2>19 years of experience</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                            </div>
                            <div class="skill-wrap">
                                <div class="skill">
                                    <h3>Sea Freight</h3>
                                    <div class="skill-bar skill1 animate__slideInLeft animate__animated">
                                        <span class="skill-count1">85%</span>
                                    </div>
                                </div>
                                <div class="skill">
                                    <h3>Road Freight</h3>
                                    <div class="skill-bar skill2 animate__slideInLeft animate__animated">
                                        <span class="skill-count2">95%</span>
                                    </div>
                                </div>
                                <div class="skill">
                                    <h3>Air Freight</h3>
                                    <div class="skill-bar skill3 animate__slideInLeft animate__animated">
                                        <span class="skill-count3">80%</span>
                                    </div>
                                </div>
                                <div class="skill">
                                    <h3>Communication</h3>
                                    <div class="skill-bar skill4 animate__slideInLeft animate__animated">
                                        <span class="skill-count4">100%</span>
                                    </div>
                                </div>
                                <div class="skill">
                                    <h3>Leadership</h3>
                                    <div class="skill-bar skill5 animate__slideInLeft animate__animated">
                                        <span class="skill-count5">85%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="work-img">
                            <img src="assets/img/work-main.jpg" alt="Work">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Work -->

        <!-- Pricing -->
        <section class="pricing-area pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Pricing Plans</span>
                    <h2>Choose your perfect plan</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="pricing-item">
                            <div class="pricing-top">
                                <p>Basic Plan</p>
                                <h3>39 <span>$</span></h3>
                                <span class="month">Per Month</span>
                            </div>
                            <div class="pricing-bottom">
                                <ul>
                                    <li>Plan Sketching</li>
                                    <li>12-month Fixed Price</li>
                                    <li>Marketing Strategy</li>
                                    <li><del>Webmail Access</del></li>
                                    <li><del>Outstanding Support</del></li>
                                    <li><del>24/7 Customer Help Desk</del></li>
                                </ul>
                                <a class="cmn-btn" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="pricing-item">
                            <div class="pricing-top">
                                <p>Ultra Plan</p>
                                <h3>59 <span>$</span></h3>
                                <span class="month">Per Month</span>
                            </div>
                            <div class="pricing-bottom">
                                <ul>
                                    <li>Plan Sketching</li>
                                    <li>12-month Fixed Price</li>
                                    <li>Marketing Strategy</li>
                                    <li>Webmail Access</li>
                                    <li><del>Outstanding Support</del></li>
                                    <li><del>24/7 Customer Help Desk</del></li>
                                </ul>
                                <a class="cmn-btn" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="pricing-item">
                            <div class="pricing-top">
                                <p>Enterprise Plan</p>
                                <h3>99 <span>$</span></h3>
                                <span class="month">Per Month</span>
                            </div>
                            <div class="pricing-bottom">
                                <ul>
                                    <li>Plan Sketching</li>
                                    <li>12-month Fixed Price</li>
                                    <li>Marketing Strategy</li>
                                    <li>Webmail Access</li>
                                    <li>Outstanding Support</li>
                                    <li>24/7 Customer Help Desk</li>
                                </ul>
                                <a class="cmn-btn" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Pricing -->

 <!-- Footer -->
        <footer class="pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="assets/img/logo-two.png" alt="Logo">
                                </a>
                                <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit</p>
                                <ul>
                                    <li>
                                        <i class='bx bx-location-plus'></i>
                                        <span>Empire Tower, Erbil , IRAQ</span>
                                    </li>
                                    <li>
                                        <i class='bx bx-mail-send'></i>
                                        <a href=""><span class="" data-cfemail="">info@gzcompany.com</span></a>
                                    </li>
                                    <li>
                                        <i class='bx bx-phone-call'></i>
                                        <a href="tel:+15143125678">44444444</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <div class="footer-service">
                                <h3>Our services</h3>
                                <ul>
                                    <li>
                                        <a href="service-details.html" target="_blank">Road transport services</a>
                                    </li>
                                    <li>
                                        <a href="service-details.html" target="_blank">Sea freight services</a>
                                    </li>
                                    <li>
                                        <a href="service-details.html" target="_blank">Rail transport services</a>
                                    </li>
                                    <li>
                                        <a href="service-details.html" target="_blank">Warehousing solutions</a>
                                    </li>
                                    <li>
                                        <a href="service-details.html" target="_blank">International delivery</a>
                                    </li>
                                    <li>
                                        <a href="service-details.html" target="_blank">Packing & Shipping Supplies</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <div class="footer-post">
                                <h3>Recent posts</h3>
                                <ul>
                                    <li>
                                        <img src="assets/img/home-one/post1.jpg" alt="Post">
                                        <a href="blog-details.html" target="_blank">Logistics Solutions</a>
                                        <span>28 July, 2020</span>
                                    </li>
                                    <li>
                                        <img src="assets/img/home-one/post2.jpg" alt="Post">
                                        <a href="blog-details.html" target="_blank">Manage logistics operations</a>
                                        <span>29 July, 2020</span>
                                    </li>
                                    <li>
                                        <img src="assets/img/home-one/post3.jpg" alt="Post">
                                        <a href="blog-details.html" target="_blank">Supply chain solutions</a>
                                        <span>30 July, 2020</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <div class="footer-touch">
                                <h3>Get in touch</h3>
                                <p>Get Business news, tip and solutions to your problems from our </p>
                                <form class="newsletter-form" data-toggle="validator">
                                    <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
            
                                    <button class="btn cmn-btn" type="submit">
                                        Subscribe Now
                                    </button>
                                    <div id="validator-newsletter" class="form-result"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

       <!-- Copyright -->
      <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright-item">
                        <p>Copyright ©2022 GZ Company. Designed By <a href="#" target="_blank">Vin Agency</a></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="copyright-item">
                        <ul>
                            <li>
                                <a href="privacy-policy.html" target="_blank">Privacy Policy</a>
                            </li>
                            <li>
                                <span>-</span>
                            </li>
                            <li>
                                <a href="terms-and-conditions.html" target="_blank">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright -->


        <!-- Essential JS -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.5.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Form Validator JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Ajax chip JS -->
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="assets/js/jquery.meanmenu.js"></script>
        <!-- Owl Carousel -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Popup JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Odometer JS -->
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <!-- Nice Select JS -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!-- Progressbar JS -->
        <script src="assets/js/progressbar.min.js"></script>
        <!-- Wow JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/custom.js"></script>
    </body>
</html>