<?php
require('db.php');
$title ='';
$author = '';
$profile = '';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $result=$mysqli->query("SELECT * FROM faculty WHERE id=$id") or die($mysqli->error());
    if(count($result)==1){
    	$row=$result->fetch_array();
    	$title = $row['title'];
$author = $row['author'];
$profile = time().$row['profile']['name'];
    }                 
      
          }

?>
