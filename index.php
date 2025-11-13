<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>DG STORE | Loja de Celulares</title>
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DG STORE - Smartphones premium com os melhores preços. iPhone, Samsung, Xiaomi e muito mais.">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ===== CABEÇALHO ===== -->

    <header class="topo">
        <div class="container header-content">
            <h1 class="logo">DG STORE</h1>

            <nav class="menu">
                <a href="#inicio">Início</a>
                <a href="#produtos">Produtos</a>
                <a href="#contato">Contato</a>
                <button class="cart-btn" onclick="openPopup('cartPopup')">🛒 Carrinho</button>
            </nav>
        </div>
    </header>


    <!-- ===== POPUP CARRINHO ===== -->
    <div class="popup" id="cartPopup">
        <div class="popup-content">
            <button class="close" onclick="closePopup('cartPopup')">×</button>
            <h2>🛒 Seu Carrinho</h2>
            <p>Nenhum item adicionado ainda.</p>
            <button class="action">Finalizar compra</button>
        </div>
    </div>

    <!-- ===== HERO SECTION ===== -->
    <section id="inicio" class="hero">
        <div class="hero-inner">
            <div class="hero-content">
                <h2 class="hero-novoslancamentos">💎 Novos Lançamentos 2025</h2>
                <p class="hero-subtitle">
                    Explore os smartphones mais desejados com <strong>descontos exclusivos</strong>.
                    Qualidade premium, design elegante e entrega rápida para todo o Brasil.
                </p>
                <div class="hero-actions">
                    <a class="btn primary" href="#produtos">Ver produtos</a>
                    <a class="btn secondary" href="#comprar">Comprar agora</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="imagens/naom_62f6567b81b53.jpg" alt="Lançamentos DG Store">
            </div>
        </div>
    </section>

    <!-- ===== SEÇÃO DE PRODUTOS ===== -->
    <main id="produtos" class="container">
        <h2 class="section-title">📱 Modelos Disponíveis</h2>

        <div class="produtos">
            <?php
            // Lista de produtos
            $produtos = [
                ["id" => 1, "nome" => "iPhone 15 Pro", "preco" => 7999, "img" => "imagens/iphone.jpg"],
                ["id" => 2, "nome" => "Samsung Galaxy S24", "preco" => 6499, "img" => "imagens/galaxys24.jpg"],
                ["id" => 3, "nome" => "Xiaomi 14", "preco" => 3899, "img" => "imagens/x14.jpg"],
                ["id" => 4, "nome" => "Motorola Edge 50", "preco" => 2999, "img" => "imagens/motog.jpg"],
            ];

            foreach ($produtos as $p) {
                echo "
                <div class='card'>
                    <img src='{$p['img']}' alt='{$p['nome']}'>
                    <div class='card-content'>
                        <h3>{$p['nome']}</h3>
                        <p class='preco'>R$ " . number_format($p['preco'], 2, ',', '.') . "</p>
                        <a href='produto.php?id={$p['id']}' class='btn small'>Ver mais</a>
                    </div>
                </div>";
            }
            ?>
        </div>
    </main>

       <!-- ===== CONTATO ===== -->
    <section id="contato">
        <h2 class="section-title">📞 Entre em Contato</h2>
        <div class="container" style="text-align:center; color:#fff; padding-bottom:60px;">
            <p>Tem alguma dúvida? Fale conosco no WhatsApp:</p>
            <a href="https://wa.me/5500000000000" target="_blank" class="btn">💬 WhatsApp</a>
        </div>
    </section>

    <!-- ===== RODAPÉ ===== -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> DG STORE - Todos os direitos reservados.</p>
    </footer>
</body>

</body>
</html>
