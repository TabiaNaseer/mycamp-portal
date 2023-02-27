<?php
require('db.php');


if(isset($_POST['add-pi'])){
    $id=$_SESSION['id'];
    $edu = $_POST['edu'];
    $dep = $_POST['dep'];
    $uni = $_POST['uni'];
        $query = "INSERT INTO qualification (education,dep,uni,fac_id) VALUES('$edu','$dep','$uni','$id') ";
        
        $run = mysqli_query($db,$query);
        if($run){
             $_SESSION['success'] = "*/Qualification Added";
      echo "<script>window.location.href='../admin/index.php?profilesetting=true';</script>";                    
    
        }else{
            $_SESSION['status'] = "*/Qualification not Added";
      echo "<script>window.location.href='../admin/index.php?profilesetting=true';</script>"; 
        }
    
    }
if(isset($_POST['add-resume'])){
    $id=$_SESSION['id'];
    $type = $_POST['type'];
    $desc = $_POST['desc'];
    $query = "INSERT INTO resume (type,description,faculty_id) VALUES('$type','$desc','$id') ";
    
    $run = mysqli_query($db,$query);
    if($run){
        $_SESSION['success'] = "*/Resume Added";
  echo "<script>window.location.href='../admin/index.php?resumesetting=true';</script>";                    

    }else{
            $_SESSION['status'] = "*/Resume not Added";
  echo "<script>window.location.href='../admin/index.php?resumesetting=true';</script>"; 
        }

}
    if(isset($_POST['update_pi'])){

     $id=$_SESSION['id'];
    $profile = $_POST['profile'];

    $query ="UPDATE faculty SET profile='$profile'  WHERE id='$id'";
    $query_run=mysqli_query($db,$query);
    if($query_run){
       
        $_SESSION['success'] = "*/Updated";
        echo "<script>window.location.href='../admin/index.php?profiledatasetting=true';</script>";
    }else{
        $_SESSION['status'] = "*/Not Updated";
        echo "<script>window.location.href='../admin/index.php?profiledatasetting=true';</script>";
    }
}

if(isset($_POST['add-research'])){
    
$title = $_POST['title'];
$date = $_POST['date'];
$author = $_POST['author'];

$query = "INSERT INTO research (res_title,res_year,res_link) VALUES('$title','$date','$author') ";

    $run = mysqli_query($db,$query);
    if($run){

        $_SESSION['success']="*/Research Added";
  echo "<script>window.location.href='../admin/admin.php?researchsetting=true';</script>";                    

    }else{
        $_SESSION['status']="*/Research Not Added";
  echo "<script>window.location.href='../admin/admin.php?researchsetting=true';</script>"; 
    }

}
if(isset($_POST['add-project'])){
    
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
move_uploaded_file($_FILES['profile']['tmp_name'],"../assets/images/event/$profile");
$query = "INSERT INTO project (p_title,p_date,pe_date,pi_name,p_status,status,description,pro_name,f_o_res,funding_agency,p_pic) VALUES('$title','$date','$edate','$author','$desc','$status','$description','$p_name','$f_res','$fun_age','$profile') ";

    $run = mysqli_query($db,$query);
    if($run){
        $_SESSION['success']="*/Project Added";
  echo "<script>window.location.href='../admin/admin.php?projectsetting=true';</script>";                    

    }
    else{
    $_SESSION['status']="*/Not Added";
     echo "<script>window.location.href='../admin/admin.php?projectsetting=true';</script>";                    

    }
}
if(isset($_POST['add-event'])){
    
$title = $_POST['title'];
$date = $_POST['date'];
$mon = $_POST['mon'];
$time = $_POST['time'];
$date2 = $_POST['date2'];
$profile = time().$_FILES['profile']['name'];
move_uploaded_file($_FILES['profile']['tmp_name'],"../assets/images/event/$profile");
    
$query = "INSERT INTO event (event_date,event_title,event_time,event_date2,event_month,event_pic) VALUES('$date','$title','$time','$date2','$mon','$profile') ";

    $run = mysqli_query($db,$query);
    if($run){

        $_SESSION['success']="*/Event Added";
  echo "<script>window.location.href='../admin/admin.php?eventsetting=true';</script>";                    

    }else{
        $_SESSION['status']="*/Event Not Added";
  echo "<script>window.location.href='../admin/admin.php?eventsetting=true';</script>";
    }

}
if(isset($_POST['add-achievement'])){
    
$title = $_POST['title'];
$desc = $_POST['desc'];
$profile = time().$_FILES['profile']['name'];
move_uploaded_file($_FILES['profile']['tmp_name'],"../assets/images/event/$profile");
    
$query = "INSERT INTO achievement (ac_title,ac_desc,ac_pic) VALUES('$title','$desc','$profile') ";

    $run = mysqli_query($db,$query);
    if($run){
        $_SESSION['success']="*/Achievement Added";
  echo "<script>window.location.href='../admin/admin.php?achievementsetting=true';</script>";                    

    }else{
        $_SESSION['success']="*/Achievement Not Added";
  echo "<script>window.location.href='../admin/admin.php?achievementsetting=true';</script>";                    

    }

}
if(isset($_POST['add-participation'])){
    
$title = $_POST['title'];
$desc = $_POST['desc'];
$profile = time().$_FILES['profile']['name'];
move_uploaded_file($_FILES['profile']['tmp_name'],"../assets/images/event/$profile");
    
$query = "INSERT INTO participation (par_title,par_desc,par_pic) VALUES('$title','$desc','$profile') ";

    $run = mysqli_query($db,$query);
    if($run){
        $_SESSION['success']="*/Participation Added";
  echo "<script>window.location.href='../admin/admin.php?participationsetting=true';</script>";                    

    }else{
        $_SESSION['success']="*/Participation Not Added";
  echo "<script>window.location.href='../admin/admin.php?participationsetting=true';</script>";                    

    }

}
if(isset($_POST['add-community'])){
    
$title = $_POST['title'];
$desc = $_POST['desc'];
$profile = time().$_FILES['profile']['name'];
move_uploaded_file($_FILES['profile']['tmp_name'],"../assets/images/event/$profile");
    
$query = "INSERT INTO community (c_title,c_desc,c_pic) VALUES('$title','$desc','$profile') ";

    $run = mysqli_query($db,$query);
    if($run){
        $_SESSION['success']="*/Community Service Added";
  echo "<script>window.location.href='../admin/admin.php?communitysetting=true';</script>";                    

    }else{
        $_SESSION['success']="*/Community Service Not Added";
  echo "<script>window.location.href='../admin/admin.php?communitysetting=true';</script>";                    

    }

}
if(isset($_POST['add-conference'])){
    
$title = $_POST['title'];
$desc = $_POST['desc'];
$profile = time().$_FILES['profile']['name'];
move_uploaded_file($_FILES['profile']['tmp_name'],"../assets/images/event/$profile");
    
$query = "INSERT INTO conference (con_title,con_desc,con_pic) VALUES('$title','$desc','$profile') ";

    $run = mysqli_query($db,$query);
    if($run){
        $_SESSION['success']="*/Conference Added";
  echo "<script>window.location.href='../admin/admin.php?conferencesetting=true';</script>";                    

    }else{
        $_SESSION['success']="*/Conference Not Added";
  echo "<script>window.location.href='../admin/admin.php?conferencesetting=true';</script>";                    

    }

}
if(isset($_POST['add-faculty'])){

$title = $_POST['title'];
$edu = $_POST['edu'];
$email = $_POST['email'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$dep = $_POST['dep'];
$uni = $_POST['uni'];
$department = $_POST['department'];
$desigName = $_POST['desigName'];
$author1 = $_POST['author1'];
$usertype = $_POST['usertype'];
$profile = time().$_FILES['profile']['name'];
$desigValue = $_POST['desigValue'];
move_uploaded_file($_FILES['profile']['tmp_name'],"../assets/images/testimonials/$profile");
$e = "SELECT email FROM faculty WHERE email='$email'";
$ee = mysqli_query($db , $e);
if($pass === $cpass && mysqli_num_rows($ee) === 0){
    
 $query = "INSERT INTO faculty (my_name,email,username,password,uni,dep,departmentname,education,my_designation,my_designation1,usertype,my_prof_pic,desig_value)VALUES('$title','$email','$user','$pass','$uni','$department','$dep','$edu','$desigName','$author1','$usertype','$profile','$desigValue') ";
        $run = mysqli_query($db,$query);
        
        if($run){
            $_SESSION['success']="*/Faculty Added";
            echo "<script>window.location.href='../admin/admin.php?facultysetting=true';</script>";                    

    }
    else{
    $_SESSION['status']="*/Not Added";
    echo "<script>window.location.href='../admin/admin.php?facultysetting=true';</script>";
}
}
elseif ($pass === $cpass && mysqli_num_rows($ee) > 0) {
    $_SESSION['status']="*/Email already registered";
    echo "<script>window.location.href='../admin/admin.php?facultysetting=true';</script>";
}
else{
    $_SESSION['status']="*/Password and Confirm Password does not match";
    echo "<script>window.location.href='../admin/admin.php?facultysetting=true';</script>";
}       


    
}

if(isset($_POST['login_button'])){

$user = $_POST['user'];
$pass =$_POST['pass'];

$name=$_POST['name'];
$profile = time().$_FILES['profile']['name'];
move_uploaded_file($_FILES['profile']['tmp_name'],"../assets/images/testimonials/$profile");
$query = "SELECT * FROM faculty WHERE username='$user' AND password='$pass' ";

    $run = mysqli_query($db,$query);
    $usertypes=mysqli_fetch_array($run);
    if($usertypes['usertype']=="admin"){
        $_SESSION['user_name']=$user;
         $_SESSION['password']=$pass;
         $_SESSION['u_name']=$usertypes['my_name'];
         $_SESSION['id']=$usertypes['id'];
         $_SESSION['pic']=$usertypes['my_prof_pic'];
         $_SESSION['usertype']="admin";
  echo "<script>window.location.href='../admin/admin.php?admin=true';</script>"; 
  session_write_close();                  

    }
    elseif($usertypes['usertype']=="faculty"){
         $_SESSION['username']=$email;
         $_SESSION['user_name']=$user;
          $_SESSION['usertype']="faculty";
         $_SESSION['password']=$pass;
          $_SESSION['u_name']=$usertypes['my_name'];
          $_SESSION['id']=$usertypes['id'];
  echo "<script>window.location.href='../admin/index.php?accountsetting=true';</script>";  
  session_write_close();                

    }
    else{
        $_SESSION['status']="*/ Invalid Username or Password";
    echo "<script>window.location.href='../login.php';</script>";
    }


}

if(isset($_POST['update_acc'])){
    $email = $_POST['email'];
    $pass =$_POST['pass'];
    

    $query ="UPDATE faculty SET email='$email',password='$pass' WHERE id='$id' ";
    $query_run=mysqli_query($db,$query);
    if($query_run){
        move_uploaded_file($_FILES['profile']['tmp_name'],"../assets/images/testimonials/$profile");
        $_SESSION['success'] = "*/Changes Saved";
        echo "<script>window.location.href='../admin/admin.php?accountsetting=true';</script>";
    }else{
        $_SESSION['status'] = "*/Changes not Saved";
        echo "<script>window.location.href='../admin/admin.php?accountsetting=true';</script>";
    }
}
if(isset($_POST['add-student'])){
    
$name = $_POST['name'];
$lname = $_POST['lname'];
$sdate = $_POST['sdate'];
$sid = $_POST['sid'];
$spass = $_POST['spass'];

    
$query = "INSERT INTO student (firstname,lastname,startdate,username,password) VALUES('$name','$lname','$sdate','$sid','$spass') ";

    $run = mysqli_query($db,$query);
    if($run){
         $_SESSION['success'] = "*/Student Added";
  echo "<script>window.location.href='../admin/admin.php?studentsetting=true';</script>";                    

    }else{
        $_SESSION['status'] = "*/Student Not Added";
  echo "<script>window.location.href='../admin/admin.php?studentsetting=true';</script>";
    }

}
if(isset($_POST['add-department'])){
    
$name = $_POST['name'];


    
$query = "INSERT INTO department (departmentname) VALUES('$name') ";

    $run = mysqli_query($db,$query);
    if($run){
         $_SESSION['success'] = "*/Department Added";
  echo "<script>window.location.href='../admin/admin.php?departmentsetting=true';</script>";                    

    }else{
        $_SESSION['status'] = "*/Department Not Added";
  echo "<script>window.location.href='../admin/admin.php?departmentsetting=true';</script>";
    }

}

if(isset($_POST['add-news'])){
    
$news = $_POST['news'];


    
$query = "INSERT INTO news (newsdata) VALUES('$news') ";

    $run = mysqli_query($db,$query);
    if($run){
         $_SESSION['success'] = "*/News Added";
  echo "<script>window.location.href='../admin/admin.php?newssetting=true';</script>";
  function sendNotif($to, $notif){
    $apiKey=
    "AAAAZNTx2G4:APA91bG1gQxZfb7072IRZqdlTd67xeqXmyuYOQ3k8MDxoogYXk6OkEA-VHRy1EOrQgnyvYlmnIB1RhFgfUh-68uGmnrDGTjFq431BlE9NheNABiigaTlFESulz8fLBWnHXOqI0SiwSh1";
    $ch= curl_init();

    $url="https://fcm.googleapis.com/fcm/send";
    $field= json_encode(array('to'=>$to, 'notification'=>$notif));
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,($field));

    $headers = array();
    $headers[] = 'Authorization: key ='.$apiKey;
    $headers[] = 'Content-Type: application/json';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
}
$to ='/topics/newnotice';
$notif = array(
    'title'=> 'MyCamp',
    'body' => 'New Notice Added'

);

sendNotif($to, $notif);       

    }else{
        $_SESSION['status'] = "*/News Not Added";
  echo "<script>window.location.href='../admin/admin.php?newssetting=true';</script>";
    }

}
if(isset($_POST['add-course'])){
    
$type1 = $_POST['type1'];
$type2 = $_POST['type2'];
$cc = $_POST['cc'];
$title = $_POST['title'];
$crehr = $_POST['crehr'];
    $query = "INSERT INTO courses (type1,type2,course_code,course_title,course_credit_hours) VALUES('$type1','$type2','$cc','$title','$crehr') ";
    
    $run = mysqli_query($db,$query);
    if($run){
        $_SESSION['success'] = "*/Course Added";
  echo "<script>window.location.href='../admin/admin.php?coursesetting=true';</script>";                    

    }else{
         $_SESSION['status'] = "*/Course Not Added";
  echo "<script>window.location.href='../admin/admin.php?coursesetting=true';</script>";
    }

}
if(isset($_POST['add-course1'])){
    
$type11 = $_POST['type11'];
$type22 = $_POST['type22'];
$cc = $_POST['cc'];
$title = $_POST['title'];
$crehr = $_POST['crehr'];
    $query = "INSERT INTO courses1 (type11,type22,course_code1,course_title1,course_credit_hours1) VALUES('$type11','$type22','$cc','$title','$crehr') ";
    
    $run = mysqli_query($db,$query);
    if($run){
         $_SESSION['success'] = "*/Course Added";
  echo "<script>window.location.href='../admin/admin.php?mphilcoursesetting=true';</script>";                    

    }else{
     $_SESSION['status'] = "*/Course not Added";
  echo "<script>window.location.href='../admin/admin.php?mphilcoursesetting=true';</script>";                    

    }

}
if(isset($_POST['add-course2'])){
    
$type13 = $_POST['type13'];
$type23 = $_POST['type23'];
$cc = $_POST['cc'];
$title = $_POST['title'];
$crehr = $_POST['crehr'];
    $query = "INSERT INTO courses2 (type13,type23,course_code2,course_title2,course_credit_hours2) VALUES('$type13','$type23','$cc','$title','$crehr') ";
    
    $run = mysqli_query($db,$query);
    if($run){
         $_SESSION['success'] = "*/Course Added";
  echo "<script>window.location.href='../admin/admin.php?phdcoursesetting=true';</script>";                    

    }else{
     $_SESSION['status'] = "*/Course not Added";
  echo "<script>window.location.href='../admin/admin.php?phdcoursesetting=true';</script>";   
    }

}





if(isset($_POST['update_acc'])){
    $id=$_SESSION['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $profile = time().$_FILES['profile']['name'];


    $query ="UPDATE faculty SET my_name='$name',email='$email',username='$user',password='$pass',my_prof_pic='$profile' WHERE id='$id' ";
    $query_run=mysqli_query($db,$query);
    if($query_run){
        move_uploaded_file($_FILES['profile']['tmp_name'],"../assets/images/testimonials/$profile");
        $_SESSION['success'] = "*/Updated";
        echo "<script>window.location.href='../admin/admin.php?accountsetting=true';</script>";
    }else{
        $_SESSION['status'] = "*/Not Updated";
        echo "<script>window.location.href='../admin/admin.php?accountsetting=true';</script>";
    }
}

if(isset($_POST['update_account'])){
    $id=$_SESSION['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $profile = time().$_FILES['profile']['name'];

    $query ="UPDATE faculty SET my_name='$name',email='$email',password='$pass',my_prof_pic='$profile' WHERE id='$id' ";
    $query_run=mysqli_query($db,$query);
    if($query_run){
        move_uploaded_file($_FILES['profile']['tmp_name'],"../assets/images/testimonials/$profile");
        $_SESSION['success'] = "*/Updated";
        echo "<script>window.location.href='../admin/index.php?accountsetting=true';</script>";
    }else{
        $_SESSION['status'] = "*/Not Updated";
        echo "<script>window.location.href='../admin/index.php?accountsetting=true';</script>";
    }
}
if(isset($_POST['update_about'])){
    
    $desc = $_POST['desc'];
    $desc2 = $_POST['desc2'];
    $profile = time().$_FILES['profile']['name'];
    
    

    $query ="UPDATE about1 SET desc1='$desc', desc2='$desc2', about_pic='$profile'";
    $query_run=mysqli_query($db,$query);
    if($query_run){
        move_uploaded_file($_FILES['profile']['tmp_name'],"../assets/images/about/$profile");
        $_SESSION['success'] = "*/Updated";
        echo "<script>window.location.href='../admin/admin.php?aboutsetting=true';</script>";
    }else{
        $_SESSION['status'] = "*/Not Updated";
        echo "<script>window.location.href='../admin/admin.php?aboutsetting=true';</script>";
    }
}

if(isset($_POST['update_contact'])){
    
    $address = $_POST['address'];
    $num = $_POST['num'];
     $email = $_POST['email'];
    

    $query ="UPDATE contact_info SET address='$address',phone_no='$num', email_add='$email'";
    $query_run=mysqli_query($db,$query);
    if($query_run){
       
        $_SESSION['success'] = "*/Updated";
        echo "<script>window.location.href='../admin/admin.php?contactsetting=true';</script>";
    }else{
        $_SESSION['status'] = "*/Not Updated";
        echo "<script>window.location.href='../admin/admin.php?contactsetting=true';</script>";
    }
}

?>
