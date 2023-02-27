<?php
require('db.php');

if($_SESSION['user_name'] && $_SESSION['id'] && $_SESSION['usertype']=="admin" && $_SESSION['password']){
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query = "DELETE FROM department WHERE id=$id";
    $run=mysqli_query($db,$query);
    if($run){

         $_SESSION['success'] = "*/Deleted";
        echo "<script>window.location.href='../admin/admin.php?departmentsetting=true';</script>";                    
      
          }else{
            $_SESSION['status'] = "*/Not Deleted";
        echo "<script>window.location.href='../admin/admin.php?departmentsetting=true';</script>";
          }
}
?>
<?php 
}else{
     echo "<script>window.location.href='../login.php';</script>";
     exit();
}
 ?>