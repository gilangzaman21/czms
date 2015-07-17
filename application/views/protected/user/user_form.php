<div class="panel panel-inverse" data-sortable-id="table-basic-2">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">User <?php echo $button ?></h4>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="varchar">User_username <?php echo form_error('user_username') ?></label>
                <input type="text" class="form-control" name="user_username" id="user_username" placeholder="user_username" value="<?php echo $user_username; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">User_password <?php echo form_error('user_password') ?></label>
                <input type="text" class="form-control" name="user_password" id="user_password" placeholder="user_password" />
            </div>
	    <div class="form-group">
                <label for="enum">User_rules <?php echo form_error('user_rules') ?></label>
                <select class="form-control" name="user_rules" id="user_rules">
                    <option value="<?php echo $user_rules; ?>">-- SET RULES --</option>
                    <option value="registered_user">Registered User</option>
                    <option value="admin">Administrator</option>
                    <option value="super_admin">Super Admin</option>
                </select>
            </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('protected/user') ?>" class="btn btn-default">Cancel</a>
	</form></div>
                    </div>