<link href="<?=base_url();?>backend/js/sweetalert2.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url();?>backend/js/sweetalert2.min.js"></script>
<link href="<?=base_url();?>backend/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>

<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title">
            Article
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="<?=site_url('admin/home');?>">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Content</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="<?=site_url('admin/article');?>">Article</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Add Article</a>
                </li>
            </ul>
            <div class="page-toolbar">
                <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height grey-salt">
                    <i class="icon-calendar">&nbsp; </i><span class="uppercase visible-lg-inline-block"><?=tgl_indo(date('Y-m-d'));?></span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="portlet box grey-steel">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-plus-circle"></i> Form Add Article
                        </div>
                    </div>

                    <div class="portlet-body form">
                        <form role="form" class="form-horizontal" method="post" id="formInput" name="formInput" enctype="multipart/form-data">

                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Title</label>
                                    <div class="col-md-10">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="title" placeholder="Input Title" autocomplete="off" autofocus />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Main Category</label>
                                    <div class="col-md-5">
                                        <div class="input-icon right"><i class="fa"></i>
                                            <select class="form-control" name="lstMain" id="lstMain" onchange="ViewSubCategory()">
                                                <option value="">- Choose Main Category -</option>
                                                <?php
                                                foreach ($listMain as $r) {
                                                ?>
                                                <option value="<?=$r->maincategory_id;?>"><?=$r->maincategory_name;?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Sub Category</label>
                                    <div class="col-md-5">
                                        <?php
                                        $style_sub = 'class="form-control" id="lstSubCategory"';
                                        echo form_dropdown("lstSubCategory", array('' => '- Choose Sub Category -'), '',$style_sub);
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Description</label>
                                    <div class="col-md-10">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <textarea class="form-control ckeditor" rows="20" name="desc"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Featured ?</label>
                                    <div class="col-md-3">
                                        <div class="input-icon right"><i class="fa"></i>
                                            <select class="form-control" name="lstFeature" required>
                                                <option value="">- Choose Status Featured -</option>
                                                <option value="1">No</option>
                                                <option value="2">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Recomend ?</label>
                                    <div class="col-md-3">
                                        <div class="input-icon right"><i class="fa"></i>
                                            <select class="form-control" name="lstRecomend" required>
                                                <option value="">- Choose Status Recomend -</option>
                                                <option value="1">No</option>
                                                <option value="2">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Image</label>
                                    <div class="col-md-10">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="<?=base_url('img/no-image.png');?>" alt=""/>
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 300px; max-height: 200px;"></div>
                                            <div>
                                                <span class="btn default btn-file">
                                                <span class="fileinput-new">
                                                Choose File </span>
                                                <span class="fileinput-exists">
                                                Change </span>
                                                <input type="file" name="foto" accept=".png,.jpg,.jpeg,.gif" required>
                                                </span>
                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                                                Remove </a>
                                            </div>
                                        </div>
                                        <div class="clearfix margin-top-10">
                                            <span class="label label-danger">INFO !</span> Resolution : 850 x 500 Pixel
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-2 col-md-10">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa fa-floppy-o"></i> Save
                                        </button>
                                        <a href="<?=site_url('admin/article');?>" type="button" class="btn btn-warning"><i class="fa fa-times"></i> Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<script src="<?=base_url();?>backend/assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url();?>backend/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
<script type="text/javascript" src="<?=base_url();?>backend/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    var form        = $('#formInput');
    var error       = $('.alert-danger', form);
    var success     = $('.alert-success', form);

    $("#formInput").validate({
        errorElement: 'span',
        errorClass: 'help-block help-block-error',
        focusInvalid: false,
        ignore: "",
        rules: {
            title: { required: true },
            lstMain: { required: true },
            lstFeature: { required: true },
            lstRecomend: { required: true },
            foto: { required: true }
        },
        messages: {
            title: { required :'Title required' },
            lstMain: { required :'Main Category required' },
            lstFeature: { required :'Featured required' },
            lstRecomend: { required :'Recomend required' },
            foto: { required :'Image required' }
        },
        invalidHandler: function (event, validator) {
            success.hide();
            error.show();
            Metronic.scrollTo(error, -200);
        },
        errorPlacement: function (error, element) {
            var icon = $(element).parent('.input-icon').children('i');
            icon.removeClass('fa-check').addClass("fa-warning");
            icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
        },
        highlight: function (element) {
            $(element).closest('.form-group').removeClass("has-success").addClass('has-error');
        },
        unhighlight: function (element) {
        },
        success: function (label, element) {
            var icon = $(element).parent('.input-icon').children('i');
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            icon.removeClass("fa-warning").addClass("fa-check");
        },
        submitHandler: function(form) {
            for (instance in CKEDITOR.instances)
            {
                CKEDITOR.instances[instance].updateElement();
            }
            var formData = new FormData($('#formInput')[0]);
            $.ajax({
                url: '<?=site_url('admin/article/savedata');?>',
                type: "POST",
                dataType: 'json',
                data: formData,
                async: true,
                success: function(data) {
                    if (data.status === 'success') {
                        swal({
                            title:"Success",
                            text: "Save Data Sukses",
                            showConfirmButton: false,
                            type: "success",
                            timer: 2000
                        }, function() {
                            window.location="<?=site_url('admin/article');?>";
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
                        text: "Save Data Failed",
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

function ViewSubCategory() {
    maincategory_id = document.getElementById("lstMain").value;
    $.ajax({
        url:"<?=site_url('admin/article/view_subcategory/');?>"+maincategory_id,
        success: function(response) {
            $("#lstSubCategory").html(response);
        },
        dataType:"html"
    });
    return false;
}
</script>