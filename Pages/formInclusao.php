<!DOCTYPE html>
<html lang="pt-BR" translate="no">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Agenda Pessoal</title>
</head>

<body>
    <div class="container-fluid vh-100">
        <div class="d-flex flex-column justify-content-center align-items-center h-100">
            <div class="text-center">
                <h1 class="display-4">Cadastrar novo contato</h1>
            </div>
            <form method="post">
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" placeholder="Digite o nome do contato">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="text" class="form-control" placeholder="Digite o e-mail do contato">
                        </div>
                        <div class="mb-3">
                            <label for="celular" class="form-label">Celular</label>
                            <input type="text" class="form-control" placeholder="Digite o celular do contato">
                        </div>
                    </div>
                </div>

                <div class="d-grid gap-2 col-md-6 mx-auto">
                    <button type="submit" class="btn btn-success">Adicionar</button>
                    <a class="btn btn-secondary" type="button">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>