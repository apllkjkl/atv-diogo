<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

$pageTitle = 'Listagem de Produtos';
include 'includes/header.php';

$produtos_file = 'data/produtos.json';
if (!file_exists($produtos_file)) {
    die('Arquivo de produtos não encontrado.');
}
$produtos = json_decode(file_get_contents($produtos_file), true);

$search = '';
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $produtos = array_filter($produtos, function($produto) use ($search) {
        return stripos($produto['name'], $search) !== false;
    });
}
?>

<h1>Listagem de Produtos</h1>
<div class="search-bar">
    <form method="get" action="">
        <input type="text" name="search" value="<?php echo htmlspecialchars($search); ?>" placeholder="Buscar produtos...">
    </form>
</div>
<div class="product-list">
    <?php foreach ($produtos as $produto): ?>
        <div class="produto-item">
            <img src="<?php echo htmlspecialchars($produto['image']); ?>" alt="<?php echo htmlspecialchars($produto['name']); ?>">
            <div class="produto-details">
                <h3><?php echo htmlspecialchars($produto['name']); ?></h3>
                <p><?php echo htmlspecialchars($produto['description']); ?></p>
                <p>Preço: R$ <?php echo number_format($produto['price'], 2, ',', '.'); ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php include 'includes/footer.php'; ?>
