
 <?php $this->load->view('front/header');?>
    <!-- header end -->


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2><?php echo $this->lang->line('our_collection'); ?></h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">collection</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="collection section-b-space ratio_square ">
        <div class="container">
            <div class="row partition-collection">
                <?php 
                    foreach($categories as $cat)
                    {
                        echo '<div class="col-lg-3 col-md-6">
                                <div class="collection-block">
                                    <div><img src="'.base_url().'uploads/category/'.$cat["icon"].'" class="img-fluid blur-up lazyload bg-img"
                                            alt=""></div>
                                    <div class="collection-content">';
                                        foreach ($product_count as $value) {
                                            if($cat["id"] == $value["cat_id"])
                                            {
                                                echo '<h4>('.$value["count"].' '.$this->lang->line("product").')</h4>';
                                            }
                                        }
                                        if($this->session->userdata('site_lang') == "english")
                                        {
                                            echo '<h3>'.$cat["name"].'</h3>';
                                        }
                                        else
                                        {
                                            echo '<h3>'.$cat["name_ar"].'</h3>';
                                        }
                                        
                                        echo '<p>'.$cat["brief"].'</p><a href="'.base_url().'front_end/Category/products_of_cat/'.$cat["id"].'" class="btn btn-outline">'.$this->lang->line("shop_now").' !</a>
                                    </div>
                                </div>
                            </div>';
                    }
                ?>
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="collection-block">
                        <div><img src="../assets/images/collection/1.jpg" class="img-fluid blur-up lazyload bg-img"
                                alt=""></div>
                        <div class="collection-content">
                            <h4>(20 products)</h4>
                            <h3>fashion</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                                href="category-page.html" class="btn btn-outline">shop now !</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="collection-block">
                        <div><img src="../assets/images/collection/3.jpg" class="img-fluid blur-up lazyload bg-img"
                                alt=""></div>
                        <div class="collection-content">
                            <h4>(20 products)</h4>
                            <h3>fashion</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                                href="category-page.html" class="btn btn-outline">shop now !</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="collection-block">
                        <div><img src="../assets/images/collection/5.jpg" class="img-fluid blur-up lazyload bg-img"
                                alt=""></div>
                        <div class="collection-content">
                            <h4>(20 products)</h4>
                            <h3>fashion</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                                href="category-page.html" class="btn btn-outline">shop now !</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="collection-block">
                        <div><img src="../assets/images/collection/6.jpg" class="img-fluid blur-up lazyload bg-img"
                                alt=""></div>
                        <div class="collection-content">
                            <h4>(20 products)</h4>
                            <h3>fashion</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                                href="category-page.html" class="btn btn-outline">shop now !</a>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- <div class="row partition-collection section-t-space">
                <div class="col-lg-3 col-md-6">
                    <div class="collection-block">
                        <div><img src="../assets/images/collection/7.jpg" class="img-fluid blur-up lazyload bg-img"
                                alt=""></div>
                        <div class="collection-content">
                            <h4>(20 products)</h4>
                            <h3>fashion</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                                href="category-page.html" class="btn btn-outline">shop now !</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="collection-block">
                        <div><img src="../assets/images/collection/8.jpg" class="img-fluid blur-up lazyload bg-img"
                                alt=""></div>
                        <div class="collection-content">
                            <h4>(20 products)</h4>
                            <h3>fashion</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                                href="category-page.html" class="btn btn-outline">shop now !</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="collection-block">
                        <div><img src="../assets/images/collection/9.jpg" class="img-fluid blur-up lazyload bg-img"
                                alt=""></div>
                        <div class="collection-content">
                            <h4>(20 products)</h4>
                            <h3>fashion</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                                href="category-page.html" class="btn btn-outline">shop now !</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="collection-block">
                        <div><img src="../assets/images/collection/11.jpg" class="img-fluid blur-up lazyload bg-img"
                                alt=""></div>
                        <div class="collection-content">
                            <h4>(20 products)</h4>
                            <h3>fashion</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry....</p><a
                                href="category-page.html" class="btn btn-outline">shop now !</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!--Section ends-->

    <?php $this->load->view('front/footer');?>

    