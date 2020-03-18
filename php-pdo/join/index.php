<?php

try{
    require("./connexion.php");
    $sql= $PDO -> prepare("SELECT * FROM eleves; LEFT JOIN classe ON classe.id=eleves.class_id;");
    $sql->execute();

    foreach($sql as $row){
        echo $row['class_id'];
    }
}
catch(PDOException $e){
    die("Erreur : " . $e . "\n");
}



?>