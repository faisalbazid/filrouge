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
   .widget{
    background-color:var(--color-orange);
   }
   .vh-100 .btn{
    background-color:var(--color-blue);
    color:var(--color-white);
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
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Demander une visite</p>

                <form class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label for="contact-name">Nom cmplete :*</label>
                     <input type="text" class="form-control" name="fullname" id="fullname" required="true">
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label for="contact-email">Email Address*</label>
                                        <input type="email" class="form-control" name="email" id="email" required="true">
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-phone"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label for="contact-phone">Telephone</label>
                                        <input type="text" class="form-control" name="mobnum" id="mobnum" required="true" >
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-message"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label for="message">Message *</label>
                                        <textarea class="form-control" name="message" id="message" rows="2" required="true"></textarea>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                  <input type="submit" value="ENVOYER DEMANDE" name="submit" class="btn">
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="images/img-dm.jpg"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>                     
</body>
</html>





