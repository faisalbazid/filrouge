<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include_once('includes/header.php');?>
<?php include_once('includes/header-search.php');?>
<?php 
$query=mysqli_query($con,"select immobilier.*,annonce.* from immobilier inner join annonce on immobilier.code_imo=annonce.code_imo");
while($row=mysqli_fetch_array($query))
{
?>

                                
                                        <div class="property--img">
<a href="single-property-detail.php?code_imo=<?php echo $row['code_imo'];?>">
<img src="image_client/<?php echo $row['image1'];?>" alt="<?php echo $row['titre_ann'];?>"  width='380' height='300'>
                                </a>

 </div>


 
<div class="property--info">
 <h5 class="property--title">
<a href="single-property-detail.php?code_imo=<?php echo $row['code_imo'];?>">
    <?php echo $row['titre_ann'];?></a></h5>
<p class="property--location"><?php echo $row['adress'];?>&nbsp;

 </div>
 <?php } ?>


</body>
</html>