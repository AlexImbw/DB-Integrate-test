<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="scripts.js"></script>
    <title>Sistema</title>
</head>
<body>
    <div id="div-login">
        <section id="area-login">
            <h1 id="titulo-form">Cadastro</h1>
        </section>

        <!-- Formulário de Cadastro -->
        <form id="form-cadastro" action="cria_usuario.php" method="post">
            <input type="text" name="nome" class="dados" placeholder="E-mail" required>
            <br><br>

            <input type="password" name="passw" class="dados" placeholder="Senha" required>
            <br><br>

            <input type="password" name="confpassw" class="dados" placeholder="Confirmar senha" required>
            <br><br>

            <hr>

            <input type="submit" value="Cadastrar" class="entrar">
            <br><br>

            <a href="javascript:void(0);" id="fl" onclick="toggleForms()">Já tem uma conta? Fazer login</a>
        </form>

        <!-- Formulário de Login (inicialmente oculto) -->
        <form id="form-login" action="login.php" method="post" style="display: none;">
            <input type="text" name="email" class="dados" placeholder="E-mail" required>
            <br><br>

            <input type="password" name="password" class="dados" placeholder="Senha" required>
            <br><br>

            <hr>

            <input type="submit" value="Entrar" class="entrar">
            <br><br>

            <a href="javascript:void(0);" id="fl-cadastro" onclick="toggleForms()">Ainda não tem uma conta? Cadastre-se</a>
        </form>
    </div>
