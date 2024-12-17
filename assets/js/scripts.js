document.addEventListener('DOMContentLoaded', () => {
    // Gestion des dropdowns
    const dropdowns = document.getElementsByClassName("dropdown-btn");
    for (let i = 0; i < dropdowns.length; i++) {
        dropdowns[i].addEventListener("click", function() {
            this.classList.toggle("active");
            const dropdownContent = this.nextElementSibling;
            if (dropdownContent) {
                dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
            }
        });
    }

    // Gestion de la sidebar
    const sidebar = document.querySelector('.sidebar');
    const sidebarToggleBtn = document.getElementById('sidebarToggle');

    if (sidebar && sidebarToggleBtn) {
        sidebarToggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });

        // Fermer la sidebar en cliquant à l'extérieur
        document.addEventListener('click', (e) => {
            if (!sidebar.contains(e.target) && !sidebarToggleBtn.contains(e.target)) {
                sidebar.classList.remove('active');
            }
        });

        // Fermer la sidebar lorsqu'un lien est cliqué
        sidebar.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                sidebar.classList.remove('active');
            });
        });
    }

    // Gestion du footer
    const footer = document.getElementById('footerId');
    const footerContent = document.querySelector(".footer-content");
    const footerToggleBtn = document.getElementById('toggleFooterBtn');
    const footerToggleIcon = document.getElementById('toggleFooterIcon');

    // Initialisation : état du footer masqué
    footer.style.height = '60px';
    footerContent.style.maxHeight = '0';
    footerContent.style.opacity = '0';

    footerToggleBtn.addEventListener('click', () => {
        if (footer.style.height === '60px') {
            footer.style.height = '400px'; // Agrandir le footer
            footerContent.style.maxHeight = '400px';
            footerContent.style.opacity = '1';
            footerToggleIcon.classList.replace('fa-chevron-up', 'fa-chevron-down');
        } else {
            footer.style.height = '60px'; // Réduire le footer
            footerContent.style.maxHeight = '0';
            footerContent.style.opacity = '0';
            footerToggleIcon.classList.replace('fa-chevron-down', 'fa-chevron-up');
        }
    });
});

