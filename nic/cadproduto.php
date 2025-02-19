<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de produto</title>
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
    <h1>cadastro de produto</h1>
    <form action="cadproduto.php" method="POST">
        <label for="CodigoProduto">código do produto:</label>
        <input type="text" id="CodigoProduto" name="CodigoProduto" required><br><br>

        <label for="Descricao">descrição:</label>
        <input type="text" id="Descricao" name="Descricao" required><br><br>

        <label for="Estoque">estoque:</label>
        <input type="number" id="Estoque" name="Estoque" required><br><br>

        <label for="Preco">preço:</label>
        <input type="number" step="0.01" id="Preco" name="Preco" required><br><br>

        <input type="submit" value="cadastrar produto">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $CodigoProduto = $_POST['CodigoProduto'];
        $Descricao = $_POST['Descricao'];
        $Estoque = $_POST['Estoque'];
        $Preco = $_POST['Preco'];
        $Total = $Estoque * $Preco;

        echo "<h2>produto cadastrado</h2>";
        echo "código do produto: " . htmlspecialchars($CodigoProduto) . "<br>";
        echo "descrição: " . htmlspecialchars($Descricao) . "<br>";
        echo "estoque: " . htmlspecialchars($Estoque) . "<br>";
        echo "preço: R$ " . htmlspecialchars($Preco) . "<br>";
        echo "total: R$ " . number_format($Total, 2, ',', '.') . "<br>";

    }
    ?>
    <?php
     include 'footer.php';
     ?>
</body>
</html>
