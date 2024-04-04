<?php 

$routes = require 'routes/routes.php';





// function to route the uri to the controller
function routeToControlller($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}


// function to abort the request with a status code
function abort($code = 404) {
    http_response_code($code);
    require "views/{$code}.view.php";
    die();
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
routeToControlller($uri, $routes);



?>