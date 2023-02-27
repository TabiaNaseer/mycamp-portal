<?php
$conn=mysqli_connect("localhost","cssejuwc_mycamp","U3WfDhFGP[A=");
mysqli_select_db($conn,"cssejuwc_mycamp");

$qry="select * from student";
$raw=mysql_query($qry);
while($res=mysql_fetch_array($raw))
{
	$data[]=$res;
}
print(json_encode($data));
?>