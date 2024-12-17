document.addEventListener('DOMContentLoaded', function () {
    const searchBar = document.getElementById('searchBar');
    const searchResults = document.getElementById('searchResults');

    // Liste des liens avec leurs noms
    const links = [
        { name: 'QCM sur les dates clés', url: 'index.php?page=qcm_dev/qcm1' },
        { name: 'QCM sur les définitions clés', url: 'index.php?page=qcm_dev/qcm2' },
        { name: 'QCM sur les méthodologies', url: 'index.php?page=qcm_dev/qcm3' },
        { name: 'QCM sur les techniques utilisées', url: 'index.php?page=qcm_dev/qcm4' },
        { name: 'QCM sur les points techniques approfondis', url: 'index.php?page=qcm_dev/qcm5' },
        { name: 'QCM sur les outils à maîtriser', url: 'index.php?page=qcm_dev/qcm6' },
        { name: 'QCM sur les bonnes pratiques', url: 'index.php?page=qcm_dev/qcm7' },
        { name: 'Cours HTML', url: 'index.php?page=cours_html' },
        { name: 'Cours CSS', url: 'index.php?page=cours_css' },
        { name: 'Cours JavaScript', url: 'index.php?page=cours_js' },
        { name: 'Cours PHP', url: 'index.php?page=cours_php' },
        { name: 'Cours Python', url: 'index.php?page=cours_python' },
        { name: 'Cours MongoDB', url: 'index.php?page=cours_mongodb' },
        { name: 'Évaluation finale', url: 'index.php?page=qcm_dev/evaluation_final' }
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
