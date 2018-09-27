<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/jdlr/parfum_dynamique/backend/Manager.php');

class FormulaireManager extends Manager {

  public function send($nom, $mail, $newsletter, $objet, $message) {
    $req = $this->_connexion->getDb()->prepare('INSERT IGNORE INTO prospect (nom, mail, newsletter)
    VALUES (:nom, :mail, :newsletter)');
    $req->bindParam(':nom', $nom, PDO::PARAM_STR);
    $req->bindParam(':mail', $mail);
    $req->bindParam(':newsletter', $newsletter, PDO::PARAM_INT);
    $req->execute();

    if($newsletter == 1) {
      $reqUpd = $this->_connexion->getDb()->prepare('UPDATE prospect SET newsletter = :newsletter WHERE
        mail = :mail AND newsletter = 0');
        $reqUpd->bindParam(':newsletter', $newsletter);
        $reqUpd->bindParam(':mail', $mail);
        $reqUpd->execute();
    }

    $req2 = $this->_connexion->getDb()->prepare('INSERT INTO message (objet, message, nom_id)
    SELECT :objet, :message, id FROM prospect WHERE mail = :mail');
    $req2->bindParam(':objet', $objet);
    $req2->bindParam(':message', $message, PDO::PARAM_STR);
    $req2->bindParam(':mail', $mail, PDO::PARAM_STR);
    $req2->execute();
  }
}

?>
