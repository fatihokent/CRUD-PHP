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
    <title>Consulation des produits</title>
</head>
<body>
    <section class="col-4 mx-auto my-3">
        <div class="text-center">
            <img src="<?= $row['img']; ?>" width="200" class="rounded-circle">
        </div>
        <div class="mb-3">
            <label class="form-label">Nom et prénom de l'étudiant :</label>
            <input type="text" class="form-control" value="<?= $row['nom']; ?>" disabled>

        </div>
        <div class="mb-3">
            <label class="form-label">Son ID est le numéro :</label>
            <input type="text" class="form-control" value="<?= $row['id']; ?>" disabled>

        </div>
        <div class="mb-3">
            <label class="form-label">Son âge est de </label>
            <input type="text" class="form-control" value="<?= $row['age']; ?>" disabled>

        </div>
        <div class="mb-3">
            <label class="form-label">Son e-mail :</label>
            <input type="email" class="form-control" value="<?= $row['email']; ?>" disabled>

        </div>
        <div class="mb-3">
            <label class="form-label">Son numéro de télephone est le</label>
            <input type="text" class="form-control" value="<?= $row['tel']; ?>" disabled>

        </div>
        <div class="mb-3">
            <label class="form-label">Sa classe est :</label>
            <input type="text" class="form-control" value="<?= $row['classe']; ?>" disabled>

        </div>
        <div class="mb-3">
            <a href="affiche.php">Retour</a>
        </div>
    </section>
</body>
</html>