<?php

function permission(){
    $ci = get_instance();
    $loggedUser = $ci->session->userdata("logged_user");
    if(!$loggedUser){
        $ci->session->set_flashdata("danger", "Você precisa estar logado para acessar essa página!");
        redirect('login');
    }
    return $loggedUser;
}

function permissionAdm(){
    $ci = get_instance();
    $loggedUser = $ci->session->userdata("logged_user");
    if($loggedUser['funcao'] != "administrador"){
        $ci->session->set_flashdata("danger", "Você precisa estar logado como administrador para acessar esta página!");
        redirect('erro');
    }
    return $loggedUser;
}