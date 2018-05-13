<?php
$username = $this->session->userdata('username_member');
$dataUser = $this->menu_m->select_user($username)->row();
?>
<link href="<?=base_url();?>backend/js/sweetalert2.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url();?>backend/js/sweetalert2.min.js"></script>
<link href="<?=base_url();?>backend/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
<div class="criptobuzz-content-block">
    <div class="container">
        <div class="row ">
            <div class="col-md-6">
                <h1 class="title wow FadeInLeft">My Account</h1>
                <form method="post" id="formAccount" class="comment-form" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="comment-form-comment">
                                <label for="comment">Username</label>
                                <input id="username" name="username" type="text" value="<?=$dataUser->user_username;?>" readonly>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="comment-form-comment">
                            	<label for="comment">Name</label>
                                <input id="name" name="name" type="text" value="<?=$dataUser->user_name;?>" autocomplete="off" required autofocus>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="comment-form-comment">
                                <label for="comment">Phone</label>
                                <input id="phone" name="phone" type="text" value="<?=$dataUser->user_mobile;?>" autocomplete="off" required>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="comment-form-comment">
                                <label for="comment">Email</label>
                                <input id="email" name="email" type="text" value="<?=$dataUser->user_email;?>" autocomplete="off" required>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="comment-form-comment">
                                <label for="comment">Change Password</label>
                                <input id="pass" name="pass" type="password" autocomplete="off">
                                <p class="help-block">*) leave Blank if not change Password</p>
                            </p>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="comment-form-comment">
                                <label for="comment">Avatar</label>
                                <?php
                                if (empty($dataUser->user_avatar)) {
                                ?>
                                <img src="<?=base_url('img/no-profil.png');?>" alt="" width="30%"/>
                                <?php } else {?>
                                <img src="<?=base_url('img/icon/' . $dataUser->user_avatar);?>" width="30%"/>
                                <?php }?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="comment-form-comment">
                                <label for="comment">Change Avatar</label>
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="<?=base_url('img/no-image.png');?>" alt=""/>
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 100; max-height: 150;"></div>
                                    <div>
                                        <span class="btn default btn-file">
                                        <span class="fileinput-new">
                                        Choose File </span>
                                        <span class="fileinput-exists">
                                        Change </span>
                                        <input type="file" name="foto" accept=".png,.jpg,.jpeg,.gif">
                                        </span>
                                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                                        Remove </a>
                                    </div>
                                </div>
                                <div class="clearfix margin-top-10">
                                    <span class="label label-danger">INFO !</span> Resolution : 150 x 200 Pixel
                                </div>
                            </p>
                        </div>
                    </div>
                    <p class="form-submit_blog">
                    	<input name="submit_blog" type="submit" id="submit_blog" class="submit_blog" value="Update Data">
                    </p>
                </form>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?=base_url();?>backend/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
<script type="text/javascript" src="<?=base_url();?>backend/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $("#formAccount").validate({
    	rules: { 
        	name: {  required: true, minlength: 5 },
            phone: {  required: true, minlength: 11, number: true },
            email: {  required: true, minlength: 15, email: true }
        },
       	messages: {
        	name: { required:'Name required', minlength:'Min. 5 Char' },
            phone: { required:'Phone required', minlength:'Min. 11 Digit', number:'Only Number' },
            email: { required:'Email required', minlength:'Min. 15 Char', email:'Email not Valid' }
        },
        submitHandler: function(form) {
            var formData = new FormData($('#formAccount')[0]);
            $.ajax({
                url: '<?=site_url('profil/updatedata');?>',
                type: "POST",
                dataType: 'json',
                data: formData,
                async: true,
                success: function(data) {
                    if (data.status === 'success') {
                        swal({
                            title:"Success",
                            text: "Update Account Success",
                            showConfirmButton: false,
                            type: "success",
                            timer: 2000
                        }, function() {
                            location.reload();
                        });
                    } else {
                        swal({
                            title:"Error",
                            text: "Error ! File Type must (JPG/PNG/JPEG)",
                            timer: 2000,
                            showConfirmButton: false,
                            type: "error"
                        });
                    }
                },
                error: function (response) {
                    swal({
                        title:"Error",
                        text: "Update Account Failed",
                        showConfirmButton: false,
                        type: "error",
                        timer: 2000
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });
});
</script>