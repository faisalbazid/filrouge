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

$superficie=$_POST['superficie'];
$prix=$_POST['prix'];
$adress=$_POST['adress'];
$type_imo=$_POST['type_imo'];
$image1=$_FILES["image1"]["name"];
$image2=$_FILES["image2"]["name"];
$image3=$_FILES["image3"]["name"];

$titre_ann=$_POST['titre_ann'];
$type_ann=$_POST['type_ann'];
$date=$_POST['date'];
$detail_ann=$_POST['detail_ann'];
$id_per=$_SESSION['s_id_per'];
$code_imo=mt_rand(0, 1000);

$query=mysqli_query($con,"INSERT INTO `immobilier`(`code_imo`,`superficie`,`prix`,`adress`,`type_imo`,`image1`,`image2`,`image3`) VALUES ('$code_imo','$superficie','$prix','$adress','$type_imo','$image1','$image2','$image3')");
  }
   if ($query) {
  $query2=mysqli_query($con,"INSERT INTO `annonce`(`titre_ann`,`type_ann`,`date`,`detail_ann`,`id_per`,`code_imo`) VALUES ('$titre_ann','$type_ann','$date','$detail_ann','$id_per','$code_imo')");
    echo '<script>alert("Property detail has been added.")</script>';
echo "<script>window.location.href ='add-property.php'</script>";
  } 

  else{
    
        $msg= "Property detail has not been addeddd"; 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="mb-0" method="post"  enctype="multipart/form-data">
<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                            <div class="">
                                <div class="">
                                    <div class="">
                                        <h2 class="form--title">Description de Propriété</h2>
                                    </div>
                                    <!---->
                                    <div class="">
                                            <label for="">superficie*</label>
                                            <input type="number"  name="superficie" id="superficie" required>
                                        </div>
                                    <!---->

                                    <div class="">
                                    <label for="">prix*</label>
                                            <input type="number"  name="prix" id="prix" required>

                                        </div>
                                    
                                  <!---->
                                    <div class="">
                                            <label for="">Adress*</label>
                                            <input type="adress"  name="adress" id="adress" required>
                                        </div>

                                           <!---->
                                           <div >
                                           <label for="">Type immo*</label>
                                            <div class="">
                                                <i class="fa fa-angle-down"></i>
                                                <select id="type_imo" name="type_imo">
                                            <option value="">Selectionner type de immo</option>
                                            <option>maison</option>
                                            <option>riad</option>
                                            <option>apparteme</option>
                                            <option>--</option>
                                                </select>
                                            </div>
                                           <!---->
                                           
                                        <div >
                                            <label for="">Gallery Image1</label>
                                            <input type="file"  name="image1" required>
                                        </div>
                                        <div >
                                            <label for="">Gallery Image2</label>
                                            <input type="file"  name="image2" required>
                                        </div>
                                        <div >
                                            <label for="">Gallery Image3</label>
                                            <input type="file"  name="image3" required>
                                        </div>
                                    <!---->
                                    <div class="">
                                            <label for="">Titre annonce*</label>
                                            <input type="text"  name="titre_ann" id="titre_ann" required>
                                        </div>
                                    <!---->

                                    <div class="">
                                            <label for="">Type annonce*</label>
                                            <div class="">
                                                <i class="fa fa-angle-down"></i>
                                                <select id="type_ann" name="type_ann">
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
                                            <textarea  name="detail_ann" id="detail_ann" rows="3"></textarea>
                                        </div>
                                </div>
                                <!-- .row end -->
                            </div>
                            <!-- .form-box end -->
                            <input type="submit" value="Submit" name="submit" style="background-color:#F25764"  class="btn">

                        </form>
              
</body>
</html>
