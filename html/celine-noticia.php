<?php
    $json = file_get_contents("http://10.60.44.46:8080/Dev_Web/Pudim/PHP/noticias/selectnoticia.php");

    $noticia=json_decode($json);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MusicNews - Céline Dion retorna ao topo das paradas</title>
</head>
<body>
    <div>
        <a href="">Notícias</a>
        <span>>></span>
        <span>Música</span>
    </div>

    <div>
        <h1><?php echo $noticia[0]->id ?></h1>
        <p>
            <?php echo $noticia[0]->conteudo ?>
        </p>
    </div>

    <div>

    </div>
    
</body>
</html>