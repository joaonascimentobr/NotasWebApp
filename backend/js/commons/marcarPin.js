function marcarPin(id) {
    let pin = document.getElementById(id);
    if (!pin) {
        console.log("Não encontrado")
        return
    };

    pin.classList.remove("text-light");
    pin.style.color = (pin.style.color === "red") ? "#f8f9fa" : "red";
}