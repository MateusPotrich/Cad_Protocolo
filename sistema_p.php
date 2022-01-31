<?php
    session_start();
    include_once('config.php');
    //print_r($_SESSION);
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true)) 
    {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: sistema_p.php');

    }
    $logado = $_SESSION['nome'];

    $sql = "SELECT * FROM  protocolo ORDER BY n_protocolo DESC";

    $result = $conexao->query($sql);

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sistema</title>
    <style>
        body{
            background-image: linear-gradient(45deg, blue, red);
            color: white;
            text-align: center;
        }
        .navbar-brand{
            background: dodgerblue;
            color: white;

        }
        .container-fluid{
            background: dodgerblue;
        }
        nav{
            background: dodgerblue;
        }
        .table-bg{
            background: rgba(0,0,0,0.3);
            border-radius: 15px 15px 0 0;


        }
    </style>
</head>
<body>
 <nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema</a>
    <div class="d-flex">
        <a href="sair.php" class="btn btn-danger">Sair</a>
    </div>
 </nav>
 <br>
  <?php 
      echo "<h1>Bem vindo <u>$logado</u></h1>";
  ?>
  <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">sd_contrib</th>
                    <th scope="col">data_registro</th>
                    <th scope="col">prazo</th>
                    <th scope="col">sct_contrib</th>
                </tr>
            </thead>
        <tbody>
            <?php
                while($user_data = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>".$user_data['n_protocolo']."</td>";
                    echo "<td>".$user_data['sd_contrib']."</td>";
                    echo "<td>".$user_data['data_registro']."</td>";
                    echo "<td>".$user_data['prazo']."</td>";
                    echo "<td>".$user_data['sct_contrib']."</td>";
                    echo "<td>
                        <a class='btn btn-sm btn-primary' href='edit_p.php?n_protocolo=$user_data[n_protocolo]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                        </a>
                        <a class='btn btn-sm btn-danger' href='edit_p.php?n_protocolo=$user_data[n_protocolo]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                            </svg>
                        </a>
                    </td>";
                    echo "</tr>";
                }
            ?>   
        </tbody>
        </table>
  </div>
   

</body>
</html>
