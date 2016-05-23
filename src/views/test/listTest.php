<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Game Blenders - home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/style-test.css">
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
                <li><a href="/offers/list/">&Eacute;CHANGER</a></li>
                <li><a href="/catalog/listCat/">LE CATALOGUE</a></li>
                <li><a href="/event/list/">NOS &Eacute;V&Eacute;NEMENTS</a></li>
                <li><a href="#"><span>TEST</a></span></li>
                <li><a href="#">FORUM</a></li>
                <?php if(isset($_SESSION['admin']) || isset($_SESSION['modo'])){ ?><li><a href="/admin/home/">ADMINISTRATION</a><br></li><?php } ?>
            </ul>
        </div>

    </header>

    <section>
        <div class="decor">
            <img src="/assets/img/Losange_gauche.png" alt="Deco" class="losange">
            <h1>&nbsp;&nbsp; NOS TESTS &nbsp;&nbsp;</h1>
            <img src="/assets/img/Losange_droit.png" alt="Deco" class="losange">
        </div>

        <div class="block">
            <img src="/assets/img/dd1.png" alt="Dungeons Dragon" class="picture">
            <h2>DUNGEONS & DRAGONS</h2><img src="/assets/img/ddnotation.png" alt="notation" class="notation">
            <p class="black">Édité par Parker Brothers et Hasbro.</p>
            <p class="black">Sorti le 2 novembre 2003</p>
            <table>
                <tr>
                    <td>Nombre de joueurs</td>
                    <td>Age</td>
                    <td>Durée</td>
                </tr>
                <tr>
                    <td class="bold-number">2 à 5</td>
                    <td class="bold-number">10 +</td>
                    <td class="bold-number">1 heure ~</td>
                </tr>
            </table>
            <p class="description">Un jeu idéal pour débuter votre quête et passer le cap de novice sur les jeux de
                plateau. Une version
                plaisante, simple et rapide. A essayer sans plus attendre!</p>
            <table class="table_tablet">
                <tr>
                    <td class="bold-number"><img src="/assets/img/check.png" alt="check">43</td>
                    <td class="bold-number"><img src="/assets/img/location.png" alt="location">4</td>
                    <td class="bold-number"><img src="/assets/img/pin.png" alt="pin">27</td>
                </tr>
                <tr>
                    <td>membres y ont joué</td>
                    <td>membres le loue</td>
                    <td>membres le veulent</td>
                </tr>
            </table>
        </div>
        <div class="block">
            <img src="/assets/img/risk.png" alt="Risk" class="picture">
            <h2>RISK : GAME OF THRONES</h2><img src="/assets/img/risknotation.png" alt="notation" class="notation">
            <p class="black">Par Albert Lamorisse, Édité par USAopoly.</p>
            <p class="black">Sortie : 24 juil. 2015.</p>
            <table>
                <tr>
                    <td>Nombre de joueurs</td>
                    <td>Age</td>
                    <td>Durée</td>
                </tr>
                <tr>
                    <td class="bold-number">2 à 7</td>
                    <td class="bold-number">18 +</td>
                    <td class="bold-number">2 heure ~</td>
                </tr>
            </table>
            <p class="description">Réadaptation du célèbre jeu de plateau stratégique version Game of Thrones! Une
                version qui ravira
                sûrement les fans de la série. Partez conquérir Westeros!</p>
            <table>
                <tr>
                    <td class="bold-number"><img src="/assets/img/check.png" alt="check">22</td>
                    <td class="bold-number"><img src="/assets/img/location.png" alt="location">2</td>
                    <td class="bold-number"><img src="/assets/img/pin.png" alt="pin">27</td>
                </tr>
                <tr>
                    <td>membres y ont joué</td>
                    <td>membres le loue</td>
                    <td>membres le veulent</td>
                </tr>
            </table>
        </div>
        <div class="block">
            <img src="/assets/img/ashes.png" alt="Ashes" class="picture">
            <h2>A.S.H.E.S : RISE OF THE PHOENIXBORN</h2><img src="/assets/img/ashesnotation.png" alt="notation"
                                                             class="notation">
            <p class="black">Par Isaac Vega, Ilustré par Fernanda Suarez.
                Édité par Plaid Hat Games.</p>
            <p class="black">Sortie le 16 avr. 2015</p>
            <table>
                <tr>
                    <td>Nombre de joueurs</td>
                    <td>Age</td>
                    <td>Durée</td>
                </tr>
                <tr>
                    <td class="bold-number">2 à 4</td>
                    <td class="bold-number">14 +</td>
                    <td class="bold-number">75 minutes ~</td>
                </tr>
            </table>
            <p class="description">Un jeu original avec des decks et des combos préconstruits. Choississez votre classe
                préférer et montre à
                vos adversaire qui est le meilleur.</p>
            <table>
                <tr>
                    <td class="bold-number"><img src="/assets/img/check.png" alt="check">34</td>
                    <td class="bold-number"><img src="/assets/img/location.png" alt="location">5</td>
                    <td class="bold-number"><img src="/assets/img/pin.png" alt="pin">7</td>
                </tr>
                <tr>
                    <td>membres y ont joué</td>
                    <td>membres le loue</td>
                    <td>membres le veulent</td>
                </tr>
            </table>
        </div>
    </section>

</main>
</body>

<script type="text/javascript">
    (function ($) {

        $('#header__icon').click(function (e) {
            e.preventDefault();
            $("#menu").addClass("menu-on");
        });
        $('#cache').click(function (e) {
            e.preventDefault();
            $("#menu").removeClass("menu-on");
        });

    })(jQuery);
</script>

</html>
