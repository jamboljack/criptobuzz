<link href="<?=base_url();?>backend/js/sweetalert2.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url();?>backend/js/sweetalert2.min.js"></script>
<link href="<?=base_url();?>backend/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>

<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title">
            Contact Us
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="<?=site_url('admin/home');?>">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Public</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Contact Us</a>
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
                            <i class="fa fa-edit"></i> Detail Contact Us
                        </div>
                    </div>

                    <div class="portlet-body form">
                        <form role="form" class="form-horizontal" method="post" id="formInput">
                        <input type="hidden" name="id" value="<?=$detail->contact_id;?>">

                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Name</label>
                                    <div class="col-md-5">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="name" placeholder="Input Name" value="<?=$detail->contact_name;?>" autocomplete="off" required autofocus />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Address</label>
                                    <div class="col-md-9">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="address" placeholder="Input Address" value="<?=$detail->contact_address;?>" autocomplete="off" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Phone</label>
                                    <div class="col-md-5">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="phone" placeholder="Input Phone" value="<?=$detail->contact_phone;?>" autocomplete="off" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Email</label>
                                    <div class="col-md-5">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="email" placeholder="Input Email" value="<?=$detail->contact_email;?>" autocomplete="off" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Foto</label>
                                    <div class="col-md-5">
                                        <?php if (empty($detail->contact_image)) { ?>
                                        <img src="<?=base_url('img/no-image.jpg');?>" alt="" width="30%"/>
                                        <?php } else { ?>
                                        <img src="<?=base_url('img/'.$detail->contact_image);?>" alt="" width="30%"/>
                                        <?php }?>                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Upload Foto</label>
                                    <div class="col-md-5">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="<?=base_url('img/no-image.png');?>" alt=""/>
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 300px; max-height: 150px;"></div>
                                            <div>
                                                <span class="btn default btn-file">
                                                <span class="fileinput-new">
                                                Pilih Foto </span>
                                                <span class="fileinput-exists">
                                                Ubah </span>
                                                <input type="file" name="foto" accept=".png,.jpg,.jpeg,.gif">
                                                </span>
                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                                                Hapus </a>
                                            </div>
                                        </div>
                                        <div class="clearfix margin-top-10">
                                            <span class="label label-danger">
                                            INFO !</span>
                                            Resolution : 350 x 400 Pixel
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green"><i class="fa fa-floppy-o"></i> Update</button>
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
            name: { required: true },
            address: { required: true },
            phone: { required: true },
            email: { required: true, email: true }
        },
        messages: {
            name: { required :'Name required' },
            address: { required :'Address required' },
            phone: { required :'Phone required' },
            email: { required :'Email required', email: 'Email not Valid' }
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
            $(element)
            .closest('.form-group').removeClass("has-success").addClass('has-error');
        },
        unhighlight: function (element) {
        },
        success: function (label, element) {
            var icon = $(element).parent('.input-icon').children('i');
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            icon.removeClass("fa-warning").addClass("fa-check");
        },
        submitHandler: function(form) {
            var formData = new FormData($('#formInput')[0]);
            $.ajax({
                url: '<?=site_url('admin/contact/updatedata');?>',
                type: "POST",
                dataType: 'json',
                data: formData,
                async: true,
                success: function(data) {
                    if (data.status === 'success') {
                        swal({
                            title:"Success",
                            text: "Update Data Success",
                            showConfirmButton: false,
                            type: "success",
                            timer: 2000
                        });
                    } else {
                        swal({
                            title:"Failed",
                            text: "File Type must JPG/PNG/JPEG",
                            timer: 2000,
                            showConfirmButton: false,
                            type: "error"
                        });
                    }
                    location.reload();
                },
                error: function (response) {
                    swal({
                        title:"Error",
                        text: "Update Data Error",
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