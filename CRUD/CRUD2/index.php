<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>CRUD2</title>
</head>
<body class="d-flex justify-content-center">
<form action="submit.php" method="post" class="text-center" style="width:500px;">
    <h1>Inscription</h1>

    <div class="form-group">
    <label for="name">Nom</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Dupont">
    </div>

    <div class="form-group">
    <label for="firstname">Prénom</label>
    <input type="text" class="form-control" name="firstname" id="firstname" aria-describedby="helpId" placeholder="Najouah">
    </div>

    <div class="form-group">
    <label for="birthday">Date de naissance</label>
    <input type="date" class="form-control" name="birthday" id="birthday">
    </div>

    <div class="form-check form-check-inline">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="card" id="card" value="1"> Carte de fidélité
        </label>
    </div>

    <div class="form-group">
    <label for="numbercard">Numéro de carte de fidélité</label>
    <input type="text" class="form-control" name="numbercard" id="numbercard" placeholder="005-845-652">
    </div>

    <button type="submit" class="btn btn-primary">S'enregistrer</button>

</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>