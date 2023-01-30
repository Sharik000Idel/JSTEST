<!doctype php>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Заказ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/logo2.svg">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel main css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>


<body class="search__box__show__hide">
    <!-- ПОТОМ УБРАТЬ КЛАСС -->
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">

        <!-- components/header.php -->
        <? include('components/header.php'); ?>

        <div class="body__overlay"></div>

        <!-- Start Checkout Area -->
        <section class="our-checkout-area bg__white pt--100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-8">
                        <div class="ckeckout-left-sidebar">

                            <!-- Start Payment Box -->
                            <form class="payment-form">
                                <h2 class="section-title-3">платежные реквизиты</h2>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur kgjhyt</p> -->
                                <div class="payment-form-inner">
                                    <div class="single-checkout-box">
                                        <input type="text" placeholder="Номер карты*">
                                    </div>
                                    <div class="single-checkout-box select-option">
                                        <input type="text" name="input1" placeholder="(MM-ГГ) Дата конца обслуживания*" required pattern="[0-9]{2}-[0-9]{2}" />
                                        <input type="text" placeholder="(ххх) СVC-код*" required pattern="[0-9]{3}">
                                    </div>
                                </div>
                            </form>
                            <!-- End Payment Box -->
                            <!-- Start Payment Way -->
                            <div class="our-payment-sestem">
                                <h2 class="section-title-3">We Accept :</h2>
                                <ul class="payment-menu">
                                    <li><a href="#"><img src="images/payment/1.jpg" alt="payment-img"></a></li>
                                    <li><a href="#"><img src="images/payment/2.jpg" alt="payment-img"></a></li>
                                    <li><a href="#"><img src="images/payment/3.jpg" alt="payment-img"></a></li>
                                    <li><a href="#"><img src="images/payment/4.jpg" alt="payment-img"></a></li>
                                    <li><a href="#"><img src="images/payment/5.jpg" alt="payment-img"></a></li>
                                </ul>
                                <div class="checkout-btn">
                                    <a class="ts-btn btn-light btn-large hover-theme" href="#">CONFIRM & BUY NOW</a>
                                </div>
                                <div style="height: 50px;"></div>
                            </div>
                            <!-- End Payment Way -->
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="checkout-right-sidebar">
                            <div class="our-important-note">
                                <h2 class="section-title-3">Note :</h2>
                                <p class="note-desc">всякие заметки.</p>
                                <ul class="important-note">
                                    <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>очень выжный текст</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-caret-right-circle"></i>тоже очень выжный текст</a></li>
                                </ul>
                            </div>
                            <div class="puick-contact-area mt--60">
                                <h2 class="section-title-3">Quick Contract</h2>
                                <a href="phone:+8801722889963">+8 965 657 79 12 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Checkout Area -->

        <!-- components/footer.php -->
        <? include('components/footer.php'); ?>
    </div>
    <!-- Body main wrapper end -->
    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>