<?php include "./inc/header.php";

if(isset($_SESSION['admin'])){
    ?>

    <a href="/admin/home">Administration</a>

    <h1>Administration des événements</h1>

    <a href="/event/add/">Ajouter un evenement</a>
    
    <table>

        <tr>
            <th>Titre</th>
            <th>Date</th>
            <th>Ajouté le</th>
            <th>Action</th>
        </tr>

        <?php foreach( $getListEvent as $result):?>

            <tr>
                <td><a href="/event/view/<?php echo $result['id']?>/"><?php echo $result['title']?></a></td>
                <td><?php echo date("d/m/Y", strtotime($result['date']))?></td>
                <td><?php echo date('d/m/Y à H\hi', $result['dateAdd'])?></td>
                <td><a href="/admin/edit/<?php echo $result['id']?>/">Editer</a><br><a href="/admin/delete/<?php echo $result['id']?>/">Supprimer</a></td>
            </tr>

        <?php endforeach; ?>

    </table>

    <?php
}
else {

    ?>
    Vous être connecté en tant qu'administrateur pour accéder à cette page.<br>
    <a href="/">Home</a>
    <?php

}

include "./inc/footer.php";?>
