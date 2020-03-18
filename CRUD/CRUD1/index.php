<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Crud1</title>
</head>
<body class="d-flex flex-wrap">
<table>
    <th>Nom</th>
    <th>Prénom</th>
    <?php
    try{
        include('connect.php');
    }
    catch(PDOException $E){
        die('Erreur: ' . $E->getMessage() . '<br>');
    }

    $sql= $BDD->query("SELECT * FROM clients");

    foreach($sql as $row){
        ?>
        <tr>
            <td><?=$row['lastName']?></td>
            <td><?=$row['firstName']?></td>
        </tr>
        <?php
    }
    ?>
</table>
<table>
    <th>Types de spectacles</th>
    <?php
    try{
        include('connect.php');
    }
    catch(PDOException $E){
        die('Erreur: ' . $E->getMessage() . '<br>');
    }

    $sql= $BDD->query("SELECT type FROM showtypes");

    foreach($sql as $row){
        ?>
        <tr>
            <td><?=$row['type']?></td>
        </tr>
        <?php
    }
    ?>
</table>
<table>
    <th>Nom</th>
    <th>Prénom</th>
    <?php
    try{
        include('connect.php');
    }
    catch(PDOException $E){
        die('Erreur: ' . $E->getMessage() . '<br>');
    }

    $sql= $BDD->query("SELECT * FROM clients LIMIT 20");

    foreach($sql as $row){
        ?>
        <tr>
            <td><?=$row['lastName']?></td>
            <td><?=$row['firstName']?></td>
        </tr>
        <?php
    }
    ?>
</table>
<table>
    <th>Nom</th>
    <th>Prénom</th>
    <?php
    try{
        include('connect.php');
    }
    catch(PDOException $E){
        die('Erreur: ' . $E->getMessage() . '<br>');
    }

    $sql= $BDD->query("SELECT * FROM clients WHERE cardNumber IS NOT NULL");

    foreach($sql as $row){
        ?>
        <tr>
            <td><?=$row['lastName']?></td>
            <td><?=$row['firstName']?></td>
        </tr>
        <?php
    }
    ?>
</table>
<table>
    <th>Nom</th>
    <th>Prénom</th>
    <?php
    try{
        include('connect.php');
    }
    catch(PDOException $E){
        die('Erreur: ' . $E->getMessage() . '<br>');
    }

    $sql= $BDD->query("SELECT * FROM clients WHERE firstName LIKE 'M%' ORDER BY firstName ASC");

    foreach($sql as $row){
        ?>
        <tr>
            <td><?=$row['lastName']?></td>
            <td><?=$row['firstName']?></td>
        </tr>
        <?php
    }
    ?>
</table>

    <table>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Date</th>
        <th>Heure</th>
            <?php
            try{
                include('connect.php');
            }
            catch(PDOException $E){
                die('Erreur: ' . $E->getMessage() . '<br>');
            }

            $sql= $BDD->query("SELECT * FROM shows ORDER BY title ASC");

            foreach($sql as $row){
                ?>
                <tr>
                    <td><?=$row['title']?></td>
                    <td><?=$row['performer']?></td>
                    <td><?=$row['date']?></td>
                    <td><?=$row['startTime']?></td>
                </tr>
                <?php
            }
    ?>
</table>

<table>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Date de naissance</th>
    <th>Carte de fidélité</th>
    <th>Numéro de carte</th>
    <?php
    try{
        include('connect.php');
    }
    catch(PDOException $E){
        die('Erreur: ' . $E->getMessage() . '<br>');
    }

    $sql= $BDD->query("SELECT * FROM clients");

    foreach($sql as $row){

        if($row['card']==1){
            $card="Oui";
        }
        else{
            $card="Non";
        }
        ?>
        <tr>
            <td><?=$row['lastName']?></td>
            <td><?=$row['firstName']?></td>
            <td><?=$row['birthDate']?></td>
            <td><?=$card?></td>
            <td><?=$row['cardNumber']?></td>
        </tr>
        <?php
    }
    ?>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>