<?php
include ('inclod/connections.php');

    $id=$_GET['id1'];
    $sql= "SELECT * FROM users WHERE id='$id'" ;
    $data=mysqli_query($coon,$sql);
    $row=mysqli_fetch_array($data);
    $username=$row['username'];
    $email=$row['email'];
    $password=$row['password'];
    $gender=$row['gender'];
  
    


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


    if(empty($gender)){
        $gender_error = '<p id="error"> please choose gender</p>  ';
        $err_s = 1 ;
    }

    if(empty($birthdayy)){ //جمع تواريخ الميلاد 
        $birthday_error = '<p id="error"> please insert date of birthday</p>  ';
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
           
            $sql2 = "UPDATE  users SET username='$username',email='$email',password='$password',md5_pass='$md5_pass' WHERE id='$id' ";
             mysqli_query($coon,$sql2);
             
              header('location:setting.php');

             
             
             
            
        }
        else{
            include('Update.php');
           
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
    <title>Kyed</title>

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/kayd_giriş.css">
</head>
<body>
<div id="google_translate_element"></div>

            

<div class="main">

<h1> 	Amendment</h1>
<i> Become a programmer</i> <br>
<br>



    <form action="" method="POST">


                <?php if(isset($user_error)){
                    echo $user_error ;
                } 
                ?>

             <input type="text" name="username" id="username" placeholder="username" value="<?php   echo $username;?>"><br>

             <?php if(isset($email_error)){
                    echo $email_error ;
                } 
                ?>

             <input type="email" name="email" id="email" placeholder="mobile number or email" value="<?php   echo $email;?>"><br>

             <?php if(isset($pass_error)){
                    echo $pass_error ;
                } 
                ?>
             
             <input type="password" name="password" id="password" placeholder="password"  value="<?php   echo $password;?>"><br>

             
          
             <h7> Gender</h7>

             <?php if(isset( $gender_error)){
                    echo  $gender_error ;
                } 
                ?>

             <select name="gender" titel="gender choose male or female" id="" value="<?php   echo $gender;?>">
                 <option value="" disabled selected>Choose</option>
                 <option value="Male"> Male</option>
                 <option value="Female">Female </option>
             </select> <br>
          
             <h7> Birthday</h7>

             <?php if(isset( $birthday_error)){
                    echo  $birthday_error ;
                } 
                ?>
                
             <select aria-label="Gün" name="birthday_day" id="day" title="Gün" class="_9407 _5dba _9hk6 _8esg" value="<?php echo $birthday_day;?>">
             <option disabled selected> Day</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
                 <option value="6">6</option>
                 <option value="7">7</option>
                 <option value="8">8</option>
                 <option value="9">9</option>
                 <option value="10">10</option>
                 <option value="11">11</option>
                 <option value="12">12</option>
                 <option value="13">13</option>
                 <option value="14">14</option>
                 <option value="15">15</option>
                 <option value="16">16</option>
                 <option value="17">17</option>
                 <option value="18">18</option>
                 <option value="19">19</option>
                 <option value="20">20</option>
                 <option value="21">21</option>
                 <option value="22">22</option>
                 <option value="23">23</option>
                 <option value="24">24</option>
                 <option value="25">25</option>
                 <option value="26">26</option>
                 <option value="27">27</option>
                 <option value="28">28</option>
                 <option value="29">29</option>
                 <option value="30">30</option>
                 <option value="31">31</option>
             </select>
             <select aria-label="Ay" name="birthday_month" id="month" title="Ay" class="_9407 _5dba _9hk6 _8esg" value="<?php echo $birthday_month;?>">
             <option disabled selected> Month</option>
                 <option value="1">Oca</option>
                 <option value="2">Şub</option>
                 <option value="3">Mar</option>
                 <option value="4">Nis</option>
                 <option value="5">May</option>
                 <option value="6">Haz</option>
                 <option value="7">Tem</option>
                 <option value="8">Ağu</option>
                 <option value="9">Eyl</option>
                 <option value="10">Eki</option>
                 <option value="11">Kas</option>
                 <option value="12">Ara</option>
             </select>
             <select aria-label="Yıl" name="birthday_yearr" id="year" title="Yıl" class="_9407 _5dba _9hk6 _8esg" value="<?php echo $birthday_yearr;?>">
             <option disabled selected> Year</option>
                 <option value="2022" >2022</option>
                 <option value="2021">2021</option><option value="2020">2020</option>
                 <option value="2019">2019</option><option value="2018">2018</option>
                 <option value="2017">2017</option><option value="2016">2016</option>
                 <option value="2015">2015</option><option value="2014">2014</option>
                 <option value="2013">2013</option><option value="2012">2012</option>
                 <option value="2011">2011</option><option value="2010">2010</option>
                 <option value="2009">2009</option><option value="2008">2008</option>
                 <option value="2007">2007</option><option value="2006">2006</option>
                 <option value="2005">2005</option><option value="2004">2004</option>
                 <option value="2003">2003</option><option value="2002">2002</option>
                 <option value="2001">2001</option><option value="2000">2000</option>
                 <option value="1999">1999</option><option value="1998">1998</option>
                 <option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option>
                 <option value="1994">1994</option><option value="1993">1993</option>
                 <option value="1992">1992</option><option value="1991">1991</option>
                 <option value="1990">1990</option><option value="1989">1989</option>
                 <option value="1988">1988</option><option value="1987">1987</option>
                 <option value="1986">1986</option><option value="1985">1985</option>
                 <option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option>
                 <option value="1981">1981</option><option value="1980">1980</option>
                 <option value="1979">1979</option><option value="1978">1978</option>
                 <option value="1977">1977</option><option value="1976">1976</option>
                 <option value="1975">1975</option>
                 <option value="1974">1974</option>
                 <option value="1973">1973</option>
                 <option value="1972">1972</option>
                 <option value="1971">1971</option>
                 <option value="1970">1970</option>
                 <option value="1969">1969</option>
                 <option value="1968">1968</option>
                 <option value="1967">1967</option>
                 <option value="1966">1966</option>
                 <option value="1965">1965</option>
                 <option value="1964">1964</option>
                 <option value="1963">1963</option>
                 <option value="1962">1962</option>
                 <option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option>
                 <option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option>
                 <option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option>
                 <option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option>
                 <option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option>
                 <option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option>
                 <option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option>
                 <option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option>
                 <option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option>
                 <option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option>
                 <option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option>
                 <option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option>
                 <option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option>
                 <option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option>
                 <option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option>
                 <option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option>
                 <option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option>
                 <option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option>
                 <option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option>
             </select><Br>
          
            <input type="submit" name="submit" id="submit" value="	Amendment"  ><br>

         </form> 
           


</div>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="js/main.js"></script>
</body>
</html>











