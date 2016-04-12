<?php include "./inc/header.php";?>

<a href="../../">Home</a>

<h1>login</h1>

<script>

    $('document').ready(function(){

        function isValidEmailAddress(email) {
            var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
            return pattern.test(email);
        };

        var errorMsg = '';
        var formOk = true;
        var errorBlock = $('.errorMsg');


        $('.registerForm').submit(function(){

            var nickname = $('#nickname').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var passwordVerif = $('#passwordVerif').val();

            if (nickname.length < 4){
                errorMsg += 'Votre Pseudo doit faire un minimum de 4 caractères<br>';
                formOk = false;
            }
            if (!isValidEmailAddress(email)){
                errorMsg += 'votre e-mail n\'est pas valide.<br>';
                formOk = false;
            }
            if (password != passwordVerif || password.length < 6){
                errorMsg += 'votre mot de passe doit faire un minimum de 6 caractères et doit être identique a la vérification.<br>';
                formOk = false;
            }

            if (!formOk){

                for(var i = 0; i < errorMsg.length; i++){
                    errorBlock.html(errorMsg);
                }
                return false
            }


        })

    })

</script>

<form name="registerForm" class="registerForm" method="post">

    <label for="nickname">Pseudo (4 caractères minimum):</label><br>
    <input type="text" name="nickname" id="nickname" placeholder="Votre pseudo"><br>
    <br>
    <label for="email">E-mail :</label><br>
    <input type="email" name="email" id="email" placeholder="Votre E-mail"><br>
    <br>
    <label for="password">Mot de passe (6 caractères minimum):</label><br>
    <input type="password" name="password" id="password" placeholder="Votre mot de passe"><br>
    <br>
    <label for="passwordVerif">Mot de passe (vérif) :</label><br>
    <input type="password" name="passwordVerif" id="passwordVerif" placeholder="Votre mot de passe"><br>
    <br>
    <input type="submit" value="S'inscrire">

</form>

<div class="errorMsg"></div>


<?php include "./inc/footer.php";?>
