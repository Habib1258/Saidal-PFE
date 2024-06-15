<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" style="background-color:gainsboro ;">

<head>
    <title>login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/5eb8866ae7.js" crossorigin="anonymous"></script>
    <link href="css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.css">
</head>

<body>

    <section class="hero is-fullheight">

        <div class="hero-body">

            <div class="container">
                <div class="logo columns is-centered is-4">
                    <img src="img/Saidal.png" width="150" height="100" class=" ">
                </div>

                <div class="columns is-centered is-3-widescreen">

                    <form action="check_dash.php" method="POST" class="box">

                        <h1 class="title is-9">Connectez-vous</h1>

                        <div class="field">
                            <label for="" class="label">Matricule</label>
                            <div class="control has-icons-left">
                                <input class="input is-focused" type="number" name="matri" placeholder="Matricule" required>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </div>
                        </div>

                        <div class="field">
                            <label for="" class="label">ID</label>
                            <div class="control has-icons-left">
                                <input class="input is-focused" type="number" name="identi" placeholder="Identifiant" required>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                        </div>

                        <div class="field">
                            <input class="button is-success" type="submit" name="submit" value="Se connecter">
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>

</body>

</html>