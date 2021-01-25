<?php

include_once 'painel/help/funcoes.php';

$pg = isset( $_GET['pg']);

if ($pg) {
    switch ($_GET['pg']) {
        
        
        case 'inicial':
            include_once 'site/inicio.php';

            break;
        
        case 'login':
            include_once 'painel/paginas/acesso/login.php';

            break;
        case 'dashboard':
            //pagina inciail admin
         if (verificarLogin()){
             
             include_once 'painel/paginas/includes/header.php';
             include_once 'painel/paginas/includes/menus.php';
             include_once 'painel/paginas/dashboard.php';
             include_once 'painel/paginas/includes/footer.php';
         } else {
             echo 'login ou senha invalidos';
           
         }

            break;

        default:
            include_once 'painel/paginas/dashboard.php';
            break;
    }
} else {
//não existes    
            include_once 'painel/paginas/dashboard.php';
}

        
        
        
        
        
        