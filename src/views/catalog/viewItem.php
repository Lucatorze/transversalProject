<!DOCTYPE html>

<html lang="fr">
<head>
    <title>Game Blenders - home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/style-display.css">
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
                <li><a href="/offers/intro/">&Eacute;CHANGER</a></li>
                <li><a href="/catalog/listCat/"><span>LE CATALOGUE</span></a></li>
                <li><a href="/event/list/">NOS &Eacute;V&Eacute;NEMENTS</a></li>
                <li><a href="/test/list/">TEST</a></li>
                <li><a href="#">FORUM</a></li>
                <?php if(isset($_SESSION['admin']) || isset($_SESSION['modo'])){ ?><li><a href="/admin/home/">ADMINISTRATION</a><br></li><?php } ?>
            </ul>
        </div>

    </header>

    <section>
        <div class="section-menu">
            <?php foreach($getCategories as $result):?>
                <a href="/catalog/listItem/<?php echo $result['id']?>"><?php echo $result['name']?></a>
            <?php endforeach; ?>
        </div>
        <div class="banner">
            <img src="/assets/img/banniere.png" width="100%" alt="Banniere">
        </div>

        <div class="produit">
            <img class="produit-img" src="/upload/catalog/<?php echo $getItems['view']; ?>.jpg" alt="Romolo">
            <h1 class="produit-title"><?php echo $getItems['name']; ?></h1>
            <p class="produit-info"><?php echo $getItems['description']; ?></p>
            <hr>
            <div class="produit-reso">
                <a href="#"><img class="produit-facebook" src="/assets/img/facebook.png" alt="Facebook"></a>
                <a href="#"><img class="produit-twitter" src="/assets/img/twitter.png" alt="Twitter"></a>
                <a href="#"><img class="produit-insta" src="/assets/img/inta.png" alt="Instagram"></a>
            </div>
            <a href="#"><button class="produit-btn">LOUER OU &Eacute;CHANGER</button></a>
            <div class="produit-preview">
                <img src="/assets/img/mini1.png" alt="Picto">
                <img src="/assets/img/mini2.png" alt="Picto">
                <img src="/assets/img/mini3.png" alt="Picto">
                <img src="/assets/img/mini4.png" alt="Picto">
            </div>
        </div>
        <div class="produit-tech">
            <h2>Fiche technique</h2>
            <hr>
            <p>langue : Fran&ccedil;ais</p>
            <p>Age : <?php echo $getItems['age']; ?>+</p>
            <p>Nombre de joueurs : jusqu'&agrave; <?php echo $getItems['players']; ?> joueurs</p>
            <p>Dur&eacute;e d'une partie : <?php echo $getItems['time']; ?> minutes</p>
        </div>

        <h3>Vous aimeriez aussi :</h3>
        <hr>

        <div class="article">
            <div class="background-img">
                <img src="/assets/img/amun.png" alt="Amun">
            </div>
            <div class="background-info">
                <p class="article-title">AMUN-RE</p>
                <p class="article-text">Incarnez un pharaon et entrez dans<br>
                    l’Histoire en construisant des pyramides !</p>
                <a href="#"><button class="btn">LOUER OU &Eacute;CHANGER</button></a>
            </div>
        </div>
        <div class="article">
            <div class="background-img">
                <img src="/assets/img/descent.png" alt="Descent">
            </div>
            <div class="background-info">
                <p class="article-title">DESCENT : A L'ETAT SAUVAGE</p>
                <p class="article-text">Pillez le magot Kobold ! Voyages dans les Ténèbres (2eme Edition).</p>
                <a href="#"><button class="btn">LOUER OU &Eacute;CHANGER</button></a>
            </div>
        </div>
    </section>


    <footer>
        <div class="footer-menu">
            <ul>
                <a href="#"><li>Contactez-nous</li></a>
                <a href="#"><li>Accueil</li></a>
                <a href="#"><li>Desscription</li></a>
                <a href="#"><li>R&eacute;seaux sociaux</li></a>
                <a href="#"><li>&Agrave; Propos</li></a>
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

