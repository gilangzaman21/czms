
<!-- begin col-12 -->
<div class="col-md-12">
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            </div>
            <h4 class="panel-title">User</h4>
        </div>
        <div class="row">
            <div style="margin:10px;padding:10px;">
                <?php echo anchor(site_url('protected/user/create'),'Tambah Data', 'class="btn btn-primary"'); ?>
            </div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
		<th>USERNAME</th>
		<th>LAST LOGIN</th>
		<th>RULES</th>
		<th>ACTION</th>
            </tr>
                
        </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end col-10 -->

<script type="text/javascript" charset="utf-8">
    
    var handleDataTableCombinationSetting = function() {
    "use strict";
    if ($("#data-table").length !== 0) {
        if ($(window).width() >= 767) {
            var e = $("#data-table").DataTable({
                ajax: "<?php echo base_url('protected'); ?>/user/getJson",
                dom: 'TRC<"clear">lfrtip',
                tableTools: {
                    sSwfPath: "<?php echo base_url('assets'); ?>/plugins/DataTables/swf/copy_csv_xls_pdf.swf"
                },
                lengthMenu: [10, 20, 30, 40, 50, 100]
            });
        } else {
            var e = $("#data-table").DataTable({
                ajax: "<?php echo base_url('protected'); ?>/user/getJson",
                dom: '<"clear">frtip',
                lengthMenu: [10, 20, 30, 40, 50, 100]
            })
        }
    }
    };
    var TableManageCombine = function() {
    "use strict";
    return {
        init: function() {
            handleDataTableCombinationSetting()
        }
    }
    }()
    

</script>