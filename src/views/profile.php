<?php include "./inc/header.php";

if(!isset($_SESSION['userId'])){
    ?>
    Vous ne pouvez pas accéder à cette page en étant deconnecté.<br>
    <a href="/">Home</a>
    <?php
}
else {
?>

<a href="/">Home</a>

<h1>Profile</h1>

<div>

    <ul>
        <li>Pseudo : <b><?php echo $getProfile['nickname']; ?></b></li>
        <li>Rang : <b><?php echo $rank ?></b></li>
        <?php
        if(!empty($getProfile['firstname'])){
        ?>
            <li>Prénom : <b><?php echo $getProfile['firstname']; ?></b></li>
            <?php
        }
        if(!empty($getProfile['lastname'])){
        ?>
        <li>Nom : <b><?php echo $getProfile['lastname']; ?></b></li>
            <?php
        }
        if(!empty($getProfile['email'])){
        ?>
        <li>E-Mail : <b><?php echo $getProfile['email']; ?></b></li>
            <?php
        }
        if(!empty($getProfile['avatar'])){
        ?>
        <li>Avatar : <img src="/upload/avatar/<?php echo $getProfile['avatar']; ?>.jpg" width="200"> </li>
            <?php
        }
        if(!empty($getProfile['age'])){
        ?>
        <li>Age : <b><?php echo $getProfile['age']; ?></b></li>
            <?php
        }
        if(!empty($phonenumber)){
        ?>
        <li>Telephone : <b><?php echo $phonenumber; ?></b></li>
            <?php
        }
        if(!empty($getProfile['town'])){
        ?>
        <li>Ville : <b><?php echo $getProfile['town']; ?></b></li>
            <?php
        }
        if(!empty($getProfile['postalcode'])){
        ?>
        <li>Code Postal : <b><?php echo $getProfile['postalcode']; ?></b></li>
            <?php
        }
        if(!empty($getProfile['adress'])){
        ?>
        <li>Adresse : <b><?php echo $getProfile['adress']; ?></b></li>
            <?php
        }
        ?>
    </ul>

</div>

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

    <?php
}
include "./inc/footer.php";
?>
