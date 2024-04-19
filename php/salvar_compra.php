<?php
// Iniciar a sessão para armazenar os dados do carrinho
session_start();

// Obter os dados do POST
$dados = json_decode(file_get_contents("php://input"));

// Conectar ao banco de dados
$usuario = "root";
$senha = "root";
$database = "loja";
$host = "localhost";
$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->connect_error) {
    die("Conexão com banco de dados falhou!" . $mysqli->connect_error);
}

// Salvar os dados do pedido no banco de dados
$stmt = $mysqli->prepare("INSERT INTO pedidos (carrinho, total) VALUES (?, ?)");
$stmt->bind_param("ss", $dados->carrinho, $dados->total);
$stmt->execute();
$stmt->close();

// Armazenar os dados do carrinho na sessão para uso futuro
$_SESSION["carrinho"] = $dados->carrinho;
$_SESSION["total"] = $dados->total;

// Fechar a conexão
$mysqli->close();
?>