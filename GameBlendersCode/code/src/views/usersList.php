<?php include "./inc/header.php";?>


<table>

    <tr>
        <th>Pseudo</th>
        <th>E-Mail</th>
        <th>Rang</th>
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
        <td><b><?php echo $rank; ?></b></td>
    </tr>

<?php endforeach; ?>

</table>

<?php include "./inc/footer.php";?>
