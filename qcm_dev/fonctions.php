<?php

// Classe Database pour la connexion à MySQL
class Database 
{
    private static $instance = null;
    private $connection;
    private $hostname = 'jaoftv.stackhero-network.com';
    private $port = '5095';
    private $user = 'Abdurahman';
    private $password = 'Abdufufu2525+';
    private $database = 'qcm_database';

    private function __construct() {
        try {
            $this->connection = new PDO(
                "mysql:host={$this->hostname};port={$this->port};dbname={$this->database}",
                $this->user,
                $this->password,
                [
                    PDO::MYSQL_ATTR_SSL_CA => '/app/ssl/isrgrootx1.pem',
                    PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => true,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]
            );
        } catch (PDOException $e) {
            error_log("Erreur de connexion à la base de données : " . $e->getMessage());
            throw new Exception("Impossible de se connecter à la base de données");
        }
    }

    // Singleton : obtenir l'instance unique
    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Obtenir la connexion PDO
    public function getConnection(): PDO
    {
        if ($this->connection === null) {
            throw new Exception("Connexion à la base de données non initialisée.");
        }
        return $this->connection;
    }
}

// Classe Leaderboard pour la gestion des scores
class Leaderboard
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    // Ajouter un score au leaderboard
    public function addScore($pseudo, $score, $category)
    {
        try {
            $query = $this->db->prepare("INSERT INTO leaderboard (pseudo, score, category) VALUES (:pseudo, :score, :category)");
            $query->execute([
                ':pseudo' => $pseudo,
                ':score' => $score,
                ':category' => $category,
            ]);
        } catch (PDOException $e) {
            die("Erreur lors de l'ajout du score : " . $e->getMessage());
        }
    }
    public function getCategories()
    {
        try {
            $query = $this->db->prepare("SELECT DISTINCT category FROM leaderboard ORDER BY category ASC");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_COLUMN);
        } catch (PDOException $e) {
            die("Erreur lors de la récupération des catégories : " . $e->getMessage());
        }
    }


    // Récupérer les scores classés par ordre décroissant
    public function getTopScores($limit = 10, $category = null)
    {
        try {
            if ($category) {
                $query = $this->db->prepare(
                    "SELECT pseudo, score, category, created_at 
                     FROM leaderboard 
                     WHERE category = :category 
                     ORDER BY score DESC, created_at ASC 
                     LIMIT :limit"
                );
                $query->bindValue(':category', $category, PDO::PARAM_STR);
            } else {
                $query = $this->db->prepare(
                    "SELECT pseudo, score, category, created_at 
                     FROM leaderboard 
                     ORDER BY score DESC, created_at ASC 
                     LIMIT :limit"
                );
            }
            $query->bindValue(':limit', $limit, PDO::PARAM_INT);
            $query->execute();
    
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erreur lors de la récupération des scores : " . $e->getMessage());
        }
    }
     
}

class Questions {
    public function getQuestionQCM1() {
        return [
        // Sécurité Web
        [
            "question" => "En quelle année les cookies HTTP ont-ils été inventés pour maintenir les sessions utilisateur ?",
            "answers" => ["1993", "1995", "1998", "2000"],
            "correct" => 1,
            "explication" => "Les cookies HTTP ont été inventés en 1995 par Lou Montulli pour permettre aux navigateurs de mémoriser l'état des sessions utilisateur. Cela a révolutionné la navigation en permettant de gérer des connexions persistantes et des paniers d'achat en ligne."
        ],
        [
            "question" => "Quand les premières attaques Cross-Site Scripting (XSS) ont-elles été documentées ?",
            "answers" => ["1995", "1998", "2000", "2004"],
            "correct" => 2,
            "explication" => "Les attaques XSS ont été documentées pour la première fois en 2000. Ces attaques exploitent des vulnérabilités dans les applications web pour injecter du contenu malveillant dans des pages vues par d'autres utilisateurs."
        ],
        [
            "question" => "En quelle année OWASP (Open Web Application Security Project) a-t-il été créé ?",
            "answers" => ["2000", "2004", "2006", "2008"],
            "correct" => 1,
            "explication" => "OWASP a été fondé en 2000 pour sensibiliser les développeurs à la sécurité des applications web. Il est célèbre pour son 'OWASP Top 10', une liste des vulnérabilités les plus critiques."
        ],
        [
            "question" => "Quand l’en-tête HTTP Content-Security-Policy a-t-il été introduit pour prévenir les attaques XSS ?",
            "answers" => ["2004", "2008", "2010", "2011"],
            "correct" => 1,
            "explication" => "Introduit en 2011, l'en-tête Content-Security-Policy (CSP) aide à prévenir les attaques XSS en restreignant les sources de contenu pouvant être exécutées sur une page web."
        ],
        [
            "question" => "Quelle année marque la première publication de l'OWASP Top 10 ?",
            "answers" => ["2008", "2010", "2011", "2014"],
            "correct" => 2,
            "explication" => "La première version de l'OWASP Top 10 a été publiée en 2010. Cette liste est une référence pour identifier et corriger les principales vulnérabilités des applications web."
        ],
        [
            "question" => "Quand la vulnérabilité Heartbleed a-t-elle été révélée ?",
            "answers" => ["2012", "2014", "2016", "2018"],
            "correct" => 1,
            "explication" => "Heartbleed, une faille critique dans OpenSSL, a été révélée en 2014. Elle permettait aux attaquants d'accéder à des données sensibles en mémoire, compromettant les clés privées et les informations utilisateur."
        ],
        [
            "question" => "Quand le RGPD a-t-il été adopté officiellement par le Parlement européen ?",
            "answers" => ["27 avril 2016", "4 mai 2016", "25 mai 2018", "25 mai 2016"],
            "correct" => 0,
            "explication" => "Le RGPD (Règlement Général sur la Protection des Données) a été adopté le 27 avril 2016 pour renforcer les droits à la vie privée des citoyens de l'UE."
        ],
        [
            "question" => "À quelle date le RGPD est-il devenu obligatoire dans tous les pays de l'Union européenne ?",
            "answers" => ["27 avril 2016", "4 mai 2016", "25 mai 2016", "25 mai 2018"],
            "correct" => 3,
            "explication" => "Le RGPD est entré en vigueur le 25 mai 2018, imposant des obligations strictes aux entreprises sur la gestion des données personnelles."
        ],
        [
            "question" => "Quand le protocole TLS 1.3 a-t-il été officiellement lancé ?",
            "answers" => ["2018", "2019", "2020", "2021"],
            "correct" => 2,
            "explication" => "TLS 1.3 a été lancé en 2018 pour améliorer la sécurité des communications sur Internet en éliminant les faiblesses des versions précédentes."
        ],

        // Inventions et évolutions des langages web
        [
            "question" => "Quelle année marque la naissance de HTML par Tim Berners-Lee ?",
            "answers" => ["1991", "1993", "1995", "1997"],
            "correct" => 0,
            "explication" => "HTML a été créé en 1991 par Tim Berners-Lee pour structurer et lier les documents sur le World Wide Web."
        ],
        [
            "question" => "En quelle année CGI (Common Gateway Interface) a-t-il été créé ?",
            "answers" => ["1991", "1993", "1995", "1997"],
            "correct" => 1,
            "explication" => "CGI, créé en 1993, permettait aux serveurs web d'exécuter des scripts côté serveur pour générer des pages dynamiques."
        ],
        [
            "question" => "Quand PHP a-t-il été introduit pour la première fois ?",
            "answers" => ["1994", "1995", "1996", "1997"],
            "correct" => 0,
            "explication" => "PHP a été introduit en 1994 par Rasmus Lerdorf pour faciliter le développement web dynamique."
        ],
        [
            "question" => "Quand JavaScript a-t-il été créé par Netscape ?",
            "answers" => ["1993", "1994", "1995", "1996"],
            "correct" => 2,
            "explication" => "JavaScript a été créé en 1995 par Brendan Eich chez Netscape pour ajouter des fonctionnalités interactives aux pages web."
        ],
        [
            "question" => "Quelle année marque la création de Node.js pour exécuter JavaScript côté serveur ?",
            "answers" => ["2007", "2008", "2009", "2010"],
            "correct" => 2,
            "explication" => "Node.js, créé en 2009, a permis d'exécuter JavaScript côté serveur, révolutionnant le développement web."
        ],
        [
            "question" => "Quand TypeScript a-t-il été lancé comme un sur-ensemble de JavaScript ?",
            "answers" => ["2010", "2011", "2012", "2013"],
            "correct" => 1,
            "explication" => "TypeScript a été lancé en 2012 par Microsoft pour ajouter des types statiques à JavaScript, facilitant le développement à grande échelle."
        ],

        // Frameworks et dépendances
        [
            "question" => "Quand Spring (Java) a-t-il été lancé pour les applications d’entreprise ?",
            "answers" => ["2000", "2002", "2004", "2006"],
            "correct" => 1,
            "explication" => "Spring Framework, lancé en 2002, est un framework Java utilisé pour développer des applications d'entreprise modulaires et sécurisées."
        ],
        [
            "question" => "Quand jQuery a-t-il été lancé, simplifiant la manipulation DOM et AJAX ?",
            "answers" => ["2003", "2005", "2007", "2009"],
            "correct" => 1,
            "explication" => "jQuery a été introduit en 2006, rendant la manipulation du DOM et les requêtes AJAX beaucoup plus simples."
        ],
        [
            "question" => "En quelle année React a-t-il été introduit par Facebook ?",
            "answers" => ["2012", "2013", "2014", "2015"],
            "correct" => 1,
            "explication" => "React, lancé en 2013, est une bibliothèque JavaScript permettant de construire des interfaces utilisateur interactives et réactives."
        ],
        [
            "question" => "Quand Vue.js a-t-il été lancé pour créer des interfaces utilisateur progressives ?",
            "answers" => ["2013", "2014", "2015", "2016"],
            "correct" => 1,
            "explication" => "Vue.js, créé en 2014 par Evan You, est un framework progressif pour construire des interfaces utilisateur modernes."
        ],

        // Évolutions des navigateurs
        [
            "question" => "Quand Internet Explorer a-t-il été lancé par Microsoft ?",
            "answers" => ["1993", "1995", "1997", "1999"],
            "correct" => 1,
            "explication" => "Internet Explorer a été lancé en 1995 comme le navigateur par défaut de Windows, dominant pendant de nombreuses années."
        ],
        [
            "question" => "Quelle année marque le développement de Safari par Apple ?",
            "answers" => ["2001", "2003", "2005", "2007"],
            "correct" => 1,
            "explication" => "Safari a été lancé en 2003, devenant le navigateur par défaut pour les produits Apple."
        ],
        [
            "question" => "Quand Google Chrome a-t-il été lancé ?",
            "answers" => ["2006", "2008", "2010", "2012"],
            "correct" => 1,
            "explication" => "Google Chrome, lancé en 2008, est devenu rapidement l'un des navigateurs les plus populaires grâce à sa vitesse et ses fonctionnalités."
        ],

        // Sécurité et cryptographie
        [
            "question" => "Quand la cryptographie asymétrique a-t-elle été inventée par Diffie-Hellman ?",
            "answers" => ["1976", "1980", "1984", "1988"],
            "correct" => 0,
            "explication" => "Le protocole Diffie-Hellman, créé en 1976, a introduit la cryptographie asymétrique, un pilier de la sécurité numérique moderne."
        ],
        [
            "question" => "Quand SSL (Secure Socket Layer) a-t-il été utilisé pour la première fois publiquement ?",
            "answers" => ["1992", "1994", "1996", "1998"],
            "correct" => 1,
            "explication" => "SSL a été utilisé publiquement en 1994 pour sécuriser les communications sur Internet, notamment dans les transactions en ligne."
        ],
        [
            "question" => "Quand le protocole TLS a-t-il été développé pour remplacer SSL ?",
            "answers" => ["1997", "1999", "2001", "2003"],
            "correct" => 1,
            "explication" => "TLS a été introduit en 1999 pour résoudre les failles de sécurité de SSL tout en améliorant ses fonctionnalités."
        ],
        // Applications web
        [
            "question" => "Quand Ajax a-t-il été popularisé ?",
            "answers" => ["2002", "2004", "2006", "2008"],
            "correct" => 1,
            "explication" => "Ajax a été popularisé en 2004 grâce à des applications comme Google Maps, permettant de mettre à jour les données d'une page sans rechargement complet."
        ],
        [
            "question" => "Quand Google Maps a-t-il été lancé comme exemple de Single Page Application ?",
            "answers" => ["2003", "2005", "2007", "2009"],
            "correct" => 1,
            "explication" => "Google Maps, lancé en 2005, a été une des premières applications à utiliser largement Ajax pour offrir une expérience utilisateur fluide."
        ],
        [
            "question" => "Quand les Progressive Web Apps (PWA) ont-elles été annoncées officiellement ?",
            "answers" => ["2013", "2015", "2017", "2019"],
            "correct" => 1,
            "explication" => "Les PWA ont été annoncées en 2015 par Google, combinant les meilleures caractéristiques des sites web et des applications natives."
        ],

        // Évolutions des standards web
        [
            "question" => "En quelle année HTML5 a-t-il été officiellement recommandé par le W3C ?",
            "answers" => ["2012", "2014", "2016", "2018"],
            "correct" => 1,
            "explication" => "HTML5 a été officiellement recommandé par le W3C en 2014, introduisant de nouvelles balises comme `<video>` et `<audio>` et des API puissantes."
        ],
        [
            "question" => "Quand CSS3 a-t-il été publié comme standard par le W3C ?",
            "answers" => ["2008", "2010", "2012", "2014"],
            "correct" => 1,
            "explication" => "CSS3 a été publié en 2010, apportant des fonctionnalités comme les animations, transitions, et les media queries pour le design responsive."
        ],

        // Sécurité web
        [
            "question" => "En quelle année le protocole HTTPS est-il devenu un standard pour les sites web ?",
            "answers" => ["2014", "2015", "2016", "2017"],
            "correct" => 2,
            "explication" => "HTTPS est devenu un standard en 2016, renforcé par des initiatives comme Let's Encrypt et le classement favorisé par Google."
        ],
        [
            "question" => "Quand l’initiative Let's Encrypt a-t-elle été lancée pour fournir des certificats SSL gratuits ?",
            "answers" => ["2014", "2015", "2016", "2017"],
            "correct" => 0,
            "explication" => "Let's Encrypt a été lancé en 2014 pour démocratiser l'accès à des certificats SSL gratuits, rendant le web plus sécurisé."
        ],

        // Programmation backend
        [
            "question" => "Quand Python a-t-il été créé par Guido van Rossum ?",
            "answers" => ["1989", "1991", "1993", "1995"],
            "correct" => 0,
            "explication" => "Python a été créé en 1989 pour être un langage de programmation simple et intuitif, favorisant la lisibilité et la productivité."
        ],
        [
            "question" => "Quelle année marque la création de Ruby on Rails ?",
            "answers" => ["2002", "2003", "2004", "2005"],
            "correct" => 2,
            "explication" => "Ruby on Rails, créé en 2004, a révolutionné le développement web en popularisant le concept de convention over configuration."
        ],

        // Frameworks modernes
        [
            "question" => "Quand AngularJS a-t-il été lancé par Google ?",
            "answers" => ["2009", "2010", "2011", "2012"],
            "correct" => 0,
            "explication" => "AngularJS, lancé en 2009, a introduit la notion de développement web basé sur des composants et des modèles de données bidirectionnels."
        ],
        [
            "question" => "En quelle année Laravel a-t-il été publié pour la première fois ?",
            "answers" => ["2010", "2011", "2012", "2013"],
            "correct" => 1,
            "explication" => "Laravel, publié en 2011, est devenu l'un des frameworks PHP les plus populaires grâce à sa simplicité et ses fonctionnalités puissantes."
        ],

        // Développement mobile
        [
            "question" => "Quand Swift, le langage de programmation pour iOS, a-t-il été introduit par Apple ?",
            "answers" => ["2012", "2013", "2014", "2015"],
            "correct" => 2,
            "explication" => "Swift a été introduit en 2014 comme une alternative moderne à Objective-C, simplifiant le développement pour iOS et macOS."
        ],
        [
            "question" => "En quelle année React Native a-t-il été publié pour développer des applications mobiles ?",
            "answers" => ["2014", "2015", "2016", "2017"],
            "correct" => 1,
            "explication" => "React Native, publié en 2015 par Facebook, a permis de créer des applications mobiles performantes avec JavaScript."
        ],

        // Déploiement et infrastructure
        [
            "question" => "Quand Docker a-t-il été lancé pour la première fois ?",
            "answers" => ["2011", "2012", "2013", "2014"],
            "correct" => 2,
            "explication" => "Docker, lancé en 2013, a transformé la manière dont les applications sont déployées, en popularisant les conteneurs logiciels."
        ],
        [
            "question" => "Quand Kubernetes a-t-il été lancé par Google ?",
            "answers" => ["2014", "2015", "2016", "2017"],
            "correct" => 0,
            "explication" => "Kubernetes, introduit en 2014, est devenu une norme pour orchestrer les conteneurs dans des environnements de production."
        ],

        // Évolutions des outils collaboratifs
        [
            "question" => "Quand Git a-t-il été créé par Linus Torvalds ?",
            "answers" => ["2003", "2005", "2007", "2009"],
            "correct" => 1,
            "explication" => "Git a été créé en 2005 par Linus Torvalds pour gérer les versions du noyau Linux, et est devenu l'outil de gestion de versions le plus utilisé."
        ],
        [
            "question" => "Quelle année marque la création de GitHub pour l'hébergement de code source ?",
            "answers" => ["2006", "2008", "2010", "2012"],
            "correct" => 1,
            "explication" => "GitHub, lancé en 2008, a permis de centraliser le développement collaboratif grâce à l'hébergement de dépôts Git."
        ],

        // Tendances et pratiques modernes
        [
            "question" => "Quand le concept de DevOps a-t-il été popularisé ?",
            "answers" => ["2005", "2007", "2009", "2011"],
            "correct" => 2,
            "explication" => "Le concept de DevOps, popularisé en 2009, vise à améliorer la collaboration entre les équipes de développement et d'exploitation pour accélérer les déploiements."
        ],
        [
            "question" => "Quand le paradigme JAMstack a-t-il été introduit pour le développement web ?",
            "answers" => ["2013", "2014", "2015", "2016"],
            "correct" => 0,
            "explication" => "Le paradigme JAMstack (JavaScript, API, Markup) a été introduit en 2013 pour créer des sites web rapides et sécurisés."
        ]
    ];
    }

    public function getQuestionQCM2() {
        return [
            // Développement web et architecture
            [
                "question" => "Qu'est-ce que le Front-End en développement web ?",
                "answers" => [
                    "La partie serveur gérant la logique métier",
                    "La partie visible d'une application web interagissant avec l'utilisateur",
                    "Un outil pour gérer des bases de données",
                    "Une méthode de conception basée sur la blockchain"
                ],
                "correct" => 1,
                "explication" => "Le Front-End désigne la partie visible et interactive d'une application web avec laquelle les utilisateurs interagissent. Il inclut les technologies comme HTML, CSS et JavaScript."
            ],
            [
                "question" => "Quel terme désigne un développeur maîtrisant à la fois le Front-End et le Back-End ?",
                "answers" => [
                    "Responsive Designer",
                    "DevOps Engineer",
                    "Full-Stack Developer",
                    "UX Designer"
                ],
                "correct" => 2,
                "explication" => "Un Full-Stack Developer est un développeur polyvalent capable de travailler à la fois sur le Front-End (interface utilisateur) et le Back-End (logique métier et base de données)."
            ],
            [
                "question" => "Qu'est-ce que le Responsive Design ?",
                "answers" => [
                    "Un langage de programmation",
                    "Une approche permettant d'adapter un site web à différentes tailles d'écran",
                    "Un protocole de transfert sécurisé",
                    "Une architecture basée sur des requêtes dynamiques"
                ],
                "correct" => 1,
                "explication" => "Le Responsive Design est une technique de conception qui permet à un site web de s'adapter automatiquement à toutes les tailles d'écran, des smartphones aux écrans larges."
            ],
            [
                "question" => "Dans l'architecture MVC, que représente la Vue ?",
                "answers" => [
                    "La gestion des données et de la logique métier",
                    "L'interface entre le modèle et la vue",
                    "La gestion des requêtes HTTP",
                    "L'affichage des données à l'utilisateur"
                ],
                "correct" => 3,
                "explication" => "Dans l'architecture MVC (Model-View-Controller), la Vue (View) est responsable de l'affichage des données à l'utilisateur, sans contenir de logique métier."
            ],
            [
                "question" => "Qu'est-ce qu'une API ?",
                "answers" => [
                    "Un protocole de sécurité",
                    "Une interface permettant à deux applications de communiquer",
                    "Un service cloud de stockage",
                    "Un outil pour concevoir des pages web interactives"
                ],
                "correct" => 1,
                "explication" => "Une API (Application Programming Interface) est un ensemble de règles et d'outils permettant à deux systèmes logiciels de communiquer entre eux."
            ],
            [
                "question" => "Quelle architecture API est simple et basée sur HTTP ?",
                "answers" => [
                    "GraphQL",
                    "Webhooks",
                    "SOAP",
                    "REST"
                ],
                "correct" => 3,
                "explication" => "REST (Representational State Transfer) est une architecture API largement utilisée, qui repose sur des protocoles HTTP standard pour interagir avec des ressources."
            ],
            [
                "question" => "Qu'est-ce qu'un Webhook ?",
                "answers" => [
                    "Un protocole de transfert sécurisé",
                    "Un mécanisme envoyant des données automatiquement lorsqu'un événement se produit",
                    "Un outil de gestion de bases de données",
                    "Une méthode pour accélérer les recherches dans une base"
                ],
                "correct" => 1,
                "explication" => "Un Webhook est un mécanisme qui envoie des données en temps réel à une autre application lorsqu'un événement spécifique se produit, comme une mise à jour ou une transaction."
            ],
            [
                "question" => "Qu'est-ce que GraphQL et en quoi se distingue-t-il de REST ?",
                "answers" => [
                    "Un protocole de transfert sécurisé",
                    "Une base de données non relationnelle",
                    "Un langage de requêtes pour obtenir exactement les données demandées",
                    "Un outil pour concevoir des Single Page Applications"
                ],
                "correct" => 2,
                "explication" => "GraphQL est un langage de requêtes permettant aux clients de demander exactement les données dont ils ont besoin, contrairement à REST où des données inutiles peuvent être incluses dans les réponses."
            ],
            [
                "question" => "Quelle est une caractéristique clé des Progressive Web Apps (PWA) ?",
                "answers" => [
                    "Requiert un rechargement complet pour chaque page",
                    "Combine le meilleur des sites web et des applications natives",
                    "Utilise exclusivement des bases de données NoSQL",
                    "Fonctionne uniquement hors ligne"
                ],
                "correct" => 1,
                "explication" => "Les Progressive Web Apps (PWA) combinent les fonctionnalités des sites web (accessibilité) et des applications natives (notifications push, hors ligne) pour une meilleure expérience utilisateur."
            ],
            [
                "question" => "Quel type d'application fonctionne sur une seule page HTML avec du contenu chargé dynamiquement ?",
                "answers" => [
                    "Single Page Application (SPA)",
                    "Multi-Page Application (MPA)",
                    "API REST",
                    "Cloud Computing"
                ],
                "correct" => 0,
                "explication" => "Une Single Page Application (SPA) charge tout le contenu initialement ou dynamiquement via JavaScript, évitant de recharger complètement la page."
            ],
            [
                "question" => "Quelle est la principale différence entre une MPA et une SPA ?",
                "answers" => [
                    "Une MPA fonctionne hors ligne, contrairement à une SPA",
                    "Une SPA utilise exclusivement des bases de données NoSQL",
                    "Une MPA est réservée aux applications natives",
                    "Une MPA recharge la page entière à chaque requête, tandis qu'une SPA charge dynamiquement le contenu"
                ],
                "correct" => 3,
                "explication" => "Une Multi-Page Application (MPA) recharge la page entière pour chaque requête utilisateur, tandis qu'une Single Page Application (SPA) charge dynamiquement le contenu, offrant une expérience plus fluide."
            ],
            [
                "question" => "Que signifie CRUD en gestion des bases de données ?",
                "answers" => [
                    "Connect, Reset, Update, Display",
                    "Copy, Restore, Upload, Download",
                    "Create, Read, Update, Delete",
                    "Compute, Render, Update, Deliver"
                ],
                "correct" => 2,
                "explication" => "CRUD (Create, Read, Update, Delete) est un ensemble d'opérations de base pour interagir avec les bases de données : création, lecture, mise à jour et suppression de données."
            ],
            [
                "question" => "Quel type de base de données est optimisé pour des données non structurées ?",
                "answers" => [
                    "Relationnelle",
                    "NoSQL",
                    "Indexée",
                    "Dynamique"
                ],
                "correct" => 1,
                "explication" => "Les bases de données NoSQL sont conçues pour gérer des données non structurées ou semi-structurées, offrant une grande flexibilité par rapport aux bases relationnelles."
            ],
            [
                "question" => "Qu'est-ce que l'indexation dans une base de données et pourquoi est-elle importante ?",
                "answers" => [
                    "Une technique pour optimiser les recherches dans une base de données",
                    "Un outil pour convertir des données relationnelles en données non structurées",
                    "Un protocole de sécurité pour bases de données",
                    "Un mécanisme de sauvegarde automatique des bases"
                ],
                "correct" => 0,
                "explication" => "L'indexation est une technique qui permet d'accélérer les recherches dans une base de données en créant des structures de données spécifiques associées aux colonnes ciblées."
            ],
            [
                "question" => "Qu'est-ce que le SEO en développement web ?",
                "answers" => [
                    "Un protocole pour sécuriser les données",
                    "Un ensemble de techniques pour améliorer le classement d'un site web dans les moteurs de recherche",
                    "Un outil de développement pour créer des Single Page Applications",
                    "Une méthode pour accélérer les temps de réponse des APIs"
                ],
                "correct" => 1,
                "explication" => "Le SEO (Search Engine Optimization) regroupe des pratiques pour optimiser un site web et améliorer sa visibilité et son classement dans les résultats des moteurs de recherche."
            ],
            [
                "question" => "Qu'est-ce que le Lazy Loading ?",
                "answers" => [
                    "Une technique pour charger des ressources uniquement lorsque nécessaire",
                    "Une méthode de conception basée sur le cloud",
                    "Un protocole pour sécuriser les transferts de données",
                    "Un processus de création de bases de données NoSQL"
                ],
                "correct" => 0,
                "explication" => "Le Lazy Loading est une technique qui permet de charger des éléments d'une page web (images, vidéos, etc.) uniquement lorsqu'ils deviennent visibles, optimisant ainsi les performances."
            ],
            [
                "question" => "Que signifie Open Source ?",
                "answers" => [
                    "Logiciels accessibles uniquement sur abonnement",
                    "Logiciels dont le code source est accessible et modifiable",
                    "Applications web accessibles uniquement hors ligne",
                    "Bases de données décentralisées"
                ],
                "correct" => 1,
                "explication" => "Open Source signifie que le code source d'un logiciel est rendu public, permettant à quiconque de l'utiliser, le modifier et le redistribuer selon les termes de sa licence."
            ],
            [
                "question" => "Que désigne le terme IoT (Internet of Things) ?",
                "answers" => [
                    "Un réseau d'objets connectés capables de collecter et échanger des données",
                    "Un outil pour concevoir des Single Page Applications",
                    "Un protocole pour sécuriser les bases de données",
                    "Une méthode de transformation digitale"
                ],
                "correct" => 0,
                "explication" => "L'Internet of Things (IoT) désigne un réseau d'objets connectés capables de communiquer entre eux et avec des systèmes, souvent utilisés pour l'automatisation et la collecte de données."
            ],
            [
                "question" => "Qu'est-ce que la transformation digitale et quels sont ses principaux objectifs ?",
                "answers" => [
                    "L'adoption de technologies numériques pour améliorer les processus organisationnels",
                    "Une technique de gestion de bases de données",
                    "Un protocole de sécurité pour les applications modernes",
                    "Une méthode de chargement différé des ressources web"
                ],
                "correct" => 0,
                "explication" => "La transformation digitale implique l'intégration de technologies numériques dans les processus d'une organisation pour accroître l'efficacité, l'innovation et la satisfaction client."
            ],
            [
                "question" => "Pourquoi le Big Data est-il crucial pour les entreprises modernes ?",
                "answers" => [
                    "Il permet de traiter de grandes quantités de données pour extraire des tendances ou informations stratégiques",
                    "Il est utilisé uniquement pour le stockage des applications cloud",
                    "Il accélère le chargement des ressources web",
                    "Il remplace les bases de données relationnelles dans les applications modernes"
                ],
                "correct" => 0,
                "explication" => "Le Big Data permet aux entreprises de collecter, traiter et analyser d'immenses volumes de données afin de découvrir des tendances et prendre des décisions stratégiques."
            ],
            [
                "question" => "Quels sont les avantages du Cloud Computing pour les entreprises ?",
                "answers" => [
                    "Une meilleure flexibilité et réduction des coûts",
                    "La sécurisation des API REST",
                    "Une amélioration des performances des applications natives",
                    "Un protocole pour sécuriser les communications"
                ],
                "correct" => 0,
                "explication" => "Le Cloud Computing offre aux entreprises une flexibilité accrue et une réduction des coûts grâce à l'accès à distance aux ressources et à la facturation à l'utilisation."
            ],
            [
                "question" => "Que permet le protocole HTTPS ?",
                "answers" => [
                    "Chiffrer les données échangées sur un site web",
                    "Optimiser le contenu d'une application pour les moteurs de recherche",
                    "Accélérer le chargement des ressources d'une page",
                    "Connecter plusieurs bases de données NoSQL"
                ],
                "correct" => 0,
                "explication" => "Le protocole HTTPS (HyperText Transfer Protocol Secure) garantit la sécurité des échanges entre un navigateur et un site web en chiffrant les données transmises."
            ],
            [
                "question" => "Qu'est-ce que le RGPD ?",
                "answers" => [
                    "Un règlement européen sur la gestion et la protection des données personnelles",
                    "Un protocole de sécurité pour les API REST",
                    "Un langage de requêtes pour bases de données relationnelles",
                    "Une méthode de gestion de contenus dynamiques"
                ],
                "correct" => 0,
                "explication" => "Le RGPD (Règlement Général sur la Protection des Données) est un règlement européen visant à protéger les données personnelles des citoyens de l'Union européenne."
            ],
            [
                "question" => "Qu'est-ce que l'attaque XSS (Cross-Site Scripting) et comment peut-on s'en protéger ?",
                "answers" => [
                    "Une vulnérabilité permettant d'injecter du code malveillant ; protégée par la validation des entrées utilisateur",
                    "Une attaque incitant un utilisateur à effectuer une action non souhaitée",
                    "Un protocole pour sécuriser les communications",
                    "Un mécanisme d'optimisation des requêtes HTTP"
                ],
                "correct" => 0,
                "explication" => "Une attaque XSS exploite des failles dans les applications web pour injecter du code malveillant. On peut s'en protéger en validant et échappant toutes les entrées utilisateur."
            ],
            [
                "question" => "Qu'est-ce que l'attaque CSRF (Cross-Site Request Forgery) et comment peut-on la prévenir ?",
                "answers" => [
                    "Une attaque incitant un utilisateur à effectuer une action non souhaitée ; protégée par des jetons CSRF",
                    "Une vulnérabilité permettant d'injecter du code malveillant",
                    "Une méthode d'optimisation des requêtes API",
                    "Un outil pour concevoir des Single Page Applications"
                ],
                "correct" => 0,
                "explication" => "Une attaque CSRF incite un utilisateur authentifié à effectuer une action non désirée sur un site. Les jetons CSRF sont utilisés pour vérifier l'authenticité des requêtes."
            ],

            // Méthodologies de Développement
            [
                "question" => "Quelle est la méthodologie visant à combiner développement et opérations ?",
                "answers" => [
                    "Agile",
                    "DevOps",
                    "UX",
                    "UI"
                ],
                "correct" => 1,
                "explication" => "DevOps est une méthodologie qui vise à rapprocher les équipes de développement (Dev) et d'opérations (Ops) pour améliorer la collaboration, l'efficacité et la rapidité des déploiements."
            ],
            [
                "question" => "Quelle discipline se concentre sur l'expérience utilisateur ?",
                "answers" => [
                    "UI (User Interface)",
                    "UX (User Experience)",
                    "SEO (Search Engine Optimization)",
                    "Cloud Computing"
                ],
                "correct" => 1,
                "explication" => "L'UX (User Experience) se concentre sur la conception d'expériences utilisateur optimales, incluant la facilité d'utilisation, l'ergonomie et la satisfaction globale de l'utilisateur."
            ],
            [
                "question" => "Quelle est la différence entre UX (User Experience) et UI (User Interface) ?",
                "answers" => [
                    "UX concerne l'expérience utilisateur, tandis que UI concerne le design graphique des interfaces",
                    "UX concerne le design des pages, tandis que UI concerne l'optimisation du contenu",
                    "UX est un protocole de communication, tandis que UI est une architecture",
                    "UX est uniquement lié aux performances, tandis que UI est lié au responsive design"
                ],
                "correct" => 0,
                "explication" => "L'UX (User Experience) traite de l'expérience globale de l'utilisateur avec un produit, tandis que l'UI (User Interface) se concentre sur l'aspect visuel et interactif de l'interface."
            ],
            [
                "question" => "Qu'est-ce que le Web3 et en quoi diffère-t-il du Web traditionnel ?",
                "answers" => [
                    "Un web décentralisé basé sur la blockchain",
                    "Un outil pour gérer des bases de données NoSQL",
                    "Une méthode de développement pour Single Page Applications",
                    "Une application native fonctionnant hors ligne"
                ],
                "correct" => 0,
                "explication" => "Le Web3 est un concept de web décentralisé basé sur la blockchain, où les utilisateurs possèdent leurs données et interagissent directement avec des services décentralisés."
            ],
            [
                "question" => "Qu'est-ce que la tokenisation et dans quels domaines est-elle utilisée ?",
                "answers" => [
                    "Un processus remplaçant des informations sensibles par des identifiants uniques, souvent utilisé en blockchain",
                    "Un mécanisme de sécurité pour les communications web",
                    "Un outil pour accélérer les recherches dans une base de données",
                    "Une méthode d'optimisation pour les contenus web"
                ],
                "correct" => 0,
                "explication" => "La tokenisation remplace des données sensibles (comme un numéro de carte bancaire) par un jeton unique. Elle est utilisée pour la sécurité, notamment dans la blockchain et les paiements en ligne."
            ],
            [
                "question" => "Qu'est-ce que le Metaverse et quelles technologies le rendent possible ?",
                "answers" => [
                    "Un environnement numérique immersif combinant réalité augmentée et virtuelle",
                    "Un outil de gestion de données basé sur le cloud",
                    "Une méthode de développement pour Progressive Web Apps",
                    "Un langage de requêtes utilisé pour les APIs modernes"
                ],
                "correct" => 0,
                "explication" => "Le Metaverse est un espace virtuel immersif combinant la réalité augmentée et virtuelle, rendu possible grâce à des technologies comme la blockchain, les casques VR et l'IA."
            ],
            [
                "question" => "Qu'est-ce que le Mobile-First Design en développement web ?",
                "answers" => [
                    "Une méthode pour développer des applications mobiles natives",
                    "Une approche qui consiste à concevoir d'abord pour les appareils mobiles avant les écrans plus grands",
                    "Un langage de programmation pour le mobile",
                    "Un framework pour développer des applications web progressives"
                ],
                "correct" => 1,
                "explication" => "Le Mobile-First Design est une approche de conception web où l'on crée d'abord pour les appareils mobiles, puis on adapte progressivement pour les écrans plus grands."
            ],
            [
                "question" => "Qu'est-ce que l'authentification OAuth ?",
                "answers" => [
                    "Un protocole pour sécuriser les API avec des jetons d'accès",
                    "Un langage de requêtes utilisé pour interagir avec les bases de données",
                    "Un outil pour créer des Single Page Applications",
                    "Un mécanisme pour optimiser les performances réseau"
                ],
                "correct" => 0,
                "explication" => "OAuth est un protocole d'autorisation permettant à une application d'accéder à des ressources utilisateur sur un autre service, comme Google ou Facebook, sans partager le mot de passe."
            ],
            [
                "question" => "Qu'est-ce que le chiffrement asymétrique en cryptographie ?",
                "answers" => [
                    "Une méthode utilisant une clé publique et une clé privée pour sécuriser les communications",
                    "Un processus de sauvegarde automatique des bases de données",
                    "Un protocole pour optimiser les performances des serveurs",
                    "Une méthode pour protéger les API REST"
                ],
                "correct" => 0,
                "explication" => "Le chiffrement asymétrique utilise une paire de clés (publique et privée) pour sécuriser les communications, permettant de chiffrer et déchiffrer des données de manière sécurisée."
            ],
            [
                "question" => "Quelle est la différence entre une base de données relationnelle et une base NoSQL ?",
                "answers" => [
                    "Les bases relationnelles organisent les données en tables, tandis que les bases NoSQL utilisent des structures flexibles",
                    "Les bases relationnelles fonctionnent hors ligne, tandis que les bases NoSQL nécessitent une connexion permanente",
                    "Les bases relationnelles ne supportent pas les grandes quantités de données, contrairement aux bases NoSQL",
                    "Les bases relationnelles sont plus rapides que les bases NoSQL"
                ],
                "correct" => 0,
                "explication" => "Les bases relationnelles organisent les données en tables avec des relations, tandis que les bases NoSQL permettent des structures plus flexibles, comme des documents ou des paires clé-valeur."
            ],
            [
                "question" => "Qu'est-ce que le Server-Side Rendering (SSR) ?",
                "answers" => [
                    "Une technique où le contenu est généré côté serveur avant d'être envoyé au navigateur",
                    "Un processus où les requêtes API sont exécutées en temps réel côté client",
                    "Un protocole pour sécuriser les applications web",
                    "Un outil pour créer des applications web progressives"
                ],
                "correct" => 0,
                "explication" => "Le Server-Side Rendering (SSR) génère le contenu HTML côté serveur avant de l'envoyer au navigateur, ce qui améliore les performances et le référencement."
            ],
            [
                "question" => "Qu'est-ce qu'un Content Delivery Network (CDN) ?",
                "answers" => [
                    "Un réseau de serveurs distribuant le contenu pour améliorer les temps de chargement",
                    "Une méthode pour concevoir des Single Page Applications",
                    "Un protocole pour sécuriser les données des applications web",
                    "Un outil de gestion de bases de données NoSQL"
                ],
                "correct" => 0,
                "explication" => "Un Content Delivery Network (CDN) est un réseau de serveurs répartis géographiquement qui distribue le contenu afin de réduire les temps de chargement et d'améliorer la disponibilité."
            ],
            [
                "question" => "Qu'est-ce que le Design Thinking et comment est-il utilisé en développement ?",
                "answers" => [
                    "Une méthodologie centrée sur l'utilisateur pour résoudre des problèmes de manière créative",
                    "Un langage de programmation utilisé pour concevoir des applications web",
                    "Un outil pour analyser les performances des applications",
                    "Une méthode de sauvegarde et de restauration des bases de données"
                ],
                "correct" => 0,
                "explication" => "Le Design Thinking est une approche de résolution de problèmes centrée sur l'utilisateur, utilisant des processus collaboratifs et itératifs pour concevoir des solutions innovantes."
            ]
        ];
    }
    public function getQuestionQCM3() {
        return [
            // Agile
            [
                "question" => "Quel est l'objectif principal des pratiques Agile ?",
                "answers" => [
                    "Augmenter la vitesse de développement des applications",
                    "Favoriser la collaboration, l'adaptabilité et l'amélioration continue",
                    "Réduire le nombre de bugs en production",
                    "Mettre en place des systèmes de sécurité robustes"
                ],
                "correct" => 1,
                "explication" => "Les pratiques Agile visent à améliorer la collaboration entre les parties prenantes, à s'adapter rapidement aux changements et à encourager une amélioration continue tout au long du projet."
            ],
            [
                "question" => "Selon le manifeste Agile, quelle est une des priorités principales ?",
                "answers" => [
                    "Minimiser les coûts",
                    "Prioriser la satisfaction client grâce à des livraisons fréquentes",
                    "Automatiser tous les processus de développement",
                    "Éviter tout changement après le démarrage du projet"
                ],
                "correct" => 1,
                "explication" => "Une des priorités du manifeste Agile est de fournir une satisfaction client maximale en livrant fréquemment des incréments de valeur, même tôt dans le projet."
            ],
            [
                "question" => "Quels sont les rôles principaux dans Scrum ?",
                "answers" => [
                    "Scrum Master, Product Owner, et équipe de développement",
                    "Chef de projet, développeur, et designer",
                    "Product Manager, UX Designer, et client",
                    "Analyste, développeur, et testeur"
                ],
                "correct" => 0,
                "explication" => "Scrum définit trois rôles principaux : le Scrum Master (facilitateur), le Product Owner (priorisation des besoins), et l'équipe de développement (réalisation des tâches)."
            ],
            [
                "question" => "Qu'est-ce qu'un sprint dans la méthodologie Scrum ?",
                "answers" => [
                    "Un cycle de développement de 1 à 4 semaines",
                    "Une réunion quotidienne de 15 minutes",
                    "Une liste des tâches à accomplir",
                    "Une méthode de déploiement continu"
                ],
                "correct" => 0,
                "explication" => "Un sprint est une période de temps fixée (généralement entre 1 et 4 semaines) durant laquelle une équipe Scrum travaille pour réaliser un ensemble de tâches définies."
            ],
            [
                "question" => "Quel est le principal objectif de la méthodologie Lean ?",
                "answers" => [
                    "Éliminer les gaspillages pour maximiser la valeur pour le client",
                    "Améliorer les performances des serveurs",
                    "Automatiser les processus de développement",
                    "Créer des interfaces utilisateur plus intuitives"
                ],
                "correct" => 0,
                "explication" => "Le Lean se concentre sur l'élimination des gaspillages dans les processus pour maximiser la valeur apportée au client final."
            ],
            [
                "question" => "Qu'est-ce qu'un tableau Kanban ?",
                "answers" => [
                    "Un outil visuel pour gérer les flux de travail",
                    "Un système de tests automatisés",
                    "Une méthodologie pour concevoir des APIs",
                    "Un outil pour mesurer la performance des équipes"
                ],
                "correct" => 0,
                "explication" => "Un tableau Kanban est un outil visuel utilisé pour organiser et suivre les tâches, avec des colonnes représentant les différentes étapes du flux de travail."
            ],
            [
                "question" => "Quelle branche contient la version stable d'un projet dans Git Flow ?",
                "answers" => [
                    "Feature branch",
                    "Hotfix branch",
                    "Master (ou Main)",
                    "Develop"
                ],
                "correct" => 2,
                "explication" => "Dans Git Flow, la branche Master (ou Main) contient toujours la version stable et prête à être déployée d'un projet."
            ],
            [
                "question" => "À quoi servent les feature branches dans Git Flow ?",
                "answers" => [
                    "Corriger les bugs critiques",
                    "Développer de nouvelles fonctionnalités spécifiques",
                    "Tester les versions en production",
                    "Créer des sauvegardes de la branche principale"
                ],
                "correct" => 1,
                "explication" => "Les feature branches sont utilisées pour développer des fonctionnalités spécifiques sans affecter les autres branches du projet."
            ],
            [
                "question" => "Quel est l'ordre des étapes dans le cycle TDD ?",
                "answers" => [
                    "Green, Red, Refactor",
                    "Red, Green, Refactor",
                    "Refactor, Red, Green",
                    "Green, Refactor, Red"
                ],
                "correct" => 1,
                "explication" => "Le cycle TDD suit l'ordre : Red (écrire un test qui échoue), Green (écrire le code minimal pour réussir le test), et Refactor (améliorer le code sans changer son comportement)."
            ],
            [
                "question" => "Quel est l'objectif principal du Test-Driven Development (TDD) ?",
                "answers" => [
                    "Réduire les temps de développement",
                    "Garantir que le code répond aux exigences fonctionnelles",
                    "Améliorer la performance des APIs",
                    "Accélérer les processus de déploiement"
                ],
                "correct" => 1,
                "explication" => "Le TDD garantit que le code produit répond aux exigences fonctionnelles grâce à des tests écrits avant le développement du code."
            ],
            [
                "question" => "Quelle est une caractéristique clé de l'intégration continue (CI) ?",
                "answers" => [
                    "Automatiser les tests et les fusions fréquentes dans une branche commune",
                    "Gérer les flux de travail avec un tableau Kanban",
                    "Créer des environnements de test manuels",
                    "Optimiser la performance des serveurs"
                ],
                "correct" => 0,
                "explication" => "L'intégration continue automatise les tests et les fusions fréquentes dans une branche commune pour détecter et corriger rapidement les problèmes."
            ],
            [
                "question" => "Quels outils sont couramment utilisés pour CI/CD ?",
                "answers" => [
                    "GitHub Actions, GitLab CI/CD, Jenkins",
                    "Docker, Kubernetes, Terraform",
                    "MySQL, PostgreSQL, MongoDB",
                    "React, Angular, Vue.js"
                ],
                "correct" => 0,
                "explication" => "GitHub Actions, GitLab CI/CD et Jenkins sont des outils populaires pour automatiser les pipelines d'intégration et de déploiement continus (CI/CD)."
            ],
            [
                "question" => "Quelle est la première étape du Design Thinking ?",
                "answers" => [
                    "Prototypage",
                    "Idéation",
                    "Empathie",
                    "Définition"
                ],
                "correct" => 2,
                "explication" => "L'étape 'Empathie' dans le Design Thinking consiste à comprendre les besoins et les attentes des utilisateurs finaux."
            ],
            [
                "question" => "Qu'est-ce que Lean UX ?",
                "answers" => [
                    "Une combinaison du design UX et des principes Agile",
                    "Une méthode pour développer des APIs REST",
                    "Un outil pour gérer les flux de travail",
                    "Un processus de tests automatisés"
                ],
                "correct" => 0,
                "explication" => "Lean UX combine les principes du design centré sur l'utilisateur avec la méthodologie Agile pour itérer rapidement et collaborer efficacement."
            ],

            // Méthodologies Modernes
            [
                "question" => "Qu'est-ce que DevOps ?",
                "answers" => [
                    "Une pratique combinant développement et opérations pour réduire le temps entre développement et déploiement",
                    "Une méthode pour sécuriser les applications modernes",
                    "Un langage de programmation pour bases de données",
                    "Un processus de tests basé sur des scénarios"
                ],
                "correct" => 0,
                "explication" => "DevOps est une méthodologie qui combine les équipes de développement et d'opérations pour améliorer la collaboration et automatiser les processus de déploiement et d'intégration continue."
            ],
            [
                "question" => "Quelle est une des caractéristiques principales du BDD (Behavior-Driven Development) ?",
                "answers" => [
                    "Se concentre sur les comportements attendus exprimés sous forme de scénarios",
                    "Automatise les déploiements en production",
                    "Réduit les cycles de développement grâce à des sprints",
                    "Remplace les tests automatisés par des tests manuels"
                ],
                "correct" => 0,
                "explication" => "Le BDD (Behavior-Driven Development) se concentre sur les comportements attendus d'une application, souvent exprimés sous forme de scénarios en langage naturel, pour améliorer la collaboration entre développeurs et parties prenantes."
            ],
            [
                "question" => "Quelle pratique Agile favorise une livraison fréquente de valeur au client ?",
                "answers" => [
                    "Intégration continue",
                    "Livraison itérative",
                    "Kanban",
                    "Test-Driven Development"
                ],
                "correct" => 1,
                "explication" => "La livraison itérative, au cœur de la méthodologie Agile, consiste à fournir des incréments de valeur au client à intervalles réguliers pour répondre rapidement à ses besoins."
            ],
            [
                "question" => "Quelle est l'une des valeurs fondamentales d'Agile selon son manifeste ?",
                "answers" => [
                    "Les processus plutôt que les interactions humaines",
                    "Les plans stricts plutôt que l'adaptabilité",
                    "Les individus et leurs interactions plutôt que les processus et outils",
                    "Le respect du plan initial plutôt que l'amélioration continue"
                ],
                "correct" => 2,
                "explication" => "Une des valeurs fondamentales d'Agile est de privilégier les individus et leurs interactions plutôt que les processus et outils, car les relations humaines sont essentielles pour le succès d'un projet."
            ],
            [
                "question" => "Quel est l'objectif principal des rétrospectives Scrum ?",
                "answers" => [
                    "Définir les tâches pour le prochain sprint",
                    "Examiner et améliorer les processus d'équipe après chaque sprint",
                    "Valider les livrables avant livraison",
                    "Corriger les bugs détectés en production"
                ],
                "correct" => 1,
                "explication" => "Les rétrospectives Scrum sont des réunions post-sprint où l'équipe analyse ses processus pour identifier ce qui a bien fonctionné et ce qui peut être amélioré."
            ],
            [
                "question" => "Quelle réunion Scrum est courte et quotidienne ?",
                "answers" => [
                    "Sprint Planning",
                    "Daily Stand-Up",
                    "Sprint Review",
                    "Rétrospective"
                ],
                "correct" => 1,
                "explication" => "La Daily Stand-Up est une réunion quotidienne de 15 minutes où les membres de l'équipe discutent de leurs progrès, des obstacles et des priorités."
            ],
            [
                "question" => "Quel concept de Lean est utilisé pour limiter le nombre de tâches en cours ?",
                "answers" => [
                    "Pull System",
                    "Work In Progress (WIP)",
                    "Tableau Kanban",
                    "Amélioration continue"
                ],
                "correct" => 1,
                "explication" => "Le Work In Progress (WIP) est une limite imposée au nombre de tâches pouvant être en cours simultanément pour éviter la surcharge et améliorer la productivité."
            ],
            [
                "question" => "Quelle est une caractéristique clé des flux tirés (Pull System) dans Lean ?",
                "answers" => [
                    "Les tâches sont attribuées automatiquement aux membres de l'équipe",
                    "Les tâches sont tirées par les besoins du client ou de l'équipe",
                    "Toutes les tâches sont planifiées à l'avance",
                    "Les flux tirés sont utilisés uniquement pour les projets logiciels"
                ],
                "correct" => 1,
                "explication" => "Un flux tiré (Pull System) dans Lean signifie que les tâches ou ressources ne sont tirées que lorsqu'elles sont nécessaires, ce qui réduit les gaspillages et les interruptions."
            ],
            [
                "question" => "Comment le Behavior-Driven Development (BDD) se distingue-t-il du Test-Driven Development (TDD) ?",
                "answers" => [
                    "BDD se concentre sur les comportements attendus, tandis que TDD se concentre sur les fonctionnalités",
                    "BDD élimine le besoin de tests automatisés",
                    "TDD se base sur des scénarios en langage naturel",
                    "BDD est exclusivement utilisé pour les applications web"
                ],
                "correct" => 0,
                "explication" => "Le BDD (Behavior-Driven Development) met l'accent sur les comportements attendus de l'application exprimés en langage naturel, tandis que le TDD se concentre sur les tests des fonctionnalités techniques."
            ],
            [
                "question" => "Dans TDD, quelle étape consiste à écrire le code minimal pour réussir un test ?",
                "answers" => [
                    "Red",
                    "Green",
                    "Refactor",
                    "Debugging"
                ],
                "correct" => 1,
                "explication" => "L'étape Green dans le TDD consiste à écrire le code minimal nécessaire pour faire passer un test qui échouait précédemment."
            ],
            [
                "question" => "Quel concept clé de DevOps repose sur la gestion des infrastructures comme du code ?",
                "answers" => [
                    "Monitoring en continu",
                    "Infrastructure as Code (IaC)",
                    "Intégration continue",
                    "Déploiement progressif"
                ],
                "correct" => 1,
                "explication" => "L'Infrastructure as Code (IaC) est un concept clé de DevOps qui permet de gérer et provisionner les infrastructures via du code, ce qui améliore la répétabilité et l'automatisation."
            ],
            [
                "question" => "Quels sont les avantages du CI/CD ?",
                "answers" => [
                    "Amélioration de la sécurité et réduction des erreurs manuelles",
                    "Réduction du nombre de tests automatisés",
                    "Optimisation des performances des API",
                    "Planification stricte et détaillée de chaque étape"
                ],
                "correct" => 0,
                "explication" => "Le CI/CD améliore la sécurité et réduit les erreurs manuelles en automatisant les tests et les déploiements, ce qui permet des livraisons plus rapides et plus fiables."
            ],
            [
                "question" => "Quelle est une des pratiques clés de l'Agile pour gérer les changements ?",
                "answers" => [
                    "Refuser tous les changements après le démarrage du projet",
                    "Accueillir les changements, même tard dans le projet, pour apporter de la valeur au client",
                    "Prioriser les processus stricts et rigides",
                    "Automatiser tous les processus pour éviter les changements"
                ],
                "correct" => 1,
                "explication" => "Agile encourage à accueillir les changements même tard dans le projet pour s'assurer que le produit final apporte de la valeur au client."
            ],
            [
                "question" => "Dans une équipe Agile, comment les membres doivent-ils travailler ensemble ?",
                "answers" => [
                    "En suivant strictement les instructions du chef de projet",
                    "En collaborant étroitement et en s'auto-organisant",
                    "En travaillant chacun de leur côté sans interaction",
                    "En se concentrant uniquement sur leurs tâches individuelles"
                ],
                "correct" => 1,
                "explication" => "Les équipes Agile fonctionnent de manière collaborative et s'auto-organisent pour maximiser leur productivité et leur capacité à s'adapter aux changements."
            ],

            // Scrum
            [
                "question" => "Qu'est-ce que le backlog produit dans Scrum ?",
                "answers" => [
                    "Une liste ordonnée de tout ce qui pourrait être nécessaire au produit",
                    "Un document de spécifications détaillées",
                    "Un ensemble de tâches déjà terminées",
                    "Un outil pour mesurer la performance des développeurs"
                ],
                "correct" => 0,
                "explication" => "Le backlog produit est une liste priorisée de toutes les fonctionnalités, améliorations et corrections possibles à inclure dans le produit, gérée par le Product Owner."
            ],
            [
                "question" => "Que signifie la vélocité dans Scrum ?",
                "answers" => [
                    "La rapidité de livraison des fonctionnalités",
                    "Le nombre d'éléments du backlog produit complétés lors d'un sprint",
                    "La durée d'une réunion quotidienne",
                    "Le temps nécessaire pour planifier un sprint"
                ],
                "correct" => 1,
                "explication" => "La vélocité mesure le nombre de tâches ou points terminés par l'équipe Scrum durant un sprint. Elle permet d'estimer la capacité future de l'équipe."
            ],
            [
                "question" => "Qu'est-ce que le concept de flux continu dans Kanban ?",
                "answers" => [
                    "Un processus où les tâches progressent sans interruption",
                    "Un outil pour définir les objectifs de sprint",
                    "Un type de réunion d'équipe",
                    "Un mécanisme pour corriger les erreurs en production"
                ],
                "correct" => 0,
                "explication" => "Le flux continu est un principe clé de Kanban où les tâches avancent à travers les étapes du processus sans interruption, améliorant l'efficacité."
            ],
            [
                "question" => "Comment Kanban gère-t-il les tâches prioritaires ?",
                "answers" => [
                    "En utilisant une file d'attente et des limites de WIP (Work In Progress)",
                    "En fixant une durée stricte pour chaque tâche",
                    "En éliminant toutes les tâches non prioritaires",
                    "En attribuant chaque tâche à un seul développeur"
                ],
                "correct" => 0,
                "explication" => "Kanban gère les tâches en utilisant une file d'attente et des limites de travail en cours (WIP) pour garantir que les tâches prioritaires reçoivent l'attention nécessaire."
            ],
            [
                "question" => "Quelle branche est utilisée pour préparer une nouvelle version stable dans Git Flow ?",
                "answers" => [
                    "Release branch",
                    "Feature branch",
                    "Develop branch",
                    "Master branch"
                ],
                "correct" => 0,
                "explication" => "Dans Git Flow, la Release branch est utilisée pour finaliser une nouvelle version stable avant qu'elle ne soit fusionnée dans la branche Master."
            ],
            [
                "question" => "Quel est l'objectif principal des hotfix branches dans Git Flow ?",
                "answers" => [
                    "Corriger rapidement des bugs critiques en production",
                    "Tester les nouvelles fonctionnalités",
                    "Créer des sauvegardes de la branche principale",
                    "Préparer des versions stables"
                ],
                "correct" => 0,
                "explication" => "Les hotfix branches dans Git Flow sont utilisées pour corriger des bugs critiques qui affectent la production, sans attendre le cycle complet de développement."
            ],
            [
                "question" => "Qu'est-ce que le déploiement continu (CD) dans une pipeline CI/CD ?",
                "answers" => [
                    "Un processus automatisé pour livrer en continu des changements au système de production",
                    "Un outil pour tester manuellement les fonctionnalités",
                    "Un mécanisme pour surveiller la performance des serveurs",
                    "Un protocole pour sécuriser les bases de données"
                ],
                "correct" => 0,
                "explication" => "Le déploiement continu (CD) automatise la livraison des changements validés dans un environnement de production, réduisant les risques d'erreurs humaines."
            ],
            [
                "question" => "Pourquoi les tests automatisés sont-ils cruciaux dans une pipeline CI/CD ?",
                "answers" => [
                    "Pour garantir que chaque modification du code est testée avant d'être fusionnée ou déployée",
                    "Pour réduire le nombre de bugs en production manuellement",
                    "Pour éviter les fusions dans une branche commune",
                    "Pour améliorer la performance des applications"
                ],
                "correct" => 0,
                "explication" => "Les tests automatisés dans une pipeline CI/CD garantissent que chaque modification du code est validée avant d'être fusionnée ou déployée, ce qui améliore la qualité du logiciel."
            ],
            [
                "question" => "Comment les méthodologies Agile se comparent-elles aux méthodologies en cascade ?",
                "answers" => [
                    "Agile privilégie des cycles itératifs et adaptatifs, tandis que la cascade suit un processus séquentiel rigide",
                    "Agile est moins collaboratif que la cascade",
                    "La cascade encourage les livraisons fréquentes contrairement à Agile",
                    "Agile nécessite une documentation plus détaillée que la cascade"
                ],
                "correct" => 0,
                "explication" => "Les méthodologies Agile favorisent des cycles itératifs pour s'adapter aux changements, tandis que la cascade suit un processus rigide où chaque étape doit être terminée avant de passer à la suivante."
            ],
            [
                "question" => "Quels sont les avantages du pair programming ?",
                "answers" => [
                    "Amélioration de la qualité du code et partage des connaissances entre développeurs",
                    "Réduction des délais en multipliant les développeurs sur une même tâche",
                    "Minimisation des interactions entre les membres de l'équipe",
                    "Automatisation des tests"
                ],
                "correct" => 0,
                "explication" => "Le pair programming améliore la qualité du code en permettant une relecture continue et favorise le partage des connaissances entre les membres de l'équipe."
            ],
            [
                "question" => "Dans le Design Thinking, quelle étape suit immédiatement l'empathie ?",
                "answers" => [
                    "Définition",
                    "Prototypage",
                    "Idéation",
                    "Test"
                ],
                "correct" => 0,
                "explication" => "Après l'étape d'empathie, où les besoins des utilisateurs sont identifiés, l'étape de définition consiste à formuler le problème ou le défi à résoudre."
            ],
            [
                "question" => "Quels sont les principes fondamentaux de Lean UX ?",
                "answers" => [
                    "Centré sur l'utilisateur, collaboratif et basé sur des cycles rapides d'apprentissage",
                    "Documentation détaillée, planification stricte et validation manuelle",
                    "Optimisation des performances, réduction des coûts et développement autonome",
                    "Automatisation des processus, réduction des tests et augmentation de la vitesse"
                ],
                "correct" => 0,
                "explication" => "Lean UX repose sur des principes tels que la collaboration, une approche centrée sur l'utilisateur et des cycles rapides d'apprentissage pour itérer rapidement."
            ],
            [
                "question" => "Pourquoi BDD est-il considéré comme un complément à TDD ?",
                "answers" => [
                    "Parce qu'il ajoute une couche de spécifications compréhensibles par les non-développeurs",
                    "Parce qu'il élimine le besoin de tests automatisés",
                    "Parce qu'il remplace entièrement TDD dans les méthodologies modernes",
                    "Parce qu'il est utilisé uniquement pour les API"
                ],
                "correct" => 0,
                "explication" => "Le BDD complète le TDD en ajoutant une couche de spécifications lisibles par tous, permettant une meilleure collaboration entre les équipes techniques et non techniques."
            ],
            [
                "question" => "Qu'est-ce que le Refactoring dans TDD ?",
                "answers" => [
                    "Améliorer le code sans changer son comportement pour le rendre plus clair et maintenable",
                    "Créer une nouvelle fonctionnalité à partir de zéro",
                    "Supprimer des fonctionnalités inutilisées",
                    "Écrire des tests pour des fonctionnalités non encore développées"
                ],
                "correct" => 0,
                "explication" => "Le refactoring dans TDD consiste à améliorer la structure et la lisibilité du code sans modifier son comportement, assurant ainsi une meilleure maintenabilité."
            ]
        ];
    }
    public function getQuestionQCM4() {
        return [
            // HTML5
            [
                "question" => "Quelle balise HTML5 représente un contenu autonome ?",
                "answers" => [
                    htmlspecialchars("&ltsection&gt", ENT_QUOTES, 'UTF-8'),
                    htmlspecialchars("&ltarticle&gt", ENT_QUOTES, 'UTF-8'),
                    htmlspecialchars("&ltheader&gt", ENT_QUOTES, 'UTF-8'),
                    htmlspecialchars("&ltnav&gt", ENT_QUOTES, 'UTF-8')
                ],
                "correct" => 1,
                "explication" => "La balise &ltarticle&gt est utilisée pour représenter un contenu autonome qui pourrait être distribué ou réutilisé indépendamment, comme un article de blog ou un commentaire."
            ],
            [
                "question" => "À quoi sert l'API de géolocalisation en HTML5 ?",
                "answers" => [
                    "Ajouter des animations interactives",
                    "Afficher des graphiques 2D",
                    "Obtenir la position géographique de l'utilisateur",
                    "Stocker des données utilisateur localement"
                ],
                "correct" => 2,
                "explication" => "L'API de géolocalisation en HTML5 permet aux applications web d'obtenir la position géographique de l'utilisateur, utilisée pour des fonctionnalités comme les cartes ou les suggestions locales."
            ],
            [
                "question" => "Quelle est la fonction principale des balises &ltheader&gt et &ltfooter&gt en HTML5 ?",
                "answers" => [
                    "Créer une section thématique",
                    "Structurer le contenu et améliorer l'accessibilité",
                    "Afficher des données utilisateur",
                    "Gérer les animations des pages"
                ],
                "correct" => 1,
                "explication" => "Les balises &ltheader&gt et &ltfooter&gt servent à structurer le contenu des sections ou pages web, améliorant ainsi la navigation et l'accessibilité."
            ],
            [
                "question" => "Quel outil CSS permet de créer des mises en page flexibles ?",
                "answers" => [
                    "CSS Grid",
                    "Flexbox",
                    "Media Queries",
                    "Animations @keyframes"
                ],
                "correct" => 1,
                "explication" => "Flexbox est un outil puissant pour créer des mises en page flexibles et aligner les éléments dans une direction spécifique (ligne ou colonne)."
            ],
            [
                "question" => "Qu'est-ce qu'une media query en CSS ?",
                "answers" => [
                    "Un moyen d'ajouter des animations dynamiques",
                    "Une technique pour rendre le contenu adaptatif selon la taille d'écran",
                    "Une méthode de structuration des éléments",
                    "Un outil pour gérer les transitions de style"
                ],
                "correct" => 1,
                "explication" => "Les media queries permettent d'adapter le design d'une page web en fonction de la taille ou des caractéristiques de l'écran de l'utilisateur."
            ],
            [
                "question" => "Quel système CSS permet d'organiser les éléments sur des lignes et colonnes ?",
                "answers" => [
                    "Flexbox",
                    "CSS Grid",
                    "Media Queries",
                    "Transitions CSS"
                ],
                "correct" => 1,
                "explication" => "CSS Grid est un système de mise en page bidimensionnel qui permet d'organiser les éléments sur des lignes et colonnes."
            ],
            [
                "question" => "Quelle déclaration JavaScript a un scope de bloc et ne peut pas être redéclarée ?",
                "answers" => [
                    "Var",
                    "Let",
                    "Const",
                    "Scope"
                ],
                "correct" => 2,
                "explication" => "La déclaration Const en JavaScript permet de déclarer des variables qui ne peuvent pas être réassignées et qui respectent le scope de bloc."
            ],
            [
                "question" => "Quelle syntaxe JavaScript est utilisée pour écrire des fonctions anonymes plus concises ?",
                "answers" => [
                    "Déclaration classique",
                    "Fonctions fléchées (=>)",
                    "Constructeurs",
                    "Fonctions imbriquées"
                ],
                "correct" => 1,
                "explication" => "Les fonctions fléchées (=>) introduites dans ES6 permettent d'écrire des fonctions anonymes de manière plus concise et simplifient la gestion du contexte ('this')."
            ],
            [
                "question" => "À quoi sert async/await en JavaScript ?",
                "answers" => [
                    "Créer des animations",
                    "Gérer facilement des opérations asynchrones",
                    "Déclarer des variables globales",
                    "Utiliser des structures conditionnelles"
                ],
                "correct" => 1,
                "explication" => "Async/await simplifie la gestion des opérations asynchrones en rendant le code plus lisible, semblable à un code synchrone, tout en utilisant des Promises."
            ],
            [
                "question" => "Quel framework CSS rapide propose des grilles et des composants préconstruits ?",
                "answers" => [
                    "Tailwind CSS",
                    "Bootstrap",
                    "CSS Grid",
                    "React.js"
                ],
                "correct" => 1,
                "explication" => "Bootstrap est un framework CSS populaire qui fournit des grilles flexibles et des composants préconstruits pour accélérer le développement front-end."
            ],
            [
                "question" => "Quel framework JavaScript utilise un DOM virtuel pour optimiser les performances ?",
                "answers" => [
                    "Vue.js",
                    "React.js",
                    "Angular",
                    "Svelte"
                ],
                "correct" => 1,
                "explication" => "React.js utilise un DOM virtuel pour minimiser les manipulations du DOM réel, ce qui améliore les performances des applications web interactives."
            ],
            [
                "question" => "Quel framework CSS utilitaire facilite la création de designs personnalisés ?",
                "answers" => [
                    "Bootstrap",
                    "CSS Grid",
                    "Tailwind CSS",
                    "Flexbox"
                ],
                "correct" => 2,
                "explication" => "Tailwind CSS est un framework utilitaire qui permet de construire des interfaces personnalisées en utilisant des classes prédéfinies directement dans le HTML."
            ],
            [
                "question" => "Quel framework PHP est connu pour son élégance et son ORM Eloquent ?",
                "answers" => [
                    "Symfony",
                    "Laravel",
                    "WordPress",
                    "Zend Framework"
                ],
                "correct" => 1,
                "explication" => "Laravel est un framework PHP reconnu pour sa syntaxe élégante et son ORM Eloquent, qui facilite les interactions avec les bases de données."
            ],
            [
                "question" => "Quel framework minimaliste Node.js est utilisé pour créer des APIs REST ?",
                "answers" => [
                    "Socket.IO",
                    "Express.js",
                    "Fastify",
                    "Koa.js"
                ],
                "correct" => 1,
                "explication" => "Express.js est un framework minimaliste pour Node.js qui simplifie la création d'APIs REST grâce à sa flexibilité et sa simplicité."
            ],
            [
                "question" => "Quel langage côté serveur alimente WordPress ?",
                "answers" => [
                    "Java",
                    "Python",
                    "PHP",
                    "Node.js"
                ],
                "correct" => 2,
                "explication" => "WordPress utilise PHP comme langage côté serveur pour gérer les interactions entre la base de données et le contenu du site."
            ],

            // Bases de données
            [
                "question" => "Quelle base de données est orientée documents et idéale pour des données non structurées ?",
                "answers" => [
                    "MySQL",
                    "PostgreSQL",
                    "MongoDB",
                    "SQLite"
                ],
                "correct" => 2,
                "explication" => "MongoDB est une base de données NoSQL orientée documents qui stocke des données sous forme de documents JSON, idéale pour des structures de données flexibles et non structurées."
            ],
            [
                "question" => "Quelle base de données relationnelle est populaire pour les applications web ?",
                "answers" => [
                    "PostgreSQL",
                    "MongoDB",
                    "Cassandra",
                    "Redis"
                ],
                "correct" => 0,
                "explication" => "PostgreSQL est une base de données relationnelle puissante et populaire pour les applications web, connue pour sa conformité aux standards SQL et ses fonctionnalités avancées."
            ],
            [
                "question" => "Quelle commande Git est utilisée pour fusionner deux branches ?",
                "answers" => [
                    "git push",
                    "git pull",
                    "git merge",
                    "git rebase"
                ],
                "correct" => 2,
                "explication" => "La commande `git merge` est utilisée pour combiner les modifications de deux branches Git, créant ainsi un nouvel état dans l'historique."
            ],
            [
                "question" => "Qu'est-ce qu'un conteneur Docker ?",
                "answers" => [
                    "Un outil pour surveiller les performances des serveurs",
                    "Une instance exécutable d'une image Docker",
                    "Un framework pour le développement collaboratif",
                    "Un processus pour sauvegarder des bases de données"
                ],
                "correct" => 1,
                "explication" => "Un conteneur Docker est une instance isolée et exécutable d'une image Docker, qui contient tout ce dont une application a besoin pour fonctionner."
            ],
            [
                "question" => "Quel outil CI/CD est intégré à GitHub pour automatiser les workflows ?",
                "answers" => [
                    "GitHub Actions",
                    "Jenkins",
                    "CircleCI",
                    "Travis CI"
                ],
                "correct" => 0,
                "explication" => "GitHub Actions est un outil CI/CD intégré à GitHub qui permet d'automatiser les workflows, comme les tests et les déploiements, directement depuis un dépôt GitHub."
            ],
            [
                "question" => "Qu'est-ce que Docker Compose ?",
                "answers" => [
                    "Un outil pour organiser plusieurs conteneurs",
                    "Un framework CSS pour créer des grilles",
                    "Une commande Git pour fusionner des branches",
                    "Un outil pour gérer les bases de données NoSQL"
                ],
                "correct" => 0,
                "explication" => "Docker Compose est un outil qui permet de définir et d'exécuter des applications multi-conteneurs à l'aide d'un fichier YAML pour configurer les services."
            ],
            [
                "question" => "Quelle balise HTML5 délimite une section thématique d'un document ?",
                "answers" => [
                    htmlspecialchars("&ltsection&gt", ENT_QUOTES, 'UTF-8'),
                    htmlspecialchars("&ltarticle&gt", ENT_QUOTES, 'UTF-8'),
                    htmlspecialchars("&ltheader&gt", ENT_QUOTES, 'UTF-8'),
                    htmlspecialchars("&ltfooter&gt", ENT_QUOTES, 'UTF-8')
                ],
                "correct" => 0,
                "explication" => "La balise &ltsection&gt est utilisée pour délimiter une section thématique d'un document, regroupant des contenus qui partagent un thème ou un objectif commun."
            ],
            [
                "question" => "À quoi sert la balise &ltnav&gt en HTML5 ?",
                "answers" => [
                    "Afficher des graphiques 2D",
                    "Définir une zone de navigation",
                    "Structurer les données d'un tableau",
                    "Créer un espace pour les animations"
                ],
                "correct" => 1,
                "explication" => "La balise &ltnav&gt est utilisée pour définir une zone de navigation contenant des liens vers d'autres parties de la page ou du site."
            ],
            [
                "question" => "Quel outil CSS est utilisé pour créer des animations ?",
                "answers" => [
                    "Flexbox",
                    "CSS Grid",
                    "@keyframes",
                    "Media Queries"
                ],
                "correct" => 2,
                "explication" => "La règle CSS @keyframes permet de définir des animations en spécifiant des étapes clés, ce qui permet de créer des transitions visuelles complexes."
            ],
            [
                "question" => "Quelle fonctionnalité JavaScript ES6 permet d'extraire facilement des données d'un tableau ou d'un objet ?",
                "answers" => [
                    "Déstructuration",
                    "Fonctions fléchées",
                    "Async/await",
                    "Classes"
                ],
                "correct" => 0,
                "explication" => "La déstructuration en JavaScript permet d'extraire facilement des valeurs d'un tableau ou des propriétés d'un objet dans des variables distinctes."
            ],
            [
                "question" => "Quel framework progressif est conçu pour des interfaces utilisateur légères et modulaires ?",
                "answers" => [
                    "React.js",
                    "Svelte",
                    "Vue.js",
                    "Angular"
                ],
                "correct" => 2,
                "explication" => "Vue.js est un framework JavaScript progressif conçu pour créer des interfaces utilisateur légères et modulaires, avec une courbe d'apprentissage relativement douce."
            ],
            [
                "question" => "Quel framework compile les composants en JavaScript pur pour de meilleures performances ?",
                "answers" => [
                    "Svelte",
                    "React.js",
                    "Vue.js",
                    "Angular"
                ],
                "correct" => 0,
                "explication" => "Svelte est un framework JavaScript qui compile les composants en JavaScript pur au moment de la construction, réduisant ainsi la charge runtime et améliorant les performances."
            ],
            [
                "question" => "Quel framework PHP est modulaire et adapté aux projets complexes ?",
                "answers" => [
                    "Laravel",
                    "Symfony",
                    "WordPress",
                    "Zend Framework"
                ],
                "correct" => 1,
                "explication" => "Symfony est un framework PHP modulaire adapté aux projets complexes, offrant une flexibilité grâce à ses composants réutilisables et une architecture robuste."
            ],
            [
                "question" => "Quelle base de données relationnelle prend en charge les types JSON et des requêtes complexes ?",
                "answers" => [
                    "MySQL",
                    "PostgreSQL",
                    "MongoDB",
                    "SQLite"
                ],
                "correct" => 1,
                "explication" => "PostgreSQL est une base de données relationnelle qui prend en charge les types JSON et permet d'effectuer des requêtes complexes, ce qui en fait un choix puissant pour les applications modernes."
            ],
            [
                "question" => "Quel outil CI/CD est une plateforme flexible intégrée à GitLab ?",
                "answers" => [
                    "GitHub Actions",
                    "Jenkins",
                    "GitLab CI/CD",
                    "CircleCI"
                ],
                "correct" => 2,
                "explication" => "GitLab CI/CD est une plateforme intégrée à GitLab qui offre des pipelines flexibles pour automatiser les tests, les déploiements et d'autres workflows DevOps."
            ],
            [
                "question" => "Qu'est-ce que les Custom Elements dans HTML5 permettent de faire ?",
                "answers" => [
                    "Définir ses propres balises HTML pour plus de modularité",
                    "Créer des graphiques en 2D dans le navigateur",
                    "Encapsuler les styles CSS d'une page entière",
                    "Gérer le stockage local et les sessions"
                ],
                "correct" => 0,
                "explication" => "Les Custom Elements permettent aux développeurs de créer leurs propres balises HTML personnalisées, offrant une meilleure modularité et réutilisation du code."
            ],
            [
                "question" => "Quelle est la fonction principale du Shadow DOM en HTML5 ?",
                "answers" => [
                    "Créer des graphiques interactifs",
                    "Fournir un encapsulage pour les styles et balises",
                    "Optimiser les performances des applications web",
                    "Gérer les données asynchrones"
                ],
                "correct" => 1,
                "explication" => "Le Shadow DOM fournit un encapsulage pour les styles et balises, évitant ainsi les conflits de styles entre les composants."
            ],
            [
                "question" => "Quelle nouveauté CSS permet de définir des variables réutilisables dans une application web ?",
                "answers" => [
                    "CSS Grid",
                    "Flexbox",
                    "CSS Variables",
                    "Clamp()"
                ],
                "correct" => 2,
                "explication" => "Les CSS Variables (déclarées avec `--nom-variable`) permettent de définir des valeurs réutilisables dans une feuille de style, simplifiant ainsi la gestion des thèmes et des styles dynamiques."
            ],
            [
                "question" => "Que permet la fonction Clamp() en CSS ?",
                "answers" => [
                    "Créer des animations complexes",
                    "Limiter une valeur à des minimums et maximums dynamiques",
                    "Ajouter des effets de flou et de luminosité",
                    "Organiser les éléments sur deux axes"
                ],
                "correct" => 1,
                "explication" => "La fonction CSS `clamp()` permet de définir une valeur qui s'adapte dynamiquement entre un minimum et un maximum, idéale pour créer des mises en page adaptatives."
            ],
            [
                "question" => "Quel est l'objectif principal des modules JavaScript (ESM) ?",
                "answers" => [
                    "Améliorer les performances réseau",
                    "Structurer le code en divisant les fonctionnalités dans des fichiers importés/exportés",
                    "Créer des animations graphiques",
                    "Simplifier la gestion des bases de données"
                ],
                "correct" => 1,
                "explication" => "Les modules JavaScript (ESM) permettent de structurer le code en séparant les fonctionnalités dans des fichiers distincts, qui peuvent être importés ou exportés selon les besoins."
            ],
            [
                "question" => "Quelle est la spécificité de Next.js par rapport à React.js ?",
                "answers" => [
                    "Il offre le rendu côté serveur (SSR) et les applications statiques pour améliorer le SEO",
                    "Il est une alternative plus légère à React",
                    "Il remplace complètement le DOM virtuel",
                    "Il est utilisé uniquement pour les applications mobiles"
                ],
                "correct" => 0,
                "explication" => "Next.js est un framework basé sur React qui ajoute des fonctionnalités comme le rendu côté serveur (SSR) et la génération statique pour améliorer les performances et le SEO."
            ],
            [
                "question" => "Quel framework backend est décrit comme une alternative inspirée de Laravel pour Node.js ?",
                "answers" => [
                    "Express.js",
                    "AdonisJS",
                    "NestJS",
                    "Django"
                ],
                "correct" => 1,
                "explication" => "AdonisJS est un framework backend pour Node.js qui s'inspire de Laravel, offrant une architecture modulaire et des outils intégrés pour accélérer le développement d'applications."
            ],
            [
                "question" => "Quelle base de données NoSQL est orientée colonnes et conçue pour des volumes massifs de données ?",
                "answers" => [
                    "MongoDB",
                    "Cassandra",
                    "Redis",
                    "Firebase Realtime Database"
                ],
                "correct" => 1,
                "explication" => "Cassandra est une base de données NoSQL orientée colonnes, conçue pour gérer des volumes massifs de données distribuées avec une forte tolérance aux pannes."
            ],
            [
                "question" => "Qu'est-ce qui distingue MariaDB de MySQL ?",
                "answers" => [
                    "Elle offre des fonctionnalités supplémentaires comme des requêtes parallèles et un stockage hybride JSON",
                    "Elle est uniquement utilisée pour les bases NoSQL",
                    "Elle est spécialisée dans le traitement de données massives",
                    "Elle est conçue pour des environnements mobiles"
                ],
                "correct" => 0,
                "explication" => "MariaDB est un fork de MySQL qui ajoute des fonctionnalités avancées comme des requêtes parallèles et un meilleur support des données JSON."
            ],
            [
                "question" => "Quel outil est une alternative à Docker, conçu pour un environnement sans démon ?",
                "answers" => [
                    "Kubernetes",
                    "Podman",
                    "Helm",
                    "Vagrant"
                ],
                "correct" => 1,
                "explication" => "Podman est une alternative à Docker qui ne nécessite pas de démon en arrière-plan, offrant une meilleure sécurité et compatibilité avec les outils Docker."
            ],
            [
                "question" => "Quelle plateforme est utilisée pour l'orchestration de conteneurs ?",
                "answers" => [
                    "Docker Compose",
                    "Terraform",
                    "Kubernetes",
                    "Ansible"
                ],
                "correct" => 2,
                "explication" => "Kubernetes est une plateforme d'orchestration de conteneurs qui gère automatiquement le déploiement, la mise à l'échelle et la maintenance des applications conteneurisées."
            ],
            [
                "question" => "Que permet l'utilisation d'Helm dans Kubernetes ?",
                "answers" => [
                    "Orchestrer des conteneurs en temps réel",
                    "Créer des pipelines CI/CD",
                    "Simplifier l'installation et la gestion des configurations complexes",
                    "Automatiser les tâches d'administration système"
                ],
                "correct" => 2,
                "explication" => "Helm est un gestionnaire de packages pour Kubernetes qui simplifie l'installation, la mise à jour et la gestion des configurations complexes des applications conteneurisées."
            ],
            [
                "question" => "Quel est le rôle de Prometheus dans une infrastructure moderne ?",
                "answers" => [
                    "Collecter des métriques en temps réel pour le monitoring",
                    "Gérer les logs d'application",
                    "Créer des conteneurs et les déployer",
                    "Orchestrer des bases de données distribuées"
                ],
                "correct" => 0,
                "explication" => "Prometheus est un système de surveillance open source qui collecte des métriques en temps réel pour le monitoring et la gestion des performances d'infrastructures modernes."
            ],
            [
                "question" => "Quel outil permet de gérer des infrastructures comme du code (IaC) ?",
                "answers" => [
                    "Terraform",
                    "Jenkins",
                    "Grafana",
                    "Docker Compose"
                ],
                "correct" => 0,
                "explication" => "Terraform est un outil IaC qui permet de définir et de provisionner des infrastructures complètes sous forme de code, facilitant leur gestion et leur déploiement."
            ],
            [
                "question" => "Qu'est-ce qu'ArgoCD dans l'écosystème Kubernetes ?",
                "answers" => [
                    "Un outil de gestion CI/CD basé sur GitOps",
                    "Un système de monitoring en continu",
                    "Une alternative au Shadow DOM",
                    "Une base de données distribuée"
                ],
                "correct" => 0,
                "explication" => "ArgoCD est un outil de déploiement continu basé sur GitOps pour Kubernetes, permettant de synchroniser les applications avec leur configuration définie dans un dépôt Git."
            ]            
        ];
    }
    public function getQuestionQCM5() {
        return [
            // Sécurité Web : XSS
            [
                "question" => "Qu'est-ce qu'une attaque XSS (Cross-Site Scripting) ?",
                "answers" => [
                    "Une attaque où un code malveillant est injecté dans une page web",
                    "Une attaque qui force un utilisateur à exécuter une action non autorisée",
                    "Un type de phishing basé sur des emails",
                    "Une faille dans le protocole HTTPS"
                ],
                "correct" => 0,
                "explication" => "Une attaque XSS permet à un attaquant d'injecter un code malveillant dans une page web vue par d'autres utilisateurs, souvent pour voler des données sensibles comme les cookies."
            ],
            [
                "question" => "Quelle fonction PHP est utilisée pour échapper les entrées utilisateur afin de prévenir les attaques XSS ?",
                "answers" => [
                    "htmlspecialchars()",
                    "mysqli_escape()",
                    "addslashes()",
                    "strip_tags()"
                ],
                "correct" => 0,
                "explication" => "La fonction `htmlspecialchars()` échappe les caractères spéciaux tels que `<` ou `>` pour empêcher l'exécution de scripts malveillants insérés par un utilisateur."
            ],
            [
                "question" => "Que fait une Content Security Policy (CSP) ?",
                "answers" => [
                    "Elle redirige le trafic HTTP vers HTTPS",
                    "Elle définit des politiques pour limiter l'exécution de scripts",
                    "Elle chiffre les mots de passe dans la base de données",
                    "Elle supprime les entrées utilisateur non valides"
                ],
                "correct" => 1,
                "explication" => "Une Content Security Policy (CSP) définit des règles strictes sur les ressources pouvant être chargées ou exécutées, réduisant les risques d'attaques XSS."
            ],
            [
                "question" => "Qu'est-ce qu'une attaque CSRF (Cross-Site Request Forgery) ?",
                "answers" => [
                    "Une attaque qui injecte du code malveillant dans une page web",
                    "Une attaque qui pousse un utilisateur authentifié à exécuter une action non autorisée",
                    "Une faille dans les certificats HTTPS",
                    "Un type de spam basé sur des formulaires web"
                ],
                "correct" => 1,
                "explication" => "Une attaque CSRF incite un utilisateur authentifié à exécuter une action non intentionnelle, comme changer un mot de passe ou transférer de l'argent, à l'insu de l'utilisateur."
            ],
            [
                "question" => "Quelle méthode est recommandée pour prévenir les attaques CSRF ?",
                "answers" => [
                    "Échapper les entrées utilisateur",
                    "Utiliser des jetons CSRF pour vérifier l'origine des requêtes",
                    "Compresser les ressources comme les images et scripts",
                    "Utiliser des cookies pour stocker les données utilisateur"
                ],
                "correct" => 1,
                "explication" => "Les jetons CSRF (Cross-Site Request Forgery tokens) permettent de vérifier l'origine des requêtes et de s'assurer qu'elles proviennent bien d'un utilisateur authentique."
            ],
            [
                "question" => "Quel est l'objectif principal du protocole HTTPS ?",
                "answers" => [
                    "Optimiser la vitesse de chargement des pages",
                    "Chiffrer les échanges entre le client et le serveur",
                    "Empêcher les attaques XSS",
                    "Stocker les données utilisateur dans le cache"
                ],
                "correct" => 1,
                "explication" => "Le protocole HTTPS garantit la confidentialité et la sécurité des échanges entre le client et le serveur en chiffrant les données transmises."
            ],
            [
                "question" => "Quel certificat est nécessaire pour mettre en place HTTPS ?",
                "answers" => [
                    "Certificat DNS",
                    "Certificat SSL/TLS",
                    "Certificat JSON",
                    "Certificat d'accès ARIA"
                ],
                "correct" => 1,
                "explication" => "Un certificat SSL/TLS est requis pour sécuriser les communications entre un client et un serveur, permettant la mise en place du protocole HTTPS."
            ],
            [
                "question" => "Quel algorithme est recommandé pour le hash des mots de passe ?",
                "answers" => [
                    "SHA1",
                    "bcrypt",
                    "MD5",
                    "CRC32"
                ],
                "correct" => 1,
                "explication" => "Bcrypt est un algorithme de hash conçu spécifiquement pour protéger les mots de passe, offrant une protection contre les attaques par force brute grâce à sa lenteur configurable."
            ],
            [
                "question" => "Pourquoi faut-il utiliser un salt lors du hash des mots de passe ?",
                "answers" => [
                    "Pour accélérer les opérations de hash",
                    "Pour éviter les attaques par table de correspondance (rainbow tables)",
                    "Pour stocker les mots de passe de manière lisible",
                    "Pour améliorer la vitesse de traitement des requêtes"
                ],
                "correct" => 1,
                "explication" => "Un salt est une donnée aléatoire ajoutée au mot de passe avant le hash pour empêcher les attaques par table de correspondance, qui reposent sur des hash pré-calculés."
            ],
            [
                "question" => "Quel principe est au cœur des standards WCAG ?",
                "answers" => [
                    "Créer du contenu uniquement pour les utilisateurs experts",
                    "Rendre le contenu perceptible, utilisable, compréhensible et robuste",
                    "Optimiser les performances des sites web",
                    "Assurer la compatibilité avec tous les navigateurs modernes"
                ],
                "correct" => 1,
                "explication" => "Les standards WCAG (Web Content Accessibility Guidelines) visent à rendre le contenu web accessible à tous, y compris aux personnes handicapées, en le rendant perceptible, utilisable, compréhensible et robuste."
            ],
            [
                "question" => "Que fait l'attribut alt dans les balises &ltimg&gt ?",
                "answers" => [
                    "Ajoute un texte alternatif pour les lecteurs d'écran",
                    "Optimise la vitesse de chargement des images",
                    "Spécifie la source des images",
                    "Active le lazy loading pour les images"
                ],
                "correct" => 0,
                "explication" => "L'attribut `alt` fournit un texte alternatif pour les images, utilisé par les lecteurs d'écran pour les personnes malvoyantes et affiché si l'image ne peut pas être chargée."
            ],
            [
                "question" => "Quel format est recommandé pour des images optimisées ?",
                "answers" => [
                    "JPEG",
                    "PNG",
                    "WebP",
                    "BMP"
                ],
                "correct" => 2,
                "explication" => "Le format WebP est optimisé pour le web, offrant une compression supérieure à celle des formats JPEG ou PNG tout en conservant une qualité d'image élevée."
            ],
            [
                "question" => "Qu'est-ce que le lazy loading ?",
                "answers" => [
                    "Un protocole pour sécuriser les connexions",
                    "Un système pour charger les ressources uniquement lorsqu'elles sont visibles",
                    "Une technique pour réduire les tailles de fichiers",
                    "Un algorithme pour accélérer les hash de mots de passe"
                ],
                "correct" => 1,
                "explication" => "Le lazy loading charge les ressources (comme les images ou les vidéos) uniquement lorsqu'elles deviennent visibles dans la fenêtre de visualisation de l'utilisateur, améliorant ainsi les performances."
            ],
            [
                "question" => "Quelle directive HTTP permet d'activer la mise en cache du navigateur ?",
                "answers" => [
                    "Content-Security-Policy",
                    "Cache-Control",
                    "Strict-Transport-Security",
                    "X-Frame-Options"
                ],
                "correct" => 1,
                "explication" => "La directive `Cache-Control` est utilisée pour définir les règles de mise en cache des ressources dans le navigateur, ce qui peut améliorer considérablement les performances."
            ],
            [
                "question" => "Quel outil est utilisé pour analyser les performances des sites web ?",
                "answers" => [
                    "PageSpeed Insights",
                    "ARIA Validator",
                    "NVDA",
                    "Let’s Encrypt"
                ],
                "correct" => 0,
                "explication" => "PageSpeed Insights est un outil de Google qui analyse les performances des pages web et fournit des recommandations pour les améliorer."
            ],
            // Sécurité Web
            [
                "question" => "Quel est un avantage principal de l'utilisation de HTTPS ?",
                "answers" => [
                    "Accélérer le chargement des pages",
                    "Prévenir les attaques de type Man-In-The-Middle (MITM)",
                    "Rendre les pages web accessibles aux lecteurs d'écran",
                    "Éviter les attaques XSS"
                ],
                "correct" => 1,
                "explication" => "HTTPS prévient les attaques de type Man-In-The-Middle en chiffrant les données échangées entre le client et le serveur, garantissant leur confidentialité."
            ],
            [
                "question" => "Quel outil peut être utilisé pour obtenir un certificat SSL/TLS gratuitement ?",
                "answers" => [
                    "Cloudflare",
                    "Let’s Encrypt",
                    "Google PageSpeed Insights",
                    "Lighthouse"
                ],
                "correct" => 1,
                "explication" => "Let’s Encrypt est une autorité de certification gratuite qui fournit des certificats SSL/TLS, permettant de sécuriser les connexions HTTPS."
            ],
            [
                "question" => "Quel est l'objectif principal des jetons CSRF ?",
                "answers" => [
                    "Empêcher l'injection de scripts malveillants",
                    "Vérifier l'origine des requêtes sensibles",
                    "Minimiser la taille des ressources",
                    "Chiffrer les mots de passe"
                ],
                "correct" => 1,
                "explication" => "Les jetons CSRF (Cross-Site Request Forgery) permettent de vérifier l'origine des requêtes sensibles pour s'assurer qu'elles proviennent de l'utilisateur légitime."
            ],
            [
                "question" => "Pourquoi Argon2 est-il recommandé pour le hash des mots de passe ?",
                "answers" => [
                    "Il est plus rapide que bcrypt",
                    "Il est conçu pour résister aux attaques par GPU",
                    "Il stocke les mots de passe en clair pour faciliter leur récupération",
                    "Il est utilisé par défaut dans les navigateurs modernes"
                ],
                "correct" => 1,
                "explication" => "Argon2 est un algorithme de hash moderne conçu pour résister aux attaques par GPU, rendant le hash des mots de passe plus sûr contre les attaques de type brute force."
            ],
            [
                "question" => "Que signifie l'acronyme a11y pour l'accessibilité ?",
                "answers" => [
                    "Automated Web Testing",
                    "Accessibility (11 lettres entre a et y)",
                    "Advanced User Interface",
                    "Application Performance Insights"
                ],
                "correct" => 1,
                "explication" => "L'acronyme a11y est une abréviation pour 'Accessibility', avec les 11 lettres entre le 'a' et le 'y' représentées par le nombre 11."
            ],
            [
                "question" => "Quel outil est utilisé pour détecter les problèmes d'accessibilité sur une page web ?",
                "answers" => [
                    "Lighthouse",
                    "NVDA",
                    "ImageOptim",
                    "Cloudflare"
                ],
                "correct" => 0,
                "explication" => "Lighthouse est un outil de Google qui analyse les performances, l'accessibilité et le SEO des pages web, fournissant des rapports détaillés."
            ],
            [
                "question" => "Quelle technique améliore les performances en chargeant les ressources avant qu'elles ne soient nécessaires ?",
                "answers" => [
                    "Lazy Loading",
                    "Caching",
                    "Preloading",
                    "Hashing"
                ],
                "correct" => 2,
                "explication" => "Le preloading permet de charger des ressources essentielles à l'avance, avant qu'elles ne soient réellement nécessaires, améliorant ainsi les performances de l'application."
            ],
            [
                "question" => "Quel format de fichier est souvent utilisé pour minimiser la taille des polices personnalisées ?",
                "answers" => [
                    "WOFF2",
                    "TTF",
                    "OTF",
                    "EOT"
                ],
                "correct" => 0,
                "explication" => "Le format WOFF2 est optimisé pour le web, réduisant la taille des polices personnalisées tout en conservant leur qualité."
            ],
            [
                "question" => "Quel attribut permet d'implémenter le lazy loading pour les images ?",
                "answers" => [
                    "alt",
                    "src",
                    "loading",
                    "defer"
                ],
                "correct" => 2,
                "explication" => "L'attribut `loading='lazy'` permet de différer le chargement des images jusqu'à ce qu'elles deviennent visibles, améliorant ainsi la vitesse de chargement des pages."
            ],
            [
                "question" => "Quel outil analyse les performances des pages et fournit des recommandations ?",
                "answers" => [
                    "PageSpeed Insights",
                    "Docker",
                    "Axios",
                    "ARIA"
                ],
                "correct" => 0,
                "explication" => "PageSpeed Insights est un outil qui analyse les performances des pages web et propose des recommandations pour optimiser la vitesse et l'expérience utilisateur."
            ],
            [
                "question" => "Quelle extension VS Code est utilisée pour corriger les erreurs de code JavaScript ?",
                "answers" => [
                    "Prettier",
                    "Live Server",
                    "ESLint",
                    "Bracket Pair Colorizer"
                ],
                "correct" => 2,
                "explication" => "ESLint est une extension populaire pour Visual Studio Code qui détecte et corrige automatiquement les erreurs de syntaxe et de style dans le code JavaScript."
            ],
            [
                "question" => "Quel raccourci permet de déplacer une ligne ou un bloc de code dans VS Code ?",
                "answers" => [
                    "Ctrl + B",
                    "Alt + flèche haut/bas",
                    "Shift + Alt + F",
                    "Ctrl + Shift + P"
                ],
                "correct" => 1,
                "explication" => "Le raccourci `Alt + flèche haut/bas` permet de déplacer rapidement une ligne ou un bloc de code dans Visual Studio Code."
            ],
            [
                "question" => "Comment prévisualiser un projet en temps réel avec VS Code ?",
                "answers" => [
                    "Utiliser l'extension Live Server",
                    "Activer le terminal intégré",
                    "Utiliser GitLens",
                    "Configurer le fichier .vscode/settings.json"
                ],
                "correct" => 0,
                "explication" => "L'extension Live Server de VS Code lance un serveur local qui permet de prévisualiser les modifications en temps réel dans le navigateur."
            ],
            [
                "question" => "Quelle est une bonne pratique dans Figma pour harmoniser les designs ?",
                "answers" => [
                    "Utiliser des composants partagés",
                    "Créer des maquettes sur des calques séparés",
                    "Activer le mode collaboratif",
                    "Exporter les designs en CSS"
                ],
                "correct" => 0,
                "explication" => "Utiliser des composants partagés dans Figma permet de maintenir la cohérence des designs et facilite leur réutilisation dans plusieurs projets."
            ],
            [
                "question" => "Quelle fonctionnalité Figma permet de gérer des interfaces adaptatives ?",
                "answers" => [
                    "Auto Layout",
                    "Wireframes",
                    "Bibliothèques partagées",
                    "Grilles"
                ],
                "correct" => 0,
                "explication" => "Auto Layout dans Figma permet de créer des interfaces adaptatives qui s'ajustent automatiquement en fonction de la taille des contenus et des écrans."
            ],
            [
                "question" => "Comment automatiser les tests dans Postman ?",
                "answers" => [
                    "Utiliser des scripts pré/post-requêtes",
                    "Exporter les collections sous forme de JSON",
                    "Créer des bibliothèques partagées",
                    "Ajouter des environnements dynamiques"
                ],
                "correct" => 0,
                "explication" => "Postman permet d'automatiser les tests grâce à des scripts pré/post-requêtes qui vérifient les réponses API et garantissent leur conformité."
            ],
            [
                "question" => "Quel type de requête est utilisé pour récupérer des données via une API ?",
                "answers" => [
                    "POST",
                    "PUT",
                    "DELETE",
                    "GET"
                ],
                "correct" => 3,
                "explication" => "La méthode GET est utilisée pour récupérer des données à partir d'une API sans modifier les ressources sur le serveur."
            ],
            [
                "question" => "Quel onglet de Chrome DevTools est utilisé pour déboguer JavaScript ?",
                "answers" => [
                    "Sources",
                    "Network",
                    "Performance",
                    "Elements"
                ],
                "correct" => 0,
                "explication" => "L'onglet Sources dans Chrome DevTools permet de déboguer le code JavaScript en définissant des points d'arrêt et en inspectant les variables."
            ],
            [
                "question" => "Que permet de faire le mode 'Responsive Design' dans Chrome DevTools ?",
                "answers" => [
                    "Déboguer les erreurs CSS",
                    "Analyser les performances des scripts",
                    "Simuler l'affichage sur des appareils mobiles",
                    "Inspecter les requêtes HTTP"
                ],
                "correct" => 2,
                "explication" => "Le mode 'Responsive Design' dans Chrome DevTools simule l'affichage des pages web sur différents appareils et tailles d'écran."
            ],
            [
                "question" => "Quelle est une bonne pratique avec Trello pour la gestion des tâches ?",
                "answers" => [
                    "Utiliser des colonnes pour organiser les étapes ('À faire', 'En cours', 'Terminé')",
                    "Créer un tableau par membre de l'équipe",
                    "Ne pas ajouter de description dans les cartes",
                    "Attribuer toutes les tâches à un seul utilisateur"
                ],
                "correct" => 0,
                "explication" => "Organiser les tâches avec des colonnes comme 'À faire', 'En cours' et 'Terminé' dans Trello permet de visualiser clairement l'état d'avancement du projet."
            ],
            [
                "question" => "Quel outil mesure les performances d'un site et fournit des scores d'optimisation ?",
                "answers" => [
                    "Lighthouse",
                    "Postman",
                    "Webpack",
                    "GitHub Actions"
                ],
                "correct" => 0,
                "explication" => "Lighthouse mesure les performances d'un site, y compris la vitesse de chargement, l'accessibilité et les meilleures pratiques SEO, et fournit des recommandations."
            ],
            [
                "question" => "Quel outil est recommandé pour réduire la taille des images sans perte de qualité ?",
                "answers" => [
                    "TinyPNG",
                    "Postman",
                    "GitLens",
                    "Webpack"
                ],
                "correct" => 0,
                "explication" => "TinyPNG compresse les images en réduisant leur taille tout en conservant une qualité optimale, ce qui améliore les performances des sites web."
            ]            
        ];
    }
    public function getQuestionQCM6() {
        return [
            // Visual Studio Code
            [
                "question" => "Quelle extension VS Code permet un formatage automatique du code ?",
                "answers" => [
                    "GitLens",
                    "Prettier",
                    "ESLint",
                    "Live Server"
                ],
                "correct" => 1,
                "explication" => "Prettier est une extension qui applique des règles de style prédéfinies pour formater automatiquement le code, le rendant plus lisible et cohérent."
            ],
            [
                "question" => "Quelle fonctionnalité VS Code permet de voir l'historique des fichiers avec Git ?",
                "answers" => [
                    "GitLens",
                    "Bracket Pair Colorizer",
                    "Live Server",
                    "Prettier"
                ],
                "correct" => 0,
                "explication" => "GitLens est une extension qui améliore les fonctionnalités Git intégrées à VS Code, permettant de visualiser l'historique des fichiers et des modifications."
            ],
            [
                "question" => "Quel raccourci VS Code permet de commenter ou décommenter une ligne ou une sélection ?",
                "answers" => [
                    "Ctrl + P",
                    "Ctrl + /",
                    "Shift + Alt + F",
                    "Ctrl + D"
                ],
                "correct" => 1,
                "explication" => "Le raccourci `Ctrl + /` est utilisé dans VS Code pour ajouter ou supprimer des commentaires rapidement sur une ligne ou une sélection."
            ],
            [
                "question" => "Quelle commande ouvre rapidement un fichier par son nom dans VS Code ?",
                "answers" => [
                    "Ctrl + P",
                    "Ctrl + B",
                    "Ctrl + Shift + P",
                    "Ctrl + /"
                ],
                "correct" => 0,
                "explication" => "La commande `Ctrl + P` dans VS Code permet de rechercher et d'ouvrir rapidement un fichier en tapant son nom."
            ],
            [
                "question" => "Quel fichier dans VS Code est utilisé pour des configurations spécifiques au projet ?",
                "answers" => [
                    ".vscode/settings.json",
                    "package.json",
                    "config.json",
                    ".env"
                ],
                "correct" => 0,
                "explication" => "Le fichier `.vscode/settings.json` permet de définir des paramètres spécifiques au projet, comme le formatage du code ou les règles d'analyse."
            ],
            [
                "question" => "Quel outil est utilisé pour créer des wireframes et prototypes interactifs ?",
                "answers" => [
                    "Figma",
                    "Postman",
                    "Trello",
                    "PhpStorm"
                ],
                "correct" => 0,
                "explication" => "Figma est un outil de design et de prototypage qui permet de créer des wireframes, des maquettes interactives, et de collaborer en temps réel."
            ],
            [
                "question" => "Dans Figma, quelle fonctionnalité est utilisée pour créer des interfaces adaptatives ?",
                "answers" => [
                    "Auto Layout",
                    "Wireframe",
                    "Grilles et guides",
                    "Composants partagés"
                ],
                "correct" => 0,
                "explication" => "La fonctionnalité Auto Layout dans Figma permet de concevoir des interfaces adaptatives qui s'ajustent automatiquement en fonction du contenu."
            ],
            [
                "question" => "Quel outil est utilisé pour tester des requêtes HTTP et des API REST ?",
                "answers" => [
                    "Postman",
                    "Lighthouse",
                    "Trello",
                    "WebStorm"
                ],
                "correct" => 0,
                "explication" => "Postman est un outil populaire pour tester, documenter et automatiser des requêtes HTTP et des API REST."
            ],
            [
                "question" => "Dans Postman, quelle fonctionnalité permet d'automatiser les tests avec des scripts ?",
                "answers" => [
                    "Tests dynamiques",
                    "Scripts pré/post-requêtes",
                    "Collections d'API",
                    "Environnements dynamiques"
                ],
                "correct" => 1,
                "explication" => "Les scripts pré/post-requêtes dans Postman permettent d'automatiser des vérifications et d'ajuster dynamiquement les requêtes API."
            ],
            [
                "question" => "Quelle pratique est recommandée pour gérer les clés API dynamiques dans Postman ?",
                "answers" => [
                    "Utiliser les environnements",
                    "Créer un fichier JSON externe",
                    "Configurer des sessions de cookies",
                    "Activer les tokens OAuth"
                ],
                "correct" => 0,
                "explication" => "Postman permet de gérer les clés API dynamiques à l'aide d'environnements, où les variables peuvent être définies et réutilisées dans les requêtes."
            ],
            [
                "question" => "Quel outil intégré au navigateur Chrome permet d'inspecter le DOM en direct ?",
                "answers" => [
                    "Chrome DevTools",
                    "GitLens",
                    "VS Code Terminal",
                    "WebStorm Debugger"
                ],
                "correct" => 0,
                "explication" => "Chrome DevTools est un outil intégré qui permet d'inspecter, modifier et déboguer le DOM, les styles CSS et le JavaScript en direct."
            ],
            [
                "question" => "Quel onglet de Chrome DevTools est utilisé pour analyser les performances d'une page web ?",
                "answers" => [
                    "Sources",
                    "Network",
                    "Performance",
                    "Console"
                ],
                "correct" => 2,
                "explication" => "L'onglet Performance dans Chrome DevTools fournit des informations détaillées sur le temps de chargement et les performances des pages web."
            ],
            [
                "question" => "Quelle technique peut être utilisée avec DevTools pour déboguer du code minifié ?",
                "answers" => [
                    "Breakpoints",
                    "Source maps",
                    "Lazy loading",
                    "Inspecter les requêtes"
                ],
                "correct" => 1,
                "explication" => "Les source maps permettent de déboguer le code minifié en associant les fichiers minifiés à leur version originale lisible."
            ],
            [
                "question" => "Quel outil utilise l'IA pour suggérer du code directement dans votre éditeur ?",
                "answers" => [
                    "GitHub Copilot",
                    "ChatGPT",
                    "DeepCode",
                    "PhpStorm"
                ],
                "correct" => 0,
                "explication" => "GitHub Copilot utilise l'intelligence artificielle pour analyser le contexte du code et fournir des suggestions pertinentes directement dans l'éditeur."
            ],
            [
                "question" => "Quel outil peut être utilisé pour détecter les failles de sécurité dans le code avec l'IA ?",
                "answers" => [
                    "DeepCode",
                    "Selenium",
                    "WebStorm",
                    "GitHub Actions"
                ],
                "correct" => 0,
                "explication" => "DeepCode utilise l'IA pour analyser le code source et identifier automatiquement les failles de sécurité et les problèmes de qualité."
            ],
            [
                "question" => "Quel outil est souvent utilisé pour organiser les tâches avec des tableaux Kanban ?",
                "answers" => [
                    "Trello",
                    "Jira",
                    "Slack",
                    "WebStorm"
                ],
                "correct" => 0,
                "explication" => "Trello permet de gérer les tâches à l'aide de tableaux Kanban, en organisant les étapes comme 'À faire', 'En cours' et 'Terminé'."
            ],
            [
                "question" => "Quel outil de gestion de projets est particulièrement adapté à la méthodologie Agile ?",
                "answers" => [
                    "Trello",
                    "Jira",
                    "Figma",
                    "Postman"
                ],
                "correct" => 1,
                "explication" => "Jira est conçu pour la méthodologie Agile, permettant de planifier, suivre et gérer les sprints et les tâches d'équipe."
            ],
            [
                "question" => "Quel outil intégré à Chrome mesure l'accessibilité, le SEO et les performances ?",
                "answers" => [
                    "Lighthouse",
                    "PageSpeed Insights",
                    "GTmetrix",
                    "WebPageTest"
                ],
                "correct" => 0,
                "explication" => "Lighthouse fournit une analyse complète des performances, de l'accessibilité et du SEO d'une page web, avec des recommandations pour les améliorer."
            ],
            [
                "question" => "Quel outil mesure la vitesse d'un site et fournit des recommandations d'optimisation ?",
                "answers" => [
                    "GTmetrix",
                    "Selenium",
                    "Postman",
                    "WebStorm"
                ],
                "correct" => 0,
                "explication" => "GTmetrix mesure la vitesse de chargement des sites web et propose des recommandations d'optimisation basées sur des métriques clés."
            ],
            [
                "question" => "Quel framework est utilisé pour automatiser les tests de navigateurs ?",
                "answers" => [
                    "Selenium",
                    "WebStorm",
                    "PhpStorm",
                    "DeepCode"
                ],
                "correct" => 0,
                "explication" => "Selenium est un framework populaire pour automatiser les tests de navigateurs, simulant les interactions utilisateur sur des pages web."
            ]
        ];
    }
    public function getQuestionQCM7() {
        return [
            // Principes fondamentaux
            [
                "question" => "Que signifie le principe KISS en développement ?",
                "answers" => [
                    "Keep It Simple, Stupid",
                    "Keep It Smart and Secure",
                    "Keep It Structured and Simple",
                    "Keep It Stable and Secure"
                ],
                "correct" => 0,
                "explication" => "Le principe KISS (Keep It Simple, Stupid) encourage les développeurs à garder les solutions simples, évitant les complexités inutiles."
            ],
            [
                "question" => "Que recommande le principe DRY (Don't Repeat Yourself) ?",
                "answers" => [
                    "Éviter les dépendances dans le code",
                    "Éviter les redondances en réutilisant des fonctions ou modules",
                    "Écrire du code en une seule ligne",
                    "Documenter toutes les fonctions dans une classe"
                ],
                "correct" => 1,
                "explication" => "Le principe DRY préconise de réduire les duplications dans le code en réutilisant les fonctions ou modules, ce qui facilite la maintenance."
            ],
            [
                "question" => "Qu'est-ce que YAGNI (You Aren't Gonna Need It) conseille ?",
                "answers" => [
                    "Ne pas écrire de fonctionnalités tant qu'elles ne sont pas nécessaires",
                    "Optimiser le code dès le début du projet",
                    "Anticiper les besoins futurs dans le développement",
                    "Utiliser des frameworks pour éviter le code inutile"
                ],
                "correct" => 0,
                "explication" => "YAGNI recommande de ne pas implémenter des fonctionnalités non nécessaires immédiatement, évitant ainsi du code inutilisé."
            ],
            [
                "question" => "Que signifie le S dans les principes SOLID ?",
                "answers" => [
                    "Single Responsibility Principle",
                    "Scalable Code Principle",
                    "Structured Object Principle",
                    "Secure Implementation Principle"
                ],
                "correct" => 0,
                "explication" => "Le Single Responsibility Principle stipule qu'une classe ou un module doit avoir une seule responsabilité ou fonction claire."
            ],
            [
                "question" => "Quel est l'objectif du principe Open/Closed (O dans SOLID) ?",
                "answers" => [
                    "Les modules doivent être ouverts aux modifications directes",
                    "Les modules doivent être fermés à l'extension",
                    "Les modules doivent être ouverts à l'extension mais fermés à la modification",
                    "Les modules doivent être fermés aux dépendances externes"
                ],
                "correct" => 2,
                "explication" => "Le principe Open/Closed recommande que les modules soient extensibles via des ajouts mais protégés contre des modifications directes."
            ],
            [
                "question" => "Dans le modèle MVC, quel composant gère la logique métier ?",
                "answers" => [
                    "Model",
                    "View",
                    "Controller",
                    "Service"
                ],
                "correct" => 0,
                "explication" => "Dans le modèle MVC, le Model gère la logique métier et les données de l'application, séparées de l'affichage (View) et du contrôle (Controller)."
            ],
            [
                "question" => "Quelle méthodologie est basée sur des sprints et des itérations courtes ?",
                "answers" => [
                    "Kanban",
                    "Scrum",
                    "MERISE",
                    "TDD"
                ],
                "correct" => 1,
                "explication" => "Scrum est une méthodologie Agile qui utilise des sprints courts pour livrer des itérations fonctionnelles et prioritaires du produit."
            ],
            [
                "question" => "Quel outil peut être utilisé pour documenter une API REST ?",
                "answers" => [
                    "Swagger",
                    "Webpack",
                    "Cucumber",
                    "GitHub Actions"
                ],
                "correct" => 0,
                "explication" => "Swagger est un outil permettant de générer automatiquement la documentation des API REST, facilitant leur utilisation et maintenance."
            ],
            [
                "question" => "Quelle est une bonne pratique pour la documentation de code ?",
                "answers" => [
                    "Ajouter des commentaires sur chaque ligne de code",
                    "Expliquer l'intention derrière le code avec des commentaires",
                    "Éviter les commentaires dans le code",
                    "Utiliser uniquement des diagrammes UML"
                ],
                "correct" => 1,
                "explication" => "Les commentaires dans le code doivent expliquer l'intention ou la logique, rendant le code plus compréhensible pour les autres développeurs."
            ],
            [
                "question" => "Quel type de branche Git est utilisé pour corriger un bug critique ?",
                "answers" => [
                    "feature/",
                    "hotfix/",
                    "develop/",
                    "main/"
                ],
                "correct" => 1,
                "explication" => "La branche hotfix/ est utilisée pour résoudre des bugs critiques qui doivent être corrigés rapidement en production."
            ],
            [
                "question" => "Quelle méthodologie utilise des colonnes comme 'À faire', 'En cours', 'Terminé' ?",
                "answers" => [
                    "Scrum",
                    "Kanban",
                    "TDD",
                    "CI/CD"
                ],
                "correct" => 1,
                "explication" => "Kanban est une méthodologie qui utilise des colonnes visuelles pour représenter les tâches à différents stades de progression."
            ],
            [
                "question" => "Quelle unité est recommandée pour un design responsive ?",
                "answers" => [
                    "px",
                    "em",
                    "cm",
                    "dpi"
                ],
                "correct" => 1,
                "explication" => "L'unité `em` est relative à la taille de la police parent, ce qui la rend idéale pour les designs responsives et flexibles."
            ],
            [
                "question" => "Quel algorithme est recommandé pour chiffrer les mots de passe ?",
                "answers" => [
                    "SHA1",
                    "bcrypt",
                    "MD5",
                    "AES"
                ],
                "correct" => 1,
                "explication" => "bcrypt est un algorithme de hash robuste conçu pour chiffrer les mots de passe et résister aux attaques par force brute."
            ],
            [
                "question" => "Quel type d'attaque est prévenu par la validation des entrées utilisateur ?",
                "answers" => [
                    "XSS et SQL Injection",
                    "Man-In-The-Middle",
                    "DDoS",
                    "Phishing"
                ],
                "correct" => 0,
                "explication" => "La validation des entrées utilisateur permet d'éviter les attaques XSS (Cross-Site Scripting) et SQL Injection en filtrant les données malveillantes."
            ],
            [
                "question" => "Quel est l'objectif de TDD (Test-Driven Development) ?",
                "answers" => [
                    "Écrire du code avant d'exécuter les tests",
                    "Écrire les tests avant d'implémenter les fonctionnalités",
                    "Exécuter des tests après le déploiement",
                    "Tester uniquement les fonctions critiques"
                ],
                "correct" => 1,
                "explication" => "TDD est une approche où les tests sont écrits avant le code, garantissant que chaque fonctionnalité réponde à ses exigences."
            ],
            [
                "question" => "Dans le cycle TDD, que signifie l'étape Green ?",
                "answers" => [
                    "Améliorer le code existant",
                    "Écrire un test qui échoue",
                    "Faire passer le test avec le minimum de code nécessaire",
                    "Écrire les spécifications"
                ],
                "correct" => 2,
                "explication" => "L'étape Green dans TDD consiste à écrire juste assez de code pour que le test passe avec succès, garantissant une implémentation minimale."
            ],
            [
                "question" => "Quel outil est utilisé pour configurer une intégration continue (CI) ?",
                "answers" => [
                    "GitHub Actions",
                    "Cucumber",
                    "Swagger",
                    "Webpack"
                ],
                "correct" => 0,
                "explication" => "GitHub Actions permet d'automatiser les workflows d'intégration continue (CI) directement depuis un dépôt GitHub."
            ],
            [
                "question" => "Quel outil permet de compresser et optimiser les ressources front-end ?",
                "answers" => [
                    "Webpack",
                    "Postman",
                    "Docker",
                    "Jenkins"
                ],
                "correct" => 0,
                "explication" => "Webpack est un bundler qui permet de compresser, minifier et optimiser les fichiers CSS, JavaScript et autres ressources front-end."
            ],
            // Principes fondamentaux
            [
                "question" => "Pourquoi le principe DRY est-il important ?",
                "answers" => [
                    "Il réduit la quantité de code dupliqué",
                    "Il facilite l'ajout de nouvelles fonctionnalités",
                    "Il empêche les attaques XSS",
                    "Il optimise les performances de l'application"
                ],
                "correct" => 0,
                "explication" => "Le principe DRY (Don't Repeat Yourself) réduit la duplication du code, rendant le projet plus facile à maintenir et à étendre."
            ],
            [
                "question" => "Que signifie 'Don't Repeat Yourself' ?",
                "answers" => [
                    "Ne pas répéter les données",
                    "Ne pas réutiliser les ressources inutiles",
                    "Éviter les redondances en centralisant les fonctionnalités",
                    "Créer du code modulaire et extensible"
                ],
                "correct" => 2,
                "explication" => "Le principe DRY encourage la centralisation des fonctionnalités pour éviter la redondance et améliorer la maintenance."
            ],
            [
                "question" => "Dans le principe Liskov Substitution (L dans SOLID), que doit respecter une sous-classe ?",
                "answers" => [
                    "Les dépendances externes",
                    "La possibilité de remplacer la classe parente sans problème",
                    "Les propriétés privées de la classe parente",
                    "Le découplage total des modules"
                ],
                "correct" => 1,
                "explication" => "Le principe Liskov Substitution exige qu'une sous-classe puisse remplacer sa classe parente sans altérer le comportement attendu."
            ],
            [
                "question" => "Quel est un avantage principal du modèle MVC ?",
                "answers" => [
                    "Une meilleure séparation des responsabilités",
                    "Une réduction des coûts de maintenance",
                    "Un accès rapide aux bases de données",
                    "Une sécurité accrue des mots de passe"
                ],
                "correct" => 0,
                "explication" => "Le modèle MVC sépare les responsabilités entre Model, View et Controller, rendant le code plus modulaire et facile à maintenir."
            ],
            [
                "question" => "Que signifie une documentation 'KISS' ?",
                "answers" => [
                    "Utiliser uniquement des diagrammes UML",
                    "Créer une documentation concise et simple",
                    "Éviter d'ajouter des commentaires dans le code",
                    "Partager uniquement des manuels PDF longs"
                ],
                "correct" => 1,
                "explication" => "Une documentation 'KISS' (Keep It Simple, Stupid) doit rester concise et compréhensible, évitant les complexités inutiles."
            ],
            [
                "question" => "Quel est l'objectif principal d'un commentaire dans le code ?",
                "answers" => [
                    "Expliquer les intentions derrière le code",
                    "Améliorer les performances du code",
                    "Réduire la quantité de code",
                    "Prévenir les erreurs de syntaxe"
                ],
                "correct" => 0,
                "explication" => "Les commentaires dans le code doivent expliquer l'intention ou la logique, facilitant la compréhension pour les développeurs."
            ],
            [
                "question" => "Quelle branche Git est utilisée pour développer des fonctionnalités spécifiques ?",
                "answers" => [
                    "feature/",
                    "develop/",
                    "main/",
                    "hotfix/"
                ],
                "correct" => 0,
                "explication" => "Les branches feature/ sont dédiées au développement de nouvelles fonctionnalités sans affecter la branche principale."
            ],
            [
                "question" => "Quelle méthode Agile utilise des tableaux Kanban pour la gestion visuelle des tâches ?",
                "answers" => [
                    "Scrum",
                    "TDD",
                    "Kanban",
                    "CI/CD"
                ],
                "correct" => 2,
                "explication" => "Kanban est une méthode Agile qui s'appuie sur des tableaux visuels pour gérer les flux de travail et les tâches."
            ],
            [
                "question" => "Quelle pratique est recommandée pour éviter les attaques SQL Injection ?",
                "answers" => [
                    "Utiliser des requêtes préparées avec des paramètres",
                    "Chiffrer les mots de passe",
                    "Activer le lazy loading",
                    "Compresser les fichiers CSS et JavaScript"
                ],
                "correct" => 0,
                "explication" => "Les requêtes préparées avec des paramètres empêchent les utilisateurs malveillants d'injecter des commandes SQL dans les champs d'entrée."
            ],
            [
                "question" => "Quelle unité relative est souvent utilisée pour la taille des polices en responsive design ?",
                "answers" => [
                    "px",
                    "em",
                    "cm",
                    "dpi"
                ],
                "correct" => 1,
                "explication" => "L'unité `em` est relative à la taille de la police parent, ce qui permet une meilleure adaptabilité dans les designs responsives."
            ],
            [
                "question" => "Quel outil permet d'écrire des scénarios pour BDD (Behavior-Driven Development) ?",
                "answers" => [
                    "Swagger",
                    "Cucumber",
                    "Postman",
                    "Jenkins"
                ],
                "correct" => 1,
                "explication" => "Cucumber est un outil pour écrire des scénarios compréhensibles par les non-développeurs dans une approche BDD."
            ],
            [
                "question" => "Dans le cycle TDD, que signifie l'étape Refactor ?",
                "answers" => [
                    "Écrire un test qui échoue",
                    "Écrire le minimum de code pour que le test réussisse",
                    "Améliorer le code tout en s'assurant que les tests passent",
                    "Exécuter les tests finaux"
                ],
                "correct" => 2,
                "explication" => "L'étape Refactor dans TDD consiste à nettoyer et optimiser le code sans changer son comportement, tout en maintenant les tests valides."
            ]
        ];
    }
public function getQuestionQCMHTML() 
{
    return [
        [
            "question" => "Quel est l'élément HTML pour définir un document conforme aux standards HTML5 ?",
            "answers" => [
                "&lt;!DOCTYPE HTML5&gt;",
                "&lt;!DOCTYPE html&gt;",
                "&lt;!HTML&gt;",
                "&lt;!DOCTYPE&gt;"
            ],
            "correct" => 1,
            "explication" => "La déclaration &lt;!DOCTYPE html&gt; est utilisée pour indiquer que le document est conforme aux standards HTML5."
        ],
        [
            "question" => "Quelle balise HTML est utilisée pour créer un lien hypertexte ?",
            "answers" => [
                "&lt;link&gt;",
                "&lt;a&gt;",
                "&lt;url&gt;",
                "&lt;href&gt;"
            ],
            "correct" => 1,
            "explication" => "La balise &lt;a&gt; (anchor) est utilisée pour créer un lien hypertexte vers une autre page ou ressource."
        ],
        [
            "question" => "Quelle balise permet d'insérer une image ?",
            "answers" => [
                "&lt;img&gt;",
                "&lt;image&gt;",
                "&lt;pic&gt;",
                "&lt;src&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;img&gt; est utilisée pour insérer des images dans une page HTML."
        ],
        [
            "question" => "Comment insérer un commentaire en HTML ?",
            "answers" => [
                "&lt;!-- Ceci est un commentaire --&gt;",
                "// Ceci est un commentaire",
                "/* Ceci est un commentaire */",
                "# Ceci est un commentaire"
            ],
            "correct" => 0,
            "explication" => "Les commentaires en HTML commencent par &lt;!-- et se terminent par --&gt;."
        ],
        [
            "question" => "Quelle balise HTML est utilisée pour définir un paragraphe ?",
            "answers" => [
                "&lt;paragraph&gt;",
                "&lt;p&gt;",
                "&lt;pg&gt;",
                "&lt;pr&gt;"
            ],
            "correct" => 1,
            "explication" => "La balise &lt;p&gt; est utilisée pour définir un paragraphe dans une page HTML."
        ],
        [
            "question" => "Quelle balise est utilisée pour un titre principal dans HTML ?",
            "answers" => [
                "&lt;title&gt;",
                "&lt;h1&gt;",
                "&lt;head&gt;",
                "&lt;header&gt;"
            ],
            "correct" => 1,
            "explication" => "La balise &lt;h1&gt; est utilisée pour les titres principaux dans un document HTML."
        ],
        [
            "question" => "Quelle balise HTML permet de créer une liste à puces ?",
            "answers" => [
                "&lt;ul&gt;",
                "&lt;ol&gt;",
                "&lt;list&gt;",
                "&lt;bullet&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;ul&gt; (unordered list) est utilisée pour créer une liste à puces."
        ],
        [
            "question" => "Quelle balise HTML permet de définir une cellule dans un tableau ?",
            "answers" => [
                "&lt;td&gt;",
                "&lt;tr&gt;",
                "&lt;table&gt;",
                "&lt;cell&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;td&gt; est utilisée pour définir une cellule dans un tableau HTML."
        ],
        [
            "question" => "Quel attribut est utilisé pour définir une URL dans une balise &lt;a&gt; ?",
            "answers" => [
                "href",
                "src",
                "link",
                "url"
            ],
            "correct" => 0,
            "explication" => "L'attribut 'href' spécifie l'URL vers laquelle le lien pointe."
        ],
        [
            "question" => "Quelle balise HTML est utilisée pour inclure une vidéo ?",
            "answers" => [
                "&lt;video&gt;",
                "&lt;media&gt;",
                "&lt;movie&gt;",
                "&lt;vid&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;video&gt; est utilisée pour intégrer des vidéos dans une page HTML."
        ],
        [
            "question" => "Quel attribut HTML est utilisé pour spécifier une image alternative en cas de problème de chargement ?",
            "answers" => [
                "alt",
                "src",
                "title",
                "fallback"
            ],
            "correct" => 0,
            "explication" => "L'attribut 'alt' fournit une description alternative de l'image si elle ne peut pas être chargée."
        ],
        [
            "question" => "Quelle balise HTML est utilisée pour représenter une barre de progression ?",
            "answers" => [
                "&lt;progress&gt;",
                "&lt;bar&gt;",
                "&lt;meter&gt;",
                "&lt;status&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;progress&gt; représente une barre de progression pour une tâche en cours."
        ],
        [
            "question" => "Quelle balise est utilisée pour définir une liste ordonnée ?",
            "answers" => [
                "&lt;ol&gt;",
                "&lt;ul&gt;",
                "&lt;li&gt;",
                "&lt;dl&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;ol&gt; (ordered list) est utilisée pour créer une liste ordonnée."
        ],
        [
            "question" => "Comment insérer un saut de ligne en HTML ?",
            "answers" => [
                "&lt;br&gt;",
                "&lt;break&gt;",
                "&lt;lb&gt;",
                "&lt;line&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;br&gt; est utilisée pour insérer un saut de ligne dans une page HTML."
        ],
        [
            "question" => "Quelle balise HTML permet d'insérer un fichier audio ?",
            "answers" => [
                "&lt;audio&gt;",
                "&lt;sound&gt;",
                "&lt;music&gt;",
                "&lt;media&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;audio&gt; est utilisée pour intégrer des fichiers audio dans une page HTML."
        ],
        [
            "question" => "Quelle balise HTML est utilisée pour insérer une ligne horizontale ?",
            "answers" => [
                "&lt;hr&gt;",
                "&lt;line&gt;",
                "&lt;br&gt;",
                "&lt;tr&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;hr&gt; est utilisée pour insérer une ligne horizontale dans une page HTML."
        ],
        [
            "question" => "Quel attribut est utilisé pour ouvrir un lien dans une nouvelle fenêtre ou un nouvel onglet ?",
            "answers" => [
                "target='_blank'",
                "rel='_new'",
                "window='_new'",
                "open='_blank'"
            ],
            "correct" => 0,
            "explication" => "L'attribut 'target='_blank'' ouvre un lien dans une nouvelle fenêtre ou un nouvel onglet."
        ],
        [
            "question" => "Quelle balise HTML est utilisée pour définir un contenu interactif ou multimédia ?",
            "answers" => [
                "&lt;embed&gt;",
                "&lt;iframe&gt;",
                "&lt;object&gt;",
                "Toutes les réponses sont correctes"
            ],
            "correct" => 3,
            "explication" => "Les balises &lt;embed&gt;, &lt;iframe&gt;, et &lt;object&gt; peuvent toutes intégrer du contenu interactif ou multimédia."
        ],
        [
            "question" => "Quelle balise est utilisée pour représenter une image vectorielle en HTML ?",
            "answers" => [
                "&lt;svg&gt;",
                "&lt;canvas&gt;",
                "&lt;vector&gt;",
                "&lt;img&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;svg&gt; est utilisée pour dessiner des graphiques vectoriels évolutifs en HTML."
        ],
        [
            "question" => "Quelle balise HTML est utilisée pour regrouper le contenu d'une page ?",
            "answers" => [
                "&lt;section&gt;",
                "&lt;div&gt;",
                "&lt;article&gt;",
                "Toutes les réponses sont correctes"
            ],
            "correct" => 3,
            "explication" => "Les balises &lt;section&gt;, &lt;div&gt;, et &lt;article&gt; sont utilisées pour regrouper du contenu, mais ont des rôles différents selon le contexte."
        ],
        [
            "question" => "Comment définir une image comme arrière-plan d'une page en HTML ?",
            "answers" => [
                "Utiliser l'attribut style",
                "Utiliser la balise &lt;background&gt;",
                "Utiliser &lt;img&gt; en dehors de la balise &lt;body&gt;",
                "Impossible en HTML"
            ],
            "correct" => 0,
            "explication" => "L'attribut 'style' avec 'background-image' permet de définir une image en arrière-plan en HTML."
        ],
        [
            "question" => "Quelle balise HTML est utilisée pour définir un champ de formulaire ?",
            "answers" => [
                "&lt;form&gt;",
                "&lt;input&gt;",
                "&lt;field&gt;",
                "&lt;textarea&gt;"
            ],
            "correct" => 1,
            "explication" => "La balise &lt;input&gt; est utilisée pour créer différents types de champs de formulaire."
        ],
        [
            "question" => "Quelle balise HTML est utilisée pour regrouper des options dans une liste déroulante ?",
            "answers" => [
                "&lt;optgroup&gt;",
                "&lt;select&gt;",
                "&lt;option&gt;",
                "&lt;list&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;optgroup&gt; est utilisée pour regrouper des options dans une liste déroulante (&lt;select&gt;)."
        ],
        [
            "question" => "Quelle balise HTML est utilisée pour définir des métadonnées pour un document HTML ?",
            "answers" => [
                "&lt;meta&gt;",
                "&lt;head&gt;",
                "&lt;data&gt;",
                "&lt;info&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;meta&gt; est utilisée pour définir des métadonnées telles que la description et les mots-clés d'une page HTML."
        ],
        [
            "question" => "Comment ajouter un favicon à un site HTML ?",
            "answers" => [
                "&lt;link rel='shortcut icon' href='favicon.ico'&gt;",
                "&lt;icon src='favicon.ico'&gt;",
                "&lt;meta icon='favicon.ico'&gt;",
                "&lt;favicon src='favicon.ico'&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;link&gt; avec 'rel=shortcut icon' est utilisée pour lier un favicon à une page."
        ],
        [
            "question" => "Quelle est la balise utilisée pour définir une zone cliquable sur une image ?",
            "answers" => [
                "&lt;area&gt;",
                "&lt;map&gt;",
                "&lt;zone&gt;",
                "&lt;region&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;area&gt; est utilisée pour définir une zone cliquable dans une carte d'image (&lt;map&gt;)."
        ],
        [
            "question" => "Quelle balise HTML est utilisée pour représenter une durée ou une date ?",
            "answers" => [
                "&lt;time&gt;",
                "&lt;date&gt;",
                "&lt;period&gt;",
                "&lt;duration&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;time&gt; est utilisée pour représenter une durée ou une date en HTML."
        ],
        [
            "question" => "Quelle balise HTML est utilisée pour créer un menu contextuel ?",
            "answers" => [
                "&lt;menu&gt;",
                "&lt;context&gt;",
                "&lt;options&gt;",
                "&lt;menuitem&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;menu&gt; est utilisée pour définir un menu contextuel ou de navigation."
        ],
        [
            "question" => "Quelle est la balise correcte pour définir une sous-section dans un document HTML ?",
            "answers" => [
                "&lt;sub&gt;",
                "&lt;section&gt;",
                "&lt;aside&gt;",
                "&lt;header&gt;"
            ],
            "correct" => 1,
            "explication" => "La balise &lt;section&gt; est utilisée pour définir une sous-section sémantique dans un document HTML."
        ],
        [
            "question" => "Quelle balise HTML est utilisée pour définir une boîte de dialogue modale ?",
            "answers" => [
                "&lt;dialog&gt;",
                "&lt;modal&gt;",
                "&lt;popup&gt;",
                "&lt;window&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;dialog&gt; est utilisée pour créer une boîte de dialogue modale native."
        ],
        [
            "question" => "Comment intégrer un script JavaScript externe en HTML ?",
            "answers" => [
                "&lt;script src='script.js'&gt;",
                "&lt;link src='script.js'&gt;",
                "&lt;js src='script.js'&gt;",
                "&lt;include src='script.js'&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;script&gt; avec l'attribut 'src' est utilisée pour inclure un script JavaScript externe."
        ],
        [
            "question" => "Quelle balise HTML est utilisée pour ajouter une légende à un tableau ?",
            "answers" => [
                "&lt;caption&gt;",
                "&lt;summary&gt;",
                "&lt;title&gt;",
                "&lt;legend&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;caption&gt; est utilisée pour ajouter une légende descriptive à un tableau HTML."
        ],
        [
            "question" => "Quelle balise HTML est utilisée pour inclure des sous-titres dans une vidéo ?",
            "answers" => [
                "&lt;track&gt;",
                "&lt;subtitle&gt;",
                "&lt;caption&gt;",
                "&lt;meta&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;track&gt; est utilisée pour inclure des sous-titres ou des descriptions dans une vidéo HTML."
        ],
        [
            "question" => "Comment définir un texte barré en HTML ?",
            "answers" => [
                "&lt;del&gt;",
                "&lt;s&gt;",
                "&lt;strike&gt;",
                "Toutes les réponses sont correctes"
            ],
            "correct" => 3,
            "explication" => "Les balises &lt;del&gt;, &lt;s&gt;, et &lt;strike&gt; peuvent être utilisées pour barrer un texte, selon le contexte."
        ],
        [
            "question" => "Quel attribut HTML est utilisé pour définir un champ obligatoire dans un formulaire ?",
            "answers" => [
                "required",
                "mandatory",
                "validate",
                "obligatory"
            ],
            "correct" => 0,
            "explication" => "L'attribut 'required' rend un champ de formulaire obligatoire à remplir avant soumission."
        ]
    ];
}
public function getQuestionQCMCSS() 
{
    return [
        [
            "question" => "Quel est le but principal du CSS ?",
            "answers" => [
                "Ajouter du contenu dynamique à une page",
                "Définir le style et la mise en page d'une page web",
                "Créer des animations avancées",
                "Structurer le contenu d'une page web"
            ],
            "correct" => 1,
            "explication" => "Le CSS est utilisé pour définir le style et la mise en page des éléments HTML dans une page web."
        ],
        [
            "question" => "Quelle est la syntaxe correcte pour lier une feuille de style externe à une page HTML ?",
            "answers" => [
                "&lt;link rel='stylesheet' href='style.css'&gt;",
                "&lt;style src='style.css'&gt;",
                "&lt;css src='style.css'&gt;",
                "&lt;stylesheet src='style.css'&gt;"
            ],
            "correct" => 0,
            "explication" => "La balise &lt;link&gt; avec l'attribut 'rel=stylesheet' permet de lier une feuille de style externe à une page HTML."
        ],
        [
            "question" => "Comment sélectionner tous les éléments &lt;p&gt; dans une feuille de style CSS ?",
            "answers" => [
                "#p",
                ".p",
                "p",
                "*p"
            ],
            "correct" => 2,
            "explication" => "Pour sélectionner tous les éléments &lt;p&gt;, on utilise le sélecteur de balise 'p'."
        ],
        [
            "question" => "Quel est le rôle du sélecteur universel (*) en CSS ?",
            "answers" => [
                "Appliquer les styles à tous les éléments",
                "Appliquer les styles aux classes spécifiques",
                "Cibler uniquement les éléments avec un ID",
                "Sélectionner les éléments parents uniquement"
            ],
            "correct" => 0,
            "explication" => "Le sélecteur universel (*) applique les styles à tous les éléments de la page."
        ],
        [
            "question" => "Quelle propriété CSS est utilisée pour changer la couleur du texte ?",
            "answers" => [
                "background-color",
                "color",
                "text-color",
                "font-color"
            ],
            "correct" => 1,
            "explication" => "La propriété 'color' est utilisée pour définir la couleur du texte en CSS."
        ],
        [
            "question" => "Quelle propriété est utilisée pour changer l'arrière-plan d'un élément ?",
            "answers" => [
                "background",
                "background-color",
                "color",
                "border-color"
            ],
            "correct" => 1,
            "explication" => "La propriété 'background-color' est utilisée pour définir la couleur de l'arrière-plan d'un élément."
        ],
        [
            "question" => "Quel mot-clé est utilisé pour appliquer un style à un élément au survol de la souris ?",
            "answers" => [
                ":hover",
                ":focus",
                ":active",
                ":visited"
            ],
            "correct" => 0,
            "explication" => "Le pseudo-classe ':hover' permet d'appliquer un style lorsqu'un élément est survolé par la souris."
        ],
        [
            "question" => "Quelle unité CSS est relative à la taille de la police de l'élément parent ?",
            "answers" => [
                "px",
                "em",
                "rem",
                "%"
            ],
            "correct" => 1,
            "explication" => "L'unité 'em' est relative à la taille de la police de l'élément parent."
        ],
        [
            "question" => "Comment rendre un élément centré horizontalement avec `margin` ?",
            "answers" => [
                "margin: center;",
                "margin: auto;",
                "margin: 0 auto;",
                "margin: 50%;"
            ],
            "correct" => 2,
            "explication" => "La propriété 'margin: 0 auto;' centre un élément horizontalement dans son conteneur."
        ],
        [
            "question" => "Quelle propriété CSS contrôle l'opacité d'un élément ?",
            "answers" => [
                "visibility",
                "opacity",
                "display",
                "filter"
            ],
            "correct" => 1,
            "explication" => "La propriété 'opacity' contrôle la transparence d'un élément en CSS."
        ],
        [
            "question" => "Quel type de positionnement CSS permet à un élément de rester fixe à l'écran lors du défilement ?",
            "answers" => [
                "relative",
                "absolute",
                "fixed",
                "sticky"
            ],
            "correct" => 2,
            "explication" => "La propriété 'fixed' positionne un élément de manière fixe par rapport à la fenêtre du navigateur, même lors du défilement."
        ],
        [
            "question" => "Quelle propriété CSS est utilisée pour appliquer un dégradé linéaire à un élément ?",
            "answers" => [
                "background-gradient",
                "linear-gradient",
                "background-image",
                "gradient"
            ],
            "correct" => 2,
            "explication" => "La propriété 'background-image' avec la fonction 'linear-gradient()' applique un dégradé linéaire."
        ],
        [
            "question" => "Quel mot-clé CSS est utilisé pour hériter les styles d'un élément parent ?",
            "answers" => [
                "inherit",
                "parent",
                "default",
                "copy"
            ],
            "correct" => 0,
            "explication" => "Le mot-clé 'inherit' permet à un élément d'hériter la valeur d'une propriété de son parent."
        ],
        [
            "question" => "Quelle règle CSS est utilisée pour ajouter des styles spécifiques aux écrans de petite taille ?",
            "answers" => [
                "@screen",
                "@viewport",
                "@media",
                "@responsive"
            ],
            "correct" => 2,
            "explication" => "La règle '@media' permet d'appliquer des styles spécifiques en fonction de la taille ou des caractéristiques de l'écran."
        ],
        [
            "question" => "Quelle propriété CSS permet de créer un espace autour des éléments en dehors de leurs bordures ?",
            "answers" => [
                "padding",
                "border",
                "margin",
                "outline"
            ],
            "correct" => 2,
            "explication" => "La propriété 'margin' crée un espace autour des éléments en dehors de leurs bordures."
        ],
        [
            "question" => "Quelle propriété CSS est utilisée pour spécifier l'ordre des éléments dans un conteneur flexbox ?",
            "answers" => [
                "order",
                "flex-order",
                "priority",
                "sequence"
            ],
            "correct" => 0,
            "explication" => "La propriété 'order' définit l'ordre d'affichage des éléments dans un conteneur flexbox."
        ],
        [
            "question" => "Quel mot-clé CSS est utilisé pour empêcher un élément d'apparaître ?",
            "answers" => [
                "visibility: hidden;",
                "display: none;",
                "opacity: 0;",
                "Toutes les réponses sont correctes"
            ],
            "correct" => 3,
            "explication" => "Les styles 'visibility: hidden;', 'display: none;', et 'opacity: 0;' peuvent empêcher un élément d'être visible ou affiché."
        ],
        [
            "question" => "Quelle propriété CSS est utilisée pour appliquer des coins arrondis à un élément ?",
            "answers" => [
                "border",
                "border-radius",
                "corner-radius",
                "round-border"
            ],
            "correct" => 1,
            "explication" => "La propriété 'border-radius' est utilisée pour arrondir les coins des éléments."
        ],
        [
            "question" => "Quelle propriété CSS est utilisée pour définir un espace intérieur entre le contenu et les bordures d'un élément ?",
            "answers" => [
                "margin",
                "padding",
                "border",
                "outline"
            ],
            "correct" => 1,
            "explication" => "La propriété 'padding' définit l'espace intérieur entre le contenu et les bordures d'un élément."
        ],
        [
            "question" => "Quelle propriété CSS est utilisée pour afficher un élément en tant que grille ?",
            "answers" => [
                "grid",
                "display: grid;",
                "layout: grid;",
                "grid-layout"
            ],
            "correct" => 1,
            "explication" => "La déclaration 'display: grid;' permet d'afficher un élément en tant que grille."
        ],
        [
            "question" => "Quelle propriété CSS permet de définir l'espacement des colonnes dans une grille ?",
            "answers" => [
                "grid-gap",
                "column-gap",
                "grid-spacing",
                "gap"
            ],
            "correct" => 3,
            "explication" => "La propriété 'gap' contrôle l'espacement entre les colonnes et les lignes dans une grille CSS."
        ],
        [
            "question" => "Comment définir une couleur semi-transparente en CSS ?",
            "answers" => [
                "rgba()",
                "hsla()",
                "opacity",
                "rgb()"
            ],
            "correct" => 0,
            "explication" => "La fonction `rgba()` permet de définir une couleur avec une opacité (alpha) en CSS."
        ],
        [
            "question" => "Quelle propriété CSS est utilisée pour ajouter une ombre portée à un élément ?",
            "answers" => [
                "box-shadow",
                "text-shadow",
                "shadow",
                "filter-shadow"
            ],
            "correct" => 0,
            "explication" => "La propriété 'box-shadow' ajoute une ombre portée à un élément."
        ],
        [
            "question" => "Quelle propriété CSS est utilisée pour ajouter une ombre au texte ?",
            "answers" => [
                "text-shadow",
                "font-shadow",
                "shadow",
                "box-shadow"
            ],
            "correct" => 0,
            "explication" => "La propriété 'text-shadow' est utilisée pour ajouter une ombre au texte."
        ],
        [
            "question" => "Quelle propriété CSS est utilisée pour définir la taille de police d'un texte ?",
            "answers" => [
                "font",
                "font-size",
                "text-size",
                "size"
            ],
            "correct" => 1,
            "explication" => "La propriété 'font-size' contrôle la taille de la police d'un texte."
        ],
        [
            "question" => "Comment définir plusieurs images d'arrière-plan pour un élément ?",
            "answers" => [
                "background: url(img1.png), url(img2.png);",
                "multiple-background: url(img1.png) url(img2.png);",
                "backgrounds: url(img1.png), url(img2.png);",
                "Impossible en CSS"
            ],
            "correct" => 0,
            "explication" => "La propriété 'background' accepte plusieurs valeurs séparées par des virgules pour définir plusieurs images d'arrière-plan."
        ],
        [
            "question" => "Quelle unité CSS est relative à la largeur de la fenêtre d'affichage ?",
            "answers" => [
                "vw",
                "vh",
                "%",
                "em"
            ],
            "correct" => 0,
            "explication" => "L'unité 'vw' (viewport width) est relative à la largeur de la fenêtre d'affichage."
        ],
        [
            "question" => "Comment empêcher un élément de déborder de son conteneur ?",
            "answers" => [
                "overflow: hidden;",
                "overflow: scroll;",
                "clip: hidden;",
                "display: block;"
            ],
            "correct" => 0,
            "explication" => "La propriété 'overflow: hidden;' masque tout contenu qui dépasse les limites de l'élément conteneur."
        ],
        [
            "question" => "Quelle propriété CSS est utilisée pour changer l'alignement du texte ?",
            "answers" => [
                "text-align",
                "text-justify",
                "align",
                "text-position"
            ],
            "correct" => 0,
            "explication" => "La propriété 'text-align' permet de définir l'alignement du texte (gauche, droite, centré ou justifié)."
        ],
        [
            "question" => "Quelle propriété CSS est utilisée pour définir l'espacement entre les caractères ?",
            "answers" => [
                "letter-spacing",
                "word-spacing",
                "text-spacing",
                "character-spacing"
            ],
            "correct" => 0,
            "explication" => "La propriété 'letter-spacing' ajuste l'espacement entre les caractères d'un texte."
        ],
        [
            "question" => "Quelle propriété CSS permet de rendre un élément invisible mais toujours présent dans le flux du document ?",
            "answers" => [
                "visibility: hidden;",
                "display: none;",
                "opacity: 0;",
                "z-index: -1;"
            ],
            "correct" => 0,
            "explication" => "La propriété 'visibility: hidden;' rend un élément invisible tout en conservant son espace dans le document."
        ],
        [
            "question" => "Quelle propriété CSS est utilisée pour créer un masque ou une découpe sur un élément ?",
            "answers" => [
                "mask",
                "clip-path",
                "crop",
                "overlay"
            ],
            "correct" => 1,
            "explication" => "La propriété 'clip-path' permet de créer des formes personnalisées pour masquer des parties d'un élément."
        ],
        [
            "question" => "Quelle propriété CSS est utilisée pour définir le comportement d'un élément en cas de débordement dans un conteneur flexible ?",
            "answers" => [
                "flex-grow",
                "flex-shrink",
                "overflow",
                "flex-basis"
            ],
            "correct" => 1,
            "explication" => "La propriété 'flex-shrink' contrôle la réduction de la taille d'un élément flexible lorsqu'il dépasse la largeur du conteneur."
        ],
        [
            "question" => "Comment aligner des éléments en flexbox verticalement au centre ?",
            "answers" => [
                "align-items: center;",
                "justify-content: center;",
                "align-content: center;",
                "flex-direction: column;"
            ],
            "correct" => 0,
            "explication" => "La propriété 'align-items: center;' aligne les éléments au centre sur l'axe transversal."
        ],
        [
            "question" => "Quelle propriété CSS est utilisée pour spécifier un élément sticky (collant) ?",
            "answers" => [
                "position: sticky;",
                "display: sticky;",
                "float: sticky;",
                "sticky: relative;"
            ],
            "correct" => 0,
            "explication" => "La propriété 'position: sticky;' permet à un élément de rester positionné entre relative et fixed selon le défilement."
        ],
        [
            "question" => "Quelle est la différence entre `absolute` et `fixed` en CSS ?",
            "answers" => [
                "absolute est basé sur le parent, fixed sur la fenêtre",
                "fixed est basé sur le parent, absolute sur la fenêtre",
                "Les deux sont identiques mais avec des compatibilités différentes",
                "fixed n'existe pas en CSS"
            ],
            "correct" => 0,
            "explication" => "'absolute' positionne un élément par rapport à son parent positionné, tandis que 'fixed' le fixe par rapport à la fenêtre."
        ],
        [
            "question" => "Quelle fonction CSS est utilisée pour transformer un élément en 3D ?",
            "answers" => [
                "transform",
                "translate3d",
                "perspective",
                "rotateZ"
            ],
            "correct" => 0,
            "explication" => "La propriété 'transform' permet d'appliquer des transformations 3D comme translate3d, rotateZ ou scale."
        ],
        [
            "question" => "Quel mot-clé CSS est utilisé pour appliquer un effet de flou sur un élément ?",
            "answers" => [
                "filter: blur();",
                "box-shadow",
                "text-shadow",
                "opacity"
            ],
            "correct" => 0,
            "explication" => "La propriété 'filter: blur(xpx);' est utilisée pour appliquer un effet de flou à un élément."
        ],
        [
            "question" => "Quelle propriété permet de définir des transitions d'animation en CSS ?",
            "answers" => [
                "transition",
                "animation",
                "transform",
                "timing-function"
            ],
            "correct" => 0,
            "explication" => "La propriété 'transition' permet de définir des effets de transition lisses entre deux états d'un élément."
        ],
        [
            "question" => "Quelle propriété est utilisée pour ajuster l'ordre de superposition des éléments ?",
            "answers" => [
                "z-index",
                "layer",
                "order",
                "stack-index"
            ],
            "correct" => 0,
            "explication" => "La propriété 'z-index' contrôle l'ordre d'empilement des éléments sur l'axe Z."
        ],
        [
            "question" => "Comment spécifier un arrière-plan fixe lors du défilement ?",
            "answers" => [
                "background-attachment: fixed;",
                "background: fixed;",
                "background-scroll: none;",
                "attachment: fixed;"
            ],
            "correct" => 0,
            "explication" => "La propriété 'background-attachment: fixed;' permet de fixer l'arrière-plan même lors du défilement de la page."
        ],
        [
            "question" => "Quelle propriété est utilisée pour aligner le contenu dans une grille CSS ?",
            "answers" => [
                "align-content",
                "justify-items",
                "align-items",
                "grid-align"
            ],
            "correct" => 0,
            "explication" => "La propriété 'align-content' ajuste l'espacement des lignes dans une grille CSS."
        ],
        [
            "question" => "Comment définir une animation qui répète un cycle sans fin ?",
            "answers" => [
                "animation-iteration-count: infinite;",
                "animation-repeat: infinite;",
                "animation-count: infinite;",
                "animation: infinite;"
            ],
            "correct" => 0,
            "explication" => "L'animation avec 'animation-iteration-count: infinite;' continue indéfiniment."
        ],
        [
            "question" => "Quel mot-clé permet de définir un arrière-plan transparent ?",
            "answers" => [
                "transparent",
                "rgba(0,0,0,0)",
                "opacity: 0;",
                "Toutes les réponses"
            ],
            "correct" => 3,
            "explication" => "'transparent', 'rgba(0,0,0,0)', et 'opacity: 0;' peuvent être utilisés pour des arrière-plans transparents."
        ],
        [
            "question" => "Quelle propriété CSS est utilisée pour définir la vitesse des animations ?",
            "answers" => [
                "animation-duration",
                "animation-speed",
                "transition-speed",
                "timing-function"
            ],
            "correct" => 0,
            "explication" => "La propriété 'animation-duration' définit la durée d'exécution d'une animation CSS."
        ],
        [
            "question" => "Quelle propriété CSS définit une interpolation des animations ?",
            "answers" => [
                "animation-timing-function",
                "animation-curve",
                "ease-function",
                "interpolation"
            ],
            "correct" => 0,
            "explication" => "'animation-timing-function' contrôle la courbe de vitesse d'une animation."
        ],
        [
            "question" => "Comment désactiver la sélection de texte en CSS ?",
            "answers" => [
                "user-select: none;",
                "text-select: false;",
                "disable-select: true;",
                "selection: off;"
            ],
            "correct" => 0,
            "explication" => "La propriété 'user-select: none;' empêche l'utilisateur de sélectionner du texte."
        ],
        [
            "question" => "Quelle propriété CSS est utilisée pour découper les parties d'un élément débordant ?",
            "answers" => [
                "clip",
                "clip-path",
                "overflow",
                "cut"
            ],
            "correct" => 1,
            "explication" => "La propriété 'clip-path' masque ou découpe les parties d'un élément hors de la zone définie."
        ],
        [
            "question" => "Quelle règle CSS permet de modifier la priorité d'un style ?",
            "answers" => [
                "!important",
                "priority",
                "override",
                "force"
            ],
            "correct" => 0,
            "explication" => "Le mot-clé '!important' force la priorité d'un style CSS sur les autres règles."
        ],
        [
            "question" => "Comment aligner des colonnes dans une grille CSS ?",
            "answers" => [
                "justify-items: center;",
                "align-columns: center;",
                "grid-align: center;",
                "justify-content: center;"
            ],
            "correct" => 3,
            "explication" => "'justify-content: center;' aligne les colonnes horizontalement dans une grille CSS."
        ],
        [
            "question" => "Quelle fonction CSS est utilisée pour combiner plusieurs transformations ?",
            "answers" => [
                "transform",
                "matrix",
                "combine-transform",
                "multi-transform"
            ],
            "correct" => 1,
            "explication" => "La fonction 'matrix()' combine plusieurs transformations comme la translation, la rotation et le scaling en une seule opération."
        ]
    ];
}

public function getQuestionQCMAjax() 
{
    return [
        [
            "question" => "Que signifie AJAX ?",
            "answers" => [
                "Asynchronous JavaScript and XML",
                "Advanced JavaScript and XML",
                "Asynchronous JSON and XML",
                "Asynchronous JavaScript and XHTML"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le principal avantage d'AJAX ?",
            "answers" => [
                "Il rend les pages plus lentes",
                "Il permet de recharger une page entière à chaque requête",
                "Il permet de mettre à jour une partie de la page sans rechargement",
                "Il remplace HTML"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quel objet est utilisé pour effectuer des requêtes AJAX en JavaScript ?",
            "answers" => [
                "XMLHttpRequest",
                "AJAXRequest",
                "HTTPObject",
                "AJAXCall"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel événement est déclenché lorsque la requête AJAX est terminée ?",
            "answers" => [
                "onload",
                "onreadystatechange",
                "onready",
                "onfinish"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle méthode est utilisée pour envoyer une requête AJAX ?",
            "answers" => [
                "send()",
                "request()",
                "call()",
                "fetch()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode est utilisée pour définir le type de requête AJAX ?",
            "answers" => [
                "open()",
                "setRequestHeader()",
                "define()",
                "setType()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle propriété permet de vérifier l'état de la requête AJAX ?",
            "answers" => [
                "responseType",
                "readyState",
                "status",
                "state"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle propriété permet de vérifier si une requête AJAX a réussi ?",
            "answers" => [
                "response",
                "readyState",
                "status",
                "responseText"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quelle est la valeur de `readyState` lorsque la requête est terminée ?",
            "answers" => [
                "1",
                "2",
                "3",
                "4"
            ],
            "correct" => 3
        ],
        [
            "question" => "Quel format de données est souvent utilisé avec AJAX au lieu de XML ?",
            "answers" => [
                "HTML",
                "JSON",
                "CSV",
                "Plain Text"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle méthode est utilisée pour transformer une chaîne JSON en objet JavaScript ?",
            "answers" => [
                "JSON.parse()",
                "JSON.stringify()",
                "JSON.convert()",
                "JSON.toObject()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode est utilisée pour convertir un objet JavaScript en chaîne JSON ?",
            "answers" => [
                "JSON.parse()",
                "JSON.stringify()",
                "JSON.encode()",
                "JSON.toJSON()"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle méthode est utilisée pour définir des en-têtes dans une requête AJAX ?",
            "answers" => [
                "setRequestHeader()",
                "defineHeaders()",
                "setHeaders()",
                "addHeader()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le rôle de `responseText` dans une requête AJAX ?",
            "answers" => [
                "Il contient le statut de la requête",
                "Il contient la réponse au format texte",
                "Il définit le type de réponse attendu",
                "Il vérifie si la requête est complète"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est l'alternative moderne à `XMLHttpRequest` pour les requêtes AJAX ?",
            "answers" => [
                "AJAXRequest",
                "Fetch API",
                "Ajax.fetch()",
                "AsyncRequest"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle méthode est utilisée pour intercepter les erreurs dans Fetch API ?",
            "answers" => [
                "catch()",
                "error()",
                "intercept()",
                "onerror()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment envoyer des données dans une requête POST avec AJAX ?",
            "answers" => [
                "send(data)",
                "post(data)",
                "call(data)",
                "open(data)"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel statut HTTP indique que la requête a réussi ?",
            "answers" => [
                "200",
                "404",
                "500",
                "302"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode permet d'annuler une requête AJAX en cours ?",
            "answers" => [
                "abort()",
                "cancel()",
                "stop()",
                "terminate()"
            ],
            "correct" => 0
        ],
        [
            "question" => "AJAX peut-il être utilisé pour des requêtes sur un domaine différent sans configuration ?",
            "answers" => [
                "Oui",
                "Non",
                "Uniquement en POST",
                "Uniquement avec des clés API"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle méthode permet de suivre la progression d'une requête AJAX ?",
            "answers" => [
                "onreadystatechange",
                "onload",
                "onprogress",
                "onupdate"
            ],
            "correct" => 2
        ],
        [
            "question" => "Comment envoyer des en-têtes personnalisés dans une requête AJAX ?",
            "answers" => [
                "addHeader()",
                "setRequestHeader()",
                "defineHeader()",
                "customHeader()"
            ],
            "correct" => 1
        ],
        [
            "question" => "Que retourne `responseType` lorsqu'il est défini sur `blob` ?",
            "answers" => [
                "Un objet Blob contenant les données de la réponse",
                "Un fichier JSON",
                "Une chaîne de caractères",
                "Une réponse XML"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le rôle de la méthode `overrideMimeType()` en AJAX ?",
            "answers" => [
                "Modifier le type MIME attendu",
                "Changer l'en-tête Content-Type",
                "Annuler un type MIME spécifique",
                "Changer la méthode de requête"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie le code d'état HTTP 204 dans une requête AJAX ?",
            "answers" => [
                "La requête a réussi mais aucune réponse n'est retournée",
                "Une redirection temporaire",
                "Une erreur côté serveur",
                "Une ressource introuvable"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment vérifier si un navigateur supporte les requêtes CORS en AJAX ?",
            "answers" => [
                "Tester la méthode `setRequestHeader`",
                "Vérifier la présence de l'objet `XMLHttpRequest`",
                "Vérifier la propriété `withCredentials` dans `XMLHttpRequest`",
                "Utiliser Fetch API"
            ],
            "correct" => 2
        ],
        [
            "question" => "Comment envoyer des données au format JSON dans une requête POST en AJAX ?",
            "answers" => [
                "send(JSON.stringify(data))",
                "send(data.toJSON())",
                "send(data)",
                "post(JSON.stringify(data))"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle propriété permet d'envoyer des cookies avec des requêtes AJAX CORS ?",
            "answers" => [
                "credentials",
                "withCredentials",
                "cookies",
                "allowCookies"
            ],
            "correct" => 1
        ],
        [
            "question" => "Que fait la méthode `open()` dans une requête AJAX ?",
            "answers" => [
                "Envoie les données au serveur",
                "Initialise une requête HTTP",
                "Termine une requête",
                "Reçoit les données du serveur"
            ],
            "correct" => 1
        ],
        [
            "question" => "Comment traiter une réponse binaire reçue dans une requête AJAX ?",
            "answers" => [
                "Définir `responseType` sur `arraybuffer`",
                "Définir `responseType` sur `blob`",
                "Définir `responseType` sur `binary`",
                "Définir `responseType` sur `buffer`"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode Fetch permet de gérer les réponses JSON directement ?",
            "answers" => [
                "fetch.json()",
                "response.json()",
                "JSON.parse(fetch)",
                "fetch.toJSON()"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est l'avantage principal de Fetch API par rapport à XMLHttpRequest ?",
            "answers" => [
                "Fetch API est plus rapide",
                "Fetch API utilise des Promises",
                "Fetch API est plus sécurisé",
                "Fetch API est compatible avec tous les navigateurs"
            ],
            "correct" => 1
        ],
        [
            "question" => "Comment effectuer une requête Fetch avec une authentification de base ?",
            "answers" => [
                "Inclure les informations dans `headers` avec `Authorization`",
                "Ajouter une option `auth` dans Fetch",
                "Définir `credentials` sur `auth-basic`",
                "Utiliser `withAuth` dans les options"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode permet de gérer plusieurs requêtes Fetch simultanément ?",
            "answers" => [
                "Promise.all()",
                "Promise.fetch()",
                "fetch.all()",
                "multiFetch()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que retourne Fetch API en cas d'erreur HTTP (par exemple 404) ?",
            "answers" => [
                "Une exception",
                "Un objet Response avec `ok` à false",
                "Une valeur null",
                "Une promesse rejetée"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle méthode Fetch permet d'annuler une requête ?",
            "answers" => [
                "AbortController",
                "CancelFetch",
                "Fetch.abort()",
                "AbortRequest"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel en-tête HTTP est requis pour autoriser les requêtes CORS ?",
            "answers" => [
                "Access-Control-Allow-Origin",
                "Content-Type",
                "Authorization",
                "Origin"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode est utilisée pour transmettre des données d'un formulaire avec Fetch ?",
            "answers" => [
                "FormData",
                "JSON.stringify",
                "send()",
                "fetch()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait l'option `mode: 'cors'` dans Fetch API ?",
            "answers" => [
                "Permet d'effectuer des requêtes cross-origin",
                "Bloque les requêtes CORS",
                "Rejette les requêtes non sécurisées",
                "Active les cookies dans les requêtes"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment envoyer des requêtes asynchrones en série avec Fetch ?",
            "answers" => [
                "Utiliser `Promise.all()`",
                "Utiliser `async/await`",
                "Utiliser `fetch.queue()`",
                "Utiliser des callbacks"
            ],
            "correct" => 1
        ],
        [
            "question" => "Que fait l'en-tête HTTP `Access-Control-Allow-Methods` dans une requête CORS ?",
            "answers" => [
                "Permet de spécifier les méthodes HTTP autorisées par le serveur",
                "Définit les domaines autorisés à accéder aux ressources",
                "Indique si les cookies sont autorisés",
                "Spécifie les types de contenu autorisés"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment gérer les erreurs réseau avec Fetch API ?",
            "answers" => [
                "Utiliser le bloc `catch` des Promises",
                "Vérifier la propriété `status` dans `Response`",
                "Vérifier la méthode `onerror` de Fetch",
                "Activer l'option `network: true` dans Fetch"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le rôle de l'objet `AbortController` dans Fetch API ?",
            "answers" => [
                "Planifier une requête pour plus tard",
                "Annuler une requête en cours",
                "Réinitialiser une requête Fetch",
                "Changer dynamiquement l'URL de la requête"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle est la meilleure façon de transmettre des fichiers dans une requête AJAX ?",
            "answers" => [
                "En utilisant `FormData`",
                "En convertissant le fichier en base64",
                "En utilisant `JSON.stringify()`",
                "En envoyant le fichier directement via `send()`"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie une réponse avec le code HTTP 206 ?",
            "answers" => [
                "Requête partielle réussie",
                "Redirection permanente",
                "Requête non autorisée",
                "Requête acceptée mais non traitée"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment configurer une requête Fetch pour envoyer des cookies avec CORS ?",
            "answers" => [
                "Définir `credentials: 'include'`",
                "Définir `credentials: 'same-origin'`",
                "Activer l'en-tête `Access-Control-Allow-Cookies`",
                "Aucune configuration n'est nécessaire"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait la méthode `then()` dans Fetch API ?",
            "answers" => [
                "Traite la réponse réussie d'une requête",
                "Attrape les erreurs réseau",
                "Annule une requête",
                "Déclenche une nouvelle requête"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode permet de lire une réponse binaire avec Fetch API ?",
            "answers" => [
                "response.blob()",
                "response.buffer()",
                "response.binary()",
                "response.byteArray()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment gérer les métadonnées d'une réponse dans Fetch API ?",
            "answers" => [
                "Utiliser les en-têtes via `response.headers`",
                "Utiliser `response.meta`",
                "Accéder directement à `response.data`",
                "Lire les métadonnées via `response.metadata()`"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel en-tête est nécessaire pour indiquer que la réponse est au format JSON ?",
            "answers" => [
                "Content-Type: application/json",
                "Accept: application/json",
                "Access-Control-Allow-Origin: JSON",
                "Content-Encoding: json"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment effectuer une requête POST en Fetch avec un payload JSON ?",
            "answers" => [
                "Définir `method: 'POST'` et envoyer JSON.stringify dans `body`",
                "Utiliser `fetch.post()` avec un objet JSON",
                "Définir `headers: 'POST'` et inclure JSON.stringify",
                "Envoyer directement un objet dans `body`"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait l'en-tête `Access-Control-Allow-Credentials` en CORS ?",
            "answers" => [
                "Autorise l'envoi de cookies et autres identifiants",
                "Autorise uniquement les requêtes GET",
                "Indique si la réponse est mise en cache",
                "Interdit les requêtes asynchrones"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment détecter si une requête Fetch a échoué malgré un statut 200 ?",
            "answers" => [
                "Vérifier la structure des données dans `response.json()`",
                "Attraper une exception dans le bloc `catch`",
                "Utiliser `response.statusText`",
                "Vérifier si `response.body` est vide"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle propriété Fetch permet d'envoyer des en-têtes personnalisés ?",
            "answers" => [
                "headers",
                "options",
                "credentials",
                "config"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel mécanisme est utilisé pour protéger les requêtes CORS ?",
            "answers" => [
                "Les requêtes préalables OPTIONS",
                "Les en-têtes `Access-Control-Allow-All`",
                "Les restrictions de méthode POST",
                "La gestion des cookies par défaut"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment tester un serveur pour qu'il accepte les requêtes CORS ?",
            "answers" => [
                "Envoyer une requête OPTIONS pour vérifier les en-têtes CORS",
                "Essayer une requête GET directement",
                "Vérifier les cookies envoyés",
                "Envoyer une requête POST avec un payload vide"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la meilleure façon de gérer les réponses asynchrones imbriquées ?",
            "answers" => [
                "Utiliser `async/await`",
                "Utiliser des callbacks",
                "Utiliser des blocs `then` imbriqués",
                "Envoyer toutes les requêtes en série"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie le code d'état HTTP 409 ?",
            "answers" => [
                "Conflit de requête",
                "Requête interdite",
                "Authentification nécessaire",
                "Requête incomplète"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode permet de traiter une chaîne JSON dans Fetch API ?",
            "answers" => [
                "response.json()",
                "response.text()",
                "response.parse()",
                "response.body()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la différence principale entre `fetch` et `XMLHttpRequest` ?",
            "answers" => [
                "Fetch utilise des Promises",
                "Fetch est synchronisé par défaut",
                "Fetch ne supporte pas les requêtes POST",
                "Fetch ne supporte pas CORS"
            ],
            "correct" => 0
        ]
    ];
}

public function getQuestionQCMJS() 
{
    return [
        [
            "question" => "Que signifie JavaScript ?",
            "answers" => [
                "Un langage de script côté client",
                "Un langage de programmation serveur",
                "Un framework web",
                "Un langage de style"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment afficher un message dans la console en JavaScript ?",
            "answers" => [
                "console.log('Message')",
                "print('Message')",
                "alert('Message')",
                "document.write('Message')"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode est utilisée pour sélectionner un élément HTML par son ID ?",
            "answers" => [
                "getElementByClassName",
                "getElementById",
                "querySelector",
                "getElementByTagName"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle syntaxe permet de déclarer une variable en JavaScript ?",
            "answers" => [
                "let variableName",
                "variable variableName",
                "declare variableName",
                "var variableName"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la différence entre `==` et `===` en JavaScript ?",
            "answers" => [
                "`==` compare uniquement les valeurs, `===` compare les valeurs et les types",
                "`==` compare les types uniquement, `===` compare les valeurs uniquement",
                "Les deux sont identiques",
                "`==` est utilisé pour les objets, `===` pour les nombres"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode est utilisée pour ajouter un élément à la fin d'un tableau ?",
            "answers" => [
                "push()",
                "add()",
                "append()",
                "insert()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment déclarer une fonction en JavaScript ?",
            "answers" => [
                "function maFonction() {}",
                "def maFonction() {}",
                "createFunction() {}",
                "fonction() {}"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la méthode correcte pour ajouter un écouteur d'événement en JavaScript ?",
            "answers" => [
                "element.addEventListener('click', callback)",
                "element.on('click', callback)",
                "element.listen('click', callback)",
                "element.event('click', callback)"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode renvoie la longueur d'une chaîne en JavaScript ?",
            "answers" => [
                "length",
                "size",
                "getLength()",
                "count()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment convertir une chaîne en entier en JavaScript ?",
            "answers" => [
                "parseInt()",
                "toInteger()",
                "convertInt()",
                "Number.parse()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment vérifier si une variable est définie en JavaScript ?",
            "answers" => [
                "if (typeof variable !== 'undefined')",
                "if (exists(variable))",
                "if (variable != undefined)",
                "if (typeof variable == 'defined')"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel mot-clé est utilisé pour arrêter une boucle en JavaScript ?",
            "answers" => [
                "break",
                "exit",
                "stop",
                "end"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode est utilisée pour ajouter un élément au début d'un tableau ?",
            "answers" => [
                "unshift()",
                "push()",
                "addFirst()",
                "prepend()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment accéder au premier élément d'un tableau en JavaScript ?",
            "answers" => [
                "array[0]",
                "array.first()",
                "array.get(0)",
                "array.start()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode est utilisée pour vérifier si un tableau contient un élément spécifique ?",
            "answers" => [
                "includes()",
                "contains()",
                "find()",
                "search()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la portée d'une variable déclarée avec `let` ?",
            "answers" => [
                "Portée de bloc",
                "Portée globale uniquement",
                "Portée fonction uniquement",
                "Portée automatique"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode est utilisée pour convertir un tableau en chaîne de caractères ?",
            "answers" => [
                "join()",
                "toString()",
                "concat()",
                "stringify()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le résultat de `typeof null` en JavaScript ?",
            "answers" => [
                "object",
                "null",
                "undefined",
                "string"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode est utilisée pour répéter une chaîne plusieurs fois en JavaScript ?",
            "answers" => [
                "repeat()",
                "times()",
                "loop()",
                "replicate()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment vérifier si une variable est un tableau en JavaScript ?",
            "answers" => [
                "Array.isArray(variable)",
                "variable instanceof Array",
                "typeof variable === 'array'",
                "Array.check(variable)"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode JavaScript est utilisée pour geler un objet ?",
            "answers" => [
                "Object.freeze()",
                "Object.seal()",
                "Object.lock()",
                "Object.preventChanges()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait la méthode `Object.assign()` ?",
            "answers" => [
                "Crée une copie d'un objet",
                "Fusionne les propriétés d'un ou plusieurs objets dans un objet cible",
                "Ajoute des propriétés à un objet immuable",
                "Supprime les propriétés d'un objet"
            ],
            "correct" => 1
        ],
        [
            "question" => "Que retourne `typeof NaN` en JavaScript ?",
            "answers" => [
                "'number'",
                "'NaN'",
                "'undefined'",
                "'object'"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode est utilisée pour parcourir un tableau et créer un nouveau tableau en appliquant une fonction sur chaque élément ?",
            "answers" => [
                "map()",
                "forEach()",
                "filter()",
                "reduce()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la différence entre `let` et `var` en JavaScript ?",
            "answers" => [
                "`let` a une portée de bloc, tandis que `var` a une portée fonction",
                "`let` a une portée globale, tandis que `var` a une portée locale",
                "`let` est utilisé pour des constantes, `var` pour des variables",
                "Il n'y a aucune différence"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment accéder à toutes les clés d'un objet en JavaScript ?",
            "answers" => [
                "Object.keys(obj)",
                "Object.getKeys(obj)",
                "obj.keys()",
                "Object.values(obj)"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode combine les éléments d'un tableau pour produire une seule valeur ?",
            "answers" => [
                "reduce()",
                "map()",
                "filter()",
                "concat()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que retourne `Array.isArray([])` ?",
            "answers" => [
                "true",
                "false",
                "undefined",
                "Erreur"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le rôle de `setTimeout` en JavaScript ?",
            "answers" => [
                "Exécuter une fonction après un certain délai",
                "Répéter une fonction à intervalle régulier",
                "Arrêter l'exécution d'une fonction",
                "Rendre une fonction synchrone"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la différence entre `call()` et `apply()` en JavaScript ?",
            "answers" => [
                "`call()` prend des arguments séparés, `apply()` prend un tableau d'arguments",
                "`apply()` prend des arguments séparés, `call()` prend un tableau d'arguments",
                "Les deux sont identiques",
                "Ils sont utilisés uniquement avec des méthodes asynchrones"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment définir une méthode d'une classe en tant que méthode statique ?",
            "answers" => [
                "En utilisant le mot-clé `static`",
                "En utilisant le mot-clé `this`",
                "En définissant la méthode dans le constructeur",
                "En définissant la méthode comme une propriété"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la sortie de `[...'abc']` en JavaScript ?",
            "answers" => [
                "['a', 'b', 'c']",
                "[['a', 'b', 'c']]",
                "'abc'",
                "['abc']"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment vérifier si une propriété est dans un objet JavaScript ?",
            "answers" => [
                "`property in object`",
                "`object.hasOwnProperty(property)`",
                "`object.includes(property)`",
                "`property.contains(object)`"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait la méthode `Object.seal()` ?",
            "answers" => [
                "Empêche l'ajout ou la suppression de propriétés d'un objet",
                "Empêche toute modification d'un objet",
                "Supprime les propriétés d'un objet",
                "Copie un objet avec ses propriétés scellées"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment ajouter un élément à un tableau en JavaScript de manière immuable ?",
            "answers" => [
                "[...array, newElement]",
                "array.push(newElement)",
                "array.concat(newElement)",
                "array.add(newElement)"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est l'avantage principal des fonctions fléchées en JavaScript ?",
            "answers" => [
                "Elles ne lient pas leur propre contexte `this`",
                "Elles permettent des boucles plus rapides",
                "Elles sont toujours asynchrones",
                "Elles créent des closures automatiquement"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment arrêter un intervalle défini avec `setInterval` ?",
            "answers" => [
                "clearInterval(intervalID)",
                "stopInterval(intervalID)",
                "cancelInterval(intervalID)",
                "pauseInterval(intervalID)"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment créer une promesse en JavaScript ?",
            "answers" => [
                "new Promise((resolve, reject) => {...})",
                "Promise.create((resolve, reject) => {...})",
                "promise((resolve, reject) => {...})",
                "Promise.resolve((resolve, reject) => {...})"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que retourne `Promise.all([p1, p2, p3])` si l'une des promesses échoue ?",
            "answers" => [
                "Une promesse rejetée",
                "Une promesse résolue partiellement",
                "Une erreur immédiate",
                "Un tableau des promesses résolues"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode transforme un objet en tableau de paires clé/valeur ?",
            "answers" => [
                "Object.entries()",
                "Object.pairs()",
                "Object.keys()",
                "Object.values()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie le terme 'closure' en JavaScript ?",
            "answers" => [
                "Une fonction qui se souvient de son contexte lexical même après la fin de son exécution",
                "Une fonction qui ne retourne aucune valeur",
                "Une méthode d'une classe JavaScript",
                "Une fonction qui s'exécute immédiatement"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que retourne `Promise.race()` si plusieurs Promises sont passées en argument ?",
            "answers" => [
                "La première Promise qui se résout ou se rejette",
                "Un tableau de toutes les Promises résolues",
                "Une erreur si l'une des Promises échoue",
                "La dernière Promise qui se résout"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment définir un getter dans une classe JavaScript ?",
            "answers" => [
                "get propertyName() { ... }",
                "getter propertyName() { ... }",
                "propertyName.get { ... }",
                "function get(propertyName) { ... }"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait le mot-clé `yield` dans une fonction génératrice ?",
            "answers" => [
                "Pause l'exécution de la fonction et retourne une valeur",
                "Définit une valeur par défaut pour la fonction",
                "Transforme une fonction normale en fonction asynchrone",
                "Déclenche une exception si utilisé sans `return`"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode d'Array permet d'aplatir un tableau multidimensionnel ?",
            "answers" => [
                "flat()",
                "flatten()",
                "reduce()",
                "concat()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la principale différence entre `weakSet` et `Set` ?",
            "answers" => [
                "WeakSet ne stocke que des objets, tandis que Set peut stocker n'importe quel type",
                "Set ne stocke que des références faibles, tandis que WeakSet stocke des références fortes",
                "WeakSet peut être itéré directement, tandis que Set ne peut pas",
                "Set est plus rapide que WeakSet pour les grands ensembles"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment rendre une propriété d'un objet non modifiable ?",
            "answers" => [
                "Object.defineProperty(obj, 'prop', { writable: false })",
                "Object.freeze(obj.prop)",
                "Object.seal(obj, 'prop')",
                "obj.prop.lock()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie `this` dans une fonction fléchée ?",
            "answers" => [
                "Il hérite du contexte lexical où la fonction est définie",
                "Il pointe toujours vers l'objet global",
                "Il est défini dynamiquement au moment de l'exécution",
                "Il pointe vers la fonction appelante"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la sortie de `console.log([] + [])` en JavaScript ?",
            "answers" => [
                "Une chaîne vide",
                "Une erreur",
                "Deux tableaux vides concaténés",
                "undefined"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le rôle de `Reflect` en JavaScript ?",
            "answers" => [
                "Fournir des méthodes pour interagir avec des objets",
                "Remplacer complètement `Object` pour manipuler les objets",
                "Créer des objets réfléchissants pour les Proxy",
                "Fournir une alternative asynchrone à `Object`"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment protéger une propriété d'un objet contre l'énumération ?",
            "answers" => [
                "Object.defineProperty(obj, 'prop', { enumerable: false })",
                "Object.seal(obj.prop)",
                "Object.freeze(obj)",
                "obj.prop.hidden = true"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode convertit un Set en Array ?",
            "answers" => [
                "Array.from(set)",
                "set.toArray()",
                "[...set]",
                "Array.create(set)"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait le mot-clé `super` dans une classe JavaScript ?",
            "answers" => [
                "Appelle le constructeur ou une méthode de la classe parente",
                "Référence l'objet global",
                "Crée une propriété privée",
                "Lie dynamiquement un objet à une méthode"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la différence entre `Object.seal()` et `Object.freeze()` ?",
            "answers" => [
                "Object.seal empêche l'ajout ou la suppression de propriétés, mais permet leur modification",
                "Object.freeze permet uniquement l'ajout de nouvelles propriétés",
                "Object.seal empêche la modification des valeurs, mais pas leur suppression",
                "Ils ont exactement le même comportement"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode permet d'exécuter une Promesse une fois toutes les Promesses sont soit résolues, soit rejetées ?",
            "answers" => [
                "Promise.allSettled()",
                "Promise.all()",
                "Promise.race()",
                "Promise.resolve()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la sortie de `console.log(0.1 + 0.2 === 0.3)` en JavaScript ?",
            "answers" => [
                "false",
                "true",
                "undefined",
                "NaN"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le comportement de `delete obj.prop` en JavaScript ?",
            "answers" => [
                "Supprime la propriété de l'objet si elle est configurable",
                "Supprime toujours la propriété, même si elle n'est pas configurable",
                "Remplace la propriété par `null`",
                "Supprime la propriété, même si elle est une méthode"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment créer une Proxy pour un objet en JavaScript ?",
            "answers" => [
                "new Proxy(target, handler)",
                "Proxy.create(target, handler)",
                "Object.proxy(target, handler)",
                "Reflect.proxy(target, handler)"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le rôle de `Symbol` en JavaScript ?",
            "answers" => [
                "Créer des clés d'objet uniques",
                "Générer des identifiants aléatoires",
                "Remplacer les chaînes dans les clés d'objet",
                "Créer des méthodes privées"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode permet d'ajouter des comportements dynamiques à un objet avec un Proxy ?",
            "answers" => [
                "handler.get()",
                "proxy.bind()",
                "Reflect.addBehavior()",
                "Object.addDynamic()"
            ],
            "correct" => 0
        ]
    ];
}

public function getQuestionQCMPython()
{
    return [
        [
            "question" => "Que signifie Python en programmation ?",
            "answers" => [
                "Un langage de programmation de haut niveau",
                "Une bibliothèque de données",
                "Un outil de test",
                "Un langage de programmation bas niveau"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment afficher un message à l'écran en Python ?",
            "answers" => [
                "print('message')",
                "echo('message')",
                "console.log('message')",
                "write('message')"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle syntaxe est utilisée pour déclarer une variable en Python ?",
            "answers" => [
                "variable = valeur",
                "var variable = valeur",
                "let variable = valeur",
                "declare variable = valeur"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment créer une boucle `for` en Python ?",
            "answers" => [
                "for i in range(10):",
                "for (i = 0; i &lt 10; i++)",
                "foreach (10 as i):",
                "loop i from 1 to 10:"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le type de données pour une séquence de caractères en Python ?",
            "answers" => [
                "str",
                "char",
                "text",
                "string"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle fonction est utilisée pour connaître le type d'une variable ?",
            "answers" => [
                "type()",
                "typeof()",
                "getType()",
                "variableType()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode est utilisée pour ajouter un élément à une liste ?",
            "answers" => [
                "append()",
                "add()",
                "insert()",
                "push()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment convertir une chaîne en entier en Python ?",
            "answers" => [
                "int('123')",
                "convert('123')",
                "toInt('123')",
                "strToInt('123')"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la fonction pour obtenir l'entrée utilisateur en Python 3 ?",
            "answers" => [
                "input()",
                "getInput()",
                "readLine()",
                "scanner()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la méthode correcte pour vérifier si un élément est dans une liste ?",
            "answers" => [
                "if element in list:",
                "if list.contains(element):",
                "if element is in list:",
                "if list.has(element):"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment déclarer une fonction en Python ?",
            "answers" => [
                "def ma_fonction():",
                "function ma_fonction():",
                "declare ma_fonction():",
                "create ma_fonction():"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment vérifier si deux variables ont la même valeur et le même type en Python ?",
            "answers" => [
                "==",
                "===",
                "is",
                "equals"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la syntaxe pour importer une bibliothèque en Python ?",
            "answers" => [
                "import library_name",
                "include library_name",
                "require library_name",
                "use library_name"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel opérateur est utilisé pour l'exponentiation en Python ?",
            "answers" => [
                "**",
                "^",
                "pow()",
                "exp()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la méthode correcte pour supprimer un élément d'une liste ?",
            "answers" => [
                "list.remove(element)",
                "list.delete(element)",
                "list.pop(element)",
                "list.erase(element)"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment déclarer une chaîne multi-lignes en Python ?",
            "answers" => [
                "\"\"\"texte\"\"\"",
                "'''texte'''",
                "``texte``",
                "Les deux premières options sont correctes"
            ],
            "correct" => 3
        ],
        [
            "question" => "Quelle est la sortie de `print(type(42))` ?",
            "answers" => [
                "&ltclass 'int'&gt",
                "&ltclass 'number'&gt",
                "&ltclass 'float'&gt",
                "&ltclass 'integer'&gt"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la méthode correcte pour trier une liste en Python ?",
            "answers" => [
                "list.sort()",
                "list.order()",
                "list.sorted()",
                "sort(list)"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode retourne une copie d'une liste en Python ?",
            "answers" => [
                "list.copy()",
                "list.duplicate()",
                "list.clone()",
                "list.replica()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment inverser une liste en Python ?",
            "answers" => [
                "list.reverse()",
                "list.invert()",
                "list[::-1]",
                "Les deux premières options sont correctes"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quelle est la différence entre une liste et un tuple en Python ?",
            "answers" => [
                "Les listes sont modifiables, les tuples sont immuables",
                "Les tuples sont modifiables, les listes sont immuables",
                "Les listes sont plus rapides que les tuples",
                "Il n'y a aucune différence"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait la méthode `zip()` en Python ?",
            "answers" => [
                "Combine plusieurs itérables en une seule séquence de tuples",
                "Compresse une chaîne de caractères",
                "Fusionne deux listes en une seule",
                "Associe des clés et des valeurs pour un dictionnaire"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la différence entre `is` et `==` en Python ?",
            "answers" => [
                "`is` compare l'identité des objets, `==` compare les valeurs",
                "`is` compare les valeurs, `==` compare les références",
                "`is` est utilisé pour les chaînes, `==` pour les nombres",
                "Ils sont équivalents"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment définir une fonction anonyme en Python ?",
            "answers" => [
                "lambda x: x + 1",
                "function(x): x + 1",
                "def(x): x + 1",
                "anon(x): x + 1"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le rôle de `@staticmethod` dans une classe Python ?",
            "answers" => [
                "Définir une méthode qui n'a pas besoin d'accéder à `self` ou à `cls`",
                "Définir une méthode qui peut accéder uniquement à `self`",
                "Définir une méthode pour les instances uniquement",
                "Définir une méthode qui agit comme une fonction globale"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que retourne `enumerate(['a', 'b', 'c'])` ?",
            "answers" => [
                "Un itérable de tuples (index, valeur)",
                "Un dictionnaire avec des index comme clés",
                "Une liste des valeurs",
                "Une chaîne contenant les éléments"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la différence entre `deepcopy` et `copy` dans le module `copy` ?",
            "answers" => [
                "`deepcopy` copie récursivement tous les objets imbriqués",
                "`copy` copie les références mais pas les objets",
                "`deepcopy` est plus rapide que `copy`",
                "Ils ont le même comportement"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait la méthode `@classmethod` dans une classe Python ?",
            "answers" => [
                "Définit une méthode qui peut accéder à la classe via `cls`",
                "Définit une méthode uniquement pour les instances",
                "Définit une méthode qui agit comme une fonction globale",
                "Définit une méthode privée"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment créer un ensemble (set) en Python ?",
            "answers" => [
                "set([1, 2, 3])",
                "{1, 2, 3}",
                "Les deux premières options sont correctes",
                "set{1, 2, 3}"
            ],
            "correct" => 2
        ],
        [
            "question" => "Que fait le mot-clé `yield` dans une fonction génératrice ?",
            "answers" => [
                "Retourne une valeur sans terminer la fonction",
                "Crée une liste automatiquement",
                "Définit une variable constante",
                "Arrête une fonction immédiatement"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment trier un dictionnaire par ses valeurs en Python ?",
            "answers" => [
                "sorted(dict.items(), key=lambda x: x[1])",
                "dict.sort(key=value)",
                "sort(dict.values())",
                "sorted(dict.values())"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le rôle de `__init__` dans une classe Python ?",
            "answers" => [
                "Initialiser une nouvelle instance d'une classe",
                "Définir une méthode de classe",
                "Créer une variable globale",
                "Créer un attribut privé"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode est utilisée pour ajouter des clés et des valeurs à un dictionnaire ?",
            "answers" => [
                "update()",
                "add()",
                "append()",
                "extend()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait la méthode `get()` d'un dictionnaire Python ?",
            "answers" => [
                "Retourne la valeur associée à une clé, ou une valeur par défaut si la clé n'existe pas",
                "Retourne toutes les valeurs du dictionnaire",
                "Retourne toutes les clés du dictionnaire",
                "Retourne une exception si la clé n'existe pas"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment définir une propriété privée dans une classe Python ?",
            "answers" => [
                "En utilisant un double underscore, comme `__ma_variable`",
                "En utilisant un simple underscore, comme `_ma_variable`",
                "En utilisant le mot-clé `private`",
                "En utilisant un décorateur `@private`"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la sortie de `bool([])` en Python ?",
            "answers" => [
                "False",
                "True",
                "None",
                "Erreur"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle bibliothèque Python est utilisée pour manipuler des tableaux et des matrices ?",
            "answers" => [
                "NumPy",
                "Pandas",
                "SciPy",
                "Matplotlib"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait le mot-clé `pass` en Python ?",
            "answers" => [
                "Ne fait rien et continue l'exécution",
                "Arrête immédiatement le programme",
                "Retourne une valeur par défaut",
                "Saute une itération dans une boucle"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment vérifier si une clé existe dans un dictionnaire ?",
            "answers" => [
                "`if key in dict:`",
                "`if dict.has_key(key):`",
                "`if key exists in dict:`",
                "`if key is in dict.keys():`"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment capturer une exception en Python ?",
            "answers" => [
                "try: ... except Exception as e:",
                "try: ... catch Exception as e:",
                "try: ... on Exception:",
                "try: ... exception as e:"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait le mot-clé `@property` en Python ?",
            "answers" => [
                "Transforme une méthode en attribut accessible comme une propriété",
                "Définit une propriété privée",
                "Ajoute une méthode statique à une classe",
                "Transforme une méthode en fonction globale"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment définir une coroutine en Python ?",
            "answers" => [
                "En utilisant le mot-clé `async def`",
                "En utilisant le mot-clé `await` uniquement",
                "En utilisant `@coroutine` avant une fonction",
                "En combinant `yield` et `await`"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la différence entre `@classmethod` et `@staticmethod` ?",
            "answers" => [
                "`@classmethod` reçoit la classe comme premier argument, `@staticmethod` n'en reçoit aucun",
                "`@staticmethod` reçoit la classe comme premier argument, `@classmethod` n'en reçoit aucun",
                "`@classmethod` crée une méthode privée, `@staticmethod` crée une méthode publique",
                "Ils sont équivalents"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que retourne `inspect.getsource()` en Python ?",
            "answers" => [
                "Le code source d'une fonction ou d'un objet",
                "Le type d'une fonction ou d'un objet",
                "Les dépendances d'une fonction ou d'un objet",
                "Une représentation JSON d'une fonction ou d'un objet"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait le décorateur `@dataclass` en Python ?",
            "answers" => [
                "Crée automatiquement des méthodes comme `__init__`, `__repr__`, et `__eq__` pour une classe",
                "Transforme une classe en structure immuable",
                "Ajoute des fonctionnalités de métaclasse à une classe",
                "Convertit une classe en type JSON"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment définir une métaclasse en Python ?",
            "answers" => [
                "En définissant une classe héritant de `type`",
                "En utilisant le mot-clé `metaclass` dans une méthode",
                "En décorant une classe avec `@metaclass`",
                "En combinant `@classmethod` et `@staticmethod`"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la principale différence entre `__str__` et `__repr__` ?",
            "answers" => [
                "`__str__` est utilisé pour afficher une représentation lisible pour l'humain, `__repr__` pour les développeurs",
                "`__repr__` est utilisé pour afficher une représentation lisible pour l'humain, `__str__` pour les développeurs",
                "`__str__` est appelé automatiquement dans les logs, `__repr__` ne l'est jamais",
                "Ils ont le même objectif et s'appellent réciproquement"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la sortie de `len(set([1, 2, 2, 3, 4]))` en Python ?",
            "answers" => [
                "4",
                "5",
                "3",
                "Erreur"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment rendre une classe immuable en Python ?",
            "answers" => [
                "En utilisant `__slots__` et en définissant des propriétés en lecture seule",
                "En décorant la classe avec `@dataclass(frozen=True)`",
                "Les deux réponses sont correctes",
                "Python ne prend pas en charge les classes immuables"
            ],
            "correct" => 2
        ],
        [
            "question" => "Que fait le mot-clé `nonlocal` en Python ?",
            "answers" => [
                "Réfère une variable définie dans une fonction englobante",
                "Définit une variable globale",
                "Marque une variable comme constante",
                "Empêche une variable d'être modifiée"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait `functools.lru_cache` ?",
            "answers" => [
                "Ajoute une mise en cache pour accélérer les appels de fonction",
                "Rend une fonction réentrante",
                "Transforme une fonction en coroutine",
                "Convertit une fonction en méthode statique"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que retourne `asyncio.gather()` ?",
            "answers" => [
                "Une coroutine qui exécute plusieurs coroutines simultanément",
                "Un thread pour chaque coroutine passée",
                "Une boucle asynchrone pour gérer plusieurs fonctions",
                "Un objet générateur combinant plusieurs résultats"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment vérifier si un objet est un itérateur en Python ?",
            "answers" => [
                "Utiliser `isinstance(obj, collections.abc.Iterator)`",
                "Utiliser `type(obj) == iterator`",
                "Appeler `obj.iterator()`",
                "Python ne permet pas de vérifier directement les itérateurs"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie le mot-clé `yield from` dans une fonction génératrice ?",
            "answers" => [
                "Délègue à un autre itérateur ou générateur",
                "Convertit une fonction normale en générateur",
                "Retourne plusieurs valeurs à la fois",
                "Termine la fonction immédiatement"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment utiliser les annotations de type en Python ?",
            "answers" => [
                "def ma_fonction(x: int, y: str) -> bool:",
                "def ma_fonction(x = int, y = str) -> bool:",
                "def ma_fonction(int x, str y) -> bool:",
                "def ma_fonction(x: int, y: str): -> bool"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait le décorateur `@contextmanager` ?",
            "answers" => [
                "Transforme une fonction en gestionnaire de contexte",
                "Ajoute un comportement asynchrone à une fonction",
                "Transforme une méthode en méthode privée",
                "Convertit un générateur en coroutine"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait `multiprocessing.Pool` en Python ?",
            "answers" => [
                "Gère un pool de processus pour exécuter des tâches en parallèle",
                "Crée un pool de threads pour les tâches asynchrones",
                "Simule la concurrence en Python",
                "Distribue les tâches sur plusieurs machines"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que retourne la fonction `vars(obj)` ?",
            "answers" => [
                "Un dictionnaire contenant les attributs de l'objet",
                "Un tableau avec les noms des attributs",
                "Un tableau avec les valeurs des attributs",
                "Un itérateur sur les méthodes de l'objet"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment s'assurer qu'une classe en Python est un singleton ?",
            "answers" => [
                "En surchargeant `__new__` pour renvoyer toujours la même instance",
                "En utilisant le décorateur `@singleton`",
                "En utilisant une métaclasse dédiée",
                "Les deux premières réponses sont correctes"
            ],
            "correct" => 3
        ]
    ];
}

public function getQuestionQCMPHP()
{
    return [
        [
            "question" => "Que signifie PHP ?",
            "answers" => [
                "Hypertext Preprocessor",
                "Personal Home Page",
                "Programming Hypertext Processor",
                "Processor of Hypertext Pages"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle extension de fichier est utilisée pour les fichiers PHP ?",
            "answers" => [
                ".php",
                ".html",
                ".js",
                ".ph"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment afficher une chaîne de caractères en PHP ?",
            "answers" => [
                "echo 'Hello';",
                "print('Hello');",
                "write('Hello');",
                "console.log('Hello');"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment déclarer une variable en PHP ?",
            "answers" => [
                "\$variable = 'valeur';",
                "var variable = 'valeur';",
                "let variable = 'valeur';",
                "variable = 'valeur';"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle fonction est utilisée pour vérifier le type d'une variable en PHP ?",
            "answers" => [
                "gettype()",
                "typeof()",
                "type()",
                "variableType()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la méthode correcte pour inclure un fichier en PHP ?",
            "answers" => [
                "include 'file.php';",
                "import 'file.php';",
                "require_once 'file.php';",
                "Les deux premières réponses sont correctes"
            ],
            "correct" => 3
        ],
        [
            "question" => "Quelle balise PHP est utilisée pour écrire du code PHP ?",
            "answers" => [
                "&lt;?php ... ?&gt;",
                "&lt;php ... ?&gt;",
                "&lt;?php&gt; ... &lt;?&gt;",
                "&lt;script&gt; ... &lt;/script&gt;"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle fonction est utilisée pour compter les éléments d'un tableau en PHP ?",
            "answers" => [
                "count()",
                "sizeof()",
                "length()",
                "Les deux premières réponses sont correctes"
            ],
            "correct" => 3
        ],
        [
            "question" => "Comment vérifier si une variable est définie en PHP ?",
            "answers" => [
                "isset(\$variable)",
                "is_set(\$variable)",
                "defined(\$variable)",
                "exists(\$variable)"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la syntaxe pour un commentaire sur une seule ligne en PHP ?",
            "answers" => [
                "// Ceci est un commentaire",
                "# Ceci est un commentaire",
                "/* Ceci est un commentaire */",
                "Les deux premières réponses sont correctes"
            ],
            "correct" => 3
        ],
        [
            "question" => "Quelle est la méthode correcte pour déclarer une constante en PHP ?",
            "answers" => [
                "define('NOM', 'valeur');",
                "constant('NOM', 'valeur');",
                "const NOM = 'valeur';",
                "Les deux premières réponses sont correctes"
            ],
            "correct" => 3
        ],
        [
            "question" => "Comment vérifier si deux variables ont la même valeur et le même type en PHP ?",
            "answers" => [
                "===",
                "==",
                "equals()",
                "is()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la valeur par défaut d'une variable non initialisée en PHP ?",
            "answers" => [
                "null",
                "undefined",
                "'' (chaîne vide)",
                "0"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode est utilisée pour supprimer un élément d'un tableau en PHP ?",
            "answers" => [
                "unset(\$array['key']);",
                "delete(\$array['key']);",
                "remove(\$array['key']);",
                "unset(\$array, 'key');"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment concaténer des chaînes en PHP ?",
            "answers" => [
                "'Hello' . ' World'",
                "'Hello' + ' World'",
                "'Hello' & ' World'",
                "'Hello'.concat(' World')"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle fonction est utilisée pour obtenir la longueur d'une chaîne en PHP ?",
            "answers" => [
                "strlen()",
                "length()",
                "sizeof()",
                "count()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle fonction est utilisée pour transformer une chaîne en entier en PHP ?",
            "answers" => [
                "intval()",
                "toInt()",
                "parseInt()",
                "convertToInt()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la sortie de `echo strtoupper('hello');` ?",
            "answers" => [
                "HELLO",
                "hello",
                "Hello",
                "Erreur"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment déclarer un tableau associatif en PHP ?",
            "answers" => [
                "['clé' => 'valeur']",
                "array('clé' => 'valeur')",
                "Les deux premières réponses sont correctes",
                "table('clé', 'valeur')"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quelle fonction est utilisée pour trier un tableau en PHP ?",
            "answers" => [
                "sort()",
                "order()",
                "array_sort()",
                "arrange()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la différence entre `include` et `require` en PHP ?",
            "answers" => [
                "`require` provoque une erreur fatale si le fichier est introuvable, `include` génère une alerte",
                "`include` provoque une erreur fatale si le fichier est introuvable, `require` génère une alerte",
                "Il n'y a aucune différence",
                "`require` est utilisé pour des fichiers externes, `include` pour des scripts"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait la fonction `__autoload()` en PHP ?",
            "answers" => [
                "Charge automatiquement les classes au moment de leur utilisation",
                "Initialise une variable globale",
                "Ajoute des méthodes magiques à une classe",
                "Crée une copie automatique d'un objet"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment définir une classe abstraite en PHP ?",
            "answers" => [
                "En utilisant le mot-clé `abstract`",
                "En utilisant le mot-clé `virtual`",
                "En utilisant le mot-clé `interface`",
                "En ajoutant `final` à la classe"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la sortie de `var_dump((int)(0.1 + 0.2 == 0.3));` ?",
            "answers" => [
                "int(0)",
                "int(1)",
                "float(0.3)",
                "Erreur"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment vérifier si une classe implémente une interface en PHP ?",
            "answers" => [
                "Utiliser `instanceof` avec l'interface",
                "Utiliser `is_a()` avec l'interface",
                "Appeler la méthode `implements()` sur l'objet",
                "Il n'est pas possible de le vérifier"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie `final` dans une méthode ou une classe en PHP ?",
            "answers" => [
                "Empêche l'héritage de la méthode ou de la classe",
                "Permet uniquement les méthodes statiques",
                "Transforme la méthode en méthode magique",
                "Convertit la classe en singleton"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait `PDO::prepare()` en PHP ?",
            "answers" => [
                "Prépare une requête SQL avec des paramètres sécurisés",
                "Exécute directement une requête SQL",
                "Crée un objet de connexion PDO",
                "Ferme une connexion PDO existante"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait le mot-clé `trait` en PHP ?",
            "answers" => [
                "Permet de partager du code entre plusieurs classes sans héritage",
                "Ajoute une interface à une classe",
                "Crée une méthode privée",
                "Ajoute un espace de noms à une classe"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la différence entre `==` et `===` en PHP ?",
            "answers" => [
                "`==` compare les valeurs, `===` compare les valeurs et les types",
                "`==` compare les types, `===` compare uniquement les valeurs",
                "`==` est utilisé pour les chaînes, `===` pour les nombres",
                "Ils ont le même comportement"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait la méthode `json_encode()` en PHP ?",
            "answers" => [
                "Convertit un tableau ou un objet PHP en chaîne JSON",
                "Crée un fichier JSON",
                "Charge une chaîne JSON dans un tableau",
                "Convertit une chaîne JSON en tableau"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle fonction PHP est utilisée pour sérialiser un objet ?",
            "answers" => [
                "serialize()",
                "json_serialize()",
                "toString()",
                "object_serialize()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait la méthode magique `__callStatic()` ?",
            "answers" => [
                "Est appelée pour des appels de méthodes statiques inexistantes",
                "Est appelée lors de l'instanciation d'une classe",
                "Convertit une méthode statique en méthode magique",
                "Ajoute dynamiquement une méthode à une classe"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode est utilisée pour capturer les erreurs lors de l'exécution d'un script en PHP ?",
            "answers" => [
                "set_error_handler()",
                "handle_error()",
                "try...catch",
                "onError()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que retourne `array_merge()` en PHP ?",
            "answers" => [
                "Un nouveau tableau combinant les valeurs des tableaux passés",
                "Un tableau contenant les clés des deux tableaux",
                "Un tableau contenant les valeurs en double uniquement",
                "Une erreur si les clés sont dupliquées"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment déclarer un espace de noms en PHP ?",
            "answers" => [
                "namespace MonNamespace;",
                "use MonNamespace;",
                "namespace = 'MonNamespace';",
                "import MonNamespace;"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait `spl_autoload_register()` ?",
            "answers" => [
                "Enregistre une fonction pour charger automatiquement les classes",
                "Charge toutes les classes disponibles dans un projet",
                "Ajoute un chemin à l'autoloader",
                "Instancie automatiquement les classes"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la différence entre `array_map()` et `array_filter()` ?",
            "answers" => [
                "`array_map()` applique une fonction à chaque élément, `array_filter()` filtre les éléments selon un critère",
                "`array_filter()` transforme les éléments, `array_map()` les supprime",
                "`array_map()` filtre les valeurs, `array_filter()` les modifie",
                "Ils ont exactement le même comportement"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la sortie de `print_r(null);` en PHP ?",
            "answers" => [
                "Aucune sortie",
                "1",
                "null",
                "Erreur"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait `array_reduce()` en PHP ?",
            "answers" => [
                "Réduit un tableau en une seule valeur en appliquant une fonction",
                "Supprime les doublons d'un tableau",
                "Applique une fonction à un tableau pour générer un tableau réduit",
                "Trie un tableau par ordre décroissant"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle fonction PHP est utilisée pour diviser une chaîne en un tableau ?",
            "answers" => [
                "explode()",
                "split()",
                "implode()",
                "chunk_split()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait le mot-clé `use` dans une classe en PHP ?",
            "answers" => [
                "Importe un espace de noms ou un trait",
                "Définit une variable globale",
                "Transforme une méthode privée en méthode publique",
                "Associe une interface à une classe"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment éviter la duplication de clés lors de la fusion de tableaux associatifs avec `array_merge_recursive()` ?",
            "answers" => [
                "Les clés identiques sont regroupées dans des sous-tableaux",
                "Les clés du premier tableau écrasent celles des suivants",
                "Seule la dernière clé est conservée",
                "Une exception est levée en cas de duplication"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait la méthode magique `__invoke()` en PHP ?",
            "answers" => [
                "Permet d'appeler un objet comme une fonction",
                "Est appelée lors de la sérialisation d'un objet",
                "Est utilisée pour comparer deux objets",
                "Transforme un objet en tableau"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment vérifier si une classe utilise un trait spécifique ?",
            "answers" => [
                "Utiliser la fonction `class_uses()`",
                "Vérifier avec `method_exists()`",
                "Appeler `getTrait()` sur l'objet",
                "Les traits ne peuvent pas être vérifiés"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait le mot-clé `yield` en PHP ?",
            "answers" => [
                "Retourne une valeur tout en maintenant l'état de la fonction",
                "Transforme une fonction en méthode magique",
                "Crée une variable globale",
                "Arrête une fonction immédiatement"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la sortie de `echo (2 &lt=> 3);` en PHP ?",
            "answers" => [
                "-1",
                "0",
                "1",
                "Erreur"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait `ReflectionClass` en PHP ?",
            "answers" => [
                "Permet d'inspecter et de manipuler des classes dynamiquement",
                "Crée une copie d'une classe",
                "Convertit une classe en chaîne JSON",
                "Ajoute dynamiquement une méthode à une classe"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle fonction est utilisée pour compresser des données en PHP ?",
            "answers" => [
                "gzcompress()",
                "compress()",
                "deflate()",
                "zipdata()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait `spl_object_hash()` en PHP ?",
            "answers" => [
                "Retourne un identifiant unique pour un objet",
                "Génère un hash MD5 d'un objet",
                "Retourne une représentation JSON d'un objet",
                "Convertit un objet en tableau"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la différence entre `require_once` et `require` en PHP ?",
            "answers" => [
                "`require_once` inclut un fichier uniquement s'il n'a pas été inclus auparavant",
                "`require` est plus rapide que `require_once`",
                "`require_once` lève une exception en cas d'erreur, `require` génère une erreur fatale",
                "Ils ont le même comportement"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait `get_class_vars()` en PHP ?",
            "answers" => [
                "Retourne un tableau des propriétés d'une classe",
                "Retourne un tableau des méthodes d'une classe",
                "Retourne les variables globales associées à une classe",
                "Retourne les constantes définies dans une classe"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie le mode PDO `FETCH_ASSOC` ?",
            "answers" => [
                "Retourne les résultats sous forme de tableau associatif",
                "Retourne les résultats sous forme d'objet",
                "Retourne uniquement les clés primaires d'une table",
                "Retourne une exception en cas de résultat nul"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait le mot-clé `declare(strict_types=1)` en PHP ?",
            "answers" => [
                "Active la vérification stricte des types pour le fichier",
                "Désactive les erreurs liées aux types",
                "Convertit automatiquement les types",
                "Active la vérification stricte des espaces de noms"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait `stream_context_create()` en PHP ?",
            "answers" => [
                "Crée un contexte pour les flux d'entrée et de sortie",
                "Transforme un fichier en flux",
                "Active un gestionnaire de flux par défaut",
                "Ferme automatiquement tous les flux ouverts"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait `password_hash()` en PHP ?",
            "answers" => [
                "Crée un hash sécurisé pour un mot de passe",
                "Vérifie un mot de passe avec son hash",
                "Encode une chaîne en base64",
                "Génère une clé de cryptage symétrique"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment détecter si une variable est un appelable en PHP ?",
            "answers" => [
                "Utiliser `is_callable()`",
                "Utiliser `call_user_func()`",
                "Utiliser `function_exists()`",
                "PHP ne permet pas de vérifier si une variable est un appelable"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que retourne `array_intersect()` en PHP ?",
            "answers" => [
                "Les valeurs communes entre deux ou plusieurs tableaux",
                "Les clés communes entre deux ou plusieurs tableaux",
                "Une liste de doublons dans un tableau",
                "Une exception si les tableaux sont vides"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode est utilisée pour charger dynamiquement une classe en PHP ?",
            "answers" => [
                "spl_autoload_register()",
                "class_loader()",
                "autoload()",
                "dynamic_include()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait `__toString()` en PHP ?",
            "answers" => [
                "Retourne une représentation en chaîne de l'objet",
                "Convertit un objet en tableau",
                "Transforme un objet en JSON",
                "Ajoute une méthode à l'objet"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment convertir un objet en tableau en PHP ?",
            "answers" => [
                "(array)\$objet",
                "to_array(\$objet)",
                "convertToArray(\$objet)",
                "object_to_array(\$objet)"
            ],
            "correct" => 0
        ]
    ];
}

public function getQuestionQCMMongoDB()
{
    return [
        [
            "question" => "Qu'est-ce que MongoDB ?",
            "answers" => [
                "Une base de données NoSQL orientée documents",
                "Une base de données relationnelle",
                "Une bibliothèque JavaScript",
                "Un outil de gestion de fichiers"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel type de données est utilisé pour stocker les documents dans MongoDB ?",
            "answers" => [
                "JSON",
                "BSON",
                "XML",
                "CSV"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle commande est utilisée pour afficher toutes les bases de données dans MongoDB ?",
            "answers" => [
                "show dbs",
                "list databases",
                "db.showAll()",
                "db.getDatabases()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment sélectionne-t-on une base de données dans MongoDB ?",
            "answers" => [
                "use database_name",
                "db.select('database_name')",
                "db.switch('database_name')",
                "select database_name"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment insérer un document dans une collection MongoDB ?",
            "answers" => [
                "db.collection.insertOne({})",
                "db.collection.insert({})",
                "db.collection.add({})",
                "db.collection.create({})"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle clé unique est automatiquement ajoutée à chaque document MongoDB ?",
            "answers" => [
                "_id",
                "documentId",
                "uniqueId",
                "primaryKey"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle commande permet de trouver tous les documents dans une collection ?",
            "answers" => [
                "db.collection.find()",
                "db.collection.getAll()",
                "db.collection.show()",
                "db.collection.select()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle commande est utilisée pour supprimer une collection dans MongoDB ?",
            "answers" => [
                "db.collection.drop()",
                "db.collection.delete()",
                "db.dropCollection()",
                "db.removeCollection()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment mettre à jour un document dans MongoDB ?",
            "answers" => [
                "db.collection.updateOne({}, {\$set: {}})",
                "db.collection.replaceOne({}, {})",
                "db.collection.update({}, {\$set: {}})",
                "db.collection.modify({}, {\$set: {}})"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie NoSQL ?",
            "answers" => [
                "Not Only SQL",
                "No Structured Query Language",
                "Non-Sequential Operations",
                "No Server Query Language"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel opérateur est utilisé pour une requête 'et' dans MongoDB ?",
            "answers" => [
                "\$and",
                "\$or",
                "\$not",
                "\$eq"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle commande est utilisée pour limiter le nombre de documents retournés par une requête ?",
            "answers" => [
                "db.collection.find().limit()",
                "db.collection.limit()",
                "db.collection.find().restrict()",
                "db.collection.find().top()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment supprimer un document spécifique dans MongoDB ?",
            "answers" => [
                "db.collection.deleteOne({})",
                "db.collection.removeOne({})",
                "db.collection.delete({})",
                "db.collection.destroy({})"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle commande permet de trier les documents dans MongoDB ?",
            "answers" => [
                "db.collection.find().sort({})",
                "db.collection.sort({})",
                "db.collection.orderBy({})",
                "db.collection.find().orderBy({})"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment compter les documents dans une collection MongoDB ?",
            "answers" => [
                "db.collection.countDocuments()",
                "db.collection.count()",
                "db.collection.getCount()",
                "db.collection.totalCount()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment supprimer une base de données dans MongoDB ?",
            "answers" => [
                "db.dropDatabase()",
                "db.deleteDatabase()",
                "db.removeDatabase()",
                "drop database"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel opérateur est utilisé pour chercher un champ supérieur à une valeur donnée ?",
            "answers" => [
                "\$gt",
                "\$lt",
                "\$gte",
                "\$ne"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle commande permet d'afficher les collections d'une base de données ?",
            "answers" => [
                "show collections",
                "db.showCollections()",
                "db.listCollections()",
                "list collections"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment renommer une collection dans MongoDB ?",
            "answers" => [
                "db.collection.renameCollection('nouveau_nom')",
                "db.collection.rename('nouveau_nom')",
                "db.collection.renameTo('nouveau_nom')",
                "db.rename('collection', 'nouveau_nom')"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la limite maximale de taille pour un document MongoDB ?",
            "answers" => [
                "16 Mo",
                "1 Go",
                "4 Mo",
                "32 Mo"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait l'opérateur `\$aggregate` en MongoDB ?",
            "answers" => [
                "Permet de traiter et d'analyser des données en plusieurs étapes",
                "Ajoute un document à une collection",
                "Supprime des documents en fonction d'une condition",
                "Met à jour plusieurs documents dans une collection"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel opérateur est utilisé pour regrouper des documents dans une agrégation ?",
            "answers" => [
                "\$group",
                "\$match",
                "\$sort",
                "\$project"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait l'opérateur `\$lookup` en MongoDB ?",
            "answers" => [
                "Permet de réaliser une jointure avec une autre collection",
                "Tri les résultats d'une requête",
                "Filtre les documents par condition",
                "Projette uniquement certains champs"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle commande est utilisée pour créer un index dans MongoDB ?",
            "answers" => [
                "db.collection.createIndex()",
                "db.collection.addIndex()",
                "db.createIndex()",
                "db.addIndex()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le rôle d'un index unique dans MongoDB ?",
            "answers" => [
                "Empêche l'insertion de documents avec des valeurs en double pour un champ spécifique",
                "Améliore les performances des requêtes",
                "Trie automatiquement les documents dans la collection",
                "Crée une contrainte de clé primaire"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait la méthode `explain()` en MongoDB ?",
            "answers" => [
                "Fournit des informations sur l'exécution d'une requête",
                "Crée un plan d'exécution pour une requête",
                "Retourne un résumé des collections d'une base de données",
                "Analyse les données d'une collection"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie la notion de shard dans MongoDB ?",
            "answers" => [
                "Une partition des données dans un cluster MongoDB",
                "Un index appliqué à une collection",
                "Un document immuable dans une collection",
                "Un type spécifique de jointure"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le rôle d'un serveur mongos dans MongoDB ?",
            "answers" => [
                "Agir comme routeur pour les requêtes dans un cluster sharding",
                "Gérer les réplicas d'un cluster",
                "Exécuter les agrégations dans un cluster",
                "Créer des indices automatiquement"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait l'opérateur `\$project` dans une agrégation MongoDB ?",
            "answers" => [
                "Sélectionne les champs à inclure ou exclure dans les résultats",
                "Regroupe les documents par une clé spécifique",
                "Trie les documents par ordre croissant ou décroissant",
                "Filtre les documents selon une condition"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode permet de surveiller les modifications en temps réel dans MongoDB ?",
            "answers" => [
                "watch()",
                "observe()",
                "streamChanges()",
                "trackChanges()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie le mode `majority` pour les écritures dans MongoDB ?",
            "answers" => [
                "Les données doivent être confirmées par la majorité des réplicas avant d'être validées",
                "L'écriture est appliquée immédiatement sans confirmation",
                "Les données sont enregistrées uniquement sur le serveur principal",
                "Les données sont confirmées par tous les serveurs du cluster"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel type d'index est utilisé pour des requêtes géospatiales ?",
            "answers" => [
                "2dsphere",
                "geoHash",
                "spatialIndex",
                "2dGrid"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que retourne la méthode `db.collection.stats()` ?",
            "answers" => [
                "Des statistiques sur une collection, comme la taille et le nombre d'index",
                "Le plan d'exécution d'une requête",
                "Les informations sur les utilisateurs de la base",
                "Les modifications récentes de la collection"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode est utilisée pour définir des options de validation de schéma dans MongoDB ?",
            "answers" => [
                "db.createCollection() avec des options",
                "db.collection.validateSchema()",
                "db.setValidationOptions()",
                "db.createSchema()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait l'opérateur `\$unwind` dans une agrégation MongoDB ?",
            "answers" => [
                "Dénormalise un tableau en plusieurs documents",
                "Supprime les doublons d'une collection",
                "Trie les documents en fonction d'une clé",
                "Fusionne plusieurs documents en un seul"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode permet de fusionner deux collections en MongoDB ?",
            "answers" => [
                "\$merge",
                "\$union",
                "\$combine",
                "\$aggregateMerge"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment limiter les données stockées dans une collection MongoDB ?",
            "answers" => [
                "Utiliser une collection capped",
                "Définir une limite via `db.collection.setLimit()`",
                "Créer un index spécifique pour limiter la taille",
                "MongoDB ne permet pas de limiter les données d'une collection"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait la méthode `db.collection.createView()` ?",
            "answers" => [
                "Crée une vue sur les données d'une collection existante",
                "Copie une collection existante",
                "Génère un index sur la collection",
                "Crée une réplique pour la collection"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie la réplication dans MongoDB ?",
            "answers" => [
                "Copier les données entre plusieurs serveurs pour assurer la redondance",
                "Partitionner les données pour améliorer les performances",
                "Créer des indices secondaires",
                "Analyser les données en temps réel"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que retourne la méthode `db.getReplicationInfo()` ?",
            "answers" => [
                "Des informations sur l'état de la réplication dans un cluster",
                "Un résumé des collections répliquées",
                "Un rapport d'utilisation de la base de données",
                "Les journaux de modifications des documents"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait l'opérateur `\$facet` dans une agrégation MongoDB ?",
            "answers" => [
                "Exécute plusieurs pipelines d'agrégation en parallèle",
                "Regroupe des documents par une clé spécifique",
                "Trie les documents par ordre croissant ou décroissant",
                "Projette uniquement certains champs"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie la politique de journalisation Write-Ahead Logging (WAL) dans MongoDB ?",
            "answers" => [
                "Assure que les modifications sont écrites dans un journal avant d'être appliquées à la base",
                "Sauvegarde automatiquement les données à chaque écriture",
                "Active la réplication automatique entre les serveurs",
                "Permet de restaurer des collections supprimées"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le rôle d'un arbiter dans un cluster de réplication MongoDB ?",
            "answers" => [
                "Participer au vote pour élire un primary sans stocker les données",
                "Stocker une copie secondaire des données",
                "Équilibrer la charge entre les réplicas",
                "Effectuer les sauvegardes automatiques"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment MongoDB traite-t-il les données géospatiales en mode `2dsphere` ?",
            "answers" => [
                "Il effectue des calculs géodésiques pour des données sur une sphère",
                "Il effectue des calculs linéaires pour des données en 2D",
                "Il divise les coordonnées en blocs carrés",
                "Il convertit les données géospatiales en JSON"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle commande est utilisée pour définir une stratégie TTL (Time-To-Live) pour une collection ?",
            "answers" => [
                "db.collection.createIndex({ field: 1 }, { expireAfterSeconds: value })",
                "db.collection.setTTL({ field: value })",
                "db.collection.configureTTL(value)",
                "db.collection.setExpiration(value)"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait l'opérateur `\$merge` dans une agrégation MongoDB ?",
            "answers" => [
                "Fusionne le résultat d'une agrégation dans une collection cible",
                "Combine deux collections en une seule",
                "Crée une vue à partir de plusieurs collections",
                "Supprime les doublons des résultats"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait le paramètre `--oplogSize` lors de l'initialisation d'un réplica MongoDB ?",
            "answers" => [
                "Définit la taille maximale de l'oplog en mégaoctets",
                "Fixe la taille maximale des index",
                "Limite la taille des collections sur le nœud primaire",
                "Augmente la mémoire allouée pour les requêtes"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment MongoDB gère-t-il les écritures conflictuelles dans un environnement sharding ?",
            "answers" => [
                "Grâce à un mécanisme de verrouillage basé sur les chunks",
                "En rejetant automatiquement les écritures conflictuelles",
                "En effectuant une fusion automatique des documents",
                "En reportant les conflits au niveau applicatif"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le rôle de l'opérateur `\$redact` dans une agrégation MongoDB ?",
            "answers" => [
                "Restreindre dynamiquement les champs des documents retournés",
                "Exclure les documents ne correspondant pas à un filtre",
                "Projeter uniquement les champs nécessaires",
                "Fusionner plusieurs documents"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode permet de recréer les index d'une collection pour optimiser les performances ?",
            "answers" => [
                "db.collection.reIndex()",
                "db.collection.refreshIndex()",
                "db.collection.rebuildIndexes()",
                "db.collection.optimizeIndexes()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que retourne la méthode `db.currentOp()` en MongoDB ?",
            "answers" => [
                "Les opérations en cours sur l'instance MongoDB",
                "Les journaux d'erreurs récents",
                "L'état actuel des clusters répliqués",
                "La liste des index utilisés"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel mécanisme garantit l'ordre des écritures dans MongoDB ?",
            "answers" => [
                "Le journal de l'oplog",
                "Le mécanisme de verrouillage global",
                "Les transactions multi-documents",
                "Le mode d'écriture `majority`"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait l'opérateur `\$addFields` dans une agrégation MongoDB ?",
            "answers" => [
                "Ajoute de nouveaux champs calculés aux documents",
                "Regroupe les documents par des champs spécifiques",
                "Trie les documents par ordre croissant",
                "Supprime certains champs des documents"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment MongoDB assure-t-il la durabilité des données dans un environnement réplica ?",
            "answers" => [
                "En répliquant les données sur plusieurs serveurs",
                "En verrouillant les documents avant chaque écriture",
                "En sauvegardant automatiquement les index",
                "En utilisant un seul nœud primaire pour toutes les écritures"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est l'objectif principal des transactions multi-documents dans MongoDB ?",
            "answers" => [
                "Garantir la cohérence entre plusieurs documents dans une même opération",
                "Améliorer la vitesse des requêtes",
                "Simplifier les opérations sur des collections volumineuses",
                "Réduire la taille des journaux d'écriture"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment MongoDB gère-t-il la fragmentation des données dans un environnement sharding ?",
            "answers" => [
                "En répartissant les données en chunks basés sur une clé de partition",
                "En triant les données avant leur distribution",
                "En utilisant une indexation unique pour chaque chunk",
                "En répliquant les chunks sur tous les serveurs"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait la méthode `db.collection.getShardDistribution()` ?",
            "answers" => [
                "Affiche la répartition des données entre les shards",
                "Équilibre les chunks entre les shards",
                "Retourne les index utilisés sur chaque shard",
                "Supprime les doublons d'un shard"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment activer la validation des schémas dans une collection MongoDB existante ?",
            "answers" => [
                "db.runCommand({ collMod: 'collection', validator: {...} })",
                "db.collection.enableValidation({...})",
                "db.collection.setValidator({...})",
                "db.collection.validateSchema({...})"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le rôle du `balancer` dans MongoDB ?",
            "answers" => [
                "Équilibrer les chunks entre les shards dans un cluster sharding",
                "Régler les conflits lors des transactions",
                "Optimiser les requêtes entre les réplicas",
                "Répandre les index sur plusieurs serveurs"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la taille maximale d'un index en MongoDB ?",
            "answers" => [
                "1024 octets",
                "4096 octets",
                "8192 octets",
                "2048 octets"
            ],
            "correct" => 1
        ]
    ];
}

public function getQuestionQCMScrum()
{
    return [
        [
            "question" => "Qu'est-ce que Scrum ?",
            "answers" => [
                "Un cadre de travail Agile pour le développement de produits complexes",
                "Un logiciel de gestion de projet",
                "Un processus strict de gestion des tâches",
                "Une méthodologie classique de gestion de projet"
            ],
            "correct" => 0
        ],
        [
            "question" => "Combien de rôles principaux existe-t-il dans Scrum ?",
            "answers" => [
                "3",
                "2",
                "5",
                "4"
            ],
            "correct" => 3
        ],
        [
            "question" => "Quel est le rôle du Scrum Master dans une équipe Scrum ?",
            "answers" => [
                "Développer le produit final",
                "Approuver les demandes des clients",
                "Faciliter le processus Scrum et éliminer les obstacles",
                "Créer des documents de projet"
            ],
            "correct" => 2
        ],
        [
            "question" => "Qui est responsable de maximiser la valeur du produit dans Scrum ?",
            "answers" => [
                "Le Scrum Master",
                "Le Product Owner",
                "L'équipe de développement",
                "Le client"
            ],
            "correct" => 1
        ],
        [
            "question" => "Que contient le Product Backlog dans Scrum ?",
            "answers" => [
                "Un plan détaillé des sprints",
                "Une liste des problèmes rencontrés",
                "Les spécifications techniques complètes",
                "Une liste priorisée des éléments nécessaires au produit"
            ],
            "correct" => 3
        ],
        [
            "question" => "Qu'est-ce qu'un Sprint dans Scrum ?",
            "answers" => [
                "Une période fixe où l'équipe réalise un incrément du produit",
                "Un événement pour discuter des progrès",
                "Une réunion quotidienne",
                "Un diagramme de flux"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la durée typique d'un Sprint dans Scrum ?",
            "answers" => [
                "1 à 4 semaines",
                "1 jour",
                "6 mois",
                "Aucune limite"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que se passe-t-il lors de la réunion de Sprint Planning ?",
            "answers" => [
                "L'équipe planifie le travail à accomplir pendant le Sprint",
                "L'équipe discute des obstacles rencontrés",
                "Le produit est livré au client",
                "Les résultats du Sprint précédent sont examinés"
            ],
            "correct" => 0
        ],
        [
            "question" => "Qu'est-ce qu'un Daily Scrum ?",
            "answers" => [
                "Une réunion quotidienne pour synchroniser l'équipe",
                "Une session de formation pour l'équipe",
                "Un document résumant les progrès quotidiens",
                "Une liste des tâches terminées"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la durée maximale d'un Daily Scrum ?",
            "answers" => [
                "15 minutes",
                "1 heure",
                "30 minutes",
                "Aucune limite"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que se passe-t-il lors d'une Sprint Review ?",
            "answers" => [
                "L'équipe présente l'incrément terminé aux parties prenantes",
                "L'équipe planifie le travail pour le prochain Sprint",
                "L'équipe résout les problèmes rencontrés",
                "Le Product Owner réorganise le backlog"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est l'objectif de la Sprint Retrospective ?",
            "answers" => [
                "Améliorer les processus de l'équipe pour les futurs Sprints",
                "Réviser le backlog produit",
                "Évaluer les performances individuelles",
                "Finaliser l'incrément du produit"
            ],
            "correct" => 0
        ],
        [
            "question" => "Qu'est-ce qu'un incrément dans Scrum ?",
            "answers" => [
                "Une version potentiellement livrable du produit",
                "Un ensemble de tâches non terminées",
                "Un plan détaillé pour le prochain Sprint",
                "Une analyse des obstacles rencontrés"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel document aide à suivre les progrès dans un Sprint ?",
            "answers" => [
                "Le Burndown Chart",
                "Le Product Backlog",
                "Le Sprint Plan",
                "Le Daily Report"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la priorité principale dans Scrum ?",
            "answers" => [
                "Satisfaire le client en livrant rapidement un produit de valeur",
                "Écrire une documentation complète",
                "Respecter strictement le plan initial",
                "Livrer un produit parfait à la fin"
            ],
            "correct" => 0
        ],
        [
            "question" => "Qui peut modifier le Product Backlog ?",
            "answers" => [
                "Le Product Owner",
                "L'équipe de développement",
                "Le Scrum Master",
                "Les parties prenantes"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la meilleure définition d'une User Story ?",
            "answers" => [
                "Une description simple de la fonctionnalité souhaitée du point de vue de l'utilisateur",
                "Un diagramme technique détaillé",
                "Une tâche de développement attribuée à un membre de l'équipe",
                "Une spécification complète d'une fonctionnalité"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie le terme 'Definition of Done' dans Scrum ?",
            "answers" => [
                "Un ensemble de critères définissant si un travail est terminé",
                "La date de fin prévue pour le projet",
                "Une liste des fonctionnalités à livrer",
                "Une métrique pour mesurer la productivité"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la fréquence des Daily Scrums ?",
            "answers" => [
                "Tous les jours",
                "Toutes les semaines",
                "À la fin de chaque Sprint",
                "Une fois par mois"
            ],
            "correct" => 0
        ],
        [
            "question" => "Qui est responsable de livrer un incrément potentiel à chaque Sprint ?",
            "answers" => [
                "L'équipe de développement",
                "Le Product Owner",
                "Le Scrum Master",
                "Le client"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment le Scrum Master gère-t-il les conflits d'équipe dans un environnement complexe ?",
            "answers" => [
                "En favorisant la résolution autonome des conflits par l'équipe",
                "En prenant des décisions pour résoudre le conflit rapidement",
                "En informant les parties prenantes pour qu'elles interviennent",
                "En réaffectant les membres concernés à d'autres équipes"
            ],
            "correct" => 0
        ],
        [
            "question" => "Dans Scrum, comment gérer une demande urgente pendant un Sprint ?",
            "answers" => [
                "Le Product Owner évalue et décide si elle doit être ajoutée au Sprint",
                "Le Scrum Master ajoute la tâche directement au Sprint Backlog",
                "L'équipe de développement interrompt le Sprint pour gérer la demande",
                "La demande est reportée au prochain Sprint"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie 'Scrum of Scrums' ?",
            "answers" => [
                "Une réunion entre plusieurs équipes Scrum pour coordonner leurs efforts",
                "Une méthodologie hybride basée sur Scrum et Kanban",
                "Une pratique pour analyser les performances des équipes",
                "Un cadre pour intégrer les principes Scrum dans une organisation entière"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le principal défi lors de l'adoption de Scrum à l'échelle (Scaled Scrum) ?",
            "answers" => [
                "Maintenir l'auto-organisation tout en coordonnant plusieurs équipes",
                "Former chaque membre aux pratiques Scrum",
                "Mettre à jour les outils de gestion des tâches",
                "Respecter strictement les rôles traditionnels"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment mesurer la valeur métier générée par un Sprint ?",
            "answers" => [
                "En évaluant l'impact des incréments livrés sur les objectifs métier",
                "En comptant le nombre de Story Points terminés",
                "En comparant la vélocité avec celle des Sprints précédents",
                "En analysant le taux de satisfaction de l'équipe"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie 'Nexus' dans le cadre de Scrum ?",
            "answers" => [
                "Un cadre pour coordonner le travail de plusieurs équipes Scrum",
                "Un rôle supplémentaire introduit dans Scrum",
                "Un outil pour suivre les progrès d'un projet",
                "Une méthodologie alternative à Scrum"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la principale responsabilité du Product Owner dans un environnement multiprojet ?",
            "answers" => [
                "Gérer les priorités entre plusieurs produits tout en maximisant la valeur",
                "Superviser directement les équipes de développement",
                "S'assurer que tous les Sprints se terminent à temps",
                "Créer une documentation exhaustive pour chaque produit"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que faire si une équipe Scrum n'atteint pas son Sprint Goal à répétition ?",
            "answers" => [
                "Analyser les causes lors des rétrospectives et adapter les processus",
                "Réduire la taille de l'équipe",
                "Augmenter la durée des Sprints",
                "Changer les membres de l'équipe"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie 'Technical Excellence' dans un contexte Scrum ?",
            "answers" => [
                "Maintenir un haut niveau de qualité dans le code et les pratiques techniques",
                "Livrer les tâches techniques avant les fonctionnalités métier",
                "Documenter tous les aspects techniques du projet",
                "Réduire au minimum le temps consacré aux tests"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment le Scrum Master contribue-t-il à l'adoption de Scrum dans une organisation ?",
            "answers" => [
                "En formant les parties prenantes et en aidant à adapter les pratiques Scrum",
                "En gérant directement les projets",
                "En assignant des tâches aux membres des équipes",
                "En rédigeant une documentation détaillée sur Scrum"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment Scrum gère-t-il la dette technique dans un projet à long terme ?",
            "answers" => [
                "En intégrant des tâches de refactorisation dans le Sprint Backlog",
                "En ajoutant une étape dédiée à la résolution technique après chaque Sprint",
                "En augmentant la durée des Sprints pour inclure plus de tests",
                "En minimisant les fonctionnalités livrées pour réduire la complexité"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie 'Empowerment' dans une équipe Scrum ?",
            "answers" => [
                "Donner à l'équipe la responsabilité et l'autorité nécessaires pour prendre des décisions",
                "Assigner des tâches spécifiques à chaque membre de l'équipe",
                "Former un responsable pour superviser l'équipe",
                "Réduire les réunions pour laisser plus de temps au développement"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel outil est utilisé pour suivre les dépendances entre plusieurs équipes Scrum ?",
            "answers" => [
                "Un tableau de gestion des dépendances ou un Sprint Nexus Board",
                "Le Product Backlog principal",
                "Les rétrospectives des équipes",
                "Le diagramme de vélocité"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie 'Fail Fast' dans un projet Scrum ?",
            "answers" => [
                "Identifier et résoudre rapidement les problèmes ou idées qui ne fonctionnent pas",
                "Terminer les Sprints le plus rapidement possible",
                "Abandonner les projets avec des défis techniques",
                "Réduire la documentation pour accélérer le développement"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment Scrum assure-t-il la transparence dans un projet à grande échelle ?",
            "answers" => [
                "En utilisant des outils visibles à tous, comme le Product Backlog et les Burndown Charts",
                "En organisant des réunions hebdomadaires avec la direction",
                "En créant des rapports détaillés pour chaque équipe",
                "En limitant les interactions entre les équipes"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la meilleure approche pour intégrer une nouvelle équipe dans un projet Scrum ?",
            "answers" => [
                "Former la nouvelle équipe sur les principes Scrum et lui assigner un mentor",
                "Ajouter la nouvelle équipe directement au projet sans formation préalable",
                "Créer une réunion quotidienne dédiée pour la nouvelle équipe",
                "Doubler la durée des Sprints pendant la période d'intégration"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie le terme 'Agile Scaling Framework' en lien avec Scrum ?",
            "answers" => [
                "Un ensemble de pratiques pour appliquer Scrum à de grands projets",
                "Un processus pour intégrer plusieurs méthodologies agiles",
                "Un outil pour mesurer la performance des équipes Scrum",
                "Un cadre pour gérer les dépendances dans les projets Scrum"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment un Product Owner peut-il prioriser efficacement un backlog complexe ?",
            "answers" => [
                "En utilisant des techniques comme MoSCoW ou WSJF (Weighted Shortest Job First)",
                "En traitant les tâches les plus simples en premier",
                "En déléguant la priorisation à l'équipe de développement",
                "En éliminant les tâches non techniques"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la principale métrique pour mesurer le succès d'une implémentation Scrum ?",
            "answers" => [
                "La valeur métier livrée aux parties prenantes",
                "La vitesse de développement des équipes",
                "Le respect des délais initiaux",
                "Le nombre de fonctionnalités terminées"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment Scrum gère-t-il les imprévus dans un environnement multiprojets ?",
            "answers" => [
                "En maintenant une flexibilité dans les priorités et en favorisant la communication entre les équipes",
                "En prolongeant la durée des Sprints pour inclure les imprévus",
                "En demandant aux Scrum Masters de prendre toutes les décisions",
                "En ajoutant des membres supplémentaires à l'équipe"
            ],
            "correct" => 0
        ]
    ];
}

public function getQuestionQCMPrototypage()
{
    return [
        [
            "question" => "Qu'est-ce que le prototypage en conception de produits ?",
            "answers" => [
                "Créer une version simplifiée d'un produit pour tester des idées",
                "Développer un produit complet dès le départ",
                "Créer des documents techniques détaillés",
                "Lancer directement le produit sur le marché"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est l'objectif principal du prototypage ?",
            "answers" => [
                "Réduire les coûts de production",
                "Créer un produit final",
                "Documenter toutes les fonctionnalités",
                "Tester et valider des idées rapidement"
            ],
            "correct" => 3
        ],
        [
            "question" => "Qu'est-ce qu'un prototype basse fidélité ?",
            "answers" => [
                "Une version 3D réaliste",
                "Une représentation simple du produit, souvent dessinée à la main",
                "Un produit prêt pour le marché",
                "Un prototype entièrement fonctionnel"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel outil est couramment utilisé pour les prototypes basse fidélité ?",
            "answers" => [
                "Unity",
                "Adobe XD",
                "Papier et crayon",
                "Figma"
            ],
            "correct" => 2
        ],
        [
            "question" => "Qu'est-ce qu'un prototype haute fidélité ?",
            "answers" => [
                "Un produit finalisé",
                "Une version interactive et détaillée du produit",
                "Un simple croquis sur papier",
                "Un concept théorique"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est l'avantage des prototypes basse fidélité ?",
            "answers" => [
                "Ils nécessitent peu de tests utilisateur",
                "Ils sont rapides et peu coûteux à créer",
                "Ils peuvent être directement commercialisés",
                "Ils représentent un produit fini"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quand le prototypage est-il généralement utilisé ?",
            "answers" => [
                "Après le lancement du produit",
                "Juste avant la production en masse",
                "Uniquement pour corriger les défauts",
                "Pendant les premières phases de conception"
            ],
            "correct" => 3
        ],
        [
            "question" => "Quel est l'objectif principal d'un test utilisateur avec un prototype ?",
            "answers" => [
                "Déterminer les coûts de fabrication",
                "Lancer le produit immédiatement",
                "Recueillir des retours pour améliorer le produit",
                "Finaliser la conception technique"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quels matériaux peuvent être utilisés pour un prototype physique ?",
            "answers" => [
                "Plastique uniquement",
                "Carton, papier, mousse",
                "Métal uniquement",
                "Bois uniquement"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle est une limite des prototypes basse fidélité ?",
            "answers" => [
                "Ils coûtent cher",
                "Ils prennent beaucoup de temps à créer",
                "Ils ne montrent pas toutes les fonctionnalités interactives",
                "Ils ne peuvent pas être testés avec les utilisateurs"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quel logiciel est souvent utilisé pour le prototypage numérique haute fidélité ?",
            "answers" => [
                "Excel",
                "Word",
                "Photoshop",
                "Figma"
            ],
            "correct" => 3
        ],
        [
            "question" => "Que signifie 'prototype interactif' ?",
            "answers" => [
                "Un produit final",
                "Un simple croquis annoté",
                "Un prototype qui permet une navigation et des interactions simulées",
                "Un prototype entièrement fonctionnel"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quelle est l'étape suivante après la création d'un prototype ?",
            "answers" => [
                "Tester le prototype avec des utilisateurs",
                "Documenter le projet",
                "Produire en masse",
                "Lancer le produit sur le marché"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est un exemple de prototype non numérique ?",
            "answers" => [
                "Une application mobile",
                "Un croquis papier",
                "Un site web",
                "Une maquette 3D sur ordinateur"
            ],
            "correct" => 1
        ],
        [
            "question" => "Qu'est-ce qu'un wireframe ?",
            "answers" => [
                "Une liste des fonctionnalités du produit",
                "Une animation 3D réaliste",
                "Un prototype physique",
                "Un schéma simplifié représentant la structure d'un produit numérique"
            ],
            "correct" => 3
        ],
        [
            "question" => "Quel est un objectif clé des wireframes ?",
            "answers" => [
                "Définir la structure et la hiérarchie du contenu",
                "Créer des animations pour le produit",
                "Tester toutes les fonctionnalités techniques",
                "Réaliser une simulation réaliste"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel rôle joue le prototypage dans la méthode Agile ?",
            "answers" => [
                "Fournir des itérations rapides pour tester et valider des idées",
                "Créer des spécifications détaillées avant le développement",
                "Finaliser le produit avant tout retour utilisateur",
                "Réduire le nombre de réunions nécessaires"
            ],
            "correct" => 0
        ],
        [
            "question" => "Pourquoi est-il important de tester un prototype avec des utilisateurs finaux ?",
            "answers" => [
                "Pour identifier les problèmes potentiels et recueillir des retours",
                "Pour valider les coûts de production",
                "Pour finaliser la documentation technique",
                "Pour vérifier que le produit est prêt pour la commercialisation"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie 'fail fast' dans le contexte du prototypage ?",
            "answers" => [
                "Produire un prototype à faible coût",
                "Tester rapidement pour identifier les erreurs tôt dans le processus",
                "Lancer le produit rapidement pour concurrencer le marché",
                "Ignorer les retours des utilisateurs pour gagner du temps"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est un bénéfice clé du prototypage pour les parties prenantes ?",
            "answers" => [
                "Visualiser les concepts avant le développement final",
                "Éliminer tous les risques techniques",
                "Réduire les coûts de fabrication",
                "Générer automatiquement un produit final"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la principale différence entre un prototype basse fidélité et un prototype haute fidélité ?",
            "answers" => [
                "Un prototype haute fidélité est toujours physique",
                "La complexité et le niveau de détail",
                "Le coût de fabrication",
                "Un prototype basse fidélité est interactif"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est un avantage clé des prototypes interactifs haute fidélité ?",
            "answers" => [
                "Ils nécessitent peu de tests",
                "Ils n'incluent que les aspects visuels",
                "Ils permettent de tester l'expérience utilisateur réelle",
                "Ils sont peu coûteux et rapides à produire"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quand un prototype haute fidélité est-il le plus utile ?",
            "answers" => [
                "Pour documenter les spécifications du projet",
                "Pour résoudre des problèmes techniques spécifiques",
                "Lors des premières phases de conception",
                "Lorsqu'on veut valider l'expérience utilisateur avant le développement final"
            ],
            "correct" => 3
        ],
        [
            "question" => "Quelle technique est couramment utilisée pour prototyper une interface utilisateur complexe ?",
            "answers" => [
                "Créer un document texte détaillant les fonctionnalités",
                "Utiliser des blocs de mousse pour simuler l'interface",
                "Utiliser un outil comme Figma ou Adobe XD",
                "Dessiner des wireframes sur papier"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quel est un inconvénient d'un prototype haute fidélité ?",
            "answers" => [
                "Ils ne donnent qu'une vision approximative du produit final",
                "Ils peuvent nécessiter plus de temps et de ressources à produire",
                "Ils ne permettent pas de tester les fonctionnalités interactives",
                "Ils ne sont pas adaptés aux tests utilisateurs"
            ],
            "correct" => 1
        ],
        [
            "question" => "Qu'est-ce que le prototypage incrémental ?",
            "answers" => [
                "Tester le produit final uniquement",
                "Fabriquer plusieurs prototypes en parallèle",
                "Produire un prototype détaillé dès le début",
                "Créer des prototypes successifs en ajoutant des fonctionnalités à chaque étape"
            ],
            "correct" => 3
        ],
        [
            "question" => "Comment le prototypage aide-t-il à réduire les risques dans un projet ?",
            "answers" => [
                "En remplaçant les tests finaux par des simulations",
                "En éliminant complètement les retours des utilisateurs",
                "En réduisant la durée du développement",
                "En identifiant les problèmes tôt dans le processus de conception"
            ],
            "correct" => 3
        ],
        [
            "question" => "Quel est le rôle du prototypage dans une méthode Agile ?",
            "answers" => [
                "Créer un produit final prêt pour le marché",
                "Optimiser la production à grande échelle",
                "Tester et valider rapidement les hypothèses",
                "Documenter toutes les spécifications techniques"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quel est l'objectif principal des tests utilisateurs avec un prototype avancé ?",
            "answers" => [
                "Mesurer les performances techniques du produit",
                "Valider les fonctionnalités et l'expérience utilisateur",
                "Créer un plan de mise en production",
                "Finaliser les spécifications techniques"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle est une bonne pratique pour améliorer un prototype interactif ?",
            "answers" => [
                "Collecter régulièrement des retours d'utilisateurs",
                "Le tester uniquement en interne",
                "Minimiser les fonctionnalités pour accélérer les tests",
                "Ne pas inclure de visuels interactifs"
            ],
            "correct" => 0
        ],
        [
            "question" => "Pourquoi utiliser un prototype évolutif ?",
            "answers" => [
                "Pour économiser les coûts de développement",
                "Pour tester chaque fonctionnalité au fur et à mesure qu'elle est ajoutée",
                "Pour remplacer les tests finaux",
                "Pour livrer le produit final plus rapidement"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel outil est le plus adapté pour prototyper une application mobile ?",
            "answers" => [
                "Unity",
                "Adobe Photoshop",
                "Figma ou Adobe XD",
                "Microsoft Word"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quelle est l'étape suivante après avoir validé un prototype haute fidélité ?",
            "answers" => [
                "Produire le produit final",
                "Effectuer une analyse coût-bénéfice",
                "Planifier les prochaines itérations basées sur les retours",
                "Créer des spécifications pour le développement"
            ],
            "correct" => 2
        ],
        [
            "question" => "Qu'est-ce qu'une maquette fonctionnelle ?",
            "answers" => [
                "Un prototype détaillé avec des interactions simulées",
                "Un croquis papier sans détails techniques",
                "Une maquette qui inclut uniquement les visuels",
                "Un document décrivant les fonctionnalités"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quand faut-il privilégier un prototype non numérique ?",
            "answers" => [
                "Pour des interfaces utilisateur complexes",
                "Lors des phases de brainstorming ou pour des idées conceptuelles",
                "Pour tester l'expérience utilisateur d'une application",
                "Pour créer une démonstration client"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle est une limite des outils de prototypage numérique ?",
            "answers" => [
                "Ils ne permettent pas de tester l'expérience utilisateur",
                "Ils sont limités à des conceptions basse fidélité",
                "Ils peuvent nécessiter une expertise technique avancée",
                "Ils ne peuvent pas inclure d'interactions"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quelle est une caractéristique essentielle d'un bon prototype interactif ?",
            "answers" => [
                "Reproduire l'expérience utilisateur cible",
                "Éviter les visuels détaillés",
                "Inclure uniquement les fonctionnalités principales",
                "Être livré directement au client"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie 'wireframe avancé' dans le contexte du prototypage ?",
            "answers" => [
                "Une structure visuelle détaillée incluant des interactions de base",
                "Un produit final prêt pour la production",
                "Un croquis simplifié sans détails techniques",
                "Une démonstration physique du produit"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment optimiser le coût du prototypage haute fidélité ?",
            "answers" => [
                "Utiliser des outils open source et limiter les tests inutiles",
                "Réduire le nombre d'interactions",
                "Créer uniquement des maquettes visuelles",
                "N'utiliser que des croquis papier"
            ],
            "correct" => 0
        ],
        [
            "question" => "Pourquoi un prototype avancé est-il utile lors de la phase de pré-développement ?",
            "answers" => [
                "Pour anticiper les problèmes techniques ou d'expérience utilisateur",
                "Pour remplacer les tests finaux",
                "Pour éviter les retours d'utilisateurs",
                "Pour finaliser directement le produit"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est l'objectif principal d'un prototype interactif haute fidélité dans un projet complexe ?",
            "answers" => [
                "Éliminer complètement les tests utilisateurs",
                "Créer un produit prêt pour la commercialisation",
                "Tester les interactions et l'expérience utilisateur en conditions réalistes",
                "Minimiser les coûts de développement"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quel est un défi majeur lié au prototypage rapide dans des projets de grande échelle ?",
            "answers" => [
                "La dépendance à des croquis papier uniquement",
                "L'incapacité à produire des visuels haute fidélité",
                "La difficulté à obtenir des retours utilisateurs pertinents rapidement",
                "Les coûts élevés des outils de prototypage"
            ],
            "correct" => 2
        ],
        [
            "question" => "Que signifie le terme 'prototype itératif' ?",
            "answers" => [
                "Un produit fini développé dès le début",
                "Un prototype construit en plusieurs étapes successives avec des améliorations continues",
                "Une maquette statique sans interactions",
                "Un croquis basse fidélité"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel outil est le mieux adapté pour intégrer des animations complexes dans un prototype ?",
            "answers" => [
                "Microsoft Word",
                "Balsamiq",
                "Adobe After Effects",
                "Figma"
            ],
            "correct" => 2
        ],
        [
            "question" => "Pourquoi le prototypage interactif est-il crucial dans un projet de conception UX complexe ?",
            "answers" => [
                "Pour remplacer les tests finaux",
                "Pour documenter l'ensemble des spécifications techniques",
                "Pour valider les hypothèses d'interaction utilisateur avant le développement",
                "Pour réduire les coûts de production"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quelle est une limite majeure des prototypes haute fidélité ?",
            "answers" => [
                "Ils nécessitent plus de temps et de ressources pour être créés",
                "Ils ne conviennent qu'aux interfaces simples",
                "Ils ne peuvent pas inclure d'interactions",
                "Ils ne sont pas utiles pour les tests utilisateurs"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quand faut-il utiliser un prototype physique dans un projet ?",
            "answers" => [
                "Pour tester l'expérience utilisateur dans une interface mobile",
                "Pour créer un produit prêt pour la fabrication",
                "Pour remplacer les maquettes numériques",
                "Pour tester des aspects ergonomiques ou structurels d'un produit tangible"
            ],
            "correct" => 3
        ],
        [
            "question" => "Comment le prototypage avancé aide-t-il à aligner les parties prenantes dans un projet complexe ?",
            "answers" => [
                "En réduisant les coûts du projet",
                "En éliminant complètement les retours des utilisateurs",
                "En remplaçant les discussions par des rapports techniques",
                "En fournissant une visualisation concrète des idées"
            ],
            "correct" => 3
        ],
        [
            "question" => "Quel est le rôle du prototypage dans la gestion des risques d'un projet ?",
            "answers" => [
                "Il augmente le temps de développement",
                "Il permet d'identifier et de résoudre les problèmes potentiels avant la production",
                "Il remplace les tests finaux",
                "Il élimine le besoin de retours utilisateurs"
            ],
            "correct" => 1
        ],
        [
            "question" => "Pourquoi le 'Design Thinking' est-il important dans le processus de prototypage ?",
            "answers" => [
                "Il se concentre sur la création de solutions centrées sur l'utilisateur",
                "Il réduit les coûts de fabrication",
                "Il élimine la nécessité de tests utilisateurs",
                "Il accélère la production en masse"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est l'avantage d'utiliser un 'Wizard of Oz' prototype ?",
            "answers" => [
                "Tester des fonctionnalités complexes sans développement complet",
                "Réduire le besoin d'interactions humaines",
                "Automatiser le processus de prototypage",
                "Créer un produit final sans passer par des itérations"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment le prototypage peut-il influencer la prise de décision stratégique ?",
            "answers" => [
                "En fournissant des données tangibles sur la faisabilité et l'acceptation",
                "En retardant le lancement du produit",
                "En augmentant les coûts opérationnels",
                "En limitant la créativité de l'équipe"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le principal défi du prototypage d'un système intégré complexe (hardware et software) ?",
            "answers" => [
                "La nécessité d'une coordination étroite entre les équipes multidisciplinaires",
                "Le manque d'outils de prototypage disponibles",
                "L'impossibilité de tester les interactions",
                "Le coût négligeable du matériel"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle approche est la plus efficace pour le prototypage d'une interface utilisateur utilisant l'intelligence artificielle ?",
            "answers" => [
                "Simuler les réponses de l'IA avec des scripts préprogrammés",
                "Développer entièrement l'algorithme d'IA avant de prototyper",
                "Ignorer les fonctionnalités d'IA dans le prototype",
                "Utiliser uniquement des maquettes statiques"
            ],
            "correct" => 0
        ],
        [
            "question" => "Pourquoi est-il important de considérer l'accessibilité lors du prototypage ?",
            "answers" => [
                "Pour s'assurer que le produit est utilisable par le plus grand nombre d'utilisateurs",
                "Pour réduire le temps de développement",
                "Pour limiter les fonctionnalités du prototype",
                "Pour éviter les tests utilisateurs"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est l'impact du prototypage sur le cycle de vie du produit ?",
            "answers" => [
                "Il accélère la phase de déclin",
                "Il retarde le lancement du produit",
                "Il améliore la qualité globale et la pertinence du produit sur le marché",
                "Il augmente les coûts sans bénéfices tangibles"
            ],
            "correct" => 2
        ],
        [
            "question" => "Comment le prototypage s'intègre-t-il dans la méthodologie Lean Startup ?",
            "answers" => [
                "En créant un produit minimum viable (MVP) pour tester rapidement le marché",
                "En développant toutes les fonctionnalités avant de tester le marché",
                "En évitant les itérations pour accélérer le lancement",
                "En se focalisant uniquement sur les aspects techniques"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le principal avantage de l'utilisation de la réalité virtuelle dans le prototypage ?",
            "answers" => [
                "Réduire les coûts de production",
                "Permettre une immersion totale pour tester des environnements complexes",
                "Simplifier le processus de conception",
                "Éliminer le besoin de prototypes physiques"
            ],
            "correct" => 1
        ],
        [
            "question" => "Lors du prototypage d'un service, quelle est une pratique efficace ?",
            "answers" => [
                "Créer un scénario détaillé et le jouer avec des acteurs",
                "Se concentrer uniquement sur les outils numériques",
                "Développer le service complet avant de le tester",
                "Éviter l'implication des clients réels"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel rôle joue le prototypage dans l'innovation disruptive ?",
            "answers" => [
                "Il permet de tester et valider rapidement des idées radicales avec un investissement minimal",
                "Il empêche les changements majeurs en limitant les itérations",
                "Il se concentre sur l'amélioration des produits existants uniquement",
                "Il est moins pertinent pour les innovations disruptives"
            ],
            "correct" => 0
        ]
    ];
}

public function getQuestionQCMSQL() 
{
    return [
        [
            "question" => "Quel mot-clé est utilisé pour récupérer des données d'une table en SQL ?",
            "answers" => ["GET", "SELECT", "FETCH", "RETRIEVE"],
            "correct" => 2
        ],
        [
            "question" => "Quel mot-clé est utilisé pour insérer des données dans une table en SQL ?",
            "answers" => ["INSERT INTO", "ADD TO", "PUT INTO", "UPDATE"],
            "correct" => 1
        ],
        [
            "question" => "Quelle commande est utilisée pour supprimer des données d'une table en SQL ?",
            "answers" => ["REMOVE", "DELETE", "DROP", "CLEAR"],
            "correct" => 2
        ],
        [
            "question" => "Quel mot-clé est utilisé pour modifier des données existantes dans une table en SQL ?",
            "answers" => ["MODIFY", "CHANGE", "UPDATE", "SET"],
            "correct" => 3
        ],
        [
            "question" => "Quel mot-clé est utilisé pour créer une nouvelle table en SQL ?",
            "answers" => ["CREATE TABLE", "ADD TABLE", "NEW TABLE", "MAKE TABLE"],
            "correct" => 1
        ],
        [
            "question" => "Que signifie SQL ?",
            "answers" => ["Structured Query Language", "System Query Language", "Simple Query Language", "Standard Query Language"],
            "correct" => 1
        ],
        [
            "question" => "Quelle clause est utilisée pour filtrer les résultats d'une requête SQL ?",
            "answers" => ["WHERE", "HAVING", "FILTER", "SELECT"],
            "correct" => 1
        ],
        [
            "question" => "Quel mot-clé permet de trier les résultats en SQL ?",
            "answers" => ["SORT BY", "ORDER BY", "GROUP BY", "RANK BY"],
            "correct" => 2
        ],
        [
            "question" => "Quel mot-clé est utilisé pour éviter les doublons dans les résultats SQL ?",
            "answers" => ["UNIQUE", "DISTINCT", "FILTER", "REMOVE DUPLICATES"],
            "correct" => 2
        ],
        [
            "question" => "Quelle clause est utilisée pour regrouper les données en SQL ?",
            "answers" => ["GROUP BY", "ORDER BY", "BUNDLE BY", "GATHER BY"],
            "correct" => 1
        ],
        [
            "question" => "Quel opérateur est utilisé pour rechercher une correspondance partielle dans une colonne texte en SQL ?",
            "answers" => ["LIKE", "MATCH", "SEARCH", "FIND"],
            "correct" => 1
        ],
        [
            "question" => "Comment s'appelle la commande qui supprime une table en SQL ?",
            "answers" => ["DROP TABLE", "DELETE TABLE", "REMOVE TABLE", "CLEAR TABLE"],
            "correct" => 1
        ],
        [
            "question" => "Quel type de jointure affiche toutes les correspondances entre deux tables ?",
            "answers" => ["INNER JOIN", "LEFT JOIN", "RIGHT JOIN", "FULL JOIN"],
            "correct" => 1
        ],
        [
            "question" => "Quel type de jointure affiche tous les résultats d'une table même sans correspondance dans l'autre table ?",
            "answers" => ["INNER JOIN", "LEFT JOIN", "RIGHT JOIN", "FULL JOIN"],
            "correct" => 2
        ],
        [
            "question" => "Quelle commande est utilisée pour modifier la structure d'une table existante en SQL ?",
            "answers" => ["ALTER TABLE", "MODIFY TABLE", "UPDATE TABLE", "CHANGE TABLE"],
            "correct" => 1
        ],
        [
            "question" => "Quel type de clé est utilisé pour identifier chaque ligne de manière unique dans une table ?",
            "answers" => ["Primary Key", "Foreign Key", "Unique Key", "Index Key"],
            "correct" => 1
        ],
        [
            "question" => "Quel mot-clé est utilisé pour limiter le nombre de résultats d'une requête SQL ?",
            "answers" => ["LIMIT", "TOP", "ROWNUM", "MAX"],
            "correct" => 1
        ],
        [
            "question" => "Quelle commande est utilisée pour ajouter une nouvelle colonne à une table existante ?",
            "answers" => ["ADD COLUMN", "ALTER COLUMN", "INSERT COLUMN", "MODIFY COLUMN"],
            "correct" => 1
        ],
        [
            "question" => "Quelle commande SQL est utilisée pour ajouter une contrainte de clé étrangère ?",
            "answers" => ["ADD FOREIGN KEY", "ALTER FOREIGN KEY", "SET FOREIGN KEY", "INSERT FOREIGN KEY"],
            "correct" => 1
        ],
        [
            "question" => "Quel mot-clé est utilisé pour calculer des agrégats comme la somme ou la moyenne en SQL ?",
            "answers" => ["SUM", "COUNT", "AGGREGATE", "GROUP BY"],
            "correct" => 1
        ],
        [
            "question" => "Quelle commande SQL est utilisée pour créer une vue ?",
            "answers" => ["CREATE VIEW", "MAKE VIEW", "NEW VIEW", "VIEW CREATE"],
            "correct" => 1
        ],
        [
            "question" => "Quelle clause permet d'utiliser une fonction d'agrégation tout en filtrant les résultats groupés ?",
            "answers" => ["GROUP BY", "HAVING", "WHERE", "FILTER"],
            "correct" => 2
        ],
        [
            "question" => "Quel type de jointure SQL permet de combiner toutes les lignes des deux tables, qu'elles correspondent ou non ?",
            "answers" => ["INNER JOIN", "FULL OUTER JOIN", "LEFT JOIN", "CROSS JOIN"],
            "correct" => 2
        ],
        [
            "question" => "Quelle clause SQL est utilisée pour combiner les résultats de plusieurs requêtes ?",
            "answers" => ["UNION", "JOIN", "MERGE", "COMBINE"],
            "correct" => 1
        ],
        [
            "question" => "Quelle est la différence entre UNION et UNION ALL en SQL ?",
            "answers" => [
                "UNION filtre les doublons, UNION ALL non.",
                "UNION combine uniquement des colonnes identiques, UNION ALL non.",
                "UNION est plus rapide que UNION ALL.",
                "UNION ajoute un tri automatique des résultats, UNION ALL non."
            ],
            "correct" => 1
        ],
        [
            "question" => "Comment définir une contrainte de clé étrangère dans une table SQL ?",
            "answers" => [
                "FOREIGN KEY (colonne) REFERENCES table(colonne)",
                "SET FOREIGN KEY table.colonne",
                "LINK TO table.colonne",
                "ADD FOREIGN KEY TO colonne"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel type d'index est utilisé pour optimiser les recherches full-text dans une table SQL ?",
            "answers" => ["Full-Text Index", "Clustered Index", "Hash Index", "Unique Index"],
            "correct" => 1
        ],
        [
            "question" => "Quel mot-clé SQL permet de gérer une transaction ?",
            "answers" => ["BEGIN TRANSACTION", "START TRANSACTION", "MANAGE TRANSACTION", "NEW TRANSACTION"],
            "correct" => 2
        ],
        [
            "question" => "Quel mot-clé SQL est utilisé pour annuler une transaction ?",
            "answers" => ["ROLLBACK", "UNDO", "CANCEL", "REVERSE"],
            "correct" => 1
        ],
        [
            "question" => "Quelle commande est utilisée pour optimiser la structure physique d'une table pour améliorer les performances ?",
            "answers" => ["OPTIMIZE TABLE", "ANALYZE TABLE", "REFORMAT TABLE", "INDEX TABLE"],
            "correct" => 1
        ],
        [
            "question" => "Quelle commande SQL permet de vérifier les permissions d'un utilisateur sur une base de données ?",
            "answers" => ["SHOW GRANTS", "CHECK PRIVILEGES", "USER PERMISSIONS", "LIST ROLES"],
            "correct" => 1
        ],
        [
            "question" => "Quel mot-clé est utilisé pour définir une contrainte unique sur une colonne ?",
            "answers" => ["UNIQUE", "DISTINCT", "PRIMARY", "INDEX"],
            "correct" => 1
        ],
        [
            "question" => "Quelle clause SQL est utilisée pour limiter les résultats retournés par une requête ?",
            "answers" => ["LIMIT", "TOP", "ROW LIMIT", "OFFSET"],
            "correct" => 1
        ],
        [
            "question" => "Quelle commande permet de supprimer une contrainte d'une table en SQL ?",
            "answers" => ["ALTER TABLE ... DROP CONSTRAINT", "DELETE CONSTRAINT", "REMOVE CONSTRAINT", "DROP RULE"],
            "correct" => 1
        ],
        [
            "question" => "Quel type d'index permet de stocker les données directement dans les feuilles d'un arbre B-Tree ?",
            "answers" => ["Clustered Index", "Non-Clustered Index", "Full-Text Index", "Bitmap Index"],
            "correct" => 1
        ],
        [
            "question" => "Quelle clause permet de filtrer les résultats avant qu'ils ne soient groupés ?",
            "answers" => ["WHERE", "HAVING", "GROUP BY", "FILTER"],
            "correct" => 1
        ],
        [
            "question" => "Comment insérer des données provenant d'une autre table dans une table existante ?",
            "answers" => [
                "INSERT INTO table SELECT ...",
                "COPY FROM table TO ...",
                "CLONE INTO table ...",
                "MERGE SELECT ... INTO table"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est le rôle d'un index dans une base de données ?",
            "answers" => [
                "Améliorer la vitesse d'exécution des requêtes.",
                "Empêcher les doublons dans une table.",
                "Restreindre l'accès à une colonne.",
                "Organiser les données dans des clusters."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle commande permet de verrouiller une table pour empêcher les modifications concurrentes ?",
            "answers" => ["LOCK TABLE", "BLOCK TABLE", "HOLD TABLE", "FREEZE TABLE"],
            "correct" => 1
        ],
        [
            "question" => "Comment combiner des lignes d'une table pour créer un résumé statistique en SQL ?",
            "answers" => ["GROUP BY", "SUMMARIZE BY", "COLLECT BY", "ANALYZE BY"],
            "correct" => 1
        ],
        [
            "question" => "Quel est le rôle des CTE (Common Table Expressions) en SQL ?",
            "answers" => [
                "Créer des requêtes temporaires pour simplifier les requêtes complexes.",
                "Indexer une table pour accélérer les performances.",
                "Gérer les transactions dans une base de données.",
                "Créer des vues permanentes dans une base de données."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle commande permet de gérer les privilèges avancés sur une base de données en SQL ?",
            "answers" => ["GRANT", "ALTER PRIVILEGES", "ASSIGN RIGHTS", "SET PERMISSIONS"],
            "correct" => 1
        ],
        [
            "question" => "Quelle méthode est utilisée pour optimiser les performances des requêtes impliquant de grandes quantités de données ?",
            "answers" => ["Partitionnement", "Clustering", "Indexation bitmap", "Toutes ces réponses"],
            "correct" => 4
        ],
        [
            "question" => "Quel type de vue est recalculé à chaque exécution de la requête associée ?",
            "answers" => ["Vue normale", "Vue matérialisée", "Vue indexée", "Vue temporaire"],
            "correct" => 1
        ],
        [
            "question" => "Comment mettre à jour une vue matérialisée en SQL ?",
            "answers" => ["REFRESH MATERIALIZED VIEW", "UPDATE VIEW", "ALTER MATERIALIZED VIEW", "RELOAD VIEW"],
            "correct" => 1
        ],
        [
            "question" => "Quelle est la différence entre un index normal et un index bitmap ?",
            "answers" => [
                "L'index bitmap est utilisé pour les colonnes à faible cardinalité.",
                "L'index normal est plus rapide pour les colonnes numériques.",
                "L'index bitmap est utilisé pour les bases de données relationnelles distribuées.",
                "L'index normal ne supporte pas les colonnes avec des valeurs nulles."
            ],
            "correct" => 1
        ],
        [
            "question" => "Comment éviter un deadlock dans une base de données SQL ?",
            "answers" => [
                "Utiliser une stratégie de verrouillage hiérarchique.",
                "Désactiver les transactions concurrentes.",
                "Augmenter la taille des caches.",
                "Définir des index uniques sur toutes les tables."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel algorithme est utilisé par les bases de données pour exécuter une jointure hash ?",
            "answers" => ["Hash Join", "Nested Loop Join", "Sort-Merge Join", "Cluster Join"],
            "correct" => 1
        ],
        [
            "question" => "Quelle est l'utilité principale des tables pivot en SQL ?",
            "answers" => [
                "Transformer les lignes en colonnes et vice-versa.",
                "Indexation croisée des tables.",
                "Accélérer les jointures complexes.",
                "Générer des statistiques de base de données."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel mot-clé est utilisé pour appliquer une fonction de fenêtrage (window function) ?",
            "answers" => ["OVER", "WINDOW", "PARTITION", "FRAME"],
            "correct" => 1
        ],
        [
            "question" => "Quelle est la différence entre RANK() et DENSE_RANK() dans une fonction de fenêtre ?",
            "answers" => [
                "RANK() laisse des écarts dans le classement, DENSE_RANK() non.",
                "RANK() est plus rapide que DENSE_RANK().",
                "RANK() ne supporte pas la clause ORDER BY.",
                "Il n'y a pas de différence entre les deux."
            ],
            "correct" => 1
        ],
        [
            "question" => "Comment les bases de données relationnelles gèrent-elles les relations many-to-many ?",
            "answers" => [
                "En utilisant une table intermédiaire.",
                "En utilisant une clé composite.",
                "En indexant directement les deux tables.",
                "En créant une jointure permanente."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle clause permet de créer des colonnes dérivées dans une requête SQL complexe ?",
            "answers" => ["WITH", "CASE", "DERIVED COLUMN", "AS"],
            "correct" => 2
        ],
        [
            "question" => "Quelle est la meilleure méthode pour insérer un grand volume de données dans une base relationnelle ?",
            "answers" => [
                "Utiliser des fichiers batch et des commandes de chargement.",
                "Insérer les données ligne par ligne.",
                "Créer un index avant d'insérer les données.",
                "Utiliser des transactions imbriquées pour chaque ligne."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle commande permet de renommer une colonne dans une table SQL ?",
            "answers" => [
                "ALTER TABLE ... RENAME COLUMN ...",
                "UPDATE TABLE ... RENAME COLUMN ...",
                "RENAME TABLE COLUMN ...",
                "CHANGE COLUMN NAME ..."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel opérateur SQL est utilisé pour gérer des données JSON dans une table relationnelle ?",
            "answers" => ["->", "=>", ".", ":"],
            "correct" => 1
        ],
        [
            "question" => "Quelle commande SQL est utilisée pour analyser les statistiques d'une table pour l'optimiseur ?",
            "answers" => ["ANALYZE TABLE", "OPTIMIZE TABLE", "STATISTICS TABLE", "INDEX ANALYSIS"],
            "correct" => 1
        ],
        [
            "question" => "Comment les bases relationnelles supportent-elles les transactions distribuées ?",
            "answers" => [
                "En utilisant le protocole 2PC (Two-Phase Commit).",
                "En verrouillant toutes les tables concernées.",
                "En exécutant les transactions sur un seul serveur.",
                "En utilisant des fichiers de logs."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle fonction SQL avancée est utilisée pour identifier les modèles dans des séries temporelles ?",
            "answers" => ["Lag/Lead", "RANK", "PATTERN MATCH", "ROLLUP"],
            "correct" => 1
        ],
        [
            "question" => "Quelle commande permet de générer un arbre hiérarchique dans une table SQL ?",
            "answers" => ["WITH RECURSIVE", "HIERARCHY BY", "GROUP RECURSIVE", "TREE GENERATE"],
            "correct" => 1
        ]
    ];
}

public function getQuestionQCMUI() 
{
    return [
        [
            "question" => "Qu'est-ce qu'une interface utilisateur (UI) ?",
            "answers" => [
                "La partie d'un système avec laquelle l'utilisateur interagit.",
                "Le backend d'un site web.",
                "Le système d'exploitation utilisé par un ordinateur.",
                "Le design de la base de données."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est l'objectif principal d'une bonne interface utilisateur ?",
            "answers" => [
                "Faciliter l'utilisation du produit.",
                "Ajouter des effets visuels complexes.",
                "Rendre le code plus rapide.",
                "Créer des animations sophistiquées."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle couleur est souvent utilisée pour indiquer une action dangereuse ou une erreur dans une UI ?",
            "answers" => ["Rouge", "Vert", "Bleu", "Jaune"],
            "correct" => 1
        ],
        [
            "question" => "Quel principe de design consiste à rendre les actions faciles à comprendre pour l'utilisateur ?",
            "answers" => ["Simplicité", "Accessibilité", "Équilibre", "Conformité"],
            "correct" => 1
        ],
        [
            "question" => "Quelle est l'utilité principale des icônes dans une interface utilisateur ?",
            "answers" => [
                "Communiquer rapidement des idées ou des actions.",
                "Ajouter des décorations au design.",
                "Remplir des espaces vides.",
                "Réduire la vitesse de chargement de la page."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle unité est la plus couramment utilisée pour définir des tailles en CSS pour une interface utilisateur ?",
            "answers" => ["px", "em", "%", "rem"],
            "correct" => 1
        ],
        [
            "question" => "Quel élément HTML est le plus souvent utilisé pour les boutons dans une interface utilisateur ?",
            "answers" => ["&ltbutton&gt", "&ltdiv&gt", "&lta&gt", "&ltinput&gt"],
            "correct" => 1
        ],
        [
            "question" => "Que signifie le terme 'responsive design' ?",
            "answers" => [
                "Un design qui s'adapte à différentes tailles d'écran.",
                "Un design qui répond aux commentaires des utilisateurs.",
                "Un design qui est rapide à charger.",
                "Un design qui utilise uniquement HTML."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel framework CSS est couramment utilisé pour créer des interfaces utilisateur ?",
            "answers" => ["Bootstrap", "Laravel", "Django", "Node.js"],
            "correct" => 1
        ],
        [
            "question" => "Quel outil est utilisé pour créer des prototypes d'interface utilisateur ?",
            "answers" => ["Figma", "PHP", "MySQL", "Git"],
            "correct" => 1
        ],
        [
            "question" => "Quel attribut HTML est utilisé pour fournir un texte alternatif à une image ?",
            "answers" => ["alt", "title", "src", "text"],
            "correct" => 1
        ],
        [
            "question" => "Quel principe de design consiste à rendre les interfaces cohérentes dans leur utilisation ?",
            "answers" => ["Uniformité", "Simplicité", "Responsabilité", "Minimalisme"],
            "correct" => 1
        ],
        [
            "question" => "Quelle couleur est souvent utilisée pour indiquer une action réussie dans une interface utilisateur ?",
            "answers" => ["Vert", "Rouge", "Bleu", "Orange"],
            "correct" => 1
        ],
        [
            "question" => "Quel est un exemple d'élément interactif dans une UI ?",
            "answers" => ["Un bouton", "Une image statique", "Un titre", "Un paragraphe"],
            "correct" => 1
        ],
        [
            "question" => "Quel est un exemple d'élément de navigation dans une interface utilisateur ?",
            "answers" => ["Un menu", "Un paragraphe", "Un graphique", "Une image"],
            "correct" => 1
        ],
        [
            "question" => "Que signifie le terme 'wireframe' en design d'interface utilisateur ?",
            "answers" => [
                "Un schéma de base montrant la structure d'une interface.",
                "Un design final avec tous les détails.",
                "Un concept graphique animé.",
                "Un fichier CSS utilisé pour styliser une interface."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel type d'élément UI est utilisé pour permettre à un utilisateur de sélectionner une seule option parmi plusieurs ?",
            "answers" => ["Radio button", "Checkbox", "Dropdown", "Slider"],
            "correct" => 1
        ],
        [
            "question" => "Que signifie 'UI/UX' ?",
            "answers" => [
                "Interface Utilisateur et Expérience Utilisateur",
                "Interface Universelle et Utilisation Expérimentale",
                "Utilisation et Intégration",
                "Interface et Utilité"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est un bon exemple d'accessibilité dans une UI ?",
            "answers" => [
                "Utiliser des contrastes élevés pour le texte.",
                "Ajouter des animations complexes.",
                "Utiliser uniquement des images sans texte.",
                "Ajouter des couleurs vives partout."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est un exemple d'élément visuel statique dans une UI ?",
            "answers" => ["Une image", "Un bouton", "Un formulaire", "Un slider"],
            "correct" => 1
        ],
        [
            "question" => "Qu'est-ce que le Material Design en UI ?",
            "answers" => [
                "Un langage de design développé par Google.",
                "Un framework CSS pour créer des animations.",
                "Un outil de prototypage d'interfaces.",
                "Un type de design minimaliste sans couleurs."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel concept UI permet de guider l'utilisateur dans l'accomplissement d'une tâche complexe ?",
            "answers" => ["Onboarding", "Affordance", "Wireframing", "Responsive Design"],
            "correct" => 1
        ],
        [
            "question" => "Que signifie le principe de 'feedback' en UI ?",
            "answers" => [
                "Donner une réponse visuelle ou sonore aux actions de l'utilisateur.",
                "Créer un design basé sur les commentaires des utilisateurs.",
                "Mettre à jour une interface en temps réel.",
                "Permettre à l'utilisateur d'ajouter des avis."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est un exemple de micro-interaction dans une interface utilisateur ?",
            "answers" => [
                "Un bouton qui change de couleur au survol.",
                "Une page complète avec des animations complexes.",
                "Un formulaire de contact.",
                "Un menu déroulant statique."
            ],
            "correct" => 1
        ],
        [
            "question" => "Que signifie 'progressive disclosure' en UI ?",
            "answers" => [
                "Afficher les informations par étapes pour éviter de surcharger l'utilisateur.",
                "Rendre une interface entièrement accessible dès le départ.",
                "Ajouter des animations pour rendre l'interface plus attrayante.",
                "Réduire le nombre de couleurs dans une interface."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel outil est couramment utilisé pour tester les performances des interfaces utilisateur ?",
            "answers" => ["Lighthouse", "Photoshop", "Figma", "Illustrator"],
            "correct" => 1
        ],
        [
            "question" => "Que signifie 'affordance' en design d'interface utilisateur ?",
            "answers" => [
                "Les indices visuels qui indiquent comment utiliser un élément.",
                "La compatibilité d'une interface avec plusieurs appareils.",
                "L'ajout d'animations pour améliorer l'expérience utilisateur.",
                "La capacité d'une interface à répondre aux commandes vocales."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel type de design est utilisé pour créer une expérience cohérente sur différents appareils ?",
            "answers" => ["Responsive Design", "Flat Design", "Material Design", "Dark Mode"],
            "correct" => 1
        ],
        [
            "question" => "Que signifie le concept de 'mobile-first' en UI ?",
            "answers" => [
                "Concevoir d'abord pour les appareils mobiles, puis adapter pour les écrans plus grands.",
                "Créer une interface exclusivement pour les appareils mobiles.",
                "Ignorer les appareils mobiles dans le design initial.",
                "Créer des applications uniquement compatibles avec iOS."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle est la différence entre une interface utilisateur 'flat' et 'skeuomorphic' ?",
            "answers" => [
                "Le design 'flat' est minimaliste et le 'skeuomorphic' imite le monde réel.",
                "Le design 'skeuomorphic' est utilisé pour les sites modernes.",
                "Le design 'flat' utilise des animations 3D.",
                "Il n'y a pas de différence, ce sont des synonymes."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est un bon exemple de principe de 'consistance' en UI ?",
            "answers" => [
                "Utiliser les mêmes couleurs et styles sur toutes les pages.",
                "Ajouter des animations à chaque clic.",
                "Changer de police sur chaque section d'une page.",
                "Utiliser des transitions complexes sur tous les éléments."
            ],
            "correct" => 1
        ],
        [
            "question" => "Que signifie le concept de 'dark mode' en UI ?",
            "answers" => [
                "Une interface avec des couleurs sombres pour réduire la fatigue visuelle.",
                "Un design minimaliste sans lumière.",
                "Un mode utilisé uniquement pour les développeurs.",
                "Un design qui fonctionne uniquement sur des appareils spécifiques."
            ],
            "correct" => 1
        ],
        [
            "question" => "Comment les tests A/B sont-ils utilisés dans le design UI ?",
            "answers" => [
                "Pour comparer deux versions d'une interface et déterminer laquelle fonctionne le mieux.",
                "Pour tester la compatibilité entre deux navigateurs.",
                "Pour comparer les performances de deux bases de données.",
                "Pour identifier les bugs dans le code source."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est un avantage du design modulaire en UI ?",
            "answers" => [
                "Réutiliser des composants pour accélérer le développement.",
                "Créer un style unique pour chaque page.",
                "Ajouter des animations plus rapidement.",
                "Réduire la nécessité de tests utilisateurs."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel concept UI est utilisé pour hiérarchiser les informations visuelles ?",
            "answers" => [
                "Hiérarchie visuelle", 
                "Affordance", 
                "Feedback", 
                "Conception modulaire"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle est l'utilité principale d'une palette de couleurs en UI ?",
            "answers" => [
                "Créer une expérience cohérente et esthétique.",
                "Rendre le site plus rapide.",
                "Optimiser les animations.",
                "Ajouter des fonctionnalités techniques."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est un exemple de mauvaise pratique en UI ?",
            "answers" => [
                "Utiliser trop de styles différents dans une même interface.",
                "Fournir des retours visuels clairs pour les actions de l'utilisateur.",
                "Organiser les informations de manière logique.",
                "Créer des designs responsives pour différents appareils."
            ],
            "correct" => 1
        ],
        [
            "question" => "Que signifie le terme 'loading skeleton' en design UI ?",
            "answers" => [
                "Un élément visuel qui montre qu'une page est en cours de chargement.",
                "Une méthode pour réduire la taille des fichiers CSS.",
                "Un framework pour optimiser le chargement d'images.",
                "Un outil pour ajouter des animations dans une interface."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel concept UI améliore l'expérience utilisateur en anticipant ses besoins ?",
            "answers" => ["Design proactif", "Affordance", "Feedback", "Responsive Design"],
            "correct" => 1
        ],
        [
            "question" => "Quel outil permet d'analyser le chemin des utilisateurs dans une application ?",
            "answers" => ["Google Analytics", "Figma", "Sketch", "Adobe XD"],
            "correct" => 1
        ],
        [
            "question" => "Qu'est-ce que l'Atomic Design en UI ?",
            "answers" => [
                "Une méthodologie de design basée sur la création de composants réutilisables.",
                "Un framework CSS pour des animations complexes.",
                "Un outil de prototypage UI avancé.",
                "Un type de design basé sur des modèles dynamiques."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle est la différence clé entre les UX personas et les UI personas ?",
            "answers" => [
                "Les UX personas se concentrent sur les besoins des utilisateurs, tandis que les UI personas se concentrent sur l'interaction visuelle.",
                "Les UX personas incluent des données démographiques, contrairement aux UI personas.",
                "Les UX personas sont utilisés pour le marketing, les UI personas pour le développement.",
                "Les UX personas se concentrent sur les performances techniques, les UI personas sur l'esthétique."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est l'objectif principal de l'utilisation de Design Tokens en UI ?",
            "answers" => [
                "Créer une source unique de vérité pour la gestion des styles.",
                "Accélérer les animations d'interface.",
                "Permettre l'utilisation de frameworks JS dans le design.",
                "Optimiser les images dans les interfaces."
            ],
            "correct" => 1
        ],
        [
            "question" => "Comment le Grid System est-il utilisé dans la conception UI ?",
            "answers" => [
                "Pour organiser le contenu en colonnes et lignes cohérentes.",
                "Pour créer des animations fluides.",
                "Pour automatiser les tests de performance UI.",
                "Pour générer automatiquement des palettes de couleurs."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est le rôle des variables CSS dans un design scalable ?",
            "answers" => [
                "Permettre une gestion centralisée des couleurs, des tailles et des espacements.",
                "Créer des animations dynamiques.",
                "Gérer les versions des fichiers CSS.",
                "Optimiser les requêtes media pour le responsive design."
            ],
            "correct" => 1
        ],
        [
            "question" => "Que signifie le terme 'motion design' en UI ?",
            "answers" => [
                "L'utilisation d'animations pour guider l'attention des utilisateurs.",
                "La conception de structures de données dynamiques.",
                "L'intégration de vidéos interactives dans l'interface.",
                "L'optimisation des performances des transitions entre les écrans."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle est la fonction des 'States' dans une librairie comme React pour les UI ?",
            "answers" => [
                "Gérer les interactions et les changements dynamiques de l'interface.",
                "Stocker des images dans le navigateur.",
                "Optimiser les performances CSS.",
                "Créer des layouts flexibles et responsives."
            ],
            "correct" => 1
        ],
        [
            "question" => "Que signifie l'approche 'Design System First' en UI ?",
            "answers" => [
                "Commencer par établir un système de design pour assurer la cohérence et la scalabilité.",
                "Utiliser uniquement des bibliothèques prêtes à l'emploi.",
                "Prioriser les animations dans l'interface.",
                "Créer des designs statiques avant toute interaction."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est le but principal des tests heuristiques en design UI ?",
            "answers" => [
                "Identifier les problèmes d'utilisabilité en utilisant des principes éprouvés.",
                "Mesurer la vitesse de chargement d'une interface.",
                "Créer des prototypes interactifs.",
                "Tester les performances des composants graphiques."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle est la différence principale entre le 'Flat Design' et le 'Neumorphism' en UI ?",
            "answers" => [
                "Le 'Flat Design' est minimaliste, tandis que le 'Neumorphism' utilise des ombres réalistes pour imiter la profondeur.",
                "Le 'Flat Design' est basé sur des animations 3D.",
                "Le 'Neumorphism' est conçu pour les appareils tactiles uniquement.",
                "Le 'Flat Design' utilise des transitions complexes."
            ],
            "correct" => 1
        ],
        [
            "question" => "Qu'est-ce que la gestion des 'Z-index' en CSS apporte aux designs avancés ?",
            "answers" => [
                "Contrôle de l'empilement des éléments pour créer des interfaces dynamiques.",
                "Optimisation des couleurs pour l'accessibilité.",
                "Gestion des dimensions des images responsives.",
                "Réduction de la latence des animations."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle est l'utilité principale de l'ARIA (Accessible Rich Internet Applications) en UI ?",
            "answers" => [
                "Rendre les interfaces accessibles aux utilisateurs ayant des handicaps.",
                "Créer des designs dynamiques avec des animations.",
                "Simplifier l'intégration des vidéos interactives.",
                "Optimiser les performances des designs responsives."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est le principal avantage des Progressive Web Apps (PWA) en termes d'interface utilisateur ?",
            "answers" => [
                "Offrir une expérience utilisateur native sur le web.",
                "Permettre un stockage illimité pour les données utilisateurs.",
                "Créer des designs uniquement pour les appareils mobiles.",
                "Éviter l'utilisation de frameworks CSS."
            ],
            "correct" => 1
        ],
        [
            "question" => "Qu'est-ce qu'une 'breaking point' dans le responsive design avancé ?",
            "answers" => [
                "Une largeur d'écran à partir de laquelle la mise en page doit changer.",
                "Une erreur critique dans le chargement CSS.",
                "Un point où les animations doivent s'arrêter.",
                "Une fonctionnalité pour basculer entre les thèmes clairs et sombres."
            ],
            "correct" => 1
        ],
        [
            "question" => "Que signifie le principe d'accessibilité 'Perceivable' en UI ?",
            "answers" => [
                "Tous les contenus doivent être visibles ou interprétables par l'utilisateur.",
                "L'interface doit être rapide à charger.",
                "Le contenu doit être protégé contre les modifications.",
                "L'interface doit fonctionner uniquement sur des appareils modernes."
            ],
            "correct" => 1
        ],
        [
            "question" => "Comment les 'grid areas' CSS sont-elles utilisées pour améliorer la disposition UI ?",
            "answers" => [
                "Définir des zones spécifiques pour positionner les éléments de manière précise.",
                "Créer des animations complexes.",
                "Réduire la taille des fichiers CSS.",
                "Gérer les transitions dynamiques entre les écrans."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle méthode est utilisée pour implémenter les 'dark modes' automatiquement selon les préférences système ?",
            "answers" => [
                "Préférence CSS media query 'prefers-color-scheme'.",
                "Scripts JavaScript uniquement.",
                "Ajout d'une classe spécifique à l'HTML.",
                "Utilisation de variables globales CSS."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est un avantage clé de l'utilisation de CSS-in-JS dans les interfaces utilisateur modernes ?",
            "answers" => [
                "Permettre le style dynamique basé sur l'état des composants.",
                "Réduire le temps de chargement des images.",
                "Créer des animations 3D complexes.",
                "Optimiser les performances réseau."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel framework est le plus adapté pour créer des composants UI réactifs et interactifs ?",
            "answers" => ["React", "WordPress", "Laravel", "Spring Boot"],
            "correct" => 1
        ],
        [
            "question" => "Quel outil est souvent utilisé pour créer des animations avancées en UI ?",
            "answers" => ["GSAP (GreenSock Animation Platform)", "Bootstrap", "Figma", "Vue.js"],
            "correct" => 1
        ]
    ];
}

public function getQuestionQCMUX() 
{
    return [
        [
            "question" => "Qu'est-ce que l'UX (User Experience) ?",
            "answers" => [
                "Le processus de test de performance des serveurs.",
                "Le design graphique d'une interface.",
                "Le développement backend d'une application.",
                "L'expérience globale d'un utilisateur avec un produit ou un service."
            ],
            "correct" => 3
        ],
        [
            "question" => "Quel est l'objectif principal de l'UX ?",
            "answers" => [
                "Ajouter des animations complexes.",
                "Créer une interface colorée.",
                "Améliorer la satisfaction de l'utilisateur.",
                "Augmenter la vitesse du backend."
            ],
            "correct" => 2
        ],
        [
            "question" => "Que signifie le terme 'persona' en UX ?",
            "answers" => [
                "Un outil de développement backend.",
                "Une police utilisée pour le design.",
                "Un modèle de données utilisé dans une application.",
                "Un profil fictif représentant un utilisateur type."
            ],
            "correct" => 3
        ],
        [
            "question" => "Qu'est-ce qu'un wireframe en UX ?",
            "answers" => [
                "Un framework pour le développement d'applications.",
                "Un outil utilisé pour tester les serveurs.",
                "Un schéma de base montrant la structure d'une interface.",
                "Un prototype finalisé d'une application."
            ],
            "correct" => 2
        ],
        [
            "question" => "Quel outil est couramment utilisé pour créer des prototypes en UX ?",
            "answers" => [
                "PHP",
                "Laravel",
                "Figma",
                "MySQL"
            ],
            "correct" => 2
        ],
        [
            "question" => "Que signifie le principe de 'simplicité' en UX ?",
            "answers" => [
                "Réduire le nombre de tests nécessaires.",
                "Rendre les interfaces faciles à comprendre et à utiliser.",
                "Utiliser des couleurs vives partout.",
                "Ajouter des animations complexes."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est un exemple de mauvaise pratique en UX ?",
            "answers" => [
                "Créer des designs accessibles à tous.",
                "Fournir des retours clairs pour les actions utilisateur.",
                "Organiser le contenu de manière logique.",
                "Surcharger une page avec trop d'informations."
            ],
            "correct" => 3
        ],
        [
            "question" => "Que signifie le terme 'accessibilité' en UX ?",
            "answers" => [
                "Créer des animations fluides.",
                "Concevoir un design minimaliste.",
                "Rendre un produit utilisable par tous, y compris les personnes en situation de handicap.",
                "Rendre une application plus rapide."
            ],
            "correct" => 2
        ],
        [
            "question" => "Quel est le rôle des tests utilisateurs en UX ?",
            "answers" => [
                "Créer le backend d'une application.",
                "Tester les serveurs.",
                "Optimiser les performances réseau.",
                "Évaluer l'efficacité et la facilité d'utilisation d'un produit."
            ],
            "correct" => 3
        ],
        [
            "question" => "Que signifie le terme 'onboarding' en UX ?",
            "answers" => [
                "Un processus de test de sécurité.",
                "Le processus d'accompagnement de l'utilisateur lors de sa première utilisation d'un produit.",
                "Un outil pour optimiser les performances.",
                "Une méthode pour concevoir des bases de données."
            ],
            "correct" => 1
        ],
        [
            "question" => "Que signifie le concept 'Mobile-First' en UX ?",
            "answers" => [
                "Tester uniquement sur les appareils mobiles.",
                "Créer un design exclusivement pour mobile.",
                "Optimiser une interface pour les navigateurs.",
                "Concevoir d'abord pour les appareils mobiles, puis adapter pour les écrans plus grands."
            ],
            "correct" => 3
        ],
        [
            "question" => "Quel est un bon exemple de feedback en UX ?",
            "answers" => [
                "Un formulaire de contact.",
                "Un long texte explicatif.",
                "Une image statique.",
                "Un message confirmant la réussite d'une action."
            ],
            "correct" => 3
        ],
        [
            "question" => "Quelle est la différence entre l'UI et l'UX ?",
            "answers" => [
                "L'UI et l'UX sont la même chose.",
                "L'UI se concentre uniquement sur les tests utilisateurs.",
                "L'UI concerne le design visuel, l'UX l'expérience globale de l'utilisateur.",
                "L'UX est plus technique que l'UI."
            ],
            "correct" => 2
        ],
        [
            "question" => "Quel est le rôle des scénarios utilisateur en UX ?",
            "answers" => [
                "Optimiser la vitesse d'une application.",
                "Décrire comment un utilisateur interagit avec un produit pour atteindre un objectif spécifique.",
                "Tester les animations d'une interface.",
                "Développer le backend d'une application."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel principe UX consiste à réduire la charge cognitive de l'utilisateur ?",
            "answers" => [
                "Simplicité",
                "Accessibilité",
                "Feedback",
                "Personnalisation"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est un bon exemple de navigation intuitive en UX ?",
            "answers" => [
                "Des menus bien organisés et faciles à comprendre.",
                "Changer la disposition des menus sur chaque page.",
                "Ajouter des animations sur chaque lien.",
                "Utiliser des couleurs très vives pour chaque bouton."
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le principal objectif des tests A/B en UX ?",
            "answers" => [
                "Optimiser les animations CSS.",
                "Réduire la taille des images.",
                "Tester la compatibilité avec différents navigateurs.",
                "Comparer deux versions d'une interface pour voir laquelle fonctionne le mieux."
            ],
            "correct" => 3
        ],
        [
            "question" => "Que signifie le principe 'Don’t Make Me Think' en UX ?",
            "answers" => [
                "Créer des interfaces intuitives qui ne demandent pas d'effort pour être utilisées.",
                "Minimiser l'utilisation des outils tiers.",
                "Éviter d'ajouter des animations inutiles.",
                "Rendre le code facile à comprendre pour les développeurs."
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel outil est couramment utilisé pour analyser l'expérience utilisateur sur un site web ?",
            "answers" => [
                "Figma",
                "MySQL Workbench",
                "PHPStorm",
                "Google Analytics"
            ],
            "correct" => 3
        ],
        [
            "question" => "Quelle métrique mesure la durée moyenne pendant laquelle un utilisateur reste sur une page ?",
            "answers" => [
                "Conversion",
                "Taux de rebond",
                "Pages vues",
                "Temps de session"
            ],
            "correct" => 3
        ],
        [
            "question" => "Qu'est-ce que le test d'utilisabilité en UX ?",
            "answers" => [
                "Un test pour mesurer le temps de chargement d'une page.",
                "Un test pour vérifier les performances des serveurs.",
                "Un outil pour optimiser les animations dans une interface.",
                "Un processus permettant d'évaluer la facilité d'utilisation d'un produit par des utilisateurs réels."
            ],
            "correct" => 3
        ],
        [
            "question" => "Quelle méthode UX est utilisée pour comprendre les besoins profonds des utilisateurs ?",
            "answers" => [
                "Le suivi de session.",
                "Les tests A/B.",
                "Les entretiens utilisateurs.",
                "Le wireframing."
            ],
            "correct" => 2
        ],
        [
            "question" => "Que signifie le concept de 'heuristiques de Nielsen' en UX ?",
            "answers" => [
                "Un framework pour créer des animations.",
                "Une méthode pour analyser les tests A/B.",
                "Un ensemble de principes pour évaluer l'utilisabilité d'une interface.",
                "Une technique pour optimiser le backend d'un site."
            ],
            "correct" => 2
        ],
        [
            "question" => "Quel est l'objectif des personas en UX avancé ?",
            "answers" => [
                "Créer des profils fictifs pour mieux comprendre les différents types d'utilisateurs.",
                "Rendre une interface compatible avec tous les navigateurs.",
                "Tester les performances techniques d'une interface.",
                "Améliorer le design visuel."
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le rôle du 'mapping des parcours utilisateur' en UX ?",
            "answers" => [
                "Tester les couleurs utilisées dans une interface.",
                "Créer un prototype statique.",
                "Suivre les étapes qu'un utilisateur traverse pour atteindre ses objectifs.",
                "Optimiser les performances du site."
            ],
            "correct" => 2
        ],
        [
            "question" => "Que signifie 'affordance' en UX ?",
            "answers" => [
                "Une méthode pour analyser les tests A/B.",
                "Une indication visuelle ou tactile sur la manière d'utiliser un élément.",
                "Un processus pour tester les couleurs d'une interface.",
                "Un concept pour optimiser les données utilisateur."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel outil est couramment utilisé pour l'analyse de cartes de chaleur (heatmaps) ?",
            "answers" => [
                "Laravel.",
                "Hotjar.",
                "Figma.",
                "MySQL."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est l'objectif des tests A/B en UX avancé ?",
            "answers" => [
                "Créer un prototype statique.",
                "Comparer deux versions d'une interface pour voir laquelle fonctionne le mieux.",
                "Optimiser les animations CSS.",
                "Tester les couleurs utilisées dans une interface."
            ],
            "correct" => 1
        ],
        [
            "question" => "Que signifie 'empathie' en UX ?",
            "answers" => [
                "L'ajout de fonctionnalités spécifiques pour les développeurs.",
                "La capacité à comprendre et à ressentir les besoins des utilisateurs.",
                "L'utilisation d'outils analytiques avancés.",
                "L'optimisation des tests d'utilisabilité."
            ],
            "correct" => 1
        ],
        [
            "question" => "Que signifie 'feedback' en UX avancé ?",
            "answers" => [
                "Ajouter des animations complexes.",
                "Fournir des indications claires aux utilisateurs après une action.",
                "Tester les performances du backend.",
                "Améliorer la vitesse des transitions."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle est la différence entre UX et CX (Customer Experience) ?",
            "answers" => [
                "L'UX se concentre sur une expérience globale de l'utilisateur avec un produit spécifique, tandis que le CX englobe toutes les interactions avec une marque.",
                "L'UX est centrée sur le design, le CX sur la programmation.",
                "Le CX est une sous-partie de l'UX.",
                "L'UX et le CX sont la même chose."
            ],
            "correct" => 0
        ],
        [
            "question" => "Qu'est-ce qu'une carte d'empathie en UX ?",
            "answers" => [
                "Un outil pour suivre les données d'un utilisateur.",
                "Un outil graphique qui aide à comprendre ce que pense, ressent, dit et fait un utilisateur.",
                "Un framework de développement.",
                "Un outil d'analyse de données."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est un bon exemple de micro-interaction en UX avancé ?",
            "answers" => [
                "Un effet visuel sur un bouton lorsqu'il est cliqué.",
                "Le chargement complet d'une page.",
                "L'utilisation de vidéos interactives.",
                "L'affichage d'une liste déroulante."
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie 'journey mapping' en UX ?",
            "answers" => [
                "Analyser les interactions backend pour optimiser les performances.",
                "Créer une carte détaillant les étapes de l'utilisateur avec un produit ou un service.",
                "Ajouter des micro-interactions dans un design.",
                "Tester les performances du design."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle méthode est utilisée pour prioriser les problèmes identifiés dans les tests utilisateurs ?",
            "answers" => [
                "La matrice d'impact-effort.",
                "Le tri par cartes.",
                "Les entretiens individuels.",
                "Le mapping heuristique."
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment les heatmaps aident-elles en UX avancé ?",
            "answers" => [
                "Elles montrent les zones où les utilisateurs interagissent le plus sur une interface.",
                "Elles améliorent les animations.",
                "Elles testent la vitesse des pages.",
                "Elles analysent les parcours utilisateur dans le backend."
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est le rôle des wireframes en UX avancé ?",
            "answers" => [
                "Créer un prototype final.",
                "Définir la structure et le contenu d'une interface avant le design détaillé.",
                "Tester la compatibilité des couleurs.",
                "Analyser les retours utilisateurs."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle métrique UX mesure la facilité avec laquelle un utilisateur atteint ses objectifs sur un site ?",
            "answers" => [
                "Taux de conversion.",
                "Taux de succès.",
                "Taux de rebond.",
                "Temps moyen sur la page."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est un exemple de friction en UX ?",
            "answers" => [
                "Des étapes inutiles dans un formulaire.",
                "Une interaction fluide avec un menu déroulant.",
                "Un retour immédiat après une action.",
                "Une interface simple et intuitive."
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie le concept de 'Design Thinking' en UX avancé ?",
            "answers" => [
                "Une méthodologie de résolution de problèmes centrée sur l'utilisateur.",
                "Un processus pour tester les performances d'une interface.",
                "L'utilisation de frameworks CSS avancés.",
                "Un outil pour mesurer l'impact des micro-interactions."
            ],
            "correct" => 0
        ],
        [
            "question" => "Qu'est-ce que le test d'utilisabilité en UX ?",
            "answers" => [
                "Un outil pour optimiser les animations dans une interface.",
                "Un processus permettant d'évaluer la facilité d'utilisation d'un produit par des utilisateurs réels.",
                "Un test pour vérifier les performances des serveurs.",
                "Un test pour mesurer le temps de chargement d'une page."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle méthode UX est utilisée pour comprendre les besoins profonds des utilisateurs ?",
            "answers" => [
                "Le wireframing.",
                "Le suivi de session.",
                "Les entretiens utilisateurs.",
                "Les tests A/B."
            ],
            "correct" => 2
        ],
        [
            "question" => "Que signifie le concept de 'heuristiques de Nielsen' en UX ?",
            "answers" => [
                "Un ensemble de principes pour évaluer l'utilisabilité d'une interface.",
                "Une méthode pour analyser les tests A/B.",
                "Une technique pour optimiser le backend d'un site.",
                "Un framework pour créer des animations."
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est l'objectif des personas en UX avancé ?",
            "answers" => [
                "Tester les performances techniques d'une interface.",
                "Créer des profils fictifs pour mieux comprendre les différents types d'utilisateurs.",
                "Rendre une interface compatible avec tous les navigateurs.",
                "Améliorer le design visuel."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est le rôle du 'mapping des parcours utilisateur' en UX ?",
            "answers" => [
                "Optimiser les performances du site.",
                "Tester les couleurs utilisées dans une interface.",
                "Créer un prototype statique.",
                "Suivre les étapes qu'un utilisateur traverse pour atteindre ses objectifs."
            ],
            "correct" => 3
        ],
        [
            "question" => "Que signifie 'affordance' en UX ?",
            "answers" => [
                "Un concept pour optimiser les données utilisateur.",
                "Une indication visuelle ou tactile sur la manière d'utiliser un élément.",
                "Une méthode pour analyser les tests A/B.",
                "Un processus pour tester les couleurs d'une interface."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel outil est couramment utilisé pour l'analyse de cartes de chaleur (heatmaps) ?",
            "answers" => [
                "Hotjar.",
                "Figma.",
                "Laravel.",
                "MySQL."
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est l'objectif des tests A/B en UX avancé ?",
            "answers" => [
                "Optimiser les animations CSS.",
                "Créer un prototype statique.",
                "Comparer deux versions d'une interface pour voir laquelle fonctionne le mieux.",
                "Tester les couleurs utilisées dans une interface."
            ],
            "correct" => 2
        ],
        [
            "question" => "Que signifie 'empathie' en UX ?",
            "answers" => [
                "L'utilisation d'outils analytiques avancés.",
                "L'ajout de fonctionnalités spécifiques pour les développeurs.",
                "La capacité à comprendre et à ressentir les besoins des utilisateurs.",
                "L'optimisation des tests d'utilisabilité."
            ],
            "correct" => 2
        ],
        [
            "question" => "Que signifie 'feedback' en UX avancé ?",
            "answers" => [
                "Améliorer la vitesse des transitions.",
                "Fournir des indications claires aux utilisateurs après une action.",
                "Tester les performances du backend.",
                "Ajouter des animations complexes."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle est la différence entre UX et CX (Customer Experience) ?",
            "answers" => [
                "L'UX et le CX sont la même chose.",
                "Le CX est une sous-partie de l'UX.",
                "L'UX se concentre sur une expérience globale de l'utilisateur avec un produit spécifique, tandis que le CX englobe toutes les interactions avec une marque.",
                "L'UX est centrée sur le design, le CX sur la programmation."
            ],
            "correct" => 2
        ],
        [
            "question" => "Qu'est-ce qu'une carte d'empathie en UX ?",
            "answers" => [
                "Un framework de développement.",
                "Un outil graphique qui aide à comprendre ce que pense, ressent, dit et fait un utilisateur.",
                "Un outil pour suivre les données d'un utilisateur.",
                "Un outil d'analyse de données."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est un bon exemple de micro-interaction en UX avancé ?",
            "answers" => [
                "Le chargement complet d'une page.",
                "L'affichage d'une liste déroulante.",
                "Un effet visuel sur un bouton lorsqu'il est cliqué.",
                "L'utilisation de vidéos interactives."
            ],
            "correct" => 2
        ],
        [
            "question" => "Que signifie 'journey mapping' en UX ?",
            "answers" => [
                "Analyser les interactions backend pour optimiser les performances.",
                "Ajouter des micro-interactions dans un design.",
                "Créer une carte détaillant les étapes de l'utilisateur avec un produit ou un service.",
                "Tester les performances du design."
            ],
            "correct" => 2
        ],
        [
            "question" => "Quelle méthode est utilisée pour prioriser les problèmes identifiés dans les tests utilisateurs ?",
            "answers" => [
                "La matrice d'impact-effort.",
                "Le tri par cartes.",
                "Le mapping heuristique.",
                "Les entretiens individuels."
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment les heatmaps aident-elles en UX avancé ?",
            "answers" => [
                "Elles analysent les parcours utilisateur dans le backend.",
                "Elles montrent les zones où les utilisateurs interagissent le plus sur une interface.",
                "Elles améliorent les animations.",
                "Elles testent la vitesse des pages."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est le rôle des wireframes en UX avancé ?",
            "answers" => [
                "Créer un prototype final.",
                "Définir la structure et le contenu d'une interface avant le design détaillé.",
                "Tester la compatibilité des couleurs.",
                "Analyser les retours utilisateurs."
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle métrique UX mesure la facilité avec laquelle un utilisateur atteint ses objectifs sur un site ?",
            "answers" => [
                "Taux de succès.",
                "Temps moyen sur la page.",
                "Taux de conversion.",
                "Taux de rebond."
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est un exemple de friction en UX ?",
            "answers" => [
                "Une interface simple et intuitive.",
                "Un retour immédiat après une action.",
                "Des étapes inutiles dans un formulaire.",
                "Une interaction fluide avec un menu déroulant."
            ],
            "correct" => 2
        ],
        [
            "question" => "Que signifie le concept de 'Design Thinking' en UX avancé ?",
            "answers" => [
                "Une méthodologie de résolution de problèmes centrée sur l'utilisateur.",
                "Un outil pour mesurer l'impact des micro-interactions.",
                "Un processus pour tester les performances d'une interface.",
                "L'utilisation de frameworks CSS avancés."
            ],
            "correct" => 0
        ]
    ];
}

public function getQuestionEvaluationFinaleLangages()
    {
       return [
            
        ];
    }
public function getQuestionEvaluationFinale()
{
    return [
        // Sécurité Web
        [
            "question" => "En quelle année les cookies HTTP ont-ils été inventés pour maintenir les sessions utilisateur ?",
            "answers" => ["1993", "1995", "1998", "2000"],
            "correct" => 1
        ],
        [
            "question" => "Quand les premières attaques Cross-Site Scripting (XSS) ont-elles été documentées ?",
            "answers" => ["1995", "1998", "2000", "2004"],
            "correct" => 2
        ],
        [
            "question" => "En quelle année OWASP (Open Web Application Security Project) a-t-il été créé ?",
            "answers" => ["2000", "2004", "2006", "2008"],
            "correct" => 1
        ],
        [
            "question" => "Quand l’en-tête HTTP Content-Security-Policy a-t-il été introduit pour prévenir les attaques XSS ?",
            "answers" => ["2004", "2008", "2010", "2011"],
            "correct" => 1
        ],
        [
            "question" => "Quelle année marque la première publication de l'OWASP Top 10 ?",
            "answers" => ["2008", "2010", "2011", "2014"],
            "correct" => 2
        ],
        [
            "question" => "Quand la vulnérabilité Heartbleed a-t-elle été révélée ?",
            "answers" => ["2012", "2014", "2016", "2018"],
            "correct" => 1
        ],
        [
            "question" => "Quand le RGPD a-t-il été adopté officiellement par le Parlement européen ?",
            "answers" => ["27 avril 2016", "4 mai 2016", "25 mai 2018", "25 mai 2016"],
            "correct" => 0
        ],
        [
            "question" => "À quelle date le RGPD est-il devenu obligatoire dans tous les pays de l'Union européenne ?",
            "answers" => ["27 avril 2016", "4 mai 2016", "25 mai 2016", "25 mai 2018"],
            "correct" => 3
        ],
        [
            "question" => "Quand le protocole TLS 1.3 a-t-il été officiellement lancé ?",
            "answers" => ["2018", "2019", "2020", "2021"],
            "correct" => 2
        ],

        // Inventions et évolutions des langages web
        [
            "question" => "Quelle année marque la naissance de HTML par Tim Berners-Lee ?",
            "answers" => ["1991", "1993", "1995", "1997"],
            "correct" => 0
        ],
        [
            "question" => "En quelle année CGI (Common Gateway Interface) a-t-il été créé ?",
            "answers" => ["1991", "1993", "1995", "1997"],
            "correct" => 1
        ],
        [
            "question" => "Quand PHP a-t-il été introduit pour la première fois ?",
            "answers" => ["1994", "1995", "1996", "1997"],
            "correct" => 0
        ],
        [
            "question" => "Quand JavaScript a-t-il été créé par Netscape ?",
            "answers" => ["1993", "1994", "1995", "1996"],
            "correct" => 2
        ],
        [
            "question" => "Quelle année marque la création de Node.js pour exécuter JavaScript côté serveur ?",
            "answers" => ["2007", "2008", "2009", "2010"],
            "correct" => 2
        ],
        [
            "question" => "Quand TypeScript a-t-il été lancé comme un sur-ensemble de JavaScript ?",
            "answers" => ["2010", "2011", "2012", "2013"],
            "correct" => 1
        ],

        // Frameworks et dépendances
        [
            "question" => "Quand Spring (Java) a-t-il été lancé pour les applications d’entreprise ?",
            "answers" => ["2000", "2002", "2004", "2006"],
            "correct" => 1
        ],
        [
            "question" => "Quand jQuery a-t-il été lancé, simplifiant la manipulation DOM et AJAX ?",
            "answers" => ["2003", "2005", "2007", "2009"],
            "correct" => 1
        ],
        [
            "question" => "En quelle année React a-t-il été introduit par Facebook ?",
            "answers" => ["2012", "2013", "2014", "2015"],
            "correct" => 1
        ],
        [
            "question" => "Quand Vue.js a-t-il été lancé pour créer des interfaces utilisateur progressives ?",
            "answers" => ["2013", "2014", "2015", "2016"],
            "correct" => 1
        ],

        // Évolutions des navigateurs
        [
            "question" => "Quand Internet Explorer a-t-il été lancé par Microsoft ?",
            "answers" => ["1993", "1995", "1997", "1999"],
            "correct" => 1
        ],
        [
            "question" => "Quelle année marque le développement de Safari par Apple ?",
            "answers" => ["2001", "2003", "2005", "2007"],
            "correct" => 1
        ],
        [
            "question" => "Quand Google Chrome a-t-il été lancé ?",
            "answers" => ["2006", "2008", "2010", "2012"],
            "correct" => 1
        ],

        // Sécurité et cryptographie
        [
            "question" => "Quand la cryptographie asymétrique a-t-elle été inventée par Diffie-Hellman ?",
            "answers" => ["1976", "1980", "1984", "1988"],
            "correct" => 0
        ],
        [
            "question" => "Quand SSL (Secure Socket Layer) a-t-il été utilisé pour la première fois publiquement ?",
            "answers" => ["1992", "1994", "1996", "1998"],
            "correct" => 1
        ],
        [
            "question" => "Quand le protocole TLS a-t-il été développé pour remplacer SSL ?",
            "answers" => ["1997", "1999", "2001", "2003"],
            "correct" => 1
        ],

        // Applications web
        [
            "question" => "Quand Ajax a-t-il été popularisé ?",
            "answers" => ["2002", "2004", "2006", "2008"],
            "correct" => 1
        ],
        [
            "question" => "Quand Google Maps a-t-il été lancé comme exemple de Single Page Application ?",
            "answers" => ["2003", "2005", "2007", "2009"],
            "correct" => 1
        ],
        [
            "question" => "Quand les Progressive Web Apps (PWA) ont-elles été annoncées officiellement ?",
            "answers" => ["2013", "2015", "2017", "2019"],
            "correct" => 1
        ],
         // Évolutions des standards web
        [
            "question" => "En quelle année HTML5 a-t-il été officiellement recommandé par le W3C ?",
            "answers" => ["2012", "2014", "2016", "2018"],
            "correct" => 1
        ],
        [
            "question" => "Quand CSS3 a-t-il été publié comme standard par le W3C ?",
            "answers" => ["2008", "2010", "2012", "2014"],
            "correct" => 1
        ],

        // Sécurité web
        [
            "question" => "En quelle année le protocole HTTPS est-il devenu un standard pour les sites web ?",
            "answers" => ["2014", "2015", "2016", "2017"],
            "correct" => 2
        ],
        [
            "question" => "Quand l’initiative Let's Encrypt a-t-elle été lancée pour fournir des certificats SSL gratuits ?",
            "answers" => ["2014", "2015", "2016", "2017"],
            "correct" => 0
        ],

        // Programmation backend
        [
            "question" => "Quand Python a-t-il été créé par Guido van Rossum ?",
            "answers" => ["1989", "1991", "1993", "1995"],
            "correct" => 0
        ],
        [
            "question" => "Quelle année marque la création de Ruby on Rails ?",
            "answers" => ["2002", "2003", "2004", "2005"],
            "correct" => 2
        ],

        // Frameworks modernes
        [
            "question" => "Quand AngularJS a-t-il été lancé par Google ?",
            "answers" => ["2009", "2010", "2011", "2012"],
            "correct" => 0
        ],
        [
            "question" => "En quelle année Laravel a-t-il été publié pour la première fois ?",
            "answers" => ["2010", "2011", "2012", "2013"],
            "correct" => 1
        ],

        // Développement mobile
        [
            "question" => "Quand Swift, le langage de programmation pour iOS, a-t-il été introduit par Apple ?",
            "answers" => ["2012", "2013", "2014", "2015"],
            "correct" => 2
        ],
        [
            "question" => "En quelle année React Native a-t-il été publié pour développer des applications mobiles ?",
            "answers" => ["2014", "2015", "2016", "2017"],
            "correct" => 1
        ],

        // Déploiement et infrastructure
        [
            "question" => "Quand Docker a-t-il été lancé pour la première fois ?",
            "answers" => ["2011", "2012", "2013", "2014"],
            "correct" => 2
        ],
        [
            "question" => "Quand Kubernetes a-t-il été lancé par Google ?",
            "answers" => ["2014", "2015", "2016", "2017"],
            "correct" => 0
        ],

        // Évolutions des outils collaboratifs
        [
            "question" => "Quand Git a-t-il été créé par Linus Torvalds ?",
            "answers" => ["2003", "2005", "2007", "2009"],
            "correct" => 1
        ],
        [
            "question" => "Quelle année marque la création de GitHub pour l'hébergement de code source ?",
            "answers" => ["2006", "2008", "2010", "2012"],
            "correct" => 1
        ],

        // Tendances et pratiques modernes
        [
            "question" => "Quand le concept de DevOps a-t-il été popularisé ?",
            "answers" => ["2005", "2007", "2009", "2011"],
            "correct" => 2
        ],
        [
            "question" => "Quand le paradigme JAMstack a-t-il été introduit pour le développement web ?",
            "answers" => ["2013", "2014", "2015", "2016"],
            "correct" => 0
        ],
        [
            "question" => "Qu'est-ce que le Front-End en développement web ?",
            "answers" => [
                "La partie serveur gérant la logique métier",
                "La partie visible d'une application web interagissant avec l'utilisateur",
                "Un outil pour gérer des bases de données",
                "Une méthode de conception basée sur la blockchain"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel terme désigne un développeur maîtrisant à la fois le Front-End et le Back-End ?",
            "answers" => [
                "Responsive Designer",
                "DevOps Engineer",
                "Full-Stack Developer",
                "UX Designer"
            ],
            "correct" => 2
        ],
        [
            "question" => "Qu'est-ce que le Responsive Design ?",
            "answers" => [
                "Un langage de programmation",
                "Une approche permettant d'adapter un site web à différentes tailles d'écran",
                "Un protocole de transfert sécurisé",
                "Une architecture basée sur des requêtes dynamiques"
            ],
            "correct" => 1
        ],
        [
            "question" => "Dans l'architecture MVC, que représente la Vue ?",
            "answers" => [
                "La gestion des données et de la logique métier",
                "L'affichage des données à l'utilisateur",
                "L'interface entre le modèle et la vue",
                "La gestion des requêtes HTTP"
            ],
            "correct" => 1
        ],

        // Interconnectivité et APIs
        [
            "question" => "Qu'est-ce qu'une API ?",
            "answers" => [
                "Un protocole de sécurité",
                "Une interface permettant à deux applications de communiquer",
                "Un service cloud de stockage",
                "Un outil pour concevoir des pages web interactives"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle architecture API est simple et basée sur HTTP ?",
            "answers" => [
                "GraphQL",
                "Webhooks",
                "SOAP",
                "REST"
            ],
            "correct" => 3
        ],
        [
            "question" => "Qu'est-ce qu'un Webhook ?",
            "answers" => [
                "Un protocole de transfert sécurisé",
                "Un mécanisme envoyant des données automatiquement lorsqu'un événement se produit",
                "Un outil de gestion de bases de données",
                "Une méthode pour accélérer les recherches dans une base"
            ],
            "correct" => 1
        ],
        [
            "question" => "Qu'est-ce que GraphQL et en quoi se distingue-t-il de REST ?",
            "answers" => [
                "Un protocole de transfert sécurisé",
                "Un langage de requêtes pour obtenir exactement les données demandées",
                "Une base de données non relationnelle",
                "Un outil pour concevoir des Single Page Applications"
            ],
            "correct" => 1
        ],

        // Applications web modernes
        [
            "question" => "Quelle est une caractéristique clé des Progressive Web Apps (PWA) ?",
            "answers" => [
                "Requiert un rechargement complet pour chaque page",
                "Combine le meilleur des sites web et des applications natives",
                "Utilise exclusivement des bases de données NoSQL",
                "Fonctionne uniquement hors ligne"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel type d'application fonctionne sur une seule page HTML avec du contenu chargé dynamiquement ?",
            "answers" => [
                "Single Page Application (SPA)",
                "Multi-Page Application (MPA)",
                "API REST",
                "Cloud Computing"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la principale différence entre une MPA et une SPA ?",
            "answers" => [
                "Une MPA recharge la page entière à chaque requête, tandis qu'une SPA charge dynamiquement le contenu",
                "Une MPA fonctionne hors ligne, contrairement à une SPA",
                "Une SPA utilise exclusivement des bases de données NoSQL",
                "Une MPA est réservée aux applications natives"
            ],
            "correct" => 0
        ],

        // Bases de données
        [
            "question" => "Que signifie CRUD en gestion des bases de données ?",
            "answers" => [
                "Create, Read, Update, Delete",
                "Connect, Reset, Update, Display",
                "Copy, Restore, Upload, Download",
                "Compute, Render, Update, Deliver"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel type de base de données est optimisé pour des données non structurées ?",
            "answers" => [
                "Relationnelle",
                "NoSQL",
                "Indexée",
                "Dynamique"
            ],
            "correct" => 1
        ],
        [
            "question" => "Qu'est-ce que l'indexation dans une base de données et pourquoi est-elle importante ?",
            "answers" => [
                "Une technique pour optimiser les recherches dans une base de données",
                "Un outil pour convertir des données relationnelles en données non structurées",
                "Un protocole de sécurité pour bases de données",
                "Un mécanisme de sauvegarde automatique des bases"
            ],
            "correct" => 0
        ],

        // Optimisation et Performances
        [
            "question" => "Qu'est-ce que le SEO en développement web ?",
            "answers" => [
                "Un protocole pour sécuriser les données",
                "Un ensemble de techniques pour améliorer le classement d'un site web dans les moteurs de recherche",
                "Un outil de développement pour créer des Single Page Applications",
                "Une méthode pour accélérer les temps de réponse des APIs"
            ],
            "correct" => 1
        ],
        [
            "question" => "Qu'est-ce que le Lazy Loading ?",
            "answers" => [
                "Une technique pour charger des ressources uniquement lorsque nécessaire",
                "Une méthode de conception basée sur le cloud",
                "Un protocole pour sécuriser les transferts de données",
                "Un processus de création de bases de données NoSQL"
            ],
            "correct" => 0
        ],

        // Culture digitale et tendances
        [
            "question" => "Que signifie Open Source ?",
            "answers" => [
                "Logiciels accessibles uniquement sur abonnement",
                "Logiciels dont le code source est accessible et modifiable",
                "Applications web accessibles uniquement hors ligne",
                "Bases de données décentralisées"
            ],
            "correct" => 1
        ],
        [
            "question" => "Que désigne le terme IoT (Internet of Things) ?",
            "answers" => [
                "Un réseau d'objets connectés capables de collecter et échanger des données",
                "Un outil pour concevoir des Single Page Applications",
                "Un protocole pour sécuriser les bases de données",
                "Une méthode de transformation digitale"
            ],
            "correct" => 0
        ],
        [
            "question" => "Qu'est-ce que la transformation digitale et quels sont ses principaux objectifs ?",
            "answers" => [
                "L'adoption de technologies numériques pour améliorer les processus organisationnels",
                "Une technique de gestion de bases de données",
                "Un protocole de sécurité pour les applications modernes",
                "Une méthode de chargement différé des ressources web"
            ],
            "correct" => 0
        ],
        [
            "question" => "Pourquoi le Big Data est-il crucial pour les entreprises modernes ?",
            "answers" => [
                "Il permet de traiter de grandes quantités de données pour extraire des tendances ou informations stratégiques",
                "Il est utilisé uniquement pour le stockage des applications cloud",
                "Il accélère le chargement des ressources web",
                "Il remplace les bases de données relationnelles dans les applications modernes"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quels sont les avantages du Cloud Computing pour les entreprises ?",
            "answers" => [
                "Une meilleure flexibilité et réduction des coûts",
                "La sécurisation des API REST",
                "Une amélioration des performances des applications natives",
                "Un protocole pour sécuriser les communications"
            ],
            "correct" => 0
        ],

        // Sécurité web
        [
            "question" => "Que permet le protocole HTTPS ?",
            "answers" => [
                "Chiffrer les données échangées sur un site web",
                "Optimiser le contenu d'une application pour les moteurs de recherche",
                "Accélérer le chargement des ressources d'une page",
                "Connecter plusieurs bases de données NoSQL"
            ],
            "correct" => 0
        ],
        [
            "question" => "Qu'est-ce que le RGPD ?",
            "answers" => [
                "Un règlement européen sur la gestion et la protection des données personnelles",
                "Un protocole de sécurité pour les API REST",
                "Un langage de requêtes pour bases de données relationnelles",
                "Une méthode de gestion de contenus dynamiques"
            ],
            "correct" => 0
        ],
        [
            "question" => "Qu'est-ce que l'attaque XSS (Cross-Site Scripting) et comment peut-on s'en protéger ?",
            "answers" => [
                "Une vulnérabilité permettant d'injecter du code malveillant ; protégée par la validation des entrées utilisateur",
                "Une attaque incitant un utilisateur à effectuer une action non souhaitée",
                "Un protocole pour sécuriser les communications",
                "Un mécanisme d'optimisation des requêtes HTTP"
            ],
            "correct" => 0
        ],
        [
            "question" => "Qu'est-ce que l'attaque CSRF (Cross-Site Request Forgery) et comment peut-on la prévenir ?",
            "answers" => [
                "Une attaque incitant un utilisateur à effectuer une action non souhaitée ; protégée par des jetons CSRF",
                "Une vulnérabilité permettant d'injecter du code malveillant",
                "Une méthode d'optimisation des requêtes API",
                "Un outil pour concevoir des Single Page Applications"
            ],
            "correct" => 0
        ],

        // Méthodologies de Développement
        [
            "question" => "Quelle est la méthodologie visant à combiner développement et opérations ?",
            "answers" => [
                "Agile",
                "DevOps",
                "UX",
                "UI"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle discipline se concentre sur l'expérience utilisateur ?",
            "answers" => [
                "UI (User Interface)",
                "UX (User Experience)",
                "SEO (Search Engine Optimization)",
                "Cloud Computing"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle est la différence entre UX (User Experience) et UI (User Interface) ?",
            "answers" => [
                "UX concerne l'expérience utilisateur, tandis que UI concerne le design graphique des interfaces",
                "UX concerne le design des pages, tandis que UI concerne l'optimisation du contenu",
                "UX est un protocole de communication, tandis que UI est une architecture",
                "UX est uniquement lié aux performances, tandis que UI est lié au responsive design"
            ],
            "correct" => 0
        ],
        // Nouveaux concepts
        [
            "question" => "Qu'est-ce que le Web3 et en quoi diffère-t-il du Web traditionnel ?",
            "answers" => [
                "Un web décentralisé basé sur la blockchain",
                "Un outil pour gérer des bases de données NoSQL",
                "Une méthode de développement pour Single Page Applications",
                "Une application native fonctionnant hors ligne"
            ],
            "correct" => 0
        ],
        [
            "question" => "Qu'est-ce que la tokenisation et dans quels domaines est-elle utilisée ?",
            "answers" => [
                "Un processus remplaçant des informations sensibles par des identifiants uniques, souvent utilisé en blockchain",
                "Un mécanisme de sécurité pour les communications web",
                "Un outil pour accélérer les recherches dans une base de données",
                "Une méthode d'optimisation pour les contenus web"
            ],
            "correct" => 0
        ],
        [
            "question" => "Qu'est-ce que le Metaverse et quelles technologies le rendent possible ?",
            "answers" => [
                "Un environnement numérique immersif combinant réalité augmentée et virtuelle",
                "Un outil de gestion de données basé sur le cloud",
                "Une méthode de développement pour Progressive Web Apps",
                "Un langage de requêtes utilisé pour les APIs modernes"
            ],
            "correct" => 0
        ],
         // Développement web et architecture
        [
            "question" => "Qu'est-ce que le Mobile-First Design en développement web ?",
            "answers" => [
                "Une méthode pour développer des applications mobiles natives",
                "Une approche qui consiste à concevoir d'abord pour les appareils mobiles avant les écrans plus grands",
                "Un langage de programmation pour le mobile",
                "Un framework pour développer des applications web progressives"
            ],
            "correct" => 1
        ],

        // Interconnectivité et APIs
        [
            "question" => "Qu'est-ce que l'authentification OAuth ?",
            "answers" => [
                "Un protocole pour sécuriser les API avec des jetons d'accès",
                "Un langage de requêtes utilisé pour interagir avec les bases de données",
                "Un outil pour créer des Single Page Applications",
                "Un mécanisme pour optimiser les performances réseau"
            ],
            "correct" => 0
        ],

        // Sécurité web
        [
            "question" => "Qu'est-ce que le chiffrement asymétrique en cryptographie ?",
            "answers" => [
                "Une méthode utilisant une clé publique et une clé privée pour sécuriser les communications",
                "Un processus de sauvegarde automatique des bases de données",
                "Un protocole pour optimiser les performances des serveurs",
                "Une méthode pour protéger les API REST"
            ],
            "correct" => 0
        ],

        // Bases de données
        [
            "question" => "Quelle est la différence entre une base de données relationnelle et une base NoSQL ?",
            "answers" => [
                "Les bases relationnelles organisent les données en tables, tandis que les bases NoSQL utilisent des structures flexibles",
                "Les bases relationnelles fonctionnent hors ligne, tandis que les bases NoSQL nécessitent une connexion permanente",
                "Les bases relationnelles ne supportent pas les grandes quantités de données, contrairement aux bases NoSQL",
                "Les bases relationnelles sont plus rapides que les bases NoSQL"
            ],
            "correct" => 0
        ],

        // Applications web modernes
        [
            "question" => "Qu'est-ce que le Server-Side Rendering (SSR) ?",
            "answers" => [
                "Une technique où le contenu est généré côté serveur avant d'être envoyé au navigateur",
                "Un processus où les requêtes API sont exécutées en temps réel côté client",
                "Un protocole pour sécuriser les applications web",
                "Un outil pour créer des applications web progressives"
            ],
            "correct" => 0
        ],

        // Optimisation et Performances
        [
            "question" => "Qu'est-ce qu'un Content Delivery Network (CDN) ?",
            "answers" => [
                "Un réseau de serveurs distribuant le contenu pour améliorer les temps de chargement",
                "Une méthode pour concevoir des Single Page Applications",
                "Un protocole pour sécuriser les données des applications web",
                "Un outil de gestion de bases de données NoSQL"
            ],
            "correct" => 0
        ],

        // Culture digitale et tendances
        [
            "question" => "Qu'est-ce que le Design Thinking et comment est-il utilisé en développement ?",
            "answers" => [
                "Une méthodologie centrée sur l'utilisateur pour résoudre des problèmes de manière créative",
                "Un langage de programmation utilisé pour concevoir des applications web",
                "Un outil pour analyser les performances des applications",
                "Une méthode de sauvegarde et de restauration des bases de données"
            ],
            "correct" => 0
        ],
        // Agile
        [
            "question" => "Quel est l'objectif principal des pratiques Agile ?",
            "answers" => [
                "Augmenter la vitesse de développement des applications",
                "Favoriser la collaboration, l'adaptabilité et l'amélioration continue",
                "Réduire le nombre de bugs en production",
                "Mettre en place des systèmes de sécurité robustes"
            ],
            "correct" => 1
        ],
        [
            "question" => "Selon le manifeste Agile, quelle est une des priorités principales ?",
            "answers" => [
                "Minimiser les coûts",
                "Prioriser la satisfaction client grâce à des livraisons fréquentes",
                "Automatiser tous les processus de développement",
                "Éviter tout changement après le démarrage du projet"
            ],
            "correct" => 1
        ],

        // Scrum
        [
            "question" => "Quels sont les rôles principaux dans Scrum ?",
            "answers" => [
                "Scrum Master, Product Owner, et équipe de développement",
                "Chef de projet, développeur, et designer",
                "Product Manager, UX Designer, et client",
                "Analyste, développeur, et testeur"
            ],
            "correct" => 0
        ],
        [
            "question" => "Qu'est-ce qu'un sprint dans la méthodologie Scrum ?",
            "answers" => [
                "Un cycle de développement de 1 à 4 semaines",
                "Une réunion quotidienne de 15 minutes",
                "Une liste des tâches à accomplir",
                "Une méthode de déploiement continu"
            ],
            "correct" => 0
        ],

        // Lean et Kanban
        [
            "question" => "Quel est le principal objectif de la méthodologie Lean ?",
            "answers" => [
                "Éliminer les gaspillages pour maximiser la valeur pour le client",
                "Améliorer les performances des serveurs",
                "Automatiser les processus de développement",
                "Créer des interfaces utilisateur plus intuitives"
            ],
            "correct" => 0
        ],
        [
            "question" => "Qu'est-ce qu'un tableau Kanban ?",
            "answers" => [
                "Un outil visuel pour gérer les flux de travail",
                "Un système de tests automatisés",
                "Une méthodologie pour concevoir des APIs",
                "Un outil pour mesurer la performance des équipes"
            ],
            "correct" => 0
        ],

        // Git Flow
        [
            "question" => "Quelle branche contient la version stable d'un projet dans Git Flow ?",
            "answers" => [
                "Feature branch",
                "Hotfix branch",
                "Master (ou Main)",
                "Develop"
            ],
            "correct" => 2
        ],
        [
            "question" => "À quoi servent les feature branches dans Git Flow ?",
            "answers" => [
                "Corriger les bugs critiques",
                "Développer de nouvelles fonctionnalités spécifiques",
                "Tester les versions en production",
                "Créer des sauvegardes de la branche principale"
            ],
            "correct" => 1
        ],

        // Test-Driven Development (TDD)
        [
            "question" => "Quel est l'ordre des étapes dans le cycle TDD ?",
            "answers" => [
                "Green, Red, Refactor",
                "Red, Green, Refactor",
                "Refactor, Red, Green",
                "Green, Refactor, Red"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est l'objectif principal du Test-Driven Development (TDD) ?",
            "answers" => [
                "Réduire les temps de développement",
                "Garantir que le code répond aux exigences fonctionnelles",
                "Améliorer la performance des APIs",
                "Accélérer les processus de déploiement"
            ],
            "correct" => 1
        ],

        // CI/CD
        [
            "question" => "Quelle est une caractéristique clé de l'intégration continue (CI) ?",
            "answers" => [
                "Automatiser les tests et les fusions fréquentes dans une branche commune",
                "Gérer les flux de travail avec un tableau Kanban",
                "Créer des environnements de test manuels",
                "Optimiser la performance des serveurs"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quels outils sont couramment utilisés pour CI/CD ?",
            "answers" => [
                "GitHub Actions, GitLab CI/CD, Jenkins",
                "Docker, Kubernetes, Terraform",
                "MySQL, PostgreSQL, MongoDB",
                "React, Angular, Vue.js"
            ],
            "correct" => 0
        ],

        // Développement Centré sur l’Utilisateur
        [
            "question" => "Quelle est la première étape du Design Thinking ?",
            "answers" => [
                "Prototypage",
                "Idéation",
                "Empathie",
                "Définition"
            ],
            "correct" => 2
        ],
        [
            "question" => "Qu'est-ce que Lean UX ?",
            "answers" => [
                "Une combinaison du design UX et des principes Agile",
                "Une méthode pour développer des APIs REST",
                "Un outil pour gérer les flux de travail",
                "Un processus de tests automatisés"
            ],
            "correct" => 0
        ],

        // Méthodologies Modernes
        [
            "question" => "Qu'est-ce que DevOps ?",
            "answers" => [
                "Une pratique combinant développement et opérations pour réduire le temps entre développement et déploiement",
                "Une méthode pour sécuriser les applications modernes",
                "Un langage de programmation pour bases de données",
                "Un processus de tests basé sur des scénarios"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est une des caractéristiques principales du BDD (Behavior-Driven Development) ?",
            "answers" => [
                "Se concentre sur les comportements attendus exprimés sous forme de scénarios",
                "Automatise les déploiements en production",
                "Réduit les cycles de développement grâce à des sprints",
                "Remplace les tests automatisés par des tests manuels"
            ],
            "correct" => 0
        ],
        // Agile
        [
            "question" => "Quelle pratique Agile favorise une livraison fréquente de valeur au client ?",
            "answers" => [
                "Intégration continue",
                "Livraison itérative",
                "Kanban",
                "Test-Driven Development"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle est l'une des valeurs fondamentales d'Agile selon son manifeste ?",
            "answers" => [
                "Les processus plutôt que les interactions humaines",
                "Les plans stricts plutôt que l'adaptabilité",
                "Les individus et leurs interactions plutôt que les processus et outils",
                "Le respect du plan initial plutôt que l'amélioration continue"
            ],
            "correct" => 2
        ],

        // Scrum
        [
            "question" => "Quel est l'objectif principal des rétrospectives Scrum ?",
            "answers" => [
                "Définir les tâches pour le prochain sprint",
                "Examiner et améliorer les processus d'équipe après chaque sprint",
                "Valider les livrables avant livraison",
                "Corriger les bugs détectés en production"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle réunion Scrum est courte et quotidienne ?",
            "answers" => [
                "Sprint Planning",
                "Daily Stand-Up",
                "Sprint Review",
                "Rétrospective"
            ],
            "correct" => 1
        ],

        // Lean et Kanban
        [
            "question" => "Quel concept de Lean est utilisé pour limiter le nombre de tâches en cours ?",
            "answers" => [
                "Pull System",
                "Work In Progress (WIP)",
                "Tableau Kanban",
                "Amélioration continue"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle est une caractéristique clé des flux tirés (Pull System) dans Lean ?",
            "answers" => [
                "Les tâches sont attribuées automatiquement aux membres de l'équipe",
                "Les tâches sont tirées par les besoins du client ou de l'équipe",
                "Toutes les tâches sont planifiées à l'avance",
                "Les flux tirés sont utilisés uniquement pour les projets logiciels"
            ],
            "correct" => 1
        ],

        // TDD et BDD
        [
            "question" => "Comment le Behavior-Driven Development (BDD) se distingue-t-il du Test-Driven Development (TDD) ?",
            "answers" => [
                "BDD se concentre sur les comportements attendus, tandis que TDD se concentre sur les fonctionnalités",
                "BDD élimine le besoin de tests automatisés",
                "TDD se base sur des scénarios en langage naturel",
                "BDD est exclusivement utilisé pour les applications web"
            ],
            "correct" => 0
        ],
        [
            "question" => "Dans TDD, quelle étape consiste à écrire le code minimal pour réussir un test ?",
            "answers" => [
                "Red",
                "Green",
                "Refactor",
                "Debugging"
            ],
            "correct" => 1
        ],

        // CI/CD et DevOps
        [
            "question" => "Quel concept clé de DevOps repose sur la gestion des infrastructures comme du code ?",
            "answers" => [
                "Monitoring en continu",
                "Infrastructure as Code (IaC)",
                "Intégration continue",
                "Déploiement progressif"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quels sont les avantages du CI/CD ?",
            "answers" => [
                "Amélioration de la sécurité et réduction des erreurs manuelles",
                "Réduction du nombre de tests automatisés",
                "Optimisation des performances des API",
                "Planification stricte et détaillée de chaque étape"
            ],
            "correct" => 0
        ],
        // Agile
        [
            "question" => "Quelle est une des pratiques clés de l'Agile pour gérer les changements ?",
            "answers" => [
                "Refuser tous les changements après le démarrage du projet",
                "Accueillir les changements, même tard dans le projet, pour apporter de la valeur au client",
                "Prioriser les processus stricts et rigides",
                "Automatiser tous les processus pour éviter les changements"
            ],
            "correct" => 1
        ],
        [
            "question" => "Dans une équipe Agile, comment les membres doivent-ils travailler ensemble ?",
            "answers" => [
                "En suivant strictement les instructions du chef de projet",
                "En collaborant étroitement et en s'auto-organisant",
                "En travaillant chacun de leur côté sans interaction",
                "En se concentrant uniquement sur leurs tâches individuelles"
            ],
            "correct" => 1
        ],

        // Scrum
        [
            "question" => "Qu'est-ce que le backlog produit dans Scrum ?",
            "answers" => [
                "Une liste ordonnée de tout ce qui pourrait être nécessaire au produit",
                "Un document de spécifications détaillées",
                "Un ensemble de tâches déjà terminées",
                "Un outil pour mesurer la performance des développeurs"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie la vélocité dans Scrum ?",
            "answers" => [
                "La rapidité de livraison des fonctionnalités",
                "Le nombre d'éléments du backlog produit complétés lors d'un sprint",
                "La durée d'une réunion quotidienne",
                "Le temps nécessaire pour planifier un sprint"
            ],
            "correct" => 1
        ],

        // Lean et Kanban
        [
            "question" => "Qu'est-ce que le concept de flux continu dans Kanban ?",
            "answers" => [
                "Un processus où les tâches progressent sans interruption",
                "Un outil pour définir les objectifs de sprint",
                "Un type de réunion d'équipe",
                "Un mécanisme pour corriger les erreurs en production"
            ],
            "correct" => 0
        ],
        [
            "question" => "Comment Kanban gère-t-il les tâches prioritaires ?",
            "answers" => [
                "En utilisant une file d'attente et des limites de WIP (Work In Progress)",
                "En fixant une durée stricte pour chaque tâche",
                "En éliminant toutes les tâches non prioritaires",
                "En attribuant chaque tâche à un seul développeur"
            ],
            "correct" => 0
        ],

        // Git Flow
        [
            "question" => "Quelle branche est utilisée pour préparer une nouvelle version stable dans Git Flow ?",
            "answers" => [
                "Release branch",
                "Feature branch",
                "Develop branch",
                "Master branch"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est l'objectif principal des hotfix branches dans Git Flow ?",
            "answers" => [
                "Corriger rapidement des bugs critiques en production",
                "Tester les nouvelles fonctionnalités",
                "Créer des sauvegardes de la branche principale",
                "Préparer des versions stables"
            ],
            "correct" => 0
        ],

        // CI/CD
        [
            "question" => "Qu'est-ce que le déploiement continu (CD) dans une pipeline CI/CD ?",
            "answers" => [
                "Un processus automatisé pour livrer en continu des changements au système de production",
                "Un outil pour tester manuellement les fonctionnalités",
                "Un mécanisme pour surveiller la performance des serveurs",
                "Un protocole pour sécuriser les bases de données"
            ],
            "correct" => 0
        ],
        [
            "question" => "Pourquoi les tests automatisés sont-ils cruciaux dans une pipeline CI/CD ?",
            "answers" => [
                "Pour garantir que chaque modification du code est testée avant d'être fusionnée ou déployée",
                "Pour réduire le nombre de bugs en production manuellement",
                "Pour éviter les fusions dans une branche commune",
                "Pour améliorer la performance des applications"
            ],
            "correct" => 0
        ],

        // Méthodologies Modernes
        [
            "question" => "Comment les méthodologies Agile se comparent-elles aux méthodologies en cascade ?",
            "answers" => [
                "Agile privilégie des cycles itératifs et adaptatifs, tandis que la cascade suit un processus séquentiel rigide",
                "Agile est moins collaboratif que la cascade",
                "La cascade encourage les livraisons fréquentes contrairement à Agile",
                "Agile nécessite une documentation plus détaillée que la cascade"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quels sont les avantages du pair programming ?",
            "answers" => [
                "Amélioration de la qualité du code et partage des connaissances entre développeurs",
                "Réduction des délais en multipliant les développeurs sur une même tâche",
                "Minimisation des interactions entre les membres de l'équipe",
                "Automatisation des tests"
            ],
            "correct" => 0
        ],

        // Développement Centré sur l'Utilisateur
        [
            "question" => "Dans le Design Thinking, quelle étape suit immédiatement l'empathie ?",
            "answers" => [
                "Définition",
                "Prototypage",
                "Idéation",
                "Test"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quels sont les principes fondamentaux de Lean UX ?",
            "answers" => [
                "Centré sur l'utilisateur, collaboratif et basé sur des cycles rapides d'apprentissage",
                "Documentation détaillée, planification stricte et validation manuelle",
                "Optimisation des performances, réduction des coûts et développement autonome",
                "Automatisation des processus, réduction des tests et augmentation de la vitesse"
            ],
            "correct" => 0
        ],

        // TDD et BDD
        [
            "question" => "Pourquoi BDD est-il considéré comme un complément à TDD ?",
            "answers" => [
                "Parce qu'il ajoute une couche de spécifications compréhensibles par les non-développeurs",
                "Parce qu'il élimine le besoin de tests automatisés",
                "Parce qu'il remplace entièrement TDD dans les méthodologies modernes",
                "Parce qu'il est utilisé uniquement pour les API"
            ],
            "correct" => 0
        ],
        [
            "question" => "Qu'est-ce que le Refactoring dans TDD ?",
            "answers" => [
                "Améliorer le code sans changer son comportement pour le rendre plus clair et maintenable",
                "Créer une nouvelle fonctionnalité à partir de zéro",
                "Supprimer des fonctionnalités inutilisées",
                "Écrire des tests pour des fonctionnalités non encore développées"
            ],
            "correct" => 0
        ],
        // HTML5
        [
            "question" => "Quelle balise HTML5 représente un contenu autonome ?",
            "answers" => [
                htmlspecialchars("&ltsection&gt", ENT_QUOTES, 'UTF-8'),
                htmlspecialchars("&ltarticle&gt", ENT_QUOTES, 'UTF-8'),
                htmlspecialchars("&ltheader&gt", ENT_QUOTES, 'UTF-8'),
                htmlspecialchars("&ltnav&gt", ENT_QUOTES, 'UTF-8')
            ],
            "correct" => 1
        ],
        [
            "question" => "À quoi sert l'API de géolocalisation en HTML5 ?",
            "answers" => [
                "Ajouter des animations interactives",
                "Afficher des graphiques 2D",
                "Obtenir la position géographique de l'utilisateur",
                "Stocker des données utilisateur localement"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quelle est la fonction principale des balises &ltheader> et &ltfooter> en HTML5 ?",
            "answers" => [
                "Créer une section thématique",
                "Structurer le contenu et améliorer l'accessibilité",
                "Afficher des données utilisateur",
                "Gérer les animations des pages"
            ],
            "correct" => 1
        ],

        // CSS3
        [
            "question" => "Quel outil CSS permet de créer des mises en page flexibles ?",
            "answers" => [
                "CSS Grid",
                "Flexbox",
                "Media Queries",
                "Animations @keyframes"
            ],
            "correct" => 1
        ],
        [
            "question" => "Qu'est-ce qu'une media query en CSS ?",
            "answers" => [
                "Un moyen d'ajouter des animations dynamiques",
                "Une technique pour rendre le contenu adaptatif selon la taille d'écran",
                "Une méthode de structuration des éléments",
                "Un outil pour gérer les transitions de style"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel système CSS permet d'organiser les éléments sur des lignes et colonnes ?",
            "answers" => [
                "Flexbox",
                "CSS Grid",
                "Media Queries",
                "Transitions CSS"
            ],
            "correct" => 1
        ],

        // JavaScript ES6+
        [
            "question" => "Quelle déclaration JavaScript a un scope de bloc et ne peut pas être redéclarée ?",
            "answers" => [
                "Var",
                "Let",
                "Const",
                "Scope"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quelle syntaxe JavaScript est utilisée pour écrire des fonctions anonymes plus concises ?",
            "answers" => [
                "Déclaration classique",
                "Fonctions fléchées (=>)",
                "Constructeurs",
                "Fonctions imbriquées"
            ],
            "correct" => 1
        ],
        [
            "question" => "À quoi sert async/await en JavaScript ?",
            "answers" => [
                "Créer des animations",
                "Gérer facilement des opérations asynchrones",
                "Déclarer des variables globales",
                "Utiliser des structures conditionnelles"
            ],
            "correct" => 1
        ],

        // Frameworks et bibliothèques
        [
            "question" => "Quel framework CSS rapide propose des grilles et des composants préconstruits ?",
            "answers" => [
                "Tailwind CSS",
                "Bootstrap",
                "CSS Grid",
                "React.js"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel framework JavaScript utilise un DOM virtuel pour optimiser les performances ?",
            "answers" => [
                "Vue.js",
                "React.js",
                "Angular",
                "Svelte"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel framework CSS utilitaire facilite la création de designs personnalisés ?",
            "answers" => [
                "Bootstrap",
                "CSS Grid",
                "Tailwind CSS",
                "Flexbox"
            ],
            "correct" => 2
        ],

        // Back-End
        [
            "question" => "Quel framework PHP est connu pour son élégance et son ORM Eloquent ?",
            "answers" => [
                "Symfony",
                "Laravel",
                "WordPress",
                "Zend Framework"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel framework minimaliste Node.js est utilisé pour créer des APIs REST ?",
            "answers" => [
                "Socket.IO",
                "Express.js",
                "Fastify",
                "Koa.js"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel langage côté serveur alimente WordPress ?",
            "answers" => [
                "Java",
                "Python",
                "PHP",
                "Node.js"
            ],
            "correct" => 2
        ],

        // Bases de données
        [
            "question" => "Quelle base de données est orientée documents et idéale pour des données non structurées ?",
            "answers" => [
                "MySQL",
                "PostgreSQL",
                "MongoDB",
                "SQLite"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quelle base de données relationnelle est populaire pour les applications web ?",
            "answers" => [
                "PostgreSQL",
                "MongoDB",
                "Cassandra",
                "Redis"
            ],
            "correct" => 0
        ],

        // Outils DevOps
        [
            "question" => "Quelle commande Git est utilisée pour fusionner deux branches ?",
            "answers" => [
                "git push",
                "git pull",
                "git merge",
                "git rebase"
            ],
            "correct" => 2
        ],
        [
            "question" => "Qu'est-ce qu'un conteneur Docker ?",
            "answers" => [
                "Un outil pour surveiller les performances des serveurs",
                "Une instance exécutable d'une image Docker",
                "Un framework pour le développement collaboratif",
                "Un processus pour sauvegarder des bases de données"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel outil CI/CD est intégré à GitHub pour automatiser les workflows ?",
            "answers" => [
                "GitHub Actions",
                "Jenkins",
                "CircleCI",
                "Travis CI"
            ],
            "correct" => 0
        ],
        [
            "question" => "Qu'est-ce que Docker Compose ?",
            "answers" => [
                "Un outil pour organiser plusieurs conteneurs",
                "Un framework CSS pour créer des grilles",
                "Une commande Git pour fusionner des branches",
                "Un outil pour gérer les bases de données NoSQL"
            ],
            "correct" => 0
        ],
         // HTML5
        [
            "question" => "Quelle balise HTML5 délimite une section thématique d'un document ?",
            "answers" => [
                htmlspecialchars("&ltsection&gt", ENT_QUOTES, 'UTF-8'),
                htmlspecialchars("&ltarticle&gt", ENT_QUOTES, 'UTF-8'),
                htmlspecialchars("&ltheader&gt", ENT_QUOTES, 'UTF-8'),
                htmlspecialchars("&ltfooter&gt", ENT_QUOTES, 'UTF-8')
            ],
            "correct" => 0
        ],
        [
            "question" => "À quoi sert la balise &ltnav> en HTML5 ?",
            "answers" => [
                "Afficher des graphiques 2D",
                "Définir une zone de navigation",
                "Structurer les données d'un tableau",
                "Créer un espace pour les animations"
            ],
            "correct" => 1
        ],

        // CSS3
        [
            "question" => "Quel outil CSS est utilisé pour créer des animations ?",
            "answers" => [
                "Flexbox",
                "CSS Grid",
                "@keyframes",
                "Media Queries"
            ],
            "correct" => 2
        ],

        // JavaScript ES6+
        [
            "question" => "Quelle fonctionnalité JavaScript ES6 permet d'extraire facilement des données d'un tableau ou d'un objet ?",
            "answers" => [
                "Déstructuration",
                "Fonctions fléchées",
                "Async/await",
                "Classes"
            ],
            "correct" => 0
        ],

        // Frameworks et bibliothèques
        [
            "question" => "Quel framework progressif est conçu pour des interfaces utilisateur légères et modulaires ?",
            "answers" => [
                "React.js",
                "Svelte",
                "Vue.js",
                "Angular"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quel framework compile les composants en JavaScript pur pour de meilleures performances ?",
            "answers" => [
                "Svelte",
                "React.js",
                "Vue.js",
                "Angular"
            ],
            "correct" => 0
        ],

        // Back-End
        [
            "question" => "Quel framework PHP est modulaire et adapté aux projets complexes ?",
            "answers" => [
                "Laravel",
                "Symfony",
                "WordPress",
                "Zend Framework"
            ],
            "correct" => 1
        ],

        // Bases de données
        [
            "question" => "Quelle base de données relationnelle prend en charge les types JSON et des requêtes complexes ?",
            "answers" => [
                "MySQL",
                "PostgreSQL",
                "MongoDB",
                "SQLite"
            ],
            "correct" => 1
        ],

        // Outils DevOps
        [
            "question" => "Quel outil CI/CD est une plateforme flexible intégrée à GitLab ?",
            "answers" => [
                "GitHub Actions",
                "Jenkins",
                "GitLab CI/CD",
                "CircleCI"
            ],
            "correct" => 2
        ],
        // Langages et Technologies de Base
        [
            "question" => "Qu'est-ce que les Custom Elements dans HTML5 permettent de faire ?",
            "answers" => [
                "Définir ses propres balises HTML pour plus de modularité",
                "Créer des graphiques en 2D dans le navigateur",
                "Encapsuler les styles CSS d'une page entière",
                "Gérer le stockage local et les sessions"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est la fonction principale du Shadow DOM en HTML5 ?",
            "answers" => [
                "Créer des graphiques interactifs",
                "Fournir un encapsulage pour les styles et balises",
                "Optimiser les performances des applications web",
                "Gérer les données asynchrones"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle nouveauté CSS permet de définir des variables réutilisables dans une application web ?",
            "answers" => [
                "CSS Grid",
                "Flexbox",
                "CSS Variables",
                "Clamp()"
            ],
            "correct" => 2
        ],
        [
            "question" => "Que permet la fonction Clamp() en CSS ?",
            "answers" => [
                "Créer des animations complexes",
                "Limiter une valeur à des minimums et maximums dynamiques",
                "Ajouter des effets de flou et de luminosité",
                "Organiser les éléments sur deux axes"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est l'objectif principal des modules JavaScript (ESM) ?",
            "answers" => [
                "Améliorer les performances réseau",
                "Structurer le code en divisant les fonctionnalités dans des fichiers importés/exportés",
                "Créer des animations graphiques",
                "Simplifier la gestion des bases de données"
            ],
            "correct" => 1
        ],

        // Frameworks et Bibliothèques
        [
            "question" => "Quelle est la spécificité de Next.js par rapport à React.js ?",
            "answers" => [
                "Il offre le rendu côté serveur (SSR) et les applications statiques pour améliorer le SEO",
                "Il est une alternative plus légère à React",
                "Il remplace complètement le DOM virtuel",
                "Il est utilisé uniquement pour les applications mobiles"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel framework JavaScript est connu pour compiler les composants en JavaScript pur pour améliorer les performances ?",
            "answers" => [
                "React.js",
                "Vue.js",
                "Svelte",
                "Angular"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quel framework backend est décrit comme une alternative inspirée de Laravel pour Node.js ?",
            "answers" => [
                "Express.js",
                "AdonisJS",
                "NestJS",
                "Django"
            ],
            "correct" => 1
        ],

        // Bases de Données
        [
            "question" => "Quelle base de données NoSQL est orientée colonnes et conçue pour des volumes massifs de données ?",
            "answers" => [
                "MongoDB",
                "Cassandra",
                "Redis",
                "Firebase Realtime Database"
            ],
            "correct" => 1
        ],
        [
            "question" => "Qu'est-ce qui distingue MariaDB de MySQL ?",
            "answers" => [
                "Elle offre des fonctionnalités supplémentaires comme des requêtes parallèles et un stockage hybride JSON",
                "Elle est uniquement utilisée pour les bases NoSQL",
                "Elle est spécialisée dans le traitement de données massives",
                "Elle est conçue pour des environnements mobiles"
            ],
            "correct" => 0
        ],

        // Outils DevOps
        [
            "question" => "Quel outil est une alternative à Docker, conçu pour un environnement sans démon ?",
            "answers" => [
                "Kubernetes",
                "Podman",
                "Helm",
                "Vagrant"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle plateforme est utilisée pour l'orchestration de conteneurs ?",
            "answers" => [
                "Docker Compose",
                "Terraform",
                "Kubernetes",
                "Ansible"
            ],
            "correct" => 2
        ],
        [
            "question" => "Que permet l'utilisation d'Helm dans Kubernetes ?",
            "answers" => [
                "Orchestrer des conteneurs en temps réel",
                "Créer des pipelines CI/CD",
                "Simplifier l'installation et la gestion des configurations complexes",
                "Automatiser les tâches d'administration système"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quel est le rôle de Prometheus dans une infrastructure moderne ?",
            "answers" => [
                "Collecter des métriques en temps réel pour le monitoring",
                "Gérer les logs d'application",
                "Créer des conteneurs et les déployer",
                "Orchestrer des bases de données distribuées"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel outil permet de gérer des infrastructures comme du code (IaC) ?",
            "answers" => [
                "Terraform",
                "Jenkins",
                "Grafana",
                "Docker Compose"
            ],
            "correct" => 0
        ],
        [
            "question" => "Qu'est-ce qu'ArgoCD dans l'écosystème Kubernetes ?",
            "answers" => [
                "Un outil de gestion CI/CD basé sur GitOps",
                "Un système de monitoring en continu",
                "Une alternative au Shadow DOM",
                "Une base de données distribuée"
            ],
            "correct" => 0
        ],
        // Sécurité Web : XSS
        [
            "question" => "Qu'est-ce qu'une attaque XSS (Cross-Site Scripting) ?",
            "answers" => [
                "Une attaque où un code malveillant est injecté dans une page web",
                "Une attaque qui force un utilisateur à exécuter une action non autorisée",
                "Un type de phishing basé sur des emails",
                "Une faille dans le protocole HTTPS"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle fonction PHP est utilisée pour échapper les entrées utilisateur afin de prévenir les attaques XSS ?",
            "answers" => [
                "htmlspecialchars()",
                "mysqli_escape()",
                "addslashes()",
                "strip_tags()"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que fait une Content Security Policy (CSP) ?",
            "answers" => [
                "Elle redirige le trafic HTTP vers HTTPS",
                "Elle définit des politiques pour limiter l'exécution de scripts",
                "Elle chiffre les mots de passe dans la base de données",
                "Elle supprime les entrées utilisateur non valides"
            ],
            "correct" => 1
        ],

        // Sécurité Web : CSRF
        [
            "question" => "Qu'est-ce qu'une attaque CSRF (Cross-Site Request Forgery) ?",
            "answers" => [
                "Une attaque qui injecte du code malveillant dans une page web",
                "Une attaque qui pousse un utilisateur authentifié à exécuter une action non autorisée",
                "Une faille dans les certificats HTTPS",
                "Un type de spam basé sur des formulaires web"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle méthode est recommandée pour prévenir les attaques CSRF ?",
            "answers" => [
                "Échapper les entrées utilisateur",
                "Utiliser des jetons CSRF pour vérifier l'origine des requêtes",
                "Compresser les ressources comme les images et scripts",
                "Utiliser des cookies pour stocker les données utilisateur"
            ],
            "correct" => 1
        ],

        // Sécurité Web : HTTPS
        [
            "question" => "Quel est l'objectif principal du protocole HTTPS ?",
            "answers" => [
                "Optimiser la vitesse de chargement des pages",
                "Chiffrer les échanges entre le client et le serveur",
                "Empêcher les attaques XSS",
                "Stocker les données utilisateur dans le cache"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel certificat est nécessaire pour mettre en place HTTPS ?",
            "answers" => [
                "Certificat DNS",
                "Certificat SSL/TLS",
                "Certificat JSON",
                "Certificat d'accès ARIA"
            ],
            "correct" => 1
        ],

        // Sécurité Web : Hash des mots de passe
        [
            "question" => "Quel algorithme est recommandé pour le hash des mots de passe ?",
            "answers" => [
                "SHA1",
                "bcrypt",
                "MD5",
                "CRC32"
            ],
            "correct" => 1
        ],
        [
            "question" => "Pourquoi faut-il utiliser un salt lors du hash des mots de passe ?",
            "answers" => [
                "Pour accélérer les opérations de hash",
                "Pour éviter les attaques par table de correspondance (rainbow tables)",
                "Pour stocker les mots de passe de manière lisible",
                "Pour améliorer la vitesse de traitement des requêtes"
            ],
            "correct" => 1
        ],

        // Accessibilité
        [
            "question" => "Quel principe est au cœur des standards WCAG ?",
            "answers" => [
                "Créer du contenu uniquement pour les utilisateurs experts",
                "Rendre le contenu perceptible, utilisable, compréhensible et robuste",
                "Optimiser les performances des sites web",
                "Assurer la compatibilité avec tous les navigateurs modernes"
            ],
            "correct" => 1
        ],
        [
            "question" => "Que fait l'attribut alt dans les balises &ltimg> ?",
            "answers" => [
                "Ajoute un texte alternatif pour les lecteurs d'écran",
                "Optimise la vitesse de chargement des images",
                "Spécifie la source des images",
                "Active le lazy loading pour les images"
            ],
            "correct" => 0
        ],

        // Performances
        [
            "question" => "Quel format est recommandé pour des images optimisées ?",
            "answers" => [
                "JPEG",
                "PNG",
                "WebP",
                "BMP"
            ],
            "correct" => 2
        ],
        [
            "question" => "Qu'est-ce que le lazy loading ?",
            "answers" => [
                "Un protocole pour sécuriser les connexions",
                "Un système pour charger les ressources uniquement lorsqu'elles sont visibles",
                "Une technique pour réduire les tailles de fichiers",
                "Un algorithme pour accélérer les hash de mots de passe"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle directive HTTP permet d'activer la mise en cache du navigateur ?",
            "answers" => [
                "Content-Security-Policy",
                "Cache-Control",
                "Strict-Transport-Security",
                "X-Frame-Options"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel outil est utilisé pour analyser les performances des sites web ?",
            "answers" => [
                "PageSpeed Insights",
                "ARIA Validator",
                "NVDA",
                "Let’s Encrypt"
            ],
            "correct" => 0
        ],
        // Sécurité Web
        [
            "question" => "Quel est un avantage principal de l'utilisation de HTTPS ?",
            "answers" => [
                "Accélérer le chargement des pages",
                "Prévenir les attaques de type Man-In-The-Middle (MITM)",
                "Rendre les pages web accessibles aux lecteurs d'écran",
                "Éviter les attaques XSS"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel outil peut être utilisé pour obtenir un certificat SSL/TLS gratuitement ?",
            "answers" => [
                "Cloudflare",
                "Let’s Encrypt",
                "Google PageSpeed Insights",
                "Lighthouse"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est l'objectif principal des jetons CSRF ?",
            "answers" => [
                "Empêcher l'injection de scripts malveillants",
                "Vérifier l'origine des requêtes sensibles",
                "Minimiser la taille des ressources",
                "Chiffrer les mots de passe"
            ],
            "correct" => 1
        ],

        // Hash des mots de passe
        [
            "question" => "Pourquoi Argon2 est-il recommandé pour le hash des mots de passe ?",
            "answers" => [
                "Il est plus rapide que bcrypt",
                "Il est conçu pour résister aux attaques par GPU",
                "Il stocke les mots de passe en clair pour faciliter leur récupération",
                "Il est utilisé par défaut dans les navigateurs modernes"
            ],
            "correct" => 1
        ],

        // Accessibilité
        [
            "question" => "Que signifie l'acronyme a11y pour l'accessibilité ?",
            "answers" => [
                "Automated Web Testing",
                "Accessibility (11 lettres entre a et y)",
                "Advanced User Interface",
                "Application Performance Insights"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel outil est utilisé pour détecter les problèmes d'accessibilité sur une page web ?",
            "answers" => [
                "Lighthouse",
                "NVDA",
                "ImageOptim",
                "Cloudflare"
            ],
            "correct" => 0
        ],

        // Performances
        [
            "question" => "Quelle technique améliore les performances en chargeant les ressources avant qu'elles ne soient nécessaires ?",
            "answers" => [
                "Lazy Loading",
                "Caching",
                "Preloading",
                "Hashing"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quel format de fichier est souvent utilisé pour minimiser la taille des polices personnalisées ?",
            "answers" => [
                "WOFF2",
                "TTF",
                "OTF",
                "EOT"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel attribut permet d'implémenter le lazy loading pour les images ?",
            "answers" => [
                "alt",
                "src",
                "loading",
                "defer"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quel outil analyse les performances des pages et fournit des recommandations ?",
            "answers" => [
                "PageSpeed Insights",
                "Docker",
                "Axios",
                "ARIA"
            ],
            "correct" => 0
        ],
         // Visual Studio Code
        [
            "question" => "Quelle extension VS Code est utilisée pour corriger les erreurs de code JavaScript ?",
            "answers" => [
                "Prettier",
                "Live Server",
                "ESLint",
                "Bracket Pair Colorizer"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quel raccourci permet de déplacer une ligne ou un bloc de code dans VS Code ?",
            "answers" => [
                "Ctrl + B",
                "Alt + flèche haut/bas",
                "Shift + Alt + F",
                "Ctrl + Shift + P"
            ],
            "correct" => 1
        ],
        [
            "question" => "Comment prévisualiser un projet en temps réel avec VS Code ?",
            "answers" => [
                "Utiliser l'extension Live Server",
                "Activer le terminal intégré",
                "Utiliser GitLens",
                "Configurer le fichier .vscode/settings.json"
            ],
            "correct" => 0
        ],

        // Outils de design et prototypage
        [
            "question" => "Quelle est une bonne pratique dans Figma pour harmoniser les designs ?",
            "answers" => [
                "Utiliser des composants partagés",
                "Créer des maquettes sur des calques séparés",
                "Activer le mode collaboratif",
                "Exporter les designs en CSS"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle fonctionnalité Figma permet de gérer des interfaces adaptatives ?",
            "answers" => [
                "Auto Layout",
                "Wireframes",
                "Bibliothèques partagées",
                "Grilles"
            ],
            "correct" => 0
        ],

        // Test des API
        [
            "question" => "Comment automatiser les tests dans Postman ?",
            "answers" => [
                "Utiliser des scripts pré/post-requêtes",
                "Exporter les collections sous forme de JSON",
                "Créer des bibliothèques partagées",
                "Ajouter des environnements dynamiques"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel type de requête est utilisé pour récupérer des données via une API ?",
            "answers" => [
                "POST",
                "PUT",
                "DELETE",
                "GET"
            ],
            "correct" => 3
        ],

        // Débogage et analyse
        [
            "question" => "Quel onglet de Chrome DevTools est utilisé pour déboguer JavaScript ?",
            "answers" => [
                "Sources",
                "Network",
                "Performance",
                "Elements"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que permet de faire le mode 'Responsive Design' dans Chrome DevTools ?",
            "answers" => [
                "Déboguer les erreurs CSS",
                "Analyser les performances des scripts",
                "Simuler l'affichage sur des appareils mobiles",
                "Inspecter les requêtes HTTP"
            ],
            "correct" => 2
        ],

        // Gestion de projets et collaboration
        [
            "question" => "Quelle est une bonne pratique avec Trello pour la gestion des tâches ?",
            "answers" => [
                "Utiliser des colonnes pour organiser les étapes ('À faire', 'En cours', 'Terminé')",
                "Créer un tableau par membre de l'équipe",
                "Ne pas ajouter de description dans les cartes",
                "Attribuer toutes les tâches à un seul utilisateur"
            ],
            "correct" => 0
        ],

        // Analyse des performances
        [
            "question" => "Quel outil mesure les performances d'un site et fournit des scores d'optimisation ?",
            "answers" => [
                "Lighthouse",
                "Postman",
                "Webpack",
                "GitHub Actions"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel outil est recommandé pour réduire la taille des images sans perte de qualité ?",
            "answers" => [
                "TinyPNG",
                "Postman",
                "GitLens",
                "Webpack"
            ],
            "correct" => 0
        ],
        // Visual Studio Code
        [
            "question" => "Quelle extension VS Code permet un formatage automatique du code ?",
            "answers" => [
                "GitLens",
                "Prettier",
                "ESLint",
                "Live Server"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle fonctionnalité VS Code permet de voir l'historique des fichiers avec Git ?",
            "answers" => [
                "GitLens",
                "Bracket Pair Colorizer",
                "Live Server",
                "Prettier"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel raccourci VS Code permet de commenter ou décommenter une ligne ou une sélection ?",
            "answers" => [
                "Ctrl + P",
                "Ctrl + /",
                "Shift + Alt + F",
                "Ctrl + D"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle commande ouvre rapidement un fichier par son nom dans VS Code ?",
            "answers" => [
                "Ctrl + P",
                "Ctrl + B",
                "Ctrl + Shift + P",
                "Ctrl + /"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel fichier dans VS Code est utilisé pour des configurations spécifiques au projet ?",
            "answers" => [
                ".vscode/settings.json",
                "package.json",
                "config.json",
                ".env"
            ],
            "correct" => 0
        ],

        // Outils de design et prototypage
        [
            "question" => "Quel outil est utilisé pour créer des wireframes et prototypes interactifs ?",
            "answers" => [
                "Figma",
                "Postman",
                "Trello",
                "PhpStorm"
            ],
            "correct" => 0
        ],
        [
            "question" => "Dans Figma, quelle fonctionnalité est utilisée pour créer des interfaces adaptatives ?",
            "answers" => [
                "Auto Layout",
                "Wireframe",
                "Grilles et guides",
                "Composants partagés"
            ],
            "correct" => 0
        ],

        // Test des API
        [
            "question" => "Quel outil est utilisé pour tester des requêtes HTTP et des API REST ?",
            "answers" => [
                "Postman",
                "Lighthouse",
                "Trello",
                "WebStorm"
            ],
            "correct" => 0
        ],
        [
            "question" => "Dans Postman, quelle fonctionnalité permet d'automatiser les tests avec des scripts ?",
            "answers" => [
                "Tests dynamiques",
                "Scripts pré/post-requêtes",
                "Collections d'API",
                "Environnements dynamiques"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle pratique est recommandée pour gérer les clés API dynamiques dans Postman ?",
            "answers" => [
                "Utiliser les environnements",
                "Créer un fichier JSON externe",
                "Configurer des sessions de cookies",
                "Activer les tokens OAuth"
            ],
            "correct" => 0
        ],

        // Débogage et analyse
        [
            "question" => "Quel outil intégré au navigateur Chrome permet d'inspecter le DOM en direct ?",
            "answers" => [
                "Chrome DevTools",
                "GitLens",
                "VS Code Terminal",
                "WebStorm Debugger"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel onglet de Chrome DevTools est utilisé pour analyser les performances d'une page web ?",
            "answers" => [
                "Sources",
                "Network",
                "Performance",
                "Console"
            ],
            "correct" => 2
        ],
        [
            "question" => "Quelle technique peut être utilisée avec DevTools pour déboguer du code minifié ?",
            "answers" => [
                "Breakpoints",
                "Source maps",
                "Lazy loading",
                "Inspecter les requêtes"
            ],
            "correct" => 1
        ],

        // Intelligence artificielle
        [
            "question" => "Quel outil utilise l'IA pour suggérer du code directement dans votre éditeur ?",
            "answers" => [
                "GitHub Copilot",
                "ChatGPT",
                "DeepCode",
                "PhpStorm"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel outil peut être utilisé pour détecter les failles de sécurité dans le code avec l'IA ?",
            "answers" => [
                "DeepCode",
                "Selenium",
                "WebStorm",
                "GitHub Actions"
            ],
            "correct" => 0
        ],

        // Gestion de projets et collaboration
        [
            "question" => "Quel outil est souvent utilisé pour organiser les tâches avec des tableaux Kanban ?",
            "answers" => [
                "Trello",
                "Jira",
                "Slack",
                "WebStorm"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel outil de gestion de projets est particulièrement adapté à la méthodologie Agile ?",
            "answers" => [
                "Trello",
                "Jira",
                "Figma",
                "Postman"
            ],
            "correct" => 1
        ],

        // Analyse des performances
        [
            "question" => "Quel outil intégré à Chrome mesure l'accessibilité, le SEO et les performances ?",
            "answers" => [
                "Lighthouse",
                "PageSpeed Insights",
                "GTmetrix",
                "WebPageTest"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel outil mesure la vitesse d'un site et fournit des recommandations d'optimisation ?",
            "answers" => [
                "GTmetrix",
                "Selenium",
                "Postman",
                "WebStorm"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel framework est utilisé pour automatiser les tests de navigateurs ?",
            "answers" => [
                "Selenium",
                "WebStorm",
                "PhpStorm",
                "DeepCode"
            ],
            "correct" => 0
        ],
        // Principes fondamentaux
        [
            "question" => "Que signifie le principe KISS en développement ?",
            "answers" => [
                "Keep It Simple, Stupid",
                "Keep It Smart and Secure",
                "Keep It Structured and Simple",
                "Keep It Stable and Secure"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que recommande le principe DRY (Don't Repeat Yourself) ?",
            "answers" => [
                "Éviter les dépendances dans le code",
                "Éviter les redondances en réutilisant des fonctions ou modules",
                "Écrire du code en une seule ligne",
                "Documenter toutes les fonctions dans une classe"
            ],
            "correct" => 1
        ],
        [
            "question" => "Qu'est-ce que YAGNI (You Aren't Gonna Need It) conseille ?",
            "answers" => [
                "Ne pas écrire de fonctionnalités tant qu'elles ne sont pas nécessaires",
                "Optimiser le code dès le début du projet",
                "Anticiper les besoins futurs dans le développement",
                "Utiliser des frameworks pour éviter le code inutile"
            ],
            "correct" => 0
        ],

        // Méthodologies et modèles
        [
            "question" => "Que signifie le S dans les principes SOLID ?",
            "answers" => [
                "Single Responsibility Principle",
                "Scalable Code Principle",
                "Structured Object Principle",
                "Secure Implementation Principle"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel est l'objectif du principe Open/Closed (O dans SOLID) ?",
            "answers" => [
                "Les modules doivent être ouverts aux modifications directes",
                "Les modules doivent être fermés à l'extension",
                "Les modules doivent être ouverts à l'extension mais fermés à la modification",
                "Les modules doivent être fermés aux dépendances externes"
            ],
            "correct" => 2
        ],
        [
            "question" => "Dans le modèle MVC, quel composant gère la logique métier ?",
            "answers" => [
                "Model",
                "View",
                "Controller",
                "Service"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthodologie est basée sur des sprints et des itérations courtes ?",
            "answers" => [
                "Kanban",
                "Scrum",
                "MERISE",
                "TDD"
            ],
            "correct" => 1
        ],

        // Documentation et clarté
        [
            "question" => "Quel outil peut être utilisé pour documenter une API REST ?",
            "answers" => [
                "Swagger",
                "Webpack",
                "Cucumber",
                "GitHub Actions"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle est une bonne pratique pour la documentation de code ?",
            "answers" => [
                "Ajouter des commentaires sur chaque ligne de code",
                "Expliquer l'intention derrière le code avec des commentaires",
                "Éviter les commentaires dans le code",
                "Utiliser uniquement des diagrammes UML"
            ],
            "correct" => 1
        ],

        // Gestion de projet et collaboration
        [
            "question" => "Quel type de branche Git est utilisé pour corriger un bug critique ?",
            "answers" => [
                "feature/",
                "hotfix/",
                "develop/",
                "main/"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quelle méthodologie utilise des colonnes comme 'À faire', 'En cours', 'Terminé' ?",
            "answers" => [
                "Scrum",
                "Kanban",
                "TDD",
                "CI/CD"
            ],
            "correct" => 1
        ],

        // Conception et sécurité
        [
            "question" => "Quelle unité est recommandée pour un design responsive ?",
            "answers" => [
                "px",
                "em",
                "cm",
                "dpi"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel algorithme est recommandé pour chiffrer les mots de passe ?",
            "answers" => [
                "SHA1",
                "bcrypt",
                "MD5",
                "AES"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel type d'attaque est prévenu par la validation des entrées utilisateur ?",
            "answers" => [
                "XSS et SQL Injection",
                "Man-In-The-Middle",
                "DDoS",
                "Phishing"
            ],
            "correct" => 0
        ],

        // Tests et maintenance
        [
            "question" => "Quel est l'objectif de TDD (Test-Driven Development) ?",
            "answers" => [
                "Écrire du code avant d'exécuter les tests",
                "Écrire les tests avant d'implémenter les fonctionnalités",
                "Exécuter des tests après le déploiement",
                "Tester uniquement les fonctions critiques"
            ],
            "correct" => 1
        ],
        [
            "question" => "Dans le cycle TDD, que signifie l'étape Green ?",
            "answers" => [
                "Améliorer le code existant",
                "Écrire un test qui échoue",
                "Faire passer le test avec le minimum de code nécessaire",
                "Écrire les spécifications"
            ],
            "correct" => 2
        ],

        // Intégration et automatisation
        [
            "question" => "Quel outil est utilisé pour configurer une intégration continue (CI) ?",
            "answers" => [
                "GitHub Actions",
                "Cucumber",
                "Swagger",
                "Webpack"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quel outil permet de compresser et optimiser les ressources front-end ?",
            "answers" => [
                "Webpack",
                "Postman",
                "Docker",
                "Jenkins"
            ],
            "correct" => 0
        ],
        // Principes fondamentaux
        [
            "question" => "Pourquoi le principe DRY est-il important ?",
            "answers" => [
                "Il réduit la quantité de code dupliqué",
                "Il facilite l'ajout de nouvelles fonctionnalités",
                "Il empêche les attaques XSS",
                "Il optimise les performances de l'application"
            ],
            "correct" => 0
        ],
        [
            "question" => "Que signifie 'Don't Repeat Yourself' ?",
            "answers" => [
                "Ne pas répéter les données",
                "Ne pas réutiliser les ressources inutiles",
                "Éviter les redondances en centralisant les fonctionnalités",
                "Créer du code modulaire et extensible"
            ],
            "correct" => 2
        ],

        // Méthodologies et modèles
        [
            "question" => "Dans le principe Liskov Substitution (L dans SOLID), que doit respecter une sous-classe ?",
            "answers" => [
                "Les dépendances externes",
                "La possibilité de remplacer la classe parente sans problème",
                "Les propriétés privées de la classe parente",
                "Le découplage total des modules"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est un avantage principal du modèle MVC ?",
            "answers" => [
                "Une meilleure séparation des responsabilités",
                "Une réduction des coûts de maintenance",
                "Un accès rapide aux bases de données",
                "Une sécurité accrue des mots de passe"
            ],
            "correct" => 0
        ],

        // Documentation et clarté
        [
            "question" => "Que signifie une documentation 'KISS' ?",
            "answers" => [
                "Utiliser uniquement des diagrammes UML",
                "Créer une documentation concise et simple",
                "Éviter d'ajouter des commentaires dans le code",
                "Partager uniquement des manuels PDF longs"
            ],
            "correct" => 1
        ],
        [
            "question" => "Quel est l'objectif principal d'un commentaire dans le code ?",
            "answers" => [
                "Expliquer les intentions derrière le code",
                "Améliorer les performances du code",
                "Réduire la quantité de code",
                "Prévenir les erreurs de syntaxe"
            ],
            "correct" => 0
        ],

        // Gestion de projet et collaboration
        [
            "question" => "Quelle branche Git est utilisée pour développer des fonctionnalités spécifiques ?",
            "answers" => [
                "feature/",
                "develop/",
                "main/",
                "hotfix/"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle méthode Agile utilise des tableaux Kanban pour la gestion visuelle des tâches ?",
            "answers" => [
                "Scrum",
                "TDD",
                "Kanban",
                "CI/CD"
            ],
            "correct" => 2
        ],

        // Conception et sécurité
        [
            "question" => "Quelle pratique est recommandée pour éviter les attaques SQL Injection ?",
            "answers" => [
                "Utiliser des requêtes préparées avec des paramètres",
                "Chiffrer les mots de passe",
                "Activer le lazy loading",
                "Compresser les fichiers CSS et JavaScript"
            ],
            "correct" => 0
        ],
        [
            "question" => "Quelle unité relative est souvent utilisée pour la taille des polices en responsive design ?",
            "answers" => [
                "px",
                "em",
                "cm",
                "dpi"
            ],
            "correct" => 1
        ],

        // Tests et maintenance
        [
            "question" => "Quel outil permet d'écrire des scénarios pour BDD (Behavior-Driven Development) ?",
            "answers" => [
                "Swagger",
                "Cucumber",
                "Postman",
                "Jenkins"
            ],
            "correct" => 1
        ],
        [
            "question" => "Dans le cycle TDD, que signifie l'étape Refactor ?",
            "answers" => [
                "Écrire un test qui échoue",
                "Écrire le minimum de code pour que le test réussisse",
                "Améliorer le code tout en s'assurant que les tests passent",
                "Exécuter les tests finaux"
            ],
            "correct" => 2
        ]
    ];
}

    
}
