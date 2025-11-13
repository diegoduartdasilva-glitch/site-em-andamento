// Fundo animado via JavaScript (com efeito extra)
document.addEventListener("mousemove", (e) => {
    const x = e.clientX / window.innerWidth;
    const y = e.clientY / window.innerHeight;
    document.body.style.backgroundPosition = `${x * 100}% ${y * 100}%`;
});

// ===== Controle do Carrinho =====
const abrir = document.getElementById("abrirCarrinho");
const fechar = document.getElementById("fecharCarrinho");
const popup = document.getElementById("popupCarrinho");
const continuar = document.getElementById("continuarComprando");

abrir.addEventListener("click", () => popup.style.display = "flex");
fechar.addEventListener("click", () => popup.style.display = "none");
continuar.addEventListener("click", () => popup.style.display = "none");

// Fechar popup ao clicar fora
window.addEventListener("click", (e) => {
    if (e.target === popup) popup.style.display = "none";
});
