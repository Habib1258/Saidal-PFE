<?php

$connect = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connect, 'saidal');

mysqli_set_charset($connect, "utf8");


if (isset($_POST['add'])) {

    $mat_adm = $_POST['mat_adm'];
    $id_adm = $_POST['id_adm'];;

    $sql = "SELECT * FROM employer";
    $rslt = mysqli_query($connect, $sql);

    while ($row = mysqli_fetch_array($rslt)) {
        if ($row["mat"] == $mat_adm && $row["id"] == $id_adm) {

            $query = " INSERT INTO `admin` (`matricul_adm`,`id_adm`) VALUES ('$mat_adm','$id_adm') ";
            $query_run = mysqli_query($connect, $query);
            if ($query_run) {

                echo "<script type='text/javascript'>alert('Admin Ajouter');</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('Employer inexistant');</script>";
        }
    }
}
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

        <div class="columns is-centered">
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
                                <li><a>Recrutement</a></li>
                                <li><a href="congé_adm.php">Congé</a></li>
                                <li><a href="affect_adm.php">Affectation</a></li>
                            </ul>
                        </li>
                    </ul>

                </aside>

            </div>

            <div class="column">

                <form method="POST" action="#" class="box">

                    <div class="field is-horizontal">

                        <div class="field-label is-normal">
                            <label class="label">Matricul</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" type="number" name="mat_adm">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-id-badge"></i>
                                    </span>
                                </p>
                            </div>
                        </div>

                        <div class="field-label is-normal">
                            <label class="label">Id</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" type="number" name="id_adm">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-id-badge"></i>
                                    </span>
                                </p>
                            </div>
                        </div>

                    </div>


                    <div class="field">
                        <input class="button is-success" type="submit" value="Ajouter" name="add">
                    </div>

                </form>



            </div>





        </div>



    </section>

</body>

</html>