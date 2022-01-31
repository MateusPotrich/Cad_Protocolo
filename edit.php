<?php
    if (!empty($_GET['id'])) 
    {
        
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect ="SELECT * FROM cadastro WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $senha = $user_data['senha'];
                $cpf = $user_data['cpf'];
                $sexo = $user_data['sexo'];
                $data_nasc = $user_data['data_nascimento'];
                $cidade = $user_data['cidade'];
                $bairro = $user_data['bairro'];
                $rua = $user_data['rua'];
                $numero = $user_data['numero'];
                $complemento = $user_data['complemento'];  
            }
            
        }
        else 
        {
            header('Location: sistema.php');
        }


        
 

    }
    else
    {
        header('Location: sistema.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de pessoas</title>
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
            width: 25%;
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
        #update{
            background-image: linear-gradient(to right,blue, red);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 15px;
        }
        #update:hover{
            background-image: linear-gradient(to right, green, yellow);
        }
    </style>
</head>
<body>
    <a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Pessoas</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" value="<?php echo $cpf ?>" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br><br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" <?php echo $sexo == 'feminino' ? 'checked' : '' ?> required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" <?php echo $sexo == 'masculino' ? 'checked' : '' ?> required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outros" name="genero" value="outros" <?php echo $sexo == 'outros' ? 'checked' : '' ?> required>
                <label for="outros">Outros</label>
                <br><br>                
                <label for="data_nascimento" ><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc ?>"  required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade ?>" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="bairro" id="bairro" class="inputUser" value="<?php echo $bairro ?>" required>
                    <label for="bairro" class="labelInput">Bairro</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="rua" id="rua" class="inputUser" value="<?php echo $rua ?>" required>
                    <label for="rua" class="labelInput">Rua</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="numero" id="numero" class="inputUser" value="<?php echo $numero ?>" required>
                    <label for="numero" class="labelInput">Numero</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="complemento" id="complemento" class="inputUser" value="<?php echo $complemento ?>" required>
                    <label for="complemento" class="labelInput">Complemento</label>
                </div>
                <br><br>
                 <input type="hidden" name="id" id="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>
</body>
</html>