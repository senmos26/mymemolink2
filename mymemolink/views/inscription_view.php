<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
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
    <style>
        .connexion {
            backdrop-filter: blur(10px);
            background: transparent;
            border: 2px solid #7cb983;
            padding: 20px; /* Ajout de marge intérieure pour l'espace entre le contenu et le bord */
        }

        .bout {
            background: #29542f;
            color: #fff; /* Texte en blanc pour une meilleure visibilité */
        }

        .hero_bg_box {
            position: relative;
            overflow: hidden;
        }

        .bg_img_box {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: url('../images/your-image.jpg') center/cover no-repeat; /* Ajoutez le chemin correct de votre image */
        }
        .img-box img {
            width: 100%; /* Pour que l'image occupe toute la largeur du conteneur */
            /* Bordure pour l'image */
        }
    </style>
</head>
<body class="">
<div class="hero_area">
    <?php  session_start();  require "header.php"?>
<div class="card container mt-5 connexion ">

    <div class="card-body">
        <h2 class="card-title">Inscription</h2>

        <form method="post" action="rooter.php">
            <div class="form-group">
                <label for="nomUtilisateur">Nom d'utilisateur :</label>
                <input type="text" class="form-control" name="nom" required>
            </div>

            <div class="form-group">
                <label for="motDePasse">Mot de passe :</label>
                <input type="password" class="form-control" name="motDePasse" required>
            </div>

            <button type="submit" name="inscription" class="btn bout">S'inscrire</button>
        </form>

        <p class="mt-3">Déjà inscrit? <a href="connexion_view.php">Connectez-vous ici</a></p>
    </div>
</div>

<!-- Intégration de Bootstrap JS et JQuery (nécessaires pour certaines fonctionnalités de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
