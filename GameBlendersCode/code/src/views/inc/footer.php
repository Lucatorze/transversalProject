<footer>
    <div class="footer-menu">
        <ul>
            <a href="#"><li>Contactez-nous</li></a>
            <a href="#"><li>Accueil</li></a>
            <a href="#"><li>Description</li></a>
            <a href="#"><li>R&eacute;seaux sociaux</li></a>
            <a href="#"><li>&Aacute; Propos</li></a>
            <a href="#"><li>FAQ</li></a>
            <a href="#"><li>Qui sommes nous ?</li></a>
        </ul>
    </div>
    <br><br>
    <hr>
    <div class="newsletter">
        <p>Entrez votre adresse mail,</p>
        <p>pour recevoir notre newsletters :</p>
        <form>
            <input type="text" placeholder="Adresse Mail">
            <input type="submit" value="Envoyer">
        </form>
    </div>
</footer>
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
