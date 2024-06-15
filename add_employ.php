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

                    <h1 class="title is-9">Identification</h1>

                    <div class="field is-horizontal">

                        <div class="field-label is-normal">
                            <label class="label">Matricul</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" type="number" name="mat_emp" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-id-badge"></i>
                                    </span>
                                </p>
                            </div>

                            <div class="field-label is-normal">
                                <label class="label">ID</label>
                            </div>
                            <div class="field">
                                <p class="control has-icons-left ">
                                    <input class="input " type="number" name="id_emp" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-id-card-clip"></i>
                                    </span>
                                </p>
                            </div>

                            <div class="field-label is-normal">
                                <label class="label">SSN</label>
                            </div>
                            <div class="field">
                                <p class="control has-icons-left ">
                                    <input class="input" type="text" name="ssn" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-person-military-to-person"></i>
                                    </span>
                                </p>
                            </div>


                        </div>
                    </div>

                    <div class="field is-horizontal">

                        <div class="field-label is-normal">
                            <label class="label">Nom</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" type="text" name="nom_emp" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </p>
                            </div>

                            <div class="field-label is-normal">
                                <label class="label">Prenom</label>
                            </div>
                            <div class="field">
                                <p class="control  has-icons-left ">
                                    <input class="input " type="text" name="prenom_emp" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </p>
                            </div>

                            <div class="field-label is-normal">
                                <label class="label">Sexe</label>
                            </div>
                            <div class="field">
                                <p class="control">
                                <div class="select">
                                    <select name="gender" required>
                                        <option>--Choisir--</option>
                                        <option value="homme">HOMME</option>
                                        <option value="femme">FEMME</option>
                                    </select>
                                </div>
                                </p>
                            </div>


                        </div>
                    </div>


                    <div class="field is-horizontal">

                        <div class="field-label is-normal">
                            <label class="label">Date de naissance</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control  has-icons-left">
                                    <input class="input" type="date" name="dtn" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-calendar-circle-user"></i>
                                    </span>
                                </p>
                            </div>

                            <div class="field-label is-normal">
                                <label class="label">Situation familial</label>
                            </div>
                            <div class="field">
                                <p class="control">
                                <div class="select">
                                    <select name="sit_fam" required>
                                        <option>--Choisir--</option>
                                        <option value="Célibataire">Célibataire</option>
                                        <option value="Marié(e)">Marié(e)</option>
                                        <option value="Séparé(e)">Séparé(e)</option>
                                        <option value="Divorcé(e)">Divorcé(e)</option>
                                        <option value="Veuf(ve)">Veuf(ve)</option>
                                    </select>
                                </div>
                                </p>
                            </div>

                            <div class="field-label is-normal">
                                <label class="label">Nombre d'enfant</label>
                            </div>
                            <div class="field">
                                <p class="control  has-icons-left">
                                    <input class="input" type="number" name="nbr_enfnt" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-baby"></i>
                                    </span>
                            </div>


                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Invalidité</label>
                        </div>
                        <div class="field">
                            <p class="control  has-icons-left">
                                <input class="input" type="text" name="invld" required>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-wheelchair"></i>
                                </span>
                        </div>
                    </div>

                    <h1 class="title is-9">Status</h1>

                    <div class="field is-horizontal">

                        <div class="field-label is-normal">
                            <label class="label">Status</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                <div class="select">
                                    <select name="stat" required>
                                        <option>--Choisir--</option>
                                        <option value="Mensuel">Mensuel</option>
                                        <option value="Horaire">Horaire</option>
                                        <option value="Journalier">Journalier</option>
                                        <option value="Expatrier">Expatrier</option>
                                        <option value="Forfait">Forfait</option>
                                    </select>
                                </div>
                                </p>
                            </div>

                            <div class="field-label is-normal">
                                <label class="label">Position</label>
                            </div>
                            <div class="field">
                                <p class="control has-icons-left">
                                <div class="select">
                                    <select name="pos" required>
                                        <option>--Choisir--</option>
                                        <option value="Actif">Actif</option>
                                        <option value="Bloqué">Bloqué</option>
                                        <option value="Retraite">Retraite</option>
                                        <option value="Congé">Congé</option>
                                        <option value="Démission">Démission</option>
                                        <option value="Licenciment">Licenciment</option>
                                        <option value="Mise_a_pied">Mise a pied</option>
                                        <option value="Mtation">Mutation</option>
                                        <option value="Fin_de_contrat">Fin de contrat</option>
                                        <option value="Abondon_de_poste">Abondon de poste</option>
                                        <option value="Décé">Décé</option>
                                        <option value="Invalide">Invalide</option>
                                        <option value="Suspendu">Suspendu</option>
                                        <option value="Congé_maladie">Congé maladie</option>
                                        <option value="Congé_maternité">Congé maternité</option>
                                        <option value="Congé_special">Congé special</option>
                                        <option value="Mise_en_disponibilité">Mise en disponibilité</option>
                                    </select>
                                </div>
                                </p>
                            </div>

                            <div class="field-label is-normal">
                                <label class="label">Structure</label>
                            </div>
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" type="text" name="strc" required>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-folder-tree"></i>
                                    </span>
                                </p>
                            </div>


                        </div>
                    </div>

                    <div class="field is-horizontal">

                        <div class="field-label is-normal">
                            <label class="label">Service</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" type="text" name="srv" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </p>
                            </div>

                            <div class="field-label is-normal">
                                <label class="label">Poste</label>
                            </div>
                            <div class="field">
                                <p class="control  has-icons-left">
                                    <input class="input " type="text" name="pst" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </p>
                            </div>

                            <div class="field-label is-normal">
                                <label class="label">Grade</label>
                            </div>
                            <div class="field">
                                <p class="control">
                                <div class="select">
                                    <select name="grd" required>
                                        <option>--Choisir--</option>
                                        <option value="Execution">Execution</option>
                                        <option value="Maitrise">Maitrise</option>
                                        <option value="Cadre">Cadre</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="field is-horizontal">

                        <div class="field-label is-normal">
                            <label class="label">Qualification</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control  has-icons-left">
                                <div class="select">
                                    <select name="qlf" required>
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
                                </p>
                            </div>

                            <div class="field-label is-normal">
                                <label class="label">Categorie</label>
                            </div>
                            <div class="field">
                                <p class="control">
                                <div class="select">
                                    <select name="ctgr" required>
                                        <option>--Choisir--</option>
                                        <option value="e1">E1</option>
                                        <option value="e2">E2</option>
                                        <option value="e3">E3</option>
                                        <option value="e4">E4</option>
                                        <option value="e5">E5</option>
                                        <option value="e6">E6</option>
                                        <option value="e7">E7</option>
                                        <option value="m1">M1</option>
                                        <option value="m2">M2</option>
                                        <option value="m3">M3</option>
                                        <option value="m4">M4</option>
                                        <option value="m5">M5</option>
                                        <option value="m6">M6</option>
                                        <option value="m7">M7</option>
                                        <option value="c1">C1</option>
                                        <option value="c2">C2</option>
                                        <option value="c3">C3</option>
                                        <option value="c4">C4</option>
                                        <option value="c5">C5</option>
                                        <option value="c6">C6</option>
                                        <option value="c7">C7</option>
                                    </select>
                                </div>
                                </p>
                            </div>

                            <div class="field-label is-normal">
                                <label class="label">Section</label>
                            </div>
                            <div class="field">
                                <p class="control  has-icons-left">
                                    <input class="input" type="text" name="sctn" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-section"></i>
                                    </span>
                            </div>


                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Date entré</label>
                        </div>
                        <div class="field">
                            <p class="control  has-icons-left">
                                <input class="input" type="date" name="dtne" required>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-calendar"></i>
                                </span>
                        </div>

                        <div class="field-label is-normal">
                            <label class="label">Motif entré</label>
                        </div>
                        <div class="field">
                            <p class="control  has-icons-left">
                                <input class="input" type="text" name="motif" required>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-certificate"></i>
                                </span>
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



<?php

$connect = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connect, 'saidal');

mysqli_set_charset($connect, "utf8");

if (isset($_POST['add'])) {

    $mat_emp = $_POST['mat_emp'];
    $id_emp = $_POST['id_emp'];
    $ssn = $_POST['ssn'];
    $nom_emp = $_POST['nom_emp'];
    $prenom_emp = $_POST['prenom_emp'];
    $gender = $_POST['gender'];
    $dtn = $_POST['dtn'];
    $sit_fam = $_POST['sit_fam'];
    $nbr_enf = $_POST['nbr_enfnt'];
    $invl = $_POST['invld'];
    $statu = $_POST['stat'];
    $position = $_POST['pos'];
    $tructur = $_POST['strc'];
    $service = $_POST['srv'];
    $post = $_POST['pst'];
    $grade = $_POST['grd'];
    $qualif = $_POST['qlf'];
    $category = $_POST['ctgr'];
    $section = $_POST['sctn'];
    $date_entre = $_POST['dtne'];
    $motif_entre = $_POST['motif'];

    $query = " INSERT INTO `employer`(`id`, `mat`, `nom`, `prenom`, `ssn`, `sexe`, `sf`, `date_nais`, `nbr_enft`, `invalid`, `status`, `position`, `structure`, `service`, `poste`, `grade`, `qualif`, `categorie`, `section`, `date_entre`, `motif_entre`)
    VALUES ('$mat_emp','$id_emp','$nom_emp','$prenom_emp','$ssn','$gender','$sit_fam','$dtn','$nbr_enf','$invl','$statu','$position','$tructur','$service','$post','$grade','$qualif','$category','$section','$date_entre','$motif_entre')";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        echo "<script type='text/javascript'>alert('Employer Ajouter');</script>";
    }
}
