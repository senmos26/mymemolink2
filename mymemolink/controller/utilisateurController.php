<?php
require '../models/utilisateurModel.php';

class AuthentificationController{
    private $db;
    public function __construct($db)
    {
        $this->db=$db;
    }
    public function verification($nomUtilisateur, $motDePasseHash)
    {
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $utilisateurModel = new UtilisateurModel($this->db);
            $utilisateur = $utilisateurModel->getUtilisateurParNom($nomUtilisateur,$motDePasseHash);
            if($utilisateur){
                if($motDePasseHash == $utilisateur->MotDePasse && $nomUtilisateur == $utilisateur->Nom) {

                    $_SESSION['utilisateur'] = $utilisateur;
                    header("location:./views/notes_views.php");
                }else{
                    $message= "Mot de passe incorrect";
                    $_SESSION['message']=$message;
                }
            }else{
                $message="Aucun utilisateur trouvé avec ces informations";
                $_SESSION['message']=$message;
                header("location:../views/connexion_view.php");
            }
        }else{
            include ("../views/connexion_view.php");
        }
    }
public  function creerUtilisateur($nomUtilisateur, $motDePasseHash){
        if($_SERVER['REQUEST_METHOD']==='POST') {
            $utilisateurModel = new UtilisateurModel($this->db);
            $result = $utilisateurModel->creerUtilisateur($nomUtilisateur, $motDePasseHash);
            if ($result) {
                echo "<script>alert('Inscription avec succes'+$nomUtilisateur)</script>";
                header("location:../views/ajouter_notes_views2.php");
            } else {
                echo "<script>alert('Erreur d\'inscription'+$nomUtilisateur)</script>";
                include("../views/inscription_view.php");

            }
        }else{
            include("../views/inscription_view.php");
        }
}
}
?>