<?php include ('./inc/header.php'); ?>

    <section>
        <div class="prod-section">
            <div class="section-menu">
                <?php foreach($getCategories as $result):?>
                    <a href="/catalog/listItem/<?php echo $result['id']?>"><?php echo $result['name']?></a>
                <?php endforeach; ?>
            </div>
            <div class="banner">
                <img src="/assets/img/banniere.png" alt="Banniere">
            </div>

            <div class="produit">
                <img class="produit-img" src="/upload/catalog/<?php echo $getItems['view']; ?>.jpg" alt="<?php echo $getItems['name']; ?>">
                <h1 class="produit-title"><?php echo $getItems['name']; ?></h1>
                <p class="produit-info"><?php echo $getItems['description']; ?></p>
                <hr>
                <div class="produit-reso">
                    <a href="#"><img class="produit-facebook" src="/assets/img/facebook.png" alt="Facebook"></a>
                    <a href="#"><img class="produit-twitter" src="/assets/img/twitter.png" alt="Twitter"></a>
                    <a href="#"><img class="produit-insta" src="/assets/img/inta.png" alt="Instagram"></a>
                </div>
                <a href="#"><button class="produit-btn">LOUER</button></a>
                <a href="#"><button class="produit-btn">&Eacute;CHANGER</button></a>
                <p>CAUTION FIX&Eacute;E A : 10 euros</p>
                <p>LOUER PAR LUCAS</p>
                <div class="produit-preview">
                    <img src="/assets/img/mini1.png" alt="Picto">
                    <img src="/assets/img/mini2.png" alt="Picto">
                    <img src="/assets/img/mini3.png" alt="Picto">
                    <img src="/assets/img/mini4.png" alt="Picto">
                </div>
            </div>

            <div class="produit-list">
                <div class="produit-tech">
                    <h2>Fiche technique</h2>
                    <hr>
                    <p>langue : Fran&ccedil;ais</p>
                    <p>Ange : <?php echo $getItems['age']; ?>+</p>
                    <p>Nombre de joueurs : 2-<?php echo $getItems['players']; ?></p>
                    <p>Durée d'une partie : <?php echo $getItems['time']; ?> minutes</p>
                </div>

                <h3>Vous aimeriez aussi :</h3>
                <hr>

                <?php foreach ($getRand as $result):

                $description = substr($result['description'], 0, 160);
                ?>
                <div class="prod-article">
                    <div class="prod-background-img">
                        <img src="/upload/catalog/<?php echo $result['view'] ?>.jpg" alt="<?php echo $result['name'] ?>">
                    </div>
                    <div class="prod-background-info">
                        <p class="prod-article-title"><?php echo $result['name'] ?></p>
                        <p class="prod-article-text"><?php echo $description ?> ...</p>
                        <a href="/catalog/viewItem/<?php echo $result['id'] ?>"><button class="btn">LOUER OU &Eacute;CHANGER</button></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            </div>

    </section>


<?php include ('./inc/footer.php'); ?>


</html>

