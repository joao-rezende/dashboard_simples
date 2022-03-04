<?php
if (!empty($_POST)) {
    $conexao = new mysqli("localhost", "root", "123", "bd");
    
    $stmt = $conexao->prepare("SELECT * FROM usuario WHERE login = ? AND senha = ?");

    $stmt->bind_param("ss", $_POST['login'], $_POST['senha']);

    $stmt->execute();
    $usuario = $stmt->fetch();

    if ($usuario) {
        header("Location: http://localhost/login/inicio.php");
        exit();
    } else {
        $erro = "Usuário e/ou senha inválido";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - Teste</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="icon" href="img/icone.png" type="image/png" sizes="16x16">
</head>

<body style="background-color: #101010;">
    <div style="background-color: rgba(200, 200, 200, 0.2); width: 400px; border-radius: 7px; padding: 40px 40px; color: white; margin: 40px auto 0; border: 1px solid rgba(100, 100, 100, 0.2);">
        <h1 style="color: #FF7F4F; text-align: center; font-weight: bold;">LOGIN</h1>
        <form action="./index.php" method="POST">
            <div class="form-group">
                <label for="login">Login:</label>
                <input type="login" name="login" class="form-control" id="login" placeholder="Login">
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
            </div>
            <?php if (isset($erro)) { ?>
                <div class="alert alert-danger">
                    <?= $erro; ?>
                </div>
            <?php } else {
                echo "<br>";
            } ?>
            <button type="submit" class="btn btn-block btn-success" style="background-color: #FF7F4F; border-color: #DF6F41;">Acessar</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>