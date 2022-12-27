<?php

include ('inclod/connections.php');
// include 'inclod/connections.php';
if(isset($_POST['submit'])){
    $username = stripcslashes(strtolower( $_POST['username'] )) ;//stripcslashes() Güvenlik için / almaz ..strtolower kuşuk harf alir
    $email = stripcslashes($_POST['email']);
    $password = stripcslashes($_POST['password']);


    $username =  htmlentities(mysqli_real_escape_string($coon,$_POST['username']));  
    $email =  htmlentities(mysqli_real_escape_string($coon,$_POST['email']));
    $password =  htmlentities(mysqli_real_escape_string($coon,$_POST['password']));
    $md5_pass = md5($password);// يقوم بتشفير كلمة السر الى كود عشوائي güvenli için


    if(isset($_POST['birthday_month'])   && isset($_POST['birthday_yearr']) && isset($_POST['birthday_day'])){
        $birthday_month = (int) $_POST['birthday_month'];
        $birthday_yearr = (int) $_POST['birthday_yearr'];
        $birthday_day = (int) $_POST['birthday_day'];
        $birthdayy = htmlentities(mysqli_real_escape_string($coon,$birthday_day.'-'.$birthday_month.'-'.$birthday_yearr)); //W3schol A => &%+? html yazın kod haline gitryoursun ==güvenlik için
    }

   
  


    if(isset($_POST['gender'])){
        $gender = ($_POST['gender']);
        $gender = htmlentities(mysqli_real_escape_string($coon,$_POST['gender']));
        if(!in_array($gender,['Male','Female'])){
            $gender_error = '<p id ="error"> Please choose gender not a text !</p> ';// lutfan cinisiniz giriniz yazi değil;
            $err_s = 1 ;//استخدمناها كي عندم الانتهاء من جميع العناصر ولم يوجد اي خطء ارفع 



        }
    }



    $check_user = "SELECT * FROM `users` WHERE username='$username'";
    $check_result =  mysqli_query($coon,$check_user);
    $num_rows = mysqli_num_rows($check_result);
    if($num_rows != 0){
        $user_error = '<p id ="error"> sorry username already exist , chnage another one </p> ';
        $err_s = 1 ;
    }






    if(empty($username)){//empty  ادخال giriş için
        $user_error = '<p id = "error"> please enter username </p> ';
        $err_s = 1 ;
    }
    elseif(strlen($username) < 6){//strlen شرط عدد احرف الادخال eğer ad sayı < 6 onun almaz
        $user_error = '<p id ="error" >you username needs to have a minimum of 6 letters</p> ';
         $err_s = 1 ;
    }
    elseif(filter_var($username,FILTER_VALIDATE_INT)){//filter_var(..,FILTER_VALIDATE_INT) تستخدم لتاكد من عدم وجود ارقام في الاسم ad içine sayı olmaz 
        $user_error = '<p id="error"> please enter a valid username not a number </p> ';
        $err_s = 1 ;
    }


    if(empty($email)){
        $email_error = '<p id="error">please insert email</p>  ';
        $err_s = 1 ;

    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email_error = '<p id="error"> please a valid email </p> ';
        $err_s = 1 ;
    }

    if(empty($gender)){
        $gender_error = '<p id="error"> please choose gender</p>  ';
        $err_s = 1 ;
    }

    if(empty($birthdayy)){ //جمع تواريخ الميلاد 
        $birthday_error = '<p id="error"> please insert date of birthday</p>  ';
        $err_s = 1 ;
    }

    if(empty($password)){
        $pass_error = '<p id="error"> please insertn password</p> ';
        $err_s = 1 ;
        include('kayd_ol.php');
    }
    elseif(strlen($password) < 6){
        $pass_error = '<p id="error"> you password needs to have a minimum of 6 letters </p> ';
        $err_s = 1 ;
        include('kayd_ol.php');
    }


    else{
        if(($err_s == 0) && ($num_rows == 0)){
            if($gender == 'Male'){
                $imeg_e_k = 'profile_erkek.png';
            }elseif($gender == 'Female'){
                $imeg_e_k = 'profile_kız.png';
            }
            $sql = "INSERT INTO users(username,email,password,gender,birthdayy,md5_pass,profile_img)VALUES ('$username','$email','$password','$gender','$birthdayy','$md5_pass','$imeg_e_k') ";
             mysqli_query($coon,$sql);
             header('location:setting.php');
             
            
        }
        else{
            include('Add_user.php');
           
        }
    }




}





?>