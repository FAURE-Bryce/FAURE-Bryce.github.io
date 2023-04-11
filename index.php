<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portfolio FAURE Bryce</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="CSS/index_CSS.css">
    <link rel="stylesheet" href="CSS/header-nav_CSS.css">
    <link rel="stylesheet" href="CSS/footer_CSS.css">
</head>
<body>
    <?php
        require_once('header-nav.php');
    ?>
    
    <div id="Accueil">
        <div  id="Titre">
            <h1>Étudiant en Brevet de technicien supérieur Services informatiques aux organisations option SLAM</h1>
            <p>(SLAM = Solutions Logicielles et Applications Métiers)</p>
            <h2>FAURE BRYCE</h2>
        </div>
    </div>
    
    <div id="aPropos">
        <h2>À Propos</h2>
        <div class = div-flex-justify-around>
            <div>
                <div class="aPropos-text">
                    <img src="img/PortraitBryceCostum.jpg" alt="Portrait Bryce" class = "PortraitBryce">
                    <p>
                        Je m'appelle Bryce FAURE, j'ai 19 ans. Je suis actuellement élève au lycée Jean Mermoz à 
                        Montpellier en deuxième année de  BTS SIO option SLAM. Je me suis orienté dans un Bac Pro 
                        Système Numérique option ARED pour au final me réorienter dans un BTS SIO option SLAM pour 
                        faire de la programmation suite à un stage qui m’a énormément plu, le moins qu’on puisse 
                        dire c’est que ça a été un bon choix. J’aime beaucoup l’informatique de manière générale mais 
                        la programmation est de loin le meilleur domaine pour moi.
                    </p>
                </div>
                <div class = "divLogiciel">
                    <img src="img\fullStackDevelopment.gif" alt="full stack development">
                    <div class="logiciel-utilise">
                        <h2>Logiciel</h2>
                        <div>
                            <img src="img\Logo\VisualStudio.png" alt="Visual Studio logo">
                            <img src="img\Logo\VisualStudioCode.png" alt="Visual Studio Code logo">
                            <img src="img\Logo\phpMyAdmin.png" alt="phpMyAdmin logo">
                            <img src="img\Logo\SQLServerManagement.png" alt="SQLServer logo">
                        </div>
                    </div>
                </div>
                <div class = "divLangageFramewok">
                    <div class="langage-utilise">
                        <h2>Langage et Framework</h2>
                        <div>
                            <img src="img\Logo\html.png" alt="html logo">
                            <img src="img\Logo\css.png" alt="css logo">
                            <img src="img\Logo\php.png" alt="php logo">
                            <img src="img\Logo\cScharp.png" alt="C# logo">
                            <img src="img\Logo\java.png" alt="Java logo">
                            <img src="img\Logo\SQLServer.png" alt="SQLServer logo">
                            <img src="img\Logo\mysql.png" alt="MySql logo">
                            <img src="img\Logo\python.png" alt="python logo">
                            <img src="img\Logo\symfony.png" alt="symfony logo">
                        </div>
                    </div>
                    <img src="img\developersGif.gif" alt="developers gif" id = "developersGif">
                </div>
            </div>
            
        </div>
    </div>
    
    <div id="projet">
        <h2>Projet</h2>
        <div id="tout-projet">
            <div class="projet-div-flex">
                <div class="projet-div">
                    <div>
                        <h1>Création d'un site web back office pour une entreprise d'SEO</h1>
                        <h5>Optimisation pour les moteurs de recherche</h5>
                        <img src="img/Stage1/Article-img4.png" alt="article">
                    </div>
                    <p>Le but de ce projet est de fournir une interface claire à mon maître de stage pour pouvoir gérer ses clients et ses articles.</p>
                    <a href="Projet1.php">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    
    <div id = "centreIntérêt">
        <h2>Centres d'intérêt</h2>
        <div id = "divInformatique">
            <p>Passionné d’informatique depuis tout petit je me suis orienté sur un bac professionnel système numérique avant de faire un BTS SIO option SLAM ou j’ai découvert ma passion pour la programmation. Je joue également de temps en temps au jeu vidéo.<p>
            <div>
                <img src="img/JeuVideo/coding.png" alt="coding">
                <img src="img/JeuVideo/programing.png" alt="programing">
                <img src="img/JeuVideo/jg.jpg" alt="baldur's gate 3">
            </div>
        </div>
        <div id = "divSport">
            <p>Le sport est un élément très important de ma vie. J’en ai toujours fait et j’ai toujours adoré cela. C’est sûrement ma deuxième plus grande passion. J'ai pratiqué pendant 7 ans le handball, pendant 5 ans le Taekwondo et pendant 4 ans la musculation. Actuellement je fais encore de la musculation.</p>
            <div>
                <img src="img/Sport/handball.jpg" alt="handball">
                <img src="img/Sport/taekwondo.jpg" alt="taekwondo">
                <img src="img/Sport/musculation.jpg" alt="musculation">
            </div>
        </div>
    </div>

    <?php
        require_once('footer.php');
    ?>
</body>
</html>