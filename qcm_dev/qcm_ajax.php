<?php
// Inclure la navigation et la classe Questions
include 'templates/nav.php';
require 'fonctions.php';

$questionHandler = new Questions();
$questions = $questionHandler->getQuestionQCMAjax();

shuffle($questions);
$selectedQuestions = array_slice($questions, 0, 20);

$_SESSION['questions'] = $selectedQuestions; // Stockage des questions dans la session utilisateur.

// Définition de la catégorie pour ce QCM
$category = "AJAX";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QCM - AJAX</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://www.abduusdi.fr/cours/qcm_dev/assets/css/style.css"/>
    <link rel="stylesheet" href="https://www.abduusdi.fr/cours/assets/css/exercice.css"/>
    <link rel="stylesheet" href="https://www.abduusdi.fr/cours/assets/css/cours.css"/>
</head>
<body>
<div class="sidebar">
    <h2>Menu</h2>
    <a href="index.php?page=home">Accueil</a>
    <a class="nav-link btn btn-outline-primary my-1" href="index.php?page=memo">Memo</a>
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
    <a href="index.php?page=cours_vue">Vue.js</a>
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
<div class="container mt-5">
    <?php include_once 'retour.php'; ?>
    <h1 class="text-center mb-4 text-primary">QCM - AJAX</h1>
    <form action="index.php?page=qcm_dev/save_score" method="POST" id="qcm-form">
        <div class="row">
            <?php foreach ($selectedQuestions as $index => $question): ?>
                <div class="col-md-12 mb-4">
                    <div class="card h-100 shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0"><?= ($index + 1) . ". " . $question['question'] ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php foreach ($question['answers'] as $answerIndex => $answer): ?>
                                    <div class="col-md-6">
                                        <div class="form-check p-2">
                                            <input 
                                                type="radio"
                                                name="question-<?= $index ?>" 
                                                value="<?= $answerIndex ?>" 
                                                id="q<?= $index ?>a<?= $answerIndex ?>" 
                                                class="form-check-input styled-checkbox"
                                                required
                                            >
                                            <label class="form-check-label d-flex align-items-center" for="q<?= $index ?>a<?= $answerIndex ?>">
                                                <span class="checkbox-custom"></span>
                                                <?= $answer ?>
                                            </label>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Champ pour le pseudo -->
        <div class="mb-4">
            <label for="pseudo" class="form-label">Pseudo :</label>
            <input type="text" name="pseudo" id="pseudo" class="form-control rounded-pill shadow-sm" required>
        </div>

        <!-- Champ caché pour la catégorie -->
        <input type="hidden" name="category" value="<?= $category ?>">

        <button type="submit" class="btn btn-success w-100 shadow-lg">Valider le QCM</button>
    </form>
</div>
<script>
// Fonction pour gérer la coloration des divs
function updateAnswerStyles() {
    // Trouver toutes les divs avec la classe form-check
    const formChecks = document.querySelectorAll('.form-check');

    // Parcourir toutes les divs et vérifier leur bouton radio
    formChecks.forEach((divElement) => {
        const radioInput = divElement.querySelector('input[type="radio"]');

        // Appliquer ou retirer la classe selon l'état checked
        if (radioInput && radioInput.checked) {
            divElement.classList.add('bg-primary', 'text-white');
        } else {
            divElement.classList.remove('bg-primary', 'text-white');
        }
    });
}

// Ajouter un gestionnaire d'événement sur tous les boutons radio
document.querySelectorAll('input[type="radio"]').forEach((radio) => {
    radio.addEventListener('change', updateAnswerStyles);
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
