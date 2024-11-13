<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>

    <style>
        h1{
            padding-top: 35px;
        }
        body{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background: linear-gradient(to left, rgb(36, 52, 141), rgb(3,206,254));
            width: 100%;
            height: 100vh;
            text-align: center;
            color:(#E0E0E0) ;
        }

        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
            
        }

        a{
            text-decoration: none;
            color: (#E0E0E0);
            border: 3px solid #E0E0E0;
            border-radius: 10px;
            padding: 10px;
        }

        a:hover{
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    
   <h1>Bem-vindo à nossa página</h1> 

   <div class="box">
    <a href="login.php">Login</a>
    <a href="form.php">Cadastre-se</a>
   </div>

    
</body>
</html>
<!-- #region rgb(17,29,98), rgb(3,206,254)/-->