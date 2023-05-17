<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Controle de BIco</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="log-style.css">
</head>
<body>
    <main>
        <?php
        $nome = $_GET["nome"];
        $senha = $_GET["senha"] =! 1234;
        echo "bem vindo de volta $nome!";
        ?>
    </main>
    <br>

    <main>
        <h1>aqui onde ficarão os bicos
            já cadastrados
        </h1>
    </main>

    <form action="log.php" method="get">
    <input type="submit" value="novo bico">
    </form><br>
</body>
<p><a href="javascript:history.go(-1)">voltar a página anterior</a></p>
</html>