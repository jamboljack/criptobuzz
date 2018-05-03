<link href="<?=base_url();?>backend/js/sweetalert2.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url();?>backend/js/sweetalert2.min.js"></script>

<script>
    function hapusData(comment_id) {
        var id = comment_id;
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
                url : "<?=site_url('admin/comment/deletedata')?>/"+id,
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
        <h3 class="page-title">Comment</h3>
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
                    <a href="#">Comment</a>
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
                            <i class="fa fa-list"></i> Comment List
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-hover" id="tableData">
                            <thead>
                                <tr>
                                    <th width="5%"></th>
                                    <th width="5%">No</th>
                                    <th width="10%">Post</th>
                                    <th width="10%">Username</th>
                                    <th width="20%">Title</th>
                                    <th>Comment</th>
                                    <th width="5%">Status</th>
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
            "url": "<?=site_url('admin/comment/data_list');?>",
            "type": "POST"
        },
        "columnDefs": [
        {
            "targets": [ 0, 1],
            "orderable": false,
        },
        ],
    });
});

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

function edit_data(id) {
    $('#formEdit')[0].reset();
    $.ajax({
        url : "<?=site_url('admin/comment/get_data/');?>"+id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
            $('#id').val(data.comment_id);
            $('#title').val(data.article_title);
            $('#comment').val(data.comment_desc);
            $('#reply').val(data.comment_reply);
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
            reply: { required: true }
        },
        messages: {
            reply: { required :'Reply Comment required' }
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
            dataString = $("#formEdit").serialize();
            $.ajax({
                url: '<?=site_url('admin/comment/replydata');?>',
                type: "POST",
                data: dataString,
                success: function(data) {
                    swal({
                        title:"Success",
                        text: "Reply Comment Success",
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

<div class="modal" id="formModalEdit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" action="" method="post" id="formEdit" class="form-horizontal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-edit"></i> Reply Comment</h4>
                <input type="hidden" name="id" id="id">
            </div>
            <div class="modal-body">
                <div class="form-group form-md-line-input">
                    <label class="col-md-3 control-label">Article Title</label>
                    <div class="col-md-9">
                        <textarea class="form-control" rows="3" name="title" id="title" readonly></textarea>
                    </div>
                </div>
                <div class="form-group form-md-line-input">
                    <label class="col-md-3 control-label">Comment</label>
                    <div class="col-md-9">
                        <textarea class="form-control" rows="10" name="comment" id="comment" readonly></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Reply Comment</label>
                    <div class="col-md-9">
                        <textarea class="form-control" rows="10" name="reply" id="reply"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="fa fa-reply"></i> Reply</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            </div>
            </form>
        </div>
    </div>
</div>