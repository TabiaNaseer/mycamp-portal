<?php
require('db.php');
if(isset($_GET['edit'])){
		$id=$_GET['edit'];

		$query="SELECT * FROM faculty WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$id=$row['id'];
		$name=$row['my_name'];
		$email=$row['my_designation'];
		$photo=$row['my_prof_pic'];

		$update=true;
	}
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		$name=$_POST['my_name'];
		$email=$_POST['my_designation'];
		$profile=$_POST['profile'];

		if(isset($_FILES['profile']['name'])&&($_FILES['profile']['name']!="")){
			$newimage="uploads/".$_FILES['profile']['name'];
			unlink($profile);
			move_uploaded_file($_FILES['profile']['tmp_name'], $newimage);
		}
		else{
			$newimage=$profile;
		}
		$query="UPDATE faculty SET my_name=?,my_designation=?,my_prof_pic=? WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("ssssi",$name,$email,$newimage,$id);
		$stmt->execute();

		$_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="primary";
		header('location:../admin/admin.php?facultysetting=true');
	}

?>