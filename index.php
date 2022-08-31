<?php
    $nome = 'numero da linha';   #variavel
   echo "ola $nome"; #usar ("") para chamar variavel
// apenas se tiver html junto com o php ("?"+">")

//for
for ($i = 1; $i <= 10; $i++) {
    echo "$nome $i <br>";
}

//while
$i = 1;
while ($i <= 10) {
    echo "$nome $i <br>";
    $i++; 
}

//do while
$i = 1;
do {
    echo "$nome $i <br>";
    $i++; 
}while($i<=10);

//condicionais
if(5>10){
    echo "5 e maior que 10";
}
else
echo "5 nao e maior que 10 <br>";


//switch
 $i = 10;
switch ($i) {
    case 0:
        echo "segunda";
        break;
    case 1:
        echo "terça";
        break;
    case 2:
        echo "quarta";
        break;
    case 3:
        echo "quinta";
        break;
    case 4:
        echo "sexta";
        break;
    case 5:
        echo "sabado";
        break;
    case 6:
        echo "domingo";
        break;
    default:
    echo "numero invalido";      
}                    /* the printed value would be
                   $i before the increment
                   (post-increment) */
