<?php
$servername = "localhost";  // Pode ser necessário substituir por outro host se não estiver rodando localmente
$username = "root";
$password = "usbw";
$database = "culinary_hub";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

echo "Conexão bem-sucedida";

// Aqui você pode realizar operações no banco de dados

// Não se esqueça de fechar a conexão quando terminar de usá-la
$conn->close();
?>
