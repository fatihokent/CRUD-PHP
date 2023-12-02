<?php 
include_once "functions.php";
supprimer($_GET['id']);

header("location:affiche.php");

?>