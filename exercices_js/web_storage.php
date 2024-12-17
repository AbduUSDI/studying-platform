<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Web Storage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">Exercice sur le Web Storage en JavaScript</h1>
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
            question: "Qu'est-ce que le Web Storage ?",
            options: [
                "Une API pour stocker des données dans le navigateur",
                "Un espace pour héberger des fichiers web",
                "Une méthode pour manipuler le DOM",
                "Un service cloud pour sauvegarder les données"
            ],
            answer: "Une API pour stocker des données dans le navigateur"
        },
        {
            question: "Quelle est la différence principale entre localStorage et sessionStorage ?",
            options: [
                "localStorage persiste après fermeture du navigateur",
                "localStorage est plus rapide",
                "sessionStorage supporte JSON natif",
                "sessionStorage est plus sécurisé"
            ],
            answer: "localStorage persiste après fermeture du navigateur"
        },
        {
            question: "Quelle méthode est utilisée pour enregistrer des données ?",
            options: [
                "setItem(key, value)",
                "saveItem(key, value)",
                "add(key, value)",
                "store(key, value)"
            ],
            answer: "setItem(key, value)"
        },
        {
            question: "Comment récupérer une donnée depuis localStorage ?",
            options: [
                "getItem(key)",
                "localStorage.key",
                "retrieve(key)",
                "fetchItem(key)"
            ],
            answer: "getItem(key)"
        },
        {
            question: "Comment supprimer une seule clé de localStorage ?",
            options: [
                "removeItem(key)",
                "delete(key)",
                "clear(key)",
                "localStorage.remove(key)"
            ],
            answer: "removeItem(key)"
        },
        {
            question: "Quelle méthode vide tout le localStorage ?",
            options: ["clear()", "reset()", "removeAll()", "localStorage.clearAll()"],
            answer: "clear()"
        },
        {
            question: "Que retourne localStorage.getItem('clé') si la clé n'existe pas ?",
            options: ["null", "undefined", "false", "Erreur"],
            answer: "null"
        },
        {
            question: "Quel type de données peut-on stocker directement dans localStorage ?",
            options: [
                "Une chaîne de caractères",
                "Un objet",
                "Un tableau",
                "N'importe quel type de données"
            ],
            answer: "Une chaîne de caractères"
        },
        {
            question: "Comment stocker un objet dans localStorage ?",
            options: [
                "En le convertissant en JSON avec JSON.stringify()",
                "En utilisant localStorage.saveObject()",
                "En l'ajoutant directement",
                "En le sérialisant avec .toString()"
            ],
            answer: "En le convertissant en JSON avec JSON.stringify()"
        },
        {
            question: "Quelle méthode peut être utilisée pour parcourir toutes les clés dans localStorage ?",
            options: [
                "localStorage.key(index)",
                "localStorage.forEach()",
                "Object.keys(localStorage)",
                "localStorage.getKeys()"
            ],
            answer: "localStorage.key(index)"
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
