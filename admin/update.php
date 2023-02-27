<?php
require('../include/db.php');

if(isset($_POST['update-faculty'])){
	$edit_id=$_POST['edit_id'];
    $title = $_POST['title'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $edu = $_POST['edu'];
    $department = $_POST['department'];
    $uni = $_POST['uni'];
    $dep = $_POST['dep'];
    $author = $_POST['author'];
     $author1 = $_POST['author1'];
    $profile = time().$_FILES['profile']['name'];

    $query ="UPDATE faculty SET my_name='$title',username='$user',email='$email',education='$edu',dep='$department',uni='$uni',departmentname='$dep',my_designation='$author',my_designation1='$author1',my_prof_pic='$profile' WHERE id='$edit_id' ";
    $query_run=mysqli_query($db,$query);
    if($query_run){
    	move_uploaded_file($_FILES['profile']['tmp_name'],"../assets/images/testimonials/$profile");
    	$_SESSION['success'] = "*/Updated";
    	echo "<script>window.location.href='../admin/admin.php?facultysetting=true';</script>";
    }else{
    	$_SESSION['status'] = "*/Not Updated";
    	echo "<script>window.location.href='../admin/admin.php?facultysetting=true';</script>";
    }
}
if(isset($_POST['update-project'])){
    $edit_pro_id=$_POST['edit_pro_id'];
   $title = $_POST['title'];
$date = $_POST['date'];
$edate = $_POST['edate'];
$author = $_POST['author'];
$desc = $_POST['desc'];
$status = $_POST['status'];
$description = $_POST['description'];
$p_name = $_POST['p_name'];
$f_res = $_POST['f_res'];
$fun_age = $_POST['fun_age'];
    $profile = time().$_FILES['profile']['name'];

    $query ="UPDATE project SET p_title='$title',pe_date='$edate',status='$status',description='$description',p_date='$date',pi_name='$author', p_status='$desc',pro_name='$p_name',f_o_res='$f_res',funding_agency='$fun_age',p_pic='$profile' WHERE id='$edit_pro_id' ";
    $query_run=mysqli_query($db,$query);
    if($query_run){
        move_uploaded_file($_FILES['profile']['tmp_name'],"../assets/images/event/$profile");
        $_SESSION['success'] = "*/Updated";
        echo "<script>window.location.href='../admin/admin.php?projectsetting=true';</script>";
    }else{
        $_SESSION['status'] = "*/Not Updated";
        echo "<script>window.location.href='../admin/admin.php?projectsetting=true';</script>";
    }
}

if(isset($_POST['update-profilesetting'])){
     $edit_pr_id=$_POST['edit_pr_id'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $query ="UPDATE faculty SET my_name='$name',my_designation='$designation' WHERE id='$edit_pr_id'";
    $query_run=mysqli_query($db,$query);
    if($query_run){
        
        $_SESSION['success'] = "*/Updated";
        echo "<script>window.location.href='../admin/index.php?updateprofile=true';</script>";
    }else{
        $_SESSION['status'] = "*/Not Updated";
        echo "<script>window.location.href='../admin/index.php?updateprofile=true';</script>";
    }
}
if(isset($_POST['update-profile'])){
    $edit_p_id=$_POST['edit_p_id'];
    $edu = $_POST['edu'];
    $dep = $_POST['dep'];
    $uni = $_POST['uni'];
    $profile = $_POST['profile'];
    $query ="UPDATE qualification SET education='$edu',dep='$dep',uni='$uni',profile='$profile' WHERE id='$edit_p_id'";
    $query_run=mysqli_query($db,$query);
    if($query_run){
        
        $_SESSION['success'] = "*/Updated";
        echo "<script>window.location.href='../admin/index.php?profilesetting=true';</script>";
    }else{
        $_SESSION['status'] = "*/Not Updated";
        echo "<script>window.location.href='../admin/index.php?profilesetting=true';</script>";
    }
}

if(isset($_POST['update-course'])){
	$edit_c_id=$_POST['edit_c_id'];
	$type1 = $_POST['type1'];
	$type2 = $_POST['type2'];
	$cc=$_POST['cc'];
    $title = $_POST['title'];
    $crehr = $_POST['crehr'];
    

    $query ="UPDATE courses SET type1='$type1',type2='$type2',course_code='$cc',course_title='$title',course_credit_hours='$crehr' WHERE id='$edit_c_id' ";
    $query_run=mysqli_query($db,$query);
    if($query_run){
    	
    	$_SESSION['success'] = "*/Updated";
    	echo "<script>window.location.href='../admin/admin.php?coursesetting=true';</script>";
    }else{
    	$_SESSION['status'] = "*/Not Updated";
    	echo "<script>window.location.href='../admin/admin.php?coursesetting=true';</script>";
    }
}
if(isset($_POST['update-course1'])){
    $edit_c1_id=$_POST['edit_c1_id'];
    $type11 = $_POST['type11'];
    $type22 = $_POST['type22'];
    $cc=$_POST['cc'];
    $title = $_POST['title'];
    $crehr = $_POST['crehr'];
    

    $query ="UPDATE courses1 SET type11='$type11',type22='$type22',course_code1='$cc',course_title1='$title',course_credit_hours1='$crehr' WHERE id='$edit_c1_id' ";
    $query_run=mysqli_query($db,$query);
    if($query_run){
        
        $_SESSION['success'] = "*/Updated";
        echo "<script>window.location.href='../admin/admin.php?mphilcoursesetting=true';</script>";
    }else{
        $_SESSION['status'] = "*/Not Updated";
        echo "<script>window.location.href='../admin/admin.php?mphilcoursesetting=true';</script>";
    }
}
if(isset($_POST['update-course2'])){
    $edit_c2_id=$_POST['edit_c2_id'];
    $type13 = $_POST['type13'];
    $type23 = $_POST['type23'];
    $cc=$_POST['cc'];
    $title = $_POST['title'];
    $crehr = $_POST['crehr'];
    

    $query ="UPDATE courses2 SET type13='$type13',type23='$type23',course_code2='$cc',course_title2='$title',course_credit_hours2='$crehr' WHERE id='$edit_c2_id' ";
    $query_run=mysqli_query($db,$query);
    if($query_run){
        
        $_SESSION['success'] = "*/Updated";
        echo "<script>window.location.href='../admin/admin.php?phdcoursesetting=true';</script>";
    }else{
        $_SESSION['status'] = "*/Not Updated";
        echo "<script>window.location.href='../admin/admin.php?phdcoursesetting=true';</script>";
    }
}
if(isset($_POST['update-resume'])){
    $edit_r_id=$_POST['edit_r_id'];
    $type = $_POST['type'];
    $desc = $_POST['desc'];
    
    

    $query ="UPDATE resume SET type='$type',description='$desc' WHERE id='$edit_r_id' ";
    $query_run=mysqli_query($db,$query);
    if($query_run){
        
        $_SESSION['success'] = "*/Updated";
        echo "<script>window.location.href='../admin/index.php?resumesetting=true';</script>";
    }else{
        $_SESSION['status'] = "*/Not Updated";
        echo "<script>window.location.href='../admin/index.php?resumesetting=true';</script>";
    }
}

if(isset($_POST['update-student'])){
	$edit_s_id=$_POST['edit_s_id'];
	$name = $_POST['name'];
	$lname = $_POST['lname'];
	$sdate=$_POST['sdate'];
    $sid = $_POST['sid'];
    $spass = $_POST['spass'];
    $query ="UPDATE student SET firstname='$name',lastname='$lname',startdate='$sdate',username='$sid',password='$spass' WHERE id='$edit_s_id' ";
    $query_run=mysqli_query($db,$query);
    if($query_run){
    	
    	$_SESSION['success'] = "*/Updated";
    	echo "<script>window.location.href='../admin/admin.php?studentsetting=true';</script>";
    }else{
    	$_SESSION['status'] = "*/Not Updated";
    	echo "<script>window.location.href='../admin/admin.php?studentsetting=true';</script>";
    }
}
if(isset($_POST['update-department'])){
    $edit_d_id=$_POST['edit_d_id'];
    $name = $_POST['name'];
    
    $query ="UPDATE department SET departmentname='$name' WHERE id='$edit_d_id' ";
    $query_run=mysqli_query($db,$query);
    if($query_run){
        
        $_SESSION['success'] = "*/Updated";
        echo "<script>window.location.href='../admin/admin.php?departmentsetting=true';</script>";
    }else{
        $_SESSION['status'] = "*/Not Updated";
        echo "<script>window.location.href='../admin/admin.php?departmentsetting=true';</script>";
    }
}
if(isset($_POST['update-news'])){
    $edit_news_id=$_POST['edit_news_id'];
    $news = $_POST['news'];
    
    $query ="UPDATE news SET newsdata='$news' WHERE id='$edit_news_id' ";
    $query_run=mysqli_query($db,$query);
    if($query_run){
        
        $_SESSION['success'] = "*/Updated";
        echo "<script>window.location.href='../admin/admin.php?newssetting=true';</script>";
    }else{
        $_SESSION['status'] = "*/Not Updated";
        echo "<script>window.location.href='../admin/admin.php?newssetting=true';</script>";
    }
}

if(isset($_POST['update-research'])){
	$edit_r_id=$_POST['edit_r_id'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $author = $_POST['author'];

    $query ="UPDATE research SET res_link='$author',res_title='$title',res_year='$date' WHERE id='$edit_r_id' ";
    $query_run=mysqli_query($db,$query);
    if($query_run){
    	
    	$_SESSION['success'] = "*/Update";
    	echo "<script>window.location.href='../admin/admin.php?researchsetting=true';</script>";
    }else{
    	$_SESSION['status'] = "*/Not Update";
    	echo "<script>window.location.href='../admin/admin.php?researchsetting=true';</script>";
    }
}

if(isset($_POST['update-event'])){
	$edit_e_id=$_POST['edit_e_id'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $mon = $_POST['mon'];
    $time = $_POST['time'];
    $date2 = $_POST['date2'];
    $profile = time().$_FILES['profile']['name'];

    $query ="UPDATE event SET event_title='$title',event_date='$date',event_month='$mon',event_time='$time',event_pic='$profile',event_date2='$date2' WHERE id='$edit_e_id' ";
    $query_run=mysqli_query($db,$query);
    if($query_run){
    	move_uploaded_file($_FILES['profile']['tmp_name'],"../assets/images/event/$profile");
    	$_SESSION['success'] = "*/Update";
    	echo "<script>window.location.href='../admin/admin.php?eventsetting=true';</script>";
    }else{
    	$_SESSION['status'] = "*/Not Update";
    	echo "<script>window.location.href='../admin/admin.php?eventsetting=true';</script>";
    }
}

if(isset($_POST['update-achievement'])){
    $edit_ac_id=$_POST['edit_ac_id'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    
    $profile = time().$_FILES['profile']['name'];

    $query ="UPDATE achievement SET ac_title='$title',ac_desc='$desc',ac_pic='$profile' WHERE id='$edit_ac_id' ";
    $query_run=mysqli_query($db,$query);
    if($query_run){
        move_uploaded_file($_FILES['profile']['tmp_name'],"../assets/images/event/$profile");
        $_SESSION['success'] = "*/Update";
        echo "<script>window.location.href='../admin/admin.php?achievementsetting=true';</script>";
    }else{
        $_SESSION['status'] = "*/Not Update";
        echo "<script>window.location.href='../admin/admin.php?achievementsetting=true';</script>";
    }
}
if(isset($_POST['update-participation'])){
    $edit_part_id=$_POST['edit_part_id'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    
    $profile = time().$_FILES['profile']['name'];

    $query ="UPDATE participation SET par_title='$title',par_desc='$desc',par_pic='$profile' WHERE id='$edit_part_id' ";
    $query_run=mysqli_query($db,$query);
    if($query_run){
        move_uploaded_file($_FILES['profile']['tmp_name'],"../assets/images/event/$profile");
        $_SESSION['success'] = "*/Update";
        echo "<script>window.location.href='../admin/admin.php?participationsetting=true';</script>";
    }else{
        $_SESSION['status'] = "*/Not Update";
        echo "<script>window.location.href='../admin/admin.php?participationsetting=true';</script>";
    }
}
if(isset($_POST['update-community'])){
    $edit_com_id=$_POST['edit_com_id'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    
    $profile = time().$_FILES['profile']['name'];

    $query ="UPDATE community SET c_title='$title',c_desc='$desc',c_pic='$profile' WHERE id='$edit_com_id' ";
    $query_run=mysqli_query($db,$query);
    if($query_run){
        move_uploaded_file($_FILES['profile']['tmp_name'],"../assets/images/event/$profile");
        $_SESSION['success'] = "*/Update";
        echo "<script>window.location.href='../admin/admin.php?communitysetting=true';</script>";
    }else{
        $_SESSION['status'] = "*/Not Update";
        echo "<script>window.location.href='../admin/admin.php?communitysetting=true';</script>";
    }
}
if(isset($_POST['update-conference'])){
    $edit_con_id=$_POST['edit_con_id'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    
    $profile = time().$_FILES['profile']['name'];

    $query ="UPDATE conference SET con_title='$title',con_desc='$desc',con_pic='$profile' WHERE id='$edit_con_id' ";
    $query_run=mysqli_query($db,$query);
    if($query_run){
        move_uploaded_file($_FILES['profile']['tmp_name'],"../assets/images/event/$profile");
        $_SESSION['success'] = "*/Update";
        echo "<script>window.location.href='../admin/admin.php?conferencesetting=true';</script>";
    }else{
        $_SESSION['status'] = "*/Not Update";
        echo "<script>window.location.href='../admin/admin.php?conferencesetting=true';</script>";
    }
}

?>

















