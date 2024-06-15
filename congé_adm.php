<?php
session_start();

$connect = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connect, 'saidal');

mysqli_set_charset($connect, "utf8");
// $mat = $_SESSION['mat'];
// $id = $_SESSION['id'];


$query = " SELECT * FROM `congé` WHERE etat='attente'  ";
$query_run = mysqli_query($connect, $query);



$result_per_page = 10;
$number_of_result = mysqli_num_rows($query_run);
$number_of_page = ceil($number_of_result / $result_per_page);

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

$this_page_first_result = ($page - 1) * $result_per_page;

$query = "SELECT * FROM `congé` WHERE etat='attente' LIMIT " . $this_page_first_result . ',' . $result_per_page;
$query_run = mysqli_query($connect, $query);


?>


<!DOCTYPE html>
<html lang="en" style="background-color:ghostwhite ;">

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
            <div class="column is-offset-10">
                <div class="level-item">
                    <form method="GET">
                        <button class="button is-danger" name="logout">Se Déconnecter</button>
                    </form>
                    <?php

                    if (isset($_GET['logout'])) {
                        session_destroy();
                        header('location: dash_log.php');
                    }

                    ?>
                </div>

            </div>

        </div>

        <div class="columns">

            <div class="culumn">

                <aside class="menu box">
                    <p class="menu-label">
                        General
                    </p>
                    <ul class="menu-list">
                        <li><a href="dashboard.php">Dashboard</a></li>
                    </ul>
                    <ul class="menu-list">
                        <li><a href="add_news.php">Ajouter NEWS</a></li>
                    </ul>
                    <p class="menu-label">
                        Employées
                    </p>
                    <ul class="menu-list">
                        <li>
                            <ul>
                                <li><a href="identification.php">Identification</a></li>
                                <li><a href="status.php">Status</a></li>

                            </ul>
                        </li>
                    </ul>
                    <p class="menu-label">
                        Administration
                    </p>
                    <ul class="menu-list">
                        <li>
                            <a>Gérer Personell</a>
                            <ul>
                                <li><a href="add_employ.php">Ajouter employée</a></li>
                                <li><a href="add_admin.php">Ajouter admin</a></li>
                                <li><a href="conger_valid.php">Congé accepter</a></li>
                                <li><a href="conger_refus.php">Congé refuser</a></li>
                                <li><a href="affect_valide.php">Affectation valider</a></li>
                                <li><a href="affect_refus.php">Affectation refuser</a></li>
                            </ul>
                        </li>
                    </ul>
                    <p class="menu-label">
                        Demandes
                    </p>
                    <ul class="menu-list">
                        <li>
                            <a>Gérer Demandes</a>
                            <ul>
                                <li><a href="stage.php">Stage</a></li>
                                <li><a href="recrutement.php">Recrutement</a></li>
                                <li><a href="congé_adm.php">Congé</a></li>
                                <li><a href="affect_adm.php">Affectation</a></li>
                            </ul>
                        </li>
                    </ul>

                </aside>

            </div>

            <div class="column ">
                <p class="title is-9">Demandes de congés</p>
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
                                <th><abbr>Date d'ajout</abbr></th>
                                <th><abbr>Validation</abbr></th>
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
                                <th><abbr>Date d'ajout</abbr></th>
                                <th><abbr>Validation</abbr></th>

                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($query_run)) {
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
                                    <td><?php echo $row['dte']; ?></td>
                                    <td>
                                        <form method="POST" action="check_etat.php">
                                            <div class="columns">

                                                <div class="column">
                                                    <button class="button is-success" name="valid" value="<?php echo $row['matricule']; ?>">
                                                        <i class="fa-solid fa-circle-check"></i>
                                                        <input type="hidden" name="datte" value="<?php echo $row['dte']; ?>">
                                                    </button>
                                                </div>
                                                <div class="column">
                                                    <button class="button is-danger" name="refus" value="<?php echo $row['matricule']; ?>">
                                                        <i class="fa-solid fa-circle-xmark"></i>
                                                    </button>
                                                </div>

                                            </div>
                                        </form>

                                    </td>
                                </tr>
                        </tbody>


                </div>
            <?php
                            }
            ?>

            <div class="column">
                <nav class="pagination" role="navigation" aria-label="pagination">
                    <?php
                    for ($page = 1; $page <= $number_of_page; $page++) {
                    ?>
                        <ul class="pagination-list">
                        <?php
                        echo '<li><a class="pagination-link" href="congé_adm.php?page=' . $page . '">' . $page . '</a></li> ';
                    }
                        ?>
                        <li>
                            <span class="pagination-ellipsis">&hellip;</span>
                        </li>
                        </ul>
                </nav>
            </div>

            </div>

    </section>

</body>

</html>