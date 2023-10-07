<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= url("assets/web/css/style.css"); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <title>DEPS</title>
</head>

<header class="header container-fluid d-flex align-items-center p-2">
    <a class="logo mx-5 m-2">River-Care</a>
    <form class="form-inline mx-5 flex-grow-1">
        <input type="text" class="form-control form-control-lg flex-grow-1 mr-2" placeholder="Buscar cidade">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-search"></i>
        </button>
    </form>
    <div class="ml-auto d-flex">
        <button class="btn btn-success btn-lg">
            <i class="fa fa-gift"></i> Doe agora mesmo!
        </button>

        <button class="btn btn-info btn-lg ml-2">
            <i class="fas fa-question-circle"></i> Com problemas? Entre em contato!
        </button>
        <a href="<?= url("login"); ?>">
            <img class="iconPerfil ml-2" src="<?= url("assets/web/images/perfil.png"); ?>" alt="">
        </a>
    </div>
</header>

<body class="d-flex flex-column align-items-center">

    <div class="container-fluid d-flex flex-wrap justify-content-between mt-5">
        <div class="m-3 col-md-6">
            <div class="col-md-12">
                <div class="d-flex flex-column">
                    <h1 class="title">
                        Ranking de Calamidade
                    </h1>
                    <div class="card2 text-danger">
                        <h4>Cidade 1</h4>
<<<<<<< HEAD:themes/web/home.php
                        <p>Nível de necessidade: 10</p>
=======
                        <p>Necessidades: 10</p>
                    </div>
                    <div class="card2">
                        <h4>Cidade 2</h4>
                        <p>Necessidades: 8</p>
                    </div>
                    <div class="card2">
                        <h4>Cidade 3</h4>
                        <p>Necessidades: 7</p>
                    </div>
                    <div class="card2">
                        <p>Nível de neceessidade: 10</p>
>>>>>>> 6a7915253b3816ea1afa580a4db62a9e4875f3cf:index.html
                    </div>
                    <div class="card2 text-danger">
                        <h4>Cidade 2</h4>
                        <p>Necessidades: 8</p>
                    </div>
                    <div class="card2 warning">
                        <h4>Cidade 3</h4>
                        <p>Necessidades: 7</p>
                    </div>
                    <div class="card2 text-warning">
                        <h4>Cidade 4</h4>
                        <p>Necessidades: 5</p>
                    </div>
                    <div class="card2 text-warning">
                        <h4>Cidade 5</h4>
                        <p>Necessidades: 4</p>
                        <p>Necessidades: 5</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-3 col-md-5">
            <div class="previsao p-3">
                <h1 class="mt-3 text-light text-center m-2">Previsão do Tempo para Porto Alegre</h1>
                <div id="weather"></div>
            </div>
<<<<<<< HEAD:themes/web/home.php
            <div class="previsao mt-5 p-3">
                <h2 class="text-center text-light">
                    Notícias
                </h2>
                <h3 class="text-light">
                    Rio Ibirapuitã volta a atingir cota de inundação em Alegrete - 28/09/2023
                </h3>
                <h5 class="text-light">Segundo a defesa civil, 266 pessoas continuam fora de casa e ainda não devem retornar.</h5>
            </div>
        </div>
    </div>
    <script src="<?= url("assets/web/scripts/apiTempo.js"); ?>"></script>
=======
            <div class="previsao mt-5">
                <h2 class="text-center">Notícias</h2>
                <div class="previsao mt-5 p-3">
                    <h2 class="text-center text-light">
                        Notícias
                    </h2>
                    <h3 class="text-light">
                        Rio Ibirapuitã volta a atingir cota de inundação em Alegrete - 28/09/2023
                    </h3>
                    <h5 class="text-light">Segundo a defesa civil, 266 pessoas continuam fora de casa e ainda não devem retornar.</h5>
                </div>

            </div>
            <script async src="apiTempo.js"></script>
>>>>>>> 6a7915253b3816ea1afa580a4db62a9e4875f3cf:index.html
</body>

</html>
