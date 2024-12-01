<?php

//TESTA DE SE A PAGINA PRINCIPAL ESTÁ PEGANDO OS DADOS DO ARQUIVO DE CONEXÃO. 
echo("OK");


//DADOS DO BANCO DADOS

$usuario = 'root';
$senha = '';
$dbname = 'login-teste';
$host = 'localhost';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha);

    //VERIFICAR SE A CONEXÃO ESTÁ FUNCIONANDO
    //var_dump($pdo);

}catch(PDOException $e){


    //RETORNA UMA MENSAGEM DE ERRO NO BROWSER CASO ALGO ESTEJA ERRADO
    echo $e->getMessage();
}
