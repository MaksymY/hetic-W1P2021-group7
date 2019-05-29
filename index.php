<?php
session_start();
$_SESSION['user'] = array(

    "id" => 364,
    "name" => "Peter"
);
$bdd= new PDO("mysql:host=localhost;dbname=Penpal;charset=utf8", "root", "");

// include_once 'config/db.php';
//  Database::connect(); 
// // Database::$pdo

//Définition de la page courante 
if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
}else {
    $page = 'home';
}

// Array contenant tout les pages
$allPages = scandir('controllers/');

if (in_array($page.'_controller.php', $allPages)){
    
    //inclusion de la page 
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';

} else {
    
    echo'Erreur 404';

} 