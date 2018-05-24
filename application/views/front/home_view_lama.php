<section class="slider_post clearfix">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
                <!-- TradingView Widget BEGIN -->
                <!-- <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Quotes</span></a> by TradingView</div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
                    {
                        "symbols": [
                        {
                          "title": "S&P 500",
                          "proName": "INDEX:SPX"
                        },
                        {
                          "title": "Nasdaq 100",
                          "proName": "INDEX:IUXX"
                        },
                        {
                          "title": "EUR/USD",
                          "proName": "FX_IDC:EURUSD"
                        },
                        {
                          "title": "BTC/USD",
                          "proName": "BITFINEX:BTCUSD"
                        },
                        {
                          "title": "ETH/USD",
                          "proName": "BITFINEX:ETHUSD"
                        }
                      ],
                        "locale": "en"
                    }
                    </script>
                </div> -->
                <!-- TradingView Widget END -->
                <script type="text/javascript">
                baseUrl = "https://widgets.cryptocompare.com/";
                var scripts = document.getElementsByTagName("script");
                var embedder = scripts[ scripts.length - 1 ];
                var cccTheme = {"General":{"background":"#253137","float":"left","priceText":"#ebeef0"},"Menu":{"triggerBackground":"#465a65"}};
                (function (){
                var appName = encodeURIComponent(window.location.hostname);
                if(appName==""){appName="local";}
                var s = document.createElement("script");
                s.type = "text/javascript";
                s.async = true;
                var theUrl = baseUrl+'serve/v2/coin/header?fsyms=BTC,XMR,LTC,ETH&tsyms=EUR,CNY,GBP,USD';
                s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                embedder.parentNode.appendChild(s);
                })();
                </script>
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
                                        <?php foreach($listComment as $r) { ?>
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
                                                                <i class="fa fa-clock-o"></i><a href="#" class="zm-date"><?=date("l jS F Y", strtotime($r->comment_post));?></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <?php } ?>
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
                                <img class="img-responsive" src="<?=base_url('img/article_folder/thumbs/'.$r->article_image);?>" alt="Image Responsive">
                            </div>
                            <div class="col-md-6">
                                <div class="articel">
                                    <h3><a href="<?=site_url('article/post/'.$r->article_seo);?>"><?=$r->article_title;?></a></h3>
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
                                        <h5><a href="<?=site_url('article/post/'.$r->article_seo);?>"><?=word_limiter($r->article_title, 6);?></a></h5>
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
                        <a href="<?=site_url('article');?>" class="btn_large feature_stories text-center" data-load="Load More" data-loading="Loading..."> Load More</a>
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
                                    <img class="img-responsive" src="<?=base_url('img/article_folder/thumbs/'.$r->article_image);?>" alt="imamge responsive">
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
                                    <a href="<?=site_url('article/post/'.$r->article_seo);?>">
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
                                                        <a href="<?=site_url('article/post/'.$r->article_seo);?>"><?=word_limiter($r->article_title, 6);?></a>
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
                                        <h3><a href="<?=site_url('article/post/'.$r->article_seo);?>"><?=$r->article_title;?></a></h3>
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
                                        <a href="<?=site_url('article/post/'.$r->article_seo);?>">
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
                                            <h2>CRIPTOCOINS<br>CONVERTER</h2>
                                            <script type="text/javascript">crypt_calc_background_color = "#fccf04";crypt_calc_transperency = false;crypt_calc_font_family = "Sans-Serif";</script><script type="text/javascript" src="https://www.cryptonator.com/ui/js/widget/calc_widget.js"></script>
                                            <!-- <script type="text/javascript">
                                            baseUrl = "https://widgets.cryptocompare.com/";
                                            var scripts = document.getElementsByTagName("script");
                                            var embedder = scripts[ scripts.length - 1 ];
                                            var cccTheme = {"General":{"background":"#fccf04","borderWidth":"0px","borderColor":"#fccf04","headerText":"Crypto Coin Converter"},"Form":{"labelFrom":"","labelTo":""}};
                                            (function (){
                                            var appName = encodeURIComponent(window.location.hostname);
                                            if(appName==""){appName="local";}
                                            var s = document.createElement("script");
                                            s.type = "text/javascript";
                                            s.async = true;
                                            var theUrl = baseUrl+'serve/v1/coin/converter?fsym=BTC&tsyms=USD,EUR,CNY,GBP';
                                            s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                            embedder.parentNode.appendChild(s);
                                            })();
                                            </script> -->
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="ico_calender_mini wow fadeInUp">
                                    <div class="has-no-title widget ico_calendar_widget-2 widget_ico_calendar_widget">
                                        <iframe src="https://investingwidgets.com/top-cryptocurrencies?theme=darkTheme&roundedCorners=true" width="100%" height="600" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe><div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;">Powered by <a href="https://www.investing.com?utm_source=WMT&amp;utm_medium=referral&amp;utm_campaign=TOP_CRYPTOCURRENCIES&amp;utm_content=Footer%20Link" target="_blank" rel="nofollow">Investing.com</a></div>
                                        <!-- <span class="widget-title font-weight-bold">ICO CALENDAR</span> -->
                                        <!-- <div class="ico-widget divider">
                                            <div class="col-md-12">
                                                <div class="row">
                                                     <iframe src="https://investingwidgets.com/ico-calendar?theme=darkTheme" width="100%" height="500px" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe><div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;">Powered by <a href="https://www.investing.com?utm_source=WMT&amp;utm_medium=referral&amp;utm_campaign=ICO_CALENDAR&amp;utm_content=Footer%20Link" target="_blank" rel="nofollow">Investing.com</a></div>   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="view_all text-center">
                                            <a href="<?=site_url('ico-calendar');?>" class="btn_large view_all text-center" data-load="Load More" data-loading="Loading..."> View all ICO</a>
                                        </div> -->
                                    </div>
                                </div>

                                <!-- <div class="sidebar sidebar-right  wow fadeInUp">
                                    <div class="subscribe-me text-center">
                                        <h5>Subscribe to our mailing list to receives daily updates direct to your inbox!</h5>
                                        <form method="post" id="formSubscribe" name="subscribe-form">
                                        <div class="input-group">
                                            <input placeholder="Enter your email" name="email_subs" id="email_subs" type="text" autocomplete="off" required>
                                            <button type="submit" name="subscribe">sign up</button>
                                            <p class="note">*we hate spam as much as you do</p>
                                        </div>
                                        </form>
                                    </div>
                                </div> -->

                                <div class="science wow fadeInRight">
                                    <div class="science-title">
                                        <h5 class=" header-color inline-block uppercase">Science</h5>
                                    </div>
                                    <hr>
                                    <?php 
                                    $no = 1;
                                    foreach($listScience as $r) {
                                        if ($no == 1) {
                                    ?>
                                    <div class="post-thumb">
                                        <embed src="https://www.youtube.com/embed/<?=$r->science_url;?>" width="100%">
                                    </div>
                                    <div class="articel">
                                        <h4><?=$r->science_title;?></h4>
                                        <div class="zm-post-meta">
                                            <ul>
                                                <li class="s-meta">
                                                    <i class="fa fa-clock-o"></i><a href="#" class="zm-date"><?=date("l jS F Y", strtotime($r->science_post));?></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php } ?>

                                    <?php if (count($listScience) > 1) { ?>
                                    <div class="post-block-science post-float clearfix">
                                        <?php 
                                        if ($no > 1) {
                                        ?>
                                        <div class="post-thumb">
                                            <embed src="https://www.youtube.com/embed/<?=$r->science_url;?>" width="100%">
                                        </div>
                                        <div class="post-content">
                                            <h5 class="post-title-title-small">
                                                <a href="#"><?=$r->science_title;?></a>
                                            </h5>
                                            <div class="zm-post-meta">
                                                <ul>
                                                    <li class="s-meta">
                                                        <i class="fa fa-clock-o"></i><a href="#" class="zm-date"><?=date("l jS F Y", strtotime($r->science_post));?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <?php 
                                        }
                                        $no++;
                                    } 
                                    ?>
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
                                                <a href="<?=site_url('article/post/'.$r->article_seo);?>"><?=$r->article_title;?></a>
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
                                            <h4><a href="<?=site_url('article/post/'.$r->article_seo);?>"><?=$r->article_title;?></a></h4>
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