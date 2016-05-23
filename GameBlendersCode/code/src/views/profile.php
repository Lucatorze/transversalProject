<!DOCTYPE html>

<html lang="fr">
<head>

    <meta charset="UTF-8">
    <title>Game Blenders - home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/style-profil.css">
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
                <li><a href="/offers/list/">ÉCHANGER</a></li>
                <li><a href="/catalog/listCat/">LE CATALOGUE</a></li>
                <li><a href="/event/list/">NOS ÉVÉNEMENTS</a></li>
                <li><a href="/test/list/">TEST</a></li>
                <li><a href="#">FORUM</a></li>
                <?php if(isset($_SESSION['admin']) || isset($_SESSION['modo'])){ ?><li><a href="/admin/home/">ADMINISTRATION</a><br></li><?php } ?>
            </ul>
        </div>

    </header>
<?php
if(!isset($_SESSION['userId'])){
    ?>
    Vous ne pouvez pas accéder à cette page en étant deconnecté.<br>
    <a href="/">Home</a>
    <?php
}
else {
?>

    <div class="registration">
        <h1>Mon Profil</h1>
        <p class="bonjour">Bonjour <?php echo $getProfile['nickname']; ?></p>
        <p class="profil-intro">Vous pouvez consulter l'historique de vos commandes et gérer vos données personnelle. <br>Choisissez "modifier" pour actualiser vos informations personnelles.</p>
        <table><tr class="profil-br-top"><td><p class="left">Dernières Locations</p><p class="right">Tout afficher</p></td></tr></table><br>
        <table>
            <tr class="profil-br">
                <td><p>Locations</p></td>
                <td><p>Passé le</p></td>
                <td><p>Livraison</p></td>
                <td><p>Envoyée</p></td>
                <td><p>Caution</p></td>
            </tr>
            <tr class="profil-smp">
                <td class="smp-c1"><p>Locations n1</p></td>
                <td class="smp-c2"><p>Le :</p></td>
                <td class="smp-c3"><p>Reçu</p></td>
                <td class="smp-c4"><p>Envoyée</p></td>
                <td class="smp-c5"><p>Payé</p></td>
            </tr>
            <tr class="profil-smp">
                <td class="smp-c1"><p>Locations n2</p></td>
                <td class="smp-c2"><p>Le :</p></td>
                <td class="smp-c3"><p>Reçu</p></td>
                <td class="smp-c4"><p>Envoyée</p></td>
                <td class="smp-c5"><p>Payé</p></td>
            </tr>
        </table><br>
        <table>
            <tr class="profil-br-top"><td><p class="left">Dernier Echanges</p><p class="right">Tout afficher</p></td></tr>
        </table><br>
        <table>
            <tr class="profil-br">
                <td><p>Echange</p></td>
                <td><p>Passé le</p></td>
                <td><p>Livraison</p></td>
                <td><p>Envoyée</p></td>
                <td><p>Caution</p></td>
            </tr>
            <tr class="profil-smp">
                <td class="smp-c1"><p>Echange n1</p></td>
                <td class="smp-c2"><p>Le :</p></td>
                <td class="smp-c3"><p>Reçu</p></td>
                <td class="smp-c4"><p>Envoyée</p></td>
                <td class="smp-c5"><p>Payé</p></td>
            </tr>
            <tr class="profil-smp">
                <td class="smp-c1"><p>Echange n2</p></td>
                <td class="smp-c2"><p>Le :</p></td>
                <td class="smp-c3"><p>Reçu</p></td>
                <td class="smp-c4"><p>Envoyée</p></td>
                <td class="smp-c5"><p>Payé</p></td>
            </tr>
        </table><br>
        <table class="quadro">
            <tr class="profil-br">
                <td><p class="left">Données Personnelles</p></td>
                <td><p class="right">Modifier</p></td>
            <tr class="profil-smp">
                <td><p><?php echo $getProfile['lastname']; ?></p></td>
                <td><p><?php echo $getProfile['firstname']; ?></p></td>
                <td><p><?php echo $getProfile['age']; ?>ans</p></td><br>
                <td><p><?php echo $getProfile['email']; ?></p></td>
                <td><p><?php echo $phonenumber; ?></p></td>
            </tr>
        </table><br>
        <table class="quadro">
            <tr class="profil-br">
                <td><p class="left">Nombre d'offre proposé</p></td>
                <td><p class="right">Modifier</p></td>
            </tr>
            <tr class="profil-smp">
                <td><p><?php echo $getNbOffer['countid'] ?> offres proposé</p></td>
            </tr>
        </table>
        <table class="quadro">
            <tr class="profil-br">
                <td><p class="left">Adresse de Facturation</p></td>
                <td><p class="right">Modifier</p></td>
            </tr>
            <tr class="profil-smp">
                <td><p><?php echo $getProfile['postalcode']; ?> - <?php echo $getProfile['adress']; ?> - <?php echo $getProfile['town']; ?></p></td>
            </tr>
        </table><br>
        <table class="quadro">
            <tr class="profil-br">
                <td><p class="left">Adresse de livraison</p></td>
                <td><p class="right">Modifier</p></td>
            </tr>
            <tr class="profil-smp">
                <td><p><?php echo $getProfile['postalcode']; ?> - <?php echo $getProfile['adress']; ?> - <?php echo $getProfile['town']; ?></p></td>
            </tr>
        </table><br>
    </div>
<div>


<div align="center">
    <form enctype="multipart/form-data" method="POST" action="/users/upload">
        <label>Modifier l'avatar : </label>
        <input type="hidden" name="user_id" value="<?php echo $getProfile['id'];?>"><br>
        <input type="file" name="avatar" /><br><br>
        <input type="submit" value="upload !">
    </form><br>

<form name="profileForm" class="profileForm" method="post">

    <label for="firstname">Prénom :</label><br>
    <input type="text" name="firstname" id="firstname" placeholder="Votre prénom"><br>
    <br>
    <label for="lastname">Nom :</label><br>
    <input type="text" name="lastname" id="lastname" placeholder="Votre nom"><br>
    <br>
    <label for="password">Mot de passe (6 caractères minimum):</label><br>
    <input type="password" name="password" id="password" placeholder="Votre mot de passe"><br>
    <br>
    <label for="passwordVerif">Mot de passe (vérif) :</label><br>
    <input type="password" name="passwordVerif" id="passwordVerif" placeholder="Votre mot de passe"><br>
    <br>
    <label for="age">Age :</label><br>
    <input type="number" name="age" id="age" placeholder="Votre age"><br>
    <br>
    <label for="phonenumber">Numéro de téléphone :</label><br>
    <input type="text" name="phonenumber" id="phonenumber" placeholder="Votre numéro de téléphone"><br>
    <br>
    <label for="town">Ville :</label><br>
    <input type="text" name="town" id="town" placeholder="Votre ville"><br>
    <br>
    <label for="postalcode">Code Postal :</label><br>
    <input type="text" name="postalcode" id="postalcode" placeholder="Votre code postal"><br>
    <br>
    <label for="adress">Adresse :</label><br>
    <textarea name="adress" id="adress"></textarea><br>
    <br>
    <input type="submit" name="submit" id="sumbit" value="Modifier">

</form>
</div>
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
    <?php
}
?>
