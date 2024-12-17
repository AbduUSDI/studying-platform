<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours complet sur JavaScript - Exemples visuels et Concepts</title>
    <!-- Bootstrap pour les modals et la sidebar responsive -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Animate.css pour les animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="assets/css/cours.css"/>
</head>
<body>
<?php include 'templates/nav.php' ?>

    <!-- Sidebar -->
<div class="sidebar">

    <!-- Introduction -->
    <a href="#intro">Introduction   </a>

    <!-- Section : Fondamentaux -->
    <button class="dropdown-btn"><i class="fas fa-code"></i> JavaScript : Les fondamentaux <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#variables">Variables</a>
        <a href="#types-donnees">Types de données</a>
        <a href="#operateurs">Opérateurs</a>
        <a href="#conditions">Conditions</a>
        <a href="#boucles">Boucles</a>
        <a href="#fonctions">Fonctions</a>
    </div>
    <button class="dropdown-btn"><i class="fas fa-desktop"></i> Exercices : Fondamentaux <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="exercices_js/variable.php">Variables</a>
        <a href="exercices_js/type_donnee.php">Types de données</a>
        <a href="exercices_js/operateurs.php">Opérateurs</a>
        <a href="exercices_js/conditions.php">Conditions</a>
        <a href="exercices_js/boucles.php">Boucles</a>
        <a href="exercices_js/fonctions.php">Fonctions</a>
    </div>

    <!-- Section : Manipulation DOM et Événements -->
        <a href="#manip-dom-evenements">Manipulation DOM et Événements</a>
    <button class="dropdown-btn"><i class="fas fa-rocket"></i> JavaScript : Manipulation du DOM et événements <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#dom-selection">Sélection DOM</a>
        <a href="#dom-modification">Modification du DOM</a>
        <a href="#events">Gestion des événements</a>
    </div>
    <button class="dropdown-btn"><i class="fas fa-pen-nib"></i> Exercices : DOM et événements <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="exercices_js/selection_dom.php">Sélection DOM</a>
        <a href="exercices_js/modify_dom.php">Modification du DOM</a>
        <a href="exercices_js/events.php">Gestion des événements</a>
    </div>

    <!-- Section : Concepts Avancés -->
    <button class="dropdown-btn"><i class="fas fa-laptop-code"></i> JavaScript : Concepts avancés <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#classes">Classes</a>
        <a href="#poo">Programmation orientée objet</a>
        <a href="#promises">Promises</a>
        <a href="#async-await">Async/Await</a>
        <a href="#callbacks-closures">Callbacks & Closures</a>
        <a href="#json">JSON</a>
        <a href="#modules">Modules</a>
        <a href="#fetch">API Fetch</a>
    </div>
    <button class="dropdown-btn"><i class="fas fa-handshake"></i> Exercices : Concepts avancés <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="exercices_js/classes.php">Classes</a>
        <a href="exercices_js/poo.php">Programmation orientée objet</a>
        <a href="exercices_js/promise.php">Promises</a>
        <a href="exercices_js/async_await.php">Async/Await</a>
        <a href="exercices_js/callback_closures.php">Callbacks & Closures</a>
        <a href="exercices_js/json.php">JSON</a>
        <a href="exercices_js/modules.php">Modules</a>
        <a href="exercices_js/fetch.php">API Fetch</a>
    </div>

    <!-- Section : Expert et Pro -->
    <button class="dropdown-btn"><i class="fas fa-code-branch"></i> JavaScript : Techniques expert <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="#webstorage">Web Storage</a>
        <a href="#poo-expert">Programmation Orientée Objet</a>
        <a href="#web-workers">Web Workers</a>
        <a href="#gestion-erreurs-debugging">Gestion des Erreurs & Debugging</a>
        <a href="#service-workers-pwa">Service Workers & PWA</a>
        <a href="#es6">Syntaxe Moderne ES6+</a>
        <a href="#testing">Tests Unitaires</a>
    </div>
    <button class="dropdown-btn"><i class="fas fa-tasks"></i> Exercices : Expert <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
        <a href="exercices_js/web_storage.php">Web Storage</a>
        <a href="exercices_js/poo_expert.php">POO Expert</a>
        <a href="exercices_js/web_workers.php">Web Workers</a>
        <a href="exercices_js/gestion_erreurs.php">Gestion des Erreurs</a>
        <a href="exercices_js/service_workers.php">Service Workers & PWA</a>
        <a href="exercices_js/es6.php">Syntaxe Moderne ES6+</a>
        <a href="exercices_js/unit_test.php">Tests Unitaires</a>
    </div>

</div>


    <!-- Page Content -->
    <div class="content">
        <div class="container animate__animated animate__fadeInUp">

            <!-- JavaScript de Base -->
            <div class="content-section">
                <h1 id="intro">Introduction de JavaScript</h1>

                <p>
JavaScript est un langage de programmation dynamique et interprété principalement utilisé pour apporter des interactions et de l'interactivité aux pages web. Développé à l'origine par Netscape dans les années 1990, il est devenu l'un des trois langages fondamentaux du développement web, aux côtés de HTML et CSS. Contrairement à ces derniers, JavaScript permet de manipuler le contenu d'une page web en temps réel sans nécessiter de rechargement de page, grâce à ce qu'on appelle le "DOM" (Document Object Model), la structure hiérarchique d'une page HTML.
</p>

<p>
<strong>Caractéristiques de JavaScript :</strong>
</p>
<ul>
    <li><strong>Langage interprété :</strong> JavaScript est exécuté par le navigateur sans besoin de compilation, ce qui le rend rapide et réactif pour les modifications en temps réel.</li>
    <li><strong>Basé sur les événements :</strong> JavaScript peut réagir aux actions de l'utilisateur (clics, survols, saisies de texte, etc.), offrant ainsi des fonctionnalités interactives sur le web.</li>
    <li><strong>Orientation objet et fonctionnelle :</strong> JavaScript prend en charge des paradigmes de programmation orientée objet, fonctionnelle et événementielle, ce qui le rend polyvalent et adaptable à de nombreux besoins.</li>
    <li><strong>Portabilité :</strong> JavaScript est supporté par tous les navigateurs modernes et fonctionne sur presque toutes les plateformes, ce qui en fait un choix universel pour le développement web.</li>
</ul>

<p>
<strong>Applications principales de JavaScript :</strong>
</p>
<ul>
    <li><strong>Manipulation du DOM :</strong> Permet de créer, modifier, et supprimer des éléments HTML en temps réel, comme changer le contenu d'une page, afficher des messages d'erreur, ou mettre à jour des données affichées.</li>
    <li><strong>Validation des formulaires :</strong> JavaScript est couramment utilisé pour valider les données saisies par l'utilisateur avant leur envoi au serveur, offrant ainsi une première couche de sécurité.</li>
    <li><strong>Effets et animations :</strong> Avec les bibliothèques comme jQuery et les frameworks modernes, JavaScript rend possible l'animation de pages, comme les menus déroulants, les carrousels d'images et les transitions.</li>
    <li><strong>Appels asynchrones (AJAX) :</strong> Grâce à AJAX (Asynchronous JavaScript and XML), JavaScript peut communiquer avec un serveur en arrière-plan, ce qui permet de mettre à jour des parties de la page sans la recharger intégralement, offrant ainsi une expérience utilisateur fluide.</li>
    <li><strong>Programmation côté serveur :</strong> Avec des environnements comme Node.js, JavaScript peut être utilisé pour le développement backend, rendant possible la création d'applications complètes uniquement en JavaScript.</li>
</ul>

<p>
<strong>Importance de JavaScript dans l'écosystème web :</strong> JavaScript est aujourd'hui incontournable dans le développement d'applications web modernes. Avec des frameworks populaires comme React, Angular et Vue, il permet de construire des interfaces utilisateur dynamiques et évolutives. En backend, Node.js a ouvert la voie à des applications full-stack en JavaScript, facilitant la collaboration entre développeurs frontend et backend. Les API modernes de JavaScript, comme les API Canvas, WebGL, et WebSockets, permettent également de créer des jeux, des visualisations de données, et des applications en temps réel.
</p>

<p>
En résumé, JavaScript est essentiel pour le développement web, car il offre des possibilités infinies pour rendre les sites interactifs, dynamiques et agréables pour l'utilisateur. La combinaison de sa puissance, de sa polyvalence et de son accessibilité fait de JavaScript un pilier central de l'expérience utilisateur sur le web.
</p>


                <h1 id="js-base"><i class="fas fa-code icon"></i>JavaScript de Base</h1>
                <div class="row">
                <div class="col-12">
    <nav class="sommaire-container">
        <h3 id="variables">Variables</h3>
        <h2>Sommaire</h2>
        <ul>
            <li><a href="#introduction-variable">I. Introduction</a></li>
            <li><a href="#definition-variable">II. Définition d'une Variable</a></li>
            <li><a href="#utilite-variables">III. Utilité des Variables</a></li>
            <li><a href="#types-variables">IV. Types de Variables</a></li>
            <li><a href="#declaration-variables">V. Déclaration de Variables</a></li>
            <li><a href="#comparaison-var-let-const">VI. Comparaison entre <code>var</code>, <code>let</code>, et <code>const</code></a></li>
            <li><a href="#exercices-variables">VII. Exercices</a></li>
            <li><a href="#bonnes-pratiques-variables">VIII. Bonnes Pratiques</a></li>
            <li><button href="#auto-evaluation-variables" disabled>IX. Auto-évaluation - A venir</button></li>
        </ul>
    </nav>
</div>
<div class="col-12">
    <h2 id="introduction-variable">I. Introduction</h2>
    <p>
        JavaScript est un langage de programmation essentiel dans le développement web moderne. Il permet d'ajouter des fonctionnalités interactives aux sites web, 
        comme des animations, des cartes dynamiques ou des jeux. L'un des éléments fondamentaux de ce langage est l'utilisation des <strong>variables</strong>.
    </p>
    <p>
        Une variable est un conteneur permettant de stocker des données qui peuvent être manipulées et réutilisées tout au long de l'exécution d'un programme. 
        Elle offre une grande flexibilité pour gérer des informations dynamiques, ce qui est crucial dans les applications web interactives.
    </p>
    <p>
        Ce cours a pour objectif de vous familiariser avec le concept des variables en JavaScript, leurs types, leurs caractéristiques, 
        et leurs bonnes pratiques. Vous apprendrez également à les utiliser efficacement pour créer des programmes robustes et maintenables.
    </p>
    <ul>
        <li><strong>Durée estimée :</strong> 60 minutes</li>
        <li><strong>Prérequis :</strong> Connaissances de base en HTML, CSS et notions de logique algorithmique.</li>
    </ul>
</div>

                <div class="col-12">
    <h2 id="definition-variable">Définition d'une Variable</h2>
    <p>
        Une variable est un élément fondamental en programmation qui permet de stocker, manipuler et référencer des données dans un programme. 
        Dans le contexte de JavaScript, une variable est un conteneur pour une valeur qui peut être de différents types, tels que :
    </p>
    <ul>
        <li><strong>Nombre</strong> : Exemple - <code>42</code></li>
        <li><strong>Chaîne de caractères</strong> : Exemple - <code>"Bonjour"</code></li>
        <li><strong>Objet</strong> : Exemple - <code>{ nom: "Alice", age: 30 }</code></li>
        <li><strong>Tableau</strong> : Exemple - <code>[1, 2, 3]</code></li>
        <li><strong>Fonction</strong> : Exemple - <code>function() { console.log("Hello!"); }</code></li>
    </ul>
    <p>
        Une variable est définie par un identifiant (son nom) et une valeur. L'identifiant est utilisé pour accéder à la valeur stockée dans la variable et pour modifier cette valeur si nécessaire. 
        Les variables permettent aux développeurs de gérer facilement les données dans leur programme, de les organiser et de les manipuler en fonction des besoins spécifiques de l'application.
    </p>
    <p>
        En JavaScript, les variables peuvent être déclarées en utilisant les mots-clés suivants :
        <code>var</code>, <code>let</code>, et <code>const</code>. Chaque mot-clé possède des propriétés et des comportements spécifiques qui influencent la portée, l'assignation et la déclaration des variables.
    </p>
</div>
<div class="col-12">
    <h2 id="utilite-variables">III. Utilité des Variables</h2>
    <p>
        Les variables jouent un rôle central dans la programmation, et en particulier en JavaScript. Elles permettent de stocker des données, 
        de les manipuler et de les référencer dans différentes parties d'un programme. Voici pourquoi elles sont indispensables :
    </p>

    <h3>A. Stockage de données</h3>
    <p>
        Les variables permettent de conserver des informations en mémoire pour les utiliser ultérieurement. Par exemple, elles peuvent contenir :
    </p>
    <ul>
        <li>Le nom d'un utilisateur (<code>let nomUtilisateur = "Alice";</code>)</li>
        <li>Un score dans un jeu (<code>let score = 100;</code>)</li>
        <li>Une configuration système (<code>const config = { theme: "clair" };</code>)</li>
    </ul>

    <h3>B. Réutilisation et flexibilité</h3>
    <p>
        Une variable permet d'éviter la duplication de valeurs dans le code. Ainsi, si une donnée change, il suffit de la mettre à jour dans une seule variable, et toutes les parties du programme utilisant cette variable seront automatiquement mises à jour.
    </p>
    <p>Exemple :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="keyword">let</span> tauxTva = <span class="number">0.2</span>;
<span class="keyword">let</span> prix = <span class="number">100</span>;
<span class="keyword">let</span> prixAvecTva = prix * (1 + tauxTva); <span class="comment">// Calcul automatique</span>
<span class="keyword">console</span>.log(prixAvecTva); <span class="comment">// Affiche : 120</span>
</code></pre>
    </div>

    <h3>C. Calculs et opérations logiques</h3>
    <p>
        Les variables facilitent les opérations complexes, qu'elles soient mathématiques ou logiques. Elles permettent de stocker les résultats intermédiaires ou d'agir comme des compteurs dans des boucles.
    </p>
    <p>Exemple :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="keyword">let</span> compteur = <span class="number">0</span>;
<span class="keyword">for</span> (<span class="keyword">let</span> i = <span class="number">0</span>; i < <span class="number">10</span>; i++) {
    compteur += i;
}
<span class="keyword">console</span>.log(compteur); <span class="comment">// Affiche : 45</span>
</code></pre>
    </div>

    <h3>D. Organisation et structuration du code</h3>
    <p>
        Les variables permettent de structurer le code en regroupant les informations connexes. Cela rend le programme plus lisible et plus facile à maintenir.
    </p>
    <p>Exemple :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="keyword">const</span> utilisateur = {
    nom: <span class="string">"Alice"</span>,
    age: <span class="number">30</span>,
    email: <span class="string">"alice@example.com"</span>
};
<span class="keyword">console</span>.log(utilisateur.nom); <span class="comment">// Affiche : Alice</span>
</code></pre>
    </div>

    <h3>E. Adaptabilité</h3>
    <p>
        Les variables rendent les programmes dynamiques et adaptables. Par exemple, elles permettent de changer la langue d'une application ou d'ajuster le design en fonction des préférences utilisateur sans modifier le code en profondeur.
    </p>
</div>
<div class="col-12">
    <h2 id="types-variables">IV. Types de Variables</h2>
    <p>
        En JavaScript, les variables peuvent être déclarées à l'aide de trois mots-clés principaux : <code>var</code>, <code>let</code>, et <code>const</code>. Chacun de ces mots-clés présente des caractéristiques spécifiques influençant leur portée, leur réassignation, et leur comportement global.
    </p>

    <h3>A. <code>var</code> : Le mot-clé historique</h3>
    <p>
        <strong>Caractéristiques :</strong>
        <ul>
            <li>Portée fonctionnelle ou globale : Une variable déclarée avec <code>var</code> est accessible dans toute la fonction ou dans tout le script si elle est déclarée en dehors d'une fonction.</li>
            <li>Hoisting : Les variables <code>var</code> sont "élevées" au sommet de leur portée, mais non initialisées.</li>
        </ul>
    </p>
    <p>Exemple :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="keyword">function</span> testVar() {
    <span class="keyword">if</span> (<span class="keyword">true</span>) {
        <span class="variable">var</span> message = <span class="string">"Accessible partout dans la fonction"</span>;
    }
    <span class="keyword">console</span>.log(message); <span class="comment">// Affiche : Accessible partout dans la fonction</span>
}
testVar();
</code></pre>
    </div>

    <h3>B. <code>let</code> : Pour des variables modernes</h3>
    <p>
        <strong>Caractéristiques :</strong>
        <ul>
            <li>Portée de bloc : Une variable déclarée avec <code>let</code> est accessible uniquement dans le bloc où elle est définie.</li>
            <li>Réassignation : Une variable <code>let</code> peut être réassignée après sa déclaration initiale.</li>
        </ul>
    </p>
    <p>Exemple :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="keyword">if</span> (<span class="keyword">true</span>) {
    <span class="keyword">let</span> compteur = <span class="number">0</span>;
    compteur += <span class="number">1</span>;
    <span class="keyword">console</span>.log(compteur); <span class="comment">// Affiche : 1</span>
}
<span class="keyword">console</span>.log(compteur); <span class="comment">// Erreur : compteur n'est pas défini en dehors du bloc</span>
</code></pre>
    </div>

    <h3>C. <code>const</code> : Pour des constantes</h3>
    <p>
        <strong>Caractéristiques :</strong>
        <ul>
            <li>Immuable : Une fois initialisée, une variable <code>const</code> ne peut plus être réassignée.</li>
            <li>Portée de bloc : Similaire à <code>let</code>, <code>const</code> est limité au bloc où il est défini.</li>
        </ul>
    </p>
    <p>Exemple :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="keyword">const</span> pi = <span class="number">3.14159</span>;
pi = <span class="number">3</span>; <span class="comment">// Erreur : réassignation d'une constante</span>
</code></pre>
    </div>

    <h3>D. Tableau récapitulatif</h3>
    <div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>Mot-clé</th>
                <th>Portée</th>
                <th>Réassignation</th>
                <th>Initialisation obligatoire</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>var</code></td>
                <td>Fonction ou globale</td>
                <td>Oui</td>
                <td>Non</td>
            </tr>
            <tr>
                <td><code>let</code></td>
                <td>Bloc</td>
                <td>Oui</td>
                <td>Non</td>
            </tr>
            <tr>
                <td><code>const</code></td>
                <td>Bloc</td>
                <td>Non</td>
                <td>Oui</td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
<div class="col-12">
    <h2 id="declaration-variables">
        <i class="fas fa-pencil-alt"></i> V. Déclaration des Variables
    </h2>
    <p>
        En JavaScript, les variables peuvent être déclarées à l'aide de trois mots-clés principaux : <code>var</code>, <code>let</code>, et <code>const</code>. Chaque mot-clé offre des caractéristiques uniques adaptées à différents scénarios de programmation. Comprendre comment et quand les utiliser est essentiel pour écrire un code clair, maintenable et performant.
    </p>

    <h3><i class="fas fa-history"></i> A. Déclaration avec <code>var</code></h3>
    <p>
        Le mot-clé <code>var</code> était la seule option disponible dans les anciennes versions de JavaScript. Cependant, son utilisation est aujourd'hui déconseillée en raison de ses limitations, notamment sa portée fonctionnelle et son comportement imprévisible avec le <strong>hoisting</strong>.
    </p>
    <p>Exemple :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="keyword">function</span> ancienneDeclaration() {
    <span class="variable">var</span> age = <span class="number">25</span>;
    <span class="keyword">if</span> (<span class="keyword">true</span>) {
        <span class="variable">var</span> age = <span class="number">30</span>; <span class="comment">// Redéclare et remplace la variable</span>
    }
    <span class="keyword">console</span>.log(age); <span class="comment">// Affiche : 30</span>
}
ancienneDeclaration();
</code></pre>
    </div>

    <h3><i class="fas fa-check"></i> B. Déclaration avec <code>let</code></h3>
    <p>
        Le mot-clé <code>let</code> a été introduit avec ECMAScript 6 (ES6) pour résoudre les problèmes associés à <code>var</code>. Il offre une portée de bloc et permet la réassignation de la variable tout en améliorant la lisibilité et la sécurité du code.
    </p>
    <p>Exemple :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="keyword">if</span> (<span class="keyword">true</span>) {
    <span class="keyword">let</span> compteur = <span class="number">1</span>;
    compteur += <span class="number">1</span>;
    <span class="keyword">console</span>.log(compteur); <span class="comment">// Affiche : 2</span>
}
<span class="keyword">console</span>.log(compteur); <span class="comment">// Erreur : compteur n'est pas défini en dehors du bloc</span>
</code></pre>
    </div>

    <h3><i class="fas fa-lock"></i> C. Déclaration avec <code>const</code></h3>
    <p>
        Le mot-clé <code>const</code> est utilisé pour déclarer des variables immuables, c'est-à-dire dont la valeur ne peut pas être réassignée après sa déclaration initiale. Il garantit également une portée de bloc.
    </p>
    <p>Exemple :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="keyword">const</span> pi = <span class="number">3.14</span>;
pi = <span class="number">3.14159</span>; <span class="comment">// Erreur : réassignation d'une constante</span>
</code></pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> D. Bonnes pratiques pour la déclaration</h3>
    <ul>
        <li><i class="fas fa-star"></i> Utilisez <code>const</code> par défaut pour déclarer vos variables, sauf si vous savez qu'elles devront être modifiées.</li>
        <li><i class="fas fa-star"></i> Préférez <code>let</code> lorsque la valeur de la variable doit être réassignée.</li>
        <li><i class="fas fa-exclamation-triangle"></i> Évitez d'utiliser <code>var</code>, sauf pour maintenir un code existant.</li>
        <li><i class="fas fa-code"></i> Donnez des noms clairs et significatifs à vos variables pour améliorer la lisibilité.</li>
    </ul>

    <h3><i class="fas fa-table"></i> E. Tableau récapitulatif</h3>
    <div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th><i class="fas fa-key"></i> Mot-clé</th>
                <th><i class="fas fa-map-marker-alt"></i> Portée</th>
                <th><i class="fas fa-redo"></i> Réassignation</th>
                <th><i class="fas fa-check-circle"></i> Initialisation obligatoire</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>var</code></td>
                <td>Fonction ou globale</td>
                <td>Oui</td>
                <td>Non</td>
            </tr>
            <tr>
                <td><code>let</code></td>
                <td>Bloc</td>
                <td>Oui</td>
                <td>Non</td>
            </tr>
            <tr>
                <td><code>const</code></td>
                <td>Bloc</td>
                <td>Non</td>
                <td>Oui</td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
<div class="col-12">
    <h2 id="comparaison-var-let-const">
        <i class="fas fa-balance-scale"></i> VI. Comparaison entre <code>var</code>, <code>let</code>, et <code>const</code>
    </h2>
    <p>
        Les trois mots-clés <code>var</code>, <code>let</code>, et <code>const</code> permettent de déclarer des variables en JavaScript. Cependant, ils ont des caractéristiques distinctes qui influencent leur portée, leur comportement et leur utilisation.
    </p>

    <h3><i class="fas fa-search"></i> Analyse des différences</h3>
    <div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th><i class="fas fa-key"></i> Mot-clé</th>
                <th><i class="fas fa-map-marker-alt"></i> Portée</th>
                <th><i class="fas fa-arrow-circle-up"></i> Hoisting</th>
                <th><i class="fas fa-redo"></i> Réassignation</th>
                <th><i class="fas fa-check-circle"></i> Initialisation obligatoire</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>var</code></td>
                <td>Fonction ou globale</td>
                <td>Déclarée mais non initialisée (undefined)</td>
                <td>Oui</td>
                <td>Non</td>
            </tr>
            <tr>
                <td><code>let</code></td>
                <td>Bloc</td>
                <td>Non</td>
                <td>Oui</td>
                <td>Non</td>
            </tr>
            <tr>
                <td><code>const</code></td>
                <td>Bloc</td>
                <td>Non</td>
                <td>Non</td>
                <td>Oui</td>
            </tr>
        </tbody>
    </table>
</div>
    <h3><i class="fas fa-exclamation-triangle"></i> Points clés à retenir</h3>
    <ul>
        <li><i class="fas fa-star"></i> <code>var</code> est désormais obsolète pour les nouvelles applications. Préférez <code>let</code> ou <code>const</code>.</li>
        <li><i class="fas fa-check"></i> Utilisez <code>let</code> pour des variables dont la valeur peut changer au fil du temps.</li>
        <li><i class="fas fa-lock"></i> Utilisez <code>const</code> pour des valeurs constantes ou immuables.</li>
    </ul>

    <h3><i class="fas fa-code"></i> Exemples pratiques</h3>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple avec var</span>
<span class="variable">var</span> compteur = <span class="number">1</span>;
<span class="keyword">if</span> (<span class="keyword">true</span>) {
    <span class="variable">var</span> compteur = <span class="number">2</span>;
    <span class="keyword">console</span>.log(compteur); <span class="comment">// Affiche : 2</span>
}
<span class="keyword">console</span>.log(compteur); <span class="comment">// Affiche : 2 (portée fonctionnelle ou globale)</span>

<span class="comment">// Exemple avec let</span>
<span class="keyword">let</span> compteurBloc = <span class="number">1</span>;
<span class="keyword">if</span> (<span class="keyword">true</span>) {
    <span class="keyword">let</span> compteurBloc = <span class="number">2</span>;
    <span class="keyword">console</span>.log(compteurBloc); <span class="comment">// Affiche : 2 (portée de bloc)</span>
}
<span class="keyword">console</span>.log(compteurBloc); <span class="comment">// Affiche : 1 (variable extérieure intacte)</span>

<span class="comment">// Exemple avec const</span>
<span class="keyword">const</span> pi = <span class="number">3.14159</span>;
pi = <span class="number">3.14</span>; <span class="comment">// Erreur : réassignation impossible</span>
</code></pre>
    </div>

    <h3><i class="fas fa-clipboard-check"></i> Testez vos connaissances</h3>
    <p>
        Cliquez sur le bouton ci-dessous pour évaluer vos connaissances grâce à un quiz interactif :
    </p>
    <button class="btn btn-primary" onclick="demarrerQuizVariable()">Démarrer le Quiz</button>

    <div id="quiz-resultat" style="margin-top: 10px; font-weight: bold; color: #333;"></div>
</div>

<script>
    function demarrerQuizVariable() {
        const questions = [
            { question: "Quelle est la portée de 'var' ?", reponse: "Fonction ou globale" },
            { question: "Quelle déclaration est recommandée pour des valeurs immuables ?", reponse: "const" },
            { question: "Peut-on réassigner une variable déclarée avec 'let' ?", reponse: "Oui" }
        ];

        let resultat = "";
        for (let i = 0; i < questions.length; i++) {
            const utilisateurReponse = prompt(questions[i].question);
            resultat += `${questions[i].question}<br>`;
            resultat += utilisateurReponse.toLowerCase() === questions[i].reponse.toLowerCase()
                ? `<span style="color: green;">✔️ Correct</span><br>`
                : `<span style="color: red;">❌ Incorrect (Réponse correcte : ${questions[i].reponse})</span><br>`;
        }

        document.getElementById('quiz-resultat').innerHTML = resultat;
    }
</script>
<div class="col-12">
    <h2 id="exercices-variables">
        <i class="fas fa-dumbbell"></i> VII. Exercices
    </h2>
    <p>
        Testez vos connaissances sur les variables en JavaScript en réalisant ces exercices pratiques. Ces activités couvrent les concepts fondamentaux tels que les portées, les déclarations et les bonnes pratiques.
    </p>

    <!-- Exercice 1 -->
    <h3><i class="fas fa-code"></i> Exercice 1 : Calcul d'aire</h3>
    <p>
        Déclarez deux variables, <code>base</code> et <code>hauteur</code>, pour représenter les dimensions d'un triangle. Calculez son aire en utilisant la formule <code>(base * hauteur) / 2</code> et affichez le résultat dans la console.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="keyword">let</span> base = <span class="number">7</span>;
<span class="keyword">let</span> hauteur = <span class="number">4</span>;
<span class="keyword">const</span> aire = (base * hauteur) / <span class="number">2</span>;
<span class="keyword">console</span>.log(<span class="string">`L'aire est de : ${aire} unités.`</span>);
</code></pre>
    </div>
    <button class="btn btn-primary" onclick="exerciceAire()">Tester l'Exercice</button>
    <div id="resultat-aire" style="margin-top: 10px; font-weight: bold; color: #333;"></div>

    <!-- Exercice 2 -->
    <h3><i class="fas fa-puzzle-piece"></i> Exercice 2 : Portée des variables</h3>
    <p>
        Analysez le code suivant. Quelle sera la sortie dans la console ? Expliquez pourquoi.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="keyword">function</span> testLet() {
    <span class="keyword">let</span> x = <span class="number">10</span>;
    <span class="keyword">if</span> (<span class="keyword">true</span>) {
        <span class="keyword">let</span> x = <span class="number">20</span>;
        <span class="keyword">console</span>.log(x); <span class="comment">// Que va-t-il afficher ici ?</span>
    }
    <span class="keyword">console</span>.log(x); <span class="comment">// Et ici ?</span>
}
testLet();
</code></pre>
    </div>
    <button class="btn btn-secondary" onclick="exercicePortee()">Voir la Réponse</button>
    <div id="resultat-portee" style="margin-top: 10px; font-weight: bold; color: #333;"></div>

    <!-- Exercice 3 -->
    <h3><i class="fas fa-check-circle"></i> Exercice 3 : Bonnes pratiques</h3>
    <p>
        Identifiez et corrigez les erreurs dans le code ci-dessous. Appliquez les bonnes pratiques pour une meilleure lisibilité et un comportement correct.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="variable">var</span> Nom = <span class="string">"Alice"</span>;
<span class="variable">var</span> age = <span class="number">30</span>;
<span class="variable">var</span> adresse = 123; <span class="comment">// Mauvaise déclaration</span>
<span class="variable">var</span> email = <span class="string">"alice@example.com"</span>;
<span class="variable">console</span>.log(nomUtilisateur); <span class="comment">// Erreur de variable</span>
</code></pre>
    </div>
    <button class="btn btn-success" onclick="exerciceCorrectionVariable()">Voir la Correction</button>
    <div id="resultat-correction" style="margin-top: 10px; font-weight: bold; color: #333;"></div>
</div>

<script>
    // Exercice 1
    function exerciceAire() {
        const base = 7;
        const hauteur = 4;
        const aire = (base * hauteur) / 2;
        document.getElementById('resultat-aire').innerText = `L'aire est de : ${aire} unités.`;
    }

    // Exercice 2
    function exercicePortee() {
        const resultat = `
            console.log(x) dans le bloc if affichera : 20 (portée de bloc pour 'let').
            console.log(x) hors du bloc affichera : 10 (variable externe intacte).
        `;
        document.getElementById('resultat-portee').innerHTML = resultat;
    }

    // Exercice 3
    function exerciceCorrectionVariable() {
        const correction = `
            Correction :
            const nomUtilisateur = "Alice"; // Utilisation de const pour des données fixes.
            const age = 30;
            const adresse = "123 rue des Fleurs"; // Correction du type.
            const email = "alice@example.com";
            console.log(nomUtilisateur); // Variable corrigée.
        `;
        document.getElementById('resultat-correction').innerHTML = correction.replace(/\n/g, '<br>');
    }
</script>
<div class="col-12">
    <h2 id="bonnes-pratiques-variables">
        <i class="fas fa-lightbulb"></i> VIII. Bonnes pratiques pour les variables en JavaScript
    </h2>
    <p>
        L'utilisation correcte des variables est essentielle pour écrire un code JavaScript clair, maintenable et performant. Suivre des bonnes pratiques peut prévenir des erreurs fréquentes et améliorer la lisibilité du code.
    </p>

    <h3><i class="fas fa-star"></i> A. Préférez <code>const</code> et <code>let</code> à <code>var</code></h3>
    <p>
        Les variables déclarées avec <code>var</code> peuvent entraîner des comportements imprévus en raison de leur portée fonctionnelle et de leur hoisting. 
        Préférez <code>const</code> pour les constantes et <code>let</code> pour les variables susceptibles d'être réassignées.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Mauvaise pratique avec var</span>
<span class="variable">var</span> compteur = <span class="number">0</span>;
<span class="keyword">for</span> (<span class="variable">var</span> i = <span class="number">0</span>; i < <span class="number">5</span>; i++) {
    compteur += i;
}
<span class="keyword">console</span>.log(i); <span class="comment">// i est accessible ici, même hors du bloc for</span>

<span class="comment">// Bonne pratique avec let</span>
<span class="keyword">let</span> compteur = <span class="number">0</span>;
<span class="keyword">for</span> (<span class="keyword">let</span> i = <span class="number">0</span>; i < <span class="number">5</span>; i++) {
    compteur += i;
}
<span class="keyword">console</span>.log(<span class="string">"i est hors portée ici"</span>); <span class="comment">// Erreur</span>
</code></pre>
    </div>

    <h3><i class="fas fa-signature"></i> B. Donnez des noms significatifs</h3>
    <p>
        Les noms de variables doivent refléter leur utilité. Évitez les noms génériques comme <code>data</code> ou <code>x</code>. 
        Préférez des noms descriptifs qui indiquent leur rôle dans le programme.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Mauvaise pratique</span>
<span class="keyword">let</span> x = <span class="number">100</span>;
<span class="keyword">let</span> y = <span class="number">200</span>;
<span class="keyword">console</span>.log(x + y);

<span class="comment">// Bonne pratique</span>
<span class="keyword">const</span> prixProduitA = <span class="number">100</span>;
<span class="keyword">const</span> prixProduitB = <span class="number">200</span>;
<span class="keyword">console</span>.log(prixProduitA + prixProduitB);
</code></pre>
    </div>

    <h3><i class="fas fa-tools"></i> C. Initialisez vos variables</h3>
    <p>
        Toujours initialiser vos variables lors de leur déclaration permet d'éviter des comportements imprévisibles liés à des valeurs <code>undefined</code>.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Mauvaise pratique</span>
<span class="keyword">let</span> compteur;
<span class="keyword">console</span>.log(compteur); <span class="comment">// Affiche undefined</span>

<span class="comment">// Bonne pratique</span>
<span class="keyword">let</span> compteur = <span class="number">0</span>;
<span class="keyword">console</span>.log(compteur); <span class="comment">// Affiche 0</span>
</code></pre>
    </div>

    <h3><i class="fas fa-shield-alt"></i> D. Limitez l'utilisation des variables globales</h3>
    <p>
        Les variables globales peuvent être modifiées accidentellement par d'autres parties du code, ce qui peut entraîner des bugs difficiles à détecter. 
        Préférez les déclarations dans des portées locales ou des blocs.
    </p>

    <h3><i class="fas fa-code-branch"></i> E. Utilisez des constantes pour les valeurs fixes</h3>
    <p>
        Les constantes, définies avec <code>const</code>, garantissent que les valeurs ne peuvent pas être réassignées. Cela améliore la clarté du code et évite les modifications accidentelles.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Bonne pratique</span>
<span class="keyword">const</span> TAUX_TVA = <span class="number">0.2</span>;
<span class="keyword">let</span> prixHT = <span class="number">100</span>;
<span class="keyword">let</span> prixTTC = prixHT * (1 + TAUX_TVA);
<span class="keyword">console</span>.log(prixTTC);
</code></pre>
    </div>

    <h3><i class="fas fa-check-circle"></i> Testez vos connaissances</h3>
    <p>
        Mettez en pratique ces bonnes pratiques en corrigeant le code suivant :
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="variable">var</span> x = <span class="string">"Prix du produit"</span>;
<span class="variable">var</span> y = 12;
<span class="variable">var</span> z = y * <span class="number">1.2</span>;
<span class="variable">console</span>.log(x, z);
</code></pre>
    </div>
    <button class="btn btn-primary" onclick="corrigerBonnesPratiques()">Voir la Correction</button>
    <div id="resultat-bonnes-pratiques" style="margin-top: 10px; font-weight: bold; color: #333;"></div>
</div>

<script>
    function corrigerBonnesPratiques() {
        const correction = `
            Correction :
            const descriptionProduit = "Prix du produit";
            const prixProduit = 12;
            const prixAvecTva = prixProduit * 1.2;
            console.log(descriptionProduit, prixAvecTva);
        `;
        document.getElementById('resultat-bonnes-pratiques').innerHTML = correction.replace(/\n/g, '<br>');
    }
</script>
</div>
<div class="col-md-12">
    <h3 id="types-donnees">Type de données</h3>
    <div class="sommaire-container">
    <h2>Sommaire</h2>
    <ul>
        <li><a href="#contexte">I. Contexte</a></li>
        <li>
            <a href="#types-numeriques">II. Types numériques</a>
            <ul>
                <li><a href="#type-number" class="text-success">A. Le type Number</a></li>
                <li><a href="#type-bigint" class="text-success">B. Le type BigInt</a></li>
                <li><a href="#type-nan" class="text-success">C. Le NaN</a></li>
                <li><a href="#exercices-types-numeriques" class="text-success">Exercices</a></li>
            </ul>
        </li>
        <li>
            <a href="#autres-types-primitifs">III. Les autres types primitifs</a>
            <ul>
                <li><a href="#type-boolean" class="text-success">A. Le type Boolean</a></li>
                <li><a href="#type-string" class="text-success">B. Le type String</a></li>
                <li><a href="#type-symbol" class="text-success">C. Le type Symbol</a></li>
                <li><a href="#type-null" class="text-success">D. Le type Null</a></li>
                <li><a href="#type-undefined" class="text-success">E. Le type Undefined</a></li>
                <li><a href="#exercices-autres-types" class="text-success">Exercices</a></li>
            </ul>
        </li>
        <li><a href="#essentiel-types">IV. Essentiel</a></li>
        <li><a href="#auto-evaluation-types" disabled>V. Auto-évaluation</a></li>
    </ul>
</div>
<div class="col-12">
    <h3 id="contexte"><i class="fas fa-info-circle"></i> I. Contexte</h3>
    <p>
        JavaScript est l'un des langages de programmation les plus populaires pour le développement web. Il permet de créer des pages interactives et dynamiques en manipulant les éléments d'une page HTML.
        Comprendre les <strong>types de données</strong> en JavaScript est essentiel pour écrire un code efficace et éviter les erreurs liées à une mauvaise gestion des valeurs.
    </p>
    <p>
        En JavaScript, chaque donnée a un type. Ces types sont divisés en deux grandes catégories :
    </p>
    <ul>
        <li><strong>Types primitifs :</strong> Représentent des valeurs simples et immuables.</li>
        <li><strong>Types complexes :</strong> Représentent des structures de données plus complexes comme les objets et les tableaux.</li>
    </ul>
    <p>
        Ce cours aborde les différents types de données disponibles en JavaScript, leurs spécificités, et les bonnes pratiques pour les utiliser efficacement.
    </p>
</div>
<div class="col-12">
    <h3 id="types-numeriques"><i class="fas fa-calculator"></i> II. Types numériques</h3>
    <p>
        En JavaScript, les types numériques sont utilisés pour représenter les nombres. Ils permettent de manipuler les valeurs numériques pour des calculs, des comparaisons ou encore des algorithmes complexes.
        Les principaux types numériques sont :
    </p>
    <ul>
        <li><a href="#type-number"><strong>A. Le type Number</strong></a> : Pour les entiers et les nombres à virgule flottante.</li>
        <li><a href="#type-bigint"><strong>B. Le type BigInt</strong></a> : Pour des valeurs numériques très grandes ou très précises.</li>
        <li><a href="#type-nan"><strong>C. Le NaN</strong></a> : Une valeur spéciale qui signifie "Not-a-Number".</li>
    </ul>
</div>
<div class="col-12">
    <h3 id="type-number"><i class="fas fa-hashtag"></i> A. Le type Number</h3>
    <p>
        Le type <strong>Number</strong> est utilisé pour représenter les nombres, qu'ils soient entiers ou à virgule flottante.
        Il s'agit du type numérique principal en JavaScript.
    </p>
    <p>Exemples :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Nombre entier</span>
<span class="keyword">let</span> entier = <span class="number">42</span>;

<span class="comment">// Nombre à virgule flottante</span>
<span class="keyword">let</span> decimal = <span class="number">3.14</span>;

<span class="comment">// Opérations mathématiques</span>
<span class="keyword">let</span> somme = entier + decimal;
<span class="keyword">console</span>.log(somme); <span class="comment">// Affiche : 45.14</span>
</code></pre>
    </div>
</div>
<div class="col-12">
    <h3 id="type-bigint"><i class="fas fa-infinity"></i> B. Le type BigInt</h3>
    <p>
        Le type <strong>BigInt</strong> est utilisé pour représenter des entiers extrêmement grands ou très précis qui dépassent les limites du type Number.
        Il est particulièrement utile pour des calculs financiers ou scientifiques nécessitant une grande précision.
    </p>
    <p>Exemple :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Nombre entier normal</span>
<span class="keyword">let</span> grandNombre = <span class="number">12345678901234567890</span>n;

<span class="comment">// Opérations avec BigInt</span>
<span class="keyword">let</span> double = grandNombre * <span class="number">2</span>n;
<span class="keyword">console</span>.log(double); <span class="comment">// Affiche : 24691357802469135780n</span>
</code></pre>
    </div>
</div>
<div class="col-12">
    <h3 id="type-nan"><i class="fas fa-question-circle"></i> C. Le NaN</h3>
    <p>
        <strong>NaN</strong>, qui signifie "Not-a-Number", est une valeur spéciale qui apparaît lorsque vous effectuez une opération mathématique invalide.
        Bien que NaN soit un type Number, il indique une erreur numérique.
    </p>
    <p>Exemple :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Division par une chaîne de caractères</span>
<span class="keyword">let</span> resultat = <span class="number">42</span> / <span class="string">"abc"</span>;
<span class="keyword">console</span>.log(resultat); <span class="comment">// Affiche : NaN</span>

<span class="comment">// Vérification de NaN</span>
<span class="keyword">console</span>.log(<span class="keyword">isNaN</span>(resultat)); <span class="comment">// Affiche : true</span>
</code></pre>
    </div>
</div>
<div class="col-12">
    <h3 id="exercices-types-numeriques"><i class="fas fa-pencil-alt"></i> Exercices : Types numériques</h3>
    <p>
        Testez vos connaissances sur les types numériques en JavaScript en répondant aux questions suivantes :
    </p>

    <!-- Exercice 1 -->
    <h4><i class="fas fa-question-circle"></i> Exercice 1 : Manipulation des nombres</h4>
    <p>
        Déclarez deux variables pour des nombres, effectuez une opération de multiplication, puis affichez le résultat dans la console.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple attendu</span>
<span class="keyword">let</span> a = <span class="number">6</span>;
<span class="keyword">let</span> b = <span class="number">7</span>;
<span class="keyword">let</span> resultat = a * b;
<span class="keyword">console</span>.log(<span class="string">`Le résultat est : ${resultat}`</span>);
</code></pre>
    </div>
    <button class="btn btn-primary" onclick="exerciceMultiplicationTypes()">Tester</button>
    <div id="resultat-multiplication-type" style="margin-top: 10px; font-weight: bold; color: #333;"></div>

    <!-- Exercice 2 -->
    <h4><i class="fas fa-question-circle"></i> Exercice 2 : Utilisation de BigInt</h4>
    <p>
        Déclarez une variable <code>grandNombre</code> avec une valeur supérieure à 9007199254740991 (limite du type Number) en utilisant BigInt. Doublez cette valeur et affichez-la dans la console.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple attendu</span>
<span class="keyword">let</span> grandNombre = <span class="number">12345678901234567890</span>n;
<span class="keyword">let</span> double = grandNombre * <span class="number">2</span>n;
<span class="keyword">console</span>.log(double);
</code></pre>
    </div>
    <button class="btn btn-success" onclick="exerciceBigInt()">Tester</button>
    <div id="resultat-bigint" style="margin-top: 10px; font-weight: bold; color: #333;"></div>

    <!-- Exercice 3 -->
    <h4><i class="fas fa-question-circle"></i> Exercice 3 : Vérification de NaN</h4>
    <p>
        Essayez de diviser un nombre par une chaîne de caractères, puis vérifiez si le résultat est NaN en utilisant <code>isNaN</code>.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple attendu</span>
<span class="keyword">let</span> resultat = <span class="number">42</span> / <span class="string">"abc"</span>;
<span class="keyword">console</span>.log(<span class="keyword">isNaN</span>(resultat)); <span class="comment">// Affiche true</span>
</code></pre>
    </div>
    <button class="btn btn-warning" onclick="exerciceNaN()">Tester</button>
    <div id="resultat-nan" style="margin-top: 10px; font-weight: bold; color: #333;"></div>
</div>
<div class="col-12">
    <h2 id="autres-types-primitifs"><i class="fas fa-layer-group"></i> III. Les autres types primitifs</h2>
    <p>
        En JavaScript, plusieurs autres types primitifs existent pour représenter des données spécifiques. Ces types incluent :
    </p>
    <ul>
        <li><a href="#type-boolean"><strong>A. Le type Boolean</strong></a> : Représente des valeurs de vérité.</li>
        <li><a href="#type-string"><strong>B. Le type String</strong></a> : Manipule des chaînes de caractères.</li>
        <li><a href="#type-symbol"><strong>C. Le type Symbol</strong></a> : Crée des identifiants uniques.</li>
        <li><a href="#type-null"><strong>D. Le type Null</strong></a> : Représente une absence intentionnelle de valeur.</li>
        <li><a href="#type-undefined"><strong>E. Le type Undefined</strong></a> : Indique qu'une variable n'a pas encore reçu de valeur.</li>
    </ul>
</div>
<div class="col-12">
    <h3 id="type-boolean"><i class="fas fa-toggle-on"></i> A. Le type Boolean</h3>
    <p>
        Le type <strong>Boolean</strong> ne peut prendre que deux valeurs : <code>true</code> (vrai) ou <code>false</code> (faux). 
        Il est souvent utilisé pour les conditions ou les vérifications logiques.
    </p>
    <p>Exemple :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple de type Boolean</span>
<span class="keyword">let</span> estConnecte = <span class="keyword">true</span>;
<span class="keyword">let</span> aDuCredit = <span class="keyword">false</span>;

<span class="comment">// Utilisation dans une condition</span>
<span class="keyword">if</span> (estConnecte) {
    <span class="keyword">console</span>.log(<span class="string">"Bienvenue, utilisateur !"</span>);
} <span class="keyword">else</span> {
    <span class="keyword">console</span>.log(<span class="string">"Veuillez vous connecter."</span>);
}
</code></pre>
    </div>
</div>
<div class="col-12">
    <h3 id="type-string"><i class="fas fa-quote-right"></i> B. Le type String</h3>
    <p>
        Le type <strong>String</strong> est utilisé pour manipuler des textes ou des séquences de caractères. 
        Les chaînes de caractères peuvent être entourées de guillemets simples, doubles ou backticks.
    </p>
    <p>Exemple :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Chaînes de caractères</span>
<span class="keyword">let</span> nom = <span class="string">"Alice"</span>;
<span class="keyword">let</span> message = <span class="string">`Bienvenue, ${nom} !`</span>;

<span class="comment">// Affichage du message</span>
<span class="keyword">console</span>.log(message); <span class="comment">// Affiche : Bienvenue, Alice !</span>
</code></pre>
    </div>
</div>
<div class="col-12">
    <h3 id="type-symbol"><i class="fas fa-key"></i> C. Le type Symbol</h3>
    <p>
        Le type <strong>Symbol</strong> permet de créer des identifiants uniques. Ces identifiants sont souvent utilisés comme clés pour des objets ou dans des cas spécifiques.
    </p>
    <p>Exemple :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Création d'un symbole unique</span>
<span class="keyword">let</span> id = <span class="keyword">Symbol</span>(<span class="string">"id"</span>);

<span class="comment">// Utilisation dans un objet</span>
<span class="keyword">let</span> utilisateur = {
    [id]: <span class="number">12345</span>,
    nom: <span class="string">"Alice"</span>
};

<span class="keyword">console</span>.log(utilisateur[id]); <span class="comment">// Affiche : 12345</span>
</code></pre>
    </div>
</div>
<div class="col-12">
    <h3 id="type-null"><i class="fas fa-ban"></i> D. Le type Null</h3>
    <p>
        <strong>Null</strong> représente une absence intentionnelle de valeur. Il est utilisé pour indiquer qu'une variable ne contient aucune donnée.
    </p>
    <p>Exemple :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Déclaration avec null</span>
<span class="keyword">let</span> resultat = <span class="keyword">null</span>;
<span class="keyword">console</span>.log(resultat); <span class="comment">// Affiche : null</span>
</code></pre>
    </div>
</div>
<div class="col-12">
    <h3 id="type-undefined"><i class="fas fa-question-circle"></i> E. Le type Undefined</h3>
    <p>
        <strong>Undefined</strong> signifie qu'une variable a été déclarée, mais qu'aucune valeur ne lui a encore été assignée.
    </p>
    <p>Exemple :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Variable non initialisée</span>
<span class="keyword">let</span> x;
<span class="keyword">console</span>.log(x); <span class="comment">// Affiche : undefined</span>
</code></pre>
    </div>
</div>
<div class="col-12">
    <h3 id="exercices-autres-types"><i class="fas fa-pencil-alt"></i> Exercices : Les autres types primitifs</h3>
    <p>
        Testez vos connaissances sur les types primitifs en JavaScript à travers ces exercices :
    </p>

    <!-- Exercice 1 -->
    <h4><i class="fas fa-question-circle"></i> Exercice 1 : Le type Boolean</h4>
    <p>
        Déclarez une variable <code>estConnecte</code> initialisée à <code>true</code>. Ajoutez une condition pour afficher "Bienvenue" si elle est vraie, ou "Veuillez vous connecter" si elle est fausse.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple attendu</span>
<span class="keyword">let</span> estConnecte = <span class="keyword">true</span>;

<span class="comment">// Condition</span>
<span class="keyword">if</span> (estConnecte) {
    <span class="keyword">console</span>.log(<span class="string">"Bienvenue"</span>);
} <span class="keyword">else</span> {
    <span class="keyword">console</span>.log(<span class="string">"Veuillez vous connecter"</span>);
}
</code></pre>
    </div>
    <button class="btn btn-primary" onclick="exerciceBoolean()">Tester</button>
    <div id="resultat-boolean" style="margin-top: 10px; font-weight: bold; color: #333;"></div>

    <!-- Exercice 2 -->
    <h4><i class="fas fa-question-circle"></i> Exercice 2 : Le type String</h4>
    <p>
        Déclarez une variable <code>nom</code> avec la valeur "Alice". Utilisez les backticks pour créer une chaîne affichant "Bienvenue, Alice !" dans la console.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple attendu</span>
<span class="keyword">let</span> nom = <span class="string">"Alice"</span>;
<span class="keyword">console</span>.log(<span class="string">`Bienvenue, ${nom} !`</span>);
</code></pre>
    </div>
    <button class="btn btn-success" onclick="exerciceString()">Tester</button>
    <div id="resultat-string" style="margin-top: 10px; font-weight: bold; color: #333;"></div>

    <!-- Exercice 3 -->
    <h4><i class="fas fa-question-circle"></i> Exercice 3 : Le type Null</h4>
    <p>
        Déclarez une variable <code>resultat</code> initialisée à <code>null</code>, puis attribuez-lui une nouvelle valeur et affichez-la.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple attendu</span>
<span class="keyword">let</span> resultat = <span class="keyword">null</span>;
resultat = <span class="number">42</span>;
<span class="keyword">console</span>.log(resultat); <span class="comment">// Affiche : 42</span>
</code></pre>
    </div>
    <button class="btn btn-warning" onclick="exerciceNull()">Tester</button>
    <div id="resultat-null" style="margin-top: 10px; font-weight: bold; color: #333;"></div>
    <h4><i class="fas fa-key"></i> Exercice 4 : Le type Symbol</h4>
    <p>
        Créez un symbole unique appelé <code>id</code> avec la description "identifiant". Utilisez ce symbole comme clé dans un objet utilisateur et affichez la valeur associée au symbole.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple attendu</span>
<span class="keyword">let</span> id = <span class="keyword">Symbol</span>(<span class="string">"identifiant"</span>);
<span class="keyword">let</span> utilisateur = {
    [id]: <span class="number">12345</span>
};
<span class="keyword">console</span>.log(utilisateur[id]); <span class="comment">// Affiche : 12345</span>
</code></pre>
    </div>
    <button class="btn btn-info" onclick="exerciceSymbol()">Tester</button>
    <div id="resultat-symbol" style="margin-top: 10px; font-weight: bold; color: #333;"></div>

    <h4><i class="fas fa-question-circle"></i> Exercice 5 : Le type Undefined</h4>
    <p>
        Déclarez une variable <code>x</code> sans lui assigner de valeur, puis affichez sa valeur dans la console. Ensuite, assignez-lui une valeur et affichez à nouveau la variable.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple attendu</span>
<span class="keyword">let</span> x;
<span class="keyword">console</span>.log(x); <span class="comment">// Affiche : undefined</span>
x = <span class="string">"Nouvelle valeur"</span>;
<span class="keyword">console</span>.log(x); <span class="comment">// Affiche : Nouvelle valeur</span>
</code></pre>
    </div>
    <button class="btn btn-secondary" onclick="exerciceUndefined()">Tester</button>
    <div id="resultat-undefined" style="margin-top: 10px; font-weight: bold; color: #333;"></div>

</div>
<div class="col-12">
    <h2 id="essentiel-types"><i class="fas fa-lightbulb"></i> IV. Essentiel</h2>
    <p>
        Les types de données en JavaScript sont fondamentaux pour manipuler les valeurs et écrire un code efficace. Voici les points clés à retenir :
    </p>
    <ul>
        <li>
            <strong>Types numériques :</strong>
            <ul>
                <li><strong>Number :</strong> Représente les entiers et les nombres à virgule flottante.</li>
                <li><strong>BigInt :</strong> Manipule des nombres extrêmement grands.</li>
                <li><strong>NaN :</strong> Indique une erreur numérique ("Not-a-Number").</li>
            </ul>
        </li>
        <li>
            <strong>Autres types primitifs :</strong>
            <ul>
                <li><strong>Boolean :</strong> Représente des valeurs de vérité (<code>true</code> ou <code>false</code>).</li>
                <li><strong>String :</strong> Manipule du texte, entouré de guillemets simples, doubles ou backticks.</li>
                <li><strong>Symbol :</strong> Crée des identifiants uniques.</li>
                <li><strong>Null :</strong> Indique une absence intentionnelle de valeur.</li>
                <li><strong>Undefined :</strong> Indique qu'une variable a été déclarée mais non initialisée.</li>
            </ul>
        </li>
        <li>
            <strong>Bonnes pratiques :</strong>
            <ul>
                <li>Utilisez les types appropriés pour chaque situation.</li>
                <li>Initialisez toujours vos variables pour éviter des erreurs inattendues.</li>
                <li>Manipulez les objets et les symboles avec précaution pour éviter les collisions de clés.</li>
            </ul>
        </li>
    </ul>
    <p>
        Ces connaissances sont cruciales pour écrire un code JavaScript robuste et maintenable. Assurez-vous de les pratiquer régulièrement pour les maîtriser.
    </p>
</div>


</div>
<div class="col-md-12">
        <!-- Ajout de l'iframe YouTube -->
        <div style="margin-top: 20px;">
            <h4>Vidéo explicative sur les variables en JavaScript :</h4>
            <p>Auteur de la vidéo : Melvynx</p>
            <p>
                🐦 Mon Twitter : 
                <a href="https://twitter.com/melvynxdev" target="_blank">@melvynxdev</a><br>
                🖥 Mon GitHub : 
                <a href="https://github.com/Melvynx" target="_blank">https://github.com/Melvynx</a><br>
                📑 Mon Blog : 
                <a href="https://codelynx.dev" target="_blank">https://codelynx.dev</a><br>
                Le club du développeur secret : 
                <a href="https://codelynx.dev/club" target="_blank">https://codelynx.dev/club</a>
            </p>
            <div class="col-12" style="margin-top: 20px; position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                <iframe 
                    src="https://www.youtube.com/embed/i1LzrU9VosM" 
                    title="Introduction aux variables en JavaScript"
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            <p>
                <strong>Description de la vidéo :</strong> Cours GRATUIT sur JavaScript : 
                <a href="https://codelynx.dev/beginjavascript/" target="_blank">https://codelynx.dev/beginjavascript/...</a>
            </p>
            </div>
        </div>
    </div>
<script>
    // Exercice 1 : Multiplication
    function exerciceMultiplicationTypes() {
        const a = 6;
        const b = 7;
        const resultat = a * b;
        document.getElementById('resultat-multiplication-type').innerText = `Le résultat est : ${resultat}`;
    }

    // Exercice 2 : BigInt
    function exerciceBigInt() {
        const grandNombre = 12345678901234567890n;
        const double = grandNombre * 2n;
        document.getElementById('resultat-bigint').innerText = `Le double est : ${double}`;
    }

    // Exercice 3 : NaN
    function exerciceNaN() {
        const resultat = 42 / "abc";
        const estNan = isNaN(resultat);
        document.getElementById('resultat-nan').innerText = `Est-ce NaN ? ${estNan}`;
    }
    // Exercice 4 : Boolean
    function exerciceBoolean() {
        const estConnecte = true;
        const message = estConnecte ? "Bienvenue" : "Veuillez vous connecter";
        document.getElementById('resultat-boolean').innerText = message;
    }

    // Exercice 5 : String
    function exerciceString() {
        const nom = "Alice";
        const message = `Bienvenue, ${nom} !`;
        document.getElementById('resultat-string').innerText = message;
    }

    // Exercice 6 : Null
    function exerciceNull() {
        let resultat = null;
        resultat = 42;
        document.getElementById('resultat-null').innerText = `La nouvelle valeur est : ${resultat}`;
    }
    // Exercice 7 : Symbol
    function exerciceSymbol() {
        const id = Symbol("identifiant");
        const utilisateur = { [id]: 12345 };
        const resultat = utilisateur[id];
        document.getElementById('resultat-symbol').innerText = `La valeur associée au symbole est : ${resultat}`;
    }

    // Exercice 8 : Undefined
    function exerciceUndefined() {
        let x;
        const avant = `Avant assignation : ${x}`; // Affiche undefined
        x = "Nouvelle valeur";
        const apres = `Après assignation : ${x}`; // Affiche Nouvelle valeur
        document.getElementById('resultat-undefined').innerText = `${avant}\n${apres}`;
    }
</script>

<div class="row">
<div class="col-12">
<nav class="sommaire-container">
    <h3 id="operateurs"><i class="fas fa-list"></i> Sommaire</h3>
    <ul>
        <li><a href="#contexte"><i class="fas fa-info-circle"></i> Contexte</a></li>
        <li><a href="#arithmetiques-affectation"><i class="fas fa-calculator"></i> Les opérateurs arithmétiques et d'affectation</a>
            <ul>
                <li><a href="#arithmetiques"><i class="fas fa-plus"></i> Les opérateurs arithmétiques</a></li>
                <li><a href="#affectation"><i class="fas fa-equals"></i> Les opérateurs d'affectation</a></li>
                <li><a href="#chaines"><i class="fas fa-font"></i> Opérateurs pour les chaînes de caractères</a></li>
            </ul>
        </li>
        <li><a href="#comparaison-logique"><i class="fas fa-balance-scale"></i> Opérateurs de comparaison et logiques</a>
            <ul>
                <li><a href="#comparaison"><i class="fas fa-question"></i> Les opérateurs de comparaison</a></li>
                <li><a href="#logiques"><i class="fas fa-check"></i> Les opérateurs logiques</a></li>
            </ul>
        </li>
        <li><a href="#essentiel-operateurs"><i class="fas fa-lightbulb"></i> Essentiel</a></li>
        <li><a href="#auto-evaluation-operateurs" disabled><i class="fas fa-tasks"></i> Auto-évaluation</a></li>
    </ul>
    </nav>
</div>
<div class="col-12">
    <h3 id="contexte"><i class="fas fa-info-circle"></i> I. Contexte</h3>
    <p>
        Les opérateurs en JavaScript sont des éléments fondamentaux du langage, permettant de manipuler et de comparer des données, d'affecter des valeurs, et bien plus encore. Ils constituent des outils essentiels pour construire des expressions, effectuer des calculs et prendre des décisions dans votre code.
    </p>
    <p>
        Ce cours aborde les principaux types d'opérateurs utilisés en JavaScript, tels que les opérateurs arithmétiques, d'affectation, de comparaison, logiques et spécifiques aux chaînes de caractères. En maîtrisant ces concepts, vous pourrez écrire des scripts plus puissants et efficaces.
    </p>
    <p>
        <strong>Durée :</strong> Environ 60 minutes<br>
        <strong>Pré-requis :</strong> Comprendre les bases des variables et des types de données en JavaScript.
    </p>
</div>
<div class="col-12">
    <h2 id="arithmetiques-affectation"><i class="fas fa-calculator"></i> II. Les opérateurs arithmétiques et d'affectation</h2>
    <p>
        Les opérateurs arithmétiques et d'affectation sont utilisés pour effectuer des calculs et assigner des valeurs aux variables en JavaScript. Ils permettent de manipuler des données numériques et de gérer facilement les calculs complexes dans vos programmes.
    </p>
</div>
<div class="col-12">
    <h3 id="arithmetiques"><i class="fas fa-plus"></i> A. Les opérateurs arithmétiques</h3>
    <p>
        Les opérateurs arithmétiques effectuent des calculs mathématiques sur des nombres. Voici les principaux opérateurs disponibles :
    </p>
    <ul>
        <li><strong>+</strong> : Addition</li>
        <li><strong>-</strong> : Soustraction</li>
        <li><strong>*</strong> : Multiplication</li>
        <li><strong>/</strong> : Division</li>
        <li><strong>%</strong> : Modulo (reste de la division)</li>
        <li><strong>**</strong> : Exponentiation</li>
    </ul>
    <p>Exemples :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Addition</span>
<span class="keyword">let</span> somme = <span class="number">5</span> + <span class="number">3</span>;

<span class="comment">// Division</span>
<span class="keyword">let</span> resultat = <span class="number">10</span> / <span class="number">2</span>;

<span class="comment">// Modulo</span>
<span class="keyword">let</span> reste = <span class="number">7</span> % <span class="number">3</span>;

<span class="comment">// Exponentiation</span>
<span class="keyword">let</span> puissance = <span class="number">2</span> ** <span class="number">3</span>;

<span class="keyword">console</span>.log(somme, resultat, reste, puissance);
</code></pre>
    </div>
</div>
<div class="col-12">
    <h3 id="affectation"><i class="fas fa-equals"></i> B. Les opérateurs d'affectation</h3>
    <p>
        Les opérateurs d'affectation permettent d'assigner des valeurs aux variables et de combiner des calculs en une seule opération.
        Voici les principaux opérateurs d'affectation :
    </p>
    <ul>
        <li><strong>=</strong> : Affectation simple</li>
        <li><strong>+=</strong> : Ajoute une valeur à la variable</li>
        <li><strong>-=</strong> : Soustrait une valeur à la variable</li>
        <li><strong>*=</strong> : Multiplie la variable par une valeur</li>
        <li><strong>/=</strong> : Divise la variable par une valeur</li>
        <li><strong>%=</strong> : Affecte le reste de la division</li>
    </ul>
    <p>Exemples :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Affectation simple</span>
<span class="keyword">let</span> total = <span class="number">10</span>;

<span class="comment">// Ajoute 5 au total</span>
total += <span class="number">5</span>;

<span class="comment">// Multiplie par 2</span>
total *= <span class="number">2</span>;

<span class="keyword">console</span>.log(total); <span class="comment">// Affiche : 30</span>
</code></pre>
    </div>
</div>
<div class="col-12">
    <h3 id="chaines"><i class="fas fa-font"></i> C. Opérateurs pour les chaînes de caractères</h3>
    <p>
        En JavaScript, l’opérateur <strong>+</strong> peut également être utilisé pour concaténer des chaînes de caractères.
        Il permet de combiner plusieurs chaînes en une seule.
    </p>
    <p>Exemple :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Concaténation de chaînes</span>
<span class="keyword">let</span> prenom = <span class="string">"Alice"</span>;
<span class="keyword">let</span> nom = <span class="string">"Dupont"</span>;

<span class="comment">// Résultat : Alice Dupont</span>
<span class="keyword">let</span> nomComplet = prenom + <span class="string">" "</span> + nom;

<span class="keyword">console</span>.log(nomComplet);
</code></pre>
    </div>
</div>
<div class="col-12">
    <h3 id="exercices-arithmetiques"><i class="fas fa-pencil-alt"></i> Exercices : Les opérateurs arithmétiques et d’affectation</h3>
    <p>
        Testez vos connaissances en résolvant les exercices suivants :
    </p>

    <!-- Exercice 1 -->
    <h4><i class="fas fa-plus"></i> Exercice 1 : Les opérateurs arithmétiques</h4>
    <p>
        Déclarez deux variables <code>a</code> et <code>b</code> avec les valeurs 10 et 3. Effectuez une addition, une multiplication, un modulo, et affichez les résultats dans la console.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple attendu</span>
<span class="keyword">let</span> a = <span class="number">10</span>;
<span class="keyword">let</span> b = <span class="number">3</span>;
<span class="keyword">console</span>.log(a + b); <span class="comment">// Affiche : 13</span>
<span class="keyword">console</span>.log(a * b); <span class="comment">// Affiche : 30</span>
<span class="keyword">console</span>.log(a % b); <span class="comment">// Affiche : 1</span>
</code></pre>
    </div>
    <button class="btn btn-primary" onclick="exerciceArithmetiques()">Tester</button>
    <div id="resultat-arithmetiques" style="margin-top: 10px; font-weight: bold; color: #333;"></div>

    <!-- Exercice 2 -->
    <h4><i class="fas fa-equals"></i> Exercice 2 : Les opérateurs d’affectation</h4>
    <p>
        Déclarez une variable <code>x</code> avec la valeur 20. Ajoutez-lui 10, puis divisez-la par 2. Affichez le résultat final dans la console.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple attendu</span>
<span class="keyword">let</span> x = <span class="number">20</span>;
x += <span class="number">10</span>;
x /= <span class="number">2</span>;
<span class="keyword">console</span>.log(x); <span class="comment">// Affiche : 15</span>
</code></pre>
    </div>
    <button class="btn btn-success" onclick="exerciceAffectation()">Tester</button>
    <div id="resultat-affectation" style="margin-top: 10px; font-weight: bold; color: #333;"></div>

    <!-- Exercice 3 -->
    <h4><i class="fas fa-font"></i> Exercice 3 : Concaténation de chaînes</h4>
    <p>
        Déclarez deux variables <code>prenom</code> et <code>nom</code> avec les valeurs "Alice" et "Dupont". Concaténez-les pour afficher "Alice Dupont" dans la console.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple attendu</span>
<span class="keyword">let</span> prenom = <span class="string">"Alice"</span>;
<span class="keyword">let</span> nom = <span class="string">"Dupont"</span>;
<span class="keyword">console</span>.log(prenom + <span class="string">" "</span> + nom); <span class="comment">// Affiche : Alice Dupont</span>
</code></pre>
    </div>
    <button class="btn btn-warning" onclick="exerciceConcatener()">Tester</button>
    <div id="resultat-concatener" style="margin-top: 10px; font-weight: bold; color: #333;"></div>
</div>
<div class="col-12">
    <h2 id="comparaison-logique"><i class="fas fa-balance-scale"></i> III. Les opérateurs de comparaison et logiques</h2>
    <p>
        Les opérateurs de comparaison et logiques sont essentiels pour évaluer des conditions et contrôler le flux d’un programme. Ils sont principalement utilisés dans des instructions conditionnelles telles que <code>if</code>, <code>else</code>, ou les boucles.
    </p>
</div>
<div class="col-12">
    <h3 id="comparaison"><i class="fas fa-question"></i> A. Les opérateurs de comparaison</h3>
    <p>
        Les opérateurs de comparaison permettent de comparer deux valeurs et renvoient un résultat boolean (<code>true</code> ou <code>false</code>).
        Voici les principaux opérateurs :
    </p>
    <ul>
        <li><strong>==</strong> : Égalité abstraite (ne vérifie pas les types).</li>
        <li><strong>===</strong> : Égalité stricte (vérifie les types).</li>
        <li><strong>!=</strong> : Différence abstraite.</li>
        <li><strong>!==</strong> : Différence stricte.</li>
        <li><strong>&gt;</strong> : Supérieur.</li>
        <li><strong>&lt;</strong> : Inférieur.</li>
        <li><strong>&gt;=</strong> : Supérieur ou égal.</li>
        <li><strong>&lt;=</strong> : Inférieur ou égal.</li>
    </ul>
    <p>Exemples :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Comparaison stricte</span>
<span class="keyword">console</span>.log(<span class="number">5</span> === <span class="number">5</span>); <span class="comment">// true</span>
<span class="keyword">console</span>.log(<span class="number">5</span> === <span class="string">"5"</span>); <span class="comment">// false</span>

<span class="comment">// Supérieur ou égal</span>
<span class="keyword">console</span>.log(<span class="number">10</span> >= <span class="number">5</span>); <span class="comment">// true</span>
</code></pre>
    </div>
</div>
<div class="col-12">
    <h3 id="logiques"><i class="fas fa-check"></i> B. Les opérateurs logiques</h3>
    <p>
        Les opérateurs logiques permettent de combiner plusieurs conditions et renvoient une valeur boolean.
        Voici les principaux opérateurs :
    </p>
    <ul>
        <li><strong>&&</strong> : ET logique. Renvoie <code>true</code> si toutes les conditions sont vraies.</li>
        <li><strong>||</strong> : OU logique. Renvoie <code>true</code> si au moins une condition est vraie.</li>
        <li><strong>!</strong> : NON logique. Inverse la valeur boolean.</li>
    </ul>
    <p>Exemples :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// ET logique</span>
<span class="keyword">let</span> a = <span class="number">5</span>;
<span class="keyword">let</span> b = <span class="number">10</span>;
<span class="keyword">console</span>.log(a > <span class="number">3</span> && b < <span class="number">15</span>); <span class="comment">// true</span>

<span class="comment">// OU logique</span>
<span class="keyword">console</span>.log(a > <span class="number">10</span> || b > <span class="number">5</span>); <span class="comment">// true</span>

<span class="comment">// NON logique</span>
<span class="keyword">console</span>.log(!(<span class="number">5</span> > <span class="number">10</span>)); <span class="comment">// true</span>
</code></pre>
    </div>
</div>
<div class="col-12">
    <h3 id="exercices-comparaison-logiques"><i class="fas fa-pencil-alt"></i> Exercices : Les opérateurs de comparaison et logiques</h3>
    <p>
        Testez vos connaissances sur les opérateurs de comparaison et logiques en résolvant les exercices suivants :
    </p>

    <!-- Exercice 1 -->
    <h4><i class="fas fa-question"></i> Exercice 1 : Comparaison stricte</h4>
    <p>
        Déclarez deux variables <code>a</code> et <code>b</code> avec les valeurs 10 et "10". Comparez-les en utilisant <code>==</code> et <code>===</code>, puis affichez les résultats dans la console.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple attendu</span>
<span class="keyword">let</span> a = <span class="number">10</span>;
<span class="keyword">let</span> b = <span class="string">"10"</span>;

<span class="keyword">console</span>.log(a == b); <span class="comment">// true</span>
<span class="keyword">console</span>.log(a === b); <span class="comment">// false</span>
</code></pre>
    </div>
    <button class="btn btn-primary" onclick="exerciceComparaison()">Tester</button>
    <div id="resultat-comparaison" style="margin-top: 10px; font-weight: bold; color: #333;"></div>

    <!-- Exercice 2 -->
    <h4><i class="fas fa-check"></i> Exercice 2 : Opérateurs logiques</h4>
    <p>
        Déclarez deux variables <code>x</code> et <code>y</code> avec les valeurs 5 et 15. Utilisez les opérateurs <code>&&</code>, <code>||</code>, et <code>!</code> pour évaluer différentes conditions et affichez les résultats.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple attendu</span>
<span class="keyword">let</span> x = <span class="number">5</span>;
<span class="keyword">let</span> y = <span class="number">15</span>;

<span class="keyword">console</span>.log(x > <span class="number">3</span> && y < <span class="number">20</span>); <span class="comment">// true</span>
<span class="keyword">console</span>.log(x > <span class="number">10</span> || y > <span class="number">10</span>); <span class="comment">// true</span>
<span class="keyword">console</span>.log(!(x < <span class="number">10</span>)); <span class="comment">// false</span>
</code></pre>
    </div>
    <button class="btn btn-success" onclick="exerciceLogiques()">Tester</button>
    <div id="resultat-logiques" style="margin-top: 10px; font-weight: bold; color: #333;"></div>
</div>

<div class="col-12">
    <h2 id="essentiel-operateurs"><i class="fas fa-lightbulb"></i> IV. Essentiel</h2>
    <p>
        Les opérateurs en JavaScript sont des outils indispensables pour manipuler des valeurs, évaluer des conditions, et construire des expressions logiques. Voici un résumé des points essentiels à retenir :
    </p>
    <ul>
        <li>
            <strong>Opérateurs arithmétiques :</strong>
            <ul>
                <li>Effectuent des calculs mathématiques (+, -, *, /, %, **).</li>
                <li>Sont souvent combinés avec des opérateurs d'affectation pour simplifier le code.</li>
            </ul>
        </li>
        <li>
            <strong>Opérateurs d'affectation :</strong>
            <ul>
                <li>Utilisés pour assigner des valeurs aux variables (=).</li>
                <li>Permettent de combiner les calculs avec l'affectation (+=, -=, *=, /=).</li>
            </ul>
        </li>
        <li>
            <strong>Opérateurs de comparaison :</strong>
            <ul>
                <li>Évaluent des relations entre deux valeurs (==, ===, !=, >, <, >=, <=).</li>
                <li>Renvoient toujours un résultat boolean (<code>true</code> ou <code>false</code>).</li>
            </ul>
        </li>
        <li>
            <strong>Opérateurs logiques :</strong>
            <ul>
                <li>Combinent plusieurs conditions (<code>&&</code>, <code>||</code>, <code>!</code>).</li>
                <li>Sont essentiels dans les structures conditionnelles.</li>
            </ul>
        </li>
        <li>
            <strong>Concaténation :</strong>
            <ul>
                <li>L’opérateur <code>+</code> est utilisé pour combiner des chaînes de caractères.</li>
                <li>Les backticks (<code>`</code>) sont recommandés pour les chaînes complexes et dynamiques.</li>
            </ul>
        </li>
    </ul>
    <p>
        Une bonne maîtrise de ces opérateurs vous permettra d’écrire un code plus concis, performant, et facile à comprendre.
    </p>
</div>

<script>
    // Exercice 1 : Opérateurs arithmétiques
    function exerciceArithmetiques() {
        const a = 10;
        const b = 3;
        const addition = a + b;
        const multiplication = a * b;
        const modulo = a % b;
        document.getElementById('resultat-arithmetiques').innerText = `Addition : ${addition}, Multiplication : ${multiplication}, Modulo : ${modulo}`;
    }

    // Exercice 2 : Opérateurs d'affectation
    function exerciceAffectation() {
        let x = 20;
        x += 10;
        x /= 2;
        document.getElementById('resultat-affectation').innerText = `Résultat final : ${x}`;
    }

    // Exercice 3 : Concaténation de chaînes
    function exerciceConcatener() {
        const prenom = "Alice";
        const nom = "Dupont";
        const nomComplet = prenom + " " + nom;
        document.getElementById('resultat-concatener').innerText = `Nom complet : ${nomComplet}`;
    }
    // Exercice 4 : Comparaison stricte
    function exerciceComparaison() {
        const a = 10;
        const b = "10";
        const egalite = a == b;
        const stricte = a === b;
        document.getElementById('resultat-comparaison').innerText = `== : ${egalite}, === : ${stricte}`;
    }

    // Exercice 5 : Opérateurs logiques
    function exerciceLogiques() {
        const x = 5;
        const y = 15;
        const et = x > 3 && y < 20;
        const ou = x > 10 || y > 10;
        const non = !(x < 10);
        document.getElementById('resultat-logiques').innerText = `ET : ${et}, OU : ${ou}, NON : ${non}`;
    }
</script>

<div class="col-12">
    <h3 id="conditions">Conditions</h3>
    <nav class="sommaire-container">
        <h2><i class="fas fa-list"></i> Sommaire</h2>
            <ul>
                <li><a href="#contexte-conditions"><i class="fas fa-info-circle"></i> Contexte</a></li>
                <li><a href="#if-else-switch"><i class="fas fa-code-branch"></i> Les instructions conditionnelles</a>
                    <ul>
                        <li><a href="#if-else"><i class="fas fa-angle-right"></i> Les instructions if et else</a></li>
                        <li><a href="#switch"><i class="fas fa-angle-right"></i> L’instruction switch</a></li>
                    </ul>
                </li>
                <li><a href="#operateurs-conditionnels"><i class="fas fa-exchange-alt"></i> Les opérateurs conditionnels</a>
                    <ul>
                        <li><a href="#operateur-ternaire"><i class="fas fa-angle-right"></i> L’opérateur ternaire</a></li>
                        <li><a href="#operateur-nullish"><i class="fas fa-angle-right"></i> L’opérateur nullish (??)</a></li>
                    </ul>
                </li>
                <li><a href="#essentiel-conditions"><i class="fas fa-lightbulb"></i> Essentiel</a></li>
                <li><a href="#auto-evaluation-conditions" disabled><i class="fas fa-tasks"></i> Auto-évaluation</a></li>
            </ul>
    </nav>
</div>

<div class="col-12">
    <h2 id="contexte-conditions"><i class="fas fa-info-circle"></i> I. Contexte</h2>
    <p>
        Les conditions sont des blocs essentiels en programmation. Elles permettent de contrôler l'exécution du code en fonction de certaines situations ou valeurs. En JavaScript, les conditions permettent de prendre des décisions dynamiques et d'exécuter des instructions spécifiques en fonction des besoins du programme.
    </p>
    <p>
        Ce cours couvre les principales instructions conditionnelles telles que <code>if</code>, <code>else</code>, et <code>switch</code>, ainsi que des opérateurs conditionnels avancés comme l’opérateur ternaire (<code>?</code>) et l’opérateur nullish (<code>??</code>).
    </p>
    <p>
        <strong>Durée :</strong> Environ 45 minutes<br>
        <strong>Pré-requis :</strong> Comprendre les bases des variables, types de données, et opérateurs en JavaScript.
    </p>
</div>

<div class="col-12">
    <h2 id="if-else-switch"><i class="fas fa-code-branch"></i> II. Les instructions conditionnelles</h2>
    <p>
        Les instructions conditionnelles permettent de prendre des décisions dans un programme, en exécutant certains blocs de code en fonction des conditions spécifiées. JavaScript offre plusieurs types d'instructions conditionnelles, dont les plus courantes sont <code>if</code>, <code>else</code>, et <code>switch</code>.
    </p>
</div>
<div class="col-12">
    <h3 id="if-else"><i class="fas fa-angle-right"></i> A. Les instructions if et else</h3>
    <p>
        L'instruction <strong>if</strong> permet d'exécuter un bloc de code uniquement si une condition est vraie. Si la condition est fausse, vous pouvez utiliser l'instruction <strong>else</strong> pour exécuter un autre bloc de code.
    </p>
    <p><strong>Syntaxe de base :</strong></p>
    <div class="example-box">
    <pre><code class="language-javascript">
if (condition) {
    // Code à exécuter si la condition est vraie
} else {
    // Code à exécuter si la condition est fausse
}
</code></pre>
</div>
<p>
    Vous pouvez également utiliser <code>else if</code> pour tester plusieurs conditions.
</p>
    <p><strong>Syntaxe avec else if :</strong></p>
    <div class="example-box">
    <pre><code class="language-javascript">
if (condition1) {
    // Code si condition1 est vraie
} else if (condition2) {
    // Code si condition2 est vraie
} else {
    // Code si aucune condition n'est vraie
}
</code></pre></div>
    <p><strong>Exemple :</strong></p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Déclaration d'une variable</span>
<span class="keyword">let</span> age = <span class="number">18</span>;

<span class="comment">// Vérification de l'âge</span>
<span class="keyword">if</span> (age >= <span class="number">18</span>) {
    <span class="keyword">console</span>.log(<span class="string">"Vous êtes majeur."</span>);
} <span class="keyword">else</span> {
    <span class="keyword">console</span>.log(<span class="string">"Vous êtes mineur."</span>);
}
</code></pre>
    </div>
    <p>
        Dans cet exemple, si la variable <code>age</code> est supérieure ou égale à 18, le message "Vous êtes majeur." sera affiché, sinon "Vous êtes mineur." s'affichera.
    </p>
</div>
<div class="col-12">
    <h3 id="switch"><i class="fas fa-angle-right"></i> B. L’instruction switch</h3>
    <p>
        L'instruction <strong>switch</strong> permet de comparer une variable ou une expression à plusieurs valeurs possibles et d'exécuter un bloc de code en fonction de la valeur qui correspond. Elle est souvent plus lisible lorsque vous devez tester plusieurs valeurs possibles.
    </p>
    <p><strong>Syntaxe de base :</strong></p>
    <div class="example-box">
    <pre><code class="language-javascript">
switch (expression) {
    case valeur1:
        // Code à exécuter si expression === valeur1
        break;
    case valeur2:
        // Code à exécuter si expression === valeur2
        break;
    default:
        // Code à exécuter si aucune valeur ne correspond
}
</code></pre>
</div>
    <p>
        L'instruction <strong>break</strong> est utilisée pour sortir du bloc <code>switch</code> après l'exécution du code associé à un <code>case</code>. Si aucune valeur ne correspond, l'instruction <strong>default</strong> est exécutée.
    </p>
    <p><strong>Exemple :</strong></p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Déclaration d'une variable</span>
<span class="keyword">let</span> jour = <span class="string">"lundi"</span>;

<span class="comment">// Utilisation de switch pour déterminer le jour de la semaine</span>
<span class="keyword">switch</span> (jour) {
    <span class="keyword">case</span> <span class="string">"lundi"</span>:
        <span class="keyword">console</span>.log(<span class="string">"Lundi, début de la semaine."</span>);
        <span class="keyword">break</span>;
    <span class="keyword">case</span> <span class="string">"vendredi"</span>:
        <span class="keyword">console</span>.log(<span class="string">"Vendredi, presque le week-end."</span>);
        <span class="keyword">break</span>;
    <span class="keyword">default</span>:
        <span class="keyword">console</span>.log(<span class="string">"C'est un autre jour."</span>);
}
</code></pre>
    </div>
    <p>
        Dans cet exemple, si la variable <code>jour</code> est égale à "lundi", le message "Lundi, début de la semaine." sera affiché. Si la variable est égale à "vendredi", un autre message s'affichera, et si aucune des conditions n'est remplie, le message par défaut sera exécuté.
    </p>
</div>
<div class="col-12">
    <h3 id="exercices-if-else-switch"><i class="fas fa-pencil-alt"></i> Exercices : Les instructions conditionnelles</h3>
    <p>
        Testez vos connaissances sur les instructions conditionnelles en résolvant ces exercices interactifs :
    </p>

    <!-- Exercice 1 -->
    <h4><i class="fas fa-angle-right"></i> Exercice 1 : Utilisation de if et else</h4>
    <p>
        Déclarez une variable <code>temperature</code> et assignez-lui une valeur numérique. Utilisez une condition <code>if</code> pour vérifier si la température est inférieure à 0. Si c'est le cas, affichez "Il fait froid." Sinon, affichez "La température est agréable."
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple attendu</span>
<span class="keyword">let</span> temperature = <span class="number">5</span>;

<span class="keyword">if</span> (temperature < <span class="number">0</span>) {
    <span class="keyword">console</span>.log(<span class="string">"Il fait froid."</span>);
} <span class="keyword">else</span> {
    <span class="keyword">console</span>.log(<span class="string">"La température est agréable."</span>);
}
</code></pre>
    </div>
    <button class="btn btn-primary" onclick="exerciceIfElse()">Tester</button>
    <div id="resultat-if-else" style="margin-top: 10px; font-weight: bold; color: #333;"></div>

    <!-- Exercice 2 -->
    <h4><i class="fas fa-angle-right"></i> Exercice 2 : Utilisation de switch</h4>
    <p>
        Déclarez une variable <code>jour</code> avec une valeur correspondant à un jour de la semaine (par exemple "lundi"). Utilisez une instruction <code>switch</code> pour afficher un message différent selon le jour.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple attendu</span>
<span class="keyword">let</span> jour = <span class="string">"lundi"</span>;

<span class="keyword">switch</span> (jour) {
    <span class="keyword">case</span> <span class="string">"lundi"</span>:
        <span class="keyword">console</span>.log(<span class="string">"Début de la semaine."</span>);
        <span class="keyword">break</span>;
    <span class="keyword">case</span> <span class="string">"vendredi"</span>:
        <span class="keyword">console</span>.log(<span class="string">"Presque le week-end."</span>);
        <span class="keyword">break</span>;
    <span class="keyword">default</span>:
        <span class="keyword">console</span>.log(<span class="string">"Un jour comme les autres."</span>);
}
</code></pre>
    </div>
    <button class="btn btn-success" onclick="exerciceSwitch()">Tester</button>
    <div id="resultat-switch" style="margin-top: 10px; font-weight: bold; color: #333;"></div>
</div>
<div class="col-12">
    <h2 id="operateurs-conditionnels"><i class="fas fa-exchange-alt"></i> III. Les opérateurs conditionnels</h2>
    <p>
        En JavaScript, les opérateurs conditionnels permettent d’évaluer des expressions et de retourner des valeurs selon certaines conditions. Ils sont utilisés pour simplifier les instructions conditionnelles.
    </p>
</div>
<div class="col-12">
    <h3 id="operateur-ternaire"><i class="fas fa-angle-right"></i> A. L’opérateur ternaire</h3>
    <p>
        L'opérateur ternaire (<code>condition ? valeur_si_vrai : valeur_si_faux</code>) est une forme concise de la structure conditionnelle <code>if</code>-<code>else</code>. Il permet d'évaluer une condition et de retourner une des deux valeurs possibles.
    </p>
    <p><strong>Syntaxe :</strong></p>
    <div class="example-box">
    <pre><code class="language-javascript">
condition ? valeur_si_vrai : valeur_si_faux;
</code></pre></div>
    <p>
        Cet opérateur est utile pour rendre le code plus compact, notamment lorsque la logique est simple et directe.
    </p>
    <p><strong>Exemple :</strong></p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Déclaration d'une variable</span>
<span class="keyword">let</span> age = <span class="number">18</span>;

<span class="comment">// Utilisation de l'opérateur ternaire</span>
<span class="keyword">let</span> statut = (age >= <span class="number">18</span>) 
    ? <span class="string">"Majeur"</span> 
    : <span class="string">"Mineur"</span>;

<span class="keyword">console</span>.log(statut); <span class="comment">// Affiche : "Majeur"</span>
</code></pre>
    </div>
    <p>
        Dans cet exemple, si <code>age</code> est supérieur ou égal à 18, la variable <code>statut</code> prendra la valeur "Majeur". Sinon, elle prendra la valeur "Mineur".
    </p>
</div>
<div class="col-12">
    <h3 id="operateur-nullish"><i class="fas fa-angle-right"></i> B. L’opérateur nullish (??)</h3>
    <p>
        L'opérateur nullish (<code>??</code>) retourne la première valeur qui n'est ni <code>null</code> ni <code>undefined</code>. Il est souvent utilisé pour fournir une valeur par défaut à une variable.
    </p>
    <p><strong>Syntaxe :</strong></p>
    <div class="example-box">
    <pre><code class="language-javascript">
valeur1 ?? valeur2
</code></pre></div>
    <p>
        Si <code>valeur1</code> est <code>null</code> ou <code>undefined</code>, l'opérateur retournera <code>valeur2</code>. Sinon, il retournera <code>valeur1</code>.
    </p>
    <p><strong>Exemple :</strong></p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Déclaration d'une variable</span>
<span class="keyword">let</span> username = <span class="keyword">null</span>;

<span class="comment">// Utilisation de l'opérateur nullish</span>
<span class="keyword">let</span> displayName = username ?? <span class="string">"Utilisateur inconnu"</span>;

<span class="keyword">console</span>.log(displayName); <span class="comment">// Affiche : "Utilisateur inconnu"</span>
</code></pre>
    </div>
    <p>
        Dans cet exemple, comme la variable <code>username</code> est <code>null</code>, la variable <code>displayName</code> prendra la valeur "Utilisateur inconnu".
    </p>
</div>
<div class="col-12">
    <h3 id="exercices-operateurs-conditionnels"><i class="fas fa-pencil-alt"></i> Exercices : Les opérateurs conditionnels</h3>
    <p>
        Testez vos connaissances sur les opérateurs conditionnels en résolvant ces exercices interactifs :
    </p>

    <!-- Exercice 1 -->
    <h4><i class="fas fa-angle-right"></i> Exercice 1 : L’opérateur ternaire</h4>
    <p>
        Déclarez une variable <code>age</code> avec une valeur numérique. Utilisez un opérateur ternaire pour afficher "Majeur" si l’âge est supérieur ou égal à 18, et "Mineur" sinon.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple attendu</span>
<span class="keyword">let</span> age = <span class="number">17</span>;
<span class="keyword">let</span> statut = (age >= <span class="number">18</span>) 
    ? <span class="string">"Majeur"</span> 
    : <span class="string">"Mineur"</span>;

<span class="keyword">console</span>.log(statut); <span class="comment">// Affiche : "Mineur"</span>
</code></pre>
    </div>
    <button class="btn btn-primary" onclick="exerciceTernaire()">Tester</button>
    <div id="resultat-ternaire" style="margin-top: 10px; font-weight: bold; color: #333;"></div>

    <!-- Exercice 2 -->
    <h4><i class="fas fa-angle-right"></i> Exercice 2 : L’opérateur nullish</h4>
    <p>
        Déclarez une variable <code>username</code> avec une valeur <code>null</code>. Utilisez l’opérateur nullish pour assigner "Invité" si <code>username</code> est <code>null</code> ou <code>undefined</code>.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple attendu</span>
<span class="keyword">let</span> username = <span class="keyword">null</span>;
<span class="keyword">let</span> displayName = username ?? <span class="string">"Invité"</span>;

<span class="keyword">console</span>.log(displayName); <span class="comment">// Affiche : "Invité"</span>
</code></pre>
    </div>
    <button class="btn btn-success" onclick="exerciceNullish()">Tester</button>
    <div id="resultat-nullish" style="margin-top: 10px; font-weight: bold; color: #333;"></div>

    <!-- Exercice 3 -->
    <h4><i class="fas fa-angle-right"></i> Exercice 3 : Chaînage optionnel</h4>
    <p>
        Déclarez un objet <code>user</code> sans la propriété <code>email</code>. Utilisez le chaînage optionnel pour accéder à <code>user.email</code> sans générer d’erreur, et affichez "Non disponible" si la propriété est absente.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple attendu</span>
<span class="keyword">let</span> user = { name: <span class="string">"Alice"</span> };
<span class="keyword">let</span> email = user?.email ?? <span class="string">"Non disponible"</span>;

<span class="keyword">console</span>.log(email); <span class="comment">// Affiche : "Non disponible"</span>
</code></pre>
    </div>
    <button class="btn btn-warning" onclick="exerciceOptional()">Tester</button>
    <div id="resultat-optional" style="margin-top: 10px; font-weight: bold; color: #333;"></div>
</div>

<div class="col-12">
    <h2 id="essentiel-conditions"><i class="fas fa-lightbulb"></i> IV. Essentiel</h2>
    <p>
        Les conditions en JavaScript sont indispensables pour contrôler l’exécution du code en fonction de différentes situations. Voici les points essentiels à retenir :
    </p>
    <ul>
        <li>
            <strong>Les instructions conditionnelles :</strong>
            <ul>
                <li>
                    <strong>if / else :</strong> Utilisées pour exécuter un bloc de code si une condition est vraie. L'instruction <code>else</code> permet de gérer les cas où la condition est fausse.
                </li>
                <li>
                    <strong>else if :</strong> Permet de tester plusieurs conditions successives.
                </li>
                <li>
                    <strong>switch :</strong> Pratique pour comparer une variable à plusieurs valeurs fixes, avec une option par défaut.
                </li>
            </ul>
        </li>
        <li>
            <strong>Les opérateurs conditionnels :</strong>
            <ul>
                <li>
                    <strong>Ternaire (<code>condition ? valeur_si_vrai : valeur_si_faux</code>) :</strong> Simplifie les conditions courtes.
                </li>
                <li>
                    <strong>Nullish (<code>??</code>) :</strong> Fournit une valeur par défaut pour les variables <code>null</code> ou <code>undefined</code>.
                </li>
                <li>
                    <strong>Chaînage optionnel (<code>?.</code>) :</strong> Vérifie l'existence d'une propriété sans lever d'erreur si elle est absente.
                </li>
                <li>
                    <strong>Opérateurs logiques (<code>&&</code>, <code>||</code>) :</strong> Permettent de combiner des conditions ou de fournir des valeurs par défaut.
                </li>
            </ul>
        </li>
    </ul>
    <p>
        Une maîtrise des conditions vous permet d’écrire des programmes dynamiques, logiques et réactifs. N'hésitez pas à combiner les différentes instructions et opérateurs pour répondre aux besoins de vos projets.
    </p>
</div>

<script>
    // Exercice 1 : Utilisation de if et else
    function exerciceIfElse() {
        const temperature = 5; // Modifier la valeur pour tester différentes conditions
        const resultat = temperature < 0 ? "Il fait froid." : "La température est agréable.";
        document.getElementById('resultat-if-else').innerText = resultat;
    }

    // Exercice 2 : Utilisation de switch
    function exerciceSwitch() {
        const jour = "lundi"; // Modifier la valeur pour tester différents cas
        let message;
        switch (jour) {
            case "lundi":
                message = "Début de la semaine.";
                break;
            case "vendredi":
                message = "Presque le week-end.";
                break;
            default:
                message = "Un jour comme les autres.";
        }
        document.getElementById('resultat-switch').innerText = message;
    }
    // Exercice 1 : L’opérateur ternaire
    function exerciceTernaire() {
        const age = 17; // Modifier la valeur pour tester différentes conditions
        const statut = age >= 18 ? "Majeur" : "Mineur";
        document.getElementById('resultat-ternaire').innerText = `Résultat : ${statut}`;
    }

    // Exercice 2 : L’opérateur nullish
    function exerciceNullish() {
        const username = null; // Modifier la valeur pour tester différentes conditions
        const displayName = username ?? "Invité";
        document.getElementById('resultat-nullish').innerText = `Nom affiché : ${displayName}`;
    }

    // Exercice 3 : Chaînage optionnel
    function exerciceOptional() {
        const user = { name: "Alice" }; // Modifier pour inclure ou exclure la propriété email
        const email = user?.email ?? "Non disponible";
        document.getElementById('resultat-optional').innerText = `Email : ${email}`;
    }
</script>

</div> <!-- fin de row -->
    <div class="col-md-12">
    <h3 id="boucles">Boucles</h3>
    <div class="sommaire-container">
    <h2>Table des matières</h2>
    <ul>
        <li><a href="#contexte-boucles">I. Contexte</a></li>
        <li><a href="#boucle-for">II. La boucle for</a>
            <ul>
                <li><a href="#console-log">a. Console log</a></li>
                <li><a href="#premiere-utilisation-boucle-for">b. Première utilisation</a></li>
                <li><a href="#utiliser-for-in">c. Utiliser for/in</a></li>
                <li><a href="#utiliser-for-of">d. Utiliser for/of</a></li>
                <li><a href="#exercices-for">e. Exercices</a></li>
            </ul>
        </li>
        <li><a href="#boucle-while">III. La boucle while</a>
            <ul>
                <li><a href="#introduction-while">a. Introduction</a></li>
                <li><a href="#utilisation-while">b. Utilisation</a></li>
                <li><a href="#pièges-while">c. Éviter les boucles infinies</a></li>
                <li><a href="#utilisation-do-while">d. Utilisation de do/while</a></li>
                <li><a href="#break-continue">e. Mots-clés break et continue</a></li>
                <li><a href="#exercices-while">f. Exercices</a></li>
            </ul>
        </li>
        <li><a href="#essentiel-boucles">Essentiel</a></li>
        <li><button href="#auto-evaluation-boucles" disabled>Auto-évaluation</button></li>
    </ul>
</div>

<div id="contexte-boucles" class="col-12">
    <h2><i class="fas fa-info-circle"></i> Contexte</h2>
    <p>
        <strong><i class="fas fa-rocket" style="color: #4caf50;"></i> Pourquoi apprendre les boucles ?</strong>
        Les boucles sont l'un des fondements de la programmation. Elles permettent de répéter des blocs de code en fonction d'une condition donnée, automatisant ainsi des tâches complexes ou répétitives. Que ce soit pour parcourir une liste, générer des données, ou effectuer des calculs, elles sont omniprésentes en JavaScript.
    </p>
    <p>
        <strong><i class="fas fa-code" style="color: #2196f3;"></i> Les types de boucles :</strong>
        En JavaScript, il existe plusieurs types de boucles :
    </p>
    <ul>
        <li>
            <i class="fas fa-arrow-circle-right" style="color: #ff9800;"></i>
            <strong>La boucle <code>for</code> :</strong> Idéale pour parcourir une séquence avec un nombre de répétitions connu.
        </li>
        <li>
            <i class="fas fa-arrow-circle-right" style="color: #ff9800;"></i>
            <strong>La boucle <code>while</code> :</strong> Utile lorsque le nombre d'itérations dépend d'une condition dynamique.
        </li>
        <li>
            <i class="fas fa-arrow-circle-right" style="color: #ff9800;"></i>
            <strong>La boucle <code>do/while</code> :</strong> Similaire à <code>while</code>, mais garantit l'exécution au moins une fois.
        </li>
        <li>
            <i class="fas fa-arrow-circle-right" style="color: #ff9800;"></i>
            <strong>Les boucles spéciales :</strong> 
            <ul>
                <li><code>for/in</code> pour parcourir les propriétés d'un objet.</li>
                <li><code>for/of</code> pour itérer sur les valeurs d'une collection.</li>
            </ul>
        </li>
    </ul>
    <p>
        <strong><i class="fas fa-exclamation-circle" style="color: #e91e63;"></i> Attention :</strong> Les boucles peuvent facilement mener à des erreurs comme des boucles infinies si la condition d'arrêt est mal définie. Une compréhension solide de leur fonctionnement est donc cruciale.
    </p>
    <p>
        <strong><i class="fas fa-tools" style="color: #9c27b0;"></i> Applications des boucles :</strong>
        <ul>
            <li><i class="fas fa-check-circle" style="color: #4caf50;"></i> Parcourir des tableaux ou objets.</li>
            <li><i class="fas fa-check-circle" style="color: #4caf50;"></i> Générer des séries de nombres.</li>
            <li><i class="fas fa-check-circle" style="color: #4caf50;"></i> Automatiser des tâches répétitives.</li>
        </ul>
    </p>
    <p>
        <strong><i class="fas fa-lightbulb" style="color: #ffc107;"></i> Saviez-vous ?</strong> Les boucles en JavaScript sont similaires à celles de nombreux autres langages comme Python, Java, et PHP. Une fois maîtrisées, elles faciliteront l'apprentissage d'autres langages !
    </p>
</div>

<div id="boucle-for" class="col-12">
    <h2><i class="fas fa-repeat"></i> La boucle <code>for</code></h2>
    <p>
        La boucle <code>for</code> est utilisée lorsque le nombre d'itérations est connu à l'avance. 
        Elle permet de parcourir des tableaux, de générer des séries ou d'exécuter des instructions répétitives.
    </p>

    <!-- Console log -->
    <div id="console-log">
        <h3><i class="fas fa-terminal"></i> Console log</h3>
        <p>
            Le moyen le plus simple de visualiser les itérations d'une boucle est d'utiliser la méthode <code>console.log()</code>. Cela permet de vérifier le déroulement des itérations.
        </p>
        <p><strong>Exemple :</strong></p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Affiche les nombres de 1 à 5 dans la console</span>
<span class="keyword">for</span> (<span class="keyword">let</span> i = <span class="number">1</span>; i <= <span class="number">5</span>; i++) {
    <span class="keyword">console</span>.log(i);
}
</code></pre>
        </div>
        <p>
            Ce code commence à <code>i = 1</code> et incrémente <code>i</code> jusqu'à ce que la condition <code>i <= 5</code> soit fausse. Chaque valeur de <code>i</code> est affichée dans la console.
        </p>
    </div>
    <div id="premiere-utilisation-boucle-for" class="col-12">
    <h2><i class="fas fa-play-circle"></i> Première utilisation de la boucle <code>for</code></h2>
    <p>
        La boucle <code>for</code> est une structure essentielle en programmation. 
        Elle est particulièrement utile lorsque le nombre d'itérations est déterminé avant l'exécution. Cela signifie 
        que le programme connaît à l'avance combien de fois la boucle doit être répétée.
    </p>
    <p>
        <strong><i class="fas fa-cogs"></i> Structure de base :</strong>
    </p>
    <div class="example-box">
        <pre><code class="language-javascript">
<span class="keyword">for</span> (<span class="comment">/*initialisation*/</span>; <span class="comment">/*condition*/</span>; <span class="comment">/*incrémentation*/</span>) {
    <span class="comment">// Instructions à exécuter</span>
}
</code></pre>
    </div>
    <p>
        Voici les éléments clés de la boucle <code>for</code> :
    </p>
    <ul>
        <li><i class="fas fa-chevron-right" style="color: #4caf50;"></i> <strong>Initialisation :</strong> Une variable est créée pour suivre les itérations (par exemple, <code>let i = 0</code>).</li>
        <li><i class="fas fa-chevron-right" style="color: #ff9800;"></i> <strong>Condition :</strong> Définit jusqu'à quand la boucle doit s'exécuter (par exemple, <code>i <= 10</code>).</li>
        <li><i class="fas fa-chevron-right" style="color: #2196f3;"></i> <strong>Incrémentation :</strong> Met à jour la variable d'itération à chaque cycle (par exemple, <code>i++</code>).</li>
    </ul>

    <h3><i class="fas fa-terminal"></i> Exemple simple</h3>
    <p>
        Voici un exemple simple où la boucle affiche les nombres de 1 à 10 dans la console :
    </p>
    <div class="example-box">
        <pre><code class="language-javascript">
<span class="comment">// Affiche les nombres de 1 à 10 dans la console</span>
<span class="keyword">for</span> (<span class="keyword">let</span> i = <span class="number">1</span>; i <= <span class="number">10</span>; i++) {
    <span class="keyword">console</span>.log(i);
}
</code></pre>
    </div>
    <p>
        La boucle commence à <code>i = 1</code>, puis vérifie si <code>i <= 10</code>. Si c'est vrai, le bloc d'instructions s'exécute et <code>i</code> est incrémenté. 
        Une fois que <code>i > 10</code>, la boucle s'arrête.
    </p>

    <h3><i class="fas fa-list-ul"></i> Interaction avec les tableaux</h3>
    <p>
        Les tableaux permettent de stocker des éléments ordonnés. Ils sont souvent utilisés avec les boucles <code>for</code>.
        Voici un exemple de tableau simple :
    </p>
    <div class="example-box">
        <pre><code class="language-javascript">
<span class="comment">// Déclaration d'un tableau</span>
<span class="keyword">let</span> tableau = [<span class="string">"valeur 1"</span>, <span class="string">"valeur 2"</span>];

<span class="comment">// Accès à un élément par son index</span>
<span class="keyword">console</span>.log(tableau[<span class="number">1</span>]); <span class="comment">// Affiche "valeur 2"</span>
</code></pre>
    </div>

    <h3><i class="fas fa-math"></i> Exemple pratique : Table de multiplication</h3>
    <p>
        Voici un exemple plus complexe qui génère une table de multiplication et la stocke dans un tableau :
    </p>
    <div class="example-box">
        <pre><code class="language-javascript">
<span class="comment">// Génération de la table de multiplication du nombre 10</span>
<span class="keyword">const</span> nombre = <span class="number">10</span>;
<span class="keyword">let</span> table = [];

<span class="keyword">for</span> (<span class="keyword">let</span> i = <span class="number">1</span>; i <= <span class="number">10</span>; i++) {
    <span class="keyword">let</span> resultat = nombre * i;
    table.push(resultat); <span class="comment">// Ajoute le résultat au tableau</span>
}

<span class="comment">// Affiche le 4e élément de la table (index 3)</span>
<span class="keyword">console</span>.log(table[<span class="number">3</span>]); <span class="comment">// Affiche : 40</span>
</code></pre>
    </div>
    <p>
        Ce script utilise une boucle <code>for</code> pour multiplier <code>nombre</code> par les valeurs de 1 à 10. Les résultats sont ajoutés dans le tableau <code>table</code>. 
        Cet exemple illustre la flexibilité des boucles et des tableaux.
    </p>
</div>


</div>
<div id="utiliser-for-in" class="col-12">
    <h2><i class="fas fa-arrow-circle-right"></i> Utiliser <code>for/in</code></h2>
    <p>
        La boucle <code>for/in</code> est utilisée pour parcourir les propriétés d’un objet. Contrairement à une boucle 
        <code>for</code> classique, qui est basée sur des itérations définies, <code>for/in</code> itère sur chaque 
        propriété d'un objet ou index d’un tableau.
    </p>
    <p>
        Voici la syntaxe générale :
    </p>
    <div class="example-box">
        <pre><code class="language-javascript">
<span class="keyword">for</span> (<span class="comment">/*variable*/</span> <span class="keyword">in</span> <span class="comment">/*objet*/</span>) {
    <span class="comment">// Instructions</span>
}
</code></pre>
    </div>

    <h3><i class="fas fa-book"></i> Les objets en JavaScript</h3>
    <p>
        Un objet en JavaScript est une entité qui contient des propriétés et des méthodes. Une propriété représente une caractéristique ou un attribut de l'objet, tandis qu'une méthode est une fonction associée à cet objet. 
        Par exemple :
    </p>
    <div class="example-box">
        <pre><code class="language-javascript">
<span class="comment">// Déclaration d'un objet avec des propriétés</span>
<span class="keyword">let</span> voiture = {
    marque: <span class="string">"Toyota"</span>,
    modele: <span class="string">"Corolla"</span>,
    annee: <span class="number">2022</span>
};
</code></pre>
    </div>

    <h3><i class="fas fa-terminal"></i> Exemple : Parcourir un objet avec <code>for/in</code></h3>
    <p>
        Voici un exemple où nous utilisons <code>for/in</code> pour afficher les noms des propriétés d'un objet :
    </p>
    <div class="example-box">
        <pre><code class="language-javascript">
<span class="comment">// Parcourir les propriétés d'un objet</span>
<span class="keyword">for</span> (<span class="keyword">let</span> propriete <span class="keyword">in</span> voiture) {
    <span class="keyword">console</span>.log(propriete);
}
</code></pre>
    </div>
    <p>
        La console affichera :
        <ul>
            <li><code>"marque"</code></li>
            <li><code>"modele"</code></li>
            <li><code>"annee"</code></li>
        </ul>
        Ici, chaque itération de la boucle <code>for/in</code> renvoie le nom d'une propriété de l'objet.
    </p>

    <h3><i class="fas fa-table"></i> Exemple : Parcourir un tableau avec <code>for/in</code></h3>
    <p>
        Lorsque vous utilisez <code>for/in</code> avec un tableau, vous parcourez les indices (index) des éléments du tableau. Voici un exemple :
    </p>
    <div class="example-box">
        <pre><code class="language-javascript">
<span class="comment">// Déclaration d'un tableau</span>
<span class="keyword">let</span> marques = [<span class="string">"Apple"</span>, <span class="string">"HP"</span>, <span class="string">"Acer"</span>];

<span class="comment">// Parcourir les indices</span>
<span class="keyword">for</span> (<span class="keyword">let</span> index <span class="keyword">in</span> marques) {
    <span class="keyword">console</span>.log(index); <span class="comment">// Affiche 0, 1, 2</span>
}
</code></pre>
    </div>

    <h3><i class="fas fa-exclamation-circle" style="color: #e91e63;"></i> Attention :</h3>
    <p>
        Bien que <code>for/in</code> puisse être utilisé pour parcourir les indices d'un tableau, ce n'est pas recommandé. 
        Voici pourquoi :
    </p>
    <ul>
        <li>
            <i class="fas fa-times" style="color: red;"></i> 
            <strong>Les indices ne représentent pas toujours les valeurs :</strong> La boucle renvoie les indices du tableau, et non les valeurs directement.
        </li>
        <li>
            <i class="fas fa-times" style="color: red;"></i> 
            <strong>Propriétés supplémentaires :</strong> Si vous ajoutez des propriétés au tableau, elles seront également parcourues par <code>for/in</code>, ce qui peut provoquer des erreurs.
        </li>
    </ul>

    <h3><i class="fas fa-code"></i> Exemple : Accéder aux valeurs d'un tableau</h3>
    <p>
        Pour accéder aux valeurs d'un tableau tout en utilisant <code>for/in</code>, vous pouvez utiliser les indices pour récupérer les éléments :
    </p>
    <div class="example-box">
        <pre><code class="language-javascript">
<span class="comment">// Parcourir les valeurs avec for/in</span>
<span class="keyword">for</span> (<span class="keyword">let</span> index <span class="keyword">in</span> marques) {
    <span class="keyword">console</span>.log(marques[index]);
}
</code></pre>
    </div>
    <p>
        Dans ce cas, la console affichera :
        <ul>
            <li><code>"Apple"</code></li>
            <li><code>"HP"</code></li>
            <li><code>"Acer"</code></li>
        </ul>
        Toutefois, il est préférable d'utiliser <code>for/of</code> pour parcourir directement les valeurs d’un tableau, comme nous le verrons dans la prochaine section.
    </p>
</div>


<div id="utiliser-for-of" class="col-12">
    <h2><i class="fas fa-arrow-circle-right"></i> Utiliser <code>for/of</code></h2>
    <p>
        La boucle <code>for/of</code> permet de parcourir les objets itérables, tels que les tableaux, et de récupérer directement leurs valeurs. 
        Contrairement à <code>for/in</code>, qui parcourt les indices ou les clés, <code>for/of</code> est optimisée pour accéder aux éléments eux-mêmes.
    </p>

    <h3><i class="fas fa-terminal"></i> Exemple simple : Parcourir un tableau</h3>
    <p>
        Voici un exemple où nous utilisons <code>for/of</code> pour afficher les valeurs d’un tableau dans la console :
    </p>
    <div class="example-box">
        <pre><code class="language-javascript">
<span class="comment">// Parcourir les valeurs d'un tableau</span>
<span class="keyword">let</span> tableau = [<span class="string">"Apple"</span>, <span class="string">"HP"</span>, <span class="string">"Acer"</span>];

<span class="keyword">for</span> (<span class="keyword">let</span> marque <span class="keyword">of</span> tableau) {
    <span class="keyword">console</span>.log(marque);
}
</code></pre>
    </div>
    <p>
        La console affichera :
        <ul>
            <li><code>"Apple"</code></li>
            <li><code>"HP"</code></li>
            <li><code>"Acer"</code></li>
        </ul>
        Dans cet exemple, la variable <code>marque</code> prend successivement la valeur de chaque élément du tableau à chaque itération.
    </p>

    <h3><i class="fas fa-magic"></i> Exemple avancé : Concaténation des valeurs</h3>
    <p>
        La boucle <code>for/of</code> peut également être utilisée pour manipuler les valeurs des éléments d’un tableau. 
        Voici un exemple où nous concaténons les valeurs dans une chaîne de caractères :
    </p>
    <div class="example-box">
        <pre><code class="language-javascript">
<span class="comment">// Concaténation des valeurs d'un tableau</span>
<span class="keyword">let</span> tableau = [<span class="string">"Apple"</span>, <span class="string">"HP"</span>, <span class="string">"Acer"</span>];
<span class="keyword">let</span> marques = <span class="string">""</span>;

<span class="keyword">for</span> (<span class="keyword">let</span> marque <span class="keyword">of</span> tableau) {
    marques += marque + <span class="string">", "</span>;
}

<span class="keyword">console</span>.log(marques); <span class="comment">// Affiche : "Apple, HP, Acer, "</span>
</code></pre>
    </div>
    <p>
        Dans cet exemple :
        <ul>
            <li><i class="fas fa-plus-circle" style="color: #4caf50;"></i> À chaque itération, la valeur de <code>marque</code> est ajoutée à la chaîne de caractères <code>marques</code>.</li>
            <li><i class="fas fa-arrow-right" style="color: #2196f3;"></i> Une virgule et un espace (<code>", "</code>) sont ajoutés après chaque valeur pour les séparer.</li>
        </ul>
        La console affiche finalement toutes les valeurs concaténées dans une seule chaîne.
    </p>

    <h3><i class="fas fa-exclamation-circle" style="color: #e91e63;"></i> Astuce :</h3>
    <p>
        La boucle <code>for/of</code> fonctionne avec tous les objets itérables, y compris :
    </p>
    <ul>
        <li><i class="fas fa-check-circle" style="color: #4caf50;"></i> Les tableaux.</li>
        <li><i class="fas fa-check-circle" style="color: #4caf50;"></i> Les chaînes de caractères (itère sur chaque caractère).</li>
        <li><i class="fas fa-check-circle" style="color: #4caf50;"></i> Les objets de type Map ou Set.</li>
    </ul>
    <p>
        Si vous avez besoin de parcourir uniquement les valeurs d’un tableau ou d’un autre objet itérable, 
        <code>for/of</code> est une méthode claire et efficace.
    </p>
</div>
<div id="exercices-for" class="col-12">
    <h2><i class="fas fa-pencil-alt"></i> Exercices : Boucles <code>for</code></h2>
    <p>
        Mettez en pratique vos connaissances sur les boucles <code>for</code> grâce à ces exercices interactifs. 
        Cliquez sur "Vérifier" pour valider vos réponses et afficher les résultats dans la console !
    </p>

    <!-- Exercice 1 -->
    <div class="exercise">
        <h3><i class="fas fa-terminal"></i> Exercice 1 : Afficher une séquence de nombres pairs</h3>
        <p>
            Écrivez une boucle <code>for</code> qui affiche dans la console tous les nombres pairs de 2 à 20 inclus.
        </p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Solution attendue :</span>
<span class="keyword">for</span> (<span class="keyword">let</span> i = <span class="number">2</span>; i <= <span class="number">20</span>; i += <span class="number">2</span>) {
    <span class="keyword">console</span>.log(i);
}
</code></pre>
        </div>
        <button class="btn btn-primary" onclick="verifierExercice1BoucleFor()">Vérifier</button>
        <div id="resultat-exercice1" style="margin-top: 10px; font-weight: bold;"></div>
    </div>

    <!-- Exercice 2 -->
    <div class="exercise">
        <h3><i class="fas fa-table"></i> Exercice 2 : Générer une table de multiplication</h3>
        <p>
            Créez une boucle <code>for</code> qui génère la table de multiplication de 7 et affiche chaque résultat dans la console.
        </p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Solution attendue :</span>
<span class="keyword">const</span> nombre = <span class="number">7</span>;

<span class="keyword">for</span> (<span class="keyword">let</span> i = <span class="number">1</span>; i <= <span class="number">10</span>; i++) {
    <span class="keyword">console</span>.log(nombre * i);
}
</code></pre>
        </div>
        <button class="btn btn-primary" onclick="verifierExercice2BoucleFor()">Vérifier</button>
        <div id="resultat-exercice2" style="margin-top: 10px; font-weight: bold;"></div>
    </div>

    <!-- Exercice 3 -->
    <div class="exercise">
        <h3><i class="fas fa-code"></i> Exercice 3 : Concaténation des valeurs d’un tableau</h3>
        <p>
            Écrivez une boucle <code>for</code> qui concatène toutes les valeurs d’un tableau dans une chaîne de caractères 
            et affiche la chaîne concaténée dans la console.
        </p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Tableau fourni :</span>
<span class="keyword">let</span> fruits = [<span class="string">"Pomme"</span>, <span class="string">"Banane"</span>, <span class="string">"Orange"</span>];

<span class="comment">// Solution attendue :</span>
<span class="keyword">let</span> resultat = <span class="string">""</span>;

<span class="keyword">for</span> (<span class="keyword">let</span> i = <span class="number">0</span>; i < fruits.<span class="keyword">length</span>; i++) {
    resultat += fruits[i] + <span class="string">", "</span>;
}

<span class="keyword">console</span>.log(resultat); <span class="comment">// Affiche : "Pomme, Banane, Orange, "</span>
</code></pre>
        </div>
        <button class="btn btn-primary" onclick="verifierExercice3BoucleFor()">Vérifier</button>
        <div id="resultat-exercice3" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>

<script>
    // Vérification de l'exercice 1 : Afficher une séquence de nombres pairs
function verifierExercice1BoucleFor() {
    const resultat = document.getElementById('resultat-exercice1');
    try {
        console.clear();
        console.log("Début de l'exercice 1 : Afficher tous les nombres pairs de 2 à 20");
        // Boucle for pour afficher les nombres pairs de 2 à 20
        for (let i = 2; i <= 20; i += 2) {
            console.log(`Nombre pair trouvé : ${i}`);
        }
        console.log("Fin de l'exercice 1");
        resultat.innerText = "Correct ! Tous les nombres pairs de 2 à 20 sont affichés dans la console.";
        resultat.style.color = "green";
    } catch (e) {
        console.error("Erreur détectée dans la boucle for :", e.message);
        resultat.innerText = "Erreur dans votre boucle. Réessayez !";
        resultat.style.color = "red";
    }
}

// Vérification de l'exercice 2 : Générer une table de multiplication
function verifierExercice2BoucleFor() {
    const resultat = document.getElementById('resultat-exercice2');
    try {
        const nombre = 7;
        console.clear();
        console.log(`Début de l'exercice 2 : Génération de la table de multiplication de ${nombre}`);
        // Boucle for pour générer la table de multiplication
        for (let i = 1; i <= 10; i++) {
            console.log(`${nombre} x ${i} = ${nombre * i}`);
        }
        console.log("Fin de l'exercice 2");
        resultat.innerText = `Correct ! La table de multiplication de ${nombre} est affichée dans la console.`;
        resultat.style.color = "green";
    } catch (e) {
        console.error("Erreur détectée dans la boucle for :", e.message);
        resultat.innerText = "Erreur dans votre boucle. Réessayez !";
        resultat.style.color = "red";
    }
}

// Vérification de l'exercice 3 : Concaténation des valeurs d’un tableau
function verifierExercice3BoucleFor() {
    const resultat = document.getElementById('resultat-exercice3');
    try {
        let fruits = ["Pomme", "Banane", "Orange"];
        let resultatConcat = "";
        console.clear();
        console.log("Début de l'exercice 3 : Concaténation des valeurs du tableau :", fruits);
        // Boucle for pour concaténer les valeurs du tableau
        for (let i = 0; i < fruits.length; i++) {
            resultatConcat += fruits[i] + ", ";
            console.log(`Ajout de "${fruits[i]}" à la chaîne : "${resultatConcat}"`);
        }
        console.log("Résultat final :", resultatConcat.trim());
        console.log("Fin de l'exercice 3");
        resultat.innerText = `Correct ! La chaîne concaténée est affichée dans la console : ${resultatConcat.trim()}`;
        resultat.style.color = "green";
    } catch (e) {
        console.error("Erreur détectée dans la boucle for :", e.message);
        resultat.innerText = "Erreur dans votre boucle. Réessayez !";
        resultat.style.color = "red";
    }
}

</script>

<div id="boucle-while" class="col-12">
    <h2><i class="fas fa-sync-alt"></i> III. La boucle <code>while</code></h2>

    <!-- Introduction -->
    <div id="introduction-while">
        <h3><i class="fas fa-info-circle"></i> a. Introduction</h3>
        <p>
            La boucle <code>while</code> est utilisée lorsque le nombre d'itérations n'est pas connu à l'avance. 
            Elle exécute des instructions tant qu'une condition donnée est vraie. 
            Cela la différencie de la boucle <code>for</code>, où le nombre d'itérations est souvent défini dès le départ.
        </p>
    </div>

    <!-- Utilisation -->
    <div id="utilisation-while">
        <h3><i class="fas fa-tools"></i> b. Utilisation</h3>
        <p>
            La syntaxe de la boucle <code>while</code> est simple et intuitive :
        </p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="keyword">while</span> (<span class="comment">/* condition */</span>) {
    <span class="comment">// instructions</span>
}
</code></pre>
        </div>
        <p>
            Exemple d'une boucle <code>while</code> :
        </p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Affiche les nombres de 1 à 10</span>
<span class="keyword">let</span> nombre = <span class="number">1</span>;

<span class="keyword">while</span> (nombre <= <span class="number">10</span>) {
    <span class="keyword">console</span>.log(<span class="string">"Le nombre est : "</span> + nombre);
    nombre++;
}
</code></pre>
        </div>
        <p>
            Ici, la variable <code>nombre</code> commence à 1. La boucle s'exécute tant que <code>nombre &lt;= 10</code>. 
            La condition est vérifiée avant chaque itération, ce qui garantit que la boucle s'arrêtera une fois la condition non respectée.
        </p>
    </div>

    <!-- Éviter les boucles infinies -->
    <div id="pièges-while">
        <h3><i class="fas fa-exclamation-triangle"></i> c. Éviter les boucles infinies</h3>
        <p>
            Les boucles infinies se produisent lorsque la condition de la boucle ne devient jamais <code>false</code>. 
            Cela peut bloquer ou faire planter le programme.
        </p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Exemple de boucle infinie</span>
<span class="keyword">let</span> a = <span class="number">120</span>;

<span class="keyword">while</span> (<span class="keyword">typeof</span>(a) == <span class="string">"number"</span> && (a >= <span class="number">100</span> && a <= <span class="number">140</span>)) {
    <span class="keyword">console</span>.log(a);
}
</code></pre>
        </div>
        <p>
            Dans cet exemple, la condition reste toujours vraie car <code>a</code> n'est jamais modifiée. 
            Une version corrigée :
        </p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Corrigé pour éviter une boucle infinie</span>
<span class="keyword">let</span> a = <span class="number">120</span>;

<span class="keyword">while</span> (<span class="keyword">typeof</span>(a) == <span class="string">"number"</span> && (a >= <span class="number">100</span> && a <= <span class="number">140</span>)) {
    <span class="keyword">console</span>.log(a);
    a++;
}
</code></pre>
        </div>
    </div>

    <!-- Utilisation de do/while -->
    <div id="utilisation-do-while">
        <h3><i class="fas fa-redo-alt"></i> d. Utilisation de <code>do/while</code></h3>
        <p>
            La boucle <code>do/while</code> garantit qu'une itération sera exécutée au moins une fois, 
            même si la condition est fausse dès le départ.
        </p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="keyword">let</span> cv = <span class="number">100</span>;

<span class="keyword">do</span> {
    <span class="keyword">console</span>.log(<span class="string">"La voiture a "</span> + cv + <span class="string">" cv"</span>);
    cv++;
} <span class="keyword">while</span> (cv > <span class="number">100</span> && cv <= <span class="number">110</span>);
</code></pre>
        </div>
        <p>
            Dans cet exemple, même si la condition est fausse dès le départ, l'itération initiale est effectuée.
        </p>
    </div>

    <!-- Mots-clés break et continue -->
    <div id="break-continue">
        <h3><i class="fas fa-stop-circle"></i> e. Mots-clés <code>break</code> et <code>continue</code></h3>
        <p>
            Les mots-clés <code>break</code> et <code>continue</code> permettent de contrôler l'exécution des boucles :
        </p>
        <ul>
            <li><code>break</code> : Interrompt l'exécution de la boucle et passe à l'instruction suivante après la boucle.</li>
            <li><code>continue</code> : Passe immédiatement à l'itération suivante, sautant les instructions restantes de l'itération en cours.</li>
        </ul>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Exemple avec break et continue</span>
<span class="keyword">let</span> a = <span class="number">110</span>;

<span class="keyword">while</span> (a >= <span class="number">100</span> && a <= <span class="number">150</span>) {
    <span class="keyword">console</span>.log(a);
    a += <span class="number">10</span>;

    <span class="keyword">if</span> (a == <span class="number">130</span>) {
        <span class="keyword">continue</span>;
    } <span class="keyword">else if</span> (a == <span class="number">140</span>) {
        <span class="keyword">break</span>;
    }
}
<span class="keyword">console</span>.log(<span class="string">"Fini"</span>);
</code></pre>
        </div>
        <p>
            Dans cet exemple :
            <ul>
                <li><code>continue</code> saute le reste de l'itération lorsque <code>a == 130</code>.</li>
                <li><code>break</code> arrête complètement la boucle lorsque <code>a == 140</code>.</li>
            </ul>
        </p>
    </div>
</div>
<div id="exercices-while" class="col-12">
    <h2><i class="fas fa-pencil-alt"></i> Exercices : Boucle <code>while</code></h2>
    <p>
        Testez vos connaissances sur les boucles <code>while</code> et <code>do/while</code> à travers ces exercices pratiques. 
        Cliquez sur "Vérifier" pour valider vos réponses et afficher les résultats dans la console !
    </p>

    <!-- Exercice 1 -->
    <div class="exercise">
        <h3><i class="fas fa-question-circle"></i> Question 1 : Afficher les multiples d'un nombre</h3>
        <p>
            Écrire la bonne condition pour que la boucle <code>while</code> affiche les multiples de <code>nombre</code>, inférieurs à 200.
        </p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Solution attendue :</span>
<span class="keyword">let</span> nombre = <span class="number">28</span>;
<span class="keyword">let</span> compteur = <span class="number">1</span>;

<span class="keyword">while</span> (<span class="comment">/* condition */</span>) {
    <span class="keyword">console</span>.log(nombre * compteur);
    compteur++;
}
</code></pre>
        </div>
        <button class="btn btn-primary" onclick="verifierExercice1While()">Vérifier</button>
        <div id="resultat-exercice1" style="margin-top: 10px; font-weight: bold;"></div>
    </div>

    <!-- Exercice 2 -->
    <div class="exercise">
        <h3><i class="fas fa-question-circle"></i> Question 2 : Transformer en <code>do/while</code></h3>
        <p>
            Transformer la boucle <code>while</code> suivante pour qu’une itération soit opérée avant que le programme contrôle la condition.
        </p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Solution attendue :</span>
<span class="keyword">let</span> prix = <span class="number">100</span>;
<span class="keyword">let</span> tabPrix = [];

<span class="keyword">do</span> {
    tabPrix.push(prix);
    prix++;
} <span class="keyword">while</span> (prix > <span class="number">100</span> && prix <= <span class="number">110</span>);

<span class="keyword">console</span>.log(tabPrix[<span class="number">2</span>]);
</code></pre>
        </div>
        <button class="btn btn-primary" onclick="verifierExercice2While()">Vérifier</button>
        <div id="resultat-exercice2" style="margin-top: 10px; font-weight: bold;"></div>
    </div>

    <!-- Exercice 3 -->
    <div class="exercise">
        <h3><i class="fas fa-question-circle"></i> Question 3 : Arrêter la boucle</h3>
        <p>
            Insérer le bon mot clé pour que, quand <code>prix</code> est égal à 108, la boucle s’arrête.
        </p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Solution attendue :</span>
<span class="keyword">let</span> prix = <span class="number">101</span>;
<span class="keyword">let</span> tabPrix = [];

<span class="keyword">while</span> (prix > <span class="number">100</span> && prix <= <span class="number">110</span>) {
    tabPrix.push(prix);
    <span class="keyword">if</span> (prix == <span class="number">108</span>) {
        <span class="keyword">break</span>;
    }
    prix++;
}

<span class="keyword">console</span>.log(tabPrix[<span class="number">7</span>]);
</code></pre>
        </div>
        <button class="btn btn-primary" onclick="verifierExercice3While()">Vérifier</button>
        <div id="resultat-exercice3" style="margin-top: 10px; font-weight: bold;"></div>
    </div>

    <!-- Exercice 4 -->
    <div class="exercise">
        <h3><i class="fas fa-question-circle"></i> Question 4 : Ajouter une instruction</h3>
        <p>
            Insérer une instruction pour que la boucle ne soit pas infinie. 
            L'objectif est d'afficher les nombres entiers de 0 (inclus) à 19 (inclus).
        </p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Solution attendue :</span>
<span class="keyword">let</span> compteur = <span class="number">0</span>;
<span class="keyword">let</span> nombres = <span class="string">""</span>;

<span class="keyword">while</span> (compteur < <span class="number">20</span>) {
    nombres += compteur + <span class="string">" "</span>;
    compteur++;
}

<span class="keyword">console</span>.log(nombres);
</code></pre>
        </div>
        <button class="btn btn-primary" onclick="verifierExercice4While()">Vérifier</button>
        <div id="resultat-exercice4" style="margin-top: 10px; font-weight: bold;"></div>
    </div>

    <!-- Exercice 5 -->
    <div class="exercise">
        <h3><i class="fas fa-question-circle"></i> Question 5 : Vérifier les multiples de 2</h3>
        <p>
            Écrire une boucle <code>while</code> permettant de vérifier si les nombres entiers inférieurs à <code>nombre</code> 
            sont des multiples de 2 ou non. La console devra afficher :
        </p>
        <ul>
            <li><code>"multiple de 2"</code> pour les multiples.</li>
            <li><code>"pas un multiple de 2"</code> sinon.</li>
        </ul>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Solution attendue :</span>
<span class="keyword">let</span> nombre = <span class="number">15</span>;
<span class="keyword">let</span> compteur = <span class="number">1</span>;

<span class="keyword">while</span> (compteur < nombre) {
    <span class="keyword">if</span> (compteur % <span class="number">2</span> == <span class="number">0</span>) {
        <span class="keyword">console</span>.log(compteur + <span class="string">" : multiple de 2"</span>);
    } <span class="keyword">else</span> {
        <span class="keyword">console</span>.log(compteur + <span class="string">" : pas un multiple de 2"</span>);
    }
    compteur++;
}
</code></pre>
        </div>
        <button class="btn btn-primary" onclick="verifierExercice5While()">Vérifier</button>
        <div id="resultat-exercice5" style="margin-top: 10px; font-weight: bold;"></div>
    </div>
</div>
<script>
    // Exercice 1 : Afficher les multiples d'un nombre
function verifierExercice1While() {
    const nombre = 28;
    let compteur = 1;
    let resultats = [];
    while (nombre * compteur < 200) {
        resultats.push(nombre * compteur);
        compteur++;
    }

    const attendu = [28, 56, 84, 112, 140, 168, 196];
    const resultatElement = document.getElementById('resultat-exercice1');
    if (JSON.stringify(resultats) === JSON.stringify(attendu)) {
        resultatElement.innerText = "Correct ! Les multiples de 28 inférieurs à 200 sont : " + resultats.join(", ");
        resultatElement.style.color = "green";
    } else {
        resultatElement.innerText = "Faux. Essayez à nouveau.";
        resultatElement.style.color = "red";
    }
}

// Exercice 2 : Transformer en do/while
function verifierExercice2While() {
    let prix = 100;
    let tabPrix = [];

    do {
        tabPrix.push(prix);
        prix++;
    } while (prix > 100 && prix <= 110);

    const attendu = [101, 102, 103, 104, 105, 106, 107, 108, 109, 110];
    const resultatElement = document.getElementById('resultat-exercice2');
    if (JSON.stringify(tabPrix) === JSON.stringify(attendu)) {
        resultatElement.innerText = "Correct ! Les prix générés sont : " + tabPrix.join(", ");
        resultatElement.style.color = "green";
    } else {
        resultatElement.innerText = "Faux. Essayez à nouveau.";
        resultatElement.style.color = "red";
    }
}

// Exercice 3 : Arrêter la boucle
function verifierExercice3While() {
    let prix = 101;
    let tabPrix = [];

    while (prix > 100 && prix <= 110) {
        tabPrix.push(prix);
        if (prix == 108) {
            break;
        }
        prix++;
    }

    const attendu = [101, 102, 103, 104, 105, 106, 107, 108];
    const resultatElement = document.getElementById('resultat-exercice3');
    if (JSON.stringify(tabPrix) === JSON.stringify(attendu)) {
        resultatElement.innerText = "Correct ! La boucle s'arrête à 108. Résultat : " + tabPrix.join(", ");
        resultatElement.style.color = "green";
    } else {
        resultatElement.innerText = "Faux. Essayez à nouveau.";
        resultatElement.style.color = "red";
    }
}

// Exercice 4 : Ajouter une instruction pour éviter une boucle infinie
function verifierExercice4While() {
    let compteur = 0;
    let nombres = "";

    while (compteur < 20) {
        nombres += compteur + " ";
        compteur++; // Empêche une boucle infinie
    }

    const attendu = "0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 ";
    const resultatElement = document.getElementById('resultat-exercice4');
    if (nombres === attendu) {
        resultatElement.innerText = "Correct ! Les nombres générés sont : " + nombres.trim();
        resultatElement.style.color = "green";
    } else {
        resultatElement.innerText = "Faux. Essayez à nouveau.";
        resultatElement.style.color = "red";
    }
}

// Exercice 5 : Vérifier les multiples de 2
function verifierExercice5While() {
    let nombre = 15;
    let compteur = 1;
    let resultats = [];

    while (compteur < nombre) {
        if (compteur % 2 === 0) {
            resultats.push(compteur + " : multiple de 2");
        } else {
            resultats.push(compteur + " : pas un multiple de 2");
        }
        compteur++;
    }

    const attendu = [
        "1 : pas un multiple de 2",
        "2 : multiple de 2",
        "3 : pas un multiple de 2",
        "4 : multiple de 2",
        "5 : pas un multiple de 2",
        "6 : multiple de 2",
        "7 : pas un multiple de 2",
        "8 : multiple de 2",
        "9 : pas un multiple de 2",
        "10 : multiple de 2",
        "11 : pas un multiple de 2",
        "12 : multiple de 2",
        "13 : pas un multiple de 2",
        "14 : multiple de 2"
    ];
    const resultatElement = document.getElementById('resultat-exercice5');
    if (JSON.stringify(resultats) === JSON.stringify(attendu)) {
        resultatElement.innerText = "Correct ! Résultats :\n" + resultats.join("\n");
        resultatElement.style.color = "green";
    } else {
        resultatElement.innerText = "Faux. Essayez à nouveau.";
        resultatElement.style.color = "red";
    }
}
</script>
<div id="essentiel-boucles" class="col-12">
    <h2><i class="fas fa-lightbulb"></i> IV. Essentiel</h2>
    <p>
        Dans ce cours, nous avons exploré les boucles en JavaScript, un outil fondamental pour éviter la répétition manuelle des instructions. Voici un résumé des points clés abordés :
    </p>
    <ul>
        <li>
            <strong>La boucle <code>for</code> :</strong> utilisée lorsque le nombre d'itérations est fixé avant la première exécution. 
            Elle utilise trois paramètres principaux :
            <ul>
                <li><i class="fas fa-cogs"></i> <strong>Initialisation :</strong> Définition du compteur initial.</li>
                <li><i class="fas fa-check"></i> <strong>Condition :</strong> Détermine la fin de la boucle.</li>
                <li><i class="fas fa-arrow-up"></i> <strong>Incrémentation :</strong> Mise à jour du compteur.</li>
            </ul>
        </li>
        <li>
            <strong>Les variantes <code>for/in</code> et <code>for/of</code> :</strong>
            <ul>
                <li><code>for/in</code> : Parcourt les propriétés d’un objet.</li>
                <li><code>for/of</code> : Parcourt les valeurs d’un objet itérable, comme un tableau.</li>
            </ul>
        </li>
        <li>
            <strong>La boucle <code>while</code> :</strong> utilisée lorsque le nombre d'itérations dépend des instructions exécutées. 
            Elle continue tant que la condition spécifiée reste vraie.
        </li>
        <li>
            <strong>La boucle <code>do/while</code> :</strong> garantit au moins une exécution avant la vérification de la condition.
        </li>
        <li>
            <strong>Les mots-clés spéciaux :</strong>
            <ul>
                <li><code>break</code> : Interrompt immédiatement l'exécution de la boucle et passe à l'instruction suivante.</li>
                <li><code>continue</code> : Interrompt une itération et passe directement à la suivante.</li>
            </ul>
        </li>
        <li>
            <strong>Attention aux boucles infinies :</strong> Ces boucles ne s'arrêtent jamais car leur condition reste toujours vraie. 
            Elles peuvent provoquer le blocage ou l'arrêt du programme. Pour les éviter :
            <ul>
                <li>Assurez-vous que la condition devienne fausse à un moment donné.</li>
                <li>Ajoutez des incrémentations ou des modifications logiques dans la boucle.</li>
            </ul>
        </li>
    </ul>
    <p>
        Les boucles sont des outils puissants en JavaScript, permettant de manipuler facilement des collections de données, d'automatiser des tâches répétitives, et bien plus encore. 
        Une bonne compréhension de leurs mécanismes et de leurs variantes vous permettra de les utiliser efficacement dans vos programmes.
    </p>
</div>

    </div>

<div class="col-md-12">
    <h3 id="fonctions">Fonctions</h3>
    <div class="sommaire-container">
        <h2>Table des matières</h2>
            <ul>
                <li><a href="#contexte-fonctions">I. Contexte</a></li>
                <li><a href="#utilisation-def-fonctions">II. Utilisation et définition de fonctions</a></li>
                <ul>
                    <li><a href="#def-utilisation-fonctions">A. Définition et utilisation des fonctions</a></li>
                    <li><a href="#exercice-utilisation-fonctions">B. Exercice : Quiz</a></li>
                </ul>
                <li><a href="#param-retour-expressions">III. Paramètres, valeur de retour et expressions de fonctions</a></li>
                <ul>
                    <li><a href="#param-retour">A. Paramètres, valeur de retour et expressions</a></li>
                    <li><a href="#exercice-param-retour">B. Exercice : Quiz</a></li>
                </ul>
                <li><a href="#essentiel-fonctions">IV. Essentiel</a></li>
                <li><a href="#auto-eval-fonctions">V. Auto-évaluation</a></li>
                <ul>
                    <li><a href="#exercice-auto-eval">A. Exercice</a></li>
                    <li><a href="#test-auto-eval">B. Test</a></li>
                </ul>
            </ul>
    </div>
    <div id="contexte-fonctions" class="col-12">
    <h2><i class="fas fa-info-circle"></i> I. Contexte</h2>
    <p>
        Les fonctions sont des blocs de code conçus pour effectuer une tâche ou un ensemble de tâches spécifiques. 
        En JavaScript, elles constituent un élément essentiel permettant de rendre le code modulaire, réutilisable et plus facile à comprendre. 
        Les fonctions permettent également d’organiser les instructions en sections logiques, ce qui améliore la lisibilité et la maintenabilité du code.
    </p>
    <h3><i class="fas fa-question-circle"></i> Pourquoi utiliser les fonctions ?</h3>
    <p>
        Les fonctions offrent plusieurs avantages :
    </p>
    <ul>
        <li>
            <i class="fas fa-check"></i> **Réutilisabilité** : Une fonction peut être appelée plusieurs fois dans le programme, évitant ainsi de répéter le même code.
        </li>
        <li>
            <i class="fas fa-tools"></i> **Organisation** : Elles permettent de structurer le code en blocs logiques, facilitant ainsi le débogage et la lecture.
        </li>
        <li>
            <i class="fas fa-sync-alt"></i> **Flexibilité** : Grâce aux paramètres, une fonction peut être utilisée pour différentes entrées et produire des résultats variés.
        </li>
        <li>
            <i class="fas fa-code"></i> **Abstraction** : Elles permettent de cacher les détails de l’implémentation, rendant le code plus propre et plus intuitif.
        </li>
    </ul>
    <h3><i class="fas fa-laptop-code"></i> Fonctionnement des fonctions en JavaScript</h3>
    <p>
        En JavaScript, une fonction peut être définie de plusieurs façons, notamment :
    </p>
    <ul>
        <li>
            <strong>Fonctions déclarées :</strong> Elles sont définies avec le mot-clé <code>function</code> et possèdent un nom. Ces fonctions sont « hoistées », 
            ce qui signifie qu’elles peuvent être appelées avant leur définition dans le code.
        </li>
        <li>
            <strong>Fonctions anonymes :</strong> Ces fonctions n'ont pas de nom et sont souvent utilisées comme valeurs dans des expressions ou des arguments.
        </li>
        <li>
            <strong>Fonctions fléchées (arrow functions) :</strong> Introduites avec ES6, elles permettent une syntaxe plus concise pour définir des fonctions.
        </li>
    </ul>
    <p>
        Dans les sections suivantes, nous examinerons comment définir, utiliser et optimiser les fonctions en JavaScript, 
        ainsi que leurs particularités par rapport à d'autres éléments du langage.
    </p>
</div>
<div id="utilisation-def-fonctions" class="col-12">
    <h2><i class="fas fa-cogs"></i> II. Utilisation et définition de fonctions</h2>
    <p>
        Les fonctions en JavaScript jouent un rôle central pour organiser et réutiliser du code. 
        Elles permettent de structurer des blocs logiques qui peuvent être invoqués à plusieurs reprises, 
        avec des paramètres différents, pour éviter de répéter le même code.
    </p>

    <!-- A. Utilisation et définition de fonctions -->
    <div id="def-utilisation-fonctions">
        <h3><i class="fas fa-lightbulb"></i> A. Utilisation et définition de fonctions</h3>
        
        <h4><i class="fas fa-bolt"></i> Fonctions prédéfinies</h4>
        <p>
            En JavaScript, il existe de nombreuses fonctions prédéfinies, appelées fonctions natives, 
            qui peuvent être utilisées à tout moment. Par exemple, la fonction <code>eval()</code> permet d’exécuter 
            du code JavaScript contenu dans une chaîne de caractères.
        </p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Exemple d'utilisation de eval()</span>
<span class="string">const code = "const nombre = 15; console.log(nombre * 2);"</span>;
<span class="keyword">eval</span>(code); <span class="comment">// Affiche : 30</span>
</code></pre>
        </div>
        <p>
            Ce code évalue et exécute le contenu de la chaîne passée en paramètre, comme si ce dernier 
            faisait partie du script. Vous pouvez trouver une liste complète des fonctions natives sur la documentation officielle de 
            <a href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux" target="_blank">Mozilla Developer Network (MDN)</a>.
        </p>
        
        <h4><i class="fas fa-laptop-code"></i> Syntaxe de la définition de fonctions</h4>
        <p>
            Une fonction en JavaScript se définit avec la syntaxe suivante :
        </p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Définition d'une fonction</span>
<span class="keyword">function</span> nomDeLaFonction(paramètres) {
    <span class="comment">// Corps de la fonction</span>
    <span class="keyword">instructions</span>;
}
</code></pre>
        </div>
        <p>
            Le mot-clé <code>function</code> permet de définir une fonction. Les éventuels paramètres sont 
            placés entre parenthèses, et les instructions à exécuter sont contenues dans les accolades. Pour utiliser une fonction, 
            il est nécessaire de l'appeler.
        </p>
        
        <h4><i class="fas fa-play-circle"></i> Syntaxe de l'appel de fonctions</h4>
        <p>
            Pour appeler une fonction, utilisez son nom suivi de parenthèses. Vous pouvez y passer des arguments, 
            correspondant aux paramètres définis dans la fonction :
        </p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Appel d'une fonction</span>
nomDeLaFonction(arguments);
</code></pre>
        </div>
        
        <h4><i class="fas fa-code"></i> Exemple : Première définition et appel d'une fonction</h4>
        <p>
            Voici un exemple où nous définissons une fonction pour calculer le double d’un nombre. 
            La fonction est ensuite appelée plusieurs fois avec des valeurs différentes.
        </p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Définition de la fonction calcDouble</span>
<span class="keyword">let</span> nombre = <span class="number">100</span>;

<span class="keyword">function</span> calcDouble() {
    <span class="keyword">let</span> double = nombre * <span class="number">2</span>;
    <span class="keyword">console</span>.log(<span class="string">`Le double du nombre ${nombre} est ${double}`</span>);
}

<span class="comment">// Appels de la fonction</span>
calcDouble(); <span class="comment">// Affiche : Le double du nombre 100 est 200</span>

<span class="comment">// Modification de la variable</span>
nombre = <span class="number">40</span>;
calcDouble(); <span class="comment">// Affiche : Le double du nombre 40 est 80</span>
</code></pre>
        </div>
        <p>
            Dans cet exemple, la fonction <code>calcDouble()</code> calcule le double de la variable <code>nombre</code> et 
            affiche le résultat. Vous pouvez appeler cette fonction autant de fois que nécessaire sans réécrire son contenu.
        </p>
        <p>
            Grâce aux fonctions, vous évitez la duplication de code et facilitez les modifications futures.
        </p>
    </div>

    <!-- B. Exercice : Quiz -->
    <div id="exercice-utilisation-fonctions" class="disabled">
        <h3><i class="fas fa-pencil-alt"></i> B. Exercice : Quiz</h3>
        <p>
            Cette section est désactivée pour le moment. Revenez plus tard pour tester vos connaissances sur la définition 
            et l'appel des fonctions !
        </p>
    </div>
</div>
<div id="param-retour-expressions" class="col-12">
    <h2><i class="fas fa-exchange-alt"></i> III. Paramètres, valeur de retour et expressions de fonctions</h2>
    <p>
        Les paramètres et les valeurs de retour sont des concepts fondamentaux en JavaScript pour rendre les fonctions dynamiques et réutilisables. 
        Cette section détaille comment passer des données à une fonction, comment recevoir une valeur en retour, et comment utiliser les expressions de fonctions.
    </p>

    <!-- A. Paramètres, valeur de retour et expressions -->
    <div id="param-retour">
        <h3><i class="fas fa-plug"></i> A. Paramètres et valeur de retour</h3>
        <h4><i class="fas fa-ellipsis-h"></i> Paramètres</h4>
        <p>
            Les paramètres permettent de transmettre des informations à une fonction. Ils sont définis dans les parenthèses 
            lors de la déclaration de la fonction et utilisés dans le corps de celle-ci. Une fonction peut avoir un ou plusieurs paramètres.
        </p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Définition avec paramètres</span>
<span class="keyword">function</span> multiplier(a, b) {
    <span class="keyword">return</span> a * b;
}

<span class="comment">// Appel avec des arguments</span>
<span class="keyword">const</span> resultat = multiplier(4, 5); <span class="comment">// resultat vaut 20</span>
</code></pre>
        </div>
        <p>
            Ici, la fonction <code>multiplier</code> prend deux paramètres <code>a</code> et <code>b</code>. Lorsqu’elle est appelée, 
            elle retourne le produit des deux valeurs passées en arguments.
        </p>

        <h4><i class="fas fa-reply"></i> Valeur de retour</h4>
        <p>
            Une fonction peut renvoyer une valeur avec le mot-clé <code>return</code>. La valeur retournée peut ensuite être 
            utilisée ou stockée dans une variable.
        </p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Fonction avec valeur de retour</span>
<span class="keyword">function</span> ajouter(a, b) {
    <span class="keyword">return</span> a + b;
}

<span class="comment">// Utilisation de la valeur retournée</span>
<span class="keyword">const</span> somme = ajouter(10, 15); <span class="comment">// somme vaut 25</span>
<span class="keyword">console</span>.log(somme); <span class="comment">// Affiche : 25</span>
</code></pre>
        </div>
        <p>
            Dans cet exemple, la fonction <code>ajouter</code> retourne la somme des deux arguments passés. La valeur 
            retournée est ensuite utilisée pour afficher le résultat.
        </p>

        <h4><i class="fas fa-code"></i> Exemple combiné : Paramètres et retour</h4>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Calculer l'aire d'un rectangle</span>
<span class="keyword">function</span> aireRectangle(longueur, largeur) {
    <span class="keyword">return</span> longueur * largeur;
}

<span class="comment">// Appel de la fonction</span>
<span class="keyword">const</span> aire = aireRectangle(10, 5); <span class="comment">// aire vaut 50</span>
<span class="keyword">console</span>.log(<span class="string">`L'aire est : ${aire}`</span>); <span class="comment">// Affiche : L'aire est : 50</span>
</code></pre>
        </div>
        <p>
            Dans cet exemple, la fonction prend deux paramètres, calcule leur produit, et retourne l'aire du rectangle. 
            Ce type d'approche rend votre code modulaire et réutilisable.
        </p>
    </div>

    <!-- B. Exercice : Quiz -->
    <div id="exercice-param-retour" class="disabled">
        <h3><i class="fas fa-pencil-alt"></i> B. Exercice : Quiz</h3>
        <p>
            Cette section est désactivée pour le moment. Revenez plus tard pour tester vos connaissances sur les paramètres 
            et les valeurs de retour des fonctions !
        </p>
    </div>
</div>
<div id="essentiel-fonctions" class="col-12 disabled">
    <h2><i class="fas fa-lightbulb"></i> IV. Essentiel</h2>
    <p>
        Dans ce cours, nous avons exploré l'importance et l'utilisation des fonctions en JavaScript, un concept clé 
        pour structurer et réutiliser du code. Voici un résumé des points essentiels à retenir :
    </p>
    <ul>
        <li>
            <i class="fas fa-check"></i> **Les fonctions prédéfinies** : Ces fonctions sont disponibles nativement dans JavaScript 
            et peuvent être appelées à tout moment. Exemple : <code>eval()</code>.
        </li>
        <li>
            <i class="fas fa-code"></i> **Définition des fonctions personnalisées** :
            <ul>
                <li>Utilisez le mot-clé <code>function</code> suivi d’un nom pour déclarer une fonction.</li>
                <li>Ajoutez des paramètres entre parenthèses pour personnaliser l’exécution.</li>
                <li>Incluez les instructions à exécuter dans des accolades.</li>
            </ul>
        </li>
        <li>
            <i class="fas fa-sync-alt"></i> **Réutilisation du code** :
            <ul>
                <li>Appelez une fonction autant de fois que nécessaire.</li>
                <li>Les paramètres permettent de transmettre des données dynamiques à la fonction.</li>
            </ul>
        </li>
        <li>
            <i class="fas fa-exchange-alt"></i> **Valeurs de retour** :
            <ul>
                <li>Utilisez <code>return</code> pour transmettre un résultat au reste du programme.</li>
                <li>Les valeurs retournées peuvent être utilisées dans d'autres calculs ou affichées directement.</li>
            </ul>
        </li>
        <li>
            <i class="fas fa-cogs"></i> **Expressions de fonctions** :
            <ul>
                <li>Les fonctions peuvent être anonymes et assignées à des variables.</li>
                <li>Elles peuvent être utilisées comme arguments ou valeurs de retour d’autres fonctions.</li>
            </ul>
        </li>
    </ul>
    <p>
        Les fonctions sont un élément fondamental de JavaScript. Une bonne compréhension de leur fonctionnement 
        et de leurs possibilités est essentielle pour écrire un code propre, modulaire et maintenable.
    </p>
</div>
<div id="auto-eval-fonctions" class="col-12 disabled">
    <h2><i class="fas fa-clipboard-check"></i> V. Auto-évaluation</h2>
    <p>
        Cette section vous permet de tester vos connaissances sur les fonctions en JavaScript grâce à des exercices pratiques 
        et des questions à choix multiples. Revenez plus tard pour évaluer votre compréhension des notions abordées.
    </p>

    <!-- A. Exercice -->
    <div id="exercice-auto-eval" class="disabled">
        <h3><i class="fas fa-pencil-alt"></i> A. Exercice</h3>
        <p>
            Complétez les exercices ci-dessous pour vérifier votre compréhension des fonctions :
        </p>
        <ol>
            <li>
                <strong>Créer une fonction</strong> qui prend deux paramètres et retourne leur somme. 
                Testez votre fonction avec plusieurs paires de valeurs.
            </li>
            <li>
                <strong>Modifier une fonction prédéfinie :</strong> utilisez la fonction <code>eval()</code> pour évaluer une chaîne contenant un script simple.
            </li>
        </ol>
        <button onclick="toggleExerciceAnswers()" class="btn btn-primary">Afficher les réponses</button>
        <div id="exercice-answers" style="display: none; margin-top: 10px;">
            <p><strong>Réponse 1 :</strong></p>
            <div class="example-box"><pre><code class="language-javascript">
<span class="comment">// Exemple de fonction pour la somme</span>
<span class="keyword">function</span> somme(a, b) {
    <span class="keyword">return</span> a + b;
}
<span class="comment">// Test</span>
<span class="keyword">console</span>.log(somme(3, 5)); <span class="comment">// Affiche : 8</span>
</code></pre></div>
            <p><strong>Réponse 2 :</strong></p>
            <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Utilisation de eval()</span>
<span class="keyword">const</span> script = <span class="string">"console.log(2 + 2)"</span>;
<span class="keyword">eval</span>(script); <span class="comment">// Affiche : 4</span>
</code></pre></div>
        </div>
    </div>

    <!-- B. Test -->
    <div id="test-auto-eval" class="disabled">
        <h3><i class="fas fa-tasks"></i> B. Test</h3>
        <p>
            Répondez aux questions à choix multiples suivantes pour valider vos acquis sur les fonctions en JavaScript :
        </p>
        <ul>
            <li>
                <strong>Question 1 :</strong> Quelle est la différence entre une fonction déclarée et une fonction anonyme ?
            </li>
            <li>
                <strong>Question 2 :</strong> Que se passe-t-il si une fonction n’a pas de mot-clé <code>return</code> ?
            </li>
            <li>
                <strong>Question 3 :</strong> Peut-on appeler une fonction déclarée avant sa définition dans le code ? Pourquoi ?
            </li>
        </ul>
        <button onclick="toggleTestAnswers()" class="btn btn-primary">Afficher les réponses</button>
        <div id="test-answers" style="display: none; margin-top: 10px;">
            <p><strong>Réponse 1 :</strong> Une fonction déclarée possède un nom et peut être appelée avant sa déclaration grâce au hoisting, 
                tandis qu’une fonction anonyme n’a pas de nom et est souvent utilisée comme une expression ou un argument.</p>
            <p><strong>Réponse 2 :</strong> Si une fonction n’a pas de mot-clé <code>return</code>, elle retourne <code>undefined</code>.</p>
            <p><strong>Réponse 3 :</strong> Oui, une fonction déclarée peut être appelée avant sa définition grâce au mécanisme de hoisting, 
                qui remonte les déclarations de fonctions en haut de leur portée.</p>
        </div>
    </div>
</div>
<script>
function toggleExerciceAnswers() {
    const answers = document.getElementById("exercice-answers");
    if (answers.style.display === "none") {
        answers.style.display = "block";
    } else {
        answers.style.display = "none";
    }
}

function toggleTestAnswers() {
    const answers = document.getElementById("test-answers");
    if (answers.style.display === "none") {
        answers.style.display = "block";
    } else {
        answers.style.display = "none";
    }
}
</script>
</div>
<!-- Manipulation du DOM et Événements -->
<div class="content-section" id="manip-dom-evenements">
<h1><i class="fas fa-mouse-pointer"></i> Manipulation du DOM et Événements</h1>
    <p>
        La manipulation du DOM (<strong>Document Object Model</strong>) et la gestion des événements sont des concepts essentiels 
        pour ajouter de l'interactivité et du dynamisme à vos pages web. Ces compétences permettent de modifier les éléments HTML 
        et CSS en temps réel, en réponse aux actions des utilisateurs.
    </p>
    <p>
        Dans cette section, vous apprendrez à explorer et manipuler efficacement le DOM, à gérer les événements utilisateurs, et à appliquer 
        des techniques avancées pour créer des interfaces réactives et performantes.
    </p>

    <!-- Sommaire -->
    <h2><i class="fas fa-list"></i> Sommaire</h2>
    <div class="sommaire-container">
        <ul>
            <li><a href="#intro-dom">Introduction au DOM</a></li>
            <li><a href="#selection-elements">Sélection des éléments DOM</a></li>
            <li><a href="#modification-dom">Modification du DOM</a></li>
            <li><a href="#creation-insertion">Création et insertion d'éléments</a></li>
            <li><a href="#gestion-evenements">Gestion des événements utilisateur</a></li>
            <li><a href="#ecouteurs-evenements">Écouteurs d'événements</a></li>
            <li><a href="#bubbling-capture">Bubbling et Capture</a></li>
            <li><a href="#gestion-formulaires">Gestion dynamique des formulaires</a></li>
            <li><a href="#animations-transitions">Animations et transitions via JavaScript</a></li>
            <li><a href="#optimisation-dom">Optimisation des manipulations DOM</a></li>
            <li class="disabled"><a>Auto-évaluation (à venir)</a></li>
        </ul>
    </div>

    <div id="intro-dom">
    <h2><i class="fas fa-book-open"></i> Introduction au DOM</h2>
    <p>
        Le DOM (Document Object Model) est une représentation en mémoire de la structure d'un document HTML ou XML. 
        Il s'agit d'une API (Application Programming Interface) qui permet d'accéder, de manipuler et de mettre à jour dynamiquement les éléments d'une page web.
    </p>
    <p>
        Chaque élément HTML est représenté comme un objet dans le DOM, et ces objets sont organisés en une arborescence. 
        Le DOM agit comme une interface entre le navigateur et votre code JavaScript.
    </p>
    <div class="example-box">
        <h3><i class="fas fa-code"></i> Exemple :</h3>
        <pre>
<span class="tag">&lt;!DOCTYPE html&gt;</span>
<span class="tag">&lt;html&gt;</span>
    <span class="tag">&lt;head&gt;</span>
        <span class="tag">&lt;title&gt;</span><span class="content">Page Exemple</span><span class="tag">&lt;/title&gt;</span>
    <span class="tag">&lt;/head&gt;</span>
    <span class="tag">&lt;body&gt;</span>
        <span class="tag">&lt;h1&gt;</span><span class="content">Bienvenue</span><span class="tag">&lt;/h1&gt;</span>
        <span class="tag">&lt;p&gt;</span><span class="content">Ce texte est contenu dans le DOM.</span><span class="tag">&lt;/p&gt;</span>
    <span class="tag">&lt;/body&gt;</span>
<span class="tag">&lt;/html&gt;</span>
        </pre>
    </div>
    <p>
        Vous pouvez interagir avec cette structure en JavaScript pour créer, modifier ou supprimer des éléments, ou pour réagir aux interactions des utilisateurs.
    </p>
</div>

    <div class="row">

    <div class="col-md-12">
    <h3 id="dom-selection">Sélection du DOM</h3>
    <div id="selection-elements">
    <h2><i class="fas fa-mouse-pointer"></i> Sélection des éléments DOM</h2>
    <p>
        La sélection d'éléments dans le DOM est une étape essentielle pour manipuler et interagir avec les pages web dynamiquement. 
        JavaScript offre une variété de méthodes pour cibler des éléments spécifiques dans le document.
    </p>
    <p>
        Les principales méthodes de sélection sont :
    </p>
    <ul>
        <li><code>document.getElementById</code> : Sélectionne un élément par son identifiant unique.</li>
        <li><code>document.getElementsByClassName</code> : Sélectionne tous les éléments ayant une classe spécifique.</li>
        <li><code>document.getElementsByTagName</code> : Sélectionne tous les éléments ayant un nom de balise donné.</li>
        <li><code>document.querySelector</code> : Sélectionne le premier élément correspondant à un sélecteur CSS.</li>
        <li><code>document.querySelectorAll</code> : Sélectionne tous les éléments correspondant à un sélecteur CSS.</li>
    </ul>
    <div class="example-box">
        <h3><i class="fas fa-code"></i> Exemple de sélection avec différents sélecteurs</h3>
        <pre><code class="language-javascript">
    <span class="comment">// Sélection par ID</span>
    <span class="keyword">const</span> titre = document.getElementById(<span class="string">'titre-principal'</span>);

    <span class="comment">// Sélection par classe</span>
    <span class="keyword">const</span> elements = document.getElementsByClassName(<span class="string">'classe-exemple'</span>);

    <span class="comment">// Sélection par nom de balise</span>
    <span class="keyword">const</span> paragraphs = document.getElementsByTagName(<span class="string">'p'</span>);

    <span class="comment">// Sélection avec querySelector</span>
    <span class="keyword">const</span> premierParagraphe = document.querySelector(<span class="string">'p'</span>);

    <span class="comment">// Sélection de tous les éléments correspondants</span>
    <span class="keyword">const</span> tousLesParagraphes = document.querySelectorAll(<span class="string">'p'</span>);

    <span class="comment">// Exemple d'itération sur une NodeList</span>
    tousLesParagraphes.forEach(paragraphe => {
        console.log(paragraphe.textContent);
    });
            </code></pre>
        </div>

        <div class="example-box">
            <h3><i class="fas fa-eye"></i> Exemple visuel</h3>
            <p>Considérez le code HTML suivant :</p>
            <pre><code class="language-html">
    <span class="tag">&lt;div id="conteneur"&gt;</span>
        <span class="tag">&lt;h1 id="titre-principal"&gt;</span><span class="content">Bienvenue</span><span class="tag">&lt;/h1&gt;</span>
        <span class="tag">&lt;p class="classe-exemple"&gt;</span><span class="content">Premier paragraphe</span><span class="tag">&lt;/p&gt;</span>
        <span class="tag">&lt;p class="classe-exemple"&gt;</span><span class="content">Deuxième paragraphe</span><span class="tag">&lt;/p&gt;</span>
    <span class="tag">&lt;/div&gt;</span>
            </code></pre>
            <p>
                Voici comment sélectionner et manipuler ces éléments en JavaScript :
            </p>
            <pre><code class="language-javascript">
    <span class="comment">// Sélection de l'élément avec l'ID 'titre-principal'</span>
    <span class="keyword">const</span> titre = document.getElementById(<span class="string">'titre-principal'</span>);
    titre.style.color = <span class="string">'blue'</span>; <span class="comment">// Change la couleur du texte</span>

    <span class="comment">// Sélection des paragraphes avec la classe 'classe-exemple'</span>
    <span class="keyword">const</span> paragraphs = document.getElementsByClassName(<span class="string">'classe-exemple'</span>);
    Array.from(paragraphs).forEach(p => {
        p.style.fontWeight = <span class="string">'bold'</span>; <span class="comment">// Rend le texte en gras</span>
    });

    <span class="comment">// Sélection avec querySelector</span>
    <span class="keyword">const</span> premierParagraphe = document.querySelector(<span class="string">'.classe-exemple'</span>);
    premierParagraphe.textContent = <span class="string">'Texte modifié par JavaScript'</span>;
            </code></pre>
        </div>

        <div class="tips-box">
            <h3><i class="fas fa-lightbulb"></i> Astuces</h3>
            <ul>
                <li>Utilisez <code>querySelector</code> et <code>querySelectorAll</code> pour une plus grande flexibilité avec les sélecteurs CSS.</li>
                <li>Transformez les résultats de <code>getElementsByClassName</code> ou <code>getElementsByTagName</code> en tableau avec <code>Array.from()</code> pour pouvoir utiliser les méthodes modernes comme <code>forEach</code>.</li>
                <li>Privilégiez <code>getElementById</code> pour les sélections basées sur l'ID : rapide et spécifique.</li>
            </ul>
        </div>
    </div>
</div>
<div id="exercice-selection-dom" class="col-12">
    <h2><i class="fas fa-tasks"></i> Exercice : Sélectionner et manipuler le DOM</h2>
    <p>
        Dans cet exercice, vous allez utiliser différentes méthodes de sélection du DOM pour manipuler les éléments d'une page web. 
        Suivez les étapes ci-dessous et vérifiez vos réponses dynamiquement !
    </p>

    <!-- Instructions -->
    <div class="instructions-box">
        <h3><i class="fas fa-info-circle"></i> Instructions</h3>
        <p>
            Vous avez le HTML suivant (visible dans la console en utilisant la solution) :
        </p>
        <pre><code class="language-html">
<span class="tag">&lt;div id="conteneur"&gt;</span>
    <span class="tag">&lt;h1 id="titre-principal"&gt;</span><span class="content">Bienvenue</span><span class="tag">&lt;/h1&gt;</span>
    <span class="tag">&lt;p class="classe-exemple"&gt;</span><span class="content">Premier paragraphe</span><span class="tag">&lt;/p&gt;</span>
    <span class="tag">&lt;p class="classe-exemple"&gt;</span><span class="content">Deuxième paragraphe</span><span class="tag">&lt;/p&gt;</span>
    <span class="tag">&lt;p&gt;</span><span class="content">Paragraphe sans classe</span><span class="tag">&lt;/p&gt;</span>
<span class="tag">&lt;/div&gt;</span>
        </code></pre>
        <p>Votre mission :</p>
        <ul>
            <li>Changer la couleur du texte de l'élément avec l'ID <code>titre-principal</code> en rouge.</li>
            <li>Mettre les paragraphes ayant la classe <code>classe-exemple</code> en gras.</li>
            <li>Ajouter un texte "Nouveau contenu" au paragraphe sans classe.</li>
        </ul>
    </div>

    <!-- Zone d'exécution -->
    <div id="zone-execution">
        <h3><i class="fas fa-code"></i> Votre code</h3>
        <textarea id="code-exercice" rows="8" style="width: 100%; font-family: monospace;">// Écrivez votre code ici
const titre = document.getElementById('titre-principal');
// Exemple : titre.style.color = 'red';
        </textarea>
        <button id="executer-code" class="btn btn-primary"><i class="fas fa-play"></i> Exécuter</button>
    </div>

    <!-- Zone de résultat -->
    <div id="resultat-exercice">
        <h3><i class="fas fa-check-circle"></i> Résultat</h3>
        <div id="conteneur">
            <h1 id="titre-principal">Bienvenue</h1>
            <p class="classe-exemple">Premier paragraphe</p>
            <p class="classe-exemple">Deuxième paragraphe</p>
            <p>Paragraphe sans classe</p>
        </div>
    </div>

    <!-- Solution -->
    <div class="solution-box">
        <button id="afficher-solution" class="btn btn-secondary"><i class="fas fa-eye"></i> Afficher la solution</button>
        <div class="example-box"> <pre id="solution-code" style="display: none;">
<span class="comment">// Changer la couleur du titre</span>
<span class="keyword">const</span> titre = document.getElementById(<span class="string">'titre-principal'</span>);
titre.style.color = <span class="string">'red'</span>;

<span class="comment">// Mettre les paragraphes ayant la classe 'classe-exemple' en gras</span>
<span class="keyword">const</span> paragraphs = document.getElementsByClassName(<span class="string">'classe-exemple'</span>);
Array.from(paragraphs).forEach(p => {
    p.style.fontWeight = <span class="string">'bold'</span>;
});

<span class="comment">// Ajouter du contenu au paragraphe sans classe</span>
<span class="keyword">const</span> paragrapheSansClasse = document.querySelector(<span class="string">'div#conteneur p:not(.classe-exemple)'</span>);
paragrapheSansClasse.textContent += <span class="string">' Nouveau contenu'</span>;
        </pre></div>
    </div>
</div>
<script>
    // Exécuter le code écrit par l'utilisateur
document.getElementById('executer-code').addEventListener('click', () => {
    const userCode = document.getElementById('code-exercice').value;
    try {
        // Exécuter le code utilisateur
        eval(userCode);
    } catch (error) {
        alert('Erreur dans votre code : ' + error.message);
    }
});

// Afficher la solution
document.getElementById('afficher-solution').addEventListener('click', () => {
    const solution = document.getElementById('solution-code');
    solution.style.display = solution.style.display === 'none' ? 'block' : 'none';
});

</script>
<div class="col-md-12">
    <div id="dom-modification">
    <h2><i class="fas fa-pencil-alt"></i> Modification du DOM</h2>
    <p>
        La modification du DOM permet d'ajouter, de supprimer ou de mettre à jour les éléments HTML d'une page web de manière dynamique. 
        Grâce à JavaScript, il est possible de transformer complètement le contenu d'une page en réponse aux actions de l'utilisateur ou en fonction de certaines conditions.
    </p>

    <!-- Ajouter des éléments -->
    <div id="ajouter-elements">
        <h3><i class="fas fa-plus-circle"></i> Ajouter des éléments</h3>
        <p>
            Utilisez la méthode <code>createElement</code> pour créer de nouveaux éléments et la méthode <code>appendChild</code> ou <code>insertBefore</code> pour les insérer dans la structure du DOM.
        </p>
        <p><strong>Exemple :</strong></p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Créer un nouvel élément</span>
<span class="keyword">const</span> nouveauParagraphe = document.createElement(<span class="string">'p'</span>);
nouveauParagraphe.textContent = <span class="string">'Ceci est un nouveau paragraphe.'</span>;

<span class="comment">// Sélectionner l'élément parent</span>
<span class="keyword">const</span> conteneur = document.getElementById(<span class="string">'conteneur'</span>);

<span class="comment">// Ajouter le paragraphe au conteneur</span>
conteneur.appendChild(nouveauParagraphe);
            </code></pre>
        </div>
    </div>

    <!-- Supprimer des éléments -->
    <div id="supprimer-elements">
        <h3><i class="fas fa-trash-alt"></i> Supprimer des éléments</h3>
        <p>
            Utilisez la méthode <code>removeChild</code> pour supprimer un élément enfant ou <code>remove</code> pour supprimer directement un élément.
        </p>
        <p><strong>Exemple :</strong></p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Sélectionner l'élément à supprimer</span>
<span class="keyword">const</span> paragrapheASupprimer = document.querySelector(<span class="string">'.classe-exemple'</span>);

<span class="comment">// Supprimer avec remove()</span>
paragrapheASupprimer.remove();

<span class="comment">// Supprimer avec removeChild()</span>
<span class="keyword">const</span> parent = paragrapheASupprimer.parentNode;
parent.removeChild(paragrapheASupprimer);
            </code></pre>
        </div>
    </div>

    <!-- Modifier des éléments existants -->
    <div id="modifier-elements">
        <h3><i class="fas fa-edit"></i> Modifier des éléments existants</h3>
        <p>
            Vous pouvez modifier le contenu, les attributs et les styles des éléments existants à l'aide de JavaScript.
        </p>
        <p><strong>Exemple :</strong></p>
        <div class="example-box">
            <pre><code class="language-javascript">
<span class="comment">// Modifier le texte d'un élément</span>
<span class="keyword">const</span> titre = document.querySelector(<span class="string">'h1'</span>);
titre.textContent = <span class="string">'Nouveau titre'</span>;

<span class="comment">// Modifier un attribut</span>
titre.setAttribute(<span class="string">'id'</span>, <span class="string">'nouveau-id'</span>);

<span class="comment">// Modifier le style</span>
titre.style.color = <span class="string">'blue'</span>;
titre.style.fontSize = <span class="string">'24px'</span>;
            </code></pre>
        </div>
    </div>

    <!-- Exemple visuel -->
    <div id="exemple-visuel">
        <h3><i class="fas fa-eye"></i> Exemple visuel</h3>
        <p>Considérez le code HTML suivant :</p>
        <div class="example-box"><pre><code class="language-html">
<span class="tag">&lt;div id="conteneur"&gt;</span>
    <span class="tag">&lt;h1&gt;</span><span class="content">Bienvenue</span><span class="tag">&lt;/h1&gt;</span>
    <span class="tag">&lt;p&gt;</span><span class="content">Paragraphe existant</span><span class="tag">&lt;/p&gt;</span>
<span class="tag">&lt;/div&gt;</span>
        </code></pre>
        <p>Voici ce que vous pouvez réaliser en JavaScript :</p>
        <pre><code class="language-javascript">
<span class="comment">// Ajouter un nouvel élément</span>
<span class="keyword">const</span> nouveauParagraphe = document.createElement(<span class="string">'p'</span>);
nouveauParagraphe.textContent = <span class="string">'Paragraphe ajouté dynamiquement.'</span>;
conteneur.appendChild(nouveauParagraphe);

<span class="comment">// Modifier le texte du titre</span>
titre.textContent = <span class="string">'Titre modifié'</span>;

<span class="comment">// Supprimer un paragraphe existant</span>
paragrapheASupprimer.remove();
        </code></pre></div>
    </div>

    <!-- Astuces -->
    <div class="tips-box">
        <h3><i class="fas fa-lightbulb"></i> Astuces</h3>
        <ul>
            <li>Privilégiez <code>remove()</code> pour supprimer des éléments lorsque cela est pris en charge par les navigateurs.</li>
            <li>Utilisez <code>textContent</code> plutôt que <code>innerHTML</code> pour des performances et une sécurité accrues.</li>
            <li>Modifiez les styles directement via <code>style</code> ou en ajoutant/retirant des classes CSS avec <code>classList</code>.</li>
        </ul>
    </div>
    <div id="exercices-modification-dom" class="col-12">
    <h2><i class="fas fa-tasks"></i> Exercices : Modification du DOM</h2>
    <p>
        Pratiquez la modification du DOM à travers ces exercices interactifs. Suivez les instructions, exécutez votre code et observez les résultats dynamiquement.
    </p>

    <!-- Exercice 1 -->
    <div class="exercice">
        <h3><i class="fas fa-plus-circle"></i> Exercice 1 : Ajouter un élément</h3>
        <p>
            Créez un nouveau paragraphe avec le texte <strong>"Ceci est un paragraphe ajouté dynamiquement"</strong> et ajoutez-le à l'élément ayant l'ID <code>conteneur-ex1</code>.
        </p>
        <div id="conteneur-ex1" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 15px;">
            <h4>Contenu initial</h4>
        </div>
        <pre class="example-box">
<code class="language-javascript">
<span class="comment">// Sélectionner le conteneur</span>
<span class="keyword">const</span> conteneur = document.getElementById(<span class="string">'conteneur-ex1'</span>);

<span class="comment">// Créer un nouvel élément</span>
<span class="keyword">const</span> paragraphe = document.createElement(<span class="string">'p'</span>);
paragraphe.textContent = <span class="string">'Ceci est un paragraphe ajouté dynamiquement.'</span>;

<span class="comment">// Ajouter l'élément au DOM</span>
conteneur.appendChild(paragraphe);
</code>
        </pre>
        <button id="executer-ex1" class="btn btn-primary"><i class="fas fa-play"></i> Exécuter</button>
    </div>

    <!-- Exercice 2 -->
    <div class="exercice">
        <h3><i class="fas fa-trash-alt"></i> Exercice 2 : Supprimer un élément</h3>
        <p>
            Supprimez le paragraphe ayant la classe <code>classe-a-supprimer</code> dans l'élément avec l'ID <code>conteneur-ex2</code>.
        </p>
        <div id="conteneur-ex2" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 15px;">
            <h4>Contenu initial</h4>
            <p class="classe-a-supprimer">Paragraphe à supprimer</p>
        </div>
        <pre class="example-box">
<code class="language-javascript">
<span class="comment">// Sélectionner l'élément à supprimer</span>
<span class="keyword">const</span> elementASupprimer = document.querySelector(<span class="string">'.classe-a-supprimer'</span>);

<span class="comment">// Supprimer l'élément</span>
elementASupprimer.remove();
</code>
        </pre>
        <button id="executer-ex2" class="btn btn-primary"><i class="fas fa-play"></i> Exécuter</button>
    </div>

    <!-- Exercice 3 -->
    <div class="exercice">
        <h3><i class="fas fa-edit"></i> Exercice 3 : Modifier un élément</h3>
        <p>
            Changez le texte du titre (balise <code>h4</code>) à l'intérieur de l'élément avec l'ID <code>conteneur-ex3</code> pour <strong>"Titre modifié dynamiquement"</strong>. Changez également sa couleur en bleu.
        </p>
        <div id="conteneur-ex3" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 15px;">
            <h4>Titre initial</h4>
        </div>
        <pre class="example-box">
<code class="language-javascript">
<span class="comment">// Sélectionner l'élément</span>
<span class="keyword">const</span> titre = document.querySelector(<span class="string">'#conteneur-ex3 h4'</span>);

<span class="comment">// Modifier le texte et le style</span>
titre.textContent = <span class="string">'Titre modifié dynamiquement'</span>;
titre.style.color = <span class="string">'blue'</span>;
</code>
        </pre>
        <button id="executer-ex3" class="btn btn-primary"><i class="fas fa-play"></i> Exécuter</button>
    </div>
</div>

</div>

</div>

<div class="col-md-12">
    <h3 id="events">Événements</h3>
    <p>
        Les événements en JavaScript permettent de capturer les actions des utilisateurs (clics, frappes au clavier, soumissions de formulaires) ou du navigateur 
        (chargement de la page, redimensionnement de la fenêtre, etc.). Ils sont essentiels pour rendre une page web interactive.
    </p>
    <h4>Types d'événements courants</h4>
    <ul>
        <li><strong>click</strong> : Déclenché lorsqu'un élément est cliqué.</li>
        <li><strong>mouseover</strong> : Déclenché lorsque la souris passe au-dessus d'un élément.</li>
        <li><strong>keydown</strong> : Déclenché lorsqu'une touche du clavier est pressée.</li>
        <li><strong>submit</strong> : Déclenché lorsqu’un formulaire est soumis.</li>
        <li><strong>resize</strong> : Déclenché lorsqu’une fenêtre est redimensionnée.</li>
    </ul>

    <h4>Exemples interactifs</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple d'événements JavaScript</span>

// Changer la couleur d'un élément au clic
<span class="keyword">function</span> changerCouleur() {
    document.getElementById(<span class="string">"element"</span>).style.color = <span class="string">"blue"</span>;
}

// Afficher un message au survol
<span class="keyword">function</span> afficherMessage() {
    document.getElementById(<span class="string">"resultat-events"</span>).textContent = <span class="string">"Vous avez survolé l'élément !"</span>;
}

// Capturer une touche pressée
<span class="keyword">function</span> afficherTouche(event) {
    document.getElementById(<span class="string">"resultat-keydown"</span>).textContent = <span class="string">`Touche pressée : ${event.key}`</span>;
}

// Capturer la soumission d'un formulaire
<span class="keyword">function</span> gererSoumission(event) {
    event.preventDefault(); <span class="comment">// Empêche le comportement par défaut de la soumission</span>
    document.getElementById(<span class="string">"resultat-submit"</span>).textContent = <span class="string">"Formulaire soumis !"</span>;
}

// Réagir au redimensionnement de la fenêtre
<span class="keyword">function</span> afficherDimensions() {
    <span class="keyword">let</span> largeur = window.innerWidth;
    <span class="keyword">let</span> hauteur = window.innerHeight;
    document.getElementById(<span class="string">"resultat-resize"</span>).textContent = <span class="string">`Dimensions : ${largeur}x${hauteur}`</span>;
}
</code></pre>

        <button onclick="changerCouleur()" class="btn btn-primary">Changer la Couleur</button>
        <div id="element" onmouseover="afficherMessage()" style="margin-top: 10px; font-weight: bold;">
            Survolez-moi pour un message !
        </div>
        <div id="resultat-events" style="margin-top: 10px; font-weight: bold;"></div>
        <div style="margin-top: 10px;">
            <input type="text" placeholder="Tapez quelque chose..." onkeydown="afficherTouche(event)" class="form-control">
            <div id="resultat-keydown" style="margin-top: 10px; font-weight: bold;"></div>
        </div>
        <form onsubmit="gererSoumission(event)" style="margin-top: 10px;">
            <label for="input-form">Saisissez quelque chose :</label>
            <input type="text" id="input-form" class="form-control" required>
            <button type="submit" class="btn btn-secondary" style="margin-top: 10px;">Soumettre</button>
        </form>
        <div id="resultat-submit" style="margin-top: 10px; font-weight: bold;"></div>
        <div style="margin-top: 10px;">
            <p>Redimensionnez la fenêtre pour voir les dimensions :</p>
            <div id="resultat-resize" style="font-weight: bold;"></div>
        </div>
    </div>
</div>

<script>
    // Changer la couleur d'un élément au clic
    function changerCouleur() {
        document.getElementById("element").style.color = "blue";
    }

    // Afficher un message au survol
    function afficherMessage() {
        document.getElementById("resultat-events").textContent = "Vous avez survolé l'élément !";
    }

    // Capturer une touche pressée
    function afficherTouche(event) {
        document.getElementById("resultat-keydown").textContent = `Touche pressée : ${event.key}`;
    }

    // Capturer la soumission d'un formulaire
    function gererSoumission(event) {
        event.preventDefault(); // Empêche la soumission par défaut
        document.getElementById("resultat-submit").textContent = "Formulaire soumis !";
    }

    // Réagir au redimensionnement de la fenêtre
    function afficherDimensions() {
        let largeur = window.innerWidth;
        let hauteur = window.innerHeight;
        document.getElementById("resultat-resize").textContent = `Dimensions : ${largeur}x${hauteur}`;
    }

    // Ajouter un écouteur pour l'événement de redimensionnement
    window.addEventListener("resize", afficherDimensions);
</script>

    </div>
</div>

<!-- JavaScript Avancé -->
<div class="content-section" id="js-avance">
    <h1><i class="fas fa-rocket icon"></i> JavaScript Avancé</h1>
    <p>
        Le JavaScript avancé est une étape essentielle pour les développeurs souhaitant maîtriser pleinement ce langage. 
        Il va au-delà des bases pour se concentrer sur des concepts, outils et techniques qui permettent de créer des applications plus dynamiques, performantes et maintenables.
    </p>
    <p>
        Dans cette section, vous apprendrez à utiliser des fonctionnalités modernes de JavaScript, à manipuler le DOM de manière avancée, 
        et à gérer des interactions complexes avec des serveurs, des API et des données asynchrones. Vous serez également initié aux meilleures pratiques de développement pour produire un code propre, efficace et évolutif.
    </p>
    <h2>Contenu des cours</h2>
    <ul>
        <li>
            <strong>Promises et Async/Await :</strong> Gestion du code asynchrone pour effectuer des opérations comme les requêtes API sans bloquer l'exécution.
        </li>
        <li>
            <strong>Classes et Programmation Orientée Objet (POO) :</strong> Structure de votre code avec des concepts avancés d’héritage et d’encapsulation.
        </li>
        <li>
            <strong>Manipulation Avancée du DOM :</strong> Techniques pour sélectionner, modifier et manipuler les éléments HTML de manière performante.
        </li>
        <li>
            <strong>Événements et Listeners :</strong> Gestion efficace des événements utilisateur pour améliorer l'interactivité.
        </li>
        <li>
            <strong>Modules JavaScript :</strong> Organisation et réutilisation du code avec l'import/export de fonctionnalités.
        </li>
        <li>
            <strong>Fetch API et Gestion des Données :</strong> Communication avec des serveurs pour récupérer et envoyer des données.
        </li>
        <li>
            <strong>JSON et Web Storage :</strong> Manipulation des données JSON et stockage local avec LocalStorage ou SessionStorage.
        </li>
        <li>
            <strong>Service Workers et Progressive Web Apps (PWA) :</strong> Création d’applications web modernes avec des fonctionnalités hors ligne.
        </li>
        <li>
            <strong>Gestion des Erreurs et Debugging :</strong> Techniques pour identifier, prévenir et résoudre les erreurs efficacement.
        </li>
    </ul>
    <p>
        Chaque cours inclut des exemples pratiques, des exercices interactifs, et des projets pour appliquer vos nouvelles compétences. 
        À la fin de cette section, vous serez capable de développer des applications JavaScript avancées et professionnelles.
    </p>
    <div class="row">
    <div class="col-md-12">
    <h3 id="classes">Classes</h3>
    <p>
        En JavaScript, les classes sont une fonctionnalité introduite avec ES6. Elles permettent de créer des modèles réutilisables 
        pour structurer le code et organiser des fonctionnalités communes. Bien que les classes soient une abstraction, elles facilitent la gestion des données 
        et des comportements liés à ces données.
    </p>
    <h4>Caractéristiques principales</h4>
    <ul>
        <li><strong>Création de classes :</strong> Déclaration d'une classe avec le mot-clé <code>class</code>.</li>
        <li><strong>Constructeur :</strong> Une méthode spéciale appelée automatiquement lors de l'instanciation d'une classe.</li>
        <li><strong>Méthodes :</strong> Fonctionnalités définies à l'intérieur des classes pour effectuer des actions spécifiques.</li>
        <li><strong>Propriétés statiques :</strong> Propriétés directement accessibles via la classe, sans créer une instance.</li>
    </ul>

    <h4>Exemples pratiques</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Définir une classe</span>
<span class="keyword">class</span> Voiture {
    <span class="comment">// Le constructeur initialise les propriétés</span>
    <span class="keyword">constructor</span>(marque, modele, annee) {
        this.marque = marque;
        this.modele = modele;
        this.annee = annee;
    }

    <span class="comment">// Méthode pour afficher les détails de la voiture</span>
    afficherDetails() {
        <span class="keyword">return</span> <span class="string">`Voiture : ${this.marque} ${this.modele}, Année : ${this.annee}`</span>;
    }

    <span class="comment">// Propriété statique</span>
    <span class="keyword">static</span> categorie = <span class="string">"Véhicule"</span>;

    <span class="comment">// Méthode statique</span>
    <span class="keyword">static</span> comparer(voiture1, voiture2) {
        <span class="keyword">return</span> voiture1.annee > voiture2.annee ? voiture1 : voiture2;
    }
}

<span class="comment">// Instanciation d'une classe</span>
<span class="keyword">let</span> voiture1 = <span class="keyword">new</span> Voiture(<span class="string">"Toyota"</span>, <span class="string">"Corolla"</span>, <span class="number">2020</span>);
<span class="keyword">let</span> voiture2 = <span class="keyword">new</span> Voiture(<span class="string">"Honda"</span>, <span class="string">"Civic"</span>, <span class="number">2018</span>);

<span class="comment">// Utiliser une méthode</span>
console.log(voiture1.afficherDetails()); <span class="comment">// Voiture : Toyota Corolla, Année : 2020</span>

<span class="comment">// Accéder à une propriété statique</span>
console.log(Voiture.categorie); <span class="comment">// Véhicule</span>

<span class="comment">// Utiliser une méthode statique</span>
<span class="keyword">let</span> plusRecente = Voiture.comparer(voiture1, voiture2);
console.log(plusRecente.afficherDetails()); <span class="comment">// Voiture : Toyota Corolla, Année : 2020</span>
</code></pre>
    </div>

    <h4>Cas d'utilisation pratiques</h4>
    <p>Les classes peuvent être utilisées pour :</p>
    <ul>
        <li><strong>Modéliser des entités :</strong> Créer des modèles simples pour structurer les données, comme des produits, des utilisateurs ou des véhicules.</li>
        <li><strong>Créer des collections réutilisables :</strong> Définir des fonctionnalités standardisées pour des groupes similaires d'objets.</li>
        <li><strong>Ajouter des méthodes spécifiques :</strong> Faciliter les opérations fréquentes sur des ensembles de données.</li>
        <li><strong>Centraliser des propriétés ou méthodes :</strong> Utiliser des méthodes ou propriétés statiques pour des valeurs communes.</li>
    </ul>
</div>
<div class="col-md-12">
    <h3 id="poo">Programmation Orientée Objet (POO)</h3>
    <p>
        Après avoir exploré les classes, il est important de comprendre leur rôle dans un paradigme plus large : la Programmation Orientée Objet (POO).
        Les classes sont un outil de la POO, mais la POO va bien au-delà en proposant une manière de penser et de structurer votre code en JavaScript.
    </p>

    <h4>Différence entre les Classes et la POO</h4>
    <ul>
        <li>
            <strong>Classes :</strong> Une abstraction qui permet de créer des modèles d'objets. Elles se concentrent sur la création et la gestion de structures spécifiques.
        </li>
        <li>
            <strong>POO :</strong> Un paradigme de programmation qui repose sur des concepts comme l'encapsulation, l'héritage, et le polymorphisme. 
            La POO utilise les classes et les objets pour structurer le code, favoriser la réutilisation et faciliter la maintenance.
        </li>
    </ul>

    <h4>Principes fondamentaux de la POO</h4>
    <p>La POO repose sur quatre piliers principaux :</p>
    <ul>
        <li><strong>Encapsulation :</strong> Regrouper les données (propriétés) et les comportements (méthodes) dans une entité appelée objet.</li>
        <li><strong>Héritage :</strong> Créer des relations entre les classes pour partager des propriétés et des méthodes communes.</li>
        <li><strong>Polymorphisme :</strong> Permettre à des méthodes ou des objets de prendre plusieurs formes, souvent en redéfinissant ou en surchargeant des méthodes.</li>
        <li><strong>Abstraction :</strong> Cacher les détails complexes pour ne montrer que l'essentiel à l'utilisateur.</li>
    </ul>

    <h4>Exemples pratiques</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple de POO en JavaScript</span>

<span class="comment">// Classe de base (Encapsulation)</span>
<span class="keyword">class</span> Animal {
    <span class="keyword">constructor</span>(nom, type) {
        this.nom = nom;
        this.type = type;
    }

    <span class="comment">// Méthode générique</span>
    decrire() {
        <span class="keyword">return</span> <span class="string">`${this.nom} est un ${this.type}.`</span>;
    }
}

<span class="comment">// Héritage : Classe spécifique qui hérite de la classe Animal</span>
<span class="keyword">class</span> Chien <span class="keyword">extends</span> Animal {
    <span class="comment">// Ajout d'une méthode spécifique</span>
    aboyer() {
        <span class="keyword">return</span> <span class="string">`Woof! Je suis ${this.nom}.`</span>;
    }
}

<span class="comment">// Polymorphisme : Redéfinition de la méthode decrire</span>
<span class="keyword">class</span> Chat <span class="keyword">extends</span> Animal {
    decrire() {
        <span class="keyword">return</span> <span class="string">`${this.nom} est un chat très mignon.`</span>;
    }
}

<span class="comment">// Instanciation d'objets</span>
<span class="keyword">let</span> animal1 = <span class="keyword">new</span> Animal(<span class="string">"Daisy"</span>, <span class="string">"oiseau"</span>);
<span class="keyword">let</span> chien1 = <span class="keyword">new</span> Chien(<span class="string">"Max"</span>, <span class="string">"chien"</span>);
<span class="keyword">let</span> chat1 = <span class="keyword">new</span> Chat(<span class="string">"Milo"</span>, <span class="string">"chat"</span>);

<span class="comment">// Utilisation des méthodes</span>
console.log(animal1.decrire()); <span class="comment">// Daisy est un oiseau.</span>
console.log(chien1.decrire());  <span class="comment">// Max est un chien.</span>
console.log(chien1.aboyer());  <span class="comment">// Woof! Je suis Max.</span>
console.log(chat1.decrire());  <span class="comment">// Milo est un chat très mignon.</span>
</code></pre>
    </div>

    <h4>Concepts avancés</h4>
    <ul>
        <li><strong>Constructeurs parent et super :</strong> Utilisation du mot-clé <code>super</code> pour accéder au constructeur ou aux méthodes d’une classe parente.</li>
        <li><strong>Getters et Setters :</strong> Méthodes pour accéder ou modifier des propriétés tout en encapsulant la logique.</li>
        <li><strong>Composition :</strong> Utilisation d'autres objets au lieu d'hériter d'une classe (concept <em>has-a</em>).</li>
    </ul>

    <h4>Exemples supplémentaires</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple avec super et getters/setters</span>

<span class="keyword">class</span> Personne {
    <span class="keyword">constructor</span>(nom, age) {
        this.nom = nom;
        this.age = age;
    }

    <span class="comment">// Getter pour le nom complet</span>
    get nomComplet() {
        <span class="keyword">return</span> <span class="string">`Nom complet : ${this.nom}`</span>;
    }

    <span class="comment">// Setter pour changer le nom</span>
    set changerNom(nouveauNom) {
        this.nom = nouveauNom;
    }
}

<span class="comment">// Héritage et utilisation de super</span>
<span class="keyword">class</span> Etudiant <span class="keyword">extends</span> Personne {
    <span class="keyword">constructor</span>(nom, age, programme) {
        <span class="keyword">super</span>(nom, age); <span class="comment">// Appelle le constructeur parent</span>
        this.programme = programme;
    }

    decrire() {
        <span class="keyword">return</span> <span class="string">`${this.nom}, ${this.age} ans, étudie ${this.programme}.`</span>;
    }
}

<span class="comment">// Instanciation</span>
<span class="keyword">let</span> etudiant1 = <span class="keyword">new</span> Etudiant(<span class="string">"Alice"</span>, <span class="number">22</span>, <span class="string">"Informatique"</span>);

<span class="comment">// Utilisation</span>
console.log(etudiant1.decrire());  <span class="comment">// Alice, 22 ans, étudie Informatique.</span>
etudiant1.changerNom = <span class="string">"Alicia"</span>;
console.log(etudiant1.nomComplet); <span class="comment">// Nom complet : Alicia</span>
</code></pre>
    </div>
</div>
<div class="col-md-12">
    <h3 id="promises">Promises</h3>
    <p>
        Les Promises en JavaScript sont un mécanisme pour gérer les opérations asynchrones. Elles permettent d’exécuter du code après l’achèvement d’une tâche, 
        en évitant les fameux "callbacks hell" et en rendant le code plus lisible et maintenable.
    </p>

    <h4>Pourquoi utiliser les Promises ?</h4>
    <ul>
        <li>
            <strong>Simplifier les opérations asynchrones :</strong> Les Promises permettent de chaîner des opérations asynchrones de manière claire.
        </li>
        <li>
            <strong>Éviter les callbacks imbriqués :</strong> En remplaçant les callbacks imbriqués par des méthodes comme <code>then</code> et <code>catch</code>.
        </li>
        <li>
            <strong>Gestion efficace des erreurs :</strong> Les Promises capturent les erreurs sur tout le chaînage via <code>catch</code>.
        </li>
    </ul>

    <h4>Structure d’une Promise</h4>
    <p>Une Promise est un objet qui représente une valeur qui peut être disponible maintenant, dans le futur, ou jamais. Elle a trois états possibles :</p>
    <ul>
        <li><strong>Pending :</strong> La Promise est en attente (opération en cours).</li>
        <li><strong>Fulfilled :</strong> La Promise est résolue avec succès.</li>
        <li><strong>Rejected :</strong> La Promise a échoué.</li>
    </ul>

    <h4>Création et utilisation de Promises</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Création d'une Promise</span>
<span class="keyword">const</span> maPromise = <span class="keyword">new</span> Promise((resolve, reject) => {
    <span class="comment">// Simule une opération asynchrone</span>
    <span class="keyword">let</span> operationReussie = <span class="boolean">true</span>;

    <span class="comment">// Après 2 secondes, on décide du résultat</span>
    setTimeout(() => {
        <span class="keyword">if</span> (operationReussie) {
            resolve(<span class="string">"Opération réussie !"</span>);
        } <span class="keyword">else</span> {
            reject(<span class="string">"Erreur lors de l'opération."</span>);
        }
    }, <span class="number">2000</span>);
});

<span class="comment">// Consommer une Promise</span>
maPromise
    .then((resultat) => {
        console.log(resultat); <span class="comment">// "Opération réussie !"</span>
    })
    .catch((erreur) => {
        console.error(erreur); <span class="comment">// "Erreur lors de l'opération."</span>
    })
    .finally(() => {
        console.log(<span class="string">"Opération terminée."</span>);
    });
</code></pre>
    </div>

    <h4>Méthodes principales des Promises</h4>
    <ul>
        <li>
            <strong><code>then</code> :</strong> Exécute une fonction lorsque la Promise est résolue.
        </li>
        <li>
            <strong><code>catch</code> :</strong> Exécute une fonction lorsque la Promise est rejetée.
        </li>
        <li>
            <strong><code>finally</code> :</strong> Exécute une fonction une fois que la Promise est terminée, qu'elle soit résolue ou rejetée.
        </li>
        <li>
            <strong><code>Promise.all</code> :</strong> Attend que toutes les Promises passées soient résolues ou qu’une échoue.
        </li>
        <li>
            <strong><code>Promise.race</code> :</strong> Renvoie la première Promise résolue ou rejetée.
        </li>
        <li>
            <strong><code>Promise.allSettled</code> :</strong> Attend que toutes les Promises soient terminées, quelle que soit leur issue.
        </li>
        <li>
            <strong><code>Promise.any</code> :</strong> Renvoie la première Promise résolue, ignore les rejets.
        </li>
    </ul>

    <h4>Exemples avancés</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple avec Promise.all</span>
<span class="keyword">const</span> promesse1 = <span class="keyword">new</span> Promise((resolve) => setTimeout(resolve, <span class="number">1000</span>, <span class="string">"Promise 1 résolue"</span>));
<span class="keyword">const</span> promesse2 = <span class="keyword">new</span> Promise((resolve) => setTimeout(resolve, <span class="number">2000</span>, <span class="string">"Promise 2 résolue"</span>));
<span class="keyword">const</span> promesse3 = <span class="keyword">new</span> Promise((resolve, reject) => setTimeout(reject, <span class="number">1500</span>, <span class="string">"Promise 3 rejetée"</span>));

Promise.all([promesse1, promesse2, promesse3])
    .then((resultats) => {
        console.log(resultats); <span class="comment">// ["Promise 1 résolue", "Promise 2 résolue"]</span>
    })
    .catch((erreur) => {
        console.error(erreur); <span class="comment">// "Promise 3 rejetée"</span>
    });

<span class="comment">// Exemple avec Promise.race</span>
Promise.race([promesse1, promesse2, promesse3])
    .then((resultat) => {
        console.log(resultat); <span class="comment">// "Promise 1 résolue"</span>
    })
    .catch((erreur) => {
        console.error(erreur); <span class="comment">// Si la première est rejetée</span>
    });
</code></pre>
    </div>

    <h4>Cas d’utilisation courants</h4>
    <p>Les Promises sont utilisées dans divers scénarios asynchrones :</p>
    <ul>
        <li><strong>Requêtes API :</strong> Récupération de données depuis un serveur avec <code>fetch</code>.</li>
        <li><strong>Chargement de ressources :</strong> Téléchargement d'images ou de fichiers.</li>
        <li><strong>Animations :</strong> Attente de la fin d’une animation ou d’une transition.</li>
        <li><strong>Opérations complexes :</strong> Exécution de plusieurs tâches asynchrones en parallèle.</li>
    </ul>
</div>

<div class="col-md-12">
    <h3 id="async-await">Async/Await</h3>
    <p>
        <strong>Async/Await</strong> est une syntaxe introduite avec ES8 (ECMAScript 2017) pour simplifier la gestion des opérations asynchrones. 
        Elle repose sur les Promises, mais rend le code plus lisible et facile à écrire, semblable à du code synchrone.
    </p>

    <h4>Pourquoi utiliser Async/Await ?</h4>
    <ul>
        <li><strong>Lisibilité :</strong> Simplifie les chaînes de <code>.then</code> et évite les imbrications complexes.</li>
        <li><strong>Gestion des erreurs :</strong> Permet de capturer les erreurs avec un bloc <code>try/catch</code>, facilitant le débogage.</li>
        <li><strong>Code synchrone-like :</strong> Écrit des fonctions asynchrones de manière séquentielle, ce qui est intuitif.</li>
    </ul>

    <h4>Concepts fondamentaux</h4>
    <ul>
        <li>
            <strong><code>async</code> :</strong> Déclare une fonction asynchrone. Une fonction asynchrone renvoie toujours une Promise.
        </li>
        <li>
            <strong><code>await</code> :</strong> Suspend l’exécution d’une fonction asynchrone jusqu'à ce qu'une Promise soit résolue ou rejetée.
        </li>
    </ul>

    <h4>Structure d’Async/Await</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Définir une fonction asynchrone</span>
<span class="keyword">async</span> <span class="keyword">function</span> exempleAsync() {
    <span class="comment">// Simuler une opération asynchrone avec une Promise</span>
    <span class="keyword">let</span> resultat = <span class="keyword">await</span> <span class="keyword">new</span> Promise((resolve) => {
        setTimeout(() => resolve(<span class="string">"Opération terminée !"</span>), <span class="number">2000</span>);
    });

    console.log(resultat); <span class="comment">// "Opération terminée !"</span>
}

<span class="comment">// Appeler une fonction asynchrone</span>
exempleAsync();
</code></pre>
    </div>

    <h4>Gestion des erreurs avec Async/Await</h4>
    <p>Les erreurs dans les fonctions asynchrones peuvent être capturées avec un bloc <code>try/catch</code> :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple de gestion d'erreur</span>
<span class="keyword">async</span> <span class="keyword">function</span> operationAvecErreur() {
    <span class="keyword">try</span> {
        <span class="keyword">let</span> resultat = <span class="keyword">await</span> <span class="keyword">new</span> Promise((_, reject) => {
            setTimeout(() => reject(<span class="string">"Une erreur est survenue."</span>), <span class="number">2000</span>);
        });

        console.log(resultat); <span class="comment">// Ne sera pas exécuté</span>
    } <span class="keyword">catch</span> (erreur) {
        console.error(erreur); <span class="comment">// "Une erreur est survenue."</span>
    }
}

operationAvecErreur();
</code></pre>
    </div>

    <h4>Combinaison d’Async/Await avec des boucles</h4>
    <p>Async/Await peut être utilisé dans des boucles pour gérer des opérations répétées de manière séquentielle :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exécution séquentielle avec une boucle</span>
<span class="keyword">async</span> <span class="keyword">function</span> traiterTableau() {
    <span class="keyword">let</span> elements = [<span class="string">"A"</span>, <span class="string">"B"</span>, <span class="string">"C"</span>];

    <span class="keyword">for</span> (<span class="keyword">let</span> element <span class="keyword">of</span> elements) {
        <span class="keyword">await</span> <span class="keyword">new</span> Promise((resolve) => {
            setTimeout(() => {
                console.log(<span class="string">`Traitement de ${element}`</span>);
                resolve();
            }, <span class="number">1000</span>);
        });
    }

    console.log(<span class="string">"Tous les éléments ont été traités."</span>);
}

traiterTableau();
</code></pre>
    </div>

    <h4>Exemples avancés</h4>
    <p>Async/Await peut être combiné avec des Promises pour exécuter des tâches simultanées et séquentielles :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exécution parallèle avec Promise.all</span>
<span class="keyword">async</span> <span class="keyword">function</span> executionParallele() {
    <span class="keyword">let</span> promesse1 = <span class="keyword">new</span> Promise((resolve) => setTimeout(resolve, <span class="number">1000</span>, <span class="string">"Tâche 1 terminée"</span>));
    <span class="keyword">let</span> promesse2 = <span class="keyword">new</span> Promise((resolve) => setTimeout(resolve, <span class="number">2000</span>, <span class="string">"Tâche 2 terminée"</span>));

    <span class="keyword">let</span> resultats = <span class="keyword">await</span> Promise.all([promesse1, promesse2]);

    console.log(resultats); <span class="comment">// ["Tâche 1 terminée", "Tâche 2 terminée"]</span>
}

executionParallele();
</code></pre>
    </div>

    <h4>Cas d’utilisation courants</h4>
    <ul>
        <li><strong>Requêtes API :</strong> Utilisation de <code>fetch</code> pour récupérer des données de manière asynchrone.</li>
        <li><strong>Animations :</strong> Synchronisation d'animations ou de transitions.</li>
        <li><strong>Flux de traitement :</strong> Exécution de plusieurs étapes dépendantes de manière séquentielle.</li>
        <li><strong>Opérations parallèles :</strong> Gérer plusieurs tâches simultanées avec <code>Promise.all</code>.</li>
    </ul>
</div>
<div class="col-md-12" id="callbacks-closures">
    <h3>Callbacks</h3>
    <p>
        Les <strong>callbacks</strong> sont des fonctions passées en argument à une autre fonction, qui sont ensuite exécutées à l’intérieur de cette fonction. 
        Ils permettent d’exécuter du code de manière asynchrone ou en réponse à un événement.
    </p>

    <h4>Pourquoi utiliser des callbacks ?</h4>
    <ul>
        <li><strong>Flexibilité :</strong> Vous pouvez passer différentes fonctions pour modifier le comportement d'une fonction principale.</li>
        <li><strong>Asynchronisme :</strong> Les callbacks sont souvent utilisés pour gérer des opérations asynchrones, comme les requêtes API.</li>
    </ul>

    <h4>Exemple simple</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple de callback simple</span>
<span class="keyword">function</span> afficherMessage(message, callback) {
    console.log(<span class="string">"Message principal :"</span>, message);
    callback(); <span class="comment">// Appelle la fonction callback</span>
}

<span class="comment">// Fonction callback</span>
<span class="keyword">function</span> afficherFin() {
    console.log(<span class="string">"Opération terminée."</span>);
}

<span class="comment">// Appel de la fonction avec un callback</span>
afficherMessage(<span class="string">"Bonjour, monde !"</span>, afficherFin);
</code></pre>
    </div>

    <h4>Gestion des opérations asynchrones</h4>
    <p>Les callbacks sont souvent utilisés pour gérer des opérations comme des délais ou des requêtes asynchrones :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple asynchrone avec setTimeout</span>
<span class="keyword">function</span> executerAvecDelai(callback) {
    console.log(<span class="string">"Début de l'opération..."</span>);
    setTimeout(() => {
        callback(); <span class="comment">// Exécute le callback après 2 secondes</span>
    }, <span class="number">2000</span>);
}

<span class="comment">// Callback</span>
<span class="keyword">function</span> finDelai() {
    console.log(<span class="string">"Opération terminée après 2 secondes."</span>);
}

executerAvecDelai(finDelai);
</code></pre>
    </div>
</div>
<div class="col-md-12">
    <h3>Closures</h3>
    <p>
        Une <strong>closure</strong> est une fonction qui se souvient de son environnement lexical, même lorsque la fonction est exécutée en dehors de cet environnement. 
        Cela signifie qu’une fonction interne peut accéder aux variables de sa fonction parente, même après que la fonction parente ait terminé son exécution.
    </p>

    <h4>Pourquoi utiliser les closures ?</h4>
    <ul>
        <li><strong>Encapsulation :</strong> Permet de créer des fonctions avec des variables privées.</li>
        <li><strong>Mémoire persistante :</strong> Les closures permettent de conserver l’état des variables entre plusieurs appels.</li>
    </ul>

    <h4>Exemple de base</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple simple de closure</span>
<span class="keyword">function</span> creerCompteur() {
    <span class="keyword">let</span> compteur = <span class="number">0</span>;

    <span class="comment">// Retourne une fonction qui utilise la variable compteur</span>
    <span class="keyword">return</span> <span class="keyword">function</span>() {
        compteur++;
        console.log(<span class="string">`Compteur : ${compteur}`</span>);
    };
}

<span class="comment">// Utilisation</span>
<span class="keyword">const</span> incrementer = creerCompteur();
incrementer(); <span class="comment">// Compteur : 1</span>
incrementer(); <span class="comment">// Compteur : 2</span>
incrementer(); <span class="comment">// Compteur : 3</span>
</code></pre>
    </div>

    <h4>Encapsulation avec closures</h4>
    <p>Les closures sont souvent utilisées pour encapsuler des données dans un environnement privé :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple d'encapsulation avec une closure</span>
<span class="keyword">function</span> banqueCompte(initial) {
    <span class="keyword">let</span> solde = initial;

    <span class="comment">// Retourne des fonctions pour gérer le compte</span>
    <span class="keyword">return</span> {
        deposer(montant) {
            solde += montant;
            console.log(<span class="string">`Solde après dépôt : ${solde}€`</span>);
        },
        retirer(montant) {
            <span class="keyword">if</span> (montant > solde) {
                console.log(<span class="string">"Fonds insuffisants."</span>);
            } <span class="keyword">else</span> {
                solde -= montant;
                console.log(<span class="string">`Solde après retrait : ${solde}€`</span>);
            }
        },
        consulter() {
            console.log(<span class="string">`Solde actuel : ${solde}€`</span>);
        }
    };
}

<span class="comment">// Utilisation</span>
<span class="keyword">const</span> monCompte = banqueCompte(<span class="number">100</span>);
monCompte.deposer(<span class="number">50</span>); <span class="comment">// Solde après dépôt : 150€</span>
monCompte.retirer(<span class="number">30</span>); <span class="comment">// Solde après retrait : 120€</span>
monCompte.consulter(); <span class="comment">// Solde actuel : 120€</span>
</code></pre>
    </div>

    <h4>Cas d’utilisation des closures</h4>
    <ul>
        <li><strong>Fonctions mémorisées :</strong> Créer des fonctions avec un état persistant (par ex. compteurs).</li>
        <li><strong>Encapsulation :</strong> Protéger les données en limitant leur accès via des méthodes.</li>
        <li><strong>Gestion d'événements :</strong> Utiliser des closures pour conserver des valeurs dans des gestionnaires d’événements.</li>
    </ul>
</div>
<div class="col-md-12" id="json">
    <h3>JSON (JavaScript Object Notation)</h3>
    <p>
        <strong>JSON</strong> (JavaScript Object Notation) est un format de données léger, facile à lire et à écrire pour les humains, 
        et facile à analyser et générer pour les machines. JSON est largement utilisé pour échanger des données entre un client (navigateur) 
        et un serveur.
    </p>

    <h4>Pourquoi utiliser JSON ?</h4>
    <ul>
        <li><strong>Interopérabilité :</strong> JSON est pris en charge par presque tous les langages de programmation.</li>
        <li><strong>Format léger :</strong> JSON est compact et facile à transporter sur le réseau.</li>
        <li><strong>Facilité de lecture :</strong> Sa structure est intuitive et proche de celle des objets JavaScript.</li>
        <li><strong>Standard web :</strong> JSON est devenu un standard pour l’échange de données dans les API RESTful.</li>
    </ul>

    <h4>Structure de JSON</h4>
    <p>JSON est constitué de paires clé-valeur, et il peut contenir :</p>
    <ul>
        <li><strong>Objets :</strong> Représentés par des accolades <code>{}</code>.</li>
        <li><strong>Tableaux :</strong> Représentés par des crochets <code>[]</code>.</li>
        <li><strong>Types de données :</strong> String, Number, Boolean, Array, Object, <code>null</code>.</li>
    </ul>

    <h4>Exemple d’un fichier JSON</h4>
    <div class="example-box">
        <pre><code class="language-json">{
    "nom": "Alice",
    "age": 30,
    "estAdmin": false,
    "hobbies": ["lecture", "voyage", "cuisine"],
    "adresse": {
        "ville": "Paris",
        "codePostal": 75001
    }
}</code></pre>
    </div>

    <h4>Manipulation de JSON en JavaScript</h4>
    <p>JavaScript offre deux méthodes principales pour travailler avec JSON :</p>
    <ul>
        <li>
            <strong><code>JSON.stringify(objet)</code> :</strong> Convertit un objet JavaScript en chaîne JSON.
        </li>
        <li>
            <strong><code>JSON.parse(jsonString)</code> :</strong> Convertit une chaîne JSON en objet JavaScript.
        </li>
    </ul>

    <h4>Exemple d’utilisation</h4>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple d'utilisation de JSON.stringify et JSON.parse</span>

<span class="comment">// Un objet JavaScript</span>
<span class="keyword">const</span> utilisateur = {
    nom: <span class="string">"Alice"</span>,
    age: <span class="number">30</span>,
    hobbies: [<span class="string">"lecture"</span>, <span class="string">"voyage"</span>],
    estAdmin: <span class="boolean">false</span>
};

<span class="comment">// Convertir l'objet en JSON</span>
<span class="keyword">const</span> jsonString = JSON.stringify(utilisateur);
console.log(jsonString);
/*
    {"nom":"Alice","age":30,"hobbies":["lecture","voyage"],"estAdmin":false}
*/

<span class="comment">// Convertir une chaîne JSON en objet</span>
<span class="keyword">const</span> jsonObjet = JSON.parse(jsonString);
console.log(jsonObjet);
/*
    {
        nom: "Alice",
        age: 30,
        hobbies: ["lecture", "voyage"],
        estAdmin: false
    }
*/
</code></pre>
    </div>

    <h4>Requêtes HTTP et JSON</h4>
    <p>JSON est fréquemment utilisé dans les requêtes API pour envoyer et recevoir des données. Voici un exemple avec <code>fetch</code> :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple d'utilisation de JSON avec fetch</span>
<span class="keyword">async</span> <span class="keyword">function</span> obtenirUtilisateurs() {
    <span class="keyword">try</span> {
        <span class="comment">// Effectuer une requête GET</span>
        <span class="keyword">const</span> response = <span class="keyword">await</span> fetch(<span class="string">"https://jsonplaceholder.typicode.com/users"</span>);
        <span class="comment">// Convertir la réponse en JSON</span>
        <span class="keyword">const</span> utilisateurs = <span class="keyword">await</span> response.json();
        console.log(utilisateurs);
    } <span class="keyword">catch</span> (erreur) {
        console.error(<span class="string">"Erreur lors de la récupération des utilisateurs :"</span>, erreur);
    }
}

obtenirUtilisateurs();
</code></pre>
    </div>

    <h4>Cas d’utilisation courants</h4>
    <ul>
        <li><strong>APIs :</strong> Échanger des données entre un client et un serveur.</li>
        <li><strong>Stockage local :</strong> Stocker des données dans <code>localStorage</code> ou <code>sessionStorage</code>.</li>
        <li><strong>Configuration :</strong> Utiliser JSON pour des fichiers de configuration.</li>
        <li><strong>Mock de données :</strong> Simuler des réponses de serveur pour les tests.</li>
    </ul>

    <h4>Bonnes pratiques avec JSON</h4>
    <ul>
        <li>Vérifiez toujours la validité de votre JSON avec des outils comme <a href="https://jsonlint.com" target="_blank">JSONLint</a>.</li>
        <li>Utilisez <code>try/catch</code> pour gérer les erreurs lors du parsing JSON.</li>
        <li>Évitez les références circulaires dans vos objets, car elles provoquent des erreurs avec <code>JSON.stringify</code>.</li>
        <li>Minimisez vos données pour réduire la taille de vos requêtes réseau.</li>
    </ul>
</div>
<div class="col-md-12" id="modules">
    <h3>Modules en JavaScript</h3>
    <p>
        Les <strong>modules</strong> en JavaScript permettent de mieux organiser le code en le divisant en plusieurs fichiers. Cela permet de maintenir un code plus propre, 
        réutilisable et facile à déboguer. Les modules facilitent l’importation et l’exportation de fonctionnalités entre différentes parties de l’application.
    </p>

    <h4>Pourquoi utiliser des modules ?</h4>
    <ul>
        <li><strong>Modularité :</strong> Divisez le code en blocs réutilisables pour éviter la duplication.</li>
        <li><strong>Maintenance :</strong> Facilite la gestion du code à long terme en le rendant plus lisible et organisé.</li>
        <li><strong>Scalabilité :</strong> Permet de développer des applications plus complexes avec une architecture bien structurée.</li>
        <li><strong>Réutilisation :</strong> Permet de partager du code entre différents projets ou modules.</li>
    </ul>

    <h4>Les types de modules en JavaScript</h4>
    <p>En JavaScript, il existe deux principaux systèmes pour gérer les modules :</p>
    <ul>
        <li><strong>Modules ES6 :</strong> La syntaxe native de JavaScript pour l'importation et l'exportation de modules.</li>
        <li><strong>CommonJS :</strong> Un système de modules principalement utilisé côté serveur (Node.js).</li>
    </ul>

    <h4>Modules ES6</h4>
    <p>Les modules ES6 sont maintenant la norme pour la gestion des modules en JavaScript, notamment dans les navigateurs modernes et les outils de bundling comme Webpack.</p>
    <ul>
        <li><strong><code>export</code> :</strong> Permet d'exporter une fonction, un objet, ou une variable d'un module.</li>
        <li><strong><code>import</code> :</strong> Permet d'importer des fonctions, objets ou variables depuis un autre module.</li>
    </ul>

    <h4>Exemple d’utilisation des Modules ES6</h4>
    <p>Imaginons que vous avez deux fichiers : <code>calcul.js</code> et <code>app.js</code>.</p>

    <h5>Fichier <code>calcul.js</code></h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Fichier calcul.js - Contient des fonctions pour des calculs</span>

// Exportation d'une fonction
<span class="keyword">export</span> <span class="keyword">function</span> addition(a, b) {
    <span class="keyword">return</span> a + b;
}

<span class="keyword">export</span> <span class="keyword">function</span> soustraction(a, b) {
    <span class="keyword">return</span> a - b;
}

<span class="keyword">export</span> <span class="keyword">const</span> pi = <span class="number">3.14</span>;
</code></pre>
    </div>

    <h5>Fichier <code>app.js</code></h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Fichier app.js - Utilise les fonctions du module calcul.js</span>

// Importation des fonctions et variables depuis calcul.js
<span class="keyword">import</span> { addition, soustraction, pi } <span class="keyword">from</span> <span class="string">"./calcul.js"</span>;

console.log(addition(<span class="number">5</span>, <span class="number">3</span>));  <span class="comment">// 8</span>
console.log(soustraction(<span class="number">5</span>, <span class="number">3</span>));  <span class="comment">// 2</span>
console.log(pi);  <span class="comment">// 3.14</span>
</code></pre>
    </div>

    <h4>Importation et exportation par défaut</h4>
    <p>Un module peut également exporter un seul élément par défaut à l'aide de <code>export default</code>. Cela simplifie l'importation d'un module avec un seul export.</p>

    <h5>Exemple d'exportation par défaut</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Fichier calcul.js - Exportation par défaut</span>
<span class="keyword">export default</span> <span class="keyword">function</span> multiplication(a, b) {
    <span class="keyword">return</span> a * b;
}
</code></pre>
    </div>

    <h5>Importation par défaut</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Fichier app.js - Importation de la fonction par défaut</span>
<span class="keyword">import</span> multiplication <span class="keyword">from</span> <span class="string">"./calcul.js"</span>;

console.log(multiplication(<span class="number">5</span>, <span class="number">3</span>));  <span class="comment">// 15</span>
</code></pre>
    </div>

    <h4>Cas d’utilisation des Modules</h4>
    <ul>
        <li><strong>Organiser le code :</strong> Diviser un code complexe en plusieurs fichiers pour améliorer la lisibilité et la maintenance.</li>
        <li><strong>Réutilisation :</strong> Créer des modules réutilisables pour partager du code entre plusieurs projets.</li>
        <li><strong>Gestion des dépendances :</strong> Utiliser des modules pour gérer des bibliothèques externes avec des outils comme NPM.</li>
        <li><strong>Scalabilité :</strong> Développer des applications complexes en répartissant les responsabilités entre différents modules.</li>
    </ul>

    <h4>Utilisation des Modules avec un Bundler (Webpack)</h4>
    <p>Les modules ES6 sont très efficaces dans un environnement de développement avec un bundler comme Webpack. 
        Ce dernier permet de regrouper plusieurs fichiers JavaScript en un seul fichier pour optimiser les performances du site.
    </p>
    <ul>
        <li><strong>Installation :</strong> Vous pouvez installer Webpack et ses dépendances via <code>npm</code> ou <code>yarn</code>.</li>
        <li><strong>Configuration :</strong> Utilisez un fichier de configuration pour définir les points d’entrée et de sortie des fichiers modules.</li>
        <li><strong>Utilisation :</strong> Après avoir configuré Webpack, vous pouvez importez vos fichiers JavaScript et ils seront automatiquement regroupés.</li>
    </ul>

    <h4>Conclusion</h4>
    <p>Les modules JavaScript permettent de structurer et de maintenir efficacement des applications complexes. Utiliser la syntaxe des modules ES6, 
    combinée à des outils modernes comme Webpack, rend le code plus modulaire, réutilisable et optimisé.</p>
</div>


    </div>
</div>
<div class="col-md-12" id="fetch">
    <h3>API Fetch</h3>
    <p>
        <strong>Fetch</strong> est une interface moderne introduite avec ES6 pour effectuer des requêtes HTTP. 
        Elle remplace l'ancienne méthode <code>XMLHttpRequest</code>, offrant une syntaxe plus simple et intuitive basée sur des Promises.
    </p>

    <h4>Pourquoi utiliser l'API Fetch ?</h4>
    <ul>
        <li><strong>Simplicité :</strong> Syntaxe claire et lisible pour effectuer des requêtes asynchrones.</li>
        <li><strong>Basée sur des Promises :</strong> Compatible avec <code>then</code>, <code>catch</code>, et <code>async/await</code>.</li>
        <li><strong>Supporte les options avancées :</strong> En-têtes personnalisés, méthodes HTTP (GET, POST, PUT, DELETE, etc.), gestion des corps de requêtes.</li>
    </ul>

    <h4>Syntaxe de base</h4>
    <p>La méthode <code>fetch()</code> retourne une Promise qui se résout avec une réponse HTTP (ou est rejetée en cas d'erreur réseau).</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple simple avec fetch</span>
<span class="keyword">fetch</span>(<span class="string">"https://jsonplaceholder.typicode.com/posts"</span>)
    .<span class="keyword">then</span>((response) => {
        <span class="comment">// Vérifie si la réponse est OK</span>
        <span class="keyword">if</span> (!response.ok) {
            <span class="keyword">throw</span> <span class="keyword">new</span> Error(<span class="string">`Erreur HTTP ! Statut : ${response.status}`</span>);
        }
        <span class="keyword">return</span> response.json(); <span class="comment">// Convertit en JSON</span>
    })
    .<span class="keyword">then</span>((data) => {
        console.log(data); <span class="comment">// Affiche les données reçues</span>
    })
    .<span class="keyword">catch</span>((error) => {
        console.error(<span class="string">"Erreur lors de la requête :"</span>, error);
    });
</code></pre>
    </div>

    <h4>Utilisation avec <code>async/await</code></h4>
    <p>Pour rendre le code encore plus lisible, vous pouvez utiliser <code>async/await</code> avec Fetch :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple avec async/await</span>
<span class="keyword">async</span> <span class="keyword">function</span> obtenirPosts() {
    <span class="keyword">try</span> {
        <span class="comment">// Effectuer une requête GET</span>
        <span class="keyword">const</span> response = <span class="keyword">await</span> fetch(<span class="string">"https://jsonplaceholder.typicode.com/posts"</span>);
        <span class="comment">// Vérifie si la réponse est OK</span>
        <span class="keyword">if</span> (!response.ok) {
            <span class="keyword">throw</span> <span class="keyword">new</span> Error(<span class="string">`Erreur HTTP ! Statut : ${response.status}`</span>);
        }
        <span class="comment">// Convertit la réponse en JSON</span>
        <span class="keyword">const</span> data = <span class="keyword">await</span> response.json();
        console.log(data); <span class="comment">// Affiche les données</span>
    } <span class="keyword">catch</span> (erreur) {
        console.error(<span class="string">"Erreur :"</span>, erreur);
    }
}

obtenirPosts();
</code></pre>
    </div>

    <h4>Options avancées de Fetch</h4>
    <p>Fetch permet de configurer la requête avec un deuxième argument contenant des options :</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple d'envoi de données avec Fetch</span>
<span class="keyword">async</span> <span class="keyword">function</span> envoyerDonnees() {
    <span class="keyword">const</span> donnees = {
        titre: <span class="string">"Nouveau post"</span>,
        contenu: <span class="string">"Ceci est un exemple de contenu."</span>
    };

    <span class="keyword">try</span> {
        <span class="keyword">const</span> response = <span class="keyword">await</span> fetch(<span class="string">"https://jsonplaceholder.typicode.com/posts"</span>, {
            <span class="comment">// Configuration de la requête</span>
            method: <span class="string">"POST"</span>,
            headers: {
                <span class="string">"Content-Type"</span>: <span class="string">"application/json"</span>
            },
            body: JSON.stringify(donnees) <span class="comment">// Corps de la requête</span>
        });

        <span class="keyword">if</span> (!response.ok) {
            <span class="keyword">throw</span> <span class="keyword">new</span> Error(<span class="string">`Erreur HTTP : ${response.status}`</span>);
        }

        <span class="keyword">const</span> result = <span class="keyword">await</span> response.json();
        console.log(<span class="string">"Données envoyées avec succès :"</span>, result);
    } <span class="keyword">catch</span> (erreur) {
        console.error(<span class="string">"Erreur :"</span>, erreur);
    }
}

envoyerDonnees();
</code></pre>
    </div>

    <h4>Cas d’utilisation courants</h4>
    <ul>
        <li><strong>Requêtes API :</strong> Communication avec un serveur pour récupérer ou envoyer des données.</li>
        <li><strong>Chargement dynamique :</strong> Charger des contenus dynamiques sans recharger la page (AJAX).</li>
        <li><strong>Authentification :</strong> Envoyer des identifiants utilisateur pour se connecter à un service.</li>
        <li><strong>Opérations CRUD :</strong> Créer, lire, mettre à jour ou supprimer des ressources sur un serveur.</li>
    </ul>

    <h4>Bonnes pratiques</h4>
    <ul>
        <li>Vérifiez toujours le statut de la réponse avec <code>response.ok</code> avant de traiter les données.</li>
        <li>Utilisez <code>try/catch</code> pour gérer les erreurs, notamment les problèmes de réseau ou de serveur.</li>
        <li>Spécifiez les en-têtes nécessaires pour les requêtes POST, PUT ou DELETE.</li>
        <li>Minimisez les requêtes réseau en regroupant les données nécessaires.</li>
    </ul>
</div>
<div class="content-section" id="js-expert">
    <h1><i class="fas fa-brain icon"></i> JavaScript Expert</h1>
    <p>
        Le niveau expert en JavaScript est destiné aux développeurs souhaitant maîtriser les aspects les plus avancés et les techniques professionnelles du langage. 
        Ce niveau explore des fonctionnalités modernes et des concepts complexes pour développer des applications hautement performantes et évolutives.
    </p>
    <p>
        Dans cette section, vous apprendrez à optimiser le traitement des données, gérer des opérations complexes avec les workers, utiliser des fonctionnalités avancées de JavaScript ES6+, 
        et améliorer la robustesse de vos applications grâce aux tests unitaires et à la gestion des erreurs. Vous explorerez également des concepts essentiels pour les Progressive Web Apps (PWA) et les environnements hors ligne.
    </p>

    <h2>Contenu des cours</h2>
    <ul>
        <li>
            <strong>Web Storage :</strong> Manipulation efficace des données stockées localement avec <code>localStorage</code> et <code>sessionStorage</code>, 
            pour des fonctionnalités telles que les sauvegardes automatiques et les préférences utilisateur.
        </li>
        <li>
            <strong>Programmation Orientée Objet Expert :</strong> Exploration approfondie de la POO, incluant l’héritage complexe, les mixins, et les design patterns en JavaScript.
        </li>
        <li>
            <strong>Web Workers :</strong> Utilisation des threads JavaScript pour exécuter des tâches intensives en arrière-plan sans bloquer l’interface utilisateur.
        </li>
        <li>
            <strong>Gestion des Erreurs et Debugging :</strong> Techniques avancées pour détecter, capturer et résoudre efficacement les erreurs dans des applications complexes.
        </li>
        <li>
            <strong>Service Workers et PWA :</strong> Développement d'applications web modernes capables de fonctionner hors ligne, avec des mises à jour automatiques et des notifications push.
        </li>
        <li>
            <strong>Synthaxe Moderne ES6+ :</strong> Utilisation des fonctionnalités avancées de JavaScript telles que les modules, les destructurations, les spread/rest operators, et les itérateurs.
        </li>
        <li>
            <strong>Tests Unitaires :</strong> Introduction aux frameworks comme Jest ou Mocha pour écrire et automatiser des tests unitaires, garantissant la qualité du code.
        </li>
    </ul>
    
    <p>
        Chaque cours est accompagné d'exemples pratiques, de défis interactifs, et de projets avancés pour mettre en pratique vos connaissances. 
        À la fin de cette section, vous serez équipé pour créer des applications JavaScript professionnelles, optimisées et robustes, capables de répondre aux exigences les plus complexes.
    </p>

    <div class="row">

    <div class="col-md-12" id="webstorage">
    <h3>Web Storage</h3>
    <p>
        Le <strong>Web Storage</strong> est une API JavaScript qui permet de stocker des données côté client directement dans le navigateur. 
        Il se compose de deux types principaux de stockage : <code>localStorage</code> et <code>sessionStorage</code>. 
        Ces méthodes offrent une manière simple et efficace de conserver des informations utilisateur pour des applications web.
    </p>

    <h4>Pourquoi utiliser le Web Storage ?</h4>
    <ul>
        <li><strong>Persistant :</strong> Les données peuvent persister après le rechargement ou la fermeture du navigateur (avec <code>localStorage</code>).</li>
        <li><strong>Accessible :</strong> Les données sont facilement accessibles via une simple API JavaScript.</li>
        <li><strong>Sécurisé :</strong> Les données sont spécifiques au domaine et ne sont pas envoyées au serveur automatiquement.</li>
        <li><strong>Rapide :</strong> Idéal pour stocker des préférences utilisateur, des jetons de session, ou des données temporaires.</li>
    </ul>

    <h4>Différences entre <code>localStorage</code> et <code>sessionStorage</code></h4>
    <table>
        <thead>
            <tr>
                <th>Caractéristique</th>
                <th><code>localStorage</code></th>
                <th><code>sessionStorage</code></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Persistance</td>
                <td>Les données persistent après la fermeture du navigateur.</td>
                <td>Les données sont supprimées à la fermeture de l’onglet ou de la fenêtre.</td>
            </tr>
            <tr>
                <td>Portée</td>
                <td>Partagée entre tous les onglets et fenêtres du même domaine.</td>
                <td>Spécifique à l’onglet ou la fenêtre active.</td>
            </tr>
            <tr>
                <td>Taille</td>
                <td>5 à 10 Mo (selon le navigateur).</td>
                <td>5 à 10 Mo (selon le navigateur).</td>
            </tr>
        </tbody>
    </table>

    <h4>Fonctionnalités principales</h4>
    <ul>
        <li><code>setItem(key, value)</code> : Enregistre une donnée avec une clé.</li>
        <li><code>getItem(key)</code> : Récupère une donnée à partir d'une clé.</li>
        <li><code>removeItem(key)</code> : Supprime une donnée à partir d'une clé.</li>
        <li><code>clear()</code> : Supprime toutes les données stockées.</li>
        <li><code>length</code> : Retourne le nombre d'éléments stockés.</li>
    </ul>

    <h4>Exemples pratiques</h4>

    <h5>Stocker et récupérer des données</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Stocker une donnée</span>
localStorage.setItem(<span class="string">"utilisateur"</span>, <span class="string">"Alice"</span>);

<span class="comment">// Récupérer une donnée</span>
<span class="keyword">const</span> utilisateur = localStorage.getItem(<span class="string">"utilisateur"</span>);
console.log(utilisateur); <span class="comment">// Alice</span>
</code></pre>
    </div>

    <h5>Supprimer une donnée ou tout effacer</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Supprimer une donnée</span>
localStorage.removeItem(<span class="string">"utilisateur"</span>);

<span class="comment">// Supprimer toutes les données</span>
localStorage.clear();
</code></pre>
    </div>

    <h5>Manipuler des objets avec Web Storage</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Stocker un objet après sérialisation</span>
<span class="keyword">const</span> utilisateur = {
    nom: <span class="string">"Alice"</span>,
    age: <span class="number">30</span>,
    estAdmin: <span class="boolean">true</span>
};

localStorage.setItem(<span class="string">"utilisateur"</span>, JSON.stringify(utilisateur));

<span class="comment">// Récupérer et désérialiser l'objet</span>
<span class="keyword">const</span> utilisateurRecupere = JSON.parse(localStorage.getItem(<span class="string">"utilisateur"</span>));
console.log(utilisateurRecupere); <span class="comment">// { nom: "Alice", age: 30, estAdmin: true }</span>
</code></pre>
    </div>

    <h4>Cas d’utilisation courants</h4>
    <ul>
        <li><strong>Jetons de session :</strong> Stocker des tokens pour l’authentification (ex : OAuth).</li>
        <li><strong>Préférences utilisateur :</strong> Sauvegarder les thèmes, langues ou paramètres de personnalisation.</li>
        <li><strong>Panier d’achat :</strong> Conserver les articles ajoutés au panier dans une application e-commerce.</li>
        <li><strong>Statistiques locales :</strong> Enregistrer des données non sensibles pour l’analyse hors ligne.</li>
    </ul>

    <h4>Bonnes pratiques</h4>
    <ul>
        <li>Utilisez <code>JSON.stringify</code> pour stocker des objets et <code>JSON.parse</code> pour les récupérer.</li>
        <li>Évitez de stocker des données sensibles comme des mots de passe ou des informations bancaires.</li>
        <li>Nettoyez régulièrement les données inutilisées pour optimiser l'espace.</li>
        <li>Utilisez <code>sessionStorage</code> pour les données temporaires spécifiques à un onglet.</li>
    </ul>
</div>
<div class="col-md-12" id="poo-expert">
    <h3>Programmation Orientée Objet (POO) Expert</h3>
    <p>
        La <strong>Programmation Orientée Objet (POO)</strong> au niveau expert en JavaScript consiste à maîtriser des concepts avancés tels que 
        l’héritage complexe, les mixins, les design patterns, et l’utilisation efficace des classes dans des applications scalables et maintenables.
        Ce niveau approfondit les bases pour concevoir des systèmes robustes avec une architecture modulaire.
    </p>

    <h4>Concepts avancés de la POO</h4>
    <ul>
        <li><strong>Héritage complexe :</strong> Implémentation d'héritages multiples avec des classes et des prototypes.</li>
        <li><strong>Mixins :</strong> Ajout de fonctionnalités partagées à plusieurs classes sans héritage direct.</li>
        <li><strong>Encapsulation avancée :</strong> Gestion des membres privés et protégés dans les classes.</li>
        <li><strong>Polymorphisme :</strong> Permet d’utiliser une interface commune pour différentes implémentations.</li>
        <li><strong>Design Patterns :</strong> Application de modèles comme Singleton, Factory, ou Observer.</li>
    </ul>

    <h4>Héritage complexe</h4>
    <p>En JavaScript, l’héritage est basé sur les prototypes, mais avec les classes ES6, il est simplifié et plus intuitif.</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple d'héritage complexe</span>
<span class="keyword">class</span> Animal {
    <span class="keyword">constructor</span>(nom) {
        <span class="keyword">this</span>.nom = nom;
    }

    parler() {
        console.log(<span class="string">`${this.nom} fait un bruit.`</span>);
    }
}

<span class="keyword">class</span> Chien <span class="keyword">extends</span> Animal {
    parler() {
        console.log(<span class="string">`${this.nom} aboie.`</span>);
    }
}

<span class="keyword">class</span> Chat <span class="keyword">extends</span> Animal {
    parler() {
        console.log(<span class="string">`${this.nom} miaule.`</span>);
    }
}

<span class="comment">// Utilisation</span>
<span class="keyword">const</span> rex = <span class="keyword">new</span> Chien(<span class="string">"Rex"</span>);
rex.parler(); <span class="comment">// Rex aboie.</span>

<span class="keyword">const</span> felix = <span class="keyword">new</span> Chat(<span class="string">"Félix"</span>);
felix.parler(); <span class="comment">// Félix miaule.</span>
</code></pre>
    </div>

    <h4>Mixins</h4>
    <p>Les mixins permettent d’ajouter des fonctionnalités à plusieurs classes sans utiliser l’héritage direct.</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple de Mixin</span>
<span class="keyword">const</span> Volant = {
    voler() {
        console.log(<span class="string">`${this.nom} peut voler !`</span>);
    }
};

<span class="keyword">class</span> Oiseau {
    <span class="keyword">constructor</span>(nom) {
        <span class="keyword">this</span>.nom = nom;
    }
}

<span class="keyword">Object</span>.assign(Oiseau.prototype, Volant);

<span class="comment">// Utilisation</span>
<span class="keyword">const</span> aigle = <span class="keyword">new</span> Oiseau(<span class="string">"Aigle"</span>);
aigle.voler(); <span class="comment">// Aigle peut voler !</span>
</code></pre>
    </div>

    <h4>Encapsulation avancée</h4>
    <p>
        Les membres privés ou protégés sont essentiels pour contrôler l’accès aux propriétés ou méthodes d’une classe. 
        En JavaScript, cela peut être réalisé avec des symboles ou le mot-clé <code>#</code>.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple d'encapsulation avec membres privés</span>
<span class="keyword">class</span> CompteBancaire {
    <span class="keyword">constructor</span>(soldeInitial) {
        <span class="keyword">this</span>.<span class="keyword">#solde</span> = soldeInitial; <span class="comment">// Membres privés</span>
    }

    <span class="keyword">#verifierFonds</span>(montant) {
        <span class="keyword">return</span> montant <= <span class="keyword">this</span>.<span class="keyword">#solde</span>;
    }

    retirer(montant) {
        <span class="keyword">if</span> (<span class="keyword">this</span>.<span class="keyword">#verifierFonds</span>(montant)) {
            <span class="keyword">this</span>.<span class="keyword">#solde</span> -= montant;
            console.log(<span class="string">`Retrait de ${montant}€. Solde restant : ${this.#solde}€`</span>);
        } <span class="keyword">else</span> {
            console.log(<span class="string">"Fonds insuffisants."</span>);
        }
    }
}

<span class="comment">// Utilisation</span>
<span class="keyword">const</span> compte = <span class="keyword">new</span> CompteBancaire(<span class="number">1000</span>);
compte.retirer(<span class="number">200</span>); <span class="comment">// Retrait de 200€. Solde restant : 800€</span>
compte.retirer(<span class="number">900</span>); <span class="comment">// Fonds insuffisants.</span>
</code></pre>
    </div>

    <h4>Polymorphisme</h4>
    <p>Le polymorphisme permet d’appeler des méthodes sur des objets dérivés, en garantissant un comportement spécifique à chaque sous-classe.</p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple de polymorphisme</span>
<span class="keyword">class</span> Forme {
    aire() {
        <span class="keyword">throw</span> <span class="keyword">new</span> Error(<span class="string">"Méthode non implémentée."</span>);
    }
}

<span class="keyword">class</span> Cercle <span class="keyword">extends</span> Forme {
    <span class="keyword">constructor</span>(rayon) {
        <span class="keyword">super</span>();
        <span class="keyword">this</span>.rayon = rayon;
    }

    aire() {
        <span class="keyword">return</span> Math.PI * <span class="keyword">this</span>.rayon ** <span class="number">2</span>;
    }
}

<span class="keyword">class</span> Rectangle <span class="keyword">extends</span> Forme {
    <span class="keyword">constructor</span>(largeur, hauteur) {
        <span class="keyword">super</span>();
        <span class="keyword">this</span>.largeur = largeur;
        <span class="keyword">this</span>.hauteur = hauteur;
    }

    aire() {
        <span class="keyword">return</span> <span class="keyword">this</span>.largeur * <span class="keyword">this</span>.hauteur;
    }
}

<span class="comment">// Utilisation</span>
<span class="keyword">const</span> formes = [
    <span class="keyword">new</span> Cercle(<span class="number">5</span>),
    <span class="keyword">new</span> Rectangle(<span class="number">4</span>, <span class="number">6</span>)
];

formes.forEach((forme) => {
    console.log(<span class="string">`Aire : ${forme.aire()}`</span>);
});
</code></pre>
    </div>

    <h4>Design Patterns</h4>
    <ul>
        <li><strong>Singleton :</strong> Créer une seule instance d’une classe pour tout un projet.</li>
        <li><strong>Factory :</strong> Générer des objets sans spécifier leur classe exacte.</li>
        <li><strong>Observer :</strong> Permet à un objet de notifier automatiquement les changements à ses abonnés.</li>
    </ul>
</div>
<div class="col-md-12" id="web-workers">
    <h3>Web Workers</h3>
    <p>
        Les <strong>Web Workers</strong> sont des scripts qui permettent d’exécuter du code JavaScript en arrière-plan, indépendamment du thread principal du navigateur. 
        Cela empêche les tâches intensives (comme les calculs complexes ou les requêtes longues) de bloquer l’interface utilisateur, offrant une meilleure expérience utilisateur.
    </p>

    <h4>Pourquoi utiliser les Web Workers ?</h4>
    <ul>
        <li><strong>Performances :</strong> Exécuter des tâches lourdes sans affecter l’interactivité de la page.</li>
        <li><strong>Multi-threading :</strong> Permet de tirer parti du traitement parallèle.</li>
        <li><strong>Expérience utilisateur :</strong> Maintenir une interface réactive tout en exécutant des calculs ou des traitements en arrière-plan.</li>
    </ul>

    <h4>Types de Web Workers</h4>
    <ul>
        <li><strong>Dedicated Workers :</strong> Associés à un seul script principal, parfaits pour des tâches spécifiques.</li>
        <li><strong>Shared Workers :</strong> Partagés entre plusieurs scripts principaux, utile pour gérer des ressources communes.</li>
        <li><strong>Service Workers :</strong> Utilisés pour les Progressive Web Apps (PWA), permettant des fonctionnalités comme le cache hors ligne et les notifications push.</li>
    </ul>

    <h4>Créer et utiliser un Web Worker</h4>
    <p>Un Web Worker est défini dans un fichier JavaScript séparé. Voici un exemple complet :</p>

    <h5>Fichier du Worker (<code>worker.js</code>)</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// worker.js - Fichier exécuté en arrière-plan</span>

<span class="comment">// Réception d'un message depuis le thread principal</span>
self.addEventListener(<span class="string">"message"</span>, (event) => {
    <span class="keyword">const</span> nombre = event.data;

    <span class="comment">// Calcul intensif</span>
    <span class="keyword">let</span> resultat = <span class="number">0</span>;
    <span class="keyword">for</span> (<span class="keyword">let</span> i = <span class="number">1</span>; i <= nombre; i++) {
        resultat += i;
    }

    <span class="comment">// Envoi du résultat au thread principal</span>
    self.postMessage(resultat);
});
</code></pre>
    </div>

    <h5>Script principal (<code>main.js</code>)</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// main.js - Script principal</span>

<span class="comment">// Création d'un Worker</span>
<span class="keyword">const</span> worker = <span class="keyword">new</span> Worker(<span class="string">"worker.js"</span>);

<span class="comment">// Envoi d'un message au Worker</span>
worker.postMessage(<span class="number">1000000</span>);

<span class="comment">// Réception du résultat</span>
worker.addEventListener(<span class="string">"message"</span>, (event) => {
    console.log(<span class="string">`Résultat : ${event.data}`</span>);
});

<span class="comment">// Gestion des erreurs</span>
worker.addEventListener(<span class="string">"error"</span>, (error) => {
    console.error(<span class="string">`Erreur dans le Worker : ${error.message}`</span>);
});
</code></pre>
    </div>

    <h4>Shared Workers</h4>
    <p>Les <strong>Shared Workers</strong> peuvent être partagés entre plusieurs fenêtres ou onglets du même domaine :</p>
    <h5>Fichier Shared Worker (<code>shared-worker.js</code>)</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// shared-worker.js</span>

<span class="comment">// Gestion des connexions multiples</span>
self.addEventListener(<span class="string">"connect"</span>, (event) => {
    <span class="keyword">const</span> port = event.ports[<span class="number">0</span>];

    port.addEventListener(<span class="string">"message"</span>, (e) => {
        <span class="keyword">const</span> data = e.data;
        port.postMessage(<span class="string">`Données reçues : ${data}`</span>);
    });

    port.start();
});
</code></pre>
    </div>

    <h5>Utilisation d’un Shared Worker (<code>main.js</code>)</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// main.js</span>

<span class="comment">// Création d'un Shared Worker</span>
<span class="keyword">const</span> sharedWorker = <span class="keyword">new</span> SharedWorker(<span class="string">"shared-worker.js"</span>);
<span class="keyword">const</span> port = sharedWorker.port;

<span class="comment">// Envoi de données</span>
port.postMessage(<span class="string">"Hello depuis le script principal"</span>);

<span class="comment">// Réception de données</span>
port.addEventListener(<span class="string">"message"</span>, (event) => {
    console.log(event.data); <span class="comment">// Affiche : "Données reçues : Hello depuis le script principal"</span>
});

port.start();
</code></pre>
    </div>

    <h4>Cas d’utilisation courants</h4>
    <ul>
        <li><strong>Calculs intensifs :</strong> Traitement de grandes quantités de données ou algorithmes complexes.</li>
        <li><strong>Analyse de données :</strong> Parsing de fichiers volumineux (JSON, CSV) sans ralentir l'interface utilisateur.</li>
        <li><strong>Mises à jour en temps réel :</strong> Gérer les connexions WebSocket ou les notifications.</li>
        <li><strong>Manipulation d’images ou vidéos :</strong> Traitement en arrière-plan avec des librairies comme <code>Canvas</code>.</li>
    </ul>

    <h4>Bonnes pratiques</h4>
    <ul>
        <li>Utilisez les Workers pour des tâches longues ou intensives uniquement.</li>
        <li>Communiquez de manière efficace en limitant les messages envoyés entre le Worker et le thread principal.</li>
        <li>Gérez les erreurs dans le Worker avec des écouteurs d'événements.</li>
        <li>Nettoyez les Workers inutilisés en appelant <code>worker.terminate()</code> pour libérer des ressources.</li>
    </ul>
</div>
<div class="col-md-12" id="gestion-erreurs-debugging">
    <h3>Gestion des Erreurs et Debugging</h3>
    <p>
        En JavaScript, la gestion des erreurs et le debugging sont essentiels pour assurer la robustesse et la fiabilité des applications. 
        Une bonne gestion des erreurs permet d'anticiper et de traiter les problèmes, tandis que le debugging aide à localiser et corriger les bugs.
    </p>

    <h4>Pourquoi gérer les erreurs ?</h4>
    <ul>
        <li><strong>Prévenir les plantages :</strong> Empêche une erreur d’interrompre complètement l’exécution du programme.</li>
        <li><strong>Améliorer l’expérience utilisateur :</strong> Fournir des messages d’erreur clairs au lieu de comportements inattendus.</li>
        <li><strong>Faciliter le debugging :</strong> Identifier rapidement les causes des problèmes grâce à une gestion structurée.</li>
    </ul>

    <h4>Les erreurs en JavaScript</h4>
    <ul>
        <li><strong>SyntaxError :</strong> Erreur de syntaxe, détectée lors de l’analyse du code.</li>
        <li><strong>ReferenceError :</strong> Variable ou fonction non définie.</li>
        <li><strong>TypeError :</strong> Utilisation d’une valeur avec un type inapproprié.</li>
        <li><strong>RangeError :</strong> Utilisation d'une valeur en dehors d'une plage autorisée.</li>
        <li><strong>Custom Error :</strong> Erreurs définies par le développeur.</li>
    </ul>

    <h4>Gestion des erreurs avec <code>try...catch</code></h4>
    <p>
        Le bloc <code>try...catch</code> permet de capturer les erreurs et d’exécuter un code alternatif.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple simple avec try...catch</span>
<span class="keyword">try</span> {
    <span class="comment">// Code qui peut générer une erreur</span>
    console.log(utilisateur.nom); <span class="comment">// ReferenceError : utilisateur n'est pas défini</span>
} <span class="keyword">catch</span> (erreur) {
    console.error(<span class="string">"Une erreur est survenue :"</span>, erreur.message);
} <span class="comment">// Continue l'exécution sans plantage</span>
</code></pre>
    </div>

    <h4>Lancer des erreurs avec <code>throw</code></h4>
    <p>
        Vous pouvez créer vos propres erreurs personnalisées en utilisant <code>throw</code> pour signaler des conditions spécifiques.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple avec throw</span>
<span class="keyword">function</span> verifierAge(age) {
    <span class="keyword">if</span> (age < <span class="number">18</span>) {
        <span class="keyword">throw</span> <span class="keyword">new</span> Error(<span class="string">"L'âge doit être supérieur ou égal à 18."</span>);
    }
    console.log(<span class="string">"Âge valide :"</span>, age);
}

<span class="keyword">try</span> {
    verifierAge(<span class="number">15</span>);
} <span class="keyword">catch</span> (erreur) {
    console.error(erreur.message); <span class="comment">// L'âge doit être supérieur ou égal à 18.</span>
}
</code></pre>
    </div>

    <h4>Déboguer avec <code>console</code></h4>
    <p>
        L'objet <code>console</code> est un outil puissant pour afficher des informations dans la console du navigateur :
    </p>
    <ul>
        <li><code>console.log()</code> : Affiche des informations générales.</li>
        <li><code>console.error()</code> : Affiche une erreur.</li>
        <li><code>console.warn()</code> : Affiche un avertissement.</li>
        <li><code>console.table()</code> : Affiche des données sous forme de tableau.</li>
    </ul>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemples de console</span>
<span class="keyword">const</span> utilisateur = { nom: <span class="string">"Alice"</span>, age: <span class="number">30</span> };
console.log(utilisateur); <span class="comment">// Affiche l'objet</span>
console.table(utilisateur); <span class="comment">// Affiche l'objet sous forme de tableau</span>
console.warn(<span class="string">"Attention : Variable non utilisée."</span>);
console.error(<span class="string">"Erreur critique détectée."</span>);
</code></pre>
    </div>

    <h4>Déboguer avec les outils du navigateur</h4>
    <p>
        Les navigateurs modernes offrent des outils de développement puissants :
    </p>
    <ul>
        <li><strong>Breakpoints :</strong> Permet de mettre en pause l'exécution du code pour analyser son état.</li>
        <li><strong>Call Stack :</strong> Affiche la pile d’appels pour retracer l’origine d’une erreur.</li>
        <li><strong>Watch Variables :</strong> Surveillez des variables spécifiques pendant l'exécution.</li>
        <li><strong>Network Tab :</strong> Vérifie les requêtes réseau pour identifier les erreurs côté serveur.</li>
    </ul>

    <h4>Gestion globale des erreurs</h4>
    <p>
        Vous pouvez capturer toutes les erreurs non gérées avec <code>window.onerror</code> ou <code>window.addEventListener('error')</code>.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Gestion globale des erreurs</span>
window.addEventListener(<span class="string">"error"</span>, (event) => {
    console.error(<span class="string">`Erreur capturée globalement : ${event.message}`</span>);
});
</code></pre>
    </div>

    <h4>Cas d’utilisation courants</h4>
    <ul>
        <li><strong>Validation des entrées :</strong> Vérifiez les données utilisateur avant de les traiter.</li>
        <li><strong>Requêtes API :</strong> Gérez les erreurs de réseau ou de réponse.</li>
        <li><strong>Gestion des dépendances :</strong> Anticipez les erreurs causées par des modules ou scripts externes.</li>
    </ul>

    <h4>Bonnes pratiques</h4>
    <ul>
        <li>Utilisez <code>try...catch</code> uniquement pour les blocs susceptibles de générer des erreurs.</li>
        <li>Écrivez des messages d'erreur clairs et descriptifs pour faciliter le debugging.</li>
        <li>Gérez les erreurs spécifiques pour éviter des comportements imprévisibles.</li>
        <li>Utilisez les outils de développement pour localiser et résoudre les bugs rapidement.</li>
    </ul>
</div>
<div class="col-md-12" id="service-workers-pwa">
    <h3>Service Workers & Progressive Web Apps (PWA)</h3>
    <p>
        Les <strong>Service Workers</strong> sont des scripts exécutés en arrière-plan par le navigateur, indépendamment des pages web. Ils sont une composante essentielle des <strong>Progressive Web Apps (PWA)</strong>, 
        offrant des fonctionnalités avancées comme le support hors ligne, les notifications push, et la mise en cache optimisée des ressources.
    </p>

    <h4>Pourquoi utiliser les Service Workers ?</h4>
    <ul>
        <li><strong>Fonctionnalité hors ligne :</strong> Permet de charger des pages même sans connexion Internet.</li>
        <li><strong>Performances accrues :</strong> Mise en cache des ressources pour des temps de chargement plus rapides.</li>
        <li><strong>Notifications push :</strong> Interagir avec l'utilisateur via des notifications.</li>
        <li><strong>Fondation des PWA :</strong> Indispensables pour transformer un site web en une application progressive.</li>
    </ul>

    <h4>Les étapes pour utiliser un Service Worker</h4>
    <ol>
        <li>Enregistrer le Service Worker dans votre application.</li>
        <li>Gérer l'installation et l'activation pour mettre en cache les ressources.</li>
        <li>Intercepter les requêtes réseau pour fournir des réponses en cache ou dynamiques.</li>
    </ol>

    <h4>Exemple pratique de Service Worker</h4>

    <h5>Fichier du Service Worker (<code>sw.js</code>)</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// sw.js - Service Worker</span>

<span class="comment">// Nom du cache</span>
<span class="keyword">const</span> CACHE_NAME = <span class="string">"v1"</span>;

<span class="comment">// Ressources à mettre en cache</span>
<span class="keyword">const</span> ressources = [
    <span class="string">"/index.html"</span>,
    <span class="string">"/style.css"</span>,
    <span class="string">"/app.js"</span>,
    <span class="string">"/images/logo.png"</span>
];

<span class="comment">// Installation du Service Worker</span>
self.addEventListener(<span class="string">"install"</span>, (event) => {
    console.log(<span class="string">"Service Worker : Installé"</span>);
    event.waitUntil(
        caches.open(CACHE_NAME).then((cache) => {
            console.log(<span class="string">"Mise en cache des ressources"</span>);
            <span class="keyword">return</span> cache.addAll(ressources);
        })
    );
});

<span class="comment">// Activation du Service Worker</span>
self.addEventListener(<span class="string">"activate"</span>, (event) => {
    console.log(<span class="string">"Service Worker : Activé"</span>);
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            <span class="keyword">return</span> Promise.all(
                cacheNames.map((cache) => {
                    <span class="keyword">if</span> (cache !== CACHE_NAME) {
                        console.log(<span class="string">`Suppression de l'ancien cache : ${cache}`</span>);
                        <span class="keyword">return</span> caches.delete(cache);
                    }
                })
            );
        })
    );
});

<span class="comment">// Interception des requêtes réseau</span>
self.addEventListener(<span class="string">"fetch"</span>, (event) => {
    console.log(<span class="string">`Requête interceptée : ${event.request.url}`</span>);
    event.respondWith(
        caches.match(event.request).then((response) => {
            <span class="comment">// Retourne la réponse en cache si disponible, sinon fait une requête réseau</span>
            <span class="keyword">return</span> response || fetch(event.request);
        })
    );
});
</code></pre>
    </div>

    <h5>Enregistrement du Service Worker (<code>app.js</code>)</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// app.js - Enregistrer le Service Worker</span>

<span class="keyword">if</span> (<span class="keyword">"serviceWorker"</span> <span class="keyword">in</span> navigator) {
    navigator.serviceWorker
        .register(<span class="string">"/sw.js"</span>)
        .then((registration) => {
            console.log(<span class="string">"Service Worker enregistré :", registration.scope</span>);
        })
        .catch((error) => {
            console.error(<span class="string">"Échec de l'enregistrement du Service Worker :", error</span>);
        });
}
</code></pre>
    </div>

    <h4>Progressive Web Apps (PWA)</h4>
    <p>Les PWA combinent des technologies web modernes pour offrir une expérience utilisateur proche des applications natives :</p>
    <ul>
        <li><strong>Installable :</strong> Ajout de l'application sur l'écran d'accueil du téléphone.</li>
        <li><strong>Fonctionnalité hors ligne :</strong> Accessible même sans connexion Internet grâce au Service Worker.</li>
        <li><strong>Performances optimisées :</strong> Chargement rapide des ressources mises en cache.</li>
    </ul>

    <h5>Fichier Manifest (<code>manifest.json</code>)</h5>
    <p>Un fichier <code>manifest.json</code> est requis pour transformer un site web en PWA :</p>
    <div class="example-box">
        <pre><code class="language-json">{
    "name": "Ma PWA",
    "short_name": "PWA",
    "start_url": "/index.html",
    "display": "standalone",
    "background_color": "#ffffff",
    "theme_color": "#000000",
    "icons": [
        {
            "src": "/images/icon-192.png",
            "sizes": "192x192",
            "type": "image/png"
        },
        {
            "src": "/images/icon-512.png",
            "sizes": "512x512",
            "type": "image/png"
        }
    ]
}</code></pre>
    </div>

    <h4>Cas d’utilisation courants</h4>
    <ul>
        <li><strong>Applications hors ligne :</strong> Sites web accessibles sans Internet.</li>
        <li><strong>Optimisation des performances :</strong> Mise en cache des ressources pour des temps de chargement plus rapides.</li>
        <li><strong>Notifications push :</strong> Garder les utilisateurs engagés avec des mises à jour en temps réel.</li>
    </ul>

    <h4>Bonnes pratiques</h4>
    <ul>
        <li>Utilisez des stratégies de mise en cache adaptées (cache first, network first, etc.).</li>
        <li>Testez votre PWA avec des outils comme <a href="https://web.dev/measure/" target="_blank">Lighthouse</a>.</li>
        <li>Minimisez les ressources mises en cache pour optimiser les performances.</li>
        <li>Assurez-vous que le fichier <code>manifest.json</code> est correct et lié à votre HTML.</li>
    </ul>
</div>
<div class="col-md-12" id="es6">
    <h3>Syntaxe Moderne ES6+</h3>
    <p>
        ES6 (ECMAScript 2015) et les versions ultérieures ont introduit des fonctionnalités modernes et puissantes en JavaScript. 
        Ces ajouts facilitent l'écriture d'un code plus propre, lisible et maintenable, tout en améliorant les performances des applications.
    </p>

    <h4>Pourquoi adopter la syntaxe ES6+ ?</h4>
    <ul>
        <li><strong>Lisibilité :</strong> Syntaxe plus concise et claire.</li>
        <li><strong>Productivité :</strong> Réduit la quantité de code nécessaire pour accomplir des tâches complexes.</li>
        <li><strong>Compatibilité :</strong> La plupart des navigateurs modernes et des outils comme Babel permettent une adoption large.</li>
    </ul>

    <h4>Principales fonctionnalités ES6+</h4>

    <h5>1. Déclaration de variables avec <code>let</code> et <code>const</code></h5>
    <p>
        Avant ES6, toutes les variables étaient déclarées avec <code>var</code>. Désormais, <code>let</code> et <code>const</code> offrent des portées plus précises.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Différences entre var, let, et const</span>

// var : portée globale ou fonctionnelle
<span class="keyword">var</span> x = <span class="number">10</span>;

// let : portée de bloc
<span class="keyword">let</span> y = <span class="number">20</span>;

// const : valeur constante, portée de bloc
<span class="keyword">const</span> z = <span class="number">30</span>;

// Exemple de portée
<span class="keyword">if</span> (<span class="boolean">true</span>) {
    <span class="keyword">let</span> y = <span class="number">50</span>;
    console.log(y); <span class="comment">// 50</span>
}
console.log(y); <span class="comment">// 20</span>
</code></pre>
    </div>

    <h5>2. Fonctions fléchées (<code>=></code>)</h5>
    <p>
        Les fonctions fléchées introduisent une syntaxe concise pour écrire des fonctions. Elles ne modifient pas la valeur de <code>this</code>, ce qui est utile dans certains contextes.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Fonction classique</span>
<span class="keyword">function</span> addition(a, b) {
    <span class="keyword">return</span> a + b;
}

<span class="comment">// Fonction fléchée</span>
<span class="keyword">const</span> additionFl = (a, b) => a + b;

console.log(additionFl(<span class="number">5</span>, <span class="number">3</span>)); <span class="comment">// 8</span>
</code></pre>
    </div>

    <h5>3. Littéraux de gabarits (<code>`</code>)</h5>
    <p>
        Les littéraux de gabarits permettent d'insérer facilement des variables ou des expressions dans des chaînes de caractères.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple avec littéraux de gabarits</span>
<span class="keyword">const</span> nom = <span class="string">"Alice"</span>;
<span class="keyword">const</span> age = <span class="number">30</span>;

<span class="keyword">const</span> message = <span class="string">`Bonjour, je m'appelle ${nom} et j'ai ${age} ans.`</span>;
console.log(message);
</code></pre>
    </div>

    <h5>4. Destructuration des objets et tableaux</h5>
    <p>
        La destructuration permet d'extraire des valeurs ou des propriétés d'objets et de tableaux.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Destructuration des objets</span>
<span class="keyword">const</span> utilisateur = { nom: <span class="string">"Alice"</span>, age: <span class="number">30</span> };
<span class="keyword">const</span> { nom, age } = utilisateur;

console.log(nom); <span class="comment">// Alice</span>
console.log(age); <span class="comment">// 30</span>

<span class="comment">// Destructuration des tableaux</span>
<span class="keyword">const</span> nombres = [<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>];
<span class="keyword">const</span> [a, b] = nombres;

console.log(a); <span class="comment">// 1</span>
console.log(b); <span class="comment">// 2</span>
</code></pre>
    </div>

    <h5>5. Opérateurs Spread et Rest (<code>...</code>)</h5>
    <p>
        Ces opérateurs permettent de copier, fusionner ou passer des arguments de manière flexible.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Spread</span>
<span class="keyword">const</span> nombres = [<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>];
<span class="keyword">const</span> nouveauxNombres = [...nombres, <span class="number">4</span>];

console.log(nouveauxNombres); <span class="comment">// [1, 2, 3, 4]</span>

<span class="comment">// Rest</span>
<span class="keyword">function</span> addition(...args) {
    <span class="keyword">return</span> args.reduce((somme, val) => somme + val);
}
console.log(addition(<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>)); <span class="comment">// 6</span>
</code></pre>
    </div>

    <h5>6. Modules JavaScript</h5>
    <p>
        L'importation et l'exportation de modules facilitent l'organisation et la réutilisation du code.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exportation dans calcul.js</span>
<span class="keyword">export</span> <span class="keyword">function</span> addition(a, b) {
    <span class="keyword">return</span> a + b;
}

<span class="comment">// Importation dans main.js</span>
<span class="keyword">import</span> { addition } <span class="keyword">from</span> <span class="string">"./calcul.js"</span>;
console.log(addition(<span class="number">5</span>, <span class="number">3</span>)); <span class="comment">// 8</span>
</code></pre>
    </div>

    <h5>7. Classes</h5>
    <p>
        Les classes introduisent une syntaxe simplifiée pour la Programmation Orientée Objet.
    </p>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Exemple de classe</span>
<span class="keyword">class</span> Animal {
    <span class="keyword">constructor</span>(nom) {
        <span class="keyword">this</span>.nom = nom;
    }

    parler() {
        console.log(<span class="string">`${this.nom} fait un bruit.`</span>);
    }
}

<span class="keyword">const</span> chien = <span class="keyword">new</span> Animal(<span class="string">"Rex"</span>);
chien.parler(); <span class="comment">// Rex fait un bruit.</span>
</code></pre>
    </div>

    <h4>Cas d’utilisation courants</h4>
    <ul>
        <li>Créer un code plus lisible et maintenable grâce à <code>let</code>, <code>const</code>, et les classes.</li>
        <li>Réduire les bugs avec des modules et une structure modulaire.</li>
        <li>Améliorer les performances avec des fonctions optimisées comme les littéraux de gabarits et les opérateurs spread/rest.</li>
    </ul>
</div>
<div class="col-md-12" id="testing">
    <h3>Tests Unitaires</h3>
    <p>
        Les <strong>tests unitaires</strong> consistent à vérifier individuellement chaque fonction ou composant d'un programme pour s'assurer qu'ils fonctionnent correctement.
        Ils permettent de détecter les bugs rapidement et d'assurer la fiabilité du code lors des modifications.
    </p>

    <h4>Pourquoi effectuer des tests unitaires ?</h4>
    <ul>
        <li><strong>Détection précoce des bugs :</strong> Identifiez les problèmes avant qu'ils n'affectent l'ensemble de l'application.</li>
        <li><strong>Réduction des coûts :</strong> Corrigez les erreurs avant qu'elles ne deviennent coûteuses à résoudre.</li>
        <li><strong>Facilite la maintenance :</strong> Assurez-vous que les modifications du code n'introduisent pas de régressions.</li>
        <li><strong>Améliore la confiance :</strong> Garantit que votre code fonctionne comme prévu.</li>
    </ul>

    <h4>Principes des tests unitaires</h4>
    <ul>
        <li>Un test doit être indépendant des autres tests.</li>
        <li>Les tests doivent être faciles à écrire, lire et maintenir.</li>
        <li>Chaque test doit se concentrer sur un cas spécifique (input/output attendu).</li>
    </ul>

    <h4>Outils populaires pour les tests unitaires</h4>
    <ul>
        <li><strong>Jest :</strong> Framework complet pour le test unitaire, fourni avec des fonctionnalités avancées.</li>
        <li><strong>Mocha :</strong> Framework flexible pour créer des tests personnalisés.</li>
        <li><strong>Chai :</strong> Librairie d'assertions souvent utilisée avec Mocha.</li>
        <li><strong>Vitest :</strong> Framework rapide et moderne pour les projets basés sur Vite.</li>
    </ul>

    <h4>Exemple de test unitaire avec Jest</h4>

    <h5>Fichier à tester (<code>calcul.js</code>)</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Fonction à tester</span>
<span class="keyword">export</span> <span class="keyword">function</span> addition(a, b) {
    <span class="keyword">return</span> a + b;
}

<span class="keyword">export</span> <span class="keyword">function</span> division(a, b) {
    <span class="keyword">if</span> (b === <span class="number">0</span>) {
        <span class="keyword">throw</span> <span class="keyword">new</span> Error(<span class="string">"Division par zéro interdite"</span>);
    }
    <span class="keyword">return</span> a / b;
}
</code></pre>
    </div>

    <h5>Fichier de test (<code>calcul.test.js</code>)</h5>
    <div class="example-box">
        <pre><code class="language-javascript"><span class="comment">// Importation des fonctions à tester</span>
<span class="keyword">import</span> { addition, division } <span class="keyword">from</span> <span class="string">"./calcul.js"</span>;

<span class="comment">// Tests pour la fonction addition</span>
test(<span class="string">"Addition de deux nombres positifs"</span>, () => {
    <span class="keyword">expect</span>(addition(<span class="number">2</span>, <span class="number">3</span>)).toBe(<span class="number">5</span>);
});

test(<span class="string">"Addition avec zéro"</span>, () => {
    <span class="keyword">expect</span>(addition(<span class="number">0</span>, <span class="number">3</span>)).toBe(<span class="number">3</span>);
});

<span class="comment">// Tests pour la fonction division</span>
test(<span class="string">"Division de deux nombres positifs"</span>, () => {
    <span class="keyword">expect</span>(division(<span class="number">10</span>, <span class="number">2</span>)).toBe(<span class="number">5</span>);
});

test(<span class="string">"Division par zéro génère une erreur"</span>, () => {
    <span class="keyword">expect</span>(() => division(<span class="number">10</span>, <span class="number">0</span>)).toThrow(<span class="string">"Division par zéro interdite"</span>);
});
</code></pre>
    </div>

    <h4>Commandes pour exécuter les tests</h4>
    <ul>
        <li><code>npm install jest --save-dev</code> : Installe Jest dans votre projet.</li>
        <li><code>npx jest</code> : Lance tous les tests.</li>
        <li><code>npx jest --watch</code> : Exécute les tests automatiquement à chaque modification de fichier.</li>
    </ul>

    <h4>Cas d’utilisation courants</h4>
    <ul>
        <li><strong>Validation de logique métier :</strong> Tester les calculs, les conversions, ou toute logique clé.</li>
        <li><strong>Gestion des erreurs :</strong> S'assurer que les exceptions sont correctement levées et gérées.</li>
        <li><strong>Régressions :</strong> Vérifier que les nouvelles fonctionnalités n’introduisent pas de bugs dans le code existant.</li>
    </ul>

    <h4>Bonnes pratiques</h4>
    <ul>
        <li>Écrivez des tests simples et ciblés pour chaque cas d'utilisation.</li>
        <li>Assurez-vous que les noms des tests décrivent clairement leur objectif.</li>
        <li>Automatisez vos tests pour exécuter régulièrement votre suite.</li>
        <li>Évitez les dépendances externes dans vos tests unitaires.</li>
        <li>Incluez des tests pour les cas normaux, limites et erreurs.</li>
    </ul>
</div>


                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional if you want responsive behavior) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/worker.js"></script>

</body>
</html>
