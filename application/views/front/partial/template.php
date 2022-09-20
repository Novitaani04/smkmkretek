<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Smk muhammadiyah kretek</title>
    <!--/google-fonts-->
    <link href="//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <!--//google-fonts-->
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/front_assets/') ?>css/style-starter.css"/>
    <link rel="stylesheet" href="<?=base_url('assets/front_assets/css/gallery.css')?>"/>
</head>

<body>
    <!--header-->
    <?= $this->load->view('front/partial/header', null, true); ?>
    <!--/header-->

    <?= $page ?>

    <!-- footer -->
    <section class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-lg-4">
                <div class="row footer-top-29">
                    <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
                        <div class="footer-logo mb-3">
                            <a class="navbar-brand" href="index.html">SMK M KRETEK</a>
                        </div>
                        <p>SMK Muhammadiyah Kretek adalah sekolah yang mengedepankan karakter siswa.Karakter ersebut di antaranya Sportifitas,Terampil,Inovatif,dan Agamas(SATRIA)</p>
                        <div class="main-social-footer-29 mt-4">
                            <a href="https://www.facebook.com/smkmkretek" class="facebook"><span class="fa fa-facebook"></span></a>
                            <a href="//www.instagram.com/smkmkretek/ " class="instagram"><span class="fa fa-instagram"></span></a>
                            <a href="https://www.youtube.com/channel/UCI83h6I5aTWRWM1DRU9eHPA" class="youtube"><span class="fa fa-youtube"></span></a>
                        </div>
                    </div>
                    <!-- <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

                        <ul>
                            <h6 class="footer-title-29">Usefull Links</h6>
                            <li><a href="">About Us</a></li>
                            <li><a href="services.html">Courses</a></li>
                            <li><a href="#pricing"> Pricing plans</a></li>
                            <li><a href="#careers"> Careers</a></li>
                            <li><a href="blog.html"> Blog posts</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div> -->
                    <!-- <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
                        <h6 class="footer-title-29">More Info</h6>
                        <ul>
                            <li><a href="#profile">Profile</a></li>
                            <li><a href="#vision">Vision & Values</a></li>
                            <li><a href="#history">History</a></li>
                            <li><a href="#leader">Leadership</a></li>
                            <li><a href="#help">Help</a></li>
                            <li><a href="#support"> Support</a></li>
                        </ul>

                    </div> -->
                    <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
                        <h6 class="footer-title-29">Contact Info </h6>
                        <p><strong>Address :</strong><?= $contact->alamat ?></p>
                        <p class="my-2"><strong>Phone :</strong> <a href="tel:<?= $contact->telepon ?>"><?= $contact->telepon ?></a></p>
                        <p><strong>Email :</strong> <a href="<?= $contact->email ?>"><?= $contact->email ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //footer -->

    <!-- copyright -->
    <section class="w3l-copyright">
        <div class="container">
            <div class="row bottom-copies">
                <p class="col-lg-8 copy-footer-29">@SMK Muhammadiyah Kretek <a href="https://w3layouts.com/" target="_blank">
                        </a></p>

                <!-- <div class="col-lg-4 footer-list-29">
                    <ul class="d-flex text-lg-right justify-content-center mt-lg-0 mt-3">
                        <li><a href="#careers"> Careers</a></li>
                        <li class="mx-lg-5 mx-md-4 mx-3"><a href="#privacymy-lg-0 my-4">Privacy Policy</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                </div> -->

            </div>
        </div>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            &#10548;
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->
    </section>
    <!-- //copyright -->

    <script src="<?= base_url('assets/front_assets/') ?>js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->

    <script src="<?= base_url('assets/front_assets/') ?>js/theme-change.js"></script><!-- theme switch js (light and dark)-->

    <script src="<?= base_url('assets/front_assets/') ?>js/owl.carousel.js"></script>
    <!-- script for banner slider-->
    <script>
        $(document).ready(function() {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //script -->
    <!-- magnific popup -->
    <script src="<?= base_url('assets/front_assets/') ?>js/jquery.magnific-popup.min.js"></script>
    <!-- gallery -->
    <script src="<?=base_url('assets/front_assets/js/gallery.js')?>"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->
    <!-- /counter-->
    <script src="<?= base_url('assets/front_assets/') ?>js/counter.js"></script>
    <!-- //counter-->
    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function() {
            $("#owl-demo1").owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 2,
                        nav: false,
                        loop: true
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="<?= base_url('assets/front_assets/') ?>js/bootstrap.min.js"></script>
    <!-- //bootstrap-->

</body>

</html>