<?php 
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

include_once 'layout/get_template.php';

if(isset($_GET) && isset($_GET['page'])){
    // Split le paramètre 'page' pour obtenir un tableau de noms de fichiers
    $pages = explode('/', $_GET['page']);
    // Utiliser la fonction correcte, qui est get_page_path et non get_template
    $page_path = get_page_path($_GET['page']);
    include_once 'layout/head.php';
    include_once $page_path;
    include_once 'layout/footer.php';
} else {
    // Page par défaut en cas de paramètre manquant
    include_once 'layout/head.php';
    include_once 'pages/404/404.php';
    include_once 'layout/footer.php';
}  
?>
