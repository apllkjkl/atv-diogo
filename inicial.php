<?php
// Inicializa variáveis para armazenar erros
$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém dados do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Valida os dados (exemplo simples, deve ser substituído por uma verificação mais segura)
    if ($username == 'admin' && $password == 'password123') {
        // Se os dados estiverem corretos, exibe uma mensagem de sucesso
        header("Location: sucesso.php");
        exit();
    } else {
        // Se os dados estiverem incorretos, define uma mensagem de erro
        $error_message = 'Nome de usuário ou senha incorretos!';
    }
}
?>

