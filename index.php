<?php

$pg = isset( $_GET['pg']);

if ($pg) {
    switch ($_GET['pg']) {
        case 'login':
            include_once 'painel/paginas/acesso/login.php';

            break;
        case 'dashboard': //pagina inicial do painel administrativo
            include_once 'painel/paginas/dashboard.php';

            break;

        default:
            include_once 'painel/paginas/dashboard.php';
            break;
    }
} else {
//não existes    
            include_once 'painel/paginas/dashboard.php';
}

        
        
        
        
        
        