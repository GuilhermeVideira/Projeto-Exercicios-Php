<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/style.css">

    <title>Vendas</title>
    
</head>

<body>

<center>
<br> <br>
<h1> Sistema Caixa </h1>

<div>

<form action="calculo.php" method="post">
      
     <h3> Digite as informações necessárias: </h3>

     <input id="firstname" type="text" name="nome" placeholder="Digite o nome do cliente" required>  <br> <br>

     <input type="number" name="vlPago"placeholder="Digite o valor total pago" required> <br><br>

     <input type="text" name="nmProduto" placeholder="Digite o nome do produto" required>
     <input type="number" name="vl01" placeholder="Digite o valor do produto" required> <br><br>
                 
     <input type="text" name="nmProduto02" placeholder="Digite o nome do produto" required>
     <input type="number" name="vl02" placeholder="Digite o valor do produto" required> <br> <br>

     <button>  Concluir venda  </button>

</form>

</center>


</div>
                   
</body>
</html>