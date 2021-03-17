<?php 
if (isset($_POST['prenom'], $_POST['username'], $_POST['usermail'], $_POST['password'], $_POST['submit'])){
    $prenom = $_POST['prenom'];
    $username = $_POST['username'];
    $usermail = $_POST['usermail'];
    $password = $_POST['password'];
    
    // $password = password_hash($password, PASSWORD_DEFAULT);

include "bdd/bdd.php";

$query = $connexion->prepare("INSERT INTO user(prenom, username, password, usermail) VALUES(?,?,?,?)");
$query->execute([$prenom, $username, $password, $usermail]);
header("Location: signin.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/page1.css"/>
    <link rel="stylesheet" href="CSS/formlog.css"/>
    <link rel="stylesheet" href="MDB/css/bootstrap.css"/>
    <link rel="stylesheet" href="MDB/css/mdb.css">
    <link href="fontawesome/css/all.css">
    <title>Gamerstale - Inscription</title>
</head>
<body>
    <!-- Default form register -->
<form class="text-center border border-light p-5" action="#!" method="POST">

    <p class="h4 mb-4">Inscription</p>

    <div class="form-row mb-4">
        <div class="col">
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Prénom" name="prenom">
        </div>
        <div class="col">
            <input type="text" id="defaultRegisterFormUsername" class="form-control" placeholder="Pseudo" name="username">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="usermail">

    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Mot de passe" name="password">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4"><span id="input_pwd_view" class="far fa-eye" title="Afficher/cacher le mot de passe" onclick="form_input_pwd_view('auth_user_pwd','input_pwd_view')"></span>
        Minimum 8 caractères et 1 chiffre 
    </small>

    <!-- Newsletter
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
        <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
    </div> -->

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" name="submit" type="submit">S'incrire</button>



    <!-- Terms of service -->
    <p>En cliquant sur
        <em>S'incrire</em> vous acceptez
        <a href="" target="_blank">conditions d'utilisation</a>
        <p>Déjà incrit ?
    <a href="signin.php">Se connecter</a>
</p>

</form>
<!-- Default form register -->
</body>
</html>