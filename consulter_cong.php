<?php
session_start();

$connect = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connect, 'saidal');

mysqli_set_charset($connect, "utf8");
$mat = $_SESSION['mat'];
$id = $_SESSION['id'];

$sql = "SELECT * FROM `congé` WHERE matricule=$mat AND id=$id ";
$rslt = mysqli_query($connect, $sql);

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

            <div class="column is-offset-1">
                <p class="title is-9">Mes Demanades de congés</p>
                <div class="table-container">
                    <table class="table is-hoverable">
                        <thead>
                            <tr>
                                <th><abbr>Matricule</abbr></th>
                                <th><abbr>Id</abbr></th>
                                <th><abbr>Nom</abbr></th>
                                <th><abbr>Prenom</abbr></th>
                                <th><abbr>Fonction</abbr></th>
                                <th><abbr>Direction</abbr></th>
                                <th><abbr>Structure</abbr></th>
                                <th><abbr>Motif du congé</abbr></th>
                                <th><abbr>Nombre de jours</abbr></th>
                                <th><abbr>Date de debut</abbr></th>
                                <th><abbr>Etat</abbr></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th><abbr>Matricule</abbr></th>
                                <th><abbr>Id</abbr></th>
                                <th><abbr>Nom</abbr></th>
                                <th><abbr>Prenom</abbr></th>
                                <th><abbr>Fonction</abbr></th>
                                <th><abbr>Direction</abbr></th>
                                <th><abbr>Structure</abbr></th>
                                <th><abbr>Motif du congé</abbr></th>
                                <th><abbr>Nombre de jours</abbr></th>
                                <th><abbr>Date de debut</abbr></th>
                                <th><abbr>Etat</abbr></th>

                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($rslt)) {
                                if ($row['matricule'] == $mat && $row['id'] == $id) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['matricule']; ?></td>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['nom']; ?></td>
                                        <td><?php echo $row['prenom']; ?></td>
                                        <td><?php echo $row['fonction']; ?></td>
                                        <td><?php echo $row['direction']; ?></td>
                                        <td><?php echo $row['structure']; ?></td>
                                        <td><?php echo $row['motif']; ?></td>
                                        <td><?php echo $row['nbrj']; ?></td>
                                        <td><?php echo $row['dtd']; ?></td>
                                        <td><?php echo $row['etat']; ?></td>
                                        <td>
                                    </tr>
                        </tbody>


                </div>
        <?php
                                }
                            }
        ?>

            </div>

        </div>

        </div>


        </div>



    </section>

</body>

</html>