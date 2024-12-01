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
            <h1>Login</h1>
        </section>
        <form action="cria_usuario.php" method="post">

            <input type="text" name="nome" class="dados" placeholder="Nome">
        
            <br>
            <br>
        
            <input type="password" name="passw" class="dados" placeholder="Senha">
        
            <br>
            <br>
            <hr>
        
            <input type="submit" value="Entrar" id="entrar">

            <br><br>

            <a href="">Esqueci a minha senha!</a>
    </div>
    </form>
</body>
</html>