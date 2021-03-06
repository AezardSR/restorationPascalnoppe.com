<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="asset/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PascalNoppe - Accueil</title>
</head>
<body>
    <header id="mainHeader">
        <div id="mainNav">
            <div>
                <a href="index.html"><img id="logoNav" src="asset/img/LogoPN01-300x265.png" alt=""></a>
            </div>
            <nav id="menu" class="toggle-on">
                <a id="pres"  href="presentation.html">Pascal Noppe</a>
                <a href="index.html" class="active">Accueil</a>
                <a href="NotreSucré.php">Notre Sucré</a>
                <a href="NotreSalé.php">Notre Salé</a>
                <a href="contact.html">Contact</a>
            </nav>
            <div id="menu-button" class="close"></div>
        </div>
        <div id="titreSite">
            <h1>Patisier - Chocolatier</h1>
            <h2>Pascal Noppe</h2>
        </div>
    </header>
    <main>
        <div id="blog">
            <h2>blog</h2>
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=pascalnoppereno;charset=utf8', 'root', '');
            ?>
            <div id="articleBlog">
                <?php
                $reponse = $bdd->query('SELECT * FROM blog');
                while ($donnees = $reponse->fetch()) {
                ?>
                <div class="divBlog">
                    <a href="#"><?php echo $donnees['title'] ?></a>
                    <div>
                        <p><?php echo $donnees['entry'] ?></p>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>

        <div>
            <h2>Notre Boutique</h2>
            <div id="divNotreBoutique">
                <img src="asset/img/boutique.jpg" alt="photo de la devanture du magasin">
                <div id="textNotreBoutique">
                    <p>Située en plein coeur de Chantilly , sur la place Omer Vallon, au No. 4 , ouvert du Mardi au dimanche ,</p>
                    <p>Fermée le lundi.</p>
                    <p>Tél: 03 44 57 01 10</p>
                    <h3>Horaires d’ouverture :</h3>
                    <ul>
                        <li>mardi : 8h00 à 13h00 – 14h30 à 19h00</li>
                        <li>mercredi : 7h15 à 13h00 – 14h00 à 19h30</li>
                        <li>jeudi : 7h15 à 13h00 – 14h00 à 19h30</li>
                        <li>vendredi : 7h15 à 13h00 – 14h00 à 19h30</li>
                        <li>samedi : 7h15 à 13h30 – 14h30 à 19h30</li>
                        <li>dimanche : 7h15 à 13h30 – 14h30 à 17h30</li>
                    </ul>
                </div>
                <div>
                    <iframe id="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2607.323885860991!2d2.4637757156752613!3d49.194415084941745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e64814fc3653c5%3A0x98b36c3452b2f8e1!2s4%20Place%20Omer%20Vallon%2C%2060500%20Chantilly!5e0!3m2!1sfr!2sfr!4v1627291968112!5m2!1sfr!2sfr"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
        <div id="divNosBrochures">
            <h2>Nos Brochures</h2>
            <div id="textNosBrochures">
                <div class="divBrochure">
                    <a href="asset/docs/broch1.pdf"><img class="imgBrochureLarge" src="asset/img/brochure1.png" alt="photo de la 1er brochure"></a>
                    <p>Nos macarons sucrés et nos macarons salés</p>
                </div>
                <div class="divBrochure">
                    <a target="_blank" href="asset/docs/broch2.pdf"><img class="imgBrochureLarge" src="asset/img/brochure2.png" alt="photo de la 2ème brochure"></a>
                    <p>Notre gamme de bonbons chocolats et truffes est proposée en ballotins , boîtes, ou cubes d’une élé- gance raffinée pour vous faire saliver d’avance, des sensations intenses, des plaisirs irrésistibles, des ganaches , des croquants, des caramels et des pâtes d’amandes pour succomber à la tentation…</p>
                    <p>Il est conseillé de conserver nos chocolats à une température ambiante comprise ente 14 °C et 17 °C à l’abri de l’humidité et des odeurs fortes.</p>
                </div>
                <div class="divBrochure">
                    <a target="_blank" href="asset/docs/broche3.pdf"><img class="imgBrochure" src="asset/img/brochure3.png" alt="image de la brochure de noël"></a>
                    <div>
                        <p>Découvrez nos bûches spécial noël 2020 :</p>
                        <ul>
                            <li>Magestic</li>
                            <li>Concerto</li>
                            <li>Subtile</li>
                            <li>Addiction</li>
                        </ul>
                    </div>
                </div>
                <div class="divBrochure">
                    <div>
                        <a target="_blank" href="asset/docs/broch4.pdf"><img class="imgBrochure" src="asset/img/brochure4.png" alt="photo de la 'eme brochure"></a>
                        <p>Notre catalogue 2020-2021</p>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <footer>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="asset/js/main.js"></script>
</body>
</html>