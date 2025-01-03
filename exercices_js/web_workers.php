<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Web Workers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">Exercice sur les Web Workers en JavaScript</h1>
    <div id="game-area" class="row mt-4">
        <!-- Zone de questions -->
        <div class="col-md-6">
            <div id="question-container" class="mb-4">
                <h3>Question :</h3>
                <p id="question-text">La question s'affichera ici.</p>
            </div>
            <div id="answer-container">
                <!-- Boutons pour les réponses -->
                <div id="choices" class="d-flex flex-column gap-2"></div>
            </div>
        </div>
        <!-- Zone de dessin -->
        <div class="col-md-6 text-center">
            <div id="drawing-area">
                <svg width="200" height="400">
                    <!-- Poutre -->
                    <line x1="20" y1="380" x2="180" y2="380" stroke="black" stroke-width="3" />
                    <line x1="100" y1="380" x2="100" y2="50" stroke="black" stroke-width="3" />
                    <line x1="100" y1="50" x2="160" y2="50" stroke="black" stroke-width="3" />
                    <line x1="160" y1="50" x2="160" y2="80" stroke="black" stroke-width="3" />
                    <!-- Corde -->
                    <line id="rope" x1="160" y1="80" x2="160" y2="120" stroke="black" stroke-width="2" style="visibility: hidden;" />
                    <!-- Bonhomme -->
                    <circle id="head" cx="160" cy="140" r="20" stroke="black" stroke-width="2" fill="none" style="visibility: hidden;" />
                    <line id="body" x1="160" y1="160" x2="160" y2="220" stroke="black" stroke-width="2" style="visibility: hidden;" />
                    <line id="left-arm" x1="160" y1="180" x2="140" y2="200" stroke="black" stroke-width="2" style="visibility: hidden;" />
                    <line id="right-arm" x1="160" y1="180" x2="180" y2="200" stroke="black" stroke-width="2" style="visibility: hidden;" />
                    <line id="left-leg" x1="160" y1="220" x2="140" y2="260" stroke="black" stroke-width="2" style="visibility: hidden;" />
                    <line id="right-leg" x1="160" y1="220" x2="180" y2="260" stroke="black" stroke-width="2" style="visibility: hidden;" />
                </svg>
            </div>
        </div>
    </div>
    <!-- Zone de message -->
    <div id="message-container" class="text-center mt-4">
        <p id="game-message" class="text-muted">Bonne chance !</p>
    </div>
    <!-- Boutons -->
    <div class="text-center mt-4">
        <button class="btn btn-danger mb-3" onclick="recommencer()">Recommencer</button>
        <?php include '../templates/retour.php' ?>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    const questions = [
        {
            question: "Qu'est-ce qu'un Web Worker ?",
            options: [
                "Un script qui s'exécute en arrière-plan sans bloquer le thread principal",
                "Un framework JavaScript pour le backend",
                "Un gestionnaire d'événements DOM",
                "Un type de bibliothèque JavaScript"
            ],
            answer: "Un script qui s'exécute en arrière-plan sans bloquer le thread principal"
        },
        {
            question: "Comment crée-t-on un Web Worker ?",
            options: [
                "new Worker('script.js')",
                "Worker.create('script.js')",
                "WebWorker('script.js')",
                "import Worker from 'script.js'"
            ],
            answer: "new Worker('script.js')"
        },
        {
            question: "Comment le thread principal communique-t-il avec un Web Worker ?",
            options: [
                "Avec postMessage() et onmessage",
                "Avec fetch() et response.json()",
                "Avec une API HTTP",
                "Avec des appels AJAX"
            ],
            answer: "Avec postMessage() et onmessage"
        },
        {
            question: "Quelle méthode permet de terminer un Web Worker ?",
            options: [
                "worker.terminate()",
                "worker.close()",
                "worker.stop()",
                "worker.kill()"
            ],
            answer: "worker.terminate()"
        },
        {
            question: "Quelle méthode permet d'envoyer un message à un Web Worker ?",
            options: [
                "worker.postMessage(data)",
                "worker.send(data)",
                "worker.emit(data)",
                "worker.dispatch(data)"
            ],
            answer: "worker.postMessage(data)"
        },
        {
            question: "Que se passe-t-il si un Web Worker rencontre une erreur ?",
            options: [
                "Un événement 'error' est émis",
                "Il se ferme automatiquement",
                "Il bloque le thread principal",
                "Rien ne se passe"
            ],
            answer: "Un événement 'error' est émis"
        },
        {
            question: "Quels types de données peuvent être envoyés via postMessage() ?",
            options: [
                "Des objets sérialisables comme JSON",
                "Des fonctions",
                "Des références DOM",
                "Des types non sérialisables"
            ],
            answer: "Des objets sérialisables comme JSON"
        },
        {
            question: "Quel type de stockage de données permet de partager entre Web Workers ?",
            options: [
                "SharedArrayBuffer",
                "localStorage",
                "sessionStorage",
                "IndexedDB"
            ],
            answer: "SharedArrayBuffer"
        },
        {
            question: "Un Web Worker a-t-il accès au DOM ?",
            options: [
                "Non",
                "Oui",
                "Seulement avec un contexte sécurisé",
                "Oui, avec l'API fetch"
            ],
            answer: "Non"
        },
        {
            question: "Comment traiter des tâches longues dans un Web Worker ?",
            options: [
                "En divisant les tâches en segments avec setTimeout()",
                "En bloquant le thread principal",
                "En utilisant async/await",
                "En instanciant plusieurs workers"
            ],
            answer: "En divisant les tâches en segments avec setTimeout()"
        }
    ];

    let currentQuestion = 0;
    let errors = 0;

    function updateQuestion() {
        const questionData = questions[currentQuestion];
        document.getElementById("question-text").innerText = questionData.question;

        const choicesContainer = document.getElementById("choices");
        choicesContainer.innerHTML = ""; // Réinitialiser les choix

        questionData.options.forEach(option => {
            const button = document.createElement("button");
            button.innerText = option;
            button.classList.add("btn", "btn-outline-primary");
            button.addEventListener("click", () => handleAnswer(option, button));
            choicesContainer.appendChild(button);
        });
    }

    function handleAnswer(selectedOption, button) {
        const questionData = questions[currentQuestion];

        if (selectedOption === questionData.answer) {
            button.classList.remove("btn-outline-primary");
            button.classList.add("btn-success");
            setTimeout(() => {
                currentQuestion++;
                if (currentQuestion < questions.length) {
                    updateQuestion();
                    showMessage("Bonne réponse ! Continuez.", false);
                } else {
                    showMessage("Félicitations ! Vous avez gagné.", false);
                    disableGame();
                }
            }, 1000);
        } else {
            button.classList.remove("btn-outline-primary");
            button.classList.add("btn-danger");
            errors++;
            const parts = ["rope", "head", "body", "left-arm", "right-arm", "left-leg", "right-leg"];
            if (errors <= parts.length) {
                drawPart(parts[errors - 1]);
            }
            if (errors >= 7) {
                showMessage("Dommage, vous avez perdu ! Le bonhomme est complet.", true);
                disableGame();
            } else {
                showMessage("Mauvaise réponse. Essayez encore !", true);
            }
        }
    }

    function drawPart(partId) {
        document.getElementById(partId).style.visibility = "visible";
    }

    function showMessage(message, isError = false) {
        const messageElement = document.getElementById("game-message");
        messageElement.innerText = message;
        messageElement.classList.toggle("text-danger", isError);
        messageElement.classList.toggle("text-success", !isError);
    }

    function disableGame() {
        document.getElementById("choices").innerHTML = "";
    }

    function recommencer() {
        currentQuestion = 0;
        errors = 0;
        const parts = ["rope", "head", "body", "left-arm", "right-arm", "left-leg", "right-leg"];
        parts.forEach(part => {
            document.getElementById(part).style.visibility = "hidden";
        });
        showMessage("Bonne chance !", false);
        updateQuestion();
    }

    // Initialiser le jeu
    updateQuestion();
</script>

</body>
</html>
