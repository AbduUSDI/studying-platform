<?php

$title = "Accueil - Liste des Cours";

include_once 'templates/header.php';
?>

<div class="content">
    <div class="container animate__animated animate__fadeInUp custom-container">
        <div class="container mt-5 custom-container">
        <h1 class="text-primary text-center mb-4">Bienvenue sur FullStackExplorer</h1>
        <p class="text-center mb-5">Explorez une gamme de cours pour enrichir vos compétences en développement web, programmation et plus encore.</p>
            <div class="container search-container mt-4">
                <h2 class="text-center">Rechercher dans la plateforme</h2>
                <div class="form-group">
                    <input type="text" id="searchBar" class="form-control" placeholder="Recherchez un QCM, un cours ou une catégorie...">
                    <ul id="searchResults" class="list-group mt-2"></ul>
                </div>
            </div>
        </div>
        <div class="container mt-5 custom-container">
            <div class="row">
                <div class="col-md-6">
                <h2 class="text-primary text-center mb-4">Derniers ajouts de la semaine :</h2>
                    <ul>
                        <li>
                            JavaScript - JavaScript de base + Exercices interactifs : jeu du pendu et jeu des 10 questions
                            <p class="text-muted">Ajouté le 8 décembre 2024 à 23h18</p>
                        </li>
                        <li>
                            VueJS - Ajout d'un cours couvrant l'intégralité du framework, incluant l'utilisation de base, avancée et professionnelle.
                            <p class="text-muted">Ajouté le 14 décembre 2024 à 20h46</p>
                        </li>
                        <li>
                            NestJS - Ajout du cours sur NestJS, le framework back-end. Ce cours propose un apprentissage rapide avec des exemples pratiques et des bonnes pratiques.
                            <p class="text-muted">Ajouté le 15 décembre 2024 à 10h02</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                <h2 class="text-primary text-center mb-4">Les minis jeux éducatif :</h2>
                    <ul>
                        <li>
                            Jeu du pendu, Langage : JavaScript, difficulté : Expert.
                            <p class="text-muted">Ce mini jeu du pendu est différent du pendu habituel, il faut répondre aux 10 questions sans perdre.</p>
                            <a href="https://www.abduusdi.fr/cours/index.php?page=cours_js" class="card__cta">Jouer moi</a>
                        </li>
                        <li>
                            Jeu da course au quiz : JavaScript, difficulté : Débutant et intermédiaire.
                            <p class="text-muted">Ce mini jeu est en faite une balle qui avance au fur et a mesure de vos réponses, au bout de 10 question si vous n'avez pas réussi à dépasser la ligne c'est perdu.</p>
                            <a href="https://www.abduusdi.fr/cours/index.php?page=cours_js" class="card__cta">Jouer moi</a>
                        </li>
                        <li>
                            Evaluation sur AJAX (QUIZ) : Langage : AJAX, difficulté : Débutant et intermédiaire
                            <p class="text-muted">Cette évaluation mettra en oeuvre vos compétences sur AJAX, avec un total de 20 questions.</p>
                            <a href="https://www.abduusdi.fr/cours/exercice_ajax/evaluation/ajax_evaluation.php" class="card__cta">Jouer moi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    <div class="row">
        <!-- Section HTML et CSS -->
        <div class="col-12">
            <h3 class="text-secondary mb-3">HTML et CSS ainsi que les frameworks CSS</h3>
        </div>
            <!-- Cours HTML -->
            <div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-code card__icon"></i>
            </div>
            <h2 class="card__title">Cours HTML</h2>
            <p class="card__text">
                Apprenez à structurer vos pages web avec HTML, le langage fondamental pour créer des sites web.
            </p>
            <ul class="card__list">
                <li>Structuration de contenu</li>
                <li>Balises essentielles</li>
                <li>Création de formulaires et tableaux</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-success">Débutant</span>
                <span class="badge badge-secondary">3h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_html" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalHTML">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


            <!-- Modale pour les détails du cours HTML -->
            <div class="modal fade" id="modalHTML" tabindex="-1" aria-labelledby="modalHTMLLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="modalHTMLLabel">Détails du Cours HTML</h5>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                <strong>Objectifs :</strong><br>
                                - Comprendre la structure de base des documents HTML.<br>
                                - Utiliser les balises pour organiser le contenu : titres, paragraphes, listes, images, et liens.<br>
                                - Créer des formulaires interactifs.
                            </p>
                            <p>
                                <strong>Pré-requis :</strong><br>
                                Aucun. Ce cours est adapté aux débutants.
                            </p>
                            <p>
                                <strong>Ressources supplémentaires :</strong><br>
                                - <a href="https://developer.mozilla.org/fr/docs/Web/HTML" target="_blank">Documentation HTML sur MDN</a><br>
                                - Vidéos explicatives sur <a href="https://www.youtube.com/watch?v=qsbkZ7gIKnc" target="_blank">YouTube</a>.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <a href="index.php?page=cours_html" class="card__cta">Commencer le cours</a>
                        </div>
                    </div>
                </div>
            </div>


<!-- Cours CSS -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-paint-brush card__icon"></i>
            </div>
            <h2 class="card__title">Cours CSS</h2>
            <p class="card__text">
                Apprenez à styliser vos pages web avec CSS, le langage qui donne vie à vos designs.
            </p>
            <ul class="card__list">
                <li>Styles de base : couleurs, polices, arrière-plans</li>
                <li>Mise en page : flexbox, grid</li>
                <li>Animations et transitions</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-success">Débutant</span>
                <span class="badge badge-secondary">4h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_css" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalCSS">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours CSS -->
<div class="modal fade" id="modalCSS" tabindex="-1" aria-labelledby="modalCSSLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="modalCSSLabel">Détails du Cours CSS</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases du stylisme avec CSS.<br>
                    - Maîtriser la mise en page moderne avec Flexbox et Grid.<br>
                    - Créer des designs dynamiques avec des animations et des transitions.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en HTML.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://developer.mozilla.org/fr/docs/Web/CSS" target="_blank">Documentation CSS sur MDN</a><br>
                    - Vidéos explicatives sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_css" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours Bootstrap -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-layer-group card__icon"></i>
            </div>
            <h2 class="card__title">Cours Bootstrap</h2>
            <p class="card__text">
                Apprenez à créer des sites web réactifs et modernes rapidement grâce à Bootstrap.
            </p>
            <ul class="card__list">
                <li>Grille responsive</li>
                <li>Composants : boutons, cartes, modales</li>
                <li>Personnalisation avec SCSS</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">5h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_bootstrap" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalBootstrap">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Bootstrap -->
<div class="modal fade" id="modalBootstrap" tabindex="-1" aria-labelledby="modalBootstrapLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalBootstrapLabel">Détails du Cours Bootstrap</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre la structure et l'utilisation de la grille Bootstrap.<br>
                    - Savoir intégrer des composants prêts à l'emploi comme les boutons, modales, et cartes.<br>
                    - Personnaliser Bootstrap pour répondre à vos besoins spécifiques grâce au SCSS.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en HTML et CSS.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://getbootstrap.com" target="_blank">Documentation officielle Bootstrap</a><br>
                    - Vidéos explicatives sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_bootstrap" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours Tailwind CSS -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-paint-roller card__icon"></i>
            </div>
            <h2 class="card__title">Cours Tailwind CSS</h2>
            <p class="card__text">
                Apprenez Tailwind CSS, un framework utilitaire moderne pour concevoir des interfaces web rapidement et efficacement.
            </p>
            <ul class="card__list">
                <li>Classes utilitaires pour une personnalisation rapide</li>
                <li>Création de designs réactifs</li>
                <li>Personnalisation avec des configurations Tailwind</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-success">Débutant</span>
                <span class="badge badge-secondary">4h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_tailwind" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalTailwind">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Tailwind CSS -->
<div class="modal fade" id="modalTailwind" tabindex="-1" aria-labelledby="modalTailwindLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalTailwindLabel">Détails du Cours Tailwind CSS</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les concepts de Tailwind CSS et ses classes utilitaires.<br>
                    - Créer des designs modernes et réactifs avec Tailwind.<br>
                    - Apprendre à personnaliser le framework pour des besoins spécifiques.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en HTML et CSS.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://tailwindcss.com/docs" target="_blank">Documentation officielle Tailwind CSS</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_tailwind" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Section UX/UI -->
<div class="col-12 mt-5">
    <h3 class="text-secondary mb-4">
        <i class="fas fa-lightbulb text-warning"></i> UX/UI, Accessibilité Web & Prototypage
    </h3>
</div>

<!-- Cours Introduction à l'UX -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-users card__icon"></i>
            </div>
            <h2 class="card__title">Introduction à l'UX</h2>
            <p class="card__text">
                Découvrez les principes fondamentaux pour offrir une expérience utilisateur optimale.
            </p>
            <ul class="card__list">
                <li>Comprendre les besoins utilisateurs</li>
                <li>Analyse des parcours utilisateurs</li>
                <li>Conception centrée utilisateur</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-success">Débutant</span>
                <span class="badge badge-secondary">3h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_ux" class="card__cta">Voir le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours Introduction à l'UI -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-palette card__icon"></i>
            </div>
            <h2 class="card__title">Introduction à l'UI</h2>
            <p class="card__text">
                Apprenez à concevoir des interfaces utilisateur intuitives et esthétiques.
            </p>
            <ul class="card__list">
                <li>Choix des couleurs et typographies</li>
                <li>Éléments d'interface interactifs</li>
                <li>Guidelines design</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-success">Débutant</span>
                <span class="badge badge-secondary">4h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_ui" class="card__cta">Voir le cours</a>
            </div>
        </div>
    </div>
</div>


<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-universal-access card__icon"></i>
            </div>
            <h2 class="card__title">Accessibilité Web</h2>
            <p class="card__text">
                Apprenez les bonnes pratiques pour créer des sites accessibles à tous.
            </p>
            <ul class="card__list">
                <li>Normes d'accessibilité (WCAG)</li>
                <li>Tests d'accessibilité</li>
                <li>Outils et plugins</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">5h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_accessibilite" class="card__cta">Voir le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours Prototypage et Wireframes -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-drafting-compass card__icon"></i>
            </div>
            <h2 class="card__title">Prototypage et Wireframes</h2>
            <p class="card__text">
                Maîtrisez les outils et techniques pour concevoir des prototypes efficaces.
            </p>
            <ul class="card__list">
                <li>Outils de prototypage : Figma, Adobe XD</li>
                <li>Techniques de wireframing</li>
                <li>Tester les prototypes avec les utilisateurs</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-danger">Avancé</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_prototypage" class="card__cta">Voir le cours</a>
            </div>
        </div>
    </div>
</div>

        <!-- Section Langages de Programmation -->
        <div class="col-12 mt-5">
            <h3 class="text-secondary mb-3">Langages de Programmation</h3>
        </div>

<!-- Cours JavaScript -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-js card__icon"></i>
            </div>
            <h2 class="card__title">Cours JavaScript</h2>
            <p class="card__text">
                Apprenez JavaScript, le langage de programmation incontournable pour créer des pages web dynamiques.
            </p>
            <ul class="card__list">
                <li>Manipulation du DOM</li>
                <li>Programmation asynchrone</li>
                <li>ES6 et syntaxe moderne</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_js" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalJavaScript">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours JavaScript -->
<div class="modal fade" id="modalJavaScript" tabindex="-1" aria-labelledby="modalJavaScriptLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="modalJavaScriptLabel">Détails du Cours JavaScript</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de la programmation JavaScript.<br>
                    - Manipuler les éléments HTML via le DOM.<br>
                    - Savoir gérer les promesses et l'asynchronisme.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en HTML et CSS.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://developer.mozilla.org/fr/docs/Web/JavaScript" target="_blank">Documentation JavaScript sur MDN</a><br>
                    - Vidéos explicatives sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_js" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours PHP -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-server card__icon"></i>
            </div>
            <h2 class="card__title">Cours PHP</h2>
            <p class="card__text">
                Apprenez PHP, le langage côté serveur utilisé pour créer des sites web dynamiques et interactifs.
            </p>
            <ul class="card__list">
                <li>Introduction à PHP et syntaxe de base</li>
                <li>Gestion des formulaires</li>
                <li>Connexion aux bases de données (MySQL)</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">5h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_php" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalPHP">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours PHP -->
<div class="modal fade" id="modalPHP" tabindex="-1" aria-labelledby="modalPHPLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalPHPLabel">Détails du Cours PHP</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Découvrir la syntaxe et les bases du langage PHP.<br>
                    - Savoir gérer les formulaires et les sessions utilisateur.<br>
                    - Apprendre à connecter PHP à une base de données MySQL.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en HTML et CSS.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://www.php.net/manual/fr/" target="_blank">Documentation officielle PHP</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_php" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>

<!-- Cours Python -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-python card__icon"></i>
            </div>
            <h2 class="card__title">Cours Python</h2>
            <p class="card__text">
                Découvrez Python, un langage polyvalent, facile à apprendre, et idéal pour le développement rapide.
            </p>
            <ul class="card__list">
                <li>Syntaxe simple et lisible</li>
                <li>Structures de données et boucles</li>
                <li>Manipulation des fichiers et programmation orientée objet</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-success">Débutant</span>
                <span class="badge badge-secondary">4h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_python" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalPython">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Python -->
<div class="modal fade" id="modalPython" tabindex="-1" aria-labelledby="modalPythonLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="modalPythonLabel">Détails du Cours Python</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Apprendre les bases du langage Python.<br>
                    - Manipuler les structures de données comme les listes et dictionnaires.<br>
                    - Comprendre les bases de la programmation orientée objet (POO).
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en programmation (facultatif).
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://docs.python.org/fr/3/" target="_blank">Documentation officielle Python</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_python" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours Java -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fab fa-java card__icon"></i>
            </div>
            <h2 class="card__title">Cours Java</h2>
            <p class="card__text">
                Apprenez Java, un langage robuste et polyvalent utilisé dans les applications web, mobiles, et backend.
            </p>
            <ul class="card__list">
                <li>Syntaxe et concepts de base</li>
                <li>Programmation orientée objet (POO)</li>
                <li>Gestion des fichiers et flux</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_java" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalJava">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Java -->
<div class="modal fade" id="modalJava" tabindex="-1" aria-labelledby="modalJavaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="modalJavaLabel">Détails du Cours Java</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de Java et sa syntaxe.<br>
                    - Maîtriser les concepts de la programmation orientée objet.<br>
                    - Apprendre à manipuler des fichiers et gérer les flux.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en programmation (facultatif).
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://docs.oracle.com/javase/8/docs/" target="_blank">Documentation officielle Java</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_java" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours Rust -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-cogs card__icon"></i>
            </div>
            <h2 class="card__title">Cours Rust</h2>
            <p class="card__text">
                Découvrez Rust, un langage moderne axé sur la performance, la sécurité mémoire et la concurrence.
            </p>
            <ul class="card__list">
                <li>Gestion de la mémoire sans garbage collector</li>
                <li>Concepts clés : ownership, borrowing</li>
                <li>Programmation système et multithread</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-danger">Avancé</span>
                <span class="badge badge-secondary">7h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_rust" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalRust">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Rust -->
<div class="modal fade" id="modalRust" tabindex="-1" aria-labelledby="modalRustLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="modalRustLabel">Détails du Cours Rust</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les concepts uniques de Rust : ownership, borrowing, lifetimes.<br>
                    - Écrire du code performant et sécurisé.<br>
                    - Découvrir la programmation système et concurrente avec Rust.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en programmation (C, C++, ou équivalent).
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://doc.rust-lang.org/" target="_blank">Documentation officielle Rust</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_rust" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-rocket card__icon"></i>
            </div>
            <h2 class="card__title">Cours Go (Golang)</h2>
            <p class="card__text">
                Découvrez Go, un langage rapide, simple et efficace, idéal pour les applications modernes.
            </p>
            <ul class="card__list">
                <li>Syntaxe simple et typage statique</li>
                <li>Gestion des goroutines pour la concurrence</li>
                <li>Développement d'API et outils CLI</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">5h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_go" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalGo">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Go -->
<div class="modal fade" id="modalGo" tabindex="-1" aria-labelledby="modalGoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="modalGoLabel">Détails du Cours Go</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre la syntaxe et les concepts de base de Go.<br>
                    - Maîtriser les goroutines pour la programmation concurrente.<br>
                    - Développer des outils CLI et des API performants.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances en programmation de base (Python, Java ou équivalent).
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://go.dev/doc/" target="_blank">Documentation officielle Go</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_go" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours Swift -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fab fa-apple card__icon"></i>
            </div>
            <h2 class="card__title">Cours Swift</h2>
            <p class="card__text">
                Découvrez Swift, le langage moderne et rapide conçu par Apple pour développer des applications iOS et macOS.
            </p>
            <ul class="card__list">
                <li>Syntaxe simple et sûre</li>
                <li>Gestion de la mémoire avec ARC</li>
                <li>Création d'applications iOS avec UIKit et SwiftUI</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-success">Débutant</span>
                <span class="badge badge-secondary">5h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_swift" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalSwift">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Swift -->
<div class="modal fade" id="modalSwift" tabindex="-1" aria-labelledby="modalSwiftLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalSwiftLabel">Détails du Cours Swift</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de Swift et sa syntaxe sûre.<br>
                    - Apprendre à développer des applications iOS simples.<br>
                    - Découvrir les outils modernes comme SwiftUI pour créer des interfaces.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Aucune connaissance préalable en programmation nécessaire.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://developer.apple.com/swift/" target="_blank">Documentation officielle Swift</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_swift" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours C -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-microchip card__icon"></i>
            </div>
            <h2 class="card__title">Cours C</h2>
            <p class="card__text">
                Apprenez le langage C, l’un des langages les plus influents et performants pour la programmation système.
            </p>
            <ul class="card__list">
                <li>Syntaxe de base et structures conditionnelles</li>
                <li>Pointeurs et gestion de la mémoire</li>
                <li>Développement de programmes système</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-danger">Avancé</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_c" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalC">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modale pour les détails du cours C -->
<div class="modal fade" id="modalC" tabindex="-1" aria-labelledby="modalCLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="modalCLabel">Détails du Cours C</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre la syntaxe et les bases de la programmation en C.<br>
                    - Apprendre la gestion manuelle de la mémoire avec les pointeurs.<br>
                    - Développer des programmes performants pour les systèmes embarqués et applications système.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en programmation.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://en.cppreference.com/w/c" target="_blank">Documentation C officielle</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_c" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours C++ -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-cogs card__icon"></i>
            </div>
            <h2 class="card__title">Cours C++</h2>
            <p class="card__text">
                Apprenez C++, un langage puissant pour la programmation orientée objet et le développement de logiciels complexes.
            </p>
            <ul class="card__list">
                <li>Concepts avancés de la POO</li>
                <li>Utilisation des templates et bibliothèques standards (STL)</li>
                <li>Applications en temps réel et systèmes embarqués</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-danger">Avancé</span>
                <span class="badge badge-secondary">7h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_cpp" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalCpp">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours C++ -->
<div class="modal fade" id="modalCpp" tabindex="-1" aria-labelledby="modalCppLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalCppLabel">Détails du Cours C++</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Apprendre les concepts avancés de la programmation orientée objet avec C++.<br>
                    - Découvrir les templates et les bibliothèques standards pour des programmes génériques.<br>
                    - Développer des applications complexes et des logiciels embarqués.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en programmation, idéalement en C.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://en.cppreference.com/w/cpp" target="_blank">Documentation C++ officielle</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_cpp" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours Kotlin -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-mobile-alt card__icon"></i>
            </div>
            <h2 class="card__title">Cours Kotlin</h2>
            <p class="card__text">
                Découvrez Kotlin, un langage moderne, concis et puissant, conçu pour le développement Android et multiplateforme.
            </p>
            <ul class="card__list">
                <li>Syntaxe simplifiée et sûre</li>
                <li>Interopérabilité avec Java</li>
                <li>Développement d'applications Android</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">5h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_kotlin" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalKotlin">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Kotlin -->
<div class="modal fade" id="modalKotlin" tabindex="-1" aria-labelledby="modalKotlinLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="modalKotlinLabel">Détails du Cours Kotlin</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de la syntaxe Kotlin et ses avantages.<br>
                    - Développer des applications Android modernes avec Kotlin.<br>
                    - Utiliser Kotlin pour des projets multiplateformes.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances en Java ou en développement Android (recommandé).
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://kotlinlang.org/" target="_blank">Documentation officielle Kotlin</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_kotlin" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


        <!-- Section Frameworks et Bibliothèques -->
        <div class="col-12 mt-5">
            <h3 class="text-secondary mb-3">Frameworks et Bibliothèques</h3>
        </div>
<!-- Cours AJAX -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-sync-alt card__icon"></i>
            </div>
            <h2 class="card__title">Cours AJAX</h2>
            <p class="card__text">
                Apprenez AJAX, une technologie essentielle pour créer des applications web dynamiques et interactives sans recharger la page.
            </p>
            <ul class="card__list">
                <li>Communication avec le serveur sans rechargement</li>
                <li>Utilisation des méthodes HTTP (GET, POST)</li>
                <li>Manipulation des réponses JSON</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">3h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_ajax" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalAJAX">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours AJAX -->
<div class="modal fade" id="modalAJAX" tabindex="-1" aria-labelledby="modalAJAXLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalAJAXLabel">Détails du Cours AJAX</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre le fonctionnement d'AJAX et son rôle dans les applications web modernes.<br>
                    - Savoir interagir avec une API via des requêtes HTTP.<br>
                    - Manipuler et afficher les données JSON dans une interface utilisateur.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances en JavaScript et HTML.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://developer.mozilla.org/fr/docs/Web/Guide/AJAX" target="_blank">Documentation AJAX sur MDN</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_ajax" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>

<!-- Cours React -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fab fa-react card__icon"></i>
            </div>
            <h2 class="card__title">Cours React</h2>
            <p class="card__text">
                Apprenez React, une bibliothèque JavaScript puissante pour construire des interfaces utilisateur dynamiques et performantes.
            </p>
            <ul class="card__list">
                <li>Composants réutilisables</li>
                <li>Gestion de l'état avec Hooks</li>
                <li>Création d'applications SPA modernes</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_react" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalReact">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours React -->
<div class="modal fade" id="modalReact" tabindex="-1" aria-labelledby="modalReactLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="modalReactLabel">Détails du Cours React</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de React et la création de composants réutilisables.<br>
                    - Gérer l'état des applications avec les Hooks et le Context API.<br>
                    - Construire des Single Page Applications (SPA) interactives et performantes.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en JavaScript, HTML et CSS.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://reactjs.org/docs/getting-started.html" target="_blank">Documentation officielle React</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_react" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours Vue.js -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fab fa-vuejs card__icon"></i>
            </div>
            <h2 class="card__title">Cours Vue.js</h2>
            <p class="card__text">
                Apprenez Vue.js, un framework JavaScript progressif et intuitif pour créer des interfaces utilisateur interactives.
            </p>
            <ul class="card__list">
                <li>Comprendre les directives et la liaison de données</li>
                <li>Créer des composants réutilisables</li>
                <li>Utiliser Vue Router et Vuex</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">5h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_vuejs" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalVue">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Vue.js -->
<div class="modal fade" id="modalVue" tabindex="-1" aria-labelledby="modalVueLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="modalVueLabel">Détails du Cours Vue.js</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de Vue.js, y compris la liaison de données et les directives.<br>
                    - Construire des composants dynamiques et réutilisables.<br>
                    - Utiliser Vue Router pour la navigation et Vuex pour la gestion de l'état.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en JavaScript, HTML et CSS.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://vuejs.org/v2/guide/" target="_blank">Documentation officielle Vue.js</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_vuejs" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours NestJS -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-server card__icon"></i>
            </div>
            <h2 class="card__title">Cours NestJS</h2>
            <p class="card__text">
                Découvrez NestJS, un framework backend puissant basé sur Node.js, conçu pour construire des applications serveur évolutives et modulaires.
            </p>
            <ul class="card__list">
                <li>Apprendre les bases de NestJS et l'architecture modulaire</li>
                <li>Créer des APIs RESTful et GraphQL</li>
                <li>Gérer les bases de données avec TypeORM</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Avancé</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_nestjs" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalNest">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours NestJS -->
<div class="modal fade" id="modalNest" tabindex="-1" aria-labelledby="modalNestLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="modalNestLabel">Détails du Cours NestJS</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Maîtriser les bases de NestJS et son architecture modulaire.<br>
                    - Construire des APIs performantes avec des fonctionnalités RESTful et GraphQL.<br>
                    - Intégrer et gérer des bases de données avec TypeORM ou Prisma.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Bonne maîtrise de JavaScript/TypeScript, Node.js, et des concepts de programmation backend.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://docs.nestjs.com/" target="_blank">Documentation officielle NestJS</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.<br>
                    - Guides avancés sur <a href="https://dev.to/" target="_blank">Dev.to</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_nestjs" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours Angular -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fab fa-angular card__icon"></i>
            </div>
            <h2 class="card__title">Cours Angular</h2>
            <p class="card__text">
                Apprenez Angular, un framework JavaScript puissant pour créer des applications web dynamiques et robustes.
            </p>
            <ul class="card__list">
                <li>Comprendre la structure des applications Angular</li>
                <li>Création de composants dynamiques</li>
                <li>Utilisation des services et gestion des données</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-danger">Avancé</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_angular" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalAngular">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Angular -->
<div class="modal fade" id="modalAngular" tabindex="-1" aria-labelledby="modalAngularLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="modalAngularLabel">Détails du Cours Angular</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre la structure des applications Angular, y compris les modules et les composants.<br>
                    - Utiliser les services pour gérer les données et la logique métier.<br>
                    - Découvrir la gestion des routes avec Angular Router.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en JavaScript, TypeScript et HTML.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://angular.io/docs" target="_blank">Documentation officielle Angular</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_angular" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>

<!-- Cours Django -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-python card__icon"></i>
            </div>
            <h2 class="card__title">Cours Django</h2>
            <p class="card__text">
                Apprenez Django, un framework Python puissant pour le développement rapide d'applications web robustes.
            </p>
            <ul class="card__list">
                <li>Architecture MVC simplifiée</li>
                <li>Gestion des bases de données avec ORM</li>
                <li>Création de formulaires et d'interfaces utilisateur</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">5h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_django" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalDjango">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Django -->
<div class="modal fade" id="modalDjango" tabindex="-1" aria-labelledby="modalDjangoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="modalDjangoLabel">Détails du Cours Django</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de Django et son architecture MVC.<br>
                    - Gérer des bases de données avec l'ORM de Django.<br>
                    - Développer des applications web sécurisées et performantes.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en Python et HTML.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://docs.djangoproject.com/en/stable/" target="_blank">Documentation officielle Django</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_django" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours Laravel -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-code card__icon"></i>
            </div>
            <h2 class="card__title">Cours Laravel</h2>
            <p class="card__text">
                Apprenez Laravel, un framework PHP moderne et robuste, conçu pour développer rapidement des applications web performantes.
            </p>
            <ul class="card__list">
                <li>Utilisation de l'architecture MVC</li>
                <li>Gestion des bases de données avec Eloquent ORM</li>
                <li>Création d'API et gestion des routes</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_laravel" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalLaravel">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Laravel -->
<div class="modal fade" id="modalLaravel" tabindex="-1" aria-labelledby="modalLaravelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="modalLaravelLabel">Détails du Cours Laravel</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de Laravel et son architecture MVC.<br>
                    - Maîtriser Eloquent ORM pour la gestion des bases de données.<br>
                    - Développer des API REST et des applications web dynamiques.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en PHP, HTML et SQL.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://laravel.com/docs" target="_blank">Documentation officielle Laravel</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_laravel" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours Symfony -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-project-diagram card__icon"></i>
            </div>
            <h2 class="card__title">Cours Symfony</h2>
            <p class="card__text">
                Découvrez Symfony, un framework PHP robuste et modulaire, idéal pour créer des applications web complexes et maintenables.
            </p>
            <ul class="card__list">
                <li>Architecture MVC et gestion des routes</li>
                <li>Création d'entités avec Doctrine ORM</li>
                <li>Gestion des formulaires et des utilisateurs</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-danger">Avancé</span>
                <span class="badge badge-secondary">7h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_symfony" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalSymfony">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Symfony -->
<div class="modal fade" id="modalSymfony" tabindex="-1" aria-labelledby="modalSymfonyLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-secondary text-white">
                <h5 class="modal-title" id="modalSymfonyLabel">Détails du Cours Symfony</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de Symfony et son architecture MVC.<br>
                    - Créer des entités et gérer les bases de données avec Doctrine ORM.<br>
                    - Développer des applications web sécurisées et modulaires.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en PHP, HTML, et SQL.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://symfony.com/doc/current/index.html" target="_blank">Documentation officielle Symfony</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_symfony" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours jQuery -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-code card__icon"></i>
            </div>
            <h2 class="card__title">Cours jQuery</h2>
            <p class="card__text">
                Apprenez jQuery, une bibliothèque JavaScript légère et rapide, idéale pour simplifier les manipulations DOM et les interactions avec les APIs.
            </p>
            <ul class="card__list">
                <li>Manipulation du DOM simplifiée</li>
                <li>Gestion des événements</li>
                <li>Requêtes AJAX faciles</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-success">Débutant</span>
                <span class="badge badge-secondary">3h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_jquery" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalJQuery">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours jQuery -->
<div class="modal fade" id="modalJQuery" tabindex="-1" aria-labelledby="modalJQueryLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="modalJQueryLabel">Détails du Cours jQuery</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de jQuery et son rôle dans le développement front-end.<br>
                    - Manipuler le DOM et gérer les événements facilement.<br>
                    - Effectuer des requêtes AJAX pour interagir avec des APIs.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en JavaScript, HTML et CSS.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://api.jquery.com/" target="_blank">Documentation officielle jQuery</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_jquery" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours Three.js -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-cube card__icon"></i>
            </div>
            <h2 class="card__title">Cours Three.js</h2>
            <p class="card__text">
                Apprenez Three.js, une bibliothèque JavaScript puissante pour créer des graphiques 3D interactifs dans des navigateurs web.
            </p>
            <ul class="card__list">
                <li>Création de scènes 3D</li>
                <li>Manipulation des caméras et des lumières</li>
                <li>Animation d'objets et intégration de textures</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_threejs" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalThreeJS">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Three.js -->
<div class="modal fade" id="modalThreeJS" tabindex="-1" aria-labelledby="modalThreeJSLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="modalThreeJSLabel">Détails du Cours Three.js</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de la création d'environnements 3D avec Three.js.<br>
                    - Manipuler des caméras, lumières et matériaux pour des rendus réalistes.<br>
                    - Animer des objets 3D et intégrer des textures pour enrichir les scènes.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en JavaScript et en mathématiques de base (géométrie).
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://threejs.org/docs/" target="_blank">Documentation officielle Three.js</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_threejs" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours Express.js -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-server card__icon"></i>
            </div>
            <h2 class="card__title">Cours Express.js</h2>
            <p class="card__text">
                Apprenez Express.js, un framework Node.js minimaliste et flexible pour développer des applications web et APIs robustes.
            </p>
            <ul class="card__list">
                <li>Création et gestion de routes</li>
                <li>Mise en place de middlewares</li>
                <li>Développement d'APIs RESTful</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">4h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_expressjs" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalExpressJS">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Express.js -->
<div class="modal fade" id="modalExpressJS" tabindex="-1" aria-labelledby="modalExpressJSLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="modalExpressJSLabel">Détails du Cours Express.js</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases d'Express.js et son intégration avec Node.js.<br>
                    - Maîtriser la gestion des routes et les middlewares.<br>
                    - Construire des APIs RESTful performantes et sécurisées.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en JavaScript et Node.js.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://expressjs.com/" target="_blank">Documentation officielle Express.js</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_expressjs" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours Next.js -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-layer-group card__icon"></i>
            </div>
            <h2 class="card__title">Cours Next.js</h2>
            <p class="card__text">
                Apprenez Next.js, un framework React avancé pour le développement d'applications web modernes et performantes.
            </p>
            <ul class="card__list">
                <li>Rendu côté serveur (SSR) et génération statique (SSG)</li>
                <li>Gestion avancée des routes dynamiques</li>
                <li>API intégrées et optimisations des performances</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-danger">Avancé</span>
                <span class="badge badge-secondary">7h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_nextjs" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalNextJS">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Next.js -->
<div class="modal fade" id="modalNextJS" tabindex="-1" aria-labelledby="modalNextJSLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="modalNextJSLabel">Détails du Cours Next.js</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de Next.js et son intégration avec React.<br>
                    - Utiliser le rendu côté serveur (SSR) et la génération statique (SSG).<br>
                    - Créer des routes dynamiques et des APIs intégrées pour des applications modernes.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en React et JavaScript.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://nextjs.org/docs" target="_blank">Documentation officielle Next.js</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_nextjs" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours Ember.js -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-fire card__icon"></i>
            </div>
            <h2 class="card__title">Cours Ember.js</h2>
            <p class="card__text">
                Apprenez Ember.js, un framework JavaScript robuste pour créer des applications web ambitieuses avec des fonctionnalités avancées.
            </p>
            <ul class="card__list">
                <li>Structure MVC intégrée</li>
                <li>Composants réutilisables et gestion de l'état</li>
                <li>Création d'applications SPA avec Ember CLI</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-danger">Avancé</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_emberjs" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalEmberJS">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Ember.js -->
<div class="modal fade" id="modalEmberJS" tabindex="-1" aria-labelledby="modalEmberJSLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="modalEmberJSLabel">Détails du Cours Ember.js</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases d'Ember.js et son architecture MVC.<br>
                    - Utiliser Ember CLI pour configurer et gérer vos projets efficacement.<br>
                    - Développer des applications SPA performantes avec des composants réutilisables.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en JavaScript et HTML.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://emberjs.com/" target="_blank">Documentation officielle Ember.js</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_emberjs" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours Backbone.js -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-network-wired card__icon"></i>
            </div>
            <h2 class="card__title">Cours Backbone.js</h2>
            <p class="card__text">
                Apprenez Backbone.js, un framework JavaScript léger pour structurer vos applications web avec des modèles, des collections et des vues.
            </p>
            <ul class="card__list">
                <li>Gestion des données avec les modèles et les collections</li>
                <li>Création de vues dynamiques pour une interaction utilisateur fluide</li>
                <li>Synchronisation des données avec les APIs RESTful</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">4h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_backbonejs" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalBackboneJS">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Backbone.js -->
<div class="modal fade" id="modalBackboneJS" tabindex="-1" aria-labelledby="modalBackboneJSLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalBackboneJSLabel">Détails du Cours Backbone.js</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de Backbone.js et ses principes de conception.<br>
                    - Structurer des applications web avec des modèles, des collections et des vues.<br>
                    - Synchroniser les données avec des APIs RESTful.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en JavaScript et HTML.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://backbonejs.org/" target="_blank">Documentation officielle Backbone.js</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_backbonejs" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours Flask -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-flask card__icon"></i>
            </div>
            <h2 class="card__title">Cours Flask</h2>
            <p class="card__text">
                Apprenez Flask, un micro-framework Python léger et puissant pour créer des applications web rapidement.
            </p>
            <ul class="card__list">
                <li>Création de routes et gestion des requêtes HTTP</li>
                <li>Gestion des templates avec Jinja2</li>
                <li>Connexion à des bases de données</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-success">Débutant</span>
                <span class="badge badge-secondary">4h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_flask" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalFlask">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Flask -->
<div class="modal fade" id="modalFlask" tabindex="-1" aria-labelledby="modalFlaskLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="modalFlaskLabel">Détails du Cours Flask</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de Flask pour créer des applications web légères.<br>
                    - Gérer des routes et manipuler des templates dynamiques avec Jinja2.<br>
                    - Se connecter à des bases de données et gérer des API simples.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en Python et HTML.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://flask.palletsprojects.com/en/latest/" target="_blank">Documentation officielle Flask</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_flask" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours Spring -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-leaf card__icon"></i>
            </div>
            <h2 class="card__title">Cours Spring Framework</h2>
            <p class="card__text">
                Apprenez Spring Framework, une plateforme puissante pour le développement d'applications Java robustes et modulaires.
            </p>
            <ul class="card__list">
                <li>Gestion des dépendances avec Spring IoC</li>
                <li>Développement d'API REST avec Spring Boot</li>
                <li>Connexion aux bases de données avec Spring Data</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-danger">Avancé</span>
                <span class="badge badge-secondary">8h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_spring" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalSpring">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Spring -->
<div class="modal fade" id="modalSpring" tabindex="-1" aria-labelledby="modalSpringLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="modalSpringLabel">Détails du Cours Spring Framework</h5>
                <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6><strong>Objectifs :</strong></h6>
                <ul>
                    <li>Comprendre les bases de Spring et son rôle dans le développement Java.</li>
                    <li>Maîtriser la création d'API REST performantes avec Spring Boot.</li>
                    <li>Gérer les données avec Spring Data et intégrer des bases de données relationnelles.</li>
                </ul>
                <h6><strong>Pré-requis :</strong></h6>
                <p>Connaissances solides en Java et SQL.</p>
                <h6><strong>Ressources supplémentaires :</strong></h6>
                <ul>
                    <li><a href="https://spring.io/guides" target="_blank">Documentation officielle Spring</a></li>
                    <li><a href="https://www.youtube.com" target="_blank">Tutoriels vidéo sur YouTube</a></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_spring" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>

<!-- Cours Slim -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-feather-alt card__icon"></i>
            </div>
            <h2 class="card__title">Cours Slim Framework</h2>
            <p class="card__text">
                Découvrez Slim, un micro-framework PHP minimaliste conçu pour le développement rapide d'APIs et d'applications web.
            </p>
            <ul class="card__list">
                <li>Création rapide de routes</li>
                <li>Gestion des middlewares</li>
                <li>Support des APIs RESTful</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-success">Débutant</span>
                <span class="badge badge-secondary">3h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_slim" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalSlim">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Slim -->
<div class="modal fade" id="modalSlim" tabindex="-1" aria-labelledby="modalSlimLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="modalSlimLabel">Détails du Cours Slim Framework</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de Slim et son rôle dans le développement d'APIs.<br>
                    - Gérer efficacement les routes et les middlewares.<br>
                    - Créer des APIs RESTful performantes et sécurisées.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en PHP et en gestion d'APIs.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://www.slimframework.com/" target="_blank">Documentation officielle Slim Framework</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_slim" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours CakePHP -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-layer-group card__icon"></i>
            </div>
            <h2 class="card__title">Cours CakePHP</h2>
            <p class="card__text">
                Découvrez CakePHP, un framework PHP robuste qui simplifie le développement d'applications web avec une architecture MVC.
            </p>
            <ul class="card__list">
                <li>Création rapide d'applications web</li>
                <li>Gestion des bases de données avec ORM intégré</li>
                <li>Utilisation des helpers et des composants</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">5h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_cakephp" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalCakePHP">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours CakePHP -->
<div class="modal fade" id="modalCakePHP" tabindex="-1" aria-labelledby="modalCakePHPLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalCakePHPLabel">Détails du Cours CakePHP</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de CakePHP et son architecture MVC.<br>
                    - Gérer les bases de données avec son ORM intégré.<br>
                    - Utiliser les helpers et composants pour simplifier le développement.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en PHP et bases de données relationnelles.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://book.cakephp.org/" target="_blank">Documentation officielle CakePHP</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_cakephp" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours Phalcon -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-bolt card__icon"></i>
            </div>
            <h2 class="card__title">Cours Phalcon</h2>
            <p class="card__text">
                Découvrez Phalcon, un framework PHP haute performance construit en C pour une vitesse et une efficacité exceptionnelles.
            </p>
            <ul class="card__list">
                <li>Architecture MVC rapide et performante</li>
                <li>Gestion des bases de données avec ORM Phalcon</li>
                <li>Support des APIs RESTful</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-danger">Avancé</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_phalcon" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalPhalcon">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Phalcon -->
<div class="modal fade" id="modalPhalcon" tabindex="-1" aria-labelledby="modalPhalconLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="modalPhalconLabel">Détails du Cours Phalcon</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de Phalcon et son architecture unique basée sur C.<br>
                    - Créer des applications web performantes avec l'ORM Phalcon.<br>
                    - Maîtriser la gestion des APIs RESTful et des bases de données.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en PHP et bases de données relationnelles.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://phalcon.io/" target="_blank">Documentation officielle Phalcon</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_phalcon" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>

        <!-- Section Containerisation et DevOps -->
        <div class="col-12 mt-5">
            <h3 class="text-secondary mb-3">Containerisation et DevOps</h3>
        </div>

<!-- Cours Docker -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-box card__icon"></i>
            </div>
            <h2 class="card__title">Cours Docker</h2>
            <p class="card__text">
                Apprenez Docker, une plateforme essentielle pour créer, déployer et exécuter des applications dans des conteneurs.
            </p>
            <ul class="card__list">
                <li>Création et gestion des conteneurs Docker</li>
                <li>Développement et optimisation avec Docker Compose</li>
                <li>Déploiement simplifié grâce à l'orchestration des conteneurs</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_docker" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalDocker">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Docker -->
<div class="modal fade" id="modalDocker" tabindex="-1" aria-labelledby="modalDockerLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalDockerLabel">Détails du Cours Docker</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de Docker et son architecture.<br>
                    - Créer et gérer des conteneurs pour isoler des applications.<br>
                    - Utiliser Docker Compose pour configurer et déployer des environnements complexes.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en systèmes d'exploitation et en développement web.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://docs.docker.com/" target="_blank">Documentation officielle Docker</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_docker" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours Kubernetes -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-network-wired card__icon"></i>
            </div>
            <h2 class="card__title">Cours Kubernetes</h2>
            <p class="card__text">
                Découvrez Kubernetes, un système de gestion d'orchestration de conteneurs pour automatiser le déploiement, la mise à l'échelle et la gestion des applications.
            </p>
            <ul class="card__list">
                <li>Orchestration et gestion des clusters</li>
                <li>Automatisation du déploiement et de la mise à l'échelle</li>
                <li>Gestion avancée des volumes et configurations</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-danger">Avancé</span>
                <span class="badge badge-secondary">8h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_kubernetes" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalKubernetes">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Kubernetes -->
<div class="modal fade" id="modalKubernetes" tabindex="-1" aria-labelledby="modalKubernetesLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="modalKubernetesLabel">Détails du Cours Kubernetes</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre l'architecture et les concepts de Kubernetes.<br>
                    - Orchestrer des conteneurs à l'aide de pods, services et déploiements.<br>
                    - Automatiser la mise à l'échelle et la gestion des applications à grande échelle.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en Docker et systèmes d'exploitation.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://kubernetes.io/docs/" target="_blank">Documentation officielle Kubernetes</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_kubernetes" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours CI/CD -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-sync-alt card__icon"></i>
            </div>
            <h2 class="card__title">Cours CI/CD</h2>
            <p class="card__text">
                Apprenez les principes de CI/CD (Intégration Continue et Déploiement Continu) pour automatiser et optimiser vos pipelines de développement logiciel.
            </p>
            <ul class="card__list">
                <li>Configuration des pipelines CI/CD</li>
                <li>Automatisation des tests et des déploiements</li>
                <li>Intégration des outils tels que Jenkins, GitLab CI/CD ou GitHub Actions</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">5h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_ci_cd" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalCICD">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours CI/CD -->
<div class="modal fade" id="modalCICD" tabindex="-1" aria-labelledby="modalCICDLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="modalCICDLabel">Détails du Cours CI/CD</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de l'Intégration Continue (CI) et du Déploiement Continu (CD).<br>
                    - Configurer des pipelines CI/CD pour automatiser les tests, builds et déploiements.<br>
                    - Intégrer des outils comme Jenkins, GitLab CI/CD, GitHub Actions ou CircleCI.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances en développement logiciel et gestion de versions (Git).
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://www.atlassian.com/continuous-delivery" target="_blank">Guide Atlassian sur CI/CD</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_ci_cd" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours Ansible -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-terminal card__icon"></i>
            </div>
            <h2 class="card__title">Cours Ansible</h2>
            <p class="card__text">
                Découvrez Ansible, un outil d'automatisation IT puissant pour gérer la configuration des systèmes et le déploiement d'applications.
            </p>
            <ul class="card__list">
                <li>Gestion de la configuration à grande échelle</li>
                <li>Automatisation des tâches avec des Playbooks</li>
                <li>Déploiement simplifié sur des infrastructures complexes</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-danger">Avancé</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_ansible" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalAnsible">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Ansible -->
<div class="modal fade" id="modalAnsible" tabindex="-1" aria-labelledby="modalAnsibleLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="modalAnsibleLabel">Détails du Cours Ansible</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases d'Ansible et son architecture agentless.<br>
                    - Automatiser les tâches IT avec des Playbooks et des modules.<br>
                    - Gérer efficacement les déploiements sur des infrastructures complexes.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en Linux, SSH et administration système.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://docs.ansible.com/" target="_blank">Documentation officielle Ansible</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_ansible" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours Terraform -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-cloud card__icon"></i>
            </div>
            <h2 class="card__title">Cours Terraform</h2>
            <p class="card__text">
                Découvrez Terraform, un outil puissant pour gérer l'infrastructure en tant que code (IaC) et automatiser les déploiements dans le cloud.
            </p>
            <ul class="card__list">
                <li>Définition de l'infrastructure avec des fichiers de configuration</li>
                <li>Gestion multi-cloud et hybrid cloud</li>
                <li>Déploiement automatisé et mise à l'échelle</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-danger">Avancé</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_terraform" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalTerraform">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Terraform -->
<div class="modal fade" id="modalTerraform" tabindex="-1" aria-labelledby="modalTerraformLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalTerraformLabel">Détails du Cours Terraform</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de Terraform et sa syntaxe HCL.<br>
                    - Automatiser la gestion de l'infrastructure avec des fichiers de configuration.<br>
                    - Déployer et gérer des environnements multi-cloud de manière efficace.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en cloud computing (AWS, Azure, GCP) et systèmes d'exploitation.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://www.terraform.io/docs" target="_blank">Documentation officielle Terraform</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_terraform" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>



        <!-- Section Bases de Données -->
        <div class="col-12 mt-5">
            <h3 class="text-secondary mb-3">Bases de Données</h3>
        </div>

<!-- Cours SQL -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-database card__icon"></i>
            </div>
            <h2 class="card__title">Cours SQL</h2>
            <p class="card__text">
                Apprenez SQL, le langage standard pour interagir avec les bases de données relationnelles. Maîtrisez les techniques pour manipuler et interroger les données efficacement.
            </p>
            <ul class="card__list">
                <li>Création et gestion de bases de données</li>
                <li>Écriture de requêtes SELECT, INSERT, UPDATE et DELETE</li>
                <li>Gestion des relations entre tables avec JOIN</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-success">Débutant</span>
                <span class="badge badge-secondary">4h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_sql" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalSQL">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours SQL -->
<div class="modal fade" id="modalSQL" tabindex="-1" aria-labelledby="modalSQLLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="modalSQLLabel">Détails du Cours SQL</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les concepts fondamentaux des bases de données relationnelles.<br>
                    - Manipuler les données en utilisant des requêtes SQL simples et complexes.<br>
                    - Gérer des relations entre tables et effectuer des opérations avancées comme les agrégations et les transactions.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Aucune connaissance préalable nécessaire, mais des notions de base en informatique sont un plus.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://sqlzoo.net/" target="_blank">SQL Zoo (Exercices interactifs)</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_sql" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours MySQL -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-server card__icon"></i>
            </div>
            <h2 class="card__title">Cours MySQL</h2>
            <p class="card__text">
                Apprenez MySQL, un système de gestion de base de données relationnelle puissant et populaire pour stocker, organiser et interroger vos données.
            </p>
            <ul class="card__list">
                <li>Installation et configuration de MySQL</li>
                <li>Écriture de requêtes pour interagir avec les bases de données</li>
                <li>Optimisation et gestion des performances</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-success">Débutant</span>
                <span class="badge badge-secondary">5h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_mysql" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalMySQL">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours MySQL -->
<div class="modal fade" id="modalMySQL" tabindex="-1" aria-labelledby="modalMySQLLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="modalMySQLLabel">Détails du Cours MySQL</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Installer et configurer un serveur MySQL.<br>
                    - Créer, manipuler et interroger des bases de données relationnelles.<br>
                    - Optimiser les requêtes pour améliorer les performances.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en SQL et en administration système.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://dev.mysql.com/doc/" target="_blank">Documentation officielle MySQL</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_mysql" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours MongoDB -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-leaf card__icon"></i>
            </div>
            <h2 class="card__title">Cours MongoDB</h2>
            <p class="card__text">
                Apprenez MongoDB, une base de données NoSQL orientée documents, idéale pour des applications évolutives et flexibles.
            </p>
            <ul class="card__list">
                <li>Modélisation des données avec des documents JSON</li>
                <li>Requêtes simples et avancées avec MongoDB Query Language (MQL)</li>
                <li>Gestion des collections et indexation pour des performances optimales</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_mongodb" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalMongoDB">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours MongoDB -->
<div class="modal fade" id="modalMongoDB" tabindex="-1" aria-labelledby="modalMongoDBLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="modalMongoDBLabel">Détails du Cours MongoDB</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les concepts fondamentaux de MongoDB et des bases de données NoSQL.<br>
                    - Modéliser des données flexibles et dynamiques avec des documents JSON.<br>
                    - Optimiser les performances avec des collections et des index.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en bases de données et en gestion de données.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://www.mongodb.com/docs/" target="_blank">Documentation officielle MongoDB</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_mongodb" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours PostgreSQL -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-database card__icon"></i>
            </div>
            <h2 class="card__title">Cours PostgreSQL</h2>
            <p class="card__text">
                Découvrez PostgreSQL, un système de gestion de base de données relationnelle avancé et open-source offrant des fonctionnalités puissantes.
            </p>
            <ul class="card__list">
                <li>Configuration et gestion des bases de données PostgreSQL</li>
                <li>Écriture de requêtes complexes avec SQL avancé</li>
                <li>Optimisation des performances avec des index et des vues matérialisées</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_postgresql" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalPostgreSQL">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours PostgreSQL -->
<div class="modal fade" id="modalPostgreSQL" tabindex="-1" aria-labelledby="modalPostgreSQLLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalPostgreSQLLabel">Détails du Cours PostgreSQL</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les concepts avancés de PostgreSQL et son architecture.<br>
                    - Gérer des bases de données robustes avec des index et des fonctions.<br>
                    - Écrire des requêtes complexes pour répondre à des besoins spécifiques.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en SQL et bases de données relationnelles.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://www.postgresql.org/docs/" target="_blank">Documentation officielle PostgreSQL</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_postgresql" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours Redis -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-memory card__icon"></i>
            </div>
            <h2 class="card__title">Cours Redis</h2>
            <p class="card__text">
                Découvrez Redis, une base de données en mémoire rapide et open-source, utilisée pour le caching, la gestion de sessions et l'optimisation des performances.
            </p>
            <ul class="card__list">
                <li>Configuration et gestion des instances Redis</li>
                <li>Utilisation des structures de données avancées comme les hash et les listes</li>
                <li>Mise en place de mécanismes de caching pour des applications performantes</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">5h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_redis" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalRedis">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Redis -->
<div class="modal fade" id="modalRedis" tabindex="-1" aria-labelledby="modalRedisLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="modalRedisLabel">Détails du Cours Redis</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases de Redis et son fonctionnement en mémoire.<br>
                    - Utiliser les structures de données de Redis pour optimiser les performances des applications.<br>
                    - Configurer et gérer des instances Redis pour le caching et d'autres cas d'utilisation.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en bases de données et en développement backend.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://redis.io/documentation" target="_blank">Documentation officielle Redis</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_redis" class="btn btn-danger">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours Oracle Database -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-database card__icon"></i>
            </div>
            <h2 class="card__title">Cours Oracle Database</h2>
            <p class="card__text">
                Apprenez Oracle Database, un système de gestion de base de données relationnelle avancé et robuste, utilisé dans des environnements d'entreprise pour la gestion des données critiques.
            </p>
            <ul class="card__list">
                <li>Installation et configuration d'Oracle Database</li>
                <li>Écriture de requêtes SQL avancées</li>
                <li>Optimisation et gestion des performances dans des environnements complexes</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-danger">Avancé</span>
                <span class="badge badge-secondary">8h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_oracle" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalOracle">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Oracle Database -->
<div class="modal fade" id="modalOracle" tabindex="-1" aria-labelledby="modalOracleLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="modalOracleLabel">Détails du Cours Oracle Database</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les concepts fondamentaux d'Oracle Database et son architecture.<br>
                    - Manipuler les bases de données relationnelles avec SQL et PL/SQL.<br>
                    - Optimiser les performances et gérer les environnements multi-utilisateurs.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en SQL et gestion de bases de données relationnelles.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://docs.oracle.com/en/database/" target="_blank">Documentation officielle Oracle</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_oracle" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>



        <!-- Section Méthodologies -->
        <div class="col-12 mt-5">
            <h3 class="text-secondary mb-3">Méthodologies</h3>
        </div>

<!-- Cours Scrum -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-users-cog card__icon"></i>
            </div>
            <h2 class="card__title">Cours Scrum</h2>
            <p class="card__text">
                Découvrez Scrum, une méthodologie Agile populaire pour gérer efficacement des projets complexes et collaboratifs.
            </p>
            <ul class="card__list">
                <li>Principes fondamentaux et valeurs de Scrum</li>
                <li>Gestion des rôles : Product Owner, Scrum Master, Équipe de développement</li>
                <li>Planification, exécution et rétrospectives de sprints</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-success">Débutant</span>
                <span class="badge badge-secondary">3h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_scrum" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalScrum">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Scrum -->
<div class="modal fade" id="modalScrum" tabindex="-1" aria-labelledby="modalScrumLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="modalScrumLabel">Détails du Cours Scrum</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les concepts et valeurs de Scrum.<br>
                    - Gérer efficacement des équipes en utilisant les outils Scrum.<br>
                    - Organiser et exécuter des sprints pour maximiser la productivité.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Aucun pré-requis nécessaire, mais des notions de gestion de projet sont un plus.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://www.scrum.org/" target="_blank">Documentation officielle Scrum</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_scrum" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours Kanban -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-columns card__icon"></i>
            </div>
            <h2 class="card__title">Cours Kanban</h2>
            <p class="card__text">
                Découvrez Kanban, une méthodologie Agile simple et visuelle pour optimiser la gestion des flux de travail et améliorer la productivité.
            </p>
            <ul class="card__list">
                <li>Principes et pratiques de base de Kanban</li>
                <li>Création et gestion de tableaux Kanban</li>
                <li>Optimisation des processus pour réduire les goulots d'étranglement</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-success">Débutant</span>
                <span class="badge badge-secondary">3h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_kanban" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalKanban">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Kanban -->
<div class="modal fade" id="modalKanban" tabindex="-1" aria-labelledby="modalKanbanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalKanbanLabel">Détails du Cours Kanban</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les principes fondamentaux de Kanban.<br>
                    - Créer et gérer des tableaux Kanban pour visualiser et suivre les flux de travail.<br>
                    - Identifier et résoudre les goulots d'étranglement pour améliorer l'efficacité.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Aucun pré-requis nécessaire, mais des notions de gestion de projet sont un atout.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://www.kanbanize.com/kanban-resources" target="_blank">Ressources officielles sur Kanban</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_kanban" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>

<!-- Cours Agile -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-project-diagram card__icon"></i>
            </div>
            <h2 class="card__title">Cours Méthodologie Agile</h2>
            <p class="card__text">
                Découvrez Agile, une méthodologie de gestion de projet flexible et collaborative pour s'adapter rapidement aux changements et maximiser la valeur.
            </p>
            <ul class="card__list">
                <li>Principes fondamentaux du Manifeste Agile</li>
                <li>Approches Agile : Scrum, Kanban, XP</li>
                <li>Gestion des équipes et des itérations</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">5h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_agile" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalAgile">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Agile -->
<div class="modal fade" id="modalAgile" tabindex="-1" aria-labelledby="modalAgileLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="modalAgileLabel">Détails du Cours Méthodologie Agile</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les principes et valeurs du Manifeste Agile.<br>
                    - Appliquer des approches comme Scrum, Kanban ou XP à des projets réels.<br>
                    - Gérer efficacement des équipes agiles pour maximiser la productivité.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Aucune expérience préalable requise, mais des notions de gestion de projet sont un atout.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://agilemanifesto.org/" target="_blank">Manifeste Agile</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_agile" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours TDD -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-vial card__icon"></i>
            </div>
            <h2 class="card__title">Cours Développement Dirigé par les Tests (TDD)</h2>
            <p class="card__text">
                Apprenez le TDD (Test-Driven Development), une méthode de développement axée sur la qualité et la fiabilité du code grâce à l'écriture de tests avant le codage.
            </p>
            <ul class="card__list">
                <li>Concepts et cycle du TDD : Red-Green-Refactor</li>
                <li>Écriture de tests unitaires avec des frameworks comme JUnit ou Jest</li>
                <li>Amélioration continue avec refactoring guidé par les tests</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-danger">Avancé</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_tdd" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalTDD">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours TDD -->
<div class="modal fade" id="modalTDD" tabindex="-1" aria-labelledby="modalTDDLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="modalTDDLabel">Détails du Cours TDD</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les principes fondamentaux du TDD et son cycle de développement.<br>
                    - Écrire des tests unitaires pour garantir la fiabilité du code.<br>
                    - Appliquer le refactoring guidé par les tests pour améliorer le design du code.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances solides en programmation et dans l’utilisation de frameworks de tests (JUnit, Jest, etc.).
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://testdriven.io/" target="_blank">Guide Test-Driven Development</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_tdd" class="btn btn-danger">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours DevOps -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-tools card__icon"></i>
            </div>
            <h2 class="card__title">Cours DevOps</h2>
            <p class="card__text">
                Découvrez DevOps, une méthodologie combinant développement et opérations pour automatiser, collaborer et optimiser les cycles de développement logiciel.
            </p>
            <ul class="card__list">
                <li>Principes fondamentaux de la culture DevOps</li>
                <li>Automatisation avec CI/CD et outils de gestion d'infrastructure</li>
                <li>Surveillance et amélioration continue des performances</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_devops" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalDevOps">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours DevOps -->
<div class="modal fade" id="modalDevOps" tabindex="-1" aria-labelledby="modalDevOpsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalDevOpsLabel">Détails du Cours DevOps</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les principes de base et les avantages de DevOps.<br>
                    - Utiliser des outils comme Jenkins, Docker, Kubernetes et Terraform.<br>
                    - Automatiser les processus de développement, de déploiement et de surveillance.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances en développement logiciel, systèmes d'exploitation et gestion d'infrastructure.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://www.atlassian.com/devops" target="_blank">Guide DevOps Atlassian</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_devops" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours Lean -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-chart-line card__icon"></i>
            </div>
            <h2 class="card__title">Cours Méthodologie Lean</h2>
            <p class="card__text">
                Découvrez Lean, une méthodologie de gestion visant à optimiser les processus, réduire les gaspillages, et maximiser la valeur pour le client.
            </p>
            <ul class="card__list">
                <li>Principes fondamentaux de Lean</li>
                <li>Cartographie de la chaîne de valeur (Value Stream Mapping)</li>
                <li>Utilisation des outils Lean pour améliorer les processus</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-success">Débutant</span>
                <span class="badge badge-secondary">4h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_lean" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalLean">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Lean -->
<div class="modal fade" id="modalLean" tabindex="-1" aria-labelledby="modalLeanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="modalLeanLabel">Détails du Cours Méthodologie Lean</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les principes de Lean et leur application dans divers contextes.<br>
                    - Identifier et éliminer les gaspillages dans les processus.<br>
                    - Utiliser des outils comme le Kanban, le Kaizen, et la cartographie de la chaîne de valeur.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Aucun pré-requis nécessaire, adapté aux débutants.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://lean.org/" target="_blank">Lean Enterprise Institute</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_lean" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
<!-- Cours Méthodologie Cascade -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-water card__icon"></i>
            </div>
            <h2 class="card__title">Cours Méthodologie Cascade</h2>
            <p class="card__text">
                Découvrez la Méthodologie Cascade, un modèle linéaire et séquentiel pour la gestion de projets, particulièrement adapté aux projets avec des exigences bien définies.
            </p>
            <ul class="card__list">
                <li>Principes fondamentaux du modèle en cascade</li>
                <li>Phases clés : Analyse, Conception, Développement, Test et Maintenance</li>
                <li>Gestion rigoureuse des délais et des livrables</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-success">Débutant</span>
                <span class="badge badge-secondary">3h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_cascade" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalCascade">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Cascade -->
<div class="modal fade" id="modalCascade" tabindex="-1" aria-labelledby="modalCascadeLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="modalCascadeLabel">Détails du Cours Méthodologie Cascade</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases et les étapes du modèle en cascade.<br>
                    - Appliquer un processus rigoureux pour gérer les projets linéaires.<br>
                    - Identifier les avantages et limites de ce modèle.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Aucun pré-requis nécessaire, idéal pour les débutants en gestion de projet.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://en.wikipedia.org/wiki/Waterfall_model" target="_blank">Article Wikipedia sur le modèle Cascade</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_cascade" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>



        <!-- Section Sécurité et Bonnes Pratiques -->
        <div class="col-12 mt-5">
            <h3 class="text-secondary mb-3">Sécurité et Bonnes Pratiques</h3>
        </div>

<!-- Cours Sécurité Web -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-shield-alt card__icon"></i>
            </div>
            <h2 class="card__title">Cours Sécurité Web</h2>
            <p class="card__text">
                Découvrez les principes fondamentaux de la sécurité web et apprenez à protéger vos applications contre les menaces en ligne les plus courantes.
            </p>
            <ul class="card__list">
                <li>Comprendre les vulnérabilités comme XSS, CSRF, et Injection SQL</li>
                <li>Mettre en place des stratégies de sécurisation</li>
                <li>Utiliser des outils pour tester et renforcer la sécurité</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_securite_web" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalSecuriteWeb">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Sécurité Web -->
<div class="modal fade" id="modalSecuriteWeb" tabindex="-1" aria-labelledby="modalSecuriteWebLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="modalSecuriteWebLabel">Détails du Cours Sécurité Web</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Identifier les principales menaces qui pèsent sur les applications web.<br>
                    - Mettre en œuvre des stratégies et des bonnes pratiques pour sécuriser vos sites.<br>
                    - Utiliser des outils de test comme OWASP ZAP ou Burp Suite pour détecter les failles.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances en développement web et notions de bases en HTTP.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://owasp.org/" target="_blank">OWASP Foundation</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_securite_web" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours Bonnes Pratiques de Code -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-code card__icon"></i>
            </div>
            <h2 class="card__title">Cours bonnes pratiques de code</h2>
            <p class="card__text">
                Apprenez les meilleures pratiques pour écrire du code propre, maintenable et performant, quel que soit le langage utilisé.
            </p>
            <ul class="card__list">
                <li>Utilisation de conventions de nommage et de style</li>
                <li>Principes SOLID et design patterns</li>
                <li>Documentation, tests et gestion des versions</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-success">Débutant</span>
                <span class="badge badge-secondary">4h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_bonnes_pratiques_code" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalBonnesPratiques">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Bonnes Pratiques de Code -->
<div class="modal fade" id="modalBonnesPratiques" tabindex="-1" aria-labelledby="modalBonnesPratiquesLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-secondary text-white">
                <h5 class="modal-title" id="modalBonnesPratiquesLabel">Détails du cours bonnes pratiques de code</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Appliquer des conventions de style et de nommage pour un code lisible et compréhensible.<br>
                    - Implémenter les principes SOLID et utiliser des design patterns pour structurer votre code.<br>
                    - Adopter une approche test-driven (TDD) pour améliorer la qualité.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en programmation.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://refactoring.guru/" target="_blank">Refactoring Guru</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_bonnes_pratiques_code" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>

<!-- Cours Gestion des Erreurs -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-exclamation-triangle card__icon"></i>
            </div>
            <h2 class="card__title">Cours gestion des erreurs</h2>
            <p class="card__text">
                Découvrez comment gérer efficacement les erreurs pour garantir la stabilité et la résilience de vos applications.
            </p>
            <ul class="card__list">
                <li>Types d'erreurs : syntaxiques, logiques et d'exécution</li>
                <li>Utilisation des blocs try/catch et des exceptions</li>
                <li>Création de logs et surveillance des erreurs en production</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">5h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_gestion_erreurs" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalGestionErreurs">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Gestion des Erreurs -->
<div class="modal fade" id="modalGestionErreurs" tabindex="-1" aria-labelledby="modalGestionErreursLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="modalGestionErreursLabel">Détails du Cours Gestion des Erreurs</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Identifier et comprendre les différents types d'erreurs.<br>
                    - Implémenter des solutions robustes pour gérer les erreurs à l'aide d'exceptions et de logs.<br>
                    - Configurer des outils pour surveiller et rapporter les erreurs en production.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en programmation et en gestion des applications.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide/Gestion_des_erreurs" target="_blank">MDN - Gestion des erreurs</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_gestion_erreurs" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>


<!-- Cours Tests Unitaires -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-vial card__icon"></i>
            </div>
            <h2 class="card__title">Cours tests unitaires</h2>
            <p class="card__text">
                Apprenez à écrire des tests unitaires pour garantir la fiabilité et la qualité de votre code en identifiant les problèmes tôt dans le cycle de développement.
            </p>
            <ul class="card__list">
                <li>Principes fondamentaux des tests unitaires</li>
                <li>Outils populaires : JUnit, Jest, Mocha, PHPUnit</li>
                <li>Automatisation des tests pour des projets robustes</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">5h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_tests_unitaires" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalTestsUnitaires">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Tests Unitaires -->
<div class="modal fade" id="modalTestsUnitaires" tabindex="-1" aria-labelledby="modalTestsUnitairesLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="modalTestsUnitairesLabel">Détails du Cours Tests Unitaires</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Comprendre les bases des tests unitaires et leur importance.<br>
                    - Apprendre à utiliser des frameworks de tests populaires comme JUnit, Jest ou PHPUnit.<br>
                    - Automatiser les tests pour améliorer la qualité et la maintenabilité du code.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en programmation et structure de code.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://martinfowler.com/bliki/UnitTest.html" target="_blank">Unit Testing - Martin Fowler</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_tests_unitaires" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>

<!-- Cours Optimisation et Performances -->
<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-tachometer-alt card__icon"></i>
            </div>
            <h2 class="card__title">Cours Optimisation et Performances</h2>
            <p class="card__text">
                Apprenez à optimiser vos applications pour garantir des performances maximales et une expérience utilisateur fluide.
            </p>
            <ul class="card__list">
                <li>Analyse et résolution des problèmes de performance</li>
                <li>Optimisation du code, des requêtes et des ressources</li>
                <li>Utilisation d’outils de surveillance et de profiling</li>
            </ul>
            <div class="card__badges">
                <span class="badge badge-info">Intermédiaire</span>
                <span class="badge badge-secondary">6h de cours</span>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <a href="index.php?page=cours_optimisation_performances" class="card__cta">Voir le cours</a>
                <button class="card__cta" data-toggle="modal" data-target="#modalOptimisationPerformances">
                    Détails
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Modale pour les détails du cours Optimisation et Performances -->
<div class="modal fade" id="modalOptimisationPerformances" tabindex="-1" aria-labelledby="modalOptimisationPerformancesLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalOptimisationPerformancesLabel">Détails du Cours Optimisation et Performances</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Objectifs :</strong><br>
                    - Identifier et analyser les goulots d’étranglement dans les applications.<br>
                    - Appliquer des techniques d’optimisation au niveau du code, des bases de données et des ressources réseau.<br>
                    - Utiliser des outils comme Chrome DevTools, Lighthouse, et New Relic pour surveiller et améliorer les performances.
                </p>
                <p>
                    <strong>Pré-requis :</strong><br>
                    Connaissances de base en développement web ou logiciel.
                </p>
                <p>
                    <strong>Ressources supplémentaires :</strong><br>
                    - <a href="https://developer.chrome.com/docs/devtools/" target="_blank">Google Chrome DevTools</a><br>
                    - Tutoriels vidéo sur <a href="https://www.youtube.com" target="_blank">YouTube</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <a href="index.php?page=cours_optimisation_performances" class="card__cta">Commencer le cours</a>
            </div>
        </div>
    </div>
</div>
    </div>
    </div>
</div>

<?php include_once 'templates/footer.php';
