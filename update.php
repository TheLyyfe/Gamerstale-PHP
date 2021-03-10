<?php

$idDuGet = $_GET["id"];

if(!empty($_POST["title"]) AND !empty($_POST["content"])){

    $titleInput =  htmlspecialchars($_POST["title"]);
    $textInput = htmlspecialchars($_POST["content"]);


include 'bdd/bdd.php';


$query = $connexion->prepare("UPDATE article SET title = ?, content = ?, WHERE id = ?");
$query->bindParam(1, $titleInput);
$query->bindParam(2, $textInput);
$query->bindParam(3, $idDuGet);
$query->execute();

        header("Location: article.php?id=$idDuGet");
    }else{
        header("Location: article.php?id=$idDuGet");
    }


?>