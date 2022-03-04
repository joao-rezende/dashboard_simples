<!doctype html>
<html lang="pt">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - Teste</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="icon" href="img/icone.png" type="image/png" sizes="16x16">
</head>

<body style="background-color: #101010;">
    <div class="container mt-5 p-3" style="background-color: rgba(200, 200, 200, 0.2); border-radius: 7px;">
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" style="background-color: #FF7F4F;">Geral</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false" style="color: #FF7F4F;">Receitas</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false" style="color: #FF7F4F;">Despesas</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="color: #FF7F4F;">Objetivos</a>
                </div>
                <div style="position: absolute; bottom: 0;"><a href="./index.php" style="color: white; padding: 8px 16px;">Sair</a></div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h1 style="color: #FF7F4F; text-align: center; font-weight: bold; margin-bottom: 30px;">Geral</h1>

                        <div class="row">
                            <div class="col-4">
                                <div class="card text-center" style="width: 100%; background-color: rgba(150, 150, 150, 0.3); color: white;">
                                    <div class="card-body">
                                        <h5 class="card-title">Total de receitas</h5>
                                        <p class="card-text">
                                        <h1>R$ 2000,00</h1>
                                        </p>
                                        <a href="#" class="card-link" style="color: #FF7F4F;">Ver detalhes</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card text-center" style="width: 100%; background-color: rgba(150, 150, 150, 0.3); color: white;">
                                    <div class="card-body">
                                        <h5 class="card-title">Total de despesas</h5>
                                        <p class="card-text">
                                        <h1>R$ 1350,00</h1>
                                        </p>
                                        <a href="#" class="card-link" style="color: #FF7F4F;">Ver detalhes</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card text-center" style="width: 100%; background-color: rgba(150, 150, 150, 0.3); color: white;">
                                    <div class="card-body">
                                        <h5 class="card-title">Saldo mês</h5>
                                        <p class="card-text">
                                        <h1>R$ 650,00</h1>
                                        </p>
                                        <a href="#" class="card-link" style="color: #FF7F4F;">Ver detalhes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>