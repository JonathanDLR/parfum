<?php
require_once('Bdd.php');

abstract class Manager {
  protected $_connexion;

  public function __construct() {
    $this->_connexion = new Bdd();
    $this->_connexion->setDns('mysql:host=; dbname=parfum; charset=utf8');
    $this->_connexion->setUser('');
    $this->_connexion->setMdp('');
    $this->_connexion->connect();
    $this->_connexion->setAttribute();
  }
}
