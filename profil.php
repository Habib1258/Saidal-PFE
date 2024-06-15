<?php
session_start();

$connect = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connect, 'saidal');

mysqli_set_charset($connect, "utf8");
$mat = $_SESSION['mat'];
$id = $_SESSION['id'];

$sql = "SELECT * FROM employer WHERE mat=$mat AND id=$id ";
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
                        header('location: dash_log.php');
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
            <div class="column">
                <?php
                while ($row = mysqli_fetch_array($rslt)) {
                    if ($row['mat'] == $mat && $row['id'] == $id) {
                ?>
                        <div class="card">
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="image is-48x48">
                                            <img src="img/profil.png" alt="Placeholder image">
                                        </figure>
                                    </div>
                                    <div class="media-content">
                                        <p class="title is-4"><?php echo $row['nom']; ?> <?php echo $row['prenom']; ?></p>
                                        <p class="subtitle is-6" ?>
                                            ID : <?php echo $row['id']; ?>
                                            <br>
                                            MATRICULE : <?php echo $row['mat']; ?>
                                        </p>
                                    </div>
                                </div>

                                <div class="content">

                                    <div class="field is-horizontal">

                                        <div class="field-label is-normal">
                                            <label class="label">Status:</label>
                                        </div>
                                        <div class="field-body">
                                            <div class="field">
                                                <p class="control">
                                                    <?php echo $row['status'] ?>
                                                </p>
                                            </div>

                                            <div class="field-label is-normal">
                                                <label class="label">Position:</label>
                                            </div>
                                            <div class="field">
                                                <p class="control">
                                                    <?php echo $row['position'] ?>
                                                </p>
                                            </div>

                                            <div class="field-label is-normal">
                                                <label class="label">Structure:</label>
                                            </div>
                                            <div class="field">
                                                <p class="control">
                                                    <?php echo $row['structure'] ?>
                                                </p>
                                            </div>

                                            <div class="field-label is-normal">
                                                <label class="label">Section:</label>
                                            </div>
                                            <div class="field">
                                                <p class="control">
                                                    <?php echo $row['section'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field is-horizontal">

                                        <div class="field-label is-normal">
                                            <label class="label">Service:</label>
                                        </div>
                                        <div class="field-body">
                                            <div class="field">
                                                <p class="control">
                                                    <?php echo $row['service'] ?>
                                                </p>
                                            </div>

                                            <div class="field-label is-normal">
                                                <label class="label">Poste:</label>
                                            </div>
                                            <div class="field">
                                                <p class="control">
                                                    <?php echo $row['poste'] ?>
                                                </p>
                                            </div>

                                            <div class="field-label is-normal">
                                                <label class="label">Grade:</label>
                                            </div>
                                            <div class="field">
                                                <p class="control">
                                                    <?php echo $row['grade'] ?>
                                                </p>
                                            </div>
                                            <div class="field-label is-normal">
                                                <label class="label">Categorie:</label>
                                            </div>
                                            <div class="field">
                                                <p class="control">
                                                    <?php echo $row['categorie'] ?>
                                                </p>
                                            </div>
                                            <div class="field-label is-normal">
                                                <label class="label">Qualification:</label>
                                            </div>
                                            <div class="field">
                                                <p class="control">
                                                    <?php echo $row['qualif'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                    }
                }
                        ?>
                            </div>

                        </div>

            </div>

    </section>

</body>

</html>