<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?=base_url('assets/images/icon/favicon.ico');?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/metisMenu.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/slicknav.min.css'); ?>">
    <!-- amchart css -->
    <link rel="stylesheet" href="<?=base_url('https://www.amcharts.com/lib/3/plugins/export/export.css'); ?>" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?=base_url('assets/css/typography.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/default-css.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/styles.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/responsive.css'); ?>">
    <!-- modernizr css -->
    <script src="<?=base_url('assets/js/vendor/modernizr-2.8.3.min.js'); ?>"></script>
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
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="<?=site_url('register/submit'); ?>">
                    <div class="login-form-head">
                        <h4>Sign Up</h4>
                        <p>Silahkan masukkan data anda dengan benar!</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="name">Nama</label>
                            <input type="text" id="name" name="name" value="<?=set_value('name')?>" autofocus>
                            <i class="ti-user"></i>
                            <div class="mt-2 mb-2">
                                <?=form_error('name')?>
                            </div>
                        </div>
                        <div class="form-gp">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" value="<?=set_value('email')?>" autofocus>
                            <i class="ti-email"></i>
                            <div class="mt-2 mb-2">
                                <?=form_error('email')?>
                            </div>
                        </div>
                        <div class="form-gp">
                            <label for="password">Password</label>
                            <input type="password" name="password">
                            <i class="ti-lock"></i>
                            <div class="mt-2 mb-2">
                                <?=form_error('password')?>
                            </div>
                        </div>
                        
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Register <i class="ti-arrow-right"></i></button>
                            <br>
                        </div>
						<div class="submit-btn-area">
							<a href="<?=site_url('login')?>">login</a>
						</div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

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
