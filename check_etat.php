<?php

$connect = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connect, 'saidal');

mysqli_set_charset($connect, "utf8");

$etv = "valide";
$etf = "refus";


if(isset($_POST['valid'])){

    $vmat = $_POST['valid'];
    $vdate = $_POST['datte'];

    $query = " UPDATE congé SET etat='$etv' WHERE matricule='$vmat' AND dte='$vdate' ";
    // if(mysqli_query($connect, $query)){
    //     $querry2 = " SELECT position FROM employer WHERE matricule='$vmat' ";
    //     $rez = mysqli_query($connect, $querry2);
    //     $row = mysqli_fetch_array($rez);
    //     $querry3 = "UPDATE employer SET position='" . $row['motif'] . "' WHERE mat='$vmat' ";
    //     if (mysqli_query($connect, $querry3)){
    //         echo "<script type='text/javascript'>alert('Demande Valider !');</script>";
    // }

    header("location:congé_adm.php");
}

if(isset($_POST['refus'])){

    $vmat = $_POST['refus'];
    $vdate = $_POST['datte'];

    $query = " UPDATE congé SET etat='$etf' WHERE matricule='$vmat AND dte='$vdate' ";
    if (mysqli_query($connect, $query)) {
        echo "<script type='text/javascript'>alert('Demande Valider !');</script>";
    }
    header("location:congé_adm.php");



}
