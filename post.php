<?php
session_start();
include ('inclod/connections.php');
if(isset($_POST['username1']) && isset($_POST['password1'])){
    $username1 = stripcslashes(strtolower($_POST['username1']));
    $md5_pass1 = md5($_POST['password1']);
    $username1 = filter_input(INPUT_POST,'username1');
    // $password = stripcslashes(strtolower($_POST['password']));
    $username = htmlentities(mysqli_real_escape_string($coon,$_POST['username1']));
    $password1 = htmlentities(mysqli_real_escape_string($coon,$_POST['password1']));

    if(isset($_POST['keep'])){
        $keep =htmlentities(mysqli_real_escape_string($coon,$_POST['keep']));;
        if($keep == 1){
            setcookie('username1',$username1, time()+3600,"/");//setcookie تستخدم لتخزين البيانات ad ve şifre kaydet icin
            setcookie('password1',$password1, time()+3600,"/");
        }
    }
    
if(empty($username1)){
    $username_error = '<p id="error"> Please insert to username </p>';
    $err_s = 1 ;
}
    
if(empty($password1)){
    $passwo_error = '<P id="error"> please insert password </p>';
    $err_s = 1 ;
    include('index.php');
}




if(!isset($err_s )){
    $sql = "SELECT id,username,password FROM users WHERE username= '$username1' AND md5_pass='$md5_pass1' limit 1";
    $result = mysqli_query($coon,$sql);
    $num_rows = mysqli_num_rows($result);
    if($num_rows != 0){
         $row = mysqli_fetch_array($result);
        if($row['username'] === $username1 && $row['password'] === $password1 ){
         $_SESSION['username'] = $row['username'] ;// هي الجلسة الخاصة بنا اي عندما اخد رابط الموقع ياخذه مفتوح _SESSION
        $_SESSION['id'] = $row['id'] ;//_SESSION Rul alndığı zaman kayd varza kayd sayfa gitemiyor 
        header('location:ListeEkran.php') ;
        exit();
        }

    }else{
        $username_error   = '<p id="error"> worng username or password </p>';
    include('index.php');
    exit();
   
    } 
   
    
}
}else{
    header('location:index.php');
    exit();
}

?>





