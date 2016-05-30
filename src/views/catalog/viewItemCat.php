<?php include ('./inc/header.php'); ?>

<div class="cat-section">
    <div class="section-menu">
        <?php foreach($getCategories as $result):
            if($result['id'] == $id){
                ?>
                <span><a href="/catalog/listItem/<?php echo $result['id']?>"><?php echo $result['name']?></a> </span>
                <?php
            }
            else{
                ?>
                <a href="/catalog/listItem/<?php echo $result['id']?>"><?php echo $result['name']?></a>
                <?php
            }
        endforeach;
        ?>
    </div>
    <div class="banner">
        <img src="/assets/img/banniere.png" alt="Banniere" class="banner_pic">
    </div>
    <div class="cat-title">
        <img class="title-element-desk" src="/assets/img/figure_left.png" alt="decors">
        <img class="title-element-mobil" src="/assets/img/losange.png" alt="decors">
        <h1 class="title-element"><?php echo $getCategoriesName['name']; ?></h1>
        <img class="title-element-mobil" src="/assets/img/losange.png" alt="decors">
        <img class="title-element-desk" src="/assets/img/figure_right.png" alt="decors">
    </div>
    <?php
    if (!$getItemsList){

        ?>

        Aucun jeu &agrave; afficher<br>
        <br>

        <?php

    }
    else {

    foreach ($getItemsList as $result):

    $description = substr($result['description'], 0, 140);
    ?>
    <div class="cat-article">
        <div class="cat-background-img">
            <img src="/upload/catalog/<?php echo $result['view'] ?>.jpg" alt="<?php echo $result['name'] ?>">
        </div>
        <div class="cat-background-info">
            <p class="cat-article-title"><?php echo $result['name'] ?></p>
            <p class="cat-article-text"><?php echo $description ?> ...</p>
        </div>
        <a href="/catalog/viewItem/<?php echo $result['id'] ?>">
            <button class="btn">LOUER OU &Eacute;CHANGER</button>
        </a>
    </div>
    <?php endforeach; }?>
    <div class="cat-section-nav">
        <ul>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
        </ul>
    </div>
    </div>
    </section>
    <?php include ('./inc/footer.php'); ?>
