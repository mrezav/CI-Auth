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
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <!-- <div class="body"> -->
            <!-- page title area start -->
            <?php $this->load->view('layouts/page_title'); ?>
            <!-- page title area end -->
            <!-- <div class="main-content"> -->
                <!-- <div class="row mt-5 mb-5"> -->
                    <!-- <div class="col-12"> -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4 class="header-title mb-3">Halaman Dashboard</h4>
                                </div>
								<h1>Selamat Datang <?=$this->session->userdata('name')?></h1>
								<?php
									// print_r($this->session->all_userdata());
								?>

                            </div>
                        </div>
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </div> -->
        <!-- </div> -->
        <!-- main content area end -->
        <!-- footer area start-->
         <?php $this->load->view('layouts/footer'); ?>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- jquery latest version -->
    <?php $this->load->view('layouts/js'); ?>
    
</body>

</html>
