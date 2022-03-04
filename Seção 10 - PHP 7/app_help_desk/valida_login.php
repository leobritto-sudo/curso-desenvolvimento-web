<?php

    session_start();

    $authenticated_user = false;
    $user_id = null;
    $user_profile_id = null;

    $perfis = array(1 => 'Administrador', 2 => 'Usuário');

    $usuarios_app = array(
        array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
        array('id' => 3, 'email' => 'joao@teste.com.br', 'senha' => '123456', 'perfil_id' => 2),
        array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '123456', 'perfil_id' => 2)
    );

    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $authenticated_user = true;
            $user_id = $user['id'];
            $user_profile_id = $user['perfil_id'];
        }
    }

    if($authenticated_user){
        header('Location: home.php');
        $_SESSION['authenticated'] = 'SIM';
        $_SESSION['id'] = $user_id;
        $_SESSION['id_profile'] = $user_profile_id;
    }
    else{
        header('Location: index.php?login=erro');
        $_SESSION['authenticated'] = 'NAO';
    }

    /* print_r($_GET);
    echo $_GET['email'];
    echo $_GET['senha']; */

    /* print_r($_POST);
    echo $_POST['email'];
    echo $_POST['senha'];
 */

?>