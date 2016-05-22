<?php include "./inc/header.php";?>

<a href="/">Home</a><br>

<h1><?php echo $getItems['name']; ?></h1>

<ul>
    <li><img src="/upload/catalog/<?php echo $getItems['view']; ?>.jpg" width="200"></li>
    <li>Sortie le <?php echo date("d/m/Y", strtotime($getItems['releaseDate']))?></li>
    <li>se joue jusqu'à <?php echo $getItems['players']; ?> joueurs</li>
    <li><?php echo $getItems['gameRules']; ?></li>
</ul>

<?php include "./inc/footer.php";?>
