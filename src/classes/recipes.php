<?php 

declare(strict_types=1);

class Recipe
{
	private $title;
	private $ingredients = [];
	private $instructions = [];
	private $yield;
	private $tags = [];
	private $source = "The crazy cooker";
	private $measurements = [
		"liter",
		"g",
		"kg",
		"cup",
		"soup spoon",
		"coffee spoon"
	];

	public function __construct($title)
	{
		$this->setTitle($title);	
	}

	public function __toString()
	{
		$output = "Your are calling a " . __CLASS__ . " object withe the title \"";
		$output .= $this->getTitle() . "\".";
		$output .= " It is stored in " . basename(__FILE__) . " at " . __DIR__ . ".";
		$output .= " This display from line " . __LINE__ . " in method " . __METHOD__ . "<br/>";
		$output .= " The following methods are available for objects in this class: ";
		$output .= implode("<br/>", get_class_methods(__CLASS__));
		return $output;
	}

	public function setTitle($title) 
	{
		$this->title = ucwords($title);
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function addIngredient($item, $amount = null, $measure = null)
	{
		if($amount != null && !is_float($amount) && !is_int($amount)) {
			exit("The amount must be a float :" . gettype($amount) . " $amount given." );
		}

		if($measure != null && !in_array($measure, $this->measurements)) {
			exit("The measure must be a " . implode(", ", $this->measurements));
		}
		$this->ingredients[] = [
			"item" 	  => ucwords($item),
			"amount"  => $amount,
			"measure" => strtolower($measure),
		];
	}

	public function getIngredients()
	{
	    return $this->ingredients;
	}

	public function addInstruction($string)
	{
	    $this->instructions[] = $string;
	}

	public function getInstructions()
	{
	    return $this->instructions;
	}

	public function addTag($tag)
	{
	    $this->tags[] = strtolower($tag);
	}

	public function getTags()
	{
	    return $this->tags;
	}

	public function setYield($yield)
	{
	    $this->yield = $yield;
	}

	public function getYield()
	{
	    return $this->yield;
	}

	public function setSource($source)
	{
	    $this->source = ucwords($source);
	}

	public function getSource()
	{
	    return $this->source;
	}

	public function addMeasurements($string) 
	{
		return $this->measurements[] = $string;
	}

	public function getMeasurements() 
	{
		return $this->measurements;
	}


}




// echo $recipe1->getIngredients();