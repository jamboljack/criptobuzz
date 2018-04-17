<?php
$meta = $this->menu_m->select_meta()->row();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?=$meta->meta_keyword;?>" />
    <meta name="description" content="<?=$meta->meta_desc;?>" />
    <meta name="Distribution" content="Global">
    <meta name="Author" content="<?=$meta->meta_author;?>">
    <meta name="Developer" content="<?=$meta->meta_developer;?>">
    <meta name="robots" content="<?=$meta->meta_robots;?>" />
    <meta name="Googlebot" content="<?=$meta->meta_googlebots;?>" />
    <title><?=$meta->meta_name;?></title>
    <link rel="shortcut icon" href="<?=base_url('img/icon.png');?>">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link href="<?=base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?=base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="<?=base_url();?>assets/css/animate.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/magnific-popup.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet" media="screen">
    <link href="<?=base_url();?>assets/css/responsive.css" rel="stylesheet">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url();?>img/114.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url();?>img/114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url();?>img/72.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url();?>img/54.png">
    <script src="<?=base_url();?>backend/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?=base_url();?>backend/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
</head>
<body>
    <?=$content;?>
    <?=$_footer;?>
    <script src="<?=base_url();?>backend/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.stellar.min.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.sticky.js"></script>
    <script src="<?=base_url();?>assets/js/smoothscroll.js"></script>
    <script src="<?=base_url();?>assets/js/wow.min.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.countTo.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.inview.min.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.easypiechart.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.shuffle.min.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.fitvids.js"></script>
    <script src="<?=base_url();?>assets/js/scripts.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-59838993-10"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-59838993-10');
    </script>
</body>
</html>