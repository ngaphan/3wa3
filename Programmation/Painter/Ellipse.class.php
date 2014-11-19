<?php

class Ellipse extends Shape
{
	protected $xRadius;
	protected $yRadius;

	public function __construct()
	{
		// Appelle le constructeur de la classe parent, la classe Shape.
		parent::__construct();
		// ça veut dire , j'ai hérité des propriétés de mon parent qui sont les suivant
		/*
		 * $this->color    = 'black';
    	 * $this->location = new Point();// composition
		 * $this->opacity  = 1;
		 *
		*/

		$this->xRadius = 0;
		$this->yRadius = 0;
	}

	public function draw(Renderer $renderer)
	{
		// Utilisation de l'objet renderer pour dessiner une ellipse avec ses propriétés.
		
		// ???
	}

	public function setCenter($x, $y)
	{
		// Accès à la propriété origin
		// qui est un objet de la classe Point.
		
		// ???
	}

	public function setRadius($xRadius, $yRadius)
	{
		// ???
	}
}