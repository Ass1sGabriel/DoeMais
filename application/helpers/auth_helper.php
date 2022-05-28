<?php

function permission(){
    $ci = get_instance();
    $loggedUser = $ci->session->userdata("logged_user");
    if(!$loggedUser){
        //$ci->session->set_flashdata("danger", "Você precisa estar logado para acessar essa página!");
        $ci->session->set_flashdata(
            'erro_login',
            '<div class="error">Você precisa estar logado para acessar essa página!</div>'
        );
        redirect('login');
    }
    return $loggedUser;
}

function permissionAdm(){
    $ci = get_instance();
    $loggedUser = $ci->session->userdata("logged_user");
    if($loggedUser['funcao'] != "administrador"){
        //$ci->session->set_flashdata("danger", "Você precisa estar logado como administrador para acessar esta página!");
        $ci->session->set_flashdata(
            'erro_adm',
            '<div class="error">Você precisa estar logado como administrador para acessar esta página!</div>'
        );
        redirect('dashboard');
    }
    return $loggedUser;
}