<?php include "./inc/header.php";?>

<a href="/">Home</a><br>

<h1>Liste des offres</h1>


<h2>Offre d'échange</h2>
<?php
if(!$getOffersListExchange){
    ?>

    <div>
        Aucune offre n'est disponible.
    </div>

    <?php
}
else{
?>

<table>

    <tr>
        <th>Auteur</th>
        <th>Nom du jeux</th>
        <th>Date</th>
    </tr>

    <?php foreach($getOffersListExchange as $result):?>


        <tr>
            <td><a href="/users/profile/<?php echo $result['userId']?>/"><?php echo $result['nickname']?></a></td>
            <td><a href="/offers/viewOffers/<?php echo $result['id']; ?>"><?php echo $result['name']?></a></td>
            <td><?php echo date('d/m/Y à H\hi', $result['date']); ?></td>

        </tr>

    <?php endforeach; ?>
    
</table>
    <?php
}
?>

<h2>Offre de Location</h2>

<?php
if(!$getOffersListRental){
    ?>
    <div>
        Aucune offre n'est disponible.
    </div>
    <?php
}
else{
    ?>

    <table>

        <tr>
            <th>Auteur</th>
            <th>Nom du jeux</th>
            <th>Date</th>
        </tr>


        <?php foreach($getOffersListRental as $result):?>

            <?php

            ?>
            <tr>
                <td><a href="/users/profile/<?php echo $result['userId']?>/"><?php echo $result['nickname']?></a></td>
                <td><a href="/offers/viewOffers/<?php echo $result['id']; ?>"><?php echo $result['name']?></a></td>
                <td><?php echo date('d/m/Y à H\hi', $result['date']); ?></td>

            </tr>
        <?php endforeach; ?>

    </table>

    <?php
}
?>
<?php include "./inc/footer.php";?>
