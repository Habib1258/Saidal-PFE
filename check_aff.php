<?php


$connect = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connect, 'saidal');

mysqli_set_charset($connect, "utf8");

$etv = "valide";
$etf = "refus";

if(isset($_POST['valid'])){

    $vmat = $_POST['valid'];
    $vdate = date('Y_m-d');

    $query = " UPDATE affectation SET etat='$etv' , dte='$vdate' WHERE matricule='$vmat'  ";
    if(mysqli_query($connect, $query)){
      $querry2 = " SELECT new_structure FROM affectation WHERE matricule='$vmat' ";
      $result = mysqli_query($connect,$querry2);
      $row = mysqli_fetch_array($result);
      $querry3 = "UPDATE employer SET structure='".$row['new_structure']."' WHERE mat='$vmat' ";
      if(mysqli_query($connect,$querry3))
              echo "<script type='text/javascript'>alert('Demande Valider !');</script>";
    }
    header("location:affect_adm.php");
}

if(isset($_POST['refus'])){

    $vmat = $_POST['refus'];
    $vdate = date('Y_m-d');

    $query = " UPDATE affectation SET etat='$etf' , dte='$vdate' WHERE matricule='$vmat' ";
    if (mysqli_query($connect, $query)) {
        echo "<script type='text/javascript'>alert('Demande Valider !');</script>";
    }
    header("location:affect_adm.php");



}
