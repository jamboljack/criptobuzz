<?php 
$meta = $this->menu_m->select_meta()->row();
?>
<footer class="footer-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright text-center">
                    <p>&copy; <?=date('Y').' '.$meta->meta_name;?></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="scroll-up">
    <a href="#home"><i class="fa fa-angle-up"></i></a>
</div>
