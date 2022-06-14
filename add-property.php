<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
include('includes/header.php');
if (strlen($_SESSION['s_id_per'] == 0)) {
echo "<script>alert('Please login for add property.');</script>";
echo "<script>window.location.href ='logout.php'</script>";
  }
  else{

if(isset($_POST['submit']))
  {
$code_imo=mt_rand(0, 1000);

$superficie=$_POST['superficie'];
$prix=$_POST['prix'];
$adress=$_POST['adress'];
$type_imo=$_POST['type_imo'];
$etat=$_POST['etat'];
$salles_de_bains=$_POST['salles_de_bains'];
$type_du_sol=$_POST['type_du_sol'];
$etages=$_POST['etages'];
$chambres=$_POST['chambres'];
$capacité=$_POST['capacité'];
$image1=$_FILES["image1"]["name"];
$image2=$_FILES["image2"]["name"];
$image3=$_FILES["image3"]["name"];

$titre_ann=$_POST['titre_ann'];
$type_ann=$_POST['type_ann'];
$date=$_POST['date'];
$detail_ann=$_POST['detail_ann'];
$id_per=$_SESSION['s_id_per'];


$query=mysqli_query($con,"INSERT INTO `immobilier`(`code_imo`, `superficie`, `prix`, `adress`, `type_imo`, `etat`, `salles_de_bains`, `type_du_sol`, `etages`, `chambres`, `capacité`, `image1`, `image2`, `image3`) VALUES ('$code_imo','$superficie','$prix','$adress','$type_imo','$etat','$salles_de_bains','$type_du_sol','$etages','$chambres','$capacité','$image1','$image2','$image3')");
  }
   if ($query) {
  $query2=mysqli_query($con,"INSERT INTO `annonce`(`titre_ann`,`type_ann`,`date`,`detail_ann`,`id_per`,`code_imo`) VALUES ('$titre_ann','$type_ann','$date','$detail_ann','$id_per','$code_imo')");
    echo '<script>alert("Property detail has been added.")</script>';
echo "<script>window.location.href ='add-property.php'</script>";
  } 

  else{
    
    echo ''; 
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter bien</title>
</head>
<body>
    <style>
        .InputFixed{
            color: #858585;
    border: solid 1px #d4d4d4;
    background-color: #fbfbfb;
    border-radius: 5px;
    font-size: 14px;
    display: inline-block;
    min-height: 26px;
    line-height: 1.75em;
        }
    </style>
<form class="mb-0" method="post"  enctype="multipart/form-data">

                            <div class="">
                                <div class="">
                                    <div class="">
                                        <h2 class="form--title">Description de Propriété</h2>
                                    </div>
                                    <!---->
                                    <div class="">
                                            <label for="">superficie*</label>
                                              <input type="number"  name="superficie" id="superficie" required> 
                                               <span class="InputFixed">m²</span>
                                        </div>
                                    <!---->

                                    <div class="">
                                    <label for="">prix*</label>
                                            <input type="number"  name="prix" id="prix" required>
                                            <span class="InputFixed">DH</span>
                                        </div>
                                    
                                  <!---->
                                    <div class="">
                                            <label for="">Adress*</label>
                                            <input type="adress"  name="adress" id="adress" required>
                                        </div>

                                           <!---->
                                           <div >
                                           <label for="">Type immobilier*</label>
                                            <div class="">
                                                <i class="fa fa-angle-down"></i>
                                                <select id="type_imo" name="type_imo" required>
                                            <option value="">Selectionner type de immo</option>
                                            <option>Maisons</option>
                                            <option>Riad</option>
                                            <option>Villas & maisons de luxe</option>
                                            <option>Locaux commerciaux</option>
                                            <option>Bureaux</option>
                                            <option>Appartements</option>
                                            <option>Terrains</option>
                                            <option>Fermes</option>
                                                </select>
                                            </div>
                                           <!---->
                                            <!---->
                                            <div >
                                <label for="">Type du sol</label>
                                            <div class="">
                                                <i class="fa fa-angle-down"></i>
                                                <select id="type_du_sol" name="type_du_sol">
                                            <option value="">Selectionnez </option>
                                            <option>Parquet</option>
                                            <option>Marbre</option>
                                            <option>Carrelage</option>
                                            <option>Autre</option>
                                                </select>
                                            </div>
                                           <!---->
                                          
                                    <div class="">
                                            <label for="">Salles de bains</label>
                                            <input type="number" maxlength="100" minlength="0" name="salles_de_bains" id="salles_de_bains" >
                                        </div>

                                           <!---->
                                           <div class="">
                                            <label for="">Etage du bien</label>
                                            <input type="number" maxlength="100" minlength="0" name="etages" id="etages" >
                                        </div>
                                           <!---->
                                             <!---->
                                             <div class="">
                                            <label for="">Chabmres</label>
                                            <input type="number" maxlength="100" minlength="0" name="chambres" id="chambres" >
                                        </div>
                                           <!---->
                                            <!---->
                                            <div class="">
                                            <label for="">capacité</label>
                                            <input type="number" maxlength="100" minlength="0" name="capacité" id="capacité" >
                                        </div>
                                           <!---->
                                           <div >
                                <label for="">Etat d'immobilier*</label>
                                            <div class="">
                                                <i class="fa fa-angle-down"></i>
                                                <select id="etat" name="etat" required>
                                            <option value="">Selectionner état </option>
                                            <option>Nouveau</option>
                                            <option>Bon état</option>
                                            <option>A rénover</option>
                                               </select>
                                            </div>
                                           <!---->
                                        <div >
                                            <label for="">Gallery Image1*</label>
                                            <input type="file"  name="image1" required>
                                        </div>
                                        <div >
                                            <label for="">Gallery Image2*</label>
                                            <input type="file"  name="image2" required>
                                        </div>
                                        <div >
                                            <label for="">Gallery Image3*</label>
                                            <input type="file"  name="image3" required>
                                        </div>
                                    <!---->
                                    <div class="">
                                            <label for="">Titre annonce*</label>
                                            <input type="text"  name="titre_ann" id="titre_ann" rows="3" required>
                                        </div>
                                    <!---->

                                    <div class="">
                                            <label for="">Type annonce*</label>
                                            <div class="">
                                                <i class="fa fa-angle-down"></i>
                                                <select id="type_ann" name="type_ann" required>
                                            <option value="">Selectionner type de annonce</option>
                                            <option>location longue durée</option>
                                            <option>vente</option>
                                            <option>location courte durée</option>
                                            <option>location par nuit</option>
                                                </select>
                                            </div>
                                        </div>
                                                                      <!---->
                                    <div class="">
                                            <label for="">Date de publication*</label>
                                            <input type="date"  name="date" id="date" required>
                                        </div>

                                           <!---->
                                           <div >
                                            <label for="detail_ann">Detail annonce*</label>
                                            <textarea  name="detail_ann" id="detail_ann" rows="3" required></textarea>
                                        </div>
                                </div>
                                <!-- .row end -->
                            </div>
                            <!-- .form-box end -->
                            <input type="submit" value="Submit" name="submit" style="background-color:#F25764"  class="btn">

                        </form>
              
</body>
</html>
