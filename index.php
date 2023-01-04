










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş</title>

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/kayd_giriş.css">

   
    </style>
</head>
<body>
<div id="google_translate_element"></div>




    <div class="main">

        <h1>log in </h1>
            <i> Become a programmer</i> <br>
            <br>


            <form action="post.php" method="POST">

                    <?php if(isset($username_error)){
                        echo $username_error;
                    }
                    ?>
                     <input type="text" name="username1" id="username" placeholder="username"  value="<?php if(isset($_COOKIE['username1'])) echo $_COOKIE['username1']; ?>"><br>

                    <?php if(isset($passwo_error)){
                        echo $passwo_error;
                    }
                    ?>
                           
                     <input type="password" name="password1" id="password" placeholder="password"  value="<?php if(isset($_COOKIE['password1'])) echo $_COOKIE['password1']; ?>"><br>


                      <label ><input type="checkbox" name="keep" id="" value="1"> keep me signed in </label><br>
                    
                     
                     <input type="submit" name="submit" id="submit" value="Log in" ><br>


            </form>
        
            <a href="">Password recovery </a>

        
            <h3> Or</h3><br>
            <a id="log" href="kayd_ol.php"> Register</a>

    </div>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="js/main.js"></script>
</body>
</html>





