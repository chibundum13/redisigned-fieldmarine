<?php
session_start();
$page = "HSE Policy Page";
$active = "about";
$pagetitle = "HSE Policy | FieldMarine Engineering";
require_once('head.php');
?>

<body class="royal_preloader">
    <div id="royal_preloader"></div>
    <div id="wrapper" class="wrapper clearfix">
        
        <?php require_once('header.php'); ?>

        <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
            <div class="bg-section">
                <img src="assets/images/about-top-bg.jpg" alt="" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <div class="title text-center">
                            <div class="title--heading">
                                <h1>HSE Policy</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="about">Who we are</a></li>
                                <li class="breadcrumb-item active" aria-current="page">HSE Policy</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about1" class="about about-1 pt-110 pb-50">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <div class="heading mb-50 text--center">
                            <h2 class="heading--title mb-3">HSE Policy</h2>
                            <p class="heading--desc text-mint mb-0">Our HSE policy provides the framework for the management of health, safety and the environment within which all activities of Fieldmarine Engineering and its business organs are executed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="case" class="case case-standard case-3col bg-gray pt-100 pb-60">
            <div class="container">
                <div class="row flipInX" data-wow-delay="100ms">
                    <div class="col-sm-12 col-md-10 offset-md-1">
                        <div class="heading heading-2 mb-50 text--center">
                            <p class="heading--desc mb-0">Fieldmarine targets zero incident operation, to achieve this, we maintain policies covering journey management, drug and alcohol, community and stakeholder relations management, security and access control, medical and health management, safety and hazard management etc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="page-img" class="bg-overlay bg-overlay-dark">
            <div class="page-img">
                <img src="assets/images/fm-hsepolicy.jpg" alt="Fieldmarine Strategy" />
            </div>
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