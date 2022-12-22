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
                <form action="masseg_post.php" method="POST">

                <?php if(isset($user_error)){
                    echo $user_error ;
                } 
                ?>
                    <input class="input" type="text" placeholder="Ad" name="username">

                    <?php if(isset($email_error)){
                    echo $email_error ;
                } 
                ?>
                    <input class="input" type="email" placeholder=" email" name="email">

                    <?php if(isset( $nomara_error)){
                    echo  $nomara_error;
                } 
                ?>
                    <input class="input" type="text" placeholder=" TL No" name="tlfo">

                    <?php if(isset( $messag_error)){
                    echo  $messag_error;
                } 
                ?>
                    <textarea class="input" name="messag" placeholder="sikintisi yaz"></textarea>

                    <input type="submit" value="submit" name="submit"><br>

                
                      <p> <a  class="done"  href="AnaEkran.php"> HOME <i class="fa-solid fa-arrow-right-long"></i></a></p> 
                    <br>
                    
                       <p><a class="done"  href="ListeEkran.php"> lestie <i class="fa-solid fa-arrow-right-long"></i> </a></p> 
                    
                    
                </form>
            </div>
        </div>
     </div>

</body>
</html>