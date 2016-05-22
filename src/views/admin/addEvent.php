<?php include "./inc/header.php";

if(isset($_SESSION['admin'])){
    ?>

    <a href="/admin/home">Administration</a>

    <h1>ajouter un événement</h1>

    <form name="eventForm" method="post">
        <label for="title">Titre de l'evenement</label><br>
        <input type="text" name="title" id="title"><br>
        <br>
        <label for="place">Lieu de l'evenement</label><br>
        <input type="text" name="place" id="place"><br>
        <br>
        <label for="date">Date de l'evenement</label><br>
        <input type="date" name="date" id="date"><br>
        <br>
        <label for="content">Description de l'evenement</label><br>
        <textarea name="content" id="content"></textarea><br>
        <br>
        <label>Aperçu : </label><br>
        <input type="file" name="view" /><br>
        <br>

        <input type="submit" name="submit" value="envoyer">
    </form>

    <?php
}
else {

    ?>
    Vous être connecté en tant qu'administrateur pour accéder à cette page.<br>
    <a href="/">Home</a>
    <?php

}

include "./inc/footer.php";?>
