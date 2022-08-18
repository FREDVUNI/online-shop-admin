<div class="panel-header panel-header-sm">
</div>
<div class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card card-chart">
                    <div class="card-header">
                    <div class="float-right">
                        <a href="<?php echo base_url('admin/add/category'); ?>" class="text-dark">
                        <i class="now-ui-icons ui-1_simple-add"></i> ADD CATEGORY</a>
                    </div>
                    <h4 class="card-title">Catgeories</h4>
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
                                            <th>category</th>
                                            <th>Date created</th>
                                            <th></th>
                                        </tr>           
                                        </thead>
                                        <tbody>
                                           <?php $i=1; foreach($category as $row):?>
                                            <tr>
                                                <td><?php echo $i++;?></td>
                                                <td><?php echo $row["category"]; ?></td>
                                                <td><?php echo date("d-m-Y g:i A", strtotime($row['date_created']));?></td>
                                                <td>
                                                    <a href="<?php echo base_url('admin/category/'.$row['slug']);?>" class="text-info">Edit</a>
                                                    <a href="delete/<?php echo $row['category'];?>" class="text-danger"  data-toggle="modal" data-target="#delete<?php echo $row['slug']; ?>">
                                                        Delete
                                                    </a>
                                                </td> 
                                            </tr>
                                           <?php endforeach; ?> 
                                        </tbody>
                                        <tfoot class="text-primary">
                                        <tr>
                                            <th>#</th>
                                            <th>category</th>
                                            <th>Date created</th>
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

        <?php foreach($category as $row):?>
        <div class="modal fade none-border" id="delete<?php echo $row['slug']?>">
            <div class="modal-dialog model-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo $row['category']; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex flex-row comment-row m-t-0">
                            <p>
                                Are You Sure You Want To Delete <strong><?php echo $row["category"]?></strong> ?
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <form action="<?php base_url('admin/delete/category/'.$row['slug']);?>" method="POST">
                            <input type="hidden" name="catid" value="<?php echo $row['catid'];?>" >
                            <button type="submit" class="btn btn-primary btn-sm" >Delete</button>
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>                         
            </div>
        </div>
    <?php endforeach; ?>