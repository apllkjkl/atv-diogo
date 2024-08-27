<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

$pageTitle = 'Login Bem-Sucedido';
include 'includes/header.php';
?>

<h1>Login Bem-Sucedido!</h1>
<p>Você está logado.</p>
<p><a href="produtos.php">Ir para a Listagem de Produtos</a></p>

<?php include 'includes/footer.php'; ?>
