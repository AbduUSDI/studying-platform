<?php
require 'fonctions.php';
$leaderboard = new Leaderboard();

// Récupérer toutes les catégories
$categories = $leaderboard->getCategories();

$leaderboards = [];
foreach ($categories as $category) {
    $leaderboards[$category] = $leaderboard->getTopScores(10, $category);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez nos quiz interactifs pour développer vos compétences en développement web et web mobile. Testez vos connaissances sur HTML, CSS, JavaScript, PHP, Python, MongoDB et bien plus encore !">
    <meta name="keywords" content="QCM, développement web, HTML, CSS, JavaScript, PHP, Python, MongoDB, Quiz interactifs, formation développeur, bonnes pratiques, méthodologies, UI, UX, Bootstrap, Tailwind CSS">
    <meta name="author" content="Abduusdi">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Accueil - QCM et Leaderboards">
    <meta property="og:description" content="Testez vos connaissances en développement web avec nos QCM interactifs. Progressez dans différents langages, frameworks et méthodologies avec nos quiz bien structurés.">
    <meta property="og:image" content="https://www.abduusdi.fr/cours/assets/qcm-thumbnail.jpg">
    <meta property="og:url" content="https://www.abduusdi.fr/cours/index.php?page=qcm_dev/index">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Accueil - QCM et Leaderboards">
    <meta name="twitter:description" content="Découvrez nos quiz interactifs pour améliorer vos compétences en développement web et mobile.">
    <meta name="twitter:image" content="https://www.abduusdi.fr/cours/assets/qcm-thumbnail.jpg">

    <!-- Titre principal -->
    <title>Accueil - QCM et Leaderboards | Développeur Web et Mobile</title>

    <!-- Favicon -->
    <link rel="icon" href="https://www.abduusdi.fr/cours/assets/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://www.abduusdi.fr/cours/assets/favicon.ico">

    <!-- Bootstrap pour le style et la mise en forme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Feuilles de style personnalisées -->
    <link rel="stylesheet" href="assets/css/cours.css"/>

    
    <!-- Liens structurés JSON-LD pour le SEO -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "EducationalOrganization",
      "name": "Abduusdi Cours",
      "url": "https://www.abduusdi.fr",
      "logo": "https://www.abduusdi.fr/cours/assets/favicon.ico",
      "sameAs": [
        "https://www.facebook.com/abduusdi",
        "https://www.twitter.com/abduusdi",
        "https://www.linkedin.com/in/abduusdi"
      ]
    }
    </script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500;700;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');
    
:root {
    --white-color: #ffffff;
    --primary-color: #00bcd4; /* Bleu clair */
    --secondary-color: #ff5722; /* Orange */
    --dark-bg: #121212;
    --light-bg: #1e1e1e;
    --ms-3: 0.3s;
}
    .leaderboard-category {
    background: #121212;
    color: #f0f0f0;
    border: 1px solid #333;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
    animation: fadeInUp 1s ease-out;
}

.leaderboard-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.list-group-item {
    background: transparent;
    border: none;
    color: #fff;
    padding: 10px 15px;
    position: relative;
    animation: fadeIn 0.5s ease-in-out;
}

.rank-badge {
    font-size: 1.5rem;
    margin-right: 10px;
}

.text-gold {
    color: gold;
}

.text-silver {
    color: silver;
}

.text-bronze {
    color: #cd7f32;
}

.gaming-font {
    font-family: 'Orbitron', sans-serif;
    font-size: 1.2rem;
    color: #ff4f4f;
}


.card {
  position: relative;
  margin: auto;
  padding: 1px;
  border-radius: 12px;
  overflow: hidden;
  background: linear-gradient(145deg, var(--light-bg), var(--dark-bg));
  color: var(--white-color);
  transition: transform var(--ms-3), box-shadow var(--ms-3);
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
}

.card__border {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  border-radius: 12px;
}

.card__border::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 150%;
  height: 150%;
  transform: translate(-50%, -50%);
  border: 2px solid var(--primary-color);
  border-radius: 50%;
  animation: rotate 6s linear infinite;
}

@keyframes rotate {
  0% {
    transform: translate(-50%, -50%) rotate(0deg);
  }
  100% {
    transform: translate(-50%, -50%) rotate(360deg);
  }
}

.card__content {
  padding: 20px;
}

.card__title {
  font-family: 'Anton', sans-serif;
  font-size: 1.5rem;
  text-transform: uppercase;
  margin-bottom: 10px;
  color: var(--primary-color);
}

.card__text {
  font-size: 0.9rem;
  line-height: 1.6;
  opacity: 0.85;
}

.card__cta {
  display: block;
  margin-top: 15px;
  text-align: center;
  text-decoration: none;
  font-weight: 500;
  padding: 10px 20px;
  color: var(--white-color);
  background-color: var(--primary-color);
  border-radius: 25px;
  transition: background-color var(--ms-3), box-shadow var(--ms-3);
}

.card__cta:hover {
  background-color: var(--secondary-color);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

.card__icon-wrapper {
  text-align: center;
  margin: 15px 0;
}

.card__icon {
  font-size: 2.5rem;
  color: var(--primary-color);
  transition: transform var(--ms-3), color var(--ms-3);
}

.card:hover .card__icon {
  transform: scale(1.2);
  color: var(--secondary-color);
}

.card__social {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 15px;
  gap: 10px;
}

.card__social a {
  font-size: 1.5rem;
  color: var(--primary-color);
  text-decoration: none;
  transition: transform var(--ms-3), color var(--ms-3);
}

.card__social a:hover {
  transform: scale(1.2);
  color: var(--secondary-color);
}
/* Conteneur principal de la carte */
.card.quiz-card {
    transition: transform 0.3s, box-shadow 0.3s;
}

.card.quiz-card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
}

/* Icônes normales */
.quiz-icons i {
    transition: color 0.3s, text-shadow 0.3s;
}

/* Effet de brillance au survol */
.card.quiz-card:hover .quiz-icons i {
    color: #fff;
    text-shadow: 0 0 8px rgba(255, 255, 255, 0.8), 0 0 16px rgba(255, 255, 255, 0.6), 0 0 24px rgba(255, 255, 255, 0.4);
}

/* Transition pour les icônes des réseaux sociaux */
.card__social-icon {
    transition: transform 0.3s, text-shadow 0.3s;
}

/* Brillance sur les icônes des réseaux sociaux au survol de la carte */
.card.quiz-card:hover .card__social-icon {
    transform: scale(1.2);
    text-shadow: 0 0 8px rgba(0, 255, 255, 0.8), 0 0 16px rgba(0, 255, 255, 0.6), 0 0 24px rgba(0, 255, 255, 0.4);
}

.custom-container {
    background: linear-gradient(135deg, #1a1a2e, #16213e);
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
    color: #fff;
    transition: all 0.3s ease-in-out;
}

.custom-container:hover {
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.7);
}

.custom-container h1,
.custom-container p {
    text-align: center;
    color: #f5f5f5;
}

.custom-container h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
    font-weight: bold;
}

.custom-container p {
    font-size: 1.2rem;
    line-height: 1.6;
}
/* Conteneur principal */
.search-container {
    background: linear-gradient(135deg, #16213e, #1a1a2e);
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
    margin: 20px auto;
    max-width: 600px;
    color: #ffffff;
}

/* Titre */
.search-container h2 {
    font-size: 2rem;
    color: #f5f5f5;
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
    margin-bottom: 15px;
    text-align: center;
}

/* Barre de recherche */
.search-container .form-control {
    border: 1px solid #ffffff;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    padding: 10px;
    font-size: 1rem;
    transition: box-shadow 0.3s, background-color 0.3s;
}

.search-container .form-control:focus {
    box-shadow: 0 0 10px #4caf50;
    background-color: rgba(255, 255, 255, 0.2);
    border-color: #4caf50;
    outline: none;
}

/* Résultats */
#searchResults {
    background-color: rgba(255, 255, 255, 0.1);
    border: 1px solid #4caf50;
    border-radius: 5px;
    margin-top: 10px;
    max-height: 200px;
    overflow-y: auto;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

#searchResults .list-group-item {
    background: none;
    color: #ffffff;
    border: none;
    padding: 10px;
    transition: background-color 0.3s, color 0.3s;
}

#searchResults .list-group-item:hover {
    background-color: #4caf50;
    color: #000000;
    cursor: pointer;
}
.card a {
    transition: all 0.3s ease-in-out;
}
.card a:hover {
    text-decoration: none;
    color: white;
    transform: scale(1.02);
}
</style>
<body>

<?php
// Inclure le template de la navigation
include 'templates/nav.php';
?>
<div class="sidebar">
    <h2>Menu</h2>
    <a href="index.php?page=home">Accueil</a>
    <h4>HTML et CSS</h4>
    <a href="index.php?page=cours_html">Cours HTML</a>
    <a href="index.php?page=cours_css">Cours CSS</a>
    <a href="index.php?page=cours_bootstrap">Bootstrap</a>
    <a href="index.php?page=cours_tailwind">Tailwind CSS</a>
    
    <h4>UX/UI</h4>
    <a href="index.php?page=cours_ux">Introduction à l'UX</a>
    <a href="index.php?page=cours_ui">Introduction à l'UI</a>
    <a href="index.php?page=cours_accessibilite">Accessibilité Web</a>
    <a href="index.php?page=cours_prototypage">Prototypage et Wireframes</a>
    
    <h4>Langages de Programmation</h4>
    <a href="index.php?page=cours_js">JavaScript</a>
    <a href="index.php?page=cours_php">PHP</a>
    <a href="index.php?page=cours_python">Python</a>
    <a href="index.php?page=cours_java">Java</a>
    <a href="index.php?page=cours_rust">Rust</a>
    <a href="index.php?page=cours_go">Go</a>
    <a href="index.php?page=cours_swift">Swift</a>
    <a href="index.php?page=cours_c">C</a>
    <a href="index.php?page=cours_cpp">C++</a>
    <a href="index.php?page=cours_kotlin">Kotlin</a>

    
    <h4>Frameworks et Bibliothèques</h4>
    <a href="index.php?page=cours_ajax">AJAX</a>
    <a href="index.php?page=cours_react">React</a>
    <a href="index.php?page=cours_vuejs">Vue.js</a>
    <a href="index.php?page=cours_nestjs">Nest.js</a>
    <a href="index.php?page=cours_angular">Angular</a>
    <a href="index.php?page=cours_django">Django</a>
    <a href="index.php?page=cours_laravel">Laravel</a>
    <a href="index.php?page=cours_symfony">Symfony</a>
    <a href="index.php?page=cours_tailwind">Tailwind CSS</a>
    <a href="index.php?page=cours_jquery">jQuery</a>
    <a href="index.php?page=cours_threejs">Three.js</a>
    <a href="index.php?page=cours_nextjs">Next.js</a>
    <a href="index.php?page=cours_emberjs">Ember.js</a>
    <a href="index.php?page=cours_backbonejs">Backbone.js</a>
    <a href="index.php?page=cours_expressjs">Express.js</a>
    <a href="index.php?page=cours_flask">Flask</a>
    <a href="index.php?page=cours_spring">Spring</a>
    <a href="index.php?page=cours_slim">Slim</a>
    <a href="index.php?page=cours_rails">Ruby on Rails</a>
    <a href="index.php?page=cours_cakephp">CakePHP</a>
    <a href="index.php?page=cours_phalcon">Phalcon</a>
    
    <h4>Containerisation et DevOps</h4>
    <a href="index.php?page=cours_docker">Docker</a>
    <a href="index.php?page=cours_kubernetes">Kubernetes</a>
    <a href="index.php?page=cours_ci_cd">CI/CD</a>
    <a href="index.php?page=cours_ansible">Ansible</a>
    <a href="index.php?page=cours_terraform">Terraform</a>
    
    <h4>Bases de Données</h4>
    <a href="index.php?page=cours_sql">SQL</a>
    <a href="index.php?page=cours_mysql">MySQL</a>
    <a href="index.php?page=cours_mongodb">MongoDB</a>
    <a href="index.php?page=cours_postgresql">PostgreSQL</a>
    <a href="index.php?page=cours_redis">Redis</a>
    <a href="index.php?page=cours_oracle">Oracle</a>
    
    <h4>Méthodologies</h4>
    <a href="index.php?page=cours_scrum">Scrum</a>
    <a href="index.php?page=cours_kanban">Kanban</a>
    <a href="index.php?page=cours_agile">Méthodologie Agile</a>
    <a href="index.php?page=cours_tdd">Développement Dirigé par les Tests (TDD)</a>
    <a href="index.php?page=cours_devops">DevOps</a>
    <a href="index.php?page=cours_lean">Lean</a>
    <a href="index.php?page=cours_cascade">Cascade</a>
    
    <h4>Sécurité et Bonnes Pratiques</h4>
    <a href="index.php?page=cours_securite_web">Sécurité Web</a>
    <a href="index.php?page=cours_bonnes_pratiques_code">Bonnes Pratiques de Code</a>
    <a href="index.php?page=cours_gestion_erreurs">Gestion des Erreurs</a>
    <a href="index.php?page=cours_tests_unitaires">Tests Unitaires</a>
    <a href="index.php?page=cours_performance">Optimisation de la Performance</a>

    <h4>QCM Développeur web</h4>
    <a href="index.php?page=qcm_dev/index">Accueil QCM</a>
    <a href="index.php?page=qcm_dev/qcm1">QCM sur les dates clés</a>
    <a href="index.php?page=qcm_dev/qcm2">QCM sur les définitions clés</a>
    <a href="index.php?page=qcm_dev/qcm3">QCM sur les méthodologies</a>
    <a href="index.php?page=qcm_dev/qcm4">QCM sur les techniques utilisées</a>
    <a href="index.php?page=qcm_dev/qcm5">QCM sur les points techniques approfondis</a>
    <a href="index.php?page=qcm_dev/qcm6">QCM sur les outils à maitriser</a>
    <a href="index.php?page=qcm_dev/qcm7">QCM sur les bonnes pratiques de code</a>

    <h4>Evaluations</h4>
    <a href="index.php?page=qcm_dev/evaluation_final">Evaluation finale - 50 questions</a>
</div>
<div class="content">
    <div class="container animate__animated animate__fadeInUp">
        <div class="container mt-5 custom-container">
            <h1 class="text-center mb-4">Bienvenue sur les Quiz de la culture G du Développeur</h1>
            <p class="text-center">Testez vos connaissances en développement web et web mobile avec nos quiz interactifs ! Découvrez les notions essentielles pour exceller dans ce domaine passionnant.</p>

            <div class="container search-container mt-4">
                <h2 class="text-center">Rechercher dans les QCM</h2>
                <div class="form-group">
                    <input type="text" id="searchBar" class="form-control" placeholder="Recherchez un QCM, un cours ou une catégorie...">
                    <ul id="searchResults" class="list-group mt-2"></ul>
                </div>
            </div>


            <div class="row mt-4">
                <!-- Carte pour le premier quiz -->
                <div class="col-md-4 mb-4">
                    <div class="card quiz-card h-100">
                        <div class="card__border"></div>
                        <div class="card__content">
                            <div class="card__icon-wrapper">
                                <i class="fas fa-calendar-alt card__icon"></i>
                            </div>
                            <h2 class="card__title">QCM sur les dates clés</h2>
                            <p class="card__text">
                                Testez votre mémoire sur les dates importantes dans l'histoire du développement web. Ce quiz couvre des moments marquants, comme la création des premiers navigateurs, l'émergence des frameworks modernes, et plus encore.
                            </p>
                            <a href="index.php?page=qcm_dev/qcm1" class="card__cta">Commencer le Quiz</a>
                            <!-- Réseaux sociaux -->
                            <div class="card__social">
                                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                                    <i class="fab fa-facebook card__social-icon"></i>
                                </a>
                                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                                    <i class="fab fa-twitter card__social-icon"></i>
                                </a>
                                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                                    <i class="fab fa-linkedin card__social-icon"></i>
                                </a>
                                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                                    <i class="fab fa-instagram card__social-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-book card__icon"></i>
            </div>
            <h2 class="card__title">QCM sur les définitions clés</h2>
            <p class="card__text">
                Maîtrisez-vous le jargon du développement web ? Ce quiz vous aidera à comprendre et à réviser des termes essentiels comme MVC, API, responsive design, et bien d'autres.
            </p>
            <a href="index.php?page=qcm_dev/qcm2" class="card__cta">Commencer le Quiz</a>
            <!-- Réseaux sociaux -->
            <div class="card__social">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook card__social-icon"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <i class="fab fa-twitter card__social-icon"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin card__social-icon"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram card__social-icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-tasks card__icon"></i>
            </div>
            <h2 class="card__title">QCM sur les méthodologies</h2>
            <p class="card__text">
                Découvrez votre niveau de connaissance des méthodologies agiles, des principes de développement comme SCRUM, Kanban, et des bonnes pratiques pour gérer efficacement vos projets.
            </p>
            <a href="index.php?page=qcm_dev/qcm3" class="card__cta">Commencer le Quiz</a>
            <!-- Réseaux sociaux -->
            <div class="card__social">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook card__social-icon"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <i class="fab fa-twitter card__social-icon"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin card__social-icon"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram card__social-icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-tools card__icon"></i>
            </div>
            <h2 class="card__title">QCM sur les Techniques Utilisées</h2>
            <p class="card__text">
                Explorez vos connaissances sur les langages, frameworks, bibliothèques, et outils essentiels en développement web. Ce quiz couvre HTML5, CSS3, JavaScript ES6+, ainsi que des frameworks comme Bootstrap et React.
            </p>
            <a href="index.php?page=qcm_dev/qcm4" class="card__cta">Commencer le Quiz</a>
            <!-- Réseaux sociaux -->
            <div class="card__social">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook card__social-icon"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <i class="fab fa-twitter card__social-icon"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin card__social-icon"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram card__social-icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-shield-alt card__icon"></i>
            </div>
            <h2 class="card__title">QCM sur les Points techniques approfondis</h2>
            <p class="card__text">
                Testez vos connaissances sur des aspects avancés du développement web, notamment la sécurité avec les attaques XSS, CSRF et HTTPS, ainsi que le hash des mots de passe. Évaluez votre maîtrise des standards d'accessibilité (WCAG) et des bonnes pratiques d'optimisation des performances, telles que le lazy loading et la mise en cache.
            </p>
            <a href="index.php?page=qcm_dev/qcm5" class="card__cta">Commencer le Quiz</a>
            <!-- Réseaux sociaux -->
            <div class="card__social">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook card__social-icon"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <i class="fab fa-twitter card__social-icon"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin card__social-icon"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram card__social-icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-toolbox card__icon"></i>
            </div>
            <h2 class="card__title">QCM sur les Outils à maîtriser</h2>
            <p class="card__text">
                Découvrez votre niveau de maîtrise des outils essentiels pour le développement web. Explorez des questions sur des éditeurs de code comme VS Code, des outils de design comme Figma, et des outils de test d'API comme Postman. Apprenez également à utiliser efficacement Chrome DevTools et les plateformes de collaboration comme Trello et Jira.
            </p>
            <a href="index.php?page=qcm_dev/qcm6" class="card__cta">Commencer le Quiz</a>
            <!-- Réseaux sociaux -->
            <div class="card__social">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook card__social-icon"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <i class="fab fa-twitter card__social-icon"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin card__social-icon"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram card__social-icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-check-circle card__icon"></i>
            </div>
            <h2 class="card__title">QCM sur les Bonnes pratiques</h2>
            <p class="card__text">
                Testez vos connaissances sur les principes fondamentaux comme KISS, DRY, et YAGNI, ainsi que sur des méthodologies clés comme SCRUM, Kanban et TDD. Apprenez comment structurer des projets en suivant des modèles comme MVC et SOLID, tout en appliquant des standards de sécurité et de documentation.
            </p>
            <a href="index.php?page=qcm_dev/qcm7" class="card__cta">Commencer le Quiz</a>
            <!-- Réseaux sociaux -->
            <div class="card__social">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook card__social-icon"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <i class="fab fa-twitter card__social-icon"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin card__social-icon"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram card__social-icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>

            </div>
        </div>
        <div class="container mt-5 custom-container">
            <div class="row">
            <div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fab fa-html5 card__icon"></i>
            </div>
            <h2 class="card__title">QCM sur HTML</h2>
            <p class="card__text">
                Testez vos connaissances sur les bases et les concepts avancés du HTML. Ce quiz couvre des sujets tels que les balises de structure, les attributs HTML, et les bonnes pratiques pour créer des pages web efficaces et accessibles.
            </p>
            <a href="index.php?page=qcm_dev/qcm_html" class="card__cta">Commencer le Quiz</a>
            <!-- Réseaux sociaux -->
            <div class="card__social">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook card__social-icon"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <i class="fab fa-twitter card__social-icon"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin card__social-icon"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram card__social-icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fab fa-css3-alt card__icon"></i>
            </div>
            <h2 class="card__title">QCM sur CSS</h2>
            <p class="card__text">
                Évaluez vos compétences en mise en page et styles avec CSS. Ce quiz explore les sélecteurs CSS, les propriétés de flexbox et grid, et les techniques avancées pour créer des designs modernes et responsives.
            </p>
            <a href="index.php?page=qcm_dev/qcm_css" class="card__cta">Commencer le Quiz</a>
            <!-- Réseaux sociaux -->
            <div class="card__social">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook card__social-icon"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <i class="fab fa-twitter card__social-icon"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin card__social-icon"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram card__social-icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fab fa-php card__icon"></i>
            </div>
            <h2 class="card__title">QCM sur PHP</h2>
            <p class="card__text">
                Vérifiez vos connaissances sur la programmation serveur avec PHP. Ce quiz couvre des concepts tels que la gestion des sessions, la connexion aux bases de données, et les bonnes pratiques de sécurité pour les applications web.
            </p>
            <a href="index.php?page=qcm_dev/qcm_php" class="card__cta">Commencer le Quiz</a>
            <!-- Réseaux sociaux -->
            <div class="card__social">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook card__social-icon"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <i class="fab fa-twitter card__social-icon"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin card__social-icon"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram card__social-icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fab fa-js-square card__icon"></i>
            </div>
            <h2 class="card__title">QCM sur JavaScript</h2>
            <p class="card__text">
                Testez vos compétences en scripting côté client avec JavaScript. Ce quiz aborde les bases du langage, les événements DOM, les promesses, l'async/await, et bien plus pour vous préparer à coder des interfaces interactives et dynamiques.
            </p>
            <a href="index.php?page=qcm_dev/qcm_js" class="card__cta">Commencer le Quiz</a>
            <!-- Réseaux sociaux -->
            <div class="card__social">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook card__social-icon"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <i class="fab fa-twitter card__social-icon"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin card__social-icon"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram card__social-icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fab fa-python card__icon"></i>
            </div>
            <h2 class="card__title">QCM sur Python</h2>
            <p class="card__text">
                Découvrez où vous en êtes avec la programmation Python. Ce quiz explore les bases du langage, les structures de contrôle, la manipulation des fichiers, et les concepts avancés comme les décorateurs et les générateurs.
            </p>
            <a href="index.php?page=qcm_dev/qcm_python" class="card__cta">Commencer le Quiz</a>
            <!-- Réseaux sociaux -->
            <div class="card__social">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook card__social-icon"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <i class="fab fa-twitter card__social-icon"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin card__social-icon"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram card__social-icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-database card__icon"></i>
            </div>
            <h2 class="card__title">QCM sur MongoDB</h2>
            <p class="card__text">
                Évaluez vos connaissances sur la base de données NoSQL MongoDB. Ce quiz couvre les opérations CRUD, la modélisation des données, les index, et les performances pour des applications modernes et évolutives.
            </p>
            <a href="index.php?page=qcm_dev/qcm_mongodb" class="card__cta">Commencer le Quiz</a>
            <!-- Réseaux sociaux -->
            <div class="card__social">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook card__social-icon"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <i class="fab fa-twitter card__social-icon"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin card__social-icon"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram card__social-icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-sync-alt card__icon"></i>
            </div>
            <h2 class="card__title">QCM sur AJAX</h2>
            <p class="card__text">
                Testez votre maîtrise des appels asynchrones avec AJAX. Ce quiz explore les bases d'XMLHttpRequest, l'intégration avec les APIs REST, et la gestion des réponses JSON pour construire des interfaces dynamiques et réactives.
            </p>
            <a href="index.php?page=qcm_dev/qcm_ajax" class="card__cta">Commencer le Quiz</a>
            <!-- Réseaux sociaux -->
            <div class="card__social">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook card__social-icon"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <i class="fab fa-twitter card__social-icon"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin card__social-icon"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram card__social-icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-pencil-ruler card__icon"></i>
            </div>
            <h2 class="card__title">QCM sur le Prototypage</h2>
            <p class="card__text">
                Évaluez vos compétences en création de prototypes fonctionnels. Ce quiz vous guidera à travers les étapes clés de conception, d'interfaces utilisateurs et des outils essentiels comme Figma et Adobe XD.
            </p>
            <a href="index.php?page=qcm_dev/qcm_prototypage" class="card__cta">Commencer le Quiz</a>
            <!-- Réseaux sociaux -->
            <div class="card__social">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook card__social-icon"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <i class="fab fa-twitter card__social-icon"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin card__social-icon"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram card__social-icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-paint-brush card__icon"></i>
            </div>
            <h2 class="card__title">QCM sur l'UI</h2>
            <p class="card__text">
                Testez vos compétences en conception d'interfaces utilisateurs (UI). Ce quiz explore les bases de la création de designs esthétiques, la gestion des couleurs, la typographie, et les principes de hiérarchie visuelle.
            </p>
            <a href="index.php?page=qcm_dev/qcm_ui" class="card__cta">Commencer le Quiz</a>
            <!-- Réseaux sociaux -->
            <div class="card__social">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook card__social-icon"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <i class="fab fa-twitter card__social-icon"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin card__social-icon"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram card__social-icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-users card__icon"></i>
            </div>
            <h2 class="card__title">QCM sur l'UX</h2>
            <p class="card__text">
                Évaluez votre compréhension de l'expérience utilisateur (UX). Ce quiz couvre les notions de parcours utilisateur, l'accessibilité, et les méthodologies pour optimiser la satisfaction des utilisateurs.
            </p>
            <a href="index.php?page=qcm_dev/qcm_ux" class="card__cta">Commencer le Quiz</a>
            <!-- Réseaux sociaux -->
            <div class="card__social">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook card__social-icon"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <i class="fab fa-twitter card__social-icon"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin card__social-icon"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram card__social-icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-project-diagram card__icon"></i>
            </div>
            <h2 class="card__title">QCM sur Scrum</h2>
            <p class="card__text">
                Testez vos connaissances sur la méthodologie agile Scrum. Ce quiz explore les rôles (Scrum Master, Product Owner, équipe de développement), les artefacts (backlog, sprint), et les cérémonies (daily scrum, rétrospective).
            </p>
            <a href="index.php?page=qcm_dev/qcm_scrum" class="card__cta">Commencer le Quiz</a>
            <!-- Réseaux sociaux -->
            <div class="card__social">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook card__social-icon"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <i class="fab fa-twitter card__social-icon"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin card__social-icon"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram card__social-icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="col-md-4 mb-4">
    <div class="card quiz-card h-100">
        <div class="card__border"></div>
        <div class="card__content">
            <div class="card__icon-wrapper">
                <i class="fas fa-database card__icon"></i>
            </div>
            <h2 class="card__title">QCM sur SQL</h2>
            <p class="card__text">
                Évaluez vos compétences en manipulation de bases de données SQL. Ce quiz couvre les requêtes SELECT, INSERT, UPDATE, DELETE, la gestion des relations entre tables, et les techniques d'optimisation des performances.
            </p>
            <a href="index.php?page=qcm_dev/qcm_sql" class="card__cta">Commencer le Quiz</a>
            <!-- Réseaux sociaux -->
            <div class="card__social">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook card__social-icon"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                    <i class="fab fa-twitter card__social-icon"></i>
                </a>
                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin card__social-icon"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram card__social-icon"></i>
                </a>
            </div>
        </div>
    </div>
</div>

            </div>    
        </div>
        <div class="container mt-5 custom-container">
            <div class="row mt-4">
                <div class="col-md-12 mb-4">
                    <div class="card quiz-card h-100">
                        <div class="card__border"></div>
                        <div class="card__content">
                            <div class="card__icon-wrapper">
                                <i class="fas fa-star card__icon"></i>
                            </div>
                            <h2 class="card__title text-center text-primary">Évaluation finale</h2>
                            <p class="card__text text-center">
                                Préparez-vous à affronter l'ultime test de vos compétences en développement web !<br><br>
                                Cette évaluation couvre les thèmes suivants :
                            </p>
                            <div class="d-flex justify-content-center flex-wrap quiz-icons">
                                <div class="p-3 text-center">
                                    <i class="fas fa-calendar-alt fa-3x text-primary" data-bs-toggle="tooltip" title="Dates clés"></i>
                                    <p>Dates clés</p>
                                </div>
                                <div class="p-3 text-center">
                                    <i class="fas fa-book-open fa-3x text-success" data-bs-toggle="tooltip" title="Définitions clés"></i>
                                    <p>Définitions clés</p>
                                </div>
                                <div class="p-3 text-center">
                                    <i class="fas fa-tasks fa-3x text-warning" data-bs-toggle="tooltip" title="Méthodologies"></i>
                                    <p>Méthodologies</p>
                                </div>
                                <div class="p-3 text-center">
                                    <i class="fas fa-tools fa-3x text-info" data-bs-toggle="tooltip" title="Techniques Utilisées"></i>
                                    <p>Techniques Utilisées</p>
                                </div>
                                <div class="p-3 text-center">
                                    <i class="fas fa-code fa-3x text-danger" data-bs-toggle="tooltip" title="Points techniques approfondis"></i>
                                    <p>Points techniques</p>
                                </div>
                                <div class="p-3 text-center">
                                    <i class="fas fa-wrench fa-3x text-secondary" data-bs-toggle="tooltip" title="Outils à maîtriser"></i>
                                    <p>Outils à maîtriser</p>
                                </div>
                                <div class="p-3 text-center">
                                    <i class="fas fa-thumbs-up fa-3x text-primary" data-bs-toggle="tooltip" title="Bonnes pratiques"></i>
                                    <p>Bonnes pratiques</p>
                                </div>
                            </div>
                            <div class="mt-4 text-center">
                                <p class="fw-bold">
                                    Cet examen vous offre une chance unique de démontrer votre maîtrise complète.
                                </p>
                                <p class="text-muted">
                                    ⚠️ Assurez-vous de bien réviser chaque catégorie et d'identifier vos faiblesses.
                                </p>
                                <p class="fst-italic">
                                    🎯 Objectif : Obtenez au moins 40/50 pour valider vos compétences et marquer votre réussite !
                                </p>
                            </div>
                            <div class="text-center">
                                <a href="index.php?page=qcm_dev/evaluation_final" class="card__cta">
                                    <i class="fas fa-play-circle"></i> Commencer l'évaluation
                                </a>
                            </div>
                            <!-- Réseaux sociaux -->
                            <div class="card__social mt-3">
                                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                                    <i class="fab fa-facebook card__social-icon"></i>
                                </a>
                                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                                    <i class="fab fa-twitter card__social-icon"></i>
                                </a>
                                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                                    <i class="fab fa-linkedin card__social-icon"></i>
                                </a>
                                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                                    <i class="fab fa-instagram card__social-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carte pour l'évaluation finale langages -->
                <div class="col-md-12 mb-4">
                    <div class="card quiz-card h-100">
                        <div class="card__border"></div>
                        <div class="card__content">
                            <div class="card__icon-wrapper">
                                <i class="fas fa-laptop-code card__icon"></i>
                            </div>
                            <h2 class="card__title text-center text-primary">Évaluation finale - Langages</h2>
                            <p class="card__text text-center">
                                Préparez-vous à tester vos connaissances sur les langages essentiels du développement web et backend !<br><br>
                                Voici les langages inclus dans cette évaluation : 
                            </p>
                            <div class="d-flex justify-content-center flex-wrap quiz-icons">
                                <div class="p-3 text-center">
                                    <i class="fab fa-html5 fa-3x text-danger" data-bs-toggle="tooltip" title="HTML"></i>
                                    <p>HTML</p>
                                </div>
                                <div class="p-3 text-center">
                                    <i class="fab fa-css3-alt fa-3x text-primary" data-bs-toggle="tooltip" title="CSS"></i>
                                    <p>CSS</p>
                                </div>
                                <div class="p-3 text-center">
                                    <i class="fas fa-database fa-3x text-success" data-bs-toggle="tooltip" title="SQL"></i>
                                    <p>SQL</p>
                                </div>
                                <div class="p-3 text-center">
                                    <i class="fas fa-code fa-3x text-warning" data-bs-toggle="tooltip" title="Python"></i>
                                    <p>Python</p>
                                </div>
                                <div class="p-3 text-center">
                                    <i class="fas fa-network-wired fa-3x text-info" data-bs-toggle="tooltip" title="AJAX"></i>
                                    <p>AJAX</p>
                                </div>
                                <div class="p-3 text-center">
                                    <i class="fab fa-js-square fa-3x text-yellow" style="color: #f7df1e;" data-bs-toggle="tooltip" title="JavaScript"></i>
                                    <p>JavaScript</p>
                                </div>
                                <div class="p-3 text-center">
                                    <i class="fab fa-php fa-3x text-purple" data-bs-toggle="tooltip" title="PHP"></i>
                                    <p>PHP</p>
                                </div>
                                <div class="p-3 text-center">
                                    <i class="fas fa-leaf fa-3x text-success" data-bs-toggle="tooltip" title="MongoDB"></i>
                                    <p>MongoDB</p>
                                </div>
                            </div>
                            <div class="mt-4 text-center">
                                <p class="fw-bold">
                                    Vous aurez l'opportunité de répondre à des questions sur chacun de ces langages. Soyez prêts à relever le défi !
                                </p>
                                <p class="text-muted">
                                    Chaque bonne réponse vous rapproche de la maîtrise complète du développement.
                                </p>
                                <p class="fst-italic">
                                    Terminez avec le meilleur score possible pour dominer le classement !
                                </p>
                            </div>
                            <div class="text-center">
                                <a href="index.php?page=qcm_dev/evaluation_final_divers" class="card__cta">
                                    <i class="fas fa-play-circle"></i> Commencer l'évaluation
                                </a>
                            </div>
                            <!-- Réseaux sociaux -->
                            <div class="card__social mt-3">
                                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                                    <i class="fab fa-facebook card__social-icon"></i>
                                </a>
                                <a href="https://www.twitter.com" target="_blank" title="Twitter">
                                    <i class="fab fa-twitter card__social-icon"></i>
                                </a>
                                <a href="https://www.linkedin.com" target="_blank" title="LinkedIn">
                                    <i class="fab fa-linkedin card__social-icon"></i>
                                </a>
                                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                                    <i class="fab fa-instagram card__social-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 custom-container">
    <h2 class="text-center text-uppercase text-warning font-weight-bold">Classements par Catégories</h2>

    <?php if (!empty($leaderboards)): ?>
        <?php foreach ($leaderboards as $category => $scores): ?>
            <div class="container mt-4 p-4 border rounded shadow leaderboard-category">
                <h3 class="text-primary text-center"><?= htmlspecialchars($category) ?></h3>
                <ul class="list-group mt-3 leaderboard-list">
                    <?php if (!empty($scores)): ?>
                        <?php foreach ($scores as $index => $score): ?>
                            <li 
                                class="list-group-item d-flex justify-content-between align-items-center position-relative"
                                data-rank="<?= $index + 1 ?>"
                            >
                                <div class="rank-badge">
                                    <?php if ($index === 0): ?>
                                        🏆 <span class="text-gold">1</span>
                                    <?php elseif ($index === 1): ?>
                                        🥈 <span class="text-silver">2</span>
                                    <?php elseif ($index === 2): ?>
                                        🥉 <span class="text-bronze">3</span>
                                    <?php else: ?>
                                        <span><?= $index + 1 ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="player-info">
                                    <strong><?= htmlspecialchars($score['pseudo']) ?></strong>
                                </div>
                                <div class="player-score">
                                    <?php if ($category === "Evaluation finale"): ?>
                                        <span class="gaming-font"><?= $score['score'] ?>/50</span>
                                    <?php elseif ($category === "Evaluation finale - Langages"): ?>
                                        <span class="gaming-font"><?= $score['score'] ?>/100</span>
                                    <?php else: ?>
                                        <span class="gaming-font"><?= $score['score'] ?>/20</span>
                                    <?php endif; ?>
                                    <small class="text-muted"><?= $score['created_at'] ?></small>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <li class="list-group-item text-center">Aucun score enregistré pour cette catégorie.</li>
                    <?php endif; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="text-center">Aucune donnée disponible pour le moment.</p>
    <?php endif; ?>
</div>

    </div>
</div>
<!-- Bootstrap JS pour les fonctionnalités responsive -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const searchBar = document.getElementById('searchBar');
    const searchResults = document.getElementById('searchResults');

    // Liste des liens avec leurs noms
    const links = [
    // Accueil et Mémo
    { name: 'Accueil', url: 'index.php?page=home' },

    // HTML et CSS
    { name: 'Cours HTML', url: 'index.php?page=cours_html' },
    { name: 'Cours CSS', url: 'index.php?page=cours_css' },
    { name: 'Cours Bootstrap', url: 'index.php?page=cours_bootstrap' },
    { name: 'Cours Tailwind CSS', url: 'index.php?page=cours_tailwind' },

    // UX/UI
    { name: 'Introduction à l\'UX', url: 'index.php?page=cours_ux' },
    { name: 'Introduction à l\'UI', url: 'index.php?page=cours_ui' },
    { name: 'Accessibilité Web', url: 'index.php?page=cours_accessibilite' },
    { name: 'Prototypage et Wireframes', url: 'index.php?page=cours_prototypage' },

    // Langages de Programmation
    { name: 'Cours JavaScript', url: 'index.php?page=cours_js' },
    { name: 'Cours PHP', url: 'index.php?page=cours_php' },
    { name: 'Cours Python', url: 'index.php?page=cours_python' },
    { name: 'Cours Java', url: 'index.php?page=cours_java' },
    { name: 'Cours Rust', url: 'index.php?page=cours_rust' },
    { name: 'Cours Go', url: 'index.php?page=cours_go' },
    { name: 'Cours Swift', url: 'index.php?page=cours_swift' },
    { name: 'Cours C', url: 'index.php?page=cours_c' },
    { name: 'Cours C++', url: 'index.php?page=cours_cpp' },
    { name: 'Cours Kotlin', url: 'index.php?page=cours_kotlin' },

    // Frameworks et Bibliothèques
    { name: 'Cours AJAX', url: 'index.php?page=cours_ajax' },
    { name: 'Cours React', url: 'index.php?page=cours_react' },
    { name: 'Cours Vue.js', url: 'index.php?page=cours_vuejs' },
    { name: 'Cours Nest.js', url: 'index.php?page=cours_nestjs' },
    { name: 'Cours Angular', url: 'index.php?page=cours_angular' },
    { name: 'Cours Django', url: 'index.php?page=cours_django' },
    { name: 'Cours Laravel', url: 'index.php?page=cours_laravel' },
    { name: 'Cours Symfony', url: 'index.php?page=cours_symfony' },
    { name: 'Cours Tailwind CSS', url: 'index.php?page=cours_tailwind' },
    { name: 'Cours jQuery', url: 'index.php?page=cours_jquery' },
    { name: 'Cours Three.js', url: 'index.php?page=cours_threejs' },
    { name: 'Cours Next.js', url: 'index.php?page=cours_nextjs' },
    { name: 'Cours Ember.js', url: 'index.php?page=cours_emberjs' },
    { name: 'Cours Backbone.js', url: 'index.php?page=cours_backbonejs' },
    { name: 'Cours Express.js', url: 'index.php?page=cours_expressjs' },
    { name: 'Cours Flask', url: 'index.php?page=cours_flask' },
    { name: 'Cours Spring', url: 'index.php?page=cours_spring' },
    { name: 'Cours Slim', url: 'index.php?page=cours_slim' },
    { name: 'Cours Ruby on Rails', url: 'index.php?page=cours_rails' },
    { name: 'Cours CakePHP', url: 'index.php?page=cours_cakephp' },
    { name: 'Cours Phalcon', url: 'index.php?page=cours_phalcon' },

    // Containerisation et DevOps
    { name: 'Cours Docker', url: 'index.php?page=cours_docker' },
    { name: 'Cours Kubernetes', url: 'index.php?page=cours_kubernetes' },
    { name: 'Cours CI/CD', url: 'index.php?page=cours_ci_cd' },
    { name: 'Cours Ansible', url: 'index.php?page=cours_ansible' },
    { name: 'Cours Terraform', url: 'index.php?page=cours_terraform' },

    // Bases de Données
    { name: 'Cours SQL', url: 'index.php?page=cours_sql' },
    { name: 'Cours MySQL', url: 'index.php?page=cours_mysql' },
    { name: 'Cours MongoDB', url: 'index.php?page=cours_mongodb' },
    { name: 'Cours PostgreSQL', url: 'index.php?page=cours_postgresql' },
    { name: 'Cours Redis', url: 'index.php?page=cours_redis' },
    { name: 'Cours Oracle', url: 'index.php?page=cours_oracle' },

    // Méthodologies
    { name: 'Cours Scrum', url: 'index.php?page=cours_scrum' },
    { name: 'Cours Kanban', url: 'index.php?page=cours_kanban' },
    { name: 'Cours Méthodologie Agile', url: 'index.php?page=cours_agile' },
    { name: 'Cours Développement Dirigé par les Tests (TDD)', url: 'index.php?page=cours_tdd' },
    { name: 'Cours DevOps', url: 'index.php?page=cours_devops' },
    { name: 'Cours Lean', url: 'index.php?page=cours_lean' },
    { name: 'Cours Cascade', url: 'index.php?page=cours_cascade' },

    // Sécurité et Bonnes Pratiques
    { name: 'Sécurité Web', url: 'index.php?page=cours_securite_web' },
    { name: 'Bonnes Pratiques de Code', url: 'index.php?page=cours_bonnes_pratiques_code' },
    { name: 'Gestion des Erreurs', url: 'index.php?page=cours_gestion_erreurs' },
    { name: 'Tests Unitaires', url: 'index.php?page=cours_tests_unitaires' },
    { name: 'Optimisation de la Performance', url: 'index.php?page=cours_performance' },

    // QCM
    { name: 'QCM sur les dates clés', url: 'index.php?page=qcm_dev/qcm1' },
    { name: 'QCM sur les définitions clés', url: 'index.php?page=qcm_dev/qcm2' },
    { name: 'QCM sur les méthodologies', url: 'index.php?page=qcm_dev/qcm3' },
    { name: 'QCM sur les techniques utilisées', url: 'index.php?page=qcm_dev/qcm4' },
    { name: 'QCM sur les points techniques approfondis', url: 'index.php?page=qcm_dev/qcm5' },
    { name: 'QCM sur les outils à maîtriser', url: 'index.php?page=qcm_dev/qcm6' },
    { name: 'QCM sur les bonnes pratiques', url: 'index.php?page=qcm_dev/qcm7' },
    { name: 'Evaluation finale', url: 'index.php?page=qcm_dev/evaluation_final' },
    { name: 'Evaluation finale - Langages', url: 'index.php?page=qcm_dev/evaluation_final_divers' },

    // Quiz spécifiques
    { name: 'QCM sur HTML', url: 'index.php?page=qcm_dev/qcm_html' },
    { name: 'QCM sur CSS', url: 'index.php?page=qcm_dev/qcm_css' },
    { name: 'QCM sur PHP', url: 'index.php?page=qcm_dev/qcm_php' },
    { name: 'QCM sur JavaScript', url: 'index.php?page=qcm_dev/qcm_js' },
    { name: 'QCM sur Python', url: 'index.php?page=qcm_dev/qcm_python' },
    { name: 'QCM sur MongoDB', url: 'index.php?page=qcm_dev/qcm_mongodb' },
    { name: 'QCM sur AJAX', url: 'index.php?page=qcm_dev/qcm_ajax' },
    { name: 'QCM sur le Prototypage', url: 'index.php?page=qcm_dev/qcm_prototypage' },
    { name: 'QCM sur l\'UI', url: 'index.php?page=qcm_dev/qcm_ui' },
    { name: 'QCM sur l\'UX', url: 'index.php?page=qcm_dev/qcm_ux' },
    { name: 'QCM sur Scrum', url: 'index.php?page=qcm_dev/qcm_scrum' },
    { name: 'QCM sur SQL', url: 'index.php?page=qcm_dev/qcm_sql' }
];


    // Fonction pour filtrer les résultats
    searchBar.addEventListener('input', function () {
        const query = searchBar.value.toLowerCase();
        searchResults.innerHTML = ''; // Vider les résultats précédents

        if (query) {
            const filteredLinks = links.filter(link =>
                link.name.toLowerCase().includes(query)
            );

            // Afficher les résultats filtrés
            filteredLinks.forEach(link => {
                const li = document.createElement('li');
                li.className = 'list-group-item';
                const anchor = document.createElement('a');
                anchor.href = link.url;
                anchor.textContent = link.name;
                anchor.className = 'text-primary';
                li.appendChild(anchor);
                searchResults.appendChild(li);
            });

            // Si aucun résultat, afficher un message
            if (filteredLinks.length === 0) {
                const li = document.createElement('li');
                li.className = 'list-group-item text-muted';
                li.textContent = 'Aucun résultat trouvé.';
                searchResults.appendChild(li);
            }
        }
    });
});

</script>
</body>
</html>
