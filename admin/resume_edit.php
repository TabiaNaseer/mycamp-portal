<?php
require('../include/db.php');
if($_SESSION['id'] && $_SESSION['user_name'] && $_SESSION['usertype']=="faculty"  && $_SESSION['password']){


$query = "SELECT * FROM personal_info";
$run = mysqli_query($db,$query);
$pi = mysqli_fetch_array($run);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


     <link rel="shortcut icon" type="image/x-icon" href="logofi.png">
  <title>MyCamp | Faculty Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
     
      <!-- Notifications Dropdown Menu -->
    
      <li class="nav-item">
        <a class="nav-link"  href="../include/logout.php" role="button">
          Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php?profilesetting" class="brand-link">
      <img src="logofi.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Faculty Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <?php
        $id=$_SESSION['id'];
        $query="SELECT * FROM faculty WHERE id=$id ";
                  $query_run=mysqli_query($db,$query);

                  foreach($query_run as $faculty)
        ?>
        <div class="image">
          <img src="../assets/images/testimonials/<?=$faculty['my_prof_pic']?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index.php?accountsetting=true" class="d-block"> <?php echo  $faculty['my_name'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
           
           
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Qualification
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?profilesetting=true" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Add Qualification</p>
                </a>
              </li>
            </ul><ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?viewprofilesetting=true" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>View Qualification</p>
                </a>
              </li>
            </ul>
          </li>
             
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Resume Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?resumesetting=true" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Add Resume</p>
                </a>
              </li>
            </ul><ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?viewresumesetting=true" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>View Resume</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="index.php?profiledatasetting=true" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Profile
              </p>
            </a>
           </li>
           <li class="nav-item">
            <a href="index.php?accountsetting=true" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Account Setting
                
              </p>
            </a>
          </li>
             
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<div class="content-wrapper">
    <!-- /.content-header -->
<br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <div class="card card-success col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Profile</h3>
              </div>
              <br>
              <?php
                if(isset($_POST['edit_data_btn']))
                {
                  $id=$_POST['edit_r_id'];

                  $query="SELECT * FROM resume WHERE id='$id' ";
                  $query_run=mysqli_query($db,$query);

                  foreach($query_run as $resume)
                  {
?>

<form role="form" action="update.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="edit_r_id" value="<?php echo $resume['id'] ?>">
                <div class="card-body">
                 <div class="form-group col-6">
                    <label for="exampleInputEmail1">Select Type</label><br>
                  <select name="type" class="form-control">
                      <option value="Researches">Researches</option>
                      <option value="Publication">Publication</option>
                      <option value="Honors and Awards">Honors and Awards</option>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text"  class="form-control" value="<?php echo $resume['description']?>"  name="desc" >
                  </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="../admin/index.php?resumesetting=true " class="btn btn-secondary"> Cancel </a>
                  <button type="submit" name="update-resume" class="btn btn-success">Update</button>
                </div>
              </form>

<?php
                  }
                }
                ?>
              
            </div>
        </div>
      </div>
    </section>
  </div>



 <footer class="main-footer">
    <strong><a href="index.php?accountsetting=true"><?php echo  $faculty['my_name'];?></a>.</strong>
    All rights reserved.
   
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script src ="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src ="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

</body>
</html>
<?php 
}else{
     echo "<script>window.location.href='../login.php';</script>";
     exit();
}
 ?>