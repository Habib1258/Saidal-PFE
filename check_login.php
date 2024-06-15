<?php

session_start();

$connect = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connect, 'saidal');

mysqli_set_charset($connect, "utf8");

if(isset($_POST['submit'])){

    $email = $_POST['mail'];
    $mdp = $_POST['mdp'];

    $selct = "SELECT * FROM login";
    $rslt = mysqli_query($connect, $selct);

    while ($row = mysqli_fetch_array($rslt)) {
        if ($row["EMAIL"] == $email && $row["MDP"] == $mdp) {
            if($row["TYPE"] == 'Etudiant'){
                $_SESSION['iduser'] = $row['id'] ;
                header("location: landing.php");
            }
            if ($row["TYPE"] == 'Postulant') {
                $_SESSION['iduser'] = $row['id'];
                header("location: landing.php");
            }
            
        }
    }

}




