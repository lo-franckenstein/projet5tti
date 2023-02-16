<?php

$uri = $_SERVER['REQUEST_URI'];

if($uri === '/login'){
    require_once "Templates/Users/login.php";
}else if ($uri === '/profil'){
    require_once "Templates/Users/profil.php";
}else if ($uri === '/register'){
    require_once "Templates/Users/register.php";
}

?>