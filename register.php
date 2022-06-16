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
      :root{
    --color-white: #F2F2F2 ;
    --color-orange: #F2B66D ; 
    --color-blue: #4843D9;
    --color-blue2: #2D1859;
    --color-pink:#F25764 ;
    }
        body{
            background-image:url(images/imgforrgs.jpg);
            background-repeat:no-repeat;
            background-size:cover;
        }
        section .h-100{
          background-color:var(--color-white);
        }
      </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<?php
    include('includes/dbconnection.php');
    include('includes/header.php');
    $message = "Votre email est déjà inscrit !";
    
?>
<?php
    if(isset($_POST['signUP'])){

      $nom = $_POST['nom'];
      $cin = $_POST['cin'];
      $adress = $_POST['adress'];
      $tel = $_POST['tel'];
      $email = $_POST['email'];
      $mdp = md5($_POST['mdp']);
      $type_per = $_POST['type_per'];

      $query=mysqli_query($con,"SELECT * FROM `personne` WHERE email='$email'");

      if(mysqli_num_rows($query)>0){
        echo "<script type='text/javascript'>alert('$message');</script>";
      
      
  }else{

  
       $sql="INSERT INTO `personne`(`cin`, `nom`, `email`, `mdp`, `tel`, `adress`, `type_per`) 
       VALUES ('$cin','$nom','$email','$mdp','$tel','$adress','$type_per')";
      
       $result = mysqli_query($con,$sql);

       if($result){
        
        
        echo "<script type='text/javascript'>
        Swal.fire(
          'Votre inscription est réussie !',
          '',
          'success',
        )
           
              </script>";
        
      }else{
        echo "<h1 id='rg'>Votre inscription a échoué</h1>"; 
      }
        }
      }

  
    ?>

<form action="register.php" method="post" class="container">

<section class="h-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="images/regimg.jpg"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Créer un compte</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="nom" id="form3Example1m" class="form-control form-control-lg" required />
                      <label class="form-label" for="form3Example1m">Nom complet :</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="cin" id="form3Example1n" class="form-control form-control-lg" required/>
                      <label class="form-label" for="form3Example1n">CIN :</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="email" name="email" id="form3Example1m1" class="form-control form-control-lg" required/>
                      <label class="form-label" for="form3Example1m1">Email :</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="tel" name="tel" class="form-control form-control-lg" placeholder="+212" required />
                      <label class="form-label" for="form3Example1n1" >Téléphone :</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="adress"id="form3Example8" class="form-control form-control-lg"required />
                  <label class="form-label" for="form3Example8">Adresse :</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="mdp" id="form3Example90" class="form-control form-control-lg" required/>
                  <label class="form-label" for="form3Example90">Mot de passe :</label>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Type de Personne: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="type_per"  value="1" />
                    <label class="form-check-label" for="utilisateur">Utilisateur</label> &nbsp 
                    <br>
                    <input class="form-check-input" type="radio" name="type_per"    value="2" />
                    <label class="form-check-label" for="agent">Agent</label>
                  </div>


                </div>
                <button type="submit" name="signUP" id="register" style="background-color:var(--color-orange);" class="mt-5 btn-lg">S'inscrire</button>
                <p class="mt-2 mb-5">Vous avez déjà un compte ? <a href="login.php" class="text-primary">Connexion</a></p>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <h1 class="m-5 text-center">S'inscrire</h1>
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
</div> -->

</form>



</script>

</body>
</html> 