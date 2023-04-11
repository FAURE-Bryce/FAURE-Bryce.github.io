<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portfolio FAURE Bryce - Stage n°1</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="CSS/bootstrap-5.1.3-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="CSS/Projet1_CSS.css">
    <link rel="stylesheet" href="CSS/header-nav_CSS.css">
    <link rel="stylesheet" href="CSS/footer_CSS.css">
</head>
<body>
    <?php
        require_once('header-nav.php');
    ?>
    
    <h1 id="grand-titre">Projet de stage n°1</h1>
    <div id="all-page">
        <p class="text-justify">
            Le but de ce projet est de fournir une interface claire à mon maître de stage pour pouvoir gérer ses clients 
            et ses articles. Le projet me dépasser complètement, il était beaucoup plus long à réaliser pour 4 semaines 
            de stage, donc j’ai fait de mon mieux pour rendre le meilleur site possible avec une documentation détaillée. 
            Les images sont toutes cliquables pour les voir en grand.
        </p>
        <p>Le projet se découpe en quatre page : </p>

        <div>
            <h5>La page accueil</h5>
            <div class="Accueil-img1">
                <p>
                    La parti accueil sert à présenter les  trois bouton cliquable pour accéder au trois autre page.
                </p>
                <a href="img/Stage1/Accueil-img1.png"><img src="img/Stage1/Accueil-img1.png" alt="accueil"></a>
            </div>
        </div>

        <div>
            <h5>La page article</h5>
            <div class="Article-img1">
                <p class="text-justify">
                    La parti article sert à la présentation de tous les blogs qui sont créés à partir des articles de la base de 
                    données. Les boutons “voir +” serve à afficher les blogs de la catégorie sélectionnée uniquement, dans le grand 
                    tableau en bas de la page, il affiche aussi le tableau des sous-catégories lié à la catégorie.
                </p>
                <a href="img/Stage1/Article-img1.png"><img src="img/Stage1/Article-img1.png" alt="article"></a>
            </div>
            <div class="Article-img2">
                <p>
                    Le tableau des sous-catégories est là pour avoir des informations plus précise sur les catégories et leurs sous-catégories respectives (id, libellé, nombre de blog net libellé).
                </p>
                <a href="img/Stage1/Article-img2.png"><img src="img/Stage1/Article-img2.png" alt="article"></a>
            </div>

            <div class="Article-img3">
                <p class="text-justify">
                    Le grand tableau récapitulatif sert à avoir une vu d’ensemble des blogs de la base de donnée on retrouve l’id, 
                    l’article cible, la catégorie, la note sur 5, la liste des sous-catégories, le contenu et un bouton pour supprimer 
                    le blogs avec un message de confirmation pour éviter les erreurs.
                </p>
                <a href="img/Stage1/Article-img3.png"><img src="img/Stage1/Article-img3.png" alt="article"></a>
            </div>

            <div class="Article-img4">
                <p>
                    La page complète ressemble à ça :
                </p>
                <a href="img/Stage1/Article-img4.png"><img src="img/Stage1/Article-img4.png" alt="article"></a>
            </div>
        </div>
        <div>
            <h5>La page client</h5>
            <div class="Client-img2-Client-img1">
                <div class="Client-img2">
                    <p class="text-justify">
                        La page client est là pour voir des informations comme son nom et prénom, son nombre d'articles, ses sites, la 
                        formule prise par le client (que je n’ai pas eu le temps de développer) et un bouton “voir +” pour pouvoir modifier 
                        les informations client au besoin.
                    </p>
                    <a href="img/Stage1/Client-img2.png"><img src="img/Stage1/Client-img2.png" alt="client"></a>
                </div>

                <div class="Client-img1">
                    <p class="text-justify">
                        Dans cette page il y a aussi un trieur de client avec une barre de recherche par nom et la possibilité de 
                        voir les clients avec un seul et ce avec plusieurs sites ou tous les clients.
                    </p>
                    <a href="img/Stage1/Client-img1.png"><img src="img/Stage1/Client-img1.png" alt="client"></a>
                </div>
            </div>
            
            <div class="Client-img5">
                <p>
                    La page complète ressemble à ça :
                </p>
                <a href="img/Stage1/Client-img5.png"><img src="img/Stage1/Client-img5.png" alt="client"></a>
            </div>

            <div class="Client-img3">
                <p>
                    Si on clique sur le bouton “voir +” ça nous amène sur cette page :
                </p>
                <a href="img/Stage1/Client-img3.png"><img src="img/Stage1/Client-img3.png" alt="client"></a>
            </div>

            <div class="Client-img4">
                <p>
                    Et si on clique sur le lien “site du client” ça nous amène sur cette page:
                </p>
                <a href="img/Stage1/Client-img4.png"><img src="img/Stage1/Client-img4.png" alt="client"></a>
            </div>
        </div>

        <div>
            <h5>La page blog</h5>
            <div class="Blog-img1">
                <p class="text-justify">
                    Dans la partie blog on a un tableau récapitulatif avec l’id, l’url, la catégorie, la note et un bouton supprimer. 
                    On peut voir aussi un bouton “Ajouter un article” il sert comme son nom l’indique à ajouter un article qui sera 
                    ensuite découpé en plusieurs blog pu ajouter à la base de donnée.
                </p>
                <a href="img/Stage1/Blog-img1.png"><img src="img/Stage1/Blog-img1.png" alt="blog"></a>
            </div>

            <div class="Blog-img2">
                <p class="text-justify">
                    Voici la page d’ajout d’article, pour ajouter un article on doit donner son url sa catégorie et sa note. 
                    Les sous-catégories ne fonctionnent pas donc je ne les ai pas implémentés dans le processus, le problème 
                    ne vient pas de la multiplication par trois de l’affichage c’était pour faire des test sur mon CSS que j’ai 
                    fais ça. Le problème était trop compliqué pour moi donc je n’ai pas pu finir cette partie du site non plus.
                </p>
                <a href="img/Stage1/Blog-img2.png"><img src="img/Stage1/Blog-img2.png" alt="blog"></a>
            </div>
        </div>
    </div>
    
    
    <?php
        require_once('footer.php');
    ?>
</body>
</html>