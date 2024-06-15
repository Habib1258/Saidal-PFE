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

                <div class="field ">
                    <div class="control">
                        <nav class="level-right">

                            <form method="POST" action="#">

                                <div class="level">
                                    <div class="level-item">
                                        <div class="field has-addons">
                                            <div class="field-label is-normal">
                                                <label class="label">Rechercher Employer :</label>
                                            </div>
                                            <p class="control">
                                                <input type="text" name="keyword" class="input" placeholder="Tapez le NOM de l'employer">
                                            </p>
                                            <p class="control">
                                                <input type="submit" class="button is-info" name="search" value="Recherceher">
                                            </p>
                                        </div>

                                    </div>

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
                            </form>
                        </nav>
                    </div>
                </div>

                <?php

                $connect = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($connect, 'saidal');

                mysqli_set_charset($connect, "utf8");

                if (isset($_POST['search'])) {
                    $key = $_POST['keyword'];

                    $sql = "SELECT * FROM `employer` ";
                    $rslt = mysqli_query($connect, $sql);

                ?>

                    <div class="field">
                        <div class="control">
                            <div class="table-container">
                                <table class="table is-hoverable">
                                    <p class="title">Identification</p>
                                    <thead>
                                        <tr>
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_array($rslt)) {
                                            if ($row['nom'] == $key) {
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
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <div class="table-container">
                                <table class="table is-hoverable">
                                    <p class="title">Status</p>
                                    <thead>
                                        <tr>
                                            <th><abbr>Status</abbr></th>
                                            <th><abbr>Position</abbr></th>
                                            <th><abbr>Structure</abbr></th>
                                            <th><abbr>Service</abbr></th>
                                            <th><abbr>Poste</abbr></th>
                                            <th><abbr>Grade</abbr></th>
                                            <th><abbr>Qualification</abbr></th>
                                            <th><abbr>Categorie</abbr></th>
                                            <th><abbr>Section</abbr></th>
                                            <th><abbr>Date Entrée</abbr></th>
                                            <th><abbr>Motif Entrée</abbr></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['status']; ?></td>
                                            <td><?php echo $row['position']; ?></td>
                                            <td><?php echo $row['structure']; ?></td>
                                            <td><?php echo $row['service']; ?></td>
                                            <td><?php echo $row['poste']; ?></td>
                                            <td><?php echo $row['grade']; ?></td>
                                            <td><?php echo $row['qualif']; ?></td>
                                            <td><?php echo $row['categorie']; ?></td>
                                            <td><?php echo $row['section']; ?></td>
                                            <td><?php echo $row['date_entre']; ?></td>
                                            <td><?php echo $row['motif_entre']; ?></td>
                                        </tr>
                                    </tbody>

                            </div>
                    <?php
                                            }
                                        }
                    ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

    </section>

</body>

</html>