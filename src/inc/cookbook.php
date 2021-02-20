<?php

// include "classes/recipes.php";

$recipe1 = new Recipe("Lasagna");
// $recipe1->setTitle("");
$recipe1->setSource("grandma");
$recipe1->addIngredient("haché porc-boeuf", 500, "g");
$recipe1->addIngredient("sirop", 300, "g");
$recipe1->addIngredient("chapelure", .1, "kg");
$recipe1->addInstruction("couper les légumes en dés");


// foreach ($recipe1->getIngredients() as $ing) {
// 	echo $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"] . "</br>";
// }

