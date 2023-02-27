<?php
$conn=mysqli_connect("localhost","cssejuwc_mycamp","U3WfDhFGP[A=");
mysqli_select_db($conn,"cssejuwc_mycamp");

$qry="select * from student";

$raw=mysqli_query($conn,$qry);

while($res=mysqli_fetch_array($raw))
{
	 $data[]=$res;
}
print(json_encode($data));
?>