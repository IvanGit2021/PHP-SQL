<?php

if (isset($_GET['p'])) {

    $p = $_GET['p'];

    if ($p == 'menino')
        include('pages/menino.php');
    else if ($p == 'menina')
        include('pages/menina.php');
    else if ($p == 'bebe')
        include('pages/bebe.php');
    else if ($p == 'novidades')
        include('pages/novidades.php');
    else if ($p == 'home')
        include('pages/home.php');
    else if ($p == 'desporto')
        include('pages/desporto.php');
    else if ($p == 'bones')
        include('pages/bones.php');
    else if ($p == 'calcas')
        include('pages/calcas.php');
    else if ($p == 'camisas')
        include('pages/camisas.php');
    else if ($p == 'tshirt')
        include('pages/tshirt.php');
    else if ($p == 'sweatshirt')
        include('pages/sweatshirt.php');
    else if ($p == 'sapatos')
        include('pages/sapatos.php');
    else if ($p == 'casacos')
        include('pages/casacos.php');
    else if ($p == 'login')
        include('pages/login.php');
    else if ($p == 'favorites')
        include('pages/favorites.php');
    else if ($p == 'search')
        include('pages/search.php');
    else if ($p == 'searchdb')
        include('pages/searchDb.php');
    else if ($p == 'criarConta')
        include('pages/criarConta.php');
    else
        include('pages/404.php');
} else
    include('pages/home.php');
