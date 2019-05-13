<?php include 'partials/header.php';?>
   <!-- Page Title -->
   <title>Contact | MEXXON</title>
   </head>

<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    <!-- Header Area Starts -->
    <header class="header-area single-page" style="background-image: url('assets/images/page6contacts.jpg');">
    <?php include 'partials/nav.php';?>
        <div class="page-title text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h2>Contact Us</h2>
                        <p>Need to get in touch with us? <i class="fa fa-smile-o"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Map Area Starts -->
    <!-- <section class="map-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="mapBox" class="mapBox" 
                        data-lat="40.701083" 
                        data-lon="-74.1522848" 
                        data-zoom="13" 
                        data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                        data-mlat="40.701083"
                        data-mlon="-74.1522848">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Map Area End -->


    <!-- Contact Form Starts -->
    <section class="contact-form section-padding2 section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="info-text">
                            <h4>MEXXON CORPORATE HEAD OFFICE</h4>
                            <p>3A, EZIMURO STREET, LEKKI PHASE 1, LAGOS</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info-text">
                            <h4>
                                <a href="tel:+2348060306882">234 8060306882</a><br>
                                <a href="tel:+2347037030448">234 7037030448</a>
                            </h4>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="info-text">
                            <h4>
                                <a href="mailto:info@mexxon.com.ng">info@mexxon.com.ng</a></h4>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="info-text">
                            <h4><a href="http://www.mexxon.com.ng" target="_blank">mexxon.com.ng</a></h4>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form action="#">
                        <div class="left">
                            <input type="text" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required>
                            <input type="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required>
                            <input type="text" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" required>
                        </div>
                        <div class="right">
                            <textarea name="message" cols="20" rows="7" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required></textarea>
                        </div>
                        <button type="submit" class="template-btn">subscribe now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form End -->


    <?php include 'partials/footer-with-map.php';?>