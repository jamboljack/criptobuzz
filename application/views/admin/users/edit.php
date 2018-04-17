<link rel="stylesheet" type="text/css" href="<?=base_url();?>backend/js/sweetalert2.css">
<script src="<?=base_url();?>backend/js/sweetalert2.min.js"></script>

<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title">
            Users
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="<?=site_url('admin/home');?>">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="<?=site_url('admin/users');?>">Users</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Edit User</a>
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
                            <i class="fa fa-edit"></i> Form Edit User
                        </div>
                    </div>

                    <div class="portlet-body form">
                        <form class="form-horizontal" method="post" id="formInput" name="formInput" role="form">
                        <input type="hidden" name="id" value="<?=$detail->user_username;?>">

                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <label class="col-md-3 control-label">Username</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="username" value="<?=$detail->user_username;?>" autocomplete="off" readonly  />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" name="password" placeholder="Input Password" autocomplete="off"/>
                                                <span class="help-block">*) Empty when not Change Password.</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Name</label>
                                            <div class="col-md-9">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="name" value="<?=$detail->user_name;?>" placeholder="Input Name" autocomplete="off" autofocus />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Handphone</label>
                                            <div class="col-md-9">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="mobile" value="<?=$detail->user_mobile;?>" maxlength="12" placeholder="Input Handphone" autocomplete="off"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-md-line-input">
                                            <label class="col-md-3 control-label">Email</label>
                                            <div class="col-md-9">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="email" value="<?=$detail->user_email;?>" placeholder="Input Email" autocomplete="off" readonly/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Level</label>
                                            <div class="col-md-5">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <select class="form-control" name="lstLevel">
                                                        <option value="">- Choose -</option>
                                                        <option value="Admin" <?php if ($detail->user_level == 'Admin') {echo "selected";}?>>Admin</option>
                                                        <option value="Operator" <?php if ($detail->user_level == 'Operator') {echo "selected";}?>>Operator</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Status</label>
                                            <div class="col-md-5">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <select class="form-control" name="lstStatus">
                                                        <option value="">- Choose -</option>
                                                        <option value="Aktif" <?php if ($detail->user_status == 'Aktif') {echo "selected";}?>>Aktif</option>
                                                        <option value="Tidak Aktif" <?php if ($detail->user_status == 'Tidak Aktif') {echo "selected";}?>>Tidak Aktif</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions" align="center">
                                <button type="submit" class="btn green"><i class="fa fa-floppy-o"></i> Update</button>
                                <a href="<?=site_url('admin/users');?>" class="btn btn-warning"><i class="fa fa-times"></i> Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

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
            name: {
                required: true, minlength: 5
            },
            mobile: {
                required: true, minlength: 11, number: true
            },
            lstLevel: {
                required: true
            },
            lstStatus: {
                required: true
            }
        },
        messages: {
            name: {
                required:'Username required', minlength:'Minimal 5 Char'
            },
            mobile: {
                required:'Handphone required', minlength:'Minimal 11 Digit', number:'Only Number'
            },
            lstLevel: {
                required:'Level required'
            },
            lstStatus: {
                required:'Status required'
            }
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
            dataString = $("#formInput").serialize();
            $.ajax({
                url: "<?=site_url('admin/users/updatedata');?>",
                type: "POST",
                data: dataString,
                dataType: 'JSON',
                success: function(data) {
                    swal({
                        title:"Success",
                        text: "Update Data Success",
                        showConfirmButton: false,
                        type: "success",
                        timer: 2000
                    }, function() {
                        window.location="<?=site_url('admin/users');?>";
                    });
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Error Update Data');
                }
            });
        }
    });
});
</script>