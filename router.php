<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


// creating a routes array to map the uri to the controller
$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes'=> 'controllers/notes.php',
    '/contact' => 'controllers/contact.php',
];

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

routeToControlller($uri, $routes);

?>