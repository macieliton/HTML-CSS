<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>bem-vindo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>bem-vindo</h1>
    <?php
    $nome = $_GET["nome"];
    $senha = $_GET["senha"];

    echo "bem-vindo $nome"
    ?>
    </main>
</body>
<p><a href="javascript:history.go(-1)">voltar a página anterior</a></p>
</html>