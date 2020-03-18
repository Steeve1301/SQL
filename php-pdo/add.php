<?php

if(isset($_POST['ville']) && isset($_POST['minima']) && isset($_POST['maxima'])){

    $ville= $_POST['ville'];
    $haut= $_POST['maxima'];
    $bas = $_POST['minima'];

    try{
        require('connexion.php');
        $sql = $PDO->prepare("INSERT INTO météo (`ville`,`haut`,`bas`) VALUES ('$ville','$haut','$bas')");
        $sql->execute();
    }
    catch (PDOException $e){
        die('Erreur :' .$e .'<br/>');
    }

    header("location: index.php");
}

?>