<?php
    if (isseT($_POST['submit'])) 
    {
        include_once('config.php');

        $sd_contrib = $_POST['sac_contribuinte'];
        $data_registro = $_POST['data_r'];
        $prazo = $_POST['prazo'];
        $sct_contrib = $_POST['contribuinte'];

        $result = mysqli_query($conexao, "INSERT INTO protocolo(sd_contrib,data_registro,prazo,sct_contrib) VALUES (' $sd_contrib','$data_registro','$prazo','$sct_contrib')");

        header('Location: sistema_p.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Protocolos</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, blue, red);
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 30%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5px;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,blue, red);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 15px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, green, yellow);
        }
    </style>
</head>
<body>
    <a href="cadastros.php">Voltar</a>
    <div class="box">
        <form action="protocolo.php" method="POST">
            <fieldset>
                <legend><b>Registro de Protocolo</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="sac_contribuinte" id="sac_contribuinte" class="inputUser" required>
                    <label for="sac_contribuinte" class="labelInput">Sac do Contribuinte</label>
                </div>
                <br><br>
                <label for="data" ><b>Data do Registro:</b></label>
                <input type="date" name="data_r" id="data_r"  required>
                <br><br>
                <label for="prazo" ><b>Prazo para Resolução:</b></label>
                <input type="date" name="prazo" id="prazo"  required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="contribuinte" id="contribuinte" class="inputUser" required>
                    <label for="contribuinte" class="labelInput">Contribuinte</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit" >
            </fieldset>
        </form>
    </div>
</body>
</html>