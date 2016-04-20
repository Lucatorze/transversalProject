<?php
include "./inc/header.php";
if(isset($_SESSION['userId'])){
    ?>
    Vous ne pouvez pas accéder à cette page en étant connecté.<br>
    <a href="/">Home</a>
    <?php
}
else {
    ?>

    <a href="/">Home</a>

    <h1>login</h1>

    <form name="loginForm" class="loginForm" method="post">

        <label for="nickname">Pseudo :</label><br>
        <input type="text" name="nickname" id="nickname" placeholder="Votre pseudo"><br>
        <br>
        <label for="password">Mot de passe :</label><br>
        <input type="password" name="password" id="password" placeholder="Votre mot de passe"><br>
        <br>
        <input type="submit" value="Se connecter">

    </form>
    <br>
    <div>
        Pas inscrit ? rejoins notre communauté en t'inscrivant.<br>
        Pour cela, <a href="/users/register/">clique ici</a>
    </div>

    <?php
}
include "./inc/footer.php";
?>
