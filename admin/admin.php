<?php

require('../include/db.php');
if($_SESSION['user_name'] && $_SESSION['id'] && $_SESSION['usertype']=="admin" && $_SESSION['password']){
$query = "SELECT * FROM research";
$run = mysqli_query($db,$query);
$user_data = mysqli_fetch_array($run);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


     <link rel="shortcut icon" type="image/x-icon" href="logofi.png">
  <title>Admin panel| Dashboard</title>
<meta content="viewport" content="width=device-width,initial-scale=1"/>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />

   <link  href="https://fonts.googleapis.com/css?family=Lato"  rel="stylesheet" />  
  <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
        <a class="nav-link"  href="../include/logout1.php" role="button">
          Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin.php?admin=true" class="brand-link">
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
          <a href="admin.php?accountsetting=true" class="d-block"><?php echo  $faculty['my_name'];?></a>
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

  <!-- Content Wrapper. Contains page content -->
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
          <?php
          if(isset($_GET['coursesetting'])){
            ?>

<div class="card card-primary col-lg-12">

    <div class="card-header">
                <h3 class="card-title">Manage Courses</h3>
              </div>
              <br>
    <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <?php
                  if(isset($_SESSION['success'])&&$_SESSION['success']!=''){
                    echo'<h11 style="color: green">'.$_SESSION['success'].'</h11>';
                    unset($_SESSION['success']);
                  }
                  if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
                    echo'<h11 style="color: red">'.$_SESSION['status'].'</h11>';
                    unset($_SESSION['status']);
                  }

                  ?>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Select Professional</label><br>
                    <select name="type1" class="form-control">
                      <option value="First Professional PharmD">First Professional PharmD</option>
                      <option value="Second Professional PharmD">Second Professional PharmD</option>
                      <option value="Third Professional PharmD">Third Professional PharmD </option>
                      <option value="Fourth Professional PharmD">Fourth Professional PharmD</option>
                      <option value="Fifth Professional PharmD">Fifth Professional PharmD</option>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Select Semester</label><br>
                  <select name="type2" class="form-control">
                      <option value="First Semester">First Semester</option>
                      <option value="Second Semester">Second Semester</option>
                    </select>
                  </div>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Course Code</label>
                    <input type="text" class="form-control"  name="cc" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control"  name="title" id="exampleInputEmail1" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Credit Hours</label>
                    <input type="text" class="form-control"  name="crehr" id="exampleInputEmail1" required="">
                  </div>
                 
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-course" class="btn btn-primary">Add</button>
                </div>
                <br>
              </form>
              <div class="card-header">
                <h3 class="card-title">Course Table </h3>
              </div>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table style="table-layout: fixed;" id="tableid" class="table">
                  <thead >
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Professional</th>
                      <th>Semester</th>
                      <th>Course Code</th>
                      <th>Title</th>
                      <th>Credit Hours</th>                      
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

$q = "SELECT * from courses ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($pi=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$pi['type1']?></td>
                      <td><?=$pi['type2']?></td>
                      <td><?=$pi['course_code']?></td>
                      <td style="  word-wrap: break-word; max-width: 300px"><?=$pi['course_title']?></td>
                      <td><?=$pi['course_credit_hours']?></td>




                      
                      <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletecourse.php?id=<?=$pi['id']?>">Delete</a></button> 
</td>
<td>
<form action="course_edit.php" method="POST">
<input type="hidden" name="edit_c_id" value="<?php echo $pi['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>

                </table>

              </div>
              <!-- /.card-body -->

            </div>

              
            </div>
            <?php
          }elseif(isset($_GET['viewcoursesetting'])){
            ?>

<div class="card card-info col-lg-12">
    
    
              <div class="card-header">
                <h3 class="card-title">Course Table </h3>
              </div>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Professional</th>
                      <th>Semester</th>
                      <th>Course Code</th>
                      <th>Title</th>
                      <th>Credit Hours</th>                      
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

$q = "SELECT * from courses ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($pi=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$pi['type1']?></td>
                      <td><?=$pi['type2']?></td>
                      <td><?=$pi['course_code']?></td>
                      <td style="  word-wrap: break-word; max-width: 300px"><?=$pi['course_title']?></td>
                      <td><?=$pi['course_credit_hours']?></td>




                      
                      <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletecourse.php?id=<?=$pi['id']?>">Delete</a></button> 
</td>
<td>
<form action="course_edit.php" method="POST">
<input type="hidden" name="edit_c_id" value="<?php echo $pi['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>

                </table>

              </div>
              <!-- /.card-body -->

            </div>

              
            </div>
            <?php
          }elseif(isset($_GET['mphilcoursesetting'])){
            ?>

<div class="card card-primary col-lg-12">
    <div class="card-header">
                <h3 class="card-title">Manage MPhil Courses</h3>
              </div>
              <br>
    <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <?php
                  if(isset($_SESSION['success'])&&$_SESSION['success']!=''){
                    echo'<h11 style="color: green">'.$_SESSION['success'].'</h11>';
                    unset($_SESSION['success']);
                  }
                  if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
                    echo'<h11 style="color: red">'.$_SESSION['status'].'</h11>';
                    unset($_SESSION['status']);
                  }

                  ?>

                <div class="form-group col-6">

                    <label for="exampleInputEmail1">Select Department</label><br>
                    <select name="type11" class="form-control">
                      <option value="Pharmacognosy Curriculum">Pharmacognosy Curriculum</option>
                      <option value="Pharmacology Curriculum">Pharmacology Curriculum</option>
                      <option value="Pharmaceutics Curriculum">Pharmaceutics Curriculum </option>
                      <option value="Pharmaceutical Chemistry Curriculum">Pharmaceutical Chemistry Curriculum</option>
                      <option value="Pharmacy Practice Curriculum">Pharmacy Practice Curriculum</option>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Select Semester</label><br>
                  <select name="type22" class="form-control">
                      <option value="First Semester">First Semester</option>
                      <option value="Second Semester">Second Semester</option>
                    </select>
                  </div>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Course Code</label>
                    <input type="text" class="form-control"  name="cc" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control"  name="title" id="exampleInputEmail1" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Credit Hours</label>
                    <input type="text" class="form-control"  name="crehr" id="exampleInputEmail1" required="">
                  </div>
                 
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-course1" class="btn btn-primary">Add</button>
                </div>
                <br>
              </form>
              <div class="card-header">
                <h3 class="card-title">Course Table </h3>
              </div>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Department</th>
                      <th>Semester</th>
                      <th>Course Code</th>
                      <th>Title</th>
                      <th>Credit Hours</th>                      
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

$q = "SELECT * from courses1 ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($pi=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$pi['type11']?></td>
                      <td><?=$pi['type22']?></td>
                      <td><?=$pi['course_code1']?></td>
                      <td style="  word-wrap: break-word; max-width: 300px"><?=$pi['course_title1']?></td>
                      <td><?=$pi['course_credit_hours1']?></td>




                      
                      <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletecourse1.php?id=<?=$pi['id']?>">Delete</a></button> 
</td>
<td>
<form action="course1_edit.php" method="POST">
<input type="hidden" name="edit_c1_id" value="<?php echo $pi['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>

                </table>

              </div>
              <!-- /.card-body -->

            </div>

              
            </div>
            <?php
          }elseif(isset($_GET['viewmphilcoursesetting'])){
            ?>

<div class="card card-info col-lg-12">
    
    
              <div class="card-header">
                <h3 class="card-title">MPhil Course Table </h3>
              </div>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Department</th>
                      <th>Semester</th>
                      <th>Course Code</th>
                      <th>Title</th>
                      <th>Credit Hours</th>                      
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

$q = "SELECT * from courses1 ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($pi=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$pi['type11']?></td>
                      <td><?=$pi['type22']?></td>
                      <td><?=$pi['course_code1']?></td>
                      <td style="  word-wrap: break-word; max-width: 300px"><?=$pi['course_title1']?></td>
                      <td><?=$pi['course_credit_hours1']?></td>




                      
                      <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletecourse1.php?id=<?=$pi['id']?>">Delete</a></button> 
</td>
<td>
<form action="course1_edit.php" method="POST">
<input type="hidden" name="edit_c1_id" value="<?php echo $pi['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>

                </table>

              </div>
              <!-- /.card-body -->

            </div>

              
            </div>
            <?php
          }elseif(isset($_GET['phdcoursesetting'])){
            ?>

<div class="card card-primary col-lg-12">
    <div class="card-header">
                <h3 class="card-title">Manage PhD Courses</h3>
              </div>
              <br>
    <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <?php
                  if(isset($_SESSION['success'])&&$_SESSION['success']!=''){
                    echo'<h11 style="color: green">'.$_SESSION['success'].'</h11>';
                    unset($_SESSION['success']);
                  }
                  if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
                    echo'<h11 style="color: red">'.$_SESSION['status'].'</h11>';
                    unset($_SESSION['status']);
                  }

                  ?>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Select Department</label><br>
                    <select name="type13" class="form-control">
                      <option value="Pharmacognosy Curriculum">Pharmacognosy Curriculum</option>
                      <option value="Pharmacology Curriculum">Pharmacology Curriculum</option>
                      <option value="Pharmaceutics Curriculum">Pharmaceutics Curriculum </option>
                      <option value="Pharmaceutical Chemistry Curriculum">Pharmaceutical Chemistry Curriculum</option>
                      <option value="Pharmacy Practice Curriculum">Pharmacy Practice Curriculum</option>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Select Semester</label><br>
                  <select name="type23" class="form-control">
                      <option value="First Semester">First Semester</option>
                      <option value="Second Semester">Second Semester</option>
                    </select>
                  </div>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Course Code</label>
                    <input type="text" class="form-control"  name="cc" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control"  name="title" id="exampleInputEmail1" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Credit Hours</label>
                    <input type="text" class="form-control"  name="crehr" id="exampleInputEmail1" required="">
                  </div>
                 
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-course2" class="btn btn-primary">Add</button>
                </div>
                <br>
              </form>
              <div class="card-header">
                <h3 class="card-title">Course Table </h3>
              </div>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Department</th>
                      <th>Semester</th>
                      <th>Course Code</th>
                      <th>Title</th>
                      <th>Credit Hours</th>                      
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

$q = "SELECT * from courses2 ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($pi=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$pi['type13']?></td>
                      <td><?=$pi['type23']?></td>
                      <td><?=$pi['course_code2']?></td>
                      <td style="  word-wrap: break-word; max-width: 300px"><?=$pi['course_title2']?></td>
                      <td><?=$pi['course_credit_hours2']?></td>




                      
                      <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletecourse2.php?id=<?=$pi['id']?>">Delete</a></button> 
</td>
<td>
<form action="course2_edit.php" method="POST">
<input type="hidden" name="edit_c2_id" value="<?php echo $pi['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>

                </table>

              </div>
              <!-- /.card-body -->

            </div>

              
            </div>
            <?php
          }elseif(isset($_GET['viewphdcoursesetting'])){
            ?>

<div class="card card-info col-lg-12">
    
    
              <div class="card-header">
                <h3 class="card-title">PhD Course Table </h3>
              </div>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Department</th>
                      <th>Semester</th>
                      <th>Course Code</th>
                      <th>Title</th>
                      <th>Credit Hours</th>                      
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

$q = "SELECT * from courses2 ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($pi=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$pi['type13']?></td>
                      <td><?=$pi['type23']?></td>
                      <td><?=$pi['course_code2']?></td>
                      <td style="  word-wrap: break-word; max-width: 300px"><?=$pi['course_title2']?></td>
                      <td><?=$pi['course_credit_hours2']?></td>




                      
                      <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletecourse2.php?id=<?=$pi['id']?>">Delete</a></button> 
</td>
<td>
<form action="course2_edit.php" method="POST">
<input type="hidden" name="edit_c2_id" value="<?php echo $pi['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>

                </table>

              </div>
              <!-- /.card-body -->

            </div>

              
            </div>
            <?php
          }elseif(isset($_GET['departmentsetting'])){
            ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Department</h3>
              </div>
              <br>
              <form role="form" action="../include/admin.php" method="post">
                <div class="card-body">
                  <?php
                  if(isset($_SESSION['success'])&&$_SESSION['success']!=''){
                    echo'<h11 style="color: green">'.$_SESSION['success'].'</h11>';
                    unset($_SESSION['success']);
                  }
                  if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
                    echo'<h11 style="color: red">'.$_SESSION['status'].'</h11>';
                    unset($_SESSION['status']);
                  }

                  ?>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Department Name</label>
                    <input type="text" class="form-control"  name="name" required="">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-department" class="btn btn-primary">Add</button>
                </div>
              </form>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-header">
                <h3 class="card-title">Department Table</h3>
              </div>
              <br>
              <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Department Name</th>
                                    
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * from department ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($department=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$department['departmentname']?></td>
                      
                     <td>

<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletedepartment.php?id=<?=$department['id']?>">Delete</a></button> 
</td>
<td>
<form action="department_edit.php" method="POST">
<input type="hidden" name="edit_d_id" value="<?php echo $department['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

              
            </div>
            <?php

          }elseif(isset($_GET['viewdepartmentsetting'])){
            ?>

<div class="card card-info col-lg-12">
              
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-header">
                <h3 class="card-title">Department Table</h3>
              </div>
              <br>
              <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Department Name</th>
                                    
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * from department ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($department=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$department['departmentname']?></td>
                      
                     <td>

<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletedepartment.php?id=<?=$department['id']?>">Delete</a></button> 
</td>
<td>
<form action="department_edit.php" method="POST">
<input type="hidden" name="edit_d_id" value="<?php echo $department['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

              
            </div>
            <?php

          }elseif(isset($_GET['newssetting'])){
            ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage News</h3>
              </div>
              <br>
              <form role="form" action="../include/admin.php" method="post">
                <div class="card-body">
                  <?php
                  if(isset($_SESSION['success'])&&$_SESSION['success']!=''){
                    echo'<h11 style="color: green">'.$_SESSION['success'].'</h11>';
                    unset($_SESSION['success']);
                  }
                  if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
                    echo'<h11 style="color: red">'.$_SESSION['status'].'</h11>';
                    unset($_SESSION['status']);
                  }

                  ?>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">News</label>
                    <textarea cols="500" type="text" class="form-control"  name="news" required="" ></textarea>
                    
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-news" class="btn btn-primary">Add</button>
                </div>
              </form>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-header">
                <h3 class="card-title">News Table</h3>
              </div>
              <br>
              <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>News</th>
                                    
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * FROM news ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($news=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$news['newsdata']?></td>
                      
                     <td>

<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletenews.php?id=<?=$news['id']?>">Delete</a></button> 
</td>
<td>
<form action="news_edit.php" method="POST">
<input type="hidden" name="edit_news_id" value="<?php echo $news['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

              
            </div>
            <?php

          }elseif(isset($_GET['viewnewssetting'])){
            ?>

<div class="card card-info col-lg-12">
              
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-header">
                <h3 class="card-title">News Table</h3>
              </div>
              <br>
              <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>news</th>
                                    
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * from news ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($news=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$news['newsdata']?></td>
                      
                     <td>

<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletenews.php?id=<?=$news['id']?>">Delete</a></button> 
</td>
<td>
<form action="news_edit.php" method="POST">
<input type="hidden" name="edit_news_id" value="<?php echo $news['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

              
            </div>
            <?php

          }elseif(isset($_GET['studentsetting'])){
            ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Students</h3>
              </div>
              <br>
              <form role="form" action="../include/admin.php" method="post">
                <div class="card-body">
                  <?php
                  if(isset($_SESSION['success'])&&$_SESSION['success']!=''){
                    echo'<h11 style="color: green">'.$_SESSION['success'].'</h11>';
                    unset($_SESSION['success']);
                  }
                  if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
                    echo'<h11 style="color: red">'.$_SESSION['status'].'</h11>';
                    unset($_SESSION['status']);
                  }

                  ?>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control"  name="name" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control" required=""  name="lname" id="exampleInputEmail1">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Start Date</label>
                    <input type="date" class="form-control" required=""  name="sdate" id="exampleInputEmail1">
                  </div>
                 
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Student Id</label>
                    <input type="text" class="form-control" required="" name="sid" id="exampleInputEmail1">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" class="form-control" required="" name="spass" id="exampleInputEmail1">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-student" class="btn btn-primary">Add</button>
                </div>
              </form>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-header">
                <h3 class="card-title">Student Table</h3>
              </div>
              <br>
              <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body p-0s">
                <table id="tableid" class="table">
                  
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Start Date</th>
                      <th>Student-Id</th> 
                      <th>Password</th>                
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * from student ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($student=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$student['firstname']?></td>
                      <td><?=$student['lastname']?></td>
                      <td><?=$student['startdate']?></td>
                      <td><?=$student['username']?></td>
                      <td><?=$student['password']?></td>
                     <td>

<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletestudent.php?id=<?=$student['id']?>">Delete</a></button> 
</td>
<td>
<form action="student_edit.php" method="POST">
<input type="hidden" name="edit_s_id" value="<?php echo $student['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

              
            </div>
            <?php

          }elseif(isset($_GET['viewstudentsetting'])){
            ?>

<div class="card card-info col-lg-12">
              
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-header">
                <h3 class="card-title">Student Table</h3>
              </div>
              <br>
              <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Start Date</th>
                      <th>Student-Id</th>
                      <th>Password</th>                
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * from student ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($student=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$student['firstname']?></td>
                      <td><?=$student['lastname']?></td>
                      <td><?=$student['startdate']?></td>
                      <td><?=$student['username']?></td>
                      <td><?=$student['password']?></td>
                     <td>

<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletestudent.php?id=<?=$student['id']?>">Delete</a></button> 
</td>
<td>
<form action="student_edit.php" method="POST">
<input type="hidden" name="edit_s_id" value="<?php echo $student['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

              
            </div>
            <?php

          }elseif(isset($_GET['admin'])){
            ?>
            <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
               
                  <?php
                  $query = "SELECT id FROM student ORDER BY id";
                  $run =mysqli_query($db, $query);

                  $student = mysqli_num_rows($run);
                  echo '<h3>'.$student.'</h3>';
                  ?>

                <p>Total Students</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="../admin/admin.php?viewstudentsetting=true" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                 <?php
                  $query = "SELECT id FROM faculty ORDER BY id";
                  $run =mysqli_query($db, $query);

                  $faculty = mysqli_num_rows($run);
                  echo '<h3>'.$faculty.'</h3>';
                  ?>
                <!-----<h3>53<sup style="font-size: 20px">%</sup></h3>---->

                <p>Total Faculty Member</p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <a href="../admin/admin.php?viewfacultysetting=true" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col 
          <div class="col-lg-3 col-6">
            small box 
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          ./col 
          <div class="col-lg-3 col-6">
            small box
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable ui-sortable" >
            
<!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary card-warning" style="width: 100%">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">Faculty Table</h3>

                <div class="card-tools">
                  <span title="3 New Messages" class="badge badge-primary">
                 <?php
                  $query = "SELECT id FROM faculty ORDER BY id";
                  $run =mysqli_query($db, $query);

                  $faculty = mysqli_num_rows($run);
                  echo '<h10>'.$faculty.'</h10>';
                  ?>

                  </span>
                  <!------<button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>----->
                </div>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                 
    <!-- form start -->
             
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table  class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Image</th>
                    
                      <th>Name</th>
                      <th>Designation</th>
                              
                      <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * from faculty";
$r=mysqli_query($db,$q);
$c =1;
while($faculty=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><img src="../assets/images/testimonials/<?=$faculty['my_prof_pic']?>" style="width:50px"/></td>
                      <td><?=$faculty['my_name']?></td>
                      <td><?=$faculty['my_designation']?></td>
                      
                      <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletefaculty.php?id=<?=$faculty['id']?>">Delete</a></button> 
</td>
<td>
<form action="faculty_edit.php" method="POST">
<input type="hidden" name="edit_id" value="<?php echo $faculty['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td> 
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
                </div>
              <!-- /.card-body -->
            </div>
                </div>
                <!--/.direct-chat-messages-->

                
              </div>
              <!-- /.card-body -->
              
              
            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary card-danger">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title ">Student Table</h3>

                <div class="card-tools">
                  <span title="3 New Messages" class="badge badge-primary">
                    <?php
                  $query = "SELECT id FROM student ORDER BY id";
                  $run =mysqli_query($db, $query);

                  $student = mysqli_num_rows($run);
                  echo '<h10>'.$student.'</h10>';
                  ?>

                  </span>
                  
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body ">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                 
    <!-- form start -->
              
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Start Date</th>
                      <th>Student-Id</th>                
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * from student";
$r=mysqli_query($db,$q);
$c =1;
while($student=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$student['firstname']?></td>
                      <td><?=$student['lastname']?></td>
                      <td><?=$student['startdate']?></td>
                      <td><?=$student['username']?></td>
                     <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletestudent.php?id=<?=$student['id']?>">Delete</a></button> 
</td>
<td>
<form action="student_edit.php" method="POST">
<input type="hidden" name="edit_s_id" value="<?php echo $student['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            
                </div>
                <!--/.direct-chat-messages-->

                
              </div>
              <!-- /.card-body -->
              
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->

            <!-- TO DO List -->
            
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable ui-sortable" >
             <!-- Calendar -->

                   
                  <!-- ./col -->
              
                <!-- /.row -->
              
            
            <!-- /.card -->
<style >
   
 #calendar{  
  margin-left: auto;  
  margin-right: auto;  
  width: 320px;  
  font-family: 'Lato', sans-serif;  
 }  
 #calendar_weekdays div{  
  display:inline-block;  
  vertical-align:top;  
 }  
 #calendar_content, #calendar_weekdays, #calendar_header{  
  position: relative;  
  width: 320px;  
  overflow: hidden;  
  float: left;  
  z-index: 10;  
 }  
 #calendar_weekdays div, #calendar_content div{  
  width:40px;  
  height: 40px;  
  overflow: hidden;  
  text-align: center;  
  background-color: #FFFFFF;  
  color: #787878;  
 }  
 #calendar_content{  
  -webkit-border-radius: 0px 0px 12px 12px;  
  -moz-border-radius: 0px 0px 12px 12px;   
  border-radius: 0px 0px 12px 12px;  
 }  
 #calendar_content div{  
  float: left;  
 }  
 #calendar_content div:hover{  
  background-color: #F8F8F8;  
 }  
 #calendar_content div.blank{  
  background-color: #E8E8E8;  
 }  
 #calendar_header, #calendar_content div.today{  
  zoom: 1;  
  filter: alpha(opacity=70);  
  opacity: 0.7;  
 }  
 #calendar_content div.today{  
  color: #FFFFFF;  
 }  
 #calendar_header{  
  width: 100%;  
  height: 37px;  
  text-align: center;  
  background-color: #FF6860;  
  padding: 18px 0;  
  -webkit-border-radius: 12px 12px 0px 0px;  
  -moz-border-radius: 12px 12px 0px 0px;   
  border-radius: 12px 12px 0px 0px;  
 }  
 #calendar_header h1{  
  font-size: 1.5em;  
  color: #FFFFFF;  
  float:left;  
  width:70%;  
 }  
 i[class^=icon-chevron]{  
  color: #FFFFFF;  
  float: left;  
  width:15%;  
  border-radius: 50%;  
 }  
</style>
           

           <div id="calendar">  
    <div id="calendar_header">  
     <i class="icon-chevron"></i>  
     <h1 style="text-align: center;"></h1>  
     <i class="icon-chevron-right"></i>  
    </div>  
    <div id="calendar_weekdays"></div>  
    <div id="calendar_content"></div>  
   </div>  
            <!-- /.card -->
            <!-- Custom tabs (Charts with tabs)-->


          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->

<section>
  <!-- STACKED BAR CHART -->
            <div style="width: 55%;" class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Chart</h3>

                
              </div>
              <div class="card-body">
                <div class="chart">
                  <div id="piechart" style="width: 700px; height: 400px; max-height: 500px; max-width:900px"></div>
                </div>
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->


           
</section>
          
           
    </section>
        <?php

          }elseif(isset($_GET['researchsetting'])){
            ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Researches</h3>
              </div>
              <br>
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                 <?php
                  if(isset($_SESSION['success'])&&$_SESSION['success']!=''){
                    echo'<h11 style="color: green">'.$_SESSION['success'].'</h11>';
                    unset($_SESSION['success']);
                  }
                  if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
                    echo'<h11 style="color: red">'.$_SESSION['status'].'</h11>';
                    unset($_SESSION['status']);
                  }

                  ?>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  name="title" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Year</label>
                    <input type="date" class="form-control"  name="date" id="exampleInputEmail1" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Link</label>
                    <input type="text" class="form-control"  name="author" id="exampleInputEmail1" required="">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-research" class="btn btn-primary">Add</button>
                </div>
              </form>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-header">
                <h3 class="card-title">Research Table</h3>
              </div>
              <br>
              <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th >Title</th>
                      <th>Year</th>
                      <th style="width: 10px">Link</th> 
                      <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody> 
                    <?php
$q = "SELECT * from research ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($research=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td style="  word-wrap: break-word; max-width: 500px" ><?=$research['res_title']?></td>
                      <td><?=$research['res_year']?></td>
                      <td style="  word-wrap: break-word; max-width: 300px"  ><?=$research['res_link']?></td>
                     <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deleteresearch.php?id=<?=$research['id']?>">Delete</a></button> 
</td>
<td>
<form action="research_edit.php" method="POST">
<input type="hidden" name="edit_r_id" value="<?php echo $research['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

             
            </div>
            <?php

          }elseif(isset($_GET['viewresearchsetting'])){
            ?>

<div class="card card-info col-lg-12">
              
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-header">
                <h3 class="card-title">Research Table</h3>
              </div>
              <br>
              <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th >Title</th>
                      <th>Year</th>
                      <th style="width: 10px">Link</th> 
                      <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody> 
                    <?php
$q = "SELECT * from research ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($research=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td style="  word-wrap: break-word; max-width: 500px" ><?=$research['res_title']?></td>
                      <td><?=$research['res_year']?></td>
                      <td style="  word-wrap: break-word; max-width: 300px"  ><?=$research['res_link']?></td>
                     <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deleteresearch.php?id=<?=$research['id']?>">Delete</a></button> 
</td>
<td>
<form action="research_edit.php" method="POST">
<input type="hidden" name="edit_r_id" value="<?php echo $research['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

              
            </div>
            <?php

          }elseif(isset($_GET['projectsetting'])){
            ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Projects</h3>
              </div>
              <br>
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <?php
                  if(isset($_SESSION['success'])&&$_SESSION['success']!=''){
                    echo'<h11 style="color: green">'.$_SESSION['success'].'</h11>';
                    unset($_SESSION['success']);
                  }
                  if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
                    echo'<h11 style="color: red">'.$_SESSION['status'].'</h11>';
                    unset($_SESSION['status']);
                  }

                  ?>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Picture</label>
                    <input type="file" class="form-control"  name="profile" required="">
                  </div>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control"  name="title" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Start Date</label>
                    <input type="date" class="form-control"  name="date" id="exampleInputEmail1" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">End Date</label>
                    <input type="date" class="form-control"  name="edate" id="exampleInputEmail1" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Name of PI</label>
                    <input type="text" class="form-control"  name="author" id="exampleInputEmail1" required="">
                  </div>
                 
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1"> Current Progress</label>
                    <input type="text" class="form-control"  name="desc" id="exampleInputEmail1" required="">
                  </div>
                  
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Status</label><br>
                  <select name="status" class="form-control">
                      <option value="Ongoing">Ongoing</option>
                      <option value="Completed">Completed</option>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control"  name="description" id="exampleInputEmail1" required="">
                  </div>
                   <div class="form-group col-6">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control"  name="p_name" id="exampleInputEmail1" required="">
                  </div>
                   <div class="form-group col-6">
                    <label for="exampleInputEmail1">Field of Research</label>
                    <input type="text" class="form-control"  name="f_res" id="exampleInputEmail1" required="">
                  </div>
                   <div class="form-group col-6">
                    <label for="exampleInputEmail1">Funding Agency</label>
                    <input type="text" class="form-control"  name="fun_age" id="exampleInputEmail1" required="">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-project" class="btn btn-primary">Add</button>
                </div>
              </form>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-header">
                <h3 class="card-title">Project Table</h3>
              </div>
              <br>
              <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table style="table-layout: fixed" id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Title</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Name of PI</th>  
                      <th>Progress</th> 
                      <th>Status</th> 
                      <th>Description</th> 
                      <th>Product Name</th>
                      <th>Field of Research</th>
                      <th>Funding Agency</th> 
                      <th style="width: 50px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * from project ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($project=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      
                      <td style=" word-wrap: break-word; max-width: 300px"><?=$project['p_title']?></td>
                      <td><?=$project['p_date']?></td>
                      <td><?=$project['pe_date']?></td>
                      <td><?=$project['pi_name']?></td>
                      <td style="  word-wrap: break-word; max-width: 300px"><?=$project['p_status']?></td>
                      <td style="  word-wrap: break-word; max-width: 300px"><?=$project['status']?></td>
                      <td style="  word-wrap: break-word; max-width: 700px"><?=$project['description']?></td>
                      <td><?=$project['pro_name']?></td>
                      <td><?=$project['f_o_res']?></td>
                      <td><?=$project['funding_agency']?></td>
                     <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deleteproject.php?id=<?=$project['id']?>">Delete</a></button> 
</td>
<td>
<form action="project_edit.php" method="POST">
<input type="hidden" name="edit_pro_id" value="<?php echo $project['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

             
            </div>
            <?php

          }elseif(isset($_GET['viewprojectsetting'])){
            ?>

<div class="card card-info col-lg-12">
              
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-header">
                <h3 class="card-title">Project Table</h3>
              </div>
              <br>
              <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table style="table-layout: fixed" id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Title</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Name of PI</th>  
                      <th>Progress</th> 
                      <th>Status</th> 
                      <th>Description</th> 
                      <th>Product Name</th>
                      <th>Field of Research</th>
                      <th>Funding Agency</th> 
                      <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * from project ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($project=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      
                      <td style=" word-wrap: break-word; max-width: 700px"><?=$project['p_title']?></td>
                      <td><?=$project['p_date']?></td>
                      <td><?=$project['pe_date']?></td>
                      <td><?=$project['pi_name']?></td>
                      <td style="  word-wrap: break-word; max-width: 700px"><?=$project['p_status']?></td>
                      <td style="  word-wrap: break-word; max-width: 700px"><?=$project['status']?></td>

                      <td style="  word-wrap: break-word; max-width: 700px"><?=$project['description']?></td>
                      <td><?=$project['pro_name']?></td>
                      <td><?=$project['f_o_res']?></td>
                      <td><?=$project['funding_agency']?></td>
                     <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deleteproject.php?id=<?=$project['id']?>">Delete</a></button> 
</td>
<td>
<form action="project_edit.php" method="POST">
<input type="hidden" name="edit_pro_id" value="<?php echo $project['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

             
            </div>
            <?php

          }elseif(isset($_GET['achievementsetting'])){
            ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Achievements</h3>
              </div>
              <br>
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <?php
                  if(isset($_SESSION['success'])&&$_SESSION['success']!=''){
                    echo'<h11 style="color: green">'.$_SESSION['success'].'</h11>';
                    unset($_SESSION['success']);
                  }
                  if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
                    echo'<h11 style="color: red">'.$_SESSION['status'].'</h11>';
                    unset($_SESSION['status']);
                  }

                  ?>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Picture</label>
                    <input type="file" class="form-control"  name="profile" required="">
                  </div>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control"  name="title" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control"  name="desc" id="exampleInputEmail1" required="">
                  </div>
                  
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-achievement" class="btn btn-primary">Add </button>
                </div>
              </form>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-header">
                <h3 class="card-title">Achievement Table</h3>
              </div>
              <br>
              <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Description</th>
                                    
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * FROM achievement ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($achievement=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                       <td><img src="../assets/images/event/<?=$achievement['ac_pic']?>" style="width:150px; height: 80px"/></td>
                     
                      <td style="  word-wrap: break-word; max-width: 500px"><?=$achievement['ac_title']?></td>
                      <td><?=$achievement['ac_desc']?></td>
                        <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deleteachievement.php?id=<?=$achievement['id']?>">Delete</a></button> 
</td>
<td>
<form action="achievement_edit.php" method="POST">
<input type="hidden" name="edit_ac_id" value="<?php echo $achievement['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td> 
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

              
            </div>
            <?php

          }elseif(isset($_GET['viewachievementsetting'])){
            ?>

<div class="card card-info col-lg-12">
    
    
              <div class="card-header">
                <h3 class="card-title">Achievement Table </h3>
              </div>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Description</th>
                                    
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

$q = "SELECT * FROM achievement ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($achievement=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                       <td><img src="../assets/images/event/<?=$achievement['ac_pic']?>" style="width:150px; height: 80px"/></td>
                     
                      <td style="  word-wrap: break-word; max-width: 500px"><?=$achievement['ac_title']?></td>
                      <td><?=$achievement['ac_desc']?></td>
                        <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deleteachievement.php?id=<?=$achievement['id']?>">Delete</a></button> 
</td>
<td>
<form action="achievement_edit.php" method="POST">
<input type="hidden" name="edit_ac_id" value="<?php echo $achievement['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>

                </table>

              </div>
              <!-- /.card-body -->

            </div>

              
            </div>
            <?php
          }elseif(isset($_GET['participationsetting'])){
            ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Participation</h3>
              </div>
              <br>
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <?php
                  if(isset($_SESSION['success'])&&$_SESSION['success']!=''){
                    echo'<h11 style="color: green">'.$_SESSION['success'].'</h11>';
                    unset($_SESSION['success']);
                  }
                  if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
                    echo'<h11 style="color: red">'.$_SESSION['status'].'</h11>';
                    unset($_SESSION['status']);
                  }

                  ?>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Picture</label>
                    <input type="file" class="form-control"  name="profile" required="">
                  </div>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control"  name="title" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control"  name="desc" id="exampleInputEmail1" required="">
                  </div>
                  
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-participation" class="btn btn-primary">Add </button>
                </div>
              </form>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-header">
                <h3 class="card-title">Participation Table</h3>
              </div>
              <br>
              <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Description</th>
                                    
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * FROM participation ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($participation=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                       <td><img src="../assets/images/event/<?=$participation['par_pic']?>" style="width:150px; height: 80px"/></td>
                     
                      <td style="  word-wrap: break-word; max-width: 500px"><?=$participation['par_title']?></td>
                      <td><?=$participation['par_desc']?></td>
                        <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deleteparticipation.php?id=<?=$participation['id']?>">Delete</a></button> 
</td>
<td>
<form action="participation_edit.php" method="POST">
<input type="hidden" name="edit_part_id" value="<?php echo $participation['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td> 
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

              
            </div>
            <?php

          }elseif(isset($_GET['viewparticipationsetting'])){
            ?>

<div class="card card-info col-lg-12">
    
    
              <div class="card-header">
                <h3 class="card-title">Participation Table </h3>
              </div>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Description</th>
                                    
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

$q = "SELECT * FROM participation ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($participation=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                       <td><img src="../assets/images/event/<?=$participation['par_pic']?>" style="width:150px; height: 80px"/></td>
                     
                      <td style="  word-wrap: break-word; max-width: 500px"><?=$participation['par_title']?></td>
                      <td><?=$participation['par_desc']?></td>
                        <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deleteparticipation.php?id=<?=$participation['id']?>">Delete</a></button> 
</td>
<td>
<form action="participation_edit.php" method="POST">
<input type="hidden" name="edit_part_id" value="<?php echo $participation['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>

                </table>

              </div>
              <!-- /.card-body -->

            </div>

              
            </div>
            <?php
          }
          elseif(isset($_GET['communitysetting'])){
            ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Community</h3>
              </div>
              <br>
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <?php
                  if(isset($_SESSION['success'])&&$_SESSION['success']!=''){
                    echo'<h11 style="color: green">'.$_SESSION['success'].'</h11>';
                    unset($_SESSION['success']);
                  }
                  if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
                    echo'<h11 style="color: red">'.$_SESSION['status'].'</h11>';
                    unset($_SESSION['status']);
                  }

                  ?>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Picture</label>
                    <input type="file" class="form-control"  name="profile" required="">
                  </div>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control"  name="title" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control"  name="desc" id="exampleInputEmail1" required="">
                  </div>
                  
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-community" class="btn btn-primary">Add </button>
                </div>
              </form>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-header">
                <h3 class="card-title">Coomunity Table</h3>
              </div>
              <br>
              <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Description</th>
                                    
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * FROM community ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($community=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                       <td><img src="../assets/images/event/<?=$community['c_pic']?>" style="width:150px; height: 80px"/></td>
                     
                      <td style="  word-wrap: break-word; max-width: 500px"><?=$community['c_title']?></td>
                      <td><?=$community['c_desc']?></td>
                        <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletecommunity.php?id=<?=$community['id']?>">Delete</a></button> 
</td>
<td>
<form action="community_edit.php" method="POST">
<input type="hidden" name="edit_com_id" value="<?php echo $community['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td> 
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

              
            </div>
            <?php

          }elseif(isset($_GET['viewcommunitysetting'])){
            ?>

<div class="card card-info col-lg-12">
    
    
              <div class="card-header">
                <h3 class="card-title">Community Service Table </h3>
              </div>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Description</th>
                                    
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

$q = "SELECT * FROM community ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($community=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                       <td><img src="../assets/images/event/<?=$community['c_pic']?>" style="width:150px; height: 80px"/></td>
                     
                      <td style="  word-wrap: break-word; max-width: 500px"><?=$community['c_title']?></td>
                      <td><?=$community['c_desc']?></td>
                        <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletecommunity.php?id=<?=$community['id']?>">Delete</a></button> 
</td>
<td>
<form action="community_edit.php" method="POST">
<input type="hidden" name="edit_com_id" value="<?php echo $community['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>

                </table>

              </div>
              <!-- /.card-body -->

            </div>

              
            </div>
            <?php
          }
          elseif(isset($_GET['conferencesetting'])){
            ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Conference</h3>
              </div>
              <br>
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <?php
                  if(isset($_SESSION['success'])&&$_SESSION['success']!=''){
                    echo'<h11 style="color: green">'.$_SESSION['success'].'</h11>';
                    unset($_SESSION['success']);
                  }
                  if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
                    echo'<h11 style="color: red">'.$_SESSION['status'].'</h11>';
                    unset($_SESSION['status']);
                  }

                  ?>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Picture</label>
                    <input type="file" class="form-control"  name="profile" required="">
                  </div>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control"  name="title" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control"  name="desc" id="exampleInputEmail1" required="">
                  </div>
                  
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-conference" class="btn btn-primary">Add </button>
                </div>
              </form>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-header">
                <h3 class="card-title">Conference Table</h3>
              </div>
              <br>
              <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Description</th>
                                    
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * FROM conference ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($conference=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                       <td><img src="../assets/images/event/<?=$conference['con_pic']?>" style="width:150px; height: 80px"/></td>
                     
                      <td style="  word-wrap: break-word; max-width: 500px"><?=$conference['con_title']?></td>
                      <td><?=$conference['con_desc']?></td>
                        <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deleteconference.php?id=<?=$conference['id']?>">Delete</a></button> 
</td>
<td>
<form action="conference_edit.php" method="POST">
<input type="hidden" name="edit_con_id" value="<?php echo $conference['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td> 
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

              
            </div>
            <?php

          }elseif(isset($_GET['viewconferencesetting'])){
            ?>

<div class="card card-info col-lg-12">
    
    
              <div class="card-header">
                <h3 class="card-title">Conference Table </h3>
              </div>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Description</th>
                                    
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

$q = "SELECT * FROM conference ORDER BY id DESC";
 
$r=mysqli_query($db,$q);
$c =1;
while($conference=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                       <td><img src="../assets/images/event/<?=$conference['con_pic']?>" style="width:150px; height: 80px"/></td>
                     
                      <td style="  word-wrap: break-word; max-width: 500px"><?=$conference['con_title']?></td>
                      <td><?=$conference['con_desc']?></td>
                        <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deleteconference.php?id=<?=$conference['id']?>">Delete</a></button> 
</td>
<td>
<form action="conference_edit.php" method="POST">
<input type="hidden" name="edit_con_id" value="<?php echo $conference['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>

                </table>

              </div>
              <!-- /.card-body -->

            </div>

              
            </div>
            <?php
          }
          elseif(isset($_GET['accountsetting'])){
            ?>

<div class="card card-primary col-lg-12">
  <style >
    .field-icon {
  float: right;
  margin-right: 10px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
  </style>
              <div class="card-header">
                <h3 class="card-title">Manage Account Setting</h3>
              </div>
              <br>
              <?php
              $id=$_SESSION['id'];
              $query="SELECT * FROM faculty WHERE id=$id ";
                  $query_run=mysqli_query($db,$query);

                  foreach($query_run as $faculty)

              ?>
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <?php
                  if(isset($_SESSION['success'])&&$_SESSION['success']!=''){
                    echo'<h11 style="color: green">'.$_SESSION['success'].'</h11>';
                    unset($_SESSION['success']);
                  }
                  if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
                    echo'<h11 style="color: red">'.$_SESSION['status'].'</h11>';
                    unset($_SESSION['status']);
                  }

                  ?><br>
          <img src="../assets/images/testimonials/<?=$faculty['my_prof_pic']?>" class="col-1">
      
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Profile Picture</label>
                    <input type="file" class="form-control" value="<?php echo $faculty['my_prof_pic'] ?>"  name="profile" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" value="<?php echo $faculty['my_name'] ?>"  name="name" required="">
                  </div>
                   <div class="form-group col-6">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" value="<?php echo $faculty['username'] ?>"  name="user" required="">
                  </div>
                   <div class="form-group col-6">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" value="<?php echo $faculty['email'] ?>"  name="email" required="">
                  </div>

                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" id="password-field"  class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one uppercase and lowercase letter,one special character and at least 8 or more characters" value="<?php echo $faculty['password'] ?>"  name="pass" id="exampleInputEmail1" required="">
                     <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                  </div>
                  
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update_acc" class="btn btn-primary">Save Changes </button>
                </div>
              </form>
              <br>
              <!-- /.card-header -->
             

              
            </div>
            <?php

          }
          elseif(isset($_GET['contactsetting'])){
            ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Contact Setting</h3>
              </div>
              <br>
              <?php
            
              $query="SELECT * FROM contact_info WHERE id= '1' ";
                  $query_run=mysqli_query($db,$query);

                  foreach($query_run as $contact)

              ?>
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <?php
                  if(isset($_SESSION['success'])&&$_SESSION['success']!=''){
                    echo'<h11 style="color: green">'.$_SESSION['success'].'</h11>';
                    unset($_SESSION['success']);
                  }
                  if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
                    echo'<h11 style="color: red">'.$_SESSION['status'].'</h11>';
                    unset($_SESSION['status']);
                  }

                  ?><br>
         
                  
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Address</label>
                    <textarea cols="500" type="text" class="form-control"  name="address" required="" ><?=$contact['address'] ?></textarea>
                    
                  </div>
                   <div class="form-group col-6">
                    <label for="exampleInputEmail1">Phone No</label>
                    <input type="text" class="form-control" value="<?php echo $contact['phone_no'] ?>"  name="num" required="">
                  </div>
                   <div class="form-group col-6">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" value="<?php echo $contact['email_add'] ?>"  name="email" required="">
                  </div>

                  
                  
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update_contact" class="btn btn-primary">Save Changes </button>
                </div>
              </form>
              <br>
              <!-- /.card-header -->
             

              
            </div>
            <?php

          }
          elseif(isset($_GET['aboutsetting'])){
            ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage About Setting</h3>
              </div>
              <br>
              <?php
            
              $query="SELECT * FROM about1 WHERE id= '5' ";
                  $query_run=mysqli_query($db,$query);

                  foreach($query_run as $about)

              ?>
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <?php
                  if(isset($_SESSION['success'])&&$_SESSION['success']!=''){
                    echo'<h11 style="color: green">'.$_SESSION['success'].'</h11>';
                    unset($_SESSION['success']);
                  }
                  if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
                    echo'<h11 style="color: red">'.$_SESSION['status'].'</h11>';
                    unset($_SESSION['status']);
                  }

                  ?><br>
         <img src="../assets/images/about/<?=$about['about_pic']?>" class="col-1">
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Picture</label>
                    <input type="file" class="form-control"  name="profile" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Vision</label>
                    <textarea cols="500" type="text" class="form-control"  name="desc" required="" ><?=$about['desc1'] ?></textarea>
                    
                  </div>
                   <div class="form-group col-6">
                    <label for="exampleInputEmail1">Mission</label>
                    <textarea cols="500" type="text" class="form-control"  name="desc2" required="" ><?=$about['desc2'] ?></textarea>
                    
                  </div>

                  
                  
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update_about" class="btn btn-primary">Save Changes </button>
                </div>
              </form>
              <br>
              <!-- /.card-header -->
             

              
            </div>
            <?php

          }elseif(isset($_GET['eventsetting'])){
            ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Events</h3>
              </div>
              <br>
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <?php
                  if(isset($_SESSION['success'])&&$_SESSION['success']!=''){
                    echo'<h11 style="color: green">'.$_SESSION['success'].'</h11>';
                    unset($_SESSION['success']);
                  }
                  if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
                    echo'<h11 style="color: red">'.$_SESSION['status'].'</h11>';
                    unset($_SESSION['status']);
                  }

                  ?>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Picture</label>
                    <input type="file" class="form-control"  name="profile" required="">
                  </div>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control"  name="title" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Vanue</label>
                    <input type="text" class="form-control"  name="date" id="exampleInputEmail1" required="">
                  </div>
                  
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Organizer</label>
                    <input type="text" class="form-control"  name="time" id="exampleInputEmail1" required="">
                  </div>
                 
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Date</label>
                    <input type="date" class="form-control"  name="date2" id="exampleInputEmail1" required="">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-event" class="btn btn-primary">Add</button>
                </div>
              </form>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-header">
                <h3 class="card-title">Event Table</h3>
              </div>
              <br>
              <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Event Image</th>
                      <th>Event Vanue</th>
                      <th>Event Title</th>
                      <th>Event Organizer</th>
                      <th>Event Date</th>                
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * from event ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($event=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                       <td><img src="../assets/images/event/<?=$event['event_pic']?>" style="width:150px; height: 80px"/></td>
                      <td><?=$event['event_date']?></td>
                      <td style="  word-wrap: break-word; max-width: 500px"><?=$event['event_title']?></td>
                      <td><?=$event['event_time']?></td>
                      <td><?=$event['event_date2']?></td>
                        <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deleteevent.php?id=<?=$event['id']?>">Delete</a></button> 
</td>
<td>
<form action="event_edit.php" method="POST">
<input type="hidden" name="edit_e_id" value="<?php echo $event['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td> 
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

              
            </div>
            <?php

          }elseif(isset($_GET['vieweventsetting'])){
            ?>

<div class="card card-info col-lg-12">
    
    
              <div class="card-header">
                <h3 class="card-title">Event Table </h3>
              </div>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Event Image</th>
                      <th>Event Vanue</th>
                      <th>Event Title</th>
                      <th>Event Organizer</th>
                      <th>Event Date</th>                
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

$q = "SELECT * from event ORDER BY id DESC";
$r=mysqli_query($db,$q);
$c =1;
while($event=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                       <td><img src="../assets/images/event/<?=$event['event_pic']?>" style="width:150px; height: 80px"/></td>
                      <td><?=$event['event_date']?></td>
                      <td style="  word-wrap: break-word; max-width: 500px"><?=$event['event_title']?></td>
                      <td><?=$event['event_time']?></td>
                      <td><?=$event['event_date2']?></td>
                        <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deleteevent.php?id=<?=$event['id']?>">Delete</a></button> 
</td>
<td>
<form action="event_edit.php" method="POST">
<input type="hidden" name="edit_e_id" value="<?php echo $event['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td>
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>

                </table>

              </div>
              <!-- /.card-body -->

            </div>

              
            </div>
            <?php
          }elseif(isset($_GET['viewfacultysetting'])){
            ?>

<div class="card card-info col-lg-12">
              
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-header">
                <h3 class="card-title">Faculty Table</h3>
              </div>
              <br>
              <?php
                  if(isset($_SESSION['success'])&&$_SESSION['success']!=''){
                    echo'<h11 style="color: green">'.$_SESSION['success'].'</h11>';
                    unset($_SESSION['success']);
                  }
                  if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
                    echo'<h11 style="color: red">'.$_SESSION['status'].'</h11>';
                    unset($_SESSION['status']);
                  }

                  ?>
              <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table style="table-layout: fixed;" id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                    
                      <th>Name</th>
                      <th>Username</th>
                      <th>Qualification</th>
                      <th>Designation</th>
                      <th>Password</th>
                      <th>Email</th>
                      <th>Department</th>
                              
                      <th style="width: 50px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * FROM faculty ORDER BY id DESC";

$r=mysqli_query($db,$q);
$c =1;
while($faculty=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      
                      <td><?=$faculty['my_name']?></td>
                      <td><?=$faculty['username']?></td>
                      <td><?=$faculty['education']?>(<?=$faculty['dep']?>)(<?=$faculty['uni']?>)</td>
                      <td><?=$faculty['my_designation1']?> <?=$faculty['my_designation']?></td>
                      <td data-title="Password">
                    <style type="text/css">
                      input{
                        outline: none;
                        border: 0;
                      }

                      
                    </style>
<input name="viewPass" type="password" value="<?=$faculty['password']?>" readonly/>


<button style="background-color: white; border-color: white;" type="button" id="" class="btn btn-default" name="dynamic"><span style="width: 10px; height: 10px;" class="fa fa-eye" aria-hidden="true"></span></button></td>


                      
                      <td><?=$faculty['email']?></td>
                      <td><?=$faculty['departmentname']?></td>
                      <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletefaculty.php?id=<?=$faculty['id']?>">Delete</a></button> 
</td>
<td>
<form action="faculty_edit.php" method="POST">
<input type="hidden" name="edit_id" value="<?php echo $faculty['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>



                      </td> 
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

              
            </div>
            <?php

          }elseif(isset($_GET['facultysetting'])){
            ?>

<div class="card card-primary col-lg-12">
  <style >
    #message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}
/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "&#10004;";
}

/* Add a red text color and an "x" icon when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "&#10006;";
}
.field-icon {
  float: right;
  margin-right: 10px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}


  </style>
              <div class="card-header">
                <h3 class="card-title">Manage Faculty</h3>
              </div>
              <br>
              <form role="form" action="../include/admin.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <?php
                  if(isset($_SESSION['success'])&&$_SESSION['success']!=''){
                    echo'<h11 style="color: green">'.$_SESSION['success'].'</h11>';
                    unset($_SESSION['success']);
                  }
                  if(isset($_SESSION['status'])&&$_SESSION['status']!=''){
                    echo'<h11 style="color: red">'.$_SESSION['status'].'</h11>';
                    unset($_SESSION['status']);
                  }

                  ?>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text"  class="form-control"  name="title" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email"  class="form-control"  name="email" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text"  class="form-control"  name="user" required="">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" id="password-field"  class="form-control"  name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one uppercase and lowercase letter,one special character and at least 8 or more characters" required="">
                    <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                  </div>
                  <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Confirm Password</label>
                    <input type="password" id="password-field1" class="form-control"  name="cpass" required="">
                    <span toggle="#password-field1" class="fa fa-fw fa-eye-slash field-icon toggle-password1"></span>
                  </div>

                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Degree</label>
                    <input type="text" class="form-control"  name="edu" id="exampleInputEmail1" required="">
                  </div>
                   <div class="form-group col-6">
                    <label for="exampleInputEmail1">Qualifying Department</label>
                    <input type="text" class="form-control"  name="department" id="exampleInputEmail1" required="">
                  </div>
                   <div class="form-group col-6">
                    <label for="exampleInputEmail1">University</label>
                    <input type="text" class="form-control"  name="uni" id="exampleInputEmail1" required="">
                  </div>
                   
                  

                  <div class="form-group col-6">
                    
                    <label for="exampleInputEmail1">Department</label><br>
                    <select name="dep" class="form-control">
                      <?php
                

                  $query="SELECT * FROM department";
                  $query_run=mysqli_query($db,$query);
                  while($department=mysqli_fetch_array($query_run)){
  ?>
                      <option value="<?php echo $department['departmentname'] ?>"><?php echo $department['departmentname'] ?></option>
<?php
}
                    ?>
                      
                    </select>
                  </div>

                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Picture</label>
                    <input type="file"  class="form-control"  name="profile" required="">
                  </div>
                  
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Designation</label><br>
                    <input type="hidden" id="desigValue" name="desigValue" size="20">
<input type="hidden" id="desigName" name="desigName" size="20">
<select id="desigval" name="author" class="form-control" onchange="myFun()">
     <option></option>
     <option value="1">Professor</option>
     <option value="2">Associate Professor</option>
     <option value="3">Assistant Professor </option>
     <option value="4">Lecturer</option>
     <option value="5">Co-operative Lecturer</option>
</select>
<script type="text/javascript">
  function myFun() {
  var mylist = document.getElementById("desigval");
  document.getElementById("desigValue").value = mylist.options[mylist.selectedIndex].value;
  document.getElementById("desigName").value = mylist.options[mylist.selectedIndex].text;
}
</script>
                    
                  </div>
                 <input type="radio" name="author1"  value="Chairperson &">
                      <label for="exampleInputEmail1">Chairperson</label>


                <input type="hidden" name="usertype"  value="faculty">
                     
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-faculty" class="btn btn-primary">Add</button>
                </div>
              </form>
              <br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-header">
                <h3 class="card-title">Faculty Table</h3>
              </div>
              <br>
              <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table style="table-layout: fixed" id="tableid" class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      
                      <th>Name</th>
                      <th>Username</th>
                      <th>Qualification</th>
                      <th>Designation</th>
                      <th>Password</th>
                      <th>Email</th>
                      <th>Department</th>
                      
                      <th style="width: 50px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$q = "SELECT * FROM faculty ORDER BY id DESC";

$r=mysqli_query($db,$q);
$c =1;
while($faculty=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      
                      <td><?=$faculty['my_name']?></td>
                      <td><?=$faculty['username']?></td>
                      <td><?=$faculty['education']?>(<?=$faculty['dep']?>)(<?=$faculty['uni']?>)</td>
                      <td><?=$faculty['my_designation1']?> <?=$faculty['my_designation']?></td>
                      <td data-title="Password">
                    <style type="text/css">
                      input{
                        outline: none;
                        border: 0;
                      }

                      
                    </style>
<input name="viewPass" type="password" value="<?=$faculty['password']?>" readonly/>


<button style="background-color: white; border-color: white;" type="button" id="" class="btn btn-default" name="dynamic"><span style="width: 10px; height: 10px;" class="fa fa-eye" aria-hidden="true"></span></button></td>
                      <td><?=$faculty['email']?></td>
                      <td><?=$faculty['departmentname']?></td>
                      <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletefaculty.php?id=<?=$faculty['id']?>">Delete</a></button> 
</td>
<td>
<form action="faculty_edit.php" method="POST">
<input type="hidden" name="edit_id" value="<?php echo $faculty['id']?>">
<button type="submit" name="edit_data_btn" class="btn btn-success">Edit</button>

</form>


                      </td> 
                    </tr>
  <?php
  $c++;
}
                    ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

              
            </div>
            <?php

          }
?>
</div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <?php
        $id=$_SESSION['id'];
        $query="SELECT * FROM faculty WHERE id=$id ";
                  $query_run=mysqli_query($db,$query);

                  foreach($query_run as $faculty)
        ?>
    <strong><a href="admin.php?accountsetting=true"><?php echo  $faculty['my_name'];?></a>.</strong>
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    
<script >
  $(document).ready(function() {
    $('#tableid').DataTable({
      "pagingType":"full_numbers",
      "lengthMenu":[
      [5,10,25,-1],
      [5,10,25, "All"]
      ],
      responsive:true,
      language:{
        search:"_INPUT_",
        searchPlaceholder:"Search Here",
      }
    });
} );


</script>
<script >
  $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
<script >
  $(".toggle-password1").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
<script>
  $(function () {  
  function c() {  
   p();  
   var e = h();  
   var r = 0;  
   var u = false;  
   l.empty();  
   while (!u) {  
    if (s[r] == e[0].weekday) {  
     u = true;  
    } else {  
     l.append('<div class="blank"></div>');  
     r++;  
    }  
   }  
   for (var c = 0; c < 42 - r; c++) {  
    if (c >= e.length) {  
     l.append('<div class="blank"></div>');  
    } else {  
     var v = e[c].day;  
     var m = g(new Date(t, n - 1, v)) ? '<div class="today">' : "<div>";  
     l.append(m + "" + v + "</div>");  
    }  
   }  
   var y = o[n - 1];  
   a.css("background-color", y)  
    .find("h1")  
    .text(i[n - 1] + " " + t);  
   f.find("div").css("color", y);  
   l.find(".today").css("background-color", y);  
   d();  
  }  
  function h() {  
   var e = [];  
   for (var r = 1; r < v(t, n) + 1; r++) {  
    e.push({ day: r, weekday: s[m(t, n, r)] });  
   }  
   return e;  
  }  
  function p() {  
   f.empty();  
   for (var e = 0; e < 7; e++) {  
    f.append("<div>" + s[e].substring(0, 3) + "</div>");  
   }  
  }  
  function d() {  
   var t;  
   var n = $("#calendar").css("width", e + "px");  
   n.find((t = "#calendar_weekdays, #calendar_content"))  
    .css("width", e + "px")  
    .find("div")  
    .css({  
     width: e / 7 + "px",  
     height: e / 7 + "px",  
     "line-height": e / 7 + "px",  
    });  
   n.find("#calendar_header")  
    .css({ height: e * (1 / 7) + "px" })  
    .find('i[class^="icon-chevron"]')  
    .css("line-height", e * (1 / 7) + "px");  
  }  
  function v(e, t) {  
   return new Date(e, t, 0).getDate();  
  }  
  function m(e, t, n) {  
   return new Date(e, t - 1, n).getDay();  
  }  
  function g(e) {  
   return y(new Date()) == y(e);  
  }  
  function y(e) {  
   return e.getFullYear() + "/" + (e.getMonth() + 1) + "/" + e.getDate();  
  }  
  function b() {  
   var e = new Date();  
   t = e.getFullYear();  
   n = e.getMonth() + 1;  
  }  
  var e = 480;  
  var t = 2013;  
  var n = 9;  
  var r = [];  
  var i = [  
   "JANUARY",  
   "FEBRUARY",  
   "MARCH",  
   "APRIL",  
   "MAY",  
   "JUNE",  
   "JULY",  
   "AUGUST",  
   "SEPTEMBER",  
   "OCTOBER",  
   "NOVEMBER",  
   "DECEMBER",  
  ];  
  var s = [  
   "Sunday",  
   "Monday",  
   "Tuesday",  
   "Wednesday",  
   "Thursday",  
   "Friday",  
   "Saturday",  
  ];  
  var o = [  
   "#16a085",  
   "#1abc9c",  
   "#c0392b",  
   "#27ae60",  
   "#FF6860",  
   "#f39c12",  
   "#f1c40f",  
   "#e67e22",  
   "#2ecc71",  
   "#e74c3c",  
   "#d35400",  
   "#2c3e50",  
  ];  
  var u = $("#calendar");  
  var a = u.find("#calendar_header");  
  var f = u.find("#calendar_weekdays");  
  var l = u.find("#calendar_content");  
  b();  
  c();  
  a.find('i[class^="icon-chevron"]').on("click", function () {  
   var e = $(this);  
   var r = function (e) {  
    n = e == "next" ? n + 1 : n - 1;  
    if (n < 1) {  
     n = 12;  
     t--;  
    } else if (n > 12) {  
     n = 1;  
     t++;  
    }  
    c();  
   };  
   if (e.attr("class").indexOf("left") != -1) {  
    r("previous");  
   } else {  
    r("next");  
   }  
  });  
 });  
</script>
<script >  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Title', 'Number'],  
                          <?php  
                          $query = "SELECT id, count(*) as number FROM faculty ";  
 $result = mysqli_query($db, $query);
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['Faculty', ".$row["number"]."],";
                          } 
                          $query1 = "SELECT id, count(*) as number FROM student ";  
 $result1 = mysqli_query($db, $query1);
                          while($row1 = mysqli_fetch_array($result1))  
                          {  
                               echo "['Student', ".$row1["number"]."],";
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: '',  
                      //is3D:true, 
                      colors: ['#dc3545', '#ffc107'] 
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>
<script >
var myButton = document.getElementsByName('dynamic');
var myInput = document.getElementsByName('viewPass');
myButton.forEach(function(element, index){
  element.onclick = function(){
     'use strict';

      if (myInput[index].type == 'password') {
          myInput[index].setAttribute('type', 'text');
          element.firstChild.textContent = '';
          element.firstChild.className = " fa fa-fw fa-eye-slash";

      } else {
           myInput[index].setAttribute('type', 'password');
           element.firstChild.textContent = '';
            element.firstChild.className = "fa fa-eye";
      }
  }
})
</script>
</body>
</html>
<?php 
}else{
     echo "<script>window.location.href='../login.php';</script>";
     exit();
}
 ?>