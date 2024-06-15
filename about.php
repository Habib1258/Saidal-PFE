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
                <a class="navbar-item" href="about.php">
                    Nous Connaitre
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <form method="GET">
                        <button class="button is-danger" name="logout">Se Déconnecter</button>
                    </form>

                </div>
                <?php

                if (isset($_GET['logout'])) {
                    session_destroy();
                    header('location: index_A.php');
                }

                ?>
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

                        <a class="button is-normal  is-instagram is-warning" href="">
                            <span class="icon">
                                <i class="fab fa-instagram fa-lg"></i>
                            </span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end nav -->


    <!-- SECTION -->
    <section class="hero is-fullheight has-background-grey-lighter">
        <div class="hero-body">

            <div class="container">
                <div class="columns is-centered">
                    <div class="slogan column is-full">
                        <img src="img/about.jpg" alt="banner">
                    </div>
                </div>

                <br>

                <div class="columns is-centered">


                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="img/about1.jpg">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">Le Groupe Saidal</p>
                                    </div>
                                </div>

                                <div class="content">
                                    <p>
                                        <strong>SAIDAL</strong> est le premier laboratoire pharmaceutique producteur de médicaments génériques en Algérie.
                                        Fondé en 1982 pour répondre au besoin d’assoir une industrie pharmaceutique locale à même de garantir la disponibilité
                                        des médicaments et améliorer l’accès des citoyens aux traitements, Saidal est aujourd’hui organisé en Groupe industriel
                                        spécialisé dans le développement, la production et la commercialisation des produits pharmaceutiques à usage humain.

                                        <strong>SAIDAL</strong> est une Société par actions, au capital de <strong>2 500 000 000</strong> dinars algériens. Cotée en bourse depuis <strong>1999</strong>,
                                        son capital est à 80% détenu par l’Etat et les 20 % restants sont détenus par des investisseurs institutionnels
                                        et des personnes physiques.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="img/about2.jpg">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">Notre Vision</p>
                                    </div>
                                </div>

                                <div class="content">
                                    <p>


                                        Nous aspirons aujourd’hui à consolider notre position de leader dans la production de médicaments génériques
                                        en Algérie et à devenir une référence incontournable et un partenaire de choix dans la région d’Afrique et du Moyen orient.
                                        Forts du soutien affiché par les Pouvoirs Publics et portés par nos compétences plurielles, nos capacités industrielles
                                        *nouvelles et notre notoriété, nous ambitionnons de réaliser nos objectifs de croissance et nous positionner comme acteur
                                        principal dans la concrétisation de la politique nationale du médicament.

                                        Nous mettons tous nos atouts au service du développement de notre activité en veillant constamment à enrichir notre gamme
                                        en y introduisant des produits à forte valeur ajoutée, à améliorer la compétitivité de nos produits et à adapter notre
                                        expertise aux besoins du marché et aux opportunités nouvelles. Convaincus de l’importance du partenariat que nous considérons
                                        comme levier principal de notre développement, nous œuvrons à multiplier nos alliances stratégiques nous permettant d’acquérir
                                        des savoirs faire à travers le transfert de technologie. Ce pourquoi nous cherchons à établir des partenariats fiables,
                                        solides et durables basés sur le respect, la confiance et le partage.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="img/about3.jpg">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">Nos Valeur</p>
                                    </div>
                                </div>

                                <div class="content">
                                    <p>
                                        " Notre dynamique nouvelle est imprégnée de valeurs partagées par l’ensemble des collaborateurs. "
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- end section -->

    <!-- footer -->

    <footer class="footer">
        <div class="content has-text-centered">
            <p class="title">
                <strong>Nous Contactez</strong>
            </p>
            <br>
            <div class="columns">
                <div class="column">


                    <div class="field is-horizontal">
                        <div class="field-body">
                            <div class="field">

                                <div class="box">
                                    <p class="subtitle is-4"><strong>Direction Générale</strong></p>
                                    <p class="subtitle">
                                        Route de wilaya n°11 BP 141 Dar El Beida – Alger
                                        <br>
                                        Tél :+213 23 92 01 76
                                        Fax : +213 23 92 01 78
                                    </p>
                                </div>

                                <div class="box">
                                    <p class="subtitle is-4"><strong>Direction de la Communication</strong></p>
                                    <p class="subtitle">
                                        Zone Industrielle Route de Baraki El Harrach –Alger-
                                        <br>
                                        Tél/Fax : +213 23 75 69 49
                                    </p>
                                </div>

                                <div class="box">
                                    <p class="subtitle is-4"><strong>Direction Marketing et Ventes</strong></p>
                                    <p class="subtitle">
                                        Zone Industrielle Route de Baraki El Harrach –Alger-
                                        <br>
                                        Tél/Fax : +213 23 75 69 49
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="column">


                    <div class="field-body">
                        <div class="field">

                            <div class="box">
                                <p class="subtitle is-4"><strong>Centre de Distribution Centre</strong></p>
                                <p class="subtitle">
                                    03 BVD Zone Industrielle Ben Boulaid
                                    09000-BLIDA
                                    <br>
                                    Tél: 025 23 39 31 / 0662 36 90 53

                                </p>
                            </div>

                            <div class="box">
                                <p class="subtitle is-4"><strong>Centre de distribution Ouest</strong></p>
                                <p class="subtitle">
                                    Avenue des grands invalides de la guerre de libération Es Sénia- Oran
                                    <br>
                                    Tél : +213 41 51 11 10
                                    Fax : +213 41 51 11 07

                                </p>
                            </div>

                            <div class="box">
                                <p class="subtitle is-4"><strong>Centre de Distribution Est</strong></p>
                                <p class="subtitle">
                                    Zone industrielle KECHIDA, BP 79 Benboulaid –Batna
                                    <br>
                                    Tél/Fax :033 92 40 77/33 92 14 78/77
                                </p>
                            </div>
                        </div>

                    </div>

                </div>






            </div>
        </div>
    </footer>

    <!-- end footer -->



    <!-- debut modals -->

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