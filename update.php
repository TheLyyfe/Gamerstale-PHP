<?php
$idDuGet = $_GET["id"];
$connexion = new PDO("mysql:host=localhost;dbname=gamerstale", "root", "");


$query = $connexion->prepare("UPDATE article WHERE id = ?");
$query->execute([$idDuGet]);
$resultat = $query->fetch();



?>