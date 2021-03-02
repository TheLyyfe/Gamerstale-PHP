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
    <link rel="stylesheet" href="CSS/page1.css" />
    <link rel="stylesheet" href="MDB/css/bootstrap.css" />
    <link rel="stylesheet" href="MDB/css/mdb.css">
    <link rel="stylesheet" href="./www/Projet 1/fontawesome-free-5.14.0-web/css/all.min.css">
    <title>Gamerstale - Êtes-vous déterminé ?</title>
</head>
<style>
body {
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}

.containerArticle {
    width: 60%;
    background: grey;
    padding: 5%;
    margin-top: 2%;
}
</style>
<?php 

?>

<body style="background-color: black;">
    <header>
        <?php
    include 'header.php'
    ?>
    </header>
    <form action="insert.php" method="POST"
        style="display:flex; justify-content:center; align-items:center; flex-direction:column"
        enctype="multipart/form-data">

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

    <?php
        
        foreach($resultat as $post){
          
          

            echo "<div class='card-group m-auto col-6'>
                    <div class='card d-flex flex-row col-12 '>
                      <div class='justify-content-begin'>
                          <img class='card-img' src='".$post[3]."' width='200px' alt=''>
                      </div>
                          <div class='d-flex flex-column ml-3 col-8 card-body'>
                            <h5 class='justify-content-begin card-title'> " . $post[1] . " </h5>
                            <p class='justify-content-begin card-text'>" . $post[2] . " </p>
                            <a href='article.php?id=" . $post[0] .  "'> Voir l'article</a>
                          </div>
                      </div>
                    </div>
                  </div>";
        }
        
        ?>
    </div>


<!-- <div class="card-group m-auto divborder col-6">
  <div class="d-flex flex-row col-12 divborder card">
    <div class="justify-content-begin ">
      <img class="card-img" src="./images/535.jpg" alt="" width="200px">
    </div>
    <div class="d-flex flex-column divborder card-body ml-3 col-8">
      <h5 class="justify-content-begin">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum cumque aperiam, qui maiores aut delectus reiciendis consequatur est voluptatem facere iusto et maxime animi eaque assumenda nesciunt quo amet rem!</h5>
      <p class="justify-content-begin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, explicabo! Tenetur non quis aperiam officia minus cumque suscipit perspiciatis impedit nulla quaerat unde id commodi dolorem, exercitationem ipsa, temporibus eius?</p>
      <a href="">Link</a>
    </div>
  </div>
</div> -->


</body>

</html>