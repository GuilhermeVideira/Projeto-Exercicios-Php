<style type="text/css">

body {
background: #654ea3;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #eaafc8, #654ea3);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #eaafc8, #654ea3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

body{
    font-family: Arial, Helvetica, sans-serif;
}

div{
    background-color: #000000;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 80px;
    border-radius: 15px;
    color: #000000;
}


.continue-button button {
    width: 100%;
    margin-top: 2.5rem;
    border: none;
    background-color: #000000;
    padding: 0.62rem;
    border-radius: 5px;
    cursor: pointer;
}

.continue-button button:hover {
    background-color: #000000;
}

.continue-button button a {
    text-decoration: none;
    font-size: 0.93rem;
    font-weight: 500;
    color: #000000;
}

.texto01 {font-family: Arial, Helvetica, sans-serif; 
                color: white;  
                font-size: 26px}

.texto02 {font-family: Gill Sans Ultra Bold; 
                color: white;  
                font-size: 20px}    

</style>

<?php
$Nome = $_POST['firstname'];
$Sobrenome = $_POST['lastname'];
$NomeProduto01 = $_POST['nomeProduto'];
$ValorProduto01 = $_POST['Valor01'];
$NomeProduto02 = $_POST['nomeProduto02'];
$ValorProduto02 = $_POST['Valor02'];
$ValorPago = $_POST['ValorPago'];

$Soma = $ValorProduto01 + $ValorProduto02; 
$Troco =  $Soma - $ValorPago;
?>

<div>

<center>
<span class="texto01"> Nota fiscal  </span>
</center>
<br>

<span class="texto02"> 

<?php 

echo "Nome do cliente: $Nome <br>"; 
echo "Sobrenome do cliente: $Sobrenome <br>";
echo "------------------------------------------------- <br> ";
echo " Produto 01: $NomeProduto01 <br>";
echo "Valor do produto: $ValorProduto01 <br><br>";
echo "Produto 02: $NomeProduto02 <br>";
echo "Valor do produto: $ValorProduto02 <br><br>";
echo "Valor total da compra: $Soma <br><br>";
echo "Valor do troco: $Troco <br><br>";

?>

</span>

</div>
