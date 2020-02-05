<?php

 

$email = $_POST['email'];
$senha = $_POST['senha'];

session_start();

if ($email === 'admin@admin' && $senha === '123456'){
    session_start();
    $_SESSION['logado'] = true;
    header('Location: home.php');
}else{
    $_SESSION['erro'] = 'Usuários ou senha inválidos';
    header('Location: index.php');
}