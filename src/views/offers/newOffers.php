<?php include "./inc/header.php";?>

<a href="/">Home</a><br>

<h1>Créer une offres</h1>

<div>
    <input type="radio" name="offerType" id="exchange"><label for="exchange">Proposer un échange</label><br>
    <input type="radio" name="offerType" id="rental"><label for="rental">Proposer une location</label><br>
    <br>
</div>

<div id="exchangeForm">
    <form enctype="multipart/form-data" name="createExchangeOffers" method="post">

        <label for="name">Nom du jeu : </label><br>
        <input type="text" name="name" id="name"><br>
        <br>

        <label for="type">Type du jeu :</label><br>
        <select name="type" id="type">
            <option value="Jeu de plateau">Jeu de plateau</option>
            <option value="Jeu de dés">Jeu de dés</option>
            <option value="Jeu de cartes">Jeu de cartes</option>
            <option value="Jeu de stratégie">Jeu de stratégie</option>
            <option value="Jeu coopératifs ou semi coopératifs">Jeu coopératifs ou semi coopératifs</option>
            <option value="Jeu de réflexion">Jeu de réflexion</option>
            <option value="Jeu d’ambiance">Jeu d’ambiance</option>
            <option value="Jeu de ">Jeu d’adresse</option>
        </select><br>
        <br>

        <label for="releaseDate">Date de sortie : </label><br>
        <input type="date" name="releaseDate" id="releaseDate"><br>
        <br>

        <label for="players">Nombres de joueurs : </label><br>
        <input type="number" name="players" id="players"><br>
        <br>

        <label>Aperçu du jeu : </label><br>
        <input type="hidden" name="user_id" value="<?php echo $getProfile['id'];?>">
        <input type="file" name="view" /><br>
        <br>

        <label for="content">Description : </label><br>
        <textarea name="content" id="content"></textarea><br>
        <br>

        <input type="submit" name="submitExchange" value="Créer l'offre">
    </form>
</div>

<div id="rentalForm">
    <form enctype="multipart/form-data" name="createRentalOffers" method="post">

        <label for="name">Nom du jeu : </label><br>
        <input type="text" name="name" id="name"><br>
        <br>

        <label for="name">Prix demandé : </label><br>
        <input type="text" name="name" id="name"><br>
        <br>

        <label for="type">Type du jeu :</label><br>
        <select name="type" id="type">
            <option value="Jeu de plateau">Jeu de plateau</option>
            <option value="Jeu de dés">Jeu de dés</option>
            <option value="Jeu de cartes">Jeu de cartes</option>
            <option value="Jeu de stratégie">Jeu de stratégie</option>
            <option value="Jeu coopératifs ou semi coopératifs">Jeu coopératifs ou semi coopératifs</option>
            <option value="Jeu de réflexion">Jeu de réflexion</option>
            <option value="Jeu d’ambiance">Jeu d’ambiance</option>
            <option value="Jeu de ">Jeu d’adresse</option>
        </select><br>
        <br>

        <label for="releaseDate">Date de sortie : </label><br>
        <input type="date" name="releaseDate" id="releaseDate"><br>
        <br>

        <label for="players">Nombres de joueurs : </label><br>
        <input type="number" name="players" id="players"><br>
        <br>

        <label>Aperçu du jeu : </label><br>
        <input type="hidden" name="user_id" value="<?php echo $getProfile['id'];?>">
        <input type="file" name="view" /><br>
        <br>

        <label for="content">Description : </label><br>
        <textarea name="content" id="content"></textarea><br>
        <br>
        <input type="submit" name="submitRental" value="Créer l'offre">
    </form>
</div>

<script src="/assets/js/scriptForm.js"></script>

<?php include "./inc/footer.php";?>
