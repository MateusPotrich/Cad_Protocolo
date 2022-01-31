<?php
if (!empty($_GET['n_protocolo'])) 
{
    
    include_once('config.php');

    $id = $_GET['n_protocolo'];

    $sqlSelect ="SELECT * FROM protocolo WHERE n_protocolo=$n_protocolo";

    $Delete = $conexao->query($sqlSelect);

    if($Delete->num_rows > 0)
    {
        $sqlDelete = "DELETE FROM protocolo WHERE n_protocolo=$n_protocolo";
        $resultDelete = $conexao->query($sqlDelete);
        
    }
    else 
    {
        header('Location: sistema_p.php');
    }


    


}
?>