<?php
$preco =20;

if($preco >= 20){
    echo "nao posso comprar";
}
else{
    echo "posso comprar";
}

echo "<br>";

$nota =9.5;

if($nota >=7 && $nota <=10){
    echo 'aprovado';
}

else if($nota >=4){
    echo 'recuperacao';
}
else{
    echo'reprovado';
}

echo "<br>";

$contador =0;
while($contador <= 10){
    echo $contador++;
    echo "<br>";
}

for($i=10; $i <=50; $i++){
    echo "<br>";
    echo $i;
}

?>