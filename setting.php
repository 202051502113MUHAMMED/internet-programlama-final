<?php
session_start();
include ('inclod/connections.php');
if(isset($_SESSION['id']) && isset($_SESSION['username'])){

    $id = $_SESSION['id'] ;
    $user = $_SESSION['username'];
    $info = mysqli_query($coon,"select *  from users where username='$user'");
    while($data = mysqli_fetch_array($info)){
        $muh="<img id='img_profil' src='fotograf lar/".$data['profile_img']."' aıt='fotograf yok !'>";}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  


    <style>
      #error{
        color:red;
        font-size:20px;
      }
      #img_profil{
      
        background-color: white;
    position: relative;
    left: 495px;
    top: -28px;
    max-width: 45px;
    border-radius: 27px;
    position: absolute;
    top: 0px
      }
      
    </style>
</head>
<body>
    <div class="container">

    <div id="google_translate_element"></div>
        <?php echo $muh; ?> 
        <button class="btn btn-primary my-5" style=" font-size: 22px;"><a href="Add_user.php" class="text-light" style="text-decoration: none;">Add User</a> </button>
        <button class="btn btn-primary my-5" style=" font-size: 22px;"><a href="mesig_panal.php" class="text-light" style="text-decoration: none;">Mesgler</a> </button>
        <button class="btn btn-primary my-5" style=" font-size: 22px;"><a href="ListeEkran.php" class="text-light" style="text-decoration: none;">ListeEkran</a> </button>
        <button class="btn btn-primary my-5" style=" font-size: 22px;"><a href="index.php" class="text-light" style="text-decoration: none;">Giriş Yap</a> </button>
        <form action="file_seting_podt.php" method="post" enctype="multipart/form-data">
                <input class="files" type="file" name="file" id="file" placeholder="username"> </input>
            
                <input type="submit" value="UPLOAD" name="submit">
             </form>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">password</th>
      <th scope="col">Amendment</th>
    </tr>
  </thead>
  <tbody>


  <?php 
  $sql="SELECT  id,username,email,password FROM users";
  $result=mysqli_query($coon,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $username=$row['username'];
        $email=$row['email'];
        $password=$row['password'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$username.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td> 
        <button class="btn btn-primary"><a href="Update.php?id1='.$id.'" class="text-light" style="text-decoration: none;" >Update</a></button>
        <button class="btn btn-danger"><a href="setting.php?deleteid='.$id.'" class="text-light" style="text-decoration: none;" > Delete</a></button>
       </td> 
      </tr>';
      
  
    }

  }

  if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];



    $sql = "DELETE FROM users WHERE id=$id ";
    $result=mysqli_query($coon,$sql);
    if($result){ 
         header('location:setting.php');
        
    }else{
        die('Error' .mysqli_connect_erroe());
    }
}







  
  ?>
 
  </tbody>
</table>
    </div>

    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="js/main.js"></script>
</body>
</html>

<?php
    

}else{
    // header ('location:index.php');
    // exit();
}
?>