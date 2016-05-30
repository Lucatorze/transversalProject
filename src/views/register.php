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
            <h1>S'inscrire</h1>
            <form name="registerForm" class="registerForm" method="post">
                <p><span>* &nbsp</span><input type="text" name="nickname" id="nickname" value="" placeholder="Pseudo" required></p>
                <p><span>* &nbsp</span><input type="text" name="email" id="email" value="" placeholder="Email" required></p>
                <p><span>* &nbsp</span><input type="password" name="password" id="password" value="" placeholder="Mot de passe" required></p>
                <p><span>* &nbsp</span><input type="password" name="passwordVerif" id="passwordVerif" value="" placeholder="Confirmation du mot de passe" required></p>
                <p><span>* &nbsp</span><input type="submit" value="S'inscrire">
            </form>
            <p class="registration-info"><span>* &nbsp</span> Les champs sont obligatoires</p>
        </div>
    </div>
    </main>
    </body>
<script type="text/javascript">
    (function($){

        $('#header__icon').click(function(e){
            e.preventDefault();
            $("#menu").addClass("menu-on");
        });
        $('#cache').click(function(e){
            e.preventDefault();
            $("#menu").removeClass("menu-on");
        });

    })(jQuery);
</script>

</html>
    <?php include ('./inc/footer.php');
}
?>
