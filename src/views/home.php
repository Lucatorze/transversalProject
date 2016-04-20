<?php include "./inc/header.php";?>

<h1>home</h1>


<?php

if(isset($_SESSION['admin'])){
 ?>

    <a href="/">index</a><br>
    <a href="/users/profile/">profile</a><br>
    <a href="/users/usersList/">Liste des membres</a><br>
    <a href="/admin/home/">Administration</a><br>
    <a href="/users/logout/">logout</a><br>

   <?php
}
elseif(isset($_SESSION['modo'])){
    ?>

    <a href="/">index</a><br>
    <a href="/users/profile/">profile</a><br>
    <a href="/users/usersList/">Liste des membres</a><br>
    <a href="/admin/home/">Administration</a><br>
    <a href="/users/logout/">logout</a><br>

    <?php
}
elseif(isset($_SESSION['partner'])){
    ?>

    <a href="/">index</a><br>
    <a href="/users/profile/">profile</a><br>
    <a href="/users/usersList/">Liste des membres</a><br>
    <a href="/users/logout/">logout</a><br>

    <?php
}
elseif(isset($_SESSION['member'])){
    ?>

    <a href="/">index</a><br>
    <a href="/users/profile/">profile</a><br>
    <a href="/users/usersList/">Liste des membres</a><br>
    <a href="/users/logout/">logout</a><br>

    <?php
}
else{
    ?>

    <a href="/">index</a><br>
    <a href="/users/login/">login</a><br>
    <a href="/users/register/">register</a><br>
    <a href="/users/usersList/">Liste des membres</a><br>

<?php
}
?>

<?php include "./inc/footer.php";?>
