<?php 

function dnd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value){
    return $_SERVER["REQUEST_URI"] === $value;
  }

?>