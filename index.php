<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$x = 20;
$nome = "John";
$y = $x + 10;
echo "Soma é " . $y . "<br>";
echo "Meu nome é " . $nome . "<br>";
echo "Isto é PHP<br>";
$lista= [
    'Carro',
    'Moto',
    'Caminhão',
    'Evtol'
];
echo "O 3º nome da lista é " .$lista[2] ."<br>";

echo($x = 1) ? "O valor é 1<br>" : "o valor não é 1<br>"; //Condicional ternario "!" é negacao
$nomecompleto = $nome;
$nomecompleto .= isset($sobrenome) ? $sobrenome :  " "; // Verifica se a variavel está setada se não usa "else"
$nomecompleto .= $sobrenome ?? ""; // Null cao, simplicação, se a variavel existe use-a

switch($lista[1]){
    case 'Carro':
        echo "É um carro<br>";
        break;
    case 'Moto':
         echo "É uma Moto<br>";
        break;
    case 'Evtol':
        echo "É um Evtol<br>";
        break;

}

while($x<50){
    $x +=1;
} 
echo $x;




?>

</body>
</html>



