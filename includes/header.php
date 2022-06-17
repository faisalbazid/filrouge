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
     nav img{
           width: 175px;
           height: 60px;
           user-select:none;
           padding-right: 330px;
           padding-left:30px
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
</style>


<nav class="navbar navbar-expand-lg">
 
  <img src="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
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
        <a class="nav-link" href="#type">Immobiliers</a>
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
      <button class="btn btn-ajout" type="button"> + Ajouter un bien</button>
      </li>
     
    </ul>
      </div>
</nav>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

            </body>
</html>