<?php

class CategorieManager
{

  protected $pdo;

  public function __construct($connexion)
  {
    $this->pdo = $connexion;
  }

  public function getCategories()
  {
    $sql = 'SELECT * FROM categorie';
    $requete = $this->pdo->prepare($sql);
    $requete->setFetchMode( PDO::FETCH_CLASS, 'Categorie');
    $requete->execute();

    return $requete->fetchAll();
  }

  public function getProductByCategory($idcat)
  {
    $sql = 'SELECT * FROM product WHERE id_categorie = :id';
    $requete = $this->pdo->prepare($sql);
    $requete->setFetchMode( PDO::FETCH_CLASS, 'Categorie');
    $requete->bindValue(':id', $idcat, PDO::PARAM_INT);
    $requete->execute();

    return $requete->fetchAll();
  }

}