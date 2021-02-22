<?php

class RecipeCollection 
{
	private $title;
	private $recipes = [];

	public function __construct($title)
	{
		$this->setTitle($title);	
	}

	public function setTitle($title) 
	{
		$this->title = ucwords($title);
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function addRecipe($recipe)
	{
		$this->recipes[] = ucwords($recipe);
	}

	public function getRecipes()
	{
		return $this->recipes;
	}
}