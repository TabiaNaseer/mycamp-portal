<?php
require('../include/db.php');
if($_SESSION['id'] && $_SESSION['user_name'] && $_SESSION['usertype']=="faculty"  && $_SESSION['password']){

$query = "SELECT * FROM about1, aboutme,personal_info,faculty";
$run = mysqli_query($db,$query);
$user_data = mysqli_fetch_array($run);
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
          if(isset($_GET['profilesetting'])){
            ?>
           <div class="card card-primary col-lg-12">
            <div class="card-header">
                <h3 class="card-title">Manage Qualification</h3>
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

                  ?><br>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Degree</label>
                    <input type="text" class="form-control"  name="edu">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Department</label>
                    <input type="text" class="form-control"  name="dep"  id="exampleInputEmail1">
                  </div>
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">University</label>
                    <input type="text" class="form-control"  name="uni" id="exampleInputEmail1">
                  </div>
                  
                 
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-pi" class="btn btn-primary">Add</button>
                </div>
              </form>
              <div class="card-header">
                <h3 class="card-title">Qualification Table</h3>
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

                      <th>Degree</th>
                      <th>Department</th>
                      <th>University</th>
                     
                      <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     $id=$_SESSION['id'];
$q = "SELECT * FROM qualification WHERE fac_id=$id ";
$r=mysqli_query($db,$q);
$c =1;
while($pi=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$pi['education']?></td>
                      <td><?=$pi['dep']?></td>
                      <td><?=$pi['uni']?></td>
                      
<td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletepi.php?id=<?=$pi['id']?>">Delete</a></button> 
</td>
<td>
<form action="profile_edit.php" method="POST">
<input type="hidden" name="edit_p_id" value="<?php echo $pi['id']?>">
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
          }elseif(isset($_GET['viewprofilesetting'])){
            ?>

<div class="card card-info col-lg-12">
              
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-header">
                <h3 class="card-title">Resume Table</h3>
              </div>
              <br>
             
              <div class="card">
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
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                    
                      <th style="width: 10px">#</th>
                      <th>Degree</th>
                      <th>Department</th>
                      <th>University</th>
                     
                      <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     $id=$_SESSION['id'];
$q = "SELECT * FROM qualification WHERE fac_id=$id ";
$r=mysqli_query($db,$q);
$c =1;
while($pi=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$pi['education']?></td>
                      <td><?=$pi['dep']?></td>
                      <td><?=$pi['uni']?></td>
                      
<td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deletepi.php?id=<?=$pi['id']?>">Delete</a></button> 
</td>
<td>
<form action="profile_edit.php" method="POST">
<input type="hidden" name="edit_p_id" value="<?php echo $pi['id']?>">
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

          }elseif(isset($_GET['profiledatasetting'])){
            ?>

<div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Manage Profile</h3>
              </div>
              <br>
              <?php
              $id=$_SESSION['id'];
              $query="SELECT * FROM faculty WHERE id=$id ";
                  $query_run=mysqli_query($db,$query);

                  foreach($query_run as $profile)

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
                    <label for="exampleInputEmail1">Profile</label>
                    <textarea cols="500" type="text" class="form-control"  name="profile" required="" ><?=$profile['profile'] ?></textarea>
                    
                  </div>
                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update_pi" class="btn btn-primary">Save Changes </button>
                </div>
              </form>
              <br>
              <!-- /.card-header -->
             

              
            </div>
            <?php

          }elseif(isset($_GET['accountsetting'])){
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
                    <input type="password" id="password-field2"  class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one uppercase and lowercase letter,one special character and at least 8 or more characters" value="<?php echo $faculty['password'] ?>"  name="pass" id="exampleInputEmail1" required="">
                     <span toggle="#password-field2" class="fa fa-fw fa-eye-slash field-icon toggle-password2"></span>
                  </div>
                  
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update_account" class="btn btn-primary">Save Changes </button>
                </div>
              </form>
              <br>
              <!-- /.card-header -->
             

              
            </div>
            <?php

          }elseif(isset($_GET['viewresumesetting'])){
            ?>

<div class="card card-info col-lg-12">
              
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-header">
                <h3 class="card-title">Resume Table</h3>
              </div>
              <br>
             
              <div class="card">
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
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid" class="table">
                  <thead>
                    <tr>
                    
                      <th style="width: 10px">#</th>
                      <th>Type</th>
                      <th>Description</th>
                                        
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     $id=$_SESSION['id'];
$q = "SELECT * FROM resume WHERE faculty_id=$id ";
$r=mysqli_query($db,$q);
$c =1;
while($pi=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$pi['type']?></td>
                      <td><?=$pi['description']?></td>
                      




                      
                      <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deleteresume.php?id=<?=$pi['id']?>">Delete</a></button> 
</td>
<td>
<form action="resume_edit.php" method="POST">
<input type="hidden" name="edit_r_id" value="<?php echo $pi['id']?>">
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

          }elseif(isset($_GET['resumesetting'])){
            ?>

<div class="card card-primary col-lg-12">
  <div class="card-header">
                <h3 class="card-title">Manage Resume</h3>
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

                  ?><br>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Select Type</label><br>
                    <select name="type" class="form-control">
                      <option value="Researches">Researches</option>
                      <option value="Honors and Awards">Honors and Awards</option>
                    </select>
                    
                  </div>
                
                 
                  <div class="form-group col-6">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control"  name="desc" id="exampleInputEmail1">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="add-resume" class="btn btn-primary">Add</button>
                </div>
              </form>
              <div class="card-header">
                <h3 class="card-title">Resume Table</h3>
              </div>
              
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Researchers and Awards</h3>

                
              </div>
              <br>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="tableid"class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Type</th>
                      <th>Description</th>
                                        
                     <th style="width: 40px">Delete</th>
                      <th style="width: 40px">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                     $id=$_SESSION['id'];
$q = "SELECT * FROM resume WHERE faculty_id=$id ";
$r=mysqli_query($db,$q);
$c =1;
while($pi=mysqli_fetch_array($r)){
  ?>
<tr>
                      <td><?=$c?></td>
                      <td><?=$pi['type']?></td>
                      <td><?=$pi['description']?></td>
                      




                      
                      <td>
<button type="submit "class="btn btn-danger" ><a style="color: white" href="../include/deleteresume.php?id=<?=$pi['id']?>">Delete</a></button> 
</td>
<td>
<form action="resume_edit.php" method="POST">
<input type="hidden" name="edit_r_id" value="<?php echo $pi['id']?>">
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
    <strong><a href="index.php?accountsetting=true"><?php echo  $faculty['my_name'];?></a>.</strong>
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
        searchPlaceholder:"Search Courses",
      }
    });
} );


</script>
<script >
  $(".toggle-password2").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
</body>
</html>
<?php 
}else{
     echo "<script>window.location.href='../login.php';</script>";
     exit();
}
 ?>