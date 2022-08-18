<div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card card-chart">
                    <div class="card-header">
                    <h4 class="card-title">Add New Admin</h4>
                    <?php echo $this->session->flashdata('message');?>
                    <form action="<?php echo base_url('admin/register');?>" method="POST">
                        <div class="">
                                <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 grid-margin stretch-card">
                                        <div class="">
                                            <div class="card-body">
                                            <div class="col-md-12 form-group">
                                                <label>username <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" value="<?php echo set_value('username');?>">
                                                <span class="text-danger"><?php echo form_error('username');?></span>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label>Email Address <span class="text-danger">*</span> </label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address" value="<?php echo set_value('email');?>">
                                                <span class="text-danger"><?php echo form_error('email');?></span>  
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label>Role <span class="text-danger">*</span> </label>
                                                    <select name="role_id" id="roleid" class="form-control input-user-roleid">
                                                        <option value="<?php echo set_value('role_id');?>">
                                                                <?php 
                                                                if(set_value('role_id') == 1){echo "Administrator";
                                                                }elseif(set_value('role_id') == 2){
                                                                    echo "member";
                                                                }else{
                                                                    echo "Choose type";
                                                                }
                                                                ?>
                                                        </option>
                                                        <option value="1">Administrator</option>
                                                        <option value="2">member</option>
                                                    </select>
                                                <span class="text-danger"><?php echo form_error('role_id');?></span>
                                            </div>
                                                <div class="col-md-12 form-group">
                                                    <label>Password <span class="text-danger">*</span> </label>
                                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password"  value="<?php echo set_value('password');?>">
                                                    <span class="text-danger"><?php echo form_error('password');?></span>  
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <label>Confirm Password <span class="text-danger">*</span> </label>
                                                    <input type="password" class="form-control" name="confirm" id="password" placeholder="Confirm Password" value="<?php echo set_value('confirm');?>">
                                                    <span class="text-danger"><?php echo form_error('confirm');?></span>  
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                                    <a href="<?php echo base_url('admin/users');?>" class="btn btn-secondary">CANCEL</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <script src="<?php echo base_url('assets/backend/');?>js/core/jquery.min.js"></script>
                    <script>
                    function updateImage(){
                            $('#image').click();
                            $('#imageerror').text('')
                        }
                        $('#image').change(function () {
                            var imgLivePath = this.value;
                            var img_extions = imgLivePath.substring(imgLivePath.lastIndexOf('.') + 1).toLowerCase();
                            if (img_extions == "gif" || img_extions == "png" || img_extions == "jpg" || img_extions == "jpeg")
                                readURL(this);
                            else
                            $('#imageerror').text('Please select a valid image file.')
                        });
                        function readURL(input) {
                            if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.readAsDataURL(input.files[0]);
                            reader.onload = function (e) {
                                $('#profileImage').attr('src', e.target.result);
                                $('#imageerror').text('')
                            };
                          }
                        }
                    </script>
