<?php

class CommentaireManager
{

  protected $pdo;

  public function __construct($connexion)
  {
    $this->pdo = $connexion;
  }

  public function save($data)
  {
    $date = date('Y-m-d h:i:s');
    $sql = 'INSERT INTO commentaire (auteur, note, contenu, date_commentaire, id_produit) VALUES (:auteur, :note, :contenu, :date_commentaire, :id_produit)';
    $requete = $this->pdo->prepare($sql);
    $requete->bindValue(':auteur', $data['auteur'], PDO::PARAM_STR);
    $requete->bindValue(':note', $data['note'], PDO::PARAM_INT);
    $requete->bindValue(':contenu', $data['contenu'], PDO::PARAM_STR);
    $requete->bindValue(':date_commentaire', $date, PDO::PARAM_STR);
    $requete->bindValue(':id_produit', $data['id_produit'], PDO::PARAM_INT);
    $requete->setFetchMode( PDO::FETCH_CLASS, 'Product');
    return $requete->execute();
  }

  public function getCommentaires($idProduit)
  {
    $sql = 'SELECT * FROM commentaire WHERE id_produit = :id ORDER BY date_commentaire DESC';
    $requete = $this->pdo->prepare($sql);
    $requete->bindValue(':id', $idProduit, PDO::PARAM_INT);
    $requete->setFetchMode( PDO::FETCH_CLASS, 'Commentaire');
    $requete->execute();

    return $requete->fetchAll();
  }

}