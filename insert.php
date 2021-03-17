<?php

    $titleInput =  htmlspecialchars($_POST["title"]);
    $textInput = htmlspecialchars($_POST["text"]);

    // if (!isset ($_FILES["pic"])) {
    //     header("Location: page1.php?error=amiamotherfuckingjoke");

    // }

    if ($_FILES["pic"]["size"] < 250000) {

        $extensionUpload = strtolower(substr(strrchr($_FILES['pic']['name'], '.'), 1));
        $altnum = mt_rand(100,999);
        var_dump(move_uploaded_file ($_FILES["pic"]["tmp_name"], "images/". $altnum .".". $extensionUpload));

        require_once 'bdd/bdd.php';
    

    $query = $connexion->prepare("INSERT INTO article(title, content, pic) VALUES(?,?,?)");
    $query->execute([$titleInput, $textInput, "images/" . $altnum .".". $extensionUpload]);


header("Location: index.php");
    }else {
       echo "fichier trop volumineux";
    }

   
    

?>