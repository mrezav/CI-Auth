<!doctype html>
<html class="no-js" lang="en">

<head>
<?php $this->load->view('layouts/head'); ?>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- error area start -->
    <div class="error-area ptb--100 text-center">
        <div class="container">
            <div class="error-content">
                <h2>404</h2>
                <p>Ooops! Something went wrong .</p>
                <a href="<?=site_url('dashboard');?>">Back to Dashboard</a>
            </div>
        </div>
    </div>
    <!-- error area end -->
    <!-- jquery latest version -->
    <script src="<?=base_url('assets/js/vendor/jquery-2.2.4.min.js'); ?>"></script>
    <!-- bootstrap 4 js -->
    <script src="<?=base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?=base_url('assets/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?=base_url('assets/js/metisMenu.min.js'); ?>"></script>
    <script src="<?=base_url('assets/js/jquery.slimscroll.min.js'); ?>"></script>
    <script src="<?=base_url('assets/js/jquery.slicknav.min.js'); ?>"></script>
    
    <!-- others plugins -->
    <script src="<?=base_url('assets/js/plugins.js'); ?>"></script>
    <script src="<?=base_url('assets/js/scripts.js'); ?>"></script>
</body>

</html>