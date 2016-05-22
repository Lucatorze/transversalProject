<?php include "./inc/header.php";?>

<a href="/">home</a>

<h2>Evenement</h2>

<?php foreach( $getListEvent as $result):?>

    <h3><a href="/event/view/<?php echo $result['id']?>/"><?php echo $result['title']?></a></h3>
    <h4>le <?php echo date("d/m/Y", strtotime($result['date']))?> à <?php echo $result['place']?></h4>
    <p><?php echo $result['content']?></p>

    <hr>

<?php endforeach; ?>

<?php include "./inc/footer.php";?>
