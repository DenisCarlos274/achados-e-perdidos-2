<?php
// Conecte-se ao banco de dados (substitua os valores de conexão com os seus)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Recupere os valores de usuário e senha do método GET
$username = $_GET['nome'];
$password = $_GET['senha'];

// Consulta SQL para verificar as credenciais do usuário
$sql = "SELECT * FROM test WHERE nome='$username' AND senha='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // O usuário está autenticado com sucesso
    session_start();
    $_SESSION['username'] = $username;
    header("Location: pagina_inicial.php"); // Redireciona para a página inicial após o login
} else {
    // Credenciais inválidas
    echo "Login falhou. Por favor, verifique suas credenciais.";
}

$conn->close();
?>
