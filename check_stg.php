<?php

session_start();

$connect = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connect, 'saidal');

mysqli_set_charset($connect, "utf8");

if (isset($_POST['submit'])) {
    $location = "pdf/";
    $nf = $_FILES['dmnd_stg']['name'];
    $tm = $_FILES['dmnd_stg']['tmp_name'];
    $file_new_name = date("dmy").$_FILES['dmnd_stg']['name'];
    $idmnd = $_SESSION['iduser'];
    $tpdmnd = "Stage";
    $diplome = $_POST['diplome'];
    $dep = $_POST['departement'];



    $sql = " INSERT INTO demandes (DMND,NewDMND,idUSER,tDMND,diplome,dep_visé) VALUES ('$nf','$file_new_name','$idmnd','$tpdmnd','$diplome','$dep')";
    $sql_run = mysqli_query($connect, $sql);

if($sql_run){
    move_uploaded_file($tm, $location . $file_new_name);
    header("location: landing.php");
} 

}


?>