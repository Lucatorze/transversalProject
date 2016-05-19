<?php
include "./inc/header.php";
if(!isset($_SESSION['userId'])){
    ?>
    Vous ne pouvez pas accéder à cette page en étant déconnecté.<br>
    <a href="/">Home</a>
    <?php
}
else {
    ?>

    <a href="/">Home</a>
    <form name="newMsg" method="post">
        <?php if ($id == NULL){
            ?>
            <label for="recipientId">Destinataire : </label><br>
            <input type="text" name="recipientId" class='flexdatalist' data-min-length='1' list='recipientId'>
            <datalist id="recipientId">
                <?php foreach ($getNickname as $result):?>
                    <option value="<?php echo $result['nickname']; ?>"><?php echo $result['nickname']; ?></option>
                <?php endforeach; ?>
            </datalist><br><br>
            <?php
        }
        else{
            ?>

            <input type="hidden" name="recipientId" id="recipientId" value="<?php echo $id; ?>">
            <?php
        }
        ?>
        <label for="title">Titre du message : </label><br>
        <input type="text" name="title" id="tile"><br>
        <br>
        <label for="content">Message : </label><br>
        <textarea id="content" name="content"></textarea><br>
        <br>
        <input type="submit" name="submit" value="Envoyer !">
    </form>

    <?php
}
include "./inc/footer.php";
?>
