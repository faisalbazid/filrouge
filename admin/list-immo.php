<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if (strlen($_SESSION['s_admin']==0)) {
  header('location:logout.php');
  } else{

  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once('dashboard.php');?>
</head>
<body>
    <style>
       
        .table{
            width:400px;
        }
    </style>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Code immobilier </th>
      <th scope="col">Titre immobilier</th>
      <th scope="col">Nom complet</th>
      <th scope="col">Tel</th>
      <th scope="col">Date publication</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
$ret=mysqli_query($con,"select personne.*,annonce.* from annonce join personne on personne.id_per=annonce.id_per");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
    <tr>
      <th scope="row"><?php echo $cnt;?></th>
      <td><?php  echo $row['code_imo'];?></td>
      <td><?php  echo $row['titre_ann'];?></td>
      <td><?php  echo $row['nom'];?></td>
      <td><?php  echo $row['tel'];?></td>
      <td><?php  echo $row['date'];?></td>
      
     
      <td>
        <button><a href="view-immo.php?voirid=<?php echo $row['code_imo'];?>">Afficher<a></button>
        <button><a href="sup-immo.php?supid=<?php echo $row['code_imo'];?>">Supprimer<a></button>
      </td>
    </tr>
   
    <?php 
$cnt=$cnt+1;
}?>
  </tbody>
</table>
</body>
</html>
<?php }  ?>