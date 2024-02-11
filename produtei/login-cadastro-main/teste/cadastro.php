<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <div class="formulario">
    <h1>Cadastro</h1>
        <form method="post" action="criarcadastro.php">
            
            <div class="form-group">
            
                <input type="text" class="forr-control" id="nome" name="nome" placeholder="Nome">
            </div>
            
            <div class="form-group">
              
                <input type="text" class="forr-control" id="email" name="email" placeholder="Email">
            </div>
            
            <div class="form-group">
               
                <input type="text" class="forr-control" id="usuario" name="usuario" placeholder="Usuário">
            </div>
            
            <div class="mt-1 form-group">
               
                <input type="text" class="form-control" id="senha" name="senha" placeholder="Senha">
            </div>
            
            
            <div class="mt-2 text-center">
                <input type="submit" value="Enviar">
            </div>
            
            <a href="index.php"> Fazer Login</a>
        </form>
    </div>
</div>
</body>
</html>