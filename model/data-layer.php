<?php
/*data-layer.php
 *return data for the diner app
 *
 */

//Get the meals for the order form
function getMeals(){
    return array("breakfast", "lunch", "diner");
}

//get the conds for the meal
function getConds(){
    return array("ketchup", "mustard", "siracha");
}