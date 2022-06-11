<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

    <style>
    body{
        background-image : url(images/slide.jpg);
        background-size: cover;
      }
      #rg{
        color: black;
        text-align:center;
        /* background-color:yellow; */
      }
      </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
    include('includes/dbconnection.php');
    $message = "your email is already registed !";
    
?>
<?php
    if(isset($_POST['signUP'])){

      $nom = $_POST['nom'];
      $cin = $_POST['cin'];
      $adress = $_POST['adress'];
      $tel = $_POST['tel'];
      $email = $_POST['email'];
      $mdp = md5($_POST['mdp']);

      $query=mysqli_query($con,"SELECT * FROM `personne` WHERE email='$email'");

      if(mysqli_num_rows($query)>0){
        echo "<script type='text/javascript'>alert('$message');</script>";
      
      
  }else{

  
       $sql="INSERT INTO `personne`(`cin`, `nom`, `email`, `mdp`, `tel`, `adress`) 
       VALUES ('$cin','$nom','$email','$mdp','$tel','$adress')";
      
       $result = mysqli_query($con,$sql);

       if($result){
        
        
        echo "<script type='text/javascript'>
        Swal.fire(
          'Your registration is successful!',
          '',
          'success',
        )
           
              </script>";
        
      }else{
        echo "<h1 id='rg'>your registration is NOT successful</h1>"; 
      }
        }
      }

  
    ?>
    

    
    

<form action="register.php" method="post" class="container">

<h1 class="m-5 text-center">S'inscrire</h1>
<div class="row mb-3">
  <div class="col">
    <label for="nom" class="form-label">NOM:</label>
    <input type="text" class="form-control" name="nom" required>
    </div>

    <div class="col">
    <label for="cin" class="form-label">CIN:</label>
    <input type="text" class="form-control" name="cin" required>
    </div>
    </div>

    <div class="row mb-3">
    <div class="col">
    <label for="email" class="form-label">EMAIL:</label>
    <input type="email" class="form-control" name="email" required>
    </div>

    <div class="col">
    <label for="mdp" class="form-label">MODE DE PASS:</label>
    <input type="password" class="form-control" name="mdp" required>
    </div>
    </div>  

    <div class="col mb-3">
    <label for="tel" class="form-label">TEL:</label>
    <input type="tel" class="form-control" name="tel" required>
    </div>

    <div class="row mb-3">
    <div class="col">
    <label for="adress" class="form-label">ADRESS:</label>
    <input type="text" class="form-control" name="adress" required>
  </div>

  
    </div>



    <div class="text-center">
  <button type="submit" name="signUP" id="register" style="background-color:#FFB3C6;" class="mt-5 btn-lg">S'inscrire</button>
  <p class="mt-2 mb-5">Vous avez déjà un compte ? <a href="login.php" class="text-primary">Connexion</a></p>
</div>

</form>



</script>

</body>
</html>