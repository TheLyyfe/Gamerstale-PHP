<?php 
session_start();

    if (!isset($_SESSION['user'])){
    header("Location: deco.php");
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/page1.css"/>
    <link rel="stylesheet" href="MDB/css/bootstrap.css"/>
    <link rel="stylesheet" href="MDB/css/mdb.css">
    <link rel="stylesheet" href="./www/Projet 1/fontawesome-free-5.14.0-web/css/all.min.css">
    <title>Profil - Gamerstale</title>
</head>
<body>
<h1>Bonjour <?php echo $_SESSION['name']; ?> !</h1>
</body>
</html>