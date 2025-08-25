function marcarEstrela(id) {
    let estrela = document.getElementById(id);
    if (!estrela) {
        console.log("Não encontrado")
        return
    };

    estrela.classList.remove("text-light")
    estrela.style.color = (estrela.style.color === "gold") ? "#f8f9fa" : "gold";
}
