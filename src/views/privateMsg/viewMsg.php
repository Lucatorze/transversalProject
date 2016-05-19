<?php
include "./inc/header.php";
if(!isset($_SESSION['userId'])){
    ?>
    Vous ne pouvez pas accéder à cette page en étant déconnecté.<br>
    <a href="/">Home</a>
    <?php
}
else {

    if ($_SESSION['userId'] != $getMsg['recipientId']){
        ?>
        Vous ne pouvez pas voir ce message.<br>
        <a href="/">Home</a><br>
        <?php
    }
    else{
        ?>
        <a href="/">Home</a><br>

        <h2><?php echo $getMsg['title']; ?></h2>
        <h3>de <a href="/users/profile/<?php echo $getMsg['authorId']?>/"><?php echo $getUserProfile['nickname']?></a> le <?php echo date('d/m/Y à H\hi', $getMsg['date']); ?></h3>

        <div><?php echo $getMsg['content']; ?></div>

        <a href="/privateMsg/create/<?php echo $getMsg['authorId']?>">répondre</a><br>

        <?php
    }
}
include "./inc/footer.php";
?>
