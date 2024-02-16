<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Connexion</title>
    <!-- Intégration de Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" />

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

<body>
<div class="hero_area">
    <div class="hero_bg_box">
        <div class="bg_img_box"></div>
    </div>
    <?php  session_start();  require "header.php"?>

    <div class="card container mt-5 connexion">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Connexion</h2>
                        <?php if (isset($_SESSION['message'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_SESSION['message']; ?>
                            </div>
                            <?php unset($_SESSION['message']); // Nettoyer le message après l'affichage ?>
                        <?php endif; ?>

                        <form method="post" action="rooter.php">
                            <div class="form-group">
                                <label for="nomUtilisateur">Nom d'utilisateur :</label>
                                <input type="text" class="form-control" name="nom" required>
                            </div>

                            <div class="form-group">
                                <label for="motDePasse">Mot de passe :</label>
                                <input type="password" class="form-control" name="motDePasse" required>
                            </div>

                            <button type="submit" name="connexion" class="btn bout">Se connecter</button>
                        </form>

                        <p class="mt-3">Pas encore inscrit? <a href="inscription_view.php">Inscrivez-vous ici</a></p>
                        <p> <a href="ajout_notes_views.php">Commencer sans s'inscrire</a> </p>
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

<section class="footer_section">
    <div class="container">
        <p>
            &copy; <span id="displayYear"></span> All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
        </p>
    </div>
</section>
<!-- footer section -->

<!-- jQery -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<!-- bootstrap js -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- owl slider -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<!-- custom js -->
<script type="text/javascript" src="js/custom.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
</script>

</body>
</html>
<!-- Intégration de Bootstrap JS et JQuery (nécessaires pour certaines fonctionnalités de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>

