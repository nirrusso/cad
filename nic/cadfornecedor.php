<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro do fornecedor</title>
    <style>
    .caixa {
      width: 400px; 
      padding: 20px; 
      background-color: #f0f0f0; 
      border: 1px solid #ccc; 
      border-radius: 10px; 
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); 
      margin: 0 auto;
      margin-top: 200px;
    }
  </style>
</head>
<body>
<div class="caixa">
<h1>cadastro de fornecedor</h1>
    <form action="processa_cadfornecedor.php" method="post">
        <label for="CodigoFornecedor">código do fornecedor:</label><br>
        <input type="text" id="CodigoFornecedor" name="CodigoFornecedor" required><br><br>

        <label for="nome">nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="cnpj">CNPJ:</label><br>
        <input type="text" id="cnpj" name="cnpj" required><br><br>

        <label for="VlultCompra">valor da última compra:</label><br>
        <input type="text" id="VlultCompra" name="VlultCompra" required><br><br>

        <label for="contato">contato:</label><br>
        <input type="text" id="contato" name="contato" required><br><br>

        <input type="submit" value="cadastrar">
    </form>
    <div></div>
    <?php
     include 'footer.php';
     ?>
</body>
</html>