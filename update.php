<?php

    $idDuGet = $_GET["id"];
    $titleInput =  htmlspecialchars($_POST["title"]);
    $textInput = htmlspecialchars($_POST["text"]);
    var_dump($idDuGet);

include 'bdd/bdd.php';


$query = $connexion->prepare("UPDATE article SET title = ?, content = ? WHERE id = {$idDuGet}");


$resultat = $query->execute([$titleInput, $textInput]);

        header("Location: article.php?id=$idDuGet");
    

?>