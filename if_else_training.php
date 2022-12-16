<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>If else praticando</title>
</head>
<body>
    <?php

    $user_possui_cartao_loja = true;
    $valor_compra = 255;

    $valor_frete = 50;
    $recebeu_desconto_frete = false;

    if ($user_possui_cartao_loja == true && $valor_compra >= 100) {
        $valor_frete = 0;
        $recebeu_desconto_frete = true;
    }
    ?>

    <h1>Detalhes do pedido</h1>    

    <p>Possui cartão da loja?</p>
    <?php if ($user_possui_cartao_loja): ?>
        <h3>SIM</h3>
    <?php else: ?>
        <h3>NÃO</h3>
    <?php endif; ?>

    <p>Valor da Compra: <?= $valor_compra; ?></p>
    
    <p>Voce recebeu desconto?</p>
    <?php if ($recebeu_desconto_frete): ?>
        <h3>SIM</h3>
    <?php else: ?>
        <h3>NÃO</h3>
    <?php endif; ?>

    <p>Valor do Frete: <?= $valor_frete; ?></p>

</body>
</html>
