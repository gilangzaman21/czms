
<div class="panel panel-inverse" data-sortable-id="table-basic-2">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">Kota Read</h4>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
	    <tr><td>STATUS</td><td><?php echo $status; ?></td></tr>
	    <tr><td>PROVINSIID</td><td><?php echo $provinsiID; ?></td></tr>
	    <tr><td>NAMA KOTA</td><td><?php echo $nama_kota; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('protected/kota') ?>" class="btn btn-default">Cancel</button></td></tr>
	</table>
                        </div>
                    </div>