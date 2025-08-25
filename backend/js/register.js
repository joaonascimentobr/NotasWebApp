let pickEmail = document.getElementById("email");
let pickNome = document.getElementById("nome");
let pickPassword = document.getElementById("password");

function register() {
  let email = pickEmail.value;
  let nome = pickNome.value;
  let password = pickPassword.value;

  console.log("Email:", email);
  console.log("Nome:", nome);
  console.log("Password:", password);
  window.location.href = "/notas";
}

let form = document.querySelector("form");
form.addEventListener("submit", function(event) {
  event.preventDefault();
  register();
});