<?php
$meta = $this->menu_m->select_meta()->row();
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?=$meta->meta_name;?></title>
        <link rel="shortcut icon" href="<?=base_url('img/logo-icon.png');?>">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800,800italic,600italic,400italic,300italic' rel='stylesheet' type='text/css'>
        <link href="<?=base_url();?>backend/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?=base_url();?>backend/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/animate.min.css">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/default.css">
        <link rel="stylesheet" href="<?=base_url();?>assets/style.css">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/responsive.css">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/slicknav.min.css">
    </head>
    <body>
    <!-- <div class="criptobuzz-site-preloader-wrap">
        <div class="spinner-2"></div>
    </div> -->
    <?=$_header;?>
    <?=$content;?>
    <?=$_footer;?>
    <div class="modal fade login-modal" id="login-modal" role="dialog">
        <div class="jeg_popupform">
            <form action="#" method="post" accept-charset="utf-8">
                <h3>Welcome Back!</h3>
                <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="social-login-wrapper login normal">
                    <div class="social-login-item">
                        <a href="#" class="btn btn-facebook">
                            <i class="fa fa-facebook"></i>
                            <span>Sign In with Facebook</span>
                        </a>
                    </div>
                    <div class="social-login-item">
                        <a href="#" class="btn btn-google-plus">
                            <i class="fa fa-google-plus"></i>
                            <span>Sign In with Google+</span>
                        </a>
                    </div>
                    <div class="social-login-item">
                        <a href="#" class="btn btn-linkedin">
                            <i class="fa fa-linkedin"></i>
                            <span>Sign In with Linked In</span>
                        </a>
                    </div>
                    <div class="social-login-line">
                        <span>OR</span>
                    </div>
                </div>
                <p>Login to your account below</p>
                <div class="form-message"></div>
                <p class="input_field">
                    <input type="text" name="username" placeholder="Username" value="">
                </p>
                <p class="input_field">
                    <input type="password" name="password" placeholder="Password" value="">
                </p>
                <p class="submit">
                    <input type="hidden" name="action" value="login_handler">
                    <input type="hidden" name="jnews_nonce" value="cea4ed573a">
                    <input type="submit" name="jeg_login_button" class="button_modal" value="Log In" data-process="Processing . . ." data-string="Log In">
                </p>
                <div class="bottom_links clearfix">
                    <a href="#jeg_forgotform" class="jeg_popuplink forgot">Forgotten Password?</a>
                    <a href="#jeg_registerform" class="jeg_popuplink-signup">
                        <i class="fa fa-user"></i> Sign Up
                    </a>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade register-modal" id="register-modal" role="dialog">
        <div class="jeg_popupform">
            <form action="#" method="post" accept-charset="utf-8">
                <h3>Create New Account!</h3>
                <button class="close_register" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="social-login-wrapper register normal">
                    <div class="social-login-item">
                        <a href="#" class="btn btn-facebook">
                            <i class="fa fa-facebook"></i>
                            <span>Sign Up with Facebook</span>
                        </a>
                    </div>
                    <div class="social-login-item">
                        <a href="#" class="btn btn-google-plus">
                            <i class="fa fa-google-plus"></i>
                            <span>Sign Up with Google+</span>
                        </a>
                    </div>
                    <div class="social-login-item">
                        <a href="#" class="btn btn-linkedin">
                            <i class="fa fa-linkedin"></i>
                            <span>Sign Up with Linked In</span>
                        </a>
                    </div>
                    <div class="social-login-line">
                        <span>OR</span>
                    </div>
                </div>
                <p>Fill the forms bellow to register</p>
                <div class="form-message"><!-- <p class="alert alert-error">Invalid username</p> -->
                </div>
                <p class="input_field">
                    <input type="text" name="email" placeholder="Your email" value="">
                </p>
                <p class="input_field">
                    <input type="text" name="username" placeholder="Username" value="">
                </p>
                <p class="submit">
                    <input type="hidden" name="action" value="register_handler">
                    <input type="hidden" name="jnews_nonce" value="1ee2bdc364">
                    <input type="submit" name="jeg_login_button" class="button" value="Sign Up" data-process="Processing . . ." data-string="Sign Up">
                </p>
                <div class="bottom_links clearfix">
                    <span>All fields are required.</span>
                    <a href="#jeg_loginform" class="jeg_popuplink_register">
                        <i class="fa fa-lock"></i> Log In
                    </a>
                </div>
            </form>
        </div>
    </div>

    <div id="jeg_forgotform" class="jeg_popup mfp-with-anim mfp-hide">
        <div class="jeg_popupform">
            <form action="#" method="post" accept-charset="utf-8">
                <h3>Retrieve your password</h3>
                <p>Please enter your username or email address to reset your password.</p>
                <div class="form-message"></div>
                <p class="input_field"> <input type="text" name="user_login" placeholder="Your email or username" value=""> </p>
                <p class="submit">
                    <input type="hidden" name="action" value="forget_password_handler">
                    <input type="hidden" name="jnews_nonce" value="cea4ed573a">
                    <input type="submit_signup" name="jeg_login_button" class="button" value="Reset Password" data-process="Processing . . ." data-string="Reset Password">
                </p>
                <div class="bottom_links clearfix">
                    <a href="#jeg_loginform" class="jeg_popuplink"><i class="fa fa-lock"></i> Log In</a>
                </div>
            </form>
        </div>
    </div>

        <script src="<?=base_url();?>assets/js/vendor/jquery-1.12.1.min.js"></script>
        <script src="<?=base_url();?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?=base_url();?>assets/js/owl.carousel.min.js"></script>
        <script src="<?=base_url();?>assets/js/wow-1.3.0.min.js"></script>
        <script src="<?=base_url();?>assets/js/jquery.slicknav.min.js"></script>
        <script src="<?=base_url();?>assets/js/plugins.js"></script>
        <script src="<?=base_url();?>assets/js/active.js"></script>
    </body>
</html>
