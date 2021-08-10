<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->

<html lang="en">
    <head>
        <!-- Meta tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="robots" content="index, follow" />     
        <meta name="author" content="Altus IT Solutions">
        <meta name="description" content="Contact us to discuss your home and small business IT needs.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <!-- Canonical Tag -->
        <link rel="canonical" href="https://altusit.ca/contact" />

        <!-- Title -->
        <title>Contact Us - Altus IT Solutions Windsor-Essex</title>

        <!-- Bootstrap 4 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <!-- Font-Awesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

        <!-- Custom CSS Files -->
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/styles.css">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-6MRJH8SGR9"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-6MRJH8SGR9');
        </script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Preloader -->
        <!-- <div class="wrapper loader_wrapper">
            <img class="logo-svg" src="/pictures/preloader/loading_logo.svg" alt="Altus IT Solutions - Windsor IT Support, Windsor IT Services, Windsor Website design & development"/>
        </div> -->

        <section class="section_hero">
            <div class="nav_container">
                <div class="row justify-content-center">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="/">
                            <img class="logo_mobile" src="pictures/home/hero/logo_blue.png" alt="Altus IT Solutions - Windsor IT Support, Windsor IT Services, Windsor Website design & development">
                        </a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar_content" aria-controls="navbar_content" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbar_content">
                            <ul class="navbar-nav w-100 justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/about-us">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/services">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/previous-work">Previous Work</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="/contact">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row page_title_container justify-content-center">
                <div class="row page_title_text">
                    <div class="col page_title_light">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="col page_subtitle text-center">
                        <h2>Get in touch with us to start your next project</h2>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <section class="section_1">
                <div class="row contact_row">
                    <div class="col-lg-8 contact_col justify-content-center">
                    
                        <!-- <h3 class="success_message text-center">Thanks! We'll be in touch.</h3> -->

                        <form class="px-5" method="POST" id="contact" name="contact" data-netlify="true">
                            <p class="text-center">
                                Fill out the form below to get in touch with us.<br>
                                Fields marked with * are required
                            </p>

                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Please enter your name" pattern="[a-zA-Z ,.'-]+"  required>

                            <label for="company">Company</label>
                            <input type="text" id="company" name="company" class="form-control" placeholder="Company Name">

                            <label for="phone">Phone Number</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="(519) 123-4567" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$">

                            <label for="email">Email Address *</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="example@altusit.ca" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                        
                            <label for="message">Message *</label>
                            <textarea class="form-control rounded-0" id="message" name="message" rows="3" placeholder="Your Message"></textarea>

                            <input type="hidden" name="form-name" value="contact">
                        
                            <button class="btn btn-block btn_full" type="submit">Send</button>
                        </form>
                    
                    </div>
                    <div class="col-lg-4 contact_info_col">
                        <p class="info_title">Check out different ways of contacting us below</p>
                        <div class="row justify-content-center contact_info">
                            <div class="col info_categories">
                                <i class="fas fa-phone-square"></i> Phone Number
                            </div>
                            <div class="col">
                                <a href="tel:5199657865" class="text_link">(519) 965-7865</a>
                            </div>
                            <br>
                            <div class="col info_categories">
                                <i class="fas fa-envelope"></i> Email Addresses
                            </div>
                            <div class="col">
                                Support: <a href="mailto:info@altusit.ca" class="text_link">support@altusit.ca</a><br>
                                Info: <a href="mailto:info@altusit.ca" class="text_link">info@altusit.ca</a>
                            </div>
                        </div>
                        <div class="row justify-content-center map_row">
                            <div class="col">
                                <p class="info_title">Happily serving Windsor & Essex County</p>
                                <iframe style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJwyzNH-r_L4gR0R43_oww4gQ&key=AIzaSyA58exWoBNsCJ5TdUJSy0ZS11_zkF5s82g"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="footer">
            <footer>
                <div class="container">
                    <div class="row text-center footer_row">
                        <div class="col-md-3 footer_left_nav d-none d-md-block">
                            <span class="footer_headers">Navigation</span>
                            <nav class="footer_nav">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/">Home</a>
                                    </li>
                                </ul>
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/about-us">About Us</a>
                                    </li>
                                </ul>
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/services">Services</a>
                                    </li>
                                </ul>
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/previous-work">Previous Work</a>
                                    </li>
                                </ul>
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/contact">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-6 footer_logo_column">
                            <a href="/"><img src="pictures/footer/footer_logo.png" alt="Footer Logo Altus IT Solutions"></a>
                        </div>
                        <div class="col-md-3 footer_right_nav d-none d-md-block">
                            <!-- <span class="footer_headers">Other Links</span> -->
                            <nav class="footer_nav">
                                <!-- <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Privacy Policy</a>
                                    </li>
                                </ul>
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Terms of Use</a>
                                    </li>
                                </ul>
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Accessibility</a>
                                    </li>
                                </ul> -->
                                <ul class="nav">
                                    <li class="nav-item">
                                        <div class="row social_row">
                                            <a class="nav-link social_buttons" href="https://www.facebook.com/AltusITSolution"><i class="fab fa-facebook-square"></i></a>
                                            <a class="nav-link social_buttons" href="https://twitter.com/AltusITSolution"><i class="fab fa-twitter-square"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="row d-block d-md-none text-center">
                        <a class="social_buttons" href="https://www.facebook.com/AltusITSolution"><i class="fab fa-facebook-square"></i></a>
                        <a class="social_buttons" href="https://twitter.com/AltusITSolution"><i class="fab fa-twitter-square"></i></a>
                    </div>
                    <div class="row justify-content-center">
                        <span class="copyright_text">Altus IT Solutions &copy; 2021 | All Rights Reserved</span>
                    </div>
                </div>
            </footer>
        </section> 
        <!-- Bootstrap 4 JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

        <!-- PRELOADER JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>

        <!-- iMask JS File -->
        <script src="https://unpkg.com/imask"></script>

        <!-- Custom JS File -->
        <script src="js/main.js" type="text/javascript"></script>
        <script src="js/contact.js" type="text/javascript"></script>

        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
    </body>
</html>