<div class="content_wraper">
    <div class="container">
        <div class="row">
            <div class="col-md-8 content">
                <div class="latest_post clearfix wow fadeInDown">
                    <div class="section-title">
                        <?php 
                        if (empty($detail->maincategory_name)) {
                            $title = $detail->category_name;
                        } elseif (empty($detail->category_name)) {
                            $title = $detail->maincategory_name;
                        }
                        ?>
                        <h5 class=" header-color inline-block uppercase"><?=$title;?></h5>
                    </div>
                    <hr>
                    
                    <div class="articel_lates_post">
                        <div class="row">
                            <?php 
                            foreach ($listArticle as $r) {
                                $article_id = $r->article_id;
                                // Comment
                                $this->db->where('article_id', $article_id);
                                $this->db->from('cripto_comment');
                                $komentar = $this->db->count_all_results();
                            ?>
                            <div class="post latest_post">
                                <div class="col-md-6 col-sm-6">
                                    <?php if (!empty($r->category_name)) { ?>
                                    <a class="post_category" href="<?=site_url('category/'.$r->maincategory_seo.'/'.$r->category_seo);?>"><?=ucwords(strtolower($r->category_name));?></a>
                                    <?php } ?>
                                    <img class="img-responsive" src="<?=base_url('img/article_folder/thumbs/'.$r->article_image);?>" alt="image responsive">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="articel">
                                        <h3><a href="<?=site_url('article/post/'.$r->article_seo);?>"><?=$r->article_title;?></a></h3>
                                        <div class="meta_post">
                                            <div class="meta_author">
                                                <span class="by">by</span> <a href="#"><?=ucwords(strtolower($r->user_username));?></a>
                                            </div>
                                            <div class="meta_date">
                                                <a href="#"><i class="fa fa-clock-o"></i><?=date("l jS F Y", strtotime($r->article_post));?></a>
                                            </div>
                                            <div class="jeg_meta_comment">
                                                <a href="#"><i class="fa fa-comment-o"></i><?=$komentar;?></a>
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
                    <?=$pages;?>
                </div>
            </div>

            <div class="col-md-4 sidebars">
                <div class="sidebar_homepage_edit">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
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