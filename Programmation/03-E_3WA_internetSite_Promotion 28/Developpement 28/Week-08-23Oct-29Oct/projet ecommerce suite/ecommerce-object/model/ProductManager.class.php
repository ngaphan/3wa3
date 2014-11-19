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
    $sql = 'SELECT product.*, AVG(note) as avg, COUNT(note) as nbnote FROM product LEFT JOIN commentaire on id_produit = product.id GROUP BY product.id';
    $requete = $this->pdo->prepare($sql);
    //$requete->setFetchMode( PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Product');
    $requete->setFetchMode( PDO::FETCH_CLASS, 'Product');
    $requete->execute();

    return $requete->fetchAll();
  }

  public function getProductsOfCarousel()
  {
    $sql = 'SELECT image FROM product ORDER BY date_product DESC LIMIT 3';
    $requete = $this->pdo->prepare($sql);
    $requete->setFetchMode( PDO::FETCH_CLASS, 'Product');
    $requete->execute();

    return $requete->fetchAll();
  }

  public function getProductById($idProduct)
  {
    $sql = 'SELECT product.*, AVG(note) as avg, COUNT(note) as nbnote FROM product LEFT JOIN commentaire on id_produit = product.id WHERE product.id = :idProduct';
    $requete = $this->pdo->prepare($sql);
    $requete->setFetchMode( PDO::FETCH_CLASS, 'Product');
    $requete->bindValue(':idProduct', $idProduct, PDO::PARAM_INT);
    $requete->execute();

    return $requete->fetch();
  }

  public function getProduitsByIdProduit($id_produits)
  {
    // protection de $id_produits
    $id_produits = array_filter(array_map(function($value){ if((intval($value) != 0)) { return intval($value); }  }, $id_produits));

    // Ou utilisation de ci-dessous
    //$binds = substr(str_repeat("?,", count($id_produits)), 0, -1);
    //$sql = 'SELECT * FROM product WHERE id IN ('.$binds.')';
    $sql = 'SELECT * FROM product WHERE id IN ('.implode(',', $id_produits).')';
    $requete = $this->pdo->prepare($sql);
    /*
    foreach($id_produits as $key => $id)
    {
      $requete->bindValue($key + 1, $id, PDO::PARAM_INT);
    }
    */
    $requete->setFetchMode( PDO::FETCH_CLASS, 'Product');
    $requete->execute();

    return $requete->fetchAll();
  }
}