<?php include "./inc/header.php";?>

<a href="/">Home</a><br>

<h1>Créer une offres</h1>

<form name="createOffers" method="post">

    <label for="name">Nom du jeu : </label><br>
    <input type="text" name="name" id="name"><br>
    <br>

    <label>Aperçu du jeu : </label><br>
    <input type="hidden" name="view">
    <input type="file" name="view" /><br>
    <br>

    <label for="content">Description : </label><br>
    <textarea name="content" id="content"></textarea><br>
    <br>

    <input type="submit" name="submit" value="Créer l'offre">
</form>

<?php include "./inc/footer.php";?>
