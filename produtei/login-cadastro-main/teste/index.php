<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
 
<body>
    <div class="container login-container">
        <h2 class="text-center mb-4">Login</h2>
        <?php
        if (isset($_GET['mensagem'])) {
            echo '<h3 class="text-center mb-4">Senha ou usuario incorreto</h3>';
        }
        ?>
        <form action="validar-senha.php" method="post">
            <input type="text"name="usuario" placeholder="usuario"><br>
            <input type="text" name="senha" placeholder="senha"><br>
            <input type="submit" value="Enviar">
        </form>
        <a href="cadastro.php">Não tem conta ainda?</a>
    </div>
</body>
</html>