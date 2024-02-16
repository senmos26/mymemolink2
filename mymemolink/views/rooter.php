<?php
session_start();

$dsn = "mysql:host=localhost;dbname=mymemolink";
$username = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
require '../controller/utilisateurController.php';
    if(isset($_POST['connexion'])){
        if(isset($_POST['nom'])&& isset($_POST['motDePasse'])){
            $nom = $_POST['nom'];
            $motDePasse = $_POST['motDePasse'];

            $userController = new AuthentificationController($pdo);
            $userController->verification($nom,$motDePasse);

        }else{
            $_SESSION['message_root']="les champs sont obligatioires";
            header("location:views/connexion_view.php");
        }



}
require '../controller/utilisateurController.php';
    if(isset($_POST['inscription'])){
if(isset($_POST['nom'])&& isset($_POST['motDePasse'])){
    $nom = $_POST['nom'];
    $motDePasse = $_POST['motDePasse'];
    $userControlle = new AuthentificationController($pdo);
    $userControlle->creerUtilisateur($nom,$motDePasse);


    }else{
    $_SESSION['message_root']="les champs sont obligatioires";
    header("location:views/inscription_view.php");

}
    }
require '../controller/noteController.php';
    if(isset($_POST['creerNote'])){
        if(isset($_POST['titreNote'])&& isset($_POST['contenuNote']) &&
            isset($_POST['codeRecuperation'])){
            $titre = $_POST['titreNote']; $contenu= $_POST['contenuNote']; $code= $_POST['codeRecuperation'];
            $noteController = new NoteController($pdo);
            $noteController->creerNoteAvecCodeRecuperation1($code,$titre,$contenu);

        }else{
            $_SESSION['message_root']="les champs sont obligatioires";
            header("location:./a");
        }
    }


?>
