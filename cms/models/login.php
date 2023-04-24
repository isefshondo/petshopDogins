<?php
    if($_POST['usuario'] == 'admin' && $_POST['senha'] == 'admin'){
        // Criar uma sessão para o usuário
        session_start();
        $_SESSION['username'] = 'admin';
        echo json_encode(['status' => 'success', 'redirect' => '../views/homePage.php']);
    }else{
        // Retornar uma resposta de erro
        echo json_encode(['status' => 'error', 'message' => 'Usuário ou senha inválidos.']);
    }
    /*
    include("../../config/conn.php");

    $collection = $db->users;

    $user = $collection->findOne(['username' => $_POST['usuario']]);

    // Verificar a senha do usuário
    if(isset($user) && $user['password'] == $_POST['senha']){
        // Criar uma sessão para o usuário
        session_start();
        $_SESSION['username'] = $user['username'];
        echo json_encode(['status' => 'success', 'redirect' => '../views/homePage.php']);
    }else{
        // Retornar uma resposta de erro
        echo json_encode(['status' => 'error', 'message' => 'Usuário ou senha inválidos.']);
    }
    */

?>