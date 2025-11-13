<?php
$id = $_GET['id'] ?? 0;

$produtos = [
    1 => [
        "nome" => "iPhone 15 Pro",
        "preco" => 7999,
        "descricao" => "Último modelo Apple com desempenho máximo e câmera tripla de 48MP.",
        "imagem" => "imagens/iphone.jpg"
    ],

    2 => [
        "nome" => "Samsung Galaxy S24 Ultra",
        "preco" => 6499,
        "descricao" => "Tela Dynamic AMOLED 2X de 120Hz e processador Snapdragon 8 Gen 3.",
        "imagem" => "imagens/galaxys24.jpg"
    ],

    3 => [
        "nome" => "Xiaomi 14",
        "preco" => 3899,
        "descricao" => "Câmera Leica e desempenho incrível com Snapdragon 8 Gen 3.",
        "imagem" => "imagens/x14.jpg"
    ],

    4 => [
        "nome" => "Motorola Edge 50",
        "preco" => 2999,
        "descricao" => "Design elegante, tela pOLED e carregamento ultrarrápido.",
        "imagem" => "imagens/motog.jpg"
    ],

];


$produto = $produtos[$id] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title><?php echo $produto ? $produto['nome'] : "Produto não encontrado"; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Loja de Celulares</h1>
        <nav>
            <a href="index.php">Início</a>
            <a href="carrinho.php">Carrinho</a>
        </nav>
    </header>

    <main>
        <?php if ($produto): ?>
            <div class="produto-detalhe">
                <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
                <div>
                    <h2><?php echo $produto['nome']; ?></h2>
                    <p><?php echo $produto['descricao']; ?></p>
                    <h3>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></h3>
                    <a href="carrinho.php?adicionar=<?php echo $id; ?>" class="btn">Adicionar ao Carrinho</a>
                </div>
            </div>
        <?php else: ?>
            <p>Produto não encontrado.</p>
        <?php endif; ?>
    </main>

    <footer>
        <p>© 2025 Loja de Celulares</p>
    </footer>
</body>

</html>