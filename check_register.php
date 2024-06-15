<?php

$connect = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connect,'saidal');

mysqli_set_charset($connect, "utf8");

if(isset($_POST['submit'])){

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $type = $_POST['type'];

    $query = "INSERT INTO login (NOM,PRENOM,EMAIL,MDP,TYPE) VALUES ('$nom','$prenom','$email','$mdp','$type') ";
    $query_run = mysqli_query($connect,$query);

    if ($query_run) {
        header('location: index_A.php');
    }

}


?>