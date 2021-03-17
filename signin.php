<?php 
session_start();


if (isset($_POST['usermail'], $_POST['password'], $_POST['submit'])){
    $usermail = $_POST['usermail'];
    $password = $_POST['password'];

    require_once 'bdd/bdd.php';

    $query = $connexion->prepare("SELECT * FROM user WHERE usermail = ?");
    $query->execute([$usermail]);
    $machin = $query->fetch();


  if ($machin["password"] == $password) {
      echo "C'est bon";
      $_SESSION['user'] = $machin['usermail'];
      $_SESSION['name'] = $machin['username'];
    header("Location: index.php");

  }else{
      echo "Mot de passe incorrect";
  }

}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="CSS/page1.css"/>
  <link rel="stylesheet" href="CSS/formlog.css"/>
  <link rel="stylesheet" href="MDB/css/bootstrap.css"/>
  <link rel="stylesheet" href="MDB/css/mdb.css">
  <link href="fontawesome/css/all.css">
  <title>Gamerstale - Connexion</title>
</head>

<body>
    <!-- Default form login -->
<form class="text-center border border-dark p-5" action="#!" method="POST">

<p class="h4 mb-4">Se Connecter</p>

<!-- Email -->
<input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="usermail">

<!-- Password -->
<input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Mot de passe" name="password">

<div class="d-flex justify-content-around">
    <div>
        <!-- Remember me -->
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
            <label class="custom-control-label" for="defaultLoginFormRemember">Se rappeler de moi</label>
        </div>
    </div>
</div>
    <div>
        <!-- Forgot password -->
        <a href="">Mot de passe oublié ?</a>
    </div>


<!-- Sign in button -->
<button class="btn btn-info btn-block my-4" type="submit" name="submit">Se connecter</button>

<!-- Register -->
<p>Pas inscrit ?
    <a href="signup.php">S'inscrire</a>
</p>


</form>
<!-- Default form login -->
</body>