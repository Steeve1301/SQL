
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-PDO</title>
</head>
<body>
<form method="POST" action="delete.php">
    <table>
        
    <?php
    try{
        require('connexion.php');

        echo '<th>VILLE</th> <th>MAXIMA</th> <th>MINIMA</th>';
        foreach($PDO -> query("SELECT * FROM météo") as $row){
            echo '<tr>'
            .'<td><input type="checkbox" value='.$row['ville'].' name="ville[]"><label for="ville">'. $row['ville'] . '</label></td>'.
            '<td>'. $row['haut']. '</td>'.
            '<td>'. $row['bas']. '</td>'.
                '</tr>';
        }
    }
    catch (PDOException $e){
        die('Erreur : ' .$e. '<br/>');
    } ?>

    </table>
    <input type="submit" value="Supprimer">
</form>
    <form method="POST" action="add.php">
        <input type="text" name="ville" placeholder="Ville">
        <input type="text" name="minima" placeholder="Minima">
        <input type="text" name="maxima" placeholder="Maxima">
        <input type="submit" value="Enregistrer">
    </form>

    <script src="assets/js/script.js"></script>
</body>
</html>