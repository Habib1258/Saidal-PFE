<?php
session_start();

$connect = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connect, 'saidal');

mysqli_set_charset($connect, "utf8");

if (isset($_POST['send'])) {

    $mat = $_SESSION['mat'];
    $id = $_SESSION['id'];

    $namec = $_POST['nomc'];
    $pc = $_POST['pren'];
    $fct = $_POST['fct'];
    $drc = $_POST['drc'];
    $str = $_POST['str'];
    $motif = $_POST['mtfc'];
    $nbrj = $_POST['nbrj'];
    $dtd = $_POST['dtd'];
    $etat = 'attente';
    $date_acctuel = date('Y-m-d');

    $query = " INSERT INTO `congé`(`matricule`,`id`,`nom`, `prenom`, `fonction`, `direction`, `structure`, `motif`, `nbrj`, `dtd`,`etat`,`dte`)
    VALUES ('$mat','$id','$namec','$pc','$fct','$drc','$str','$motif','$nbrj','$dtd','$etat','$date_acctuel')";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        echo "<script type='text/javascript'>alert('Demande Envoyer !');</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/5eb8866ae7.js" crossorigin="anonymous"></script>
    <link href="css/bulma.css" rel="stylesheet">
    <script src="javascript.js"></script>

</head>

<body>


    <section class="section">

        <nav class="level">
            <p class="level-item has-text-centered">
                <img src="img/Saidal.png" width="150px">
            </p>
        </nav>
        <br>
        <div class="columns">
            <div class="column is-offset-9">
                <div class="level-item">
                    <form method="GET">
                        <button class="button is-danger" name="logout">Se Déconnecter</button>
                    </form>
                    <?php

                    if (isset($_GET['logout'])) {
                        session_destroy();
                        header('location: index_A.php');
                    }

                    ?>
                </div>

            </div>

        </div>
        <div class="columns">

            <div class="culumn">

                <aside class="menu">
                    <p class="menu-label">
                        Dashboard
                    </p>
                    <ul class="menu-list">
                        <li>
                            <ul>
                                <li><a href="profil.php">Mon Profil</a></li>

                            </ul>
                            <ul>
                                <li><a href="notif.php">Notifications</a></li>

                            </ul>
                        </li>
                    </ul>
                    <p class="menu-label">
                        Mes Informations
                    </p>
                    <ul class="menu-list">
                        <li><a href="consulter_cong.php">Consulter Congé</a></li>
                    </ul>
                    <ul class="menu-list">
                        <li><a href="consulter_affect.php">Consulter Affectation</a></li>
                    </ul>
                    <p class="menu-label">
                        Demandes
                    </p>
                    <ul class="menu-list">
                        <li>
                            <ul>
                                <li><a href="congé.php">Congé</a></li>
                                <li><a href="affectation.php">Reaffectation</a></li>
                            </ul>
                        </li>
                    </ul>

                </aside>

            </div>
            <div class="column">

                <form method="POST" action="#" class="box">

                    <h1 class="title is-9">Demande de congé</h1>

                    <div class="field is-horizontal">

                        <div class="field-label is-normal">
                            <label class="label">Nom</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control  has-icons-left">
                                    <input class="input" type="text" name="nomc" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </p>
                            </div>

                            <div class="field-label is-normal">
                                <label class="label">Prenom</label>
                            </div>
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" type="text" name="pren" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">

                        <div class="field-label is-normal">
                            <label class="label">Fonction</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control  has-icons-left">
                                    <input class="input" type="text" name="fct" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </p>
                            </div>

                            <div class="field-label is-normal">
                                <label class="label">Direction</label>
                            </div>
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" type="text" name="drc" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </p>
                            </div>

                            <div class="field-label is-normal">
                                <label class="label">Structure</label>
                            </div>
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" type="text" name="str" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">

                        <div class="field-label is-normal">
                            <label class="label">Motif du congé</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" type="text" name="mtfc" required>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </p>
                            </div>

                            <div class="field-label is-normal">
                                <label class="label">Nombre de jours</label>
                            </div>
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" type="number" name="nbrj" required>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="field-label is-normal">
                                <label class="label">Date de debut</label>
                            </div>
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" type="date" name="dtd" required>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <input class="button is-success" type="submit" value="Envoyer" name="send">
                    </div>

                </form>

            </div>

        </div>



    </section>

</body>

</html>