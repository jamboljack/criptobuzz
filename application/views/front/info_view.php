<div class="criptobuzz-content-block">
    <div class="container">
        <div class="row  ">
            <div class="col-xs-12 col-sm-8 wow fadeInDown">
                <div class="jeg_breadcrumbs jeg_breadcrumb_container"> 
                    <div id="breadcrumbs">
                        <span> <a href="<?=base_url();?>">Home</a></span>
                        <i class="fa fa-angle-right"></i>
                        <span><a href="<?=site_url('info');?>">Blockchain 101 </a></span>
                    </div>
                </div>
                <div class="entry-header">
                    <?=$detail->information_desc;?>
                </div>
                <hr>

                <h5>GUIDE INDEX</h5>
                <div class="single-content">
                    <ul class="guide-index">
                        <?php
                        foreach($listInfo as $r) {
                        ?>
                        <li>
                            <a href="<?=site_url('info/'.$r->information_seo);?>">
                                <span class="icon-holder">
                                <span class="icon-detailed icon-detailed-question"><i class="<?=$r->information_icon;?>"></i> </span>
                                </span>
                                <span class="details">
                                    <h5><?=$r->information_title;?></h5>
                                    <p><?=$r->information_subtitle;?></p>
                                </span>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div> 
            
            <div class="col-sm-4 sidebar-offcanvas">
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