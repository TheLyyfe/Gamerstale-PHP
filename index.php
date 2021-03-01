<?php 
session_start();

  require_once "connexionbd.php";

  $query = $connexion->prepare("SELECT * FROM article ORDER BY id DESC");
  $query->execute();
  $resultat = $query->fetchAll();


?>






<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="CSS/page1.css"/>
  <link rel="stylesheet" href="MDB/css/bootstrap.css"/>
  <link rel="stylesheet" href="MDB/css/mdb.css">
  <link rel="stylesheet" href="./www/Projet 1/fontawesome-free-5.14.0-web/css/all.min.css">
  <title>Gamerstale - Êtes-vous déterminé ?</title>
</head>
<style>
        body{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        .containerArticle{
            width:60%;
            background:grey;
            padding:5%;
            margin-top: 2%;
        }


    </style>
<?php 

 
// if (@$_GET['error'] === 'amiamotherfuckingjoke') {
//   $error = 'No image';
// }

?>
<body style="background-color: black;">
  <header>
    <?php
    include 'header.php'
    ?>
  </header>
  <form action="insert.php" method="POST" style="display:flex; justify-content:center; align-items:center; flex-direction:column" enctype="multipart/form-data">
            
            <input type="text" placeholder="Entrer le titre de l'article" name="title">
            <div class="input-group">
  <!-- <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Télécharger</span>
  </div> -->
 
<!-- <p><?php echo @$error;  ?></p> -->

  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" name="pic">
    <label class="custom-file-label" for="inputGroupFile01">Choisir une image</label>
  </div>
</div>

            <textarea name="text" cols="30" rows="10" placeholder="text"></textarea>
            <input type="submit">

        </form>
        <div class="card-group">
        <?php
        
        foreach($resultat as $post){
          
          

            echo "<div class='card'>
            <img class='card-img-top' src='".$post[3]."' style='width:500px' alt=''>
            <div class='card-body'>
              <h5 class='card-title'> " . $post[1] . " </h5>
              <p class='card-text'>" . $post[2] . " </p><a href='article.php?id=" . $post[0] .  "'> Voir l'article</a>
            </div>
          </div>";
        }
        
        ?>
        </div>
  



  
</body>
</html>
