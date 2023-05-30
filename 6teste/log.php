<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
<<<<<<< HEAD
    <title>bem-vindo</title>
=======
    <title>Controle de BIco</title>
>>>>>>> 1b9abdeac326ebfa2c10a169c7f26766e51b5b3d
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="log-style.css">
</head>
<body>
    <main>
<<<<<<< HEAD
        <h1>bem-vindo</h1>
    <?php
    $nome = $_GET["nome"];
    $senha = $_GET["senha"];

    echo "bem-vindo $nome"
    ?>
=======
        <?php
        $nome = $_GET["nome"];
        $senha = $_GET["senha"] =! 1234;
        echo "bem vindo de volta $nome!";
        ?>
>>>>>>> 1b9abdeac326ebfa2c10a169c7f26766e51b5b3d
    </main>
    <br>

    <main>
            aqui onde ficarão os bicos
            já cadastrados
    </main>

    <form action="cadBico.php" method="get">
    <input type="submit" value="novo bico">
    </form><br>
</body>
<p><a href="javascript:history.go(-1)">voltar a página anterior</a></p>
</html>