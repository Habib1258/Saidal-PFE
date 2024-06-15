<?php
session_start();

$connect = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connect, 'saidal');

mysqli_set_charset($connect, "utf8");

if (isset($_POST['submit'])) {

    $matric = $_POST['matri'];
    $iden = $_POST['identi'];

    $selct = "SELECT * FROM employer,admin";
    $rslt = mysqli_query($connect, $selct);

    while ($row = mysqli_fetch_array($rslt)) {
        if ($row["id"] == $iden && $row["mat"] == $matric) {
            if ($row["matricul_adm"] == $row["mat"] && $row["id_adm"] == $row["id"]) {
                header("location: dashboard.php");
            } else {
                $_SESSION['mat'] = $row['mat'];
                $_SESSION['id'] = $row['id'];
                header("location: profil.php");
            }
               
        } 
    }
}

?>
