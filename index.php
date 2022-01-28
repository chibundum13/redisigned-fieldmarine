<?php
session_start();
$page = "Home Page";
$active = "home";
$pagetitle = "FieldMarine Engineering";
require_once('head.php');
?>

<body class="royal_preloader">
    <div id="royal_preloader"></div>
    <div id="wrapper" class="wrapper clearfix">

        <?php require_once('header.php'); ?>

        <section id="slider" class="slider slider-2 slide-overlay-blue">
            <div class="rev_slider_wrapper">
                <div id="slider1" class="rev_slider" data-version="5.0">
                    <ul>
                        <li data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000">
                            <img src="assets/images/fm-slide1.jpg" alt="Define your Energy" width="1920" height="1280">
                            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-60','-30']" data-fontsize="['70', '60', '30', '20']" data-lineheight="['75','65','35','25']" data-width="none" data-height="none" data-frames='[{"delay":1250,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--headline text-center">Define your <br>Energy</div>
                            </div>
                        </li>
                        <li data-transition="slideremoveup" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000">
                            <img src="assets/images/fm-slide2.jpg" alt="Define your Energy" width="1920" height="1280">
                            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-60','-30']" data-fontsize="['70', '60', '30', '20']" data-lineheight="['75','65','35','25']" data-width="none" data-height="none" data-frames='[{"delay":1250,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--headline text-center">Define your <br>Energy</div>
                            </div>
                        </li>
                        <li data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000">
                            <img src="assets/images/fm-slide3.jpg" alt="Define your Energy" width="1920" height="1280">
                            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-60','-30']" data-fontsize="['70', '60', '30', '20']" data-lineheight="['75','65','35','25']" data-width="none" data-height="none" data-frames='[{"delay":1250,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--headline text-center">Define your <br>Energy</div>
                            </div>
                        </li>
                        <li data-transition="slideremoveup" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000">
                            <img src="assets/images/fm-slide4.jpg" alt="Define your Energy" width="1920" height="1280">
                            <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-60','-30']" data-fontsize="['70', '60', '30', '20']" data-lineheight="['75','65','35','25']" data-width="none" data-height="none" data-frames='[{"delay":1250,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--headline text-center">Define your <br>Energy</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="pricing1" class="core core-1 bg-mint pt-110 pb-20">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-8 offset-md-2">
                        <div class="heading heading-1 text--center mb-20">
                            <p class="heading--subtitle mb-0">At FieldMarine our vast expertise in drilling engineering and marine operations set us apart as a proven leader in the provision of asset management and project support services for our clients' offshore operations.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-20">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3 price-table">
                        <div class="core-panel">
                            <div class="core--heading text--center">
                                <div class="core--icon training-icon"></div>
                                <span></span>
                                <h4>Technical <br>Assistance</h4>
                                <a class="btn btn--blue btn--rounded" href="technical">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 price-table">
                        <div class="core-panel">
                            <div class="core--heading text--center">
                                <div class="core--icon operation-icon"></div>
                                <span></span>
                                <h4>Operations &amp; <br>Maintenance</h4>
                                <a class="btn btn--blue btn--rounded" href="operations">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 price-table">
                        <div class="core-panel">
                            <div class="core--heading text--center">
                                <div class="core--icon drilling-icon"></div>
                                <span></span>
                                <h4>Drilling <br>Support</h4>
                                <a class="btn btn--blue btn--rounded" href="drilling">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 price-table">
                        <div class="core-panel">
                            <div class="core--heading text--center">
                                <div class="core--icon marine-icon"></div>
                                <span></span>
                                <h4>Marine <br>Support</h4>
                                <a class="btn btn--blue btn--rounded" href="marine">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-divider"></div>
        </section>
        <section id="case" class="case case-standard case-3col pt-100 pb-60">
            <div class="container">
                <div class="row flipInX" data-wow-delay="100ms">
                    <div class="col-sm-12 col-md-8 offset-md-2">
                        <div class="heading heading-2 mb-50 text--center">
                            <h2 class="heading--title">Our Services</h2>
                            <p class="heading--desc mb-0">We provide high-quality and exquisite engineering services to our clients in the marine sector in these core areas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="carousel owl-carousel carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                        <div class="case-carousel-grid">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-4 case-item">
                                    <div class="case-item-container">
                                        <div class="case--img">
                                            <img src="assets/images/fm-technical2.jpg">
                                            <div class="case--hover">
                                                <div class="case--action">
                                                    <a href="technical"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="case--content">
                                            <div class="case--title">
                                                <h4><a href="technical">Technical Assistance <br>Services</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4 case-item">
                                    <div class="case-item-container">
                                        <div class="case--img">
                                            <img src="assets/images/fm-marine-support.jpg">
                                            <div class="case--hover">
                                                <div class="case--action">
                                                    <a href="operations"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="case--content">
                                            <div class="case--title">
                                                <h4><a href="operations">Operations &amp; <br>Maintenance</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4 case-item">
                                    <div class="case-item-container">
                                        <div class="case--img">
                                            <img src="assets/images/fm-drilling-support2.jpg">
                                            <div class="case--hover">
                                                <div class="case--action">
                                                    <a href="drilling"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="case--content">
                                            <div class="case--title">
                                                <h4><a href="drilling">Drilling Support <br>Services</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="case-carousel-grid">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-4 case-item">
                                    <div class="case-item-container">
                                        <div class="case--img">
                                            <img src="assets/images/fm-marine-support2.jpg">
                                            <div class="case--hover">
                                                <div class="case--action">
                                                    <a href="marine"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="case--content">
                                            <div class="case--title">
                                                <h4><a href="marine">Marine Support <br>Services</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4 case-item">
                                    <div class="case-item-container">
                                        <div class="case--img">
                                            <img src="assets/images/fm-aim.jpg">
                                            <div class="case--hover">
                                                <div class="case--action">
                                                    <a href="aim"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="case--content">
                                            <div class="case--title">
                                                <h4><a href="aim">Asset Integrity <br>Management</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4 case-item">
                                    <div class="case-item-container">
                                        <div class="case--img">
                                            <img src="assets/images/fm-gas.jpg">
                                            <div class="case--hover">
                                                <div class="case--action">
                                                    <a href="gfm"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="case--content">
                                            <div class="case--title">
                                                <h4><a href="gfm">Gas Facility <br>Management</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="featured2" class="featured featured-2 featured-left pt-110 pb-110 bg-overlay bg-overlay-dark3">
            <div class="bg-section"><img src="assets/images/fm-bg1.jpg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="heading">
                            <h2 class="heading--title color-white">Exquisite services<br>for the marine sector</h2>
                        </div>
                        <!-- Feature Card #1 -->
                        <div class="feature-card wow fadeInUp" data-wow-delay="100ms">
                            <div class="feature-card-icon">
                                <i class="icon-trophy"></i>
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title">Quality Services</h3>
                                <p class="feature-card-desc ">Our services are guaranteed for quality and reliability as we tailor our services to meet our clients needs.</p>
                            </div>
                        </div>
                        <!-- feature-card end -->
                        <!-- Feature Card #2 -->
                        <div class="feature-card wow fadeInUp" data-wow-delay="200ms">
                            <div class="feature-card-icon">
                                <i class="icon-briefcase"></i>
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title">Vast Expertise</h3>
                                <p class="feature-card-desc "> We are a proven industry leader with our vast expertise in engineering, marine and drilling.</p>
                            </div>
                        </div>
                        <!-- feature-card end -->
                        <!-- Feature Card #3 -->
                        <div class="feature-card wow fadeInUp" data-wow-delay="300ms">
                            <div class="feature-card-icon">
                                <i class="icon-shield"></i>
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title">Customer satisfaction</h3>
                                <p class="feature-card-desc ">All projects receive the attention of our team of licensed professionals and Consultants.</p>
                            </div>
                        </div>
                        <!-- feature-card end -->
                    </div>
                    <!-- .col-lg-6 end -->
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <img src="assets/images/fm-marine-works.jpg" alt="Marine Services" class="img-fluid">
                    </div>
                    <!-- .col-lg-6 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        
		<?php require_once('footer.php'); ?>

        <div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
    </div>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/royal_preloader.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script src="assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/js/rsconfig.js"></script>
</body>

</html>