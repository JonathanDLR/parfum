<?php
require_once('Bdd.php');

abstract class Manager {
  protected $_connexion;

  public function __construct() {
    $this->_connexion = new Bdd();
    $this->_connexion->setDns('mysql:host=192.168.3.125; dbname=parfum; charset=utf8');
    $this->_connexion->setUser('root');
    $this->_connexion->setMdp('sqlcoda#2018!');
    $this->_connexion->connect();
    $this->_connexion->setAttribute();
  }
}
