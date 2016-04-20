<?php include "./inc/header.php";

if(isset($_SESSION['admin']) || isset($_SESSION['modo'])){
    ?>

    <a href="/admin/home">Administration</a>

    <h1>Administration des membres</h1>

    <table>

        <tr>
            <th>Pseudo</th>
            <th>E-Mail</th>
            <th>Rang</th>
            <th>Action</th>
        </tr>



        <?php foreach($getUsersList as $result):

            if($result['rank'] == 4){
                $rank = "Administrateur";
            }
            elseif($result['rank'] == 3){
                $rank = "Modérateur";
            }
            elseif($result['rank'] == 2){
                $rank = "Partenaire";
            }
            elseif($result['rank'] == 1){
                $rank = "Membre";
            }
            elseif($result['rank'] == 0){
                $rank = "Banni";
            }

            ?>

            <tr>
                <td><a href="/users/profile/<?php echo $result['id']?>/"><?php echo $result['nickname']?></a></td>
                <td><?php echo $result['email']?></td>
                <td><?php echo $rank ?></td>
                <td><a href="/admin/edit/<?php echo $result['id']?>/">Editer</a><br><a href="/admin/delete/<?php echo $result['id']?>/">Supprimer</a></td>
            </tr>

        <?php endforeach; ?>

    </table>

    <?php
}
else {

    ?>
    Vous être connecté en tant que modérateur ou administrateur pour accéder à cette page.<br>
    <a href="/">Home</a>
    <?php

}

include "./inc/footer.php";?>
