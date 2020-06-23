            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left"><?=ucfirst($this->uri->segment(1));?></h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?=site_url('dashboard')?>">Home</a></li>

                                <?php if($this->uri->segment(1) != 'dashboard' && $this->uri->segment(1) != null && $this->uri->segment(2) != null) { ?>

                                <li><a href=""><?=ucfirst($this->uri->segment(1))?></a></li>
                                <?php }else{ ?>
                                <li><?=ucfirst($this->uri->segment(1))?></li>
                                <?php } ?>
                                <li><?=ucfirst($this->uri->segment(2));?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <?php if($this->session->userdata('login_status') == TRUE) :?>
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?=$this->session->userdata('name')?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?=site_url('dashboard/logout')?>">Log Out</a>
                            </div>
                            <?php endif?>
                        </div>
                    </div>
                </div>
            </div>
