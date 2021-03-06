<?php
$contact = $this->menu_m->select_contact()->row();
?>
<section id="header-top-area wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="menu_top_left">
                    <ul>
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
            <div class="col-md-6 ">
                <div class="social-links clearfix">
                    <?php
                    $listSocial = $this->menu_m->select_social()->result();
                    foreach ($listSocial as $r) {
                    ?>
                    <a href="<?=$r->social_url;?>" target="_blank"><span class="fa fa-<?=$r->social_class;?>"></span></a>
                    <?php }?>
                    <?php if (!$this->session->userdata('logged_in_member_cripto')) { ?>
                    <a href="#" data-toggle="modal" data-target="#login-modal"><span><i class="fa fa-lock"></i></span>Sign In</a>
                    <a href="#" data-toggle="modal" data-target="#register-modal"><span><i class="fa fa-user"></i></span>Sign Up</a>
                    <?php } else { ?>
                    Welcome, <a href="<?=site_url('profil');?>"><?=$this->session->userdata('username_member');?></a>&nbsp
                    <a href="<?=site_url('login/logout');?>"><i class="fa fa-sign-out"></i>Sign Out</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="logo">
                    <a href="<?=base_url();?>">
                        <img src="<?=base_url('img/' . $contact->contact_image);?>" alt="logo">
                    </a>
                </div>
                <div class="responsive-menu-wrap"></div>
            </div>
            <div class="col-md-7">
                <nav  class="main-navigation float-right">
                    <ul id="menu" class="clearfix">
                        <li class="current dropdown"><a href="<?=site_url('info');?>">Blockchain 101</a>
                            <div class="sub-menu-wrap mega-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul>
                                            <?php
                                            $no       = 1;
                                            $listInfo = $this->menu_m->select_info()->result();
                                            $jmlInfo  = count($listInfo);
                                            foreach ($listInfo as $r) {
                                                if ($no == 1) {
                                            ?>
                                            <li><a href="<?=site_url('info');?>"><?=$r->information_title;?></a></li>
                                            <?php
                                                } else {
                                            ?>
                                            <li><a href="<?=site_url('info/' . $r->information_seo);?>"><?=$r->information_title;?></a></li>
                                            <?php
                                                }
                                            if ($no % 6 == 0) {
                                                    echo '</ul></div><div class="col-md-4"><ul>';
                                                }
                                                $no++;
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php
                        $listMain = $this->menu_m->select_maincategory()->result();
                        foreach ($listMain as $r) {
                            $maincategory_id = $r->maincategory_id;
                            $JmlSubMenu      = $this->menu_m->count_sub_category($maincategory_id)->row();
                            if ($JmlSubMenu->jml > 0) {
                        ?>
                        <li class="dropdown"><a href="<?=site_url('category/' . $r->maincategory_seo);?>"><?=$r->maincategory_name;?></a>
                            <div class="sub-menu-wrap mega-menu2">
                                <div class="row">
                                    <?php
                                    $listLevelZero = $this->menu_m->select_category_zero($maincategory_id)->result();
                                        // Level 0
                                        $jmlZero = count($listLevelZero);
                                        // Level 1
                                        $jmlOne = $this->menu_m->count_category_one($maincategory_id)->row();
                                        if ($jmlOne->jml > 0) {
                                            $column = (12 / $jmlZero);
                                            foreach ($listLevelZero as $r) {
                                                $category_head = $r->category_id;
                                    ?>
                                    <div class="col-md-<?=$column;?>">
                                        <ul>
                                            <li>
                                                <a href="<?=site_url('category/' . $r->maincategory_seo . '/' . $r->category_seo);?>"><?=ucwords(strtolower($r->category_name));?></a>
                                            </li>
                                            <?php
                                            if ($jmlOne->jml > 0) {
                                            $listLevelOne = $this->menu_m->select_category_one($category_head)->result();
                                            foreach ($listLevelOne as $r) {
                                            ?>
                                            <li>
                                                <a href="<?=site_url('category/' . $r->maincategory_seo . '/' . $r->subcategory_seo . '/' . $r->category_seo);?>"><?=ucwords(strtolower($r->category_name));?></a>
                                            </li>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <?php
                                        }
                                    } else {
                                    ?>
                                    <div class="col-md-6">
                                        <ul>
                                            <?php
                                            foreach ($listLevelZero as $r) {
                                            ?>
                                            <li>
                                                <a href="<?=site_url('category/' . $r->maincategory_seo . '/' . $r->category_seo);?>"><?=ucwords(strtolower($r->category_name));?></a>
                                            </li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </li>
                        <?php } else { ?>
                        <li class="#"><a href="<?=site_url('category/' . $r->maincategory_seo);?>"><?=$r->maincategory_name;?></a></li>
                        <?php } 
                        } 
                        ?>
                        <li class="#"><a href="<?=site_url('ico-calendar');?>">ICO CALENDAR</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-3 hidden-xs hidden-sm">
                <div class="search-column">
                    <form class="st_search_box" method="post" action="<?=site_url('search/lookdata');?>">
                        <div>
                            <input type="text" placeholder="Search.." name="search" value="<?=set_value('search');?>" autocomplete="off" required>
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$TopBanner = $this->menu_m->select_banner_top()->row();
if (!empty($TopBanner->banner_image)) {
    ?>
<section class="ads_area clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="<?=$TopBanner->banner_url;?>" target="_blank">
                    <img src="<?=base_url('img/banner_folder/' . $TopBanner->banner_image);?>" alt="ads">
                </a>
            </div>
        </div>
    </div>
</section>
<?php }?>
<!-- 
<section class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <script type="text/javascript">
                baseUrl = "https://widgets.cryptocompare.com/";
                var scripts = document.getElementsByTagName("script");
                var embedder = scripts[ scripts.length - 1 ];
                var cccTheme = {"General":{"background":"#253137","priceText":"#ebeef0"},"Menu":{"triggerBackground":"#465a65"}};
                (function (){
                var appName = encodeURIComponent(window.location.hostname);
                if(appName==""){appName="local";}
                var s = document.createElement("script");
                s.type = "text/javascript";
                s.async = true;
                var theUrl = baseUrl+'serve/v2/coin/header?fsyms=BTC,ETH,XMR,LTC&tsyms=EUR,CNY,GBP';
                s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                embedder.parentNode.appendChild(s);
                })();
                </script>
            </div>
        </div>
    </div>
</section> -->