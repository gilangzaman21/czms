<div class="panel panel-inverse" data-sortable-id="table-basic-2">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">USER <?php echo $button ?></h4>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
	    <div class="form-group">
                <label for="varchar">USER FULLNAME <?php echo form_error('user_fullname') ?></label>
                <input type="text" class="form-control" name="user_fullname" id="user_fullname" placeholder="user_fullname" value="<?php echo $user_fullname; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">USER EMAIL <?php echo form_error('user_email') ?></label>
                <input type="text" class="form-control" name="user_email" id="user_email" placeholder="user_email" value="<?php echo $user_email; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">USER PICTURE <?php echo form_error('user_picture') ?></label>
                <input type="file" name="user_picture" id="user_picture" size="20" />
            </div>
	    <div class="form-group">
                <label for="varchar">USER USERNAME <?php echo form_error('user_username') ?></label>
                <input type="text" class="form-control" name="user_username" id="user_username" placeholder="user_username" value="<?php echo $user_username; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">USER PASSWORD <?php echo form_error('user_password') ?></label>
                <input type="text" class="form-control" name="user_password" id="user_password" placeholder="user_password" value="<?php echo $user_password; ?>" />
            </div>
	    
	    <div class="form-group">
                <label for="enum">USER RULES <?php echo form_error('user_rules') ?></label>
                <select class="form-control" name="user_rules" id="user_rules">
                    <option value="<?php echo $user_rules; ?>">-- SET RULES --</option>
                    <option value="registered_user">Registered User</option>
                    <option value="admin">Administrator</option>
                    <option value="super_admin">Super Admin</option>
                </select>
            </div>


	    <div class="form-group">
                <label for="enum">STATUS <?php echo form_error('status') ?></label>
                <select class="form-control" name="status" id="status">
                    <option value="<?php echo $status; ?>">-- SET STATUS --</option>
                    <option value="aktif">Aktif</option>
                    <option value="blokir">Blokir</option>
                    <option value="belum aktif">Belum Aktif</option>
                </select>
            </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('protected/user') ?>" class="btn btn-default">Cancel</a>
	</form></div>
                    </div>