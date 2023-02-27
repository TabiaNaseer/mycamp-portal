<?php
require('../include/db.php');
if($_SESSION['user_name'] && $_SESSION['id'] && $_SESSION['usertype']=="admin" && $_SESSION['password']){


$query = "SELECT * FROM research";
$run = mysqli_query($db,$query);
$research = mysqli_fetch_array($run);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


     <link rel="shortcut icon" type="image/x-icon" href="logofi.png">
  <title>Admin panel| Dashboard</title>

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
    <a href="admin.php?homesetting" class="brand-link">
      <img src="logofi.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
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
          <a href="admin.php" class="d-block"><?php echo  $faculty['my_name'];?></a>
        </div>
      </div>

       <!-- Sidebar Menu -->

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="admin.php?admin=true" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon  fas fa-chalkboard-teacher"></i>
              <p>
                Department
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?departmentsetting=true" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Add Department</p>
                </a>
              </li>
            </ul><ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?viewdepartmentsetting=true" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>View Department</p>
                </a>
              </li>
            </ul>
          </li>
                 <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Students
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?studentsetting=true" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Add Students</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?viewstudentsetting=true" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>View Students</p>
                </a>
              </li>
            </ul>
          </li>
         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Faculty 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?facultysetting=true"class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Add Faculty</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?viewfacultysetting=true"class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>View Faculty</p>
                </a>
              </li>
            </ul>
          </li>
             <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-graduation-cap"></i>
              <p>
                Programs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?coursesetting=true" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>PharmD Program
                   <i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?coursesetting=true" class="nav-link">
                  <i class="far fa-dot-circle nav-icon text-danger"></i>
                  <p>Add PharmD Program</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?viewcoursesetting=true" class="nav-link">
                  <i class="far fa-dot-circle nav-icon text-danger"></i>
                  <p>View PharmD Program</p>
                </a>
              </li>
            </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?mphilcoursesetting=true" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>MPhil Program
                  <i class="fas fa-angle-left right"></i></p></p>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?mphilcoursesetting=true" class="nav-link">
                  <i class="far fa-dot-circle nav-icon text-warning"></i>
                  <p>Add MPhil Program</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?viewmphilcoursesetting=true" class="nav-link">
                  <i class="far fa-dot-circle nav-icon text-warning"></i>
                  <p>View MPhil Program</p>
                </a>
              </li>
            </ul>
              </li>
            </ul>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?phdcoursesetting=true" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>PhD Program
                  <i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?phdcoursesetting=true" class="nav-link">
                  <i class="far fa-dot-circle nav-icon text-info"></i>
                  <p>Add PhD Program</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?viewphdcoursesetting=true" class="nav-link">
                  <i class="far fa-dot-circle nav-icon text-info"></i>
                  <p>View PhD Program</p>
                </a>
              </li>
            </ul>
              </li>
            </ul>
             
          </li>
             <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon  fas fa-book-reader"></i>
              <p>
                Activity
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Events
                  <i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?eventsetting=true" class="nav-link">
                  <i class="far fa-dot-circle nav-icon text-danger"></i>
                  <p>Add Events</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?vieweventsetting=true" class="nav-link">
                  <i class="far fa-dot-circle nav-icon text-danger"></i>
                  <p>View Events</p>
                </a>
              </li>
            </ul>
              </li>
            </ul>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Participation
                  <i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?participationsetting=true" class="nav-link">
                  <i class="far fa-dot-circle nav-icon text-warning"></i>
                  <p>Add Participation</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?viewparticipationsetting=true" class="nav-link">
                  <i class="far fa-dot-circle nav-icon text-warning"></i>
                  <p>View Participation</p>
                </a>
              </li>
            </ul>
              </li>
            </ul>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Achievements
                  <i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?achievementsetting=true" class="nav-link">
                  <i class="far fa-dot-circle nav-icon text-info"></i>
                  <p>Add Achievements</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?viewachievementsetting=true" class="nav-link">
                  <i class="far fa-dot-circle nav-icon text-info"></i>
                  <p>View Achievements</p>
                </a>
              </li>
            </ul>
              </li>
            </ul>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon " style="color: blue;"></i>
                  <p>Community Service
                  <i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?communitysetting=true" class="nav-link">
                  <i class="far fa-dot-circle nav-icon " style="color: blue;"></i>
                  <p>Add Community Service</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?viewcommunitysetting=true" class="nav-link">
                  <i class="far fa-dot-circle nav-icon " style="color: blue;"></i>
                  <p>View Community Service</p>
                </a>
              </li>
            </ul>
              </li>
            </ul>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon" style="color: aqua;"></i>
                  <p>Conference
                  <i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?conferencesetting=true" class="nav-link">
                  <i class="far fa-dot-circle nav-icon" style="color: aqua;"></i>
                  <p>Add Conference</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?viewconferencesetting=true" class="nav-link">
                  <i class="far fa-dot-circle nav-icon" style="color: aqua;"></i>
                  <p>View Conference</p>
                </a>
              </li>
            </ul>
              </li>
            </ul>
          </li>
             <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon  fas fa-book-open"></i>
              <p>
                Research
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?researchsetting=true" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Add Research</p>
                </a>
              </li>
            </ul><ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?viewresearchsetting=true" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>View Research</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon    fa fa-rocket"></i>
              <p>
                Projects
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?projectsetting=true" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Add Projects</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?viewprojectsetting=true" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>View Projects</p>
                </a>
              </li>
            </ul>

          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon   fa fa-newspaper"></i>
              <p>
                News
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?newssetting=true" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Add News</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php?viewnewssetting=true" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>View News</p>
                </a>
              </li>
            </ul>

          </li>
          <li class="nav-item">
            <a href="admin.php?aboutsetting=true" class="nav-link">
              <i class="nav-icon fa fa-info-circle"></i>
              <p>
                About Setting
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin.php?contactsetting=true" class="nav-link">
              <i class="nav-icon fa fa-phone-alt"></i>
              <p>
                Contact Setting
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin.php?accountsetting=true" class="nav-link">
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
                <h3 class="card-title">Update Research</h3>
              </div>
              <br>
              <?php
                if(isset($_POST['edit_data_btn']))
                {
                  $id=$_POST['edit_r_id'];

                  $query="SELECT * FROM research WHERE id='$id' ";
                  $query_run=mysqli_query($db,$query);

                  foreach($query_run as $research)
                  {
?>

<form role="form" action="update.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="edit_r_id" value="<?php echo $research['id'] ?>">
                <div class="card-body">
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Title</label>
                    <textarea cols="500" type="text" class="form-control"  name="title" required="" ><?=$research['res_title'] ?></textarea>
                  </div>
                  
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Year</label>
                    <input type="year"  class="form-control" value="<?php echo $research['res_year'] ?>" name="date" required="">
                  </div>
                   <div class="form-group col-6">
                    <label for="exampleInputEmail1">Link</label>
                    <input type="text"  class="form-control" value="<?php echo $research['res_link'] ?>" name="author" required="">
                  </div>
                 
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="../admin/admin.php?researchsetting=true " class="btn btn-secondary"> Cancel </a>
                  <button type="submit" name="update-research" class="btn btn-success">Update</button>
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
    <strong>Copyright &copy; 2020 <a href="https://adminlte.io">Ms</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
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