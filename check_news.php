<?php

$connect = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connect,'saidal');

mysqli_set_charset($connect, "utf8") ;

if(isset($_POST['submit'])){

    $title = $_POST['titre'];
    $desc = $_POST['desc'];
    $gnr = $_POST['genre'];

    $query = "INSERT INTO `news`(`titre`, `detail`, `genre`) VALUES ('$title','$desc','$gnr') ";
    $query_run = mysqli_query($connect,$query);

    if ($query_run) {
        echo "<script type='text/javascript'>alert('News Ajouter');</script>";
    }

}

?>