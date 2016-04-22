<?php include "./inc/header.php";?>

<a href="/">Home</a><br>

<h1>Liste des offres</h1>

<table>

    <tr>
        <th>Auteur</th>
        <th>Nom du jeux</th>
    </tr>

    <?php foreach($getOffersList as $result):?>

        <tr>
            <td><a href="/users/profile/<?php echo $result['userId']?>/"><?php echo $result['nickname']?></a></td>
            <td><?php echo $result['name']?></td>
        </tr>

    <?php endforeach; ?>

</table>

<?php include "./inc/footer.php";?>
