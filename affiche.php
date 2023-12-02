<?php 
include_once "functions.php";
$result = afficher();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Liste de produits</title>
</head>
<body>
<form action="delete.php" method="post">
<div class="container my-4 text-center">
    <div class="row">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <img src="<?= $row['img']; ?>" width="200" class="rounded-circle">
                        <h5 class="card-title"><?= $row['nom']; ?></h5>
                        <p class="fw-bold card-text">ID: <?= $row['id']; ?></p>
                        <p class="card-text">Age: <?= $row['age']; ?></p>
                        <p class="card-text">E-mail: <?= $row['email']; ?></p>
                        <p class="card-text">Téléphone: <?= $row['tel']; ?></p>
                        <p class="card-text">Classe: <?= $row['classe']; ?></p>
                        <div class="form-check form-switch d-flex justify-content-center">
                            <input class="form-check-input" type="checkbox" name="supprimer[]" value="<?= $row['id']; ?>">
                        </div>
                        <a class="btn btn-danger" onclick="return confirm('Supprimer?')" href="supprimer.php?id=<?= $row['id']; ?>">Supprimer</a>
                        <a class="btn btn-warning" href="modifier.php?id=<?= $row['id']; ?>">Modifier</a>
                        <a class="btn btn-info" href="consulter.php?id=<?= $row['id']; ?>">Consulter</a>
                        
                        <!--
                        <a class="link-danger link-underline-opacity-0 link-underline-opacity-100-hover" onclick="return confirm('Supprimer?')" href="supprimer.php?id=<?=$row['id']?>">Supprimer</a>
                        <a class="link-warning link-underline-opacity-0 link-underline-opacity-100-hover" href="modifier.php?id=<?= $row['id']; ?>">Modifier</a>
                        <a class="link-info link-underline-opacity-0 link-underline-opacity-100-hover" href="consulter.php?id=<?= $row['id']; ?>">Consulter</a>
                        -->
                    </div>
                </div>
            </div>
        <?php } ?>
        <div colspan="6" class="text-end">
            <button type="submit" class="btn btn-outline-success" onclick="return confirm('Supprimer?')">Suppression multiple</button>
        </div>
    </div>
</div>

</form>
</body>
</html>

