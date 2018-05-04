<?php
$meta    = $this->menu_m->select_meta()->row();
$contact = $this->menu_m->select_contact()->row();
?>
<footer>
    <div class="container  wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-md-3 col-sm-6">
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
                    <div class="col-md-3 col-sm-6">
                        <div class="wiget">
                            <h3> BROWSE CATEGORY</h3>
                            <div class="col-md-6">
                                <div class="row">
                                    <ul class="menu">
                                        <li>Blocckchain</li>
                                        <li>Technology</li>
                                        <li>Markets</li>
                                        <li>Business</li>
                                        <li>Data & Research</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <ul class="menu">
                                        <li>Consesnsus</li>
                                        <li>Bitcon</li>
                                        <li>Etherum</li>
                                        <li>Altchoin</li>
                                        <li>Exchange Review</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="newsletter">
                            <h3>NEWSLETTER</h3>
                            <p>Subscribe to our mailing list to receives daily updates direct to your inbox!</p>
                            <div class="newsletter ">
                                <input class="email_input" type="search" placeholder=" Your Email Address">
                                <input name="Submit" value="sign up" class="email_submit " type="submit">
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