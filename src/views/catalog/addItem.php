<?php include ('./inc/header.php');

if(isset($_SESSION['userId'])){
    ?>

    <div class="registration">

        <h1>&Eacute;change ou location</h1>
            <p class="p_input"><input type="radio" name="offerType" id="exchange"><label for="exchange">Proposer un &eacute;change</label></p>
            <p class="p_input"><input type="radio" name="offerType" id="rental"><label for="rental">Proposer une location</label></p>



    <div id="exchangeForm">
        <form name="createExchangeOffers" enctype="multipart/form-data" method="POST" action="/catalog/addItem/">

            <p><span>* &nbsp</span><input type="text" name="name" id="name" placeholder="Nom du jeu"></p>

            <p><span>* &nbsp</span>
                <select name="type" id="type">
                    <option value="Jeu de plateau">Jeu de plateau</option>
                    <option value="Jeu de des">Jeu de d&eacute;s</option>
                    <option value="Jeu de cartes">Jeu de cartes</option>
                    <option value="Jeu de strategie">Jeu de strat&eacute;gie</option>
                    <option value="Jeu cooperatifs ou semi cooperatifs">Jeu coop&eacute;ratifs ou semi coop&eacute;ratifs</option>
                    <option value="Jeu de reflexion">Jeu de r&eacute;flexion</option>
                    <option value="Jeu d&#145;ambiance">Jeu d&#145;ambiance</option>
                    <option value="Jeu d&#145;adresse">Jeu d&#145;adresse</option>
                </select></p>

            <p><span>* &nbsp</span><input type="date" name="releaseDate" id="releaseDate" placeholder="Date de sortie"></p>

            <p><span>* &nbsp</span><input type="number" name="players" id="players" placeholder="Nombres de joueurs"></p>

            <p><span>* &nbsp</span><input type="number" name="age" id="age" placeholder="Age minimum"></p>

            <p><span>* &nbsp</span><input type="number" name="time" id="time" placeholder="Temps moyens (en minutes)"></p>

            <p><span>* &nbsp</span><textarea name="description" id="description" placeholder="Description du jeu"></textarea></p>

            <p><span>* &nbsp</span><label>Aper&ccedil;u du jeu : </label><br>
                <input type="file" name="view" id="view"></p>

            <input type="submit" name="submitExchange" value="Créer l'offre">

            <p class="registration-info"><span>* &nbsp</span> Les champs sont obligatoires</p>

        </form>
    </div>

    <div id="rentalForm">
        <form name="createRentalOffers" enctype="multipart/form-data" method="POST" action="/catalog/addItem/">

            <p><span>* &nbsp</span><input type="text" name="name" id="name" placeholder="Nom du jeu"></p>

            <p><span>* &nbsp</span><input type="number" name="price" id="price" placeholder="Caution du jeu"></p>

            <p><span>* &nbsp</span>
                <select name="type" id="type">
                    <option value="Jeu de plateau">Jeu de plateau</option>
                    <option value="Jeu de des">Jeu de d&eacute;s</option>
                    <option value="Jeu de cartes">Jeu de cartes</option>
                    <option value="Jeu de strategie">Jeu de strat&eacute;gie</option>
                    <option value="Jeu cooperatifs ou semi cooperatifs">Jeu coop&eacute;ratifs ou semi coop&eacute;ratifs</option>
                    <option value="Jeu de reflexion">Jeu de r&eacute;flexion</option>
                    <option value="Jeu d’ambiance">Jeu d&#145;ambiance</option>
                    <option value="Jeu d’adresse">Jeu d&#145;adresse</option>
                </select></p>

            <p><span>* &nbsp</span><input type="date" name="releaseDate" id="releaseDate" placeholder="Date de sortie"></p>

            <p><span>* &nbsp</span><input type="number" name="players" id="players" placeholder="Nombres de joueurs"></p>

            <p><span>* &nbsp</span><input type="number" name="age" id="age" placeholder="Age minimum"></p>

            <p><span>* &nbsp</span><input type="number" name="time" id="time" placeholder="Temps moyens (en minutes)"></p>

            <p><span>* &nbsp</span><textarea name="description" id="description" placeholder="Description du jeu"></textarea></p>

            <p><span>* &nbsp</span><label>Aper&ccedil;u du jeu : </label><br>
                <input type="file" name="view" id="view"></p>

            <input type="submit" name="submitExchange" value="Créer l'offre">

            <p class="registration-info"><span>* &nbsp</span> Les champs sont obligatoires</p>

        </form>
        </div>

        <script src="/assets/js/scriptForm.js"></script>
    </div>
    <br><br><br>
    <?php
}
else {

    ?>
    Vous devez être connecté pour accéder à cette page.<br>
    <a href="/">Home</a>
    <?php

}

include "./inc/footer.php";?>
