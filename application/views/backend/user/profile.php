    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card card-chart">
                    <div class="card-header">
                    <h4 class="card-title">Edit Profile</h4>
                        <div class="">
                            <?php echo $this->session->flashdata('message');?>
                            <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 grid-margin stretch-card">
                                    <div class="">
                                        <div class="card-body">
                                        <?php echo form_open_multipart('admin/profile');?>
                                            <div class="d-flex flex-row">
                                            <img src="<?php echo base_url('assets/backend/images/uploads/admins/').$user['image'];?>" alt="user" class=""  id="profileImage"  width="300" height="300">
                                            <input type="file" id="image" name="image" style="display: none;"/>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                        <div class="custom-file">
                                            <input type="hidden" name="id" value="<?php echo $user['id'];?>">
                                            <span for="image" class="text-dark">
                                                <a href="javascript:updateImage()">Change Piture</a>
                                            </span>
                                        </div>
                                        <span class="text-danger ml-4" id="imageerror"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                            <label>username <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $user['username'] ?? set_value('username');?>">
                                            <span class="text-danger"><?php echo form_error('username');?></span>
                                            </div>
                                            <div class="form-group">
                                            <label>Email Address <span class="text-danger">*</span> </label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" value="<?php echo $user['email'];?>" readonly>
                                            <span class="text-danger"><?php echo form_error('email');?></span>  
                                            </div>
                                            <div class="form-group">
                                            <label>Role <span class="text-danger">*</span> </label>
                                            <select name="role_id" id="roleid" class="form-control input-user-roleid">
                                                <option value="<?php echo $user['role_id'] ?? set_value('role_id');?>">
                                                        <?php 
                                                        if($user['role_id'] == 1){echo "Administrator";
                                                        }elseif($user['role_id'] == 2){
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
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                                <a href="<?php echo base_url('admin/users');?>" class="btn btn-default">CANCEL</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
