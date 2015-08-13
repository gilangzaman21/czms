
<div class="panel panel-inverse" data-sortable-id="table-basic-2">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">USER Read</h4>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
	    <tr><td>USER FULLNAME</td><td><?php echo $user_fullname; ?></td></tr>
	    <tr><td>USER EMAIL</td><td><?php echo $user_email; ?></td></tr>
	    <tr><td>USER PICTURE</td><td><?php echo $user_picture; ?></td></tr>
	    <tr><td>USER USERNAME</td><td><?php echo $user_username; ?></td></tr>
	    <tr><td>USER PASSWORD</td><td>******</td></tr>
	    <tr><td>USER LAST LOGIN</td><td><?php echo $user_last_login; ?></td></tr>
	    <tr><td>USER RULES</td><td><?php echo $user_rules; ?></td></tr>
	    <tr><td>STATUS</td><td><?php echo $status; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('protected/user') ?>" class="btn btn-default">Cancel</button></td></tr>
	</table>
                        </div>
                    </div>