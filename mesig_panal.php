<?php
session_start();
include ('inclod/conne.php');
if(isset($_SESSION['id']) && isset($_SESSION['username'])){

    $id = $_SESSION['id'] ;
    $user = $_SESSION['username'];
    $info = mysqli_query($coon1,"SELECT * FROM mess WHERE username='$user'");
    while($data = mysqli_fetch_array($info)){
        $muh1="<img id='img_profil1' src='fotograf lar/".$data['profile_img']."' aıt='fotograf yok !'>";}
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
      #img_profil1{
      
    background-color: white;
    position: relative;
    left: 495px;
    top: -28px;
    max-width: 45px;
    border-radius: 27px;
    position: absolute;
    top: 22px;
      }
      
    </style>
</head>
<body>
    <div class="container">

    <div id="google_translate_element"></div>

             

        <button class="btn btn-primary my-5" style=" font-size: 22px;"><a href="udetmessig.php" class="text-light" style="text-decoration: none;">Mesgler</a> </button>
        <button class="btn btn-primary my-5" style=" font-size: 22px;"><a href="setting.php" class="text-light" style="text-decoration: none;">setting</a> </button>
        <button class="btn btn-primary my-5" style=" font-size: 22px;"><a href="ListeEkran.php" class="text-light" style="text-decoration: none;">ListeEkran</a> </button>
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
      <th scope="col">Pone</th>
      <th scope="col">Messeg</th>
      <th scope="col">Amendment</th>
    </tr>
  </thead>
  <tbody>


  <?php 
  $sql="SELECT  id,username,email,tlfo,messag FROM mess";
  $result=mysqli_query($coon1,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $username=$row['username'];
        $email=$row['email'];
        $tlf=$row['tlfo'];
        $mesig=$row['messag'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$username.'</td>
        <td>'.$email.'</td>
        <td>'.$tlf.'</td>
        <td>'.$mesig.'</td>
        <td> 
        <button class="btn btn-primary"><a href="panalmessig.php?udetd='.$id.'" class="text-light" style="text-decoration: none;" >Update</a></button>
        <button class="btn btn-danger"><a href="mesig_panal.php?deleteid1='.$id.'" class="text-light" style="text-decoration: none;" > Delete</a></button>
       </td> 
      </tr>';
      
  
    }

  }

  if(isset($_GET['deleteid1'])){
    $id=$_GET['deleteid1'];



    $sql = "DELETE FROM mess WHERE id=$id ";
    $result=mysqli_query($coon1,$sql);
    if($result){ 
         header('location:mesig_panal.php');
        
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