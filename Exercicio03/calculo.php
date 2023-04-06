<link rel="stylesheet" href="./css/style.css">

 <title>Vendas</title>

 <center>
<br> <br>
<h1> Sistema Caixa </h1>

<div>

<h5>
<?php
$nm = $_POST['nome']; $vl = $_POST['vlPago'];
$nmpro = $_POST['nmProduto']; $vlpro = $_POST['vl01'];
$nmpro2 = $_POST['nmProduto02']; $vlpro2 = $_POST['vl02'];

$VlProdutos = $vlpro  + $vlpro2 ;  $troco = $vl - $VlProdutos ;
?>

<?php
echo  "Nome do cliente: $nm <br>"; 
echo "------------------------------------------------- <br> ";

echo "Produto 1: $nmpro <br>";
echo "Valor: $vlpro <br><br>";

echo "Produto 2: $nmpro2 <br>";
echo "Valor: $vlpro2 <br><br>";

echo "------------------------------------------------- <br> ";

echo "Valor total compra: $VlProdutos <br><br>";
echo "Valor troco: $troco <br><br>";

?>
</h5>