<?php
    $json = file_get_contents("http://10.60.44.46:8080/Dev_Web/Pudim/PHP/noticias/selectsite.php");

    $titulo=json_decode($json);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo[0]->nome ?></title>
</head>
<body>

    <div>
        <header><h1>MusicNews</h1></header>
        <nav>
            <a href="index.html">Home</a>
            <a href="noticias.html">Notícias</a>
            <a href="cadastro.html">Cadastro</a>
            <a href="contatos.html">Contatos</a>
        </nav>
        <main>
            <form action="">


            </form>

        </main>
        <aside>
            <a href="estreia.html">Estreia</a>
            <a href="novos-talentos.html">Novos talentos</a>
            <a href="top-hits.html">Top hits</a>
        </aside>
        <footer>MusicNews -  O seu portal de notícias</footer>

    </div>
    
</body>
</html>