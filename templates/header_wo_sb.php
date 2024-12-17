<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explorez des cours et quiz interactifs pour développer vos compétences en développement web. Testez vos connaissances sur HTML, CSS, PHP, JavaScript, et bien plus.">
    <meta name="keywords" content="Développement web, QCM interactifs, HTML, CSS, JavaScript, PHP, Quiz web, Formation développeur, Open-source, Gratuit, FullStackExplorer">
    <meta name="author" content="Abduusdi">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta property="og:description" content="Testez vos connaissances et progressez en développement web avec nos quiz interactifs et nos cours approfondis.">
    <meta property="og:image" content="https://www.abduusdi.fr/cours/assets/og-image.jpg">
    <meta property="og:url" content="https://www.abduusdi.fr">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta name="twitter:description" content="Rejoignez nos cours et quiz interactifs pour devenir un expert en développement web et mobile.">
    <meta name="twitter:image" content="https://www.abduusdi.fr/cours/assets/og-image.jpg">

    <!-- Titre dynamique -->
    <title><?php echo htmlspecialchars($title); ?> | Cours et Quiz Développeur Web</title>

    <!-- Favicon -->
    <link rel="icon" href="https://www.abduusdi.fr/cours/assets/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://www.abduusdi.fr/cours/assets/favicon.ico">

    <!-- Feuilles de style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://www.abduusdi.fr/cours/assets/css/cours.css"/>

    <!-- JSON-LD pour les données structurées -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "<?php echo htmlspecialchars($title); ?>",
      "description": "Cours et quiz interactifs pour le développement web.",
      "url": "https://www.abduusdi.fr",
      "inLanguage": "fr",
      "author": {
        "@type": "Person",
        "name": "Abduusdi"
      }
    }
    </script>
</head>
<body>

<?php include 'templates/nav.php'; ?>