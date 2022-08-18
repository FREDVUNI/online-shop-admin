<div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card card-chart">
                    <div class="card-header">
                    <h4 class="card-title">Change Password</h4>
                    <?php echo $this->session->flashdata('message');?>
                    <form action="<?php echo base_url('admin/changepassword');?>" method="POST">
                        <div class="">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 grid-margin stretch-card">
                                        <div class="form-group">
                                        <label for="current">Current Password<span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="current" placeholder="Enter Current Password" value="<?php echo set_value('current');?>">
                                        <span class="text-danger"><?php echo form_error('current');?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="new">New Password<span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="new" placeholder="Enter New Password"  value="<?php echo set_value('new');?>">
                                        <span class="text-danger"><?php echo form_error('new');?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm">Confirm Password<span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="confirm" placeholder="Confirm New Password"  value="<?php echo set_value('confirm');?>">
                                        <span class="text-danger"><?php echo form_error('confirm');?></span>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                        <a href="javascript:history.back()" class="btn btn-secondary">CANCEL</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>