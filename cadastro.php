<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça Login!!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./src/heading/assets/css/header.css">
    <link rel="stylesheet" href="./src/footer/assets/css/footer.css">
    <link rel="stylesheet" href="./src/cadastro/assets/css/cadastro.css">
</head>

<body>
    <?php include './src/heading/header.php'; ?>

    <main class="box-main">
        <div class="new-users">
            <div class="tittle-box">
                <h2>Novos Clientes</h2>
                <p>Se você não possui uma conta, cadastre-se através do formulário abaixo.</p>
            </div>
            <div class="box-form">
                <form action="#" class="form-register">

                    <div class="insert-box">
                        <label for="name">Nome Completo</label>
                        <input type="text" name="name" class="input-text">
                    </div>
                    <div class="insert-box">
                        <label for="email">E-mail</label>
                        <input type="email" name="email">
                    </div>
                    <div class="insert-box">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone">
                    </div>
                    <div class="insert-box">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha">
                        <span class="icon-eye"><i class="bi bi-eye"></i></span>
                    </div>
                    <div class="insert-box">
                        <label for="senha">Confirmar senha</label>
                        <input type="password" name="confirmSenha">
                        <span class="icon-eye"><i class="bi bi-eye"></i></span>
                    </div>
                    <div class="box-button">
                        <button>Criar uma conta</button>
                    </div>

                </form>
            </div>
        </div>

        <div class="new-users">
            <div class="tittle-box">
                <h2>Clientes Cadastrados</h2>
                <p>Se você já possui uma conta cadastrada, clique no botão
                    abaixo para acessar sua conta.</p>
            </div>
            <div class="box-button">
                <a href="login.php"><button>Acessar minha conta</button></a>
            </div>
        </div>
    </main>


    <?php include './src/footer/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="./src/heading/assets/js/header.js"></script>
</body>

</html>