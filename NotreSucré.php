<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>PascalNoppe - Notre Sucré</title>
</head>
<body>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=pascalnoppereno;charset=utf8', 'root', '');
?>
<header>
    <div id="mainNav2" class="navLight">
        <div>
            <a href="index.html"><img id="logoNav" src="asset/img/LogoPN01-300x265.png" alt=""></a>
        </div>
        <nav id="menu" class="toggle-on">
            <a id="pres" href="presentation.html">Pascal Noppe</a>
            <a href="index.php" >Accueil</a>
            <a href="NotreSucré.php" class="active">Notre Sucré</a>
            <a href="NotreSalé.php">Notre Salé</a>
            <a href="contact.html">Contact</a>
        </nav>
        <div id="menu-button" class="close"></div>
    </div>
</header>
    <div id="boutique">
        <?php
        $reponse = $bdd->query('SELECT * FROM articles');
        while ($donnees = $reponse->fetch()) {
            if ($donnees['ArticleType']=='sucré'){
        ?>
        <div class="divBoutique">
        <img class="imgArticle" src="<?php echo 'asset/img/'.$donnees['imageLink'].'.'.$donnees['TypeFichier']; ?>" alt="">
            <p class="nameArticle"><?php echo $donnees['ArticleName']; ?></p>
            <button class="buttonAchat">Reserver</button>
        </div>
            <?php }} ?>
    </div>

<script src="asset/js/main.js"></script>
</body>
</html>