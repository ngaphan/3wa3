<?php

abstract class Shape
{
	protected $color;
	protected $location;
  	protected $opacity;

	abstract public function draw(Renderer $renderer);
	//force kes class fille qui definie les methodes


	public function __construct()
	{
		$this->color    = 'black';
    	$this->location = new Point();// composition, attacher Point() à Shape
		$this->opacity  = 1;
	}

	public function setColor($color)
	{
		$this->color = $color;
	}

	public function setOpacity($opacity)
	{
		$this->opacity = $opacity;
	}
}
