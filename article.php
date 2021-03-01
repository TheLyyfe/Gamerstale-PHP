<?php

$idDuGet = $_GET["id"];
$connexion = new PDO("mysql:host=localhost;dbname=gamerstale", "root", "");


$query = $connexion->prepare("SELECT * FROM article WHERE id = ?");
$query->execute([$idDuGet]);
$resultat = $query->fetch();

echo "<div class='card'>
<div class='card-body'>
  <h5 class='card-title'> " . $resultat[1] . " </h5>
  <p class='card-text'>" . $resultat[2] . " <a href='delete.php?id=$idDuGet' style='color:red'>supprimer</a></p>
</div>
            
        </div>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="update.php?id=<?php echo $idDuGet; ?>" method="POST" style="display:flex; justify-content:center; align-items:center; flex-direction:column">

    <input type="text" placeholder="Entrer le titre de l'article" name="title">
    

    <textarea name="text" cols="30" rows="10" placeholder="text"></textarea>
    <input type="submit">

  </form>





</body>

</html>