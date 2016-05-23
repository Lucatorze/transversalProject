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
                $rank = "<span style='color:red'>Administrateur</span>";
            }
            elseif($result['rank'] == 3){
                $rank = "<span style='color:orange'>Modérateur</span>";
            }
            elseif($result['rank'] == 2){
                $rank = "<span style='color:#c000c0'>Partenaire</span>";
            }
            elseif($result['rank'] == 1){
                $rank = "<span style='color:#00a1ff'>Membre</span>";
            }
            elseif($result['rank'] == 0){
                $rank = "<span style='color:gray'>Banni</span>";
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
