let pickEmail = document.getElementById("email");
let pickPassword = document.getElementById("password");

function login() {
  let email = pickEmail.value;
  let password = pickPassword.value;

  console.log("Email:", email);
  console.log("Password:", password);
  window.location.href = "telaPrincipal/telaPrincipal.html";
}

let form = document.querySelector("form");
form.addEventListener("submit", function(event) {
  event.preventDefault();
  login();
});