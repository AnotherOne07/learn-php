<?php
// phpinfo();

// echo __FILE__;


// This is a basic type of route handling example
// Where i used the SUPERGLOBAL REQUEST URI and a 
// switch statement to handle the routing 
$request = $_SERVER['REQUEST_URI'];
$viewDir = '/Views';

switch($request) {
    case '':
    case '/':
        require __DIR__ . $viewDir . '/index.php';
        break;
    case '/views/users':
        require __DIR__ . $viewDir . '/users.php';
        break;
    case '/views/login':
        require __DIR__ . $viewDir . '/login.php';
        break;
    default:
        // http_response_code(404);
        // require __DIR__ . $viewDir . '404.php';
        echo 'route error';
        break;
}
