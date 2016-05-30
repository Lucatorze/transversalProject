<?php include ('./inc/header.php'); ?>

<section>
    <div class="evn-section">
        <div class="evn-section-title">
            <h1>&Eacute;V&Egrave;NEMENTS</h1>
        </div>
        <?php foreach( $getListEvent as $result):?>

            <div class="evn-article">
                <div class="evn-title">
                    <img class="title-element-desk" src="/assets/img/figure_left.png" alt="decors">
                    <img class="evn-title-element-mobil" src="/assets/img/losange.png" alt="decors">
                    <h1 class="title-element"><?php echo $result['place']?></h1>
                    <img class="evn-title-element-mobil" src="/assets/img/losange.png" alt="decors">
                    <img class="title-element-desk" src="/assets/img/figure_right.png" alt="decors">
                </div>
                <p class="evn-intro"><?php echo $result['title']?></p>
                <p class="evn-date"><?php echo date("d/m/Y", strtotime($result['date']))?></p>
                <p class="evn-content"><?php echo $result['content']?></p>
                <div class="evn-banner">
                    <img src="/assets/img/banner0.png" alt="bar">
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </section>

<?php include ('./inc/footer.php'); ?>

