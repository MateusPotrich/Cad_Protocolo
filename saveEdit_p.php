<?php
    
    include_once('config.php');

    if (isset($_POST['update'])) 
    {
        $n_protocolo = $_POST['n_protocolo'];
        $sd_contrib = $_POST['sd_contrib'];
        $data_registro = $_POST['data_registro'];
        $prazo = $_POST['prazo'];
        $sct_contrib = $_POST['sct_contrib'];


        $sqlUpdate = "UPDATE protocolo SET sd_contrib='$sd_contrib',data_registro=' $data_registro',prazo='$prazo',sct_contrib='$sct_contrib' WHERE n_protocolo='$n_protocolo'";

        $result = $conexao->query($sqlUpdate);
    } 
    
    header('Location: sistema_p.php');
?>