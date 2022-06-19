<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap');
        :root{
    --color-white: #F2F2F2 ;
    --color-orange: #F2B66D ; 
    --color-blue: #4843D9;
    --color-blue2: #2D1859;
    --color-pink:#F25764 ;
    }
    .list-group-item,.card-header{
       height:18vh;
    }
    .card{
        margin:55px 0px 0px 10px;
    }
    body{
        display:flex;

    }
  </style>
</head>
<body>
    
<div class="card "  style="width: 20rem; " >
  <div class="card-header" >
  <a href="#a">DASHBOARD</a>
  </div>
  <ul class="list-group list-group-flush" >
    <li class="list-group-item" ><a href="manage-utilisateur.php">UTILISATEUR</a></li>
    <li class="list-group-item"><a href="manage-agent.php">AGENTS</a></li>
    <li class="list-group-item"><a href="list-immo.php">LIST DES IMMOBILIERS</a></li>
    <li class="list-group-item"><a href="#a">Rechercher des propriétés</a></li>
  </ul>
</div>


</body>
</html>
