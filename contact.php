<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Velvet Lounge | UNISEX Salon</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/velvet-logo-bg.jpg" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-bar-left">
                            <div class="text">
                                <h2>10:00 - 10:00</h2>
                                <p>Opening Hour Mon - Sun</p>
                            </div>
                            <div class="text">
                                <h2>+91 740 000 9327</h2>
                                <p>Call Us For Appointment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href="https://twitter.com/velvetlongehair" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/velvetloungesalon/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/in/velvetlongehair-3a4423178/?originalSubdomain=in" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/salonvelvetlounge/?hl=en"><i class="fab fa-instagram" target="_blank"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand"><img src="img/velvet-logo.png" alt="logo"></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="price.php" class="nav-item nav-link">Price</a>
                        <a href="team.php" class="nav-item nav-link">Barber</a>
                        <a href="portfolio.php" class="nav-item nav-link">Gallery</a>
                        <a href="appointment.php" class="nav-item nav-link">Appointment</a>
                        <a href="contact.php" class="nav-item nav-link active">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                        <a href="contact.php">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Contact Start -->
        <div class="section-header text-center" style="margin-top: 90px;">
            <p>Get In Touch</p>
            <h2>If You Have Any Query, Please Contact Us</h2>
        </div>
        <!-- Contact Start -->
        <div class="contact">
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <div class="contact-form"><iframe name="hidden_iframe" id="hidden_iframe" style="display: none;" onload="var submitted;if(submitted){var success=document.getElementById('successMsg');success.style.display='block';window.open('appointment.php');}else{var failure=document.getElementById('failure');failure.style.display='block';}"></iframe>
                                <div id="success successMsg">Message sent.</div>
                                <div id="success failure">Unable to Contact.</div>
                                <form name="sentMessage" action="https://docs.google.com/forms/u/2/d/e/1FAIpQLSekLL365DgSk474RhliSO-vTMsx-o-hpxvu-9RyZDZ7pTfs0A/formResponse" id="contactForm" onsubmit="return var submitted=true;" target="hidden_iframe">
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" name="entry.1994371966" />
                                        <p class="help-block text-danger error1"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" name="entry.587447194" />
                                        <p class="help-block text-danger error2"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" name="entry.78594335"/>
                                        <p class="help-block text-danger error3"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" id="message" placeholder="Message" required="required" name="entry.1609216969"></textarea>
                                        <p class="help-block text-danger error4"></p>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-contact">
                            <h2>Branch 1 Address</h2>
                            <p><a href="https://goo.gl/maps/Jp1LQYcqBZzfX26s9" target="_blank"><i class="fa fa-map-marker-alt"></i>Metro JM Road, Kalyan East</a></p>
                            <p><a href="tel: +917777092199"><i class="fa fa-phone-alt"></i>+91 777-709-2199</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-contact">
                            <h2>Branch 2 Address</h2>
                            <p><a href="https://goo.gl/maps/ghPvAbocodCapoiG6" target="_blank"><i class="fa fa-map-marker-alt"></i>Malang Gad Road, Kalyan East</a></p>
                            <p><a href="tel: +917400009327"><i class="fa fa-phone-alt"></i>+91 740-000-9327</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-contact">
                            <h2>Branch 3 Address</h2>
                            <p><a href="https://goo.gl/maps/2NyAGQ6hMZa2XEp36" target="_blank"><i class="fa fa-map-marker-alt"></i>Ambernath East</a></p>
                            <p><a href="tel: +917400040583"><i class="fa fa-phone-alt"></i>+91 740-004-0583</a></p>
                        </div>
                    </div>
                </div>
                <div class="row" style="display:block;">
                    <center>
                        <div class="col-md-7 col-sm-10">
                            <div class="footer-left">
                                <p>All rights reserved by <a href="index.php"><img src="img/logo.png" width="140" height="55" alt="logo"></a> &copy; Copyright <strong></strong> <script>document.write(new Date().getFullYear());</script> </p>
                            </div>
                        </div></center>
                    <div class="col-md-6 col-sm-6">
                        <div class="footer-right contact-social">
                            <a href="https://www.facebook.com/spawntechsolutions/"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/SpawntechS?s=09"><i class="fa fa-twitter"></i></a>
                            <a href="https://g.page/SpawnTech?share"><i class="fa fa-google-plus"></i></a>
                            <a href="https://in.linkedin.com/in/spawntech-solutions-a2531b213"><i class="fa fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/spawntechsolutions/"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Contact Javascript -->
        <script src="form/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
