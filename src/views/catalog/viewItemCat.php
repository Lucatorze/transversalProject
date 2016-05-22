<?php include "./inc/header.php";?>

<a href="/">Home</a><br>

<h1>Liste des articles</h1>


<?php
if(!$getItemsList){
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
            <th>Nom</th>
        </tr>

        <?php foreach($getItemsList as $result):?>


            <tr>
                <td><a href="/catalog/viewItem/<?php echo $result['id']?>"><?php echo $result['name']?></a> </td>

            </tr>

        <?php endforeach; ?>

    </table>
    <?php
}

include "./inc/footer.php";?>
