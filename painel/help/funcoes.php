<?php

function verificarLogin() {
    //no futuro as informações são
    //trazidos do banco de dados

    $usuario = 'hermes';
    $senha = '123';

    //verificar se as informaçoes passados
    //pelo usuario e igual a que estão no banco
    if ($_POST) {




        if ($_POST['usuario'] == $usuario &&
                $_POST['senha'] == $senha) {

        //cria dados na session
            $_SESSION ['usuario'] = $usuario;
            return TRUE;
        } else {
            return FALSE;
        }
    } else {
        if (isset($_SESSION ['usuario'])) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
