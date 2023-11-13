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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin-dashboard/css/style.css');?>">
    <!-- End layout styles -->
    <!-- datatables -->
    
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
            <div class="d-grid gap-2">
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddMasterAdmin" type="button">+ Add Master Admin</button>
            </div>
          <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Master Admin</h4>
                    <table id="example" class="table table-striped" style="width:100%">
                       <thead>
                          <tr>
                            <th> No Urut </th>
                            <th> Username </th>
                            <th> Nama Lengkap </th>
                            <th> Email </th>
                            <th> Status </th>
                            <th></th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php $no_urut = 1; ?>
                            <?php foreach($listuser as $gaa) { ?>
                          <tr>
                            

                              <td><?php echo $no_urut; ?></td>
                              <td><?php echo $gaa->username; ?></td>
                              <td><?php echo $gaa->nama_lengkap; ?></td>
                              <td><?php echo $gaa->email; ?></td>
                              <?php if($gaa->is_active == 1) { ?>
                              <td>Aktif</td>
                              <?php } else { ?>
                              <td>Tidak Aktif</td>
                              <?php } ?>

                              <?php echo "<td>
                                <a href='" . base_url('Admin/Edit?id=' . $gaa->id) . "'class='btn btn-xs btn-primary'><i class='mdi mdi-table-edit'></i></a>

                                <button class='btn btn-xs btn-danger' onclick='DeleteData(" . $gaa->id . ")'><i class='mdi mdi-delete'></i></button> 

                                </td>"; 
                              ?>

                             
                          </tr>
                           <?php $no_urut++; ?>
                            <?php } ?>
                         
                      </tbody>
                  </table>
                     
                  </div>
                </div>
              </div>
           
          </div>

          <!-- Modal Add Master -->
          <div class="modal fade" id="AddMasterAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Master Admin</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="<?php echo base_url('Admin/doAdd'); ?>" class="forms-sample">
                  <div class="modal-body">
                        <div class="form-group">
                          <label for="Username">Username</label>
                          <input type="text" name="username" class="form-control" id="Username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                          <label for="namalengkap">Nama Lengkap</label>
                          <input type="text" name="nama_lengkap" class="form-control" id="namalengkap" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                          <label for="email">Email address</label>
                          <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <!-- End custom js for this page -->
    <script type="text/javascript">

      function DeleteData(id) {
            var konfirmasi = confirm("Apakah anda yakin untuk menghapus data ini ?");

            if (konfirmasi) {
                window.location.href = "<?php echo base_url('Admin/doDelete?id='); ?>" + id;
            }
        }

      $(document).ready(function () {
          $('#example').DataTable();
      });
    </script>
  </body>
</html>