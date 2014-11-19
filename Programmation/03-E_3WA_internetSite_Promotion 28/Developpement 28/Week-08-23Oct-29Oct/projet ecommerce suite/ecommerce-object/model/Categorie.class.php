<?php

class Categorie
{

  protected $id;

  protected $nom;

  protected $description;

  protected $image;

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

  public function setImage($newImage)
  {
    $this->image = $newImage;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function getLittleDescription($nbchar = 50)
  {
    return (strlen($this->description) > $nbchar ? substr(substr($this->description,0,$nbchar),0,strrpos(substr($this->description,0,$nbchar)," "))."..." : $this->description);
  }

}