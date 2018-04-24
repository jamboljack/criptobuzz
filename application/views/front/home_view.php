<section class="slider_post clearfix">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
                <div class="slider_tiger wow fadeInLeft">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><!-- US --></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"><!-- ASIA --></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"><!-- EU --></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"><!-- GOLD --></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"><!-- OIL --></li>
                            <li data-target="#carousel-example-generic" data-slide-to="5"><!-- BONDS --></li>
                            <li data-target="#carousel-example-generic" data-slide-to="6"><!-- EU FX --></li>
                            <li data-target="#carousel-example-generic" data-slide-to="7"><!-- ASIA FX --></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/triger/us.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>US</h5>
                                        <p class="triger">
                                        Nasdaq closes at record, Dow rallies more than 400 points after jobs report</p>
                                    </div>
                                </div>
                            </div><!--  end item active -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/triger/asia.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>ASIA</h5>
                                        <p class="triger" > Asian shares gain after Trump accepts invitation to meet North Korea's Kim; yen falls</p>
                                    </div>
                                </div>
                            </div> <!-- end item -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/triger/eu.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>EU</h5>
                                        <p class="triger">Europe finishes in the black after US adds 313K jobs in February</p>
                                    </div>
                                </div>
                            </div><!-- end item -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/triger/gold.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>GOLD</h5>
                                        <p class="triger">Gold recovers from drop after strong US jobs report</p>
                                    </div>
                                </div>
                            </div> <!-- end item -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/triger/oil.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>OIL</h5>
                                        <p class="triger">US oil closes 3.2% higher amid broad market optimism</p>
                                    </div>
                                </div>
                            </div><!-- end item -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/triger/bonds.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>BONDS</h5>
                                        <p class="triger">2-year yield climbs back to 9-year high after strong jobs report</p>
                                    </div>
                                </div>
                            </div><!-- end item -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/triger/eu-fx.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>EU FX</h5>
                                        <p class="triger">Dollar steady on mixed US jobs data, yen falls after BOJ meeting</p>
                                    </div>
                                </div>
                            </div> <!-- end item -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/triger/asia-fx.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>ASIA FX</h5>
                                        <p class="triger">Dollar steady on mixed US jobs data, yen falls after BOJ meeting</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-8">
                <div class="slider-post-area-content wow fadeInLeft">
                    <ul class="slide-posts owl-carousel list-unstyled">
                        <?php foreach($listSlider as $r) { ?>
                        <li class="item">
                            <img src="<?=base_url('img/article_folder/'.$r->article_image);?>" alt="img">
                            <div class="caraousel-caption">
                                <span><?=ucwords(strtolower($r->maincategory_name));?></span>
                                <a href="<?=site_url('article/post/'.$r->article_seo);?>">
                                <h2><?=$r->article_title;?></h2>
                                </a>
                                <p class="meta">by <?=ucwords(strtolower($r->user_username)).', '.date("l jS F Y", strtotime($r->article_post));?></p>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                    <ul class="posts-thumbnails-wrapper list-unstyled">
                        <?php foreach($listSlider as $r) { ?>
                        <li class="post-thumbnail">
                            <a href="#"><img src="<?=base_url('img/article_folder/thumbs/'.$r->article_image);?>" alt="img"></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hidden-md">
                <div class=" top wow fadeInRight">
                    <aside class="zm-post-lay-e-area">
                        <div class="row mb-30">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="zm-posts-tab-menu">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#latest_posts">Latest</a></li>
                                        <li><a data-toggle="tab" href="#comments_posts">Comments</a></li>
                                        <li><a data-toggle="tab" href="#trending_posts">Trending</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="zm-posts-tab-content tab-content">
                                    <div id="latest_posts" class="zm-posts tab-pane fade in active">
                                        <?php foreach($listLatest as $r) { ?>
                                        <article class="zm-post-lay-e zm-single-post clearfix">
                                            <div class="zm-post-thumb f-left">
                                                <a href="<?=site_url('article/post/'.$r->article_seo);?>">
                                                    <img src="<?=base_url('img/article_folder/thumbs/'.$r->article_image);?>" alt="img">
                                                </a>
                                            </div>
                                            <div class="zm-post-dis f-right">
                                                <div class="zm-post-header">
                                                    <a href="<?=site_url('article/post/'.$r->article_seo);?>">
                                                    <h3 class="zm-post-title"><?=word_limiter($r->article_title, 7);?></h3>
                                                    </a>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta">
                                                                <i class="fa fa-clock-o"></i><a href="#" class="zm-date"><?=date("l jS F Y", strtotime($r->article_post));?></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <?php } ?>
                                    </div>
                                    
                                    <div id="comments_posts" class="zm-posts tab-pane fade">

                                        <article class="zm-post-lay-e zm-single-post clearfix">
                                            <div class="zm-post-thumb f-left">
                                                <a href="blog-single.html"><img src="assets/images/trend/trend2.jpg" alt="img"></a>
                                            </div>
                                            <div class="zm-post-dis f-right">
                                                <div class="zm-post-header">
                                                    <h3 class="zm-post-title"><a href="blog-single.html">Magna aliqua ut enim ad minim veniam quis nostrud.</a></h3>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta"><a href="#" class="zm-author"></a></li>
                                                            <li class="s-meta">
                                                                <i class="fa fa-clock-o"></i><a href="#" class="zm-date">April 18, 2016</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>

                                    </div>
                                    
                                    <div id="trending_posts" class="zm-posts tab-pane fade">
                                        <?php foreach($listTrend as $r) { ?>
                                        <article class="zm-post-lay-e zm-single-post clearfix">
                                            <div class="zm-post-thumb f-left">
                                                <a href="<?=site_url('article/post/'.$r->article_seo);?>">
                                                    <img src="<?=base_url('img/article_folder/thumbs/'.$r->article_image);?>" alt="img">
                                                </a>
                                            </div>
                                            <div class="zm-post-dis f-right">
                                                <div class="zm-post-header">
                                                    <a href="<?=site_url('article/post/'.$r->article_seo);?>">
                                                    <h3 class="zm-post-title"><?=word_limiter($r->article_title, 7);?></h3>
                                                    </a>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta">
                                                                <i class="fa fa-clock-o"></i><a href="#" class="zm-date"><?=date("l jS F Y", strtotime($r->article_post));?></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <?php } ?>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
</section>

<div class="content_wraper">
    <div class="container">
        <div class="row">
            <div class="col-md-8 content">
                
                <div class="feature_stories clearfix wow fadeInDown">
                    <div class="section-title">
                        <h5 class=" header-color inline-block uppercase">Featured <span>Stories</span></h5>
                    </div>
                    <hr>
                    <?php 
                    $no = 1;
                    foreach($listFeature as $r) {
                        if ($no == 1) {
                    ?>
                    <div class="big-post">
                        <div class="row">
                            <div class="col-md-6 ">
                                <a class="post_category" href="<?=site_url('category/'.$r->maincategory_seo);?>"><?=ucwords(strtolower($r->maincategory_name));?></a>
                                <img class="img-responsive" src="<?=base_url('img/article_folder/thumbs/'.$r->article_image);?>" alt="imamge responsive">
                            </div>
                            <div class="col-md-6">
                                <div class="articel">
                                    <h3><?=$r->article_title;?></h3>
                                    <div class="meta_post">
                                        <div class="meta_author">
                                            <span class="by">by</span> <a href="#"><?=$r->user_username;?></a>
                                        </div>
                                        <div class="meta_date">
                                            <a href="#"><i class="fa fa-clock-o"></i> <?=date("l jS F Y", strtotime($r->article_post));?></a>
                                        </div>
                                        <div class="jeg_meta_comment">
                                            <a href="#"><i class="fa fa-comment-o"></i> 0</a>
                                        </div>
                                    </div>
                                    <p><?=word_limiter(strip_tags($r->article_desc), 20);?></p>
                                    <a href="<?=site_url('article/post/'.$r->article_seo);?>">
                                        <p class="btn_feature_stories">read more</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        }
                        $no++;
                    }
                    ?>
                    
                    <div class="litle_post wow FadeInUp">
                        <div class="row">
                            <?php 
                            $no = 1;
                            foreach($listFeature as $r) {
                                if ($no > 1) {
                            ?>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="post">
                                    <a class="post_category_litle" href="<?=site_url('category/'.$r->maincategory_seo);?>"><?=ucwords(strtolower($r->maincategory_name));?></a>
                                    <img class="img-responsive" src="<?=base_url('img/article_folder/thumbs/'.$r->article_image);?>" alt=" imamge responsive">
                                    <div class="articel">
                                        <a href="<?=site_url('article/post/'.$r->article_seo);?>">
                                            <h5><?=word_limiter($r->article_title, 6);?></h5>
                                        </a>
                                        <div class="zm-post-meta-feature">
                                            <ul>
                                                <li class="s-meta">
                                                    <i class="fa fa-clock-o"></i><a href="#" class="zm-date"><?=date("l jS F Y", strtotime($r->article_post));?></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                    }
                                $no++;
                            } ?>
                        </div>
                    </div>

                    <div class="loadmore wow fadeInUp ">
                        <a href="<?=site_url('latepost');?>" class="btn_large feature_stories text-center" data-load="Load More" data-loading="Loading..."> Load More</a>
                    </div>
                </div>
                
                <?php 
                foreach($listMain as $r) {
                    $maincategory_id = $r->maincategory_id;
                    $listArticleMain = $this->home_m->select_article_main($maincategory_id)->result();
                ?>
                <div class="data_research clearfix wow fadeInDown">
                    <div class="section-title">
                        <h5 class=" header-color inline-block uppercase"><?=$r->maincategory_name;?></h5>
                    </div>
                    <hr>
                    <div class="post_articel_reserch">
                        <div class="row">
                            <?php
                            $no = 1;
                            foreach($listArticleMain as $r) {
                                if ($no == 1) {
                            ?>
                            <div class="col-md-6 col-sm-6">
                                <div class="articel_reserch">
                                    <a class="post_category_bottom" href="<?=site_url('category/'.$r->maincategory_seo);?>"><?=ucwords(strtolower($r->maincategory_name));?></a>
                                    <img class="img-responsive" src="<?=base_url('img/article_folder/thumbs/'.$r->article_image);?>" alt=" imamge responsive">
                                    <div class="most_popular-title">
                                        <a href="<?=site_url('article/post/'.$r->article_seo);?>">
                                        <h3><?=$r->article_title;?></h3>
                                        </a>
                                    </div>
                                    <div class="meta_post">
                                        <div class="meta_author">
                                            <span class="by">by</span> <a href="#"><?=$r->user_username;?></a>
                                        </div>
                                        <div class="meta_date">
                                            <a href="#"><i class="fa fa-clock-o"></i> <?=date("l jS F Y", strtotime($r->article_post));?></a>
                                        </div>
                                        <div class="jeg_meta_comment">
                                            <a href="#"><i class="fa fa-comment-o"></i> 5</a>
                                        </div>
                                    </div>
                                    <p><?=word_limiter(strip_tags($r->article_desc), 20);?></p>
                                    <a href="<?=site_url('article/post/id-'.$r->article_id.'/'.$r->article_seo);?>">
                                        <p class="btn_feature_stories">read more</p>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>

                            <div class="col-md-6 col-sm-6">
                                <div class="list-post-block_research">
                                    <ul class="list-post clearfix">
                                        <?php 
                                        if ($no > 1) {
                                        ?>
                                        <li class="clearfix">
                                            <div class="post-block-style post-float clearfix">
                                                <div class="post-thumb">
                                                    <a href="#">
                                                        <img class="img-responsive" src="<?=base_url('img/article_folder/thumbs/'.$r->article_image);?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content">
                                                    <h5 class="post-title title-small">
                                                        <a href="<?=site_url('article/post/id-'.$r->article_id.'/'.$r->article_seo);?>"><?=word_limiter($r->article_title, 6);?></a>
                                                    </h5>
                                                    <div class="zm-post-meta">
                                                        <ul>
                                                            <li class="s-meta">
                                                                <a href="#" class="zm-author"></a>
                                                            </li>
                                                            <li class="s-meta">
                                                                <i class="fa fa-clock-o"></i><a href="#" class="zm-date"><?=date("l jS F Y", strtotime($r->article_post));?></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <?php 
                                $no++; 
                            } ?>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <div class="latest_post clearfix wow fadeInDown">
                    <div class="section-title">
                        <h5 class=" header-color inline-block uppercase">latest post</h5>
                    </div>
                    <hr>
                    
                    <div class="articel_lates_post">
                        <div class="row">
                            <?php 
                            foreach ($listArticle as $r) {
                            ?>
                            <div class="post latest_post">
                                <div class="col-md-6 col-sm-6">
                                    <a class="post_category" href="<?=site_url('category/'.$r->maincategory_seo);?>"><?=ucwords(strtolower($r->maincategory_name));?></a>
                                    <img class="img-responsive" src="<?=base_url('img/article_folder/thumbs/'.$r->article_image);?>" alt="image responsive">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="articel">
                                        <h3><a href="<?=site_url('article/post/id-'.$r->article_id.'/'.$r->article_seo);?>"><?=$r->article_title;?></a></h3>
                                        <div class="meta_post">
                                            <div class="meta_author">
                                                <span class="by">by</span> <a href="#"><?=$r->user_username;?></a>
                                            </div>
                                            <div class="meta_date">
                                                <a href=""><i class="fa fa-clock-o"></i> <?=date("l jS F Y", strtotime($r->article_post));?></a>
                                            </div>
                                            <div class="jeg_meta_comment">
                                                <a href=""><i class="fa fa-comment-o"></i> 0</a>
                                            </div>
                                        </div>
                                        <p><?=word_limiter(strip_tags($r->article_desc), 15);?></p>
                                        <a href="<?=site_url('article/post/id-'.$r->article_id.'/'.$r->article_seo);?>">
                                            <p class="btn_feature_stories">read more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-4 sidebars">
                <div class="sidebar_homepage_edit">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="coin-conver wow fadeInUp">
                                    <div class="exch_section">
                                        <div class="section-title text-center">
                                            <h2>CRIPTOCOINS<br> CONVERTER</h2>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="ico_calender_mini wow fadeInUp">
                                    <div class="has-no-title widget ico_calendar_widget-2 widget_ico_calendar_widget">
                                        <span class="widget-title font-weight-bold">ICO CALENDAR</span>
                                        <div class="ico-widget divider">
                                            <div class="col-md-4">
                                                <div class="row">
                                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="view_all text-center">
                                            <a href="<?=site_url('ico');?>" class="btn_large view_all text-center" data-load="Load More" data-loading="Loading..."> View all ICOs</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar sidebar-right  wow fadeInUp">
                                    <div class="subscribe-me text-center">
                                        <h5>Subscribe to our mailing list to receives daily updates direct to your inbox!</h5>
                                        <form action="#" method="post" id="popup-subscribe-form" name="subscribe-form">
                                        <div class="input-group">
                                            <input placeholder="Enter your email" name="email" type="text">
                                            <button type="submit" name="subscribe">sign up</button>
                                            <p class="note">*we hate spam as much as you do</p>
                                        </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="Stay_conected wow fadeInUp">
                                    <div class="Stay_conected_title ">
                                        <h5 class=" header-color inline-block uppercase">Stay Conected</h5>
                                        <hr>
                                        <div class="social-media-inner">
                                            <ul class="social-media clearfix">
                                                <li>
                                                    <a href="#" class="fb">
                                                        <i class="fa fa-facebook"></i>
                                                        <div>887</div>
                                                        <p>Fans</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="twitter">
                                                        <i class="fa fa-twitter"></i>
                                                        <div>327</div>
                                                        <p>Followers</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="g_plus">
                                                        <i class="fa fa-google-plus"></i>
                                                        <div>15.4 k</div>
                                                        <p>Followers</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="recomended wow fadeInDown">
                                    <div class="recomended_title">
                                        <h5 class=" header-color inline-block uppercase">recomended</h5>
                                    </div>
                                    <hr>
                                    <?php foreach($listRecomend as $r) { ?>
                                    <div class="post-block-science post-float clearfix">
                                        <div class="post-thumb">
                                            <img class="img-responsive" src="<?=base_url('img/article_folder/thumbs/'.$r->article_image);?>" alt="">
                                        </div>
                                        <div class="post-content">
                                            <h5 class="post-title-title-small">
                                                <a href="<?=site_url('article/post/id-'.$r->article_id.'/'.$r->article_seo);?>"><?=$r->article_title;?></a>
                                            </h5>
                                            <div class="zm-post-meta">
                                                <ul>
                                                    <li class="s-meta">
                                                        <i class="fa fa-clock-o"></i><a href="#" class="zm-date"><?=date("l jS F Y", strtotime($r->article_post));?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>

                                <div class="most_Popular wow fadeInDown">
                                    <div class="most_popular-title">
                                        <h5 class=" header-color inline-block uppercase">Most Popular</h5>
                                    </div>
                                    <hr>
                                    <?php foreach($listMost as $r) { ?>
                                    <div class="post_popular">
                                        <div class="post-thumb">
                                            <a class="post_category_bottom" href="<?=site_url('category/'.$r->maincategory_seo);?>"><?=ucwords(strtolower($r->maincategory_name));?></a>
                                            <img class="img-responsive" src="<?=base_url('img/article_folder/thumbs/'.$r->article_image);?>" alt="">
                                        </div>
                                        <div class="articel">
                                            <h4><a href="<?=site_url('article/post/id-'.$r->article_id.'/'.$r->article_seo);?>"><?=$r->article_title;?></a></h4>
                                            <div class="zm-post-meta">
                                                <ul>
                                                    <li class="s-meta">
                                                        <i class="fa fa-clock-o"></i><a href="#" class="zm-date"><?=date("l jS F Y", strtotime($r->article_post));?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>