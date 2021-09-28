<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Produtos</title>
</head>
<body>
    <?php foreach (PRODUTOS as $produto) : ?>
        <?php echo $produto['nome'] ?> <?php echo $produto['preco'] ?> <br>
    <?php endforeach; ?>
</body>
</html>