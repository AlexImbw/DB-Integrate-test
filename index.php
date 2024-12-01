<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Sistema</title>
</head>
<body>
    <div id="div-login">

        <section id="area-login">
            <h1>Cadastro</h1>
        </section>

        <form action="cria_usuario.php" method="post">

            <input type="text" name="nome" class="dados" placeholder="E-mail">
        
            <br>
            <br>
        
            <input type="password" name="passw" class="dados" placeholder="Senha">

            <br>
            <br>

            <input type="password" name="confpassw" class="dados" placeholder="Confirmar senha">
        
            <br>
            <br>
            <hr>
        
            <input type="submit" value="Cadastrar" id="entrar">
            <input type="submit" value="Entrar" hidden>

            <br>
            <br>

            <a href="">Fazer login</a>
            <a href="" hidden>Cadastrar-se</a>
        </form>
    </div>
    
</body>
</html>