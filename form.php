<?php

if (isset($_POST['submit'])) {
    //print_r($_POST['nome']);
    //print_r($_POST['email']);
    //print_r($_POST['telefone']);
    //print_r($_POST['senha']);

    include_once('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];

    $result = mysqli_query($mysqli, "INSERT INTO usuarios(nome,email,senha,telefone) 
    VALUES ('$nome','$email','$senha','$telefone')"); 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

    <style>
        body {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background: linear-gradient(to left, rgb(36, 52, 141), rgb(3, 206, 254));
            width: 100%;
            height: 100vh;
            color: (#E0E0E0)
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }

        fieldset {
            border: 3px solid dodgerblue;
        }

        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
            color: #E0E0E0;

        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid #E0E0E0;
            outline: none;
            color: #E0E0E0;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;

        }

        .labelInput {
            position: absolute;

            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: 20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #submit {
            background: linear-gradient(to left, rgb(58, 38, 185), rgb(3, 206, 254));
            width: 100%;
            border: none;
            padding: 15px;
            color: #E0E0E0;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;

        }

        #submit:hover {
            background: linear-gradient(to left, rgb(17, 29, 98), rgb(3, 206, 254));
        }

        a{
            color: black;
            text-decoration: none;
            position: relative;
            border: 1px solid dodgerblue;
            padding: 10px;
            top: 10px;
            position: absolute;
            right: 0;
            border-radius: 7px;
            background-color: rgba(0, 0, 0, 0.6);
        }

        a:hover{
            background-color: rgba(3, 206, 254);
        }
    </style>
</head>

<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="form.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput"> E-mail</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>