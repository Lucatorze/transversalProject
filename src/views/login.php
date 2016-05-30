<?php include ('./inc/header.php');

if(isset($_SESSION['userId'])){
        ?>
        Vous ne pouvez pas accéder à cette page en étant connecté.<br>
        <a href="../../">Home</a>
<?php
}
else { ?>
    
    <div class="reg-section">
        <div class="registration">
            <h1>Se connecter</h1>
            <form name="loginForm" class="loginForm" method="post">
                <p><input type="text" name="nickname" id="nickname" value="" placeholder="Pseudo"  required></p>
                <p><input type="password" name="password" id="password" value="" placeholder="Mot de passe" required></p>
                <p><input type="submit" value="Se connecter">
            </form>
        </div>
    </div>
    <br><br>
    <?php include ('./inc/footer.php');

}
?>
