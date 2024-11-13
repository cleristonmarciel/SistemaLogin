<?php

include("protect.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>

<style>
   
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background: linear-gradient(to left, rgb(36, 52, 141), rgb(3, 206, 254));
            width: 100%;
            height: 100vh;
            color: #333;
}


.navbar {
    background-color:linear-gradient(to left, rgb(36, 52, 141), rgb(3, 206, 254)); /* Cor de fundo da barra */
    padding: 10px 20px;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
}

.navbar-menu {
    display: flex;
    list-style: none;
    justify-content: flex-start; /* Alinha itens à esquerda */
}

.navbar-menu li {
    margin-right: 20px;
}

.navbar-menu a {
    color: white;
    text-decoration: none;
    font-size: 16px;
    padding: 8px 12px;
    transition: 0.3s;
}

.navbar-menu a:hover {
    background-color: rgba(36, 52, 141); 
    border-radius: 4px;
    
}


.content {

    padding: 80px 20px; 
    font-family: Arial, sans-serif;
    text-align: center;
}
</style>

<body>
    
    <div class="content">
        <h1>Bem-vindo(a) ao painel, <?php echo $_SESSION['nome']; ?>!</h1>
        <br><br>
        
    </div>


    
    <nav class="navbar">
        <ul class="navbar-menu">
            <li><a href="#dashboard">Dashboard</a></li>
            <li><a href="#financeiro">Financeiro</a></li>
            <li><a href="#vendas">Vendas</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </nav>
</body>

</html>