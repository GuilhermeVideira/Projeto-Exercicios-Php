<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Sistema Venda </title>

    <style type="text/css">

         body {
background: #654ea3;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #eaafc8, #654ea3);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #eaafc8, #654ea3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
         }

         </style>


</head>
<body>

<div class="container">

<br>
<center>
<h1> 📲 Sistema de venda 📲 </h1>
</center>

<br><br>

<center>

<form action="calcular.php" method="post">

  <div class="input-group"><h3>

                    <div class="input-box">
                        <label for="firstname">  Nome cliente: </label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required> 
                        <label for="lastname">Sobrenome cliente:</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                    </div>
                    
                    <br><br>

                    <div class="input-box">
                        <label for="email">Nome do produto:</label>
                        <input type="text" name="nomeProduto" placeholder="Digite o nome do produto" required> 
                        <label for="number">Valor do produto:</label>
                        <input type="number" name="Valor01" placeholder="Digite o valor do produto" required>
                    </div>

                    <br>

                    <div class="input-box">
                        <label for="email">Nome do produto:</label>
                        <input type="text" name="nomeProduto02" placeholder="Digite o nome do produto" required> 
                        <label for="number">Valor do produto:</label>
                        <input type="number" name="Valor02" placeholder="Digite o valor do produto" required>
                    </div>

                    <br>
                    <div class="input-box">
                        <label for="number">Valor pago:</label>
                        <input type="number" name="'ValorPago" placeholder="Digite o valor pago" required>
                    </div>
                    </h3> 
                </div>
</center>

<br><br><br>

            <center>
            <div class="continue-button">
                    <button><a href="#">Realizar Venda</a> </button>
                </div>
                </center>

                </form>

</div>

<center>
<div style= "top: 475px; left:1050px; position: absolute;" > <img src="./imagens/imagem1.png" height="300px" width="400px"  border="10px" alt="Imagem de comércio"> </div>
<div style= "top: 470px; left:550px; position: absolute;" > <img src="./imagens/imagem2.png" height="300px" width="400px" border="10px" alt="Imagem de comércio"> </div>


<div style= "top: 830px; left:1050px; position: absolute;" > <img src="./imagens/imagem3.png" height="300px" width="400px"  border="10px" alt="Imagem de comércio"> </div>
<div style= "top: 830px; left:550px; position: absolute;" > <img src="./imagens/imagem4.jpg" height="300px" width="400px" border="10px" alt="Imagem de comércio"> </div>
</center>

</body>
</html>