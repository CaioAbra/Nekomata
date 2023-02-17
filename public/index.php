<?php

define('ROOT_PATH', realpath(__DIR__ . '/../'));

// echo ROOT_PATH;
$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case '':
        // Chama o controlador correspondente à página inicial
        include ROOT_PATH . '/app/controllers/HomeController.php';
        $homeController = new HomeController();
        $homeController->index();
        break;

    case '/':
        // Chama o controlador correspondente à página inicial
        include ROOT_PATH . '/app/controllers/HomeController.php';
        $homeController = new HomeController();
        $homeController->index();
        break;

    case 'contato':
        // Chama o controlador correspondente à página de contato
        break;

    case 'sobre':
        // Chama o controlador correspondente à página sobre
        break;

    default:
        // Exibe uma página de erro
        echo "404";
        break;
}
