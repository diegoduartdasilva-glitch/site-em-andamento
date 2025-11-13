<?php
session_start();

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// Adicionar produto
if (isset($_GET['adicionar'])) {
    $id = (int) $_GET['adicionar'];
    $_SESSION['carrinho'][] = $id;
}

$produtos = [
    1 => ["nome" => "iPhone 15", "preco" => 7999],
    2 => ["nome" => "Samsung S24", "preco" => 6499],
    3 => ["nome" => "Xiaomi 14", "preco" => 3899]
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Seu Carrinho</h1>
    <nav>
        <a href="index.php">Início</a>
    </nav>
</header>

<main>
    <?php
    if (empty($_SESSION['carrinho'])) {
        echo "<p>Seu carrinho está vazio.</p>";
    } else {
        $total = 0;
        echo "<ul>";
        foreach ($_SESSION['carrinho'] as $id) {
            $p = $produtos[$id];
            echo "<li>{$p['nome']} - R$ " . number_format($p['preco'], 2, ',', '.') . "</li>";
            $total += $p['preco'];
        }
        echo "</ul>";
        echo "<h3>Total: R$ " . number_format($total, 2, ',', '.') . "</h3>";
    }
    ?>
</main>

<footer>
    <p>© 2025 Loja de Celulares</p>
</footer>
</body>
</html>
