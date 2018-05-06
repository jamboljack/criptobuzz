<?php
$meta           = $this->menu_m->select_meta()->row();
$contact        = $this->menu_m->select_contact()->row();
$listCategory   = $this->menu_m->select_category()->result();
?>
<footer>
    <div class="container  wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <img src="<?=base_url('img/' . $contact->contact_image);?>" alt="">
                        <p class="foot"><?=$contact->contact_desc;?></p>

                        <p class="left">Follow US :</p>
                        <div style="float:left;">
                            <ul class="footer_social_links">
                                <?php
                                $listSocial = $this->menu_m->select_social()->result();
                                foreach ($listSocial as $r) {
                                ?>
                                <li>
                                    <a href="<?=$r->social_url;?>" target="_blank"><span><i class="fa fa-<?=$r->social_class;?>"></i></span></a>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-md-3 col-sm-6">
                        <div class="wiget">
                            <h3>CATEGORY</h3>
                            <div class="col-md-6">
                                <div class="row">
                                    <ul class="menu">
                                        <?php 
                                        $no = 1;
                                        foreach($listCategory as $r) {
                                        ?>
                                        <li><?=ucwords(strtolower($r->category_name));?></li>
                                        <?php 
                                            if ($no%5 == 0) {
                                                echo '</ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <ul class="menu">';
                                            }
                                            $no++;
                                        } 
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-4">
                        <div class="newsletter">
                            <h3>NEWSLETTER</h3>
                            <p>Subscribe to our mailing list to receives daily updates direct to your inbox!</p>
                            <div class="newsletter">
                                <form method="post" id="formSubscribe">
                                    <input class="email_input" type="text" name="email_subs" id="email_subs" placeholder="Your Email Address" autocomplete="off" required>
                                    <input value="Sign Up" class="email_submit " type="submit">
                                </form>
                            </div>
                            <p class="litle">*we hate spam as much as you do </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="foter_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="copyright-area">
                            <p>Copyright <i class="icon-copyright"></i><a href="<?=base_url();?>"><?=$meta->meta_name;?></a> All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                        <div class="item-holder">
                            <div class="quick_links_holder">
                                <ul class="quick_links">
                                    <?php
                                    $listMenu = $this->menu_m->select_menu()->result();
                                    foreach ($listMenu as $r) {
                                    ?>
                                    <li><a href="<?=site_url('menu/' . $r->menu_seo);?>"><?=$r->menu_title;?></a></li>
                                    <?php }?>
                                    <li><a href="<?=site_url('contact');?>">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="<?=base_url();?>backend/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $("#formSubscribe").validate({
        rules: { 
            email_subs: { 
                required: true, minlength: 5, email: true,
                remote: {
                    url: "<?=site_url('login/check_subs_exists');?>",
                    type: "post",
                    data: {
                        email_subs: function() { 
                        return $("#email_subs").val(); 
                        }
                    }
                } 
            }
        },
        messages: {
            email_subs: {
                required:'*) Email required', minlength:'Min. 5 Character', email:'Email not Valid',
                remote:'Email is already subscribed'
            }
        },
        submitHandler: function(form) {
            dataString = $("#formSubscribe").serialize();
            $.ajax({
                url: "<?=site_url('login/savesubscribe');?>",
                type: "POST",
                data: dataString,
                success: function(data) {
                    $("#email_subs").val('');
                    alert("Success, Now You are Subscribed.");
                },
                error: function() {
                    alert("Error, Process Login Failed.");
                }
            });
        }
    });
});
</script>