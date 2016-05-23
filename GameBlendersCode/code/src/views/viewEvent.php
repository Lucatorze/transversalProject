<?php include "./inc/header.php";?>

    <a href="/">home</a>

    <h1><?php echo $getEvent['title'];?></h1>

<ul>
    <li>Lieux : <?php echo $getEvent['place'];?></li>
    <li>Le : <?php echo date("d/m/Y", strtotime($getEvent['date']))?></li>
    <li>Description : <?php echo $getEvent['content'];?></li>
</ul>

    <?php include "./inc/footer.php";?>
