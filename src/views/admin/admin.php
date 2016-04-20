<?php include "./inc/header.php";

if(isset($_SESSION['admin']) || isset($_SESSION['modo'])){
    ?>

    <a href="/">Home</a>

    <h1>Administration</h1>

    <ul>

        <li><a href="/admin/users/">Edition des membres</a></li>
        <li><a href="">Gestion des evenements</a></li>
        <li><a href="">Gestion des echanges</a></li>
        <li><a href="">Gestion du catalogue</a></li>
        <li><a href="">Gestion des testes</a></li>
        <li><a href="">Gestion du forum</a></li>

    </ul>

    <?php
}
else {

?>
    Vous être connecté en tant que modérateur ou administrateur pour accéder à cette page.<br>
    <a href="/">Home</a>
<?php

}

include "./inc/footer.php";?>
