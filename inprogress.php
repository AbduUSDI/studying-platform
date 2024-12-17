<?php

$title = "In progress - En cours de développement";

include_once 'templates/header_wo_sb.php';
?>
    <div class="content">
        <div class="container text-center">
            <h1 style="font-size: 4.5em; animation: clignoter 1.5s infinite;">
                🚧 En cours de construction 🚧
            </h1>
            <h2>Cette page sera bientôt disponible</h2>
            <p class="intro-text">
                Merci de votre patience ! Nous travaillons actuellement sur cette page pour améliorer votre expérience.
            </p>
            <div class="visual-example">
                <div class="visual-box" style="background-color: #ffeeba;">Revérifiez plus tard</div>
                <div class="visual-box" style="background-color: #c3e6cb;">Contactez-nous pour plus d'infos</div>
            </div>
            <button class="btn-primary" onclick="window.location.href='index.php?page=home'">
                Retour à l'accueil
            </button>
        </div>
    </div>

<?php include_once 'templates/footer.php';