<?php

$title = "Cours - VueJS";

include_once 'templates/header_wo_sb.php';
?>

<!-- Sidebar -->
<div class="sidebar">

<h3 style="position: relative; left: 15px; font-weight: bold;">Vue.js</h3>
    <a href="#introduction-vue">Introduction et installation</a>
<!-- Vue Instance -->
<button class="dropdown-btn">Vue Instance <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#data">data</a>
    <a href="#methods">methods</a>
    <a href="#computed">computed</a>
    <a href="#watch">watch</a>
    <a href="#lifecycle-hooks">Lifecycle Hooks</a>
</div>

<!-- Template Syntax -->
<button class="dropdown-btn">Template Syntax <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#expressions">Expressions</a>
    <a href="#interpolation">Interpolation</a>
    <a href="#modifiers">Modifiers</a>
</div>

<!-- Directives -->
<button class="dropdown-btn">Directives <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#v-bind">v-bind</a>
    <a href="#v-if">v-if</a>
    <a href="#v-else">v-else</a>
    <a href="#v-for">v-for</a>
    <a href="#v-model">v-model</a>
    <a href="#v-on">v-on</a>
    <a href="#v-show">v-show</a>
    <a href="#v-slot">v-slot</a>
    <a href="#custom-directives">Custom Directives</a>
</div>

<!-- Components -->
<button class="dropdown-btn">Components <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#component-basics">Component Basics</a>
    <a href="#props">Props</a>
    <a href="#events">Custom Events</a>
    <a href="#slots">Slots</a>
    <a href="#dynamic-components">Dynamic Components</a>
    <a href="#render-functions">Render Functions</a>
    <a href="#functional-components">Functional Components</a>
</div>

<!-- Reactivity System -->
<button class="dropdown-btn">Reactivity System <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#reactive">reactive()</a>
    <a href="#ref">ref()</a>
    <a href="#toRefs">toRefs()</a>
    <a href="#shallow-reactive">shallowReactive()</a>
    <a href="#shallow-ref">shallowRef()</a>
</div>

<!-- Vue Router -->
<button class="dropdown-btn">Vue Router <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#router-setup">Router Setup</a>
    <a href="#router-links">Router Links</a>
    <a href="#route-params">Route Params</a>
    <a href="#route-guards">Route Guards</a>
    <a href="#nested-routes">Nested Routes</a>
</div>

<!-- Vuex -->
<button class="dropdown-btn">Vuex <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#vuex-intro">Vuex Introduction</a>
    <a href="#state">State</a>
    <a href="#getters">Getters</a>
    <a href="#mutations">Mutations</a>
    <a href="#actions">Actions</a>
    <a href="#modules">Modules</a>
</div>

<!-- Composition API -->
<button class="dropdown-btn">Composition API <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#setup-function">setup()</a>
    <a href="#reactive-api">reactive()</a>
    <a href="#ref-api">ref()</a>
    <a href="#computed-properties">computed() - En cours</a>
    <a href="#watch-api">watch()</a>
    <a href="#watch-effect-api">watchEffect()</a>
    <a href="#lifecycle-hooks">Hooks de cycle de vie</a>
    <a href="#example-project">Exemple de projet</a>
    <a href="#project-enhancements">Amélioration du projet exemple</a>
</div>

<!-- Advanced Topics -->
<button class="dropdown-btn">Advanced Topics <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#suspense">Suspense</a>
    <a href="#teleport">Teleport</a>
    <a href="#provide-inject">Provide/Inject</a>
    <a href="#dynamic-imports">Dynamic Imports</a>
    <a href="#error-handling">Error Handling</a>
</div>

<!-- Transitions and Animations -->
<button class="dropdown-btn">Transitions and Animations <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#transition">transition</a>
    <a href="#transition-group">transition-group</a>
    <a href="#animation-hooks">Animation Hooks</a>
</div>

<!-- Server-Side Rendering -->
<button class="dropdown-btn">Server-Side Rendering <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#ssr-overview">SSR Overview</a>
    <a href="#nuxt">Nuxt.js</a>
</div>

<!-- Testing -->
<button class="dropdown-btn">Testing <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#unit-testing">Unit Testing</a>
    <a href="#e2e-testing">End-to-End Testing</a>
    <a href="#vue-test-utils">Vue Test Utils</a>
</div>

<!-- Tools -->
<button class="dropdown-btn">Tools <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#vue-cli">Vue CLI</a>
    <a href="#vite">Vite</a>
    <a href="#devtools">Vue Devtools</a>
</div>

<!-- Miscellaneous -->
<button class="dropdown-btn">Miscellaneous <i class="fas fa-caret-down"></i></button>
<div class="dropdown-container">
    <a href="#performance">Performance Optimization</a>
    <a href="#plugins">Plugins</a>
    <a href="#internationalization">Internationalization (i18n)</a>
    <a href="#ssr">SSR Overview</a>
</div>
    <a href="#conclusion">Conclusion du cours Vue.js</a>  
</div>


<!-- Page Content -->
<div class="content">
    <div class="container animate__animated animate__fadeInUp">
            <div id="introduction-vue" class="container">
                <h1><i class="fab fa-vuejs icon"></i> Introduction à Vue.js</h1>
                <p>
                    <strong>Vue.js</strong> est un framework JavaScript progressif, idéal pour construire des interfaces utilisateur interactives et dynamiques. Il est conçu pour être adoptable progressivement, ce qui signifie que vous pouvez commencer avec des fonctionnalités simples et évoluer vers des applications plus complexes. 
                </p>
                <div class="highlight">
                    <strong>Avantages de Vue.js :</strong>
                    <ul>
                        <li><i class="fas fa-check-circle" style="color: green;"></i> Facile à apprendre et intégrer.</li>
                        <li><i class="fas fa-check-circle" style="color: green;"></i> Composants réutilisables.</li>
                        <li><i class="fas fa-check-circle" style="color: green;"></i> Parfait pour les applications SPA (Single Page Application).</li>
                    </ul>
                </div>
                <div class="importance-section">
                    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques :</h3>
                    <ul class="importance-list">
                        <li>Décomposez votre projet en composants réutilisables.</li>
                        <li>Nommez vos composants et fichiers de manière descriptive.</li>
                        <li>Évitez d'écrire des méthodes trop longues dans le script.</li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <h2><i class="fas fa-download icon"></i> Installation et Préparation de l’Environnement</h2>

                <h3><i class="fas fa-globe icon"></i> Méthode 1 : Utilisation via un CDN</h3>
                <p>Ajoutez Vue.js directement dans votre projet HTML via une balise <code>&lt;script&gt;</code>. Cette méthode est idéale pour commencer rapidement.</p>
                <div class="example-box">
    <pre>
<span class="comment">// Ajoutez Vue.js via un CDN</span>
<span class="tag">&lt;script</span> <span class="property">src</span>=<span class="string">"https://cdn.jsdelivr.net/npm/vue@3"</span>&gt;<span class="tag">&lt;/script&gt;</span>

<span class="comment">// Exemple minimal</span>
<span class="tag">&lt;div</span> <span class="property">id</span>=<span class="string">"app"</span>&gt;{{ message }}<span class="tag">&lt;/div&gt;</span>

<span class="keyword">const</span> <span class="variable">app</span> = Vue.<span class="function">createApp</span>({
    <span class="function">data</span>() {
        <span class="keyword">return</span> {
            <span class="property">message</span>: <span class="string">'Bonjour Vue.js!'</span>
        };
    }
});
<span class="variable">app</span>.<span class="function">mount</span>(<span class="string">'#app'</span>);
    </pre>
</div>


                <h3><i class="fas fa-tools icon"></i> Méthode 2 : Installation avec Vue CLI</h3>
                <p>
                    <strong>Vue CLI</strong> est un outil en ligne de commande pour générer des projets Vue.js avec une structure optimisée.
                </p>
                <ol>
                    <li><i class="fas fa-code"></i> Installez Vue CLI :
                        <code class="highlight">npm install -g @vue/cli</code>
                    </li>
                    <li><i class="fas fa-folder"></i> Créez un nouveau projet :
                        <code class="highlight">vue create mon-projet</code>
                    </li>
                    <li><i class="fas fa-play-circle"></i> Démarrez le serveur de développement :
                        <code class="highlight">npm run serve</code>
                    </li>
                </ol>

                <h3><i class="fas fa-rocket icon"></i> Méthode 3 : Utilisation avec Vite</h3>
                <p>
                    <strong>Vite</strong> est une alternative rapide pour configurer un projet Vue.js. Il est particulièrement adapté pour des projets modernes grâce à sa vitesse.
                </p>
                <ol>
                    <li><i class="fas fa-terminal"></i> Créez un projet avec Vite :
                        <code class="highlight">npm create vite@latest mon-projet --template vue</code>
                    </li>
                    <li><i class="fas fa-cogs"></i> Installez les dépendances :
                        <code class="highlight">cd mon-projet && npm install</code>
                    </li>
                    <li><i class="fas fa-play-circle"></i> Démarrez le serveur de développement :
                        <code class="highlight">npm run dev</code>
                    </li>
                </ol>
            </div>
            <div class="sommaire-container">
                <h2><i class="fas fa-book-open"></i> Sommaire - Vue Instance</h2>
                <ul>
                    <li><a href="#data"><i class="fas fa-database"></i> La Propriété <code>data</code></a></li>
                    <li><a href="#methods"><i class="fas fa-code"></i> La Propriété <code>methods</code></a></li>
                    <li><a href="#computed"><i class="fas fa-calculator"></i> La Propriété <code>computed</code></a></li>
                    <li><a href="#watch"><i class="fas fa-eye"></i> La Propriété <code>watch</code></a></li>
                    <li><a href="#lifecycle-hooks"><i class="fas fa-history"></i> Les Hooks du Cycle de Vie</a></li>
                </ul>
            </div>

            <div class="container">
                <h2 id="data"><i class="fas fa-database icon"></i> La Propriété `data` dans Vue.js</h2>
                <p>
                    La propriété <code>data</code> dans Vue.js est utilisée pour définir des données réactives qui pilotent l’état de l’application. Ces données sont synchronisées automatiquement avec l'interface utilisateur, offrant une expérience fluide et dynamique. Vue.js détecte les changements dans les données et met à jour le DOM sans intervention manuelle.
                </p>

                <h3><i class="fas fa-info-circle"></i> Qu’est-ce que `data` ?</h3>
                <p>
                    `data` est une fonction qui retourne un objet contenant des propriétés réactives. Ces propriétés sont accessibles dans votre HTML via des expressions ou des directives. Vue.js utilise un système d’observateurs pour détecter les modifications dans ces données et mettre à jour l’affichage en conséquence.
                </p>

                <h3><i class="fas fa-code"></i> Déclaration de `data`</h3>
                <p>
                    Voici comment définir `data` dans une instance Vue :
                </p>
                <div class="example-box">
    <pre>
<span class="keyword">const</span> <span class="variable">app</span> = Vue.<span class="function">createApp</span>({
    <span class="function">data</span>() {
        <span class="keyword">return</span> {
            <span class="property">message</span>: <span class="string">'Bonjour Vue.js!'</span>,
            <span class="property">compteur</span>: <span class="number">0</span>
        };
    }
});
<span class="variable">app</span>.<span class="function">mount</span>(<span class="string">'#app'</span>);
    </pre>
</div>

                <p>
                    Dans cet exemple :
                </p>
                <ul class="importance-list">
                    <li><code>message</code> et <code>compteur</code> sont des propriétés définies dans `data`.</li>
                    <li>Ces propriétés deviennent automatiquement réactives.</li>
                    <li>Le DOM sera mis à jour si leurs valeurs changent.</li>
                </ul>

                <h3><i class="fas fa-eye"></i> Utilisation dans le DOM</h3>
                <p>
                    Une fois définies, les données de `data` peuvent être utilisées dans le DOM via :
                </p>
                <ul class="importance-list">
                    <li><strong>Interpolation :</strong> Utilisez <code>{{ }}</code> pour afficher les valeurs des données.</li>
                    <li><strong>Directives :</strong> Utilisez des directives comme <code>v-bind</code> ou <code>v-model</code> pour lier des données.</li>
                </ul>
                <div class="example-box">
    <pre>
<span class="comment">// HTML</span>
<span class="tag">&lt;div</span> <span class="property">id</span>=<span class="string">'app'</span>&gt;
    <span class="tag">&lt;p&gt;</span>{{ message }}<span class="tag">&lt;/p&gt;</span>
    <span class="tag">&lt;button</span> <span class="property">@click</span>=<span class="string">'compteur++'</span>&gt;
        Incrémenter<span class="tag">&lt;/button&gt;</span>
    <span class="tag">&lt;p&gt;</span>Compteur : {{ compteur }}<span class="tag">&lt;/p&gt;</span>
<span class="tag">&lt;/div&gt;</span>
    </pre>
</div>

                <p>
                    Lorsque vous cliquez sur le bouton, la valeur de <code>compteur</code> augmente automatiquement, et le DOM est mis à jour sans effort supplémentaire.
                </p>

                <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
                <p>
                    `data` est souvent utilisé dans des cas pratiques comme :
                </p>
                <ul class="importance-list">
                    <li>Afficher des listes dynamiques (ex. : tableau de produits, liste d’utilisateurs).</li>
                    <li>Gérer des formulaires avec des champs liés aux données.</li>
                    <li>Synchroniser l’état d’une application avec les actions de l’utilisateur.</li>
                </ul>
                <div class="example-box">
    <pre>
<span class="comment">// Exemple : Liste dynamique</span>
<span class="keyword">const</span> <span class="variable">app</span> = Vue.<span class="function">createApp</span>({
    <span class="function">data</span>() {
        <span class="keyword">return</span> {
            <span class="property">utilisateurs</span>: [
                { <span class="property">nom</span>: <span class="string">'Alice'</span>, <span class="property">age</span>: <span class="number">25</span> },
                { <span class="property">nom</span>: <span class="string">'Bob'</span>, <span class="property">age</span>: <span class="number">30</span> }
            ]
        };
    }
});
    </pre>
</div>

                <p>Dans le DOM :</p>
                <div class="example-box">
    <pre>
<span class="tag">&lt;ul&gt;</span>
    <span class="tag">&lt;li</span> <span class="property">v-for</span>=<span class="string">'utilisateur in utilisateurs'</span>&gt;
        {{ utilisateur.nom }} - {{ utilisateur.age }} ans<span class="tag">&lt;/li&gt;</span>
<span class="tag">&lt;/ul&gt;</span>
    </pre>
</div>

                <p>
                    Cette approche rend vos interfaces dynamiques et flexibles, avec une gestion simple des données.
                </p>

                <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
                <ul class="importance-list">
                    <li><strong>Noms descriptifs :</strong> Donnez des noms clairs et significatifs à vos propriétés pour améliorer la lisibilité du code.</li>
                    <li><strong>Divisez vos données :</strong> Si vous avez beaucoup de données, répartissez-les dans plusieurs composants pour une meilleure maintenabilité.</li>
                    <li><strong>Évitez les objets complexes inutilisés :</strong> N'incluez dans `data` que ce qui est nécessaire à l'interface utilisateur.</li>
                </ul>

                <h3><i class="fas fa-check"></i> Résumé</h3>
                <ul class="importance-list">
                    <li><code>data</code> est la source de toutes les données réactives dans Vue.js.</li>
                    <li>Les modifications des données se reflètent automatiquement dans le DOM.</li>
                    <li>Utilisez des bonnes pratiques pour garder vos données organisées et claires.</li>
                </ul>
            </div>
            <div class="container">
                <h2 id="methods"><i class="fas fa-code icon"></i> La Propriété `methods` dans Vue.js</h2>
                <p>
                    La propriété <code>methods</code> dans Vue.js est utilisée pour définir des fonctions ou des actions que votre application peut exécuter. Ces méthodes sont souvent utilisées pour gérer les événements ou encapsuler des logiques complexes liées à vos données ou à votre interface utilisateur.
                </p>

                <h3><i class="fas fa-cogs"></i> Déclaration de `methods`</h3>
                <p>
                    Les méthodes sont définies comme des fonctions dans un objet. Elles sont accessibles dans le HTML via des directives comme <code>@click</code>, ou depuis d'autres méthodes dans le script.
                </p>
                <div class="example-box">
    <pre>
<span class="comment">// Déclaration de méthodes dans Vue.js</span>
<span class="keyword">const</span> <span class="variable">app</span> = Vue.<span class="function">createApp</span>({
    <span class="function">data</span>() {
        <span class="keyword">return</span> {
            <span class="property">compteur</span>: <span class="number">0</span>
        };
    },
    <span class="keyword">methods</span>: {
        <span class="function">incrementer</span>() {
            <span class="keyword">this</span>.<span class="property">compteur</span>++;
        },
        <span class="function">reset</span>() {
            <span class="keyword">this</span>.<span class="property">compteur</span> = <span class="number">0</span>;
        }
    }
});

<span class="variable">app</span>.<span class="function">mount</span>(<span class="string">'#app'</span>);
    </pre>
</div>


                <h3><i class="fas fa-hand-pointer"></i> Utilisation dans le DOM</h3>
                <p>
                    Une fois définies, les méthodes peuvent être appelées directement depuis le DOM à l'aide de directives d'événements comme <code>@click</code>, <code>@submit</code>, etc.
                </p>
                <div class="example-box">
    <pre>
<span class="comment">// Exemple HTML</span>
<span class="tag">&lt;div</span> <span class="property">id</span>=<span class="string">'app'</span>&gt;
    <span class="tag">&lt;p&gt;</span>Compteur : {{ compteur }}<span class="tag">&lt;/p&gt;</span>
    <span class="tag">&lt;button</span> <span class="property">@click</span>=<span class="string">'incrementer'</span>&gt;
        Ajouter<span class="tag">&lt;/button&gt;</span>
    <span class="tag">&lt;button</span> <span class="property">@click</span>=<span class="string">'reset'</span>&gt;
        Réinitialiser<span class="tag">&lt;/button&gt;</span>
<span class="tag">&lt;/div&gt;</span>
    </pre>
</div>


                <h3><i class="fas fa-cog"></i> Applications Professionnelles</h3>
                <p>
                    Les méthodes sont souvent utilisées pour :
                </p>
                <ul class="importance-list">
                    <li>Gérer les événements utilisateur (clics, soumissions de formulaire, etc.).</li>
                    <li>Encapsuler des logiques complexes pour améliorer la lisibilité.</li>
                    <li>Manipuler les données réactives.</li>
                    <li>Appeler des APIs ou exécuter des requêtes asynchrones.</li>
                </ul>
                <div class="example-box">
    <pre>
<span class="comment">// Exemple : Appel d'une API dans une méthode</span>
<span class="keyword">const</span> <span class="variable">app</span> = Vue.<span class="function">createApp</span>({
    <span class="function">data</span>() {
        <span class="keyword">return</span> {
            <span class="property">utilisateurs</span>: [],
            <span class="property">erreur</span>: <span class="string">''</span>
        };
    },
    <span class="keyword">methods</span>: {
        <span class="function">async chargerUtilisateurs</span>() {
            <span class="keyword">try</span> {
                <span class="keyword">const</span> <span class="variable">response</span> = <span class="keyword">await</span> fetch(<span class="string">'https://api.example.com/users'</span>);
                <span class="keyword">this</span>.<span class="property">utilisateurs</span> = <span class="keyword">await</span> <span class="variable">response</span>.<span class="function">json</span>();
            } <span class="keyword">catch</span> (<span class="variable">e</span>) {
                <span class="keyword">this</span>.<span class="property">erreur</span> = <span class="string">'Impossible de charger les données.'</span>;
            }
        }
    }
});

<span class="variable">app</span>.<span class="function">mount</span>(<span class="string">'#app'</span>);
    </pre>
</div>

                <p>
                    Ici, la méthode <code>chargerUtilisateurs</code> récupère des données depuis une API et les stocke dans une propriété réactive. Les erreurs sont également gérées.
                </p>

                <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
                <ul class="importance-list">
                    <li>Gardez vos méthodes simples et concentrées sur une seule tâche.</li>
                    <li>Ne manipulez pas directement le DOM dans vos méthodes. Utilisez les fonctionnalités réactives de Vue.</li>
                    <li>Utilisez des noms clairs et descriptifs pour vos méthodes.</li>
                    <li>Évitez de dupliquer des logiques similaires. Envisagez de les extraire dans des fonctions réutilisables.</li>
                </ul>

                <h3><i class="fas fa-check-circle"></i> Résumé</h3>
                <ul class="importance-list">
                    <li><code>methods</code> est utilisé pour définir les fonctions de votre application Vue.js.</li>
                    <li>Les méthodes sont accessibles dans le DOM via des directives comme <code>@click</code>.</li>
                    <li>Utilisez-les pour gérer les événements, encapsuler des logiques ou manipuler des données réactives.</li>
                    <li>Respectez les bonnes pratiques pour garder votre code propre et maintenable.</li>
                </ul>
            </div>
            <div class="container">
    <h2 id="computed"><i class="fas fa-calculator icon"></i> La Propriété `computed` dans Vue.js</h2>
    <p>
        La propriété <code>computed</code> dans Vue.js est utilisée pour définir des propriétés dérivées basées sur d'autres données. Contrairement aux méthodes, les propriétés calculées sont mises en cache et recalculées uniquement lorsque leurs dépendances changent.
    </p>

    <h3><i class="fas fa-info-circle"></i> Qu’est-ce qu’une Propriété Calculée ?</h3>
    <p>
        Une propriété calculée est une fonction qui retourne une valeur basée sur d'autres propriétés. Elle est réactive, ce qui signifie qu'elle sera automatiquement mise à jour si ses dépendances changent.
    </p>

    <h3><i class="fas fa-cogs"></i> Déclaration de `computed`</h3>
    <p>
        Voici comment définir et utiliser une propriété calculée dans Vue.js :
    </p>
    <div class="example-box">
    <pre>
<span class="comment">// Déclaration d'une propriété calculée</span>
<span class="keyword">const</span> <span class="variable">app</span> = Vue.<span class="function">createApp</span>({
    <span class="function">data</span>() {
        <span class="keyword">return</span> {
            <span class="property">firstName</span>: <span class="string">'Jean'</span>,
            <span class="property">lastName</span>: <span class="string">'Dupont'</span>
        };
    },
    <span class="keyword">computed</span>: {
        <span class="function">fullName</span>() {
            <span class="keyword">return</span> <span class="template-string">`${this.firstName} ${this.lastName}`</span>;
        }
    }
});

<span class="variable">app</span>.<span class="function">mount</span>(<span class="string">'#app'</span>);
    </pre>
</div>


    <h3><i class="fas fa-eye"></i> Utilisation dans le DOM</h3>
    <p>
        Une fois définies, les propriétés calculées peuvent être utilisées dans le DOM comme n'importe quelle donnée réactive :
    </p>
    <div class="example-box">
    <pre>
<span class="comment">// Exemple HTML</span>
<span class="tag">&lt;div</span> <span class="property">id</span>=<span class="string">'app'</span>&gt;
    <span class="tag">&lt;p&gt;</span>Nom Complet : {{ fullName }}<span class="tag">&lt;/p&gt;</span>
    <span class="tag">&lt;input</span> <span class="property">v-model</span>=<span class="string">'firstName'</span> <span class="property">placeholder</span>=<span class="string">'Prénom'</span>&gt;
    <span class="tag">&lt;input</span> <span class="property">v-model</span>=<span class="string">'lastName'</span> <span class="property">placeholder</span>=<span class="string">'Nom'</span>&gt;
<span class="tag">&lt;/div&gt;</span>
    </pre>
</div>

    <p>
        Lorsque l'utilisateur modifie les champs de saisie, la propriété calculée <code>fullName</code> est automatiquement mise à jour et reflétée dans le DOM.
    </p>

    <h3><i class="fas fa-rocket"></i> Différence entre `methods` et `computed`</h3>
    <p>
        Bien qu'une méthode puisse également retourner une valeur dérivée, les propriétés calculées offrent un avantage clé : elles sont mises en cache. Cela signifie qu'elles ne sont recalculées que si leurs dépendances changent, ce qui améliore les performances.
    </p>
    <div class="example-box">
    <pre>
<span class="comment">// Méthode vs. Propriété Calculée</span>
<span class="keyword">const</span> <span class="variable">app</span> = Vue.<span class="function">createApp</span>({
    <span class="function">data</span>() {
        <span class="keyword">return</span> {
            <span class="property">firstName</span>: <span class="string">'Jean'</span>,
            <span class="property">lastName</span>: <span class="string">'Dupont'</span>
        };
    },
    <span class="keyword">methods</span>: {
        <span class="function">getFullName</span>() {
            <span class="keyword">return</span> <span class="template-string">`${this.firstName} ${this.lastName}`</span>;
        }
    },
    <span class="keyword">computed</span>: {
        <span class="function">fullName</span>() {
            <span class="keyword">return</span> <span class="template-string">`${this.firstName} ${this.lastName}`</span>;
        }
    }
});

<span class="comment">// HTML</span>
<span class="tag">&lt;p&gt;</span>{{ getFullName() }} <span class="tag">&lt;/p&gt;</span> <span class="comment">// Méthode</span>
<span class="tag">&lt;p&gt;</span>{{ fullName }} <span class="tag">&lt;/p&gt;</span> <span class="comment">// Propriété Calculée</span>
    </pre>
</div>


    <h3><i class="fas fa-cog"></i> Applications Pratiques</h3>
    <p>
        Les propriétés calculées sont utiles dans plusieurs cas pratiques, comme :
    </p>
    <ul class="importance-list">
        <li>Générer des valeurs dérivées, comme des totaux ou des formats personnalisés.</li>
        <li>Filtrer ou trier des listes basées sur des critères dynamiques.</li>
        <li>Formater les données pour une meilleure présentation (ex. : formater des dates ou des prix).</li>
    </ul>
    <div class="example-box">
    <pre>
<span class="comment">// Exemple : Liste triée</span>
<span class="keyword">const</span> <span class="variable">app</span> = Vue.<span class="function">createApp</span>({
    <span class="function">data</span>() {
        <span class="keyword">return</span> {
            <span class="property">utilisateurs</span>: [
                { <span class="property">nom</span>: <span class="string">'Alice'</span>, <span class="property">age</span>: <span class="number">25</span> },
                { <span class="property">nom</span>: <span class="string">'Bob'</span>, <span class="property">age</span>: <span class="number">30</span> }
            ]
        };
    },
    <span class="keyword">computed</span>: {
        <span class="function">utilisateursTries</span>() {
            <span class="keyword">return</span> <span class="keyword">this</span>.<span class="property">utilisateurs</span>.<span class="function">sort</span>((<span class="variable">a</span>, <span class="variable">b</span>) => <span class="variable">a</span>.<span class="property">age</span> - <span class="variable">b</span>.<span class="property">age</span>);
        }
    }
});

<span class="variable">app</span>.<span class="function">mount</span>(<span class="string">'#app'</span>);
    </pre>
</div>


    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Utilisez `computed` pour les propriétés dérivées complexes et récurrentes.</li>
        <li>Évitez d'ajouter des effets secondaires dans les propriétés calculées.</li>
        <li>Combinez `computed` avec des méthodes pour gérer des actions spécifiques basées sur ces calculs.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li>`computed` est utilisé pour des valeurs dérivées basées sur d'autres données réactives.</li>
        <li>Les propriétés calculées sont mises en cache, ce qui les rend plus performantes que les méthodes dans certains cas.</li>
        <li>Utilisez-les pour garder votre logique claire et éviter les redondances.</li>
    </ul>
</div>
<div class="container">
    <h2 id="watch"><i class="fas fa-eye icon"></i> La Propriété `watch` dans Vue.js</h2>
    <p>
        La propriété <code>watch</code> dans Vue.js est utilisée pour observer et réagir aux changements des données réactives. Contrairement à <code>computed</code>, qui est utilisé pour les calculs basés sur des données, <code>watch</code> est idéal pour exécuter des actions ou déclencher des effets secondaires lorsque les données changent.
    </p>

    <h3><i class="fas fa-info-circle"></i> Quand Utiliser `watch` ?</h3>
    <p>
        Utilisez `watch` lorsque vous devez exécuter une logique complexe ou déclencher des actions asynchrones en réponse à un changement de données, par exemple :
    </p>
    <ul class="importance-list">
        <li>Appeler une API lorsque les données changent.</li>
        <li>Effectuer des validations ou des ajustements basés sur des changements spécifiques.</li>
        <li>Gérer des effets secondaires comme la journalisation ou la mise à jour de composants externes.</li>
    </ul>

    <h3><i class="fas fa-cogs"></i> Déclaration de `watch`</h3>
    <p>
        Voici comment configurer un observateur dans Vue.js :
    </p>
    <div class="example-box">
    <pre>
<span class="comment">// Exemple : Observer un compteur</span>
<span class="keyword">const</span> <span class="variable">app</span> = Vue.<span class="function">createApp</span>({
    <span class="function">data</span>() {
        <span class="keyword">return</span> {
            <span class="property">compteur</span>: <span class="number">0</span>
        };
    },
    <span class="keyword">watch</span>: {
        <span class="property">compteur</span>(<span class="variable">nouvelleValeur</span>, <span class="variable">ancienneValeur</span>) {
            <span class="comment">// Exécute une action chaque fois que 'compteur' change</span>
            console.<span class="function">log</span>(<span class="template-string">`Compteur changé de ${ancienneValeur} à ${nouvelleValeur}`</span>);
        }
    }
});

<span class="variable">app</span>.<span class="function">mount</span>(<span class="string">'#app'</span>);
    </pre>
</div>


    <h3><i class="fas fa-tasks"></i> Observer Plusieurs Propriétés</h3>
    <p>
        Vous pouvez également observer plusieurs propriétés :
    </p>
    <div class="example-box">
    <pre>
<span class="comment">// Exemple : Observer plusieurs propriétés</span>
<span class="keyword">const</span> <span class="variable">app</span> = Vue.<span class="function">createApp</span>({
    <span class="function">data</span>() {
        <span class="keyword">return</span> {
            <span class="property">nom</span>: <span class="string">'Jean'</span>,
            <span class="property">age</span>: <span class="number">30</span>
        };
    },
    <span class="keyword">watch</span>: {
        <span class="property">nom</span>(<span class="variable">nouveauNom</span>, <span class="variable">ancienNom</span>) {
            console.<span class="function">log</span>(<span class="template-string">`Nom changé de ${ancienNom} à ${nouveauNom}`</span>);
        },
        <span class="property">age</span>(<span class="variable">nouvelAge</span>, <span class="variable">ancienAge</span>) {
            console.<span class="function">log</span>(<span class="template-string">`Âge changé de ${ancienAge} à ${nouvelAge}`</span>);
        }
    }
});

<span class="variable">app</span>.<span class="function">mount</span>(<span class="string">'#app'</span>);
    </pre>
</div>


    <h3><i class="fas fa-wrench"></i> Utiliser avec des Données Profondes</h3>
    <p>
        Pour observer des objets ou des tableaux, vous pouvez activer une observation en profondeur en utilisant l’option <code>deep</code>.
    </p>
    <div class="example-box">
    <pre>
<span class="comment">// Exemple : Observer un tableau en profondeur</span>
<span class="keyword">const</span> <span class="variable">app</span> = Vue.<span class="function">createApp</span>({
    <span class="function">data</span>() {
        <span class="keyword">return</span> {
            <span class="property">utilisateurs</span>: [
                { <span class="property">nom</span>: <span class="string">'Alice'</span>, <span class="property">age</span>: <span class="number">25</span> },
                { <span class="property">nom</span>: <span class="string">'Bob'</span>, <span class="property">age</span>: <span class="number">30</span> }
            ]
        };
    },
    <span class="keyword">watch</span>: {
        <span class="property">utilisateurs</span>: {
            <span class="property">handler</span>(<span class="variable">nouvelleValeur</span>, <span class="variable">ancienneValeur</span>) {
                console.<span class="function">log</span>(<span class="string">'Liste des utilisateurs mise à jour'</span>, <span class="variable">nouvelleValeur</span>);
            },
            <span class="property">deep</span>: <span class="keyword">true</span>
        }
    }
});

<span class="variable">app</span>.<span class="function">mount</span>(<span class="string">'#app'</span>);
    </pre>
</div>


    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <p>
        Voici des exemples concrets où utiliser `watch` :
    </p>
    <ul class="importance-list">
        <li>Appeler une API chaque fois qu'un champ de recherche est modifié.</li>
        <li>Enregistrer automatiquement des données dans une base de données locale lorsque l'utilisateur modifie un formulaire.</li>
        <li>Déclencher des animations ou des effets en réponse à des événements utilisateur.</li>
    </ul>
    <div class="example-box">
    <pre>
<span class="comment">// Exemple : API basée sur une recherche</span>
<span class="keyword">const</span> <span class="variable">app</span> = Vue.<span class="function">createApp</span>({
    <span class="function">data</span>() {
        <span class="keyword">return</span> {
            <span class="property">recherche</span>: <span class="string">''</span>,
            <span class="property">resultats</span>: []
        };
    },
    <span class="keyword">watch</span>: {
        <span class="property">recherche</span>: {
            <span class="property">handler</span>: <span class="keyword">async</span> (<span class="variable">nouvelleRecherche</span>) => {
                <span class="keyword">try</span> {
                    <span class="keyword">const</span> <span class="variable">response</span> = <span class="keyword">await</span> fetch(<span class="template-string">`https://api.example.com/search?q=${nouvelleRecherche}`</span>);
                    <span class="keyword">this</span>.<span class="property">resultats</span> = <span class="keyword">await</span> <span class="variable">response</span>.<span class="function">json</span>();
                } <span class="keyword">catch</span> (<span class="variable">e</span>) {
                    console.<span class="function">error</span>(<span class="string">'Erreur lors de la recherche :'</span>, <span class="variable">e</span>);
                }
            },
            <span class="property">immediate</span>: <span class="keyword">true</span> <span class="comment">// Lance immédiatement pour les données initiales</span>
        }
    }
});

<span class="variable">app</span>.<span class="function">mount</span>(<span class="string">'#app'</span>);
    </pre>
</div>


    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Utilisez `watch` pour des actions spécifiques nécessitant des effets secondaires (ex. : appels API).</li>
        <li>Activez `deep` uniquement lorsque nécessaire pour éviter des surcoûts en performance.</li>
        <li>Préférez `computed` pour des transformations simples de données.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li>`watch` est idéal pour surveiller et réagir aux changements de données.</li>
        <li>Il prend en charge des fonctionnalités avancées comme l’observation profonde et l’exécution immédiate.</li>
        <li>Utilisez-le pour des scénarios spécifiques nécessitant des effets secondaires ou une logique complexe.</li>
    </ul>
</div>
<div class="container">
    <h2 id="lifecycle-hooks"><i class="fas fa-history icon"></i> Hooks du Cycle de Vie dans Vue.js</h2>
    <p>
        Les hooks du cycle de vie (ou Lifecycle Hooks) permettent d'exécuter du code à des moments spécifiques du cycle de vie d'un composant. Ils vous donnent un contrôle total sur la manière dont votre application Vue.js est initialisée, mise à jour ou détruite.
    </p>

    <h3><i class="fas fa-info-circle"></i> Qu'est-ce qu'un Hook du Cycle de Vie ?</h3>
    <p>
        Chaque composant Vue traverse une série d'étapes depuis sa création jusqu'à sa destruction. À chaque étape, Vue expose des hooks spécifiques que vous pouvez utiliser pour exécuter du code.
    </p>
    <div class="highlight">
        <strong>Principales étapes du cycle de vie :</strong>
        <ul>
            <li><i class="fas fa-circle"></i> Création (Initialisation des données, des méthodes et des observateurs).</li>
            <li><i class="fas fa-circle"></i> Montage (Insertion du DOM généré dans la page).</li>
            <li><i class="fas fa-circle"></i> Mise à jour (Réaction aux changements de données).</li>
            <li><i class="fas fa-circle"></i> Destruction (Nettoyage avant que le composant ne soit retiré).</li>
        </ul>
    </div>

    <h3><i class="fas fa-cogs"></i> Liste des Hooks du Cycle de Vie</h3>
    <p>
        Voici les principaux hooks disponibles dans Vue.js :
    </p>
    <ul class="importance-list">
        <li><code>beforeCreate</code> : Appelé immédiatement après la création de l'instance, avant l'initialisation des données et des événements.</li>
        <li><code>created</code> : Appelé après l'initialisation des données et des événements.</li>
        <li><code>beforeMount</code> : Appelé avant que le DOM virtuel ne soit inséré dans le DOM réel.</li>
        <li><code>mounted</code> : Appelé après que le composant a été monté dans le DOM.</li>
        <li><code>beforeUpdate</code> : Appelé avant une mise à jour du DOM réactif.</li>
        <li><code>updated</code> : Appelé après une mise à jour du DOM réactif.</li>
        <li><code>beforeUnmount</code> : Appelé juste avant que le composant ne soit détruit.</li>
        <li><code>unmounted</code> : Appelé après que le composant a été détruit.</li>
    </ul>

    <h3><i class="fas fa-code"></i> Exemples d'Utilisation</h3>
    <p>
        Les hooks du cycle de vie sont particulièrement utiles pour des tâches comme :
    </p>
    <ul>
        <li>Initialiser des données ou effectuer des appels API au moment de la création du composant.</li>
        <li>Configurer des écouteurs d'événements ou des timers au montage.</li>
        <li>Effectuer des animations ou des transitions après le rendu du composant.</li>
        <li>Nettoyer les ressources (comme les écouteurs ou les connexions) avant la destruction du composant.</li>
    </ul>
    <div class="example-box">
        <pre>
<span class="comment">// Exemple : Utilisation des hooks du cycle de vie</span>
<span class="keyword">const</span> app = Vue.createApp({
    <span class="keyword">data</span>() {
        <span class="keyword">return</span> {
            message: <span class="string">'Bienvenue!'</span>,
            timer: <span class="keyword">null</span>
        };
    },
    <span class="keyword">created</span>() {
        console.log(<span class="string">'Le composant est créé.'</span>);
    },
    <span class="keyword">mounted</span>() {
        console.log(<span class="string">'Le composant est monté dans le DOM.'</span>);
        this.timer = setInterval(() => {
            console.log(<span class="string">'Mise à jour toutes les secondes.'</span>);
        }, <span class="number">1000</span>);
    },
    <span class="keyword">beforeUnmount</span>() {
        console.log(<span class="string">'Le composant va être détruit.'</span>);
        clearInterval(this.timer);
    },
    <span class="keyword">unmounted</span>() {
        console.log(<span class="string">'Le composant a été détruit.'</span>);
    }
});

app.mount(<span class="string">'#app'</span>);
        </pre>
    </div>

    <h3><i class="fas fa-rocket"></i> Applications Professionnelles</h3>
    <p>
        Les hooks du cycle de vie sont essentiels pour :
    </p>
    <ul>
        <li>Initialiser des connexions API ou des services en temps réel (WebSocket, Firebase).</li>
        <li>Mettre en place des animations au montage ou à la destruction.</li>
        <li>Optimiser les performances en libérant les ressources inutilisées.</li>
    </ul>

    <div class="example-box">
        <pre>
<span class="comment">// Exemple : Connexion WebSocket avec hooks</span>
<span class="keyword">const</span> app = Vue.createApp({
    <span class="keyword">data</span>() {
        <span class="keyword">return</span> {
            socket: <span class="keyword">null</span>,
            messages: []
        };
    },
    <span class="keyword">mounted</span>() {
        this.socket = <span class="keyword">new</span> WebSocket(<span class="string">'wss://example.com/socket'</span>);
        this.socket.onmessage = (<span class="keyword">event</span>) => {
            this.messages.push(<span class="keyword">JSON</span>.parse(<span class="keyword">event</span>.data));
        };
    },
    <span class="keyword">beforeUnmount</span>() {
        this.socket.close();
    }
});

app.mount(<span class="string">'#app'</span>);
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Utilisez <code>created</code> pour initialiser les données et les configurations simples.</li>
        <li>Réservez <code>mounted</code> pour les manipulations nécessitant le DOM (ex. : animations, écouteurs).</li>
        <li>Nettoyez toujours les ressources dans <code>beforeUnmount</code> pour éviter les fuites de mémoire.</li>
        <li>Évitez de surcharger les hooks : décomposez les tâches complexes en méthodes distinctes.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li>Les hooks du cycle de vie permettent de contrôler le comportement des composants à chaque étape de leur cycle.</li>
        <li>Ils sont utiles pour initialiser des données, configurer des ressources, et nettoyer les composants.</li>
        <li>Respectez les bonnes pratiques pour maintenir un code clair et performant.</li>
    </ul>
</div>
<div class="sommaire-container">
    <h2><i class="fas fa-book-open"></i> Sommaire - Template Syntax</h2>
    <ul>
        <li><a href="#expressions"><i class="fas fa-code"></i> Les Expressions</a></li>
        <li><a href="#interpolation"><i class="fas fa-redo"></i> L'Interpolation</a></li>
        <li><a href="#modifiers"><i class="fas fa-edit"></i> Les Modificateurs</a></li>
    </ul>
</div>
<div class="container">
    <h2 id="expressions"><i class="fas fa-code"></i> Les Expressions</h2>
    <p>
        Les expressions dans Vue.js sont des fragments de logique qui permettent d'afficher dynamiquement des données, d'effectuer des opérations simples ou de transformer des valeurs directement dans les templates. Elles utilisent la syntaxe moustache <code>{{ }}</code>.
    </p>

    <h3><i class="fas fa-info-circle"></i> Introduction aux Expressions</h3>
    <p>
        Une expression est un code JavaScript simple, évalué et affiché directement dans le DOM. Vue.js lie ces expressions au modèle réactif, ce qui signifie qu'elles se mettent à jour automatiquement lorsque leurs dépendances changent.
    </p>

    <h3><i class="fas fa-code"></i> Syntaxe de Base</h3>
    <p>
        Les expressions sont encadrées par des doubles accolades <code>{{ }}</code>. Voici un exemple simple :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;div&gt;</span>
    Bonjour, {{ nom }} ! <span class="comment">// Affiche le contenu de la propriété 'nom'</span>
    Le résultat de 2 + 3 est {{ 2 + 3 }}.
<span class="tag">&lt;/div&gt;</span>
        </pre>
    </div>

    <p>
        Dans cet exemple :
        <ul>
            <li><code>nom</code> est une propriété définie dans <code>data</code>.</li>
            <li>Vue.js évalue automatiquement l'expression <code>2 + 3</code> et affiche <code>5</code>.</li>
        </ul>
    </p>

    <h3><i class="fas fa-check-circle"></i> Ce qui est Autorisé dans une Expression</h3>
    <p>
        Les expressions dans Vue.js prennent en charge :
    </p>
    <ul class="importance-list">
        <li>Les valeurs de propriétés définies dans <code>data</code>.</li>
        <li>Les appels de méthodes définies dans <code>methods</code>.</li>
        <li>Les opérations simples (mathématiques, concaténation, ternaires).</li>
    </ul>
    <div class="example-box">
        <pre>
<span class="tag">&lt;div&gt;</span>
    Bonjour, {{ nom + ' Dupont' }} ! <span class="comment">// Concaténation de chaînes</span>
    Vous avez {{ age > 18 ? 'accès autorisé' : 'accès refusé' }}.
<span class="tag">&lt;/div&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-exclamation-triangle"></i> Ce qui n’est Pas Autorisé</h3>
    <p>
        Les expressions dans Vue.js sont limitées à des fragments de logique simples. Vous ne pouvez pas utiliser :
    </p>
    <ul>
        <li>Des instructions complètes comme <code>if</code>, <code>while</code>, ou <code>for</code>.</li>
        <li>Des blocs de code multiples.</li>
    </ul>
    <div class="example-box">
        <pre>
<span class="comment">// Exemple invalide</span>
{{ <span class="keyword">if</span> (age > 18) { <span class="keyword">return</span> 'OK'; } }}
        </pre>
    </div>

    <p>
        Si vous avez besoin d’une logique plus complexe, utilisez des méthodes ou des propriétés calculées (via <code>computed</code>).
    </p>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques des Expressions</h3>
    <p>
        Voici quelques exemples pratiques d'utilisation des expressions dans des projets professionnels :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;ul&gt;</span>
    <span class="tag">&lt;li</span> v-for=<span class="string">'produit in produits'</span>&gt;
        {{ produit.nom }} : {{ produit.prix }} €
    <span class="tag">&lt;/li&gt;</span>
<span class="tag">&lt;/ul&gt;</span>

<span class="comment">// Transformation simple pour formater une valeur</span>
{{ total.toFixed(2) }} <span class="comment">// Affiche le total avec deux décimales</span>
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Gardez les expressions simples et faciles à comprendre.</li>
        <li>Évitez d'intégrer de la logique complexe directement dans les templates.</li>
        <li>Utilisez des méthodes ou des propriétés calculées pour toute transformation complexe ou répétée.</li>
        <li>Assurez-vous que toutes les dépendances utilisées dans une expression sont réactives.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li>Les expressions permettent d'afficher dynamiquement des données ou des calculs simples.</li>
        <li>Elles doivent rester simples ; pour des cas complexes, utilisez des méthodes ou <code>computed</code>.</li>
        <li>Utilisez-les pour enrichir vos templates tout en gardant un code lisible et maintenable.</li>
    </ul>
</div>
<div class="container">
    <h2 id="interpolation"><i class="fas fa-redo"></i> L'Interpolation</h2>
    <p>
        L'interpolation est une fonctionnalité de Vue.js qui permet d'injecter dynamiquement des données dans le DOM. Elle s'effectue grâce à la syntaxe moustache <code>{{ }}</code>, utilisée dans les templates pour afficher des données ou évaluer des expressions simples.
    </p>

    <h3><i class="fas fa-info-circle"></i> Syntaxe de Base</h3>
    <p>
        Voici un exemple d'interpolation basique :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;div&gt;</span>
    Bonjour, {{ nom }} ! <span class="comment">// Affiche la propriété 'nom'</span>
    La date d'aujourd'hui est : {{ new Date().toLocaleDateString() }}.
<span class="tag">&lt;/div&gt;</span>
        </pre>
    </div>
    <p>
        Dans cet exemple :
        <ul>
            <li><code>nom</code> est une propriété réactive définie dans <code>data</code>.</li>
            <li><code>new Date().toLocaleDateString()</code> est une expression JavaScript évaluée dynamiquement.</li>
        </ul>
    </p>

    <h3><i class="fas fa-arrow-right"></i> L'Interpolation dans les Attributs</h3>
    <p>
        L'interpolation peut également être utilisée dans les attributs HTML pour injecter dynamiquement des valeurs. Dans ce cas, on utilise le préfixe <code>v-bind</code> ou sa syntaxe raccourcie <code>:</code>.
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;img</span> :src=<span class="string">'imageUrl'</span> alt=<span class="string">'Description de l\'image'</span>&gt;
<span class="comment">// 'imageUrl' est une propriété définie dans 'data'</span>
        </pre>
    </div>

    <p>
        Exemple avec une classe CSS dynamique :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;div</span> :class=<span class="string">'{ actif: estActif, erreur: aErreur }'</span>&gt;
    Contenu dynamique
<span class="tag">&lt;/div&gt;</span>
<span class="comment">// Ajoute les classes 'actif' et 'erreur' dynamiquement en fonction des propriétés réactives</span>
        </pre>
    </div>

    <h3><i class="fas fa-cogs"></i> Utilisation Avancée</h3>
    <p>
        L'interpolation supporte les expressions JavaScript simples :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;div&gt;</span>
    Résultat : {{ 5 * 3 }} <span class="comment">// Affiche 15</span>
    État : {{ actif ? 'En ligne' : 'Hors ligne' }} <span class="comment">// Condition ternaire</span>
<span class="tag">&lt;/div&gt;</span>
        </pre>
    </div>
    <p>
        Cependant, les expressions complexes doivent être déléguées aux propriétés <code>computed</code> ou aux <code>methods</code>.
    </p>

    <h3><i class="fas fa-exclamation-triangle"></i> Limites de l'Interpolation</h3>
    <p>
        L'interpolation ne permet pas :
    </p>
    <ul>
        <li>Les instructions comme <code>if</code> ou <code>for</code>.</li>
        <li>Les blocs de code ou plusieurs expressions combinées.</li>
    </ul>
    <p>
        Pour des scénarios complexes, il est préférable d'utiliser des propriétés <code>methods</code> ou <code>computed</code>.
    </p>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <p>
        L'interpolation est utilisée dans de nombreux cas pratiques, comme :
    </p>
    <ul>
        <li>Afficher des données utilisateurs : <code>{{ utilisateur.nom }}</code>.</li>
        <li>Mettre à jour dynamiquement des classes CSS ou des styles.</li>
        <li>Gérer des listes ou des données conditionnelles dans les vues.</li>
    </ul>
    <div class="example-box">
        <pre>
<span class="tag">&lt;ul&gt;</span>
    <span class="tag">&lt;li</span> v-for=<span class="string">'tâche in tâches'</span>&gt;
        {{ tâche.nom }} - {{ tâche.état }}
    <span class="tag">&lt;/li&gt;</span>
<span class="tag">&lt;/ul&gt;</span>
<span class="comment">// 'tâches' est un tableau d'objets dans 'data'</span>
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Limitez l'utilisation de l'interpolation à des expressions simples.</li>
        <li>Utilisez <code>computed</code> pour des transformations ou des calculs complexes.</li>
        <li>Assurez-vous que toutes les données utilisées dans les interpolations sont bien réactives.</li>
        <li>Adoptez des conventions de nommage claires pour les propriétés utilisées dans les interpolations.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li>L'interpolation injecte dynamiquement des valeurs dans le DOM via <code>{{ }}</code>.</li>
        <li>Elle prend en charge les expressions simples, mais pas les instructions complexes.</li>
        <li>Pour des scénarios avancés, utilisez des propriétés <code>methods</code> ou <code>computed</code>.</li>
    </ul>
</div>
<div class="container">
    <h2 id="modifiers"><i class="fas fa-edit"></i> Les Modificateurs</h2>
    <p>
        Les modificateurs dans Vue.js sont des suffixes ajoutés à des directives pour indiquer des transformations ou des comportements spécifiques. Ils permettent d’affiner ou d’adapter le fonctionnement d’une directive.
    </p>

    <h3><i class="fas fa-info-circle"></i> Qu'est-ce qu'un Modificateur ?</h3>
    <p>
        Un modificateur est un point suivi d'un identifiant (par exemple, <code>.stop</code>). Il peut être appliqué sur des directives comme <code>v-on</code>, <code>v-model</code>, ou <code>v-bind</code>. Chaque modificateur modifie le comportement par défaut de la directive.
    </p>

    <div class="example-box">
        <pre>
<span class="tag">&lt;button</span> v-on:click.stop=<span class="string">'incrementer()'</span>&gt;Incrémenter<span class="tag">&lt;/button&gt;</span>
<span class="comment">// Le modificateur '.stop' empêche la propagation de l'événement</span>
        </pre>
    </div>

    <h3><i class="fas fa-tools"></i> Modificateurs Courants</h3>

    <h4><i class="fas fa-mouse-pointer"></i> Sur les Événements (<code>v-on</code>)</h4>
    <ul class="importance-list">
        <li><code>.stop</code> : Arrête la propagation d'un événement.</li>
        <li><code>.prevent</code> : Appelle <code>event.preventDefault()</code> pour empêcher le comportement par défaut.</li>
        <li><code>.capture</code> : Active la capture de l'événement (phase de capture).</li>
        <li><code>.self</code> : Exécute le gestionnaire uniquement si l'événement est déclenché sur l'élément lui-même.</li>
        <li><code>.once</code> : Écoute l'événement une seule fois.</li>
    </ul>

    <div class="example-box">
        <pre>
<span class="tag">&lt;form</span> v-on:submit.prevent=<span class="string">'envoyerFormulaire()'</span>&gt;
    <span class="tag">&lt;input</span> type=<span class="string">'text'</span> v-model=<span class="string">'nom'</span>&gt;
    <span class="tag">&lt;button</span> type=<span class="string">'submit'</span>&gt;Envoyer<span class="tag">&lt;/button&gt;</span>
<span class="tag">&lt;/form&gt;</span>
<span class="comment">// '.prevent' empêche le rechargement de la page lors de l'envoi du formulaire</span>
        </pre>
    </div>

    <h4><i class="fas fa-link"></i> Sur les Liaisons Dynamiques (<code>v-bind</code>)</h4>
    <ul class="importance-list">
        <li><code>.prop</code> : Traite l'attribut comme une propriété DOM au lieu d'un attribut HTML.</li>
        <li><code>.camel</code> : Convertit un nom de liaison en notation camelCase (utile pour les attributs SVG).</li>
    </ul>

    <div class="example-box">
        <pre>
<span class="tag">&lt;input</span> :value.prop=<span class="string">'valeurInput'</span>&gt;
<span class="comment">// Utilise '.prop' pour définir une propriété DOM directement</span>
        </pre>
    </div>

    <h4><i class="fas fa-sync"></i> Sur les Modèles de Données (<code>v-model</code>)</h4>
    <ul class="importance-list">
        <li><code>.lazy</code> : Met à jour la donnée uniquement après avoir quitté le champ (blur).</li>
        <li><code>.number</code> : Convertit automatiquement la valeur en un nombre.</li>
        <li><code>.trim</code> : Supprime les espaces en début et fin de chaîne avant de mettre à jour la donnée.</li>
    </ul>

    <div class="example-box">
        <pre>
<span class="tag">&lt;input</span> v-model.lazy=<span class="string">'nom'</span>&gt;
<span class="comment">// '.lazy' met à jour 'nom' uniquement après avoir quitté le champ</span>

<span class="tag">&lt;input</span> v-model.number=<span class="string">'age'</span>&gt;
<span class="comment">// '.number' force la conversion en nombre</span>
        </pre>
    </div>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <p>
        Les modificateurs permettent d’optimiser et de sécuriser les interactions utilisateur. Voici quelques exemples :
    </p>
    <ul>
        <li>Empêcher les formulaires de recharger la page avec <code>.prevent</code>.</li>
        <li>Limiter l’écoute des événements à un clic spécifique avec <code>.self</code>.</li>
        <li>Appliquer des transformations automatiques aux entrées utilisateur avec <code>.trim</code> et <code>.number</code>.</li>
    </ul>
    <div class="example-box">
        <pre>
<span class="tag">&lt;div</span> v-on:click.self=<span class="string">'afficherMessage()'</span>&gt;
    <span class="comment">// Ne réagit au clic que si l'utilisateur clique exactement sur cet élément</span>
<span class="tag">&lt;/div&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Utilisez les modificateurs pour simplifier votre code et éviter d’écrire manuellement des méthodes pour des tâches simples.</li>
        <li>Combinez plusieurs modificateurs pour des comportements avancés, par exemple <code>.prevent</code> et <code>.once</code>.</li>
        <li>Documentez les modificateurs personnalisés pour une meilleure compréhension par votre équipe.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li>Les modificateurs affinent le comportement des directives comme <code>v-on</code>, <code>v-bind</code>, et <code>v-model</code>.</li>
        <li>Ils simplifient l'écriture de fonctionnalités courantes, comme empêcher la propagation d'un événement ou transformer une valeur.</li>
        <li>Respectez les bonnes pratiques pour garder votre code maintenable et clair.</li>
    </ul>
</div>
<div class="sommaire-container">
    <h2><i class="fas fa-book-open"></i> Sommaire - Directives</h2>
    <ul>
        <li><a href="#v-bind"><i class="fas fa-link"></i> <code>v-bind</code></a></li>
        <li><a href="#v-if"><i class="fas fa-toggle-on"></i> <code>v-if</code></a></li>
        <li><a href="#v-else"><i class="fas fa-toggle-off"></i> <code>v-else</code></a></li>
        <li><a href="#v-for"><i class="fas fa-list-ul"></i> <code>v-for</code></a></li>
        <li><a href="#v-model"><i class="fas fa-keyboard"></i> <code>v-model</code></a></li>
        <li><a href="#v-on"><i class="fas fa-bolt"></i> <code>v-on</code></a></li>
        <li><a href="#v-show"><i class="fas fa-eye"></i> <code>v-show</code></a></li>
        <li><a href="#v-slot"><i class="fas fa-layer-group"></i> <code>v-slot</code></a></li>
        <li><a href="#custom-directives"><i class="fas fa-cogs"></i> Directives Personnalisées</a></li>
    </ul>
</div>
<div class="container">
    <h2 id="v-bind"><i class="fas fa-link"></i> Directive <code>v-bind</code></h2>
    <p>
        La directive <code>v-bind</code> permet de lier dynamiquement des attributs ou des propriétés d'un élément HTML à des données réactives de Vue.js.
    </p>

    <h3><i class="fas fa-info-circle"></i> Syntaxe de Base</h3>
    <p>
        La syntaxe générale est la suivante :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;img</span> v-bind:src=<span class="string">'imageSource'</span> alt=<span class="string">'Description'</span>&gt;
        </pre>
    </div>
    <p>
        Ici, la valeur de l'attribut <code>src</code> de l'élément <code>img</code> sera mise à jour automatiquement si la propriété <code>imageSource</code> change.
    </p>

    <h3><i class="fas fa-bolt"></i> Syntaxe Raccourcie</h3>
    <p>
        Pour simplifier, Vue.js permet d'utiliser une syntaxe raccourcie avec le caractère <code>:</code>.
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;img</span> :src=<span class="string">'imageSource'</span> alt=<span class="string">'Description'</span>&gt;
        </pre>
    </div>

    <h3><i class="fas fa-layer-group"></i> Liaison d'Attributs Multiples</h3>
    <p>
        Vous pouvez lier plusieurs attributs d'un élément en même temps en passant un objet à <code>v-bind</code>.
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;button</span> v-bind=<span class="string">'{ disabled: isDisabled, class: buttonClass }'</span>&gt;
    Cliquer
<span class="tag">&lt;/button&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-cogs"></i> Utilisation Avancée</h3>
    <p>
        Avec <code>v-bind</code>, vous pouvez lier des propriétés DOM spécifiques, comme les classes ou les styles CSS, de manière réactive.
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;div</span> :class=<span class="string">'{ actif: isActive, erreur: hasError }'</span>&gt;
    Contenu dynamique
<span class="tag">&lt;/div&gt;</span>

<span class="tag">&lt;div</span> :style=<span class="string">'{ color: textColor, fontSize: fontSize + \'px\' }'</span>&gt;
    Texte stylisé
<span class="tag">&lt;/div&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Utilisez la syntaxe raccourcie <code>:</code> pour une meilleure lisibilité.</li>
        <li>Organisez vos données dans <code>data</code> pour rendre les liaisons claires et maintenables.</li>
        <li>Documentez vos propriétés dynamiques, surtout si elles sont utilisées dans plusieurs composants.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li><code>v-bind</code> permet de lier dynamiquement des attributs ou des propriétés HTML.</li>
        <li>La syntaxe raccourcie <code>:</code> simplifie son utilisation.</li>
        <li>Pour des cas complexes, passez un objet à <code>v-bind</code> pour gérer plusieurs liaisons.</li>
    </ul>
</div>
<div class="container">
    <h2 id="v-if"><i class="fas fa-toggle-on"></i> Directive <code>v-if</code></h2>
    <p>
        La directive <code>v-if</code> permet de conditionner l'affichage d'un élément dans le DOM. L'élément associé à un <code>v-if</code> sera ajouté ou supprimé dynamiquement en fonction de la valeur de l'expression.
    </p>

    <h3><i class="fas fa-info-circle"></i> Syntaxe de Base</h3>
    <p>
        Voici un exemple simple utilisant <code>v-if</code> :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;div</span> v-if=<span class="string">'isVisible'</span>&gt;
    Cet élément est visible si <code>isVisible</code> est <span class="keyword">true</span>.
<span class="tag">&lt;/div&gt;</span>
        </pre>
    </div>

    <p>
        Dans cet exemple :
        <ul>
            <li>Si <code>isVisible</code> est évalué à <code>true</code>, l'élément est ajouté au DOM.</li>
            <li>Sinon, l'élément est complètement supprimé du DOM.</li>
        </ul>
    </p>

    <h3><i class="fas fa-toggle-off"></i> Combinaison avec <code>v-else</code></h3>
    <p>
        La directive <code>v-else</code> peut être utilisée immédiatement après un <code>v-if</code> pour afficher un élément alternatif si la condition de <code>v-if</code> est fausse.
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;div</span> v-if=<span class="string">'isLoggedIn'</span>&gt;
    Bienvenue, utilisateur !
<span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;div</span> v-else&gt;
    Veuillez vous connecter.
<span class="tag">&lt;/div&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-list-ul"></i> Utilisation de <code>v-else-if</code></h3>
    <p>
        La directive <code>v-else-if</code> permet de tester plusieurs conditions successives. Elle s'utilise entre <code>v-if</code> et <code>v-else</code>.
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;div</span> v-if=<span class="string">'type === "admin"'</span>&gt;
    Bienvenue, administrateur !
<span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;div</span> v-else-if=<span class="string">'type === "editor"'</span>&gt;
    Bienvenue, éditeur !
<span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;div</span> v-else&gt;
    Bienvenue, visiteur !
<span class="tag">&lt;/div&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-exclamation-triangle"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Utilisez <code>v-if</code> pour des scénarios où l'affichage conditionnel dépend de valeurs rarement mises à jour.</li>
        <li>Pour un simple masquage (sans suppression du DOM), préférez <code>v-show</code>.</li>
        <li>Assurez-vous que les conditions utilisées sont claires et maintenables.</li>
        <li>Évitez les tests imbriqués excessifs. Utilisez des méthodes ou des propriétés calculées pour simplifier la logique.</li>
    </ul>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <p>
        La directive <code>v-if</code> est particulièrement utile pour :
    </p>
    <ul>
        <li>Afficher des éléments uniquement lorsque certaines conditions sont remplies (par exemple, l'état de connexion d'un utilisateur).</li>
        <li>Gérer des interfaces dynamiques basées sur le rôle ou le type d'utilisateur.</li>
        <li>Optimiser les performances en supprimant les éléments inutiles du DOM.</li>
    </ul>
    <div class="example-box">
        <pre>
<span class="tag">&lt;div</span> v-if=<span class="string">'produits.length > 0'</span>&gt;
    <span class="tag">&lt;ul&gt;</span>
        <span class="tag">&lt;li</span> v-for=<span class="string">'produit in produits'</span>&gt;{{ produit.nom }}<span class="tag">&lt;/li&gt;</span>
    <span class="tag">&lt;/ul&gt;</span>
<span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;div</span> v-else&gt;
    Aucun produit disponible.
<span class="tag">&lt;/div&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li>La directive <code>v-if</code> permet un affichage conditionnel en ajoutant ou en supprimant dynamiquement des éléments du DOM.</li>
        <li><code>v-else</code> et <code>v-else-if</code> offrent une logique conditionnelle supplémentaire pour gérer des cas multiples.</li>
        <li>Pour les cas où la condition change fréquemment, préférez <code>v-show</code>.</li>
    </ul>
</div>
<div class="container">
    <h2 id="v-else"><i class="fas fa-toggle-off"></i> Directive <code>v-else</code></h2>
    <p>
        La directive <code>v-else</code> est utilisée pour définir une condition alternative lorsque la directive <code>v-if</code> associée est évaluée à <code>false</code>. Elle doit être immédiatement placée après un élément avec <code>v-if</code>.
    </p>

    <h3><i class="fas fa-info-circle"></i> Syntaxe de Base</h3>
    <p>
        Voici un exemple d'utilisation de <code>v-else</code> :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;div</span> v-if=<span class="string">'isConnected'</span>&gt;
    Bienvenue, utilisateur connecté !
<span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;div</span> v-else&gt;
    Veuillez vous connecter.
<span class="tag">&lt;/div&gt;</span>
        </pre>
    </div>
    <p>
        Dans cet exemple :
        <ul>
            <li>Si <code>isConnected</code> est évalué à <code>true</code>, le premier élément est affiché.</li>
            <li>Sinon, le second élément est affiché.</li>
        </ul>
    </p>

    <h3><i class="fas fa-list-ul"></i> Utilisation avec des Éléments Simples</h3>
    <p>
        Vous pouvez utiliser <code>v-else</code> pour gérer des scénarios simples :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;button</span> v-if=<span class="string">'isAdmin'</span>&gt;Accéder au Panneau Admin<span class="tag">&lt;/button&gt;</span>
<span class="tag">&lt;button</span> v-else&gt;Retourner à l'Accueil<span class="tag">&lt;/button&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-exclamation-triangle"></i> Règles à Respecter</h3>
    <ul class="importance-list">
        <li><code>v-else</code> doit être directement après un <code>v-if</code>, sans aucun autre élément ou espace entre les deux.</li>
        <li>Un seul <code>v-else</code> peut suivre un <code>v-if</code>.</li>
    </ul>

    <h3><i class="fas fa-cogs"></i> Utilisation Avancée</h3>
    <p>
        Dans des scénarios où plusieurs conditions sont nécessaires, utilisez une combinaison de <code>v-if</code>, <code>v-else-if</code>, et <code>v-else</code>.
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;div</span> v-if=<span class="string">'role === "admin"'</span>&gt;
    Panneau Administrateur
<span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;div</span> v-else-if=<span class="string">'role === "editor"'</span>&gt;
    Panneau Éditeur
<span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;div</span> v-else&gt;
    Page Utilisateur
<span class="tag">&lt;/div&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Gardez les conditions simples et lisibles.</li>
        <li>Préférez des propriétés calculées (<code>computed</code>) pour les tests complexes, afin d'améliorer la lisibilité et la maintenabilité.</li>
        <li>Assurez-vous que les conditions de <code>v-if</code> et <code>v-else</code> ne se chevauchent pas.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li><code>v-else</code> gère une condition alternative lorsqu'un <code>v-if</code> est évalué à <code>false</code>.</li>
        <li>Il doit être directement adjacent à un <code>v-if</code>.</li>
        <li>Pour plusieurs conditions, combinez avec <code>v-else-if</code>.</li>
    </ul>
</div>
<div class="container">
    <h2 id="v-for"><i class="fas fa-list-ul"></i> Directive <code>v-for</code></h2>
    <p>
        La directive <code>v-for</code> permet de parcourir une liste ou un objet et de générer dynamiquement un élément pour chaque item. C'est une fonctionnalité essentielle pour travailler avec des données dynamiques dans Vue.js.
    </p>

    <h3><i class="fas fa-info-circle"></i> Syntaxe de Base</h3>
    <p>
        Pour parcourir un tableau, utilisez la syntaxe suivante :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;ul&gt;</span>
    <span class="tag">&lt;li</span> v-for=<span class="string">'item in items'</span> :key=<span class="string">'item.id'</span>&gt;
        {{ item.name }}
    <span class="tag">&lt;/li&gt;</span>
<span class="tag">&lt;/ul&gt;</span>
        </pre>
    </div>
    <p>
        Dans cet exemple :
        <ul>
            <li><code>items</code> est un tableau d'objets avec des propriétés <code>id</code> et <code>name</code>.</li>
            <li>L'attribut <code>:key</code> est essentiel pour optimiser le rendu de Vue et éviter des erreurs potentielles.</li>
        </ul>
    </p>

    <h3><i class="fas fa-tools"></i> Parcourir des Objets</h3>
    <p>
        Vous pouvez également parcourir les propriétés d'un objet en utilisant <code>v-for</code>.
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;div</span> v-for=<span class="string">'(value, key) in object'</span> :key=<span class="string">'key'</span>&gt;
    {{ key }}: {{ value }}
<span class="tag">&lt;/div&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-bolt"></i> Avec des Indices</h3>
    <p>
        Si vous avez besoin de l'indice des éléments dans un tableau, vous pouvez l'obtenir en utilisant <code>v-for</code>.
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;ul&gt;</span>
    <span class="tag">&lt;li</span> v-for=<span class="string">'(item, index) in items'</span> :key=<span class="string">'index'</span>&gt;
        {{ index + 1 }}. {{ item }}
    <span class="tag">&lt;/li&gt;</span>
<span class="tag">&lt;/ul&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-layer-group"></i> Gestion des Données Vides</h3>
    <p>
        Pour gérer des listes potentiellement vides, combinez <code>v-for</code> avec <code>v-if</code> ou <code>v-else</code>.
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;ul&gt;</span>
    <span class="tag">&lt;li</span> v-for=<span class="string">'item in items'</span> :key=<span class="string">'item.id'</span>&gt;
        {{ item }}
    <span class="tag">&lt;/li&gt;</span>
    <span class="tag">&lt;li</span> v-if=<span class="string">'items.length === 0'</span>&gt;
        Aucun élément à afficher.
    <span class="tag">&lt;/li&gt;</span>
<span class="tag">&lt;/ul&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-exclamation-triangle"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Utilisez toujours un attribut <code>:key</code> unique pour chaque élément généré par <code>v-for</code>. Cela améliore les performances et évite les erreurs.</li>
        <li>Si la clé est basée sur un index, assurez-vous que l'ordre des éléments ne change pas dynamiquement.</li>
        <li>Évitez de trop imbriquer des <code>v-for</code> pour garder votre code lisible.</li>
        <li>Combinez <code>v-for</code> avec des propriétés calculées (<code>computed</code>) pour filtrer ou transformer les données avant de les afficher.</li>
    </ul>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <ul>
        <li>Génération de listes dynamiques, comme des menus, des tableaux, ou des galeries d'images.</li>
        <li>Affichage d'éléments conditionnels avec <code>v-if</code> et <code>v-for</code>.</li>
        <li>Parcours des objets pour afficher leurs propriétés dynamiquement.</li>
    </ul>
    <div class="example-box">
        <pre>
<span class="tag">&lt;table&gt;</span>
    <span class="tag">&lt;thead&gt;</span>
        <span class="tag">&lt;tr&gt;</span>
            <span class="tag">&lt;th&gt;</span>Nom<span class="tag">&lt;/th&gt;</span>
            <span class="tag">&lt;th&gt;</span>Email<span class="tag">&lt;/th&gt;</span>
        <span class="tag">&lt;/tr&gt;</span>
    <span class="tag">&lt;/thead&gt;</span>
    <span class="tag">&lt;tbody&gt;</span>
        <span class="tag">&lt;tr</span> v-for=<span class="string">'user in users'</span> :key=<span class="string">'user.id'</span>&gt;
            <span class="tag">&lt;td&gt;</span>{{ user.name }}<span class="tag">&lt;/td&gt;</span>
            <span class="tag">&lt;td&gt;</span>{{ user.email }}<span class="tag">&lt;/td&gt;</span>
        <span class="tag">&lt;/tr&gt;</span>
    <span class="tag">&lt;/tbody&gt;</span>
<span class="tag">&lt;/table&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li><code>v-for</code> est utilisé pour parcourir des listes ou des objets et générer dynamiquement des éléments.</li>
        <li>L'utilisation d'un <code>:key</code> unique est essentielle pour optimiser le rendu.</li>
        <li>Combinez <code>v-for</code> avec <code>v-if</code> ou des propriétés calculées pour des comportements avancés.</li>
    </ul>
</div>
<div class="container">
    <h2 id="v-model"><i class="fas fa-keyboard"></i> Directive <code>v-model</code></h2>
    <p>
        La directive <code>v-model</code> permet de lier des données de manière bidirectionnelle entre une propriété d’un composant Vue.js et un élément du DOM. Elle est principalement utilisée pour créer des formulaires réactifs.
    </p>

    <h3><i class="fas fa-info-circle"></i> Syntaxe de Base</h3>
    <p>
        Voici un exemple de base :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;input</span> v-model=<span class="string">'nom'</span> placeholder=<span class="string">'Entrez votre nom'</span>&gt;
<span class="tag">&lt;p&gt;</span>Bonjour, {{ nom }} !<span class="tag">&lt;/p&gt;</span>
        </pre>
    </div>
    <p>
        Dans cet exemple :
        <ul>
            <li>La valeur de l'élément <code>input</code> est liée à la propriété <code>nom</code>.</li>
            <li>Lorsque l'utilisateur saisit du texte dans l'<code>input</code>, la propriété <code>nom</code> est automatiquement mise à jour.</li>
            <li>Le texte affiché dans le paragraphe est mis à jour dynamiquement en fonction de la propriété <code>nom</code>.</li>
        </ul>
    </p>

    <h3><i class="fas fa-tools"></i> Utilisation avec Différents Éléments</h3>
    <p>
        La directive <code>v-model</code> peut être utilisée avec divers types d'éléments de formulaire.
    </p>
    <h4><i class="fas fa-circle"></i> Champs Texte</h4>
    <div class="example-box">
        <pre>
<span class="tag">&lt;input</span> type=<span class="string">'text'</span> v-model=<span class="string">'nom'</span>&gt;
        </pre>
    </div>
    <h4><i class="fas fa-check-square"></i> Cases à Cocher</h4>
    <div class="example-box">
        <pre>
<span class="tag">&lt;input</span> type=<span class="string">'checkbox'</span> v-model=<span class="string">'accepteConditions'</span>&gt;
<span class="tag">&lt;p&gt;</span>Conditions acceptées : {{ accepteConditions }}<span class="tag">&lt;/p&gt;</span>
        </pre>
    </div>
    <h4><i class="fas fa-dot-circle"></i> Boutons Radio</h4>
    <div class="example-box">
        <pre>
<span class="tag">&lt;input</span> type=<span class="string">'radio'</span> value=<span class="string">'Homme'</span> v-model=<span class="string">'genre'</span>&gt; Homme
<span class="tag">&lt;input</span> type=<span class="string">'radio'</span> value=<span class="string">'Femme'</span> v-model=<span class="string">'genre'</span>&gt; Femme
<span class="tag">&lt;p&gt;</span>Genre sélectionné : {{ genre }}<span class="tag">&lt;/p&gt;</span>
        </pre>
    </div>
    <h4><i class="fas fa-caret-square-down"></i> Listes Déroulantes</h4>
    <div class="example-box">
        <pre>
<span class="tag">&lt;select</span> v-model=<span class="string">'pays'</span>&gt;
    <span class="tag">&lt;option</span> value=<span class="string">'france'</span>&gt;France<span class="tag">&lt;/option&gt;</span>
    <span class="tag">&lt;option</span> value=<span class="string">'espagne'</span>&gt;Espagne<span class="tag">&lt;/option&gt;</span>
<span class="tag">&lt;/select&gt;</span>
<span class="tag">&lt;p&gt;</span>Pays sélectionné : {{ pays }}<span class="tag">&lt;/p&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-sync-alt"></i> Liaison Bidirectionnelle</h3>
    <p>
        La directive <code>v-model</code> établit une liaison bidirectionnelle. Cela signifie que :
        <ul>
            <li>Les modifications apportées à la propriété de données mettent à jour l'élément DOM.</li>
            <li>Les modifications apportées par l'utilisateur sur l'élément DOM mettent à jour la propriété de données.</li>
        </ul>
    </p>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Assurez-vous que les propriétés liées à <code>v-model</code> sont initialisées dans les données pour éviter les comportements inattendus.</li>
        <li>Utilisez des <code>computed</code> ou des <code>methods</code> pour transformer les données au besoin avant ou après leur liaison.</li>
        <li>Pour les formulaires complexes, regroupez les champs dans un objet dédié dans vos données pour améliorer l'organisation.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li><code>v-model</code> permet une liaison bidirectionnelle entre une propriété et un élément DOM.</li>
        <li>Il peut être utilisé avec différents types d'éléments de formulaire comme les <code>input</code>, <code>checkbox</code>, <code>radio</code>, et <code>select</code>.</li>
        <li>La bonne organisation des données et des propriétés est essentielle pour un comportement prévisible.</li>
    </ul>
</div>
<div class="container">
    <h2 id="v-on"><i class="fas fa-mouse-pointer"></i> Directive <code>v-on</code></h2>
    <p>
        La directive <code>v-on</code> est utilisée pour écouter des événements du DOM et exécuter des actions lorsqu'ils sont déclenchés. Elle permet de lier des événements comme <code>click</code>, <code>keyup</code>, ou encore <code>submit</code> à des méthodes ou des expressions dans Vue.js.
    </p>

    <h3><i class="fas fa-info-circle"></i> Syntaxe de Base</h3>
    <p>
        La directive <code>v-on</code> peut être utilisée avec les événements du DOM. Voici un exemple :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;button</span> v-on:click=<span class="string">'saluer'</span>&gt;Cliquez-moi<span class="tag">&lt;/button&gt;</span>
        </pre>
    </div>
    <p>
        Dans cet exemple :
        <ul>
            <li>L'événement <code>click</code> est lié à la méthode <code>saluer</code> définie dans l'objet Vue.</li>
            <li>Lorsque l'utilisateur clique sur le bouton, la méthode <code>saluer</code> est exécutée.</li>
        </ul>
    </p>

    <h3><i class="fas fa-magic"></i> Syntaxe Abrégée</h3>
    <p>
        Vous pouvez utiliser <code>@</code> comme raccourci pour <code>v-on</code>. Par exemple :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;button</span> @click=<span class="string">'saluer'</span>&gt;Cliquez-moi<span class="tag">&lt;/button&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-tools"></i> Écoute des Événements avec des Paramètres</h3>
    <p>
        Vous pouvez passer des arguments à la méthode appelée :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;button</span> @click=<span class="string">'direBonjour("John")'</span>&gt;Saluer John<span class="tag">&lt;/button&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-keyboard"></i> Écoute des Événements Clavier</h3>
    <p>
        La directive <code>v-on</code> peut écouter des événements clavier spécifiques, comme <code>keyup</code> ou <code>keydown</code>. Vous pouvez également utiliser des modificateurs pour cibler des touches spécifiques.
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;input</span> @keyup.enter=<span class="string">'envoyerMessage'</span> placeholder=<span class="string">'Appuyez sur Entrée'</span>&gt;
        </pre>
    </div>
    <p>
        Ici, la méthode <code>envoyerMessage</code> est déclenchée uniquement lorsque l'utilisateur appuie sur la touche <code>Entrée</code>.
    </p>

    <h3><i class="fas fa-shield-alt"></i> Modificateurs</h3>
    <p>
        Vue.js propose des modificateurs pour simplifier la gestion des événements. En voici quelques exemples :
    </p>
    <ul class="importance-list">
        <li><code>.stop</code> : Arrête la propagation de l'événement.</li>
        <li><code>.prevent</code> : Empêche le comportement par défaut.</li>
        <li><code>.self</code> : Ne déclenche l'événement que si la cible est l'élément lui-même.</li>
        <li><code>.once</code> : L'événement est écouté une seule fois.</li>
    </ul>
    <div class="example-box">
        <pre>
<span class="tag">&lt;form</span> @submit.prevent=<span class="string">'envoyerFormulaire'</span>&gt;
    <span class="tag">&lt;button&gt;</span>Envoyer<span class="tag">&lt;/button&gt;</span>
<span class="tag">&lt;/form&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-exclamation-triangle"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Utilisez des noms de méthodes explicites pour améliorer la lisibilité de votre code.</li>
        <li>Privilégiez les modificateurs comme <code>.stop</code> et <code>.prevent</code> pour simplifier le contrôle des événements.</li>
        <li>Regroupez les gestionnaires d'événements dans l'objet <code>methods</code> pour une meilleure organisation.</li>
    </ul>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <ul>
        <li>Gestion des interactions utilisateur, comme les clics sur les boutons ou la soumission de formulaires.</li>
        <li>Écoute des raccourcis clavier pour améliorer l'ergonomie de votre application.</li>
        <li>Implémentation de fonctionnalités interactives, comme le glisser-déposer ou les menus dynamiques.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li><code>v-on</code> permet d'écouter les événements DOM et d'exécuter des actions associées.</li>
        <li>La syntaxe abrégée <code>@</code> simplifie l'écriture des gestionnaires d'événements.</li>
        <li>Les modificateurs comme <code>.prevent</code>, <code>.stop</code>, ou <code>.once</code> offrent un meilleur contrôle sur les comportements des événements.</li>
    </ul>
</div>
<div class="container">
    <h2 id="v-bind"><i class="fas fa-link"></i> Directive <code>v-bind</code></h2>
    <p>
        La directive <code>v-bind</code> est utilisée pour lier dynamiquement des attributs à des expressions JavaScript. Elle est essentielle pour passer des données dynamiques dans des attributs HTML tels que <code>src</code>, <code>href</code>, <code>class</code>, ou encore <code>style</code>.
    </p>

    <h3><i class="fas fa-info-circle"></i> Syntaxe de Base</h3>
    <p>
        Voici un exemple simple de <code>v-bind</code> :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;img</span> v-bind:src=<span class="string">'imageUrl'</span> alt=<span class="string">'Description de l&apos;image'</span>&gt;
        </pre>
    </div>
    <p>
        Dans cet exemple :
        <ul>
            <li><code>imageUrl</code> est une propriété définie dans l'objet Vue.</li>
            <li>L'attribut <code>src</code> de l'image est mis à jour dynamiquement en fonction de la valeur de <code>imageUrl</code>.</li>
        </ul>
    </p>

    <h3><i class="fas fa-magic"></i> Syntaxe Abrégée</h3>
    <p>
        Vous pouvez utiliser <code>:</code> comme raccourci pour <code>v-bind</code>. Par exemple :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;a</span> :href=<span class="string">'lienUrl'</span>&gt;Visitez ce site<span class="tag">&lt;/a&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-tools"></i> Utilisation avec des Attributs Dynamiques</h3>
    <h4><i class="fas fa-image"></i> Lier un Attribut `src`</h4>
    <div class="example-box">
        <pre>
<span class="tag">&lt;img</span> :src=<span class="string">'imageUrl'</span> alt=<span class="string">'Image Dynamique'</span>&gt;
        </pre>
    </div>
    <h4><i class="fas fa-anchor"></i> Lier un Attribut `href`</h4>
    <div class="example-box">
        <pre>
<span class="tag">&lt;a</span> :href=<span class="string">'lienUrl'</span> target=<span class="string">'_blank'</span>&gt;Cliquez ici<span class="tag">&lt;/a&gt;</span>
        </pre>
    </div>
    <h4><i class="fas fa-paint-brush"></i> Lier des Classes Dynamiques</h4>
    <p>
        Vous pouvez utiliser <code>v-bind:class</code> pour appliquer des classes dynamiques :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;div</span> :class=<span class="string">'{ actif: isActive, desactive: !isActive }'</span>&gt;
    Statut
<span class="tag">&lt;/div&gt;</span>
        </pre>
    </div>
    <p>
        Ici, la classe <code>actif</code> est ajoutée si <code>isActive</code> est <code>true</code>, sinon la classe <code>desactive</code> est ajoutée.
    </p>

    <h4><i class="fas fa-palette"></i> Lier des Styles Dynamiques</h4>
    <p>
        Utilisez <code>v-bind:style</code> pour appliquer des styles CSS dynamiques.
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;div</span> :style=<span class="string">'{ color: textColor, fontSize: fontSize + "px" }'</span>&gt;
    Texte stylisé
<span class="tag">&lt;/div&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-shield-alt"></i> Sécurisation et Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Évitez d'injecter des données non vérifiées dans des attributs liés pour prévenir les vulnérabilités XSS.</li>
        <li>Utilisez des propriétés calculées (<code>computed</code>) pour simplifier les expressions complexes.</li>
        <li>Privilégiez les liaisons abrégées (<code>:</code>) pour améliorer la lisibilité.</li>
    </ul>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <ul>
        <li>Lier des images dynamiques dans une galerie.</li>
        <li>Créer des boutons avec des liens dynamiques basés sur les données utilisateur.</li>
        <li>Appliquer des classes et styles conditionnels pour des interfaces interactives.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li><code>v-bind</code> permet de lier dynamiquement des attributs à des expressions JavaScript.</li>
        <li>La syntaxe abrégée (<code>:</code>) simplifie l'écriture.</li>
        <li>Les liaisons dynamiques avec <code>class</code> et <code>style</code> offrent une flexibilité puissante pour personnaliser l'apparence des éléments.</li>
    </ul>
</div>
<div class="container">
    <h2 id="v-show"><i class="fas fa-eye"></i> Directive <code>v-show</code></h2>
    <p>
        La directive <code>v-show</code> permet d'afficher ou de masquer un élément DOM en fonction d'une expression booléenne. Contrairement à <code>v-if</code>, elle ne supprime pas l'élément du DOM, mais modifie sa propriété CSS <code>display</code>.
    </p>

    <h3><i class="fas fa-info-circle"></i> Syntaxe de Base</h3>
    <p>
        Voici un exemple simple :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;div</span> v-show=<span class="string">'isVisible'</span>&gt;
    Ceci est visible si <code>isVisible</code> est <code>true</code>.
<span class="tag">&lt;/div&gt;</span>
        </pre>
    </div>
    <p>
        Dans cet exemple :
        <ul>
            <li>La propriété <code>isVisible</code> contrôle la visibilité de l'élément.</li>
            <li>Si <code>isVisible</code> est <code>false</code>, l'élément DOM est masqué avec <code>display: none;</code>.</li>
        </ul>
    </p>

    <h3><i class="fas fa-bolt"></i> Différence entre `v-show` et `v-if`</h3>
    <p>
        Bien que <code>v-show</code> et <code>v-if</code> permettent tous deux de contrôler l'affichage conditionnel, ils fonctionnent différemment :
    </p>
    <ul class="importance-list">
        <li><code>v-show</code> : L'élément est toujours présent dans le DOM, mais masqué visuellement avec <code>display: none;</code>.</li>
        <li><code>v-if</code> : L'élément est ajouté ou supprimé du DOM en fonction de la condition.</li>
    </ul>
    <p>
        Utilisez <code>v-show</code> lorsque la condition change fréquemment et <code>v-if</code> lorsque le coût de suppression/ajout dans le DOM est élevé.
    </p>

    <h3><i class="fas fa-tools"></i> Utilisations Courantes</h3>
    <p>
        <code>v-show</code> est utile pour des cas où vous devez contrôler rapidement la visibilité d'un élément sans modifier la structure du DOM.
    </p>
    <h4><i class="fas fa-eye"></i> Masquer/Afficher un Message</h4>
    <div class="example-box">
        <pre>
<span class="tag">&lt;div</span> v-show=<span class="string">'isConnected'</span>&gt;
    Bienvenue, utilisateur connecté !
<span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;div</span> v-show=<span class="string">'!isConnected'</span>&gt;
    Veuillez vous connecter pour continuer.
<span class="tag">&lt;/div&gt;</span>
        </pre>
    </div>

    <h4><i class="fas fa-toggle-on"></i> Contrôle d'Interface Utilisateur</h4>
    <div class="example-box">
        <pre>
<span class="tag">&lt;button</span> @click=<span class="string">'toggleMenu'</span>&gt;Basculer le menu<span class="tag">&lt;/button&gt;</span>
<span class="tag">&lt;nav</span> v-show=<span class="string">'isMenuVisible'</span>&gt;
    <span class="tag">&lt;ul&gt;</span>
        <span class="tag">&lt;li&gt;</span>Accueil<span class="tag">&lt;/li&gt;</span>
        <span class="tag">&lt;li&gt;</span>À propos<span class="tag">&lt;/li&gt;</span>
        <span class="tag">&lt;li&gt;</span>Contact<span class="tag">&lt;/li&gt;</span>
    <span class="tag">&lt;/ul&gt;</span>
<span class="tag">&lt;/nav&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-shield-alt"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Privilégiez <code>v-show</code> pour les éléments fréquemment affichés ou masqués (comme un menu déroulant).</li>
        <li>Évitez d'utiliser <code>v-show</code> pour des éléments complexes nécessitant beaucoup de ressources. Dans ce cas, préférez <code>v-if</code>.</li>
        <li>Combinez <code>v-show</code> avec des animations CSS ou des transitions pour améliorer l'expérience utilisateur.</li>
    </ul>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <ul>
        <li>Afficher un message d'erreur ou une validation dans un formulaire.</li>
        <li>Basculer la visibilité d'un menu ou d'une boîte de dialogue.</li>
        <li>Masquer des sections d'une page sans les retirer du DOM.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li><code>v-show</code> contrôle la visibilité d'un élément en modifiant la propriété <code>display</code>.</li>
        <li>Il est plus performant que <code>v-if</code> lorsque l'état de visibilité change fréquemment.</li>
        <li>Utilisez-le pour les interactions rapides ou les modifications mineures de l'interface utilisateur.</li>
    </ul>
</div>
<div class="container">
    <h2 id="v-slot"><i class="fas fa-layer-group"></i> Directive <code>v-slot</code></h2>
    <p>
        La directive <code>v-slot</code> est utilisée pour définir et consommer des slots dans des composants. Les slots sont une fonctionnalité puissante de Vue.js qui permet d'insérer du contenu dynamique dans des composants enfants, en les rendant hautement réutilisables et personnalisables.
    </p>

    <h3><i class="fas fa-info-circle"></i> Syntaxe de Base</h3>
    <p>
        Voici un exemple simple :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Composant Parent</span>
<span class="tag">&lt;mon-composant&gt;</span>
    <span class="tag">&lt;p&gt;</span>Contenu inséré via le slot<span class="tag">&lt;/p&gt;</span>
<span class="tag">&lt;/mon-composant&gt;</span>

<span class="comment">// Composant Fils</span>
<span class="tag">&lt;template&gt;</span>
    <span class="tag">&lt;div&gt;</span>
        <span class="tag">&lt;slot&gt;</span>Contenu par défaut<span class="tag">&lt;/slot&gt;</span>
    <span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/template&gt;</span>
        </pre>
    </div>
    <p>
        Dans cet exemple :
        <ul>
            <li>Le composant enfant <code>&lt;mon-composant&gt;</code> contient un slot.</li>
            <li>Le contenu passé par le composant parent est inséré à l'emplacement du slot.</li>
            <li>Si aucun contenu n'est fourni, le texte <code>Contenu par défaut</code> est affiché.</li>
        </ul>
    </p>

    <h3><i class="fas fa-tools"></i> Slots Nommés</h3>
    <p>
        Les slots nommés permettent de définir plusieurs emplacements personnalisés pour le contenu. Chaque slot est identifié par un nom unique.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Composant Parent</span>
<span class="tag">&lt;mon-composant&gt;</span>
    <span class="tag">&lt;template</span> v-slot:header&gt;
        <span class="tag">&lt;h1&gt;</span>En-Tête<span class="tag">&lt;/h1&gt;</span>
    <span class="tag">&lt;/template&gt;</span>
    <span class="tag">&lt;template</span> v-slot:footer&gt;
        <span class="tag">&lt;p&gt;</span>Pied de page<span class="tag">&lt;/p&gt;</span>
    <span class="tag">&lt;/template&gt;</span>
<span class="tag">&lt;/mon-composant&gt;</span>

<span class="comment">// Composant Fils</span>
<span class="tag">&lt;template&gt;</span>
    <span class="tag">&lt;div&gt;</span>
        <span class="tag">&lt;slot</span> name=<span class="string">'header'</span>&gt;En-Tête par défaut<span class="tag">&lt;/slot&gt;</span>
        <span class="tag">&lt;slot&gt;</span>Contenu principal<span class="tag">&lt;/slot&gt;</span>
        <span class="tag">&lt;slot</span> name=<span class="string">'footer'</span>&gt;Pied de page par défaut<span class="tag">&lt;/slot&gt;</span>
    <span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/template&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-magic"></i> Slots Scopés</h3>
    <p>
        Les slots scopés permettent de transmettre des données du composant enfant au contenu inséré par le parent. Cela est utile pour partager des variables ou des états spécifiques.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Composant Parent</span>
<span class="tag">&lt;mon-composant&gt;</span>
    <span class="tag">&lt;template</span> v-slot:default=<span class="string">'slotProps'</span>&gt;
        <span class="tag">&lt;p&gt;</span>Nom : {{ slotProps.nom }}<span class="tag">&lt;/p&gt;</span>
    <span class="tag">&lt;/template&gt;</span>
<span class="tag">&lt;/mon-composant&gt;</span>

<span class="comment">// Composant Fils</span>
<span class="tag">&lt;template&gt;</span>
    <span class="tag">&lt;slot</span> :nom=<span class="string">'nom'</span>&gt;<span class="tag">&lt;/slot&gt;</span>
<span class="tag">&lt;/template&gt;</span>

<span class="comment">// Script du Composant Fils</span>
<span class="keyword">export default</span> {
    data() {
        <span class="keyword">return</span> {
            nom: <span class="string">'Jean'</span>
        };
    }
};
        </pre>
    </div>
    <p>
        Dans cet exemple :
        <ul>
            <li>Le composant enfant transmet la propriété <code>nom</code> au parent via le slot.</li>
            <li>Le parent accède à la donnée via l'objet <code>slotProps</code>.</li>
        </ul>
    </p>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Utilisez des noms descriptifs pour vos slots afin de clarifier leur rôle.</li>
        <li>Privilégiez les slots scopés pour transmettre des données importantes sans complexifier le composant parent.</li>
        <li>Ajoutez un contenu par défaut aux slots pour gérer les cas où aucun contenu n'est fourni.</li>
    </ul>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <ul>
        <li>Créer des composants réutilisables avec des sections personnalisables comme des cartes ou des modales.</li>
        <li>Gérer des templates complexes tout en conservant un code propre et modulaire.</li>
        <li>Transmettre des données spécifiques via des slots scopés pour construire des interfaces dynamiques.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li><code>v-slot</code> est utilisé pour insérer du contenu dynamique dans des composants.</li>
        <li>Les slots nommés permettent de personnaliser plusieurs sections d'un composant.</li>
        <li>Les slots scopés permettent de transmettre des données du composant enfant vers le parent.</li>
    </ul>
</div>
<div class="container">
    <h2 id="custom-directives"><i class="fas fa-cogs"></i> Custom Directives</h2>
    <p>
        Bien que Vue.js propose plusieurs directives intégrées comme <code>v-bind</code>, <code>v-model</code>, et <code>v-if</code>, il est parfois nécessaire de créer vos propres directives personnalisées pour répondre à des besoins spécifiques. Les directives personnalisées vous permettent d'ajouter un comportement à des éléments DOM.
    </p>

    <h3><i class="fas fa-tools"></i> Création de Directives Personnalisées</h3>
    <p>
        Les directives personnalisées sont définies avec la méthode <code>app.directive</code>. Voici la structure de base :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Exemple de directive personnalisée</span>
<span class="keyword">const</span> app = Vue.createApp({});

app.directive(<span class="string">'focus'</span>, {
    mounted(el) {
        el.focus(); <span class="comment">// Met automatiquement le focus sur l'élément</span>
    }
});
        </pre>
    </div>
    <p>
        Dans cet exemple, la directive <code>v-focus</code> est créée pour automatiquement mettre le focus sur un élément DOM lorsqu'il est monté.
    </p>

    <h3><i class="fas fa-code"></i> Utilisation d'une Directive Personnalisée</h3>
    <p>
        Une fois la directive définie, elle peut être utilisée dans le template comme une directive Vue standard.
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;input</span> v-focus placeholder=<span class="string">'Focus automatique'</span>&gt;
        </pre>
    </div>

    <h3><i class="fas fa-magic"></i> Options Disponibles dans les Directives</h3>
    <p>
        Les directives personnalisées prennent en charge plusieurs options pour gérer les différentes étapes du cycle de vie d'un élément DOM.
    </p>
    <ul>
        <li><code>created</code> : Appelé lorsque la directive est attachée à l'élément.</li>
        <li><code>beforeMount</code> : Appelé avant que l'élément ne soit inséré dans le DOM.</li>
        <li><code>mounted</code> : Appelé lorsque l'élément est inséré dans le DOM.</li>
        <li><code>beforeUpdate</code> : Appelé avant la mise à jour de l'élément.</li>
        <li><code>updated</code> : Appelé après la mise à jour de l'élément.</li>
        <li><code>beforeUnmount</code> : Appelé avant que l'élément ne soit supprimé du DOM.</li>
        <li><code>unmounted</code> : Appelé lorsque l'élément est supprimé du DOM.</li>
    </ul>

    <h4><i class="fas fa-hand-pointer"></i> Exemple avec Plusieurs Hooks</h4>
    <div class="example-box">
        <pre>
app.directive(<span class="string">'highlight'</span>, {
    beforeMount(el, binding) {
        el.style.backgroundColor = binding.value; <span class="comment">// Applique la couleur initiale</span>
    },
    updated(el, binding) {
        el.style.backgroundColor = binding.value; <span class="comment">// Met à jour la couleur si la valeur change</span>
    }
});
        </pre>
    </div>

    <h3><i class="fas fa-tasks"></i> Paramètres dans les Directives</h3>
    <p>
        Les directives personnalisées peuvent recevoir des paramètres via leur objet <code>binding</code>.
    </p>
    <ul>
        <li><code>binding.value</code> : La valeur passée à la directive.</li>
        <li><code>binding.arg</code> : Un argument spécifique, comme <code>:arg</code>.</li>
        <li><code>binding.modifiers</code> : Les modificateurs appliqués à la directive.</li>
    </ul>
    <h4><i class="fas fa-paint-brush"></i> Exemple avec Paramètres</h4>
    <div class="example-box">
        <pre>
app.directive(<span class="string">'color'</span>, {
    mounted(el, binding) {
        const color = binding.arg || <span class="string">'black'</span>; <span class="comment">// Définit une couleur par défaut</span>
        el.style.color = color;
        <span class="comment">// Vérifie les modificateurs</span>
        if (binding.modifiers.bold) {
            el.style.fontWeight = <span class="string">'bold'</span>;
        }
    }
});
        </pre>
    </div>
    <p>
        Dans ce cas, la directive peut être utilisée comme suit :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;p</span> v-color:blue.bold&gt;Texte en bleu et en gras<span class="tag">&lt;/p&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-shield-alt"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Limitez les directives personnalisées à des cas spécifiques pour éviter les redondances avec les fonctionnalités existantes de Vue.</li>
        <li>Nommez vos directives de manière descriptive pour faciliter leur compréhension.</li>
        <li>Documentez bien vos directives pour les rendre réutilisables dans d'autres projets.</li>
    </ul>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <ul>
        <li>Créer des directives pour la validation de formulaires personnalisées.</li>
        <li>Gérer les événements globaux ou spécifiques à un élément.</li>
        <li>Ajouter des animations ou des styles dynamiques aux éléments DOM.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li>Les directives personnalisées offrent une flexibilité pour manipuler directement le DOM.</li>
        <li>Elles sont définies avec <code>app.directive</code> et peuvent être configurées avec plusieurs hooks.</li>
        <li>Utilisez-les pour des fonctionnalités spécifiques non couvertes par les directives intégrées de Vue.</li>
    </ul>
</div>
<div class="sommaire-container">
    <h2><i class="fas fa-layer-group"></i> Sommaire - Components</h2>
    <ul>
        <li><a href="#component-basics"><i class="fas fa-box"></i> Component Basics</a></li>
        <li><a href="#props"><i class="fas fa-arrow-right"></i> Props</a></li>
        <li><a href="#events"><i class="fas fa-bell"></i> Custom Events</a></li>
        <li><a href="#slots"><i class="fas fa-layer-group"></i> Slots</a></li>
        <li><a href="#dynamic-components"><i class="fas fa-random"></i> Dynamic Components</a></li>
        <li><a href="#render-functions"><i class="fas fa-code"></i> Render Functions</a></li>
        <li><a href="#functional-components"><i class="fas fa-cogs"></i> Functional Components</a></li>
    </ul>
</div>
<div class="container">
    <h2 id="component-basics"><i class="fas fa-box"></i> Component Basics</h2>
    <p>
        Les composants sont au cœur de Vue.js. Ils permettent de diviser une application en parties réutilisables et indépendantes, chaque composant encapsulant sa propre logique, structure, et style. Cela facilite la création, la maintenance et la mise à jour des applications complexes.
    </p>

    <h3><i class="fas fa-info-circle"></i> Qu'est-ce qu'un Composant ?</h3>
    <p>
        Un composant est une instance Vue réutilisable définie avec ses propres options. Les composants sont déclarés une fois et peuvent être utilisés plusieurs fois dans une application.
    </p>

    <h3><i class="fas fa-code"></i> Création d'un Composant</h3>
    <p>
        Voici un exemple simple de définition et d'utilisation d'un composant :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Définir un composant</span>
app.component(<span class="string">'mon-composant'</span>, {
    template: <span class="string">'&lt;div&gt;Ceci est un composant réutilisable&lt;/div&gt;'</span>
});

<span class="comment">// Utiliser le composant dans le template</span>
<span class="tag">&lt;mon-composant&gt;&lt;/mon-composant&gt;</span>
        </pre>
    </div>
    <p>
        Dans cet exemple :
        <ul>
            <li><code>mon-composant</code> est enregistré comme un composant global.</li>
            <li>Il peut être utilisé n'importe où dans le template HTML de l'application Vue.</li>
        </ul>
    </p>

    <h3><i class="fas fa-tools"></i> Composants avec Données</h3>
    <p>
        Un composant peut inclure ses propres données pour gérer son état interne. Voici comment définir des données dans un composant :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Définir un composant avec des données</span>
app.component(<span class="string">'compteur'</span>, {
    data() {
        <span class="keyword">return</span> {
            compteur: 0
        };
    },
    template: <span class="string">'&lt;div&gt;Compteur : {{ compteur }} &lt;button @click="compteur++"&gt;+1&lt;/button&gt;&lt;/div&gt;'</span>
});
        </pre>
    </div>
    <p>
        Ce composant affiche un compteur qui peut être incrémenté en cliquant sur un bouton.
    </p>

    <h3><i class="fas fa-layer-group"></i> Organisation des Composants</h3>
    <p>
        Dans une application complexe, il est conseillé de diviser les composants en fichiers distincts pour une meilleure organisation. Par exemple :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Fichier compteur.js</span>
<span class="keyword">export default</span> {
    data() {
        <span class="keyword">return</span> { compteur: 0 };
    },
    template: <span class="string">'&lt;div&gt;Compteur : {{ compteur }} &lt;button @click="compteur++"&gt;+1&lt;/button&gt;&lt;/div&gt;'</span>
};
        </pre>
    </div>
    <p>
        Ensuite, importez et enregistrez ce composant dans l'application principale.
    </p>

    <h3><i class="fas fa-shield-alt"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Découpez votre application en petits composants pour faciliter la maintenance.</li>
        <li>Utilisez des noms significatifs pour vos composants afin d'améliorer la lisibilité.</li>
        <li>Évitez de mélanger trop de logique dans un seul composant.</li>
    </ul>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <ul>
        <li>Créer des boutons, des modales ou des cartes réutilisables.</li>
        <li>Organiser les pages d'une application avec des composants parents et enfants.</li>
        <li>Développer des composants spécifiques pour gérer des fonctionnalités comme les tableaux de données, les graphiques ou les formulaires.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li>Les composants sont des blocs de construction modulaires dans Vue.js.</li>
        <li>Ils peuvent inclure des données, des événements et des styles propres.</li>
        <li>Ils facilitent la réutilisation et la maintenance de votre application.</li>
    </ul>
</div>

<div class="container">
    <h2 id="props"><i class="fas fa-arrow-right"></i> Props</h2>
    <p>
        Les <strong>props</strong> (propriétés) permettent à un composant parent de transmettre des données à un composant enfant. Elles sont définies dans le composant enfant et utilisées comme des attributs HTML dans le composant parent.
    </p>

    <h3><i class="fas fa-info-circle"></i> Qu'est-ce qu'une Prop ?</h3>
    <p>
        Une prop est une valeur déclarée par un composant enfant et fournie par un composant parent. Cela permet de créer des composants dynamiques et réutilisables.
    </p>

    <h3><i class="fas fa-code"></i> Utilisation des Props</h3>
    <p>
        Voici un exemple de base :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Composant enfant</span>
app.component(<span class="string">'mon-composant'</span>, {
    props: [<span class="string">'message'</span>],
    template: <span class="string">'&lt;p&gt;{{ message }}&lt;/p&gt;'</span>
});

<span class="comment">// Composant parent</span>
<span class="tag">&lt;mon-composant</span> message=<span class="string">"Bonjour, Vue.js!"</span>&gt;<span class="tag">&lt;/mon-composant&gt;</span>
        </pre>
    </div>
    <p>
        Dans cet exemple :
        <ul>
            <li>Le composant enfant utilise la prop <code>message</code> pour afficher du texte.</li>
            <li>Le composant parent passe la valeur de <code>message</code> en tant qu'attribut.</li>
        </ul>
    </p>

    <h3><i class="fas fa-check-circle"></i> Validation des Props</h3>
    <p>
        Vous pouvez valider les props pour garantir qu'elles respectent les types ou les formats attendus. Cela est particulièrement utile pour les projets complexes.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Déclaration avec validation</span>
app.component(<span class="string">'mon-composant'</span>, {
    props: {
        message: {
            type: <span class="keyword">String</span>,
            required: <span class="keyword">true</span>,
            default: <span class="string">'Texte par défaut'</span>
        },
        compteur: {
            type: <span class="keyword">Number</span>,
            validator(value) {
                <span class="keyword">return</span> value >= 0; <span class="comment">// Doit être positif</span>
            }
        }
    },
    template: <span class="string">'&lt;p&gt;{{ message }} - {{ compteur }}&lt;/p&gt;'</span>
});
        </pre>
    </div>

    <h3><i class="fas fa-exclamation-circle"></i> Utilisation Dynamique</h3>
    <p>
        Vous pouvez passer des expressions dynamiques comme props à un composant :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;mon-composant</span> :message=<span class="string">'dynamicMessage'</span> :compteur=<span class="string">'10'</span>&gt;<span class="tag">&lt;/mon-composant&gt;</span>
        </pre>
    </div>
    <p>
        Ici, <code>:message</code> et <code>:compteur</code> sont liés à des données dynamiques du composant parent.
    </p>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Validez toujours vos props pour éviter les comportements inattendus.</li>
        <li>Utilisez des noms descriptifs pour vos props.</li>
        <li>Ne modifiez jamais directement les props dans le composant enfant. Si vous devez les changer, utilisez une copie locale.</li>
    </ul>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <ul>
        <li>Transmettre des données d'un composant parent à un enfant, comme un titre ou un contenu.</li>
        <li>Créer des composants réutilisables, comme des boutons ou des cartes avec des configurations dynamiques.</li>
        <li>Faciliter la communication descendante dans les applications Vue.js.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li>Les props permettent de transmettre des données des composants parents aux enfants.</li>
        <li>Elles doivent être déclarées et validées dans le composant enfant.</li>
        <li>Ne modifiez jamais directement une prop dans un composant enfant : utilisez des données locales si nécessaire.</li>
    </ul>
</div>
<div class="container">
    <h2 id="events"><i class="fas fa-bell"></i> Custom Events</h2>
    <p>
        Les <strong>Custom Events</strong> (événements personnalisés) permettent aux composants enfants de communiquer avec leurs composants parents. Cela est particulièrement utile pour transmettre des données ou signaler qu'une action a eu lieu.
    </p>

    <h3><i class="fas fa-info-circle"></i> Pourquoi Utiliser les Custom Events ?</h3>
    <p>
        Les props permettent de transmettre des données d'un parent à un enfant. À l'inverse, les événements personnalisés permettent à un enfant d'envoyer des informations à son parent. Cela aide à maintenir une communication unidirectionnelle dans le flux de données.
    </p>

    <h3><i class="fas fa-code"></i> Émission d'un Événement Personnalisé</h3>
    <p>
        Pour émettre un événement, vous utilisez la méthode <code>this.$emit</code> dans le composant enfant. Voici un exemple :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Composant enfant</span>
app.component(<span class="string">'mon-bouton'</span>, {
    template: <span class="string">'&lt;button @click="envoyer"&gt;Cliquez-moi&lt;/button&gt;'</span>,
    methods: {
        envoyer() {
            this.$emit(<span class="string">'click-event'</span>, <span class="string">'Données envoyées!'</span>);
        }
    }
});

<span class="comment">// Composant parent</span>
<span class="tag">&lt;mon-bouton</span> @click-event=<span class="string">'handleEvent'</span>&gt;<span class="tag">&lt;/mon-bouton&gt;</span>

<span class="comment">// Méthode du composant parent</span>
methods: {
    handleEvent(data) {
        console.log(data); <span class="comment">// Affiche "Données envoyées!"</span>
    }
}
        </pre>
    </div>
    <p>
        Dans cet exemple :
        <ul>
            <li>Le composant enfant émet un événement nommé <code>click-event</code>.</li>
            <li>Le parent intercepte cet événement avec <code>@click-event</code> et exécute une méthode.</li>
        </ul>
    </p>

    <h3><i class="fas fa-share"></i> Transmission de Données via les Événements</h3>
    <p>
        Les données peuvent être transmises au parent en tant qu'arguments lors de l'émission de l'événement. Cela permet une communication descendante et ascendante fluide.
    </p>

    <h3><i class="fas fa-check-circle"></i> Utilisation avec des Composants Réutilisables</h3>
    <p>
        Les événements personnalisés sont particulièrement utiles dans les composants réutilisables. Voici un exemple avec un composant formulaire :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Composant enfant</span>
app.component(<span class="string">'formulaire'</span>, {
    data() {
        <span class="keyword">return</span> {
            nom: <span class="string">''</span>
        };
    },
    template: <span class="string">`
        &lt;input v-model="nom" placeholder="Entrez votre nom"/&gt;
        &lt;button @click="envoyer"&gt;Envoyer&lt;/button&gt;
    `</span>,
    methods: {
        envoyer() {
            this.$emit(<span class="string">'form-submitted'</span>, this.nom);
        }
    }
});

<span class="comment">// Composant parent</span>
<span class="tag">&lt;formulaire</span> @form-submitted=<span class="string">'handleSubmission'</span>&gt;<span class="tag">&lt;/formulaire&gt;</span>

<span class="comment">// Méthode du composant parent</span>
methods: {
    handleSubmission(nom) {
        console.log(<span class="string">'Nom reçu:'</span>, nom);
    }
}
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Utilisez des noms d'événements descriptifs et significatifs.</li>
        <li>Centralisez la gestion des événements dans le parent pour éviter une logique dispersée.</li>
        <li>Évitez d'émettre trop d'événements, ce qui pourrait rendre le flux de données difficile à suivre.</li>
    </ul>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <ul>
        <li>Gérer les interactions utilisateur dans un formulaire ou une modale.</li>
        <li>Notifier le parent lorsque des données sont modifiées dans un enfant.</li>
        <li>Créer des composants interactifs comme des sliders ou des menus.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li>Les Custom Events permettent la communication des enfants vers les parents.</li>
        <li>Ils utilisent <code>this.$emit</code> dans les enfants et <code>@nom-evenement</code> dans les parents.</li>
        <li>Ils sont essentiels pour maintenir un flux de données unidirectionnel.</li>
    </ul>
</div>
<div class="container">
    <h2 id="slots"><i class="fas fa-layer-group"></i> Slots</h2>
    <p>
        Les <strong>slots</strong> permettent de passer du contenu HTML d'un composant parent à un composant enfant. Ils offrent une grande flexibilité pour créer des composants réutilisables tout en permettant aux parents de personnaliser le contenu affiché.
    </p>

    <h3><i class="fas fa-info-circle"></i> Qu'est-ce qu'un Slot ?</h3>
    <p>
        Un slot agit comme un point d'insertion dans le template d'un composant. Le contenu transmis par le parent remplace le slot défini dans le composant enfant.
    </p>

    <h3><i class="fas fa-code"></i> Utilisation de Base des Slots</h3>
    <p>
        Voici un exemple simple de définition et d'utilisation d'un slot :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Composant enfant</span>
app.component(<span class="string">'card'</span>, {
    template: <span class="string">`
        &lt;div class="card"&gt;
            &lt;slot&gt;Contenu par défaut&lt;/slot&gt;
        &lt;/div&gt;
    `</span>
});

<span class="comment">// Composant parent</span>
<span class="tag">&lt;card&gt;</span>
    <span class="tag">&lt;p&gt;</span>Contenu personnalisé<span class="tag">&lt;/p&gt;</span>
<span class="tag">&lt;/card&gt;</span>
        </pre>
    </div>
    <p>
        Dans cet exemple :
        <ul>
            <li>Le composant enfant utilise un <code>&lt;slot&gt;</code> pour définir une zone où le contenu personnalisé sera inséré.</li>
            <li>Si aucun contenu n'est fourni par le parent, le texte "Contenu par défaut" sera affiché.</li>
        </ul>
    </p>

    <h3><i class="fas fa-layer-group"></i> Nommer les Slots</h3>
    <p>
        Vous pouvez nommer des slots pour créer plusieurs zones de contenu personnalisables.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Composant enfant</span>
app.component(<span class="string">'layout'</span>, {
    template: <span class="string">`
        &lt;header&gt;&lt;slot name="header"&gt;Header par défaut&lt;/slot&gt;&lt;/header&gt;
        &lt;main&gt;&lt;slot&gt;Contenu principal par défaut&lt;/slot&gt;&lt;/main&gt;
        &lt;footer&gt;&lt;slot name="footer"&gt;Footer par défaut&lt;/slot&gt;&lt;/footer&gt;
    `</span>
});

<span class="comment">// Composant parent</span>
<span class="tag">&lt;layout&gt;</span>
    <span class="tag">&lt;template v-slot:header&gt;</span>
        <span class="tag">&lt;h1&gt;</span>Mon Header<span class="tag">&lt;/h1&gt;</span>
    <span class="tag">&lt;/template&gt;</span>
    <span class="tag">&lt;p&gt;</span>Contenu principal<span class="tag">&lt;/p&gt;</span>
    <span class="tag">&lt;template v-slot:footer&gt;</span>
        <span class="tag">&lt;p&gt;</span>Mon Footer<span class="tag">&lt;/p&gt;</span>
    <span class="tag">&lt;/template&gt;</span>
<span class="tag">&lt;/layout&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-cogs"></i> Slots Scoped (À Portée)</h3>
    <p>
        Les slots scoped permettent au composant enfant de transmettre des données au contenu inséré par le parent.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Composant enfant</span>
app.component(<span class="string">'liste'</span>, {
    data() {
        <span class="keyword">return</span> {
            items: [<span class="string">'Item 1'</span>, <span class="string">'Item 2'</span>, <span class="string">'Item 3'</span>]
        };
    },
    template: <span class="string">`
        &lt;ul&gt;
            &lt;li v-for="(item, index) in items" :key="index"&gt;
                &lt;slot :item="item"&gt;{{ item }}&lt;/slot&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    `</span>
});

<span class="comment">// Composant parent</span>
<span class="tag">&lt;liste&gt;</span>
    <span class="tag">&lt;template v-slot="{ item }"&gt;</span>
        <span class="tag">&lt;strong&gt;</span>{{ item }}<span class="tag">&lt;/strong&gt;</span>
    <span class="tag">&lt;/template&gt;</span>
<span class="tag">&lt;/liste&gt;</span>
        </pre>
    </div>
    <p>
        Ici :
        <ul>
            <li>Le composant enfant passe les données <code>item</code> au parent via le slot scoped.</li>
            <li>Le parent personnalise l'affichage des éléments de la liste en utilisant ces données.</li>
        </ul>
    </p>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Utilisez les slots pour personnaliser les composants tout en gardant leur logique intacte.</li>
        <li>Nommer les slots clairement pour faciliter leur compréhension et leur utilisation.</li>
        <li>Privilégiez les slots scoped pour transmettre des données des enfants vers les parents.</li>
    </ul>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <ul>
        <li>Créer des layouts dynamiques avec des slots nommés pour le header, le contenu principal et le footer.</li>
        <li>Construire des composants réutilisables comme des tableaux ou des listes personnalisables.</li>
        <li>Gérer des vues complexes tout en maintenant une séparation claire des responsabilités.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li>Les slots permettent de personnaliser le contenu des composants enfants.</li>
        <li>Les slots nommés et scoped augmentent la flexibilité pour des composants complexes.</li>
        <li>Ils sont essentiels pour créer des applications modulaires et réutilisables.</li>
    </ul>
</div>
<div class="container">
    <h2 id="dynamic-components"><i class="fas fa-exchange-alt"></i> Dynamic Components</h2>
    <p>
        Les <strong>Dynamic Components</strong> permettent de basculer entre différents composants dynamiquement tout en conservant leur état. Cela est utile pour les scénarios où le contenu ou les fonctionnalités affichés changent en fonction des besoins utilisateur ou des événements.
    </p>

    <h3><i class="fas fa-info-circle"></i> Pourquoi Utiliser des Composants Dynamiques ?</h3>
    <p>
        Imaginez une interface utilisateur où des onglets, des étapes de formulaire ou des vues différentes doivent être affichés. Les composants dynamiques permettent de gérer ces scénarios tout en réduisant le code redondant et en améliorant la réutilisation.
    </p>

    <h3><i class="fas fa-code"></i> Utilisation Basique</h3>
    <p>
        Vue.js fournit la balise <code>&lt;component&gt;</code> pour rendre des composants dynamiquement. Voici un exemple :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Composants définis</span>
app.component(<span class="string">'composant-a'</span>, {
    template: <span class="string">'&lt;div&gt;Ceci est le Composant A&lt;/div&gt;'</span>
});
app.component(<span class="string">'composant-b'</span>, {
    template: <span class="string">'&lt;div&gt;Ceci est le Composant B&lt;/div&gt;'</span>
});

<span class="comment">// Utilisation dans le composant parent</span>
<span class="tag">&lt;div&gt;</span>
    <span class="tag">&lt;button</span> @click=<span class="string">"composantActif = 'composant-a'"</span>&gt;Afficher A<span class="tag">&lt;/button&gt;</span>
    <span class="tag">&lt;button</span> @click=<span class="string">"composantActif = 'composant-b'"</span>&gt;Afficher B<span class="tag">&lt;/button&gt;</span>
    <span class="tag">&lt;component</span> :is=<span class="string">"composantActif"</span>&gt;<span class="tag">&lt;/component&gt;</span>
<span class="tag">&lt;/div&gt;</span>
        </pre>
    </div>
    <p>
        Dans cet exemple :
        <ul>
            <li>Les composants <code>composant-a</code> et <code>composant-b</code> sont définis.</li>
            <li>La balise <code>&lt;component&gt;</code> bascule dynamiquement entre les composants en fonction de la variable <code>composantActif</code>.</li>
        </ul>
    </p>

    <h3><i class="fas fa-layer-group"></i> Conservation de l'État avec <code>keep-alive</code></h3>
    <p>
        Lors de l'utilisation de composants dynamiques, les instances sont recréées par défaut lors du changement. Si vous souhaitez conserver leur état, utilisez la directive <code>keep-alive</code> :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;keep-alive&gt;</span>
    <span class="tag">&lt;component</span> :is=<span class="string">"composantActif"</span>&gt;<span class="tag">&lt;/component&gt;</span>
<span class="tag">&lt;/keep-alive&gt;</span>
        </pre>
    </div>
    <p>
        Cela est utile pour préserver l'état des formulaires, des données ou des interactions utilisateur lorsque vous revenez à un composant précédent.
    </p>

    <h3><i class="fas fa-exclamation-circle"></i> Utilisation Avancée</h3>
    <p>
        Vous pouvez charger des composants dynamiques de manière asynchrone pour améliorer les performances. Voici un exemple :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Chargement asynchrone</span>
app.component(<span class="string">'composant-dynamique'</span>, <span class="keyword">() =&gt;</span> <span class="keyword">import</span>(<span class="string">'./ComposantDynamique.vue'</span>));

<span class="comment">// Utilisation</span>
<span class="tag">&lt;component</span> :is=<span class="string">"composantDynamique"</span>&gt;<span class="tag">&lt;/component&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Utilisez des noms de composants clairs et descriptifs pour faciliter le suivi des composants dynamiques.</li>
        <li>Employez <code>keep-alive</code> uniquement lorsque la conservation de l'état est nécessaire.</li>
        <li>Chargez les composants dynamiquement pour réduire la taille initiale du bundle de l'application.</li>
    </ul>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <ul>
        <li>Création de systèmes de navigation à onglets dynamiques.</li>
        <li>Gestion de formulaires multi-étapes où chaque étape est un composant différent.</li>
        <li>Affichage de différentes vues dans une seule section en fonction de l'état de l'application.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li>Les composants dynamiques permettent de basculer entre différentes vues ou fonctionnalités de manière fluide.</li>
        <li>La balise <code>&lt;component&gt;</code> est utilisée avec la directive <code>:is</code> pour afficher dynamiquement des composants.</li>
        <li>Utilisez <code>keep-alive</code> pour conserver l'état et les données des composants.</li>
    </ul>
</div>
<div class="container">
    <h2 id="render-functions"><i class="fas fa-code"></i> Render Functions</h2>
    <p>
        Les <strong>Render Functions</strong> permettent de générer dynamiquement du contenu HTML dans un composant Vue.js en utilisant JavaScript. Contrairement aux templates, elles offrent une flexibilité accrue pour créer des structures dynamiques complexes.
    </p>

    <h3><i class="fas fa-info-circle"></i> Pourquoi Utiliser des Render Functions ?</h3>
    <p>
        Les templates Vue.js couvrent la plupart des cas d'utilisation. Cependant, les Render Functions deviennent utiles dans les situations suivantes :
        <ul>
            <li>Génération de structures HTML dynamiques qui dépendent fortement de la logique.</li>
            <li>Réutilisation de structures complexes ou conditionnelles non gérables avec les templates.</li>
            <li>Création de bibliothèques de composants où une flexibilité maximale est requise.</li>
        </ul>
    </p>

    <h3><i class="fas fa-code"></i> Syntaxe de Base</h3>
    <p>
        Une Render Function retourne un arbre d'éléments virtuels (VNode) représentant la structure HTML à afficher :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Composant avec une Render Function</span>
app.component(<span class="string">'custom-render'</span>, {
    render() {
        <span class="keyword">return</span> Vue.h(
            <span class="string">'div'</span>, 
            { class: <span class="string">'custom-class'</span> },
            <span class="string">'Ceci est généré par une Render Function.'</span>
        );
    }
});
        </pre>
    </div>

    <p>
        Ici :
        <ul>
            <li><code>Vue.h</code> est utilisé pour créer des éléments virtuels (VNode).</li>
            <li>Le premier argument est le nom de la balise HTML.</li>
            <li>Le second argument est un objet d'attributs ou de propriétés.</li>
            <li>Le troisième argument est le contenu ou les enfants.</li>
        </ul>
    </p>

    <h3><i class="fas fa-cogs"></i> Render Functions avec des Données Dynamiques</h3>
    <p>
        Vous pouvez créer des Render Functions qui affichent des éléments dynamiquement en fonction des données du composant :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Composant avec Render Function et données dynamiques</span>
app.component(<span class="string">'dynamic-list'</span>, {
    data() {
        <span class="keyword">return</span> {
            items: [<span class="string">'Item 1'</span>, <span class="string">'Item 2'</span>, <span class="string">'Item 3'</span>]
        };
    },
    render() {
        <span class="keyword">return</span> Vue.h(
            <span class="string">'ul'</span>,
            this.items.map(item =>
                Vue.h(<span class="string">'li'</span>, item)
            )
        );
    }
});
        </pre>
    </div>

    <h3><i class="fas fa-tools"></i> Utilisation Avancée</h3>
    <p>
        Les Render Functions peuvent inclure une logique conditionnelle complexe :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Composant avec logique conditionnelle</span>
app.component(<span class="string">'conditional-render'</span>, {
    data() {
        <span class="keyword">return</span> {
            showText: <span class="keyword">true</span>
        };
    },
    render() {
        <span class="keyword">return</span> this.showText
            ? Vue.h(<span class="string">'p'</span>, <span class="string">'Texte affiché.'</span>)
            : Vue.h(<span class="string">'p'</span>, <span class="string">'Texte masqué.'</span>);
    }
});
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Utilisez les Render Functions uniquement lorsque les templates ne suffisent pas.</li>
        <li>Préférez des fonctions claires et bien structurées pour éviter la complexité.</li>
        <li>Combinez-les avec des slots pour plus de flexibilité.</li>
    </ul>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <ul>
        <li>Création de bibliothèques de composants où la configuration et la personnalisation sont cruciales.</li>
        <li>Génération d'arbres DOM complexes basés sur des données dynamiques.</li>
        <li>Intégration avec des bibliothèques tierces nécessitant un contrôle précis du DOM.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li>Les Render Functions permettent de générer dynamiquement du contenu HTML en JavaScript.</li>
        <li>Utilisez <code>Vue.h</code> pour créer des éléments virtuels (VNode).</li>
        <li>Privilégiez-les pour les scénarios complexes nécessitant une flexibilité maximale.</li>
    </ul>
</div>
<div class="container">
    <h2 id="functional-components"><i class="fas fa-tools"></i> Functional Components</h2>
    <p>
        Les <strong>Functional Components</strong> sont des composants légers et stateless (sans état) dans Vue.js. Ils sont utilisés lorsque le composant ne gère pas son propre état ou cycle de vie, et qu'il se contente de recevoir des props pour générer un rendu.
    </p>

    <h3><i class="fas fa-info-circle"></i> Pourquoi Utiliser des Functional Components ?</h3>
    <p>
        Les Functional Components sont utiles dans les scénarios suivants :
        <ul>
            <li>Les composants ne nécessitent pas de cycle de vie.</li>
            <li>Ils n'ont pas besoin d'accès à des données locales ou à des méthodes de l'instance.</li>
            <li>Vous souhaitez améliorer les performances pour des composants simples.</li>
        </ul>
    </p>

    <h3><i class="fas fa-code"></i> Création d'un Functional Component</h3>
    <p>
        Pour créer un composant fonctionnel, utilisez la propriété <code>functional</code> et fournissez une fonction de rendu :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Création d'un composant fonctionnel</span>
app.component(<span class="string">'functional-button'</span>, {
    functional: <span class="keyword">true</span>,
    props: {
        label: {
            type: <span class="keyword">String</span>,
            required: <span class="keyword">true</span>
        }
    },
    render(h, context) {
        <span class="keyword">return</span> h(
            <span class="string">'button'</span>, 
            {
                class: <span class="string">'btn btn-primary'</span>,
                on: context.listeners
            }, 
            context.props.label
        );
    }
});
        </pre>
    </div>

    <p>
        Ici :
        <ul>
            <li><code>h</code> est une fonction de rendu pour créer des éléments virtuels (VNode).</li>
            <li><code>context.props</code> contient les props passées au composant.</li>
            <li><code>context.listeners</code> permet de transmettre les événements du parent à l'enfant.</li>
        </ul>
    </p>

    <h3><i class="fas fa-cogs"></i> Utilisation</h3>
    <p>
        Un composant fonctionnel peut être utilisé comme un composant classique dans le template :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;functional-button</span> label=<span class="string">"Cliquez ici"</span> @click=<span class="string">"handleClick"</span>&gt;<span class="tag">&lt;/functional-button&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Avantages et Limitations</h3>
    <p><strong>Avantages :</strong></p>
    <ul class="importance-list">
        <li>Performances améliorées grâce à l'absence d'instance de composant.</li>
        <li>Plus léger et plus rapide à créer.</li>
        <li>Convient pour des composants purement décoratifs ou de présentation.</li>
    </ul>
    <p><strong>Limitations :</strong></p>
    <ul>
        <li>Pas de gestion de l'état local.</li>
        <li>Pas de cycle de vie des composants.</li>
        <li>Moins adapté pour des scénarios complexes.</li>
    </ul>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <ul>
        <li>Création de composants UI simples comme des boutons, des étiquettes ou des badges.</li>
        <li>Utilisation dans des bibliothèques où les composants doivent être très performants.</li>
        <li>Composants qui ne nécessitent que des props et des événements.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li>Les Functional Components sont stateless et optimisés pour les performances.</li>
        <li>Ils utilisent une fonction de rendu pour générer leur contenu.</li>
        <li>Privilégiez-les pour des composants simples et légers.</li>
    </ul>
</div>
<div class="container">
    <h2 id="functional-components"><i class="fas fa-tools"></i> Functional Components</h2>
    <p>
        Les <strong>Functional Components</strong> sont des composants légers et stateless (sans état) dans Vue.js. Ils sont utilisés lorsque le composant ne gère pas son propre état ou cycle de vie, et qu'il se contente de recevoir des props pour générer un rendu.
    </p>

    <h3><i class="fas fa-info-circle"></i> Pourquoi Utiliser des Functional Components ?</h3>
    <p>
        Les Functional Components sont utiles dans les scénarios suivants :
        <ul>
            <li>Les composants ne nécessitent pas de cycle de vie.</li>
            <li>Ils n'ont pas besoin d'accès à des données locales ou à des méthodes de l'instance.</li>
            <li>Vous souhaitez améliorer les performances pour des composants simples.</li>
        </ul>
    </p>

    <h3><i class="fas fa-code"></i> Création d'un Functional Component</h3>
    <p>
        Pour créer un composant fonctionnel, utilisez la propriété <code>functional</code> et fournissez une fonction de rendu :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Création d'un composant fonctionnel</span>
app.component(<span class="string">'functional-button'</span>, {
    functional: <span class="keyword">true</span>,
    props: {
        label: {
            type: <span class="keyword">String</span>,
            required: <span class="keyword">true</span>
        }
    },
    render(h, context) {
        <span class="keyword">return</span> h(
            <span class="string">'button'</span>, 
            {
                class: <span class="string">'btn btn-primary'</span>,
                on: context.listeners
            }, 
            context.props.label
        );
    }
});
        </pre>
    </div>

    <p>
        Ici :
        <ul>
            <li><code>h</code> est une fonction de rendu pour créer des éléments virtuels (VNode).</li>
            <li><code>context.props</code> contient les props passées au composant.</li>
            <li><code>context.listeners</code> permet de transmettre les événements du parent à l'enfant.</li>
        </ul>
    </p>

    <h3><i class="fas fa-cogs"></i> Utilisation</h3>
    <p>
        Un composant fonctionnel peut être utilisé comme un composant classique dans le template :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;functional-button</span> label=<span class="string">"Cliquez ici"</span> @click=<span class="string">"handleClick"</span>&gt;<span class="tag">&lt;/functional-button&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Avantages et Limitations</h3>
    <p><strong>Avantages :</strong></p>
    <ul class="importance-list">
        <li>Performances améliorées grâce à l'absence d'instance de composant.</li>
        <li>Plus léger et plus rapide à créer.</li>
        <li>Convient pour des composants purement décoratifs ou de présentation.</li>
    </ul>
    <p><strong>Limitations :</strong></p>
    <ul>
        <li>Pas de gestion de l'état local.</li>
        <li>Pas de cycle de vie des composants.</li>
        <li>Moins adapté pour des scénarios complexes.</li>
    </ul>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <ul>
        <li>Création de composants UI simples comme des boutons, des étiquettes ou des badges.</li>
        <li>Utilisation dans des bibliothèques où les composants doivent être très performants.</li>
        <li>Composants qui ne nécessitent que des props et des événements.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li>Les Functional Components sont stateless et optimisés pour les performances.</li>
        <li>Ils utilisent une fonction de rendu pour générer leur contenu.</li>
        <li>Privilégiez-les pour des composants simples et légers.</li>
    </ul>
</div>
<div class="container">
    <h2 id="reactive"><i class="fas fa-bolt"></i> reactive()</h2>
    <p>
        La méthode <strong>reactive()</strong> est utilisée pour créer un objet réactif en Vue.js. Elle transforme un objet JavaScript ordinaire en un objet réactif, ce qui signifie que toute modification des propriétés de cet objet sera détectée automatiquement par Vue et entraînera une mise à jour de l'interface utilisateur.
    </p>

    <h3><i class="fas fa-info-circle"></i> Pourquoi Utiliser reactive() ?</h3>
    <p>
        <code>reactive()</code> est particulièrement utile lorsque vous devez suivre les modifications sur plusieurs propriétés d'un objet ou lorsque vous travaillez avec des structures de données complexes comme des tableaux ou des objets imbriqués.
    </p>

    <h3><i class="fas fa-code"></i> Exemple de Base</h3>
    <p>
        Voici comment utiliser <code>reactive()</code> :
    </p>
    <div class="example-box">
    <pre>
<span class="comment">// Création d'un objet réactif</span>
<span class="keyword">import</span> { <span class="function">reactive</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">const</span> <span class="variable">state</span> = <span class="function">reactive</span>({
    <span class="property">compteur</span>: <span class="number">0</span>,
    <span class="property">message</span>: <span class="string">'Bonjour Vue.js !'</span>
});

<span class="comment">// Modification des propriétés</span>
<span class="variable">state</span>.<span class="property">compteur</span>++;
<span class="variable">state</span>.<span class="property">message</span> = <span class="string">'Bonjour Reactivity!'</span>;
    </pre>
</div>


    <h3><i class="fas fa-cogs"></i> Utilisation dans un Composant</h3>
    <p>
        <code>reactive()</code> est souvent utilisé dans la fonction <code>setup()</code> des composants Vue.js pour définir des objets réactifs :
    </p>
    <div class="example-box">
    <pre>
<span class="comment">// Composant utilisant reactive()</span>
<span class="keyword">import</span> { <span class="function">defineComponent</span>, <span class="function">reactive</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export</span> <span class="keyword">default</span> <span class="function">defineComponent</span>({
    <span class="property">setup</span>() {
        <span class="keyword">const</span> <span class="variable">state</span> = <span class="function">reactive</span>({
            <span class="property">compteur</span>: <span class="number">0</span>,
            <span class="property">message</span>: <span class="string">'Cliquez sur le bouton'</span>
        });

        <span class="comment">// Méthode pour modifier les données</span>
        <span class="keyword">const</span> <span class="variable">incrementer</span> = () => {
            <span class="variable">state</span>.<span class="property">compteur</span>++;
        };

        <span class="keyword">return</span> { <span class="variable">state</span>, <span class="variable">incrementer</span> };
    },
    <span class="property">template</span>: <span class="string">`
        &lt;div&gt;
            &lt;p&gt;{{ state.message }}: {{ state.compteur }}&lt;/p&gt;
            &lt;button @click="incrementer"&gt;Incrémenter&lt;/button&gt;
        &lt;/div&gt;
    `</span>
});
    </pre>
</div>


    <h3><i class="fas fa-exclamation-circle"></i> Limites de reactive()</h3>
    <ul>
        <li><strong>Imbrications :</strong> Toutes les propriétés imbriquées deviennent également réactives.</li>
        <li><strong>Type non pris en charge :</strong> <code>reactive()</code> ne peut pas rendre les primitifs (string, number, etc.) réactifs. Utilisez <code>ref()</code> pour cela.</li>
    </ul>

    <h3><i class="fas fa-tools"></i> Travailler avec des Objets Imbriqués</h3>
    <p>
        Les propriétés imbriquées d'un objet réactif sont également réactives, ce qui signifie que toute modification de leurs valeurs sera suivie automatiquement :
    </p>
    <div class="example-box">
    <pre>
<span class="comment">// Objet avec des propriétés imbriquées</span>
<span class="keyword">const</span> <span class="variable">state</span> = <span class="function">reactive</span>({
    <span class="property">utilisateur</span>: {
        <span class="property">nom</span>: <span class="string">'Jean'</span>,
        <span class="property">age</span>: <span class="number">25</span>
    }
});

<span class="comment">// Modification de la propriété imbriquée</span>
<span class="variable">state</span>.<span class="property">utilisateur</span>.<span class="property">age</span> = <span class="number">26</span>;
    </pre>
</div>


    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Utilisez <code>reactive()</code> pour des structures complexes ou des objets avec plusieurs propriétés.</li>
        <li>Privilégiez des noms de propriétés descriptifs pour améliorer la lisibilité.</li>
        <li>Combinez <code>reactive()</code> avec des méthodes pour encapsuler la logique de modification.</li>
    </ul>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <ul>
        <li>Suivi des états dans des formulaires complexes.</li>
        <li>Gestion des objets de configuration ou des modèles de données.</li>
        <li>Création de tableaux réactifs pour afficher des listes interactives.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li><code>reactive()</code> rend un objet JavaScript réactif, permettant à Vue de détecter et de réagir aux modifications.</li>
        <li>Idéal pour les structures de données complexes ou les objets imbriqués.</li>
        <li>Ne prend pas en charge les valeurs primitives, utilisez <code>ref()</code> dans ces cas.</li>
    </ul>
</div>
<div class="container">
    <h2 id="ref"><i class="fas fa-link"></i> ref()</h2>
    <p>
        La méthode <strong>ref()</strong> permet de créer des valeurs réactives basées sur des primitives (string, number, boolean, etc.) ou des objets simples. Contrairement à <code>reactive()</code>, elle s’utilise principalement pour gérer une seule valeur réactive à la fois.
    </p>

    <h3><i class="fas fa-info-circle"></i> Pourquoi Utiliser ref() ?</h3>
    <p>
        <code>ref()</code> est idéal pour suivre une seule valeur ou lorsque vous travaillez avec des types primitifs. C'est aussi un outil clé dans le système de réactivité de Vue 3.
    </p>

    <h3><i class="fas fa-code"></i> Exemple de Base</h3>
    <p>
        Voici un exemple simple pour comprendre comment utiliser <code>ref()</code> :
    </p>
    <div class="example-box">
    <pre>
<span class="comment">// Importation de ref</span>
<span class="keyword">import</span> { <span class="function">ref</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="comment">// Création d'une valeur réactive</span>
<span class="keyword">const</span> <span class="variable">compteur</span> = <span class="function">ref</span>(<span class="number">0</span>);

<span class="comment">// Modification de la valeur</span>
<span class="variable">compteur</span>.<span class="property">value</span>++;
console.log(<span class="variable">compteur</span>.<span class="property">value</span>); <span class="comment">// Affiche 1</span>
    </pre>
</div>


    <h3><i class="fas fa-cogs"></i> Utilisation dans un Composant</h3>
    <p>
        <code>ref()</code> est souvent utilisé dans la fonction <code>setup()</code> des composants Vue :
    </p>
    <div class="example-box">
    <pre>
<span class="comment">// Exemple dans un composant</span>
<span class="keyword">import</span> { <span class="function">defineComponent</span>, <span class="function">ref</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export</span> <span class="keyword">default</span> <span class="function">defineComponent</span>({
    <span class="property">setup</span>() {
        <span class="keyword">const</span> <span class="variable">message</span> = <span class="function">ref</span>(<span class="string">'Bonjour Vue.js!'</span>);
        <span class="keyword">const</span> <span class="variable">compteur</span> = <span class="function">ref</span>(<span class="number">0</span>);

        <span class="comment">// Méthode pour incrémenter</span>
        <span class="keyword">const</span> <span class="variable">incrementer</span> = () => {
            <span class="variable">compteur</span>.<span class="property">value</span>++;
        };

        <span class="keyword">return</span> { <span class="variable">message</span>, <span class="variable">compteur</span>, <span class="variable">incrementer</span> };
    },
    <span class="property">template</span>: <span class="string">`
        &lt;div&gt;
            &lt;p&gt;{{ message }}&lt;/p&gt;
            &lt;p&gt;Compteur: {{ compteur }}&lt;/p&gt;
            &lt;button @click="incrementer"&gt;Incrémenter&lt;/button&gt;
        &lt;/div&gt;
    `</span>
});
    </pre>
</div>


    <h3><i class="fas fa-exclamation-circle"></i> Travail avec des Objets et des Tableaux</h3>
    <p>
        Bien que <code>ref()</code> puisse être utilisé avec des objets ou des tableaux, il est souvent préférable d'utiliser <code>reactive()</code>. Cependant, voici comment cela fonctionne :
    </p>
    <div class="example-box">
    <pre>
<span class="comment">// Tableau réactif</span>
<span class="keyword">const</span> <span class="variable">liste</span> = <span class="function">ref</span>([<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>]);

<span class="comment">// Ajout d'un élément</span>
<span class="variable">liste</span>.<span class="property">value</span>.push(<span class="number">4</span>);
console.log(<span class="variable">liste</span>.<span class="property">value</span>); <span class="comment">// Affiche [1, 2, 3, 4]</span>
    </pre>
</div>


    <h3><i class="fas fa-tools"></i> Différence entre ref() et reactive()</h3>
    <p>
        Bien qu'ils soient similaires dans leur utilisation, voici les principales différences :
    </p>
    <ul>
        <li><code>ref()</code> est idéal pour une seule valeur ou une primitive.</li>
        <li><code>reactive()</code> est préférable pour des objets ou des structures de données complexes.</li>
        <li><code>ref()</code> nécessite d'accéder à la propriété <code>.value</code> pour lire ou modifier sa valeur.</li>
    </ul>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Utilisez <code>ref()</code> pour des valeurs primitives ou des objets simples.</li>
        <li>Préférez <code>reactive()</code> pour des structures complexes imbriquées.</li>
        <li>Combinez <code>ref()</code> et <code>reactive()</code> pour gérer des scénarios mixtes.</li>
    </ul>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <ul>
        <li>Gestion d'une valeur de formulaire, comme un champ de texte.</li>
        <li>Suivi de compteurs ou de statuts simples.</li>
        <li>Suivi de la visibilité d'une modale avec un boolean (<code>true</code>/<code>false</code>).</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li><code>ref()</code> rend une valeur primitive ou simple réactive.</li>
        <li>Utilisez <code>.value</code> pour accéder ou modifier la valeur.</li>
        <li>Combinez-le avec <code>reactive()</code> pour des scénarios plus complexes.</li>
    </ul>
</div>
<div class="container">
    <h2 id="toRefs"><i class="fas fa-random"></i> toRefs()</h2>
    <p>
        La méthode <strong>toRefs()</strong> est utilisée pour convertir les propriétés d'un objet réactif en références individuelles réactives (<code>ref</code>). Elle permet d’accéder directement aux propriétés d’un objet réactif tout en conservant leur réactivité.
    </p>

    <h3><i class="fas fa-info-circle"></i> Pourquoi Utiliser toRefs() ?</h3>
    <p>
        Lorsqu’un objet réactif est déstructuré (via l’opérateur de déstructuration), les propriétés perdent leur réactivité. <code>toRefs()</code> résout ce problème en transformant chaque propriété en une référence réactive.
    </p>

    <h3><i class="fas fa-code"></i> Exemple de Base</h3>
    <p>
        Voici un exemple montrant comment <code>toRefs()</code> peut être utilisé :
    </p>
    <div class="example-box">
    <pre>
<span class="comment">// Importation de reactive et toRefs</span>
<span class="keyword">import</span> { <span class="function">reactive</span>, <span class="function">toRefs</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="comment">// Création d'un objet réactif</span>
<span class="keyword">const</span> <span class="variable">state</span> = <span class="function">reactive</span>({
    <span class="property">nom</span>: <span class="string">'Jean'</span>,
    <span class="property">age</span>: <span class="number">25</span>
});

<span class="comment">// Conversion des propriétés en refs</span>
<span class="keyword">const</span> { <span class="variable">nom</span>, <span class="variable">age</span> } = <span class="function">toRefs</span>(<span class="variable">state</span>);

<span class="comment">// Modification de la propriété réactive</span>
<span class="variable">nom</span>.<span class="property">value</span> = <span class="string">'Marie'</span>; <span class="comment">// Met à jour state.nom</span>
console.log(<span class="variable">state</span>.<span class="property">nom</span>); <span class="comment">// Affiche 'Marie'</span>
    </pre>
</div>


    <h3><i class="fas fa-cogs"></i> Utilisation dans un Composant</h3>
    <p>
        Voici un exemple pratique dans un composant Vue :
    </p>
    <div class="example-box">
    <pre>
<span class="comment">// Exemple avec toRefs()</span>
<span class="keyword">import</span> { <span class="function">defineComponent</span>, <span class="function">reactive</span>, <span class="function">toRefs</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export</span> <span class="keyword">default</span> <span class="function">defineComponent</span>({
    <span class="property">setup</span>() {
        <span class="keyword">const</span> <span class="variable">state</span> = <span class="function">reactive</span>({
            <span class="property">compteur</span>: <span class="number">0</span>,
            <span class="property">message</span>: <span class="string">'Cliquez pour incrémenter'</span>
        });

        <span class="keyword">const</span> <span class="variable">incrementer</span> = () => {
            <span class="variable">state</span>.<span class="property">compteur</span>++;
        };

        <span class="comment">// Déstructuration sécurisée avec toRefs</span>
        <span class="keyword">return</span> {
            ...<span class="function">toRefs</span>(<span class="variable">state</span>),
            <span class="variable">incrementer</span>
        };
    },
    <span class="property">template</span>: <span class="string">`
        &lt;div&gt;
            &lt;p&gt;{{ message }}&lt;/p&gt;
            &lt;p&gt;Compteur: {{ compteur }}&lt;/p&gt;
            &lt;button @click="incrementer"&gt;Incrémenter&lt;/button&gt;
        &lt;/div&gt;
    `</span>
});
    </pre>
</div>


    <h3><i class="fas fa-exclamation-circle"></i> Quand Utiliser toRefs()</h3>
    <ul>
        <li><strong>Pour la déstructuration :</strong> Si vous devez accéder aux propriétés d’un objet réactif individuellement après une déstructuration.</li>
        <li><strong>Pour passer des données réactives aux composants enfants :</strong> Vous pouvez transmettre des références réactives tout en maintenant leur réactivité.</li>
    </ul>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul class="importance-list">
        <li>Utilisez <code>toRefs()</code> uniquement lorsque la déstructuration est nécessaire.</li>
        <li>Privilégiez l'utilisation d'un objet réactif global si la déstructuration n'apporte pas de bénéfices.</li>
        <li>Combinez <code>toRefs()</code> avec des méthodes pour encapsuler la logique et simplifier la maintenance.</li>
    </ul>

    <h3><i class="fas fa-rocket"></i> Applications Pratiques</h3>
    <ul>
        <li>Passage de plusieurs données réactives à un composant enfant.</li>
        <li>Gestion d’états complexes nécessitant des propriétés réactives accessibles individuellement.</li>
        <li>Réduction des risques de perte de réactivité lors de l’utilisation de la déstructuration.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Résumé</h3>
    <ul class="importance-list">
        <li><code>toRefs()</code> convertit les propriétés d’un objet réactif en références réactives individuelles.</li>
        <li>Il est particulièrement utile lors de la déstructuration pour éviter la perte de réactivité.</li>
        <li>Privilégiez son utilisation lorsque vous travaillez avec des structures complexes ou passez des données à des composants enfants.</li>
    </ul>
</div>
<div class="container">
    <h1 id="shallow-reactive"><i class="fab fa-vuejs icon"></i> shallowReactive()</h1>
    <p>
        <strong>shallowReactive</strong> est une fonction de Vue qui permet de créer un objet réactif 
        mais limite la réactivité aux propriétés directes de l'objet. Les propriétés imbriquées ne 
        sont pas réactives. Cela peut être utile pour des scénarios où les performances et un contrôle 
        précis sur la réactivité sont requis.
    </p>

    <div class="importance-section">
        <h3><i class="fas fa-lightbulb"></i> Bonnes pratiques :</h3>
        <ul class="importance-list">
            <li>Utilisez <strong>shallowReactive</strong> pour des objets complexes où les propriétés imbriquées ne nécessitent pas de réactivité.</li>
            <li>Combinez-le avec <code>ref</code> ou <code>toRefs</code> pour gérer les propriétés imbriquées si besoin.</li>
            <li>Documentez les cas où vous utilisez <code>shallowReactive</code> pour éviter des comportements inattendus dans votre code.</li>
        </ul>
    </div>

    <h2><i class="fas fa-code"></i> Exemple simple</h2>
    <div class="example-box">
        <pre>
<span class="comment">// Importation de shallowReactive</span>
<span class="keyword">import</span> { <span class="function">shallowReactive</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="comment">// Création d'un objet avec shallowReactive</span>
<span class="keyword">const</span> <span class="variable">state</span> = <span class="function">shallowReactive</span>({
    <span class="property">utilisateur</span>: {
        <span class="property">nom</span>: <span class="string">'Jean'</span>,
        <span class="property">age</span>: <span class="number">30</span>
    }
});

<span class="comment">// Modification d'une propriété directe</span>
state.utilisateur = {
    <span class="property">nom</span>: <span class="string">'Alice'</span>,
    <span class="property">age</span>: <span class="number">25</span>
};

<span class="comment">// La propriété imbriquée ne sera pas réactive</span>
state.utilisateur.nom = <span class="string">'Bob'</span>;
        </pre>
    </div>

    <h2><i class="fas fa-cogs"></i> Exemple pratique : Utilisation dans un composant</h2>
    <div class="example-box">
        <pre>
<span class="comment">// Exemple : Utilisation de shallowReactive dans un composant Vue</span>
<span class="keyword">import</span> { <span class="function">defineComponent</span>, <span class="function">shallowReactive</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export</span> <span class="keyword">default</span> <span class="function">defineComponent</span>({
    <span class="property">setup</span>() {
        <span class="keyword">const</span> <span class="variable">state</span> = <span class="function">shallowReactive</span>({
            <span class="property">utilisateur</span>: {
                <span class="property">nom</span>: <span class="string">'Alice'</span>,
                <span class="property">age</span>: <span class="number">25</span>
            },
            <span class="property">message</span>: <span class="string">'Bienvenue'</span>
        });

        <span class="keyword">const</span> <span class="variable">changerUtilisateur</span> = () => {
            <span class="comment">// Propriété imbriquée : non réactive</span>
            state.utilisateur.nom = <span class="string">'Bob'</span>;
            <span class="comment">// Propriété directe : réactive</span>
            state.utilisateur = {
                <span class="property">nom</span>: <span class="string">'Charlie'</span>,
                <span class="property">age</span>: <span class="number">35</span>
            };
        };

        <span class="keyword">return</span> { state, changerUtilisateur };
    },
    <span class="property">template</span>: <span class="string">`
        &lt;div&gt;
            &lt;p&gt;Nom : {{ state.utilisateur.nom }}&lt;/p&gt;
            &lt;p&gt;Âge : {{ state.utilisateur.age }}&lt;/p&gt;
            &lt;button @click="changerUtilisateur"&gt;Changer l'utilisateur&lt;/button&gt;
        &lt;/div&gt;
    `</span>
});
        </pre>
    </div>

    <h2><i class="fas fa-tools"></i> Pratiques courantes</h2>
    <p>
        Bien que `shallowReactive` ne soit pas aussi utilisé que `reactive`, il a des cas d'utilisation spécifiques. 
        Voici quelques situations où il est fréquemment utilisé :
    </p>
    <ul class="importance-list">
        <li>
            <strong>Stockage d'états simples : </strong> Par exemple, pour des configurations ou paramètres où les propriétés imbriquées ne nécessitent pas de réactivité.
        </li>
        <li>
            <strong>Optimisation des performances : </strong> Si vous manipulez des objets lourds avec beaucoup de propriétés imbriquées inutilisées, comme des réponses d'API.
        </li>
        <li>
            <strong>Composants isolés : </strong> Lorsque vous savez que la réactivité imbriquée n'est pas nécessaire pour un composant spécifique.
        </li>
    </ul>

    <h2><i class="fas fa-check-circle"></i> Bonnes pratiques</h2>
    <ul class="importance-list">
        <li>
            Documentez les endroits où vous utilisez `shallowReactive` pour que d'autres développeurs ne supposent pas que les propriétés imbriquées sont réactives.
        </li>
        <li>
            Combinez `shallowReactive` avec `toRefs` si vous souhaitez rendre certaines propriétés réactives tout en gardant le contrôle.
        </li>
        <li>
            Évitez d'utiliser `shallowReactive` si toutes les propriétés de l'objet nécessitent une réactivité. Préférez dans ce cas `reactive`.
        </li>
    </ul>

    <h2><i class="fas fa-question-circle"></i> Différences entre `shallowReactive` et `reactive`</h2>
    <div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>Fonction</th>
                <th>Comportement</th>
                <th>Quand l'utiliser ?</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>reactive</code></td>
                <td>Rend réactives toutes les propriétés, y compris les propriétés imbriquées.</td>
                <td>Quand vous avez besoin de réactivité complète.</td>
            </tr>
            <tr>
                <td><code>shallowReactive</code></td>
                <td>Rend réactives uniquement les propriétés directes.</td>
                <td>Pour optimiser les performances dans les objets complexes.</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
    <div class="container">
        <h1 id="shallow-ref"><i class="fab fa-vuejs icon"></i> shallowRef()</h1>
        <p>
            Dans la Composition API de Vue.js, <strong>`shallowRef()`</strong> est une méthode qui permet de créer une référence réactive limitée uniquement au niveau supérieur de la donnée. 
            Cela signifie que si la valeur de la référence est un objet ou un tableau, ses propriétés imbriquées ne seront pas suivies de manière réactive.
        </p>

        <p class="intro-text">
            Cette méthode est utile dans les cas où une réactivité complète n'est pas nécessaire, par exemple pour des objets volumineux ou des structures de données complexes où seules 
            les mises à jour de niveau supérieur doivent être surveillées. Elle est aussi idéale pour optimiser les performances dans les projets Vue.js.
        </p>

        <div class="importance-section">
            <h3><i class="fas fa-lightbulb"></i> Différence entre <code>ref()</code> et <code>shallowRef()</code></h3>
            <div class="table-responsive">
                <table class="table-style">
                    <thead>
                        <tr>
                            <th>Méthode</th>
                            <th>Réactivité des propriétés imbriquées ?</th>
                            <th>Utilisation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>ref()</code></td>
                            <td>Oui</td>
                            <td>Pour des objets où chaque modification interne doit être suivie.</td>
                        </tr>
                        <tr>
                            <td><code>shallowRef()</code></td>
                            <td>Non</td>
                            <td>Pour des structures volumineuses ou des cas où seule la racine doit être réactive.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <h2><i class="fas fa-code icon"></i> Syntaxe</h2>
        <div class="example-box">
            <pre>
<span class="comment">// Importation de shallowRef</span>
<span class="keyword">import</span> { shallowRef } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="comment">// Création d'une référence réactive limitée</span>
<span class="keyword">const</span> state = shallowRef({
    utilisateur: {
        nom: <span class="string">'Jean'</span>,
        age: <span class="number">25</span>
    }
});

<span class="comment">// Mise à jour réactive</span>
state.value = {
    utilisateur: { nom: <span class="string">'Alice'</span>, age: <span class="number">30</span> }
};

<span class="comment">// Non réactif : modification interne</span>
state.value.utilisateur.nom = <span class="string">'Bob'</span>; <span class="comment">// Aucun effet réactif</span>
            </pre>
        </div>

        <h2><i class="fas fa-cogs icon"></i> Pratiques Courantes</h2>
        <h3>1. Utilisation basique</h3>
        <div class="example-box">
            <pre>
<span class="comment">// Importation de shallowRef</span>
<span class="keyword">import</span> { shallowRef } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="comment">// Exemple avec des données imbriquées</span>
<span class="keyword">const</span> state = shallowRef({
    message: <span class="string">'Bonjour Vue.js!'</span>,
    nested: { key: <span class="string">'valeur'</span> }
});

<span class="comment">// Réactif</span>
state.value.message = <span class="string">'Bonjour shallowRef!'</span>;

<span class="comment">// Non réactif</span>
state.value.nested.key = <span class="string">'Nouvelle valeur'</span>; <span class="comment">// Aucun effet réactif</span>
console.log(state.value.nested.key); <span class="comment">// Mise à jour directe</span>
            </pre>
        </div>

        <h3>2. Exemple dans un composant Vue</h3>
        <div class="example-box">
            <pre>
<span class="comment">// Exemple dans un composant Vue</span>
<span class="keyword">import</span> { defineComponent, shallowRef } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export default</span> defineComponent({
    setup() {
        <span class="comment">// Déclaration d'une référence</span>
        <span class="keyword">const</span> state = shallowRef({
            compteur: <span class="number">0</span>,
            message: <span class="string">'Cliquez sur le bouton'</span>
        });

        <span class="comment">// Méthode pour incrémenter</span>
        <span class="keyword">const</span> incrementer = () => {
            state.value.compteur++;
        };

        <span class="keyword">return</span> { state, incrementer };
    },
    template: <span class="string">`
        &lt;div&gt;
            &lt;p&gt;{{ state.message }}&lt;/p&gt;
            &lt;p&gt;Compteur: {{ state.compteur }}&lt;/p&gt;
            &lt;button @click="incrementer"&gt;Incrémenter&lt;/button&gt;
        &lt;/div&gt;
    `</span>
});
            </pre>
        </div>

        <h2><i class="fas fa-clipboard-check icon"></i> Bonnes Pratiques</h2>
        <ul class="importance-list">
            <li><i class="fas fa-check-circle" style="color: green;"></i> Utilisez <code>shallowRef()</code> pour des données volumineuses ou complexes où seule la valeur racine doit être suivie.</li>
            <li><i class="fas fa-check-circle" style="color: green;"></i> Si vous avez besoin d'une réactivité complète, préférez <code>ref()</code> ou <code>reactive()</code>.</li>
            <li><i class="fas fa-check-circle" style="color: green;"></i> Combinez avec des watchers si vous devez suivre manuellement les modifications internes.</li>
            <li><i class="fas fa-check-circle" style="color: green;"></i> Évitez d'utiliser <code>shallowRef()</code> pour des données nécessitant une gestion complexe de leurs sous-propriétés.</li>
        </ul>

        <h2><i class="fas fa-tools icon"></i> Scénarios Réels</h2>
        <p class="intro-text">
            Voici des cas réels où <code>shallowRef()</code> est utile :
        </p>
        <ul class="importance-list">
            <li><i class="fas fa-lightbulb"></i> Lorsque vous travaillez avec une bibliothèque externe qui gère ses propres données imbriquées.</li>
            <li><i class="fas fa-lightbulb"></i> Pour des structures de données volumineuses comme des graphiques ou des arbres où seules les mises à jour de haut niveau comptent.</li>
            <li><i class="fas fa-lightbulb"></i> Pour améliorer les performances dans des environnements critiques.</li>
        </ul>
    </div>
    <div class="container" id="router-setup">
    <h1><i class="fas fa-road icon"></i> Vue Router : Router Setup</h1>
    <p>
        Vue Router est une bibliothèque officielle de Vue.js utilisée pour gérer la navigation entre différentes pages ou vues d'une application. 
        Il est essentiel pour la création de SPA (<strong>Single Page Applications</strong>), où la navigation est gérée sans recharger la page.
    </p>

    <div class="highlight">
        <strong>Pourquoi utiliser Vue Router :</strong>
        <ul>
            <li><i class="fas fa-check-circle" style="color: green;"></i> Gestion dynamique des routes.</li>
            <li><i class="fas fa-check-circle" style="color: green;"></i> Possibilité de passer des paramètres aux routes.</li>
            <li><i class="fas fa-check-circle" style="color: green;"></i> Navigation avec historique du navigateur.</li>
            <li><i class="fas fa-check-circle" style="color: green;"></i> Gestion des routes protégées (authentification).</li>
        </ul>
    </div>

    <h2><i class="fas fa-download icon"></i> Installation et Configuration de Base</h2>
    <p>
        Pour commencer à utiliser Vue Router, vous devez l'installer et configurer les routes de votre application. Voici les étapes nécessaires.
    </p>

    <h3><i class="fas fa-terminal icon"></i> Étape 1 : Installation de Vue Router</h3>
    <div class="example-box">
        <pre>
<span class="comment">// Commande pour installer Vue Router</span>
<span class="keyword">npm</span> install vue-router
        </pre>
    </div>

    <h3><i class="fas fa-folder-open icon"></i> Étape 2 : Structure de Projet</h3>
    <p>Assurez-vous que votre projet a une structure similaire à celle-ci :</p>
    <div class="example-box">
        <pre>
<span class="comment">// Structure typique d'un projet Vue avec Vue Router</span>
<span class="folder">my-vue-project/</span>
├── <span class="folder">src/</span>
│   ├── <span class="folder">components/</span>
│   │   ├── <span class="file">Home.vue</span>
│   │   ├── <span class="file">About.vue</span>
│   ├── <span class="folder">router/</span>
│   │   ├── <span class="file">index.js</span>
│   ├── <span class="file">App.vue</span>
│   ├── <span class="file">main.js</span>
        </pre>
    </div>

    <h3><i class="fas fa-code icon"></i> Étape 3 : Configuration du Fichier Router</h3>
    <p>Créez un fichier nommé <code>index.js</code> dans le dossier <code>src/router</code> :</p>
    <div class="example-box">
        <pre>
<span class="comment">// src/router/index.js</span>
<span class="keyword">import</span> { createRouter, createWebHistory } <span class="keyword">from</span> <span class="string">'vue-router'</span>;

<span class="comment">// Importation des composants</span>
<span class="keyword">import</span> Home <span class="keyword">from</span> <span class="string">'../components/Home.vue'</span>;
<span class="keyword">import</span> About <span class="keyword">from</span> <span class="string">'../components/About.vue'</span>;

<span class="comment">// Définition des routes</span>
<span class="keyword">const</span> routes = [
    {
        path: <span class="string">'/'</span>,
        name: <span class="string">'Home'</span>,
        component: Home
    },
    {
        path: <span class="string">'/about'</span>,
        name: <span class="string">'About'</span>,
        component: About
    }
];

<span class="comment">// Création de l'instance du router</span>
<span class="keyword">const</span> router = createRouter({
    history: createWebHistory(),
    routes
});

<span class="keyword">export default</span> router;
        </pre>
    </div>

    <h3><i class="fas fa-plug icon"></i> Étape 4 : Intégration de Vue Router</h3>
    <p>Ajoutez l'instance de <code>router</code> à votre application dans le fichier <code>main.js</code> :</p>
    <div class="example-box">
        <pre>
<span class="comment">// src/main.js</span>
<span class="keyword">import</span> { createApp } <span class="keyword">from</span> <span class="string">'vue'</span>;
<span class="keyword">import</span> App <span class="keyword">from</span> <span class="string">'./App.vue'</span>;
<span class="keyword">import</span> router <span class="keyword">from</span> <span class="string">'./router'</span>; <span class="comment">// Importation du router</span>

<span class="comment">// Création de l'application avec le router</span>
createApp(App).use(router).mount(<span class="string">'#app'</span>);
        </pre>
    </div>

    <h3><i class="fas fa-home icon"></i> Étape 5 : Ajout de Liens de Navigation</h3>
    <p>Utilisez le composant <code>&lt;router-link&gt;</code> pour naviguer entre les pages :</p>
    <div class="example-box">
        <pre>
<span class="comment">// src/App.vue</span>
<span class="tag">&lt;template&gt;</span>
    <span class="tag">&lt;div&gt;</span>
        <span class="tag">&lt;nav&gt;</span>
            <span class="tag">&lt;router-link</span> <span class="property">to</span>=<span class="string">'/'</span>&gt;Accueil<span class="tag">&lt;/router-link&gt;</span>
            <span class="tag">&lt;router-link</span> <span class="property">to</span>=<span class="string">'/about'</span>&gt;À Propos<span class="tag">&lt;/router-link&gt;</span>
        <span class="tag">&lt;/nav&gt;</span>
        <span class="tag">&lt;router-view&gt;</span><span class="tag">&lt;/router-view&gt;</span> <span class="comment">// Rendu des pages</span>
    <span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/template&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-play-circle icon"></i> Résultat Final</h3>
    <p>Une fois configuré, vous pouvez naviguer entre les pages <strong>Home</strong> et <strong>About</strong> sans recharger la page.</p>

    <h2><i class="fas fa-thumbs-up icon"></i> Bonnes Pratiques</h2>
    <ul class="importance-list">
        <li>Utilisez des noms descriptifs pour vos routes (ex. : <code>name: 'Home'</code>).</li>
        <li>Organisez vos composants dans des dossiers clairs (<code>/components</code>, <code>/views</code>, etc.).</li>
        <li>Activez le mode <code>strict</code> pour éviter les erreurs liées à des routes mal définies.</li>
        <li>Privilégiez l'utilisation de <code>lazy loading</code> pour les composants afin d'améliorer les performances.</li>
        <li>Gérez les erreurs de navigation à l'aide de <code>beforeEach</code> et <code>onError</code>.</li>
    </ul>

    <h2><i class="fas fa-wrench icon"></i> Pratiques Courantes</h2>
    <ul>
        <li><i class="fas fa-arrow-right"></i> Ajouter des paramètres aux routes pour passer des données spécifiques.</li>
        <li><i class="fas fa-arrow-right"></i> Protéger certaines routes avec des middlewares (authentification).</li>
        <li><i class="fas fa-arrow-right"></i> Utiliser des routes imbriquées pour structurer des sections complexes d'une application.</li>
    </ul>
</div>
<div class="container" id="router-links">
    <h1><i class="fas fa-link icon"></i> Vue Router : Router Links</h1>
    <p>
        Le composant <code>&lt;router-link&gt;</code> est un élément clé de Vue Router. Il permet de créer des liens de navigation 
        entre les différentes pages ou vues de votre application, tout en bénéficiant des fonctionnalités de Vue Router comme 
        la navigation dynamique et les transitions.
    </p>

    <h2><i class="fas fa-folder-open icon"></i> Syntaxe de Base</h2>
    <p>
        Voici comment utiliser <code>&lt;router-link&gt;</code> pour créer un lien de navigation :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Exemple de base</span>
<span class="tag">&lt;router-link</span> <span class="property">to</span>=<span class="string">'/about'</span>&gt;À Propos<span class="tag">&lt;/router-link&gt;</span>
        </pre>
    </div>

    <h2><i class="fas fa-cogs icon"></i> Propriétés Importantes</h2>
    <p>Le composant <code>&lt;router-link&gt;</code> prend en charge plusieurs propriétés pour personnaliser son comportement :</p>
    <div class="table-responsive">
        <table class="table-style">
            <thead>
                <tr>
                    <th>Propriété</th>
                    <th>Description</th>
                    <th>Exemple</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>to</code></td>
                    <td>Spécifie l'URL ou le nom de la route vers laquelle naviguer.</td>
                    <td><code>&lt;router-link to="/about"&gt;</code></td>
                </tr>
                <tr>
                    <td><code>replace</code></td>
                    <td>
                        Si défini, remplace l'historique au lieu d'ajouter une nouvelle entrée.
                    </td>
                    <td><code>&lt;router-link :replace="true"&gt;</code></td>
                </tr>
                <tr>
                    <td><code>active-class</code></td>
                    <td>Classe CSS à appliquer si le lien correspond à la route active.</td>
                    <td><code>&lt;router-link active-class="actif"&gt;</code></td>
                </tr>
                <tr>
                    <td><code>exact</code></td>
                    <td>Correspond exactement à la route (sans correspondance partielle).</td>
                    <td><code>&lt;router-link :exact="true"&gt;</code></td>
                </tr>
            </tbody>
        </table>
    </div>
    <h2><i class="fas fa-code icon"></i> Utilisation avec Paramètres Dynamiques</h2>
    <p>Vous pouvez naviguer vers des routes avec des paramètres dynamiques :</p>
    <div class="example-box">
        <pre>
<span class="comment">// Définition des routes</span>
<span class="keyword">const</span> routes = [
    {
        path: <span class="string">'/user/:id'</span>,
        component: User
    }
];

<span class="comment">// Utilisation dans le template</span>
<span class="tag">&lt;router-link</span> <span class="property">:to</span>=<span class="string">'{ name: "user", params: { id: 123 } }'</span>&gt;
    Voir Utilisateur
<span class="tag">&lt;/router-link&gt;</span>
        </pre>
    </div>

    <h2><i class="fas fa-spinner icon"></i> Navigation Programmatique</h2>
    <p>
        En plus de <code>&lt;router-link&gt;</code>, Vue Router permet de naviguer de manière programmatique via <code>this.$router.push()</code>.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Exemple : Navigation programmatique</span>
<span class="keyword">methods</span>: {
    goToHome() {
        this.$router.push(<span class="string">'/'</span>);
    },
    goToUser(id) {
        this.$router.push({ name: <span class="string">'user'</span>, params: { id } });
    }
}
        </pre>
    </div>

    <h2><i class="fas fa-thumbs-up icon"></i> Bonnes Pratiques</h2>
    <ul class="importance-list">
        <li>Utilisez des <strong>nom de routes</strong> au lieu des chemins pour une maintenance facilitée.</li>
        <li>Ajoutez des classes personnalisées avec <code>active-class</code> pour styliser les liens actifs.</li>
        <li>Gérez les erreurs lors de la navigation avec des routes dynamiques.</li>
        <li>Utilisez <code>replace</code> pour éviter d'encombrer l'historique du navigateur dans certaines actions.</li>
    </ul>

    <h2><i class="fas fa-wrench icon"></i> Pratiques Courantes</h2>
    <ul>
        <li><i class="fas fa-arrow-right"></i> Utiliser <code>&lt;router-link&gt;</code> pour des menus de navigation.</li>
        <li><i class="fas fa-arrow-right"></i> Ajouter des transitions CSS entre les pages pour une meilleure expérience utilisateur.</li>
        <li><i class="fas fa-arrow-right"></i> Gérer les chemins relatifs en définissant explicitement <code>base</code> dans la configuration de Vue Router.</li>
    </ul>
</div>
<div class="container" id="route-params">
    <h1><i class="fas fa-route icon"></i> Vue Router : Route Params</h1>
    <p>
        Les **paramètres de route** dans Vue Router permettent de capturer des valeurs dynamiques à partir de l'URL. Ces valeurs rendent vos applications plus dynamiques, modulables et interconnectées. Par exemple, une URL comme <code>/user/123</code> peut être utilisée pour afficher les détails d'un utilisateur avec l'identifiant <code>123</code>.
    </p>
    <div class="highlight">
        <p>
            Les paramètres de route sont définis dans le chemin avec un préfixe <code>:</code>. Une fois configurés, ils deviennent accessibles à l'intérieur de vos composants via l'objet <code>$route.params</code>.
        </p>
    </div>

    <h2><i class="fas fa-code icon"></i> Définir des Routes Dynamiques</h2>
    <p>
        Une route dynamique est définie en utilisant un chemin contenant des paramètres préfixés par <code>:</code>. Voici quelques exemples typiques :
    </p>
    <div class="table-responsive">
        <table class="table-style">
            <thead>
                <tr>
                    <th>Chemin</th>
                    <th>Description</th>
                    <th>Exemple d'URL</th>
                    <th>Valeur des Paramètres</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>/user/:id</code></td>
                    <td>Route avec un paramètre unique.</td>
                    <td><code>/user/123</code></td>
                    <td><code>{ id: '123' }</code></td>
                </tr>
                <tr>
                    <td><code>/product/:category/:id</code></td>
                    <td>Route imbriquée pour une catégorie et un produit.</td>
                    <td><code>/product/electronics/42</code></td>
                    <td><code>{ category: 'electronics', id: '42' }</code></td>
                </tr>
                <tr>
                    <td><code>/blog/:slug</code></td>
                    <td>Route utilisant un identifiant de type "slug".</td>
                    <td><code>/blog/vue-router-intro</code></td>
                    <td><code>{ slug: 'vue-router-intro' }</code></td>
                </tr>
            </tbody>
        </table>
    </div>
    <h2><i class="fas fa-layer-group icon"></i> Routes Dynamiques Imbriquées</h2>
    <p>
        Les routes imbriquées sont idéales pour les structures hiérarchiques, comme des utilisateurs ayant plusieurs publications. Les paramètres peuvent être définis à plusieurs niveaux.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Configuration d'une route imbriquée</span>
<span class="keyword">const</span> routes = [
    {
        <span class="property">path</span>: <span class="string">'/user/:userId/post/:postId'</span>,
        <span class="property">component</span>: <span class="variable">PostDetails</span>
    }
];

<span class="comment">// Exemple d'URL</span>
<span class="comment">// /user/1/post/42 correspond à { userId: '1', postId: '42' }</span>
        </pre>
    </div>

    <h2><i class="fas fa-eye icon"></i> Accéder aux Paramètres de Route</h2>
    <p>
        Les paramètres de route sont disponibles dans l'objet <code>$route.params</code>. Utilisez-les directement dans vos composants pour adapter l'affichage.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Composant User.vue</span>
<span class="keyword">export default</span> {
    <span class="property">setup</span>() {
        <span class="keyword">const</span> userId = <span class="variable">$route.params.id</span>;

        <span class="keyword">return</span> { userId };
    },
    <span class="property">template</span>: <span class="string">`
        &lt;div&gt;
            &lt;p&gt;Utilisateur ID : {{ userId }}&lt;/p&gt;
        &lt;/div&gt;
    `</span>
};
        </pre>
    </div>

    <h2><i class="fas fa-cogs icon"></i> Paramètres Facultatifs</h2>
    <p>
        Les paramètres peuvent être rendus facultatifs en ajoutant un point d'interrogation <code>?</code> après leur nom.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Exemple de route avec paramètre facultatif</span>
<span class="keyword">const</span> routes = [
    {
        <span class="property">path</span>: <span class="string">'/user/:id?'</span>,
        <span class="property">component</span>: <span class="variable">User</span>
    }
];

<span class="comment">// /user/ correspond à { id: undefined }</span>
<span class="comment">// /user/123 correspond à { id: '123' }</span>
        </pre>
    </div>

    <h2><i class="fas fa-filter icon"></i> Valider et Transformer les Paramètres</h2>
    <p>
        Utilisez des hooks comme <code>beforeEnter</code> pour valider ou transformer les paramètres avant de charger le composant. Cela permet de gérer des cas comme une redirection en cas de données invalides.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Valider un paramètre avant de charger la route</span>
<span class="keyword">const</span> routes = [
    {
        <span class="property">path</span>: <span class="string">'/user/:id'</span>,
        <span class="property">component</span>: <span class="variable">User</span>,
        <span class="property">beforeEnter</span>: (<span class="keyword">to</span>, <span class="keyword">from</span>, <span class="keyword">next</span>) => {
            <span class="comment">// Vérifie si l'ID est numérique</span>
            <span class="keyword">if</span> (isNaN(+to.params.id)) {
                next(<span class="string">'/error'</span>);
            } <span class="keyword">else</span> {
                next();
            }
        }
    }
];
        </pre>
    </div>

    <h2><i class="fas fa-lightbulb icon"></i> Bonnes Pratiques</h2>
    <ul class="importance-list">
        <li>Validez toujours les paramètres de route pour éviter des comportements inattendus.</li>
        <li>Créez des noms de paramètres explicites pour améliorer la lisibilité de vos routes.</li>
        <li>Évitez de surcharger vos composants avec des responsabilités liées aux routes.</li>
        <li>Gérez les erreurs, comme des paramètres manquants ou invalides, en redirigeant vers une page d'erreur dédiée.</li>
    </ul>

    <h2><i class="fas fa-briefcase icon"></i> Pratiques Courantes</h2>
    <ul>
        <li>Afficher un profil utilisateur basé sur un identifiant unique.</li>
        <li>Créer des pages produits pour chaque catégorie et chaque produit individuel.</li>
        <li>Charger dynamiquement des données d'une API en fonction des paramètres de l'URL.</li>
        <li>Implémenter des fonctionnalités avancées comme des filtres basés sur les paramètres d'URL.</li>
    </ul>
</div>
<div class="container" id="route-guards">
    <h1><i class="fas fa-shield-alt icon"></i> Vue Router : Route Guards</h1>
    <p>
        Les **Route Guards** (gardiens de route) sont des fonctions intermédiaires qui s’exécutent avant qu’une route ne soit validée. Ils permettent de contrôler l'accès aux routes, comme vérifier si un utilisateur est authentifié ou si des données sont correctement chargées avant d’afficher une page.
    </p>
    <div class="highlight">
        <p>
            Vue Router fournit plusieurs types de gardiens de route :
        </p>
        <ul>
            <li><strong>Global</strong> : Gardiens s’appliquant à toutes les routes.</li>
            <li><strong>Par route</strong> : Spécifiques à une route donnée.</li>
            <li><strong>Dans le composant</strong> : Définis dans les composants Vue eux-mêmes.</li>
        </ul>
    </div>

    <h2><i class="fas fa-globe icon"></i> Gardiens de Route Globaux</h2>
    <p>
        Les gardiens globaux interceptent toutes les transitions de route dans votre application.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Exemple de guard global avant la navigation</span>
router.beforeEach((<span class="variable">to</span>, <span class="variable">from</span>, <span class="variable">next</span>) => {
    <span class="comment">// Vérifie si la route nécessite une authentification</span>
    <span class="keyword">if</span> (to.meta.requiresAuth && !<span class="variable">isAuthenticated</span>) {
        next(<span class="string">'/login'</span>); <span class="comment">// Redirige vers la page de connexion</span>
    } <span class="keyword">else</span> {
        next(); <span class="comment">// Continue vers la route</span>
    }
});
        </pre>
    </div>

    <h2><i class="fas fa-route icon"></i> Gardiens de Route au Niveau de la Route</h2>
    <p>
        Ces gardiens sont définis dans l'objet route, généralement pour valider ou transformer des paramètres avant de charger un composant.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Exemple de guard par route</span>
<span class="keyword">const</span> routes = [
    {
        <span class="property">path</span>: <span class="string">'/dashboard'</span>,
        <span class="property">component</span>: <span class="variable">Dashboard</span>,
        <span class="property">meta</span>: { requiresAuth: <span class="keyword">true</span> },
        <span class="property">beforeEnter</span>: (<span class="variable">to</span>, <span class="variable">from</span>, <span class="variable">next</span>) => {
            <span class="keyword">if</span> (!<span class="variable">isAuthenticated</span>) {
                next(<span class="string">'/login'</span>);
            } <span class="keyword">else</span> {
                next();
            }
        }
    }
];
        </pre>
    </div>

    <h2><i class="fas fa-cogs icon"></i> Gardiens de Route dans les Composants</h2>
    <p>
        Ces gardiens sont définis directement dans les composants Vue en utilisant les hooks <code>beforeRouteEnter</code>, <code>beforeRouteUpdate</code> et <code>beforeRouteLeave</code>.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Exemple dans un composant</span>
<span class="keyword">export default</span> {
    <span class="property">methods</span>: {
        <span class="function">fetchData</span>() {
            console.log(<span class="string">'Chargement des données'</span>);
        }
    },
    <span class="property">beforeRouteEnter</span>(<span class="variable">to</span>, <span class="variable">from</span>, <span class="variable">next</span>) {
        <span class="comment">// Charge les données avant d'entrer dans la route</span>
        next(<span class="keyword">async</span> (<span class="variable">vm</span>) => {
            await vm.fetchData();
        });
    },
    <span class="property">beforeRouteLeave</span>(<span class="variable">to</span>, <span class="variable">from</span>, <span class="variable">next</span>) {
        <span class="comment">// Avertit avant de quitter la route</span>
        <span class="keyword">if</span> (confirm(<span class="string">'Êtes-vous sûr de vouloir quitter cette page ?'</span>)) {
            next();
        } <span class="keyword">else</span> {
            next(<span class="keyword">false</span>);
        }
    }
};
        </pre>
    </div>

    <h2><i class="fas fa-lightbulb icon"></i> Bonnes Pratiques</h2>
    <ul class="importance-list">
        <li>Utilisez des <strong>meta</strong> propriétés pour ajouter des informations sur les routes (par exemple <code>requiresAuth</code>).</li>
        <li>Évitez de surcharger vos gardiens de route avec trop de logique.</li>
        <li>Préférez les gardiens globaux pour des règles générales, et les gardiens par route pour des validations spécifiques.</li>
        <li>Gérez les redirections de manière explicite pour améliorer l'expérience utilisateur.</li>
        <li>Testez vos gardiens avec des scénarios comme un utilisateur non authentifié ou des paramètres manquants.</li>
    </ul>

    <h2><i class="fas fa-briefcase icon"></i> Pratiques Courantes</h2>
    <ul>
        <li>Vérifier si un utilisateur est connecté avant d'accéder à des pages sensibles comme un tableau de bord.</li>
        <li>Charger des données nécessaires dans un composant avant qu'il ne soit rendu.</li>
        <li>Protéger des routes contre des utilisateurs non autorisés.</li>
        <li>Afficher des messages de confirmation avant de quitter une page contenant des modifications non enregistrées.</li>
    </ul>
</div>
<div class="container" id="nested-routes">
    <h1><i class="fas fa-sitemap icon"></i> Vue Router : Nested Routes (Routes Imbriquées)</h1>
    <p>
        Les **Nested Routes** (routes imbriquées) permettent de créer une hiérarchie entre les routes et leurs enfants. Elles sont particulièrement utiles pour organiser les pages ayant une structure parent-enfant, comme un tableau de bord avec des sous-sections ou un site avec des catégories et des sous-catégories.
    </p>
    <div class="highlight">
        <p>
            Les Nested Routes permettent :
        </p>
        <ul>
            <li>Une navigation hiérarchique intuitive.</li>
            <li>Un rendu de composants enfants dans des composants parents via les balises <code>&lt;router-view&gt;</code>.</li>
            <li>Une meilleure organisation des routes pour des applications complexes.</li>
        </ul>
    </div>

    <h2><i class="fas fa-cogs icon"></i> Configuration des Routes Imbriquées</h2>
    <p>
        Pour configurer des routes imbriquées, utilisez la propriété <code>children</code> dans les objets de définition des routes.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Configuration de routes imbriquées</span>
<span class="keyword">const</span> routes = [
    {
        <span class="property">path</span>: <span class="string">'/dashboard'</span>,
        <span class="property">component</span>: <span class="variable">Dashboard</span>,
        <span class="property">children</span>: [
            {
                <span class="property">path</span>: <span class="string">'overview'</span>,
                <span class="property">component</span>: <span class="variable">Overview</span>
            },
            {
                <span class="property">path</span>: <span class="string">'settings'</span>,
                <span class="property">component</span>: <span class="variable">Settings</span>
            }
        ]
    }
];
        </pre>
    </div>

    <h2><i class="fas fa-code icon"></i> Exemple de Routes Imbriquées</h2>
    <div class="example-box">
        <pre>
<span class="comment">// Exemple de composant parent</span>
<span class="keyword">export default</span> {
    <span class="property">template</span>: <span class="string">`
        &lt;div&gt;
            &lt;h1&gt;Tableau de Bord&lt;/h1&gt;
            &lt;router-view /&gt; <span class="comment">// Composant enfant sera rendu ici</span>
        &lt;/div&gt;
    `</span>
};
        </pre>
    </div>
    <div class="example-box">
        <pre>
<span class="comment">// Exemple de composant enfant</span>
<span class="keyword">export default</span> {
    <span class="property">template</span>: <span class="string">`
        &lt;div&gt;
            &lt;h2&gt;Aperçu&lt;/h2&gt;
            &lt;p&gt;Contenu de la section Aperçu&lt;/p&gt;
        &lt;/div&gt;
    `</span>
};
        </pre>
    </div>

    <h2><i class="fas fa-folder-open icon"></i> Navigation avec des Routes Imbriquées</h2>
    <p>
        Pour naviguer entre les routes enfants, utilisez les balises <code>&lt;router-link&gt;</code> avec des chemins relatifs.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Exemple HTML pour naviguer entre les routes imbriquées</span>
<span class="tag">&lt;div&gt;</span>
    <span class="tag">&lt;h1&gt;</span>Tableau de Bord<span class="tag">&lt;/h1&gt;</span>
    <span class="tag">&lt;nav&gt;</span>
        <span class="tag">&lt;router-link</span> to=<span class="string">'overview'</span>&gt;Aperçu<span class="tag">&lt;/router-link&gt;</span>
        <span class="tag">&lt;router-link</span> to=<span class="string">'settings'</span>&gt;Paramètres<span class="tag">&lt;/router-link&gt;</span>
    <span class="tag">&lt;/nav&gt;</span>
    <span class="tag">&lt;router-view&gt;&lt;/router-view&gt;</span>
<span class="tag">&lt;/div&gt;</span>
        </pre>
    </div>

    <h2><i class="fas fa-lightbulb icon"></i> Bonnes Pratiques</h2>
    <ul class="importance-list">
        <li>Organisez vos routes imbriquées pour refléter la structure de navigation de votre application.</li>
        <li>Utilisez des noms clairs et descriptifs pour vos composants parent et enfant.</li>
        <li>Évitez les chemins absolus dans les routes enfants, préférez les chemins relatifs.</li>
        <li>Gardez vos composants parent aussi légers que possible. Placez la logique spécifique dans les composants enfants.</li>
    </ul>

    <h2><i class="fas fa-briefcase icon"></i> Pratiques Courantes</h2>
    <ul>
        <li>Créer des tableaux de bord avec plusieurs sous-sections (aperçu, paramètres, rapports, etc.).</li>
        <li>Afficher des catégories et des sous-catégories dans une boutique en ligne.</li>
        <li>Gérer des workflows complexes comme des formulaires multi-étapes.</li>
        <li>Imbriquer des routes pour les forums ou blogs avec des pages pour les sujets et leurs commentaires.</li>
    </ul>

    <h2><i class="fas fa-check-circle icon"></i> Avantages des Routes Imbriquées</h2>
    <div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>Avantage</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Organisation</td>
                <td>Structure les routes de manière hiérarchique, facilitant la maintenance.</td>
            </tr>
            <tr>
                <td>Rendu Dynamique</td>
                <td>Permet de rendre des composants enfants dynamiquement à l'intérieur des parents.</td>
            </tr>
            <tr>
                <td>Clarté</td>
                <td>Améliore la clarté de la navigation pour les utilisateurs finaux.</td>
            </tr>
            <tr>
                <td>Flexibilité</td>
                <td>S'adapte aux applications avec des interfaces complexes.</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
<div class="sommaire-container" id="vuex-sommaire">
    <h2>Sommaire Vuex</h2>
    <ul>
        <li><a href="#vuex-intro">Introduction à Vuex</a></li>
        <li><a href="#state">State</a></li>
        <li><a href="#getters">Getters</a></li>
        <li><a href="#mutations">Mutations</a></li>
        <li><a href="#actions">Actions</a></li>
        <li><a href="#modules">Modules</a></li>
    </ul>
</div>
<div class="container" id="vuex-intro">
    <h1><i class="fas fa-cogs icon"></i> Introduction à Vuex</h1>
    <p>
        <strong>Vuex</strong> est une bibliothèque de gestion d'état spécialement conçue pour Vue.js. Elle suit un modèle centralisé, ce qui signifie que toutes les données partagées sont stockées dans un **store unique**. Ce modèle facilite la synchronisation des données entre les composants de l'application, surtout lorsque celle-ci devient complexe.
    </p>
    <div class="highlight">
        <p>
            Pourquoi utiliser Vuex ?
        </p>
        <ul>
            <li><i class="fas fa-check-circle" style="color: green;"></i> <strong>Centralisation :</strong> Toutes les données partagées sont gérées dans un seul endroit.</li>
            <li><i class="fas fa-check-circle" style="color: green;"></i> <strong>Prévisibilité :</strong> L'état ne peut être modifié que par des mutations explicites, ce qui rend les changements traçables.</li>
            <li><i class="fas fa-check-circle" style="color: green;"></i> <strong>Réactivité :</strong> Les composants sont automatiquement mis à jour lorsque l'état change.</li>
            <li><i class="fas fa-check-circle" style="color: green;"></i> <strong>Outillage :</strong> Vuex offre une intégration avec Vue Devtools pour déboguer et suivre les changements de l'état.</li>
        </ul>
    </div>
    <div class="importance-section">
        <h3><i class="fas fa-lightbulb"></i> Concepts Clés :</h3>
        <ul class="importance-list">
            <li><strong>State :</strong> Représente les données partagées de l'application.</li>
            <li><strong>Mutations :</strong> Permettent de modifier l'état de manière prévisible.</li>
            <li><strong>Actions :</strong> Gèrent les opérations asynchrones avant de modifier l'état.</li>
            <li><strong>Getters :</strong> Calculent et exposent des dérivés de l'état.</li>
            <li><strong>Modules :</strong> Structurent le store pour les grandes applications.</li>
        </ul>
    </div>
</div>
<div class="container" id="vuex-intro">
    <h1><i class="fas fa-cogs icon"></i> Introduction à Vuex</h1>
    <p>
        **Vuex** est une bibliothèque officielle pour la gestion de l'état dans les applications Vue.js. Elle repose sur un modèle centralisé qui permet de gérer l'état global de l'application de manière prévisible et efficace. Vuex est particulièrement utile pour les applications de grande taille ou celles nécessitant un partage de données entre plusieurs composants.
    </p>
    <div class="highlight">
        <p>
            Vuex repose sur les concepts suivants :
        </p>
        <ul>
            <li><strong>État (State) :</strong> Représente les données partagées entre les composants.</li>
            <li><strong>Getters :</strong> Permettent de lire et transformer l'état sans le modifier directement.</li>
            <li><strong>Mutations :</strong> Méthodes synchrones pour modifier l'état.</li>
            <li><strong>Actions :</strong> Permettent d'effectuer des opérations asynchrones avant d'appeler une mutation.</li>
            <li><strong>Modules :</strong> Divisent l'état et la logique en sections distinctes pour une meilleure organisation.</li>
        </ul>
    </div>

    <h2><i class="fas fa-network-wired icon"></i> Pourquoi utiliser Vuex ?</h2>
    <ul class="importance-list">
        <li>Facilite la gestion de l'état dans des applications complexes.</li>
        <li>Offre un modèle clair pour gérer les données et leurs mutations.</li>
        <li>Permet de partager des données entre plusieurs composants sans avoir à passer par des props ou des événements.</li>
        <li>Favorise une approche déclarative et prévisible pour la gestion de l'état.</li>
    </ul>

    <h2><i class="fas fa-tools icon"></i> Installation de Vuex</h2>
    <p>
        Installez Vuex dans votre projet à l'aide de npm ou yarn.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Installation via npm</span>
<span class="keyword">npm</span> <span class="operator">install</span> vuex@next

<span class="comment">// Installation via yarn</span>
<span class="keyword">yarn</span> <span class="operator">add</span> vuex@next
        </pre>
    </div>

    <h2><i class="fas fa-code icon"></i> Configuration de Vuex</h2>
    <p>
        Après l'installation, configurez Vuex dans votre application en créant un store et en l'ajoutant à l'instance Vue.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Importation de Vue et Vuex</span>
import { createApp } from <span class="string">'vue'</span>;
import { createStore } from <span class="string">'vuex'</span>;
import App from <span class="string">'./App.vue'</span>;

<span class="comment">// Création du store Vuex</span>
<span class="keyword">const</span> store = createStore({
    <span class="property">state</span>: {
        compteur: <span class="number">0</span>
    },
    <span class="property">mutations</span>: {
        incrementer(state) {
            state.compteur++;
        }
    },
    <span class="property">actions</span>: {
        incrementerContexte({ commit }) {
            commit(<span class="string">'incrementer'</span>);
        }
    },
    <span class="property">getters</span>: {
        compteurDouble(state) {
            <span class="keyword">return</span> state.compteur * <span class="number">2</span>;
        }
    }
});

<span class="comment">// Création de l'application Vue</span>
<span class="keyword">const</span> app = createApp(App);

<span class="comment">// Ajout du store à l'application</span>
app.use(store);

app.mount(<span class="string">'#app'</span>);
        </pre>
    </div>

    <h2><i class="fas fa-sitemap icon"></i> Structure du Store Vuex</h2>
    <div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>Concept</th>
                <th>Description</th>
                <th>Exemple</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>State</td>
                <td>Représente les données centralisées de l'application.</td>
                <td><code>state: { compteur: 0 }</code></td>
            </tr>
            <tr>
                <td>Mutations</td>
                <td>Permettent de modifier l'état de manière synchrone.</td>
                <td><code>mutations: { incrementer(state) { state.compteur++ } }</code></td>
            </tr>
            <tr>
                <td>Actions</td>
                <td>Permettent d'effectuer des opérations asynchrones.</td>
                <td><code>actions: { incrementerContexte({ commit }) { commit('incrementer') } }</code></td>
            </tr>
            <tr>
                <td>Getters</td>
                <td>Permettent de lire et transformer l'état.</td>
                <td><code>getters: { compteurDouble(state) { return state.compteur * 2 } }</code></td>
            </tr>
        </tbody>
    </table>
</div>
    <h2><i class="fas fa-lightbulb icon"></i> Bonnes Pratiques</h2>
    <ul class="importance-list">
        <li>Ne modifiez jamais directement l'état. Utilisez toujours les mutations.</li>
        <li>Divisez le store en modules si l'application devient complexe.</li>
        <li>Gardez vos actions simples et évitez de surcharger la logique dans les composants.</li>
        <li>Utilisez les getters pour toute transformation ou calcul basé sur l'état.</li>
    </ul>

    <h2><i class="fas fa-briefcase icon"></i> Pratiques Courantes</h2>
    <ul>
        <li>Gérer l'authentification d'un utilisateur avec un état global.</li>
        <li>Suivre les préférences utilisateur (thème, langue, etc.).</li>
        <li>Centraliser les données d'un panier d'achat dans une boutique en ligne.</li>
        <li>Partager les données entre des composants éloignés dans la hiérarchie.</li>
    </ul>
</div>
<div class="container" id="state">
    <h1><i class="fas fa-database icon"></i> State dans Vuex</h1>
    <p>
        Le <strong>state</strong> dans Vuex est une structure globale permettant de centraliser les données pour les partager facilement entre plusieurs composants. Cela simplifie la gestion des états complexes dans les applications Vue.js.
    </p>

    <h2><i class="fas fa-code icon"></i> Qu'est-ce que le State ?</h2>
    <div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>Concept</th>
                <th>Description</th>
                <th>Exemple</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>State Global</strong></td>
                <td>
                    Données centralisées accessibles depuis tous les composants.
                </td>
                <td><code>$store.state</code></td>
            </tr>
            <tr>
                <td><strong>Immutable Directement</strong></td>
                <td>
                    Le state ne doit pas être modifié directement. Utilisez des mutations.
                </td>
                <td><code>$store.commit('mutation')</code></td>
            </tr>
            <tr>
                <td><strong>Partage de Données</strong></td>
                <td>
                    Idéal pour partager des données entre des composants distants.
                </td>
                <td>Utilisateur, panier, configuration</td>
            </tr>
        </tbody>
    </table>
</div>
    <h2><i class="fas fa-hand-point-right icon"></i> Création d'un State</h2>
    <p>
        Le **state** est défini comme une propriété dans le store Vuex. Voici un exemple de définition :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Création d'un store Vuex</span>
<span class="keyword">import</span> { createStore } <span class="keyword">from</span> <span class="string">'vuex'</span>;

<span class="keyword">const</span> store = createStore({
    <span class="keyword">state</span>: {
        compteur: <span class="number">0</span>,
        utilisateur: {
            nom: <span class="string">'Alice'</span>,
            email: <span class="string">'alice@example.com'</span>
        }
    }
});

<span class="keyword">export</span> <span class="keyword">default</span> store;
        </pre>
    </div>

    <h2><i class="fas fa-search icon"></i> Accès aux Données</h2>
    <p>
        Pour accéder aux données dans le state, utilisez <code>this.$store.state</code> depuis vos composants Vue. Voici un exemple simple :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;template&gt;</span>
    <span class="tag">&lt;div&gt;</span>
        <span class="tag">&lt;p&gt;</span>Compteur : {{ $store.state.compteur }}<span class="tag">&lt;/p&gt;</span>
        <span class="tag">&lt;p&gt;</span>Nom : {{ $store.state.utilisateur.nom }}<span class="tag">&lt;/p&gt;</span>
    <span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/template&gt;</span>
        </pre>
    </div>

    <h2><i class="fas fa-pencil-alt icon"></i> Modifier le State</h2>
    <p>
        Pour modifier les données, utilisez des **mutations**. Cela permet de suivre toutes les modifications dans le store pour un meilleur débogage.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Définir une mutation</span>
<span class="keyword">const</span> store = createStore({
    <span class="keyword">state</span>: {
        compteur: <span class="number">0</span>
    },
    <span class="keyword">mutations</span>: {
        incrementer(state) {
            state.compteur++;
        }
    }
});
        </pre>
    </div>

    <p>
        Exemple d'utilisation dans un composant :
    </p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;template&gt;</span>
    <span class="tag">&lt;div&gt;</span>
        <span class="tag">&lt;p&gt;</span>Compteur : {{ $store.state.compteur }}<span class="tag">&lt;/p&gt;</span>
        <span class="tag">&lt;button</span> @click=<span class="string">'$store.commit("incrementer")'</span>&gt;Incrémenter<span class="tag">&lt;/button&gt;</span>
    <span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/template&gt;</span>
        </pre>
    </div>

    <h2><i class="fas fa-tasks icon"></i> Techniques Avancées</h2>
    <p>
        Voici quelques techniques pour travailler efficacement avec le state dans Vuex :
    </p>
    <div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>Technique</th>
                <th>Explication</th>
                <th>Exemple</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Mutations et Actions</strong></td>
                <td>
                    Utilisez des actions pour les opérations asynchrones et des mutations pour modifier les données.
                </td>
                <td><code>this.$store.dispatch('actionName')</code></td>
            </tr>
            <tr>
                <td><strong>Modules Vuex</strong></td>
                <td>
                    Divisez le state en modules pour les grandes applications.
                </td>
                <td><code>store.moduleName.state</code></td>
            </tr>
            <tr>
                <td><strong>Persist State</strong></td>
                <td>
                    Utilisez des plugins pour sauvegarder le state dans le localStorage.
                </td>
                <td><code>vuex-persist</code></td>
            </tr>
        </tbody>
    </table>
</div>
    <h3><i class="fas fa-lightbulb icon"></i> Cas Pratique : Gestion d'un Panier d'Achat</h3>
    <div class="example-box">
        <pre>
<span class="comment">// Définir un store avec gestion de panier</span>
<span class="keyword">const</span> store = createStore({
    <span class="keyword">state</span>: {
        panier: []
    },
    <span class="keyword">mutations</span>: {
        ajouterArticle(state, article) {
            state.panier.push(article);
        },
        supprimerArticle(state, index) {
            state.panier.splice(index, <span class="number">1</span>);
        }
    }
});
        </pre>
    </div>
    <p>Dans un composant Vue :</p>
    <div class="example-box">
        <pre>
<span class="tag">&lt;template&gt;</span>
    <span class="tag">&lt;div&gt;</span>
        <span class="tag">&lt;ul&gt;</span>
            <span class="tag">&lt;li</span> v-for=<span class="string">'(article, index) in $store.state.panier'</span> :key=<span class="string">'index'</span>&gt;
                {{ article.nom }} - {{ article.prix }} €
                <span class="tag">&lt;button</span> @click=<span class="string">'$store.commit("supprimerArticle", index)'</span>&gt;Supprimer<span class="tag">&lt;/button&gt;</span>
            <span class="tag">&lt;/li&gt;</span>
        <span class="tag">&lt;/ul&gt;</span>
    <span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/template&gt;</span>
        </pre>
    </div>

    <h2><i class="fas fa-star icon"></i> Bonnes Pratiques</h2>
    <ul>
        <li>Évitez de manipuler directement le state depuis les composants.</li>
        <li>Utilisez les **mutations** pour suivre les modifications.</li>
        <li>Modularisez votre store avec des modules pour simplifier la maintenance.</li>
        <li>Privilégiez les actions pour les tâches complexes ou asynchrones.</li>
    </ul>
</div>
<div class="container" id="getters">
    <h1><i class="fas fa-filter icon"></i> Vuex : Getters</h1>

    <h2><i class="fas fa-info-circle icon"></i> Théorie et Introduction</h2>
    <p>
        Dans Vuex, les <strong>getters</strong> jouent un rôle essentiel en tant que fonctions dérivées. 
        Ils permettent de transformer, filtrer ou accéder facilement aux données présentes dans le 
        <code>state</code>. Ils ressemblent aux propriétés calculées (<code>computed</code>) dans les composants Vue et sont utilisés pour encapsuler la logique qui manipule les données.
    </p>
    <p>
        Utiliser des getters présente plusieurs avantages :
    </p>
    <ul>
        <li>Centraliser les opérations répétitives dans le store.</li>
        <li>Garder les composants simples en déléguant la logique complexe au store.</li>
        <li>Optimiser les performances grâce au système de cache des getters.</li>
    </ul>
    <div class="highlight">
        <strong>À retenir :</strong>
        Les getters sont particulièrement utiles pour manipuler les données sous une forme transformée ou dérivée, comme :
        <ul>
            <li>Filtrer des listes selon des critères spécifiques.</li>
            <li>Calculer des totaux ou des statistiques.</li>
            <li>Créer des vues spécifiques sur le <code>state</code> sans le modifier.</li>
        </ul>
    </div>

    <h2><i class="fas fa-cogs icon"></i> Fonctionnement et Création</h2>
    <p>
        Les getters sont définis dans la section <code>getters</code> du store Vuex. Voici un aperçu de leur fonctionnement :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Exemple basique de store avec getters</span>
<span class="keyword">const</span> store = createStore({
    <span class="keyword">state</span>: {
        produits: [
            { nom: <span class="string">'Produit A'</span>, prix: <span class="number">100</span>, actif: <span class="keyword">true</span> },
            { nom: <span class="string">'Produit B'</span>, prix: <span class="number">200</span>, actif: <span class="keyword">false</span> }
        ]
    },
    <span class="keyword">getters</span>: {
        produitsActifs(state) {
            <span class="keyword">return</span> state.produits.filter(produit => produit.actif);
        },
        totalPrix(state) {
            <span class="keyword">return</span> state.produits.reduce((total, produit) => total + produit.prix, <span class="number">0</span>);
        }
    }
});

<span class="comment">// Accéder aux getters</span>
store.getters.produitsActifs; <span class="comment">// Liste des produits actifs</span>
store.getters.totalPrix; <span class="comment">// Total des prix</span>
        </pre>
    </div>

    <h2><i class="fas fa-arrow-circle-right icon"></i> Avantages des Getters</h2>
    <div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>Avantage</th>
                <th>Description</th>
                <th>Exemple</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Réutilisabilité</strong></td>
                <td>Permet de réutiliser une logique complexe dans différents composants.</td>
                <td>
                    <code>store.getters.produitsActifs</code>
                </td>
            </tr>
            <tr>
                <td><strong>Mémoire Cache</strong></td>
                <td>Optimisé pour éviter des calculs inutiles tant que les dépendances restent identiques.</td>
                <td>
                    <code>computed()</code> similaire.
                </td>
            </tr>
            <tr>
                <td><strong>Lisibilité</strong></td>
                <td>Centralise la logique dans le store, rendant le code plus lisible et maintenable.</td>
                <td>Encapsulation de filtres et transformations.</td>
            </tr>
        </tbody>
    </table>
</div>
    <h2><i class="fas fa-tools icon"></i> Utilisation Avancée</h2>
    <p>
        Les getters peuvent également retourner des fonctions pour permettre l’utilisation de paramètres. Cela les rend extrêmement flexibles pour des cas complexes.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Exemple : Getter avec paramètres</span>
<span class="keyword">const</span> store = createStore({
    <span class="keyword">state</span>: {
        produits: [
            { nom: <span class="string">'Produit A'</span>, prix: <span class="number">100</span> },
            { nom: <span class="string">'Produit B'</span>, prix: <span class="number">200</span> }
        ]
    },
    <span class="keyword">getters</span>: {
        produitsAuDessusDe(state) {
            <span class="keyword">return</span> (prixMinimum) => {
                <span class="keyword">return</span> state.produits.filter(produit => produit.prix >= prixMinimum);
            };
        }
    }
});

<span class="comment">// Appel du getter avec un paramètre</span>
store.getters.produitsAuDessusDe(<span class="number">150</span>); <span class="comment">// Retourne Produit B</span>
        </pre>
    </div>

    <h2><i class="fas fa-lightbulb icon"></i> Bonnes Pratiques</h2>
    <ul>
        <li>Utilisez des noms explicites pour vos getters afin de décrire leur intention.</li>
        <li>Centralisez toute logique complexe ou récurrente dans un getter plutôt que dans un composant.</li>
        <li>Évitez de modifier directement le <code>state</code> dans un getter.</li>
        <li>Testez vos getters séparément pour garantir leur bon fonctionnement.</li>
    </ul>

    <h2><i class="fas fa-clipboard-list icon"></i> Techniques Pratiques Courantes</h2>
    <p>Voici des exemples d'utilisations fréquentes des getters :</p>
    <div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>Technique</th>
                <th>Description</th>
                <th>Exemple</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Calcul des Totaux</strong></td>
                <td>
                    Utilisez des getters pour calculer des totaux comme le prix total d'un panier.
                </td>
                <td>
                    <code>getters.totalPrix</code>
                </td>
            </tr>
            <tr>
                <td><strong>Filtrage Dynamique</strong></td>
                <td>
                    Retournez une fonction pour filtrer selon des critères dynamiques.
                </td>
                <td>
                    <code>getters.produitsAuDessusDe</code>
                </td>
            </tr>
            <tr>
                <td><strong>Combinaisons de Getters</strong></td>
                <td>
                    Combinez plusieurs getters pour des transformations complexes.
                </td>
                <td>
                    <code>getters.filtrésEtTriés</code>
                </td>
            </tr>
        </tbody>
    </table>
</div>
    <h2><i class="fas fa-check-circle icon"></i> Exemple Complet</h2>
    <p>Voici un exemple combinant plusieurs concepts :</p>
    <div class="example-box">
        <pre>
<span class="comment">// Exemple : Filtrage et calcul de totaux</span>
<span class="keyword">const</span> store = createStore({
    <span class="keyword">state</span>: {
        produits: [
            { nom: <span class="string">'Produit A'</span>, prix: <span class="number">100</span>, categorie: <span class="string">'Electronics'</span> },
            { nom: <span class="string">'Produit B'</span>, prix: <span class="number">200</span>, categorie: <span class="string">'Furniture'</span> }
        ]
    },
    <span class="keyword">getters</span>: {
        produitsParCategorie(state) {
            <span class="keyword">return</span> (categorie) => {
                <span class="keyword">return</span> state.produits.filter(produit => produit.categorie === categorie);
            };
        },
        totalParCategorie(state, getters) {
            <span class="keyword">return</span> (categorie) => {
                <span class="keyword">return</span> getters.produitsParCategorie(categorie)
                    .reduce((total, produit) => total + produit.prix, <span class="number">0</span>);
            };
        }
    }
});

<span class="comment">// Utilisation</span>
store.getters.totalParCategorie(<span class="string">'Electronics'</span>); <span class="comment">// Retourne 100</span>
        </pre>
    </div>
</div>
<h1 id="vuex-mutations"><i class="fas fa-tools icon"></i> Vuex : Mutations</h1>

<h2><i class="fas fa-info-circle icon"></i> Théorie et Introduction</h2>
<p>
    Les <strong>mutations</strong> dans Vuex sont le seul moyen officiel de modifier le <code>state</code> de manière synchrone. 
    Elles assurent une traçabilité et une prévisibilité des changements en centralisant toutes les modifications du <code>state</code>.
</p>
<p>
    Les mutations fonctionnent comme des méthodes que vous définissez dans le store et que vous appelez 
    via <code>commit</code>. Chaque mutation reçoit en premier argument le <code>state</code> actuel du store.
</p>

<div class="highlight">
    <strong>Pourquoi utiliser des mutations ?</strong>
    <ul>
        <li><i class="fas fa-check-circle" style="color: green;"></i> Garantir une gestion claire et centralisée des changements d'état.</li>
        <li><i class="fas fa-check-circle" style="color: green;"></i> Faciliter le débogage grâce aux outils comme Vue DevTools.</li>
        <li><i class="fas fa-check-circle" style="color: green;"></i> Éviter les modifications imprévues du <code>state</code>.</li>
    </ul>
</div>

<h2><i class="fas fa-terminal icon"></i> Syntaxe et Définition</h2>
<p>Une mutation est définie dans la section <code>mutations</code> du store Vuex :</p>

<div class="example-box">
    <pre>
<span class="comment">// Définition des mutations dans le store</span>
<span class="keyword">const</span> store = <span class="keyword">new</span> Vuex.Store({
    <span class="keyword">state</span>: {
        compteur: <span class="number">0</span>
    },
    <span class="keyword">mutations</span>: {
        incrementer(state) {
            state.compteur++;
        },
        decrementer(state) {
            state.compteur--;
        },
        reset(state, <span class="variable">valeurInitiale</span>) {
            state.compteur = valeurInitiale;
        }
    }
});
    </pre>
</div>

<p>Pour appeler une mutation, utilisez <code>store.commit</code> :</p>
<div class="example-box">
    <pre>
<span class="comment">// Appel de mutations</span>
store.commit(<span class="string">'incrementer'</span>);
store.commit(<span class="string">'decrementer'</span>);
store.commit(<span class="string">'reset'</span>, <span class="number">10</span>);
    </pre>
</div>

<h2><i class="fas fa-cogs icon"></i> Exemples Pratiques</h2>

<h3><i class="fas fa-plus-circle"></i> Exemple 1 : Compteur avec Vuex</h3>
<div class="example-box">
    <pre>
<span class="comment">// Définition du store</span>
<span class="keyword">const</span> store = <span class="keyword">new</span> Vuex.Store({
    <span class="keyword">state</span>: {
        compteur: <span class="number">0</span>
    },
    <span class="keyword">mutations</span>: {
        incrementer(state) {
            state.compteur++;
        }
    }
});

<span class="comment">// Utilisation dans un composant Vue</span>
<span class="keyword">const</span> app = Vue.createApp({
    <span class="keyword">methods</span>: {
        incrementer() {
            this.$store.commit(<span class="string">'incrementer'</span>);
        }
    },
    computed: {
        compteur() {
            <span class="keyword">return</span> this.$store.state.compteur;
        }
    },
    <span class="tag">template</span>: <span class="string">`
        &lt;div&gt;
            &lt;p&gt;Compteur : {{ compteur }}&lt;/p&gt;
            &lt;button @click="incrementer"&gt;Incrémenter&lt;/button&gt;
        &lt;/div&gt;
    `</span>
});
app.use(store).mount(<span class="string">'#app'</span>);
    </pre>
</div>

<h3><i class="fas fa-shopping-cart"></i> Exemple 2 : Ajout d'éléments à une liste</h3>
<div class="example-box">
    <pre>
<span class="comment">// Définition d'une mutation pour ajouter des produits</span>
<span class="keyword">const</span> store = <span class="keyword">new</span> Vuex.Store({
    <span class="keyword">state</span>: {
        panier: []
    },
    <span class="keyword">mutations</span>: {
        ajouterProduit(state, produit) {
            state.panier.push(produit);
        }
    }
});

<span class="comment">// Exemple d'utilisation</span>
store.commit(<span class="string">'ajouterProduit'</span>, { nom: <span class="string">'Produit A'</span>, prix: <span class="number">20</span> });
store.commit(<span class="string">'ajouterProduit'</span>, { nom: <span class="string">'Produit B'</span>, prix: <span class="number">30</span> });

console.log(store.state.panier); <span class="comment">// Affiche les produits ajoutés</span>
    </pre>
</div>

<h2><i class="fas fa-check-double"></i> Bonnes Pratiques</h2>
<ul>
    <li><i class="fas fa-check-circle" style="color: green;"></i> Ne modifiez jamais directement le <code>state</code> en dehors des mutations ; utilisez toujours <code>commit</code>.</li>
    <li><i class="fas fa-check-circle" style="color: green;"></i> Gardez les mutations simples et directes. Ne placez pas de logique asynchrone (utilisez <code>actions</code> pour cela).</li>
    <li><i class="fas fa-check-circle" style="color: green;"></i> Utilisez des noms clairs pour vos mutations afin de faciliter la lisibilité et la maintenance du code.</li>
</ul>

<h2><i class="fas fa-tasks icon"></i> Cas d'Utilisation Courants</h2>
<div class="table-responsive">
<table class="table-style">
    <thead>
        <tr>
            <th>Cas</th>
            <th>Exemple</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Mise à jour d'un compteur</td>
            <td><code>incrementer(state)</code></td>
            <td>Ajoute ou soustrait une valeur du compteur.</td>
        </tr>
        <tr>
            <td>Ajout à une liste</td>
            <td><code>ajouterProduit(state, produit)</code></td>
            <td>Ajoute un élément à une liste (ex. : panier d'achat).</td>
        </tr>
        <tr>
            <td>Réinitialisation</td>
            <td><code>reset(state)</code></td>
            <td>Réinitialise une valeur ou une structure.</td>
        </tr>
    </tbody>
</table>
</div>
<p>En suivant ces bonnes pratiques, vous maintenez votre store Vuex clair, performant et facile à déboguer.</p>
<h1 id="vuex-actions"><i class="fas fa-sync-alt icon"></i> Vuex : Actions</h1>

<h2><i class="fas fa-info-circle icon"></i> Théorie et Introduction</h2>
<p>
    Les <strong>actions</strong> dans Vuex sont utilisées pour effectuer des tâches asynchrones, comme récupérer des données depuis une API ou traiter une logique complexe avant de mettre à jour le <code>state</code>. Contrairement aux mutations, les actions ne modifient pas directement le <code>state</code> ; elles invoquent des mutations via <code>commit</code>.
</p>
<p>
    En plus de permettre des opérations asynchrones, les actions offrent une structure claire pour séparer la logique métier des composants Vue.
</p>

<div class="highlight">
    <strong>À retenir :</strong>
    <ul>
        <li><i class="fas fa-check-circle" style="color: green;"></i> Utilisez <code>dispatch</code> pour invoquer des actions, et non <code>commit</code>.</li>
        <li><i class="fas fa-check-circle" style="color: green;"></i> Une action peut appeler plusieurs mutations.</li>
        <li><i class="fas fa-check-circle" style="color: green;"></i> Les actions peuvent être chaînées grâce aux promesses retournées.</li>
    </ul>
</div>

<h2><i class="fas fa-terminal icon"></i> Syntaxe et Définition</h2>
<p>
    Les actions sont définies dans la section <code>actions</code> du store et prennent un objet <code>context</code> comme premier paramètre, qui inclut des propriétés comme <code>commit</code> et <code>state</code>.
</p>

<div class="example-box">
    <pre>
<span class="comment">// Définition d'actions</span>
<span class="keyword">const</span> store = <span class="keyword">new</span> Vuex.Store({
    <span class="keyword">state</span>: {
        compteur: <span class="number">0</span>
    },
    <span class="keyword">mutations</span>: {
        incrementer(state, valeur) {
            state.compteur += valeur;
        }
    },
    <span class="keyword">actions</span>: {
        asyncIncrementer(context, valeur) {
            <span class="keyword">setTimeout</span>(() => {
                context.commit(<span class="string">'incrementer'</span>, valeur);
            }, <span class="number">1000</span>);
        }
    }
});
    </pre>
</div>

<h2><i class="fas fa-cogs icon"></i> Exemples Pratiques</h2>

<h3><i class="fas fa-clock"></i> Exemple 1 : Incrémentation Asynchrone</h3>
<div class="example-box">
    <pre>
<span class="comment">// Appel d'une action</span>
store.dispatch(<span class="string">'asyncIncrementer'</span>, <span class="number">5</span>);

<span class="comment">// Résultat après 1 seconde</span>
console.log(store.state.compteur); <span class="comment">// Affiche 5</span>
    </pre>
</div>

<h3><i class="fas fa-database"></i> Exemple 2 : Chargement de Données depuis une API</h3>
<div class="example-box">
    <pre>
<span class="comment">// Définition de l'action</span>
<span class="keyword">const</span> store = <span class="keyword">new</span> Vuex.Store({
    <span class="keyword">state</span>: {
        utilisateurs: []
    },
    <span class="keyword">mutations</span>: {
        setUtilisateurs(state, utilisateurs) {
            state.utilisateurs = utilisateurs;
        }
    },
    <span class="keyword">actions</span>: {
        async chargerUtilisateurs({ commit }) {
            <span class="keyword">try</span> {
                <span class="keyword">const</span> response = <span class="keyword">await</span> fetch(<span class="string">'https://api.example.com/utilisateurs'</span>);
                <span class="keyword">const</span> data = <span class="keyword">await</span> response.json();
                commit(<span class="string">'setUtilisateurs'</span>, data);
            } <span class="keyword">catch</span> (erreur) {
                console.error(<span class="string">'Erreur lors du chargement des utilisateurs :'</span>, erreur);
            }
        }
    }
});
    </pre>
</div>

<h3><i class="fas fa-retweet"></i> Exemple 3 : Actions Chaînées</h3>
<div class="example-box">
    <pre>
<span class="comment">// Chaînage des actions</span>
store.dispatch(<span class="string">'chargerUtilisateurs'</span>).<span class="keyword">then</span>(() => {
    console.log(<span class="string">'Utilisateurs chargés avec succès.'</span>);
}).<span class="keyword">catch</span>((erreur) => {
    console.error(<span class="string">'Erreur:'</span>, erreur);
});
    </pre>
</div>

<h2><i class="fas fa-check-double"></i> Bonnes Pratiques</h2>
<ul>
    <li><i class="fas fa-check-circle" style="color: green;"></i> Ne modifiez pas directement le <code>state</code> dans les actions ; utilisez toujours <code>commit</code> pour appeler une mutation.</li>
    <li><i class="fas fa-check-circle" style="color: green;"></i> Organisez les actions complexes en plusieurs petites actions pour une meilleure lisibilité.</li>
    <li><i class="fas fa-check-circle" style="color: green;"></i> Utilisez des noms explicites pour vos actions afin de clarifier leur objectif.</li>
    <li><i class="fas fa-check-circle" style="color: green;"></i> Manipulez les erreurs dans vos actions pour garantir la stabilité de l'application.</li>
</ul>

<h2><i class="fas fa-tasks icon"></i> Cas d'Utilisation Courants</h2>
<div class="table-responsive">
<table class="table-style">
    <thead>
        <tr>
            <th>Cas</th>
            <th>Exemple</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Récupération de données</td>
            <td><code>chargerUtilisateurs({ commit })</code></td>
            <td>Récupère des données depuis une API et les stocke dans le <code>state</code>.</td>
        </tr>
        <tr>
            <td>Incrémentation asynchrone</td>
            <td><code>asyncIncrementer(context, valeur)</code></td>
            <td>Met à jour le <code>state</code> après un délai ou une opération.</td>
        </tr>
        <tr>
            <td>Chaînage d'actions</td>
            <td><code>store.dispatch('action1').then(() => store.dispatch('action2'))</code></td>
            <td>Exécute des actions de manière séquentielle.</td>
        </tr>
    </tbody>
</table>
</div>
<p>
    En suivant ces pratiques, les actions garantissent une gestion efficace et maintenable des opérations asynchrones dans Vuex.
</p>
<h1 id="vuex-modules"><i class="fas fa-folder-open icon"></i> Vuex : Modules</h1>

<h2><i class="fas fa-info-circle icon"></i> Théorie et Introduction</h2>
<p>
    Lorsqu'une application Vue.js devient de plus en plus complexe, le store Vuex peut rapidement devenir difficile à gérer. 
    Les <strong>modules Vuex</strong> offrent une solution en permettant de diviser le store en sous-sections logiques et indépendantes. Chaque module peut contenir son propre <code>state</code>, ses <code>getters</code>, ses <code>mutations</code> et ses <code>actions</code>.
</p>
<p>
    Les modules facilitent :
</p>
<ul>
    <li>La gestion et la maintenance du code.</li>
    <li>La réutilisation des fonctionnalités dans différents projets.</li>
    <li>La séparation des responsabilités.</li>
</ul>

<div class="highlight">
    <strong>À retenir :</strong>
    Les modules permettent de :
    <ul>
        <li>Créer des structures hiérarchiques en imbriquant les modules.</li>
        <li>Utiliser des espaces de noms pour isoler les actions et getters des modules.</li>
        <li>Répartir les fonctionnalités selon des contextes spécifiques.</li>
    </ul>
</div>

<h2><i class="fas fa-terminal icon"></i> Syntaxe et Définition</h2>
<p>
    Pour définir des modules, utilisez la propriété <code>modules</code> dans le store principal.
</p>

<div class="example-box">
    <pre>
<span class="comment">// Exemple d'un store avec des modules</span>
<span class="keyword">const</span> utilisateursModule = {
    <span class="keyword">state</span>: {
        liste: []
    },
    <span class="keyword">mutations</span>: {
        setUtilisateurs(state, utilisateurs) {
            state.liste = utilisateurs;
        }
    },
    <span class="keyword">actions</span>: {
        async chargerUtilisateurs({ commit }) {
            <span class="keyword">const</span> response = <span class="keyword">await</span> fetch(<span class="string">'https://api.example.com/utilisateurs'</span>);
            <span class="keyword">const</span> data = <span class="keyword">await</span> response.json();
            commit(<span class="string">'setUtilisateurs'</span>, data);
        }
    },
    <span class="keyword">getters</span>: {
        totalUtilisateurs(state) {
            <span class="keyword">return</span> state.liste.length;
        }
    }
};

<span class="keyword">const</span> produitsModule = {
    <span class="keyword">state</span>: {
        liste: []
    },
    <span class="keyword">mutations</span>: {
        setProduits(state, produits) {
            state.liste = produits;
        }
    },
    <span class="keyword">getters</span>: {
        produitsDisponibles(state) {
            <span class="keyword">return</span> state.liste.filter(produit => produit.stock > <span class="number">0</span>);
        }
    }
};

<span class="keyword">const</span> store = <span class="keyword">new</span> Vuex.Store({
    modules: {
        utilisateurs: utilisateursModule,
        produits: produitsModule
    }
});
    </pre>
</div>

<h2><i class="fas fa-cogs icon"></i> Exemples Pratiques</h2>

<h3><i class="fas fa-user-circle"></i> Exemple 1 : Gestion des Utilisateurs</h3>
<div class="example-box">
    <pre>
<span class="comment">// Appel d'une action dans un module</span>
store.dispatch(<span class="string">'utilisateurs/chargerUtilisateurs'</span>);

<span class="comment">// Accès à un getter</span>
<span class="keyword">const</span> total = store.getters[<span class="string">'utilisateurs/totalUtilisateurs'</span>];
console.log(total);
    </pre>
</div>

<h3><i class="fas fa-box-open"></i> Exemple 2 : Gestion des Produits</h3>
<div class="example-box">
    <pre>
<span class="comment">// Accès aux produits disponibles</span>
<span class="keyword">const</span> disponibles = store.getters[<span class="string">'produits/produitsDisponibles'</span>];
console.log(disponibles);
    </pre>
</div>

<h3><i class="fas fa-atom"></i> Exemple 3 : Modules Imbriqués</h3>
<div class="example-box">
    <pre>
<span class="comment">// Exemple d'un module imbriqué</span>
<span class="keyword">const</span> commandesModule = {
    <span class="keyword">state</span>: {
        commandes: []
    },
    <span class="keyword">modules</span>: {
        historique: {
            <span class="keyword">state</span>: {
                anciennesCommandes: []
            },
            <span class="keyword">mutations</span>: {
                ajouterCommande(state, commande) {
                    state.anciennesCommandes.push(commande);
                }
            }
        }
    }
};

<span class="keyword">const</span> store = <span class="keyword">new</span> Vuex.Store({
    modules: {
        commandes: commandesModule
    }
});

store.commit(<span class="string">'commandes/historique/ajouterCommande'</span>, <span class="string">'Nouvelle commande'</span>);
    </pre>
</div>

<h2><i class="fas fa-check-double"></i> Bonnes Pratiques</h2>
<ul>
    <li><i class="fas fa-check-circle" style="color: green;"></i> Utilisez des noms explicites pour chaque module pour éviter les conflits.</li>
    <li><i class="fas fa-check-circle" style="color: green;"></i> Activez l'<code>namespace</code> pour isoler les getters, mutations et actions.</li>
    <li><i class="fas fa-check-circle" style="color: green;"></i> Divisez les modules en fichiers séparés pour une meilleure organisation du code.</li>
    <li><i class="fas fa-check-circle" style="color: green;"></i> Gardez les modules aussi petits et spécialisés que possible.</li>
</ul>

<h2><i class="fas fa-tasks icon"></i> Cas d'Utilisation Courants</h2>
<div class="table-responsive">
    <table class="table-style">
    <thead>
        <tr>
            <th>Cas</th>
            <th>Exemple</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Gestion des utilisateurs</td>
            <td><code>utilisateurs/chargerUtilisateurs</code></td>
            <td>Charge les utilisateurs depuis une API et les stocke dans le module utilisateurs.</td>
        </tr>
        <tr>
            <td>Gestion des produits</td>
            <td><code>produits/produitsDisponibles</code></td>
            <td>Filtre les produits en stock dans le module produits.</td>
        </tr>
        <tr>
            <td>Imbrication de modules</td>
            <td><code>commandes/historique/ajouterCommande</code></td>
            <td>Ajoute une commande à l'historique dans un module imbriqué.</td>
        </tr>
    </tbody>
</table>
</div>
<p>
    En structurant votre store Vuex avec des modules, vous rendez votre code plus lisible, maintenable et modulaire, ce qui facilite la collaboration sur des projets complexes.
</p>
<div class="sommaire-container">
    <h2><i class="fas fa-book icon"></i> Sommaire</h2>
    <ul>
        <li><a href="#what-is-composition-api"><i class="fas fa-info-circle"></i> Qu'est-ce que la Composition API ?</a></li>
        <li><a href="#why-use-composition-api"><i class="fas fa-question-circle"></i> Pourquoi utiliser la Composition API ?</a></li>
        <li><a href="#setup-function"><i class="fas fa-cogs"></i> Fonction setup()</a></li>
        <li><a href="#reactive-api"><i class="fas fa-atom"></i> reactive()</a></li>
        <li><a href="#ref-api"><i class="fas fa-atom"></i> ref()</a></li>
        <li><a href="#computed-properties"><i class="fas fa-calculator"></i> Propriétés calculées (computed) - à venir</a></li>
        <li><a href="#watch-api"><i class="fas fa-eye"></i> watch()</a></li>
        <li><a href="#watch-effect-api"><i class="fas fa-eye"></i>watchEffect()</a></li>
        <li><a href="#lifecycle-hooks"><i class="fas fa-clock"></i> Hooks de cycle de vie</a></li>
        <li><a href="#last-composition-api"><i class="fas fa-plug icon"></i> Utilisation avancée et composables</a></li>
        <li><a href="#example-project"><i class="fas fa-project-diagram"></i> Exemple de projet</a></li>
    </ul>
</div>

<h2 id="what-is-composition-api"><i class="fas fa-info-circle icon"></i> Qu'est-ce que la Composition API ?</h2>
<p>
    La <strong>Composition API</strong> est une nouvelle manière d'organiser et de structurer les composants dans Vue 3. Elle introduit une approche fonctionnelle pour définir le comportement et l'état des composants. Contrairement à l'Options API, où les propriétés comme <code>data</code>, <code>methods</code>, et <code>computed</code> sont séparées, la Composition API permet de regrouper logiquement les fonctionnalités dans des fonctions JavaScript.
</p>

<h2 id="why-use-composition-api"><i class="fas fa-question-circle icon"></i> Pourquoi utiliser la Composition API ?</h2>
<p>
    La Composition API a été introduite pour résoudre plusieurs limitations de l'Options API dans Vue.js :
</p>
<ul>
    <li><i class="fas fa-check-circle" style="color: green;"></i> <strong>Réutilisation du code :</strong> Elle facilite le partage et la réutilisation de la logique avec des fonctions utilitaires ou des <em>composables</em>.</li>
    <li><i class="fas fa-check-circle" style="color: green;"></i> <strong>Meilleure organisation :</strong> Les composants complexes deviennent plus lisibles en regroupant les fonctionnalités logiques.</li>
    <li><i class="fas fa-check-circle" style="color: green;"></i> <strong>TypeScript :</strong> Elle offre une meilleure prise en charge de TypeScript grâce à des types explicites.</li>
    <li><i class="fas fa-check-circle" style="color: green;"></i> <strong>Flexibilité :</strong> Permet d'exploiter tout le potentiel de JavaScript sans être limité par les règles de l'Options API.</li>
</ul>

<div class="highlight">
    <strong>À retenir :</strong>
    <ul>
        <li>La Composition API ne remplace pas l'Options API ; elle est une alternative pour les développeurs qui préfèrent une approche plus flexible.</li>
        <li>Elle est particulièrement utile dans les projets complexes ou pour les équipes qui souhaitent structurer leur code de manière modulaire.</li>
    </ul>
</div>
<h2 id="setup-function"><i class="fas fa-cogs icon"></i> Fonction setup()</h2>

<h3><i class="fas fa-info-circle"></i> Introduction</h3>
<p>
    La fonction <code>setup()</code> est le cœur de la Composition API dans Vue 3. 
    Elle remplace ou complète les options comme <code>data</code>, <code>methods</code>, et <code>computed</code> de l'Options API. 
    Appelée avant le cycle de vie du composant, <code>setup()</code> initialise l'état réactif et fournit des méthodes ou des propriétés pour être utilisées dans le template.
</p>

<div class="highlight">
    <strong>Points clés :</strong>
    <ul>
        <li>Elle est appelée avant les hooks de cycle de vie comme <code>created</code>.</li>
        <li>Le <code>setup()</code> doit renvoyer un objet contenant les propriétés et méthodes accessibles dans le template.</li>
        <li>Permet une meilleure organisation logique dans le code.</li>
    </ul>
</div>

<h3><i class="fas fa-book"></i> Syntaxe de base</h3>
<p>
    La fonction <code>setup()</code> prend deux arguments :
</p>
<ul>
    <li><code>props</code> : Les propriétés reçues par le composant.</li>
    <li><code>context</code> (facultatif) : Contient les propriétés <code>attrs</code>, <code>slots</code>, et <code>emit</code>.</li>
</ul>

<div class="example-box">
    <pre>
<span class="comment">// Exemple de base de setup()</span>
<span class="keyword">import</span> { <span class="variable">defineComponent</span>, <span class="variable">ref</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export</span> <span class="keyword">default</span> <span class="function">defineComponent</span>({
    <span class="function">setup</span>(<span class="variable">props</span>, <span class="variable">context</span>) {
        <span class="comment">// Déclaration d'une valeur réactive</span>
        <span class="keyword">const</span> <span class="variable">compteur</span> = <span class="function">ref</span>(<span class="number">0</span>);

        <span class="comment">// Méthode pour incrémenter</span>
        <span class="keyword">const</span> <span class="variable">incrementer</span> = <span class="operator">()</span> <span class="operator">=></span> {
            <span class="variable">compteur</span>.<span class="property">value</span><span class="operator">++</span>;
        };

        <span class="comment">// Retourne les propriétés et méthodes au template</span>
        <span class="keyword">return</span> {
            <span class="variable">compteur</span>,
            <span class="variable">incrementer</span>
        };
    }
});
    </pre>
</div>

<h3><i class="fas fa-code"></i> Exemple pratique</h3>
<p>
    Voici un exemple pratique où <code>setup()</code> est utilisé pour gérer une valeur réactive et une méthode d'interaction avec un événement.
</p>

<div class="example-box">
    <pre>
<span class="comment">// Composant avec setup()</span>
<span class="keyword">import</span> { <span class="variable">defineComponent</span>, <span class="variable">ref</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export</span> <span class="keyword">default</span> <span class="function">defineComponent</span>({
    <span class="function">setup</span>() {
        <span class="comment">// Déclaration d'une valeur réactive</span>
        <span class="keyword">const</span> <span class="variable">message</span> = <span class="function">ref</span>(<span class="string">'Bonjour Vue.js!'</span>);
        <span class="keyword">const</span> <span class="variable">compteur</span> = <span class="function">ref</span>(<span class="number">0</span>);

        <span class="comment">// Méthode pour incrémenter le compteur</span>
        <span class="keyword">const</span> <span class="variable">incrementer</span> = <span class="operator">()</span> <span class="operator">=></span> {
            <span class="variable">compteur</span>.<span class="property">value</span><span class="operator">++</span>;
        };

        <span class="keyword">return</span> { <span class="variable">message</span>, <span class="variable">compteur</span>, <span class="variable">incrementer</span> };
    },
    <span class="property">template</span>: <span class="string">`
        &lt;div&gt;
            &lt;p&gt;{{ message }}&lt;/p&gt;
            &lt;p&gt;Compteur : {{ compteur }}&lt;/p&gt;
            &lt;button @click="incrementer"&gt;Incrémenter&lt;/button&gt;
        &lt;/div&gt;
    `</span>
});
    </pre>
</div>

<h3><i class="fas fa-chart-line"></i> Structure recommandée</h3>
<p>
    Pour les projets complexes, il est recommandé d'organiser les données, les méthodes et les hooks en sections logiques :
</p>

<div class="example-box">
    <pre>
<span class="comment">// Organisation recommandée dans setup()</span>
<span class="keyword">import</span> { <span class="variable">defineComponent</span>, <span class="variable">ref</span>, <span class="variable">reactive</span>, <span class="variable">onMounted</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export</span> <span class="keyword">default</span> <span class="function">defineComponent</span>({
    <span class="function">setup</span>() {
        <span class="comment">// Données réactives</span>
        <span class="keyword">const</span> <span class="variable">compteur</span> = <span class="function">ref</span>(<span class="number">0</span>);
        <span class="keyword">const</span> <span class="variable">state</span> = <span class="function">reactive</span>({
            <span class="property">message</span>: <span class="string">'Hello Vue.js!'</span>,
            <span class="property">utilisateurs</span>: []
        });

        <span class="comment">// Méthodes</span>
        <span class="keyword">const</span> <span class="variable">incrementer</span> = <span class="operator">()</span> <span class="operator">=></span> <span class="variable">compteur</span>.<span class="property">value</span><span class="operator">++</span>;
        <span class="keyword">const</span> <span class="variable">chargerUtilisateurs</span> = <span class="keyword">async</span> <span class="operator">()</span> <span class="operator">=></span> {
            <span class="keyword">const</span> <span class="variable">response</span> = <span class="keyword">await</span> <span class="function">fetch</span>(<span class="string">'https://api.example.com/users'</span>);
            <span class="variable">state</span>.<span class="property">utilisateurs</span> = <span class="keyword">await</span> <span class="variable">response</span>.<span class="function">json</span>();
        };

        <span class="comment">// Hook de cycle de vie</span>
        <span class="function">onMounted</span>(<span class="operator">()</span> <span class="operator">=></span> {
            <span class="function">console</span>.<span class="function">log</span>(<span class="string">'Composant monté'</span>);
            <span class="function">chargerUtilisateurs</span>();
        });

        <span class="comment">// Retour des données et méthodes</span>
        <span class="keyword">return</span> {
            <span class="variable">compteur</span>,
            <span class="variable">state</span>,
            <span class="variable">incrementer</span>
        };
    }
});
    </pre>
</div>

<h3><i class="fas fa-lightbulb"></i> Bonnes pratiques</h3>
<div class="highlight">
    <ul>
        <li>Organisez les données, méthodes et hooks en sections logiques dans <code>setup()</code>.</li>
        <li>Utilisez des noms descriptifs pour les variables et méthodes.</li>
        <li>Minimisez la logique complexe dans <code>setup()</code> en la déléguant à des fonctions externes ou à des composables.</li>
        <li>Préférez l'utilisation de <code>reactive</code> pour les objets imbriqués et de <code>ref</code> pour les valeurs primitives.</li>
        <li>Évitez de retourner tout l'objet <code>props</code> pour limiter les modifications accidentelles.</li>
    </ul>
</div>
<h2 id="reactive-function"><i class="fas fa-database icon"></i> Fonction reactive()</h2>

<h3><i class="fas fa-info-circle"></i> Introduction</h3>
<p>
    La fonction <code>reactive()</code> de Vue 3 est utilisée pour créer des objets réactifs, c'est-à-dire des objets dont les modifications déclenchent automatiquement une mise à jour de l'interface utilisateur. Contrairement à <code>ref()</code>, qui est destiné aux valeurs primitives, <code>reactive()</code> est conçu pour les objets complexes tels que les tableaux et les objets imbriqués.
</p>

<div class="highlight">
    <strong>Points clés :</strong>
    <ul>
        <li>Convient pour gérer des structures complexes comme des objets ou des tableaux.</li>
        <li>Les propriétés imbriquées dans un objet <code>reactive</code> sont également rendues réactives.</li>
        <li>Les objets réactifs retournés par <code>reactive()</code> conservent leur forme d'origine (contrairement à <code>ref</code>).</li>
    </ul>
</div>

<h3><i class="fas fa-book"></i> Syntaxe et utilisation</h3>
<p>La fonction <code>reactive()</code> prend un objet comme argument et renvoie une version réactive de cet objet.</p>

<div class="example-box">
    <pre>
<span class="comment">// Création d'un objet réactif avec reactive()</span>
<span class="keyword">import</span> { <span class="variable">reactive</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="comment">// Déclaration d'un état réactif</span>
<span class="keyword">const</span> <span class="variable">state</span> = <span class="function">reactive</span>({
    compteur: <span class="number">0</span>,
    message: <span class="string">'Bonjour Vue.js!'</span>
});

<span class="comment">// Modification des propriétés</span>
<span class="variable">state</span>.<span class="property">compteur</span><span class="operator">++</span>;
<span class="variable">state</span>.<span class="property">message</span> = <span class="string">'Bonjour Reactivity!'</span>;
    </pre>
</div>

<h3><i class="fas fa-code"></i> Exemple pratique</h3>
<p>
    Voici un exemple d'utilisation de <code>reactive()</code> dans un composant Vue pour gérer des données complexes et imbriquées.
</p>

<div class="example-box">
    <pre>
<span class="comment">// Composant utilisant reactive()</span>
<span class="keyword">import</span> { <span class="variable">defineComponent</span>, <span class="variable">reactive</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export</span> <span class="keyword">default</span> <span class="function">defineComponent</span>({
    <span class="function">setup</span>() {
        <span class="comment">// État réactif</span>
        <span class="keyword">const</span> <span class="variable">state</span> = <span class="function">reactive</span>({
            utilisateur: {
                nom: <span class="string">'Jean'</span>,
                age: <span class="number">30</span>
            },
            compteur: <span class="number">0</span>
        });

        <span class="comment">// Méthode pour modifier les données</span>
        <span class="keyword">const</span> <span class="variable">incrementer</span> = <span class="operator">()</span> <span class="operator">=></span> {
            <span class="variable">state</span>.<span class="property">compteur</span><span class="operator">++</span>;
        };

        <span class="keyword">return</span> {
            <span class="variable">state</span>,
            <span class="variable">incrementer</span>
        };
    },
    <span class="property">template</span>: <span class="string">`
        &lt;div&gt;
            &lt;p&gt;Nom : {{ state.utilisateur.nom }}&lt;/p&gt;
            &lt;p&gt;Âge : {{ state.utilisateur.age }}&lt;/p&gt;
            &lt;p&gt;Compteur : {{ state.compteur }}&lt;/p&gt;
            &lt;button @click="incrementer"&gt;Incrémenter&lt;/button&gt;
        &lt;/div&gt;
    `</span>
});
    </pre>
</div>

<h3><i class="fas fa-database"></i> Utilisation avec des objets imbriqués</h3>
<p>
    Un des avantages de <code>reactive()</code> est qu'il rend réactives toutes les propriétés imbriquées de l'objet, ce qui est idéal pour gérer des états complexes.
</p>

<div class="example-box">
    <pre>
<span class="comment">// Exemple avec un objet imbriqué</span>
<span class="keyword">import</span> { <span class="variable">reactive</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="comment">// Objet avec des propriétés imbriquées</span>
<span class="keyword">const</span> <span class="variable">state</span> = <span class="function">reactive</span>({
    utilisateur: {
        nom: <span class="string">'Alice'</span>,
        details: {
            age: <span class="number">28</span>,
            pays: <span class="string">'France'</span>
        }
    }
});

<span class="comment">// Modification des propriétés imbriquées</span>
<span class="variable">state</span>.<span class="property">utilisateur</span>.<span class="property">details</span>.<span class="property">age</span> = <span class="number">29</span>;
    </pre>
</div>

<h3><i class="fas fa-lightbulb"></i> Bonnes pratiques</h3>
<div class="highlight">
    <ul>
        <li>Utilisez <code>reactive()</code> pour les objets et tableaux complexes, mais préférez <code>ref()</code> pour les valeurs primitives.</li>
        <li>Évitez d'utiliser directement des structures profondes si vous ne les modifiez pas fréquemment. Les objets profondément imbriqués peuvent compliquer le débogage.</li>
        <li>Utilisez des outils comme <strong>Vue Devtools</strong> pour visualiser et déboguer vos objets réactifs.</li>
        <li>Si vous avez besoin de déstructurer des propriétés réactives, utilisez <code>toRefs()</code> pour éviter de perdre la réactivité.</li>
        <li>Organisez vos données imbriquées en composant des objets plus simples, si possible, pour améliorer la lisibilité et la maintenabilité.</li>
    </ul>
</div>

<h3><i class="fas fa-tools"></i> Pratiques courantes</h3>
<p>
    <strong>Créer un tableau réactif :</strong> Les tableaux peuvent être directement encapsulés dans <code>reactive()</code>, ce qui permet de suivre les ajouts, suppressions et modifications.
</p>

<div class="example-box">
    <pre>
<span class="comment">// Exemple avec un tableau réactif</span>
<span class="keyword">const</span> <span class="variable">state</span> = <span class="function">reactive</span>({
    liste: [<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>]
});

<span class="comment">// Ajout d'un élément</span>
<span class="variable">state</span>.<span class="property">liste</span>.<span class="function">push</span>(<span class="number">4</span>);

<span class="comment">// Suppression d'un élément</span>
<span class="variable">state</span>.<span class="property">liste</span>.<span class="function">pop</span>();
    </pre>
</div>

<p>
    En combinant <code>reactive()</code> avec d'autres fonctionnalités comme les hooks de cycle de vie et les composants enfants, vous pouvez structurer des applications performantes et maintenables.
</p>
<h2 id="ref-function"><i class="fas fa-anchor icon"></i> Fonction ref()</h2>

<h3><i class="fas fa-info-circle"></i> Introduction</h3>
<p>
    La fonction <code>ref()</code> est une des fonctionnalités fondamentales de la Composition API dans Vue 3. 
    Elle est utilisée pour rendre une valeur réactive, qu'il s'agisse d'une valeur primitive comme un nombre ou une chaîne de caractères, ou d'un objet complexe. Les valeurs créées avec <code>ref()</code> sont accessibles via la propriété <code>.value</code>.
</p>

<div class="highlight">
    <strong>Points clés :</strong>
    <ul>
        <li>Idéal pour gérer des valeurs primitives réactives.</li>
        <li>Les objets ou tableaux utilisés avec <code>ref()</code> ne sont pas automatiquement réactifs dans leurs propriétés imbriquées.</li>
        <li>Compatible avec des opérations simples comme des incréments ou des modifications directes.</li>
    </ul>
</div>

<h3><i class="fas fa-book"></i> Syntaxe et utilisation</h3>
<p>La fonction <code>ref()</code> est principalement utilisée pour des valeurs réactives simples.</p>

<div class="example-box">
    <pre>
<span class="comment">// Création d'une valeur réactive avec ref()</span>
<span class="keyword">import</span> { <span class="variable">ref</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="comment">// Déclaration d'une valeur réactive</span>
<span class="keyword">const</span> <span class="variable">compteur</span> = <span class="function">ref</span>(<span class="number">0</span>);

<span class="comment">// Modification de la valeur</span>
<span class="variable">compteur</span>.<span class="property">value</span><span class="operator">++</span>;
console.<span class="function">log</span>(<span class="variable">compteur</span>.<span class="property">value</span>); <span class="comment">// Affiche 1</span>
    </pre>
</div>

<h3><i class="fas fa-code"></i> Exemple pratique</h3>
<p>
    Voici un exemple où <code>ref()</code> est utilisé dans un composant pour gérer une valeur réactive avec des événements d'interaction.
</p>

<div class="example-box">
    <pre>
<span class="comment">// Exemple dans un composant Vue</span>
<span class="keyword">import</span> { <span class="variable">defineComponent</span>, <span class="variable">ref</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export</span> <span class="keyword">default</span> <span class="function">defineComponent</span>({
    <span class="function">setup</span>() {
        <span class="comment">// Valeurs réactives</span>
        <span class="keyword">const</span> <span class="variable">message</span> = <span class="function">ref</span>(<span class="string">'Bonjour Vue.js!'</span>);
        <span class="keyword">const</span> <span class="variable">compteur</span> = <span class="function">ref</span>(<span class="number">0</span>);

        <span class="comment">// Méthode pour incrémenter</span>
        <span class="keyword">const</span> <span class="variable">incrementer</span> = <span class="operator">()</span> <span class="operator">=></span> {
            <span class="variable">compteur</span>.<span class="property">value</span><span class="operator">++</span>;
        };

        <span class="keyword">return</span> { <span class="variable">message</span>, <span class="variable">compteur</span>, <span class="variable">incrementer</span> };
    },
    <span class="property">template</span>: <span class="string">`
        &lt;div&gt;
            &lt;p&gt;{{ message }}&lt;/p&gt;
            &lt;p&gt;Compteur : {{ compteur }}&lt;/p&gt;
            &lt;button @click="incrementer"&gt;Incrémenter&lt;/button&gt;
        &lt;/div&gt;
    `</span>
});
    </pre>
</div>

<h3><i class="fas fa-database"></i> Utilisation avancée avec ref()</h3>
<p>
    Lorsque <code>ref()</code> est appliqué à des objets ou des tableaux, seules les modifications au niveau racine sont suivies de manière réactive. Pour une réactivité complète, il est recommandé d'utiliser <code>reactive()</code> ou <code>toRefs()</code>.
</p>

<div class="example-box">
    <pre>
<span class="comment">// Exemple avec un tableau réactif</span>
<span class="keyword">import</span> { <span class="variable">ref</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="comment">// Déclaration d'un tableau réactif</span>
<span class="keyword">const</span> <span class="variable">liste</span> = <span class="function">ref</span>([<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>]);

<span class="comment">// Modification du tableau</span>
<span class="variable">liste</span>.<span class="property">value</span>.<span class="function">push</span>(<span class="number">4</span>);
console.<span class="function">log</span>(<span class="variable">liste</span>.<span class="property">value</span>); <span class="comment">// Affiche [1, 2, 3, 4]</span>
    </pre>
</div>

<h3><i class="fas fa-lightbulb"></i> Bonnes pratiques</h3>
<div class="highlight">
    <ul>
        <li>Utilisez <code>ref()</code> pour les valeurs primitives ou les tableaux simples.</li>
        <li>Évitez d'utiliser <code>ref()</code> pour les objets complexes imbriqués. Préférez <code>reactive()</code> dans ces cas.</li>
        <li>Gardez les noms de vos références descriptifs pour améliorer la lisibilité.</li>
        <li>Minimisez l'utilisation de <code>value</code> directement dans les templates pour éviter les erreurs de logique.</li>
    </ul>
</div>

<h3><i class="fas fa-tools"></i> Pratiques courantes</h3>
<p>
    <strong>Créer un compteur :</strong> Un des usages les plus courants de <code>ref()</code> est de gérer un compteur ou une valeur qui évolue dynamiquement en fonction des événements.
</p>

<div class="example-box">
    <pre>
<span class="comment">// Exemple : Gestion d'un compteur</span>
<span class="keyword">import</span> { <span class="variable">ref</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">const</span> <span class="variable">compteur</span> = <span class="function">ref</span>(<span class="number">0</span>);

<span class="comment">// Incrémenter</span>
<span class="variable">compteur</span>.<span class="property">value</span><span class="operator">++</span>;

<span class="comment">// Décrémenter</span>
<span class="variable">compteur</span>.<span class="property">value</span><span class="operator">--</span>;
    </pre>
</div>

<p>
    <strong>Observabilité dans Vue Devtools :</strong> Les valeurs créées avec <code>ref()</code> apparaissent clairement dans Vue Devtools, ce qui facilite le débogage.
</p>
<h2 id="reactive-api"><i class="fas fa-object-group icon"></i> Fonction reactive()</h2>

<h3><i class="fas fa-info-circle"></i> Introduction</h3>
<p>
    La fonction <code>reactive()</code> est une pierre angulaire de la Composition API dans Vue 3. 
    Elle permet de créer des objets réactifs qui sont profondément observés par le système de réactivité de Vue. Contrairement à <code>ref()</code>, qui est destiné aux valeurs primitives ou simples, <code>reactive()</code> est spécialement conçu pour les objets et tableaux complexes.
</p>

<div class="highlight">
    <strong>Points clés :</strong>
    <ul>
        <li>Convient aux structures de données imbriquées comme les objets ou les tableaux.</li>
        <li>Propose une réactivité profonde pour suivre les modifications dans les propriétés imbriquées.</li>
        <li>Les modifications effectuées sur les objets réactifs sont automatiquement reflétées dans les templates Vue.</li>
    </ul>
</div>

<h3><i class="fas fa-book"></i> Syntaxe et utilisation</h3>
<p>La fonction <code>reactive()</code> est idéale pour créer des objets réactifs complets.</p>

<div class="example-box">
    <pre>
<span class="comment">// Création d'un objet réactif avec reactive()</span>
<span class="keyword">import</span> { <span class="variable">reactive</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="comment">// Déclaration d'un objet réactif</span>
<span class="keyword">const</span> <span class="variable">state</span> = <span class="function">reactive</span>({
    <span class="property">nom</span>: <span class="string">'Alice'</span>,
    <span class="property">age</span>: <span class="number">25</span>,
    <span class="property">competences</span>: [<span class="string">'JavaScript'</span>, <span class="string">'Vue.js'</span>]
});

<span class="comment">// Modification d'une propriété</span>
<span class="variable">state</span>.<span class="property">age</span> <span class="operator">=</span> <span class="number">26</span>;

<span class="comment">// Ajout dans un tableau</span>
<span class="variable">state</span>.<span class="property">competences</span>.<span class="function">push</span>(<span class="string">'TypeScript'</span>);
    </pre>
</div>

<h3><i class="fas fa-code"></i> Exemple pratique</h3>
<p>
    Voici un exemple où <code>reactive()</code> est utilisé pour gérer un objet contenant des informations utilisateur, tout en réagissant aux modifications de ses propriétés dans un composant Vue.
</p>

<div class="example-box">
    <pre>
<span class="comment">// Exemple dans un composant Vue</span>
<span class="keyword">import</span> { <span class="variable">defineComponent</span>, <span class="variable">reactive</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export</span> <span class="keyword">default</span> <span class="function">defineComponent</span>({
    <span class="function">setup</span>() {
        <span class="comment">// Objet réactif</span>
        <span class="keyword">const</span> <span class="variable">utilisateur</span> = <span class="function">reactive</span>({
            <span class="property">nom</span>: <span class="string">'Jean'</span>,
            <span class="property">age</span>: <span class="number">30</span>,
            <span class="property">competences</span>: [<span class="string">'HTML'</span>, <span class="string">'CSS'</span>]
        });

        <span class="comment">// Méthode pour ajouter une compétence</span>
        <span class="keyword">const</span> <span class="variable">ajouterCompetence</span> = (<span class="variable">competence</span>) <span class="operator">=></span> {
            <span class="variable">utilisateur</span>.<span class="property">competences</span>.<span class="function">push</span>(<span class="variable">competence</span>);
        };

        <span class="keyword">return</span> { <span class="variable">utilisateur</span>, <span class="variable">ajouterCompetence</span> };
    },
    <span class="property">template</span>: <span class="string">`
        &lt;div&gt;
            &lt;p&gt;Nom : {{ utilisateur.nom }}&lt;/p&gt;
            &lt;p&gt;Âge : {{ utilisateur.age }}&lt;/p&gt;
            &lt;ul&gt;
                &lt;li v-for="competence in utilisateur.competences" :key="competence"&gt;
                    {{ competence }}
                &lt;/li&gt;
            &lt;/ul&gt;
            &lt;button @click="ajouterCompetence('JavaScript')"&gt;Ajouter JavaScript&lt;/button&gt;
        &lt;/div&gt;
    `</span>
});
    </pre>
</div>

<h3><i class="fas fa-database"></i> Comparaison avec ref()</h3>
<p>
    Bien que <code>ref()</code> puisse également être utilisé pour gérer des objets ou des tableaux, il ne fournit pas de réactivité profonde par défaut. Voici une comparaison des deux :
</p>
<div class="table-responsive">
<table class="table-style">
    <thead>
        <tr>
            <th>Critère</th>
            <th><code>reactive()</code></th>
            <th><code>ref()</code></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Réactivité profonde</td>
            <td>Oui</td>
            <td>Non (besoin d'utiliser <code>toRefs()</code>)</td>
        </tr>
        <tr>
            <td>Simplicité pour les valeurs primitives</td>
            <td>Non</td>
            <td>Oui</td>
        </tr>
        <tr>
            <td>Compatibilité avec les structures complexes</td>
            <td>Oui</td>
            <td>Oui (mais nécessite un accès via <code>.value</code>)</td>
        </tr>
    </tbody>
</table>
</div>
<h3><i class="fas fa-lightbulb"></i> Bonnes pratiques</h3>
<div class="highlight">
    <ul>
        <li>Utilisez <code>reactive()</code> pour des objets ou tableaux imbriqués nécessitant une réactivité complète.</li>
        <li>Privilégiez <code>ref()</code> pour des valeurs primitives ou des structures simples.</li>
        <li>Minimisez les mutations fréquentes sur des objets massifs pour éviter les performances dégradées.</li>
        <li>Combinez <code>reactive()</code> avec <code>toRefs()</code> si vous devez déstructurer un objet tout en conservant la réactivité.</li>
    </ul>
</div>

<h3><i class="fas fa-tools"></i> Pratiques courantes</h3>
<p>
    <strong>Gestion d'un formulaire :</strong> Utilisez <code>reactive()</code> pour suivre les données d'un formulaire complexe avec plusieurs champs :
</p>

<div class="example-box">
    <pre>
<span class="comment">// Exemple : Suivi des données d'un formulaire</span>
<span class="keyword">import</span> { <span class="variable">reactive</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">const</span> <span class="variable">formulaire</span> = <span class="function">reactive</span>({
    <span class="property">nom</span>: <span class="string">''</span>,
    <span class="property">email</span>: <span class="string">''</span>,
    <span class="property">message</span>: <span class="string">''</span>
});

<span class="comment">// Modification d'un champ</span>
<span class="variable">formulaire</span>.<span class="property">nom</span> <span class="operator">=</span> <span class="string">'Alice'</span>;
    </pre>
</div>
<h2 id="ref-api"><i class="fas fa-cube icon"></i> ref()</h2>

<h3><i class="fas fa-info-circle"></i> Introduction</h3>
<p>
    La fonction <code>ref()</code> est un des piliers de la Composition API dans Vue 3. 
    Elle permet de créer une valeur réactive qui peut être utilisée dans un composant ou partagée entre plusieurs composants.
</p>
<p>
    Contrairement à <code>reactive()</code>, qui transforme des objets, <code>ref()</code> est principalement utilisé pour des valeurs primitives (comme des nombres, des chaînes de caractères) ou des objets simples. Il est particulièrement utile pour les propriétés qui doivent être modifiées dynamiquement et suivies de manière réactive.
</p>

<div class="highlight">
    <strong>Points clés :</strong>
    <ul>
        <li>Crée une valeur réactive encapsulée dans un objet avec une propriété <code>.value</code>.</li>
        <li>Compatible avec des types primitifs ou des objets.</li>
        <li>Idéal pour les cas où une valeur unique ou une référence doit être suivie.</li>
    </ul>
</div>

<h3><i class="fas fa-book"></i> Syntaxe et Utilisation</h3>
<p>
    La syntaxe de <code>ref()</code> est simple et intuitive :
</p>

<div class="example-box">
    <pre>
<span class="comment">// Importation de ref</span>
<span class="keyword">import</span> { <span class="variable">ref</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="comment">// Création d'une valeur réactive</span>
<span class="keyword">const</span> <span class="variable">compteur</span> = <span class="function">ref</span>(<span class="number">0</span>);

<span class="comment">// Lecture et modification de la valeur</span>
<span class="variable">compteur</span>.value++; 
console.log(<span class="variable">compteur</span>.value); <span class="comment">// Affiche 1</span>
    </pre>
</div>

<h3><i class="fas fa-code"></i> Exemple pratique</h3>
<p>
    Voici un exemple pratique où <code>ref()</code> est utilisé pour gérer une valeur réactive dans un composant Vue :
</p>

<div class="example-box">
    <pre>
<span class="comment">// Exemple de composant avec ref()</span>
<span class="keyword">import</span> { <span class="variable">defineComponent</span>, <span class="variable">ref</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export</span> <span class="keyword">default</span> <span class="function">defineComponent</span>({
    <span class="function">setup</span>() {
        <span class="comment">// Création de données réactives</span>
        <span class="keyword">const</span> <span class="variable">message</span> = <span class="function">ref</span>(<span class="string">'Bonjour Vue.js!'</span>);
        <span class="keyword">const</span> <span class="variable">compteur</span> = <span class="function">ref</span>(<span class="number">0</span>);

        <span class="comment">// Méthode pour incrémenter le compteur</span>
        <span class="keyword">const</span> <span class="variable">incrementer</span> = () => {
            <span class="variable">compteur</span>.value++;
        };

        <span class="keyword">return</span> { <span class="variable">message</span>, <span class="variable">compteur</span>, <span class="variable">incrementer</span> };
    },
    <span class="property">template</span>: <span class="string">`
        &lt;div&gt;
            &lt;p&gt;{{ message }}&lt;/p&gt;
            &lt;p&gt;Compteur : {{ compteur }}&lt;/p&gt;
            &lt;button @click="incrementer"&gt;Incrémenter&lt;/button&gt;
        &lt;/div&gt;
    `</span>
});
    </pre>
</div>

<h3><i class="fas fa-chart-line"></i> Comparaison : <code>ref()</code> vs <code>reactive()</code></h3>
<p>
    Bien que <code>ref()</code> et <code>reactive()</code> soient tous deux utilisés pour créer des données réactives, leurs cas d'utilisation diffèrent :
</p>
<div class="table-responsive">
<table class="table-style">
    <thead>
        <tr>
            <th>Critères</th>
            <th>ref()</th>
            <th>reactive()</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Type de données</td>
            <td>Primitifs ou objets simples</td>
            <td>Objets complexes</td>
        </tr>
        <tr>
            <td>Accès à la valeur</td>
            <td><code>.value</code></td>
            <td>Accès direct</td>
        </tr>
        <tr>
            <td>Utilisation principale</td>
            <td>Valeurs isolées</td>
            <td>Objets imbriqués</td>
        </tr>
    </tbody>
</table>
</div>
<h3><i class="fas fa-lightbulb"></i> Bonnes pratiques</h3>
<div class="highlight">
    <ul>
        <li>Utilisez <code>ref()</code> pour des valeurs primitives comme les nombres, les chaînes de caractères ou les booléens.</li>
        <li>Pour des objets ou des tableaux complexes, préférez <code>reactive()</code>, sauf si vous avez besoin d'une encapsulation fine.</li>
        <li>Évitez de confondre <code>ref()</code> avec des valeurs non réactives ; utilisez-le uniquement lorsque la réactivité est nécessaire.</li>
    </ul>
</div>
<h2 id="watch-api"><i class="fas fa-eye icon"></i> watch()</h2>

<h3><i class="fas fa-info-circle"></i> Introduction</h3>
<p>
    La fonction <code>watch()</code> dans Vue 3 permet de réagir à des changements spécifiques dans les données réactives ou des <code>refs</code>. Contrairement à <code>computed</code>, qui calcule une valeur dérivée et mise en cache, <code>watch()</code> exécute une logique ou déclenche des effets secondaires lorsque les données changent.
</p>
<p>
    Elle est particulièrement utile pour :
</p>
<ul>
    <li>Exécuter des actions asynchrones (exemple : appels d'API).</li>
    <li>Surveiller plusieurs dépendances spécifiques.</li>
    <li>Observer des objets ou tableaux en profondeur.</li>
</ul>

<div class="highlight">
    <strong>À retenir :</strong>
    Utilisez <code>watch()</code> lorsque vous avez besoin d'un effet secondaire basé sur un changement de données spécifique, et non pour des valeurs calculées directement dans le template.
</div>

<h3><i class="fas fa-code"></i> Syntaxe et utilisation</h3>
<p>
    La fonction <code>watch()</code> prend deux arguments principaux :
</p>
<ul>
    <li><code>source</code> : La ou les données à observer (<code>ref</code>, <code>reactive</code>, ou une fonction qui retourne une dépendance).</li>
    <li><code>callback</code> : Une fonction qui s'exécute lorsque la source change.</li>
</ul>
<p>
    Elle accepte également un objet d'options pour définir des comportements comme l'observation en profondeur (<code>deep</code>) ou le déclenchement immédiat (<code>immediate</code>).
</p>

<div class="example-box">
    <pre>
<span class="comment">// Exemple de base avec watch()</span>
<span class="keyword">import</span> { <span class="variable">ref</span>, <span class="variable">watch</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="comment">// Création d'une valeur réactive</span>
<span class="keyword">const</span> compteur = <span class="function">ref</span>(<span class="number">0</span>);

<span class="comment">// Utilisation de watch()</span>
<span class="function">watch</span>(
    compteur, 
    (<span class="variable">nouvelleValeur</span>, <span class="variable">ancienneValeur</span>) => {
        console.log(<span class="string">`Compteur changé de ${ancienneValeur} à ${nouvelleValeur}`</span>);
    }
);

<span class="comment">// Mise à jour de la valeur</span>
compteur.value++;
    </pre>
</div>

<h3><i class="fas fa-book"></i> Exemple pratique</h3>
<p>
    Voici un exemple où <code>watch()</code> est utilisé pour surveiller une recherche utilisateur et exécuter un appel API lorsque la valeur change :
</p>

<div class="example-box">
    <pre>
<span class="comment">// Exemple : Surveiller une recherche</span>
<span class="keyword">import</span> { <span class="variable">ref</span>, <span class="variable">watch</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="comment">// Création de données réactives</span>
<span class="keyword">const</span> recherche = <span class="function">ref</span>(<span class="string">''</span>);
<span class="keyword">const</span> resultats = <span class="function">ref</span>([]);

<span class="comment">// Surveiller les changements de recherche</span>
<span class="function">watch</span>(
    recherche, 
    <span class="keyword">async</span> (<span class="variable">nouvelleRecherche</span>) => {
        <span class="keyword">if</span> (nouvelleRecherche.length > <span class="number">3</span>) {
            <span class="comment">// Appel API</span>
            <span class="keyword">const</span> response = <span class="keyword">await</span> fetch(<span class="string">`https://api.example.com/search?q=${nouvelleRecherche}`</span>);
            resultats.value = <span class="keyword">await</span> response.json();
        }
    },
    { <span class="property">immediate</span>: <span class="keyword">true</span> } <span class="comment">// Lance dès la première exécution</span>
);
    </pre>
</div>

<h3><i class="fas fa-chart-line"></i> Options avancées</h3>
<p>
    La fonction <code>watch()</code> supporte plusieurs options qui permettent de personnaliser son comportement :
</p>
<div class="table-responsive">
<table class="table-style">
    <thead>
        <tr>
            <th>Option</th>
            <th>Description</th>
            <th>Valeurs possibles</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>deep</code></td>
            <td>Surveille profondément un objet ou tableau.</td>
            <td><code>true</code> ou <code>false</code></td>
        </tr>
        <tr>
            <td><code>immediate</code></td>
            <td>Exécute immédiatement après la création.</td>
            <td><code>true</code> ou <code>false</code></td>
        </tr>
    </tbody>
</table>
</div>
<h3><i class="fas fa-lightbulb"></i> Bonnes pratiques</h3>
<div class="highlight">
    <ul>
        <li>Utilisez <code>watch()</code> pour les effets secondaires et les actions asynchrones.</li>
        <li>Pour observer plusieurs dépendances, utilisez un tableau dans le premier argument : <code>watch([dépendance1, dépendance2], callback)</code>.</li>
        <li>Limitez l'usage de <code>deep</code> aux cas nécessaires pour éviter une surcharge de performance.</li>
        <li>Combinez avec des <code>composables</code> pour réutiliser la logique d'observation dans plusieurs composants.</li>
    </ul>
</div>
<h2 id="watch-effect-api"><i class="fas fa-sync-alt icon"></i> watchEffect()</h2>

<h3><i class="fas fa-info-circle"></i> Introduction</h3>
<p>
    La fonction <code>watchEffect()</code> est une autre méthode de surveillance dans la Composition API de Vue 3. Contrairement à <code>watch()</code>, elle ne nécessite pas d'arguments explicites pour spécifier les dépendances. 
    Les dépendances réactives utilisées dans le corps de la fonction sont automatiquement détectées, et l'effet est exécuté chaque fois qu'une dépendance change.
</p>
<p>
    Elle est utile pour :
</p>
<ul>
    <li>Exécuter des effets secondaires simples et immédiats.</li>
    <li>Éviter de spécifier manuellement les dépendances.</li>
    <li>Observer des changements complexes dans un état réactif.</li>
</ul>

<div class="highlight">
    <strong>À retenir :</strong>
    Utilisez <code>watchEffect()</code> pour des besoins simples où les dépendances peuvent être détectées automatiquement, et préférez <code>watch()</code> pour une personnalisation avancée.
</div>

<h3><i class="fas fa-code"></i> Syntaxe de base</h3>
<p>
    La fonction <code>watchEffect()</code> prend une fonction en argument. Cette fonction est exécutée immédiatement lors de l'enregistrement et chaque fois qu'une dépendance change.
</p>

<div class="example-box">
    <pre>
<span class="comment">// Exemple de base avec watchEffect()</span>
<span class="keyword">import</span> { <span class="variable">ref</span>, <span class="variable">watchEffect</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="comment">// Création de valeurs réactives</span>
<span class="keyword">const</span> compteur = <span class="function">ref</span>(<span class="number">0</span>);
<span class="keyword">const</span> double = <span class="function">ref</span>(<span class="number">0</span>);

<span class="comment">// Utilisation de watchEffect()</span>
<span class="function">watchEffect</span>(() => {
    double.value = compteur.value * <span class="number">2</span>;
    console.log(<span class="string">`Compteur: ${compteur.value}, Double: ${double.value}`</span>);
});

<span class="comment">// Mise à jour de la valeur</span>
compteur.value++;
    </pre>
</div>

<h3><i class="fas fa-book"></i> Exemple pratique</h3>
<p>
    Voici un exemple où <code>watchEffect()</code> est utilisé pour surveiller un état réactif et mettre à jour dynamiquement le DOM :
</p>

<div class="example-box">
    <pre>
<span class="comment">// Exemple : Mise à jour automatique</span>
<span class="keyword">import</span> { <span class="variable">ref</span>, <span class="variable">watchEffect</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="comment">// Création de données réactives</span>
<span class="keyword">const</span> message = <span class="function">ref</span>(<span class="string">'Bonjour Vue.js!'</span>);

<span class="comment">// Mise à jour automatique avec watchEffect()</span>
<span class="function">watchEffect</span>(() => {
    document.querySelector(<span class="string">'#output'</span>).textContent = message.value;
});

<span class="comment">// Changer la valeur après 2 secondes</span>
<span class="keyword">setTimeout</span>(() => {
    message.value = <span class="string">'Bonjour Composition API!'</span>;
}, <span class="number">2000</span>);
    </pre>
</div>

<h3><i class="fas fa-chart-line"></i> Comparaison avec watch()</h3>
<p>
    La principale différence entre <code>watch()</code> et <code>watchEffect()</code> réside dans la gestion des dépendances :
</p>
<div class="table-responsive">
<table class="table-style">
    <thead>
        <tr>
            <th>Caractéristique</th>
            <th><code>watch()</code></th>
            <th><code>watchEffect()</code></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Spécification des dépendances</td>
            <td>Manuelle</td>
            <td>Automatique</td>
        </tr>
        <tr>
            <td>Complexité</td>
            <td>Personnalisable et avancée</td>
            <td>Simple et rapide</td>
        </tr>
        <tr>
            <td>Effet initial</td>
            <td>Optionnel (<code>immediate</code>)</td>
            <td>Exécuté immédiatement</td>
        </tr>
    </tbody>
</table>
</div>
<h3><i class="fas fa-lightbulb"></i> Bonnes pratiques</h3>
<div class="highlight">
    <ul>
        <li>Utilisez <code>watchEffect()</code> pour des scénarios simples où les dépendances sont évidentes et non ambiguës.</li>
        <li>Évitez d’utiliser <code>watchEffect()</code> pour des effets coûteux ou asynchrones ; préférez <code>watch()</code> dans ces cas.</li>
        <li>Structurez les effets de manière à éviter des dépendances circulaires.</li>
        <li>Libérez les ressources avec des callbacks de nettoyage si nécessaire :</li>
    </ul>
</div>

<div class="example-box">
    <pre>
<span class="comment">// Exemple avec nettoyage</span>
<span class="function">watchEffect</span>((<span class="variable">onCleanup</span>) => {
    <span class="comment">// Établir un intervalle</span>
    <span class="keyword">const</span> interval = <span class="keyword">setInterval</span>(() => {
        console.log(<span class="string">"Effet actif"</span>);
    }, <span class="number">1000</span>);

    <span class="comment">// Nettoyer l'intervalle lors de la destruction</span>
    <span class="function">onCleanup</span>(() => {
        <span class="keyword">clearInterval</span>(interval);
    });
});
    </pre>
</div>
<h2 id="lifecycle-hooks"><i class="fas fa-history icon"></i> Hooks du Cycle de Vie</h2>

<h3><i class="fas fa-info-circle"></i> Introduction</h3>
<p>
    Les <strong>hooks de cycle de vie</strong> dans Vue 3 permettent de réagir à des événements spécifiques du cycle de vie d'un composant. 
    Cela inclut des étapes comme l'initialisation, le rendu, les mises à jour et la destruction. En utilisant la Composition API, les hooks offrent une manière 
    flexible et modulaire d'organiser la logique métier.
</p>
<p>
    Avec l'Options API, des méthodes comme <code>mounted</code> et <code>destroyed</code> étaient utilisées. Dans la Composition API, ces méthodes sont remplacées 
    par des fonctions spécifiques comme <code>onMounted</code> et <code>onUnmounted</code>.
</p>

<div class="highlight">
    <strong>Pourquoi sont-ils importants ?</strong>
    <ul>
        <li>Ils permettent de structurer proprement la logique en fonction des étapes du cycle de vie.</li>
        <li>Ils facilitent l'intégration avec des APIs, les timers, ou d'autres systèmes asynchrones.</li>
        <li>Ils améliorent la maintenabilité et la lisibilité du code dans des projets complexes.</li>
    </ul>
</div>

<h3><i class="fas fa-book"></i> Vue d'ensemble des Hooks</h3>
<p>
    Voici une liste complète des hooks de cycle de vie disponibles dans Vue 3 avec leurs moments d'exécution :
</p>
<div class="table-responsive">
<table class="table-style">
    <thead>
        <tr>
            <th>Hook</th>
            <th>Description</th>
            <th>Moment d'exécution</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>onBeforeMount</code></td>
            <td>Exécuté avant que le DOM soit monté pour la première fois.</td>
            <td>Avant le rendu initial.</td>
        </tr>
        <tr>
            <td><code>onMounted</code></td>
            <td>Exécuté une fois que le DOM est monté et accessible.</td>
            <td>Après le rendu initial.</td>
        </tr>
        <tr>
            <td><code>onBeforeUpdate</code></td>
            <td>Exécuté avant qu'une mise à jour du DOM ne soit effectuée.</td>
            <td>Avant chaque mise à jour réactive.</td>
        </tr>
        <tr>
            <td><code>onUpdated</code></td>
            <td>Exécuté après qu'une mise à jour du DOM ait été effectuée.</td>
            <td>Après chaque mise à jour réactive.</td>
        </tr>
        <tr>
            <td><code>onBeforeUnmount</code></td>
            <td>Exécuté juste avant que le composant soit détruit.</td>
            <td>Avant la destruction du composant.</td>
        </tr>
        <tr>
            <td><code>onUnmounted</code></td>
            <td>Exécuté après que le composant a été détruit.</td>
            <td>Après la destruction du composant.</td>
        </tr>
    </tbody>
</table>
</div>
<h3><i class="fas fa-code"></i> Exemple pratique</h3>
<p>
    Voici un exemple détaillé qui illustre comment utiliser différents hooks dans un composant Vue. Ce composant suit l'état réactif, effectue des actions au montage, 
    met à jour une variable au besoin, et nettoie les ressources à la destruction.
</p>

<div class="example-box">
    <pre>
<span class="comment">// Exemple complet avec hooks de cycle de vie</span>
import { defineComponent, ref, onMounted, onUpdated, onUnmounted } from 'vue';

<span class="keyword">export</span> <span class="keyword">default</span> defineComponent({
    setup() {
        <span class="comment">// Déclare une valeur réactive</span>
        <span class="keyword">const</span> compteur = <span class="function">ref</span>(<span class="number">0</span>);

        <span class="comment">// Hook exécuté après le montage</span>
        <span class="function">onMounted</span>(() => {
            <span class="function">console.log</span>(<span class="string">'Composant monté'</span>);
        });

        <span class="comment">// Hook exécuté après chaque mise à jour</span>
        <span class="function">onUpdated</span>(() => {
            <span class="function">console.log</span>(<span class="string">'Composant mis à jour'</span>);
        });

        <span class="comment">// Hook exécuté après la destruction</span>
        <span class="function">onUnmounted</span>(() => {
            <span class="function">console.log</span>(<span class="string">'Composant détruit'</span>);
        });

        <span class="comment">// Méthode pour incrémenter</span>
        <span class="keyword">const</span> incrementer = () => {
            compteur.value++;
        };

        <span class="keyword">return</span> {
            compteur,
            incrementer
        };
    },
    template: <span class="string">`
        &lt;div&gt;
            &lt;p&gt;Compteur : {{ compteur }}&lt;/p&gt;
            &lt;button @click="incrementer"&gt;Incrémenter&lt;/button&gt;
        &lt;/div&gt;
    `</span>
});
    </pre>
</div>

<h3><i class="fas fa-chart-line"></i> Pratiques courantes</h3>
<div class="highlight">
    <ul>
        <li>Utilisez <code>onMounted</code> pour effectuer des appels API initiaux ou configurer des abonnements.</li>
        <li>Utilisez <code>onUnmounted</code> pour nettoyer les timers, les écouteurs d'événements ou les abonnements.</li>
        <li>Combinez <code>onUpdated</code> avec des vérifications conditionnelles pour éviter des mises à jour inutiles.</li>
        <li>Structurez les hooks de manière logique et minimisez leur contenu en délégant la logique complexe à des fonctions externes.</li>
    </ul>
</div>

<h3><i class="fas fa-lightbulb"></i> Bonnes pratiques</h3>
<div class="highlight">
    <ul>
        <li>Évitez de surcharger les hooks comme <code>onMounted</code> : séparez les responsabilités en fonctions claires.</li>
        <li>Privilégiez l'utilisation des composables pour réutiliser la logique de cycle de vie entre plusieurs composants.</li>
        <li>Limitez l'utilisation de <code>onUpdated</code> si vous pouvez utiliser des watchers pour détecter des changements spécifiques.</li>
        <li>Documentez les hooks dans votre code pour indiquer leur rôle et les raisons de leur utilisation.</li>
    </ul>
</div>

<h3><i class="fas fa-trending-up"></i> Tendances actuelles</h3>
<p>
    Les hooks de cycle de vie gagnent en popularité dans Vue 3 grâce à leur flexibilité dans la Composition API. Voici quelques tendances actuelles :
</p>
<ul>
    <li>Utilisation croissante de <strong>composables personnalisés</strong> pour encapsuler des comportements complexes liés au cycle de vie.</li>
    <li>Intégration avec des frameworks modernes comme <strong>Vite</strong> pour améliorer les performances.</li>
    <li>Adoption accrue des tests unitaires pour vérifier le comportement des hooks dans différents scénarios.</li>
</ul>
<h2 id="last-composition-api"><i class="fas fa-plug icon"></i> Utilisation Avancée et Composables</h2>

<h3><i class="fas fa-info-circle"></i> Introduction</h3>
<p>
    La Composition API dans Vue 3 ne se limite pas aux fonctionnalités de base comme <code>setup()</code> ou <code>reactive()</code>. 
    Elle ouvre la voie à des <strong>pratiques avancées</strong> et à la création de <strong>composables personnalisés</strong>. Ces composables 
    permettent de réutiliser et d'organiser la logique dans des fonctions autonomes et modulaires, rendant le code plus propre, plus maintenable et plus testable.
</p>

<div class="highlight">
    <strong>Pourquoi les composables ?</strong>
    <ul>
        <li>Encapsulation de la logique métier pour la réutilisabilité.</li>
        <li>Séparation claire des préoccupations dans des projets complexes.</li>
        <li>Facilitation des tests unitaires et des maintenances futures.</li>
    </ul>
</div>

<h3><i class="fas fa-book"></i> Création d'un composable personnalisé</h3>
<p>
    Un <strong>composable</strong> est une fonction JavaScript qui utilise la Composition API pour encapsuler une logique spécifique. Voici un exemple 
    de composable permettant de gérer une valeur réactive et un timer.
</p>

<div class="example-box">
    <pre>
<span class="comment">// Composable personnalisé : useTimer</span>
<span class="keyword">import</span> { ref, onMounted, onUnmounted } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export</span> <span class="keyword">function</span> <span class="function">useTimer</span>() {
    <span class="comment">// Déclaration d'une valeur réactive</span>
    <span class="keyword">const</span> compteur = <span class="function">ref</span>(<span class="number">0</span>);
    <span class="keyword">let</span> intervalId = <span class="keyword">null</span>;

    <span class="comment">// Fonction de démarrage</span>
    <span class="keyword">const</span> startTimer = () => {
        intervalId = <span class="function">setInterval</span>(() => {
            compteur.value++;
        }, <span class="number">1000</span>);
    };

    <span class="comment">// Fonction d'arrêt</span>
    <span class="keyword">const</span> stopTimer = () => {
        <span class="function">clearInterval</span>(intervalId);
    };

    <span class="comment">// Gestion des hooks de cycle de vie</span>
    <span class="function">onMounted</span>(startTimer);
    <span class="function">onUnmounted</span>(stopTimer);

    <span class="comment">// Retourne les propriétés et méthodes</span>
    <span class="keyword">return</span> {
        compteur,
        startTimer,
        stopTimer
    };
}
    </pre>
</div>

<h3><i class="fas fa-code"></i> Utilisation dans un composant</h3>
<p>
    Une fois créé, le composable peut être utilisé dans n'importe quel composant. Voici comment l'utiliser pour afficher un compteur.
</p>

<div class="example-box">
    <pre>
<span class="comment">// Composant utilisant le composable</span>
<span class="keyword">import</span> { defineComponent } <span class="keyword">from</span> <span class="string">'vue'</span>;
<span class="keyword">import</span> { useTimer } <span class="keyword">from</span> <span class="string">'./composables/useTimer'</span>;

<span class="keyword">export</span> <span class="keyword">default</span> defineComponent({
    setup() {
        <span class="comment">// Utilisation du composable</span>
        <span class="keyword">const</span> { compteur, startTimer, stopTimer } = <span class="function">useTimer</span>();

        <span class="keyword">return</span> { compteur, startTimer, stopTimer };
    },
    template: <span class="string">`
        &lt;div&gt;
            &lt;p&gt;Compteur : {{ compteur }}&lt;/p&gt;
            &lt;button @click="startTimer"&gt;Démarrer&lt;/button&gt;
            &lt;button @click="stopTimer"&gt;Arrêter&lt;/button&gt;
        &lt;/div&gt;
    `</span>
});
    </pre>
</div>

<h3><i class="fas fa-chart-line"></i> Pratiques courantes</h3>
<div class="highlight">
    <ul>
        <li>Créez des composables pour des fonctionnalités réutilisables comme la gestion des formulaires, les appels API ou la gestion des événements.</li>
        <li>Documentez vos composables pour faciliter leur adoption par d'autres développeurs.</li>
        <li>Organisez vos composables dans un dossier dédié (<code>/src/composables</code>) pour une meilleure lisibilité.</li>
        <li>Combinez plusieurs composables pour des cas d'utilisation plus complexes.</li>
    </ul>
</div>

<h3><i class="fas fa-lightbulb"></i> Bonnes pratiques</h3>
<div class="highlight">
    <ul>
        <li>Utilisez des noms descriptifs pour vos composables, comme <code>useForm</code> ou <code>useFetch</code>.</li>
        <li>Évitez de surcharger un composable avec plusieurs responsabilités : appliquez le principe de <strong>responsabilité unique</strong>.</li>
        <li>Testez vos composables indépendamment pour garantir leur fiabilité.</li>
        <li>Réutilisez des APIs existantes comme <code>reactive()</code>, <code>ref()</code>, et <code>watch()</code> pour tirer parti de la réactivité native.</li>
    </ul>
</div>

<h3><i class="fas fa-trending-up"></i> Tendances actuelles</h3>
<p>
    Avec Vue 3, les composables personnalisés sont devenus un standard pour structurer les projets modernes. Voici quelques tendances émergentes :
</p>
<ul>
    <li><strong>Interopérabilité accrue</strong> : Les composables sont souvent partagés entre projets grâce à des packages npm.</li>
    <li><strong>Automatisation</strong> : Les outils comme <code>Volar</code> améliorent la productivité en suggérant des composables dans l'éditeur.</li>
    <li><strong>Composables communautaires</strong> : Des bibliothèques comme <code>VueUse</code> offrent des centaines de composables prêts à l'emploi.</li>
</ul>
<h2 id="example-project"><i class="fas fa-project-diagram icon"></i> Exemple de Projet</h2>

<h3><i class="fas fa-info-circle"></i> Introduction</h3>
<p>
    Créer un projet Vue 3 avec la Composition API permet de mieux comprendre comment structurer et organiser un projet moderne. 
    Dans cette section, nous allons développer une petite application de gestion de tâches pour illustrer l'utilisation des concepts clés de Vue 3, notamment les <code>composables</code>, la gestion du <code>state</code> avec Vuex, et le <code>router</code>.
</p>

<div class="highlight">
    <strong>Objectifs du projet :</strong>
    <ul>
        <li>Gérer une liste de tâches avec ajout, suppression et modification.</li>
        <li>Utiliser Vuex pour centraliser la gestion des données.</li>
        <li>Implémenter un système de navigation avec Vue Router.</li>
        <li>Suivre les bonnes pratiques modernes pour structurer le projet.</li>
    </ul>
</div>

<h3><i class="fas fa-folder-open"></i> Structure du projet</h3>
<p>
    Voici la structure des dossiers et fichiers pour notre projet :
</p>

<div class="example-box">
    <pre>
<span class="comment">// Structure des fichiers</span>
project/
|-- src/
|   |-- components/
|   |   |-- TaskList.vue
|   |   |-- TaskForm.vue
|   |-- composables/
|   |   |-- useTasks.js
|   |-- store/
|   |   |-- index.js
|   |-- views/
|   |   |-- Home.vue
|   |   |-- About.vue
|   |-- router/
|   |   |-- index.js
|   |-- App.vue
|   |-- main.js
    </pre>
</div>

<h3><i class="fas fa-code"></i> Exemple de Code</h3>

<h4><i class="fas fa-file"></i> Composable : useTasks.js</h4>
<p>
    Ce composable encapsule la logique liée à la gestion des tâches.
</p>

<div class="example-box">
    <pre>
<span class="comment">// src/composables/useTasks.js</span>
<span class="keyword">import</span> { ref } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export</span> <span class="keyword">function</span> useTasks() {
    <span class="keyword">const</span> tasks = ref([
        { id: <span class="number">1</span>, title: <span class="string">'Apprendre Vue 3'</span>, done: <span class="keyword">false</span> },
        { id: <span class="number">2</span>, title: <span class="string">'Créer une application de tâches'</span>, done: <span class="keyword">true</span> }
    ]);

    <span class="comment">// Ajouter une tâche</span>
    <span class="keyword">const</span> addTask = (task) => {
        tasks.value.push({
            id: tasks.value.length + <span class="number">1</span>,
            ...task
        });
    };

    <span class="comment">// Supprimer une tâche</span>
    <span class="keyword">const</span> deleteTask = (id) => {
        tasks.value = tasks.value.filter(task => task.id !== id);
    };

    <span class="keyword">return</span> { tasks, addTask, deleteTask };
}
    </pre>
</div>

<h4><i class="fas fa-file-alt"></i> Composant : TaskList.vue</h4>
<p>
    Le composant <code>TaskList.vue</code> affiche les tâches et propose des actions pour les gérer.
</p>

<div class="example-box">
    <pre>
<span class="comment">// src/components/TaskList.vue</span>
<span class="keyword">import</span> { defineComponent } <span class="keyword">from</span> <span class="string">'vue'</span>;
<span class="keyword">import</span> { useTasks } <span class="keyword">from</span> <span class="string">'@/composables/useTasks'</span>;

<span class="keyword">export</span> <span class="keyword">default</span> defineComponent({
    setup() {
        <span class="comment">// Utilisation du composable</span>
        <span class="keyword">const</span> { tasks, deleteTask } = <span class="function">useTasks</span>();

        <span class="keyword">return</span> { tasks, deleteTask };
    },
    template: <span class="string">`
        &lt;ul&gt;
            &lt;li v-for="task in tasks" :key="task.id"&gt;
                {{ task.title }}
                &lt;button @click="deleteTask(task.id)"&gt;Supprimer&lt;/button&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    `</span>
});
    </pre>
</div>

<h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
<div class="highlight">
    <ul>
        <li>Utilisez des composables pour encapsuler des logiques spécifiques.</li>
        <li>Structurez votre projet pour séparer les responsabilités (composants, store, router, etc.).</li>
        <li>Adoptez un style cohérent pour le code et la nomenclature des fichiers.</li>
        <li>Utilisez des bibliothèques de composants pour accélérer le développement (ex. : Vuetify, Element Plus).</li>
    </ul>
</div>

<h3><i class="fas fa-trending-up"></i> Tendances Actuelles</h3>
<p>
    Les tendances actuelles en développement Vue incluent :
</p>
<ul>
    <li><strong>Utilisation accrue de TypeScript</strong> pour améliorer la maintenabilité des projets.</li>
    <li><strong>Combinaison de Pinia avec Vuex</strong> pour une gestion plus flexible des états.</li>
    <li><strong>Prise en charge des micro-frontends</strong> grâce à des outils comme Module Federation.</li>
    <li><strong>Bibliothèques comme VueUse</strong> pour étendre les capacités des composables.</li>
</ul>
<h1 id="project-enhancements"><i class="fas fa-tools icon"></i> Améliorations pour le Projet Vue.js</h1>

<h2><i class="fas fa-lightbulb icon"></i> Introduction</h2>
<p>
    Une fois le projet de base fonctionnel, il est utile d'explorer des fonctionnalités plus avancées pour rendre l'application plus riche, robuste et adaptée à des cas d'utilisation réels. Cette section présente des pistes d'amélioration et des exemples concrets pour enrichir votre projet Vue.js.
</p>

<h2><i class="fas fa-database icon"></i> Ajout de la persistance des données</h2>
<p>
    Les données actuelles sont volatiles et disparaissent lorsque la page est actualisée. Pour conserver les tâches, nous pouvons utiliser :
</p>
<ul>
    <li><strong>LocalStorage :</strong> Pour une solution simple et rapide côté client.</li>
    <li><strong>API back-end :</strong> Pour une persistance côté serveur, idéale pour des projets plus complexes.</li>
</ul>

<div class="example-box">
    <pre>
<span class="comment">// Exemple d'utilisation de LocalStorage</span>
<span class="keyword">import</span> { ref, watch } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export default</span> <span class="function">function</span> <span class="function">useTasks</span>() {
    <span class="keyword">const</span> tasks = <span class="function">ref</span>(<span class="keyword">JSON</span>.parse(<span class="function">localStorage.getItem</span>(<span class="string">'tasks'</span>)) || []);

    <span class="comment">// Surveiller les modifications et mettre à jour le stockage</span>
    <span class="function">watch</span>(tasks, (<span class="variable">newTasks</span>) => {
        <span class="function">localStorage.setItem</span>(<span class="string">'tasks'</span>, <span class="keyword">JSON</span>.stringify(<span class="variable">newTasks</span>));
    }, { deep: <span class="keyword">true</span> });

    <span class="comment">// Ajout et suppression de tâches</span>
    <span class="keyword">const</span> addTask = (<span class="variable">task</span>) => tasks.value.push(task);
    <span class="keyword">const</span> removeTask = (<span class="variable">index</span>) => tasks.value.splice(index, 1);

    <span class="keyword">return</span> { tasks, addTask, removeTask };
}
    </pre>
</div>

<h3><i class="fas fa-server icon"></i> Intégration avec une API REST</h3>
<p>
    Utiliser <code>fetch</code> ou <code>axios</code> pour communiquer avec un serveur peut transformer votre projet en une véritable application web dynamique.
</p>

<div class="example-box">
    <pre>
<span class="comment">// Exemple avec Axios pour charger et envoyer des données</span>
<span class="keyword">import</span> axios <span class="keyword">from</span> <span class="string">'axios'</span>;
<span class="keyword">import</span> { ref, onMounted } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export default</span> <span class="function">function</span> <span class="function">useTasks</span>() {
    <span class="keyword">const</span> tasks = <span class="function">ref</span>([]);
    <span class="keyword">const</span> error = <span class="function">ref</span>(<span class="string">''</span>);

    <span class="comment">// Charger les tâches depuis une API</span>
    <span class="keyword">const</span> loadTasks = <span class="function">async</span> () => {
        <span class="keyword">try</span> {
            <span class="keyword">const</span> response = <span class="keyword">await</span> axios.get(<span class="string">'https://api.example.com/tasks'</span>);
            tasks.value = response.data;
        } <span class="keyword">catch</span> (e) {
            error.value = <span class="string">'Erreur lors du chargement des tâches.'</span>;
        }
    };

    <span class="comment">// Ajouter une nouvelle tâche</span>
    <span class="keyword">const</span> addTask = <span class="function">async</span> (<span class="variable">task</span>) => {
        <span class="keyword">try</span> {
            <span class="keyword">const</span> response = <span class="keyword">await</span> axios.post(<span class="string">'https://api.example.com/tasks'</span>, task);
            tasks.value.push(response.data);
        } <span class="keyword">catch</span> (e) {
            error.value = <span class="string">'Erreur lors de l\'ajout d\'une tâche.'</span>;
        }
    };

    <span class="function">onMounted</span>(loadTasks);

    <span class="keyword">return</span> { tasks, addTask, error };
}
    </pre>
</div>

<h2><i class="fas fa-filter icon"></i> Ajout de filtres</h2>
<p>
    Vous pouvez ajouter des filtres pour organiser et afficher les tâches en fonction de leur état (terminées, en cours, etc.).
</p>

<div class="example-box">
    <pre>
<span class="comment">// Exemple de filtre pour les tâches terminées</span>
<span class="keyword">import</span> { computed } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export default</span> <span class="function">function</span> <span class="function">useFilteredTasks</span>(<span class="variable">tasks</span>) {
    <span class="keyword">const</span> completedTasks = <span class="function">computed</span>(() => tasks.value.filter(task => task.completed));
    <span class="keyword">const</span> pendingTasks = <span class="function">computed</span>(() => tasks.value.filter(task => !task.completed));

    <span class="keyword">return</span> { completedTasks, pendingTasks };
}
    </pre>
</div>

<h2><i class="fas fa-paint-brush icon"></i> Amélioration du style</h2>
<p>
    Donnez un aspect professionnel à votre application en utilisant des bibliothèques comme <a href="https://tailwindcss.com/">Tailwind CSS</a> ou <a href="https://vuetifyjs.com/">Vuetify</a>.
</p>

<div class="example-box">
    <pre>
<span class="comment">// Exemple avec Tailwind CSS</span>
<span class="tag">&lt;div</span> class=<span class="string">"bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"</span>&gt;
    <span class="tag">&lt;h1</span> class=<span class="string">"text-2xl font-bold mb-4"</span>&gt;Tâches<span class="tag">&lt;/h1&gt;</span>
    <span class="tag">&lt;button</span> class=<span class="string">"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"</span>&gt;
        Ajouter une tâche
    <span class="tag">&lt;/button&gt;</span>
<span class="tag">&lt;/div&gt;</span>
    </pre>
</div>
<div class="sommaire-container">
    <h2><i class="fas fa-book"></i> Sommaire : Advanced Topics</h2>
    <ul class="dropdown-container">
        <li><a href="#suspense"><i class="fas fa-hourglass"></i> Suspense</a></li>
        <li><a href="#teleport"><i class="fas fa-location-arrow"></i> Teleport</a></li>
        <li><a href="#provide-inject"><i class="fas fa-hand-holding-heart"></i> Provide/Inject</a></li>
        <li><a href="#dynamic-imports"><i class="fas fa-download"></i> Dynamic Imports</a></li>
        <li><a href="#error-handling"><i class="fas fa-exclamation-triangle"></i> Error Handling</a></li>
    </ul>
</div>
<div id="advanced-topics-introduction">
    <h1><i class="fas fa-tools icon"></i> Vue.js : Advanced Topics</h1>
    <p>
        Ce chapitre explore les sujets avancés de Vue.js, conçus pour optimiser les performances, la modularité et la robustesse de vos applications. 
        Ces concepts vous permettent de gérer des cas d'utilisation complexes et de repousser les limites des possibilités offertes par Vue.js.
    </p>
    <p>
        Ces sujets incluent :
    </p>
    <ul>
        <li><strong>Suspense :</strong> Pour gérer les états asynchrones avec élégance.</li>
        <li><strong>Teleport :</strong> Pour rendre des éléments dans un DOM différent de celui de leur composant parent.</li>
        <li><strong>Provide/Inject :</strong> Pour partager des données entre composants sans passer par des props.</li>
        <li><strong>Dynamic Imports :</strong> Pour charger des composants ou modules de façon dynamique.</li>
        <li><strong>Error Handling :</strong> Pour mieux gérer les erreurs dans vos applications.</li>
    </ul>
    <div class="highlight">
        <strong>Objectif :</strong>
        Vous équiper des outils nécessaires pour gérer des scénarios avancés tout en gardant vos applications performantes, maintenables et faciles à déboguer.
    </div>
</div>
<div id="suspense">
    <h1><i class="fas fa-clock icon"></i> Vue.js : Suspense</h1>

    <h2><i class="fas fa-info-circle"></i> Introduction</h2>
    <p>
        <strong>Suspense</strong> est une fonctionnalité puissante introduite dans Vue 3 pour gérer les composants asynchrones avec élégance. 
        Elle permet de définir un état de "chargement" pendant que les données ou les ressources nécessaires à un composant sont en cours de traitement. 
        <strong>Suspense</strong> améliore l'expérience utilisateur en affichant un contenu provisoire, comme un indicateur de chargement, jusqu'à ce que tout soit prêt.
    </p>
    <p>
        Le concept de <code>Suspense</code> repose sur la promesse que les données ou les composants asynchrones se résoudront correctement. Cela simplifie la gestion d'états complexes et favorise une interface utilisateur fluide.
    </p>

    <h3><i class="fas fa-check-circle"></i> Points Clés</h3>
    <ul>
        <li>
            <code>Suspense</code> s'utilise comme un wrapper pour les composants asynchrones.
        </li>
        <li>
            Il permet de définir un fallback (contenu de repli) qui s'affiche pendant le chargement.
        </li>
        <li>
            Compatible avec les composants asynchrones et les données provenant de fonctions comme <code>setup()</code>.
        </li>
    </ul>

    <h2><i class="fas fa-book"></i> Fonctionnement de Suspense</h2>
    <p>
        Voici la structure de base pour utiliser <code>Suspense</code> :
    </p>

    <div class="example-box">
        <pre>
<span class="tag">&lt;template&gt;</span>
    <span class="tag">&lt;Suspense&gt;</span>
        <span class="tag">&lt;template #default&gt;</span>
            <span class="tag">&lt;MyAsyncComponent /&gt;</span>
        <span class="tag">&lt;/template&gt;</span>
        <span class="tag">&lt;template #fallback&gt;</span>
            <span class="tag">&lt;div&gt;</span>Chargement en cours...<span class="tag">&lt;/div&gt;</span>
        <span class="tag">&lt;/template&gt;</span>
    <span class="tag">&lt;/Suspense&gt;</span>
<span class="tag">&lt;/template&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-cog"></i> Exemple Simple</h3>
    <p>
        Voici un exemple pratique où un composant asynchrone est chargé avec <code>Suspense</code>.
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Composant principal</span>
<span class="keyword">import</span> { defineComponent } <span class="keyword">from</span> <span class="string">'vue'</span>;
<span class="keyword">import</span> MyAsyncComponent <span class="keyword">from</span> <span class="string">'./MyAsyncComponent.vue'</span>;

<span class="keyword">export default</span> defineComponent({
    components: {
        MyAsyncComponent
    }
});
        </pre>
    </div>

    <div class="example-box">
        <pre>
<span class="tag">&lt;template&gt;</span>
    <span class="tag">&lt;Suspense&gt;</span>
        <span class="tag">&lt;template #default&gt;</span>
            <span class="tag">&lt;MyAsyncComponent /&gt;</span>
        <span class="tag">&lt;/template&gt;</span>
        <span class="tag">&lt;template #fallback&gt;</span>
            <span class="tag">&lt;div&gt;</span>Chargement en cours...<span class="tag">&lt;/div&gt;</span>
        <span class="tag">&lt;/template&gt;</span>
    <span class="tag">&lt;/Suspense&gt;</span>
<span class="tag">&lt;/template&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-code"></i> Exemples Pratiques</h3>
    <p>
        <strong>Chargement d'une liste d'articles :</strong> Utilisation de <code>Suspense</code> pour afficher un loader pendant le chargement de données.
    </p>

    <div class="example-box">
        <pre>
<span class="comment">// MyAsyncComponent.vue</span>
<span class="keyword">import</span> { defineComponent, ref, <span class="function">onMounted</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export default</span> defineComponent({
    setup() {
        <span class="keyword">const</span> articles = ref([]);
        <span class="keyword">const</span> chargerArticles = <span class="function">async</span> () => {
            <span class="keyword">const</span> response = <span class="keyword">await</span> fetch(<span class="string">'https://api.example.com/articles'</span>);
            articles.value = <span class="keyword">await</span> response.json();
        };

        <span class="function">onMounted</span>(chargerArticles);

        <span class="keyword">return</span> { articles };
    },
    template: <span class="string">`
        &lt;ul&gt;
            &lt;li v-for="article in articles" :key="article.id"&gt;
                {{ article.title }}
            &lt;/li&gt;
        &lt;/ul&gt;
    `</span>
});
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul>
        <li>Fournir des messages de fallback clairs et informatifs pour une meilleure expérience utilisateur.</li>
        <li>Évitez de trop imbriquer les composants <code>Suspense</code>, cela peut compliquer la lisibilité.</li>
        <li>Utilisez <code>Suspense</code> uniquement pour des opérations réellement asynchrones.</li>
        <li>Combinez <code>Suspense</code> avec des loaders animés pour un meilleur rendu visuel.</li>
    </ul>

    <h3><i class="fas fa-chart-line"></i> Tendances Actuelles</h3>
    <p>
        Avec l'essor des applications frontend modernes, <strong>Suspense</strong> est de plus en plus utilisé pour gérer efficacement les états de chargement. Il est souvent combiné avec des frameworks comme <strong>Nuxt.js</strong> ou des bibliothèques de gestion de données comme <strong>GraphQL</strong> pour offrir des expériences utilisateur fluides.
    </p>
</div>
<div id="teleport">
    <h1><i class="fas fa-plane icon"></i> Vue.js : Teleport</h1>

    <h2><i class="fas fa-info-circle"></i> Introduction</h2>
    <p>
        Le composant <strong>Teleport</strong> introduit dans Vue 3 permet de rendre un élément ou un composant dans un endroit différent de l'arborescence DOM normale de votre application. Cela est particulièrement utile pour des éléments comme les modales, les notifications, ou tout autre contenu qui doit apparaître en dehors de son parent logique tout en conservant son comportement et ses données.
    </p>
    <p>
        Ce mécanisme est particulièrement utile lorsque vous avez besoin de placer un élément dans une section spécifique du DOM (comme une balise <code>&lt;body&gt;</code> ou un conteneur externe), sans modifier la structure de votre application.
    </p>

    <h3><i class="fas fa-check-circle"></i> Points Clés</h3>
    <ul>
        <li>Le composant <code>&lt;Teleport&gt;</code> permet de rendre son contenu dans un nœud DOM cible.</li>
        <li>Il est très utile pour des éléments nécessitant une position absolue comme les modales ou les overlays.</li>
        <li>Il conserve toutes les données et réactivités associées au composant téléporté.</li>
    </ul>

    <h2><i class="fas fa-book"></i> Fonctionnement de Teleport</h2>
    <p>
        Voici un exemple de base pour comprendre comment <code>&lt;Teleport&gt;</code> fonctionne :
    </p>

    <div class="example-box">
        <pre>
<span class="tag">&lt;template&gt;</span>
    <span class="tag">&lt;div&gt;</span>
        <span class="tag">&lt;h1&gt;</span>Bienvenue à Vue.js<span class="tag">&lt;/h1&gt;</span>
        <span class="tag">&lt;Teleport</span> to=<span class="string">'#teleport-target'</span><span class="tag">&gt;</span>
            <span class="tag">&lt;div&gt;</span>
                <span class="tag">&lt;h2&gt;</span>Contenu téléporté<span class="tag">&lt;/h2&gt;</span>
            <span class="tag">&lt;/div&gt;</span>
        <span class="tag">&lt;/Teleport&gt;</span>
    <span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/template&gt;</span>
        </pre>
    </div>

    <p>
        Pour que cet exemple fonctionne, un conteneur cible doit exister dans votre DOM :
    </p>

    <div class="example-box">
        <pre>
<span class="tag">&lt;div</span> id=<span class="string">'teleport-target'</span><span class="tag">&gt;&lt;/div&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-code"></i> Exemples Pratiques</h3>
    <p>
        Voici une utilisation typique de <code>&lt;Teleport&gt;</code> pour gérer une modale :
    </p>

    <div class="example-box">
        <pre>
<span class="tag">&lt;template&gt;</span>
    <span class="tag">&lt;div&gt;</span>
        <span class="tag">&lt;button</span> @click=<span class="string">'afficherModale = true'</span><span class="tag">&gt;</span>
            Ouvrir la modale<span class="tag">&lt;/button&gt;</span>
        <span class="tag">&lt;Teleport</span> to=<span class="string">'#modale-cible'</span><span class="tag">&gt;</span>
            <span class="tag">&lt;div</span> v-if=<span class="string">'afficherModale'</span> class=<span class="string">'modale'</span><span class="tag">&gt;</span>
                <span class="tag">&lt;h2&gt;</span>Modale Téléportée<span class="tag">&lt;/h2&gt;</span>
                <span class="tag">&lt;button</span> @click=<span class="string">'afficherModale = false'</span><span class="tag">&gt;</span>
                    Fermer<span class="tag">&lt;/button&gt;</span>
            <span class="tag">&lt;/div&gt;</span>
        <span class="tag">&lt;/Teleport&gt;</span>
    <span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/template&gt;</span>

<span class="keyword">import</span> { ref } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export default</span> {
    setup() {
        <span class="keyword">const</span> afficherModale = ref(<span class="keyword">false</span>);
        <span class="keyword">return</span> { afficherModale };
    }
};
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul>
        <li>Assurez-vous que le conteneur cible existe dans votre DOM avant de rendre le composant.</li>
        <li>Utilisez des noms d'ID descriptifs pour vos cibles pour éviter les conflits.</li>
        <li>Limitez l'utilisation de <code>&lt;Teleport&gt;</code> aux cas où cela est vraiment nécessaire.</li>
        <li>Fournissez des styles CSS spécifiques pour le contenu téléporté afin qu'il s'intègre bien dans le reste de l'application.</li>
    </ul>

    <h3><i class="fas fa-chart-line"></i> Tendances Actuelles</h3>
    <p>
        L'utilisation de <strong>Teleport</strong> est en croissance, en particulier dans les applications où des composants dynamiques comme les modales ou les notifications sont omniprésents. Avec les applications web modernes nécessitant des interactions riches, <code>Teleport</code> devient un outil indispensable pour gérer les éléments hors contexte sans sacrifier la réactivité ou l'organisation du code.
    </p>
</div>
<div id="provide-inject">
    <h1><i class="fas fa-share-alt icon"></i> Vue.js : Provide/Inject</h1>

    <h2><i class="fas fa-info-circle"></i> Introduction</h2>
    <p>
        Le système <strong>Provide/Inject</strong> de Vue permet de partager des données entre un composant parent et ses descendants, sans avoir à les passer explicitement par les <code>props</code> ou les événements. Cette fonctionnalité est particulièrement utile dans les projets complexes où les données doivent être accessibles par plusieurs composants profondément imbriqués.
    </p>
    <p>
        Avec <code>provide</code>, un composant parent peut mettre des données ou des méthodes à disposition de ses descendants. Ces derniers peuvent les consommer à l'aide de <code>inject</code>. Cela simplifie la gestion des dépendances dans l'arbre des composants.
    </p>

    <h3><i class="fas fa-check-circle"></i> Points Clés</h3>
    <ul>
        <li>Le <code>provide</code> est défini dans le parent pour partager des données ou des méthodes.</li>
        <li>Le <code>inject</code> est utilisé dans les descendants pour consommer ces données.</li>
        <li>Les données partagées restent réactives si elles sont définies avec <code>ref</code> ou <code>reactive</code>.</li>
    </ul>

    <h2><i class="fas fa-book"></i> Fonctionnement de Provide/Inject</h2>

    <div class="example-box">
        <pre>
<span class="comment">// Exemple avec provide/inject</span>
<span class="comment">// Parent.vue</span>
<span class="keyword">import</span> { <span class="property">defineComponent</span>, <span class="property">provide</span>, <span class="property">ref</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export default</span> <span class="function">defineComponent</span>({
    <span class="function">setup</span>() {
        <span class="comment">// Donnée partagée</span>
        <span class="keyword">const</span> theme = <span class="function">ref</span>(<span class="string">'dark'</span>);

        <span class="comment">// Fournir la donnée aux descendants</span>
        <span class="function">provide</span>(<span class="string">'theme'</span>, theme);

        <span class="keyword">return</span> { theme };
    },
    <span class="property">template</span>: <span class="string">`
        &lt;div&gt;
            &lt;p&gt;Thème actuel : {{ theme }}&lt;/p&gt;
            &lt;Child /&gt;
        &lt;/div&gt;
    `</span>
});
        </pre>
    </div>

    <div class="example-box">
        <pre>
<span class="comment">// Child.vue</span>
<span class="keyword">import</span> { <span class="property">defineComponent</span>, <span class="property">inject</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export default</span> <span class="function">defineComponent</span>({
    <span class="function">setup</span>() {
        <span class="comment">// Consommer la donnée injectée</span>
        <span class="keyword">const</span> theme = <span class="function">inject</span>(<span class="string">'theme'</span>, <span class="string">'light'</span>); <span class="comment">// Valeur par défaut : 'light'</span>

        <span class="keyword">return</span> { theme };
    },
    <span class="property">template</span>: <span class="string">`
        &lt;div&gt;
            &lt;p&gt;Thème injecté : {{ theme }}&lt;/p&gt;
        &lt;/div&gt;
    `</span>
});
        </pre>
    </div>

    <h3><i class="fas fa-code"></i> Exemple Pratique</h3>
    <p>
        Imaginez une application où un paramètre de configuration (comme un thème ou une langue) doit être utilisé dans plusieurs composants. Le système <code>provide/inject</code> est idéal pour ce cas d'utilisation.
    </p>

    <div class="example-box">
        <pre>
<span class="comment">// Exemple : Partage de configuration</span>
<span class="comment">// ConfigProvider.vue</span>
<span class="keyword">import</span> { <span class="property">defineComponent</span>, <span class="property">provide</span>, <span class="property">reactive</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export default</span> <span class="function">defineComponent</span>({
    <span class="function">setup</span>() {
        <span class="keyword">const</span> config = <span class="function">reactive</span>({
            theme: <span class="string">'dark'</span>,
            language: <span class="string">'fr'</span>
        });

        <span class="function">provide</span>(<span class="string">'config'</span>, config);

        <span class="keyword">return</span> { config };
    },
    <span class="property">template</span>: <span class="string">`
        &lt;div&gt;
            &lt;slot /&gt;
        &lt;/div&gt;
    `</span>
});
        </pre>
    </div>

    <div class="example-box">
        <pre>
<span class="comment">// ConfigConsumer.vue</span>
<span class="keyword">import</span> { <span class="property">defineComponent</span>, <span class="property">inject</span> } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">export default</span> <span class="function">defineComponent</span>({
    <span class="function">setup</span>() {
        <span class="keyword">const</span> config = <span class="function">inject</span>(<span class="string">'config'</span>);

        <span class="keyword">return</span> { config };
    },
    <span class="property">template</span>: <span class="string">`
        &lt;div&gt;
            &lt;p&gt;Thème : {{ config.theme }}&lt;/p&gt;
            &lt;p&gt;Langue : {{ config.language }}&lt;/p&gt;
        &lt;/div&gt;
    `</span>
});
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul>
        <li>Utilisez <code>provide/inject</code> pour des cas spécifiques comme les thèmes ou les configurations globales.</li>
        <li>Privilégiez les <code>props</code> et événements pour les données directement utilisées entre un parent et un enfant.</li>
        <li>Fournissez des valeurs par défaut dans <code>inject</code> pour éviter les erreurs en cas d'absence de <code>provide</code>.</li>
        <li>Regroupez les données injectées dans des objets structurés pour faciliter leur utilisation.</li>
    </ul>

    <h3><i class="fas fa-chart-line"></i> Tendances Actuelles</h3>
    <p>
        L'utilisation de <code>provide/inject</code> a gagné en popularité avec Vue 3, notamment dans le développement de bibliothèques de composants comme Vue Router ou Vuex. Cette approche offre une grande flexibilité pour gérer des dépendances complexes sans compromettre la maintenabilité du code.
    </p>
</div>
<div id="dynamic-imports">
    <h1><i class="fas fa-download icon"></i> Vue.js : Dynamic Imports</h1>

    <h2><i class="fas fa-info-circle"></i> Introduction</h2>
    <p>
        Les <strong>Dynamic Imports</strong> permettent de charger des modules JavaScript uniquement lorsque cela est nécessaire, au lieu de les inclure directement dans le bundle principal. Cela permet d'optimiser les performances des applications, notamment en réduisant le temps de chargement initial. En Vue.js, cette technique est couramment utilisée pour charger des composants dynamiquement ou en fonction des besoins spécifiques d'un utilisateur.
    </p>

    <h3><i class="fas fa-check-circle"></i> Points Clés</h3>
    <ul>
        <li>Les imports dynamiques sont une fonctionnalité native de JavaScript avec <code>import()</code>.</li>
        <li>Ils fonctionnent très bien avec des outils de bundling comme Webpack ou Vite.</li>
        <li>Ils permettent le code splitting, c’est-à-dire la séparation du code en plusieurs fichiers indépendants.</li>
        <li>Idéal pour les composants rarement utilisés ou conditionnels.</li>
    </ul>

    <h2><i class="fas fa-book"></i> Fonctionnement de Dynamic Imports</h2>

    <h3><i class="fas fa-code"></i> Exemple de Base</h3>
    <p>Voici comment utiliser un import dynamique pour charger un composant en fonction d'une condition.</p>

    <div class="example-box">
        <pre>
<span class="comment">// Import dynamique d'un composant</span>
<span class="keyword">const</span> MonComposant = () => <span class="function">import</span>(<span class="string">'./components/MonComposant.vue'</span>);

<span class="comment">// Utilisation dans Vue</span>
<span class="keyword">export default</span> {
    components: {
        MonComposant
    },
    template: <span class="string">`
        &lt;div&gt;
            &lt;MonComposant /&gt;
        &lt;/div&gt;
    `</span>
};
        </pre>
    </div>

    <h3><i class="fas fa-tools"></i> Exemple Pratique avec Vue Router</h3>
    <p>
        Les imports dynamiques sont particulièrement utiles avec Vue Router pour charger les composants des routes uniquement lorsqu'ils sont nécessaires.
    </p>

    <div class="example-box">
        <pre>
<span class="comment">// Définition de routes avec imports dynamiques</span>
<span class="keyword">import</span> { createRouter, createWebHistory } <span class="keyword">from</span> <span class="string">'vue-router'</span>;

<span class="keyword">const</span> routes = [
    {
        path: <span class="string">'/home'</span>,
        component: () => <span class="function">import</span>(<span class="string">'./views/HomeView.vue'</span>)
    },
    {
        path: <span class="string">'/about'</span>,
        component: () => <span class="function">import</span>(<span class="string">'./views/AboutView.vue'</span>)
    }
];

<span class="keyword">const</span> router = <span class="function">createRouter</span>({
    history: <span class="function">createWebHistory</span>(),
    routes
});

<span class="keyword">export default</span> router;
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul>
        <li>Utilisez des imports dynamiques pour les composants rarement utilisés (ex. : pages d’erreur, modales spécifiques).</li>
        <li>Organisez votre projet en modules ou features pour une meilleure maintenabilité.</li>
        <li>Préchargez (prefetch) les fichiers si vous savez qu’ils seront nécessaires prochainement pour améliorer l’expérience utilisateur.</li>
        <li>Testez régulièrement les bundles générés pour vous assurer qu’ils restent optimisés.</li>
    </ul>

    <h3><i class="fas fa-chart-line"></i> Tendances Actuelles</h3>
    <p>
        Avec l'essor des applications performantes, les imports dynamiques deviennent indispensables. Les outils modernes comme Vite ou Webpack 5 offrent des optimisations automatiques pour le code splitting. En outre, cette technique est de plus en plus utilisée pour les Progressive Web Apps (PWA) et les Single Page Applications (SPA) afin de minimiser le temps de chargement initial.
    </p>

    <h3><i class="fas fa-code"></i> Exemple Complet</h3>
    <p>
        Voici un exemple combiné montrant comment organiser un projet avec des imports dynamiques pour les routes et les composants.
    </p>

    <div class="example-box">
        <pre>
<span class="comment">// Configuration Vue Router avec imports dynamiques</span>
<span class="keyword">import</span> { createRouter, createWebHistory } <span class="keyword">from</span> <span class="string">'vue-router'</span>;

<span class="keyword">const</span> HomeView = () => <span class="function">import</span>(<span class="string">'./views/HomeView.vue'</span>);
<span class="keyword">const</span> AboutView = () => <span class="function">import</span>(<span class="string">'./views/AboutView.vue'</span>);
<span class="keyword">const</span> NotFound = () => <span class="function">import</span>(<span class="string">'./views/NotFound.vue'</span>);

<span class="keyword">const</span> routes = [
    { path: <span class="string">'/'</span>, component: HomeView },
    { path: <span class="string">'/about'</span>, component: AboutView },
    { path: <span class="string">'/:catchAll(.*)'</span>, component: NotFound }
];

<span class="keyword">const</span> router = <span class="function">createRouter</span>({
    history: <span class="function">createWebHistory</span>(),
    routes
});

<span class="keyword">export default</span> router;
        </pre>
    </div>
</div>
<div id="error-handling">
    <h1><i class="fas fa-exclamation-triangle icon"></i> Vue.js : Error Handling</h1>

    <h2><i class="fas fa-info-circle"></i> Introduction</h2>
    <p>
        La gestion des erreurs est une étape cruciale pour garantir la robustesse et la fiabilité des applications. Vue.js offre plusieurs outils pour intercepter, signaler et gérer les erreurs, que ce soit au niveau global ou local. Avec Vue 3, le système est encore amélioré grâce à des fonctionnalités comme <code>app.config.errorHandler</code> et les composants <strong>ErrorBoundary</strong>.
    </p>

    <h3><i class="fas fa-check-circle"></i> Points Clés</h3>
    <ul>
        <li>Capture des erreurs globales via <code>app.config.errorHandler</code>.</li>
        <li>Gestion locale des erreurs avec des blocs <code>try/catch</code>.</li>
        <li>Possibilité de capturer les erreurs dans un sous-arbre avec un composant <strong>ErrorBoundary</strong>.</li>
    </ul>

    <h2><i class="fas fa-book"></i> Gestion Globale des Erreurs</h2>
    <p>
        L'option <code>app.config.errorHandler</code> de Vue permet de centraliser la gestion des erreurs pour toute l'application. Elle intercepte les erreurs non capturées, qu'elles proviennent des composants, des hooks ou des erreurs asynchrones.
    </p>

    <div class="example-box">
        <pre>
<span class="comment">// Gestion globale des erreurs</span>
<span class="keyword">import</span> { createApp } <span class="keyword">from</span> <span class="string">'vue'</span>;

<span class="keyword">const</span> app = createApp({});

app.config.errorHandler = (<span class="variable">err</span>, <span class="variable">instance</span>, <span class="variable">info</span>) => {
    console.error(<span class="string">'Erreur capturée :'</span>, <span class="variable">err</span>);
    console.error(<span class="string">'Contexte :'</span>, <span class="variable">info</span>);
};

app.mount(<span class="string">'#app'</span>);
        </pre>
    </div>

    <h2><i class="fas fa-code"></i> Gestion Locale des Erreurs</h2>
    <p>
        Les erreurs spécifiques à un composant ou une logique métier peuvent être gérées localement en utilisant des blocs <code>try/catch</code>.
    </p>

    <div class="example-box">
        <pre>
<span class="comment">// Gestion locale avec try/catch</span>
<span class="keyword">export default</span> {
    <span class="property">methods</span>: {
        async <span class="function">chargerDonnees</span>() {
            <span class="keyword">try</span> {
                <span class="keyword">const</span> response = <span class="keyword">await</span> fetch(<span class="string">'/api/donnees'</span>);
                <span class="keyword">const</span> donnees = <span class="keyword">await</span> response.json();
                <span class="keyword">return</span> <span class="variable">donnees</span>;
            } <span class="keyword">catch</span> (<span class="variable">err</span>) {
                console.error(<span class="string">'Erreur lors du chargement :'</span>, <span class="variable">err</span>);
            }
        }
    }
};
        </pre>
    </div>

    <h2><i class="fas fa-tools"></i> Exemple Pratique avec un Composant ErrorBoundary</h2>
    <p>
        Un composant <strong>ErrorBoundary</strong> est utilisé pour capturer les erreurs dans une section spécifique de l'arbre des composants. Il permet de gérer des erreurs sans affecter le reste de l'application.
    </p>

    <div class="example-box">
        <pre>
<span class="comment">// ErrorBoundary.vue</span>
<span class="keyword">export default</span> {
    <span class="property">data</span>() {
        <span class="keyword">return</span> { <span class="property">erreur</span>: <span class="keyword">null</span> };
    },
    <span class="property">errorCaptured</span>(<span class="variable">err</span>, <span class="variable">instance</span>, <span class="variable">info</span>) {
        this.erreur = <span class="variable">err</span>;
        console.error(<span class="string">'Erreur capturée dans ErrorBoundary :'</span>, <span class="variable">err</span>);
        <span class="keyword">return</span> <span class="keyword">false</span>; <span class="comment">// Empêche la propagation</span>
    },
    template: <span class="string">`
        &lt;div&gt;
            &lt;slot v-if="!erreur" /&gt;
            &lt;p v-else&gt;Une erreur s'est produite : {{ erreur.message }}&lt;/p&gt;
        &lt;/div&gt;
    `</span>
};
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul>
        <li>Utilisez <code>app.config.errorHandler</code> pour capturer et centraliser les erreurs non gérées.</li>
        <li>Pour les composants critiques, implémentez un composant <strong>ErrorBoundary</strong>.</li>
        <li>Ajoutez des logs détaillés dans vos gestionnaires d'erreurs pour faciliter le débogage.</li>
        <li>Ne mélangez pas la logique métier et la gestion des erreurs : isolez cette dernière pour une meilleure lisibilité.</li>
    </ul>

    <h3><i class="fas fa-chart-line"></i> Tendances Actuelles</h3>
    <p>
        L'intégration d'outils tiers comme <a href="https://sentry.io/" target="_blank">Sentry</a> ou <a href="https://rollbar.com/" target="_blank">Rollbar</a> pour la gestion et le suivi des erreurs est de plus en plus courante. Ces outils offrent des tableaux de bord et des alertes en temps réel pour identifier rapidement les problèmes en production.
    </p>
</div>
<div class="sommaire-container">
    <h2><i class="fas fa-bars"></i> Sommaire</h2>
    <ul>
        <li><a href="#transition"><i class="fas fa-play"></i> transition</a></li>
        <li><a href="#transition-group"><i class="fas fa-layer-group"></i> transition-group</a></li>
        <li><a href="#animation-hooks"><i class="fas fa-code"></i> Animation Hooks</a></li>
    </ul>
</div>

<div id="transitions-and-animations">
    <h1><i class="fas fa-film icon"></i> Vue.js : Transitions et Animations</h1>

    <h2><i class="fas fa-info-circle icon"></i> Introduction</h2>
    <p>
        Les transitions et animations sont des éléments essentiels pour améliorer l'expérience utilisateur en rendant les interfaces plus dynamiques et intuitives. Vue.js offre un système puissant et flexible pour gérer les transitions des éléments DOM lors de leur apparition, disparition ou modification.
    </p>
    <p>
        Grâce aux composants intégrés comme <code>&lt;transition&gt;</code> et <code>&lt;transition-group&gt;</code>, vous pouvez facilement appliquer des classes CSS ou utiliser JavaScript pour créer des animations personnalisées. De plus, Vue.js propose des hooks pour contrôler les étapes du cycle d'animation, permettant une personnalisation avancée.
    </p>

    <h3><i class="fas fa-check-circle icon"></i> Points Clés</h3>
    <ul>
        <li>Le composant <code>&lt;transition&gt;</code> est utilisé pour animer un élément unique lors de son ajout ou de sa suppression du DOM.</li>
        <li>Le composant <code>&lt;transition-group&gt;</code> permet d'animer une liste d'éléments.</li>
        <li>Vue.js prend en charge les animations basées sur CSS, JavaScript et des bibliothèques tierces comme <a href="https://animejs.com/" target="_blank">Anime.js</a> ou <a href="https://greensock.com/gsap/" target="_blank">GSAP</a>.</li>
        <li>Les hooks d'animation offrent un contrôle précis sur le cycle de vie des transitions.</li>
    </ul>

    <h3><i class="fas fa-lightbulb icon"></i> Pourquoi utiliser les transitions et animations ?</h3>
    <ul>
        <li>Pour guider l'utilisateur à travers l'interface avec des effets visuels subtils.</li>
        <li>Pour rendre les changements d'état ou de contenu plus naturels et fluides.</li>
        <li>Pour attirer l'attention sur des éléments interactifs, comme des boutons ou des notifications.</li>
    </ul>
</div>
<div id="transition">
    <h1><i class="fas fa-play icon"></i> Vue.js : Transition</h1>

    <h2><i class="fas fa-info-circle"></i> Introduction</h2>
    <p>
        Dans Vue.js, le composant <code>&lt;transition&gt;</code> est utilisé pour appliquer des animations lors de l'entrée ou de la sortie d'un élément du DOM. Il simplifie l'ajout de classes CSS ou l'exécution d'animations JavaScript pour des transitions fluides et professionnelles.
    </p>
    <p>
        Grâce à <code>&lt;transition&gt;</code>, vous pouvez animer :
    </p>
    <ul>
        <li>L'apparition et la disparition des éléments conditionnels (<code>v-if</code>, <code>v-show</code>).</li>
        <li>Les modifications dynamiques des éléments dans le DOM.</li>
    </ul>

    <h3><i class="fas fa-code"></i> Syntaxe de Base</h3>
    <p>
        Voici un exemple simple montrant comment utiliser le composant <code>&lt;transition&gt;</code> avec des classes CSS pour animer l'ajout ou la suppression d'un élément :
    </p>

    <div class="example-box">
        <pre>
<span class="comment">// Exemple Vue.js avec transition CSS</span>
<span class="tag">&lt;template&gt;</span>
    <span class="tag">&lt;div&gt;</span>
        <span class="tag">&lt;button @click</span>=<span class="string">"visible = !visible"</span><span class="tag">&gt;</span>Toggle<span class="tag">&lt;/button&gt;</span>
        <span class="tag">&lt;transition name</span>=<span class="string">"fade"</span><span class="tag">&gt;</span>
            <span class="tag">&lt;p v-if</span>=<span class="string">"visible"</span><span class="tag">&gt;</span>Bonjour, Vue.js !<span class="tag">&lt;/p&gt;</span>
        <span class="tag">&lt;/transition&gt;</span>
    <span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/template&gt;</span>

<span class="tag">&lt;style&gt;</span>
.fade-enter-active, .fade-leave-active {
    <span class="property">transition</span>: opacity 0.5s;
}
.fade-enter, .fade-leave-to {
    <span class="property">opacity</span>: 0;
}
<span class="tag">&lt;/style&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-book"></i> Classes CSS Utilisées</h3>
    <div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>Classe</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>fade-enter</code></td>
                <td>Appliquée au début de l'animation d'entrée.</td>
            </tr>
            <tr>
                <td><code>fade-enter-active</code></td>
                <td>Active pendant toute la durée de l'animation d'entrée.</td>
            </tr>
            <tr>
                <td><code>fade-leave</code></td>
                <td>Appliquée au début de l'animation de sortie.</td>
            </tr>
            <tr>
                <td><code>fade-leave-active</code></td>
                <td>Active pendant toute la durée de l'animation de sortie.</td>
            </tr>
        </tbody>
    </table>
</div>
    <h3><i class="fas fa-code-branch"></i> Exemple Avancé : Transitions avec JavaScript</h3>
    <p>
        Vous pouvez combiner des transitions JavaScript pour un contrôle plus précis sur les animations :
    </p>

    <div class="example-box">
        <pre>
<span class="comment">// Transition avec hooks JavaScript</span>
<span class="tag">&lt;template&gt;</span>
    <span class="tag">&lt;div&gt;</span>
        <span class="tag">&lt;button @click</span>=<span class="string">"visible = !visible"</span><span class="tag">&gt;</span>Toggle<span class="tag">&lt;/button&gt;</span>
        <span class="tag">&lt;transition</span> @before-enter=<span class="string">"beforeEnter"</span> @enter=<span class="string">"enter"</span> @leave=<span class="string">"leave"</span><span class="tag">&gt;</span>
            <span class="tag">&lt;div v-if</span>=<span class="string">"visible"</span><span class="tag">&gt;</span>Contenu avec animation JavaScript<span class="tag">&lt;/div&gt;</span>
        <span class="tag">&lt;/transition&gt;</span>
    <span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/template&gt;</span>

<span class="tag">&lt;script&gt;</span>
export default {
    data() {
        <span class="keyword">return</span> {
            visible: <span class="keyword">false</span>
        };
    },
    methods: {
        beforeEnter(el) {
            el.style.opacity = <span class="number">0</span>;
        },
        enter(el, done) {
            <span class="function">setTimeout</span>(() => {
                el.style.opacity = <span class="number">1</span>;
                done();
            }, <span class="number">500</span>);
        },
        leave(el, done) {
            el.style.opacity = <span class="number">0</span>;
            <span class="function">setTimeout</span>(done, <span class="number">500</span>);
        }
    }
};
<span class="tag">&lt;/script&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul>
        <li>Utilisez des classes descriptives pour identifier clairement les transitions (par ex. <code>fade</code>, <code>slide</code>).</li>
        <li>Testez vos animations pour garantir des performances fluides, même sur des appareils moins puissants.</li>
        <li>Privilégiez CSS pour les animations simples et JavaScript pour les transitions complexes ou dépendantes de calculs dynamiques.</li>
    </ul>

    <h3><i class="fas fa-chart-line"></i> Tendances Actuelles</h3>
    <p>
        Les transitions et animations sont de plus en plus utilisées pour améliorer l'expérience utilisateur. Les tendances actuelles incluent :
    </p>
    <ul>
        <li>L'utilisation de bibliothèques comme <a href="https://greensock.com/gsap/" target="_blank">GSAP</a> pour des animations avancées.</li>
        <li>La mise en œuvre d'effets d'apparition en défilement avec des outils comme <a href="https://michalsnik.github.io/aos/" target="_blank">AOS (Animate On Scroll)</a>.</li>
        <li>La conception d'animations micro-interactives pour des retours visuels rapides et fluides.</li>
    </ul>
</div>
<div id="transition-group">
    <h1><i class="fas fa-layer-group icon"></i> Vue.js : Transition-Group</h1>

    <h2><i class="fas fa-info-circle"></i> Introduction</h2>
    <p>
        Le composant <code>&lt;transition-group&gt;</code> permet d'ajouter des animations aux listes d'éléments dynamiques dans Vue.js. Contrairement au composant <code>&lt;transition&gt;</code>, il est conçu pour gérer plusieurs éléments avec des entrées, des sorties et des réordonnancements animés.
    </p>
    <p>
        Les animations avec <code>&lt;transition-group&gt;</code> fonctionnent en appliquant des classes CSS ou des hooks JavaScript à chaque élément de la liste lorsqu'il entre, quitte ou change de position.
    </p>

    <h3><i class="fas fa-check-circle"></i> Points Clés</h3>
    <ul>
        <li>Utilisez <code>v-for</code> pour générer dynamiquement les éléments à l'intérieur de <code>&lt;transition-group&gt;</code>.</li>
        <li>Ajoutez l'attribut <code>tag</code> pour spécifier le conteneur HTML du groupe (par défaut <code>&lt;span&gt;</code>).</li>
        <li>Chaque élément doit avoir une clé unique (<code>key</code>) pour permettre un suivi précis des modifications.</li>
    </ul>

    <h2><i class="fas fa-code"></i> Exemple de Base</h2>
    <p>
        Voici un exemple simple utilisant <code>&lt;transition-group&gt;</code> pour animer l'ajout et la suppression d'éléments dans une liste :
    </p>

    <div class="example-box">
        <pre>
<span class="comment">// Composant avec transition-group</span>
<span class="tag">&lt;template&gt;</span>
    <span class="tag">&lt;div&gt;</span>
        <span class="tag">&lt;button @click</span>=<span class="string">"ajouterItem"</span><span class="tag">&gt;</span>Ajouter un élément<span class="tag">&lt;/button&gt;</span>
        <span class="tag">&lt;transition-group name</span>=<span class="string">"list"</span> tag=<span class="string">"ul"</span><span class="tag">&gt;</span>
            <span class="tag">&lt;li v-for</span>=<span class="string">"(item, index) in items"</span> :key=<span class="string">"index"</span><span class="tag">&gt;</span>
                {{ item }}
            <span class="tag">&lt;/li&gt;</span>
        <span class="tag">&lt;/transition-group&gt;</span>
    <span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/template&gt;</span>

<span class="tag">&lt;script&gt;</span>
export default {
    data() {
        <span class="keyword">return</span> {
            items: [<span class="string">'Item 1'</span>, <span class="string">'Item 2'</span>, <span class="string">'Item 3'</span>]
        };
    },
    methods: {
        ajouterItem() {
            this.items.push(<span class="string">'Nouvel élément'</span>);
        }
    }
};
<span class="tag">&lt;/script&gt;</span>

<span class="tag">&lt;style&gt;</span>
.list-enter-active, .list-leave-active {
    <span class="property">transition</span>: all 0.5s;
}
.list-enter, .list-leave-to {
    <span class="property">opacity</span>: 0;
    <span class="property">transform</span>: translateY(<span class="number">20px</span>);
}
<span class="tag">&lt;/style&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-code-branch"></i> Exemple Avancé : Réordonnancement Animé</h3>
    <p>
        Le composant <code>&lt;transition-group&gt;</code> permet également de gérer les réordonnancements d'éléments. Voici un exemple où des éléments sont déplacés dans la liste :
    </p>

    <div class="example-box">
        <pre>
<span class="comment">// Exemple avec réordonnancement</span>
<span class="tag">&lt;template&gt;</span>
    <span class="tag">&lt;div&gt;</span>
        <span class="tag">&lt;button @click</span>=<span class="string">"mélanger"</span><span class="tag">&gt;</span>Mélanger<span class="tag">&lt;/button&gt;</span>
        <span class="tag">&lt;transition-group name</span>=<span class="string">"shuffle"</span> tag=<span class="string">"ul"</span><span class="tag">&gt;</span>
            <span class="tag">&lt;li v-for</span>=<span class="string">"(item, index) in items"</span> :key=<span class="string">"item"</span><span class="tag">&gt;</span>
                {{ item }}
            <span class="tag">&lt;/li&gt;</span>
        <span class="tag">&lt;/transition-group&gt;</span>
    <span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/template&gt;</span>

<span class="tag">&lt;script&gt;</span>
export default {
    data() {
        <span class="keyword">return</span> {
            items: [<span class="string">'A'</span>, <span class="string">'B'</span>, <span class="string">'C'</span>, <span class="string">'D'</span>]
        };
    },
    methods: {
        mélanger() {
            this.items = this.items.sort(() => Math.random() - <span class="number">0.5</span>);
        }
    }
};
<span class="tag">&lt;/script&gt;</span>

<span class="tag">&lt;style&gt;</span>
.shuffle-enter-active, .shuffle-leave-active {
    <span class="property">transition</span>: all 0.5s;
}
.shuffle-enter, .shuffle-leave-to {
    <span class="property">opacity</span>: 0;
    <span class="property">transform</span>: translateY(<span class="number">20px</span>);
}
<span class="tag">&lt;/style&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul>
        <li>Utilisez des clés (<code>key</code>) uniques pour chaque élément afin de garantir des animations précises.</li>
        <li>Privilégiez l'utilisation des animations CSS pour des transitions simples, en raison de leur performance.</li>
        <li>Testez vos transitions sur des appareils moins puissants pour garantir une fluidité optimale.</li>
        <li>Utilisez des animations JavaScript pour des comportements plus complexes.</li>
    </ul>

    <h3><i class="fas fa-chart-line"></i> Tendances Actuelles</h3>
    <p>
        L'animation de listes dynamiques est devenue essentielle pour améliorer l'expérience utilisateur. Les tendances actuelles incluent :
    </p>
    <ul>
        <li>L'utilisation de bibliothèques comme <a href="https://greensock.com/gsap/" target="_blank">GSAP</a> pour des animations plus complexes.</li>
        <li>L'intégration avec des outils de design interactif pour des transitions innovantes.</li>
        <li>L'accent sur l'accessibilité, en veillant à ce que les animations n'entravent pas les utilisateurs souffrant de troubles visuels ou cognitifs.</li>
    </ul>
</div>
<div id="animation-hooks">
    <h1><i class="fas fa-anchor icon"></i> Vue.js : Animation Hooks</h1>

    <h2><i class="fas fa-info-circle"></i> Introduction</h2>
    <p>
        Les <strong>hooks d'animation</strong> permettent d'exécuter du code JavaScript pendant différentes étapes d'une transition ou animation, offrant ainsi un contrôle précis sur le comportement des animations. Ces hooks sont utiles pour déclencher des actions spécifiques en fonction du cycle de vie de l'animation, comme démarrer une requête ou appliquer des transformations complexes.
    </p>
    <p>
        Avec Vue.js, les hooks d'animation sont disponibles à la fois dans les composants <code>&lt;transition&gt;</code> et <code>&lt;transition-group&gt;</code>. Ils offrent une grande flexibilité pour personnaliser les comportements lors des entrées, sorties et transitions d'éléments.
    </p>

    <h3><i class="fas fa-check-circle"></i> Points Clés</h3>
    <ul>
        <li>Les hooks permettent d'intégrer des animations JavaScript complexes.</li>
        <li>Ils fournissent un contrôle précis sur chaque phase de l'animation.</li>
        <li>Idéal pour synchroniser des animations avec des événements externes ou des états dynamiques.</li>
    </ul>

    <h2><i class="fas fa-book"></i> Les Hooks Disponibles</h2>
    <div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>Hook</th>
                <th>Description</th>
                <th>Arguments</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>before-enter</code></td>
                <td>Appelé avant qu'un élément commence à entrer.</td>
                <td>Élément cible</td>
            </tr>
            <tr>
                <td><code>enter</code></td>
                <td>Appelé lorsque l'élément commence à entrer.</td>
                <td>Élément cible, fonction <code>done</code></td>
            </tr>
            <tr>
                <td><code>after-enter</code></td>
                <td>Appelé une fois que l'entrée est terminée.</td>
                <td>Élément cible</td>
            </tr>
            <tr>
                <td><code>enter-cancelled</code></td>
                <td>Appelé si l'entrée est annulée.</td>
                <td>Élément cible</td>
            </tr>
            <tr>
                <td><code>before-leave</code></td>
                <td>Appelé avant qu'un élément commence à quitter.</td>
                <td>Élément cible</td>
            </tr>
            <tr>
                <td><code>leave</code></td>
                <td>Appelé lorsque l'élément commence à quitter.</td>
                <td>Élément cible, fonction <code>done</code></td>
            </tr>
            <tr>
                <td><code>after-leave</code></td>
                <td>Appelé une fois que la sortie est terminée.</td>
                <td>Élément cible</td>
            </tr>
            <tr>
                <td><code>leave-cancelled</code></td>
                <td>Appelé si la sortie est annulée.</td>
                <td>Élément cible</td>
            </tr>
        </tbody>
    </table>
</div>
    <h3><i class="fas fa-code"></i> Exemple Pratique avec Hooks</h3>
    <p>
        Dans cet exemple, les hooks sont utilisés pour exécuter des actions personnalisées à chaque étape de l'animation d'un élément.
    </p>

    <div class="example-box">
        <pre>
<span class="comment">// Exemple avec hooks d'animation</span>
<span class="tag">&lt;template&gt;</span>
    <span class="tag">&lt;div&gt;</span>
        <span class="tag">&lt;button @click</span>=<span class="string">"toggle"</span><span class="tag">&gt;</span>Afficher/Masquer<span class="tag">&lt;/button&gt;</span>
        <span class="tag">&lt;transition</span>
            @before-enter=<span class="string">"avantEntrée"</span>
            @enter=<span class="string">"entrée"</span>
            @after-enter=<span class="string">"aprèsEntrée"</span>
            @before-leave=<span class="string">"avantSortie"</span>
            @leave=<span class="string">"sortie"</span>
            @after-leave=<span class="string">"aprèsSortie"</span><span class="tag">&gt;</span>
            <span class="tag">&lt;p v-if</span>=<span class="string">"visible"</span><span class="tag">&gt;</span>Contenu animé<span class="tag">&lt;/p&gt;</span>
        <span class="tag">&lt;/transition&gt;</span>
    <span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/template&gt;</span>

<span class="tag">&lt;script&gt;</span>
export default {
    data() {
        <span class="keyword">return</span> {
            visible: <span class="keyword">false</span>
        };
    },
    methods: {
        toggle() {
            this.visible = !this.visible;
        },
        avantEntrée(el) {
            console.log('<span class="string">Avant Entrée</span>', el);
        },
        entrée(el, done) {
            console.log('<span class="string">Entrée</span>', el);
            setTimeout(done, <span class="number">1000</span>);
        },
        aprèsEntrée(el) {
            console.log('<span class="string">Après Entrée</span>', el);
        },
        avantSortie(el) {
            console.log('<span class="string">Avant Sortie</span>', el);
        },
        sortie(el, done) {
            console.log('<span class="string">Sortie</span>', el);
            setTimeout(done, <span class="number">1000</span>);
        },
        aprèsSortie(el) {
            console.log('<span class="string">Après Sortie</span>', el);
        }
    }
};
<span class="tag">&lt;/script&gt;</span>

<span class="tag">&lt;style&gt;</span>
.p {
    <span class="property">transition</span>: opacity <span class="number">1s</span>;
    <span class="property">opacity</span>: <span class="number">1</span>;
}
.p-leave-active {
    <span class="property">opacity</span>: <span class="number">0</span>;
}
<span class="tag">&lt;/style&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul>
        <li>Utilisez les hooks d'animation pour synchroniser des tâches asynchrones ou des événements externes avec vos animations.</li>
        <li>Gérez les animations longues avec une fonction <code>done</code> pour éviter les conflits de timing.</li>
        <li>Testez les performances des animations JavaScript pour garantir leur fluidité sur tous les appareils.</li>
        <li>Préférez les animations CSS pour des transitions simples et performantes.</li>
    </ul>

    <h3><i class="fas fa-chart-line"></i> Tendances Actuelles</h3>
    <p>
        Les hooks d'animation sont largement utilisés dans les applications modernes pour :
    </p>
    <ul>
        <li>Synchroniser des animations avec des API ou des sockets Web.</li>
        <li>Créer des expériences utilisateur immersives dans les applications interactives.</li>
        <li>Améliorer l'accessibilité en combinant animations et annonces ARIA.</li>
    </ul>
</div>
<div class="sommaire-container">
    <h2><i class="fas fa-book icon"></i> Sommaire : Server-Side Rendering</h2>
    <ul>
        <li><a href="#ssr-overview">SSR Overview</a></li>
        <li><a href="#nuxt">Nuxt.js</a></li>
    </ul>
</div>
<div id="server-side-rendering">
    <h1><i class="fas fa-server icon"></i> Server-Side Rendering (SSR)</h1>

    <h2><i class="fas fa-info-circle icon"></i> Introduction</h2>
    <p>
        Le <strong>Server-Side Rendering</strong> (SSR) est une technique qui permet de générer le HTML d'une application côté serveur, puis de l'envoyer au client pour affichage. Contrairement au rendu côté client (Client-Side Rendering), où le contenu est généré directement dans le navigateur, le SSR offre des avantages en termes de performance, d'optimisation pour les moteurs de recherche (SEO) et d'expérience utilisateur.
    </p>
    <p>
        En Vue.js, le SSR est pris en charge via des outils comme <strong>Vue Server Renderer</strong> ou des frameworks avancés tels que <strong>Nuxt.js</strong>, qui simplifient la configuration et offrent des fonctionnalités supplémentaires.
    </p>

    <h3><i class="fas fa-check-circle icon"></i> Points Clés du SSR</h3>
    <ul>
        <li><strong>Rapidité de rendu :</strong> Le contenu est visible plus rapidement, car il est pré-rendu côté serveur.</li>
        <li><strong>SEO amélioré :</strong> Les moteurs de recherche peuvent facilement indexer le contenu statique généré.</li>
        <li><strong>Interactivité :</strong> Une fois chargé dans le navigateur, le contenu statique devient interactif grâce à la réhydratation.</li>
        <li><strong>Coût serveur :</strong> Générer du HTML côté serveur peut augmenter la charge du serveur pour des applications très dynamiques.</li>
    </ul>

    <div class="highlight">
        <strong>Pourquoi utiliser SSR ?</strong>
        <ul>
            <li>Améliorer le temps de chargement initial.</li>
            <li>Optimiser les performances SEO.</li>
            <li>Offrir une meilleure expérience utilisateur, notamment sur les connexions lentes.</li>
        </ul>
    </div>
</div>
<div id="ssr-overview">
    <h1><i class="fas fa-info-circle icon"></i> SSR Overview</h1>

    <h2><i class="fas fa-book icon"></i> Introduction au Server-Side Rendering</h2>
    <p>
        Le <strong>Server-Side Rendering (SSR)</strong> consiste à générer du HTML complet côté serveur, prêt à être envoyé au navigateur client. Cette technique est particulièrement efficace pour améliorer la rapidité d'affichage des pages et l'optimisation pour les moteurs de recherche (<strong>SEO</strong>).
    </p>
    <p>
        Dans Vue.js, SSR est rendu possible grâce à des outils intégrés comme <code>vue-server-renderer</code>. En utilisant SSR, le serveur génère une version HTML de votre application qui est immédiatement affichée dans le navigateur. Une fois chargée, Vue "hydrate" le HTML généré, activant les fonctionnalités dynamiques du framework.
    </p>

    <h3><i class="fas fa-check-circle icon"></i> Fonctionnement du SSR</h3>
    <ul>
        <li>
            <strong>Rendu côté serveur :</strong> Le serveur génère un HTML statique basé sur les données et le code de l'application.
        </li>
        <li>
            <strong>Réhydratation :</strong> Une fois le HTML livré au client, Vue.js active l'application en liant le DOM existant au comportement interactif de Vue.
        </li>
    </ul>

    <h3><i class="fas fa-chart-bar icon"></i> Comparaison : SSR vs CSR</h3>
    <div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>Aspect</th>
                <th>SSR (Server-Side Rendering)</th>
                <th>CSR (Client-Side Rendering)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Temps de chargement initial</strong></td>
                <td>Rapide (HTML généré côté serveur)</td>
                <td>Plus lent (JS doit être téléchargé et exécuté)</td>
            </tr>
            <tr>
                <td><strong>SEO</strong></td>
                <td>Très bon (HTML complet disponible pour les crawlers)</td>
                <td>Mauvais (contenu généré via JS)</td>
            </tr>
            <tr>
                <td><strong>Charge serveur</strong></td>
                <td>Plus élevée (rendu côté serveur)</td>
                <td>Moins élevée</td>
            </tr>
            <tr>
                <td><strong>Complexité</strong></td>
                <td>Configuration avancée requise</td>
                <td>Simplifiée</td>
            </tr>
        </tbody>
    </table>
</div>
    <h2><i class="fas fa-code icon"></i> Exemple basique de SSR avec Vue</h2>
    <p>
        Voici un exemple de configuration SSR avec Vue.js en utilisant le package <code>vue-server-renderer</code>.
    </p>

    <div class="example-box">
        <pre>
<span class="comment">// Installez le package vue-server-renderer</span>
npm install vue vue-server-renderer
        </pre>
    </div>

    <div class="example-box">
        <pre>
<span class="comment">// server.js : Script de rendu côté serveur</span>
<span class="keyword">const</span> Vue = require('vue');
<span class="keyword">const</span> renderer = require('vue-server-renderer').createRenderer();

<span class="comment">// Créez une instance Vue</span>
<span class="keyword">const</span> app = <span class="keyword">new</span> Vue({
    data: {
        message: <span class="string">'Bonjour SSR!'</span>
    },
    template: <span class="string">`&lt;div&gt;{{ message }}&lt;/div&gt;`</span>
});

<span class="comment">// Génération HTML côté serveur</span>
renderer.renderToString(app, (err, html) => {
    <span class="keyword">if</span> (err) {
        console.error(err);
        <span class="keyword">return</span>;
    }
    console.log(html); <span class="comment">// Affiche le HTML complet</span>
});
        </pre>
    </div>

    <h2><i class="fas fa-lightbulb icon"></i> Bonnes pratiques</h2>
    <ul>
        <li>
            Utilisez SSR pour les applications nécessitant un bon SEO, comme les blogs ou les e-commerces.
        </li>
        <li>
            Combinez SSR avec la réhydratation pour maintenir l'interactivité de l'application côté client.
        </li>
        <li>
            Optimisez les performances serveur en mettant en cache le HTML généré pour des pages peu dynamiques.
        </li>
        <li>
            Choisissez des frameworks comme <strong>Nuxt.js</strong> pour simplifier la mise en œuvre du SSR dans Vue.
        </li>
    </ul>

    <h2><i class="fas fa-chart-line icon"></i> Tendances actuelles</h2>
    <p>
        Le SSR est de plus en plus utilisé pour offrir des expériences utilisateur rapides tout en conservant un bon référencement. Avec la montée en popularité des Progressive Web Apps (PWA), les solutions SSR comme <strong>Nuxt.js</strong> et <strong>Next.js</strong> jouent un rôle crucial dans la performance des applications web modernes.
    </p>
</div>
<div id="nuxt">
    <h1><i class="fas fa-layer-group icon"></i> Nuxt.js</h1>

    <h2><i class="fas fa-info-circle icon"></i> Introduction</h2>
    <p>
        <strong>Nuxt.js</strong> est un framework basé sur Vue.js qui simplifie le développement d'applications web modernes grâce à une structure prédéfinie et des fonctionnalités intégrées. Il est conçu pour prendre en charge le <strong>Server-Side Rendering (SSR)</strong>, le <strong>Static Site Generation (SSG)</strong>, et les applications monopages (SPA).
    </p>
    <p>
        En utilisant Nuxt.js, les développeurs peuvent créer des applications performantes, optimisées pour le SEO et offrant une expérience utilisateur fluide. Avec sa configuration simplifiée et ses conventions, Nuxt.js permet de gagner du temps tout en maintenant une structure de projet claire.
    </p>

    <h3><i class="fas fa-check-circle icon"></i> Points Clés</h3>
    <ul>
        <li>
            Prise en charge native de SSR et SSG pour des performances optimales et un meilleur SEO.
        </li>
        <li>
            Structure modulaire basée sur des fichiers, ce qui facilite l'organisation du code.
        </li>
        <li>
            Outils intégrés comme Nuxt CLI, un système de plugins, et la gestion automatique des routes.
        </li>
    </ul>

    <h2><i class="fas fa-book icon"></i> Installation et Configuration</h2>
    <p>
        Pour commencer avec Nuxt.js, suivez ces étapes :
    </p>

    <div class="example-box">
        <pre>
<span class="comment">// Installez Nuxt.js avec npm ou yarn</span>
npm create nuxt-app my-nuxt-app
        </pre>
    </div>

    <p>Cette commande vous guidera à travers une série de questions pour configurer votre projet Nuxt.js :</p>
    <ul>
        <li>Choisissez le gestionnaire de paquets (npm, yarn).</li>
        <li>Sélectionnez le mode de rendu (SSR, SSG ou SPA).</li>
        <li>Ajoutez des modules supplémentaires (Axios, PWA, etc.).</li>
    </ul>

    <h3><i class="fas fa-cogs icon"></i> Structure d'un projet Nuxt.js</h3>
    <p>Un projet Nuxt.js typique suit cette structure :</p>
    <div class="table-responsive">
    <table class="table-style">
        <thead>
            <tr>
                <th>Dossier/Fichier</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>pages/</strong></td>
                <td>Contient les fichiers de pages. Chaque fichier représente une route.</td>
            </tr>
            <tr>
                <td><strong>components/</strong></td>
                <td>Contient les composants réutilisables.</td>
            </tr>
            <tr>
                <td><strong>layouts/</strong></td>
                <td>Définit les mises en page globales pour les pages.</td>
            </tr>
            <tr>
                <td><strong>store/</strong></td>
                <td>Gestionnaire de state (Vuex) pour l'état global.</td>
            </tr>
            <tr>
                <td><strong>nuxt.config.js</strong></td>
                <td>Fichier de configuration principal pour Nuxt.js.</td>
            </tr>
        </tbody>
    </table>
</div>
    <h2><i class="fas fa-code icon"></i> Exemple de projet simple</h2>
    <p>
        Voici un exemple d'application Nuxt.js qui utilise SSR pour afficher une liste d'articles depuis une API.
    </p>

    <div class="example-box">
        <pre>
<span class="comment">// pages/index.vue</span>
&lt;template&gt;
    &lt;div&gt;
        &lt;h1&gt;Liste des Articles&lt;/h1&gt;
        &lt;ul&gt;
            &lt;li v-for="article in articles" :key="article.id"&gt;
                {{ article.title }}
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/template&gt;

&lt;script&gt;
export default {
    async asyncData({ $axios }) {
        const articles = await $axios.$get('<span class="string">https://jsonplaceholder.typicode.com/posts</span>');
        return { articles };
    }
};
&lt;/script&gt;
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb icon"></i> Bonnes Pratiques</h3>
    <ul>
        <li>
            Utilisez <code>asyncData</code> pour précharger les données avant le rendu côté serveur.
        </li>
        <li>
            Séparez les composants en unités réutilisables pour améliorer la maintenabilité.
        </li>
        <li>
            Configurez les métadonnées pour chaque page avec <code>head()</code> pour optimiser le SEO.
        </li>
        <li>
            Exploitez les modules Nuxt comme <code>@nuxt/image</code> ou <code>@nuxt/axios</code> pour gagner en productivité.
        </li>
    </ul>

    <h3><i class="fas fa-chart-line icon"></i> Tendances Actuelles</h3>
    <p>
        Avec l'évolution des frameworks, Nuxt.js reste l'une des solutions les plus populaires pour créer des applications Vue.js robustes et optimisées. L'introduction de <strong>Nuxt 3</strong>, avec des fonctionnalités comme l'intégration native de Vue 3, Vite, et un support amélioré de TypeScript, renforce encore son adoption dans les projets modernes.
    </p>
</div>
<div class="sommaire-container">
    <h2><i class="fas fa-vial icon"></i> Section Testing</h2>
    <ul>
        <li><a href="#unit-testing">Unit Testing</a></li>
        <li><a href="#e2e-testing">End-to-End Testing</a></li>
        <li><a href="#vue-test-utils">Vue Test Utils</a></li>
    </ul>
</div>
<div id="testing-intro">
    <h1><i class="fas fa-vial icon"></i> Vue.js : Testing</h1>
    <h2><i class="fas fa-info-circle"></i> Introduction</h2>
    <p>
        Les tests sont une partie essentielle du cycle de vie du développement logiciel. En Vue.js, les tests permettent de garantir la stabilité, la maintenabilité et la qualité du code. Que ce soit pour tester des composants individuels ou des scénarios utilisateur complets, Vue.js offre des outils adaptés pour répondre à ces besoins.
    </p>
    <p>
        Cette section est divisée en trois parties principales :
    </p>
    <ul>
        <li><strong>Unit Testing</strong> : Tester des composants ou des fonctions isolées.</li>
        <li><strong>End-to-End (E2E) Testing</strong> : Tester le comportement global de l'application, comme un utilisateur réel.</li>
        <li><strong>Vue Test Utils</strong> : Une bibliothèque spécifique à Vue pour simplifier les tests des composants Vue.js.</li>
    </ul>
    <div class="highlight">
        <strong>Pourquoi les tests sont importants :</strong>
        <ul>
            <li>Prévenir les régressions lors des mises à jour.</li>
            <li>Améliorer la confiance dans le code et les déploiements.</li>
            <li>Faciliter la collaboration dans des équipes de développement.</li>
            <li>Documenter le comportement attendu du code.</li>
        </ul>
    </div>
</div>
<div id="unit-testing">
    <h1><i class="fas fa-microscope icon"></i> Vue.js : Unit Testing</h1>

    <h2><i class="fas fa-info-circle"></i> Qu'est-ce que le Unit Testing ?</h2>
    <p>
        Les <strong>tests unitaires</strong> se concentrent sur le test de petites unités de code de manière isolée, comme des fonctions ou des composants individuels. L'objectif est de vérifier que chaque unité fonctionne comme prévu.
    </p>
    <p>
        En Vue.js, cela signifie généralement tester un composant Vue ou une méthode JavaScript en dehors de son environnement complet.
    </p>

    <h2><i class="fas fa-tools"></i> Configuration et outils recommandés</h2>
    <ul>
        <li><strong>Jest</strong> : Un framework de test populaire et performant.</li>
        <li><strong>Vue Test Utils</strong> : Une bibliothèque officielle pour tester les composants Vue.</li>
        <li><strong>Mocha</strong> : Une autre alternative pour les tests unitaires.</li>
    </ul>

    <h3><i class="fas fa-terminal"></i> Installer Jest</h3>
    <div class="example-box">
        <pre>
<span class="comment">// Installation de Jest et Vue Test Utils</span>
npm install --save-dev jest @vue/test-utils vue-jest
        </pre>
    </div>

    <h3><i class="fas fa-book"></i> Exemple de test unitaire simple</h3>
    <p>
        Voici un exemple simple de test d'un composant Vue qui affiche un message et permet de l'incrémenter.
    </p>

    <div class="example-box">
        <pre>
<span class="comment">// Counter.vue</span>
<span class="tag">&lt;template&gt;</span>
    <span class="tag">&lt;div&gt;</span>
        <span class="tag">&lt;p&gt;</span>{{ count }}<span class="tag">&lt;/p&gt;</span>
        <span class="tag">&lt;button</span> @click=<span class="string">'increment'</span>&gt;Incrémenter<span class="tag">&lt;/button&gt;</span>
    <span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/template&gt;</span>

<span class="keyword">export</span> <span class="keyword">default</span> {
    <span class="keyword">data</span>() {
        <span class="keyword">return</span> {
            count: <span class="number">0</span>
        };
    },
    <span class="keyword">methods</span>: {
        increment() {
            this.count++;
        }
    }
};
        </pre>
    </div>

    <h3><i class="fas fa-vial"></i> Test avec Jest</h3>
    <div class="example-box">
        <pre>
<span class="comment">// Counter.spec.js</span>
import { mount } from '@vue/test-utils';
import Counter from './Counter.vue';

<span class="comment">// Décrire le groupe de tests</span>
describe(<span class="string">'Counter.vue'</span>, () => {
    <span class="comment">// Test initial</span>
    test(<span class="string">'affiche le compteur initial'</span>, () => {
        const wrapper = mount(Counter);
        <span class="keyword">expect</span>(wrapper.text()).toContain(<span class="string">'0'</span>);
    });

    <span class="comment">// Test du bouton</span>
    test(<span class="string">'incrémente le compteur'</span>, async () => {
        const wrapper = mount(Counter);
        const button = wrapper.find(<span class="string">'button'</span>);
        <span class="keyword">await</span> button.trigger(<span class="string">'click'</span>);
        <span class="keyword">expect</span>(wrapper.text()).toContain(<span class="string">'1'</span>);
    });
});
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes pratiques</h3>
    <ul>
        <li>Testez uniquement une unité de code à la fois.</li>
        <li>Utilisez des descriptions claires et spécifiques pour vos tests.</li>
        <li>Évitez les dépendances externes dans les tests unitaires.</li>
        <li>Concentrez-vous sur les résultats attendus et le comportement du composant.</li>
    </ul>

    <h3><i class="fas fa-chart-line"></i> Tendances actuelles</h3>
    <p>
        Avec Vue 3, les tests unitaires gagnent en popularité grâce à Vue Test Utils et l'intégration transparente avec Jest. L'accent est mis sur les tests rapides, isolés et maintenables pour garantir la stabilité des composants.
    </p>
</div>
<div id="e2e-testing">
    <h1><i class="fas fa-route icon"></i> Vue.js : End-to-End Testing (E2E Testing)</h1>

    <h2><i class="fas fa-info-circle"></i> Qu'est-ce que le E2E Testing ?</h2>
    <p>
        Les tests End-to-End (E2E) vérifient l'application dans son intégralité, de bout en bout, en simulant le parcours utilisateur. Contrairement aux tests unitaires ou d'intégration, ils testent l'ensemble de la pile technologique (frontend, backend, base de données) et s'assurent que tout fonctionne comme prévu dans un environnement réel.
    </p>

    <h3><i class="fas fa-check-circle"></i> Objectifs des tests E2E</h3>
    <ul>
        <li>Vérifier que les fonctionnalités critiques fonctionnent pour l'utilisateur final.</li>
        <li>Simuler des interactions utilisateur comme les clics, les formulaires, et la navigation.</li>
        <li>Identifier les problèmes d'intégration entre les différents systèmes.</li>
    </ul>

    <h2><i class="fas fa-tools"></i> Outils pour E2E Testing</h2>
    <ul>
        <li><strong>Cypress</strong> : Un outil populaire pour tester les applications web avec une syntaxe facile à utiliser.</li>
        <li><strong>Puppeteer</strong> : Une bibliothèque Node.js pour automatiser les tests dans un navigateur Chrome.</li>
        <li><strong>Playwright</strong> : Une alternative robuste à Puppeteer, prenant en charge plusieurs navigateurs.</li>
    </ul>

    <h3><i class="fas fa-terminal"></i> Installation de Cypress</h3>
    <div class="example-box">
        <pre>
<span class="comment">// Installation de Cypress</span>
npm install cypress --save-dev

<span class="comment">// Lancer Cypress</span>
npx cypress open
        </pre>
    </div>

    <h3><i class="fas fa-code"></i> Exemple de test E2E</h3>
    <p>
        Voici un exemple simple pour tester une application Vue.js avec Cypress. Le test vérifie que l'utilisateur peut naviguer sur la page d'accueil et soumettre un formulaire.
    </p>

    <div class="example-box">
        <pre>
<span class="comment">// cypress/integration/home.spec.js</span>
describe(<span class="string">'Test de la page d'accueil'</span>, () => {
    it(<span class="string">'Affiche le titre de la page'</span>, () => {
        cy.visit(<span class="string">'/'</span>);
        cy.contains(<span class="string">'Bienvenue sur Vue.js!'</span>);
    });

    it(<span class="string">'Soumet un formulaire'</span>, () => {
        cy.visit(<span class="string">'/form'</span>);
        cy.get(<span class="string">"#name"</span>).type(<span class="string">'Jean Dupont'</span>);
        cy.get(<span class="string">"#submit"</span>).click();
        cy.contains(<span class="string">'Formulaire soumis!'</span>);
    });
});
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes pratiques</h3>
    <ul>
        <li>Concentrez-vous sur les parcours critiques de l'utilisateur (login, paiement, etc.).</li>
        <li>Minimisez le nombre de tests E2E pour éviter des tests longs et coûteux.</li>
        <li>Automatisez les tests dans un pipeline CI/CD pour détecter les régressions.</li>
        <li>Nettoyez les données après chaque test pour garantir l'indépendance des scénarios.</li>
    </ul>

    <h3><i class="fas fa-chart-line"></i> Tendances actuelles</h3>
    <p>
        Les tests E2E deviennent de plus en plus populaires grâce à des outils modernes comme Cypress qui simplifient leur implémentation et leur maintenance. Ces outils offrent des fonctionnalités comme les captures d'écran et les vidéos des tests pour faciliter le débogage.
    </p>
</div>
<div id="vue-test-utils">
    <h1><i class="fas fa-vial icon"></i> Vue.js : Vue Test Utils</h1>

    <h2><i class="fas fa-info-circle"></i> Introduction</h2>
    <p>
        <strong>Vue Test Utils</strong> est une bibliothèque officielle de Vue.js conçue pour simplifier le test unitaire des composants Vue. Elle permet de monter, manipuler et interagir avec des composants de manière isolée pour s'assurer qu'ils fonctionnent comme prévu.
    </p>
    <p>
        Cette bibliothèque est compatible avec des frameworks de tests comme <strong>Jest</strong> ou <strong>Mocha</strong>, ce qui la rend flexible et facile à intégrer dans un projet Vue.js.
    </p>

    <h3><i class="fas fa-check-circle"></i> Pourquoi utiliser Vue Test Utils ?</h3>
    <ul>
        <li>Simuler les interactions utilisateur (clics, saisie, etc.).</li>
        <li>Vérifier les sorties rendues par un composant.</li>
        <li>Tester les comportements des méthodes, des événements et des propriétés réactives.</li>
    </ul>

    <h2><i class="fas fa-tools"></i> Installation</h2>
    <div class="example-box">
        <pre>
<span class="comment">// Installation de Vue Test Utils</span>
npm install @vue/test-utils --save-dev

<span class="comment">// Installation de Jest pour exécuter les tests</span>
npm install jest @vue/test-utils --save-dev
        </pre>
    </div>

    <h3><i class="fas fa-code"></i> Exemple de test</h3>
    <p>
        Voici un exemple simple de test d'un composant Vue avec Vue Test Utils et Jest.
    </p>

    <div class="example-box">
        <pre>
<span class="comment">// Composant : HelloWorld.vue</span>
<template>
    <div>
        <p>{{ message }}</p>
        <button @click="updateMessage">Changer le message</button>
    </div>
</template>

<script>
export default {
    data() {
        <span class="keyword">return</span> {
            message: <span class="string">'Bonjour Vue.js!'</span>
        };
    },
    methods: {
        updateMessage() {
            this.message = <span class="string">'Message mis à jour!'</span>;
        }
    }
};
</script>
        </pre>
    </div>

    <div class="example-box">
        <pre>
<span class="comment">// Test du composant avec Vue Test Utils</span>
import { mount } from '@vue/test-utils';
import HelloWorld from '<span class="string">./HelloWorld.vue</span>';

describe(<span class="string">'HelloWorld.vue'</span>, () => {
    it(<span class="string">'affiche le message initial'</span>, () => {
        const wrapper = mount(HelloWorld);
        expect(wrapper.text()).toContain(<span class="string">'Bonjour Vue.js!'</span>);
    });

    it(<span class="string">'change le message après un clic'</span>, async () => {
        const wrapper = mount(HelloWorld);
        const button = wrapper.find(<span class="string">'button'</span>);
        await button.trigger(<span class="string">'click'</span>);
        expect(wrapper.text()).toContain(<span class="string">'Message mis à jour!'</span>);
    });
});
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes pratiques</h3>
    <ul>
        <li>Testez uniquement la logique interne et les interactions utilisateur spécifiques au composant.</li>
        <li>Évitez de tester des fonctionnalités qui relèvent d'autres niveaux de tests (comme les API ou le DOM natif).</li>
        <li>Utilisez des mocks pour les dépendances externes comme les services ou les stores Vuex.</li>
        <li>Organisez les tests par composant pour une meilleure maintenabilité.</li>
    </ul>

    <h3><i class="fas fa-chart-line"></i> Tendances actuelles</h3>
    <p>
        Les tests unitaires avec Vue Test Utils sont devenus essentiels pour les projets Vue.js modernes. La communauté Vue propose de plus en plus de plugins et d'extensions pour faciliter le test des composants complexes, comme ceux utilisant des animations, des transitions ou des fonctionnalités avancées de Vue 3.
    </p>
</div>
<div class="sommaire-container">
    <h2><i class="fas fa-tools"></i> Sommaire : Outils pour Vue.js</h2>
    <ul>
        <li><a href="#vue-cli">Vue CLI</a> - Gestionnaire de projets Vue.js.</li>
        <li><a href="#vite">Vite</a> - Alternative rapide et moderne à Vue CLI.</li>
        <li><a href="#devtools">Vue Devtools</a> - Extension de navigateur pour déboguer et explorer vos projets Vue.js.</li>
    </ul>
</div>
<div id="tools-introduction">
    <h1><i class="fas fa-tools icon"></i> Vue.js : Outils</h1>

    <h2><i class="fas fa-info-circle"></i> Introduction</h2>
    <p>
        Vue.js est soutenu par un écosystème riche en outils qui simplifient la création, le développement et le débogage de vos projets. Ces outils permettent de gérer les configurations complexes, d'améliorer les performances du développement et d'analyser en profondeur les comportements de vos applications.
    </p>

    <h3><i class="fas fa-check-circle"></i> Points forts des outils Vue.js</h3>
    <ul>
        <li><strong>Productivité accrue :</strong> Automatisation des tâches courantes comme la création de projets et le rechargement en direct.</li>
        <li><strong>Expérience de débogage améliorée :</strong> Avec Vue Devtools, explorez les états et les mutations de vos composants.</li>
        <li><strong>Flexibilité :</strong> Les outils comme Vue CLI et Vite s'adaptent à des projets simples ou complexes.</li>
    </ul>

    <h3><i class="fas fa-lightbulb"></i> Pourquoi utiliser ces outils ?</h3>
    <ul>
        <li>Simplifier la gestion des dépendances et des configurations.</li>
        <li>Améliorer l'efficacité du développement avec des optimisations spécifiques à Vue.js.</li>
        <li>Assurer une meilleure qualité de code grâce aux outils de test et de débogage intégrés.</li>
    </ul>

    <p>
        Ces outils sont conçus pour répondre aux besoins des développeurs modernes, qu'il s'agisse de prototypage rapide, de déploiement à grande échelle ou d'amélioration continue des performances.
    </p>
</div>
<div id="vue-cli">
    <h1><i class="fas fa-terminal icon"></i> Vue CLI : Gestionnaire de Projets Vue.js</h1>

    <h2><i class="fas fa-info-circle"></i> Introduction</h2>
    <p>
        <strong>Vue CLI</strong> (Command Line Interface) est un outil en ligne de commande conçu pour simplifier la création et la gestion des projets Vue.js. Il offre une structure de projet optimisée avec des configurations par défaut adaptées à la plupart des cas d'utilisation.
    </p>
    <p>
        Vue CLI permet d'intégrer facilement des outils modernes comme Babel, TypeScript, ESLint, et bien d'autres. Il est également extensible, ce qui le rend adapté à des projets simples comme à des applications complexes.
    </p>

    <h3><i class="fas fa-check-circle"></i> Points Clés</h3>
    <ul>
        <li><strong>Productivité :</strong> Créez rapidement un projet préconfiguré.</li>
        <li><strong>Extensibilité :</strong> Ajoutez des plugins pour adapter votre projet à vos besoins.</li>
        <li><strong>Compatibilité :</strong> Supporte les outils modernes comme TypeScript et les Progressive Web Apps (PWA).</li>
    </ul>

    <h2><i class="fas fa-terminal"></i> Installation</h2>
    <p>
        Pour utiliser Vue CLI, vous devez avoir <code>Node.js</code> et <code>npm</code> installés sur votre machine. Installez Vue CLI globalement en exécutant la commande suivante :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Installation globale de Vue CLI</span>
<span class="keyword">npm install</span> -g @vue/cli
        </pre>
    </div>
    <p>
        Une fois installé, vous pouvez vérifier la version de Vue CLI avec :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Vérification de la version</span>
<span class="keyword">vue</span> --version
        </pre>
    </div>

    <h2><i class="fas fa-folder"></i> Création d'un Projet</h2>
    <p>
        Pour créer un nouveau projet avec Vue CLI, utilisez la commande suivante :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Création d'un projet</span>
<span class="keyword">vue create</span> mon-projet
        </pre>
    </div>
    <p>
        Pendant la création, Vue CLI vous demandera de choisir une configuration. Vous pouvez opter pour la configuration par défaut ou personnaliser votre projet en sélectionnant les fonctionnalités comme TypeScript, Vuex, Router, etc.
    </p>

    <h2><i class="fas fa-cogs"></i> Gestion des Plugins</h2>
    <p>
        Vue CLI utilise un système de plugins pour gérer les fonctionnalités supplémentaires. Vous pouvez ajouter des plugins à votre projet à tout moment avec la commande suivante :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Ajouter un plugin</span>
<span class="keyword">vue add</span> <span class="string">plugin-name</span>
        </pre>
    </div>
    <p>Exemples de plugins populaires :</p>
    <ul>
        <li><strong>PWA Plugin :</strong> Ajoute des fonctionnalités pour les Progressive Web Apps.</li>
        <li><strong>Vue Router :</strong> Configure le routage dans votre projet.</li>
        <li><strong>Vuex :</strong> Ajoute une gestion d'état globale.</li>
    </ul>

    <h2><i class="fas fa-play-circle"></i> Lancer le Projet</h2>
    <p>
        Une fois le projet créé, vous pouvez démarrer le serveur de développement avec :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Démarrage du serveur de développement</span>
<span class="keyword">npm run serve</span>
        </pre>
    </div>
    <p>
        Par défaut, votre projet sera accessible sur <code>http://localhost:8080</code>.
    </p>

    <h2><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h2>
    <ul>
        <li>Utilisez <code>vue.config.js</code> pour personnaliser les configurations du projet.</li>
        <li>Documentez les plugins installés pour faciliter la collaboration en équipe.</li>
        <li>Testez régulièrement votre application avec des scripts comme <code>npm run build</code>.</li>
    </ul>

    <h2><i class="fas fa-chart-line"></i> Tendances Actuelles</h2>
    <p>
        Vue CLI reste un outil populaire pour les projets Vue.js, mais des alternatives comme Vite gagnent en traction grâce à leurs performances accrues. Cependant, Vue CLI reste pertinent pour les projets nécessitant des configurations avancées ou une compatibilité avec des outils spécifiques.
    </p>
</div>
<div id="vite">
    <h1><i class="fas fa-bolt icon"></i> Vite : Gestionnaire Ultra-Rapide pour Vue.js</h1>

    <h2><i class="fas fa-info-circle"></i> Introduction</h2>
    <p>
        <strong>Vite</strong> est un gestionnaire de projet de nouvelle génération conçu pour les frameworks modernes comme Vue.js. Il se distingue par sa rapidité exceptionnelle, obtenue grâce à l'utilisation de <strong>ESBuild</strong> pour le bundling et à son architecture basée sur les modules ES natifs (ESM).
    </p>
    <p>
        Contrairement à Vue CLI, qui utilise Webpack, Vite propose un système de compilation instantanée pour le développement, rendant l'expérience de codage plus fluide et réactive.
    </p>

    <h3><i class="fas fa-check-circle"></i> Points Clés</h3>
    <ul>
        <li><strong>Performance :</strong> Temps de démarrage quasi-instantané.</li>
        <li><strong>Simplicité :</strong> Configuration minimale nécessaire.</li>
        <li><strong>Support natif :</strong> Compatible avec Vue 3, TypeScript, JSX, et plus encore.</li>
    </ul>

    <h2><i class="fas fa-terminal"></i> Installation</h2>
    <p>
        Pour démarrer avec Vite, vous devez avoir <code>Node.js</code> installé sur votre machine. Utilisez la commande suivante pour créer un nouveau projet Vue.js avec Vite :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Création d'un projet avec Vite</span>
<span class="keyword">npm create vite@latest</span> <span class="variable">mon-projet</span> --template vue
        </pre>
    </div>
    <p>
        Pendant l'installation, Vite vous demandera de choisir un nom de projet. Une fois terminé, accédez au répertoire du projet et installez les dépendances :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Installation des dépendances</span>
<span class="keyword">cd</span> <span class="variable">mon-projet</span> <span class="operator">&amp;&amp;</span> <span class="keyword">npm install</span>
        </pre>
    </div>

    <h2><i class="fas fa-play-circle"></i> Lancer le Serveur de Développement</h2>
    <p>
        Pour lancer le serveur de développement, exécutez :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Démarrer le serveur de développement</span>
<span class="keyword">npm run dev</span>
        </pre>
    </div>
    <p>
        Par défaut, votre application sera accessible sur <code>http://localhost:5173</code>.
    </p>

    <h2><i class="fas fa-cogs"></i> Configuration</h2>
    <p>
        Vite est livré avec une configuration par défaut qui fonctionne pour la plupart des projets. Cependant, vous pouvez personnaliser votre projet en modifiant le fichier <code>vite.config.js</code>. Exemple :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Exemple de configuration vite.config.js</span>
import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';

<span class="keyword">export default</span> defineConfig({
    plugins: [vue()],
    server: {
        port: <span class="number">3000</span>, <span class="comment">// Changer le port par défaut</span>
        open: <span class="keyword">true</span> <span class="comment">// Ouvre automatiquement le navigateur</span>
    },
    build: {
        outDir: <span class="string">'dist'</span>, <span class="comment">// Répertoire de sortie</span>
        minify: <span class="string">'esbuild'</span> <span class="comment">// Utilise esbuild pour minimiser le code</span>
    }
});
        </pre>
    </div>

    <h2><i class="fas fa-tools"></i> Intégration avec Vue 3</h2>
    <p>
        Vite intègre directement le plugin Vue.js pour gérer les fichiers <code>.vue</code>. Vous pouvez également ajouter des fonctionnalités comme TypeScript ou JSX en installant des plugins supplémentaires.
    </p>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul>
        <li>Utilisez des <code>alias</code> pour simplifier les importations dans <code>vite.config.js</code>.</li>
        <li>Activez le mode <strong>Hot Module Replacement (HMR)</strong> pour une expérience de développement plus fluide.</li>
        <li>Documentez les scripts personnalisés dans le fichier <code>package.json</code>.</li>
    </ul>

    <h2><i class="fas fa-chart-line"></i> Tendances Actuelles</h2>
    <p>
        Vite est en train de devenir l'outil standard pour le développement avec Vue.js grâce à sa rapidité et sa simplicité. Il est de plus en plus adopté par les développeurs pour les projets modernes où la performance et la réactivité sont prioritaires.
    </p>
</div>
<div id="devtools">
    <h1><i class="fas fa-tools icon"></i> Vue Devtools : Outil de Débogage Puissant pour Vue.js</h1>

    <h2><i class="fas fa-info-circle"></i> Introduction</h2>
    <p>
        <strong>Vue Devtools</strong> est une extension pour les navigateurs modernes (Chrome, Firefox) conçue pour aider les développeurs à déboguer leurs applications Vue.js. Il offre une interface intuitive pour explorer l'arbre des composants, surveiller l'état, analyser les événements, et bien plus encore.
    </p>
    <p>
        Cet outil est particulièrement utile pour comprendre et diagnostiquer les problèmes dans des applications Vue.js complexes.
    </p>

    <h3><i class="fas fa-check-circle"></i> Points Clés</h3>
    <ul>
        <li>Permet de visualiser la hiérarchie des composants.</li>
        <li>Affiche les propriétés réactives (<code>data</code>, <code>computed</code>, <code>props</code>).</li>
        <li>Capture et analyse les événements émis par les composants.</li>
        <li>Supporte Vue Router et Vuex pour une inspection approfondie.</li>
    </ul>

    <h2><i class="fas fa-download"></i> Installation</h2>
    <h3><i class="fas fa-globe"></i> Installation pour Navigateurs</h3>
    <p>
        Vue Devtools est disponible en tant qu'extension pour les principaux navigateurs :
    </p>
    <ul>
        <li>
            <a href="https://chrome.google.com/webstore/detail/vuejs-devtools/nhdogjmejiglipccpnnnanhbledajbpd" target="_blank">Télécharger pour Chrome</a>.
        </li>
        <li>
            <a href="https://addons.mozilla.org/en-US/firefox/addon/vue-js-devtools/" target="_blank">Télécharger pour Firefox</a>.
        </li>
    </ul>

    <h3><i class="fas fa-terminal"></i> Utilisation avec des Serveurs Locaux</h3>
    <p>
        Si votre application fonctionne en mode production ou dans un environnement local sécurisé (HTTPS), vous devrez activer Vue Devtools manuellement. Ajoutez ce script à votre projet :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Activer Vue Devtools en local</span>
import { createApp } from 'vue';

<span class="keyword">const</span> app = createApp(App);

<span class="comment">// Active Vue Devtools</span>
<span class="keyword">if</span> (process.env.NODE_ENV === <span class="string">'development'</span>) {
    app.config.devtools = <span class="keyword">true</span>;
}

app.mount(<span class="string">'#app'</span>);
        </pre>
    </div>

    <h2><i class="fas fa-eye"></i> Fonctionnalités</h2>
    <h3><i class="fas fa-sitemap"></i> Inspection de l'Arbre des Composants</h3>
    <p>
        Vue Devtools affiche une vue hiérarchique des composants utilisés dans votre application. Chaque composant peut être sélectionné pour examiner ses propriétés réactives comme :
    </p>
    <ul>
        <li><code>data</code></li>
        <li><code>props</code></li>
        <li><code>computed</code></li>
        <li><code>methods</code></li>
    </ul>

    <h3><i class="fas fa-database"></i> Surveillance de Vuex</h3>
    <p>
        Pour les projets utilisant Vuex, Vue Devtools offre un onglet dédié à l'inspection des <code>state</code>, <code>getters</code>, et mutations. Vous pouvez également visualiser l'historique des mutations.
    </p>

    <h3><i class="fas fa-route"></i> Intégration Vue Router</h3>
    <p>
        Si votre application utilise Vue Router, Devtools affiche l'état de la route actuelle, les paramètres, et l'historique de navigation.
    </p>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul>
        <li>Utilisez Vue Devtools pour surveiller l'état en temps réel.</li>
        <li>Activez les options de développement dans <code>main.js</code> pour un débogage plus précis.</li>
        <li>Documentez les changements observés dans les mutations ou les événements.</li>
    </ul>

    <h3><i class="fas fa-chart-line"></i> Tendances Actuelles</h3>
    <p>
        Vue Devtools reste un outil incontournable pour les développeurs Vue.js, et ses fonctionnalités s'élargissent régulièrement. Il est également utilisé dans des bibliothèques associées comme Pinia (gestion d'état) et Nuxt.js.
    </p>
</div>
<div class="sommaire-container">
    <h1><i class="fas fa-ellipsis-h icon"></i> Miscellaneous</h1>
    <p>
        Cette section couvre des sujets divers qui ne sont pas directement liés aux concepts fondamentaux de Vue.js mais qui jouent un rôle clé dans la création d'applications robustes, performantes et conviviales.
    </p>

    <h2><i class="fas fa-bars"></i> Sommaire</h2>
    <ul>
        <li><a href="#performance"><i class="fas fa-tachometer-alt"></i> Performance Optimization</a></li>
        <li><a href="#plugins"><i class="fas fa-plug"></i> Plugins</a></li>
        <li><a href="#internationalization"><i class="fas fa-globe"></i> Internationalization (i18n)</a></li>
        <li><a href="#ssr"><i class="fas fa-server"></i> SSR Overview</a></li>
    </ul>
</div>
<div id="miscellaneous-intro">
    <h2><i class="fas fa-info-circle icon"></i> Introduction</h2>
    <p>
        Bien que Vue.js se concentre principalement sur la construction de composants et la gestion de l'état, certains aspects avancés et pratiques permettent d'améliorer considérablement vos projets. Ces fonctionnalités ajoutent de la flexibilité et augmentent les possibilités d'optimisation et de personnalisation.
    </p>
    <p>
        Voici un aperçu des thèmes abordés dans cette section :
    </p>
    <ul>
        <li><strong>Performance Optimization :</strong> Techniques pour rendre vos applications plus rapides et efficaces.</li>
        <li><strong>Plugins :</strong> Utilisation et création de plugins pour étendre les fonctionnalités de Vue.</li>
        <li><strong>Internationalization (i18n) :</strong> Prise en charge de plusieurs langues dans vos applications.</li>
        <li><strong>SSR Overview :</strong> Rappel des concepts de rendu côté serveur pour les applications Vue.js.</li>
    </ul>
    <p>
        Cette section est idéale pour les développeurs qui souhaitent affiner leurs compétences et explorer les outils et techniques avancés liés à Vue.js.
    </p>
</div>
<div id="performance">
    <h1><i class="fas fa-tachometer-alt icon"></i> Performance Optimization</h1>

    <h2><i class="fas fa-info-circle"></i> Introduction</h2>
    <p>
        L'optimisation des performances est essentielle pour garantir que vos applications Vue.js restent réactives, rapides et efficaces, même avec des données volumineuses ou des utilisateurs simultanés. Cette section aborde les meilleures pratiques et techniques pour améliorer les performances de vos applications.
    </p>
    <p>
        Avec Vue.js, vous bénéficiez déjà d'un moteur de rendu efficace, mais une mauvaise gestion des composants, des données ou des événements peut affecter les performances. Il est donc crucial d'adopter une approche proactive pour identifier et résoudre les goulots d'étranglement.
    </p>

    <h3><i class="fas fa-lightbulb"></i> Bonnes pratiques générales</h3>
    <ul>
        <li>Utilisez des composants dynamiques (<code>v-if</code> ou <code>v-show</code>) judicieusement pour afficher ou masquer des éléments.</li>
        <li>Préférez <code>v-for</code> avec une clé unique (<code>key</code>) pour assurer un suivi correct des éléments de liste.</li>
        <li>Adoptez des techniques de virtualisation pour les longues listes (ex : vue-virtual-scroller).</li>
        <li>Limitez les observateurs réactifs (<code>watch</code>) et les calculs complexes dans les propriétés calculées (<code>computed</code>).</li>
        <li>Minimisez les mises à jour DOM en regroupant les changements.</li>
    </ul>

    <h3><i class="fas fa-tools"></i> Techniques avancées</h3>
    <ul>
        <li>Utilisez <strong>Lazy Loading</strong> pour les composants et les ressources, en chargeant les parties de l'application uniquement lorsqu'elles sont nécessaires.</li>
        <li>Implémentez <strong>Code Splitting</strong> avec des outils comme Webpack ou Vite pour réduire la taille initiale de votre application.</li>
        <li>Appliquez le <strong>Debouncing</strong> et le <strong>Throttling</strong> aux événements utilisateur intensifs comme le défilement ou la saisie.</li>
        <li>Activez le mode <code>production</code> pour réduire la taille du bundle final et améliorer les performances.</li>
    </ul>

    <h3><i class="fas fa-code"></i> Exemple Pratique : Lazy Loading</h3>
    <p>Voici un exemple de mise en œuvre du Lazy Loading pour un composant Vue :</p>

    <div class="example-box">
        <pre>
<span class="comment">// Importation paresseuse d'un composant</span>
<span class="keyword">const</span> UserProfile = () => import(<span class="string">'./components/UserProfile.vue'</span>);

export default {
    components: {
        UserProfile
    }
};
        </pre>
    </div>

    <h3><i class="fas fa-chart-bar"></i> Outils pour surveiller les performances</h3>
    <ul>
        <li><strong>Vue Devtools :</strong> Identifiez les goulots d'étranglement dans les composants.</li>
        <li><strong>Lighthouse :</strong> Analysez les performances globales de votre application, y compris le temps de chargement et l'interactivité.</li>
        <li><strong>Webpack Bundle Analyzer :</strong> Vérifiez la taille des bundles et optimisez-les.</li>
    </ul>

    <h3><i class="fas fa-lightbulb"></i> Bonnes pratiques spécifiques à Vue.js</h3>
    <ul>
        <li>Utilisez des directives comme <code>v-once</code> pour limiter le rendu inutile des éléments statiques.</li>
        <li>Préférez <code>functional components</code> si votre composant ne nécessite pas de réactivité.</li>
        <li>Activez les <strong>fragments</strong> dans Vue 3 pour éviter les éléments DOM inutiles.</li>
    </ul>

    <h3><i class="fas fa-arrow-up"></i> Tendances actuelles</h3>
    <p>
        L'optimisation des performances front-end évolue avec de nouveaux outils comme Vite et des frameworks comme Astro, qui mettent l'accent sur le rendu côté serveur et l'hydratation partielle. Ces techniques offrent une meilleure expérience utilisateur tout en réduisant les coûts de calcul.
    </p>
</div>
<div id="plugins">
    <h1><i class="fas fa-plug icon"></i> Vue.js : Plugins</h1>

    <h2><i class="fas fa-info-circle"></i> Introduction</h2>
    <p>
        Les <strong>plugins</strong> sont une partie intégrale de l'écosystème Vue.js, permettant d'étendre les fonctionnalités de base de Vue. Ils fournissent une méthode pour encapsuler des fonctionnalités globales, comme des bibliothèques tierces, des mixins, ou des directives personnalisées, et les rendre disponibles dans toute l'application.
    </p>
    <p>
        L'utilisation de plugins dans Vue.js est simple et repose sur la méthode <code>app.use()</code>. Une fois intégré, un plugin peut ajouter des options globales, des composants, des directives, ou des méthodes au prototype de Vue.
    </p>

    <h3><i class="fas fa-check-circle"></i> Points clés</h3>
    <ul>
        <li>Les plugins permettent une utilisation globale de fonctionnalités sans les importer manuellement dans chaque composant.</li>
        <li>Ils peuvent encapsuler la logique complexe ou la configuration, rendant le code plus propre et modulaire.</li>
        <li>Les plugins personnalisés peuvent être créés pour répondre à des besoins spécifiques.</li>
    </ul>

    <h2><i class="fas fa-code"></i> Syntaxe et Utilisation</h2>
    <p>
        La création et l'utilisation d'un plugin suivent une structure simple :
    </p>

    <div class="example-box">
        <pre>
<span class="comment">// Création d'un plugin simple</span>
<span class="keyword">export</span> <span class="keyword">default</span> {
    install(app, options) {
        <span class="comment">// Ajoute une méthode globale</span>
        app.config.globalProperties.$maFonction = () => {
            console.log(<span class="string">'Fonctionnalité du plugin activée.'</span>);
        };

        <span class="comment">// Enregistre un composant global</span>
        app.component(<span class="string">'MonPluginComponent'</span>, {
            template: <span class="string">`&lt;div&gt;Composant du plugin&lt;/div&gt;`</span>
        });
    }
};
        </pre>
    </div>

    <div class="example-box">
        <pre>
<span class="comment">// Utilisation du plugin</span>
import { createApp } from 'vue';
import MonPlugin from './mon-plugin';

<span class="comment">// Création de l'application Vue</span>
<span class="keyword">const</span> app = createApp(App);

<span class="comment">// Utilisation du plugin</span>
app.use(MonPlugin);
app.mount(<span class="string">'#app'</span>);
        </pre>
    </div>

    <h3><i class="fas fa-book"></i> Plugins populaires dans l'écosystème Vue.js</h3>
    <ul>
        <li><strong>Vue Router :</strong> Gestion de la navigation et des routes dans une application Vue.</li>
        <li><strong>Vuex :</strong> Gestion centralisée de l'état de l'application.</li>
        <li><strong>Vue I18n :</strong> Support de l'internationalisation.</li>
        <li><strong>Vue Toastification :</strong> Notifications stylées et réactives.</li>
    </ul>

    <h3><i class="fas fa-tools"></i> Bonnes Pratiques</h3>
    <ul>
        <li>Utilisez les plugins uniquement lorsque des fonctionnalités globales sont nécessaires pour éviter une surcharge inutile.</li>
        <li>Créez des plugins modulaires et réutilisables pour les fonctionnalités partagées entre plusieurs projets.</li>
        <li>Documentez clairement les options ou les paramètres nécessaires pour l'utilisation du plugin.</li>
        <li>Privilégiez les plugins maintenus régulièrement pour bénéficier des dernières fonctionnalités et correctifs.</li>
    </ul>

    <h3><i class="fas fa-chart-line"></i> Tendances actuelles</h3>
    <p>
        Avec Vue 3, l'écosystème des plugins a évolué pour tirer parti des nouvelles fonctionnalités comme la Composition API et les Fragments. Les plugins modernes adoptent ces concepts pour offrir une expérience plus flexible et performante.
    </p>
</div>
<div id="internationalization">
    <h1><i class="fas fa-globe icon"></i> Vue.js : Internationalization (i18n)</h1>

    <h2><i class="fas fa-info-circle"></i> Introduction</h2>
    <p>
        L'internationalisation (i18n) est essentielle pour créer des applications accessibles à un public mondial. Avec Vue.js, vous pouvez facilement gérer la traduction des interfaces utilisateur, les formats de date et d'heure, ou encore les nombres spécifiques à une région grâce à des bibliothèques comme <strong>Vue I18n</strong>.
    </p>
    <p>
        <strong>Vue I18n</strong> est une solution complète et intégrée dans l'écosystème Vue pour gérer les traductions et les localisations. Elle prend en charge :
    </p>
    <ul>
        <li>La gestion des messages traduits.</li>
        <li>Le formatage des dates, nombres et devises.</li>
        <li>Le choix dynamique de la langue à partir des préférences de l'utilisateur.</li>
    </ul>

    <h3><i class="fas fa-check-circle"></i> Points Clés</h3>
    <ul>
        <li>Organisez vos fichiers de traduction par langue pour une gestion facile.</li>
        <li>Privilégiez des clés descriptives pour vos messages traduits.</li>
        <li>Utilisez des outils comme <strong>Vue I18n CLI</strong> pour générer des fichiers de traduction.</li>
    </ul>

    <h2><i class="fas fa-code"></i> Configuration et Utilisation de Vue I18n</h2>
    <h3>1. Installation de Vue I18n</h3>
    <p>
        Ajoutez la bibliothèque Vue I18n à votre projet en utilisant <code>npm</code> ou <code>yarn</code> :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// Installation via npm</span>
<span class="keyword">npm</span> <span class="keyword">install</span> vue-i18n
        </pre>
    </div>

    <h3>2. Configuration de base</h3>
    <p>
        Configurez Vue I18n dans votre projet :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// i18n.js</span>
import { createI18n } from 'vue-i18n';

<span class="comment">// Définition des messages</span>
<span class="keyword">const</span> messages = {
    en: {
        welcome: <span class="string">'Welcome to Vue.js!'</span>
    },
    fr: {
        welcome: <span class="string">'Bienvenue sur Vue.js!'</span>
    }
};

<span class="comment">// Configuration d'i18n</span>
<span class="keyword">const</span> i18n = createI18n({
    locale: <span class="string">'en'</span>, <span class="comment">// Langue par défaut</span>
    fallbackLocale: <span class="string">'en'</span>, <span class="comment">// Langue de secours</span>
    messages
});

<span class="keyword">export</span> <span class="keyword">default</span> i18n;
        </pre>
    </div>

    <h3>3. Intégration dans Vue</h3>
    <p>
        Intégrez Vue I18n dans votre application :
    </p>
    <div class="example-box">
        <pre>
<span class="comment">// main.js</span>
import { createApp } from 'vue';
import App from './App.vue';
import i18n from './i18n';

<span class="comment">// Création de l'application avec i18n</span>
<span class="keyword">const</span> app = createApp(App);
app.use(i18n);
app.mount(<span class="string">'#app'</span>);
        </pre>
    </div>

    <h2><i class="fas fa-flag"></i> Exemple Pratique</h2>
    <div class="example-box">
        <pre>
<span class="comment">// App.vue</span>
<span class="tag">&lt;template&gt;</span>
    <span class="tag">&lt;div&gt;</span>
        <span class="tag">&lt;p&gt;</span>{{ $t(<span class="string">'welcome'</span>) }}<span class="tag">&lt;/p&gt;</span>
        <span class="tag">&lt;button</span> @click=<span class="string">'changeLanguage'</span>&gt;Changer de Langue<span class="tag">&lt;/button&gt;</span>
    <span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/template&gt;</span>

<span class="tag">&lt;script&gt;</span>
export <span class="keyword">default</span> {
    methods: {
        changeLanguage() {
            this.$i18n.locale = this.$i18n.locale === <span class="string">'en'</span> ? <span class="string">'fr'</span> : <span class="string">'en'</span>;
        }
    }
};
<span class="tag">&lt;/script&gt;</span>
        </pre>
    </div>

    <h3><i class="fas fa-lightbulb"></i> Bonnes Pratiques</h3>
    <ul>
        <li>Organisez vos messages dans des fichiers séparés par langue pour une maintenance facile.</li>
        <li>Privilégiez des clés claires et descriptives pour vos messages traduits.</li>
        <li>Utilisez <code>fallbackLocale</code> pour gérer les langues manquantes.</li>
        <li>Testez votre application pour garantir une bonne expérience utilisateur dans chaque langue.</li>
    </ul>
</div>
<div id="conclusion">
    <h1><i class="fas fa-flag-checkered icon"></i> Conclusion sur Vue.js</h1>

    <h2><i class="fas fa-info-circle"></i> Résumé</h2>
    <p>
        Vue.js est un framework JavaScript puissant, flexible et intuitif qui permet de créer des interfaces utilisateur dynamiques et réactives. 
        Grâce à son approche progressive, il peut être utilisé aussi bien pour des projets simples que pour des applications complexes. 
        Les concepts clés comme la <strong>Composition API</strong>, les <strong>directives</strong>, le <strong>routing</strong>, et la gestion de l'état avec <strong>Vuex</strong> permettent de structurer efficacement le code et de le rendre maintenable à long terme.
    </p>
    <p>
        Que vous soyez un développeur débutant ou expérimenté, Vue.js offre un écosystème complet et des outils adaptés à tous les niveaux de compétences.
    </p>

    <h2><i class="fas fa-star"></i> Points Forts de Vue.js</h2>
    <ul>
        <li><strong>Apprentissage rapide :</strong> Une syntaxe simple et intuitive.</li>
        <li><strong>Flexibilité :</strong> Adaptable à divers besoins, qu'il s'agisse d'un simple widget ou d'une SPA.</li>
        <li><strong>Écosystème robuste :</strong> Avec Vue Router, Vuex, et une communauté active, Vue.js est bien équipé pour les projets modernes.</li>
        <li><strong>Performances :</strong> Léger et optimisé pour des rendus rapides.</li>
        <li><strong>Documentation exceptionnelle :</strong> Guide clair et détaillé pour tous les concepts.</li>
    </ul>

    <h2><i class="fas fa-chart-line"></i> Perspectives</h2>
    <p>
        Vue.js continue de croître et d'évoluer, notamment avec l'intégration des meilleures pratiques modernes comme la <strong>Composition API</strong> et le support de TypeScript. 
        Son adoption par de grandes entreprises et sa compatibilité avec des outils comme Vite et Nuxt.js renforcent sa position comme choix incontournable pour le développement d'applications web modernes.
    </p>
    <p>
        En vous investissant dans Vue.js, vous vous équipez d'un outil durable et performant pour construire des expériences utilisateur de qualité.
    </p>

    <h2><i class="fas fa-lightbulb"></i> Derniers Conseils</h2>
    <div class="highlight">
        <ul>
            <li>Commencez avec de petits projets pour bien maîtriser les concepts de base.</li>
            <li>Apprenez à utiliser efficacement l'écosystème, notamment Vue Router, Vuex (ou Pinia), et Vue Devtools.</li>
            <li>Adoptez des pratiques modernes comme la Composition API pour une meilleure lisibilité et modularité.</li>
            <li>Participez à la communauté Vue.js pour rester à jour avec les nouvelles tendances et partager vos expériences.</li>
        </ul>
    </div>

    <h2><i class="fas fa-graduation-cap"></i> Étapes Suivantes</h2>
    <p>
        Maintenant que vous avez exploré Vue.js en détail, il est temps de passer à la pratique ! 
        Créez votre propre projet, intégrez des fonctionnalités avancées, et mettez en œuvre les concepts appris dans ce cours. 
        N'oubliez pas de tester et optimiser votre application pour offrir la meilleure expérience utilisateur possible.
    </p>
    <p>
        Avec Vue.js, les possibilités sont infinies. Bonne chance et bon développement !
    </p>
</div>

</div>
</div>

<?php include_once 'templates/footer.php';