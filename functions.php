<?php 
// functions that can be used in the app

function dd($args) {
    echo '<pre>';
    var_dump($args);
    echo '</pre>';
    die();
}


function urlIs($path) {
    return $_SERVER['REQUEST_URI'] === $path;
}

?>