<link href="<?=base_url();?>backend/js/sweetalert2.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url();?>backend/js/sweetalert2.min.js"></script>

<div class="page-content-wrapper">
    <div class="page-content">
        <h3 class="page-title">Information</h3>
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
                    <a href="#">Blockchain 101</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Information</a>
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
                            <i class="fa fa-list"></i> Information List
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
                                    <th width="20%">Title</th>
                                    <th width="20%">Subtitle</th>
                                    <th width="5%">Icon</th>
                                    <th>Description</th>
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

<script src="<?=base_url();?>backend/assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url();?>backend/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>backend/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>backend/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>

<script type="text/javascript">
function hapusData(information_id) {
    var id = information_id;
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
            url : "<?=site_url('admin/information/deletedata')?>/"+id,
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

function reload_table() {
    table.ajax.reload(null,false);
}

var table;
$(document).ready(function() {
    table = $('#tableData').DataTable({
        "pageLength" : 10,
        "responsive": true,
        "processing": false,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": "<?=site_url('admin/information/data_list');?>",
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
    $("#title").val('');
    $("#subtitle").val('');
    $("#icon").val('');
    $("#desc").val('');

    var MValid = $("#formInput");
    MValid.validate().resetForm();
    MValid.find(".has-error").removeClass("has-error");
    MValid.removeAttr('aria-describedby');
    MValid.removeAttr('aria-invalid');
}

// Reset Form Edit
function resetformEdit() {
    var MValid = $("#formInput");
    MValid.validate().resetForm();
    MValid.find(".has-error").removeClass("has-error");
    MValid.removeAttr('aria-describedby');
    MValid.removeAttr('aria-invalid');
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
            title: { required: true },
            subtitle: { required: true },
            icon: { required: true }
        },
        messages: {
            title: { required :'Title required' },
            subtitle: { required :'Sub Title required' },
            icon: { required :'Icon required' }
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
            for (instance in CKEDITOR.instances)
            {
                CKEDITOR.instances[instance].updateElement();
            }
            dataString = $("#formInput").serialize();
            $.ajax({
                url: '<?=site_url('admin/information/savedata');?>',
                type: "POST",
                data: dataString,
                success: function(data) {
                    swal({
                        title:"Success",
                        text: "Save Data Success",
                        timer: 2000,
                        showConfirmButton: false,
                        type: "success"
                    });
                    $('#formModalAdd').modal('hide');
                    resetformInput();
                    reload_table();
                },
                error: function() {
                    swal({
                        title:"Error",
                        text: "Save Data Failed",
                        timer: 2000,
                        showConfirmButton: false,
                        type: "error"
                    });
                    $('#formModalAdd').modal('hide');
                    resetformInput();
                }
            });
        }
    });
});

function edit_data(id) {
    $('#formEdit')[0].reset();
    $.ajax({
        url : "<?=site_url('admin/information/get_data/');?>"+id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
            $('#id').val(data.information_id);
            $('#information_title').val(data.information_title);
            $('#information_subtitle').val(data.information_subtitle);
            $('#information_icon').val(data.information_icon);
            if (CKEDITOR.instances['information_desc']) {
                CKEDITOR.instances['information_desc'].destroy();
            }
            CKEDITOR.replace('information_desc');
            $('#information_desc').val(data.information_desc);
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
            title: { required: true },
            subtitle: { required: true },
            icon: { required: true }
        },
        messages: {
            title: { required :'Title required' },
            subtitle: { required :'Sub Title required' },
            icon: { required :'Icon required' }
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
            for (instance in CKEDITOR.instances)
            {
                CKEDITOR.instances[instance].updateElement();
            }
            dataString = $("#formEdit").serialize();
            $.ajax({
                url: '<?=site_url('admin/information/updatedata');?>',
                type: "POST",
                data: dataString,
                success: function(data) {
                    swal({
                        title:"Success",
                        text: "Update Data Success",
                        timer: 2000,
                        showConfirmButton: false,
                        type: "success"
                    });
                    $('#formModalEdit').modal('hide');
                    resetformEdit();
                    reload_table();
                },
                error: function() {
                    swal({
                        title:"Error",
                        text: "Update Data Failed",
                        timer: 2000,
                        showConfirmButton: false,
                        type: "error"
                    });
                    $('#formModalEdit').modal('hide');
                    resetformEdit();
                }
            });
        }
    });
});
</script>

<div class="modal fade bs-modal-lg" id="formModalAdd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form role="form"  method="post" id="formInput" class="form-horizontal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Form Add Information</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Title</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" placeholder="Input Title" name="title" id="title" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Sub Title</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" placeholder="Input Sub Title" name="subtitle" id="subtitle" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Icon</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="ex. : fa fa-question-circle, fa fa-database" name="icon" id="icon" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Description</label>
                    <div class="col-md-10">
                        <textarea class="form-control ckeditor" name="desc" id="desc" rows="5"></textarea>
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

<div class="modal fade bs-modal-lg" id="formModalEdit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form role="form"  method="post" id="formEdit" class="form-horizontal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-edit"></i> Form Edit Information</h4>
                <input type="hidden" name="id" id="id">
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-md-2 control-label">Title</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" placeholder="Input Menu Title" name="title" id="information_title" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Sub Title</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" placeholder="Input Sub Title" name="subtitle" id="information_subtitle" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Icon</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="ex. : fa fa-question-circle, fa fa-database" name="icon" id="information_icon" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Description</label>
                    <div class="col-md-10">
                        <textarea class="form-control ckeditor" name="desc" id="information_desc" rows="5"></textarea>
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