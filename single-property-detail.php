<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   .card img{
   height: 250px;
   }
</style>
<body>
    <?php include_once('includes/header.php');?>
    <section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
            <div class="bg-section">
               
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1> </h1>
                                </div>
                                <ol class="breadcrumb">
                                    
                                    <li class="active">  &nbsp Detail de bien</li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        </div>
                  
                </div>
                
            </div>
            
        </section>
<section>
<?php 

$code_imo=$_GET['code_imo'];
$query=mysqli_query($con,"select immobilier.*,annonce.* from immobilier inner join annonce on immobilier.code_imo=annonce.code_imo where immobilier.code_imo='$code_imo'");
$num=mysqli_num_rows($query);
while ($row=mysqli_fetch_array($query)) {
?>
<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="image_client/<?php echo $row['image1'];?>" alt="Card image cap">
    </div>
  <div class="card">
    <img class="card-img-top" src="image_client/<?php echo $row['image2'];?>" alt="Card image cap">
      </div>
  <div class="card">
    <img class="card-img-top" src="image_client/<?php echo $row['image3'];?>" alt="Card image cap">
      </div>
      
</div>
<div class="card-body">
      <h5 class="card-title"><?php echo $row['prix'];?> DH</h5>
      <p class="card-text"><?php echo $row['titre_ann'];?></p>
      <p class="card-text"><?php echo $row['type_ann'];?></p>
      <p class="card-text"><?php echo $row['adress'];?></p>
      <p class="card-text"><small class="text-muted"><?php echo $row['date'];?></small></p>
    </div>
    <div class="d-flex justify-content-start">
  <div class="p-2">Superficie : <?php echo $row['superficie'];?>M²</div>
  <div class="p-2">Etat : <?php echo $row['etat'];?></div>
  <div class="p-2">salles de bains : <?php echo $row['salles_de_bains'];?></div>
  <div class="p-2">etages : <?php echo $row['etages'];?></div>
  <div class="p-2">chambres : <?php echo $row['chambres'];?></div>
  <div class="p-2">capacité : <?php echo $row['capacité'];?></div>
  <div class="p-2">Type de sol : <?php echo $row['type_de_sol'];?></div>
</div>

<div class="card">
  <div class="card-body">
  <div class="p-2">Description : 
  <?php echo $row['detail_ann'];?>
  </div></div>
</div>
</section>
<?php }?>

<br><br><br>
                        <div class="widget widget-request">
                            <div class="widget--title">
                                <h5>Demander une visite</h5>
                            </div>
                            <div class="widget--content">
                                <form class="mb-0" method="post">
                                    <div class="form-group">
                                        <label for="contact-name">Nom cmplete :*</label>
                                        <input type="text" class="form-control" name="fullname" id="fullname" required="true">
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label for="contact-email">Email Address*</label>
                                        <input type="email" class="form-control" name="email" id="email" required="true">
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label for="contact-phone">Telephone</label>
                                        <input type="text" class="form-control" name="mobnum" id="mobnum" required="true" maxlength="10" pattern="[0-9]+">
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label for="message">Message *</label>
                                        <textarea class="form-control" name="message" id="message" rows="2" required="true"></textarea>
                                    </div>
                                    <!-- .form-group end -->
                                    <input type="submit" value="ENVOYER DEMANDE" name="submit" class="btn btn--primary btn--block">
                                </form>
                            </div>
                        </div>
</body>
</html>