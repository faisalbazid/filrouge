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
<style></style>
<form class="form-horizontal" method="post">
                            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
  $id_per=$_GET['voirid'];

$ret=mysqli_query($con,"select * from personne where id_per='$id_per'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                
                                <table border="1" class="table table-striped table-bordered first" >
                                <tr>
                                    <th >NOM ET PRENOM </th>
                                    <td style="padding-left: 10px"><?php  echo $row['nom'];?></td>
                                </tr>
                                <tr>
                                    <th>CIN </th>
                                    <td style="padding-left: 10px"><?php  echo $row['cin'];?></td>
                                </tr>
                                <tr>
                                    <th>EMAIL </th>
                                    <td style="padding-left: 10px"><?php  echo $row['email'];?></td>
                                </tr>
                                <tr>
                                    <th>TELEPHONE </th>
                                    <td style="padding-left: 10px"><?php  echo $row['tel'];?></td>
                                </tr>
                                <tr>
                                    <th>ADRESS </th>
                                    <td style="padding-left: 10px"><?php  echo $row['adress'];?></td>
                                </tr>
                                </table>
                                
                            
                        
                        </div>
                    </div>
 <?php } ?>
    
    </form>
</table>
</body>
</html>
<?php }  ?>

