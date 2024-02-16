<?php
// Inclure le modèle et le contrôleur
session_start();
require_once '../controller/noteController.php';

// Vérifier si un code de récupération est présent dans l'URL

    // Connexion à la base de données
    $db = new PDO("mysql:host=localhost;dbname=mymemolink", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $noteController = new NoteController($db);
    $note = $noteController-> getNotesParI($_SESSION['utilisateur']->ID);

    echo '
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Afficher une note</title>
        <!-- Intégration de Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="../css/responsive.css" rel="stylesheet" />
    </head>
    <body class="container mt-5">
    ';

    if ($note) {
        // Afficher la note dans une carte Bootstrap
        echo '<div class="card">';
        echo '<div class="card-body">';
        echo '<h2 class="card-title">Note</h2>';
        echo '<p class="card-text"><strong>Titre:</strong> ' . $note->Titre . '</p>';
        echo '<p class="card-text"><strong>Contenu:</strong> ' . $note->Contenu . '</p>';
        echo '</div>';
        echo '</div>';
    } else {
        // Aucune note trouvée avec le code de récupération
        echo '<div class="alert alert-warning" role="alert">';
        echo 'Aucune note trouvée avec le code de récupération spécifié.';
        echo '</div>';
    }

    echo '
        <p class="mt-3"><a href="../index.php">Retour à la page d\'accueil</a></p>
         <p class="mt-3"><a href="./ajout_notes_views2.php">Ajouter une note</a></p>

        <!-- Intégration de Bootstrap JS et JQuery (nécessaires pour certaines fonctionnalités de Bootstrap) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>';
?>

