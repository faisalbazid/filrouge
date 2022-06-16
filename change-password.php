<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
include('includes/header.php');
if (strlen($_SESSION['s_id_per']==0)) {
    header('location:logout.php');
    } else{
      if(isset($_POST['submit']))
    {
      $id_per=$_SESSION['s_id_per'];
      $cpassword=md5($_POST['currentpassword']);
      $newpassword=md5($_POST['newpassword']);
   
       $query=mysqli_query($con,"select id_per from personne where id_per='$id_per' and   mdp='$cpassword'");
       $row=mysqli_fetch_array($query);
       if($row>0){
       $result=mysqli_query($con,"update personne set mdp='$newpassword' where id_per='$id_per'");
       $msg= "Votre mot de passe a bien été changé"; 
       } else {
       
       $msg="Votre mot de passe actuel est erroné";
       }
       
       
       
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
    <script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
</head>
<body>

<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
            <div class="bg-section">
                <!-- <img src="images/appartemeen.jpg" alt="Background" /> -->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1> MODIFIER MOT DE PASSE</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="index.php">Home /</a></li>
                                    <li class="active">  &nbsp Modifier mot de passe</li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>

        
<section id="user-profile" class="user-profile">
            <div class="container">
                <div class="row">
                <?php include_once('includes/sidebar.php');?>
                    <!-- .col-md-4 -->
                    <div class="col-xs-12 col-sm-12 col-md-8">

                        <form class="mb-0" method="post" name="changepassword" onsubmit="return checkpass();">
                            
                            
                            <div class="form-box">
                                <?php
$id_per=$_SESSION['s_id_per'];
$result=mysqli_query($con,"select * from personne where id_per='$id_per'");
$cnt=1;
while ($row=mysqli_fetch_array($result)) {

?>
                              <p style="font-size:26px; color:#F25764" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                                <div class="form-box">
                                <h4 class="form--title">Modifier mot de passe /</h4><br>
                                <div class="form-group">
                                    <label for="password">Mot de passe actuel</label>
                                    <input type="password" name="currentpassword" id="currentpassword" class="form-control" value="" required='true'>
                                </div>
                                <div class="form-group">
                                    <label for="password">Nouveau mot de passe</label>
                                    <input type="password" name="newpassword" id="newpassword" class="form-control" value="" required='true'>
                                </div>
                                <!-- .form-group end -->
                                <div class="form-group">
                                    <label for="confirm-password">Confirmez le mot de passe</label>
                                    <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" value="" required='true'>
                                </div>
                                <!-- .form-group end -->
                            </div>
                            </div>
                            <?php }?>
                            
                            <input type="submit" value="Modifier Password" name="submit" class="btn">
                        </form>
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
        </section>
        <style>
            .btn{
                background-color:#F2B66D;}
        </style>
</body>
</html>