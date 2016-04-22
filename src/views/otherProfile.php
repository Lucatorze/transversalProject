<?php include "./inc/header.php";?>

<a href="/">Home</a>

<h1>Profile</h1>

<div>

    <ul>
        <ul>
            <li>Pseudo : <b><?php echo $getUserProfile['nickname']; ?></b></li>
            <li>Rang : <b><?php echo $rank ?></b></li>
            <?php
            if(!empty($getUserProfile['firstname'])){
                ?>
                <li>Prénom : <b><?php echo $getUserProfile['firstname']; ?></b></li>
                <?php
            }
            if(!empty($getUserProfile['lastname'])){
                ?>
                <li>Nom : <b><?php echo $getUserProfile['lastname']; ?></b></li>
                <?php
            }
            if(!empty($getUserProfile['email'])){
                ?>
                <li>E-Mail : <b><?php echo $getUserProfile['email']; ?></b></li>
                <?php
            }
            if(!empty($getUserProfile['avatar'])){
                ?>
                <li>Avatar : <img src="/upload/avatar/<?php echo $getUserProfile['avatar']; ?>.jpg" width="200"> </li>
                <?php
            }
            if(!empty($getUserProfile['age'])){
                ?>
                <li>Age : <b><?php echo $getUserProfile['age']; ?></b></li>
                <?php
            }
            if(!empty($phonenumber)){
                ?>
                <li>Telephone : <b><?php echo $phonenumber; ?></b></li>
                <?php
            }
            if(!empty($getUserProfile['town'])){
                ?>
                <li>Ville : <b><?php echo $getUserProfile['town']; ?></b></li>
                <?php
            }
            if(!empty($getUserProfile['postalcode'])){
                ?>
                <li>Code Postal : <b><?php echo $getUserProfile['postalcode']; ?></b></li>
                <?php
            }
            if(!empty($getUserProfile['adress'])){
                ?>
                <li>Adresse : <b><?php echo $getUserProfile['adress']; ?></b></li>
                <?php
            }
            ?>
        </ul>
    </ul>

</div>

<?php include "./inc/footer.php";?>
