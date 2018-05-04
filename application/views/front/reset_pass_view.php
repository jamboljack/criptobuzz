<div class="criptobuzz-content-block">
    <div class="container">
        <div class="row ">
            <div class="col-md-4">
                <h1 class="title wow FadeInLeft">Reset Password</h1>
                <form method="post" id="formReset" class="comment-form">
                    <div class="form-message alert alert-success" id="msgResetSuccess"></div>
                    <p class="comment-form-comment">
                    	<label for="comment">New Password</label>
                        <input id="newpass" name="newpass" type="password" autocomplete="off" required>
                    </p>
                    <p class="comment-form-comment">
                    	<label for="comment">Confirm New Password</label>
                        <input id="confirmnewpass" name="confirmnewpass" type="password" autocomplete="off" required>
                    </p>
                    <p class="form-submit_blog">
                    	<input name="submit_blog" type="submit" id="submit_blog" class="submit_blog" value="Reset Password">
                    </p>
                </form>
            </div>
            <div class="col-md-8">
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?=base_url();?>backend/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$("#msgResetFailed").hide();
    $("#msgResetSuccess").hide();
    $("#formReset").validate({
    	rules: { 
        	newpass: { 
        		required: true, minlength: 5
        	},
            confirmnewpass: { 
            	required: true, minlength: 5, equalTo: "#newpass"
            }
        },
       	messages: {
        	newpass: { 
        		required:'*) New Password required', minlength:'Min. 5 Character'
        	},
            confirmnewpass: { 
            	required:'*) Confirm New Password required', minlength:'Min. 5 Character', 
                equalTo:'Confirm New Password must be Equal to New Password'
            }
        },
        submitHandler: function(form) {
        	dataString = $("#formReset").serialize();
            $.ajax({
            	url: "<?=site_url('login/updatepassword/'.$this->uri->segment(3));?>",
                type: "POST",
                data: dataString,
                success: function(data) {
                    $("#msgResetSuccess").show();
                    $("#msgResetSuccess").text('Reset Password Success.');
                	window.location="<?=base_url();?>";
                },
                error: function() {
                	alert("Error, Reset Password Failed.");
                }
            });
        }
    });
});
</script>