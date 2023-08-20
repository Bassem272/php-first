<?php
require_once '../utils/Router.php';
require_once '../controllers/controllers.php';

$controller = new Controllers();
Router :: get('/home', function () use ($controller){
    
    return $controller->home();

});
Router :: get('/mySkills', function () use ($controller){
    
    return $controller->mySkills();

});
Router :: get('/myProfile', function () use ($controller){
    
    return $controller->myProfile();

});

Router::get('/', function () use ($controller) { 
    return $controller->index(); 
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


