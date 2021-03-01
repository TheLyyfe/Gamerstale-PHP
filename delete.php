<?php
    $idDuGet = $_GET['id'];

    $connexion = new PDO("mysql:host=localhost;dbname=gamerstale", "root", "");
    
    $query = $connexion->prepare("DELETE FROM article WHERE id = ?");
    $query->execute([$idDuGet]);

    header("Location: index.php");


?>