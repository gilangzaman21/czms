
<div class="panel panel-inverse" data-sortable-id="table-basic-2">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">User Read</h4>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
	    <tr><td>user_username</td><td><?php echo $user_username; ?></td></tr>
	    <tr><td>user_password</td><td><?php echo $user_password; ?></td></tr>
	    <tr><td>user_last_login</td><td><?php echo $user_last_login; ?></td></tr>
	    <tr><td>user_rules</td><td><?php echo $user_rules; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('protected/user') ?>" class="btn btn-default">Cancel</button></td></tr>
	</table>
                        </div>
                    </div>