<?php
try{

$connexion = new PDO("mysql:host=localhost;dbname=gamerstale", "root", "");

$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

die($e->getMessage());

}

?>