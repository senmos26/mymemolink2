<?php
class UtilisateurModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function creerUtilisateur($nomUtilisateur, $motDePasseHash) {

        $query = "INSERT INTO Utilisateurs (NomUtilisateur, MotDePasse) VALUES ('$nomUtilisateur', '$motDePasseHash')";
        $result = $this->db->query($query);

        if (!$result) {
            die("Erreur dans la requête : " . $this->db->error);
        }
        return $result;
    }

    public function getUtilisateurParNom($nomUtilisateur,$motDePasse) {

        $query = "SELECT * FROM Utilisateurs WHERE Nom = '$nomUtilisateur' and MotDePasse = '$motDePasse'";
        $result = $this->db->query($query);

        if (!$result) {
            die("Erreur dans la requête : " . $this->db->error);
        }

        return $result->fetch(PDO::FETCH_OBJ);
    }
}

