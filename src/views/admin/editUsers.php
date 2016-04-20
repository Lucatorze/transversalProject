<?php include "./inc/header.php";

if(isset($_SESSION['admin']) || isset($_SESSION['modo'])){
    ?>

    <a href="/admin/home">Administration</a>

    <h1>Administration</h1>

    <form class="editForm" method="post" >

        <label class="editForm" for="nickname"><b>Pseudo :</b></label><br/>
        <input class="editForm" type="text" name="nickname" id="nickname" placeholder="Pseudo" value="<?php echo $getUserProfile['nickname']; ?>"><br>

        <label class="editForm" for="password"><b>Mot de passe</b></label><br>
        <input class="editForm" type="password" name="mdp" name="password" id="password" placeholder="Mot de passe"><br>

        <label class="editForm" for="email"><b>E-mail :</b></label><br>
        <input class="editForm" type="text" name="email" id="email" placeholder="E-mail" value="<?php echo $getUserProfile['email']; ?>"><br>

        <label class="editForm"><b>Rang :</b></label><br>
        <input class="editForm" type="radio" name="rank" id="4" value="4" <?php if($getUserProfile['rank']=='4') { echo 'checked="checked"'; } ?>/><label class="editForm" for="4">Administrateur</label><br>
        <input class="editForm" type="radio" name="rank" id="3" value="3" <?php if($getUserProfile['rank']=='3') { echo 'checked="checked"'; } ?>/><label class="editForm" for="3">Modérateur</label><br>
        <input class="editForm" type="radio" name="rank" id="2" value="2" <?php if($getUserProfile['rank']=='2') { echo 'checked="checked"'; } ?>/><label class="editForm" for="2">Partenaire</label><br>
        <input class="editForm" type="radio" name="rank" id="1" value="1" <?php if($getUserProfile['rank']=='1') { echo 'checked="checked"'; } ?>/><label class="editForm" for="1">Membres</label><br>
        <input class="editForm" type="radio" name="rank" id="0" value="0" <?php if($getUserProfile['rank']=='0') { echo 'checked="checked"'; } ?>/><label class="editForm" for="0">Banni</label><br>

        <input class="editForm" type="submit" name="btnSubmit" value="Envoyer" id="btnSubmit">

    </form>

    <?php
}
else {

    ?>
    Vous être connecté en tant que modérateur ou administrateur pour accéder à cette page.<br>
    <a href="/">Home</a>
    <?php

}

include "./inc/footer.php";?>

