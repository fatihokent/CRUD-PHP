<?php 
include_once "functions.php";
$cnx = connection();


$DB = uploadimg($_FILES['img']);
ajout($nom, $age, $mail, $tel, $DB, $class);


header("location:affiche.php");
?>


