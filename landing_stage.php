<?php

$connect = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connect, 'saidal');

mysqli_set_charset($connect, "utf8");

$sql = "SELECT * FROM news WHERE genre='stage' ";
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

$sql = "SELECT * FROM news Where genre='stage' LIMIT " . $this_page_first_result . ',' . $result_per_page;
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

    <!-- NAVBAR -->
    <nav class="navbar is-light" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a href="landing.php" class="#">
                <img src="img/Saidal.png" width="150" style="margin-right:10px; padding-top: 10px; padding-left:10px;">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="landing.php">
                    Acceuil
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        Demandes
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item js-modal-trigger" data-target="modal-stage">
                            Stage
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item js-modal-trigger" data-target="modal-recrutement">
                            Recrutement
                        </a>

                    </div>
                </div>
                <a class="navbar-item" href="departement.php">
                    À propos
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-normal is-facebook is-link" href="https://www.facebook.com/groupesaidal">
                            <span class="icon">
                                <i class="fab fa-facebook fa-lg"></i>
                            </span>
                        </a>

                        <a class="button is-normal is-youtube is-danger" href="https://www.youtube.com/channel/UCB8L3HbM_jRTkQPV2xljEeg">
                            <span class="icon">
                                <i class="fab fa-youtube fa-lg"></i>
                            </span>
                        </a>

                        <a class="button is-normal  is-linkedin is-info" href="https://www.linkedin.com/company/saidalgroupe/?originalSubdomain=dz">
                            <span class="icon">
                                <i class="fab fa-linkedin fa-lg"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- SECTION -->

    <section class="hero is-fullheight has-background-grey-lighter">
        <div class="column is-offset-5">
            <nav class="pagination" role="navigation" aria-label="pagination">
                <?php
                for ($page = 1; $page <= $number_of_page; $page++) {
                    
                    // if ($row['genre'] == "stage") {
                ?>
                    <ul class="pagination-list">
                    <?php
                    echo '<li><a class="pagination-link is-current " href="landing_stage.php?page=' . $page . '">' . $page . '</a></li> ';
                }
                //  }
                    ?>
                    <li>
                        <span class="pagination-ellipsis">&hellip;</span>
                    </li>
                    </ul>
            </nav>
        </div>
        <div class="hero-body">

            <div class="columns is-multiline is-narrow">
                <?php
                while ($row = mysqli_fetch_array($rslt)) {
                    // if ($row['genre'] == "stage") {
                ?>

                        <div class="column is-one-third">

                            <div class="card">
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <p class="title is-2" style="color:dodgerblue ;"><?php echo $row['titre']; ?></p>
                                        </div>
                                    </div>

                                    <div class="content">
                                        <p>
                                            " <?php echo $row['detail']; ?> "
                                        </p>
                                        <br>
                                        <p class="subtitle">
                                            Valable du : <?php echo $row['debut']; ?> au : <?php echo $row['fin']; ?>
                                        </p>
                                        <br>
                                        <p class="subtitle">
                                            Ajouté le : <?php echo $row['ajout']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                // }
                ?>
            </div>

        </div>

    </section>

    <!-- end of section -->



    <!-- debut des modals -->

    <div id="modal-stage" class="modal">
        <div class="modal-background"></div>

        <div class="modal-content">
            <div class="box">
                <form action="check_stg.php" method="POST" class="box" enctype="multipart/form-data">
                    <div class="field">
                        <div class="control">
                            <label class="label">Votre Diplome :</label>
                            <div class="select">
                                <select name="diplome" required>
                                    <option>--Choisir--</option>
                                    <option value="BAC">BAC</option>
                                    <option value="Licence">Licence</option>
                                    <option value="Master">Master</option>
                                    <option value="Doctorat">Doctorat</option>
                                    <option value="PhD">PhD</option>
                                    <option value="Technicien_Superieur">Technicien Superieur</option>
                                    <option value="Ingenieur">Ingenieur</option>
                                    <option value="Aucun">Aucun</option>
                                </select>
                            </div>
                            <label class="label">Departement Visé :</label>
                            <div class="select">
                                <select name="departement" required>
                                    <option>--Choisir--</option>
                                    <option value="Echantillotheque">Echantillotheque</option>
                                    <option value="Magasin piece rechange">Magasin piece rechange</option>
                                    <option value="Magasin moyens généraux">Magasin moyens généraux</option>
                                    <option value="Magasin reactif/vereries">Magasin reactif/vereries</option>
                                    <option value="Camptine">Camptine</option>
                                    <option value="Medecine du travail">Medecine du travail</option>
                                    <option value="Assurance qualité">Assurance qualité</option>
                                    <option value="Direction site de production">Direction site de production</option>
                                    <option value="Sous-direction de production">Sous-direction de production</option>
                                    <option value="Imprimerie">Imprimerie</option>
                                    <option value="Hygiene">Hygiene</option>
                                    <option value="Administration">Administration</option>
                                </select>
                            </div>
                            <div class="field">
                                <label class="label">Importez votre demande(CV) :</label>
                                <p>Veillez a ce que le nom du fichier contient votre nom !</p>
                                <input type="file" name="dmnd_stg" accept="application/pdf" required>
                            </div>
                            <input class="button is-link is-small" type="submit" name="submit" value="Importer">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <div id="modal-recrutement" class="modal">
        <div class="modal-background"></div>

        <div class="modal-content">
            <div class="box">
                <form action="check_rcrt.php" method="POST" class="box" enctype="multipart/form-data">
                    <div class="field">
                        <div class="control">
                            <label class="label">Votre Diplome :</label>
                            <div class="select">
                                <select name="diplome" required>
                                    <option>--Choisir--</option>
                                    <option value="BAC">BAC</option>
                                    <option value="Licence">Licence</option>
                                    <option value="Master">Master</option>
                                    <option value="Doctorat">Doctorat</option>
                                    <option value="PhD">PhD</option>
                                    <option value="Technicien_Superieur">Technicien Superieur</option>
                                    <option value="Ingenieur">Ingenieur</option>
                                    <option value="Aucun">Aucun</option>
                                </select>
                            </div>
                            <label class="label">Departement Visé :</label>
                            <div class="select">
                                <select name="departement" required>
                                    <option>--Choisir--</option>
                                    <option value="Echantillotheque">Echantillotheque</option>
                                    <option value="Magasin piece rechange">Magasin piece rechange</option>
                                    <option value="Magasin moyens généraux">Magasin moyens généraux</option>
                                    <option value="Magasin reactif/vereries">Magasin reactif/vereries</option>
                                    <option value="Camptine">Camptine</option>
                                    <option value="Medecine du travail">Medecine du travail</option>
                                    <option value="Assurance qualité">Assurance qualité</option>
                                    <option value="Direction site de production">Direction site de production</option>
                                    <option value="Sous-direction de production">Sous-direction de production</option>
                                    <option value="Imprimerie">Imprimerie</option>
                                    <option value="Hygiene">Hygiene</option>
                                    <option value="Administration">Administration</option>
                                </select>
                            </div>
                            <div class="field">
                                <label class="label">Importez votre demande(CV) :</label>
                                <p>Veillez a ce que le nom du fichier contient votre nom !</p>
                                <input type="file" name="dmnd_rcrt" accept="application/pdf" required>
                            </div>
                            <input class="button is-link is-small" type="submit" name="submit" value="Importer">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <button class="modal-close is-large" aria-label="close"></button>
    </div>
    <!-- fin des modals -->
</body>

</html>