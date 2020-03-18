<?php
if(isset($_POST['card'])){
    $card=0;
}
else{
    $card=1;
}

$name= $_POST['name'];
$firstname= $_POST['firstname'];
$birthday= $_POST['birthday'];


if(isset($_POST['name']) & isset($_POST['firstname']) & isset($_POST['birthday']) & isset($_POST['card']))
{

    try{ 
        include('connect.php');
    }
    catch(PDOException $e){
        die('Erreur: ' . $e->getMessage() . '<br>');
    }

    $sql= $bdd->query("INSERT INTO clients (`lastName`,`firstName`,`birthDay`, `card`,`cardNumber`) VALUES ('$name','$firstname', '$birthday', '$card', '$cardnumber')");
    header('location:index.php');
}
else{
    header('location:index.php');
}
?>