<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>cadastrar usuario</h1>    
        <?php 
        if(isset($_SESSION['msg']))
        {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }        
        ?>
            <form method="post" action="processa.php">
            
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="digite o nome completo">
            
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" placeholder="digite sua senha">
            
                <input type="submit" value="cadastrar">
            </form>
    </header>
    <button>
        <a href="login.php">entrar em uma conta existente</a>

    </button>
</body>
</html>                                  