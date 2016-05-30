<!DOCTYPE html>
<html lang="en">
<head>
    <title>Game Blenders</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/arborescence.css">
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
                        <li><a href="/">Accueil</a></li>
                        <li><a href="/offers/intro/">&Eacute;changer</a></li>
                        <li><a href="/catalog/listCat/">Le catalogue</a></li>
                        <li><a href="/event/list/">Nos &eacute;venements</a></li>
                        <li><a href="/test/list/">Test</a></li>
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
                    <li><a href="/catalog/listCat/">LE CATALOGUE</a></li>
                    <li><a href="/event/list/">NOS &Eacute;V&Eacute;NEMENTS</a></li>
                    <li><a href="/test/list/">TEST</a></li>
                    <?php if(isset($_SESSION['admin']) || isset($_SESSION['modo'])){ ?><li><a href="/admin/home/">ADMINISTRATION</a><br></li><?php } ?>
                </ul>
            </div>
        </header>