
<div class="panel panel-inverse" data-sortable-id="table-basic-2">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">MENU Read</h4>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
	    <tr><td>POSISI</td><td><?php echo $posisi; ?></td></tr>
	    <tr><td>NAMA_MENU</td><td><?php echo $nama_menu; ?></td></tr>
	    <tr><td>ICON</td><td><?php echo $icon; ?></td></tr>
	    <tr><td>LINK</td><td><?php echo $link; ?></td></tr>
	    <tr><td>PARENT</td><td><?php echo $parent; ?></td></tr>
	    <tr><td>RULES</td><td><?php echo $rules; ?></td></tr>
	    <tr><td>AKTIF</td><td><?php echo $aktif; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('protected/menu') ?>" class="btn btn-default">Cancel</button></td></tr>
	</table>
                        </div>
                    </div>