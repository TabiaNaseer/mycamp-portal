<?php 
require('../include/db.php');
$result = array();
$result['data']=array();
$query ="SELECT * from news";
$responce =mysqli_query($db,$query);
while ($row=mysqli_fetch_array($responce)) {
	// code...
	$index['id'] = $row['0'];
	$index['newsdata'] = $row['1'];

	array_push($result['data'],$index);
}

$result["success"]="1";
echo json_encode($result);
mysql_close($db);
?>