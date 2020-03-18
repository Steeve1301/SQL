<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <table>
      <th>Nom</th>
      <th>Difficulté</th>
      <th>Distance</th>
      <th>Durée</th>
      <th>Dénivelé</th>
      <?php
      try{
        include('connect.php');
        $sql= $PDO->query("SELECT * FROM hiking");
        foreach($sql as $row){
          ?>
          <tr>
              <td><?= $row['name']?></td>
              <td><?= $row['difficulty']?></td>
              <td><?= $row['distance']?></td>
              <td><?= $row['duration']?></td>
              <td><?= $row['height_difference']?></td>
          </tr>
          <?php
        }
      }
      catch(PDOException $E){
        die('Erreur: ' . $E . '<br>');
      }
      ?>
    </table>
  </body>
</html>
