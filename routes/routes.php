<?php
// creating a routes array to map the uri to the controller

return $routes = [
        '/' => 'controllers/index.php',
        '/about' => 'controllers/about.php',
        '/notes'=> 'controllers/notes/index.php',
        '/note'=> 'controllers//notes/show.php',
        '/notes/create'=> 'controllers/notes/create.php',
        '/notes/edit'=> 'controllers/notes/edit.php',
        '/contact' => 'controllers/contact.php',
        '/user' => 'controllers/user.php',
    ];
?>