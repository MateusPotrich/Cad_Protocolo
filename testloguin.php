<?php
    session_start();
    //print_r($_REQUEST)
if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha'])) 
{
    include_once('config.php');
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    //print_r('Email: ' . $email);
    //print_r('Senha: ' . $senha);
    $sql = "SELECT * FROM cadastro WHERE nome = '$nome' and senha = '$senha'";
    
    $result = $conexao->query($sql);

    //print_r($result);
    if (mysqli_num_rows($result) < 1) 
    {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: tela_login.php');
    }
    else 
    {
        $_SESSION['nome'] = $nome;
        $_SESSION['senha'] = $senha;
        header('Location: cadastros.php');
    }
}
else
{
    header('Location: tela_login.php');
}
?>