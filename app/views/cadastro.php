<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../public/css/global.css" />
    <link rel="stylesheet" href="../../public/css/cadastro.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css"
      integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
      integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <title>Bloco de nota</title>
  </head>
  <body>
    <div>
      <section class="row">
        <div class="col p-4 container-fluid h-100">
          <div class="d-flex justify-content-center">
            <div id="cabecario-imagem">
              <a href="#" class="text-dark"
                ><i
                  class="fa-solid fa-image"
                  style="
                    font-size: 32px;
                    border: 1px solid black;
                    border-radius: 100%;
                    padding: 0.1em;
                    background-color: white;
                  "
                ></i
              ></a>
            </div>
          </div>
          <div id="cadastro">
            <form class="w-100" id="form" action="">
              <div id="item1" class="w-100">
                <div><label for="email">Email:</label></div>
                <input
                  type="email"
                  id="email"
                  name="email"
                  required
                  class="ps-3 pe-3 pt-1 pb-1 w-100"
                  placeholder="Insira seu e-mail"
                />
              </div>
              <div id="item2" class="w-100">
                <div><label for="nome">Nome:</label></div>
                <input
                  type="text"
                  id="nome"
                  name="nome"
                  required
                  class="ps-3 pe-3 pt-1 pb-1 w-100"
                  placeholder="Insira seu nome"
                />
              </div>
              <div id="item3" class="w-100">
                <div><label for="password">Senha:</label></div>
                <input
                  type="password"
                  id="password"
                  name="password"
                  required
                  class="ps-3 pe-3 pt-1 pb-1 w-100"
                  placeholder="Insira sua senha"
                />
              </div>
              <div id="botao" class="w-100">
                <button type="submit" class="btn btn-primary w-100 mt-4">
                  Cadastrar-se
                </button>
              </div>
            </form>
          </div>
        </div>
        <div
          class="col d-flex justify-content-center align-items-center bg-primary container-fluid text-white rounded-10"
        >
          <div>
            <h1 class="text-center">Já é cachorro velho?</h1>
            <p class="mb-5" style="text-align: justify">
              Volte a usar o Bloco de Nota. Se você já tem uma conta, clique no
              botão abaixo para entrar.
            </p>
            <a href="/login">
              <button class="btn btn-light w-100">Clique aqui</button>
            </a>
          </div>
        </div>
      </section>
    </div>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"
      integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="../../backend/js/register.js"></script>
  </body>
</html>
