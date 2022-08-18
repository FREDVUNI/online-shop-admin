<div class="panel-header panel-header-sm">
</div>
<div class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card card-chart">
                    <div class="card-header">
                    <h4 class="card-title">Edit <?php echo $category["category"] ?></h4>
                    <?php echo $this->session->flashdata('message');?>
                    <form action="<?php echo base_url('admin/category/'.$category["slug"]);?>" method="POST">
                        <div class="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 grid-margin stretch-card">
                                    <div class="form-group">
                                        <label for="category">Category<span class="text-danger">*</span></label>
                                        <input type="hidden" name="catid" value="<?php echo $category["catid"] ?>">
                                        <input type="text" class="form-control" name="category" value="<?php echo $category["category"];?>">
                                        <span class="text-danger"><?php echo form_error('category');?></span>
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