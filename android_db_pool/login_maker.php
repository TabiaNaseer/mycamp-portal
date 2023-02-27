<?php
$conn=mysqli_connect("localhost","cssejuwc_mycamp","U3WfDhFGP[A=");
mysqli_select_db($conn,"cssejuwc_mycamp");

$uname=$_GET['t1'];
$pwd=$_GET['t2'];

$qry="select * from student where username='$uname' and password='$pwd'";

$raw=mysqli_query($conn,$qry);

$count=mysqli_num_rows($raw);

if($count>0)
 echo "found";
else
 echo "Wrong Username or Password";
?>