<link href="<?=base_url();?>backend/js/sweetalert2.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url();?>backend/js/sweetalert2.min.js"></script>
<link href="<?=base_url();?>backend/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>

<script>
    function hapusData(banner_id) {
        var id = banner_id;
        swal({
            title: 'Are you Sure ?',
            text: 'This Data will be Deleted !',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            closeOnConfirm: true
        }, function(isConfirm) {
            if (!isConfirm) return;
            $.ajax({
                url : "<?=site_url('admin/banner/deletedata')?>/"+id,
                type: "POST",
                dataType: "JSON",
                success: function(data) {
                    swal({
                        title:"Success",
                        text: "Delete Data Success",
                        showConfirmButton: false,
                        type: "success",
                        timer: 2000
                    });
                    reload_table();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Error Delete Data');
                }
            });
        });
    }
</script>

<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title">Banner</h3>
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
                    <a href="#">Banner</a>
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
                            <i class="fa fa-list"></i> Banner List
                        </div>
                    </div>
                    <div class="portlet-body">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#formModalAdd">
                            <i class="fa fa-plus-circle"></i> Add Data
                        </button>
                        <br><br>
                        <table class="table table-striped table-hover" id="tableData">
                            <thead>
                                <tr>
                                    <th width="5%"></th>
                                    <th width="5%">No</th>
                                    <th width="20%">Name</th>
                                    <th width="20%">URL</th>
                                    <th>Image</th>
                                </tr>
                            </thead>

                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
</div>

<script type="text/javascript" src="<?=base_url();?>backend/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
<script type="text/javascript" src="<?=base_url();?>backend/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>backend/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>backend/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>

<script type="text/javascript">
var table;
$(document).ready(function() {
    table = $('#tableData').DataTable({
        "pageLength" : 10,
        "responsive": true,
        "processing": false,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": "<?=site_url('admin/banner/data_list');?>",
            "type": "POST"
        },
        "columnDefs": [
        {
            "targets": [ 0, 1, 4],
            "orderable": false,
        },
        ],
    });
});

// Reset Form Input
function resetformInput() {
    $("#name").val('');
    $("#url").val('');
    $("#lstPost").val('');
    $("#foto").val('');

    var MValid = $("#formInput");
    MValid.validate().resetForm();
    MValid.find(".has-error").removeClass("has-error");
    MValid.removeAttr('aria-describedby');
    MValid.removeAttr('aria-invalid');
}

// Reset Form Edit
function resetformEdit() {
    var MValid = $("#formEdit");
    MValid.validate().resetForm();
    MValid.find(".has-error").removeClass("has-error");
    MValid.removeAttr('aria-describedby');
    MValid.removeAttr('aria-invalid');
}

function reload_table() {
    table.ajax.reload(null,false);
}

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
            url: { required: true, url: true },
            lstPost: { required: true },
            foto: { required: true }
        },
        messages: {
            name: {
                required :'Name required'
            },
            url: {
                required :'URL required', url:'URL must be Valid'
            },
            lstPost: {
                required :'Choose Position required'
            },
            foto: {
                required :'Image required'
            }
        },
        invalidHandler: function (event, validator) {
            success.hide();
            error.show();
            Metronic.scrollTo(error, -200);
        },
        highlight: function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        success: function (label) {
            label.closest('.form-group').removeClass('has-error');
        },
        submitHandler: function(form) {
            var formData = new FormData($('#formInput')[0]);
            $.ajax({
                url: '<?=site_url('admin/banner/savedata');?>',
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
                    $('#formModalAdd').modal('hide');
                    reload_table();
                },
                error: function (response) {
                    swal({
                        title:"Error",
                        text: "Save Data Failed",
                        showConfirmButton: false,
                        type: "error",
                        timer: 2000
                    });
                    $('#formModalAdd').modal('hide');
                    reload_table();
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });
});

function edit_data(id) {
    $('#formEdit')[0].reset();
    $.ajax({
        url : "<?=site_url('admin/banner/get_data/');?>"+id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
            $('#id').val(data.banner_id);
            $('#banner_name').val(data.banner_name);
            $('#banner_position').val(data.banner_position);
            $('#banner_url').val(data.banner_url);
            $('#banner_image').val(data.banner_image);
            $path = '<?=base_url();?>img/';
            if (data.banner_image != null) {
                $('#previewFoto').attr('src', $path+'banner_folder/'+data.banner_image);
            } else {
                $('#previewFoto').attr('src', $path+'no-image.png');
            }
            $('#formModalEdit').modal('show');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert('Error get data from ajax');
        }
    });
}

$(document).ready(function() {
    var form        = $('#formEdit');
    var error       = $('.alert-danger', form);
    var success     = $('.alert-success', form);

    $("#formEdit").validate({
        errorElement: 'span',
        errorClass: 'help-block help-block-error',
        focusInvalid: false,
        ignore: "",
        rules: {
            name: { required: true },
            url: { required: true, url: true },
            lstPost: { required: true }
        },
        messages: {
            name: {
                required :'Name required'
            },
            url: {
                required :'URL required', url:'URL must be Valid'
            },
            lstPost: {
                required :'Choose Position required'
            }
        },
        invalidHandler: function (event, validator) {
            success.hide();
            error.show();
            Metronic.scrollTo(error, -200);
        },
        highlight: function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        success: function (label) {
            label.closest('.form-group').removeClass('has-error');
        },
        submitHandler: function(form) {
            var formData = new FormData($('#formEdit')[0]);
            $.ajax({
                url: '<?=site_url('admin/banner/updatedata');?>',
                type: "POST",
                dataType: 'json',
                data: formData,
                async: true,
                success: function(data) {
                    if (data.status === 'success') {
                        swal({
                            title:"Success",
                            text: "Updata Data Sukses",
                            showConfirmButton: false,
                            type: "success",
                            timer: 2000
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
                    $('#formModalEdit').modal('hide');
                    reload_table();
                },
                error: function (response) {
                    swal({
                        title:"Error",
                        text: "Updata Data Failed",
                        showConfirmButton: false,
                        type: "error",
                        timer: 2000
                    });
                    $('#formModalEdit').modal('hide');
                    reload_table();
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });
});
</script>

<div class="modal" id="formModalAdd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" action="" method="post" id="formInput" class="form-horizontal" enctype="multipart/form-data">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Form Add Banner</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Banner Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Input Banner Name" name="name" id="name" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">URL</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Input URL" name="url" id="url" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Position</label>
                    <div class="col-md-9">
                        <select class="form-control" name="lstPost" id="lstPost" required>
                            <option value="">- Choose -</option>
                            <option value="Top">Top</option>
                            <option value="Side">Side</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Image</label>
                    <div class="col-md-9">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="<?=base_url('img/no-image.png');?>" alt=""/>
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 300px; max-height: 150px;"></div>
                            <div>
                                <span class="btn default btn-file">
                                <span class="fileinput-new">
                                Choose Banner </span>
                                <span class="fileinput-exists">
                                Change </span>
                                <input type="file" name="foto" accept=".png,.jpg,.jpeg,.gif" required>
                                </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                                Remove </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Save</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal" id="formModalEdit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" action="" method="post" id="formEdit" class="form-horizontal" enctype="multipart/form-data">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-edit"></i> Form Edit Banner</h4>
                <input type="hidden" name="id" id="id">
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Banner Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Input Banner Name" name="name" id="banner_name" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">URL</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Input URL" name="url" id="banner_url" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Position</label>
                    <div class="col-md-9">
                        <select class="form-control" name="lstPost" id="banner_position" required>
                            <option value="">- Choose -</option>
                            <option value="Top">Top</option>
                            <option value="Side">Side</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Image</label>
                    <div class="col-md-9">
                        <img src="" style="width:60%;" id="previewFoto">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Choose Image</label>
                    <div class="col-md-9">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="<?=base_url('img/no-image.png');?>" alt=""/>
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 300px; max-height: 150px;"></div>
                            <div>
                                <span class="btn default btn-file">
                                <span class="fileinput-new">
                                Choose Banner </span>
                                <span class="fileinput-exists">
                                Change </span>
                                <input type="file" name="foto" accept=".png,.jpg,.jpeg,.gif">
                                </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                                Remove </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Update</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>