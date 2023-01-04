<?php
include ('inclod/connections.php');
if(isset($_GET['updateid'])){
    $id=$_GET['updateid'];
    $sql= "SELECT * FROM `users` WHERE id='$id'";
    $result=mysqli_query($coon,$sql);
    $row=mysqli_fetch_assoc($result);
    $username=$row['username'];
    $email=$row['email'];
    $password=$row['password'];

}
if(isset($_POST['submit'])){
    
    $username = stripcslashes(strtolower( $_POST['username'] )) ;//stripcslashes() Güvenlik için / almaz ..strtolower kuşuk harf alir
    $email = stripcslashes($_POST['email']);
    $password = stripcslashes($_POST['password']);


    $username =  htmlentities(mysqli_real_escape_string($coon,$_POST['username']));  
    $email =  htmlentities(mysqli_real_escape_string($coon,$_POST['email']));
    $password =  htmlentities(mysqli_real_escape_string($coon,$_POST['password']));
    $md5_pass = md5($password);// يقوم بتشفير كلمة السر الى كود عشوائي güvenli için


  

   
  


    



   





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
        include('Update.php');
    }
    elseif(strlen($password) < 6){
        $pass_error = '<p id="error"> you password needs to have a minimum of 6 letters </p> ';
        $err_s = 1 ;
        include('Update.php');
    }


    else{
        if(($err_s == 0) ){
           
            $sql = "UPDATE  `users` SET id=$id,username='$username',email='$email',password='$password' WHERE id=$id ";
             $result=mysqli_query($coon,$sql);
             if($result){
              header('location:setting.php');

             }
             
             
            
        }
        else{
            include('Update.php');
           
        }
    }




}

?>