<?php

class Product
{

  protected $id;

  protected $nom;

  protected $description;

  protected $prix;

  protected $image;

  protected $date_product;

  protected $id_categorie;

  protected $avg;

  protected $nbnote;

  public function getId()
  {
    return $this->id;
  }

  public function setNom($newNom)
  {
    $this->nom = $newNom;
  }

  public function getNom()
  {
    return $this->nom;
  }

  public function setDescription($newDescription)
  {
    $this->description = $newDescription;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setPrix($newPrix)
  {
    $this->prix = $newPrix;
  }

  public function getPrix()
  {
    return $this->prix;
  }

  public function setImage($newImage)
  {
    $this->image = $newImage;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function setDateProduct($newDateProduct)
  {
    $this->date_product = $newDateProduct;
  }

  public function getDateProduct()
  {
    return $this->date_product;
  }

  public function setIdCategorie($newIdCategorie)
  {
    $this->id_categorie = $newIdCategorie;
  }

  public function getIdCategorie()
  {
      return $this->id_categorie;
  }

  public function setAvg($newAvg)
  {
    $this->avg = $newAvg;
  }

  public function getAvg()
  {
    if ($this->avg)
    {
      return round($this->avg);
    }
    else
    {
      return 0;
    }
  }

  public function setNote($newNote)
  {
    $this->nbnote = $newNote;
  }

  public function getNote()
  {
      return $this->nbnote;
  }

  public function getLittleDescription($nbchar = 50)
  {
    return (strlen($this->description) > $nbchar ? substr(substr($this->description,0,$nbchar),0,strrpos(substr($this->description,0,$nbchar)," "))."..." : $this->description);
  }

}