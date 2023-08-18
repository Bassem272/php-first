<?php
require_once '../utils/Router.php';
require_once '../controllers/controllers.php';

$controller = new Controllers();
Router::get('/', function () use ($controller) { // Fixed the variable name
    return $controller->index(); // Use $controller, not $controllers
});
Router::get('/about', function () {
    echo "This is the about page.";
});
Router :: get('/add', function () use ($controller){
    $REQUEST=$_GET;
    return $controller->add($REQUEST);

});
Router :: get('/profile', function () use ($controller){
    
    return $controller->profile();

});
Router :: get('/friends', function () use ($controller){
    
    return $controller->friends();

});




?>


