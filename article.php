<?php



$connexion = new PDO("mysql:host=localhost;dbname=gamerstale", "root", "");

$idDuGet = $_GET["id"];
var_dump($_GET);
var_dump($_POST);

$query = $connexion->prepare("SELECT * FROM article WHERE id = ?");
$query->execute([$idDuGet]);
$resultat = $query->fetch();
var_dump($resultat);

echo "<div class='card'>
<div class='justify-content-begin'>
                          <img class='card-img' src='" . $resultat[3] . "' width='200px' alt=''>
                      </div>
<div class='card-body'>
  <h5 class='card-title'> " . $resultat[1] . " </h5>
  <p class='card-text'>" . $resultat[2] . " <a href='delete.php?id=$idDuGet' style='color:red'>supprimer</a></p>
</div>"

?>

<!-- // require_once ('update.php'); -->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="update.php?id=<?= $idDuGet ?>" method="POST" style="display:flex; justify-content:center; align-items:center; flex-direction:column">

    <input type="text" placeholder="Entrer le titre de l'article" name="title">


    <textarea name="text" cols="30" rows="10" placeholder="text"></textarea>
    <input type="submit">

  </form>
  <!-- <form action="update.php?id=<?=$idDuGet?>" method="post">
        <input type="text" value="<?=$resultat['title']?>" name="title">
        <textarea name="text" id="" cols="30" rows="10"><?=$resultat['content']?></textarea>
        <input type="submit" name="submit">
    </form> -->
<?php
  // var_dump($idDuGet);
  // $rqt = "UPDATE article SET title = $titleInput, content = $contentInput, WHERE id = $idDuGet";
  // echo $rqt;
?>

</body>

</html>