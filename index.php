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
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Ubuntu', sans-serif;
            
                }
               
                .navbar {
                    padding: 0;
                    margin-bottom: -15px;
                    }
                
        .navbar-logo img{
           width: 175px;
           height: 60px;
           flex:1;
           user-select:none;
           margin-right: 330px;
           margin-left:30px
        }

        .navbar ul{
            display:flex;
            width:100%;
            height: 100px;
            align-items: center;
            background-color: var(--color-blue2);
            color: var(--color-white);
        }
        .navbar li{
            list-style-type: none;
            padding: 0.8rem;
        }
        .navbar a{
            text-decoration: none;
            color: var(--color-white);
        }
        .navbar-toggle{
        display: none;
        }
        .navbar-conx{
            margin-left: 70px;
        }
        .navbar-ajouter{
            background-color: var(--color-orange);
        }
        
        .navbar-links:hover{
            background-color: var(--color-orange);
        }
        .navbar-links:hover a{
            color: var(--color-blue);
        }
        .carousel-inner{
            height: calc(100vh - 120px);
        }
        .card-title{
            position: absolute;
             top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: var(--color-white);
            font-weight: 800;
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
            margin: 40px;
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
.foot-logo{
    width: auto;
}
.footer img{
    width: 200px;
    height: 100px;
}

        
        
        @media (max-width:990px){
            .navbar ul{
                flex-wrap: wrap;
            }
            .navbar-toggle{
                display: block;
            }
            .navbar-links{
                display: none;
                width: 100%;
                text-align: center;
                z-index: 11;
                background-color: var(--color-blue2);
            }
            .active{
                display: block;
            }
            .navbar-conx{
            margin-left: 0;
        }
        
        }
        @media (max-width:640px){
            .navbar-logo img{
           width: 100px;
           margin-right: 120px;
           
        }
        
        }
    </style>

    <nav class="navbar">
                 <ul>
                <li class="navbar-logo"><img src="images/logo.png" ></li>
                <li class="navbar-toggle"><i class="fas fa-bars"></i></li>
                
                <li class="navbar-links"><a href="">HOME</a></li>
                <li class="navbar-links"><a href="#services">SERVICES</a></li>
                <li class="navbar-links"><a href="#TYPES">PROPRIÉTÉS</a></li>
                <li class="navbar-links"><a href="">CONTACTEZ</a></li>
                
                
                <li class="navbar-links navbar-conx"><a href="login.php">CONNEXION</a>
                
                <li class="navbar-links"><button class="navbar-ajouter">+ AJOUTER PROPRIÉTÉ</button></li>
            </ul>
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
<hr>
       <!-- SERVICES -->
       <section class="SERVICES" id="services">
       <h1>SERVICES</h1>
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

    <!-- TYPES -->
    <section class="TYPES">
        <h1>Explorer par type de propriété</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
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
     </section>
    <!-- FOOTER -->
    <footer class="footer footer1">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <img class="foot-logo" src="images/logo.png" alt="Logo School">
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
    
    <script>
        const togglebutton = document.getElementsByClassName('navbar-toggle')[0];
        const navbarlinks = document.getElementsByClassName('navbar-links');
        
        togglebutton.addEventListener('click',function() {
            for(var i=0; i<navbarlinks.length; i++)
            navbarlinks[i].classList.toggle('active')
        });
        </script>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>