<?php include "./inc/header.php";?>

<a href="/">Home</a><br>

<h1><?php echo ucfirst($getOffers['name']); ?></h1>

<img src="/upload/offers/<?php echo $getOffers['view']; ?>.jpg" width="200"><br>

<ul>
    <li>type d'offre : <?php echo $offerType; ?></li>
    <?php
    if (!empty($getOffers['price'])){
        ?>
        <li>Prix : <?php echo $offerType['price']; ?>€</li>
        <?php
    }
    ?>
    <li>type : <?php echo $getOffers['type']; ?></li>
    <li>date de sortie : <?php echo $getOffers['releaseDate']; ?></li>
    <li>Se joue à : <?php echo $getOffers['players']; ?></li>
    <li>Description : <?php echo $getOffers['content']; ?></li>
    <li>Offre créée par : <a href="/users/profile/<?php echo $getOffers['userId']?>/"><?php echo $getOffers['nickname']?></a></li>
</ul>

<?php include "./inc/footer.php";?>
