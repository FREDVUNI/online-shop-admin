        <div class="panel-header panel-header-sm">
        </div>
        <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div v class="card card-chart">
                    <div class="card-header">
                    <h4 class="card-title">Add New Product</h4>
                    <?php echo $this->session->flashdata('message');?>
                         <div class="card-body">
                        <form action="<?php echo base_url('admin/add/product');?>" method="POST">
                            <div class="row">
                                <div class="col-md-2 grid-margin stretch-card">
                                    <div class="">
                                        <div class="card-body">
                                           
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="product">product<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="product" value="<?php echo set_value('product');?>" placeholder="Enter Product Name">
                                                <span class="text-danger"><?php echo form_error('product');?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Price<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="price" value="<?php echo set_value('price');?>" placeholder="Enter Product Price">
                                                <span class="text-danger"><?php echo form_error('price');?></span>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="category">Category<span class="text-danger">*</span></label>
                                                    <select name="catid" id="catid" class="form-control input-category">
                                                        <option value="">
                                                        Choose A Category
                                                        </option>
                                                        <?php foreach($category as $row):?>
                                                            <option value="<?php echo $row['catid'];?>">
                                                        <?php echo $row['category']; ?>
                                                        </option>
                                                    <?php endforeach;?> 
                                                    </select> 
                                                    <span class="text-danger"><?php echo form_error('catid');?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="measure">Measure<span class="text-danger">*</span></label>
                                                <select name="measure" id="measure" class="form-control input-measure">
                                                    <option value="<?php echo set_value('measure');?>">
                                                        <?php 
                                                        if(set_value('measure')):
                                                            echo set_value('measure');
                                                        else:
                                                            echo "choose Type of measure";
                                                        endif;          
                                                        ?>            
                                                    </option>
                                                    <option value="Piece">Piece</option>
                                                    <option value="Set">Set</option>
                                                    <option value="Ton">Ton</option>
                                                    <option value="Square Meter">Square Meter</option>
                                                    <option value="Drum">Drum</option>
                                                </select>
                                                <span class="text-danger"><?php echo form_error('measure');?></span>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="quantity">Quantity<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="quantity" value="<?php echo set_value('quantity');?>" placeholder="Enter Product Available Quantity">
                                                <span class="text-danger"><?php echo form_error('quantity');?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="url">Product URL<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="product_url" value="<?php echo set_value('product_url');?>" placeholder="Enter Product URL">
                                                <span class="text-danger"><?php echo form_error('product_url');?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="url">Image URL<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="image_url" value="<?php echo set_value('image_url');?>" placeholder="Enter Image URL">
                                                <span class="text-danger"><?php echo form_error('image_url');?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="supplier_url">Supplier URL<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="supplier_url" value="<?php echo set_value('supplier_url');?>" placeholder="Enter Supplier URL">
                                                <span class="text-danger"><?php echo form_error('supplier_url');?></span>
                                            </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <a href="<?php echo base_url('admin/products');?>" class="btn btn-default">CANCEL</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>    
                    </div>
               