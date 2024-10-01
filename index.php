<?php
// Configurações do banco de dados MySQL
$host = 'localhost';
$dbname = 'test_db';
$username = 'root';
$password = 'admin';

// Conectar ao banco de dados MySQL
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h2>Conexão bem-sucedida ao banco de dados MySQL!</h2>";
} catch (PDOException $e) {
    echo "<h2>Falha ao conectar ao banco de dados:</h2> " . $e->getMessage();
}

// Exibir uma mensagem simples
echo "<h1>Bem-vindo à minha aplicação PHP!</h1>";
?>
