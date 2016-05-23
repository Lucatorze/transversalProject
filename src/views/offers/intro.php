<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Game Blenders</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/style-echange.css">
    <script src="/assets/jquery.min.js"></script>
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
                    <li><a href="/test/list/">Test</a></li>
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
                <li><a href="/offers/intro/"><span>&Eacute;CHANGER</span></a></li>
                <li><a href="/catalog/listCat/">LE CATALOGUE</a></li>
                <li><a href="/event/list/">NOS &Eacute;V&Eacute;NEMENTS</a></li>
                <li><a href="/test/list/">TEST</a></li>
                <li><a href="#">FORUM</a></li>
                <?php if(isset($_SESSION['admin']) || isset($_SESSION['modo'])){ ?><li><a href="/admin/home/">ADMINISTRATION</a><br></li><?php } ?>
            </ul>
        </div>

    </header>

    <section>
        <div class="title">
            <img class="title-element-desk" src="/assets/img/figure_left.png" alt="decors">
            <img class="title-element-mobil" src="/assets/img/losange.png" alt="decors">
            <h1 class="title-element">COMMENT ÇA MARCHE ?</h1>
            <img class="title-element-mobil" src="/assets/img/losange.png" alt="decors">
            <img class="title-element-desk" src="/assets/img/figure_right.png" alt="decors">
        </div>
        <div class="large">
            <div class="article" id="user">
                <div class="background-img">
                    <img class="article-img" id="first" src="/assets/img/useur.png" alt="decors">
                </div>
                <div class="background-info">
                    <p class="article-title">SE CONNECTER</p>
                    <p class="article-text">Connectez-vous à votre profil, puis rendez-vous sur le catalogue.</p>
                </div>
            </div>
            <div class="article" id="spades">
                <div class="background-img">
                    <img class="article-img" src="/assets/img/spades.png" alt="decors">
                </div>
                <div class="background-info">
                    <p class="article-title">CHOISIR SON JEU</p>
                    <p class="article-text">Trouvez votre jeu dans le catalogue, puis choisissez si vous voulez l‘échanger ou le louer.</p>
                </div>
            </div>
            <div class="article" id="cards">
                <div class="background-img">
                    <img class="article-img" src="/assets/img/cards.png" alt="decors">
                </div>
                <div class="background-info">
                    <p class="article-title">LA CAUTION</p>
                    <p class="article-text">Remplissez le formulaire de paiement puis payer le caution.</p>
                </div>
            </div>
        </div>

        <div class="title" id="title-first">
            <img class="title-element-desk" src="/assets/img/figure_left.png" alt="decors">
            <img class="title-element-mobil" src="/assets/img/losange.png" alt="decors">
            <h1 class="title-element">ON PARLE DE NOUS</h1>
            <img class="title-element-mobil" src="/assets/img/losange.png" alt="decors">
            <img class="title-element-desk" src="/assets/img/figure_right.png" alt="decors">
        </div>
        <div class="temoin">
            <p class="article-title">Un site pratique, efficace et simple d‘utilisation. Il m‘a permit de découvrir une
                multitude de nouveaux jeux. J‘ai aussi rencontré des personnes passionées
                par les jeux de sociétés et pu passé des soirées délirantes grâce à eux !</p>
            <p class="credit"><span>Lucas</span>, joueur à Paris</p>
        </div>
        <img class="next-left" src="/assets/img/fleche-left.png" alt="decors">
        <img class="next-right" src="/assets/img/fleche-right.png" alt="decors">
    </section>
    <footer>
        <div class="footer-menu">
            <ul>
                <a href="#"><li>Contactez-nous</li></a>
                <a href="#"><li>Accueil</li></a>
                <a href="#"><li>Desscription</li></a>
                <a href="#"><li>Réseaux sociaux</li></a>
                <a href="#"><li>À Propos</li></a>
                <a href="#"><li>FAQ</li></a>
                <a href="#"><li>Qui sommes nous ?</li></a>
            </ul>
        </div>
        <br><br>
        <hr>
        <div class="newsletter">
            <p>Entrez votre adresse mail,</p>
            <p>pour recevoir notre newsletters :</p>
            <form>
                <input type="text" placeholder="Adresse Mail">
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </footer>
</main>
</body>

<script type="text/javascript">
    (function($){

        $('#header__icon').click(function(e){
            e.preventDefault();
            $("#menu").addClass("menu-on");
        });
        $('#cache').click(function(e){
            e.preventDefault();
            $("#menu").removeClass("menu-on");
        });

    })(jQuery);
</script>

</html>
