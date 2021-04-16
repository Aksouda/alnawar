
    <?php $this->load->view('front/header');?>
    <!-- header end -->


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2><?php echo $this->lang->line('customers_login'); ?></h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="login-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3><?php echo $this->lang->line('login'); ?></h3>
                    <div class="theme-card">
                        <?php
                        if($this->session->flashdata('message'))
                        {
                            echo '
                            <div class="alert alert-danger">
                                '.$this->session->flashdata("message").'
                            </div>
                            ';
                        }
                        ?>
                        <?=form_open('front_end/auth/login/validation', 'class="theme-form"');?>
                            <div class="form-group">
                                <label for="email"><?php echo $this->lang->line('email'); ?></label>
                                <input type="text" class="form-control" name="user_email" id="email" placeholder="<?php echo $this->lang->line('email'); ?>" required="">
                            </div>
                            <div class="form-group">
                                <label for="review"><?php echo $this->lang->line('password'); ?></label>
                                <input type="password" class="form-control" name="user_password" id="review"
                                    placeholder="<?php echo $this->lang->line('password'); ?>" required="">
                            </div><input type="submit" class="btn btn-solid" value="<?php echo $this->lang->line('login'); ?>" />
                        <?=form_close()?>
                        <!-- </form> -->
                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <h3><?php echo $this->lang->line('new_customer'); ?></h3>
                    <div class="theme-card authentication-right">
                        <h6 class="title-font"><?php echo $this->lang->line('create_account'); ?></h6>
                        <p><?php echo $this->lang->line('create_account_text'); ?></p>
                            <a href="<?=base_url()?>front_end/auth/register" class="btn btn-solid"><h6 class="title-font"><?php echo $this->lang->line('create_account'); ?></h6></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->


    
    <?php $this->load->view('front/footer');?>

