console.log("JavaScript carregado!");

document.addEventListener("DOMContentLoaded", () => {
    const botao = document.querySelector("button");

    if (botao) {
        botao.addEventListener("click", () => {
            alert("Formulário enviado!");
        });
    }
});