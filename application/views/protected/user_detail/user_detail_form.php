<div class="panel panel-inverse" data-sortable-id="table-basic-2">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">USER_DETAIL <?php echo $button ?></h4>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="int">USER_ID <?php echo form_error('user_id') ?></label>
                <?php echo dropdown('user_id', 'user', 'user_username', 'id','','',array('--USER--'=>$user_id))?>
        </div>
	    <div class="form-group">
                <label for="varchar">USER_DETAIL_FULLNAME <?php echo form_error('user_detail_fullname') ?></label>
                <input type="text" class="form-control" name="user_detail_fullname" id="user_detail_fullname" placeholder="user_detail_fullname" value="<?php echo $user_detail_fullname; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">USER_DETAIL_EMAIL <?php echo form_error('user_detail_email') ?></label>
                <input type="text" class="form-control" name="user_detail_email" id="user_detail_email" placeholder="user_detail_email" value="<?php echo $user_detail_email; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">USER_DETAIL_PICTURE <?php echo form_error('user_detail_picture') ?></label>
                <input type="text" class="form-control" name="user_detail_picture" id="user_detail_picture" placeholder="user_detail_picture" value="<?php echo $user_detail_picture; ?>" />
            </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('protected/user_detail') ?>" class="btn btn-default">Cancel</a>
	</form></div>
                    </div>