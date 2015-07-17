<div class="panel panel-inverse" data-sortable-id="table-basic-2">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">Menu <?php echo $button ?></h4>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="int">Posisi <?php echo form_error('posisi') ?></label>
                <input type="text" class="form-control" name="posisi" id="posisi" placeholder="posisi" value="<?php echo $posisi; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">Nama_menu <?php echo form_error('nama_menu') ?></label>
                <input type="text" class="form-control" name="nama_menu" id="nama_menu" placeholder="nama_menu" value="<?php echo $nama_menu; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">Icon <?php echo form_error('icon') ?></label>
                <input type="text" class="form-control" name="icon" id="icon" placeholder="icon" value="<?php echo $icon; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">Link <?php echo form_error('link') ?></label>
                <input type="text" class="form-control" name="link" id="link" placeholder="link" value="<?php echo $link; ?>" />
            </div>
	    <div class="form-group">
                <label for="int">Parent <?php echo form_error('parent') ?></label>
                <input type="text" class="form-control" name="parent" id="parent" placeholder="parent" value="<?php echo $parent; ?>" />
            </div>
	    <div class="form-group">
                <label for="enum">Aktif <?php echo form_error('aktif') ?></label>
                <input type="text" class="form-control" name="aktif" id="aktif" placeholder="aktif" value="<?php echo $aktif; ?>" />
            </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('protected/menu') ?>" class="btn btn-default">Cancel</a>
	</form></div>
                    </div>