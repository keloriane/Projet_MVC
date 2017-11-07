<?php

$uri = explode("/", $_SERVER["REQUEST_URI"]);
print_r($uri);
$page = $uri[2] != "" ? $uri[2] : "presentation";
$view = "./views/" . $page . ".php";
$content = "";

if (file_exists($view)) {
    $content = $view;
} else {
    $content = "./views/error404.php";
}

include "./views/master.php";
?>