<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/jdlr/parfum_dynamique/backend/FormulaireManager.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/jdlr/parfum_dynamique/backend/Crypter.php');

class Controller {
  public function getForm() {
    if (isset($_POST['nom'])) {
      if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $nom = htmlentities($_POST['nom']);
        $mail = $_POST['mail'];
        $newsletter = intval($_POST['newsletter']);
        $objet = htmlentities($_POST['objet']);
        $message = htmlentities($_POST['message']);

        // $crypter = new Crypter();
        // $mail = $crypter->crypt($mail);
        $formulaire = new FormulaireManager();
        $formulaire->send($nom, $mail, $newsletter, $objet, $message);
      }
    }
  }
}
?>
