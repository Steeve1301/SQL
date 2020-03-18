<?php

if(isset($_POST['ville'])){

    $ville= $_POST['ville'];

    try{
        require('connexion.php');
        foreach($ville as $row){
            $sql = $PDO->prepare("DELETE FROM météo WHERE ville='$row'");
            $sql->execute();
        }
        
    } 
    catch (PDOException $e){
        die('Erreur :' .$e .'<br/>');
    }

     header("location: index.php");
}

?>