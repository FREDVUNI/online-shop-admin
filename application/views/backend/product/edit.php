        <div class="panel-header panel-header-sm">
        </div>
        <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card card-chart">
                    <div class="card-header">
                    <h4 class="card-title">Edit <?php echo $product['product']; ?></h4>
                    <?php echo $this->session->flashdata('message');?>
                    <form action="<?php echo base_url('admin/product/'.$product["slug"])?>" method="POST">
                         <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 grid-margin stretch-card">
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
                                                    <input type="text" class="form-control" name="product" value="<?php echo $product['product'] ?? set_value('product');?>" placeholder="Enter Product Name">
                                                <span class="text-danger"><?php echo form_error('product');?></span>
                                            </div>
                                            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                                            <div class="form-group">
                                                <label for="price">Price<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="price" value="<?php echo  $product['price'] ?? set_value('price');?>" placeholder="Enter Product Price">
                                                <span class="text-danger"><?php echo form_error('price');?></span>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="category">Category<span class="text-danger">*</span></label>
                                                    <select name="catid" id="catid" class="form-control input-category">
                                                        <option value="<?php echo  $product['catid'] ?? set_value('catid');?>">
                                                            <?php echo $product['category'];?>
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
                                                    <option value="<?php echo $product['measure'] ?? set_value('measure');?>">
                                                        <?php echo $product['measure'];  ?>                
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
                                                    <input type="text" class="form-control" name="quantity" value="<?php echo $product['quantity'] ?? set_value('quantity');?>" placeholder="Enter Product Available Quantity">
                                                <span class="text-danger"><?php echo form_error('quantity');?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="url">Product URL<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="product_url" value="<?php echo $product['product_url'] ?? set_value('product_url');?>" placeholder="Enter Product URL">
                                                <span class="text-danger"><?php echo form_error('product_url');?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="url">Image URL<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="image_url" value="<?php echo $product['image_url'] ?? set_value('image_url');?>" placeholder="Enter Image URL">
                                                <span class="text-danger"><?php echo form_error('image_url');?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="supplier_url">Supplier URL<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="supplier_url" value="<?php echo $product['supplier_url'] ?? set_value('supplier_url');?>" placeholder="Enter Supplier URL">
                                                <span class="text-danger"><?php echo form_error('supplier_url');?></span>
                                            </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                                <a href="<?php echo base_url('admin/products');?>" class="btn btn-default">CANCEL</a>
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
                   