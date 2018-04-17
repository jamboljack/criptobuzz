<link href="<?=base_url();?>backend/js/sweetalert2.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url();?>backend/js/sweetalert2.min.js"></script>

<script>
    function hapusData(category_id) {
        var id = category_id;
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
                url : "<?=site_url('admin/category/deletedata')?>/"+id,
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
        <h3 class="page-title">Category</h3>
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
                    <a href="#">Dynamic Menu</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Category</a>
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
                            <i class="fa fa-list"></i> Category List
                        </div>
                    </div>
                    <div class="portlet-body">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#formModalAdd">
                            <i class="fa fa-plus-circle"></i> Add Data
                        </button>
                        <a data-toggle="modal" data-target="#filterData">
                            <button type="button" class="btn btn-warning"><i class="fa fa-search"></i> Filter Data</button>
                        </a>
                        <br><br>
                        <table class="table table-striped table-hover" id="tableData">
                            <thead>
                                <tr>
                                    <th width="5%"></th>
                                    <th width="5%">No</th>
                                    <th width="20%">Main Category</th>
                                    <th width="20%">Sub Category</th>
                                    <th>Category Name</th>
                                    <th width="10%">Level</th>
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
            "url": "<?=site_url('admin/category/data_list');?>",
            "type": "POST",
            "data": function(data) {
                data.lstMainCategory  = $('#lstMainCategory').val();
            }
        },
        "columnDefs": [
            {
                "targets": [ 0, 1],
                "orderable": false,
            },
        ],
    });

    $('#btn-filter').click(function() {
        reload_table();
        $('#filterData').modal('hide');
    });

    $('#btn-reset').click(function() {
        $('#form-filter')[0].reset();
        reload_table();
        $('#filterData').modal('hide');
    });
});

// Reset Form Input
function resetformInput() {
    $("#lstMain").val('');
    $("#lstSubCategory").val('0');
    $("#name").val('');

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
            lstMain: { required: true },
            name: { required: true }
        },
        messages: {
            lstMain: { required :'Main Category required' },
            name: { required :'Category Name required' }
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
            dataString = $("#formInput").serialize();
            $.ajax({
                url: '<?=site_url('admin/category/savedata');?>',
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
        url : "<?=site_url('admin/category/get_data/');?>"+id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
            $('#id').val(data.category_id);
            $('#maincategory_id').val(data.maincategory_id);
            $('#lstSubCategory_Id').val(data.category_head);
            $('#category_name').val(data.category_name);
            // document.getElementById("lstSubCategory_Id").disabled = true;
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
            lstMain: { required: true },
            name: { required: true }
        },
        messages: {
            lstMain: { required :'Main Category required' },
            name: { required :'Category Name required' }
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
                url: '<?=site_url('admin/category/updatedata');?>',
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

function ViewSubCategory() {
    maincategory_id = document.getElementById("lstMain").value;
    $.ajax({
        url:"<?=site_url('admin/category/view_subcategory/');?>"+maincategory_id,
        success: function(response) {
            $("#lstSubCategory").html(response);
        },
        dataType:"html"
    });
    return false;
}

function ViewSubCategoryEdit() {
    maincategory_id = document.getElementById("maincategory_id").value;
    $.ajax({
        url:"<?=site_url('admin/category/view_subcategory/');?>"+maincategory_id,
        success: function(response) {
            $("#lstSubCategory_Id").html(response);
            // document.getElementById("lstSubCategory_Id").disabled = false;
        },
        dataType:"html"
    });
    return false;
}
</script>

<div class="modal" id="formModalAdd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" action="" method="post" id="formInput" class="form-horizontal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Form Add Category</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Main Category</label>
                    <div class="col-md-9">
                        <select class="form-control" name="lstMain" id="lstMain" onchange="ViewSubCategory()" required>
                            <option value="">- Choose Main -</option>
                            <?php 
                            foreach($listMain as $r) {
                            ?>
                            <option value="<?=$r->maincategory_id;?>"><?=$r->maincategory_name;?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Sub Category</label>
                    <div class="col-md-9">
                        <?php
                        $style_sub = 'class="form-control" id="lstSubCategory"';
                        echo form_dropdown("lstSubCategory", array('0' => '- Choose Sub Category -'), '',$style_sub);
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Category Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Input Category Name" name="name" id="name" autocomplete="off">
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
            <form role="form" action="" method="post" id="formEdit" class="form-horizontal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-edit"></i> Form Edit Category</h4>
                <input type="hidden" name="id" id="id">
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Main Category</label>
                    <div class="col-md-9">
                        <select class="form-control" name="lstMain" id="maincategory_id" onchange="ViewSubCategoryEdit()" required>
                            <option value="">- Choose Main -</option>
                            <?php 
                            foreach($listMain as $r) {
                            ?>
                            <option value="<?=$r->maincategory_id;?>"><?=$r->maincategory_name;?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Sub Category</label>
                    <div class="col-md-9">
                        <select class="form-control" name="lstSubCategory" id="lstSubCategory_Id">
                            <option value="0">- Choose Sub Category -</option>
                            <?php
                            foreach($listCategory as $r) {
                            ?>
                            <option value="<?=$r->category_id;?>"><?=$r->category_name.' - '.$r->category_level;?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Category Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Input Category Name" name="name" id="category_name" autocomplete="off">
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

<div class="modal" id="filterData" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" id="form-filter" class="form-horizontal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-search"></i> Filter Data</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-md-4 control-label">Main Category</label>
                    <div class="col-md-8">
                        <select class="form-control" name="lstMainCategory" id="lstMainCategory">
                            <option value="">ALL MAIN CATEGORY</option>
                            <?php 
                            foreach($listMain as $r) {
                            ?>
                            <option value="<?=$r->maincategory_id;?>"><?=$r->maincategory_name;?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" id="btn-filter"><i class="fa fa-search"></i> Filter</button>
                <button type="button" class="btn btn-default" id="btn-reset"><i class="fa fa-refresh"></i> Reset</button>
            </div>
            </form>
        </div>
    </div>
</div>