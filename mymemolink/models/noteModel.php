<?php
class NoteModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function creerNoteAvecCodeRecuperation1($codeRecuperation,$titre, $contenu) {

        $query = "INSERT INTO notes (CodeRecuperation, Titre, Contenu) VALUES ('$codeRecuperation', '$titre', '$contenu')";
        $result = $this->db->query($query);

        if (!$result) {
            die("Erreur dans la requête : " . $this->db->error);
        }

        return $codeRecuperation; // Retourne le code de récupération généré
    }
    public function creerNoteAvecCodeRecuperation($codeRecuperation,$titre, $contenu,  $utilisateurID) {

        $query = "INSERT INTO notes (CodeRecuperation, Titre, Contenu, UtilisateurID) VALUES ('$codeRecuperation', '$titre', '$contenu', '$utilisateurID')";
        $result = $this->db->query($query);

        if (!$result) {
            die("Erreur dans la requête : " . $this->db->error);
        }

        return $codeRecuperation; // Retourne le code de récupération généré
    }

    public function getNotesParCodeEtID($code, $utilisateurID) {


        $query = "SELECT * FROM notes WHERE CodeRecuperation = '$code' AND UtilisateurID = '$utilisateurID'";
        $result = $this->db->query($query);

        if (!$result) {
            die("Erreur dans la requête : " . $this->db->error);
        }


        return $result->fetch(PDO::FETCH_OBJ);
    }
    public function getNotesParID($utilisateurID) {


        $query = "SELECT * FROM notes WHERE  UtilisateurID = '$utilisateurID'";
        $result = $this->db->query($query);

        if (!$result) {
            die("Erreur dans la requête : " . $this->db->error);
        }


        return $result->fetch(PDO::FETCH_OBJ);
    }
    public  function getNotesParCode($code)
    {
        $query = "select * from notes where CodeRecuperation = '$code'";
        $result = $this->db->query($query);
        if(!$result){
            die("Erreur dans la requête :". $this->db->error);
        }
        return $result->fetch(PDO::FETCH_OBJ);
    }
    public function supprimerNotes($code, $utilisateurID)
    {
        $query = "DELETE FROM notes WHERE CodeRecuperation = '$code' AND UtilisateurID = '$utilisateurID'";
        $result = $this->db->query($query);

        if (!$result) {
            die("Erreur dans la requête : " . $this->db->error);
        }
    }

}
?>
