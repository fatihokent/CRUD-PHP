<?php
function connection(){
    $cnx = mysqli_connect("localhost", "root", "root", "dbase", "8889");

    if (mysqli_connect_errno()) {
        die("Échec de la connexion à MySQL : " . mysqli_connect_error());
    }

    return $cnx;
}

function ajout($nom, $age, $mail, $tel, $DB, $class) {
    $cnx = connection();
    $nom = mysqli_real_escape_string($cnx, $_POST['nom']);
    $age = mysqli_real_escape_string($cnx, $_POST['age']);
    $mail = mysqli_real_escape_string($cnx, $_POST['mail']);
    $tel = mysqli_real_escape_string($cnx, $_POST['tel']);
    $class = mysqli_real_escape_string($cnx, $_POST['class']);

    $query = "INSERT INTO etudiants (nom, age, email, tel, img, classe) VALUES ('$nom', $age, '$mail', '$tel', '$DB', '$class')" ;
    $result = mysqli_query($cnx, $query);
    return $result ;
}

function modifier($id, $nom, $age, $mail, $tel, $DB, $class) {
    $cnx = connection();
    
    $query = "UPDATE etudiants SET nom='$nom', age=$age, email='$mail', tel='$tel', img='$DB', classe='$class' WHERE id=$id";
    $result = mysqli_query($cnx, $query);
    return $result ;
}

function uploadimg($image) {
    $name = $image['name'];
    $tmp = $image['tmp_name'];
    $DB = "images/$name";
    move_uploaded_file($tmp,$DB);

    return $DB;
}

function consulter ($id){
    $cnx = connection();
    $query = "SELECT * FROM etudiants WHERE id=$id" ;
    $result = mysqli_query($cnx, $query);
    $row = mysqli_fetch_assoc($result);
    return $row ;
}

function supprimer ($id){
    $cnx = connection();
    $query = "DELETE FROM etudiants WHERE id=$id" ;
    $result = mysqli_query($cnx, $query);
    return $result ;
}

function afficher (){
    $cnx = connection();
    $query = "SELECT * FROM etudiants" ;
    $result = mysqli_query($cnx, $query);
    return $result ;
}

function supprimultiple ($ids){
    $cnx = connection();
    $extracted_ids = implode(',' , $ids);
    $query = "DELETE FROM etudiants WHERE id IN ($extracted_ids)" ;
    $result = mysqli_query($cnx, $query);
    return $result ;
}
?>