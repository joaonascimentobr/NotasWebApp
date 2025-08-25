document.addEventListener('DOMContentLoaded', function () {
    const botoesExcluir = document.querySelectorAll('.butao.excluir');
    botoesExcluir.forEach(function (botao) {
        botao.addEventListener('click', function () {
            const bloco = botao.closest('.bloco');
            if (bloco) {
                bloco.remove()
            }
        });
    });
});