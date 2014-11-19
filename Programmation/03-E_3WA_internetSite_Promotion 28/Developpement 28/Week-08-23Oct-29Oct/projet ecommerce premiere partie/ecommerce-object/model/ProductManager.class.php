<?php

class ProductManager
{

  protected $pdo;

  public function __construct($connexion)
  {
    $this->pdo = $connexion;
  }

  public function getProducts()
  {
    $sql = 'SELECT * FROM product';
    $requete = $this->pdo->prepare($sql);
    //$requete->setFetchMode( PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Product');
    $requete->setFetchMode( PDO::FETCH_CLASS, 'Product');
    $requete->execute();

    return $requete->fetchAll();
  }

  public function getProductsOfCarousel()
  {
    $sql = 'SELECT id, image FROM product ORDER BY date_product DESC LIMIT 3';
    $requete = $this->pdo->prepare($sql);
    //$requete->setFetchMode( PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Product');
    $requete->setFetchMode( PDO::FETCH_CLASS, 'Product');
    $requete->execute();

    return $requete->fetchAll();
  }

}