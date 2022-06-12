<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
    body{
        background-image : url(../pics/);
        background-size: cover;
      }
      
      </style>
</head>
<body>
    
     <?php
      require_once('includes/dbconnection.php');
      session_start();
      error_reporting(0);
    ?>
    
<form action="" method="post">

<div class="text-center">
<h1 class="m-5">Connexion</h1>
</div>


<div class="container" >

<div class="mb-3 row">
<label for="email" class="form-label">Email :</label>
<input type="email" class="form-control-lg" name="email" >
</div>

<div class="row">
<label for="mdp" class="form-label">MODE DE PASS: :</label>
<input type="password" class="form-control-lg" name="mdp" >
</div>

</div>

  <?php if(isset($_POST['login']))
  {
     
    $email=$_POST['email'];
    $mdp=md5($_POST['mdp']);
    $query=mysqli_query($con,"SELECT `id_per`,`email`,`mdp` FROM `personne` WHERE `email`='$email' && `mdp`='$mdp'");
    $result=mysqli_fetch_array($query);
    if($result>0){
// $_SESSION['ut']=$result['id_per'];
$_SESSION['s_id_per']=$result['id_per'];
$_SESSION['s_email']=$result['email'];
   
     header('location:add-property.php');
    }
    else{
   echo "<script>alert('Invalid Details');</script>";
    }
  }
     ?>

<div class="text-center">
<button type="submit" name="login" style="background-color:#FFB3C6;" class="mt-5 btn-lg">Connexion</button>
<p class="mt-2 mb-5">Vous n'avez pas encore de compte? <a href="register.php" class="text-primary">inscrire</a> now</p>
</div>
</form>

</body>
</html>