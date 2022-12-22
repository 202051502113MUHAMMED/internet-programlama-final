<?php
session_start();
include('inclod/connections.php');
if(isset($_SESSION['id']) && isset($_SESSION['username'])){

    $id = $_SESSION['id'] ;
    $user = $_SESSION['username'];

    $info = mysqli_query($coon,"select *  from users where username='$user'");
    while($data = mysqli_fetch_array($info)){
        $muh="<img id='img_profil' src='fotograf lar/".$data['profile_img']."' aıt='fotograf yok !'>";   



?>







<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Giriş</title>

    <link rel="icon" href="images/nus-removebg-preview.png">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/tasarim.css">
   
    


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    
        <div class="translet">
            
        </div>

    <header>
        <div class="container">

            
              <?php  echo $muh;  ?>
           
            <div class="box">

                <a class="logut" href="logut_post.php"><i class="fa-solid fa-arrow-right-from-bracket fa_4x"></i> Exit</a>
            </div>
            
            
            <a href="" class="logo"> <?php echo $user ?> </a>
            <ul class="main-nav">
                <li class="mina"><a href="#HTML"> HTML</a></li>
                <li><a href="#CSS"> CSS</a></li>
                <li><a href="#JavaScript"> JavaScript </a></li>
                
                <li>
                    <a href=""> programlama Listesi </a>
                    <!-- başla  menu  -->
                    <div class="programlama">
                        <div class="image">
                            <img src="imges/megamenu.png" alt="">
                        </div>
                        <ul class="links">
                            <li>
                                <a href="php/index1.php"> <i class="fa-brands fa-python"></i> Python </a>
                            </li>
                            <li>
                                <a href="#PHP"> <i class="fa-brands fa-php"></i> PHP </a>
                            </li>
                            <li>
                                <a href="#Java"> <i class="fa-brands fa-java"></i> Java </a>
                            </li>
                            <li>
                                <a href="#The-most-used"> <i class="fa-brands fa-java"></i>The-most-used  </a>
                            </li>
                            <li>
                                <a href="#C++"><i class="fa-sharp fa-solid fa-c">++</i> C++ </a>
                            </li>
                            <li>
                                <a href="#C"> <i class="fa-sharp fa-solid fa-c"></i> C </a>
                            </li>
                        </ul>
                        <ul class="links">
                            <li>
                                <a href="^#C#"> <i class="fa-sharp fa-solid fa-c">#</i>  C# </a>
                            </li>
                            <li>
                                <a href="#HTML" > <i class="fa-brands fa-html5"></i> HTML </a>
                            </li>
                            <li>
                                <a href="#CSS"> <i class="fa-brands fa-css3-alt"></i> CSS </a>
                            </li>
                            <li>
                                <a href="#JavaScript"> <i class="fa-brands fa-js"></i> JavaScript</a>
                            </li>
                            <li>
                                <a href="#Message"> <i class="fa-sharp fa-solid fa-envelope-open-text"></i> Message</a>
                            </li>

                        </ul>
                    </div>
                    <!-- bitiç  menu  -->
                </li>
            </ul>
            <div id="google_translate_element"></div>

            <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            
            
            <script>
            
            function googleTranslateElementInit(){
            
            new google.translate.TranslateElement
                        ( {pageLanguage: 'en'},
                        'google_translate_element'
                    );
                }
            
            </script>

        </div>
    </header>

    <div class="landing">
        <div class="container">
            <div class="text">
                <h1> Welcome, TO M.ELSUSE_PROJE World</h1>
                <p> Bilgisayar programlama resmi projesi  </p>
            </div>
            <div class="image">
                <img src="fotograf lar/php_fotograf-removebg-preview.png" alt="">
            </div>
        </div>
        <a href="#HTML" class="go-down">
            <i class="fas fa-angle-double-down fa-2x"></i>
        </a>
    </div>

    <div class="HTML" id="HTML">
        <h2 class="main-title"><a href="#">HTML</a> </h2>
        <div class="container">
            <div class="box">
                <img class="fotograf"  src="fotograf lar/HTML Tag Reference.png" alt="">
                <div class="content">
                    <h3> HTML Tag Reference </h3>
                    <p> HTML Element Reference</p>
                </div>
                <div class="info">
                    <a href="#"> Git</a>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </div>
            </div>
            <div class="box">
                <img class="fotograf"  src="fotograf lar/HTML Global Attributes.jpg" alt="">
                <div class="content">
                    <h3>HTML Global Attributes </h3>
                    <p>The global attributes are attributes that can be used with all HTML elements. </p>
                </div>
                <div class="info">
                    <a href="#"> Git</a>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </div>
            </div>
            <div class="box">
                <img class="fotograf"  src="fotograf lar/HTML Attribute Reference.jpg" alt="">
                <div class="content">
                    <h3> HTML Attribute Reference </h3>
                    <p> The table below lists all HTML attributes and what elements they can be used within:</p>
                </div>
                <div class="info">
                    <a href="#"> Git</a>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </div>
            </div>
            <div class="box">
                <img class="fotograf"  src="fotograf lar/HTML Canvas Reference.jpg" alt="">
                <div class="content">
                    <h3> HTML Canvas Reference</h3>
                    <p>The HTML <code >&lt;canvas&gt;</code> tag is used to draw graphics, on the fly, via scripting 
                        (usually JavaScript).</p>
                </div>
                <div class="info">
                    <a href="#"> Git</a>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </div>
            </div>
            <div class="box">
                <img class="fotograf"  src="fotograf lar/HTML DOCTYPE.jpg" alt="">
                <div class="content">
                    <h3>HTML <code> &lt;!DOCTYPE > </code>  </h3>
                    <p> All HTML documents must start with a <code> &lt;!DOCTYPE></code> declaration</p>
                </div>
                <div class="info">
                    <a href="#"> Git</a>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </div>
            </div>
            <div class="box">
                <img class="fotograf"  src="fotograf lar/HTML Tags.png" alt="">
                <div class="content">
                    <h3> HTML Tags</h3>
                    <p> The <code> &lt;html&gt;Note: You should always include the lang attribute inside the &lt;html&gt;</code> </p>
                </div>
                <div class="info">
                    <a href="#"> Git</a>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </div>
            </div>
            <div class="box">
                <img class="fotograf" src="fotograf lar/HTML Attribute.jpg" alt="">
                <div class="content">
                    <h3> HTML Attribute</h3>
                    <p> The table below lists all HTML attributes and what elements they can be used within:</p>
                </div>
                <div class="info">
                    <a href="#"> Git</a>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </div>
            </div>
            <div class="box">
                <img class="fotograf" src="fotograf lar/HTML Styles.png" alt="">
                <div class="content">
                    <h3> HTML Styles</h3>
                    <p>The HTML <span > <a href="#" style="color: red;">style</a> </span>  attribute is used to add styles to an element, such as color, font, size, and more.</p>
                </div>
                <div class="info">
                    <a href="#"> Git</a>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="spikes"></div>


    <div class="CSS" id="CSS">
        <h2 class="main-title"><a href="#CSS">CSS</a> </h2>
        <div class="container">
            <div class="box">
                <div class="image">
                    
                    <img src="fotograf lar/CSS Reference.jpg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="image">
                    
                    <img src="fotograf lar/CSS Browser Support Reference.jpg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="image">
                    
                    <img src="fotograf lar/CSS Selector Reference.jpeg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="image">
                    
                    <img src="fotograf lar/W3.CSS Reference.png" alt="">
                </div>
            </div>
            <div class="box">
                <div class="image">
                    
                    <img src="fotograf lar/Icons Reference.webp" alt="">
                </div>
            </div>
            <div class="box">
                <div class="image">
                    
                    <img src="fotograf lar/Sass String Functions.jpg" alt="">
                </div>
            </div>

        </div>

    </div>

    <div class="JavaScript" id="JavaScript">
        <h2 class="main-title"><a href="#JavaScript">JavaScript</a> </h2>
        <div class="container">
            <div class="box quality">
                <div class="img-holder">
                    <img src="fotograf lar/JS By Alphabet.jpeg" alt="">
                </div>
                <h2> JS by Alphabet</h2>
                <p> Alphabetical JavaScript Reference</p>
                <a class="Git-1" href="#"> Git</a>
            </div>
            <div class="box time">
                <div class="img-holder">
                    <img src="fotograf lar/JS By Category.jpg" alt="">
                </div>
                <h2> JS by Category</h2>
                <p> JavaScript and HTML DOM Reference</p>
                <a class="Git-2" href="#"> Git</a>
            </div>
            <div class="box passion">
                <div class="img-holder">
                    <img src="fotograf lar/JavaScript Tutorial.jpg" alt="">
                </div>
                <h2> JavaScript Tutorial</h2>
                <p> JavaScript is the world's most popular programming language</p>
                <a class="GİT_3" href="#"> Git</a>
            </div>
        </div>
    </div>

    <div class="Python" id="Python">
        <h2 class="main-title"><a href="#Python">PYTHON</a> </h2>
        <div class="container">
            <div class="box">
                <img src="fotograf lar/Python Introduction.jpg" alt="">
                <h3>Python Introduction</h3>
                <span class="title">What is Python? </span>
                <p>Python is a popular programming language. It was created by Guido van Rossum, and released in 1991.</p>
                <div class="rate">
                    <a href=""> Git</a>
                    <i class="fas fa-long-arrow-alt-right  right"></i>
                </div>

            </div>

            <div class="box">
                <img src="fotograf lar/Python File Open.png" alt="">
                <h3>Python File Open</h3>
                <span class="title"> File handling is an important part of any web application.</span>
                <p>Python has several functions for creating, reading, updating, and deleting files.</p>
                <div class="rate">
                    <a href=""> Git</a>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </div>
            </div>

            <div class="box">
                <img src="fotograf lar/Python Examples.jpg" alt="">
                <h3>Python Online Compiler</h3>
                <span class="title"> Python Compiler (Editor)</span>
                <p>With our online Python compiler, you can edit Python code, and view the result in your browser.</p>
                <div class="rate">
                    <a href=""> Git</a>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </div>
            </div>
            <div class="box">
                <img src="fotograf lar/NumPy Tutorial.png" alt="">
                <h3>NumPy Tutorial</h3>
                <span class="title"> NumPy is used for working with arrays.</span>
                <p>We have created 43 tutorial pages for you to learn more about NumPy.</p>
                <div class="rate">
                    <a href=""> Git</a>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </div>
            </div>
            <div class="box">
                <img src="fotograf lar/Random Numbers In NumPy.jpeg" alt="">
                <h3>Random Numbers in NumPy</h3>
                <span class="title"> What is a Random Number?</span>
                <p>Random number does NOT mean a different number every time. Random means something that can not be predicted logically.</p>
                <div class="rate">
                    <a href=""> Git</a>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </div>
            </div>
            <div class="box">
                <img src="fotograf lar/NumPy Ufuncs.jpeg" alt="">
                <h3>NumPy ufuncs</h3>
                <span class="title"> What are ufuncs?</span>
                <p>ufuncs stands for "Universal Functions" and they are NumPy functions that operate on the <code style="color: red;">ndarray</code>  object.</p>
                <div class="rate">
                    <a href=""> Git</a>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </div>
            </div>


        </div>
        

    </div>





    <div class="PHP" id="PHP">
        <div class="dots dots-up"></div>
        <div class="dots dots-down"></div>
        <h2 class="main-title"><a href="#PHP">PHP</a> </h2>

        <div class="container">
            <div class="box">
                <div class="data">
                    <img src="fotograf lar/PHP Introduction.jpg" alt="">

                </div>
                <div class="info">
                    <h3> PHP Introduction</h3>
                    <p> PHP code is executed on the server.</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="fotograf lar/PHP Form Handling.jpg" alt="">

                </div>
                <div class="info">
                    <h3>PHP Form Handling</h3>
                    <p>PHP superglobals $_GET and $_POST</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="fotograf lar/PHP Date And Time.png" alt="">

                </div>
                <div class="info">
                    <h3> PHP Date and Time</h3>
                    <p> The PHP <span style="color: red;">date( )</span>  function is used to format a date and/or a time.</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="fotograf lar/PHP - What Is.jpg" alt="">

                </div>
                <div class="info">
                    <h3> PHP - What is OOP?</h3>
                    <p> OOP stands for Object-Oriented Programming. </p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="fotograf lar/PHP MySQL Database..jpg" alt="">
                
                </div>
                <div class="info">
                    <h3> PHP MySQL Database</h3>
                    <p> MySQL is the most popular database system used with PHP. </p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="fotograf lar/PHP XML Parsers.jpg" alt="">

                </div>
                <div class="info">
                    <h3> PHP XML Parsers</h3>
                    <p> What is XML? && What is an XML Parser?</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="fotograf lar/PHP - AJAX Introduction.jpg" alt="">
 
                </div>
                <div class="info">
                    <h3> PHP - AJAX Introduction</h3>
                    <p> AJAX is about updating parts of a web page, without reloading the whole page</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="fotograf lar/PHP Examples.jpg" alt="">

                </div>
                <div class="info">
                    <h3> PHP Examples</h3>
                    <p> PHP Syntax && PHP Comments</p>
                </div>
            </div>
        </div>
    </div>
    <div class="spikes"></div>


    <div class="Java" id="Java">
        <h2 class="main-title"><a href="#Java">Java</a> </h2>
        <div class="container">
            <div class="box">
                <i class="fas fa-user-shield fa-4x"></i>
              
                <h3> Java Tutorial</h3>
                <div class="info">
                    <a href="#"> Git </a>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-tools fa-4x"></i>
                <h3>Java Methods</h3>
                <div class="info">
                    <a href="#"> Git </a>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-binoculars fa-4x"></i>
                <h3> Java Classes</h3>
                <div class="info">
                    <a href="#"> Git </a>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-laptop-code fa-4x"></i>
                <h3> Java File Handling</h3>
                <div class="info">
                    <a href="#"> Git </a>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-key fa-4x"></i>
                <h3> Java Reference</h3>
                <div class="info">
                    <a href="#"> Git </a>
                </div>
            </div>
            <div class="box">
                <i class="fa-brands fa-teamspeak fa-4x"></i>
                <h3> Java Examples</h3>
                <div class="info">
                    <a href="#"> Git </a>
                </div>
            </div>
        </div>
    </div>

    <div class="The-most-used " id="The-most-used">
        <h2 class="main-title"><a href="#The-most-used">The-most-used</a> </h2>
        <div class="container">
            <img src="fotograf lar/skills.png" alt="">
            <div class="skills">
                <div class="skill">
                    <h3> HTML <span> 80%</span></h3>
                    <div class="the-progress">
                        <span style="width: 80%;" data-progress="80%"></span>
                    </div>
                </div>
            
            
                <div class="skill">
                    <h3> CSS <span> 85%</span></h3>
                    <div class="the-progress">
                        <span style="width: 85%;" data-progress="85%"></span>
                    </div>
                </div>
            
           
                <div class="skill">
                    <h3> JavaScript <span> 70%</span></h3>
                    <div class="the-progress">
                        <span style="width: 70%;" data-progress="80%"></span>
                    </div>
                </div>
           
          
                <div class="skill">
                    <h3> Python <span> 80%</span></h3>
                    <div class="the-progress">
                        <span style="width: 80%;" data-progress="80%"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="Cplasplas" id="C++">
        <h2 class="main-title"><a href="#C++">C++</a> </h2>
         <div class="container">
             <img src="fotograf lar/C++2.png" alt="" class="image">
             <div class="info">
                 <div class="box">
                     <img src="fotograf lar/work-steps-1.png" alt="">
                     <div class="text">
                         <h3>C++ Tutorial</h3>
                         <p>C++ is used to create computer programs, and is one of the most used language in game development.</p>
                     </div>
                 </div>
                 <div class="box">
                     <img src="fotograf lar/work-steps-2.png" alt="">
                     <div class="text">
                         <h3>  C++ Functions</h3>
                         <p>Functions are used to perform certain actions, and they are important for reusing code: Define the code once, and use it many times.</p>
                     </div>
                 </div>
                 <div class="box">
                     <img src="fotograf lar/work-steps-3.png" alt="">
                     <div class="text">
                         <h3> C++ Examples</h3>
                         <p>C++ Online Compiler && Exercises && Quiz && Certification</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>





     <div class="Ci" id="C">
        <h2 class="main-title"><a href="#C++">Ci</a> </h2>
        <div class="container">
            <div class="box">
                <span></span>
                <i class="fa-solid fa-mobile-button fa-2x"></i>
                <span class="number">C Tutorial</span>
                <span class="text">Learn C</span>
            </div>
            <div class="box">
               <span></span>
                <i class="fas fa-code fa-2x fafw"></i>
                <span class="number">C Functions</span>
                <span class="text">A function </span>
            </div>
            <div class="box">
               <span></span>
                <i class="fas fa-globe-asia fa-2x fafw"></i>
                <span class="number">C Structures</span>
                <span class="text">also called structs</span>
            </div>
            <div class="box">
                <i class="fa-thin fa-circle-info fa-2x"></i>
                <span class="number">C Examples</span>
                <span class="text">Output/Print</span>
            </div>

        </div>
    </div>


    <div class="Cşa" id="Python">
        <h2 class="main-title"><a href="#C#">C#</a> </h2>
        <div class="container">
            <div class="box">
                <img src="fotograf lar/C# Tutorial.png" alt="">
                <h3>C# Tutorial</h3>
                <span class="title">Learn C# </span>
                <p>C# (C-Sharp) is a programming language developed by Microsoft that runs on the .NET Framework.</p>
                <div class="rate">
                    <a href=""> Git</a>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </div>

            </div>

            <div class="box">
                <img src="fotograf lar/C# Methods.png" alt="">
                <h3>C# Methods</h3>
                <span class="title"> Create a Method</span>
                <p>A method is defined with the name of the method, followed by parentheses ()</p>
                <div class="rate">
                    <a href=""> Git</a>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </div>
            </div>

            <div class="box">
                <img src="fotograf lar/C# Classes.png" alt="">
                <h3>C# Classes</h3>
                <span class="title"> C# - What is OOP?</span>
                <p>OOP stands for Object-Oriented Programming.</p>
                <div class="rate">
                    <a href=""> Git</a>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </div>
            </div>
            <div class="box">
                <img src="fotograf lar/C# How To.png" alt="">
                <h3>C# How To</h3>
                <span class="title"> Add Two Numbers</span>
                <p>Learn how to add two numbers in C#:</p>
                <div class="rate">
                    <a href=""> Git</a>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </div>
            </div>
            <div class="box">
                <img src="fotograf lar/C# Classes.png" alt="">
                <h3> Each Chapter</h3>
                <span class="title">Exercise </span>
                <p>Our "Try it Yourself" tool makes it easy to learn C#. You can edit C# code and view the result in your browser</p>
                <div class="rate">
                    <a href=""> Git</a>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </div>
            </div>
            <div class="box">
                <img src="fotograf lar/C# Examples.png" alt="">
                <h3>C# Examples</h3>
                <span class="title"> Examples</span>
                <p> Syntax &&  Comments && Variables && Data Types && Type Casting ...</p>
                <div class="rate">
                    <a href=""> Git</a>
                    <i class="fas fa-long-arrow-alt-right right"></i>
                </div>
            </div>


        </div>
        

    </div>



    <div class="spikes"></div>

    <h2 class="title-main main-title"><a href="Masseg.php">Message</a> </h2>

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

                    <input type="submit" value="submit" name="submit">
                </form>
            </div>
        </div>
     </div>

 <footer>
         <div class="container">
             <div class="box">
                 <h3>M.ELSUSE</h3>
                 <ul class="social">
                     <li>
                        <a href="https://instagram.com/abo_coma?utm_medium=copy_link" target="balnk">
                            <i class="fa-brands fa-instagram icon"></i></a>
                     </li>
                     <li>
                        <a href="https://www.facebook.com/Muhammetsusi" target="balnk"> 
                            <i class="fa-brands fa-facebook-f icon"></i>   
                            </a>
                     </li>
                     <li>
                        <a href="https://wa.me/qr/MDR2SP3TWCUXB1"  target="balnk">
                            <i class="fa-brands fa-whatsapp icon"></i>
                        </a>
                     </li>
                 </ul>
                 <p class="text">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. voluptas optio aliquid ratione,
                      impedit omnis quod nesciunt, temporibus nam in dolore reprehenderit nisi alias.
                 </p>
             </div>
             <div class="box">
                 <ul class="links">
                    <li class="mina"><a href="#HTML"> HTML</a></li>
                    <li><a href="#CSS"> CSS</a></li>
                    <li><a href="#JavaScript"> JavaScript </a></li>
                    <li>
                        <a href="php/index1.php"> <i class="fa-brands fa-python"></i> Python </a>
                    </li>
                    <li>
                        <a href="#PHP"> <i class="fa-brands fa-php"></i> PHP </a>
                    </li>
                    <li>
                        <a href="#Java"> <i class="fa-brands fa-java"></i> Java </a>
                    </li>
                    <li>
                        <a href="#The-most-used"> <i class="fa-brands fa-java"></i>The-most-used  </a>
                    </li>
                    <li>
                        <a href="#C++"><i class="fa-sharp fa-solid fa-c">++</i> C++ </a>
                    </li>
                    <li>
                        <a href="#C"> <i class="fa-sharp fa-solid fa-c"></i> C </a>
                    </li>
                    <li>
                        <a href=""> <i class="fa-sharp fa-solid fa-c">#</i>  C# </a>
                    </li>
                    <li>
                        <a href="#HTML" > <i class="fa-brands fa-html5"></i> HTML </a>
                    </li>
                    <li>
                        <a href=""> <i class="fa-brands fa-css3-alt"></i> CSS </a>
                    </li>
                    <li>
                        <a href=""> <i class="fa-brands fa-js"></i> JavaScript</a>
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

