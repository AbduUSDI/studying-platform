<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explorez des cours et quiz interactifs pour développer vos compétences en développement web. Testez vos connaissances sur HTML, CSS, PHP, JavaScript, et bien plus.">
    <meta name="keywords" content="Développement web, QCM interactifs, HTML, CSS, JavaScript, PHP, Quiz web, Formation développeur, Open-source, Gratuit, FullStackExplorer">
    <meta name="author" content="Abduusdi">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta property="og:description" content="Testez vos connaissances et progressez en développement web avec nos quiz interactifs et nos cours approfondis.">
    <meta property="og:image" content="https://www.abduusdi.fr/cours/assets/og-image.jpg">
    <meta property="og:url" content="https://www.abduusdi.fr">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta name="twitter:description" content="Rejoignez nos cours et quiz interactifs pour devenir un expert en développement web et mobile.">
    <meta name="twitter:image" content="https://www.abduusdi.fr/cours/assets/og-image.jpg">

    <!-- Titre dynamique -->
    <title><?php echo htmlspecialchars($title); ?> | Cours et Quiz Développeur Web</title>

    <!-- Favicon -->
    <link rel="icon" href="https://www.abduusdi.fr/cours/assets/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://www.abduusdi.fr/cours/assets/favicon.ico">

    <!-- Feuilles de style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://www.abduusdi.fr/cours/assets/css/cours.css"/>

    <!-- JSON-LD pour les données structurées -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "<?php echo htmlspecialchars($title); ?>",
      "description": "Cours et quiz interactifs pour le développement web.",
      "url": "https://www.abduusdi.fr",
      "inLanguage": "fr",
      "author": {
        "@type": "Person",
        "name": "Abduusdi"
      }
    }
    </script>
</head>
<body>

<?php include 'templates/nav.php'; ?>
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
    <br>
    <br>
</div>