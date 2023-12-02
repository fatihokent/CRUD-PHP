
<?php
include_once "functions.php";
if (isset($_POST['supprimer'])) {
    supprimultiple ($_POST['supprimer']);

    header("location: affiche.php");
} else {
    echo 'Aucun étudiant sélectionné pour la suppression.';
}
?>
