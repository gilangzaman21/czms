<div class="panel panel-inverse" data-sortable-id="table-basic-2">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">Provinsi <?php echo $button ?></h4>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="varchar">STATUS <?php echo form_error('status') ?></label>
                <input type="text" class="form-control" name="status" id="status" placeholder="status" value="<?php echo $status; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">NAMA PROVINSI <?php echo form_error('nama_provinsi') ?></label>
                <input type="text" class="form-control" name="nama_provinsi" id="nama_provinsi" placeholder="nama_provinsi" value="<?php echo $nama_provinsi; ?>" />
            </div>
	    <input type="hidden" name="provinsiID" value="<?php echo $provinsiID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('protected/provinsi') ?>" class="btn btn-default">Cancel</a>
	</form></div>
                    </div>