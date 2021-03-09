<?php

$idDuGet = $_GET["id"];

if(isset($_POST["submit"])){
if(!empty($_POST["title"]) AND !empty($_POST["text"])){

    $titleInput =  htmlspecialchars($_POST["title"]);
    $textInput = htmlspecialchars($_POST["text"]);


include 'bdd/bdd.php';


$query = $connexion->prepare("UPDATE article SET title = ?, content = ?, WHERE id = ?");
$query->bindParam(1, $titleInput);
$query->bindParam(2, $textInput);
$query->bindParam(3, $idDuGet);
$query->execute();

        header("Location: article.php?id= $idDuGet");
    }else{
        header("Location: article.php?id= $idDuGet");
    }
}

?>