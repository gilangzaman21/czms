
<div class="panel panel-inverse" data-sortable-id="table-basic-2">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">Menu Read</h4>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
	    <tr><td>posisi</td><td><?php echo $posisi; ?></td></tr>
	    <tr><td>nama_menu</td><td><?php echo $nama_menu; ?></td></tr>
	    <tr><td>icon</td><td><?php echo $icon; ?></td></tr>
	    <tr><td>link</td><td><?php echo $link; ?></td></tr>
	    <tr><td>parent</td><td><?php echo $parent; ?></td></tr>
	    <tr><td>aktif</td><td><?php echo $aktif; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('protected/menu') ?>" class="btn btn-default">Cancel</button></td></tr>
	</table>
                        </div>
                    </div>