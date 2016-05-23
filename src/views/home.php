<!DOCTYPE html>

<html lang="fr">
<head>


    <title>Game Blenders - home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/style.css">
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
                    <li><a href="/offers/list/">Échanger</a></li>
                    <li><a href="/catalog/listCat/">Le catalogue</a></li>
                    <li><a href="/event/list/">Nos évenements</a></li>
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
                <li><a href="/"><span>ACCUEIL</span></a></li>
                <li><a href="/offers/intro/">&Eacute;CHANGER</a></li>
                <li><a href="/catalog/listCat/">LE CATALOGUE</a></li>
                <li><a href="/event/list/">NOS &Eacute;V&Eacute;NEMENTS</a></li>
                <li><a href="/test/list/">TEST</a></li>
                <li><a href="#">FORUM</a></li>
                <?php if(isset($_SESSION['admin']) || isset($_SESSION['modo'])){ ?><li><a href="/admin/home/">ADMINISTRATION</a><br></li><?php } ?>
            </ul>
        </div>

        <div class="apropo">
            <div class="apropo-background"></div>
            <div class="apropo-content">
                <div class="title">
                    <img class="title-element-mobil" src="assets/img/losange-top.png" alt="figure_left">
                    <img class="title-element-desk" src="assets/img/figure_left_top.png" alt="figure_left_top">
                    <h1 class="title-element">A PROPOS DE NOUS</h1>
                    <img class="title-element-desk" src="assets/img/figure_right_top.png" alt="figure_left">
                    <img class="title-element-mobil" src="assets/img/losange-top.png" alt="figure_left">
                </div>
                <p class="apropo-intro">Game Blenders est la premi&egrave;re ludoth&egrave;que num&eacute;rique fran&ccedil;aise.<br>
                    Grace a notre site vous ferez partis d&#145;une communaut&eacute; passion&eacute;e par les jeux de soci&eacute;t&eacute;s.</p>
                <br><br>
                <p class="apropo-text">Game Blenders vous propose de louer ou d&#145;&eacute;changer des jeux de soci&eacute;t&eacute;s de<br>
                    diverses cat&eacute;gories et pour tous les &acirc;ges.</p>
                <br><br>
                <p class="apropo-text">Notre comunaut&eacute; vous propose de rencontrer des passion&eacute;s et
                    de participer &agrave; des &eacute;v&eacute;nements sp&eacute;cialis&eacute;s organis&eacute; pas nos soins ! </p>
                <br><br>
                <a class="apropo-btn" href="/offers/list/"><button class="btn">LOUER OU &Eacute;CHANGER</button></a>
            </div>
        </div>
    </header>

    <section>
        <div class="article-top">
            <div class="title">
                <img class="title-element-mobil" src="assets/img/losange.png" alt="figure_left">
                <img class="title-element-desk" src="assets/img/figure_left.png" alt="figure_left">
                <h1 class="title-element">LES NOUVEAUT&Eacute;S</h1>
                <img class="title-element-desk" src="assets/img/figure_right.png" alt="figure_left">
                <img class="title-element-mobil" src="assets/img/losange.png" alt="figure_left">
            </div>
            <h2>D&eacute;couvrez les derniers jeux que vous pouvez louer ou &eacute;changer !</h2>

            <?php foreach($getLastCatalog as $result):

                $description = substr($result['description'], 0, 120);

                ?>
                <div class="article">
                    <div class="background-img">
                        <img src="/upload/catalog/<?php echo $result['view'] ?>.jpg" alt="Amun">
                    </div>
                    <div class="background-info">
                        <h3><?php echo $result['name']?></h3>
                        <p><?php echo $description;?> ... </p>
                    </div>
                    <a href="/catalog/viewItem/<?php echo $result['id'] ?>"><button class="btn">LOUER OU &Eacute;CHANGER</button></a>
                </div>

            <?php endforeach; ?>

        </div>
        <div class="article-bottom">
            <div class="title">
                <img class="title-element-mobil" src="assets/img/losange.png" alt="figure_left">
                <img class="title-element-desk" src="assets/img/figure_left.png" alt="figure_left">
                <h1 class="title-element">LA LUDOTH&Egrave;QUE</h1>
                <img class="title-element-desk" src="assets/img/figure_right.png" alt="figure_right">
                <img class="title-element-mobil" src="assets/img/losange.png" alt="figure_left">
            </div>
            <div class="stat">
                <div class="stat-element">
                    <img class="stat-img" src="assets/img/coeur.png" alt="Coeur">
                    <p class="stat-title">Personnes qui nous suivent :</p>
                    <p class="stat-number">549</p>
                </div>
                <div class="stat-element">
                    <img class="stat-img" src="assets/img/people.png" alt="People">
                    <p class="stat-title">Personnes inscrites :</p>
                    <p class="stat-number"><?php echo $countUsers['countid']; ?></p>
                </div>
                <div class="stat-element">
                    <img class="stat-img" src="assets/img/check.png" alt="Check">
                    <p class="stat-title">Jeux &eacute;changer et louer :</p>
                    <p class="stat-number"><?php echo $countOffers['countid']; ?></p>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="footer-menu">
            <ul>
                <a href="#"><li>Contactez-nous</li></a>
                <a href="/"><li>Accueil</li></a>
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