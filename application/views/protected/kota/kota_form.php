<div class="panel panel-inverse" data-sortable-id="table-basic-2">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">Kota <?php echo $button ?></h4>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="varchar">STATUS <?php echo form_error('status') ?></label>
                <select name="status" id="status" class="form-control selectpicker" data-size="10" data-live-search="true" data-style="btn-white">
                    <option value="<?php echo $status; ?>">-- PILIH STATUS --</option>
                    <option value="Active">Active</option>
                    <option value="inActive">inActive</option>
                </select>
            </div>
	    <div class="form-group">
                <label for="int">PROVINSIID <?php echo form_error('provinsiID') ?></label>
            <?php echo dropdown('provinsiID', 'provinsi', 'nama_provinsi', 'provinsiID','','',array('-- PILIH PROVINSI --'=>$provinsiID))?>
            </div>
	    <div class="form-group">
                <label for="varchar">NAMA KOTA <?php echo form_error('nama_kota') ?></label>
                <input type="text" class="form-control" name="nama_kota" id="nama_kota" placeholder="nama_kota" value="<?php echo $nama_kota; ?>" />
            </div>
	    <input type="hidden" name="kotaID" value="<?php echo $kotaID; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('protected/kota') ?>" class="btn btn-default">Cancel</a>
	</form></div>
                    </div>