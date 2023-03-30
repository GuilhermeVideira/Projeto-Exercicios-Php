<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Aula 02 </title>

</head>
<body>

<form action="" method="post">
<input type="text" name="Nome">
<input type="text" name="Sobrenome">
<input type="text" name="Cidade">
<input type="text" name="Idade">
<input type="submit" value="Enviar">
</form>
    
</body>
</html>

<?php 
$nome = $_POST['Nome'];
$sobrenome = $_POST['Sobrenome'];
$cidade = $_POST['Cidade'];
$idade = $_POST['Idade'];


echo "$nome <br>";
echo "$sobrenome <br>";
echo "$cidade <br>";
echo "$idade <br>";


?>