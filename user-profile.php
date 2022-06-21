<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
include('includes/header.php');
if (strlen($_SESSION['s_id_per']==0)) {
    header('location:logout.php');
    } else{
      if(isset($_POST['submit']))
    {
      $id_per=$_SESSION['s_id_per'];
      $nom=$_POST['nom'];
    $tel=$_POST['tel'];
    $adress=$_POST['adress'];
    
   
       $query=mysqli_query($con, "update personne set nom ='$nom', tel='$tel', adress='$adress' where id_per='$id_per'");
      if ($query) {
      $msg="Le profil a été mis à jour.";
    }
    else
      {
        $msg="Veuillez réessayer.";
      }
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<style>
     .dropdown-menu{
          background-color:var(--color-blue);
        }
    </style>
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
            <div class="bg-section">
                <!-- <img src="images/appartemeen.jpg" alt="Background" /> -->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1> Profile</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="user-profile.php">Home /</a></li>
                                    <li class="active">  &nbsp Profil utilisateur</li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>




        <section id="user-profile" class="user-profile">
            <div class="container">
                <div class="row">
                <?php include_once('includes/sidebar.php');?>
                    <!-- .col-md-4 -->
                    <div class="col-xs-12 col-sm-12 col-md-8">

                        <form class="mb-0" method="post">
                        <p style="font-size:26px; color:#F2B66D" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                            
                            <div class="form-box">
                                <?php
  $id_per=$_SESSION['s_id_per'];
$result=mysqli_query($con,"select * from personne where id_per='$id_per'");


while ($row=mysqli_fetch_array($result)) {

?>
                                <h4 class="form--title">Détails personnels </h4> <br>
                                <div class="form-group">
                                    <label for="nom">Nom Complet :</label>
                                    <input type="text" class="form-control" name="nom" id="nom" required="true" value="<?php  echo $row['nom'];?>">
                                </div>
                              
                                <div class="form-group">
                                    <label for="email">Email Address :</label>
                                    <input type="email" class="form-control" name="email" id="email" readonly="true" value="<?php  echo $row['email'];?>">
                                </div>

                                <div class="form-group">
                                    <label for="cin">CIN :</label>
                                    <input type="text" class="form-control" name="cin" id="cin" readonly="true" value="<?php  echo $row['cin'];?>">
                                </div>
                                <!-- .form-group end -->
                                <div class="form-group">
                                    <label for="phone-number">Phone :</label>
                                    <input type="tel" class="form-control" name="tel" id="tel" required="true" value="<?php  echo $row['tel'];?>">
                                </div>

                                <div class="form-group">
                                    <label for="adress">Adress :</label>
                                    <input type="text" class="form-control" name="adress" id="adress" required="true" value="<?php  echo $row['adress'];?>">
                                </div>
                                <!-- .form-group end -->
                                
                                <!-- .form-group end -->
                            </div>
                            <?php }?>
                            
                            <input type="submit" value="Modifier" name="submit" class="btn">
                        </form>
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
        </section>
        <style>
            .btn{
                background-color:#F2B66D;}
        </style>
</body>
</html>