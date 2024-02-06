<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript">
    </script>
    <meta http-equiv="content-type" content="text/html;" charset="utf-8">
    <title>Contact Us |  Eagle Eye | Electrical Equipment & Tools | Get electrical equipment and Tools for cheap price from Eagle Eye</title>

    <meta name="twitter:title" content="Eagle Eye - Middleast largest distributor of electrical goods">
    
    @include('frontend.layout.header')        

</head>

<body>

<div class="wrapper_box">

    @include('frontend.layout.navbar')

    <!--Start Page Header Section-->
    <section class="page-header" style="background-image: url( {{ url('frontend/images/background/page-header-bg.jpg') }} );">
        <div class="container">
            <h2>Contact</h2>
            <ul class="thm-breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><span>></span></li>
                <li><span>Contact</span></li>
            </ul>
        </div>
    </section>
    <!--End Page Header Section-->
    
    
    <!--Start Contact One Section-->
    <section class="contact-one-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="contact-one-image">
                        <img src=" {{ url('frontend/images/resource/contact-one-img-1.jpg') }} " alt="">
                    </div>
                </div>
                <div class="col-xl-6">
                    <!-- <form action="inc/sendemail.php" class="contact-one-form"> -->
                    <form action="inc/sendemail.php" class="contact-one-form">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="input-box">
                                    <input type="text" name="name" placeholder="Your name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input-box">
                                    <input type="email" name="email" placeholder="Your E-mail">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="input-box">
                                    <input type="text" name="Subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="input-box">
                                    <textarea name="message" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact__btn">
                                    <button type="submit" class="theme-btn">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact One Section-->
    
    <section class="google_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2570.3458508265635!2d54.47624684125086!3d24.345866951097985!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e41a503701335%3A0xb5a40691e0c5e778!2sEagle%20Eye%20Electrical%20Equipment%20%26%20Tools%20Trading!5e0!3m2!1sen!2sin!4v1702748679182!5m2!1sen!2sin" class="google-map__contact" allowfullscreen=""></iframe>
    </section>
    
    <!--Start ContactinfoSection -->   
    <section class="contactinfo">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <!--Contactinfo Single-->
                    <div class="contactinfo-single">
                        <div class="contactinfo-icon">
                            <span class="far fa-envelope-open"></span>
                        </div>
                        <div class="contactinfo-content">
                            <h4>Mail Address</h4>
                            <a href="mailto:sales@eagleeyeuae.com">sales@eagleeyeuae.com</a><br>
                            <a href="mailto:trading@eagleeyeuae.com">trading@eagleeyeuae.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Contactinfo Single-->
                    <div class="contactinfo-single">
                        <div class="contactinfo-icon">
                            <span class="far fa-phone"></span>
                        </div>
                        <div class="contactinfo-content">
                            <h4>Call Us</h4>
                            <a href="tel:+971 244 107 96">+971 244 107 96</a><br><br>
                            <!-- <a href="tel:">+971 --- --- --</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Contactinfo Single-->
                    <div class="contactinfo-single">
                        <div class="contactinfo-icon">
                            <span class="far fa-map-pin"></span>
                        </div>
                        <div class="contactinfo-content">
                            <h4>Visit us</h4>
                            <p>Eagle Eye, Musaffah M44,<br>Abu Dhabi, UAE.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End ContactinfoSection --> 

   
    @include('frontend.layout.footer')
    





</body>
</html>