<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAISAL IMMO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
</head>

<body>
    
   <?php include_once('includes/header.php');?>
   <?php include_once('includes/header-search.php');?>
        

<?php
$type_imo=$_POST['type_imo'];
$type_ann=$_POST['type_ann'];
$etat=$_POST['etat'];
$query=mysqli_query($con,"select immobilier.*,annonce.* from immobilier inner join annonce on immobilier.code_imo=annonce.code_imo where(immobilier.type_imo='$type_imo' and annonce.type_ann='$type_ann' and immobilier.etat='$etat')");
$num=mysqli_num_rows($query);
if($num>0){
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

                                           
<?php }} else{ ?>

           <h2 align="center" style="color:red">Aucun immobilier trouvé</h2>

           <?php }?>                    

       
</body>

</html>
