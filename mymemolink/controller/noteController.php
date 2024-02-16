<?php
require"../models/noteModel.php";

class NoteController {
    private $db;

    public function __construct($db) {
        $this->db=$db;
    }

    public function creerNoteAvecCodeRecuperation($codeRecuperation, $titre, $contenu, $utilisateurID) {
       if($_SERVER['REQUEST_METHOD']=='POST'){
           $noteModel = new NoteModel($this->db);
           $codeRecuperation=$noteModel->creerNoteAvecCodeRecuperation($codeRecuperation,$titre, $contenu,  $utilisateurID);
           if($codeRecuperation){
               $_SESSION['message_note']= 'creation avec success';
               $_SESSION['codeRecuperation']=$codeRecuperation;
           }else{
               $_SESSION['message_note']='erreur de création, veuillez réessayer';

           }
       }
    }
    public function creerNoteAvecCodeRecuperation1($codeRecuperation, $titre, $contenu) {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $noteModel = new NoteModel($this->db);
            $codeRecuperation=$noteModel->creerNoteAvecCodeRecuperation1($codeRecuperation,$titre, $contenu);
            if($codeRecuperation){
                $_SESSION['message_note']= 'creation avec success';
                $_SESSION['codeRecuperation']=$codeRecuperation;
                header("location:../views/ajout_notes_views.php");
            }else{
                $_SESSION['message_note']='erreur de création, veuillez réessayer';

            }
        }
    }

    public function getNotesParCodeEtID($code, $utilisateurID) {
        $noteModel = new NoteModel($this->db);
        return $noteModel->getNotesParCodeEtID($code, $utilisateurID);

    }

    public function getNotesParCode($code) {
        $noteModel = new NoteModel($this->db);
        return $noteModel->getNotesParCode($code);
    }

    public function supprimerNotes($code, $utilisateurID) {
        $noteModel = new NoteModel($this->db);
        return $noteModel->supprimerNotes($code, $utilisateurID);
    }
    public function getNotesParI($utilisateurID){
        $noteModel = new NoteModel($this->db);
        return $noteModel->getNotesParID($utilisateurID);
    }

}

// Exemple d'utilisation

?>
