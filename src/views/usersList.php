<?php include "./inc/header.php";?>

<a href="/">Home</a>

<h1>Listes des membres</h1>


<table>

    <tr>
        <th>Pseudo</th>
        <th>E-Mail</th>
        <th>Ville</th>
    </tr>

<?php foreach($getUsersList as $result):?>

    <tr>
        <td><a href="/users/profile/<?php echo $result['id']?>/"><?php echo $result['nickname']?></a></td>
        <td><?php echo $result['email']?></td>
        <?php
        if(!empty($result['town'])){
        ?>
        <td><?php echo $result['town']; ?></td>
        <?php
        }
        ?>
    </tr>

<?php endforeach; ?>

</table>

<?php include "./inc/footer.php";?>
