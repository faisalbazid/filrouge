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
            width:800px;
        }
    </style>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom Complete :</th>
      <th scope="col">CIN</th>
      <th scope="col">Tel</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
$ret=mysqli_query($con,"select * from personne where type_per='1'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
    <tr>
      <th scope="row"><?php echo $cnt;?></th>
      <td><?php  echo $row['nom'];?></td>
      <td><?php  echo $row['cin'];?></td>
      <td><?php  echo $row['tel'];?></td>

     
      <td>
        <button><a href="view-utilisateur.php?voirid=<?php echo $row['id_per'];?>">Afficher<a></button>
    
        <button name="delete"><a href="sup-utilisateur.php?supid=<?php echo $row['id_per'];?>">Supprimer<a></button>
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