<?php

class Commentaire
{

  protected $id;

  protected $auteur;

  protected $note;

  protected $contenu;

  protected $date_commentaire;

  protected $id_produit;

  public function getId()
  {
    return $this->id;
  }

  public function setAuteur($newAuteur)
  {
    $this->auteur = $newAuteur;
  }

  public function getAuteur()
  {
    return $this->auteur;
  }

  public function setNote($newNote)
  {
    $this->note = $newNote;
  }

  public function getNote()
  {
    return $this->note;
  }

  public function setContenu($newContenu)
  {
    $this->contenu = $newContenu;
  }

  public function getContenu()
  {
    return $this->contenu;
  }

  public function setDateCommentaire($newDateCommentaire)
  {
    $this->date_commentaire = $newDateCommentaire;
  }

  public function getDateCommentaire()
  {
    return $this->date_commentaire;
  }

  public function setIdProduit($newIdProduit)
  {
    $this->id_produit = $newIdProduit;
  }

  public function getIdProduit()
  {
    return $this->id_produit;
  }

}