<?php include ('./inc/header.php');

if(!isset($_SESSION['userId'])){
    ?>
    Vous ne pouvez pas accéder à cette page en étant deconnecté.<br>
    <a href="/">Home</a>
    <?php
}
else {
?>
<section>
    <div class="profil">
        <h1>Mon Profil</h1>
        <h2>Bonjour <?php echo $getProfile['nickname']; ?> </h2>
        <img src="/upload/avatar/<?php echo $getProfile['avatar']; ?>.jpg" alt="profil-picture" class="profil-picture">
        <p>Vous pouvez consulter l&#145;historique de vos commandes et g&eacute;rer vos donn&eacute;es personnelle. Choisissez &#147;modifier&#147;
            pour actualiser vos informations personelles.</p>
        <br>
        <table>
            <tr class="pink-title">
                <td>Donn&eacute;es Personnelles</td>
                <td class="align-right"><a href="#">Modifier</a></td>
            </tr>
            <tr>
                <td colspan="2">Monsieur <?php echo $getProfile['firstname']; ?> <?php echo $getProfile['lastname']; ?> / <?php echo $getProfile['email']; ?> / <?php echo $phonenumber; ?></td>
            </tr>
        </table>
        <br>
        <table>
            <tr class="pink-title">
                <td>Mes Newsletters Game Blender</td>
                <td class="align-right"><a href="#">Modifier</a></td>
            </tr>
            <tr>
                <td colspan="2">Vous &ecirc;tes inscris &acirc; la newsletters<br></td>
            </tr>
        </table>
        <br>
        <table>
            <tr class="pink-title">
                <td>Adresse de Facturation</td>
                <td class="align-right"><a href="#">Modifier</a></td>
            </tr>
            <tr>
                <td colspan="2">Monsieur <?php echo $getProfile['firstname']; ?> <?php echo $getProfile['lastname']; ?>
                    <?php echo $getProfile['adress']; ?>
                    <?php echo $getProfile['postalcode']; ?> <?php echo $getProfile['town']; ?>
                </td>
            </tr>
        </table>
        <br>
        <table>
            <tr class="pink-title">
                <td>Adresse de Livraison</td>
                <td class="align-right"><a href="#">Modifier</a></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo $getProfile['adress']; ?>
                    <?php echo $getProfile['postalcode']; ?> <?php echo $getProfile['town']; ?></td>
            </tr>
        </table>
        <br>
        <table>
            <tr class="pink-title">
                <td>Derni&egrave;re Locations</td>
                <td class="align-right"><a href="#">Tout afficher</a></td>
            </tr>
        </table>
        <br>
        <table>
            <tr class="pink-title">
                <td>Locations</td>
                <td>Pass&eacute; le</td>
                <td>Livraison</td>
                <td>Envoy&eacute;e</td>
                <td>Caution</td>
            </tr>
            <tr>
                <td>Location n&ordm;1</td>
                <td>03/09/16</td>
                <td>Re&ccedil;u</td>
                <td>Oui</td>
                <td>Pay&eacute;</td>
            </tr>
            <tr>
                <td>Location n&ordm;2</td>
                <td>07/10/16</td>
                <td>Re&ccedil;u</td>
                <td>Oui</td>
                <td>Pay&eacute;</td>
            </tr>
        </table>
        <br>
        <table>
            <tr class="pink-title">
                <td>Derni&egrave;re &Eacute;changes</td>
                <td class="align-right"><a href="#">Tout afficher</a></td>
            </tr>
        </table>
        <br>
        <table>
            <tr class="pink-title">
                <td>&Eacute;changes</td>
                <td>Pass&eacute; le</td>
                <td>Livraison</td>
                <td>Envoy&eacute;e</td>
                <td>Caution</td>
            </tr>
            <tr>
                <td>&Eacute;change n&ordm;1</td>
                <td>10/08/16</td>
                <td>Re&ccedil;u</td>
                <td>Oui</td>
                <td>Pay&eacute;</td>
            </tr>
            <tr>
                <td>&Eacute;change n&ordm;2</td>
                <td>26/02/16</td>
                <td>Re&ccedil;u</td>
                <td>Oui</td>
                <td>Pay&eacute;</td>
            </tr>
        </table>
        <br>
        <a href="/catalog/addItem/"><input type="submit" value="PROPOSEZ UN JEU"></a>
    </div>

    <div class="registration" align="center">
        <form enctype="multipart/form-data" method="POST" action="/users/upload">
            <label>Modifier l'avatar : </label>
            <input type="hidden" name="user_id" value="<?php echo $getProfile['id'];?>"><br>
            <input type="file" name="avatar" /><br><br>
            <input type="submit" value="upload !">
        </form><br>

        <form name="profileForm" class="profileForm" method="post">

            <label for="firstname">Pr&eacute;nom :</label><br>
            <input type="text" name="firstname" id="firstname" placeholder="Votre pr&eacute;nom"><br>
            <br>
            <label for="lastname">Nom :</label><br>
            <input type="text" name="lastname" id="lastname" placeholder="Votre nom"><br>
            <br>
            <label for="password">Mot de passe (6 caractères minimum):</label><br>
            <input type="password" name="password" id="password" placeholder="Votre mot de passe"><br>
            <br>
            <label for="passwordVerif">Mot de passe (v&eacute;rif) :</label><br>
            <input type="password" name="passwordVerif" id="passwordVerif" placeholder="Votre mot de passe"><br>
            <br>
            <label for="age">Age :</label><br>
            <input type="number" name="age" id="age" placeholder="Votre age"><br>
            <br>
            <label for="phonenumber">Num&eacute;ro de t&eacute;l&eacute;phone :</label><br>
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
</section>

<br><br><br><br><br><br><br>
<?php
    include ('./inc/footer.php');
}
?>
