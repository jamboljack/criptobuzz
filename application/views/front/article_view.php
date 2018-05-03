<div class="content_wraper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 wow FadeinDown ">
                <div class="content-blog wow fadeInDown ">
                    <div class="jeg_breadcrumbs jeg_breadcrumb_container"> 
                        <div id="breadcrumbs">
                            <span> <a href="<?=base_url();?>">Home</a></span>
                            <i class="fa fa-angle-right"></i>
                            <span><a href="<?=site_url('category/'.$detail->maincategory_seo);?>"><?=ucwords(strtolower($detail->maincategory_name));?></a></span>
                            <i class="fa fa-angle-right"></i>
                            <span><a href="<?=site_url('category/'.$detail->maincategory_seo.'/'.$detail->subcategory_seo.'/'.$detail->category_seo);?>"><?=ucwords(strtolower($detail->category_name));?></a></span>
                        </div>
                    </div>
                
                    <div class="entry-header">
                        <h1 class="jeg_post_title"><?=$detail->article_title;?></h1>
                        <div class="jeg_meta_container">
                            <div class="jeg_post_meta jeg_post_meta_1">
                                <div class="meta_left"> 
                                    <div class="jeg_meta_text"><span>by</span> <a href="#"><?=ucwords(strtolower($detail->user_username));?></a></div> 
                                    <div class="jeg_meta_date"> <a href="#"><?=date("l jS F Y", strtotime($detail->article_post));?></a></div>
                                    <!-- <div class="jeg_meta_category"> 
                                        <span class="meta_text">in </span>
                                        <a href="#" rel="category tag">Featured</a>,
                                        <a href="#" rel="category tag">News</a>, 
                                        <a href="#" rel="category tag">Bitcoins</a>
                                    </div>  -->
                                </div> 
                                <?php
                                // Comment
                                $this->db->where('article_id', $detail->article_id);
                                $this->db->from('cripto_comment');
                                $komentar = $this->db->count_all_results();
                                ?>
                                <div class="meta_right"> 
                                    <div class="jeg_meta_comment">
                                        <a href="#"><i class="fa fa-comment-o"></i><?=$komentar;?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="jeg_featured featured_image">
                        <a href="#">
                            <img class="img-responsive" src="<?=base_url('img/article_folder/'.$detail->article_image);?>"  alt="Responsive Image">
                        </a>
                    </div>
                    <?php
                    $linkurl     = site_url('article/post/'.$detail->article_seo);
                    ?>
                    <div class="jeg_share_top_container">
                        <div class="jeg_share_button clearfix">
                            <div class="jeg_share_stats">
                                <div class="jeg_share_count">
                                    <div class="counts" id="jmlsharefb"></div>
                                    <span class="sharetext">shares</span>
                                </div>
                                <div class="jeg_views_count">
                                    <div class="counts"><?=$detail->article_read;?></div>
                                    <span class="sharetext">views</span>
                                </div>
                            </div>
                            <div class="jeg_sharelist">
                                <a href="javascript:void(0);" onclick="popUp=window.open('http://www.facebook.com/sharer.php?u=<?=$linkurl;?>','popupwindow','scrollbars=yes,width=800,height=400');popUp.focus();return false" class="jeg_btn-facebook expanded">
                                    <i class="fa fa-facebook-square"></i>
                                    <span>Share on Facebook</span>
                                </a>
                                <a href="javascript:void(0);" onclick="popUp=window.open('https://twitter.com/share?url=<?=$linkurl;?>&text=<?=$detail->article_title;?>','popupwindow','scrollbars=yes,width=800,height=400');popUp.focus();return false" class="jeg_btn-twitter expanded">
                                    <i class="fa fa-twitter"></i>
                                    <span>Share on Twitter</span>
                                </a>
                                <a href="javascript:void(0);" onclick="popUp=window.open('https://plus.google.com/share?url=<?=$linkurl;?>','popupwindow','scrollbars=yes,width=800,height=400');popUp.focus();return false" class="jeg_btn-google-plus">
                                    <i class="fa fa-google-plus "></i>
                                </a>
                            </div>
                        </div>
                        <div class="conten-inner">
                            <?=$detail->article_desc;?>
                            <div class="jeg_post_tags">
                                <span>Tags :</span>
                                <?php
                                $str    = trim($detail->article_tags);
                                $tags   = explode(",", $str);
                                for ($i = 0; $i < count($tags); $i++) {
                                    echo '<a href="'.site_url('tags/'.$tags[$i]).'" rel="tag">'.$tags[$i].'</a>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>   

                <div class="jnews_author_box_container wow fadeInDown">
                    <div class="jeg_authorbox">
                        <div class="jeg_author_image">
                            <?php 
                            if (!empty($editor->user_avatar)) {
                                $avatar = base_url('img/icon/'.$editor->user_avatar);
                            } else {
                                $avatar = base_url('img/no-profil.png');
                            }
                            ?>
                            <img src="<?=$avatar;?>" alt="<?=$editor->user_name;?>" >
                        </div>
                        <div class="jeg_author_content">
                            <h3 class="jeg_author_name">
                                <a href="#"><?=$editor->user_name;?></a>
                            </h3>
                            <p class="jeg_author_desc"><?=$editor->user_desc;?></p>
                            <!-- <div class="jeg_author_socials">
                                <a href="#" rel="nofollow" class="url">
                                    <i class="fa fa-globe"></i>
                                </a>
                                <a href="#" rel="nofollow" class="facebook">
                                    <i class="fa fa-facebook-official"></i>
                                </a>
                                <a href="#" rel="nofollow" class="twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" rel="nofollow" class="googleplus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a href="#" rel="nofollow" class="dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                                <a href="#" rel="nofollow" class="instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
                
                <div class="section-maybe ">
                    <div class="heade  wow FadeinLeft">
                        <h5 class=" header-color inline-block capitalize">you may also like this </h5>
                    </div>
                    <hr>
                    <div class="row">
                        <?php 
                        foreach($listOther as $r) {
                        ?>
                        <div class="col-md-4 ">
                            <div class="post_blog_single wow FadeinLeft">
                                <?php if (!empty($r->category_name)) { ?>
                                <a class="post_category" href="<?=site_url('category/'.$r->maincategory_seo.'/'.$r->category_seo);?>"><?=ucwords(strtolower($r->category_name));?></a>
                                <?php } ?>
                                <img class="img-responsive" src="<?=base_url('img/article_folder/thumbs/'.$r->article_image);?>" alt="Image Responsive">
                                <div class="articel">
                                    <h5><a href="<?=site_url('article/post/'.$r->article_seo);?>"><?=word_limiter($r->article_title, 6);?></a></h5>
                                    <div class="zm-post-meta">
                                        <ul>
                                            <li class="s-meta">
                                                <i class="fa fa-clock-o"></i>
                                                <a href="#" class="zm-date"><?=date("l jS F Y", strtotime($r->article_post));?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="jnews_comment_container  ">
                    <div id="comments" class="jeg_comments">
                        <h3 class="comments-title"> Comments 
                            <span class="count"><?=$komentar;?></span>
                        </h3>
                        <div class="jeg_commentlist_container">
                            <ol class="commentlist">
                                <?php foreach($listComment as $r) { ?>
                                <li class="comment even thread-even depth-1 parent" id="comment-22">
                                    <div id="div-comment-22" class="comment-body">
                                        <div class="comment-author vcard">
                                            <?php 
                                            if (!empty($r->user_avatar)) {
                                                $avatar = base_url('img/icon/'.$r->user_avatar);
                                            } else {
                                                $avatar = base_url('img/no-profil.png');
                                            }
                                            ?>
                                            <img src="<?=$avatar;?>" class="avatar avatar-55 photo" height="55" width="55" data-pin-no-hover="true">
                                            <cite class="fn">
                                                <a href="#" rel="external nofollow" class="url"><?=$r->user_username;?></a>
                                            </cite>
                                            <span class="says">says :</span>
                                        </div>
                                        <div class="comment-meta commentmetadata">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="#"><?=date("l jS F Y", strtotime($r->comment_post));?></a>
                                        </div>
                                        <div class="comment-content">
                                            <p><?=$r->comment_desc;?></p>
                                        </div>
                                        <!-- <div class="reply">
                                            <a rel="nofollow" class="comment-reply-link" href="#" onclick="return addComment.moveForm( &quot;div-comment-22&quot;, &quot;22&quot;, &quot;respond&quot;, &quot;1439&quot; )" aria-label="Reply to Marie Daddario">Reply</a>
                                        </div> -->
                                    </div>
                                    <?php 
                                    if (!empty($r->comment_reply)) {
                                        if (!empty($r->avatar_reply)) {
                                            $avatar_admin = base_url('img/icon/'.$r->avatar_reply);
                                        } else {
                                            $avatar_admin = base_url('img/no-profil.png');
                                        }
                                    ?>
                                    <ul class="children">
                                        <li class="comment odd alt depth-2 parent" id="comment-64">
                                            <div id="div-comment-64" class="comment-body">
                                                <div class="comment-author vcard">
                                                    <img alt="" src="<?=$avatar_admin;?>" class="avatar avatar-55 photo"   width="100" data-pin-no-hover="true">
                                                    <cite class="fn">
                                                        <a href="#" rel="external nofollow" class="url"><?=$r->user_reply;?></a>
                                                    </cite>
                                                    <span class="says">says :</span>
                                                </div>
                                                <div class="comment-meta commentmetadata">
                                                    <i class="fa fa-clock-o"></i>
                                                    <a href="#"> 1 months ago </a>
                                                </div>
                                                <div class="comment-content">
                                                    <?=$r->comment_reply;?>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <?php } ?>
                                </li>
                                <?php } ?>
                            </ol>
                        </div>
                    </div>
                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">Leave a Comment</h3>
                        <?php if ($this->session->userdata('logged_in_member_cripto')) { ?>
                        <form method="post" id="commentForm" class="comment-form">
                            <p class="comment-notes">
                                <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                            </p>
                            <div class="form-message alert alert-danger" id="msgCommentFailed"></div>
                            <div class="form-message alert alert-success" id="msgCommentSuccess"></div>
                            <p class="comment-form-comment">
                                <label for="comment">Comment</label>
                                <textarea id="comment" name="comment" cols="45" rows="8"></textarea>
                            </p>
                            <p class="comment-form-email">
                                <label for="author">Name</label>
                                <input id="namecomment" name="namecomment" type="text" value="<?=$this->session->userdata('username_member');?>" autocomplete="off" readonly>
                            </p>
                            <p class="comment-form-email">
                                <label for="email">Email</label>
                                <input id="emailcomment" name="emailcomment" type="text" value="<?=$this->session->userdata('email_member');?>" autocomplete="off" readonly>
                            </p>
                            <?=$this->recaptcha->render();?>
                            <br><br><br><br><br><br>
                            <p class="form-submit_blog">
                                <input name="submit_blog" type="submit" id="submit_blog" class="submit_blog" value="Post Comment">
                            </p>
                        </form>
                        <?php } else { ?>
                        <div>Please <a href="#" data-toggle="modal" data-target="#login-modal">Sign In</a> or <a href="#" data-toggle="modal" data-target="#register-modal">Sign Up</a></div>
                        <?php } ?>
                    </div>
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
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .error {
        color: #FF0000;
    }
</style>

<script>
$(function(){
    $.getJSON( "http://graph.facebook.com/<?=$linkurl;?>", function( data ) {
        $('#jmlsharefb').html(data.share.share_count);
    });
});
</script>

<script type="text/javascript" src="<?=base_url();?>backend/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $("#msgCommentSuccess").hide();
    $("#msgCommentFailed").hide();

    $("#commentForm").validate({
        rules: { 
            comment: { required: true, minlength: 5 },
            namecomment: { required: true, minlength: 5 },
            emailcomment: { required: true, minlength: 10, email: true }
        },
        messages: {
            comment: { 
                required:'*) Comment required', minlength:'Min. 5 Character'
            },
            namecomment: {
                required:'*) Name required', minlength:'Min. 5 Character'
            },
            emailcomment: { 
                required:'*) Email required', minlength:'Min. 10 Character', email:'Email Not Valid'
            }
        },
        submitHandler: function(form) {
            var article_id = <?=$detail->article_id;?>;
            dataString = $("#commentForm").serialize();
            $.ajax({
                url: "<?=site_url('article/savecomment/');?>"+article_id,
                type: "POST",
                dataType: 'json',
                data: dataString,
                success: function(data) {
                    if (data.status === 'success') {
                        $("#msgCommentSuccess").show();
                        $("#msgCommentFailed").hide();
                        $("#msgCommentSuccess").text(data.message);
                        location.reload();
                    } else {
                        $("#msgCommentFailed").show();
                        $("#msgCommentSuccess").hide();
                        $("#msgCommentFailed").text(data.message);
                    }
                },
                error: function() {
                    alert("Error, Connected to Server Failed.");
                }
            });
        }
    });
});
</script>