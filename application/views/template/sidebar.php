<?php
$uri = $this->uri->segment(2);

if ($uri == 'home') {
    $dashboard      = 'active';
    $meta           = '';
    $contact        = '';
    $content        = '';
    $block          = '';
    $span_block_1   = '';
    $span_block_2   = '';
    $information    = '';
    $menu           = '';
    $span_menu_1    = '';
    $span_menu_2    = '';
    $maincategory   = '';
    $category       = '';
    $article        = '';
    $social         = '';
    $message        = '';
    $users          = '';
} elseif ($uri == 'meta') {
    $dashboard      = '';
    $meta           = 'active';
    $contact        = '';
    $content        = '';
    $block          = '';
    $span_block_1   = '';
    $span_block_2   = '';
    $information    = '';
    $menu           = '';
    $span_menu_1    = '';
    $span_menu_2    = '';
    $maincategory   = '';
    $category       = '';
    $article        = '';
    $social         = '';
    $message        = '';
    $users          = '';
} elseif ($uri == 'contact') {
    $dashboard      = '';
    $meta           = '';
    $contact        = 'active';
    $content        = '';
    $block          = '';
    $span_block_1   = '';
    $span_block_2   = '';
    $information    = '';
    $menu           = '';
    $span_menu_1    = '';
    $span_menu_2    = '';
    $maincategory   = '';
    $category       = '';
    $article        = '';
    $social         = '';
    $message        = '';
    $users          = '';
} elseif ($uri == 'content') {
    $dashboard      = '';
    $meta           = '';
    $contact        = '';
    $content        = 'active';
    $block          = '';
    $span_block_1   = '';
    $span_block_2   = '';
    $information    = '';
    $menu           = '';
    $span_menu_1    = '';
    $span_menu_2    = '';
    $maincategory   = '';
    $category       = '';
    $article        = '';
    $social         = '';
    $message        = '';
    $users          = '';
} elseif ($uri == 'information') {
    $dashboard      = '';
    $meta           = '';
    $contact        = '';
    $content        = '';
    $block          = 'active open';
    $span_block_1   = '<span class="selected"></span>';
    $span_block_2   = 'open';
    $information    = 'active';
    $menu           = '';
    $span_menu_1    = '';
    $span_menu_2    = '';
    $maincategory   = '';
    $category       = '';
    $article        = '';
    $social         = '';
    $message        = '';
    $users          = '';
} elseif ($uri == 'maincategory') {
    $dashboard      = '';
    $meta           = '';
    $contact        = '';
    $content        = '';
    $block          = '';
    $span_block_1   = '';
    $span_block_2   = '';
    $information    = '';
    $menu           = 'active open';
    $span_menu_1    = '<span class="selected"></span>';
    $span_menu_2    = 'open';
    $maincategory   = 'active';
    $category       = '';
    $article        = '';
    $social         = '';
    $message        = '';
    $users          = '';
} elseif ($uri == 'category') {
    $dashboard      = '';
    $meta           = '';
    $contact        = '';
    $content        = '';
    $block          = '';
    $span_block_1   = '';
    $span_block_2   = '';
    $information    = '';
    $menu           = 'active open';
    $span_menu_1    = '<span class="selected"></span>';
    $span_menu_2    = 'open';
    $maincategory   = '';
    $category       = 'active';
    $article        = '';
    $social         = '';
    $message        = '';
    $users          = '';
} elseif ($uri == 'article') {
    $dashboard      = '';
    $meta           = '';
    $contact        = '';
    $content        = '';
    $block          = '';
    $span_block_1   = '';
    $span_block_2   = '';
    $information    = '';
    $menu           = 'active open';
    $span_menu_1    = '<span class="selected"></span>';
    $span_menu_2    = 'open';
    $maincategory   = '';
    $category       = '';
    $article        = 'active';
    $social         = '';
    $message        = '';
    $users          = '';
} elseif ($uri == 'social') {
    $dashboard      = '';
    $meta           = '';
    $contact        = '';
    $content        = '';
    $block          = '';
    $span_block_1   = '';
    $span_block_2   = '';
    $information    = '';
    $menu           = '';
    $span_menu_1    = '';
    $span_menu_2    = '';
    $maincategory   = '';
    $category       = '';
    $article        = '';
    $social         = 'active';
    $message        = '';
    $users          = '';
} elseif ($uri == 'message') {
    $dashboard      = '';
    $meta           = '';
    $contact        = '';
    $content        = '';
    $block          = '';
    $span_block_1   = '';
    $span_block_2   = '';
    $information    = '';
    $menu           = '';
    $span_menu_1    = '';
    $span_menu_2    = '';
    $maincategory   = '';
    $category       = '';
    $article        = '';
    $social         = '';
    $message        = 'active';
    $users          = '';
} elseif ($uri == 'users') {
    $dashboard      = '';
    $meta           = '';
    $contact        = '';
    $content        = '';
    $block          = '';
    $span_block_1   = '';
    $span_block_2   = '';
    $information    = '';
    $menu           = '';
    $span_menu_1    = '';
    $span_menu_2    = '';
    $maincategory   = '';
    $category       = '';
    $article        = '';
    $social         = '';
    $message        = '';
    $users          = 'active';
} else {
    $dashboard      = 'active';
    $meta           = '';
    $contact        = '';
    $content        = '';
    $block          = '';
    $span_block_1   = '';
    $span_block_2   = '';
    $information    = '';
    $menu           = '';
    $span_menu_1    = '';
    $span_menu_2    = '';
    $maincategory   = '';
    $category       = '';
    $article        = '';
    $social         = '';
    $message        = '';
    $users          = '';
}
?>
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu page-sidebar-menu-light " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <br><br>
            <li class="sidebar-search-wrapper">
            </li>

            <li class="tooltips <?=$dashboard;?>" data-container="body" data-placement="right" data-html="true" data-original-title="Dashboard">
                <a href="<?=site_url('admin/home');?>">
                    <i class="fa fa-home"></i><span class="title"> Dashboard</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">PUBLIC</h3>
            </li>
            <li class="tooltips <?=$meta;?>" data-container="body" data-placement="right" data-html="true" data-original-title="Meta Tags & SEO">
                <a href="<?=site_url('admin/meta');?>">
                    <i class="fa fa-search"></i><span class="title"> Meta Tags & SEO</span>
                </a>
            </li>
            <li class="tooltips <?=$contact;?>" data-container="body" data-placement="right" data-html="true" data-original-title="contact">
                <a href="<?=site_url('admin/contact');?>">
                    <i class="fa fa-user"></i><span class="title"> Contact Us</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">CONTENT</h3>
            </li>
            <li class="tooltips <?=$content;?>" data-container="body" data-placement="right" data-html="true" data-original-title="Static Content">
                <a href="<?=site_url('admin/content');?>">
                    <i class="fa fa-bookmark-o"></i><span class="title"> Static Content</span>
                </a>
            </li>
            <li class="<?=$block;?>">
                <a href="#">
                    <i class="fa fa-chain (alias)"></i>
                    <span class="title">Blockchain 101</span>
                    <?=$span_block_1;?>
                    <span class="arrow <?=$span_block_2;?>"></span>
                </a>
                <ul class="sub-menu">
                    <li class="<?=$information;?>"><a href="<?=site_url('admin/information');?>">
                        <i class="fa fa-location-arrow"></i> Information</a>
                    </li>
                </ul>
            </li>
            <li class="<?=$menu;?>">
                <a href="#">
                    <i class="fa fa-hacker-news"></i>
                    <span class="title">Dynamic Menu</span>
                    <?=$span_menu_1;?>
                    <span class="arrow <?=$span_menu_2;?>"></span>
                </a>
                <ul class="sub-menu">
                    <li class="<?=$maincategory;?>"><a href="<?=site_url('admin/maincategory');?>">
                        <i class="fa fa-location-arrow"></i> Main Category</a>
                    </li>
                    <li class="<?=$category;?>"><a href="<?=site_url('admin/category');?>">
                        <i class="fa fa-location-arrow"></i> Category</a>
                    </li>
                    <li class="<?=$article;?>"><a href="<?=site_url('admin/article');?>">
                        <i class="fa fa-location-arrow"></i> Article</a>
                    </li>
                </ul>
            </li>
            <li class="tooltips <?=$social;?>" data-container="body" data-placement="right" data-html="true" data-original-title="Social Media">
                <a href="<?=site_url('admin/social');?>">
                    <i class="fa fa-spinner"></i><span class="title"> Social Media</span>
                </a>
            </li>
            <li class="tooltips <?=$message;?>" data-container="body" data-placement="right" data-html="true" data-original-title="Message">
                <a href="<?=site_url('admin/message');?>">
                    <i class="fa fa-comments"></i><span class="title"> Message</span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">USERS</h3>
            </li>
            <li class="tooltips <?=$users;?>" data-container="body" data-placement="right" data-html="true" data-original-title="Users">
                <a href="<?=site_url('admin/users');?>">
                    <i class="fa fa-users"></i><span class="title"> Users</span>
                </a>
            </li>
        </ul>
    </div>
</div>