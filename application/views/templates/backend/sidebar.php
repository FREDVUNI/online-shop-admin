<div class="wrapper ">
    <div class="sidebar" data-color="orange">
    
      <div class="logo">
        <a href="<?php echo base_url('admin/index');?>" class="simple-text logo-mini">
          <img src="<?php echo base_url('assets/backend/');?>images/logoimage.png" alt="logo" width="100px" class="mb-3 img-thumbnail"/>
        </a>
        <a href="<?php echo base_url('admin/index');?>" class="simple-text logo-normal">
          FLYLAND GROUP
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="">
            <a href="<?php echo base_url('admin/index');?>">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/products');?>">
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Products</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/categories');?>">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Categories</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/clients');?>">
              <i class="now-ui-icons gestures_tap-01"></i>
              <p>Clients</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/users');?>">
              <i class="now-ui-icons users_circle-08"></i>
              <p>Admins</p>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/profile');?>">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="<?php echo base_url('admin/logout');?>">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>LOGOUT</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="<?php echo base_url('admin/index');?>">Dashboard  
              <img src="<?php echo base_url('assets/backend/images/uploads/admins/').$user['image'];?>" alt="profile" width="35px" height="35px" class="mb-1 ml-4 rounded-circle"/>
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?php echo base_url('admin/profile');?>">
                  <i class="now-ui-icons ui-1_settings-gear-63"></i>  My Profile
                  </a>
                  <a class="dropdown-item" href="<?php echo base_url('admin/changepassword');?>">
                  <i class="now-ui-icons objects_key-25"></i>  Change Password
                  </a>
                  <a class="dropdown-item" href="<?php echo base_url('admin/logout');?>">
                  <i class="now-ui-icons media-1_button-power"></i> Logout
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/profile');?>">
                  <i class="now-ui-icons users_single-02"></i>  <?php echo $user['username']; ?>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>