<?php include "./inc/header.php";

if(isset($_SESSION['admin'])){
    ?>

    <a href="/admin/home">Administration</a>

    <h1>Ajouter un article dans le catalogue</h1>

    <form name="catalogForm" method="post">
        <label for="name">Nom du jeu : </label><br>
        <input type="text" name="name" id="name"><br>
        <br>

        <label for="type">Type du jeu :</label><br>
        <select name="type" id="type">
            <?php foreach( $getCategories as $result):?>
                <option value="<?php echo utf8_decode($result['name']);?>"><?php echo utf8_decode($result['name']);?></option>
            <?php endforeach; ?>
        </select><br>
        <br>

        <label for="releaseDate">Date de sortie : </label><br>
        <input type="date" name="releaseDate" id="releaseDate"><br>
        <br>

        <label for="players">Nombres de joueurs : </label><br>
        <input type="number" name="players" id="players"><br>
        <br>

        <label>Aperçu du jeu : </label><br>
        <input type="file" name="view" id="view"><br>
        <br>

        <label for="gameRules">Règle du jeu : </label><br>
        <textarea name="gameRules" id="gameRules"></textarea><br>
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
