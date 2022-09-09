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

        <title>Contact</title>

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
                                <a href="/" class="nav-link ">Home </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('about')}}" class="nav-link ">About </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('services')}}" class="nav-link">Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('contact')}}" class="nav-link active">Contact </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('pricing')}}" class="nav-link ">Pricing </a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link">English <i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Kurdish</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Arabic</a>
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
                                    <span>Mail: <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#d4bcb1b8b8bb94a0a6b5baacfab7bbb9"><span class="__cf_email__" data-cfemail="127a777e7e7d526660737c6a3c717d7f">[email&#160;protected]</span></a></span>
                                    <span>Gmail: <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#c4b0b6a5aabc84a3a9a5ada8eaa7aba9"><span class="__cf_email__" data-cfemail="295d5b484751694e44484045074a4644">[email&#160;protected]</span></a></span>
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
                            <h2>Contact</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <span>/</span>
                                </li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Contact -->
        <div class="contact-area two pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <h3>Drop us message for any query</h3>
                            <span>For more information about our Transport, get in touch with Tranx contacts</span>
    
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
            
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-md-12 col-lg-12">
                                        <button type="submit" class="cmn-btn btn">
                                            Send Message
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-place">
                            <div class="contact-item">
                                <i class="flaticon-call"></i>
                                <h4>Call us</h4>
                                <ul>
                                    <li>
                                        <span>Phone:</span>
                                        <a href="tel:+15143125678">+1 (514) 312-5678</a>
                                    </li>
                                    <li>
                                        <span>Mobile:</span>
                                        <a href="tel:+15143126688">+1 (514) 312-6688</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-item">
                                <i class="flaticon-placeholder"></i>
                                <h4>Our location</h4>
                                <span>6890 Blvd, The Bronx, NY 1058 New York, USA</span>
                            </div>
                            <div class="contact-item">
                                <i class="flaticon-email"></i>
                                <h4>Email</h4>
                                <ul>
                                    <li>
                                        <span>Mail:</span>
                                        <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#6008050c0c0f201412010e184e030f0d"><span class="__cf_email__" data-cfemail="91f9f4fdfdfed1e5e3f0ffe9bff2fefc">[email&#160;protected]</span></a>
                                    </li>
                                    <li>
                                        <span>Gmail:</span>
                                        <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#17636576796f57707a767e7b3974787a"><span class="__cf_email__" data-cfemail="1c686e7d72645c7b717d7570327f7371">[email&#160;protected]</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact -->

        <!-- Map -->
        <div class="map-area">
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59843174.53779284!2d62.17507173408573!3d23.728204508550373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sbd!4v1597000032257!5m2!1sen!2sbd"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <!-- End Map -->

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