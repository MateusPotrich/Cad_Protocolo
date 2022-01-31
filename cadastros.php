<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastros</title>
    <style>
        body{
            font-size: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, blue, green);
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: dodgerblue;
        }

    </style>
</head>
<body>
    <h1>Escolha a opção</h1>
    <div class="box">
        <a href="formulario.php">Cadastro de Pessoas</a>
        <a href="protocolo.php">Cadastro de Protocolos</a>
    </div>
</body>
</html>