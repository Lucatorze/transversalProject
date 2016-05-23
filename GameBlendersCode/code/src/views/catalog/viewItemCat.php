<!DOCTYPE html>

<html lang="fr">
<head>
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
        <div class="section-menu">
            <?php foreach($getCategories as $result):?>
                <a href="/catalog/listItem/<?php echo $result['id']?>"><?php echo $result['name']?></a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="banner">
        <img src="/assets/img/banniere.png" width="100%" alt="Banniere">
    </div>
    <div class="title">
        <img class="title-element-desk" src="/assets/img/figure_left.png" alt="decors">
        <img class="title-element-mobil" src="/assets/img/losange.png" alt="decors">
        <h1 class="title-element"><?php echo $getCategoriesName['name']; ?></h1>
        <img class="title-element-mobil" src="/assets/img/losange.png" alt="decors">
        <img class="title-element-desk" src="/assets/img/figure_right.png" alt="decors">
    </div>

        <?php
        if (!$getItemsList){

            ?>

            Aucun jeu &agrave; afficher<br>
            <br>

        <?php

        }
        else {

            foreach ($getItemsList as $result):?>
                <div class="article">
                    <div class="background-img">
                        <img src="/assets/img/amun.png" alt="Amun">
                    </div>
                    <div class="background-info">
                        <p class="article-title"><?php echo $result['name'] ?></p>
                        <p class="article-text"><?php echo $result['description'] ?></p>
                        <a href="/catalog/viewItem/<?php echo $result['id'] ?>">
                            <button class="btn">LOUER OU &Eacute;CHANGER</button>
                        </a>
                    </div>
                </div>
            <?php endforeach;
        }?>

    <div class="section-nav">
        <p>Page :</p>
        <ul>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
        </ul>
    </div>
</section>

    <footer>
        <div class="footer-menu">
            <ul>
                <a href="#"><li>Contactez-nous</li></a>
                <a href="#"><li>Accueil</li></a>
                <a href="#"><li>Description</li></a>
                <a href="#"><li>R&eacute;seaux sociaux</li></a>
                <a href="#"><li>&Aacute; Propos</li></a>
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
