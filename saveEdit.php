<?php
    
    include_once('config.php');

    if (isset($_POST['update'])) 
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];

        $sqlUpdate = "UPDATE cadastro SET nome='$nome',senha='$senha',cpf='$cpf',sexo='$sexo',data_nascimento='$data_nasc',cidade='$cidade',bairro='$bairro',rua='$rua',numero='$numero',complemento='$complemento'
        WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    } 
    
    header('Location: sistema.php');
?>