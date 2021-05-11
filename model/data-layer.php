<?php

/* data-layer.php
    return data for the diner app

*/

// Get the meals for the order form
function getMeals()
{
    return array("breakfast", "brunch", "lunch", "dinner", "dessert");
}

// Return true if meal is valid
function validMeal($meal)
{
    return in_array($meal, getMeals());
}

// Get the conds for the order form
function getConds()
{
    return array("ketchup", "mustard", "sriracha");
}
