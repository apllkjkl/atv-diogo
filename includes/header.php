

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Meu Site'; ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="logout.php">Sair</a></li>
            </ul>
        </nav>
    </header>
    <main>
