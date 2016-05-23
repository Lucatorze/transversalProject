<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Game Blenders - home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/style-list.css">
    <link rel="stylesheet" href="/assets/css/jquery.flexdatalist.min.css">
    <script src="/assets/js/jquery-2.2.2.min.js"></script>
    <script src="/assets/js/jquery.flexdatalist.min.js"></script>


</head>
<body>
<main role="main">
    <header>
        <div class="header-menu">

            <a href="#" class="header__icon" id="header__icon"></a>
            <nav class="menu" id="menu">
                <div id="cache"></div>

                <ul>
                    <li><a href="/"><span>Accueil</span></a></li>
                    <li><a href="/offers/list/">&Eacute;changer</a></li>
                    <li><a href="/catalog/listCat/">Le catalogue</a></li>
                    <li><a href="/event/list/">Nos &eacute;venements</a></li>
                    <li><a href="#">Test</a></li>
                    <li><a href="#">Forum</a></li>
                    <?php if(isset($_SESSION['admin']) || isset($_SESSION['modo'])){ ?><li><a href="/admin/home/">Administration</a><br></li><?php } ?>
                </ul>
            </nav>
            <ul class="reseaux">
                <li><a href="#">FACEBOOK</a></li>
                <li><a href="#">TWITTER</a></li>
                <li><a href="#">INSTAGRAM</a></li>
            </ul>
            <ul class="user">
                <?php if(isset($_SESSION['userId'])){ ?>

                    <li><a href="/privateMsg/myMsg/">MESSAGE PRIVE (<?php echo $getMP['countid']; ?>)</a> </li>
                    <li><a href="/users/profile/">PROFILE</a> </li>
                    <li><a href="/users/usersList/">LISTE DES MEMBRES</a> </li>
                    <li><a href="/users/logout/">SE DECONNECTER</a> </li>
                    <?php
                }
                else{
                    ?>

                    <li><a href="/users/login/">SE CONNECTER</a></li>
                    <li>/</li>
                    <li><a href="/users/register/">S'INSCRIRE</a></li>

                    <?php
                }
                ?>


            </ul>
        </div>

        <div class="header-submenu">
            <ul>
                <li><a href="/">ACCUEIL</a></li>
                <li><a href="/offers/intro/">&Eacute;CHANGER</a></li>
                <li><a href="/catalog/listCat/"><span>LE CATALOGUE</span></a></li>
                <li><a href="/event/list/">NOS &Eacute;V&Eacute;NEMENTS</a></li>
                <li><a href="#">TEST</a></li>
                <li><a href="#">FORUM</a></li>
                <?php if(isset($_SESSION['admin']) || isset($_SESSION['modo'])){ ?><li><a href="/admin/home/">ADMINISTRATION</a><br></li><?php } ?>
            </ul>
        </div>

    </header>

    <?php
if(isset($_SESSION['admin'])){
    ?>

    <a href="/admin/home">Administration</a>

    <h1>Ajouter un article dans le catalogue</h1>

    <form name="catalogForm" enctype="multipart/form-data" method="POST" action="/catalog/addItem/">
        <label for="name">Nom du jeu : </label><br>
        <input type="text" name="name" id="name"><br>
        <br>

        <label for="type">Type du jeu :</label><br>
        <select name="type" id="type">
            <option value="Jeu de plateau">Jeu de plateau</option>
            <option value="Jeu de dés">Jeu de dés</option>
            <option value="Jeu de cartes">Jeu de cartes</option>
            <option value="Jeu de stratégie">Jeu de stratégie</option>
            <option value="Jeu coopératifs ou semi coopératifs">Jeu coopératifs ou semi coopératifs</option>
            <option value="Jeu de réflexion">Jeu de réflexion</option>
            <option value="Jeu d’ambiance">Jeu d’ambiance</option>
            <option value="Jeu d’adresse">Jeu d’adresse</option>
        </select><br>
        <br>

        <label for="releaseDate">Date de sortie : </label><br>
        <input type="date" name="releaseDate" id="releaseDate"><br>
        <br>

        <label for="players">Nombres de joueurs : </label><br>
        <input type="number" name="players" id="players"><br>
        <br>

        <label for="age">Age minimum : </label><br>
        <input type="number" name="age" id="age"><br>
        <br>

        <label for="time">Temps moyens (en minutes) : </label><br>
        <input type="number" name="time" id="time"><br>
        <br>

        <label>Aperçu du jeu : </label><br>
        <input type="file" name="view" id="view"><br>
        <br>

        <label for="description">Description du jeu : </label><br>
        <textarea name="description" id="description"></textarea><br>
        <br>

        <input type="submit" name="submit" value="envoyer">
    </form>

    <?php
}
else {

    ?>
    Vous être connecté en tant qu'administrateur pour accéder à cette page.<br>
    <a href="/">Home</a>
    <?php

}

include "./inc/footer.php";?>
