<?php 
include_once "functions.php";
$row = consulter($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Modifier</title>
</head>
<body>

<div class="container">
    <h2 class="text-center">Modification de l'étudiant <?= $row['nom']; ?></h2>
    <form action="update.php" method="post" enctype="multipart/form-data" class="col-3 mx-auto">
        <div class="mb-3">
            <input type="hidden" class="form-control" name="id" value="<?= $row['id']; ?>">

        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Votre nouvel nom et prénom</label>
            <input type="text" class="form-control" name="nom" value="<?= $row['nom']; ?>">

        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Votre nouvel âge</label>
            <input type="number" class="form-control" name="age" value="<?= $row['age']; ?>">

        </div>
        <div class="mb-3">
            <label for="mail" class="form-label">Votre nouvel e-mail</label>
            <input type="email" class="form-control" name="mail" value="<?= $row['email']; ?>">

        </div>
        <div class="mb-3">
            <label for="tel" class="form-label">Votre nouvel numéro de télephone</label>
            <input type="text" class="form-control" name="tel" value="<?= $row['tel']; ?>">

        </div>
        <div class="mb-3">
            <label for="class" class="form-label">Votre nouvelle classe</label>
            <input type="text" class="form-control" name="class" value="<?= $row['classe']; ?>">

        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Reselectionner l'image</label>
            <input type="file" class="form-control" name="img">
            
        </div>
        <div class="mb-3">
            <input class="form-control text-success" onclick="return confirm('Modifier?')" type="submit" value="Modifier">

        </div>
    </form>

</div>

</body>
</html>
