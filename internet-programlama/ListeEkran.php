
<?php
session_start();
include('inclod/connections.php');
if(isset($_SESSION['id']) && isset($_SESSION['username'])){

    $id = $_SESSION['id'] ;
    $user = $_SESSION['username'];

    $info = mysqli_query($coon,"SELECT *  FROM users WHERE username='$user'");
    while($data = mysqli_fetch_array($info)){
        $muh="<img id='img_profil' src='fotograf lar/".$data['profile_img']."' aıt='fotograf yok !'>";   



?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kayd liste</title>
    
  
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/kayd_giriş.css">
   
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



}
a{
    text-decoration: none;
}
footer{
    background-color: #191919;
    padding: 70px 0 0;
}
footer .container{
    display: grid;
    grid-template-columns:repeat(auto-fill, minmax(240px, 1fr));
    gap: 40px;
}

footer .container .box h3{
    color: var(--min-color);
    font-size: 30px;
    margin: 0 0 20px;
    font-weight: bold;
}
footer .container .box .social{
    display: flex;
    font-size: 25px;
}
@media(max-width:767px){
    footer .container .box .social{
        justify-content: center;
    }
}
footer .container .box .social li{
    margin-right: 10px;
}
footer .container .box .social li a{
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
}
footer .container .box .social li a .icon{
    color: rgba(255, 255, 255, 0.788);
    animation: min-color .5s ease-in-out infinite alternate;
}
footer .container .box .social li:nth-child(2) a .icon{
    animation-name: min2-color ;
}
footer .container .box .social li:nth-child(3) a .icon{
    animation-name: min3-color ;
}
footer .container .box  .text{
    color: white;
    font-size: 15px;
    max-width: 100%;
}

footer .container .box .links .right{
    animation: moving-arrow .6s linear infinite;
}
footer .container .box .links li{
    padding: 6px;
    border-top: 1px solid var(--min-color);
    transition: var(--tra-transition);
    
}
footer .container .box .links li:hover{
    transform: translateY(-5px);
    cursor: pointer;
    color: rgba(255, 255, 255, 0.658);
    border-top: 1px solid #2195f3b4;
}
footer .container .box .links li a{
    padding: 18px;
    color: var(--min3-background);
    transition: var(--tra-transition);
    
}
footer .container .box .links li a:hover{
    color: rgba(255, 255, 255, 0.596);
}
footer .container .box .line{
    display: flex;
    align-items: center;
}
@media(max-width:767px){
    footer .container .box .line{
        display: block;
    }
    footer .container .box .line .info{
        margin-top: 15px;
    }
}
footer .container .box .line i{
    color: red;
}
footer .container .box .line .info{
    margin-left: 16px;
    color: white;
    font-size: 14px;
    max-width: 100%;
}
footer .container .box .m-1{
    margin: 25px 0;
}
@media (max-width:767px) {
    footer .container .box{
       text-align: center;
    }
    footer .container .box .m-1{
        justify-content: center;
    }
}


footer .container .footer-gallery{

}
footer .container .footer-gallery img{
    width: 126px;
  
    border: 3px solid white;
    margin: 2px;
    height: 120px;
}

footer .copyright{
    padding: 25px;
    text-align: center;
    color: white;
    margin: 50px 0 0;
    border-top: 1px solid var(--min-color);
}



footer .copyright span:nth-child(1){
    color: var(--min2-color-alt);
    font-size: 17px;
}
footer  .copyright span:nth-child(2){
    margin: 0 10px;
    color: var(--min-color);
    font-size: 19px;
    font-weight: bold;
}
.h1{
    color:white;
}
.a{
    color: white;
    font-size: 23px;
    background-color: var(--min-color);
    padding: 10px;
    border-radius: 5px;
    text-decoration: none;
}
.a:hover{
    background-color: var(--min2-color-alt);
    border: 1px solid white;
    transition: var(--tra-transition);
    color: burlywood;
}
#img_profil{
    max-width: 28px;
    background-color: white;
    position: relative;
    left: 127px;
    top: -28px;
    max-width: 45px;
    border-radius: 27px;
}
#error{

}

    </style>
    
</head>
<body>




    <footer>

    
        <div class="container">
            <div class="box">
            <div class="img">
            <a class="a" href="logut_post.php"><i class="fa-solid fa-arrow-right-from-bracket fa_4x"></i> Exit</a>

                <?php echo $muh; ?>
                <h1 class="h1"> hello, <?php echo $user ?> </h1>
            </div>
      
            
                    <?php if(isset($error)){
                        echo $error;
                    }
                    
                    ?>
             <form action="file-post.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file" id="file"> 
            
                <input type="submit" value="UPLOAD" name="submit">
             </form>
            
            </div>
            
     

      
          
            <div class="box">
                <ul class="links">
                    <li>
                       <a href="AnaEkran.php" > <i class="fa-brands fa-html5"></i> HTML </a>
                   </li>
                   <li>
                       <a href="AnaEkran.php"> <i class="fa-brands fa-css3-alt"></i> CSS </a>
                   </li>
                   <li>
                       <a href="AnaEkran.php"> <i class="fa-brands fa-js"></i> JavaScript</a>
                   </li>
                   <li>
                       <a href="AnaEkran.php"> <i class="fa-brands fa-python"></i> Python </a>
                   </li>
                   <li>
                       <a href="AnaEkran.php"> <i class="fa-brands fa-php"></i> PHP </a>
                   </li>
                   <li>
                       <a href="AnaEkran.php"> <i class="fa-brands fa-java"></i> Java </a>
                   </li>
                
                   <li>
                       <a href="AnaEkran.php"> <i class="fa-brands fa-java"></i>The-most-used  </a>
                   </li>
                   <li>
                       <a href="AnaEkran.php"><i class="fa-sharp fa-solid fa-c">++</i> C++ </a>
                   </li>
                   <li>
                       <a href="AnaEkran.php"> <i class="fa-sharp fa-solid fa-c"></i> C </a>
                   </li>
                   <li>
                       <a href="AnaEkran.php"> <i class="fa-sharp fa-solid fa-c">#</i>  C# </a>
                   </li>
                   <li>
                      <a href="Masseg.php"> <i class="fa-sharp fa-solid fa-envelope-open-text"></i> Message</a>
                    </li>

               
                </ul>
            </div>
            <div class="box">
                <div class="line">
                    <i class="fas fa-map-marker-alt fa-fw fa-1x"></i>
                    <div class="info">
                        türkye, Kutahya, osman gaz, merkez, kahramanmaraş, dulkadiroglu, 
                    </div>
                </div>
                <div class="line m-1">
                   <i class="fa-solid fa-phone-volume fa-1x"></i>
                   <div class="info ">
                       +90 5318 939 ...
                    </div>
                </div>
                
            </div>
            <div class="box footer-gallery">
               <img src="fotograf lar/CSS Reference.jpg" alt="">
               <img src="fotograf lar/CSS Browser Support Reference.jpg" alt="">
               <img src="fotograf lar/CSS Selector Reference.jpeg" alt="">
               <img src="fotograf lar/W3.CSS Reference.png" alt="">
               <img src="fotograf lar/Icons Reference.webp" alt="">
               <img src="fotograf lar/Sass String Functions.jpg" alt="">
            </div>
        </div>
        <p class="copyright">
           <span>elzero</span> 
          &copy;2022 <span> Her Yerde</span>All rights are available <br>
       </p>
    </footer>
</body>
</html>


<?php
    }

}else{
    // header ('location:index.php');
    // exit();
}
?>

