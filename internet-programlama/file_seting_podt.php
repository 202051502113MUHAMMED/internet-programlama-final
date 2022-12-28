<?php

include_once('inclod/connections.php');
if(empty($_POST['file'])){

    $error = '<p id="error">plase choose fotograf to upload! </p>';
    include_once('setting.php');
}else{
    session_start();
}

if(isset($_SESSION['id']) && isset($_SESSION['username'])){
      $username = $_SESSION['username'];
      if(isset($_POST['submit'])){
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_error = $_FILES['file']['error'];
        $file_type = $_FILES['file']['type'];
        $file_tmp = $_FILES['file']['tmp_name'];// ehf.png___end en son kımat alir

        $file_extin = explode('.',$file_name);
        $file_act_ex = strtolower(end($file_extin));
        $allowed = array('jpg','jpge','png','svg');
        if(in_array($file_act_ex,$allowed)){
            if($file_error === 0){// 1000000 = 1mgbayt    uniqid()_تقومباخذ وقت جزء من السانيه 
                if($file_size < 3000000){
                    $file_nwe_name = uniqid('',true).'.'.$file_act_ex ;
                    $target ='fotograf lar/'. $file_nwe_name;
                    $sql ="UPDATE users SET profile_img='$file_nwe_name' WHERE username='$username' ";
                    mysqli_query($coon,$sql);
                    move_uploaded_file($file_tmp,$target);
                    header('location:setting.php');

                }else{
                    $error = '<p id="error"> max photo size 1 MgBayt </p>';
                    include_once('setting.php');
                }

            }else{
                $error = '<p id="error"> error in uplod foto </p>';
                include_once('setting.php');
            }


        }else{
            $error = '<p id="error">you cannot upload fotograf of this type </p>';
            include_once('setting.php');
        }



        
      }
   

}

?>