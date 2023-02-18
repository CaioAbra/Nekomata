<?php

class HomeController
{
    public function index()
    {
        // Aqui você pode carregar as informações necessárias para exibir a página inicial

        // Por exemplo, pode carregar informações de um banco de dados ou de uma API
        // Depois, você pode renderizar a view correspondente à página inicial
        include(ROOT_PATH . '/includes/header.php');
        include(ROOT_PATH . '/app/views/home.php');
        include(ROOT_PATH . '/includes/footer.php');
    }
}
