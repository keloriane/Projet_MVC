<?php
$get ="";
if (isset($_GET["page"])) {
    $get = addslashes($_GET["page"]);
}
// $get = explode("/", $_SERVER["REQUEST_URI"]);
$page = $get != "" ? $get : "home";
$view = "./views/" . $page . ".php";
$content="./views/home.php"; 

switch ($page) {
    case 'contact': $content="./views/contact.php"; break;
    case 'presentation': $content="./views/presentation.php"; break;
    case 'home': $content="./views/home.php"; break;
    default: $content="./views/error404.php"; break;
}

/*if (file_exists($view)) {
    $content = $view;
} else {
    $content = "./views/error404.php";
}*/

include "./views/master.php";
?>