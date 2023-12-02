<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Ajout</title>
</head>
<body>
    <div class="container">
    <form action="store.php" method="post" class="col-3 mx-auto" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nom" class="form-label">Votre nom et prénom</label>
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Doe John">

        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Votre âge</label>
            <input type="number" class="form-control" name="age" id="age" placeholder="22">

        </div>
        <div class="mb-3">
            <label for="mail" class="form-label">Votre e-mail</label>
            <input type="email" class="form-control" name="mail" id="mail" placeholder="example@gmail.com">

        </div>
        <div class="mb-3">
            <label for="tel" class="form-label">Votre numéro de télephone</label>
            <input type="text" class="form-control" name="tel" id="tel" placeholder="06 43 56 50 76">

        </div>
        <div class="mb-3">
            <label for="class" class="form-label">Votre classe</label>
            <input type="text" class="form-control" name="class" id="class" placeholder="1er année D.I">

        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Image sélectionnée</label>
            <input type="file" class="form-control" name="img">
            
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
    </div>
</body>
</html>