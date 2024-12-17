<!-- Footer -->
<footer id="footerId" class="bg-light text-center text-lg-start fixed-bottom footer-custom" style="height: 60px; overflow: hidden; transition: height 0.3s ease-in-out;">
    <!-- Toggle Button -->
    <button id="toggleFooterBtn" class="btn btn-secondary" style="width: 50px; height: 50px; border-radius: 50%; position: absolute; top: 5px; left: 50%; transform: translateX(-50%); z-index: 1000;">
        <i id="toggleFooterIcon" class="fas fa-chevron-up"></i>
    </button>

    <!-- Footer Content -->
    <div class="footer-content">
        <div class="container custom-container">
            <div class="row">
                <!-- Useful Links -->
                <div class="col-md-6 card__icon">
                    <h4 class="footer-title">Liens utiles</h4>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-envelope mr-2"></i> Nous contacter</a></li>
                        <li><a href="#"><i class="fas fa-clock mr-2"></i> Nos horaires</a></li>
                        <li><a href="#"><i class="fas fa-info-circle mr-2"></i> À propos de nous</a></li>
                        <li><a href="#"><i class="fas fa-file-alt mr-2"></i> Mentions légales</a></li>
                        <li><a href="#"><i class="fas fa-user-shield mr-2"></i> Politique de confidentialité</a></li>
                    </ul>
                </div>
                <!-- Social Media -->
                <div class="col-md-6">
                    <h4 class="footer-title">Suivez-nous</h4>
                    <div class="footer-social card__icon">
                        <a href="#" class="footer-social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="footer-social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="footer-social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="footer-social-icon"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://www.abduusdi.fr/cours/assets/js/scripts.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const searchBar = document.getElementById('searchBar');
    const searchResults = document.getElementById('searchResults');

    // Liste des liens avec leurs noms
    const links = [
    // Accueil et Mémo
    { name: 'Accueil', url: 'index.php?page=home' },
    { name: 'Accueil - QCM', url: 'index.php?page=qcm_dev/index' },

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