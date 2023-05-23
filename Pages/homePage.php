<?php
    if (isset($_COOKIE['ultimo_acesso'])) {
        $ultimoAcesso = $_COOKIE['ultimo_acesso'];
        $tempoDecorrido = time() - strtotime($ultimoAcesso); 
        $tempoLimite = 1; 
        
        if ($tempoDecorrido > $tempoLimite) { 
            $cores = array('#8000FF', '#121212', '#A875FF');
            $corFundo = $cores[array_rand($cores)];
            
            setcookie('ultimo_acesso', date('Y-m-d H:i:s'), time()+3600);
        } else {
            $corFundo = $_COOKIE['cor_fundo'];
        }
    } else {
        $corFundo = '#8000FF'; 
        setcookie('ultimo_acesso', date('Y-m-d H:i:s'), time()+3600);
    }

    setcookie('cor_fundo', $corFundo, time()+3600);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/home.css">
    <title>AGENDA</title>
</head>
<body>
    <div class="content">
        <div class="content-left" style="background-color: <?php echo $corFundo; ?>">
            <h1>Menu Principal</h1>
            <div class="btn">
                <a href="./formInsert.php"><button>INCLUIR</button></a>
                <a href="./formQuery.php"><button>CONSULTAR</button></a>
                <a href="./formEdit.php"><button>EDITAR</button></a>
            </div>
        </div>
        <div class="content-right">
            <img src="../Media/php.png" alt="Logo PHP">
        </div>
    </div>
</body>
</html>