<?php
include "./inc/header.php";
if(!isset($_SESSION['userId'])){
    ?>
    Vous ne pouvez pas accéder à cette page en étant déconnecté.<br>
    <a href="/">Home</a>
    <?php
}
else {
    ?>
    <a href="/">Home</a><br>
    <a href="/privateMsg/create">Ecrire un nouveau message</a><br>
    <br>

    <?php
    if(!$getPrivateMsg){
        ?>

        <div>
            Aucun message privé n'est disponible.
        </div>

        <?php
    }
    else{
        ?>

    <table>
        <tr>
            <th>Auteur</th>
            <th>Titre</th>
            <th>Date de reception</th>
            <th>Action</th>
        </tr>

        <?php foreach($getPrivateMsg as $result):?>


            <tr>
                <td><a href="/users/profile/<?php echo $result['authorId']?>/"><?php echo $getUserProfile['nickname']?></a></td>
                <td><a href="/privateMsg/viewMsg/<?php echo $result['id']?>/"><?php echo $result['title']; ?></a></td>
                <td><?php echo date('d/m/Y à H\hi', $result['date']); ?></td>
                <td><a href="/privateMsg/delete/<?php echo $result['id']?>/">Supprimer</a></td>

            </tr>

        <?php endforeach; ?>
    </table>

        <?php
    }
}
include "./inc/footer.php";
?>
