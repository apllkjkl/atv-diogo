<?php
$cssFile = "css/style.css";
session_start();
$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'password123') {
        $_SESSION['loggedin'] = true;
        header("Location: sucesso.php");
        exit();
    } else {
        $error_message = 'Nome de usuário ou senha incorretos!';
    }
}

$pageTitle = 'Login';
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?php echo $cssFile; ?>">
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="form-group">
        <label for="username">Nome de Usuário</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div class="form-group">
        <input type="submit" value="Entrar">
    </div>
    <?php if ($error_message): ?>
    <div class="error"><?php echo htmlspecialchars($error_message); ?></div>
<?php endif; ?>
<?php include 'includes/footer.php'; ?>
</form>
</body>
</html>





