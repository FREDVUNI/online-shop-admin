<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/backend/');?>images/favicon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/backend/');?>images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flyland Group-Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="<?php echo base_url('assets/backend/');?>css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/backend/');?>css/login.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/backend/');?>css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
</head>
<body>
<div class="container">
    <div class="row p-5">
    <div class="col-md-3"></div>
        <div class="col-xl-6 col-lg-12 col-md-10 d-flex no-block justify-content-center align-items-center">
            <div class="card">
              <div class="card-header">
                <div class="text-center">
                    <span class="mb-3"><img src="<?php echo base_url('assets/backend/');?>images/logoimage.png" alt="logo" width="100px" class="mb-3 img-thumbnail"/></span>
                    <h1 class="h3 text-gray-900 mb-4">SIGNIN</h1>
                </div>
              </div>
              <?php echo $this->session->flashdata('message');?>
              <div class="card-body">
               <form  class="user" method="post" action="<?php echo base_url('admin/login');?>" id="loginform">
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" name="email" placeholder="Enter Email Address" value="<?php echo set_value('email');?>" autofocus="autofocus">
                    <span class="text-danger"><?php echo form_error('email');?></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="Enter Password" value="">
                    <span class="text-danger"><?php echo form_error('password');?></span>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-orange btn-user btn-block">
                 LOGIN
                </button>
                </form>
                <hr>
                    <div class="text-center">
                        <a class="" href="<?php echo base_url('admin/forgot-password');?>" id="to-recover">Forgot Password?</a>
                    </div>
              </div>
            </div>
          </div>
    </div>
</div>
</body>
  <script src="<?php echo base_url('assets/backend/');?>js/core/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/backend/');?>js/core/popper.min.js"></script>
  <script src="<?php echo base_url('assets/backend/');?>js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets/backend/');?>js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="<?php echo base_url('assets/backend/');?>js/plugins/chartjs.min.js"></script>
  <script src="<?php echo base_url('assets/backend/');?>js/plugins/bootstrap-notify.js"></script>
  <script src="<?php echo base_url('assets/backend/');?>js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
</html>