<?php 
    require 'fun.php';

    $uri = $_SERVER["REQUEST_URI"];

    if($uri === '/home'){
        require 'controllers/index.php';
    } elseif ($uri === '/test/about/') {
        require 'controllers/about.php';
    } elseif ($uri === '/test/contact/') {
        require 'controllers/contact.php';
    }
?>