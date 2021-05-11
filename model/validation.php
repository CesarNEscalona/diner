<?php

/* validation.php
    Validate data for the diner app
*/

// Returns true if a food is valid
function validFood($food)
{
    return strlen(trim($food)) >= 2;
}

// Returns true if a cond is valid
function validCondiments($condiments)
{
    $validCondiments = getConds();
    // Make sure each selected condiment is valid
    foreach ($condiments as $userChoice) {
        if(!in_array($userChoice, $validCondiments)){
            return false;
        }
    }
    // All choices are valid
    return true;
}