<?php


include ('inclod/conne.php');


    $id=$_GET['udetd'];
    $sql= "SELECT * FROM mess WHERE id='$id'" ;
    $data=mysqli_query($coon1,$sql);
    $row=mysqli_fetch_array($data);
    $username=$row['username'];
    $email=$row['email'];
    $tlfo=$row['tlfo'];
    $messag=$row['messag'];

if(isset($_POST['submit'])){
    $username = stripcslashes(strtolower($_POST['username'] ));//stripcslashes() Güvenlik için / almaz ..strtolower kuşuk harf alir
    $email = stripcslashes($_POST['email']);
    $tlfo = stripcslashes($_POST['tlfo']);
    $messag = stripcslashes($_POST['messag']);
    $username =  htmlentities(mysqli_real_escape_string($coon1,$_POST['username']));  
    $email =  htmlentities(mysqli_real_escape_string($coon1,$_POST['email']));





 




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
        include('panalmessig.php');
    }

    
  
   
      else{
        if(($err_s == 0)){
            $sql2 = "UPDATE  mess SET username='$username',email='$email',tlfo='$tlfo',messag='$messag' WHERE id='$id' ";
             mysqli_query($coon1,$sql2);    
             header('location:mesig_panal.php');

            
    
        }
        else{
            include('panalmessig.php');
           
        }
    }

}






?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link rel="stylesheet" href="css/kayd_giriş.css">


    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/normalize.css">
    

  <style>

:root{

    
--min-color: #2196f3;
--min2-color-alt:#1787e0;
--min4-color:#777;
--min5-color: #551a8b;
--min3-background:#ececec;
--tra-transition: 0.3s;
--main-padding-top:100px;
--main-padding-bottom:100px;
--main-text-transform: capitalize;


}

.Massg{
    min-height: 100vh;
    display: flex;
    flex-wrap: wrap;
}
.Massg .image{
    background-image: url(../imges/discount-background1.jpg);
    background-size: cover;
    color: white;
    flex-basis: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 1;
    animation: muhammed-backg 8s linear infinite;
}
.Massg .image::before{
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgb( 23 153 224 / 95%);
    z-index: -1;
}
@media(max-width:991px){
    .Massg .image{
        flex-basis: 100%;

    }
   
}
.Massg .form{
    display: flex;
    align-items: center;
    justify-content: center;
    /* flex-basis: 50% ; */
    max-width: 100%;
    margin: auto;
}
/* @media(max-width:991px){
    .discount .form{
        flex-basis: 100%; 
    }
} */

.Massg .form .content form .input{
    display: block;
    width: 100%;
    padding: 15px;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #ccc;
    background-color: #f9f9f9;
    
}
.Massg .form .content form .input:focus{
    border: 1px solid var(--min-color);
    outline: none;
    caret-color: var(--min-color);
}
.Massg .form .content form textarea.input{
    resize: none;
    height: 200px;
    font-style: italic;
    text-transform: var(--main-text-transform);
}
.Massg .form .content  input[type="submit"]{
    display: block;
    width: 100%;
    padding: 20px;
    background-color: var(--min-color);
    color: white;
    font-weight: bold;
    font-size: 32px;
    cursor: pointer;
    transition: var(--tra-transition);
}
.Massg .form .content  input[type="submit"]:hover{
background-color: var(--min2-color-alt);
border: 1px solid white;
}



.Massg .content{
    text-align: center;
    padding: 0 20px;
    margin-bottom: 100px;
}
.Massg .content h2{
        font-size: 40px;
        letter-spacing: -2px;
}
.Massg .content p{
    line-height: 1.6;
    font-size: 18px;
    max-width: 500px;
}
.Massg .content img{
    width: 300px;
    max-width: 100%;
}
.Massg .content .done{
        background-color: var(--min2-color-alt);
    padding: 7px;
    color: white;
    border-radius: 7px;
}
  </style>

    
</head>
<body>

<div id="google_translate_element"></div>

    <div class="Massg" id="Message">
    

    
        <div class="image">
            <div class="content">
                <h2></h2>
                <p>
                </p>
                <img src="imges/discount.png" alt="">
            </div>
        </div>
        <div class="form">
            <div class="content">
                <h2></h2>
                <form action="" method="POST">

                <?php if(isset($user_error)){
                    echo $user_error ;
                } 
                ?>
                    <input class="input" type="text" placeholder="username" name="username" value="<?php  echo $username;?>">

                    <?php if(isset($email_error)){
                    echo $email_error ;
                } 
                ?>
                    <input class="input" type="email" placeholder=" email" name="email" value="<?php  echo $email;?>">

                    <?php if(isset( $nomara_error)){
                    echo  $nomara_error;
                } 
                ?>
                    <input class="input" type="text" placeholder=" Phone Number" name="tlfo" value="<?php  echo $tlfo;?>" >

                    <?php if(isset( $messag_error)){
                    echo  $messag_error;
                } 
                ?>
                    <input class="input" name="messag" placeholder="The Problem" value="<?php  echo $messag;?>"></input>

                    <?php if(isset( $erroe12)){
                    echo  $erroe12;
                } 
                ?>

                    <input type="submit" value="submit" name="submit"><br>

                
                      <p> <a  class="done"  href="AnaEkran.php"> HOME <i class="fa-solid fa-arrow-right-long"></i></a></p> 
                    <br>
                    
                       <p><a class="done"  href="ListeEkran.php"> lestie <i class="fa-solid fa-arrow-right-long"></i> </a></p> 
                    
                    
                </form>
            </div>
        </div>
     </div>

     <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="js/main.js"></script>
</body>
</html>