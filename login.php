<?php
include('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if (strlen($_POST["senha"]) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST["email"]);
        $senha = $mysqli->real_escape_string($_POST["senha"]);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos"; //header('Location: login.php')

        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background: linear-gradient(to left, rgb(36, 52, 141), rgb(3, 206, 254));
            width: 100%;
            height: 100vh;
            color: (#E0E0E0)
        }

        h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -800%);
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

        button {
            background: linear-gradient(to left, rgb(58, 38, 185), rgb(3, 206, 254));
            width: 100%;
            border: none;
            padding: 15px;
            color: #E0E0E0;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;

        }

        button:hover {
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
    <h1>Acesse sua conta</h1>
    <div class="box">
        <form action="" method="POST">
            <fieldset>

                <div class="inputBox">
                    <p>
                        <label>E-mail</label class="labelInput">
                        <input for="email" name="email" class="inputUser" required>
                    </p>
                </div>
                <br><br>
                <div class="inputBox">
                    <p>
                        <label>Senha</label class="labelInput">
                        <input type="password" name="senha" class="inputUser" required>
                    </p>
                </div>
                <br><br>
                <p>
                    <button type="submit" value="Enviar">Enviar</button id="submit">
                </p>
            </fieldset>

        </form>
    </div>

</body>

</html>