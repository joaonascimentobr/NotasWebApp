<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/headerTelaPrincipal.css">
    <link rel="stylesheet" href="../../public/css/mainFooter.css">
    <link rel="stylesheet" href="../../public/css/global.css">
    <link rel="stylesheet" href="../../public/css/telaPrincipal.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css"
        integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        a {
            text-decoration: none;
        }
    </style>

    <title>Tela principal</title>
</head>

<body class="bg-dark">
    <section id="celular">
        <header>
            <div id="perfil" class="p-2">
                <i class="text-light fa-solid fa-user"></i>
            </div>
            <div id="pesquisaLista">
                <input type="text" id="pesquisaInput" class="p-1 ps-4 pe-4" placeholder="Pesquisar...">
            </div>
            <div>
                <a href="#" class="text-light p-2" id="adicionar-itens"><i class="fa-solid fa-plus"></i></a>
            </div>
        </header>
        <main class="d-flex justify-content-center container-fluid row p-1 m-0"
            style="max-height: 550px; overflow-y: scroll;">

            <!-- CONTAINER EXIBICAO -->
            <a href="exibicaoItem/exibicaoItem.html" class="col-12 p-0 m-0">
                <div class="listatext row">
                    <h1 class="text-light col-12 text-center">
                        Task
                    </h1>

                    <p class="text-light">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci officiis similique,
                        incidunt
                        minus velit soluta voluptas vero cum expedita eveniet atque molestiae enim non ea illum
                        earum
                        doloremque? Et, ab?
                    </p>

                    <div class="iconesEstrela_editar d-flex justify-content-end col-12 mb-2">
                        <a class="me-2 text-light" id="pin-1" onclick='marcarPin("pin-1")'><i
                                class="fa-solid fa-thumbtack"></i>
                        </a>
                        <a class="me-2 text-light">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        <a class="me-2 text-light" id="estrela-1" onclick='marcarEstrela("estrela-1")'>
                            <i class="fa-solid fa-star"></i>
                        </a>
                        <a class="me-2 text-light">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </div>
                </div>
            </a>

            <!-- CONTAINER EXIBICAO -->
            <a href="exibicaoItem/exibicaoItem.html" class="col-12 p-0 m-0">
                <div class="listatext row">
                    <h1 class="text-light col-12 text-center">
                        Task
                    </h1>

                    <p class="text-light">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci officiis similique,
                        incidunt
                        minus velit soluta voluptas vero cum expedita eveniet atque molestiae enim non ea illum
                        earum
                        doloremque? Et, ab?
                    </p>

                    <div class="iconesEstrela_editar d-flex justify-content-end col-12 mb-2">
                        <a class="me-2 text-light" id="pin-2" onclick='marcarPin("pin-2")'><i
                                class="fa-solid fa-thumbtack"></i>
                        </a>
                        <a class="me-2 text-light">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        <a class="me-2 text-light" id="estrela-2" onclick='marcarEstrela("estrela-2")'>
                            <i class="fa-solid fa-star"></i>
                        </a>
                        <a class="me-2 text-light">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </div>
                </div>
            </a>

            <!-- CONTAINER EXIBICAO -->
            <a href="exibicaoItem/exibicaoItem.html" class="col-12 p-0 m-0">
                <div class="listatext row">
                    <h1 class="text-light col-12 text-center">
                        Task
                    </h1>

                    <p class="text-light">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci officiis similique,
                        incidunt
                        minus velit soluta voluptas vero cum expedita eveniet atque molestiae enim non ea illum
                        earum
                        doloremque? Et, ab?
                    </p>

                    <div class="iconesEstrela_editar d-flex justify-content-end col-12 mb-2">
                        <a class="me-2 text-light" id="pin-3" onclick='marcarPin("pin-3")'><i
                                class="fa-solid fa-thumbtack"></i>
                        </a>
                        <a class="me-2 text-light">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        <a class="me-2 text-light" id="estrela-3" onclick='marcarEstrela("estrela-3")'>
                            <i class="fa-solid fa-star"></i>
                        </a>
                        <a class="me-2 text-light">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </div>
                </div>
            </a>

        </main>
    </section>

    <script src="../../backend/js/commons/marcarEstrela.js"></script>
    <script src="../../backend/js/commons/marcarPin.js"></script>

</body>

</html>