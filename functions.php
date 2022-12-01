<?php 

function dd ($value)

{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();


}

function urlIs($value) {

return $_SERVER['REQUEST_URI'] == $value;


}

function abort() {

    http_response_code(404);
    echo "Fejl 404, vi kan desværre ikke finde siden i vores system";
    echo "<br/><br/>";
    echo "<a href='/'>Tilbage til forsiden</a>";
    die();


}