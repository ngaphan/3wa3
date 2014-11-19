<?php

class Database
{

  private function __construct(){}
  
  private static $_instance = null;

  public static function getInstance()
  {

    if(is_null(self::$_instance)) {
      $dsn = 'mysql:host=localhost;dbname=ecommerce;charset=utf8';
      $utilisateur = 'root';
      $motDePasse = 'troiswa';
      $connexion = new PDO($dsn, $utilisateur, $motDePasse);
      self::$_instance = $connexion;
    }

    return self::$_instance;
  }
}