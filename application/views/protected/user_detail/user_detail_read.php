
<div class="panel panel-inverse" data-sortable-id="table-basic-2">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">User_detail Read</h4>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
	    <tr><td>user_id</td><td><?php echo $user_id; ?></td></tr>
	    <tr><td>user_detail_fullname</td><td><?php echo $user_detail_fullname; ?></td></tr>
	    <tr><td>user_detail_email</td><td><?php echo $user_detail_email; ?></td></tr>
	    <tr><td>user_detail_picture</td><td><?php echo $user_detail_picture; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('protected/user_detail') ?>" class="btn btn-default">Cancel</button></td></tr>
	</table>
                        </div>
                    </div>