<?php
//Pega os dados do formulario
$product_description = $_POST['product_description'];
$list_price = $_POST['list_price'];
$discount_percent = $_POST['discount_percent'];

//Calcula o disconto e o preço do disconto
$discount = $list_price * $discount_percent * 0.1;
$discount_price = $list_price - $discount;

//Aplica formatação para ser dolar e porcentagem
$list_price_formatted = "$".number_format($list_price, 2);
$discount_percent_formatted = $discount_percent."%";
$discount_formatted = "$".number_format($discount, 2);
$discount_price_formatted = "$".number_format($discount_price, 2);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div id="content">
        <h1>Product Discount Calculator</h1>

        <label for="">Product Description:</label>
        <span><?= $product_description; ?></span><br>
        
        <label for="">List Price:</label>
        <span><?= $list_price_formatted; ?></span><br>
        
        <label for="">Standard Discount:</label>
        <span><?= $discount_percent_formatted; ?></span><br>
 
        <label for="">Discount Amount:</label>
        <span><?= $discount_formatted; ?></span><br>

        <label for="">Discount Price:</label>
        <span><?= $discount_price_formatted; ?></span><br>

    </div>
    
</body>
</html>
