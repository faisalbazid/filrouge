<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
include_once('includes/header.php');


if (strlen($_SESSION['s_id_per']==0)) {
    header('location:logout.php');
    } else{
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my-property</title>
</head>


<body>
    <style>
        .property--img img{
            width:300px;
            height:300px;
        }
        .sidebar{
            display:flex;
            margin-left:100px;
            
        }
       .card-pro{
        display:flex;
        justify-content:space-between;
        
       }
    </style>
<section class="my-pro">

            <div class="bg-section">
                <!-- <img src="images/appartemeen.jpg" alt="Background" /> -->
            </div>
            <div class="container">
                <div class="row">
                    
               
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1> Mes propriétés</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="user-profile.php">Home /</a></li>
                                    <li class="active">  &nbsp mes propriétés</li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>
 
                        </div>
                  
                </div>
               
            </div>
           
        </section>
        <section class="sidebar">
  <div class="card" style="width: 18rem; height: 30rem;">
  <ol  style="list-style-type:upper-roman" class="list-group list-group-flush">
  <?php if($_SESSION['s_id_per']==0){?>
  
  <?php } else{?>
      <li><a href="user-profile.php" class="active">Modifier le profil</a></li>
      <li><a href="change-password.php">Modifier le mot de passe</a></li>
      <li><a href="add-property.php">Ajouter un bien</a></li>
      <li><a href="my-property.php">Mes biens</a></li>
      <li><a href="#">Demande reçue</a></li>

  
          <li><a href="#">Demandes répondues</a></li>
      <li><a href="logout.php">Se déconnecter</a></li>

  <?php } ?>
  </ol>
</div>
<section>

        
        
                      <?php
                     $id_per=$_SESSION['s_id_per'];
               
                    //  SELECT a.id, a.name, a.num, b.date, b.roll
                    //  FROM a
                    //  INNER JOIN b ON a.id=b.id;
                    

$query=mysqli_query($con,"SELECT annonce.id_ann, annonce.titre_ann, annonce.type_ann, annonce.date, annonce.detail_ann, annonce.id_per, annonce.code_imo, immobilier.image1, immobilier.type_imo, immobilier.etat, immobilier.adress FROM annonce INNER JOIN immobilier ON annonce.code_imo=immobilier.code_imo");
$num=mysqli_num_rows($query);
if($num>0){

while($row=mysqli_fetch_array($query))
{
?>
<section class="card-pro">
<div class="container">
<div class="card " style="width: 18rem;">
<a href="single-property-detail.php?code-imo=<?php echo $row['code_imo'];?>">
  <img class="card-img-top" src="image_client/<?php echo $row['image1'];?>">
  
  <div class="card-body">
        <h5 class="card-title"><a href="property-detail.php?code-imo=<?php echo $row['code_imo'];?>">
    <?php echo $row['titre_ann'];?></a></h5>
    <p class="card-text"><span class=""><?php echo $row['etat'];?></span> / &nbsp<?php echo $row['adress'];?></p>
      </div>

     <a href="modifier-property.php?edit-imo=<?php echo $row['code_imo'];?>" class=""><i class="fa fa-edit"></i> Modifier</a>
      <a href="delete-property.php?delete-imo=<?php echo $row['code_imo'];?>" class=""><i class="fa fa-remove"></i>   Supprimer</a>
</div>
  </div>



                                <?php } } else { ?>
   <h3 style="color:red" align="center"> Aucune propriété ajoutée pour le moment </h3>
        <?php } ?>  
       
        </section>                                  
</body>

</html>
<?php } ?>

