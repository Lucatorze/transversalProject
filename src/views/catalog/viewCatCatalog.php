<?php include ('./inc/header.php'); ?>


<section>

    <div class="section-menu">
        <?php foreach($getCategories as $result): ?>
                <a href="/catalog/listItem/<?php echo $result['id']?>"><?php echo $result['name']?></a>
        <?php endforeach; ?>
    </div>

</section>
<br><br>
<?php include ('./inc/footer.php'); ?>

