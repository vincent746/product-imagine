<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin-dashboard/vendors/mdi/css/materialdesignicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin-dashboard/vendors/css/vendor.bundle.base.css'); ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin-dashboard/css/style.css');?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/admin-dashboard/images/favicon.ico');?>" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="#" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="#" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="<?php echo base_url(); ?>/assets/img/avatar/<?php echo $this->session->userdata('logged_in_imagine_admin')->avatar; ?>" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php echo $this->session->userdata('logged_in_imagine_admin')->nama_lengkap; ?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url('Admin/Logout'); ?>">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="<?php echo base_url('Admin/Logout'); ?>" title="LogOut">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
           
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include "admin_sidebar.php"; ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="col-md-12">
               <?php
                  if ($this->session->flashdata('info') != null) {
                  ?>
                      <div class="alert alert-success msg" role="alert">
                          <?= $this->session->flashdata('info'); ?>
                      </div>

                  <?php } ?>
                  <?php
                  if ($this->session->flashdata('error') != null) {
                  ?>
                      <div class="alert alert-danger msg" role="alert">
                          <?= $this->session->flashdata('error'); ?>
                      </div>

                  <?php } ?>
            </div>
            <div class="page-header">
              
            </div>
            
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Master Banner</h4>
                    
                    <form method="POST" action="<?php echo base_url('MasterBanner/doEdit'); ?>" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $banner->id; ?>">
                        <div class="form-group">
                          <label for="no_urut">Nomor Urut</label>
                          <input type="number" name="no_urut" class="form-control" id="no_urut" placeholder="no_urut" value="<?php echo $banner->no_urut; ?>" required>
                        </div>
                        <div class="form-group">
                          <label>File upload</label>
                          <div class="input-group col-xs-12">
                            <input type="file" id="urlbanner" name="urlbanner" class="form-control file-upload-info" placeholder="Upload Image" accept="image/png, image/jpeg, image/jpg" />
                          </div>
                          <img id="blah" src="<?php echo base_url() . 'assets/img/text-slider/' . $banner->urlbanner ?>" alt="Image Preview" width="450" />
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect2">Status</label>
                          <select class="form-control" name="is_active" id="exampleFormControlSelect2">
                            <option value="1" <?php echo ($banner->is_active == 1 ? 'selected' : ''); ?>>AKTIF</option>
                            <option value="0" <?php echo ($banner->is_active == 0 ? 'selected' : ''); ?>>TIDAK AKTIF</option>
                          </select>
                        </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Save changes</button>
                      <a href="<?php echo base_url('MasterBanner') ?>"><input type="button" value="Cancel" class="btn btn-light"></button></a>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          
           
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url('assets/admin-dashboard/vendors/js/vendor.bundle.base.js'); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url('assets/admin-dashboard/vendors/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin-dashboard/js/jquery.cookie.js'); ?>" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url('assets/admin-dashboard/js/off-canvas.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin-dashboard/js/hoverable-collapse.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin-dashboard/js/misc.js'); ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url('assets/admin-dashboard/js/dashboard.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin-dashboard/js/todolist.js'); ?>"></script>
    <!-- End custom js for this page -->
    <script type="text/javascript">
      function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#urlbanner").change(function() {
            readURL(this);
        });
       function goBack() {
            window.history.back();
        }
    </script>
  </body>
</html>