<?php

$title = "Erreur 404 - Page non trouvée !";

include_once 'templates/header_wo_sb.php';
?>

<div class="content">
        <div class="container text-center">
            <h1 style="font-size: 5em; animation: clignoter 1.5s infinite;">
                4<span style="color: orangered;">0</span>4
            </h1>
            <h2>Page non trouvée</h2>
            <p class="intro-text">
                Oups ! Il semble que la page que vous cherchez n'existe pas. Elle a peut-être été déplacée ou supprimée.
            </p>
            <div class="visual-example">
                <div class="visual-box" style="background-color: #d1ecf1;">Vérifiez l'URL</div>
                <div class="visual-box" style="background-color: #ffeeba;"><a href="index.php?page=home">Retournez à l'accueil</a></div>
                <div class="visual-box" style="background-color: #c3e6cb;">Contactez le support</div>
            </div>
            <button class="btn-primary" onclick="window.location.href='index.php?page=home'">
                Retour à l'accueil
            </button>
        </div>
    </div>

<?php include_once 'templates/footer.php';