<?php include "./inc/header.php";?>

<a href="/">Home</a>

<h1>Profile</h1>

<div>

    <ul>
        <li>Pseudo : <?php echo $getUserProfile['nickname']; ?></li>
        <li>Prénom : <?php echo $getUserProfile['firstname']; ?></li>
        <li>Nom : <?php echo $getUserProfile['lastname']; ?></li>
        <li>E-Mail : <?php echo $getUserProfile['email']; ?></li>
        <li>Avatar : <img src="/upload/avatar/<?php echo $getUserProfile['avatar']; ?>.jpg" width="200"></li>
        <li>Age : <?php echo $getUserProfile['age']; ?></li>
        <li>Telephone : <?php echo $getUserProfile['phonenumber']; ?></li>
        <li>Ville : <?php echo $getUserProfile['town']; ?></li>
        <li>Code Postal : <?php echo $getUserProfile['postalcode']; ?></li>
        <li>Adresse : <?php echo $getUserProfile['adress']; ?></li>
    </ul>

</div>

<?php include "./inc/footer.php";?>
