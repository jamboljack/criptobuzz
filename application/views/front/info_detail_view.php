<div class="criptobuzz-content-block">
    <div class="container">
        <div class="row  ">
            <div class="col-xs-12 col-sm-8 wow fadeInDown">
                <div class="content-blog wow fadeInDown ">
                    <div class="jeg_breadcrumbs jeg_breadcrumb_container"> 
                        <div id="breadcrumbs">
                            <span> <a href="<?=base_url();?>">Home</a></span>
                            <i class="fa fa-angle-right"></i>
                            <span><a href="<?=site_url('info');?>">Blockchain 101</a></span>
                            <i class="fa fa-angle-right"></i>
                            <span><a href="<?=site_url('info/'.$detail->information_seo);?>"><?=$detail->information_title;?></a></span>
                        </div>
                    </div>

                    <div class="entry-header">
                        <h1 class="jeg_post_title"><?=$detail->information_title;?></h1>
                        <h2 class="jeg_post_subtitle"><?=$detail->information_subtitle;?></h2>
                    </div> 
                    <?php
                    $linkurl     = site_url('info/'.$detail->information_seo);
                    ?>
                    <div class="jeg_share_top_container">
                        <div class="jeg_share_button clearfix">
                            <div class="jeg_share_stats">
                                <div class="jeg_share_count">
                                    <div class="counts" id="jmlsharefb"></div>
                                    <span class="sharetext">shares</span>
                                </div>
                                <div class="jeg_views_count">
                                    <div class="counts"><?=$detail->information_read;?></div>
                                    <span class="sharetext">views</span>
                                </div>
                            </div>
                            <div class="jeg_sharelist">
                                <a href="javascript:void(0);" onclick="popUp=window.open('http://www.facebook.com/sharer.php?u=<?=$linkurl;?>','popupwindow','scrollbars=yes,width=800,height=400');popUp.focus();return false" class="jeg_btn-facebook expanded">
                                    <i class="fa fa-facebook-square"></i>
                                    <span>Share on Facebook</span>
                                </a>
                                <a href="javascript:void(0);" onclick="popUp=window.open('https://twitter.com/share?url=<?=$linkurl;?>&text=<?=$detail->information_title;?>','popupwindow','scrollbars=yes,width=800,height=400');popUp.focus();return false" class="jeg_btn-twitter expanded">
                                    <i class="fa fa-twitter"></i>
                                    <span>Share on Twitter</span>
                                </a>
                                <a href="javascript:void(0);" onclick="popUp=window.open('https://plus.google.com/share?url=<?=$linkurl;?>','popupwindow','scrollbars=yes,width=800,height=400');popUp.focus();return false" class="jeg_btn-google-plus">
                                    <i class="fa fa-google-plus "></i>
                                </a>
                            </div>
                        </div>

                        <div class="conten-inner">
                            <?=$detail->information_desc;?>
                        </div>
                    </div>
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

                <?php
                $SideBanner = $this->menu_m->select_banner_side()->row();
                if (!empty($SideBanner->banner_image)) {
                    ?>
                <section class="ads wow fadeInRight">
                    <div class="container">
                        <div class="row">
                            <a href="<?=$SideBanner->banner_url;?>" target="_blank">
                                <img src="<?=base_url('img/banner_folder/' . $SideBanner->banner_image);?>" alt="ads">
                            </a>
                        </div>
                    </div>
                </section>
                <?php }?>

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

<script>
$(function(){
    $.getJSON( "http://graph.facebook.com/<?=$linkurl;?>", function( data ) {
        $('#jmlsharefb').html(data.share.share_count);
    });
});
</script>