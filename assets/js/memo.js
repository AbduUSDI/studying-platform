document.addEventListener('DOMContentLoaded', () => {
    for (let i = 2; i <= 17; i++) {
        const slide = document.querySelector(`#slide${i}`);
        if (slide) {
            slide.style.display = 'none';
        }
    }

    // Activer la vérification en temps réel pour chaque champ de saisie
    const inputs = document.querySelectorAll('.fill-in');
    inputs.forEach(input => {
        input.addEventListener('input', () => {
            const answer = input.getAttribute('data-answer');
            if (input.value.trim().toLowerCase() === answer.toLowerCase()) {
                input.classList.add('correct');
                input.classList.remove('incorrect');
            } else if (input.value.trim() !== "") {
                input.classList.add('incorrect');
                input.classList.remove('correct');
            } else {
                input.classList.remove('correct', 'incorrect');
            }
        });
    });
});

function validateSlide(currentSlideNumber) {
    const slide = document.querySelector(`#slide${currentSlideNumber}`);
    const inputs = slide.querySelectorAll('.fill-in');
    const messageContainer = document.getElementById(`message${currentSlideNumber}`);
    let allCorrect = true;
    let allFilled = true;

    inputs.forEach(input => {
        const answer = input.getAttribute('data-answer');
        if (input.value.trim() === "") {
            input.classList.remove("correct", "incorrect");
            allFilled = false;
        } else if (input.value.trim().toLowerCase() === answer.toLowerCase()) {
            input.classList.add("correct");
            input.classList.remove("incorrect");
        } else {
            input.classList.add("incorrect");
            input.classList.remove("correct");
            allCorrect = false;
        }
    });

    if (!allFilled) {
        messageContainer.innerHTML = "<span style='color: orange;'>Veuillez remplir tous les champs avant de vérifier.</span>";
    } else if (allCorrect) {
        messageContainer.innerHTML = "<span style='color: green;'>Toutes les réponses sont correctes ! Vous pouvez passer à la prochaine slide.</span>";
        hideAllAnswerContainers();

        slide.classList.add('fade-out');
        setTimeout(() => {
            slide.style.display = 'none';
            slide.classList.remove('fade-out');
            
            const nextSlide = document.querySelector(`#slide${currentSlideNumber + 1}`);
            if (nextSlide) {
                nextSlide.classList.add('fade-in');
                nextSlide.style.display = 'block';
                setTimeout(() => nextSlide.classList.remove('fade-in'), 1000);
            } else {
                alert("Vous avez terminé toutes les slides !");
            }
        }, 1000);
    } else {
        messageContainer.innerHTML = "<span style='color: red;'>Certaines réponses sont incorrectes. Veuillez vérifier les champs en rouge.</span>";
    }
}

function resetSlides() {
    // Masquer toutes les diapositives sauf la première et réinitialiser tous les champs et messages
    for (let i = 1; i <= 17; i++) {
        const slide = document.querySelector(`#slide${i}`);
        if (slide) {
            slide.style.display = i === 1 ? 'block' : 'none';
            slide.classList.remove('fade-out', 'fade-in'); // Supprimer les animations en cours
        }

        const messageContainer = document.getElementById(`message${i}`);
        if (messageContainer) {
            messageContainer.innerHTML = ""; // Effacer les messages
        }
    }

    // Effacer le contenu de chaque champ de saisie et retirer les styles de validation
    const allInputs = document.querySelectorAll('.fill-in');
    allInputs.forEach(input => {
        input.value = ""; // Réinitialiser le texte
        input.classList.remove('correct', 'incorrect'); // Retirer les styles de validation
    });

    hideAllAnswerContainers(); // Masquer tous les conteneurs d'indices
}

function hideAllAnswerContainers() {
    const answerContainers = document.querySelectorAll('[id^="answers-container"]');
    answerContainers.forEach(container => {
        container.classList.add('fade-out');
        setTimeout(() => {
            container.style.display = 'none';
            container.classList.remove('fade-out');
        }, 1000);
    });
}

document.addEventListener('DOMContentLoaded', () => {
    const answerContainers = document.querySelectorAll('[id^="answers-container"]');
    answerContainers.forEach(container => {
        container.style.display = 'none';
    });

    function toggleHintContainer(slideId) {
        const container = document.getElementById(`answers-container${slideId}`);
        if (container) {
            if (container.style.display === 'none') {
                container.style.display = 'block';
                container.classList.add('fade-in');
                container.classList.remove('fade-out');
                setTimeout(() => container.classList.remove('fade-in'), 1000);
            } else {
                container.classList.add('fade-out');
                container.classList.remove('fade-in');
                setTimeout(() => {
                    container.style.display = 'none';
                    container.classList.remove('fade-out');
                }, 1000);
            }
        }
    }

    document.querySelectorAll('[id^="indicebutton"]').forEach(button => {
        button.addEventListener('click', () => {
            const slideId = button.id.replace('indicebutton', '');
            toggleHintContainer(slideId);
        });
    });
});
