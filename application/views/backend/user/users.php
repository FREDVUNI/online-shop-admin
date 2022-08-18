<div class="panel-header panel-header-sm">
</div>
<div class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card card-chart">
                    <div class="card-header">
                    <div class="float-right">
                        <a href="<?php echo base_url('admin/register'); ?>" class="text-dark">
                        <i class="now-ui-icons ui-1_simple-add"></i> ADD ADMIN</a>
                    </div>
                    <h4 class="card-title">Users</h4>
                    <div class="">
                        <div class="card-body">
                        <div class="row">
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table">
                            <thead class="text-primary">
                            <tr>
                                <th>Image</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Join Date</th>
                            </tr>           
                            </thead>
                            <tbody>
                                <?php foreach ($userinfo as $row):?>
                                <tr>
                                    <td class="py-1">
                                        <img src="<?php echo base_url('assets/backend/images/uploads/admins/').$row['image'];?>"  alt="image" class="profile-pic rounded-circle" width="35px" height="35px">
                                    </td>
                                    <td><?php echo $row['username'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td>
                                    <?php 
                                        if($row['role_id'] == 1):
                                            echo "Administrator";
                                        elseif($row['role_id'] == 2):
                                            echo "member";
                                        else:
                                            echo "No Role";
                                        endif;
                                    ?>
                                    </td>
                                    <td><?php echo date("d-m-Y g:i A", strtotime($row['date_created']));?></td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                            <tfoot class="text-primary">
                                <tr>
                                    <th>Image</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Join Date</th>
                                </tr>           
                            </tfoot>
                            </table>
                            </div>
                            </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                        