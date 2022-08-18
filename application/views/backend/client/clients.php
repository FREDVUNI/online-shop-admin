<div class="panel-header panel-header-sm">
</div>
<div class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card card-chart">
                    <div class="card-header">
                    <h4 class="card-title">Clients</h4>
                    <?php echo $this->session->flashdata('message');?>
                        <div class="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 grid-margin stretch-card">
                                    <div class="table-responsive">
                                        <table class="table">
                                        <thead class="text-primary">
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Country</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th></th>
                                        </tr>           
                                        </thead>
                                        <tbody>
                                           <?php foreach($client as $key=> $row): ?>
                                            <tr>
                                                <td><?php echo $key + 1; ?></td>
                                                <td><?php echo $row['fullname'] ?></td>
                                                <td><?php echo $row['country']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['phone']; ?></td>
                                                <td>
                                                    <a href="<?php echo $row['fullname'];?>" class="text-danger"  data-toggle="modal" data-target="#delete<?php echo $row['id']; ?>">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                           <?php endforeach; ?>
                                        </tbody>
                                        <tfoot class="text-primary">
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Country</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th></th>
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

            <?php foreach($client as $row):?>
            <div class="modal fade none-border" id="delete<?php echo $row['id']?>">
                <div class="modal-dialog model-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Client</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex flex-row comment-row m-t-0">
                                <p>
                                    Are You Sure You Want To Delete <strong><?php echo $row["fullname"]?></strong> ?
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <?php echo form_open_multipart('admin/delete/client/' . $row['id']); ?>
                                <input type="hidden" name="id" value="<?php echo $row['id'];?>" >
                                <button type="submit" class="btn btn-primary btn-sm" >Delete</button>
                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>                         
                </div>
            </div>
        <?php endforeach; ?>      