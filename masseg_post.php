<?php
include ('inclod/conne.php');

if(isset($_POST['submit'])){
    $username = stripcslashes(strtolower($_POST['username'] ));//stripcslashes() Güvenlik için / almaz ..strtolower kuşuk harf alir
    $email = stripcslashes($_POST['email']);
    $tlfo = stripcslashes($_POST['tlfo']);
    $messag = stripcslashes($_POST['messag']);
    $username =  htmlentities(mysqli_real_escape_string($coon1,$_POST['username']));  
    $email =  htmlentities(mysqli_real_escape_string($coon1,$_POST['email']));





    $check_user = "SELECT * FROM `mess` WHERE username='$username'";
    $check_result =  mysqli_query($coon1,$check_user);
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
        $user_error = '<p id ="erroe" >you username needs to have a minimum of 6 letters</p> ';
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

    if(empty($tlfo)){//empty  ادخال giriş için
        $nomara_error = '<p id = "error"> please enter mobile </p> ';
        $err_s = 1 ;
    }
    
    if(empty($messag)){//empty  ادخال giriş için
        $messag_error = '<p id = "error"> please enter message </p> ';
        $err_s = 1 ;
        include('Masseg.php');
    }

    
  
   
      else{
        if(($err_s == 0) && ($num_rows == 0)){
            $sql = "INSERT INTO mess(username,email,tlfo,messag)VALUES ('$username','$email','$tlfo','$messag') ";
             mysqli_query($coon1,$sql);    
             header('location:AnaEkran.php');

            
    
        }
        else{
            // include('ListeEkran.php');
            // exit();
            $erroe12 = "<p id='eroor'> olmadı</p>";
           
        }
    }

}


?>