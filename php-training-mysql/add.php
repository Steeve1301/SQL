<?php 

$name= $_POST['name'];
$difficulty= $_POST['difficulty'];
$distance= $_POST['distance'];
$duration= $_POST['duration'];
$denivele= $_POST['height_difference'];



try{
    include('connect.php');
    $sql= $PDO->prepare("INSERT INTO hiking (`name`, `difficulty`, `distance`, `duration`, `height_difference`) VALUES ('$name','$difficulty','$distance', '$duration', '$denivele')");
    $sql->execute();
}
catch(PDOException $e){
    die('Erreur: ' . $e . '<br>');
}

header("location: read.php");