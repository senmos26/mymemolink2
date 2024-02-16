<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insérer une note</title>
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
    <!-- Intégration de Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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

        input:hover,
        textarea:hover {
            border: 1px solid #3c6041;
        }

        input {
            border: 2px solid #0b2e13;
            transition: border 0.5s ease;
        }

        .img-box img {
            width: 100%; /* Pour que l'image occupe toute la largeur du conteneur */
            /* Bordure pour l'image */
        }
    </style>
</head>

<body class="">
<div class="hero_area">
    <div class="hero_bg_box">
        <div class="bg_img_box">
            <img src="." alt="">
        </div>
    </div>

    <div class="container mt-5 connexion">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Insérer une note</h2>
                        <?php session_start(); if (isset($_SESSION['message_note'])) : ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $_SESSION['message_note'] . "   " . "CODE :" . $_SESSION['codeRecuperation'] ?>
                            </div>
                            <?php unset($_SESSION['message_note']); // Nettoyer le message après l'affichage ?>
                        <?php endif; ?>

                        <form method="post" action="./rooter.php">
                            <div class="form-group">
                                <label for="titreNote">Titre de la note :</label>
                                <input type="text" class="form-control" name="titreNote" required>
                            </div>

                            <div class="form-group">
                                <label for="contenuNote">Contenu de la note :</label>
                                <textarea class="form-control" name="contenuNote" rows="4" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="codeRecuperation">Code de récupération :</label>
                                <input type="text" class="form-control" name="codeRecuperation" required>
                            </div>

                            <button type="submit" name="creerNote" class="btn bout">Créer la note</button>
                        </form>

                        <p class="mt-3 h3"><a href="../index.php" style="color: #3b413b;text-decoration: underline">Retour à la page d'accueil</a></p>
                        <p class="mt-3 h3"><a href="recuperation_code.php" style="color: #3b413b;text-decoration: underline">voulez-vous recuperer une note déja créée?</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="../images/undraw_undraw_undraw_selectoption_y9cm_mx7w_(2)_vjsk.png">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Intégration de Bootstrap JS et JQuery (nécessaires pour certaines fonctionnalités de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
