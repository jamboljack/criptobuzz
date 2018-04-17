<link href="<?=base_url();?>backend/js/sweetalert2.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url();?>backend/js/sweetalert2.min.js"></script>

<style type="text/css">
.error {
    color: #f44242;
}
</style>

<div id="tt-preloader">
    <div id="pre-status">
        <div class="preload-placeholder"></div>
    </div>
</div>
<section id="home" class="tt-fullHeight" data-stellar-vertical-offset="50" data-stellar-background-ratio="0.2">
    <div class="intro">
        <div class="intro-sub"><?=$setting->setting_title;?></div>
        <h1><?=$setting->setting_subtitle;?></h1>
        <p><?=$setting->setting_desc;?></p>
        <div class="social-icons">        
            <ul class="list-inline">
                <?php foreach($listSocial as $r) { ?>
                <li><a href="<?=$r->social_url;?>" target="_blank"><i class="fa fa-<?=$r->social_class;?>"></i></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="mouse-icon">
        <div class="wheel"></div>
    </div>
</section>

<header class="header">
    <nav class="navbar navbar-custom" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url();?>">
                    <img src="<?=base_url();?>img/head.png" alt="">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="custom-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#resume">Resume</a></li>
                    <li><a href="#works">Works</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section id="about" class="about-section section-padding">
    <div class="container">
        <h2 class="section-title wow fadeInUp">About Me</h2>
        <div class="row">
            <div class="col-md-4 col-md-push-8">
                <div class="biography">
                    <div class="myphoto">
                        <img src="<?=base_url('img/'.$profil->profil_image);?>" alt="">
                    </div>
                    <ul>
                        <li><strong>Name:</strong> <?=ucwords(strtolower($profil->profil_name));?></li>
                        <li><strong>Date of birth:</strong> <?=tgl_indo($profil->profil_date);?></li>
                        <li><strong>Address:</strong> <?=ucwords(strtolower($profil->profil_address));?></li>
                        <li><strong>Nationality:</strong> <?=ucwords(strtolower($profil->profil_nation));?></li>
                        <li><strong>Phone:</strong> <?=$profil->profil_phone;?></li>
                        <li><strong>Email:</strong> <?=$profil->profil_email;?></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-8 col-md-pull-4">
                <div class="short-info wow fadeInUp">
                    <p><?=$about->setting_desc;?></p>
                </div>
                <div class="my-signature">
                    <!-- <img src="assets/images/sign.png" alt=""> -->
                </div>
                <div class="download-button">
                    <a class="btn btn-info btn-lg" href="https://api.whatsapp.com/send?phone=6285640969727&text=Saya%20ingin%20chat%20dengan%20Anda" target="_blank"><i class="fa fa-comments"></i>Chat with Me</a>
                    <a class="btn btn-primary btn-lg" href="<?=base_url('file/CV.pdf');?>"><i class="fa fa-download"></i>Download my CV</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="skills" class="skills-section section-padding">
    <div class="container">
        <h2 class="section-title wow fadeInUp">Skills</h2>
        <div class="row">
            <div class="col-md-6">
                <?php
                $no = 1; 
                foreach($listSkill as $r) {
                ?>
                <div class="skill-progress">
                    <div class="skill-title"><h3><?=$r->skill_name;?></h3></div> 
                    <div class="progress">
                        <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="<?=$r->skill_percent;?>" aria-valuemin="0" aria-valuemax="100" ><span><?=$r->skill_percent;?>%</span>
                        </div>
                    </div>
                </div>
                <?php 
                    if ($no%4 == 0) {
                        echo '</div><div class="col-md-6">';
                    }
                    $no++;
                } 
                ?>
            </div>
        </div>

        <div class="skill-chart text-center">
          <h3>More skills</h3>
        </div>

        <div class="row more-skill text-center">
            <?php
            foreach($listMore as $r) {
            ?>
            <div class="col-xs-12 col-sm-4 col-md-2">
                <div class="chart" data-percent="<?=$r->more_percent;?>" data-color="e74c3c">
                    <span class="percent"></span>
                    <div class="chart-text">
                      <span><?=$r->more_name;?></span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<section id="resume" class="resume-section section-padding">
    <div class="container">
        <h2 class="section-title wow fadeInUp">Resume</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="resume-title">
                    <h3>Education</h3>
                </div>
                <div class="resume">
                    <ul class="timeline">
                        <?php
                        $no = 1; 
                        foreach($listEducation as $r) {
                            if ($no%2==0) {
                                $kelas = 'timeline-inverted';
                            } else {
                                $kelas = '';
                            }
                        ?>
                        <li class="<?=$kelas;?>">
                            <div class="posted-date">
                                <span class="month"><?=$r->education_date;?></span>
                            </div>
                            <div class="timeline-panel wow fadeInUp">
                                <div class="timeline-content">
                                    <div class="timeline-heading">
                                        <h3><?=$r->education_level;?></h3>
                                        <span><?=$r->education_name;?></span>
                                    </div>
                                    <div class="timeline-body">
                                        <p><?=$r->education_desc;?></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php 
                            $no++;
                        } 
                        ?>
                    </ul>
                </div>
            </div>
        </div><!-- /row -->
        
        <div class="row">
            <div class="col-md-12">
                <div class="resume-title">
                    <h3>Experience</h3>
                </div>
                <div class="resume">
                    <ul class="timeline">
                        <?php
                        $no = 1; 
                        foreach($listExperience as $r) {
                            if ($no%2==0) {
                                $kelas = 'timeline-inverted';
                            } else {
                                $kelas = '';
                            }
                        ?>
                        <li class="<?=$kelas;?>">
                            <div class="posted-date">
                                <span class="month"><?=$r->experience_date;?></span>
                            </div>
                            <div class="timeline-panel wow fadeInUp">
                                <div class="timeline-content">
                                    <div class="timeline-heading">
                                        <h3><?=$r->experience_name;?></h3>
                                        <span><?=$r->experience_place;?></span>
                                    </div>
                                    <div class="timeline-body">
                                        <p><?=$r->experience_desc;?></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php 
                            $no++;
                        } 
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="works" class="works-section section-padding">
    <div class="container">
        <h2 class="section-title wow fadeInUp">Works</h2>
        <div class="row">
            <div id="grid">
                <?php
                foreach($listWork as $r) {
                ?>
                <div class="portfolio-item col-xs-12 col-sm-4 col-md-3" data-groups='["all", "identety", "interface"]'>
                    <div class="portfolio-bg">
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <div class="links">
                                <a class="image-link" href="<?=base_url('img/work_folder/'.$r->work_image);?>">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                                <?php 
                                if (!empty($r->work_url)) { 
                                    $url = $r->work_url;
                                } else {
                                    $url = '#';
                                }
                                ?>
                                <a href="<?=$url;?>" target="_blank"><i class="fa fa-link"></i></a>
                            </div>
                            <img src="<?=base_url('img/work_folder/'.$r->work_image);?>" alt="image"> 
                            <div class="portfolio-info">
                                <h3><?=$r->work_name;?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                } 
                ?>
            </div>
        </div>
    </div>
</section>

<section id="facts" class="facts-section text-center" data-stellar-vertical-offset="50" data-stellar-background-ratio="0.2">
    <div class="tt-overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="count-wrap">
                        <div class="col-sm-3 col-xs-6">
                            <i class="fa fa-flask"></i>
                            <h3 class="timer">7</h3>
                            <p>Years of Experience</p>
                        </div>
                        <div class="col-sm-3 col-xs-6"> 
                            <i class="fa fa-thumbs-up"></i>
                            <h3 class="timer">40</h3>                
                            <p>Projects Done</p>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <i class="fa fa-users"></i>
                            <h3 class="timer">45</h3> 
                            <p>Happy Clients</p>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <i class="fa fa-building-o"></i>
                            <h3 class="timer">4</h3> 
                            <p>Agency</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="hire-section text-center" data-stellar-vertical-offset="50" data-stellar-background-ratio="0.2">
    <div class="hire-section-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>I'm available for freelance project</h2>
                    <a href="#" class="btn btn-default">Get Hired</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="contact-section section-padding">
    <div class="container">
        <h2 class="section-title wow fadeInUp">Get in touch</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-form">
                <strong>Send me a message</strong>
                <form name="contact-form" id="contactForm" action="" method="post">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required="">
                    </div>
                    <div class="form-group">
                      <label for="subject">Subject</label>
                      <input type="text" name="subject" class="form-control" id="subject" placeholder="Your Subject" required>
                    </div>
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea name="message" class="form-control" id="message" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                    <div class="form-group">
                        <?=$this->recaptcha->render();?>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row center-xs">
                    <div class="col-sm-6">
                        <i class="fa fa-map-marker"></i>
                        <address>
                            <strong>Address/Street</strong>
                            <?=ucwords(strtolower($profil->profil_address));?>
                        </address>
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-mobile"></i>
                        <div class="contact-number">
                            <strong>Phone Number</strong>
                            <?=$profil->profil_phone;?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="location-map">
                            <iframe src="https://www.google.com/maps/d/embed?mid=1YDwQlVMiexhvSyVg8nJRWrMNHMntJ1q7" width="100%" height="500"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="<?=base_url();?>backend/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#contactForm").validate({
        rules: { 
            name: {
                required: true, minlength: 3
            },
            email: { 
                required: true, minlength: 5, email: true
            },
            subject: { 
                required: true, minlength: 5
            },
            message: { 
                required: true, minlength: 5
            }
        },
        messages: {
            name: {
                required:'Name required', minlength:'Minimal 3 Char'
            },
            email: { 
                required:'Email required', minlength:'Minimal 5 Char', email:'Email not Valid'
            },
            subject: { 
                required:'Subject required', minlength:'Minimal 5 Char'
            },
            message: { 
                required:'Message required', minlength:'Minimal 5 Char'
            }
        },
        submitHandler: function(form) {
            dataString = $("#contactForm").serialize();
            $.ajax({
                url: "<?=site_url('home/send_data');?>",
                type: "POST",
                dataType: 'json',
                data: dataString,
                success: function(data) {
                    if (data.status === 'success') {
                        swal({
                            title:"Success",
                            text: "Your Message Send Successfully",
                            timer: 2000,
                            showConfirmButton: false,
                            type: "success"
                        });
                        location.reload();
                    } else {
                        swal({
                            title:"Error",
                            text: "Wrong Captcha ! or not Clicked !",
                            timer: 2000,
                            showConfirmButton: false,
                            type: "error"
                        });
                    }
                },
                error: function() {
                    setTimeout(function() {
                        swal({
                            title:"Error",
                            text: "Send Message Error",
                            timer: 2000,
                            showConfirmButton: false,
                            type: "error"
                        })
                    });
                }
            });
        }
    });
});
</script>