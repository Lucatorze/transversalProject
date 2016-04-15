<?php include "./inc/header.php";?>

<h1>home</h1>

<?php
if(!isset($_SESSION['userId'])){
?>
    <a href="/">index</a><br>
    <a href="/users/login/">login</a><br>
    <a href="/users/register/">register</a><br>

<?php
}
else{
    ?>
    <a href="/">index</a><br>
    <a href="/users/profile/">profile</a><br>
    <a href="/users/usersList/">Liste des membres</a><br>
    <a href="/users/logout/">logout</a><br>
<?php
}
?>

<?php include "./inc/footer.php";?>
