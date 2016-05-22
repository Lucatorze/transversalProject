<?php include "./inc/header.php";?>

<a href="/">Home</a><br>

<h1>Liste des categories</h1>


<?php
if(!$getCategories){
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
            <th>description</th>
        </tr>

        <?php foreach($getCategories as $result):?>


            <tr>
                <td><a href="/catalog/listItem/<?php echo $result['id']?>"><?php echo $result['name']?></a> </td>
                <td><?php echo $result['description']?></td>

            </tr>

        <?php endforeach; ?>

    </table>
    <?php
}
 
include "./inc/footer.php";?>
