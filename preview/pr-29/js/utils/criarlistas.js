const url = "https://68b2430aa860fe41fd60a6c1.mockapi.io/";
const endpoint = url + "items";

const area = document.getElementById("areaTitulos");
area.innerHTML = "";

let titulos = JSON.parse(localStorage.getItem("titulos")) || [];

function salvarTitulos() {
  localStorage.setItem("titulos", JSON.stringify(titulos));
}

function criarTitulo() {
  const nome = prompt("Digite o Título");
  if (!nome) return;

  if (titulos.includes(nome)) {
    alert("Este título já existe!");
    return;
  }
  titulos.push(nome);
  salvarTitulos();
  renderizarTitulo();
}


function excluirTitulo(nome) {
  if (confirm(`Deseja excluir "${nome}"?`)) {
    titulos = titulos.filter(t => t !== nome);
    localStorage.removeItem(`bloco_${nome}`);
    salvarTitulos();
    renderizarTitulo();

  }
}

// document.getElementById("btnCriar").addEventListener("click", criarTitulo);


// Fazendo um GET
fetch(endpoint)
  .then(response => {
    if (!response.ok) {
      throw new Error("Erro na requisição: " + response.status);
    }
    return response.json(); // Converte para JSON
  })
  .then(data => {
    data.forEach(nome => {
      const div = document.createElement("div");
      div.classList.add("bloco");
  
      const link = document.createElement("a");
      link.textContent = nome.descricao;
      link.href = `bloco.html?titulo=${encodeURIComponent(nome)}`;
      link.classList.add("titulo-link");
  
      const descricao = document.createElement("a");
      descricao.textContent = nome.descricao
      descricao.classList.add("descricao-link")
  
      const btnExcluir = document.createElement("button");
      btnExcluir.textContent = "Excluir";
      btnExcluir.classList.add("btn-excluir");
      btnExcluir.onclick = () => excluirTitulo(nome);
  
      div.appendChild(link);
      div.appendChild(descricao);
      div.appendChild(btnExcluir);
      area.appendChild(div);
  
    });
  })
  .catch(error => {
    console.error("Erro:", error);
  });