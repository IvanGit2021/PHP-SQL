<?php

if (isset($_GET['p'])) {

    $p = $_GET['p'];

    if ($p == 'menino')
        echo "<title>Menino</title>";
    else if ($p == 'menina')
        echo "<title>Menina</title>";
    else if ($p == 'bebe')
        echo "<title>Bebé</title>";
    else if ($p == 'novidades')
        echo "<title>Novidades</title>";
    else if ($p == 'login')
        echo "<title>Login</title>";
    else if ($p == 'criarConta')
        echo "<title>Criar Conta</title>";
    else if ($p == 'calcas')
        echo "<title>Calças</title>";
    else if ($p == 'desporto')
        echo "<title>Desporto</title>";
    else if ($p == 'camisas')
        echo "<title>Camisas</title>";
    else if ($p == 'sapatos')
        echo "<title>Sapatos</title>";
    else if ($p == 'tshirt')
        echo "<title>T-Shirts</title>";
    else if ($p == 'sweatshirt')
        echo "<title>Sweatshirts</title>";
    else if ($p == 'bones')
        echo "<title>Bonés</title>";
    else if ($p == 'casacos')
        echo "<title>Casacos</title>";
    else if ($p == 'favoritos')
        echo "<title>Favoritos</title>";
    else if ($p == 'search')
        echo "<title>Procurar</title>";
    else if ($p == 'home')
        echo "<title>Boutique Joana Rita</title>";
    else
        echo "<title>Página não encontrada</title>";
} else
    echo "<title>Boutique Joana Rita</title>";
