<div class="panel-header panel-header-sm">
</div>
<div class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card card-chart">
                    <div class="card-header">
                    <div class="float-right">
                        <a href="<?php echo base_url('admin/add/product'); ?>" class="text-dark">
                        <i class="now-ui-icons ui-1_simple-add"></i> ADD PRODUCT</a>
                    </div>
                    <h4 class="card-title">Products</h4>
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
                                            <th>product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Measure</th>
                                            <th></th>
                                        </tr>           
                                        </thead>
                                        <tbody>
                                           <?php foreach($product as $key=>$row):?>
                                            <tr>
                                                <td><?php echo $key + 1; ?></td>
                                                <td><?php echo word_limiter($row["product"],3);?></td>
                                                <td><?php echo $row["price"];?></td>
                                                <td><?php echo $row["quantity"];?></td>
                                                <td><?php echo $row["measure"];?></td>
                                                <td>
                                                    <a href="<?php echo base_url('admin/product/'.$row['slug']);?>" class="text-info">Edit</a>
                                                    <a href="<?php echo $row['product'];?>" class="text-danger"  data-toggle="modal" data-target="#delete<?php echo $row['slug']; ?>">
                                                        Delete
                                                    </a>
                                                </td> 
                                            </tr>
                                           <?php endforeach; ?> 
                                        </tbody>
                                        <tfoot class="text-primary">
                                        <tr>
                                            <th>#</th>
                                            <th>product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Measure</th>
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

        <?php foreach($product as $row):?>
            <div class="modal fade none-border" id="view<?php echo $row['slug']?>">
            <div class="modal-dialog model-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex flex-row comment-row m-t-0">
                            <p>

                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </div>                         
            </div>
        </div>


        <div class="modal fade none-border" id="delete<?php echo $row['slug']?>">
            <div class="modal-dialog model-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex flex-row comment-row m-t-0">
                            <p>
                                Are You Sure You Want To Delete <strong><?php echo $row["product"]?></strong> ?
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?php echo form_open_multipart('admin/delete/product/' . $row['slug']); ?>
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>" >
                            <button type="submit" class="btn btn-primary btn-sm" >Delete</button>
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>                         
            </div>
        </div>
    <?php endforeach; ?>
    