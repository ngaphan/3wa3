<?php

class Rectangle extends Shape
{
	protected $height;
	protected $width;

	public function __construct()
	{
		// Appelle le constructeur de la classe parent, la classe Shape.
		parent::__construct();

		$this->height = 0;
		$this->width  = 0;
	}

	public function draw(Renderer $renderer)
	{
		// Utilisation de l'objet renderer pour dessiner un rectangle avec ses propriétés.
		
		// ???
	}

	public function setOrigin($x, $y)
	{
		// Accès à la propriété origin
		// qui est un objet de la classe Point.

		// ???
	}

	public function setSize($width, $height)
	{
		// ???
	}
}