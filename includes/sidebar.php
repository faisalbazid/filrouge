<div class="card" style="width: 18rem; height: 30rem;">
  <ol  style="list-style-type:upper-roman" class="list-group list-group-flush">
  <?php if($_SESSION['s_id_per']==0){?>
  
  <?php } else{?>
      <li><a href="user-profile.php" class="active">Modifier le profil</a></li>
      <li><a href="change-password.php">Modifier le mot de passe</a></li>
      <li><a href="add-property.php">Ajouter un bien</a></li>
      <li><a href="my-property.php">Mes biens</a></li>
      <li><a href="#">Demande reçue</a></li>

  
          <li><a href="#">Demandes répondues</a></li>
      <li><a href="logout.php">Se déconnecter</a></li>

  <?php } ?>
  </ol>
</div>

