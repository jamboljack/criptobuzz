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
        <meta name="keywords" content="<?=$meta->meta_keyword;?>" />
        <meta name="description" content="<?=$meta->meta_desc;?>" />
        <meta name="Distribution" content="Global">
        <meta name="Author" content="<?=$meta->meta_author;?>">
        <meta name="Developer" content="<?=$meta->meta_developer;?>">
        <meta name="robots" content="<?=$meta->meta_robots;?>" />
        <meta name="Googlebot" content="<?=$meta->meta_googlebots;?>" />
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
        <script src="<?=base_url();?>backend/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    </head>
    <body>
    <div class="criptobuzz-site-preloader-wrap">
        <div class="spinner-2"></div>
    </div>
    <?=$_header;?>
    <?=$content;?>
    <?=$_footer;?>
    <div class="modal fade login-modal" id="login-modal" role="dialog">
        <div class="jeg_popupform">
            <form id="formLogin" method="post">
                <h3>Welcome Back !</h3>
                <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <!-- <div class="social-login-wrapper login normal">
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
                </div> -->
                <p>Login to your account below</p>
                <div class="form-message alert alert-danger" id="msgBoxLogin"></div>
                <p class="input_field">
                    <input type="text" name="username_login" id="username_login" placeholder="Username" autocomplete="off">
                </p>
                <p class="input_field">
                    <input type="password" name="password_login" id="password_login" placeholder="Password" autocomplete="off">
                </p>
                <p class="submit">
                    <input type="submit" name="jeg_login_button" class="button_modal" value="Log In">
                </p>
                <div class="bottom_links clearfix">
                    <a href="javascript:void(0)" onclick="showForgot()" class="jeg_popuplink forgot">
                        Forgotten Password ?
                    </a>
                    <a href="javascript:void(0)" onclick="showSignUp()" class="jeg_popuplink_register">
                        <i class="fa fa-user"></i> Sign Up
                    </a>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade register-modal" id="register-modal" role="dialog">
        <div class="jeg_popupform">
            <form method="post" id="formSignUp">
                <h3>Create New Account!</h3>
                <button class="close_register" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <!-- <div class="social-login-wrapper register normal">
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
                </div> -->
                <p>Fill the forms bellow to register</p>
                <div class="form-message alert alert-warning" id="msgBoxWarning"></div>
                <div class="form-message alert alert-success" id="msgBoxSuccess"></div>
                <p class="input_field">
                    <input type="text" name="email_sign" id="email_sign" placeholder="Your email" autocomplete="off">
                </p>
                <p class="input_field">
                    <input type="text" name="username_sign" id="username_sign" placeholder="Username" autocomplete="off">
                </p>
                <p class="input_field">
                    <input type="password" name="password_sign" id="password_sign" placeholder="Password" autocomplete="off">
                </p>
                <p class="input_field">
                    <input type="password" name="confirmpassword_sign" id="confirmpassword_sign" placeholder="Confirm Password" autocomplete="off">
                </p>
                <p class="submit">
                    <input type="submit" name="jeg_login_button" class="button" value="Sign Up" data-process="Processing . . ." data-string="Sign Up">
                </p>
                <div class="bottom_links clearfix">
                    <span>All fields are required.</span>
                    <a href="javascript:void(0)" onclick="showLogin()" class="jeg_popuplink_register">
                        <i class="fa fa-lock"></i> Log In
                    </a>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade register-modal" id="forgot-modal" role="dialog">
        <div class="jeg_popupform">
            <form id="formForgot" method="post">
                <h3>Retrieve your password</h3>
                <button class="close_register" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <p>Please enter your email address to reset your password.</p>
                <div class="form-message alert alert-danger" id="msgBoxForgotError"></div>
                <div class="form-message alert alert-success" id="msgBoxForgotSuccess"></div>
                <p class="input_field">
                    <input type="text" name="email_forgot" id="email_forgot" placeholder="Your Email" autocomplete="off" required>
                </p>
                <p class="submit">
                    <input type="submit" name="jeg_login_button" class="button" value="Reset Password" data-process="Processing . . ." data-string="Reset Password">
                </p>
                <div class="bottom_links clearfix">
                    <a href="javascript:void(0)" onclick="showLogin()" class="jeg_popuplink_register">
                        <i class="fa fa-lock"></i> Log In
                    </a>
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
    <script type="text/javascript" src="<?=base_url();?>backend/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>

    <script type="text/javascript">
    function showLogin() {
        $('#formLogin')[0].reset();
        $('#formSignUp')[0].reset();
        $('#formForgot')[0].reset();
        $('#register-modal').modal('hide');
        $('#forgot-modal').modal('hide');
        $('#login-modal').modal('show');
    }

    function showSignUp() {
        $('#formLogin')[0].reset();
        $('#formSignUp')[0].reset();
        $('#formForgot')[0].reset();
        $('#login-modal').modal('hide');
        $('#forgot-modal').modal('hide')
        $('#register-modal').modal('show');;
    }

    function showForgot() {
        $('#formLogin')[0].reset();
        $('#formSignUp')[0].reset();
        $('#formForgot')[0].reset();
        $('#login-modal').modal('hide');
        $('#register-modal').modal('hide');;
        $('#forgot-modal').modal('show')
    }
    </script>

    <style type="text/css">
        .error {
            color: #FF0000;
        }
    </style>
    
    <script type="text/javascript">
    $.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^\w+$/i.test(value);
    }, "Only Alphanumeric");

    jQuery(document).ready(function($) {
        $("#msgBoxWarning").hide();
        $("#msgBoxSuccess").hide();
        $("#formSignUp").validate({
            rules: { 
                email_sign: { 
                    required: true, minlength: 5, email: true,
                    remote: {
                        url: "<?=site_url('register/register_email_exists');?>",
                        type: "post",
                        data: {
                            email: function() { 
                                return $("#email").val(); 
                            }
                        }
                    }
                },
                username_sign: { 
                    required: true, minlength: 5, alphanumeric: true,
                    remote: {
                        url: "<?=site_url('register/register_user_exists');?>",
                        type: "post",
                        data: {
                            username: function() { 
                                return $("#username").val(); 
                            }
                        }
                    }
                },
                password_sign: { 
                    required: true, minlength: 5
                },
                confirmpassword_sign: { 
                    required: true, minlength: 5, equalTo: "#password_sign"
                }
            },
            messages: {
                email_sign: { 
                    required:'*) Email required', minlength:'Min. 5 Character', email:'Email Not Valid',
                    remote:'Email Exist, Please Change Email'
                },
                username_sign: {
                    required:'*) Username required', minlength:'Min. 5 Character', 
                    remote:'Username Exist, Please Change Username'
                },
                password_sign: { 
                    required:'*) Password required', minlength:'Min. 5 Character'
                },
                confirmpassword_sign: { 
                    required:'*) Confirm Password required', minlength:'Min. 5 Character', 
                    equalTo:'Confirm Password must be Equal to Password'
                }
            },
            submitHandler: function(form) {
                dataString = $("#formSignUp").serialize();
                $.ajax({
                    url: "<?=site_url('register/savedata');?>",
                    type: "POST",
                    dataType: 'json',
                    data: dataString,
                    success: function(data) {
                        if (data.status === 'success') {
                            $("#msgBoxSuccess").show();
                            $("#msgBoxWarning").hide();
                            $("#msgBoxSuccess").text(data.message);
                            resetformSignUp();
                        } else {
                            $("#msgBoxSuccess").hide();
                            $("#msgBoxWarning").show();
                            $("#msgBoxWarning").text(data.message);
                        }
                    },
                    error: function() {
                        alert("Error, Process Failed.");
                    }
                });
            }
        });
    });

    function resetformSignUp() {
        $("#email_sign").val('');
        $("#username_sign").val('');
        $("#password_sign").val('');
        $("#confirmpassword_sign").val('');
    }

    function resetformForgot() {
        $("#email_forgot").val('');
    }

    jQuery(document).ready(function($) {
        $("#msgBoxLogin").hide();
        $("#formLogin").validate({
            rules: { 
                username_login: { 
                    required: true, minlength: 5, alphanumeric: true,
                    remote: {
                        url: "<?=site_url('login/check_user_exists');?>",
                        type: "post",
                        data: {
                            username: function() { 
                                return $("#username").val(); 
                            }
                        }
                    } 
                },
                password_login: { required: true, minlength: 5 }
            },
            messages: {
                username_login: {
                    required:'*) Username required', minlength:'Min. 5 Character', remote:'Username Not Found, Cannot Login'
                },
                password_login: { 
                    required:'*) Password required', minlength:'Min. 5 Character'
                },
            },
            submitHandler: function(form) {
                dataString = $("#formLogin").serialize();
                $.ajax({
                    url: "<?=site_url('login/validasi');?>",
                    type: "POST",
                    dataType: 'json',
                    data: dataString,
                    success: function(data) {
                        if (data.status === 'success') {
                            location.reload();
                        } else {
                            $("#msgBoxLogin").show();
                            $("#msgBoxLogin").text(data.message);
                        }
                    },
                    error: function() {
                        alert("Error, Process Login Failed.");
                    }
                });
            }
        });
    });

    jQuery(document).ready(function($) {
        $("#msgBoxForgotSuccess").hide();
        $("#msgBoxForgotError").hide();
        $("#formForgot").validate({
            rules: { 
                email_forgot: { 
                    required: true, minlength: 5, email: true,
                    remote: {
                        url: "<?=site_url('login/check_email_exists');?>",
                        type: "post",
                        data: {
                            email_forgot: function() { 
                                return $("#email_forgot").val(); 
                            }
                        }
                    } 
                }
            },
            messages: {
                email_forgot: {
                    required:'*) Email required', minlength:'Min. 5 Character', email:'Email Not Valid', 
                    remote:'Email Not Registered'
                }
            },
            submitHandler: function(form) {
                dataString = $("#formForgot").serialize();
                $.ajax({
                    url: "<?=site_url('login/sendmailreset');?>",
                    type: "POST",
                    dataType: 'json',
                    data: dataString,
                    success: function(data) {
                        if (data.status === 'success') {
                            $("#msgBoxForgotSuccess").show();
                            $("#msgBoxForgotSuccess").text(data.message);
                        } else {
                            $("#msgBoxForgotError").show();
                            $("#msgBoxForgotError").text(data.message);
                        }
                resetformForgot();
                    },
                    error: function() {
                        alert("Error, Reset Password Failed.");
                    }
                });
            }
        });
    });
    </script>
    </body>
</html>
