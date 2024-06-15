<?php

$connect = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connect, 'saidal');

mysqli_set_charset($connect, "utf8");

$sql = "SELECT * FROM employer ";
$rslt = mysqli_query($connect, $sql);

$result_per_page = 3;
$number_of_result = mysqli_num_rows($rslt);
$number_of_page = ceil($number_of_result / $result_per_page);

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

$this_page_first_result = ($page - 1) * $result_per_page;

$sql = "SELECT * FROM employer LIMIT " . $this_page_first_result . ',' . $result_per_page;
$rslt = mysqli_query($connect, $sql);

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
            <div class="column">

                <div class="table-container">
                    <p class="title"> Identification Employer</p>
                    <table class="table is-hoverable">
                        <thead>
                            <tr>
                                <th><abbr>Matricul</abbr></th>
                                <th><abbr>ID</abbr></th>
                                <th><abbr>Nom</abbr></th>
                                <th><abbr>Prenom</abbr></th>
                                <th><abbr>SSN</abbr></th>
                                <th><abbr>Sexe</abbr></th>
                                <th><abbr>Situation Familiale</abbr></th>
                                <th><abbr>Date naissance</abbr></th>
                                <th><abbr>Nombre d'enfant</abbr></th>
                                <th><abbr>Invalidité</abbr></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th><abbr>Matricul</abbr></th>
                                <th>ID</th>
                                <th><abbr>Nom</abbr></th>
                                <th><abbr>Prenom</abbr></th>
                                <th><abbr>SSN</abbr></th>
                                <th><abbr>Sexe</abbr></th>
                                <th><abbr>Situation Familiale</abbr></th>
                                <th><abbr>Date naissance</abbr></th>
                                <th><abbr>Nombre d'enfant</abbr></th>
                                <th><abbr>Invalidité</abbr></th>
                            </tr>
                        </tfoot>
                        <tbody>

                            <?php
                            while ($row = mysqli_fetch_array($rslt)) {

                            ?>
                                <tr>
                                    <th><?php echo $row['mat']; ?></th>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['nom']; ?></td>
                                    <td><?php echo $row['prenom']; ?></td>
                                    <td><?php echo $row['ssn']; ?></td>
                                    <td><?php echo $row['sexe']; ?></td>
                                    <td><?php echo $row['sf']; ?></td>
                                    <td><?php echo $row['date_nais']; ?></td>
                                    <td><?php echo $row['nbr_enft']; ?></td>
                                    <td><?php echo $row['invalid']; ?></td>
                                </tr>
                        </tbody>
                </div>
            <?php
                            }
            ?>

            </div>
        </div>

        <div class="column">
            <nav class="pagination " role="navigation" aria-label="pagination">
                <?php
                for ($page = 1; $page <= $number_of_page; $page++) {
                ?>
                    <ul class="pagination-list">
                    <?php
                    echo '<li><a class="pagination-link" href="identification.php?page=' . $page . '">' . $page . '</a></li> ';
                }
                    ?>
                    <li>
                        <span class="pagination-ellipsis">&hellip;</span>
                    </li>
                    </ul>
            </nav>
        </div>

    </section>

</body>

</html>


<?php
