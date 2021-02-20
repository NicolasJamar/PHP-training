<?php

class Render
{
	public static function displayRecipe($recipe) 
	{
		$output = "";
		$output .= $recipe->getTitle() . " by " . $recipe->getSource();
		$output .= "<br/>";
		$output .= implode( ", ", $recipe->getTags());
		$output .= "<br/>";
		$output .= implode( ", ", $recipe->getInstructions());
		$output .= "<br/>";
		$output .= self::displayIngredients($recipe->getIngredients());
		return $output;
	}

	public static function displayIngredients($ingredients) 
	{
		$output = "";
		foreach ($ingredients as $ing ) {
			$output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"] . "</br>";
		}
		return $output;
	}
}