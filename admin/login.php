<?php
    
      require_once('../includes/dbconnection.php');
      session_start();
      error_reporting(0);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
<body>
    <style>
      :root{
    --color-white: #F2F2F2 ;
    --color-orange: #F2B66D ; 
    --color-blue: #4843D9;
    --color-blue2: #2D1859;
    --color-pink:#F25764 ;
    }
    .container {
    margin-top:100px;
    width:50%;

    }
    .btn-conxx{
        background-color:var(--color-pink);
        color: var(--color-white);
    }
    body{
        background-image:url(../images/img-admin.jpg);
        background-repeat:no-repeat;
        background-size:cover;
    }
    </style>
    <form method="post">
    <div class="container">
<div class="card text-center">
  <!-- <div class="card-header">
  Se connecter
  </div> -->
  <div class="card-body">
    <h5 class="card-title">ADMIN

</h5>
<div class="mb-3">
    
    <input type="text" name="USERNAME"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username*">
    
  </div>
  <div class="mb-3">
   
    <input type="password" name="PASSWORD" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe*">
  </div>
  

  <?php if(isset($_POST['login']))
  {
    
    $username=$_POST['USERNAME'];
    $password=$_POST['PASSWORD'];
    $query=mysqli_query($con,"SELECT `ID`, `USERNAME`, `EMAIL`, `PASSWORD` FROM `admin` WHERE (`USERNAME`='$username' AND `PASSWORD`='$password' )");
    $result=mysqli_fetch_array($query);
    if($result>0){
// $_SESSION['ut']=$result['id_per'];
$_SESSION['s_admin']=$result['ID'];
$_SESSION['s_username']=$result['USERNAME'];
   
header('location:dashboard.php');
     
    
    }
    else{
   echo "<script>alert('Détails Invalides');</script>";
    }
  }
     ?>

  <button type="submit" name="login" class="btn btn-conxx">Se connecter</button>
  
  </div>

</div>
</div>
</form>
</body>
</html>