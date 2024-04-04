<?php
// creating a routes array to map the uri to the controller

return $routes = [
        '/' => 'controllers/index.php',
        '/about' => 'controllers/about.php',
        '/notes'=> 'controllers/notes/notes.php',
        '/note'=> 'controllers//notes/note.php',
        '/notes/create'=> 'controllers/notes/create.php',
        '/contact' => 'controllers/contact.php',
        '/user' => 'controllers/user.php',
    ];
?>