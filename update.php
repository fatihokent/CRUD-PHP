<?php 
include_once "functions.php";
$cnx = connection();

$nom = mysqli_real_escape_string($cnx, $_POST['nom']);
$age = mysqli_real_escape_string($cnx, $_POST['age']);
$mail = mysqli_real_escape_string($cnx, $_POST['mail']);
$tel = mysqli_real_escape_string($cnx, $_POST['tel']);
$class = mysqli_real_escape_string($cnx, $_POST['class']);
$id = mysqli_real_escape_string($cnx, $_POST['id']);

if (!empty($_FILES['img']['name'])) {
    $DB = uploadimg($_FILES['img']);
} else {
    $DB = consulter($id)['img'];
}
modifier($id, $nom, $age, $mail, $tel, $DB, $class);

header("location:affiche.php");

?>