<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Skewer || Contact</title>

    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style-magnific-popup.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/icons-main.css" rel="stylesheet">
    <link href="css/icons-helper.css" rel="stylesheet">

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Font Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <!--headerIncludes-->

</head>

<body>

    <!--begin header -->
    <?php 
        $page = 'contact';
        include 'header.php' 
    ?>
    <!--end header -->

    <!--begin contact-hero-section -->
    <section id="hero-section" class="contact-hero-section">

        <!--begin image-overlay -->
        <div class="image-overlay"></div>
        <!--end image-overlay -->

        <!--begin container-->
        <div class="container image-section-inside">

            <!--begin row-->
            <div class="row">

                <!--begin col-md-10-->
                <div class="col-md-10 col-md-offset-1 text-center">

                    <span style="margin-bottom:20px" class="comic-text wow fadeIn mb-5" data-wow-delay="0.5s">Golden Bay Leaf</span>

                    <h2 class="section-title white wow bounceIn" data-wow-delay="1s">Get In Touch</h2>

                    <p class="hero-text wow fadeInUp" data-wow-delay="2s">For any enquiries you can give us a call at <strong>+91 7506110567</strong><br>Alternatively we can get in touch using the form bellow.</p>

                </div>
                <!--end col-md-10-->

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </section>
    <!--end contact-hero-section -->

    <!--begin contact2-hero-section-->
    <div class="contact2-hero-section">

        <!--begin image-overlay -->
        <div class="image-overlay"></div>
        <!--end image-overlay -->

        <!--begin container-->
        <div class="container image-section-inside">

            <!--begin row-->
            <div class="row">

                <!--begin col-md-10-->
                <div class="col-md-10 col-md-offset-1 text-center">

                    <h3 class="section-title small-margin wow fadeIn" data-wow-delay="0.5s">CONTACT FORM</h3>

                    <p class="wow fadeInUp" data-wow-delay="1s">There are many variations of passages of Lorem Ipsum available, but the majority have suffered<br>
                        alteration, by injected humour, or new randomised words which don't look believable.</p>

                    <!--begin contact-wrapper-->
                    <div class="contact-wrapper">

                        <!--begin success message -->
                        <p class="contact_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>
                        <!--end success message -->

                        <!--begin contact form -->
                        <form id="contact-form" class="contact" action="php/contact.php" method="post">

                            <!--begin col-md-6-->
                            <div class="col-md-6 wow slideInLeft" data-wow-delay="0.5s">
                                <input class="contact-input white-input" required name="contact_names" placeholder="Full Name*" type="text">
                                <input class="contact-input white-input" required name="contact_email" placeholder="Email Adress*" type="email">
                                <input class="contact-input white-input" required name="contact_phone" placeholder="Phone Number*" type="text">
                            </div>
                            <!--end col-md-6-->

                            <!--begin col-md-6-->
                            <div class="col-md-6 wow slideInRight" data-wow-delay="0.5s">
                                <textarea class="contact-commnent white-input" rows="2" cols="20" name="contact_message" placeholder="Your Message..."></textarea>
                            </div>
                            <!--end col-md-6-->

                            <input value="Send Message" id="submit-button" class="contact-submit wow fadeInUp" data-wow-delay="1s" type="submit">

                        </form>
                        <!--end contact form -->

                    </div>
                    <!--end contact-wrapper-->

                </div>
                <!--end col-md-10-->

            </div>
            <!--end row-->

        </div>
        <!--end container-->

<style>
    .contact-address.box-shadow {
        text-align: center;
        border: 1px solid red;
        padding-top: 7px;
        border-radius: 10px;
    }
    .contact-address.box-shadow:hover {
        background: red !important;
        color: white !important;
    }
    .contact-address.box-shadow:hover h6 {
        background: red !important;
        color: white !important;
    }
</style>

            <div class="address-section mb-80 pt-80" style="position: relative;z-index: 35;padding-top:80px">
                <div class="container">
                    <h3 class="section-title small-margin wow fadeIn" data-wow-delay="0.5s" style="text-align:center">Our Branches</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-address box-shadow">
                               <h6 style="color: #333;">Mumbai</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-address box-shadow">
                                <h6 style="color: #333;">Pune</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-address box-shadow">
                                <h6 style="color: #333;">Goa</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





    </div>
    <!--end contact2-hero-section-->

    <!--begin footer -->
    <?php include 'footer.php' ?>
    <!--end footer -->


    <!-- Load JS here for greater good =============================-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.scrollTo-min.js"></script>
    <script src="js/SmoothScroll.js"></script>
    <script src="js/wow.js"></script>

    <!-- begin custom script-->
    <script src="js/custom.js"></script>
    <script src="js/plugins.js"></script>

</body>

</html>