<?php

class HomeController
{
    public function index()
    {
        // Aqui você pode carregar as informações necessárias para exibir a página inicial

        // Por exemplo, pode carregar informações de um banco de dados ou de uma API
        // Depois, você pode renderizar a view correspondente à página inicial
        include('../app/views/home.php');
    }
}
