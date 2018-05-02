<div class="criptobuzz-content-block">
	<div class="container">
    	<div class="row  ">
        	<div class="col-md-6 wow fadeInDown">
	            <h1 class="title">Contact Us</h1>
	            <h5>Have a question? We are here.</h5>
	            <p>Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind.</p>
	            <img class="contact-banner" src="<?=base_url('img/contact_us.jpg');?>" alt="">
	            <br><br>
	            <p class="bigger-text-link"><?=$detail->contact_name;?></p>
	            <div class="row">
	            	<div class="col-md-6">
	                	<p class="contact-heading">Call Us</p>
	                    <a href="#" class="bigger-text-link"><?=$detail->contact_phone;?></a>
	                </div>
	                <div class="col-md-6">
	                	<p class="contact-heading">Email us</p>
	                    <a href="#" class="bigger-text-link"><?=$detail->contact_email;?></a>
	                </div>
	            </div>
	            <p class="contact-heading">Our address</p>
	            <p class="bigger-text-link"><?=$detail->contact_address;?></p>
	        </div>
	        <div class="col-md-5 col-md-offset-1 wow fadeInDown">
	        	<div class="quote-title">
	            	<h4>Get a quote on Renovation</h4>
	            	Our experts will reply you with a quote very soon
	            </div>
	            <div class="get-quote-form">
	            	<form id="contact_form" method="post">
	                	<p><label for="name">Name</label> <input id="name" name="name" type="text" placeholder="Enter your full name" autocomplete="off"></p>
	                    <p><label for="email">Email</label> <input id="email" name="email" type="text" placeholder="Enter your email address" autocomplete="off"></p>
	                    <p><label for="phone">Phone number</label> <input id="phone" name="phone" type="text" placeholder="Enter your phone number" autocomplete="off"></p>
	                    <p><label for="message">I would like to discuss</label> <textarea name="message" id="message" cols="30" rows="10" placeholder="Type your message"></textarea></p>
	                    <p>
	                    	<?=$this->recaptcha->render();?>
	                    </p>
	                    <p><input type="submit" value="Get a free Quote"></p>
	                </form>
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

<script type="text/javascript" src="<?=base_url();?>backend/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $("#contact_form").validate({
        rules: { 
            name: {
                required: true, minlength: 3
            },
            email: { 
                required: true, minlength: 5, email: true
            },
            phone: { 
                required: true, number:true, minlength: 11
            },
            message: { 
                required: true, minlength: 5
            }
        },
        messages: {
            name: {
                required:'*) Name required', minlength:'Min. 3 Character'
            },
            email: { 
                required:'*) Email required', minlength:'Min. 5 Character', email:'Email Not Valid'
            },
            phone: { 
                required:'*) Phone required', number:'Only Number', minlength:'Min. 11 Digit'
            },
            message: { 
                required:'*) Message required', minlength:'Min. 5 Character'
            }
        },
        submitHandler: function(form) {
            dataString = $("#contact_form").serialize();
            $.ajax({
                url: "<?=site_url('contact/send_data');?>",
                type: "POST",
                dataType: 'json',
                data: dataString,
                success: function(data) {
                    if (data.status === 'success') {
                        alert(data.message);
                        location.reload();
                    } else {
                        alert(data.message);
                    }
                },
                error: function() {
                    alert("Error, Proses ke Server.");
                }
            });
        }
    });
});
</script>