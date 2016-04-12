<?php include "./inc/header.php";?>

<a href="../../">Home</a>

<h1>login</h1>

<form name="loginForm" class="form" method="post">

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
    Pour cela, <a href="../../register/users/">clique ici</a>
</div>

<?php include "./inc/footer.php";?>
