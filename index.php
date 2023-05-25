<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/global.css">
    <title>Agenda</title>
</head>

<body> 
    <div class="content">
        <div class="login">
            <h1 style="margin-bottom: 4rem;">Login</h1>
            <form class="form-content" action="Forms/processAllForms.php" method="POST">
                <input autocomplete="off" type="text" name="usuario" placeholder="Usuário">
                <input autocomplete="off" type="password" name="senha" placeholder="Senha">                
                <button style="background-color: #6a0dad;" class="btn-include" type="submit" value="Entrar">ENTRAR</button>
            </form>
        </div>
    </div>
</body>

</html>