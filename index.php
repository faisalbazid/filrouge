<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAISAL IMMO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap');
        :root{
    --color-white: #F2F2F2 ;
    --color-orange: #F2B66D ; 
    --color-blue: #4843D9;
    --color-blue2: #2D1859;
    --color-pink:#F25764 ;
    }
   
    *{
            padding:0;
            margin:0;
            box-sizing:border-box;
            font-family: 'Ubuntu', sans-serif;
                 }     
                 .navbar{
                    background-color: var(--color-blue2);
                    
                 } 
                 .navbar a {
                    color: var(--color-white);
                 }
                 .nav-link:hover{
                    background-color: var(--color-orange);
                    color: var(--color-blue2);
                 }      
     .navbar img{
           padding-right:250px;
           padding-left:30px;
           width:500px;
            height:100px;
        }
        .foot-logo{
          width: 170px;
           height: 90px;
        }
        nav .btn-conx{
            margin-left:200px;
           
        }
        nav .btn-ajout{
           
            background-color: var(--color-orange);
        }
        nav .btn:hover{
            background-color: var(--color-blue);
            color: var(--color-white);
        }
        .card-title {
            position: absolute;
             top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: var(--color-white);
            font-weight: 800;
        }
        .cont-slide p {
            position: absolute;
             top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: var(--color-white);
            font-weight: 800;
            font-size:1.8em;
        }
        .voir-plus{
          position: absolute;
             top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: var(--color-blue2);
            background-color:var(--color-orange);
            padding:10px;
            border-radius:10px;
           
        }
        .w-100{
          filter: brightness(66%); 
          height:575px;
        }
        .navbar-toggler span{
          background-color:var(--color-orange);
          height:20px;
        }
        .navbar-toggler{
          padding-right:100px;
        }
        .dropdown-menu{
          background-color:var(--color-blue);
        }
        .SERVICES .card-img-top{
            filter: brightness(50%);
            height: 500px;
        }
        .card-img-top:hover{
            filter: brightness(100%);
        }
        .SERVICES,.TYPES h1{
            text-align: center;
            color: var(--color-blue2);
            margin: 40px 0px;
            text-decoration: underline;
            text-decoration-color: var(--color-pink);
           
        }
        .TYPES .card-img-top{
            filter: brightness(50%);
            height: 500px;
            border-radius: 15px;
            
        }
        .footer1{
    background-color: var(--color-blue2);
}

.footer *{
    color: var(--color-white);
}
.foot-col h4{
    font-weight: 500;
    margin-bottom: 40px;
    position: relative;
    font-size: 1em;
}
.foot-col h4:after{
    content: "";
    width: 20px;
    height: 4px;
    background-color:var(--color-pink);
    display: block;
    position: absolute;
    top:32px;
}
.foot-col p{
    line-height: 30px;
    margin-bottom: 5px;
}
.foot-col a:hover{
    color:var(--color-orange);
    
}

@media screen and (max-width: 470px) {
  .navbar img{
           display:none;
        }
        .cont-slide p {
           font-size:1.5em;
        }
}
</style>


<nav class="navbar navbar-expand-lg">
 
  <img src="images/logo.png"  alt="error logo" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"> <i class="fa-solid fa-bars"></i></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="immobiliers.php">Immobiliers</a>
      </li>


      <li class="nav-item dropdown">
      <?php if (strlen($_SESSION['s_id_per']!=0)) {?>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mon Compte
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="user-profile.php">Profil de l'utilisateur</a>
          <a class="dropdown-item" href="change-password.php">Changer le mot de passe</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Se déconnecter</a>
        </div>
        <?php } ?>
      </li>

      <?php if (strlen($_SESSION['s_id_per']==0)) {?>
      <li class="nav-item">
        <a class="nav-link" href="admin/login.php">ADMIN</a>
      </li>
      <?php } ?>

        
      <li class="nav-item">
        <?php if (strlen($_SESSION['s_id_per']==0)) {?> 
      <button type="submit" class="btn btn-conx"><a href="login.php">CONNEXION</a></button>
      <?php } ?>
      <button class="btn btn-ajout" type="button"> <a href="add-property.php">+ Ajouter un bien</a></button>
      </li>
     
    </ul>
      </div>
</nav>



<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
                    <div class="carousel-item active">
            <img class="d-block w-100" src="images/slide3.jpg" alt="First slide">
            
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/slide2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
                    <img class="d-block w-100" src="images/slide1.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="cont-slide">
      <p>Trouvez votre propriété idéale</p>
      <button ><a class="voir-plus">Voir plus</a><button>
        </div>
      
      <section class="SERVICES" id="services">
       <h1 class="text-center">SERVICES</h1>
       <div class="card-group">
          <div class="card">
          <img src="images/vacances.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">LOCATION
                VACANCES</h5>
           
          </div>
        </div>
        <div class="card">
          <img src="images/vente.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">VENTE</h5>
            
          </div>
        </div>
        <div class="card">
          <img src="images/location.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">LOCATION</h5>
            
          </div>
        </div>
      </div>
    </section>


    <section class="TYPES">
        <h1 class="text-center">Explorer par type de propriété</h1>
        <div class="container">
        <div class="row row-cols-3 row-cols-md-3 g-3">
            <div class="col">
              <div class="card">
                <img src="images/maison.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">MAISONS</h5>
                  
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images/riad.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">RIAD</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images/villas.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Villas & maisons de luxe</h5>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images/locauxcommerc.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Locaux commerciaux</h5>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card">
                  <img src="images/bureaux.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Bureaux</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="images/appartemeent.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"> Appartements</h5>
                    
                  </div>
                </div>
              </div>
              
          </div>

          <div class="row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <div class="card">
              <img src="images/terrain.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Terrains</h5>
               
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/fermes.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Fermes</h5>
              </div>
            </div>
          </div>
        </div>
        </div>
     </section>
    <!-- FOOTER -->
    <footer class="footer footer1">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <img class="foot-logo" src="images/logo.png" alt="logo error">
                </div>

                <div class="col-md-6">
                    <div class="row">
                        
                        <div class="col-md-4 foot-col mb-2">
                            <br>
                            <h4>QUICK LINK</h4>
                            <p><a href="#">Publier une annonce</a></p>
                            <p><a href="#">Inscrivez votre entreprise</a></p>
                            <p><a href="#">Blog</a></p>
                            
                        </div>
                        <div class="col-md-4 foot-col mb-2">
                            <br>
                            <h4> EN SAVOIR PLUS</h4>
                            <p><a href="#">Qui sommes nous?</a></p>
                            <p><a href="#">Contactez-nous</a></p>
                            <p><a href="#">Protection des données</a></p>
                            <p><a href="#">Conditions d'utilisation
                            </a></p>
                        </div>

                        <div class="col-md-4 foot-col mb-2">
                            <br>
                                <h4>SUIVEZ-NOUS</h4>
                                <a href="#" class="fb">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="tw">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="ig">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

            </body>
</html>